<?php
namespace controllers;
use models\User as User;
use models\Rol as Rol;
class userController
{
    private $user;
    private $rol;
    public function __construct()
    {
        $this->user = new User;
        $this->rol = new Rol;
    }
    public function index(){}
    public function create()
    {
        if($_POST && !empty($_POST['username']) && !empty($_POST['password']) )
        {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $id_rol = $_POST['id_rol'];
            $this->user->set('username', strtolower($username));
            $this->user->set('password', strtolower(sha1($password)));
            $this->user->set('id_rol', $id_rol);
            $this->user->create();
            header('location:'.URL.'user/read');
        } else {
            return $data = $this->rol->read();
        }
    }
    public function read()
    {
        return $data = $this->user->read();
    }
    public function update($id)
    {
        if (!$_SESSION) {
            header('location:'.URL.'auth/login');
        }
        if (!$_POST) {
            $this->user->set('id', $id);
            return $data = $this->user->view();
        } else {
            $this->user->set('id', $_POST['id']);
            $this->user->set('username', $_POST['username']);
            $this->user->update();
            header('location:'.URL.'user/read');
        }

    }
    public function delete($id)
    {
        if ($_SESSION) {
            $this->user->set('id', $id);
            $this->user->delete();
            header('location:'.URL.'user/read');
        } else { header('location:'.URL.'auth/login'); }
    }
}
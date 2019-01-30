<?php
namespace controllers;
use models\Auth as Auth;
class authController
{

    private $auth;
    public function __construct()
    {
        $this->auth = new Auth;
    }
    public function login()
    {
        if ($_POST && !empty($_POST['username']) && !empty($_POST['password']) )
        {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $this->auth->set('username', strtolower($username));
            $this->auth->set('password', strtolower(sha1($password)));
            $data = $this->auth->login();
            $num_rows = mysqli_num_rows($data);
            $row = mysqli_fetch_array($data);
            if ($num_rows == 1) {
                $_SESSION['id_user'] = $row['id_user'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['id_rol'] = $row['id_rol'];
                $_SESSION['name_rol'] = $row['name'];
                header('location:'.URL.'user/read');
            }
        }
    }
    public function logout() { session_destroy(); }

}
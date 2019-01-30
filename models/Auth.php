<?php namespace models;

class Auth
{
    private $username;
    private $password;
    private $conn;
    
    public function __construct() { $this->conn = new Connection(); }
	public function set($attr, $cont) { $this->$attr = $cont; }
    public function get($attr) { return $this->$attr; }

    public function login()
    {
        $sql = "SELECT * FROM user u INNER JOIN rol USING(id_rol) WHERE u.username = '{$this->username}' AND u.password = '{$this->password}' ";
        return $this->conn->query_return($sql);
    }
    	
}
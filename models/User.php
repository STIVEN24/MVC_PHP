<?php namespace models;

class User
{
	private $id;
	private $username;
	private $password;
	private $date;
	private $id_rol;
	private $conn;

	public function __construct() { $this->conn = new Connection(); }
	public function set($attr, $cont) { $this->$attr = $cont; }
	public function get($attr){ return $this->$attr; }

	public function view()
	{
		$sql = "SELECT * FROM user u INNER JOIN rol USING(id_rol) WHERE u.id_user = '{$this->id}' ";
		$data = $this->conn->query_return($sql);
		return mysqli_fetch_assoc($data);
	}
	public function create()
	{
		$sql = "INSERT INTO user(id_user, username, password, date, id_rol)
				VALUES(null, '{$this->username}', '{$this->password}', NOW(), '{$this->id_rol}')";
		$this->conn->query_simple($sql);
	}
	public function read()
	{
		$sql = "SELECT * FROM user u INNER JOIN rol USING(id_rol)";
		return $this->conn->query_return($sql);
	}
	public function update()
	{
		$sql = "UPDATE user SET username = '{$this->username}' WHERE id_user = '{$this->id}' ";
		$this->conn->query_simple($sql);
	}
	public function delete()
	{
		$sql = "DELETE FROM user WHERE id_user = '{$this->id}'";
		$this->conn->query_simple($sql);
	}
}
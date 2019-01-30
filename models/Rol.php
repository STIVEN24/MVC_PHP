<?php
namespace models;

class Rol
{
	private $id;
	private $name;
	private $conn;

	public function __construct() { $this->conn = new Connection(); }
	public function set($attr, $cont) { $this->$attr = $cont; }
	public function get($attr){ return $this->$attr; }

	public function read()
	{
		$sql = "SELECT * FROM rol";
		return $this->conn->query_return($sql);
	}
}
?>
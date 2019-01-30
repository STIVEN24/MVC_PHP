<?php namespace models;
class Connection
{
	private $database = array(
		'host' => 'localhost',
		'user' => 'root',
		'pass' => '',
		'name' => 'mvc_prueba1'
	);
	private $conn;
	public function __construct()
	{
		$this->conn = new \mysqli(
			$this->database['host'],
			$this->database['user'],
			$this->database['pass'],
			$this->database['name']
		);
	}
	public function query_simple($sql)
	{
		$this->conn->query($sql);
	}
	public function query_return($sql)
	{
		return $this->conn->query($sql);
	}
}
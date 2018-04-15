<?php 

/**
* 
*/
class Conexion 
{
	private $host;
	private $user;
	private $password;
	private $database;

	function __construct()
	{
		$data=require_once '../app/config.php';
		$this->host=$data['host'];
		$this->user=$data['user'];
		$this->password=$data['password'];
		$this->database=$data['database'];
	}

	public function conectar()
	{
		$con = new mysqli($this->host,$this->user,$this->password,$this->database);
		if ($con->connect_errno) {
			echo "error en la conexion";
			die();
		}

		return $con;
	}


}

 ?>
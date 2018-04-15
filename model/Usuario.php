<?php 
require_once 'Conexion.php';
/**
* 
*/
class Usuario extends Conexion
{
	private $userName;
	private $password;
	private $estado;
	private $rol;


	function __construct()
	{
		parent::__construct();
	}

	public function getUsername()
	{
		return $this->userName;
	}

	public function setUserName($value)
	{
		$this->userName=$value;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function setPassword($value)
	{
		$this->password=$value;
	}

	public function getEstado()
	{
		return $this->estado;
	}

	public function setEstado($value)
	{
		$this->estado=$value;
	}

	public function getRol()
	{
		return $this->rol;
	}

	public function setRol($value)
	{
		$this->rol=$value;
	}

	public function generatePassword($pass)
	{
		return sha1($pass);
	}

	public function login($user,$pass)
	{
		$passEncode=$this->generatePassword($pass);
		$con= $this->conectar();
		$sql="SELECT u.userName as usuario, r.nombre as rol FROM usuario u 
INNER JOIN rol r on r.id=u.rol_id 
where u.estado=1 AND r.estado=1 AND u.userName='".$user."' AND u.password='".$passEncode."'";

$info=$con->query($sql);
if($info->num_rows>0){
	$data=$info->fetch_assoc();
	session_start();
	$_SESSION['ROL']=$data['rol'];
	$_SESSION['USUARIO']=$data['usuario'];
	header('location: ../views/indexUsuario.php');

}else{
	header('location: ../indexLogin.php');
}

	}

	function getAll()
{
	$con = $this->conectar();
	$sql = "SELECT * FROM usuario u WHERE u.estado=1";
	$info=$con->query($sql);
	if($info->num_rows>0){
		$data=$info;
	}else{
		$data=null;
	}
	return $data;
}


}


 ?>
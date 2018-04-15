<?php 

require_once '../model/Usuario.php';
if (isset($_POST['login'])) {
	login();
}


function login()
{
	$username=$_POST['username'];
	$password=$_POST['password'];


	$objUsuario=new Usuario();
	$objUsuario->login($username,$password);

}



 ?>
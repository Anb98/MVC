<?php 
session_start();
if($_SESSION['ROL']=='ADMIN'){

}else{
	header('location: ../indexLogin.php');
}

 ?>
<?php 
require_once '../app/validacionGeneral.php';
require_once '../controller/UsuarioController.php';

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>pagina usuarios</title>
 	 <link rel="stylesheet" type="text/css" href="../plugins/dataTable/material.min.css">
 <link rel="stylesheet" type="text/css" href="../plugins/dataTable/dataTables.material.min.css">
 <script type="text/javascript" src="../plugins/jquery/jquery-3.3.1.js"></script>
 <script type="text/javascript" src="../plugins/dataTable/jquery.dataTables.min.js"></script>
 <script type="text/javascript" src="../plugins/dataTable/dataTables.material.min.js"></script>
 </head>
 <body>
 	<h5 >Pagina usuarios</h5>
 	<table class="mdl-data-table" id="listado" cellspacing="1" width="85%">
 		<thead>
 			<th>Username</th>
 			<th>Password</th>
 		</thead>
 		<tbody>
 			<?php 
 			$objUser=new Usuario();
 			$data =$objUser->getAll();
 			foreach ($data as $value) {
 				echo'<tr>
					<td>'.$value['userName'].'</td>
					<td>'.$value['password'].'</td>
 				</tr>';
 			}


 			 ?>
 		</tbody>


 	</table>

 	
 </body>
<script type="text/javascript">
	$(document).ready(function(){
		$('#listado').DataTable();
	});
</script>

 </html>
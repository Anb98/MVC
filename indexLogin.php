<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>login</title>
</head>
<body>

	<form action="controller/UsuarioController.php" method="post" style="padding: 280px;">
		<table style="margin: auto; vertical-align: center;border: solid black 1px;padding: 10px">
			<tr>
				<td><label>Usuario</label></td>
				<td><input type="text" name="username" required></td>
			</tr>
			<tr>
				<td><label>Password</label></td>
				<td><input type="text" name="password" required></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="login"></td>
			</tr>
		</table>		
	</form>
	
</body>
</html>



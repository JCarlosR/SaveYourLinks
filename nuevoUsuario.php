<?php 
	$conexion = mysqli_connect("localhost", "root", "", "historial");
	$mail = $_POST['mail'];
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	if(empty($mail) || empty($user) || empty($pass))
		header('Location: registro.php');
	$query = "INSERT usuarios VALUES('".$mail."', '".$user."', '".$pass."')";
	if( mysqli_query($conexion, $query) )
		$msje = "El registro se realizó satisfactoriamente.";
	else $msje = "Ocurrió un problema en su registro. Verifique los datos.";
	mysqli_close($conexion);
?>
<!DOCTYPE html>
<html lang="es">	
<head>
	<meta charset="UTF-8">
	<title>SaveYourLinks - Registro</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<?php 
		$subtitulo = "Resultado del registro:";
		require_once 'header.php'; 
	?>

	<p><?= $msje ?></p>

	<script src="main.js"></script>	
	<script>funcPrincipal()</script>		
</body>
</html>

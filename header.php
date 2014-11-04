<aside class="listaColores">
	<div id="cRojo" class="cuadrito fondoRojo"></div>
	<div id="cAzulClaro" class="cuadrito fondoAzulClaro"></div>
	<div id="cVerde" class="cuadrito fondoVerde"></div>
</aside>

<nav class="menu">
	<a href="index.php" class="link">Inicio</a>
	<?php 
		session_start();
		if(isset($_SESSION['email']))
		{
			echo 'Bienvenido '.$_SESSION['nombre'];
			echo '<a href="logout.php" class="link">Salir</a>';
		}
		else
		{
			echo '<a href="registro.php" class="link">Registro</a>';
			echo '<a href="login.php" class="link" align="right">Iniciar sesión</a>';
		}		
	?>
</nav>

<header>
	<h1 class="titulo">SaveYourLinks</h1>
	<h2 class="subtitulo"><?php echo $subtitulo ?></h2>
</header>
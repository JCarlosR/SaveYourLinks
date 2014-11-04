<?php
	session_start();
	session_unset($_SESSION['email']);
	session_unset($_SESSION['nombre']);
	session_destroy();
	header("location:index.php");
?>
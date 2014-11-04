<?php
	$con = mysql_connect('localhost','root','');
	mysql_select_db('historial');
	$mail = $_POST['mail'];
	$pass = $_POST['pass'];
	$res = mysql_query("SELECT * FROM usuarios WHERE email='".$mail."' and password='".$pass."'");
	if(mysql_num_rows($res)>0)
	{
		session_start();
		$row=mysql_fetch_row($res);
		$_SESSION['email']=$row[0];
		$_SESSION['nombre']=$row[1];
		header("location:index.php");
	} else header("location:login.php");
	mysql_close($con);
?>
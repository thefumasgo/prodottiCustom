<?php
    include("chkSession.php");
    include("connection.php");

	$user = $_GET['nameUser'];
	$pwd = MD5($_GET['namePwd1']);

	//query per inserire il nuovo utente all'interno del dataBase
	$sql = "INSERT INTO users (username, password)";
	$sql .= " VALUES ('".$user."', '".$pwd."')";
	
	$conn->query($sql);
	
	header("location: index.php?msg= Registrazione effettuata");
?>
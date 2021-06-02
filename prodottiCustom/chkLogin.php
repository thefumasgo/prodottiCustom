<?php
    session_start();
    include("connection.php");

	$user = $_GET['nameUser'];
	$pwd = MD5($_GET['namePwd']);

	//creo una query per selezionare l'utente dal dataBase avente password e email uguali a quelle inserite
	$sql = "SELECT ID FROM users";
	$sql .= " WHERE username ='".$user."'";
	$sql .= " AND password ='".$pwd."'";
	
	$result = $conn->query($sql);

	//se l'utente esiste salvo l'ID, l'email e la password in delle variabili sessione e passo alla pagina list.php 
	if ($result->num_rows > 0){
	  	$row = $result->fetch_assoc();
		$_SESSION['userId'] = $row['ID'];
		$_SESSION['username'] = $user;
		header("location: list.php?msg= Login effettuata");
	}
	else {//se l'untente non è stato trovato all'interno del dataBase ritorno alla pagina di login 
	  header("location: index.php?msg= Username o password errati");
	}
?>
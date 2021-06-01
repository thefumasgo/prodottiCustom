<?php
    include("chkSession.php");
    include("connection.php");

	//$uploaddir = 'D:/andre/XAMPP/htdocs/prodottiCustom/img/';
	$uploaddir = 'C:/xampp/htdocs/prodottiCustom/img/';
	$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
    $idArticolo = $_POST['nameIDarticolo'];
	
	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
		//echo "File caricato correttamente!\n";
	} else {
		//echo "Errore upload!\n";
	}

	$img = (explode("/",$uploadfile));
	
	//query per inserire il nuovo articolo all'intenro del dataBase
	$sql = "UPDATE products SET img = '".$img[sizeof($img) - 1]."' WHERE ID = ".$idArticolo;
	
	//echo $sql;
	
	$conn->query($sql);
	
	//ritorno alla home
	header("location: list.php?msg=Immagine caricata correttamente");
?>
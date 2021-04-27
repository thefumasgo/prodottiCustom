<?php
    include("chkSession.php");
    include("connection.php");
	
	//Costruisco il path completo di destinazione
	$uploaddir = 'D:/andre/XAMPP/htdocs/prodottiCustom/img/';
	$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

	$upPdf = 'D:/andre/XAMPP/htdocs/prodottiCustom/file/';
	$upFilePdf = $upPdf . basename($_FILES['filepdf']['name']);
	
	$nome=$_POST["nameNome"];
	$data=$_POST["nameData"];
	$prezzo=$_POST["namePrezzo"];
	$categoria=$_POST["nameCategoria"];
	$potenza=$_POST["namePotenza"];
	$descrizione=$_POST["nameDesc"];
	$colorazione=$_POST["nameColorazione"];
 
	//$_FILES['userfile']['tmp_name']: Il nome del file temporaneo in cui il file caricato è salvato sul server.
	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
		echo "File caricato correttamente!\n";
	} else {
		echo "Errore upload!\n";
	}
	
	if (move_uploaded_file($_FILES['filepdf']['tmp_name'], $upFilePdf)) {
		echo "File caricato correttamente!\n";
	} else {
		echo "Errore upload!\n";
	}
	
	//seleziono solo la parte finale del percorso del file dato che verrà spostato all'interno della cartella del progetto 
	$img = (explode("/",$uploadfile));
	$pdf = (explode("/",$upFilePdf));
	
	//query per inserire il nuovo articolo all'intenro del dataBase
	$sql = "INSERT INTO products (name, characteristics, price, data, potenza, categoria, colorazione,img,file)";
	$sql .= " VALUES ('".$nome."','".$descrizione."', '".$prezzo."', '".$data."', '".$potenza."', '".$categoria."', '".$colorazione."', '".$img[sizeof($img) - 1]."', '".$pdf[sizeof($img) - 1]."')";
	
	//echo $sql;
	
	$conn->query($sql);
	
	//ritorno alla home
	header("location: list.php?msg=Articolo inserito corettamente");
?>
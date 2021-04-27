<?php
    include("chkSession.php");
    include("connection.php");
	
	$nome = $_POST["nameNome"];
	$descrizione = $_POST["nameDesc"];
	$data = $_POST["nameData"];
	$colorazione = $_POST["nameColorazione"];
	$potenza = $_POST["namePotenza"];
	$prezzo = $_POST["namePrezzo"];
	$categoria = $_POST["nameCategoria"];
	$IDarticolo = $_POST["nameIDarticolo"];
	
	//query per l'aggiornamento dei dati dell'articolo
	$sql = "UPDATE products SET 
			name = '".$nome."', 
			characteristics = '".$descrizione."', 
			price = '".$prezzo."', 
			data = '".$data."', 
			potenza = '".$potenza."', 
			categoria = '".$categoria."', 
			colorazione = '".$colorazione."' 
			WHERE ID = ".$IDarticolo;
	
	echo $sql;
    
    $conn->query($sql);
	
	//ritorno alla home
	header("location: infoProduct.php?idArticolo=".$IDarticolo);
?>
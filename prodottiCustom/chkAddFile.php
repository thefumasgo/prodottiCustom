<?php
    include("chkSession.php");
    include("connection.php");

	$upPdf = 'D:/andre/XAMPP/htdocs/prodottiCustom/file/';
	$upFilePdf = $upPdf . basename($_FILES['filepdf']['name']);
    $idArticolo = $_POST['nameIDarticolo'];
	
	if (move_uploaded_file($_FILES['filepdf']['tmp_name'], $upFilePdf)) {
		echo "File caricato correttamente!\n";
	} else {
		echo "Errore upload!\n";
	}
	$pdf = (explode("/",$upFilePdf));
	
	//query per inserire il nuovo articolo all'intenro del dataBase
	$sql = "UPDATE products SET file = '".$pdf[sizeof($pdf) - 1]."' WHERE ID = ".$idArticolo;
	
	//echo $sql;
	
	$conn->query($sql);
	
	//ritorno alla home
	header("location: list.php?msg=File caricato correttamente");
?>
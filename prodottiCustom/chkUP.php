<?php
    include("chkSession.php");
    include("connection.php");
	
	//Costruisco il path completo di destinazione
	$uploaddir = 'D:/andre/XAMPP/htdocs/prodottiCustom/img/';
	$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

	$upPdf = 'D:/andre/XAMPP/htdocs/prodottiCustom/file/';
	$upFilePdf = $upPdf . basename($_FILES['filepdf']['name']);
	
	$nome=$_POST["nameProject"];
	$idUtente=$_POST["nameIdUtente"];
	$partner=$_POST["namePartner"];
	$specifier=$_POST["nameSpecifier"];
	$leadtime=$_POST["nameLeadTime"];
	$customizationType=$_POST["nameCustomizationType"];
	$colorTemperature=$_POST["nameTemperature"];
	$cri = $_POST["nameCRI"];
	$step = $_POST["nameStep"];
	$bean = $_POST["nameBean"];
	$ip = $_POST["nameIP"];
	$power = $_POST["namePower"];
	$lumen = $_POST["nameLumen"];
	$intensity = $_POST["nameIntensity"];
	$efficacy = $_POST["nameEfficacy"];
	$dimmability = $_POST["nameDimmability"];
	$drives = $_POST["nameDrivesInc"];
	$drivesP = $_POST["nameDrivesPos"];
	$supply = $_POST["nameVoltage"];
	$supplyF = $_POST["nameFrequency"];
	$lifetime = $_POST["nameLifetime"];
	$certification = $_POST["nameCertification"];
	$colorFinish = $_POST["nameColorFinish"];
	$ref = $_POST["nameRef"];
	$competitor = $_POST["nameCompetitor"];
	$competitorP = $_POST["nameCompetitorProduct"];
	$price = $_POST["namePrice"];
	
 
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
	$sql = "INSERT INTO products (img, file, projectName, idUtente, partnersName , Specifier, leadTime,costumizationType,colorTemperature, CRI, stepMacAdam, beanAngle, ipRate, power, lumenOutput, intensity, efficacy, dimmability, driverIncluded, driverPosition, supplyVoltage, supplyFrequency, lifetime, madeIn, certification, colorFinish, reggianiRef, competitor, competitorProduct, targetPrice)";
	$sql .= " VALUES ('".$img[sizeof($img) - 1]."', '".$pdf[sizeof($pdf) - 1]."','".$nome."','".$idUtente."', '".$partner."', '".$specifier."', '".$leadtime."', '".$customizationType."', '".$colorTemperature."', '".$cri."', '".$step."', '".$bean."', '".$ip."', '".$power."', '".$lumen."', '".$intensity."', '".$efficacy."', '".$dimmability."', '".$drives."', '".$drivesP."', '".$supply."', '".$supplyF."','".$lifetime."','".$certification."','".$colorFinish."', '".$ref."', '".$competitor."', '".$competitorP."', '".$price."')";
	
	//echo $sql;
	
	$conn->query($sql);
	
	//ritorno alla home
	header("location: list.php?msg=Articolo inserito corettamente");
?>
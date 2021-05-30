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
	$beam = $_POST["nameBeam"];
	$ip = $_POST["nameIP"];
	$power = $_POST["namePower"];
	$lumen = $_POST["nameLumen"];
	$intensity = $_POST["nameIntensity"];
	$efficacy = $_POST["nameEfficacy"];
	$supply = $_POST["nameVoltage"];
	$supplyF = $_POST["nameFrequency"];
	$madeIn = $_POST["nameMade"];
	$lifetime = $_POST["nameLifeTime"];
	$certification = $_POST["nameCertification"];
	$colorFinish = $_POST["nameColorFinish"];
	$ref = $_POST["nameRef"];
	$competitor = $_POST["nameCompetitor"];
	$competitorP = $_POST["nameCompetitorProduct"];
	$price = $_POST["namePrice"];
	
	if($_POST["nameDimmability"] == "On"){
		$dimmability = 1;
	}else{
		$dimmability = 0;
	}
	
	if($_POST["nameDriversInc"] == "Yes"){
		$drivers = 1;
	}else{
		$drivers = 0;
	}
	
	if($_POST["nameDriversPos"] == "Integrated"){
		$driversP = 1;
	}else{
		$driversP = 0;
	}

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
	$sql = "INSERT INTO products (img, file, projectName, idUtente, partnersName, Specifier, leadTime, customizationType, colorTemperature, CRI, stepMacAdam, beamAngle, ipRate, power, lumenOutput, intensity, efficacy, dimmability, driverIncluded, driverPosition, supplyVoltage, supplyFrequency, lifetime, madeIn, certification, colorFinish, reggianiRef, competitor, competitorProduct, targetPrice)";
	$sql .= " VALUES ('".$img[sizeof($img) - 1]."', '".$pdf[sizeof($pdf) - 1]."','".$nome."','".$idUtente."', '".$partner."', '".$specifier."', '".$leadtime."', '".$customizationType."', '".$colorTemperature."', '".$cri."', '".$step."', '".$beam."', '".$ip."', '".$power."', '".$lumen."', '".$intensity."', '".$efficacy."', '".$dimmability."', '".$drivers."', '".$driversP."', '".$supply."', '".$supplyF."','".$lifetime."','".$madeIn."','".$certification."','".$colorFinish."', '".$ref."', '".$competitor."', '".$competitorP."', '".$price."')";
	
	//echo $sql;
	
	$conn->query($sql);
	
	//ritorno alla home
	header("location: list.php?msg=Articolo inserito corettamente");
?>
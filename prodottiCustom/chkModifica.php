<?php
    include("chkSession.php");
    include("connection.php");
	
	//Costruisco il path completo di destinazione
	$uploaddir = 'D:/andre/XAMPP/htdocs/prodottiCustom/img/';
	$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

	$upPdf = 'D:/andre/XAMPP/htdocs/prodottiCustom/file/';
	$upFilePdf = $upPdf . basename($_FILES['filepdf']['name']);
	
	$articolo = $_GET["idArticolo"];
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
	
	//query per l'aggiornamento dei dati dell'articolo
	$sql = "UPDATE products SET 
			projectName = '".$nome."', 
			idUtente = '".$idUtente."', 
			partnersName = '".$partner."', 
			Specifier = '".$specifier."', 
			leadTime = '".$leadtime."', 
			customizationType = '".$customizationType."', 
			colorTemperature = '".$colorTemperature."', 
			CRI = '".$cri."', 
			stepMacAdam = '".$step."', 
			beamAngle = '".$beam."', 
			ipRate = '".$ip."', 
			power = '".$power."', 
			lumenOutput = '".$lumen."', 
			intensity = '".$intensity."', 
			efficacy = '".$efficacy."', 
			dimmability = '".$dimmability."', 
			driverIncluded = '".$drivers."', 
			driverPosition = '".$driversP."', 
			supplyVoltage = '".$supply."', 
			supplyFrequency = '".$supplyF."', 
			lifetime = '".$lifetime."', 
			madeIn = '".$madeIn."', 
			certification = '".$certification."', 
			colorFinish = '".$colorFinish."', 
			reggianiRef = '".$ref."', 
			competitor = '".$competitor."', 
			competitorProduct = '".$competitorP."', 
			targetPrice = '".$price."'
			WHERE ID = ".$articolo;
	
	echo $sql;
    
    $conn->query($sql);
	
	//ritorno alla home
	header("location: infoProduct.php?idArticolo=".$IDarticolo);
?>
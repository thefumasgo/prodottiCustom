<?php
	include("connection.php");
	include("chkSession.php");
	
	$_SESSION['page'] = 0;
	include("navbar.php");

	//query per selezionare le ionformazioni già esistenti dell'articolo che si vuole modificare
	$sql = "SELECT * FROM products WHERE ID = ".$_GET["idArticolo"];
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class='container'>
			<div class='row'>	
						<div class='col-sm-2'>
						</div>
				<div class='col-sm-4'>
					
					<form enctype="multipart/form-data" action="chkModifica.php" method="POST">
						<?php 
							//utilizzo input type="hidden" per passare l'ID dell'articolo alla pagina successiva
							echo '<input type="hidden" name="nameIDarticolo" value="'.$_GET["idArticolo"].'">';
						?>
						
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Project name:</span>
 							</div>
  							<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nameProject" required value = "<?php echo $row['projectName']?>"> 
						</div>
						
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">ID utente:</span>
 							</div>
  							<input type="number" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nameIdUtente" required value = "<?php echo $row['idUtente']?>">
						</div>
						
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Partner's name:</span>
 							</div>
  							<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="namePartner" required value = "<?php echo $row['partnersName']?>">
						</div>
						
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Specifier:</span>
 							</div>
  							<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nameSpecifier" required value = "<?php echo $row['Specifier']?>">
						</div>
						
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Lead time:</span>
 							</div>
  							<input type="number" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nameLeadTime" required value = "<?php echo $row['leadTime']?>">
						</div>
						
                        <div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Customization type:</span>
 							</div>
                            <select name="nameCustomizationType">
                                <option>Low</option>
                                <option>Basic</option>
                                <option>High</option>
                            </select>
						</div>
						
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Color temperature: K</span>
 							</div>
                            <select name="nameTemperature">
                                <option></option>
                                <option>2700</option>
                                <option>3000</option>
                                <option>4000</option>
                            </select>
						</div>

                        <div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">CRI:</span>
 							</div>
                            <select name="nameCRI">
                                <option></option>
                                <option>&lt;80</option>
                                <option>80-90</option>
                                <option>>90</option>
                            </select>
						</div>
						
                        <div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Step MacAdam:<span>
 							</div>
                            <select name="nameStep">
                                <option></option>
                                <option>&lt;4</option>
                            </select>
						</div>
						
                        <div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Beam angle:<span>
 							</div>
                            <select name="nameBeam">
                                <option></option>
                                <option>Double asymmetric</option>
                                <option>Very wide</option>
                                <option>Very narrow</option>
                                <option>Narrow</option>
                                <option>Medium</option>
                                <option>Medium-wide</option>
                                <option>Wide</option>
                                <option>Asymmetric</option>
                                <option>Elliptical</option>
                                <option>Wall washer</option>
                                <option>Product</option>
                            </select>
						</div>
						
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">IP rate:</span>
 							</div>
                            <select name="nameIP">
                                <option></option>
                                <option>IP20</option>
                                <option>IP23</option>
                                <option>IP40</option>
                                <option>IP43</option>
                                <option>IP44</option>
                                <option>IP54</option>
                                <option>IP55</option>
                                <option>IP65</option>
                                <option>IP66</option>
                                <option>IP67</option>
                            </select>
						</div>
						
                        <div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Power: W<span>
 							</div>
                            <select name="namePower">
                                <option></option>
                                <option>&lt;10</option>
                                <option>10-25</option>
                                <option>25-50</option>
                                <option>50-70</option>
                                <option>>70</option>
                            </select>
						</div>
						
                        <div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Lumen output: lm<span>
 							</div>
                            <select name="nameLumen">
                                <option></option>
                                <option>&lt;1000</option>
                                <option>1001-2000</option>
                                <option>2001-3000</option>
                                <option>3001-4000</option>
                                <option>4001-5000</option>
                                <option>>5000</option>
                            </select>
						</div>
						
                        <div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Intensity: cd<span>
 							</div>
                            <select name="nameIntensity">
                                <option></option>
                                <option>>5000</option>
                            </select>
						</div>
					</div>	
					<div class='col-sm-4'>
						
                        <div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Efficacy: lm/W<span>
 							</div>
                            <select name="nameEfficacy">
                                <option></option>
                                <option>>80</option>
                            </select>
						</div>
                        <div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Dimmability:<span>
 							</div>
                            <select name="nameDimmability">
                                <option></option>
                                <option>On</option>
                                <option>Off</option>
                            </select>
						</div>
                        <div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Drivers included:<span>
 							</div>
                            <select name="nameDriversInc">
                                <option></option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
						</div>
						
                        <div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Drivers position:<span>
 							</div>
                            <select name="nameDriversPos">
                                <option></option>
                                <option>Integrated</option>
                                <option>Not integrated</option>
                            </select>
						</div>
						
                        <div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Supply voltage: V<span>
 							</div>
                            <select name="nameVoltage">
                                <option></option>
                                <option>220-240</option>
                            </select>
						</div>
						
                        <div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Supply frequency: Hz<span>
 							</div>
                            <select name="nameFrequency">
                                <option></option>
                                <option>50-60</option>
                            </select>
						</div>
						
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Life time: h</span>
 							</div>
  							<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nameLifeTime" required value = "<?php echo $row['lifetime']?>">
						</div>
						
                        <div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Made in:<span>
 							</div>
                            <select name="nameMade">
                                <option></option>
                                <option>China</option>
                                <option>Italy</option>
                            </select>
						</div>
						
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Certification:</span>
 							</div>
  							<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nameCertification" required value = "<?php echo $row['certification']?>">
						</div>
						
                        <div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Color finish:<span>
 							</div>
                            <select name="nameColorFinish">
                                <option></option>
                                <option>Reggiani</option>
                            </select>
						</div>
						
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Reggiani ref:</span>
 							</div>
  							<input type="number" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nameRef" required value = "<?php echo $row['reggianiRef']?>">
						</div>
						
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Competitor:</span>
 							</div>
  							<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nameCompetitor" required value = "<?php echo $row['competitor']?>">
						</div>
						
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Competitor product:</span>
 							</div>
  							<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nameCompetitorProduct" required value = "<?php echo $row['competitorProduct']?>">
						</div>
						
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Price: &euro;</span>
 							</div>
  							<input type="decimal" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="namePrice" required value = "<?php echo $row['targetPrice']?>">
						</div>
						<input type="submit" value="Conferma modifica"/>
					</form>
						<div class='col-sm-2'>
						</div>
			</div>
		</div>
	</body>
</html>
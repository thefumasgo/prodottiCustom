<?php
	include("connection.php");
	include("chkSession.php");
	
	$_SESSION['page'] = 0;
	include("navbar.php");
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div style='width: 100%; text-align: center; margin-top: 50px;'>
			<div style='width: 500px;' class='container-fluid'>
			<div class='row'>	
				<div class='col-sm-12'>
					
					<form enctype="multipart/form-data" action="chkUP.php" method="POST">
						<!--inserimento del nome del nuovo articolo-->
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Project name:</span>
 							</div>
  							<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nameProject" required> 
						</div>
						
						<!--inserimento della descrizione del nuovo articolo-->
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">ID utente:</span>
 							</div>
  							<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nameIdUtente" required>
						</div>
						
						<!--inserimento della quantità del nuovo articolo-->
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Partner's name:</span>
 							</div>
  							<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="namePartner" required>
						</div>
						
						<!--inserimento del prezzo del nuovo articolo-->
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Lead time:</span>
 							</div>
  							<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nameLeadTime" required>
						</div>
						
						<!--inserimento del prezzo del nuovo articolo-->
                        <div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Customization type:</span>
 							</div>
                            <select name="nameCustomizationType">
                                <option></option>
                                <option>Low</option>
                                <option>Basic</option>
                                <option>High</option>
                            </select>
						</div>
						
						<!--inserimento del prezzo del nuovo articolo-->
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Color temperature: K</span>
 							</div>
  							<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nameTemperature" required>
						</div>

                        <div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">CRI:</span>
 							</div>
                            <select name="nameCRI">
                                <option></option>
                                <option>>20</option>
                                <option>>60</option>
                                <option>>80</option>
                                <option>>100</option>
                            </select>
						</div>
						
                        <div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Step MacAdam:<span>
 							</div>
                            <select name="nameStep">
                                <option></option>
                                <option><2</option>
                                <option><4</option>
                                <option><6</option>
                                <option><8</option>
                            </select>
						</div>
						
                        <div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Beam angle:<span>
 							</div>
                            <select name="nameBeam">
                                <option></option>
                                <option>Non</option>
                                <option>Lo</option>
                                <option>So</option>
                            </select>
						</div>
						
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">IP rate:</span>
 							</div>
  							<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nameIP" required>
						</div>
						
                        <div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Power: W<span>
 							</div>
                            <select name="namePower">
                                <option></option>
                                <option>50</option>
                                <option>60</option>
                                <option>70</option>
                                <option>80</option>
                            </select>
						</div>
						
                        <div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Lumen output: lm<span>
 							</div>
                            <select name="nameLumen">
                                <option></option>
                                <option>>2000</option>
                                <option>>3000</option>
                                <option>>4000</option>
                                <option>>5000</option>
                            </select>
						</div>
						
                        <div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Intensity: cd<span>
 							</div>
                            <select name="nameIntesity">
                                <option></option>
                                <option>>2000</option>
                                <option>>3000</option>
                                <option>>4000</option>
                                <option>>5000</option>
                            </select>
						</div>
						
                        <div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Efficacy: lm/W<span>
 							</div>
                            <select name="nameEfficacy">
                                <option></option>
                                <option>>50</option>
                                <option>>60</option>
                                <option>>70</option>
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
                                <option>-</option>
                            </select>
						</div>
						
                        <div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Supply voltage: V<span>
 							</div>
                            <select name="nameVoltage">
                                <option></option>
                                <option>100</option>
                                <option>150</option>
                                <option>200</option>
                                <option>220</option>
                            </select>
						</div>
						
                        <div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Supply frequency: Hz<span>
 							</div>
                            <select name="nameFrequency">
                                <option></option>
                                <option>40</option>
                                <option>50</option>
                                <option>60</option>
                                <option>70</option>
                            </select>
						</div>
						
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Life time: h</span>
 							</div>
  							<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nameLifeTime" required>
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
  							<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nameCertification" required>
						</div>
						
                        <div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Color finish:<span>
 							</div>
                            <select name="nameColorFinish">
                                <option></option>
                                <option>Reggiani</option>
                                <option>-</option>
                            </select>
						</div>
						
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Reggiani ref:</span>
 							</div>
  							<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nameRef" required>
						</div>
						
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Competitor:</span>
 							</div>
  							<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nameCompetitor" required>
						</div>
						
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Competitor product:</span>
 							</div>
  							<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nameCompetitorProduct" required>
						</div>
						
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Price: &euro;</span>
 							</div>
  							<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="namePrice" required>
						</div>

						<!--inserimento dell'immagine del nuovo articolo-->
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Seleziona l'immagine:</span>
 							</div>
  							<input type="file" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="userfile" required>
						</div>

						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Selezionare file pdf:</span>
 							</div>
  							<input type="file" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="filepdf">
						</div>
						<!--bottone che porta alla pagina upConferma.php-->
						<input type="submit" value="Inserisci prodotto"/>
					</form>
				</div>
			</div>
		</div>
		</div>
	</body>
</html>
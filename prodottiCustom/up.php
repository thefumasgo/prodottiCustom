<?php
	include("connection.php");
	include("chkSession.php");
	
	$_SESSION['pag'] = 0;
	include("navbar.php");
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script>
			function chkReggiani(){
				if(document.getElementById("colorFinish").value == "Reggiani")
					document.getElementById("reggianiRef").disabled = false;
				else
					document.getElementById("reggianiRef").disabled = true;
			}
		</script>
	</head>
	<body>
			<br>
			<div class='container'>
			<div class='row'>	
				<div class='col-sm-2'>
				</div>
				<div class='col-sm-4'>
					
					<form enctype="multipart/form-data" action="chkUP.php" method="POST">
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Project name:</span>
 							</div>
  							<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nameProject" required> 
						</div>
						
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">ID utente:</span>
 							</div>
  							<input type="number" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nameIdUtente" required>
						</div>
						
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Partner's name:</span>
 							</div>
  							<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="namePartner" required>
						</div>
						
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Specifier:</span>
 							</div>
							 <select name="nameSpecifier">
								<option></option>
                                <option>Standard</option>
                                <option>Warm Dimming</option>
                                <option>Tunable White</option>
								<option>1700K</option>
								<option>2200K</option>
								<option>2700K</option>
								<option>3000K</option>
								<option>3500K</option>
								<option>4000K</option>
                            </select>
						</div>
						
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Lead time:</span>
 							</div>
							<select name="nameLeadTime">
                                <option></option>
                                <option>2-4 settimane</option>
                                <option>4-6 settimane</option>
								<option>6-8 settimane</option>
								<option>10-12 settimane</option>
                            </select>
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
								<option>Standard</option>
                                <option>&lt;80</option>
								<option>&lt;85</option>
								<option>&lt;90</option>
								<option>&lt;95</option>
								<option>&lt;98</option>
                            </select>
						</div>
						
                        <div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Step MacAdam:<span>
 							</div>
                            <select name="nameStep">
                                <option></option>
                                <option>&lt;2</option>
								<option>&lt;3</option>
								<option>&lt;4</option>
                            </select>
						</div>
						
                        <div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Beam angle:<span>
 							</div>
                            <select name="nameBeam">
                                <option></option>
                                <option>Standard</option>
                                <option>&lt;10°</option>
                                <option>11-20°</option>
                                <option>21-30°</option>
                                <option>31-40°</option>
                                <option>41-50°</option>
                                <option>>50°</option>
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
                                <option>10-20</option>
                                <option>21-30</option>
                                <option>31-40</option>
								<option>41-50</option>
                                <option>>51</option>
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
                                <option>> 2500</option>
								<option>> 3000</option>
								<option>> 5000</option>
								<option>> 7000</option>
								<option>> 10000</option>
								<option>> 15000</option>
								<option>> 20000</option>
								<option>> 25000</option>
                            </select>
						</div>
						
                        <div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Efficacy: lm/W<span>
 							</div>
                            <select name="nameEfficacy">
                                <option></option>
                                <option>>60</option>
								<option>>70</option>
								<option>>80</option>
								<option>>90</option>
								<option>>100</option>
                            </select>
						</div>
					</div>	
					<div class='col-sm-4'>
                        <div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Dimmability:<span>
 							</div>
                            <select name="nameDimmability">
                                <option></option>
                                <option>Standard</option>
                                <option>Bluetooth</option>
								<option>DALI</option>
								<option>DIMM 1-10V</option>
								<option>Dimmer 1-10V / DALI / PUSH</option>
								<option>Dimmer on board</option>
								<option>Driver non inclusi</option>
								<option>On-Off</option>
								<option>Taglio di fase</option>
								<option>Other Dimmability</option>
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
                                <option>220V - 240V</option>
								<option>120V - 277V</option>
								<option>120V</option>
                            </select>
						</div>
						
                        <div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Supply frequency: Hz<span>
 							</div>
                            <select name="nameFrequency">
                                <option></option>
                                <option>50Hz - 60Hz </option>
								<option>60Hz </option>
                            </select>
						</div>
						
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Life time: h</span>
 							</div>
							<select name="nameLifeTime">
                                <option></option>
                                <option>L90 B10 50.000h</option>
                                <option>L90 B50 50.000h</option>
								<option>L80 B10 50.000h</option>
								<option>L80 B50 50.000h</option>
								<option>L70 B10 50.000h</option>
								<option>L70 B50 50.000h</option>
                            </select>
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
                            <select id="colorFinish" name="nameColorFinish" onchange="chkReggiani()">
                                <option></option>
                                <option>Reggiani</option>
								<option>Other</option>
                            </select>
						</div>
						
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Reggiani ref:</span>
 							</div>
  							<input id="reggianiRef" type="number" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nameRef" required disabled>
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
							<select id="idPrice" name="namePrice" onchange="chkReggiani()">
                                <option></option>
                                <option> &lt;25.000€ </option>
								<option> 25.000 - 50.000 €</option>
								<option> 50.000 - 200.000 €</option>
								<option> >200.000 € </option>
                            </select>
						</div>

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
						<input type="submit" value="Inserisci prodotto"/>
						</div>
						<div class='col-sm-2'>
						</div>
					</form>
			</div>
		</div>
	</body>
</html>
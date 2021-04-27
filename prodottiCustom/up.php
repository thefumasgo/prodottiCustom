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
		<div class='container-fluid'>
			<div class='row'>	
				<div class='col-sm-12'>
					
					<form enctype="multipart/form-data" action="chkUP.php" method="POST">
						<!--inserimento del nome del nuovo articolo-->
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Nome:</span>
 							</div>
  							<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nameNome" required> 
						</div>
						
						<!--inserimento della descrizione del nuovo articolo-->
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Descrizione:</span>
 							</div>
  							<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nameDesc" required>
						</div>
						
						<!--inserimento della quantità del nuovo articolo-->
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Data:</span>
 							</div>
  							<input type="date" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nameData" required>
						</div>
						
						<!--inserimento del prezzo del nuovo articolo-->
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Colorazione</span>
 							</div>
  							<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nameColorazione" required>
						</div>
						
						<!--inserimento del prezzo del nuovo articolo-->
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Potenza</span>
 							</div>
  							<input type="number" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="namePotenza" required>
						</div>
						
						<!--inserimento del prezzo del nuovo articolo-->
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Prezzo: &#8364</span>
 							</div>
  							<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="namePrezzo" required>
						</div>

                        <div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Categoria</span>
 							</div>
                            <select name="nameCategoria">
                                <option>Interni</option>
                                <option>Esterni</option>
                                <option>Ottiche</option>
                                <option>Binarie canaline</option>
                            </select>
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
	</body>
</html>
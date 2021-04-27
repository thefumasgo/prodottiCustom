<?php
	include("connection.php");
	include("chkSession.php");
	
	$_SESSION['page'] = 0;
	include("navbar.php");

	//query per selezionare le ionformazioni già esistenti dell'articolo che si vuole modificare
	$sql = "SELECT name,characteristics,price,data,potenza,categoria,colorazione FROM products WHERE ID = ".$_GET["idArticolo"];
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
?>

<hmtl>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class='container-fluid'>
			<div class='row'>	
				<div class='col-sm-12'>
					
					<form enctype="multipart/form-data" action="chkModifica.php" method="POST">
						<?php 
							//utilizzo input type="hidden" per passare l'ID dell'articolo alla pagina successiva
							echo '<input type="hidden" name="nameIDarticolo" value="'.$_GET["idArticolo"].'">';
						?>
						<!--inserimento del nome dell'articolo-->
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Nome:</span>
 							</div>
  							<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nameNome" required value = "<?php echo $row['name']?>"> 
						</div>
						
						<!--inserimento della descrizione dell'articolo-->
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Descrizione:</span>
 							</div>
  							<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nameDesc" required value = "<?php echo $row['characteristics']?>">
						</div>
						
						<!--inserimento della descrizione dell'articolo-->
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Data:</span>
 							</div>
  							<input type="date" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nameData" required value = "<?php echo $row['data']?>">
						</div>
						
						<!--inserimento della descrizione dell'articolo-->
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Colorazione:</span>
 							</div>
  							<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nameColorazione" required value = "<?php echo $row['colorazione']?>">
						</div>

						<!--inserimento della descrizione dell'articolo-->
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Potenza:</span>
 							</div>
  							<input type="number" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="namePotenza" required value = "<?php echo $row['potenza']?>">
						</div>
						
						<!--inserimento del prezzo dell'articolo-->
						<div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Prezzo: &#8364</span>
 							</div>
  							<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="namePrezzo" required value = "<?php echo $row['price']?>">
						</div>

                        <div class="input-group input-group-sm mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-sm">Categoria</span>
 							</div>
                            <select name="nameCategoria" value="<?php echo $row['categoria']?>">
                                <option>Interni</option>
                                <option>Esterni</option>
                                <option>Ottiche</option>
                                <option>Binarie canaline</option>
                            </select>
						</div>
						<!--bottone che porta alla pagina confModifica.php-->
						<input type="submit" value="Conferma modifica"/>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
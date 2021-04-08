<?php
	include("chkSession.php");
    include("connection.php");
	include("navbar.php");

    //se non esiste crea la variabile $nome per applicare il filtro sugli articoli
	if(!empty($_GET['nameFilter']))
        $name = $_GET['nameFilter'];
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="container"> <!--fluid-->
			<div class="row">
				<div class="col-sm-12">
					<h1>List of products</h1>
				</div>
			</div>
			
		<?php
			/*creo la query e se esiste la variabile $nome seleziono sono gli articoli aventi la variabile all'interno del nome, altrimenti li 
			visualizzo tutti*/
			$sql = "SELECT ID,name,characteristics,price,img FROM products WHERE";
			if(empty($name) || $name == "null")
				$sql .= " 1 ORDER BY name";
			else 
				$sql .= " name LIKE '%".$name. "%' ORDER BY name";
				
			$result = $conn->query($sql);

			$count = 4;	
            
			if ($result->num_rows > 0){
				//scorro tutti gli articoli selezionati e li visualizzo in una tabella
				while($row = $result->fetch_assoc()){
					$idCombo = 'idQuantita'.$row["ID"];
					$idArticolo = $row["ID"];
					
					if($count % 4 == 0 && $count != 4){
						echo '</div>';
					}

					if($count % 4 == 0){
						echo '<div class="row">';
					}

					//visualizzo l'immagine, il nome e il prezzo dell'articolo
					echo '<div class="col-sm-3">';
					
					echo '<div class="">';
					echo "<a href = 'infoProduct.php?idArticolo=".$row["ID"]."'><img class='imgProducts' src='".$_SESSION["imgFolder"].$row["img"]."'></br>";
					echo '</div>';
					
					echo "<a href = 'infoProduct.php?idArticolo=".$row["ID"]."' class=''>".$row["name"]."</a>
							".$row["price"]." €</br>";
					echo '</div>';	
					
					$count++;
				}
			}
			echo '</div>';
			echo '</div>';
		?>
	</body>
</html>
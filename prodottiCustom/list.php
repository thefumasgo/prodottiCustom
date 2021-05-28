<?php
	include("chkSession.php");
    include("connection.php");
	include("navbar.php");

    //se non esiste crea la variabile $nome per applicare il filtro sugli articoli

	if(!empty($_GET['nameFilter'])){
		$_SESSION['name'] = $_GET['nameFilter'];
	}else{
		$_SESSION['name']=null;
	}

		
	if(!empty($_GET['cat'])){
		$_SESSION['cat'] = $_GET['cat'];
	}else{
		$_SESSION['cat']=null;
	}

	if(!empty($_GET['min']) && !empty($_GET['max'])){
		$potMin = $_GET['min'];
		$potMax = $_GET['max'];
	}else{
		$potMin = null;
		$potMax = null;
	}
	
	$name = $_SESSION['name'];
	$cat = $_SESSION['cat'];
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
			$sql = "SELECT * FROM products WHERE";
			if(!empty($name) || !$name == null){
				$sql .= " name LIKE '%".$name. "%' 
				OR characteristics LIKE '%".$name. "%'
				OR colorazione LIKE '%".$name. "%'
				OR categoria LIKE '%".$name. "%'
				AND";
			}
			
			if(!empty($cat) || !$cat == null){
				$sql .= " categoria='".$cat."' AND";
			}
			
			if(!empty($potMin) || !$potMin == null && !empty($potMax) || !$potMax == null){
				$sql .= " potenza BETWEEN '".$potMin."' AND '".$potMax."' AND";
			}

			$sql .= " 1 ORDER BY projectName";
				
			echo $sql;

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
					
					echo "<a href = 'infoProduct.php?idArticolo=".$row["ID"]."' class=''>".$row["projectName"]."</a>
							".$row["targetPrice"]." €</br>";
					echo '</div>';	
					
					$count++;
				}
			}
			echo '</div>';
			echo '</div>';
		?>
	</body>
</html>
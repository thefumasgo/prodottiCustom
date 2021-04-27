<?php
	include("chkSession.php");
    include("connection.php");
	include("navbar.php");
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
    <body>
		<div class="container">
			<div class="row">
					<div class="col-sm-6">
		<?php
			//query per selezionare tutte le informazioni di un determinato articolo scelto tramite l'ID
			$idArticolo = $_GET['idArticolo'];
			$sql = "SELECT * FROM products WHERE ID = ".$idArticolo;
			$result = $conn->query($sql);

            if ($result->num_rows > 0)
			while($row = $result->fetch_assoc()){
                echo "<img class='imgProduct' src='".$_SESSION['imgFolder'].$row["img"]."'/></br>";
				echo '<a href="modificaImg.php?idArticolo='.$idArticolo.'">Modifica immagine prodotto</a></br>';
				echo '</div>';
				echo '<div class="col-sm-6">';
				echo '<table class="tableProduct"><tr>';
				echo "<td>Name: </td><td>".$row["name"].'</td></tr>';
				echo "<tr><td>Characteristics: </td><td>".$row["characteristics"].'</td></tr>';
				echo "<tr><td>Power: </td><td>".$row["potenza"].'</td></tr>';
				echo "<tr><td>Category: </td><td>".$row["categoria"].'</td></tr>';
				echo "<tr><td>Coloring: </td><td>".$row["colorazione"].'</td></tr>';
				echo "<tr><td>Price: </td><td>".$row["price"]." €</td></tr>";
				if(!$row["file"] == null){
					echo "<tr><td>File: </td><td><a href='download.php?file=".$row["file"]."&idArt=".$idArticolo."' target='_thapa'>download</a></td></tr>";
				}
                echo '</table>';
				echo '<a href="modifica.php?idArticolo='.$idArticolo.'">Modifica articolo</a></br>';
				if($row["file"] == null){
					echo '<a href="addFile.php?idArticolo='.$idArticolo.'">Aggiungi file .pdf</a>';
				}else{
					echo '<a href="addFile.php?idArticolo='.$idArticolo.'">Modifica file .pdf</a>';
				}
			}
        ?>
				</div> 
            </div> 
       </div> 
    </body>
</html>
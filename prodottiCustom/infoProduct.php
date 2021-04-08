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
                echo "<img class='imgProduct' src='".$_SESSION['imgFolder'].$row["img"]."'/>";
				echo '</div>';
				echo '<div class="col-sm-6">';
				echo '<table class="tableProduct"><tr>';
				echo "<td>Name: </td><td>".$row["name"].'</td></tr>';
				echo "<tr><td>Characteristics: </td><td>".$row["characteristics"].'</td></tr>';
				echo "<tr><td>Price: </td><td>".$row["price"]." €</td></tr>";
                echo '</table>';
			}
        ?>
                </div> 
            </div> 
       </div> 
    </body>
</html>
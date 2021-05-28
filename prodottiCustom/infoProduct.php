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
				echo "<tr><td>Project name: </td><td>".$row["projectName"]."</td></tr>";
				echo "<tr><td>Partners name: </td><td>".$row["partnersName"]."</td></tr>";
				echo "<tr><td>Specifier: </td><td>".$row["Specifier"]."</td></tr>";
				echo "<tr><td>Lead time: </td><td>".$row["leadTime"]."</td></tr>";
				echo "<tr><td>Costumization type: </td><td>".$row["costumizationTipe"]."</td></tr>";
				echo "<tr><td>Color temperature: </td><td>".$row["colorTemperature"]." K</td></tr>";
				echo "<tr><td>CRI: </td><td>".$row["CRI"]."</td></tr>";
				echo "<tr><td>Step MacAdam: </td><td>".$row["stepMacAdam"]."</td></tr>";
				echo "<tr><td>Beam angle: </td><td>".$row["beamAngle"]."</td></tr>";
				echo "<tr><td>IP rate: </td><td>".$row["ipRate"]."</td></tr>";
				echo "<tr><td>Power: </td><td>".$row["power"]." W</td></tr>";
				echo "<tr><td>Lumen output: </td><td>".$row["lumenOutput"]." lm</td></tr>";
				echo "<tr><td>Intensity: </td><td>".$row["intensity"]." cd</td></tr>";
				echo "<tr><td>Efficacy: </td><td>".$row["efficacy"]." lm/W</td></tr>";
				echo "<tr><td>Dimmability: </td><td>".$row["dimmability"]."</td></tr>";
				echo "<tr><td>Driver included: </td><td>".$row["driverIncluded"]."</td></tr>";
				echo "<tr><td>Driver position: </td><td>".$row["driverPosition"]."</td></tr>";
				echo "<tr><td>Supply voltage: </td><td>".$row["supplyVoltage"]." V</td></tr>";
				echo "<tr><td>Supply frequency: </td><td>".$row["supplyFrequency"]." Hz</td></tr>";
				echo "<tr><td>Life time: </td><td>".$row["lifetime"]." h</td></tr>";
				echo "<tr><td>Made in: </td><td>".$row["madeIn"]."</td></tr>";
				echo "<tr><td>Certification: </td><td>".$row["certification"]."</td></tr>";
				echo "<tr><td>Color finish: </td><td>".$row["colorFinish"]."</td></tr>";
				echo "<tr><td>Reggiani ref.: </td><td>".$row["reggianiRef"]."</td></tr>";
				echo "<tr><td>Competitor: </td><td>".$row["competitor"]."</td></tr>";
				echo "<tr><td>Competitor product: </td><td>".$row["competitorProduct"]."</td></tr>";
				echo "<tr><td>Target price: </td><td>".$row["targetPrice"]." €</td></tr>";
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
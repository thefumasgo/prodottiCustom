<?php
	include("chkSession.php");
    include("connection.php");
	include("navbar.php");

	if(!empty($_GET['nameFilter'])){
		$name = $_GET['nameFilter'];
	}else{
		$name = null;
	}

	if(!empty($_GET['cust'])){
		$cust = $_GET['cust'];
	}else{
		$cust = null;
	}

	if(!empty($_GET['val'])){
		$power = $_GET['val'];
	}else{
		$power = null;
	}

	if(!empty($_GET['temp'])){
		$temp = $_GET['temp'];
	}else{
		$temp = null;
	}
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="container-fluid"> <!--fluid-->
			<div class="row">
				<div class="col-2"></div>
				<div class="col">
					<h1>List of products</h1>
				</div>
			</div>
			
		<?php
			$sql = "SELECT * FROM products WHERE";
			if(!empty($name) || !$name == null){
				$sql .= " projectName LIKE '%".$name. "%'
				OR partnersName LIKE '%".$name. "%'
				OR Specifier LIKE '%".$name. "%'
				OR lifetime LIKE '%".$name. "%'
				OR madeIn LIKE '%".$name. "%'
				OR colorFinish LIKE '%".$name. "%'
				OR competitor LIKE '%".$name. "%'
				OR competitorProduct LIKE '%".$name. "%'
				AND";
			}
			
			if(!empty($cust) || !$cust == null){
				$sql .= " customizationType='".$cust."' AND";
			}
			
			if(!empty($power) || !$power == null){
				$sql .= " power = '".$power."' AND";
			}
			
			if(!empty($temp) || !$temp == null){
				$sql .= " colorTemperature = '".$temp."' AND";
			}

			$sql .= " 1 ORDER BY projectName";
				
			//echo $sql;

			$result = $conn->query($sql);

			$count = 4;	
            
			if ($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					$idCombo = 'idQuantita'.$row["ID"];
					$idArticolo = $row["ID"];
					
					if($count % 4 == 0 && $count != 4){
						echo '</div>';
					}

					if($count % 4 == 0){
						echo '<div class="row"><div class="col-2"></div>';
					}

					echo '<div class="col-2">';
					echo "<a href = 'infoProduct.php?idArticolo=".$row["ID"]."'><img class='imgProducts' src='".$_SESSION["imgFolder"].$row["img"]."'></br>";
					echo "<a href = 'infoProduct.php?idArticolo=".$row["ID"]."'>".$row["projectName"]."</a><br>".$row["targetPrice"]." €</br>";
					echo '</div>';	
					
					$count++;
				}
			}
			echo '</div>';
		?>
		</div>
	</body>
</html>

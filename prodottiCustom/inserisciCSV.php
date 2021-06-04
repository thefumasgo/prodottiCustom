<?php
	include("connection.php");
	include("chkSession.php");
	
	$_SESSION['pag'] = 0;
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
                    <form enctype="multipart/form-data" action="chkInserisciCSV.php" method="POST">
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Selezionare file csv:</span>
                            </div>
                            <input type="file" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="filecsv">
                        </div>
                        <input type="submit" value="Carica file"/>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
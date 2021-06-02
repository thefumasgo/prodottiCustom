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
                    <form enctype="multipart/form-data" action="chkAddFile.php" method="POST">
						<?php 
							//utilizzo input type="hidden" per passare l'ID dell'articolo alla pagina successiva
							echo '<input type="hidden" name="nameIDarticolo" value="'.$_GET["idArticolo"].'">';
						?>
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Selezionare file pdf:</span>
                            </div>
                            <input type="file" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="filepdf">
                        </div>
                        <input type="submit" value="Carica file"/>
                    </from>
                </div>
            </div>
        </div>
    </body>
</html>
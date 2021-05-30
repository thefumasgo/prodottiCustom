<?php
    $idArt =  $_GET['idArt'];
    
    // definisco una variabile con il percorso alla cartella
    // in cui sono archiviati i file
    $dir = "file/";
    
    // Recupero il nome del file dalla querystring
    // e lo accodo al percorso della cartella del download
    $fn = (isset($_GET['file']) ? $_GET['file'] : false);
    
    $file = $dir . $fn;
    
    // verifico che il file esista
    if (!file_exists($file))
    {
      // se non esiste stampo un errore
      echo "Il file non esiste!";
    }else{
      // Se il file esiste...
      // Imposto gli header della pagina per forzare il download del file
      header("Cache-Control: public");
      header("Content-Description: File Transfer");
      header("Content-Disposition: attachment; filename= " . $file);
      header("Content-Transfer-Encoding: binary");
      // Leggo il contenuto del file
      readfile($file);
    }


?>
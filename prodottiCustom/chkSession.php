<?php
	session_start();
    if(!isset($_SESSION['userId']))
	{
        session_unset();
        session_destroy();
        header("location: index.php?msg=Sessione scaduta");
    }

    $_SESSION['imgFolder'] = 'img/'; 
?>
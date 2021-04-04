<?php
	if(!empty($_SESSION['username'])){
        session_start();
    }

    $_SESSION['imgFolder'] = 'img/';
?>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbName = "custom";
	$conn = new mysqli($servername, $username, $password, $dbName);
	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	}
?>
<?php
	
	require("config.php");

	// Create connection
	$sqlconnection = new mysqli($servername, $username, $password,$dbname);

	// Check connection
	if ($sqlconnection->connect_error) {
    	die("Fallo en la conexion a la base de datos: " . $sqlconnection->connect_error);
	}
	
?>
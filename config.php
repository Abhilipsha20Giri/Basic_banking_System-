<?php

	$server = "localhost";
    	$username = "root";
    	$password = "";
    	$dbname = "banking_system";

	$conn = mysqli_connect($server, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
<?php

// Connecting to Database
$dbServername ="localhost";
$dbUsername = "ancora_admin";
$dbPassword = "ancorapwd";
$dbName = "ancora";

$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName );
if($conn->connect_error){
		echo "Failed:" . $conn->connect_error;
	}
?>
<?php 
	$server = 'localhost'; //$server = '127.0.0.1';
	$username = 'root';
	$password = ''; //$password = '';
	$database = '18php06_learn';

	$conn = mysqli_connect($server, $username, $password, $database);

	if (mysqli_connect_errno()) {
	  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	mysqli_set_charset($conn, "utf8");
?>
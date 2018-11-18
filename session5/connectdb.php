<?php
	$server = 'localhost'; //$server = '127.0.0.1';
	$username = 'root';
	$password = ''; //$password = '';\
	$database = '18php04_2';
	$connect = mysqli_connect($server, $username, $password, $database);

	//check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>
<?php
	class connectDB {
		public $conn;
		class 
		function connect(){
			$server = 'localhost'; //$server = '127.0.0.1';
			$username = 'root';
			$password = ''; //$password = '';\
			$database = '18php04_shop';
			$conn = mysqli_connect($server, $username, $password, $database);
			return $conn;
		}
	}
?>
<?php 
	class ConnectDB {
		function connect(){
			$server = 'localhost'; //$server = '127.0.0.1';
			$username = 'root';
			$password = ''; //$password = '';
			$database = '18php04_manager';
			$this->conn = mysqli_connect($server, $username, $password, $database);
			return $this->conn;
		}
	}
?>
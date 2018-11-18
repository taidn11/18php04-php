<?php 
	class User {
		public $conn;
		function __construct() {
			$connect = new ConnectDB();
			$this->conn = $connect->connect();
		}
		function InsertUser($name ,$username, $password, $role, $avatar){
			$sql = "INSERT INTO users (name, username, password, role, avatar) VALUES ('$name', '$username', '$password', '$role', '$avatar')";
			return mysqli_query($this->conn, $sql);
		}
		function getListUser(){
			$sql = "SELECT * FROM users";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		function deleteUser($id){
			$sql = "DELETE FROM users WHERE id = $id";
			return mysqli_query($this->conn, $sql);
		}
		function getInfoUser($id){
			$sql = "SELECT * FROM users WHERE id = $id";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		function EditUser($id, $name, $username, $avatar){
			$sql = "UPDATE users SET name = '$name' , username = '$username' , avatar = '$avatar'  WHERE id = $id";
			return $result = mysqli_query($this->conn, $sql);
		}
		function checkLogin($username, $password) {
			$sql = "SELECT * FROM users WHERE username = '$username'
			AND password = '$password'";
			$result = mysqli_query($this->conn, $sql);
			$role = '';
			while ($row = $result->fetch_assoc()) {
				$role = $row['role'];
			}
			return $role;
		}
	}

?>
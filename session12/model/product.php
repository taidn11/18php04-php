<?php 
	class Product {
		public $conn;
		function __construct() {
			$connect = new ConnectDB();
			$this->conn = $connect->connect();
		}
	function InsertProduct($name, $image){
		$sql = "INSERT INTO products (name, image) VALUES ('$name', '$image')";
		return mysqli_query($this->conn, $sql);
	}
	function getListProduct(){
		$sql = "SELECT * FROM products";
		$result = mysqli_query($this->conn, $sql);
		return $result;
	}
	function deleteProduct($id){
		$sql = "DELETE FROM products WHERE id = $id";
		return mysqli_query($this->conn, $sql);
	}
}
?>
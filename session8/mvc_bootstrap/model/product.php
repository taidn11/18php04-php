<?php 
	
	class Products extends ConnectDB
	{
		function Insertproduct($name, $username, $password)
		{
			$sql = "INSERT INTO products (name, price, image) VALUES ('$name', '$price', 'image')";
			return mysqli_query($this->conn, $sql);
		}
	}
?>
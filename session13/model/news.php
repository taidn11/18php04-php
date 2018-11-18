<?php 
	class News {
		public $conn;
		function __construct() {
			$connect = new ConnectDB();
			$this->conn = $connect->connect();
		}
		function InsertNews($title , $image, $description, $content, $create){
			$sql = "INSERT INTO news (title, image, description, content, create) VALUES ('$title', '$image', '$description', '$content', '$create')";
			return mysqli_query($this->conn, $sql);
		}
}
?>
<?php 
	include 'model/user.php';
	class Controller {
		/*
			* Kiem tra request tu view
		*/
		function handleRequest() {
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($action) {
				case 'add_user':
					//view du lieu
					if(isset($_POST['add_user'])){
						$name 	  = $_POST['name'];
						$username = $_POST['username'];
						$password = $_POST['password'];
						$userModel = new User();
						$userModel->InserUser($name, $username, $password);
					}
					include 'view/add_user.php';
					break;
				case 'list_user':
					//view du lieu
					include 'view/list_user.php';
					break;
				
				case 'add_product':
					//view du lieu
					include 'view/add_product.php';
					break;
				case 'list_product':
					//view du lieu
					include 'view/list_product.php';
					break;
				
				default:
					# code...
					break;
			}

		}
	}
?>
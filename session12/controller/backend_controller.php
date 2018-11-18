<?php 
	include 'config/connectdb.php';
	include 'model/user.php';
	include 'model/product.php';

	class BackendController {
		function handleRequest() {
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($action) {
				case 'add_user':
				if(!isset($_SESSION['login'])){
						header("Location: login.php");
					}
					if(isset($_POST['add_user'])){
						$username = $_POST['username'];
						$password = $_POST['password'];
						$avatar = $_FILES['avatar'];
						$path = 'dist/img/';
						$avatarName = uniqid().$avatar['name'];
						move_uploaded_file($avatar['tmp_name'], $path.$avatarName);
						$userModel = new User();
						$userModel->InsertUser($username, $password, $avatarName);
						header("Location: admin.php?action=list_user");
					}
					include 'view/backend/add_user.php';
					break;
				case 'list_user':
					if(!isset($_SESSION['login'])){
						header("Location: login.php");
					}
					$userModel = new User();
					$listUser = $userModel->getListUser();
					include 'view/backend/list_user.php';
					break;
				case 'delete_user' :
					if(!isset($_SESSION['login'])){
						header("Location: login.php");
					}
					$id = $_GET['id'];
					$userModel = new User();
					$userModel->deleteUser($id);
					header("Location: admin.php?action=list_user");
					include 'view/backend/list_user.php';
					break;
				case 'edit_user':
					if(!isset($_SESSION['login'])){
						header("Location: login.php");
					}
					$id = $_GET['id'];
					$userModel = new User();
					$editUser =$userModel->getInfoUser($id);
					while ($row = $editUser->fetch_assoc()){
						$usernameEdit = $row['username'];
						$avatarEdit = $row['avatar'];
					}
					if(isset($_POST['edit_user'])){
						$username = $_POST['username'];
						$avatar = $avatarEdit;
						//upload image
						// Kiem tra co chon anh de EDIT hay khong?
						//var_dump($_FILES['image']);exit();
						if(!$_FILES['avatar']['error']){
							$avatar = $_FILES['avatar'];
							$path = 'dist/img/';
							$avatarName = uniqid().$avatar['name'];
							move_uploaded_file($avatar['tmp_name'], $path.$avatarName);
							//delete image
							unlink('dist/img/'.$avatarEdit);
							$userModel = new User();
							$userModel->EditUser($id, $username, $avatarName);
						}
						header("Location: admin.php?action=list_user");
					}
					include 'view/backend/edit_user.php';
					break;
				case 'add_product':
					if(!isset($_SESSION['login'])){
						header("Location: login.php");
					}
					if(isset($_POST['add_product'])){
						$name = $_POST['name'];
						$image = $_FILES['image'];
						$path = 'dist/img/';
						$imageName = uniqid().$image['name'];
						move_uploaded_file($image['tmp_name'], $path.$imageName);
						$productModel = new Product();
						$productModel->InsertProduct($name, $imageName);
						header("Location: admin.php?action=list_product");
					}
					include 'view/backend/add_product.php';
					break;
				case 'list_product':
					if(!isset($_SESSION['login'])){
						header("Location: login.php");
					}
					$productModel = new Product();
					$listProduct = $productModel->getListProduct();
					include 'view/backend/list_product.php';
					break;
				case 'delete_product':
					if(!isset($_SESSION['login'])){
						header("Location : login.php");
					}
					$id = $_GET['id'];
					$productModel = new Product();
					$productModel->deleteProduct($id);
					header("Location: admin.php?action=list_product");
					include 'view/backend/list_product.php';
					break;
				case 'login':
					//view du lieu
					if (isset($_POST['login'])) {
						$username = $_POST['username'];
						$password = $_POST['password'];
						$userModel = new User();
						$checkLogin = $userModel->checkLogin($username, $password);
						if($checkLogin) {
							$_SESSION['login'] = $username;
							header("Location: admin.php?action=list_user");
						} else {
							header("Location: login.php");
						}
					}
					break;
				case 'logout':
					unset($_SESSION['login']);
					header("Location: login.php");
					//view du lieu
					break;
				default:
					
					break;
			}

		}
	}
?>
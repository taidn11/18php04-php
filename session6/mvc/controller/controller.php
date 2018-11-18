<?php
	include 'model/model.php';
	class Controller {
		function handleRequest() {
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($action) {
				case 'home':
					// lay du lieu trang chu ra 
					$model = new Model();
					$home = $model->getHomeData();
					include 'view/home.php';
					break;
				case 'about':
					$model = new Model();
					$about = $model->getAboutData();
					include 'view/about.php';
					break;
				case 'contact':
					$model = new Model();
					$contact = $model->getContactData();
					include 'view/contact.php';
					break;
				case 'news':
					$model = new Model();
					$news = $model->getNewsData();
					include 'view/news.php';
					break;	
				default:
					# code...
					break;
			}
		}
	}
?>
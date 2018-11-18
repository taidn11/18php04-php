<?php
	class User { 
		var $username;
		var $password;
		function register() {
			echo "<br/> Register uers";
		}
		function edit() {
			echo "<br/> Edit uers";
		}
		function delete() {
			echo "<br/> delete uers";
		}
	}
$user = new User();
$user->register();
$user->edit();

class Student extends User {
	function register() {
		
	}
}

?>

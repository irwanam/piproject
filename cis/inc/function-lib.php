<?php
	
	function static_login($user,$password) {
		if($user=="admin@gmail.com" && $password=="1234"){
			$_SESSION['userid'] = "admin"; // buat session username.
			header("location:index.php"); // Re-direct ke index.php
			exit;
		}
		else {
			echo 'Login Failed';
		}
	}
	
	function logout(){
		session_destroy();
		session_unset($_SESSION['userid']);
		header("location:index.php"); // Re-direct ke index.php
	}
	
?>
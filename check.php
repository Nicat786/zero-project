<?php
if (isset($_POST['click'])) {
	$mailAdress = $_POST['mailAddress'];
	$password = $_POST['password'];
	session_start();
	if (!empty($mailAdress) && !empty($password)) {
		if($mailAdress == "admin" && $password == "admin"){
			$_SESSION['login'] = true;
			header('Location:admin.php');
		}else{
			$_SESSION['loginerror'] = 'login ve ya parol sefdir';
			header('Location:login.php');
		}
	}
	
}
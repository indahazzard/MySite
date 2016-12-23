<?php
	session_start();
	require_once('bd.php');

	if(isset($_POST['submit'])) {
		$email = $_POST['login']; 
		$pass = $_POST['password'];
		$pass=md5($pass);

		$result = mysqli_query($con,"SELECT * FROM users WHERE login = '$login' AND password = '$password'");
		$user = mysqli_fetch_array($result, MYSQLI_ASSOC); 

		$_SESSION["login"] = $user['login'];
		
	
		$_SESSION["id"] = $user['id'];
		$_SESSION["is_logged"] = 1;

		if(isset($_SESSION["id"])) {
			header("Location:user.php");
		} 
	}
?>
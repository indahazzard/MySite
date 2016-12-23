<?php 
require('bd.php');
	session_start(); 
	
	$id = $_GET['id'];
$result = mysqli_query($con, "SELECT * FROM users WHERE id = $id");
	if ($id == $_SESSION["id"]) {
		echo "You cant delete yourself";
	} else {
		$result = mysqli_query($con, "DELETE FROM users WHERE id = $id"); 
	}
?>
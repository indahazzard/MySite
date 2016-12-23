<?php 
		require('bd.php');
	if(isset($_POST['submit'])){
		$email = $_POST['login'];
		$fname = $_POST['fname'];
		$sname = $_POST['sname'];
		$id = $_GET["id"];
		
		$str_sql = "UPDATE users SET login='$email', fname='$fname', sname='$sname' WHERE id=$id";

		mysqli_query($con, $str_sql) or die(mysqli_error());
	}

	header( 'Location:index.php' );
?>
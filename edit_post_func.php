<?php 
require('bd.php');
	if(isset($_POST['submit'])){
		$title = $_POST['title'];
		
		$info = $_POST['info'];
		$article = $_GET['article'];
		
		$str_sql = "UPDATE news SET title='$title', info='$info' WHERE id=$article";

		mysqli_query($con, $str_sql) or die(mysqli_error());
	}

	header( 'Location:index.php' );
?>

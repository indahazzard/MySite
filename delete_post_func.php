<?php 
require('bd.php');
	
	$article = $_GET['article'];

	$result = mysqli_query($con, "DELETE FROM news WHERE id = $article"); 

	header( 'Location:index.php' );
?>
<?php require('header.php') ?>
<?php require('menu.php') ?>
<div class="main">
	
	<?php require('bd.php');
	$id = $_GET['request']; ?>
	<?php 
		$result = mysqli_query($con, "SELECT * FROM feedback WHERE id = $id");
		$feedback = mysqli_fetch_array($result, MYSQLI_ASSOC);
	?>
	<h1> <?php echo $feedback['subject']; ?> by <?php echo $feedback['email']; ?> </h1>
	<p> <?php echo $feedback['message'] ?> </p>
</div>
<?php require('footer.php') ?>
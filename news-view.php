<?php require('header.php') ?>
<?php require('menu.php') ?>
<div class="main">
	<?php require ('bd.php');?>
	<?php require_once("bd.php");?>
	<?php $article = $_GET['article']; ?>
	<?php 
		$result = mysqli_query($con, "SELECT * FROM news WHERE id = $article");
		$news = mysqli_fetch_array($result, MYSQLI_ASSOC);
	?>
	<h1> <?php echo $news['title']; ?> <?php if (isset($_SESSION["id"]) and $_SESSION["is_admin"] == 1) { ?> <a href="edit-news.php?article=<?php echo $article; ?>"> [edit] </a> <a href="delete_post_func.php?article=<?php echo $article; ?>"> [delete] </a> <?php } ?> </h1>
	<p> <?php echo $news['info'] ?> </p>
</div>
<?php require('footer.php') ?>
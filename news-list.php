<?php 
require('header.php');
?>
	<?php require('menu.php') ?>
	<div class="main"> 

	<?php 
	require_once("bd.php");

	echo '<h2>News list:</h2>';



	$result = mysqli_query($con,"SELECT * FROM news");
?> 

<table class="user-table">
<tr align="center" style="background: none; color: white; text-transform: uppercase;">
<td> ID </td>
<td> Title </td>
<td> Text</td>
<td> Category </td>

</tr>
<?php while($news = mysqli_fetch_array($result)) { ?>
	<tr> 
	<td> 
	<?php echo $news['id']; ?> 
	</td>
	<td> <a href="news-view.php?article='<?php echo $news['id']; ?>'"> <?php echo $news['title']; ?> </a> 
	</td>
	<td> <?php echo $news['info']; ?> </td>
	<td> <?php echo $news['category']; ?> </td>
	</tr>
<?php } ?>

</table>


	</div>
<?php require('./footer.php') ?>
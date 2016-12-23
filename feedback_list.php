<?php 
require('header.php');
?>
	<?php require('menu.php') ?>
	<div class="main"> 

	<?php 
	$con = mysqli_connect('localhost', 'root', '', 'feedback');

	echo '<h2>Feedback requests:</h2>';



	$result = mysqli_query($con,"SELECT * FROM feedback");
?> 

<table class="user-table">
	<tr align="center" style="background: none; color: white;">
	<td> ID </td>
	<td> From who </td>
	<td> Title </td>
	<td> </td>
	</tr>
<?php while($feedback = mysqli_fetch_array($result)) { ?>
	<tr> 
	<td> <?php echo $feedback['id']; ?> </td>
	<td> <?php echo $feedback['email']; ?>	</td>
	<td> <?php echo $feedback['subject']; ?> </td>
	<td> <a href="feedback_view.php?request=<?php echo $feedback['id'];?>" style="text-decoration: underline;"> VIEW REQUEST </a> </td>
	</tr>
<?php } ?>

</table>


	</div>
<?php require('./footer.php') ?>
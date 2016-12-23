<?php 
require('header.php');
?>
	<?php require('menu.php') ?>
	<div class="main"> 

	<?php 
	require('bd.php');

	echo '<h2>Registered users:</h2>';



	$result = mysqli_query($con,"SELECT * FROM users");
?> 

<table class="user-table">
<tr align="center" style="background: none; color: white; text-transform: uppercase;">
<td>ID</td>
<td> login </td>
<td> fname </td>
<td> sname</td>
</tr>
<?php while($user = mysqli_fetch_array($result)) { ?>
	<tr> 
	<td> 
	<?php echo $user['id']; ?> 
	</td>
	<td> <a href="profile-view.php?id='<?php echo $user['id']; ?>'"> <?php echo $user['login']; ?> </a> 
	<?php if ($user['id'] == $_SESSION['id']) echo "(you)"; ?>
	</td>
	<td> <?php echo $user['fname']; ?> </td>
	<td> <?php echo $user['sname']; ?> </td>
	<td> <a href="edit-user-by-admin.php?id=<?php echo $user["id"]; ?>"> [edit] </a> </td>
	<td> <a href="delete-user-func.php?id='<?php echo $user['id']; ?>'"> [delete] </a> </td>
	</tr>
<?php } ?>

</table>


	</div>
<?php require('./footer.php') ?>
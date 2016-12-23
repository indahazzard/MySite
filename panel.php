<?php require('header.php'); ?>
<?php require('menu.php'); ?>
<div class="main"> 
	<h1> Admin panel </h1>
		<?php if (isset($_SESSION["id"]) and $_SESSION["is_admin"] == 1) { ?>
		<div class="admin-operations">
			 <a href="./user-list.php"> User  </a>
			 <br>
		     <a href="./feedback_list.php"> feedback view </a>
		     <br>
		     <a href="./news-list.php">news edit </a>
     	</div>
     	<?php } else { echo "Access denied"; } ?>
</div>
<?php require('footer.php'); ?>
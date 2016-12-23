<!DOCTYPE html>
<head>
  
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">

</head>
<body>
<?php require_once('./bd.php') ?>
	<!--<?php 
		session_start(); 
	?>-->
 <div class="header"><a><img src="img/logo.svg"></a>
 <div class="authorization">
			<?php if(! isset($_SESSION["id"])) { ?>
			
			<?php } else { echo "Hello, ", $_SESSION["login"]; ?>
			| <a href="user.php"> My profile </a> 
			| <a href="logout.php" class=""> Logout </a> <?php } ?>
			<br>
			| <?php if ($_SESSION["is_admin"] == 1) { ?> 
                      <a href="./panel.php"> Admin panel </a>
                      <?php } ?>
		</div>
 </div>



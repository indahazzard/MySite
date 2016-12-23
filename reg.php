<html>

<head>
   
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
 
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.."></script>
    <script src="slider.js"></script>
</head>
<body>
   
  <?php 
  require ('header.php');
  ?>

  <?php require('menu.php')
 ?>
    <div class="container">
        <form action="save_user.php" method="post"> 
        <p> 
				<p><strong>first name</strong>:</p> 
					<input type="text" name="fname" size="15" maxlength="15" required> 
				</p> 
		<p> 
				<p><strong>second name</strong>:</p> 
					<input type="text" name="sname" size="15" maxlength="15" required> 
				</p> 
			<p> 
				<p><strong>Your login</strong>:</p> 
					<input type="text" name="login" size="15" maxlength="15" required> 
				</p> 
				<p> 
					<p><strong>Enter password</strong>:</p> 
					<input type="password" name="password" size="15" maxlength="15" required> 
				</p> 
			
				<p> 
					<button name="do_signup" type="submit">Registration</button> 
				</p> 

		</form>
    </div>
    <div class="container-reg">
 <p>Welcome!<br>
 Unfortunately we are having technical limitations at the moment, which we would like to pre-warn you about:
<ul>
	<li> After you have registered successfully, just a black screen appears. Nevertheless your log-in details are valid and the registration was successful.
 </li>
	<li> You can login via the LOGIN button at the top right.</li>
</ul>

</p>
  </div>

    <?php 
  require ('footer.php');
  ?>
  </body>
</html>
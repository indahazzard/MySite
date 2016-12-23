
<html>

<head>
   
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="slider.js"></script>
    <script type="text/javascript" src="popup.js"></script>
</head>

<body>
<?php define("ACCESS",true);
 
//Создаем константу старового пути
define("PATH",__DIR__);
 
//Подключаем файл прелоадер
include_once PATH."/system/bootstrap.php";
 
//Создаем экземпляр роутера
$route = new Route();
 
//Запускаем роутер
$route->run();
?>
 <?php require('header.php')
 ?>
<div class="b-container">
    
    <a href="#"  id="go" ><img src="img/login.png" width="150" height="100"></a>
</div>
  <?php require('menu.php')
 ?>

  

  
<div class="content">

<img src="http://cs633327.vk.me/v633327337/2120/A9w3JDTCSjM.jpg" width="1050" height="400">
<p align="center">Welcome to BVB site.</p>
</div> 
<p></p>
<?php 
require ('sidebar.php');
?>



<div id='modal_form'>
    <span id='modal_close'>X</span>
        <form action="testreg.php" method="post">
            <h3>log</h3>
            
            <p>name<br />
                <input type="text" name="login"  size="15" maxlength="15" required/>
            </p>
            <p>password<br />
               <input type="password" name="password" required size="15" maxlength="15" />
            </p>
            <p style="text-align: center; padding-bottom: 10px;">
                <input type="submit" value="login"  />
            </p>
        </form>
</div>

<div id='overlay'></div>

<?php 
  require ('footer.php');
  ?>

</html>
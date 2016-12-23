<head>

    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.."></script>
</head>


   

<body>


  <?php 
  require ('header.php');
  ?>
 
  <?php require('menu.php')
 ?>


  <div class="profile-div"> 
        <div class="profile-left-panel">
            <img src="" class="usr-photo">
           
        </div> 
        <div class="usr-info">
            <h3> your info </h3> 
                <ul class="ul-usrinfo">
                      <li>LOGIN: <?php if($_SESSION["id"]) echo $_SESSION["login"]; ?> </li>
                    <li>NAME: <?php if($_SESSION["id"]) echo $_SESSION["fname"]; ?> </li>
                    <li>URNAME: <?php if($_SESSION["id"]) echo $_SESSION["sname"]; ?></li>
                    

                </ul>
           
    </div>


<div id='overlay'></div>
     <?php require('./footer.php') ?>  
 </body>
 </html>
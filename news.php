<html>

<head>

    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.."></script>
    <script type="text/javascript" src="popup.js"></script>
</head>


   

<body>


  <?php 
  require ('header.php');
  ?>

  <?php require('menu.php')
 ?>
       
    
   <div class="news">
   <div class="news-view">
            <ul>
                <li> <div class="news-img"> 
                <img src="img/news1.jpg" height="128" width="128"> 
                </div> 
                    <div class="news-text">
                        <h2> <a href="category.php?cat=team"> Team </a> </h2>  
                        </p><hr>
                    </div>
                </li>
                <li> <div class="news-img"> 
                <img src="img/news2.jpg" height="128" width="128"> 
                </div> 
                    <div class="news-text">
                        <h2> <a href="category.php?cat=matches"> Matches </a> </h2>  
                        </p><hr>
                    </div>
                </li>
                 <li> <div class="news-img"> 
                <img src="img/news3.jpg" height="128" width="128"> 
                </div> 
                    <div class="news-text">
                        <h2> <a href="category.php?cat=calendar"> Calendar </a> </h2>  
                        </p><hr>
                    </div>
                </li>
                 <li> <div class="news-img"> 
                <img src="img/1s.jpg" height="128" width="128"> 
                </div>  
                    <div class="news-text">
                        <h2> <a href="category.php?cat=players"> Players </a> </h2>  
                        </p><hr>
                    </div>
                </li>
            </ul>
      </div> 
</div>

<?php 
require ('sidebar.php');
?>





<?php 
  require ('footer.php');
  ?>

</html>
  
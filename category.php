<html>

<head>

    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
</head>


   

<body>


  <?php 
  require ('header.php');
  ?>
  <?php require('menu.php')
 ?>
       
    
 <?php  
$cat = $_GET['cat'];
 require('bd.php');
$sqlStr="SELECT * FROM news WHERE category = '$cat'";
$result = mysqli_query($con, $sqlStr);
?>

<?php
while ($myrow = mysqli_fetch_array($result,MYSQLI_ASSOC)){
  $info = $myrow['info'];
  $photo = $myrow['photo'];
  $title = $myrow['title'];
?>

<div class = "news">
  <div class="news-view">
    <div class="news-view-image">
      <img src="<?php echo $photo ?>" width="200", height="200">  
    </div>
       <h1>
       <?php echo $title;?>
    <h1>
    <div class="news-text">
       <?php echo $info;?>
    </div>
  </div>
</div>





<?php
}
?>
<?php 
  require ('footer.php');
  ?>
  </body>
</html>
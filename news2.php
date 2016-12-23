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
require_once("bd.php");

$sqlStr="SELECT * FROM photos WHERE (category = $cat)";
$result = mysqli_query($con, $sqlStr);
?>

<?php
while ($myrow = mysqli_fetch_array ($result,MYSQLI_ASSOC )){
  $info = $myrow['info'];
  $photo = $myrow['photo'];
?>

  <div class="infoPhoto">
    <div class="photo">
      <img src="<?php echo $photo ?>">  
    </div>
    <div class="information">
      описание: <?php echo $info;?>
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
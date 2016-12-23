<html>

<head>
   
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.."></script>
    <script type="text/javascript" src="popup.js"></script>
    <script src="slider.js"></script>
</head>

<body>

  <?php 
  require ('header.php');
  ?>
  <div class="b-container">
  <a href="#" id="go" ><img src="img/login.png" width="150" height="100"></a> 
</div>
    <?php require('menu.php')
 ?>
<div class="content">
<div class="viewport">
    <ul class="slidewrapper" data-current="0">
        <li class="slide"><img src="img\1s.jpg" alt=""></li>
        <li class="slide"><img src="img\2s.jpg" alt=""></li>
        <li class="slide"><img src="img\3s.jpg" alt=""></li>
        <li class="slide"><img src="img\4s.jpg" alt=""></li>
        <li class="slide"><img src="img\5s.jpg" alt=""></li>
    </ul>
</div>
<a href='javascript: void(0)' id='prev_slide' class='arrows'>←</a>
<a href='javascript: void(0)' id='next_slide' class='arrows'>→</a>
</div>
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
</body>
</hthml>
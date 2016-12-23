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
  <div class="b-container">
<a href="#" id="go" ><img src="img/login.png" width="150" height="100"></a> 
</div>

    <?php require('menu.php')
 ?>
  
  <div class="container">
        <p><br><br><br><br>Ballspielverein Borussia 09 e.V. Dortmund, commonly known as Borussia Dortmund BVB, or simply Dortmund, is a German sports club based in Dortmund, North Rhine-Westphalia (Borussia is the Latin equivalent of Prussia). The football team is part of a large membership-based sports club with more than 115,000 members, making BVB the third largest sports club by membership in Germany. Dortmund plays in the Bundesliga, the top tier of the German football league system. Dortmund is one of the most successful clubs in German football history.

Borussia Dortmund was founded in 1909 by eighteen football players from Dortmund. Borussia Dortmund have won eight German championships, three DFB-Pokals, five DFL-Supercups, one UEFA Champions League, one UEFA Cup Winners' Cup, and one Intercontinental Cup. Their Cup Winners' Cup win in 1966 made them the first German club to win a European title.

Since 1974, Dortmund have played their home games at Westfalenstadion, named after its home region of Westphalia. The stadium is the largest in Germany and Dortmund has the highest average attendance of any association football club in the world. Borussia Dortmund's colours are black and yellow, giving the club its nickname die Schwarzgelben. Dortmund holds a long-standing rivalry with Ruhr neighbours Schalke 04, known as the Revierderby. In terms of Deloitte's annual Football Money League, Dortmund is the second biggest sports club in Germany and the 11th biggest football team in the world.</p>
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
</html>
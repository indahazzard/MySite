<?php
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    if (isset($_POST['fname'])) { $fname = $_POST['fname']; if ($fname == '') { unset($fname);} } 
    if (isset($_POST['sname'])) { $sname=$_POST['sname']; if ($sname =='') { unset($sname);} }

 if (empty($login) or empty($password)) 
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
   
    
    $query = "SELECT id FROM users WHERE login='$login'";
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
 $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $fname = stripslashes($fname);
    $fname = htmlspecialchars($fname);
 $sname = stripslashes($sname);
    $sname = htmlspecialchars($sname);

    $login = trim($login);
    $password = trim($password);
    $fname = trim($fname);
    $sname = trim($sname);
 
    include ("bd.php");
    $result = mysqli_query($con,$query);
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['id'])) {
    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
    }

    $result2 = mysqli_query ($con,"INSERT INTO users (login,password,fname,sname) VALUES('$login','$password','$fname','$sname')");
    
    if ($result2=='TRUE')
    {
    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a>";
    }
 else {
    echo "Ошибка! Вы не зарегистрированы.";
    }
    ?>
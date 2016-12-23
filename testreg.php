<?php
    session_start();
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
if (isset($_POST['fname'])) { $fname = $_POST['fname']; if ($fname == '') { unset($fname);} } 
    if (isset($_POST['sname'])) { $sname=$_POST['sname']; if ($sname =='') { unset($sname);} }
if (empty($login) or empty($password)) 
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
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
 
$result = mysqli_query($con,"SELECT * FROM users WHERE login='$login'"); //
    $myrow = mysqli_fetch_array($result);
    if (empty($myrow['password']))
    {
    exit ("Извините, введённый вами login или пароль неверный.");
    }
    else {
    if ($myrow['password']==$password) {
    $_SESSION['login']=$myrow['login']; 
    $_SESSION['id']=$myrow['id'];
    $_SESSION['fname']=$myrow['fname'];
      $_SESSION['sname']=$myrow['sname'];
     $_SESSION['is_admin']=$myrow['is_admin']; 
    echo "Вы успешно вошли на сайт! <a href='index.php'>Главная страница</a>";
    }
 else {
    exit ("Извините, введённый вами login или пароль неверный.");
    }
    }
    ?>
<?php
  //Если форма отправлена
  if(isset($_POST['submit'])) {
 //Проверка Поля ИМЯ
  if(trim($_POST['contactname']) == '') {
  $hasError = true;
  } else {
  $name = trim($_POST['contactname']);
  }
 //Проверка поля ТЕМА
  if(trim($_POST['subject']) == '') {
  $hasError = true;
  } else {
  $subject = trim($_POST['subject']);
  }
 //Проверка правильности ввода EMAIL
  if(trim($_POST['email']) == '')  {
  $hasError = true;
  } 
 //Проверка наличия ТЕКСТА сообщения
  if(trim($_POST['message']) == '') {
  $hasError = true;
  } else {
  if(function_exists('stripslashes')) {
  $comments = stripslashes(trim($_POST['message']));
  } else {
  $comments = trim($_POST['message']);
  }
  }
 //Если ошибок нет, отправить email
  if(!isset($hasError)) {
    $name = $_POST['contactname'];
    $email  = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

 require('bd.php');
  mysqli_query($con,"SET NAMES 'utf8'"); 
  mysqli_query($con,"SET CHARACTER SET 'utf8'"); 
  mysqli_query($con,"SET SESSION collation_connection = 'utf8_general_ci'");
  $result = mysqli_query($con,"INSERT INTO feedback (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')");

//Если запрос пройдет успешно то в переменную result вернется true
if($result == 'true') 
{echo "Ваши данные успешно добавлены";}
else{echo "Ваши данные не добавлены";}
  }
  }
  ?>
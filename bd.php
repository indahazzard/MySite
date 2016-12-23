<?php

		$con = mysqli_connect('localhost', 'root', '', 'users');
  		if (!$con){
  			die ("<b>Нет конекта с базой данных, проверьте правильность имени пользователя и пароля!</b>");
  		}
	
?>
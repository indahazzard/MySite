<?php

defined("ACCESS")or die(header("location:../index.php"));
 

define("SYSTEM",PATH."/system");
//Модели
define("MODEL",SYSTEM."/model");
//Контроллеры
define("CONTR",SYSTEM."/controller");
//Виды
define("VIEW",SYSTEM."/model");
 

 
//Файл данных
include_once MODEL."/Data.php";
//Работа с видами
include_once MODEL."/View.php";
//Контроллер
include_once CONTR."/Route.php";
 
?>
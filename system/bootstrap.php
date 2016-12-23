<?php

//defined("ACCESS")or die(header("location:../index.php"));
 

define("SYSTEM",PATH."/system");

define("MODEL",SYSTEM."/model");

define("CONTR",SYSTEM."/controller");

define("VIEW",SYSTEM."/view");
 

 

include_once MODEL."/Data.php";

include_once MODEL."/View.php";

include_once CONTR."/Route.php";
 
?>
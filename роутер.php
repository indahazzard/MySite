<?php define("ACCESS",true);
 

define("PATH",__DIR__);
 

include_once PATH."/system/bootstrap.php";
 

$route = new Route();
 

$route->run();
?>
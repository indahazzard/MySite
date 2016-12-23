<?php

//defined("ACCESS")or die(header("location:../index.php"));
 
class View{
 
    public function load($name){
 
        $path = VIEW."/$name.php";
 
        
 
        if(file_exists($path)){
 
            require_once($path);
 
           
        }else{
 
            $data = new Data();
 
            $path = VIEW."/".$data->data["pages"]["default"]."php";
 
            require_once($path);
 
        }
 
    }
}
?>
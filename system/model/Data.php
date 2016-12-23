<?php

//defined("ACCESS")or die(header("location:../index.php"));
 
class Data{
 
    public $data;
 
    function __construct(){
 
        $this->data = array(
 
            "pages" => array(
 
                //Именованный массив, чтобы была возможность шифровать роутинг
 
                "index"   => "index",
                "default" => "index",
 
            ),
 
        );
 
    }
 
}
?>
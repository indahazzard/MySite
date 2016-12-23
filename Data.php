<?php

defined("ACCESS")or die(header("location:../index.php"));
 
class Data{
 
    public $data;
 
    function __construct(){
 
        $this->data = array(
 
            "pages" => array(
 
             
 
                "index"   => "index",
                "default" => "index",
 
            ),
 
        );
 
    }
 
}
?>
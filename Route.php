<?php

defined("ACCESS")or die(header("location:../index.php"));
 
class Route{
 
    private $page;
 
    public function run(){
 
        $data = new Data();
 
     
        if(isset($_GET['r'])){
 
 
            
            if(array_key_exists(htmlspecialchars(stripslashes(trim($_GET['r']))),$data->data["pages"])){
 
                $this->page = $data->data["pages"][htmlspecialchars(stripslashes(trim($_GET['r'])))];
 
            }else{
 
             
                $this->page = $data->data["pages"]["default"];
 
            }
 
       
        }else{
 
            $this->page = $data->data["pages"]["default"];
 
        }
 
        
        $page = $this->page;
 
        $methodname = "action_$page";
 
        self::$methodname();
 
    }
 
    
 
    public static function action_index(){
 
       
 
        $view = new View();
 
  
        $view->load("index.php");
 
    }
 
}
?>
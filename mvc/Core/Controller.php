<?php
class Controller{

  public function Model($model){
    require_once "./mvc/Models/".$model.".php";
    return new $model;
  }
  public function view($view, $data=[]){
    require_once "./mvc/Views/".$view.".php";

  }
  //check session
  public  function isLogged(){
    if(isset($_SESSION["logged"])&& is_array( $_SESSION["logged"])&& count( $_SESSION["logged"])>0)
      {
        return true;
      }
      return false;
  }

  public function validation($name){
    require_once "./mvc/Core/".$name.".php";
    return new $name;
  }
  
}
?>
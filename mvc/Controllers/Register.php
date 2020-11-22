<?php

class Register extends Controller {
  
  function __construct() {
    if(!isset($_POST["btnregister"]))
    {
      
      $this->index();
    }
    else
    {
      
      if(isset($_SESSION["user"]))
      {
        unset($_SESSION["user"]);
      }
      if(isset($_SESSION["pass_count"]))
      {
        unset($_SESSION["pass_count"]);
      }
        
      if(isset($_SESSION["email"]))
      {
        unset($_SESSION["email"]);
      }
      
      $this->checkregister();
    }
  }

  function checkregister()
  {
    //get db kiểm tra Model
    $user = $_POST["user"];
    $email = $_POST["email"];
    $pass = md5($_POST["pass"]);

    $model = $this->Model("LoginModel");
    
    $validation = $this->validation("Validation");

    $checkuser = $validation->checkusers($user);
    $checkemail = $validation->checkemail($email);
    $checkpass = $validation->checkpass($_POST["pass"]);
    if(!$checkuser){
      header('Location: '."/register");
          return;
    }

    if(!$checkemail){
      header('Location: '."/register");
      
        return;
    }

    if(!$checkpass){
      header('Location: '."/register");
    
        return;
    }

    $insert = $model->InsertUser($user, $email, $pass);

    header('Location: '."/login");
    
  }
  
  public function index()
  {
    $this->view("Home", [
      "page" =>"register"
    ]);
  }
} 

?>
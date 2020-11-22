<?php

  ob_start();


  trait Middleware {

    public function checksession(){
      if(isset($_POST["btnlogin"])){
        
        $this->checklogin();
      } else {
        if(isset($_SESSION["logged"]) && $_SESSION["logged"] == true)
        {
        
          header('Location: '."/admin/index");
          
          exit();
        }
        else
        {
      
          $this->login();
        }
      }
    }

    public function login(){

      if(isset($_SESSION["checklogin"])){
        unset($_SESSION["checklogin"]);
      }
   
      $this->view("Home", [
        "page" =>"login"
      ]);
   
    }

    public function checklogin()
    {
    
      
      $user = $_POST["user"];
      $pass = md5($_POST["password"]);
      $model = $this->Model("LoginModel");
      $check = $model->Checklogin($user, $pass);
      
      if($check) {
       
        $_SESSION["logged"] = $check; 
        header('Location: '."/admin/index");
        exit();
      }
      else {
        
        $_SESSION["checklogin"] = "Sai thông tin đăng nhập!";
        header('Location: '."/login");
        exit();
      }
    }
  }

?>
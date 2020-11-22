<?php

require_once './mvc/Trait/Middleware.php';

class Login extends Controller {
 
  use Middleware;

  public function index() {
  
    $this->view("Home", [
      "page" =>"login"
    ]);
  }
}
$check = new Login();
$check->checksession();
?>
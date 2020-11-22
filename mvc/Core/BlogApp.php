<?php
//Tất cả code được code trong file này
//Create App Class
class BlogApp{
  protected $controller = "Blog";
  protected $action = "index";
  protected $param =[];
  public function __construct(){

    $arr = $this->UrlProcess();
   
      //xử lý controller
      if(file_exists("./mvc/Controllers/".$arr[0].".php")){
        $this->controller = $arr[0];
        unset($arr[0]);
      }
      require_once "./mvc/Controllers/".$this->controller.".php";
      $this->controller = new $this->controller;

      //xử lý action
      if(isset($arr[1])){
        if(method_exists($this->controller, $arr[1])){
            $this->action = $arr[1];  
        }
        unset($arr[1]);
      }
      //Xử lý Param
    
      $this->param =$arr ? array_values($arr) : [];
      call_user_func_array([$this->controller, $this->action], $this->param);
  }

  public function UrlProcess(){
    if(isset($_GET['url'])){
      return explode("/",filter_var(trim($_GET['url'])));
    }
    
  }
}

?>
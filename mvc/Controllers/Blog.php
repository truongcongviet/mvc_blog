<?php

class Blog extends Controller{
//show tất cả blog (TRANG CHỦ)

  public function __construct()
  {
    if(isset($_SESSION["logged"])){
      unset($_SESSION["logged"]);
    }
    $viewblog = $this->Model("BlogModel");
    $blog= $viewblog->show();

        $this->view("Home", [
          "page" =>"blogshow",
          "blog"=>$blog
          ]);
  }
    

  

//show từng blog
  public function show_blog($id){
    $checkid = $this->Model("BlogModel");
    $kq = $checkid->show_blog($id);
    $this->view("Home",[
      "page"=>"show_id",
      "blog"=>$kq
      ]);
  }
  
 
  function insertblog(){
 
      if(isset($_POST["btnblog"]))
      {

        $title = $_POST["title"];
        $content = $_POST["content"];
        $date = $_POST["date"];

        $checkblog = $this->Model("BlogModel");
        //đẩy lên db
        $kq = $checkblog->create($title,$content,$date);
        $list = $checkblog->show();
      //view
        if($kq)
        {
          $this->view("Home",[
            "page"=>"blogshow",
            "blog"=>$list
            ]);
        }
        else
        {
          $this->view("Home",["page"=>"blogcreate"]);
        }
      }
    
  }
  public function index() {
    $this->view("Home", [
      "page" =>"login"
    ]);
  }


 
}



?>
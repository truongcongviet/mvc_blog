<?php
class Admin extends Controller{

  public function add(){
    $this->view("Home", ["admin"=>"create"]);
  }

  public function edit($id){
    $checkid = $this->Model("BlogModel");
    $kq = $checkid->getid($id);
    if($kq){
      $this->view("Home", [
        "admin"=>"edit",
        "blog"=>$kq
        ]);
    }
  }
  public function update() {

    if(isset($_POST["btnblog"])) {
      $id = $_POST["id"];
      $title = $_POST["title"];
      $content = $_POST["content"];
      $date = $_POST["date"];

      $tool = $this->Model("BlogModel");
      $kq = $tool->updateblog($id, $title, $content, $date);
      $show_newdb = $tool->show();
      // if($kq){
        $_SESSION["edit"] = "you edited successfully";

        $this->view("Home", [
          "admin"=>"index",
          "blog"=>$show_newdb
          ]);
      // }
      // else
      // {
        
      //   $_SESSION["edit"]  ="edit false";
      //   $this->view("Home", [
      //     "admin"=>"edit",
      //     "blog"=>$show_newdb
      //     ]);
      // }
     
    }

    $this->view("Home", [
      "admin"=>"index",
      "blog"=>[]
      ]);
    
    
  }
  public function destroy($id){
    $checkid = $this->Model("BlogModel");
    $kq = $checkid->getid($id);
  }

  public function index(){

    if(isset($_SESSION["edit"])){
      unset($_SESSION["edit"]);
    }
    
      $viewblog = $this->Model("BlogModel");
      $blog= $viewblog->show();
  
          $this->view("Home", [
            "admin" =>"index",
            "blog"=>$blog
            ]);
    }

}

?>
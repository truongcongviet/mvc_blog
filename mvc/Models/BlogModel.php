<?php
class BlogModel extends DB{
  //admin
 
  public function create($title,$content, $date){
    $sql = "INSERT INTO blog (title, content, date)
    VALUES ('$title', '$content', '$date')";
    $result =  mysqli_query($this->conn, $sql);
    return $result;
  }

  public function getid($id){
    $sql = "SELECT * FROM blog WHERE id='$id'";
    $result = mysqli_query($this->conn, $sql);
    $kq  = mysqli_fetch_assoc($result);
    return $kq;
    
  }
  public function show_blog($id){
    $sql = "SELECT * FROM blog WHERE id='$id'";
    $result =  mysqli_query($this->conn, $sql);
    $row =   mysqli_fetch_all($result);
     return $row;
  }
  public function updateblog($id, $title, $content, $date){
    $sql = "UPDATE blog SET title='$title', content='$content', date = '$date' WHERE id='$id'";
    $result = mysqli_query($this->conn, $sql);
    
    return $result;
  }
  public function delete($id){
    $sql = "DELETE * blog WHERE id=$id";
    $result = mysqli_query($this->conn, $sql);
    $kq  = mysqli_fetch_assoc($result);
    return $kq;
  }

  //layout 

  public function show(){
    
    $sql = "SELECT * FROM blog";
    $result =  mysqli_query($this->conn, $sql);
    $row =   mysqli_fetch_all($result);
    return $row;
    
  }



  
  
 
}


?>
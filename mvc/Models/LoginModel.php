<?php
class LoginModel extends DB {

  public function Checklogin($user, $password){
    $user = trim($user);
    $password = trim($password);
    
    $sql = "SELECT * FROM user WHERE username='$user' and password = '$password'";
    $result =  mysqli_query($this->conn, $sql);
    
    if($result==true)
    {
      if ($result->num_rows > 0) 
      {  
          $row=mysqli_fetch_assoc($result);
          return $row;
          
      }
      else
      {
        $_SESSION["checklogin"] = "Sai thông tin đăng nhập!";
        return false;
        
      }
    }
    
  }
  public function checkemail($email){
    $email = trim($email);
    if($email==null){
      return true;
    }
    else{

    
    $sql = "SELECT email FROM user WHERE email='$email'";
    $result = mysqli_query($this->conn, $sql);
    
    if(isset($_SESSION["email_exit"])){
      unset($_SESSION["email_exit"]);
    }
    
    if ($result->num_rows > 0) 
    {
      // output data of each row
        $_SESSION["email_exit"] ="email đã trùng, nhập email khác";
        return true;
    }
      else
      {
        return false;
      }
    }
  }

  public function InsertUser($username, $email, $password ){
    //đưa dữ  liệu lên DB User
    $sql = "INSERT INTO user (username, email, password)
            VALUES ('$username', '$email', '$password')";
    $result =  mysqli_query($this->conn, $sql);
    return $result;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Blog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">BLogName</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="http://blog-mvc.co/admin/index">Home</a></li>
        <li><a href="#">Notification</a></li>
        <li><a href="#">Introduction</a></li>
      </ul>
      <form class="navbar-form navbar-left" action="/action_page.php">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" name="search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <?php
        if(isset($_SESSION["logged"])&& $_SESSION["logged"] == true)
        {?>
          <li><a href="http://blog-mvc.co/blog"><span class="glyphicon glyphicon-log-in"   ></span> logout</a></li>
        
        <?php }
        else 
        {?>
          <li><a href="http://blog-mvc.co/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="http://blog-mvc.co/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <?php } 

        ?>
        
      </ul>
    </div>
  </nav>
  <div class="container">
    <?php
      if(!empty(array_keys($data)[0])) {
        if(array_keys($data)[0]=="page") {
          require_once "./mvc/Views/pages/".$data["page"].".php";
        }
        else{
          require_once "./mvc/Views/admin/".$data["admin"].".php";
        }
      }
    ?>
    <!-- <div class="row">
      <div class="head">
        <h1>TRƯƠNG CÔNG VIỆT </h1>
        <p>Try hard to become profectional programming</p>
      </div>

    </div>

    <nav class="navbar-expand-lg navbar-light color">

        <div class="collapse navbar-collapse" id="">
          <ul class="navbar-nav">
            <li class="nav-item ">
              <a >Home </a>
            </li>
            <li class="nav-item">
              <a >Game</a>
            </li>
           
            <li class="nav-item">
              <a >Thông tin</a>
            </li>
          </ul>
          <form class="form-inline">
            <input class="" type="search" placeholder="Search">
            <button type="submit">Search</button>
          </form>
          <a href="http://blog-mvc.co/login" type="button" class="nav-link">login</a>
          
          <a href="http://blog-mvc.co/register" type="button" class="nav-link">register</a>
        </div>

    </nav>

    <div class="row">
      <div>
     
        <?php
        if(!empty(array_keys($data)[0])){

          if(array_keys($data)[0]=="page"){
            require_once "./mvc/Views/pages/".$data["page"].".php";
          }
          else{
            require_once "./mvc/Views/admin/".$data["admin"].".php";
          }
        }
        ?>
      </div>
     
    </div>

    <div class="row">
        <p id="p"><span>@2020</span> by Việt</p>
    </div> -->

  </div>
 
</body> 
</html>
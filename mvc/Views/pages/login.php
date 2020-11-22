<?php if(isset($_SESSION["checklogin"])) { ?>
    <div class="alert alert-danger" role="alert">
      <?php echo $_SESSION["checklogin"];?>
    </div>
<?php } ?>

<div class="d-flex justify-content-center h-100">
  <div class="card" style="margin-top: 0px; padding: 12px;">
    <div class="card-header">
      <h3>Sign In</h3>
    </div>
    <div class="card-body">
      
      <form action="/login" method="POST">
        <div class="input-group form-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-user"></i></span>
          </div>
          <input type="text" class="form-control" name ="user" placeholder="name">
          
        </div>

        <div class="input-group form-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-key"></i></span>
          </div>
          <input type="password" class="form-control" name ="password" placeholder="password">
        </div>

        <div class="row align-items-center remember">
          <input type="checkbox">Remember Me
        </div>
        <div class="form-group">
          <input name="btnlogin" type="submit" value="Login" class="btn float-right login_btn">
        </div>
      </form>
    </div>
    <div class="card-footer">
      <div class="d-flex justify-content-center links">
        Don't have an account?<a href="#">Sign Up</a>
      </div>
      <div class="d-flex justify-content-center">
        <a href="#">Forgot your password?</a>
      </div>
    </div>
  </div>
</div>

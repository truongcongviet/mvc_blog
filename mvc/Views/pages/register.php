
<?php if(isset($_SESSION["user"])){?>
    <div class="alert alert-danger" role="alert">
      <?php echo $_SESSION["user"];?>
    </div>
<?php } ?>

<?php if(isset($_SESSION["email"])){?>
    <div class="alert alert-danger" role="alert">
      <?php echo $_SESSION["email"];?>
    </div>
<?php } ?>

<?php if(isset($_SESSION["pass_count"])) { ?>
    <div class="alert alert-danger" role="alert">
      <?php echo $_SESSION["pass_count"];?>
    </div>
<?php } ?>

<form class="form-horizontal" method="POST" action="/register">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">User:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="user" name="user" placeholder="Enter user">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="pwd" name="pass" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name ="btnregister"class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
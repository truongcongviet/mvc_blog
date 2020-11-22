
<body>
  <div class="wrap">
    <H3>EDIT BLOG</H3>

    <form action="/admin/update" method=POST>

      <input type="hidden" name="id" value="<?php echo $data["blog"]["id"] ?>">

      <div class="form-group">
        <label for="title">Tiêu đề:</label>
        <input type="text" class="form-control" name= "title" id="title" 
        value="<?php echo $data["blog"]["title"]?>">
      </div>

      <div class="form-group">
        <label for="content">Nội Dung:</label>
        <input type="text" class="form-control" name= "content" id="content" 
        value="<?php echo $data["blog"]["content"]?>" >
      </div>

      <div class="form-group">
        <label for="content">Ngày:</label>
        <input type="date" class="form-control" name= "date" id="date"
         value="<?php echo $data["blog"]["date"]?>">
      </div>
    
    <button type="submit" class="btn btn-default" name="btnblog">Submit</button>
  </form>

  </div>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/public/css/create.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

  <title>Khởi tạo sinh viên</title>
  <style>
    .wrap{
      width: 800px;
    }
    .wrap h3{
      text-align: center;
      background-color: grey;
    }
    .btn{
      background: red;
    }
    .btn :hover{
      color: burlywood;
    }

  </style>
  
</head>
<body>
  <div class="wrap">
    <H3>TẠO BLOG</H3>

    <form action="/blog/insertblog" method=POST>

      <div class="form-group">
        <label for="title">Tiêu đề:</label>
        <input type="text" class="form-control" id="title" name="title">
      </div>

      <div class="form-group">
        <label for="content">Nội Dung:</label>
        <input type="text" class="form-control" id="content" name="content">
      </div>

      <div class="form-group">
        <label for="content">Ngày:</label>
        <input type="date" class="form-control" id="date" name="date">
      </div>
    
    <button type="submit" class="btn btn-default" name="btnblog">Submit</button>
  </form>

  </div>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
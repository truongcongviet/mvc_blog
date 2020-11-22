

<?php if(isset($_SESSION["edit"])) { ?>
  <div class="alert alert-success" role="alert">
    <?php echo $_SESSION["edit"];?>
  </div>
<?php } ?>

<table class="table">
    <thead>
      <tr>
        <th>Tiêu đề</th>
        <th>Nội Dụng</th>
        <th>Thời gian</th>
        <th>Chức năng</th>
      </tr>
    </thead>
    <tbody>

  

      <?php
    
        if(isset($_SESSION["logged"])&& $_SESSION["logged"] == true){

          for($i=0;$i<count($data["blog"]); $i++)
          {?>
          
                <tr>
                  <td> <a href="http://blog-mvc.co/blog/show_blog/<?php echo $data["blog"][$i][0] ?>">
                  <?php echo $data["blog"][$i][1]?></a></td>
                  <td><?php echo $data["blog"][$i][2]?></td>
                  <td> <?php echo $data["blog"][$i][3]?></td>
                  <td> 
                  <a href="/admin/edit/<?php echo $data["blog"][$i][0] ?>">edit</a>
                  <a href="">delete</a>
                  </td>
                
                </tr>   

          <?php } } ?>
    </tbody>

  </table>
   
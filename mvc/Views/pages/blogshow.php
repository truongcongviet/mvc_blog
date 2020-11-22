<table class="table">
    <thead>
      <tr>
        <th>Tiêu đề</th>
        <th>Nội Dụng</th>
        <th>Thời gian</th>
      </tr>
    </thead>
    <tbody>
      <?php
  
          for($i=0;$i<count($data["blog"]); $i++)
          {?>
          
                <tr>
                  <td> <a href="http://blog-mvc.co/blog/show_blog/<?php echo $data["blog"][$i][0] ?>">
                  <?php echo $data["blog"][$i][1]?></a></td>
                  <td><?php echo $data["blog"][$i][2]?></td>
                  <td> <?php echo $data["blog"][$i][3]?></td>
                
                </tr>   

          <?php } ?>
    </tbody>

  </table>
   


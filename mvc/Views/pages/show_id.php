<?php

for($i=0;$i<count($data["blog"]); $i++){?>

  <h1><?php echo $data["blog"][$i][1]?></h1>
  <br>
  <p><?php echo $data["blog"][$i][3]?></p>
  <br>
  <p><?php echo $data["blog"][$i][2]?></p>

<?php }?>
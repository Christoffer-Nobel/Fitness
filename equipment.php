<?php
include('connect.php');
include('nav.php');

$equips = get_equip();

foreach($equips as $equip){
  ?><h3> <?php echo "facility:" . " " . $equip["fac_name"]; ?></h3> <?php

  echo "equipment type:" . " " . $equip["type"];
?>
<br>
<?php } ?>

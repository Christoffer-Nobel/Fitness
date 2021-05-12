<?php
include('connect.php');
include('nav.php');

$equips = get_equip();

$facs = get_fac();

foreach($facs as $fac){
  echo $fac["fac_name"];

foreach($equips as $equip){
  if ($equip["fac_id"] == $fac["fac_id"]){

?> <li> <?php  echo $equip["type"]; ?> </li> <?php
}
}
?>
<br>
<?php } ?>

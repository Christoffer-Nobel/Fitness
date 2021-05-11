<?php
include('connect.php');
include('nav.php');

$facs = get_fac();

foreach($facs as $fac){
  echo  $fac["fac_id"] . " " . $fac["fac_name"] . " " . $fac["opening_hours"];


?>

<hr>
<?php } ?>

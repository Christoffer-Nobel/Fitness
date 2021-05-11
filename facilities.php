<?php
include('connect.php');

$facs = get_fac();

foreach($facs as $fac){
  echo $fac["fac_name"];
?>
<br>
<?php } ?>

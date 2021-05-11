<?php
include('nav.php');
global $conn;
$fac = "SELECT fac_name FROM facility WHERE fac_id > 0";
$result = mysqli_query($conn,$sql);
echo $result;

?>

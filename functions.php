<?php
$conn = null;

//funktionen til at forbinde databasen
function connect(){

  //sikrer at variablen er den globale på linje 3
  global $conn;

  //Opretter den faktiske database forbindelse
  $conn = mysqli_connect(DBHOST, DBUSER, DBPASS);

  //tester om  der er fejl i databaseforbindelse
 if(!$conn){
  die(mysqli_error($conn));
  }

  //vælge den database vi gerne vil bruge
  mysqli_select_db($conn, DBNAME);
}
function get_equip(){

global $conn;
$products = [];

$sql =  "SELECT fac_id, fac_name, opening_hours, type FROM facilities_equipment WHERE fac_id > 0";

$result = mysqli_query($conn, $sql);
if (false===$result) {
  printf(mysqli_error($conn));
} elseif(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)){

    $products[] = $row;
  }
  }
return $products;
}

function get_fac(){

global $conn;
$products = [];

$sql =  "SELECT fac_id, fac_name, opening_hours FROM facility WHERE fac_id > 0";

$result = mysqli_query($conn, $sql);
if (false===$result) {
  printf(mysqli_error($conn));
} elseif(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)){

    $products[] = $row;
  }
  }
return $products;
}

function debug($data)  {
echo '<pre>';
print_r($data);
echo '</pre>';
}

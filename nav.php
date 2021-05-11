<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <div class="topnav">
    <a class="active" href="members.php">Members</a>
    <a href="members.php">New members</a>
    <a href="Facilities.php"> Facilities </a>
    <a href="Equipment.php">Equipment </a>

  </div>
  </body>
</html>

<?php
//Definer konstanter med databaseforbindelse info
define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "");
define("DBNAME", "fitness");
//inkluderer funkntions.php med alle funktioner
include("functions.php");

// Forbinder til databasen (se functions.php)
connect();

?>

et eller andet lort.

<?php
//Definer konstanter med databaseforbindelse info
define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "root");
define("DBNAME", "fitness");
//inkluderer funkntions.php med alle funktioner
include("functions.php");

// Forbinder til databasen (se functions.php)
connect();

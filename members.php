<?php
include('connect.php');
include('nav.php');

$membs = get_memb();

foreach($membs as $memb){
?> <h3> <?php  echo  $memb["first_name"] . " " . $memb["last_name"]; ?> </h3> <?php
?> <li> <?php  ?> <b> <?php echo "Role: "; ?> </b> <?php echo $memb["role_title"];?> </li> <?php
?> <li> <?php  ?> <b> <?php echo "Membership type: "; ?> </b> <?php echo $memb["membership_type"];?> </li> <?php
?> <li> <?php  ?> <b> <?php echo "Phone number: "; ?> </b> <?php echo $memb["phone_number"];?> </li> <?php
?> <li> <?php  ?> <b> <?php echo "Email: "; ?> </b> <?php echo $memb["email"];?> </li> <?php
?> <li> <?php  ?> <b> <?php echo "Postal: "; ?> </b> <?php echo $memb["postal"];?> </li> <?php
?> <li> <?php  ?> <b> <?php echo "Adress: "; ?> </b> <?php echo $memb["adress"];?> </li> <?php
?> <li> <?php  ?> <b> <?php echo "Date of birth: "; ?> </b> <?php echo $memb["dob"];?> </li> <?php
?> <li> <?php  ?> <b> <?php echo "Creation date: "; ?> </b> <?php echo $memb["creation_date"];?> </li> <?php
}
?>

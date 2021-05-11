<?php
include('connect.php');
$first = $_POST['fname'];
$last = $_POST['lname'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$postal = $_POST['postal'];
$adress = $_POST['adress'];
$dob = $_POST['dob'];
$role = $_POST['role'];

$sql = "INSERT INTO members (first_name, last_name, phone_number, email, postal, adress, dob, role) VALUES ('$first', '$last', '$phone_number', '$email', '$postal', '$adress', '$dob', '$role');";
$result = mysqli_query($conn, $sql);
if (false===$result) {
  printf(mysqli_error($conn));
}

header("Location: ./members.php");

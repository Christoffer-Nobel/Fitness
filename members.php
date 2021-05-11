<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

      <div class="create-user-form">
        <h2>Create user</h2>
          <form method="post">
            <input type="text" name="fname" placeholder="First name"><br>
            <input type="text" name="lname" placeholder="Last name"><br>
            <input type="tel" name="phone_number" placeholder="Phone number"><br>
            <input type="email" name="email" placeholder="e-mail"><br>
            <input type="number" name="postal" placeholder="Postal" min="4" max="4"><br>
            <input type="text" name="adress" placeholder="Adress"><br>
            <input type="date" name="dob" placeholder="Date of birth"><br>
            <input type="radio" id="member" name="role" value="1">
            <label for="member">Member</label><br>
            <input type="radio" id="staff" name="role" value="2">
            <label for="staff">Staff</label><br>
            <input type="radio" id="derfuhrer" name="role" value="3">
            <label for="derfuhrer">Der führer</label><br>
            <button type="submit" name="submit">Create</button><br>
          </form>
      </div>

  </body>
</html>
<?php
include('nav.php');
$query = "INSERT into `users` (name, password, email)
VALUES ('$name', '$password', '$email')";
$result = mysqli_query($conn,$query);
if($result){
  header("location: ./index.php?p=8");
  exit;
} else{
  echo "Noget gik galt. Prøv igen eller ring til Kenneth for hjælp";
}
  ?>

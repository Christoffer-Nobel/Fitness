<?php
include('connect.php');
include('nav.php');
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

      <div class="create-user-form">
        <h2>Create user</h2>
          <form  action="members.inc.php" method="POST">
            <input type="text" name="fname" placeholder="First name"><br>
            <input type="text" name="lname" placeholder="Last name"><br>
            <input type="tel" name="phone_number" placeholder="Phone number"><br>
            <input type="email" name="email" placeholder="e-mail"><br>
            <input type="number" name="postal" placeholder="Postal" min="1000" max="9999"><br>
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

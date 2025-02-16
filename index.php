<?php

include('connect.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="login.css">
  <title>Admin_section</title>
</head>
<body>
  <div class="container">
    <form action="login.php" method="" class="login-box">
      <h2>Admin Login</h2>
      <div class="input-field">
      <input type="text" placeholder="Enter Username"
          class="input" required>
      </div>
      <div class="input-field">
        <input type="password" placeholder="Enter password"
          class="input" id="password" required>
        <img src="eye01.png" id="eye-icon">
      </div>
      <input type="submit" class="button" value="Login">
    </form>
  </div>
  <script src="login.js"></script>
</body>
</html>
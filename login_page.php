<?php
    $connect = mysqli_connect("localhost", "root", "", "tourism");

       

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/8ae3491f5a.js" crossorigin="anonymous"></script>
</head>
<body style="background-image:url(login2.png)">

  <form action="stream.php" method="POST">
    <div class="login">
      <h1 align="center">LOG IN</h1>
      <div class="txtbox">
        <i class="fas fa-users"></i>
        <input type="text" placeholder="Username" name="username">
      </div>
      <div class="txtbox">
        <i class="fas fa-key"></i>
        <input type="password" placeholder="Password" name="password">
      </div>
      <input type="submit" class="btn" name="submit" value="LOG IN">
      <p align="center">New User ?  <a style="text-decoration: none" href="register.php">Sign Up</a></p>
    </div>
  </form>
  <br><br>

 
  
</body>
</html>


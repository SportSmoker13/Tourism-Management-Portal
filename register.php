<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/8ae3491f5a.js" crossorigin="anonymous"></script>
</head>
<body style="background-image:url(register3.png)">
	<form action="stream.php" method="POST">
		<div class="login">
			<h1 align="center">SIGN UP</h1>	
			<div class="txtbox">
				<i class="fas fa-address-card"></i>	
				<input style="color: black" type="text" name="name" placeholder="Full Name">
			</div>
			<div class="txtbox">
				<i class="fas fa-user"></i>
				<input style="color: black" type="text" name="username" placeholder="Username">
			</div>
			<div class="txtbox">	
				<i class="fas fa-envelope"></i>
				<input style="color: black" type="text" name="email" placeholder="Email">
			</div>	
			<div class="txtbox">
				<i class="fas fa-mobile-alt"></i>
				<input style="color: black" type="text" name="phone" placeholder="Phone Number">
			</div>	
			<div class="txtbox">
				<i class="fas fa-key"></i>
				<input style="color: black" type="text" name="pass" placeholder="Password">
			</div>	
			<input type="submit" class="btn" name="submit_1" value="SIGN UP">
      		<div class="prn">
      			<p align="center">Already A User ?  <a style="text-decoration: none;" href="login_page.php">Sign In</a></p>
      		</div>			
		</div>
	</form>
</body>
</html>
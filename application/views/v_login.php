<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/style.css">
	<link rel="stylesheet" href="?php echo base_url(); ?>static/css/simple-grid.min.css">
</head>
<body class="login">
	<center>
		<header>
			<h1>Login</h1>			
		</header>

		<div class="container">
			<div class="login-welcome">
				<p>Welcome To</p>
				<p>Snap Shoot</p>
			</div>
			<br>
			<div class="login-form">
				<form action="" name="login">
					<input type="text" name="username" placeholder="Username/Email">
					<br>
					<input type="password" name="password" placeholder="Password">
					<br>
					<input style="background-color:hsla(9, 100%, 64%, 0.5);" type="button" name="login-btn" value="Log In">
				</form>

				<p>Don't have an account <a href="">Sign Up</a></p>
			</div>
		</div>	
	</center>
	
	
	

</body>
</html>

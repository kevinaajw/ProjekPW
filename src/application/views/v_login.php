<!DOCTYPE html>
<html lang="en">
<?php
if (isset($this->session->userdata['logged_in'])) {
header("location: SS/login");
}
?>
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/simple-grid.min.css">
</head>
<body class="login">
	<center>
		<header>
			<h1>Login</h1>			
		</header>

		<div class="container">
			<div class="login-welcome">
				<p>Welcome To</p>
				<p>Stalk Shoot</p>
			</div>
			<br>
			<div class="login-form">
				<?php echo form_open('SS/login'); ?>
				<?php
					echo "<div class='error_msg'>";
      				if (isset($error_message)) {
       					echo $error_message;
      				}
     				echo validation_errors();
     				echo "</div>";
     			?>
					<input type="text" name="username" placeholder="Username/Email">
					<br>
					<input type="password" name="password" placeholder="Password">
					<br>
					<input style="background-color:hsla(9, 100%, 64%, 0.5);" type="submit" name="login-btn" value="Log In">
				<?php echo form_close(); ?>
					<a style="background-color:hsla(9, 100%, 64%, 0.5);" href="<?php echo base_url(); ?>SS/form"><input style="background-color:hsla(9, 100%, 64%, 0.5);" type="submit" value="Sign Up"></a>

			</div>

		</div>	
	</center>
	
	
</body>
</html>
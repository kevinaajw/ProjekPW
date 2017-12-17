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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="login">
<header class="navbar">
<div class="row">
	<ul>
		<li class="col-offset-2 col-9" style="text-align:left;">
			<a href="<?php echo base_url(); ?>SS/home">
				<i class="fa fa-camera-retro" aria-hidden="true"></i>
				<h3>Stalk Shoot</h3>
			</a>
		</li>
	</ul>
</div>
</header>
		<div class="container">
			<div class="login-form">
				<h1>Login</h1>
				<?php echo form_open('SS/login'); ?>
				<?php
					echo "<div class='error_msg'>";
      				if (isset($error_message)) {
       					echo $error_message;
      				}
     				echo validation_errors();
     				echo "</div>";
				 ?>
				 <div class="content">
					 <input type="text" name="username" placeholder="Username/Email" required>
				 </div>
				 <div class="content">
					 <input type="password" name="password" placeholder="Password" required>
				 </div>
				 <div class="content">
					 <input type="submit" class="login-btn" value="Log In">
				 </div>
				<?php echo form_close(); ?>
				<div class="content">
					Don't have an account?<a style="color:blue; font-weight: bold; text-decoration: none;" href="<?php echo base_url(); ?>SS/form"> Sign up</a>
				</div>

			</div>

		</div>	
	</center>
	
	
</body>
</html>
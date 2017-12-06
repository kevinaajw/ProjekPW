<!DOCTYPE html>
<html lang="en">
<?php
if(!isset($this->session->userdata['logged_in'])){header('location:login');}
else {
 $username = ($this->session->userdata['logged_in']['username']);
 }
?>
<head>
	<meta charset="UTF-8">
	<title>Profile</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/simple-grid.min.css">
</head>
<body class="profile">
	<header class="navbar">
		<ul>
			<a href="<?php echo base_url(); ?>SS/home"><h3>Stalk Shoot</h3></a>
			<a class="menu right" href="<?php echo base_url(); ?>SS/profile"> <img class="profile-icon right" src="<?php echo base_url(); ?>static/img/profile.png" alt="Profile" width="20px"></a>

			<a class="menu right" href="<?php echo base_url(); ?>SS/logout"><img class="profile-icon right" src="<?php echo base_url(); ?>static/img/logout.png" alt="Profile" width="20px"></a>
			<center><input class="search-box" type="input" name="search" placeholder="Search"></center>
		</ul>
	</header>
	
	<div class="container">
		<img class="friends-photo" src="<?php echo base_url(); ?>static/img/profilefr.jpg" width="100%" height="100%">
		<p class="profile-name"><?php echo $username ?></p>
		<a href="<?php echo base_url(); ?>SS/upload"><div input style="background-color:hsla(9, 100%, 64%, 0.5);" class="gallery-header">
			<h2>Upload</h2>
		</div>
		</a>

		<div class="gallery-header">
			<h2>Photos</h2>
		</div>

		<div class="profile-gallery row">
			<a href="<?php echo base_url(); ?>SS/detail"><img class="gallery-photo col-4" src="<?php echo base_url(); ?>static/img/10.jpg" alt=""></a>
			<a href="<?php echo base_url(); ?>SS/detail"><img class="gallery-photo col-4" src="<?php echo base_url(); ?>static/img/9.jpg" alt="">
			<a href="<?php echo base_url(); ?>SS/detail"><img class="gallery-photo col-4" src="<?php echo base_url(); ?>static/img/8.png" alt="">
			<a href="<?php echo base_url(); ?>SS/detail"><img class="gallery-photo col-4" src="<?php echo base_url(); ?>static/img/5.jpg" alt="">
			<a href="<?php echo base_url(); ?>SS/detail"><img class="gallery-photo col-4" src="<?php echo base_url(); ?>static/img/7.png" alt="">
			<a href="<?php echo base_url(); ?>SS/detail"><img class="gallery-photo col-4" src="<?php echo base_url(); ?>static/img/2.jpg" alt="">
		</div>

	</div>

</body>
</html>
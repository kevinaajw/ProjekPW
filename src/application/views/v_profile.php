<!DOCTYPE html>
<html lang="en">
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
		<p class="profile-name">Liviarzky</p>
		

		<div class="gallery-header">
			<h2>Photos</h2>
		</div>

		<div class="profile-gallery row">
			<img class="gallery-photo col-4" src="<?php echo base_url(); ?>static/img/10.jpg" alt="">
			<img class="gallery-photo col-4" src="<?php echo base_url(); ?>static/img/9.jpg" alt="">
			<img class="gallery-photo col-4" src="<?php echo base_url(); ?>static/img/8.png" alt="">
			<img class="gallery-photo col-4" src="<?php echo base_url(); ?>static/img/5.jpg" alt="">
			<img class="gallery-photo col-4" src="<?php echo base_url(); ?>static/img/7.png" alt="">
			<img class="gallery-photo col-4" src="<?php echo base_url(); ?>static/img/2.jpg" alt="">
		</div>

	</div>

</body>
</html>
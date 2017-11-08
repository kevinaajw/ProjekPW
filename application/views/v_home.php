<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/style.css">
	<link rel="stylesheet" href="?php echo base_url(); ?>static/css/simple-grid.min.css">
</head>
<body class="home">
	<header class="navbar">
		<ul>
			<h3>Stalk Shoot</h3>
			<a class="menu right" href="profile.html"> <img class="profile-icon right" src="<?php echo base_url(); ?>static/img/profile.png" alt="Profile" width="20px"></a>
			<a class="menu right" href=""><img class="profile-icon right" src="<?php echo base_url(); ?>static/img/logout.png" alt="Profile" width="20px"></a>
			<center><input class="search-box" type="input" name="search" placeholder="Search"></center>
		</ul>
	</header>
	
	<center>
		<div class="container">
			<div class="post">
				<img class="friends-photo" src="<?php echo base_url(); ?>static/img/profilefr.jpg" alt="">
				<p class="friends-name">Sisyly12</p>
				<div class="home-post">
					<img src="<?php echo base_url(); ?>static/img/3.jpg" width="100%" height="100%">
				</div>
			</div>
			<div class="post">
				<img class="friends-photo" src="<?php echo base_url(); ?>static/img/profilefr2.jpg" alt="">
				<p class="friends-name">Jokoirvy</p>
				<div class="home-post">
					<img src="<?php echo base_url(); ?>static/img/4.jpg" width="100%" height="100%">
				</div>
			</div>
			<div class="post">
				<img class="friends-photo" src="<?php echo base_url(); ?>static/img/profilefr3.jpg" alt="">
				<p class="friends-name">vevydrey</p>
				<div class="home-post">
					<img src="<?php echo base_url(); ?>static/img/6.jpg" width="100%" height="100%">
				</div>
			</div>
		</div>
	</center>	

</body>
</html>

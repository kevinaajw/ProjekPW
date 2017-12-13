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
	<title>Home</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/simple-grid.min.css">
</head>
<body class="home">
	<header class="navbar">
		<ul>
			<a href="<?php echo base_url(); ?>SS/home"><h3>Stalk Shoot</h3></a>
			<a class="menu right" href="<?php echo base_url(); ?>SS/profile"> <img class="profile-icon right" src="<?php echo base_url(); ?>static/img/profile.png" alt="Profile" width="20px"></a>

			<a class="menu right" href="<?php echo base_url(); ?>SS/logout"><img class="profile-icon right" src="<?php echo base_url(); ?>static/img/logout.png" alt="Profile" width="20px"></a>
			<center>
				<form method="post" action="<?php echo base_url(); ?>SS/user_search">
					<input class="search-box" type="input" name="search" placeholder="Search">
					<input type="submit" name="submit" value="Find" /></center>
				</form>
			</center>
		</ul>

	</header>
	
	<center>
		<div class="container">
			<?php foreach($response->result() as $row) { ?>
			<div class="post">
				<a href="<?php echo base_url().'SS/profilfriend/'.$row->u_id;?>">
					<img class="friends-photo" src="<?php echo base_url();?>static/img/<?php echo $row->photo_id ?>" alt="">
				</a>
				<a href="<?php echo base_url().'SS/profilfriend/'.$row->u_id;?>">
					<p class="friends-name"><?php echo $row->p_user ?></p>
				</a>
				<div class="home-post">
					<img src="<?php echo $row->path.$row->img ?>" width="100%" height="100%">
				</div>
			</div>
			<?php } ?>
	</center>	

</body>
</html>

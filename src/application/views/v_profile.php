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
			<center>
				<form method="post" action="<?php echo base_url(); ?>SS/user_search">
					<input class="search-box" type="input" name="search" placeholder="Search">
					<input type="submit" name="submit" value="Find" /></center>
				</form>
			</center>
		</ul>
	</header>
	
	<div class="container">
		<?php foreach($profile->result() as $row) {} ?>
		<img class="friends-photo" src="<?php echo base_url();?>static/img/<?php echo $row->photo_id ?>" alt="">
		<p class="profile-name"><?php echo $username ?></p>
		<a href="<?php echo base_url(); ?>SS/upload"><div input style="background-color:hsla(9, 100%, 64%, 0.5);" class="gallery-header">
			<h2>Upload</h2>
		</div>
		</a>

		<div class="gallery-header">
			<h2>Photos</h2>
		</div>

		<div class="profile-gallery row">
			<?php foreach($response->result() as $row) { ?>
			<a href="<?php echo base_url().'SS/detail/'.$row->id;?>"><img class="gallery-photo col-4" src="<?php echo $row->path.$row->img ?>" alt=""></a>
			<?php } ?>
		</div>

	</div>

</body>
</html>
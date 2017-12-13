<!DOCTYPE html>
<html lang="en">
<?php
if(!isset($this->session->userdata['logged_in'])){header('location:login');}
else {
 $username = ($this->session->userdata['logged_in']['username']);
 $id = ($this->session->userdata['logged_in']['id']);
 }
?>
<head>
	<meta charset="UTF-8">
	<title>Profile</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/simple-grid.min.css">
</head>
<body class="profilfriend">
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
		<?php foreach($response->result() as $row) {} ?>
		<img class="friends-photo" src="<?php echo base_url();?>static/img/<?php echo $row->photo_id ?>" alt="">
		<p class="profile-name"><?php echo $row->username ?></p>
		<right>
			<?php if($id == $row->id){ ?>
				<input type="submit" class="gallery-header col-2" style="background-color:hsla(9, 100%, 64%, 0.5);" value="Your Profile">
			<?php } else { ?>
				<?php foreach($friends as $data) {} 
					if(empty($data)){ ?>
					<form method="post" action="<?php echo base_url(); ?>SS/add_friend">
					<input type="hidden" name="id" value="<?php echo $row->id ?>">
					<input type="hidden" name="username_friend" value="<?php echo $row->username ?>">
					<input type="hidden" name="username" value="<?php echo $username ?>">
					<input style="background-color:blue(9, 100%, 64%, 0.5); font-size: 35px;" type="submit" name="add" value="Add">
					</form>
				<?php } else { ?>
					<input type="submit" class="gallery-header col-2" style="background-color:hsla(9, 100%, 64%, 0.5);" value="Friend">
				<?php } } ?>
		</right>

		<div class="gallery-header">
			<h2>Photos</h2>
		</div>

		<div class="profile-gallery row">
			<?php foreach($photo->result() as $row) { ?>
			<a href="<?php echo base_url().'SS/detail/'.$row->id.'/'.$row->username;?>"><img class="gallery-photo col-4" src="<?php echo $row->path.$row->img ?>" alt=""></a>
			<?php } ?>
		</div>

	</div>

</body>
</html>
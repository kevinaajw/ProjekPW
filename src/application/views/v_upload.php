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
	<title>Upload</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/simple-grid.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body class="upload">
	<header class="navbar">
	
		<ul>
			<a href="<?php echo base_url(); ?>SS/home"><h3>Stalk Shoot</h3></a>
			<a class="menu right" href="<?php echo base_url(); ?>SS/profile"> <img class="profile-icon right" src="<?php echo base_url(); ?>static/img/profile.png" alt="Profile" width="20px"></a>

			<a class="menu right" href="<?php echo base_url(); ?>SS/logout"><img class="profile-icon right" src="<?php echo base_url(); ?>static/img/logout.png" alt="Profile" width="20px"></a>
			<center><input class="search-box" type="input" name="search" placeholder="Search"></center>
		</ul>
	</header>
<center>
	<br>
		<form id="form1" method="post" action="<?php echo base_url(); ?>SS/upload_photo" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $id ?>">
			<input type="hidden" name="username" value="<?php echo $username ?>">
			<div class="home-post">
				<img id="blah" class="imgpreview" src="#" alt="your image"/>
			</div>	
			<input type="file" id="imgInp" name="foto" accept='image/*'>
			<input type="submit" name="submit" class="gallery-header col-2" style="background-color:hsla(9, 100%, 64%, 0.5);" value="Done">
		</form>
  

</center>	
<script type="text/javascript">
function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#imgInp").change(function() {
  readURL(this);
});
</script>
</body>
</html>

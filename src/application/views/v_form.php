<!DOCTYPE html>
<html>
<head>
	<title>Daftar StalkShoot</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/simple-grid.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
	<div class="container">		
		<div class="col-md-6">
			<center><h1>Daftar Akun di Stalk Shoot</h1></center>
			<br/>

			<form id="form1" method="post" action="<?php echo base_url(); ?>SS/register_akun" enctype="multipart/form-data">
				<div class="form-group">
					<label>Nama Lengkap :</label>
					<input type="text" class="form-control" name="nama" required>
				</div>
				<div class="form-group">
					<label>Email :</label>
            		<input type="text" class="form-control" name="email" required>
				</div>
				<div class="form-group">
					<label>Username :</label>
					<input type="text" class="form-control" name="username" required>
				</div>
				<div class="form-group">
					<label>Password :</label>
					<input type="password" class="form-control" name="password" required>
				</div>
				<div class="form-group">
					<label>Photo Profile :</label>
					<img id="blah" class="imgpreview" src="#" alt="your image"/>
				</div>
				<div class="form-group">
					<input type="file" id="imgInp" name="foto" accept='image/*'>
				</div>	
				<input type="submit" class="btn btn-primary" value="Submit" name="submit">
			</form>		
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
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
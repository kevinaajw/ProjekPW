<!DOCTYPE html>
<html>

<head>
    <title>Signup</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/simple-grid.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
            <form action="<?php echo base_url(); ?>SS/register_akun" method="post" id="form1" enctype="multipart/form-data">
                <?php
					echo "<div class='error_msg'>";
      				if (isset($error_message)) {
       					echo $error_message;
      				}
     				echo validation_errors();
     				echo "</div>";
				 ?>
                    <div class="content">
                        <input type="text" class="form-control" name="nama" placeholder="full name" required>
                    </div>
                    <div class="content">
                        <input type="text" class="form-control" name="email" placeholder="email" required>
                    </div>
                    <div class="content">
                        <input type="text" class="form-control" name="username" placeholder="username" required>
                    </div>
                    <div class="content">
                        <input type="password" class="form-control" name="password" placeholder="password" required>
                    </div>
                    <div class="content">
                        <input type="file" id="imgInp" name="foto" accept='image/*'>
                    </div>
                    <div class="content">
                        <input type="submit" class="login-btn" value="Submit" name="submit">
                    </div>
                    <?php echo form_close(); ?>
                    <div class="content">
                        have an account?<a style="color:blue; font-weight: bold; text-decoration: none;" href="<?php echo base_url(); ?>SS/login"> Sign In</a>
                    </div>

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
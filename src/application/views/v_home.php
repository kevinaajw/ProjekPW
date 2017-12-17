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
        <title>Stalkshoot</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/simple-grid.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body class="home">
        <header class="navbar">
            <div class="row">
                <ul>
                    <li class="col-offset-2 col-3">
                        <a href="<?php echo base_url(); ?>SS/home">
                            <i class="fa fa-camera-retro" aria-hidden="true"></i>
                            <h3>Stalk Shoot</h3>
                        </a>
                    </li>
                    <li class="col-3">
                        <form method="post" action="<?php echo base_url(); ?>SS/user_search">
                            <input class="search-box" type="input" name="search" placeholder="Search">
                        </form>
                    </li>
                    <li class="col-3">
                        <a class="menu" href="<?php echo base_url(); ?>SS/profile">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </a>
                        <a class="menu" href="<?php echo base_url(); ?>SS/logout">
                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>

        </header>
        <div class="container">
            <?php foreach($response->result() as $row) { ?>
            <div class="post">
                <a href="<?php echo base_url().'SS/profilfriend/'.$row->u_id;?>">
									<img class="friends-photo" src="<?php echo base_url();?>static/img/<?php echo $row->photo_id ?>" alt="">
								</a>
                <a href="<?php echo base_url().'SS/profilfriend/'.$row->u_id;?>">
                    <p class="friends-name">
                        <?php echo $row->p_user ?>
                    </p>
                </a>
                <div class="home-post">
                    <img src="<?php echo $row->path.$row->img ?>" width="100%" height="100%">
                </div>
            </div>
            <?php } ?>
        </div>
    </body>

</html>
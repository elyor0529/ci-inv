<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>

    <link rel="stylesheet" href="<?php echo base_url("assets/") ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url("assets/") ?>css/bootstrap-theme.min.css">
    <link rel="icon" type="decorated-typography-set-2-number-7-16-244412.png"
          href="<?php echo base_url("/assets/") ?>favicon/logo%202.png">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body {
            background-image: url("<?php echo base_url("assets/") ?>favicon/mj1.jpg");
            background-repeat: repeat;
            background-size: cover;

        }

        .container {
            width: 300px;
            border: 2px;
            margin-top: 100px;
            box-sizing: border-box;
            display: block;
            box-shadow: 3px 4px 10px rgba(0, 0, 0, .3),
            0px 6px 9px rgba(0, 0, 0, .3),
            8px 0px 4px rgba(0, 0, 0, .3),
            0px 8px 8px rgba(0, 0, 0, .3),
            9px 0px 5px rgba(0, 0, 0, .3);
        }

        .form-signin-heading,
        .btn, .user {
            display: block;
            box-sizing: border-box;
            margin-top: 20px;
            margin-bottom: 20px;
        }

    </style>

</head>

<body>

<div class="container">
    <form class="form-signin" method="post" action="<?php echo site_url('auth/login_validation'); ?>">
        <h2 class="form-signin-heading" style="text-align:center; text-shadow:3px 2px 4px rgba(0,0,0,.5);">
            <image src="<?php echo base_url("assets/") ?>favicon/logo%202.png" alt="logo" width="40px">MJ Inventory
        </h2>

        <?php if (isset($_SESSION["error"])) { ?>
            <div class="alert alert-danger alert-dismissible fade in" role=alert>
                <button type=button class=close data-dismiss=alert aria-label=Close><span aria-hidden=true>&times;</span></button>
                <?php
                echo $this->session->flashdata("error");
                ?>
            </div>
        <?php } ?>

        <label for="inputText" class="sr-only user">Username</label>
        <input type="text" name="username" id="inputText" class="form-control user" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary  btn-block" type="submit">Login</button>

    </form>

</div> <!-- /container -->


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php echo base_url("assets/") ?>js/jquery.js"></script>
<script src="<?php echo base_url("assets/") ?>js/bootstrap.min.js"></script>
</body>
</html>

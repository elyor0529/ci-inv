<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
          href="https://uxsolutions.github.io/bootstrap-datepicker/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .container {
            width: 300px;
            border: 2px;
            margin-top: 100px;
            box-sizing: border-box;
            display: block;
            box-shadow: 3px 4px 0px rgba(0, 0, 0, .3),
            0px 3px 4px rgba(0, 0, 0, .5),
            3px 0px 4px rgba(0, 0, 0, .5);
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
    <form class="form-signin" method="post" action="<?php echo site_url('main/login_validation'); ?>">
        <h2 class="form-signin-heading" style="text-align:center; text-shadow:3px 2px 4px rgba(0,0,0,.5);">MJ
            Inventory</h2>

        <?php if (isset($_SESSION["error"])) { ?>
            <div class="alert alert-danger alert-dismissible fade in" role=alert>
                <button type=button class=close data-dismiss=alert aria-label=Close><span
                            aria-hidden=true>&times;</span>
                </button>
                <?php
                echo $this->session->flashdata("error");
                ?>
            </div>
        <?php } ?>

        <label for="inputText" class="sr-only user">Username</label>
        <input type="text" name="username" id="inputText" class="form-control user" placeholder="Username" required
               autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>

    </form>

</div> <!-- /container -->


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script type="text/javascript"
        src="https://uxsolutions.github.io/bootstrap-datepicker/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
</body>
</html>

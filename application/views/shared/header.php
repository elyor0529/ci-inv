<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <link rel="icon" type="decor  ated-typography-set-2-number-7-16-244412.png"
          href="<?php echo base_url("/assets/") ?>favicon/logo%202.png">

    <link rel="stylesheet" href="<?php echo base_url("assets/") ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url("assets/") ?>css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo base_url("assets/") ?>sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" href="<?php echo base_url("assets/") ?>TableExport/css/tableexport.css">
    <link rel="stylesheet" href="<?php echo base_url("assets/") ?>css/toggles-light.css">
    <link rel="stylesheet" href="<?php echo base_url("assets/") ?>css/sb-admin.css">
    <link rel="stylesheet" href="<?php echo base_url("assets/") ?>font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url("assets/") ?>amcharts/plugins/export/export.css" type="text/css"
          media="all"/>

    <style>
        .form-group {
            margin: 20px;
            display: block;
            width: 160px;
            color: #262626;
        }

        div .btn_style {
            width: 150px;
            display: block;
            margin: 10px 300px;
            border-radius: 40px;
            box-shadow: 2px 2px 3px rgba(0, 0, 0, .5);
        }

        .btn {
            margin: 3px;
            border-radius: 40px;
            box-shadow: 2px 2px 3px rgba(0, 0, 0, .5);
        }

        .paging-3d {
            -webkit-box-shadow: 6px 3px 71px -2px rgba(0, 0, 0, 1);
            -moz-box-shadow: 6px 3px 71px -2px rgba(0, 0, 0, 1);
            box-shadow: 6px 3px 71px -2px rgba(0, 0, 0, 1);
        }

        .logo {
            margin-top: 10px;
            margin-left: 10px;
            float: left;
        }

        .logoMJ {
            text-shadow: 0px 3px 1px rgba(0, 0, 0, .4),
            2px 0px 2px rgba(0, 0, 0, .4),
            0px 3px 0px rgba(0, 0, 0, .2) !important;
        }

        #status-list li {
            text-decoration: none;
            list-style-type: none;
            padding-top: 10px;
        }

        #status-list li a:hover {
            text-decoration: none;
            color: #fff;
            background: transparent !important;
        }

        #type-list li {
            text-decoration: none;
            list-style-type: none;
            padding-top: 10px;
        }

        #type-list li a:hover {
            text-decoration: none;
            color: #fff;
            background: transparent !important;
        }

        /*======================== toggle buttuon ============================*/
        .switch {
            position: relative;
            display: inline-block;
            width: 50px;
            height: 24px;
            top: 7px;
            left: 35px;

        }

        /* Hide default HTML checkbox */
        .switch input {
            display: none;
        }

        /* The slider */
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: red;
            -webkit-transition: .4s;
            transition: .4s;

        }

        .slider:before {
            position: absolute;
            content: "";
            height: 18px;
            width: 18px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #2196F3;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 50px;
        }

        .slider.round:before {
            border-radius: 50%;
        }

        #chartdiv {
            width: 100%;
            height: 500px;
        }

        .amcharts-chart-div a {
	         display:none !important;
        }

        .admin_img img
        {
            -webkit-box-shadow: 12px 25px 20px #777;
            -moz-box-shadow: 12px 25px 20px #777;
            box-shadow: 12px 25px 20px #777;
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            transform: rotate(0deg);
            margin-bottom: 40px;
        }
        .avatar{
            margin-top:-260px;
            position: relative;
            left:-40%;
            border-radius:50%;
            background-color:#faf2cc;
            -webkit-box-shadow: -2px 6px 42px 9px rgba(255,255,255,.95);
            -moz-box-shadow: -2px 6px 42px 9px rgba(255,255,255,.95);
            box-shadow: -2px 6px 42px 9px rgba(255,255,255,.95);
        }
        .profile_bg{
            background-image:  url("<?php echo base_url("assets/") ?>favicon/profile.jpg");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            -webkit-box-shadow: 12px 15px 20px rgba(0,0,0,0.75);
            -moz-box-shadow: 12px 15px 20px rgba(0,0,0,0.75);
            box-shadow: 12px 15px 20px rgba(0,0,0,0.75);
            border-radius: 10px;
        }
        .type{
            font-style: italic;
            color:#faf2cc;
            font-size: medium;
            font-weight: bold;
            background: url("<?php echo base_url("assets/") ?>favicon/it2.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            width:60%;
            -webkit-box-shadow: 12px 15px 20px rgba(0,0,0,0.75);
            -moz-box-shadow: 12px 15px 20px rgba(0,0,0,0.75);
            box-shadow: 12px 15px 20px rgba(0,0,0,0.75);
            border-radius: 10px;

        }
        .type_add{
            margin:20px;
            color:#fff;
            background: url("<?php echo base_url("assets/") ?>favicon/madinat.jpg");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            width:50%;
            -webkit-box-shadow: 12px 15px 20px rgba(0,0,0,0.75);
            -moz-box-shadow: 12px 15px 20px rgba(0,0,0,0.75);
            box-shadow: 12px 15px 20px rgba(0,0,0,0.75);
            border-radius: 10px;
        }
        .type_edit{
            margin:20px;
            color:#fff;
            background: url("<?php echo base_url("assets/") ?>favicon/it2.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            width:50%;
            -webkit-box-shadow: 12px 15px 20px rgba(0,0,0,0.75);
            -moz-box-shadow: 12px 15px 20px rgba(0,0,0,0.75);
            box-shadow: 12px 15px 20px rgba(0,0,0,0.75);
            border-radius: 10px;
        }
        .inv_bg{
            background: rgba(74,74,74,1);
            background: -moz-linear-gradient(left, rgba(74,74,74,1) 0%, rgba(97,97,97,0.76) 25%, rgba(53,53,53,0.36) 67%, rgba(28,28,28,0.36) 91%, rgba(18,18,18,0.36) 100%);
            background: -webkit-gradient(left top, right top, color-stop(0%, rgba(74,74,74,1)), color-stop(25%, rgba(97,97,97,0.76)), color-stop(67%, rgba(53,53,53,0.36)), color-stop(91%, rgba(28,28,28,0.36)), color-stop(100%, rgba(18,18,18,0.36)));
            background: -webkit-linear-gradient(left, rgba(74,74,74,1) 0%, rgba(97,97,97,0.76) 25%, rgba(53,53,53,0.36) 67%, rgba(28,28,28,0.36) 91%, rgba(18,18,18,0.36) 100%);
            background: -o-linear-gradient(left, rgba(74,74,74,1) 0%, rgba(97,97,97,0.76) 25%, rgba(53,53,53,0.36) 67%, rgba(28,28,28,0.36) 91%, rgba(18,18,18,0.36) 100%);
            background: -ms-linear-gradient(left, rgba(74,74,74,1) 0%, rgba(97,97,97,0.76) 25%, rgba(53,53,53,0.36) 67%, rgba(28,28,28,0.36) 91%, rgba(18,18,18,0.36) 100%);
            background: linear-gradient(to right, rgba(74,74,74,1) 0%, rgba(97,97,97,0.76) 25%, rgba(53,53,53,0.36) 67%, rgba(28,28,28,0.36) 91%, rgba(18,18,18,0.36) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4a4a4a', endColorstr='#121212', GradientType=1 );
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            -webkit-box-shadow: 12px 15px 20px rgba(0,0,0,0.75);
            -moz-box-shadow: 12px 15px 20px rgba(0,0,0,0.75);
            box-shadow: 12px 15px 20px rgba(0,0,0,0.75);
            border-radius: 10px;
            margin-bottom: 50px;
        }
        .img-rounded{
            -webkit-box-shadow: 2px 5px 10px rgba(0,0,0,0.75);
            -moz-box-shadow: 2px 5px 10px rgba(0,0,0,0.75);
            box-shadow: 2px 5px 10px rgba(0,0,0,0.75);
            border-radius: 10px;
        }



    </style>

</head>
<body>
<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <image class="logo" src="<?php echo base_url("/assets/") ?>favicon/logo%202.png" alt="logo" width="30px">
                <a width="500px" class="navbar-brand logoMJ" href="<?php echo base_url("/") ?>"> Madinat Jumeirah </a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="fa fa-user"></i> <?php echo $_SESSION["user_name"]; ?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?php echo base_url('/dashboard/profile'); ?>"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="<?php echo base_url("/auth/logout") ?>"><i class="fa fa-fw fa-power-off"></i> Log
                            Out</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <!-- ==================================================================================================== -->
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="<?php echo base_url("/dashboard/index") ?>"><i class="fa fa-fw fa-home fa-2x"></i>
                        Dashboard</a>
                </li>
                <?php if (strcmp($_SESSION['role_id'], "1") == 0) { ?>
                    <li>
                        <a href="<?php echo base_url("/role/index") ?>"><i class="fa fa-fw fa-bar-chart-o fa-2x"></i>
                            Roles</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url("/user/index") ?>"><i class="fa fa-users fa-2x"></i> Users</a>
                    </li>
                <?php }
                if ((strcmp($_SESSION['role_id'], "2") == 0)) { ?>
                    <li>
                        <a href="<?php echo base_url("/inventory/index") ?>"><i class="fa fa-fw fa-desktop fa-2x"></i>
                            Inventories</a>
                    </li>
                <?php }
                if ((strcmp($_SESSION['role_id'], "3") == 0)) { ?>

                    <li>
                        <a href="<?php echo base_url("/status/index") ?>"><i class="fa fa-fw fa-code-fork fa-2x"></i>
                            Statuses</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url("/type/index") ?>"><i class="fa fa-fw fa-cogs fa-2x"></i> Types</a>
                    </li>

                    <li>
                        <a href="javascript:;" class="dropdown" data-toggle="collapse" data-target="#report-list"><i
                                    class="fa fa-fw fa-files-o fa-2x"></i>Reports<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="report-list" class="collapse">
                            <li>
                                <a href="<?php echo base_url("/dashboard/report") ?>"><i
                                            class="fa fa-fw fa-list fa-2x"></i> All </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="dropdown" data-toggle="collapse"
                                   data-target="#status-list">
                                    <i class="fa fa-fw fa-share-square-o"></i> By Status <i
                                            class="fa fa-fw fa-caret-down"></i>
                                </a>
                                <ul id="status-list" class="collapse">
                                    <?php
                                    foreach ($statuses as $status) {
                                        ?>
                                        <li>
                                            <a href="<?php echo base_url("/dashboard/report?status=" . $status->id) ?>"
                                               class="text-muted ">
                                                <i class="fa fa-fw fa-sign-in"></i> <?php echo $status->name; ?>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:;" class="dropdown" data-toggle="collapse" data-target="#type-list">
                                    <i class="fa fa-fw fa-stack-overflow"></i>By Type <i
                                            class="fa fa-fw fa-caret-down"></i>
                                </a>
                                <ul id="type-list" class="collapse">
                                    <?php
                                    foreach ($types as $type) {
                                        ?>
                                        <li>
                                            <a href="<?php echo base_url("/dashboard/report?type=" . $type->id) ?>"
                                               class="text-muted ">
                                                <i class="fa fa-fw fa-sign-in"></i> <?php echo $type->name; ?>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </li>
                        </ul>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <small><?php echo $title; ?></small>
                    </h1>
                    <!-- /.row -->

                    <!-- =================================Flashdata messages============================================= -->
                    <div id="flash-message">
                        <?php if ($this->session->flashdata('success')) { ?>
                            <div class="alert alert-success">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
                            </div>

                        <?php } else if ($this->session->flashdata('error')) { ?>

                            <div class="alert alert-danger">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
                            </div>

                        <?php } else if ($this->session->flashdata('warning')) { ?>

                            <div class="alert alert-warning">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                <strong>Warning!</strong> <?php echo $this->session->flashdata('warning'); ?>
                            </div>

                        <?php } else if ($this->session->flashdata('info')) { ?>

                            <div class="alert alert-info">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                <strong>Info!</strong> <?php echo $this->session->flashdata('info'); ?>
                            </div>
                        <?php } ?>
                    </div>

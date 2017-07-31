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
    <link rel="icon" type="decor  ated-typography-set-2-number-7-16-244412.png"
          href="<?php echo base_url("/assets/") ?>favicon/logo%202.png">

    <!-- Custom CSS -->
    <link href="<?php echo base_url("/assets/") ?>css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url("assets/") ?>font-awesome/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">


    <style>
        .form-group {
            margin: 20px;
            display: block;
            width: 160px;
            color: white;
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

        .nav-ul .arrow:after {
            content: '\203A';
            float: right;
            margin-right: 20px;
            transform: rotate(90deg);
            -webkit-transform: rotate(90deg);
            -moz-transform: rotate(90deg);
            -o-transform: rotate(90deg);
            transition: .5s;
        }

        .nav-ul ul li a:before {
            content: '\203A';
            margin-right: 10px;
        }

        .main-nav li.click .arrow:after {
            content: '\2039';
            transition: .3s;
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
            <a width="350px" class="navbar-brand" href="<?php echo base_url("/") ?>">Madinat Jumeirah</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="fa fa-user"></i> Sam <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="<?php echo base_url("/main/logout") ?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <!-- ==================================================================================================== -->
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <!-- <?php // echo base_url("assets/docs/admin/charts.html")?> -->
        <div class="collapse navbar-collapse navbar-ex1-collapse" id="accordion">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="<?php echo base_url("/dashboard/index") ?>"><i class="fa fa-fw fa-home fa-2x"></i>
                        Dashboard</a>
                </li>
                <li>
                    <a href="<?php echo base_url("/role/index") ?>"><i class="fa fa-fw fa-bar-chart-o fa-2x"></i> Roles</a>
                </li>
                <li>
                    <a href="<?php echo base_url("/user/index") ?>"><i class="fa fa-users fa-2x"></i> Users</a>
                </li>
                <li>
                    <a href="<?php echo base_url("/status/index") ?>"><i class="fa fa-fw fa-code-fork fa-2x"></i>
                        Statuses</a>
                </li>
                <li>
                    <a href="<?php echo base_url("/type/index") ?>"><i class="fa fa-fw fa-cogs fa-2x"></i> Types</a>
                </li>
                <li>
                    <a href="<?php echo base_url("/inventory/index") ?>"><i class="fa fa-fw fa-desktop fa-2x"></i>
                        Inventories</a>
                </li>
                <li>
                    <a href="javascript:;" class="dropdown" data-toggle="collapse" data-target="#demo"><i
                                class="fa fa-fw fa-file fa-2x"></i>Reports<i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="demo" class="collapse">
                        <li>
                            <a href="<?php echo base_url("/report/index?status=1") ?>">OLD</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("/report/index?status=2") ?>">NEW</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("/report/index?status=3") ?>">FADA</a>
                        </li>
                    </ul>
                </li>
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

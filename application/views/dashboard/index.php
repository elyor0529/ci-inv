<?php if ($_SESSION["role_id"] == ROLE_ADMIN) { ?>
    <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-users fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $total_users; ?></div>
                            <div><h4>Total</h4></div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">

                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-user fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $total_active_users; ?></div>
                            <div><h4>Active</h4></div>
                        </div>
                    </div>
                </div>

                <div class="panel-footer">

                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-user fa-5x" aria-hidden="true"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $total_not_active_users; ?></div>
                            <div><h4>Not Active</h4></div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">

                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 admin_img" style="margin-top: 30px;">
                <img src="<?php echo base_url("/assets/") ?>favicon/hero.jpg">
            </div>
        </div>
    </div>
    <div><h6>&copy; <?php echo date("Y"); ?> created by Samandar Mirzaev</h6></div>

<?php } else { ?>
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-file-archive-o fa-5x" aria-hidden="true"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $total_status; ?></div>
                            <div><h4>Total</h4></div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">

                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-file-text fa-5x" aria-hidden="true"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $new_status; ?></div>
                            <div><h4>NEW</h4></div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">

                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-file-text fa-5x" aria-hidden="true"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $old_status; ?></div>
                            <div><h4>OLD</h4></div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">

                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-file-text fa-5x" aria-hidden="true"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $fada_status; ?></div>
                            <div><h4>FADA</h4></div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">

                    </div>
                </a>
            </div>
        </div>
    </div>


<?php } ?>
<?php if ($_SESSION["role_id"] == ROLE_OPERATOR) { ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div id="chartdiv"></div>
        </div>
    </div>

<?php } ?>
<?php if($_SESSION["role_id"] == ROLE_USER){?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 admin_img">
                <img src="<?php echo base_url("/assets/") ?>favicon/hero1.jpg" width="100%" height="70%">
            </div>
        </div>
    </div>
    <div><h6>&copy; <?php echo date("Y"); ?> created by Samandar Mirzaev</h6></div>
<?php }?>

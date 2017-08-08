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

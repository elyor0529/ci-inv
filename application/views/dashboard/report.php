<form class="navbar-form" role="search" action="" method="get" style="float:right;">
    <input type="hidden" name="status" value="<?php echo isset($status) ? $status : ""; ?>">
    <input type="hidden" name="type" value="<?php echo isset($type) ? $type : ""; ?>">
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="q" size="15px; ">
        <div class="input-group-btn" style="margin-top:30px;">
            <button class="btn btn-default " type="submit" value="Search" style="margin-top:-1px !important;"><i
                        class="glyphicon glyphicon-search"></i></button>
        </div>
    </div>
    <select class="form-control pull-left" id="location" name="location" style="margin-right: 20px;">
        <option value="">-- All --</option>
        <?php foreach ($locations as $row) { ?>
            <option value="<?php echo $row->location ?>"<?php echo $row->location == (array_key_exists("location", $_GET) ? $_GET["location"] : "") ? "selected" : ""; ?>><?php echo $row->location ?></option>
        <?php } ?>
    </select>
</form>
<div class="clearfix"></div>
<div class="table-responsive">
    <table class="table table-bordered table-striped" id="pivot-table">
        <thead>
        <tr>
            <th></th>
            <th>Type</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>Serial Number</th>
            <th>Location</th>
            <th>Size (inch)</th>
            <th>Status</th>
            <th>Description</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($results as $row) {

            $img = base_url('/assets/upload/' . $row->img);
            ?>
            <tr>
                <td class="text-center">
                    <a href="<?php echo $img; ?>" target="_blank">
                        <image width="80" height="60" class="img-rounded" src="<?php echo $img; ?>"/>
                    </a>
                </td>
                <?php foreach ($types as $type) {
                    if ($type->id == $row->type_id) {
                        ?>
                        <td><?php echo $type->name ?></td>
                    <?php }
                } ?>

                <td><?php echo $row->name ?></td>
                <td><?php echo $row->quantity ?></td>
                <td><?php echo $row->serial_number ?></td>
                <td><?php echo $row->location ?></td>
                <td><?php echo $row->size ?></td>
                <?php foreach ($statuses as $status) {
                    if ($status->id == $row->status_id) {
                        ?>
                        <td><?php echo $status->name ?></td>
                    <?php }
                } ?>
                <td><?php echo $row->description ?></td>
                <td><?php echo date("d/m/Y"); ?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>

<div class="text-center">
    <?php echo $pager; ?>
</div>

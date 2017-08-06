<form class="navbar-form" role="search" action="" method = "post" style="float:right;">
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name = "keyword"size="15px; ">
        <div class="input-group-btn" style="margin-top:30px;">
            <button class="btn btn-default " type="submit" value ="Search" style="margin-top:-1px !important;"><i class="glyphicon glyphicon-search"></i></button>
        </div>
    </div>
    <select class="form-control pull-left" id="location" name="location" style="margin-right: 20px;">
        <option selected>Choose location</option>
        <option value="1">All</option>
    </select>
</form>
<div class="clearfix"></div>
<div class="table-responsive">
    <table class="table table-bordered table-striped"  id="pivot-table">
        <thead>
        <tr>
            <th>Type</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>Serial Number</th>
            <th>Location</th>
            <th>Size</th>
            <th>Status</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($results as $row) {
            ?>
            <tr>
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

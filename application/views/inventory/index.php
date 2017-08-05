<p style="text-align: left;">
    <a href="<?php echo site_url('inventory/add'); ?>" class="btn btn-primary"><span
                class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add</a>
</p>
<p style="text-align: right; margin-top: -50px;">

    <a href="#" class="btn btn-success"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Export XLS</a>
</p>

<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>#</th>
        <th>Type</th>
        <th>Name</th>
        <th>Quantity</th>
        <th>Serial Number</th>
        <th>Location</th>
        <th>Size</th>
        <th>Status</th>
        <th>Date</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($results as $row) {

        ?>
        <tr>
            <td><?php echo $row->id ?></td>
            <td>
                <?php foreach ($types as $type) {
                    if ($type->id == $row->type_id) {
                        ?>
                        <?php echo $type->name ?>
                        <?php
                    }
                } ?>
            </td>
            <td><?php echo $row->name ?></td>
            <td><?php echo $row->quantity ?></td>
            <td><?php echo $row->serial_number ?></td>
            <td><?php echo $row->location ?></td>
            <td><?php echo $row->size ?></td>
            <td>
                <?php foreach ($statuses as $status) {
                    if ($status->id == $row->status_id) {
                        ?>
                        <?php echo $status->name ?>
                        <?php
                    }
                } ?>
            </td>
            <td><?php echo date("d/m/Y"); ?></td>
            <td class="text-center">
                <a href="<?php echo site_url('inventory/edit/' . $row->id); ?>"
                   class="btn btn-success"><span class="glyphicon glyphicon-edit"
                                                 aria-hidden="true"></span></a>
                <a href="#" class="btn btn-danger" onclick="askDeletiingItem(<?php echo $row->id; ?>)"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
            </td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>

<div class="text-center">
    <?php echo $pager; ?>
</div>

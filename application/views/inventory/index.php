<p>
    <a href="<?php echo site_url('inventory/add'); ?>" class="btn btn-primary"><span
                class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add</a>
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
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($results as $row) {
        ?>
        <tr>
            <td><?php echo $row->id ?></td>
            <td><?php echo $row->type_id ?></td>
            <td><?php echo $row->name ?></td>
            <td><?php echo $row->quantity ?></td>
            <td><?php echo $row->serial_number ?></td>
            <td><?php echo $row->location ?></td>
            <td><?php echo $row->size ?></td>
            <td><?php echo $row->status_id ?></td>
            <td><?php echo date("d/m/Y"); ?></td>
            <td class="text-center">
                <a href="<?php echo site_url('main/edit/' . $row->id); ?>"
                   class="btn btn-success"><span class="glyphicon glyphicon-edit"
                                                 aria-hidden="true"></span></a>
                <a href="<?php echo site_url('main/del/' . $row->id); ?>" class="btn btn-danger"
                   onclick="return confirm('Are you sure would you like delete this?')"><span
                            class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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

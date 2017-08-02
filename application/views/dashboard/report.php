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
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>

<div class="text-center">
    <?php echo $pager; ?>
</div>

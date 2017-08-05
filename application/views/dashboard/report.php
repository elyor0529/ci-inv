<div class="table-responsive">
    <table class="table table-bordered table-striped" id="pivot-table">
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

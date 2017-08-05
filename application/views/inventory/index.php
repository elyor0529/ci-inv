<p style="text-align: left;">
    <a href="<?php echo site_url('inventory/add'); ?>" class="btn btn-primary"><span
                class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add</a>
</p>

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
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($results as $row) {

            ?>
            <tr>
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
                <td><?php echo $row->date ?></td>
                <td class="text-center">
                    <a href="<?php echo site_url('inventory/edit/' . $row->id); ?>"
                       class="btn btn-success"><span class="glyphicon glyphicon-edit"
                                                     aria-hidden="true"></span></a>
                    <a href="#" class="btn btn-danger" onclick="askDeletiingItem(<?php echo $row->id; ?>)"><span
                                class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                </td>
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

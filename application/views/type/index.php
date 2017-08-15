<div class="type">
<form class="form-inline">
    <a href="<?php echo site_url('type/add'); ?>" class="btn btn-primary glyphicon glyphicon-plus"
       aria-hidden="true"></span>Add</a>
</form>
<table class="table table-inverse" style="width: 50%;">
    <thead>
    <tr>
        <th>Name</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($rows as $row) { ?>
        <tr>
            <td><?php echo $row->name ?></td>
            <td>
                <a href="<?php echo site_url('type/edit/'.$row->id); ?>" class="btn btn-success"><span
                            class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                <a href="#" class="btn btn-danger" onclick="askTypeDeleting(<?php echo $row->id; ?>)"><span
                            class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</div>
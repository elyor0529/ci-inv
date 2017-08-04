<form class="form-inline">
    <a href="#" onclick="sweetAlertAddItem(<?php site_url('type/add' . $types[0]->id);?>)" class="btn btn-primary glyphicon glyphicon-plus" aria-hidden="true"></span>Add</a>
    <a href="<?php echo site_url('type/delete' . $types[0]->id); ?>" class="btn btn-danger" onclick="askDeletiingItemType(id)"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
</form>


<table class="table table-striped" style="width:700px; margin:0 auto;">
    <thead class="thead-stripped">
    <tr class="text-center">
        <th>ID</th>
        <th>Type</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($types as $row){?>
    <tr>
        <td><?php echo $row->id ?></td>
        <td><?php echo $row->name ?></td>
    </tr>
    <?php }?>
    </tbody>
</table>

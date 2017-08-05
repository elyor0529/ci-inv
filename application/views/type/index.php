<form class="form-inline">
    <a href="#" onclick="inputTypeItem()" class="btn btn-primary glyphicon glyphicon-plus" aria-hidden="true"></span>Add</a>
    <a href=#" class="btn btn-danger" onclick="askTypeDeleting()"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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

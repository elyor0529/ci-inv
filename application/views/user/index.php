<p style="text-align: left;">
    <a href="<?php echo site_url('user/add'); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create</a>
</p>
<table class="table table-inverse">
    <thead>
    <tr>
        <th>Full Name</th>
        <th>Role</th>
        <th>Username</th>
        <th>Active/Deactive</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($rows as $row) { ?>
        <tr>
            <td><?php echo $row->full_name ?></td>
            <td><?php echo $row->role_id ?></td>
            <td><?php echo $row->username ?></td>
            <td class="active_style">
                <?php if($row->is_active > 0){
                     echo "Active";
                  }else{
                     echo "Deactive";
                   }?>
            </td>

            <td>
                <a href="#" class="btn btn-danger" onclick="askDeletingUser(<?php echo $row->id ?>)"><span class="glyphicon glyphicon-trash"
                                                                                     aria-hidden="true"></span></a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<p style="text-align: left;">
    <a href="<?php echo site_url('user/add'); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-plus"
                                                                                aria-hidden="true"></span> Create</a>
</p>

<table class="table table-inverse" style="width: 60%">
    <thead>
    <tr>
        <th>Full Name</th>
        <th>Role</th>
        <th>Username/password</th>
        <th>Is Active?</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($rows as $row) { ?>
        <tr>
            <td><?php echo $row->full_name ?></td>
            <td>
                <?php foreach ($roles as $role) {
                    if ($role->id == $row->role_id) {
                        ?>
                        <?php echo $role->name ?>
                        <?php
                    }
                } ?>
            </td>
            <td><?php echo $row->username . ' / ' . $row->password ?></td>
            <td>
                <?php if ($row->is_active > 0) { ?>
                    <strong class="text-success">Yes</strong>
                    <?php if ($row->role_id != ROLE_ADMIN) { ?>
                        /   <a href="#" onclick="askToChangeStatus(<?php echo $row->id ?>)" class="text-danger">Deactivate</a>
                    <?php } ?>
                <?php } else { ?>
                    <strong class="text-danger">No</strong>
                    <?php if ($row->role_id != ROLE_ADMIN) { ?>
                        /  <a href="#" onclick="askToChangeStatus(<?php echo $row->id ?>)"
                              class="text-success">Activate</a>
                    <?php } ?>

                <?php } ?>
            </td>
            <td>
                <a href="#" class="btn btn-success" onclick="sendEmailUser(<?php echo $row->id ?>)"><span
                            class="glyphicon glyphicon-send"
                            aria-hidden="true"></span></a>

                <a href="#" class="btn btn-danger" onclick="askDeletingUser(<?php echo $row->id ?>)"><span
                            class="glyphicon glyphicon-trash"
                            aria-hidden="true"></span></a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<?php
echo form_open("user/save", "class='myform form-inline'");
?>
<label for="role_id" style="margin-right:10px;"> Role</label>
<select name="role_id" class="form-control" id="role_id" required>
    <option value="0"> Please select</option>
    <?php foreach ($roles as $role) {
        if ($role->id != ROLE_ADMIN) { ?>
            <option value="<?php echo $role->id; ?>"><?php echo $role->name; ?></option>
        <?php }
    } ?>
</select>
<label for="full_name" style="margin-left:20px;"> Full Name</label>
<input type="text" name="full_name" class="form-control" id="full_name" required>
<label for="email" style="margin-left:20px;"> Email</label>
<input type="email" name="email" class="form-control" id="email" required>
<label for="password" style="margin-left:20px;"> Password</label>
<input type="password" name="password" class="form-control" id="password" required>
<label for="is_active" style="margin-left:20px;"> Is Active</label>
<select name="is_active" class="form-control" id="is_active" required>
    <option value="1">Yes</option>
    <option value="0">No</option>
</select>


<p style="margin-top:20px; text-align:left; margin-right: 7%;">
    <input type="submit" name="save" class="btn btn-success" value="Save"/>
</p>
<hr/>
<?php
echo form_close();
?>



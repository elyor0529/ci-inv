<?php
echo form_open("user/save", "class='myform'");
?>
<form class="form-inline">
    <label for="role_id">User Role </label>
    <input type="text" class="form-control" id="role_id" placeholder="Role" required>
    <label for="full_name"> Full Name:</label>
    <input type="text" class="form-control" id="full_name" placeholder="Full Name" required>
    <label for="username"> Username:</label>
    <input type="text" class="form-control" id="username" placeholder="User Name" required>
    <label for="password"> Password:</label>
    <input type="text" class="form-control" id="password" placeholder="Password" required>
    <label for="is_active"> Is Active:</label>
    <select name="is_active" class="form-control" style="margin-top:20px;" id="is_active" required>
        <option value="1">Yes</option>
        <option value="0">No</option>
    </select>

</form>
<p style="margin-top:20px; text-align:left; margin-right: 7%;">
    <input type="submit" name="save" class="btn btn-success" value="Save"/>
</p>
<hr/>
<?php
echo form_close();
?>



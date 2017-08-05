<?php
echo form_open("user/save", "class='myform'");
?>
<form class="form-inline">
    <label for="role_id">User Role </label>
    <select name="role_id" class="form-control" id="role_id" required>
        <option value="0"> Please select</option>
        <option value="1">Adminstration</option>
        <option value="2">User</option>
        <option value="3">Operator</option>
    </select>
    <label for="full_name" > Full Name:</label>
    <input type="text" class="form-control" id="full_name" placeholder="Full Name" required>
    <label for="username" > Username:</label>
    <input type="text" class="form-control" id="username" placeholder="User Name" required>
    <label for="password"> Password:</label>
    <input type="text" class="form-control" id="password" placeholder="Password" required>
    <select name="role_id" class="form-control" style="margin-top:20px;"  id="role_id" required>
        <option value="0">Deactive</option>
        <option value="1">Active</option>

    </select>

</form>
<p style="margin-top:20px; text-align:left;">
    <input type="button" class="btn btn-danger" onclick="buttonEmailSender(id)" value="Send Email" required/>
    <input type="submit" name="save" class="btn btn-success"  value="Save"/>
</p>
<hr/>
<?php
echo form_close();
?>



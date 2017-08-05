<form class="form-inline" >
    <label for="role_id">User Role </label>
    <select name="role_id" class="form-control" id="role_id" required>
        <option value="0"> Please select</option>
            <option value="1">Adminstration</option>
            <option value="2">User</option>
            <option value="3">Reporter</option>
    </select>
    <label for="full_name" style="margin-left:10px;"> Full Name:</label>
    <input type="text" class="form-control" id="full_name" placeholder="Full Name" required>
    <label for="username" style="margin-left:10px;"> Username:</label>
    <input type="text" class="form-control" id="username" placeholder="User Name" required>
    <label for="password" style="margin-left:10px;"> Password:</label>
    <input type="text" class="form-control" id="password" placeholder="Password" required>



    <input type="button" class="btn btn-primary" onclick="buttonEmailSender(id)"  value="Send Email" style="margin-left:10px;"  required>

    <button type="submit" class="btn btn-primary" >Create</button>
</form>
<hr/>
<table class="table table-inverse">
    <thead>
    <tr>
        <th>User Role</th>
        <th>Full Name</th>
        <th>Username</th>
        <th>Password</th>
        <th>Action</th>
        <th>Active/Deactive</th>
    </tr>
    </thead>
    <tbody>
<?php foreach($rows as $user){?>
    <tr>
        <td><?php echo $user->role_id ?></td>
        <td><?php echo $user->full_name ?></td>
        <td><?php echo $user->username ?></td>
        <td><?php echo $user->password ?></td>
        <td >
            <a href="#" class="btn btn-danger" onclick="askDeletingUser()"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
        </td>
        <td>
            <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
            </label>
        </td>
    </tr>
<?php }?>
    </tbody>
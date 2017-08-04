<form class="form-inline" >
    <label for="type_id">User Roles </label>
    <select name="type_id" class="form-control" id="type_id" required>
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
    <label class="switch">
        <input type="checkbox">
        <span class="slider round"></span>
    </label>


    <input type="button" class="btn btn-primary" onclick="sweet-button" id="email" value="Send Email"  required>

    <button type="submit" class="btn btn-primary" >Create</button>
</form>
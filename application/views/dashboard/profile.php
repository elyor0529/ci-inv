<div class="profile_bg">
<?php
echo form_open("dashboard/profile_update", "class='myform' style=\"width:40% !important; margin:20px; padding:20px; color:#fff;\"");
?>

    <label for="full_name" class="col-form-label">Full Name</label>
    <input type="text" class="form-control" id="full_name" name="full_name" value="<?php echo $row->full_name; ?>" required/>
    <label for="email" class="col-form-label" style="margin-top:20px;">Email</label>
    <input type="email" class="form-control" id="email" name="email" value="<?php echo $row->email; ?>" required/>
    <label for="password" class="col-form-label" style="margin-top:20px;">Password</label>
    <input type="password" class="form-control" id="password" name="password"/>

            <div class="form-group row">
                <input type="submit" name="profile_edit" class="btn btn-success" value="Save"/>
            </div>
<?php
echo form_close();
?>

<div class="pull-right avatar" style=""><img src="<?php echo base_url("/assets/") ?>favicon/logo%202.png" width="100px"></div>
</div>
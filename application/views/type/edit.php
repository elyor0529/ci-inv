<?php
echo form_open("type/update", "class='myform type_edit' style=\"width:30% !important;\"");
?>
<input type="hidden" name="id" value="<?php echo $row->id; ?>" >

<div class="form-inline">
    <label for="name" style="margin:20px;"> Name</label>
    <input type="text" class="form-control" id="name" name="name" value="<?php echo $row->name; ?>" required>
</div>
<p style="margin-top:20px; text-align:left; margin-right: 7%;">
    <input type="submit" name="edit" class="btn btn-success" value="Update"/>
</p>
<hr/>
<?php
echo form_close();
?>

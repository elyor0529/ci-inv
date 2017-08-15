<?php
echo form_open("type/save", "class='myform type_add' style=\"width:30% !important;\"");
?>
<div class="form-inline" >
    <label for="name" style="margin:20px;">Name</label>
    <input type="text" class="form-control" name="name" id="name" required>
</div>
<p style="margin-top:20px; text-align:left; margin-right: 7%;">
    <input type="submit" name="save" class="btn btn-success" value="Add"/>
</p>
<hr/>
<?php
echo form_close();
?>

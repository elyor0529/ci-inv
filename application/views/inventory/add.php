<?php
echo form_open_multipart("inventory/save", "class='myform inv_bg'");
?>
<div class="row form-inline">
    <div class="col-md-6 col-lg-6 col-md-offset-3">
        <div class="form-group">
            <label for="img" style="margin-top: 10px;">Image</label>
            <input type="file" accept="image/*" class="form-control-file" name="file" id="file" aria-describedby="fileHelp">
            <small id="fileHelp" class="form-text text-muted">JPG,PNG and JPEG.</small>
        </div>
        <div class="form-group">
            <label for="type_id">Type</label>
            <select name="type_id" class="form-control" id="type_id" required>
                <option value="0"> Please select</option>
                <?php
                foreach ($types as $type) {
                    ?>
                    <option value="<?php echo $type->id; ?>"><?php echo $type->name; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required palceholder="Item name...">
        </div>
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" id="quantity" class="form-control" required palceholder="Quantity...">
        </div>
        <div class="form-group">
            <label for="serial_number">Serial Number</label>
            <input type="text" name="serial_number" id="serial_number" class="form-control"
                   palceholder="Serial Number...">
        </div>
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" name="location" id="location" required class="form-control" palceholder="Location...">
        </div>
        <div class="form-group">
            <label for="size">Size (inch)</label>
            <input type="number" name="size" id="size" class="form-control" palceholder="Size...">
        </div>
        <div class="form-group">
            <label for="status_id">Status</label>
            <select name="status_id" class="form-control" id="status_id" required>
                <option value="0"> Please select</option>
                <?php
                foreach ($statuses as $status) { ?>
                    <option value="<?php echo $status->id; ?>"><?php echo $status->name; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" name="date" id="date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description" style="margin-top: 13px;">Description</label>
            <textarea type="text" rows="2" name="description" id="description" class="form-control" palceholder="description..."></textarea>
        </div>
        <input type="submit" name="save" class="btn btn-primary btn_style" onclick="addAlert()" value="Save"/>
    </div>
</div>


<?php
echo form_close();
?>




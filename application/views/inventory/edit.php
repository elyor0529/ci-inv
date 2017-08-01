<?php
echo form_open("inventory/update", "class='myform'");
?>
    <div class="row form-inline">
        <div class="col-md-6 col-lg-6 col-md-offset-3">
            <div class="form-group">
                <label for="type_id">Item Type</label>
                <select name="type_id" class="form-control" id="type_id"  required>
                    <option value="0"> Please select</option>
                    <?php
                    foreach ($types as $status) {
                        ?>
                        <option value="<?php echo $status->id; ?>"><?php echo $status->name; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="name">Item Name</label>
                <input type="text" name="name" id="name" class="form-control" value="<?php echo $row->name; ?>" required>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="numeric" name="quantity" id="quantity" class="form-control" value="<?php echo $row->quantity; ?>" required>
            </div>
            <div class="form-group">
                <label for="serial_number">Serial Number</label>
                <input type="text" name="serial_number" id="serial_number" class="form-control" value="<?php echo $row->serial_number; ?>" >
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" name="location" id="location" class="form-control" value="<?php echo $row->location; ?>" required>
            </div>
            <div class="form-group">
                <label for="size">Size</label>
                <input type="numeric" name="size" id="size" class="form-control" value="<?php echo $row->size; ?>" >
            </div>
            <div class="form-group">
                <label for="status_id">Status</label>
                <select name="status_id" class="form-control" id="status_id" required>
                    <option value="0"> Please select</option>
                    <?php
                    foreach ($statuses as $status) {
                        ?>
                        <option value="<?php echo $status->id; ?>"><?php echo $status->name; ?></option>
                    <?php } ?>
                </select>
      </div> 
      
      <input type="submit" name="edit" class="btn btn-primary btn_style" value="Update"/>


  </div>
</div>
<?php
echo form_close();
?>
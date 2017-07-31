<?php
echo form_open("main/update", "class='myform'");
?> 
<div class="row form-inline form-vertical">
  <div class="col-md-6 col-lg-6 col-md-offset-3"> 
        <input type="hidden" name="id" id="id" value="<?php echo $row->id; ?>"/>
          <div class="form-group">
          <label for="t_id">Type</label>
          <select name="t_id" class="form-control" id="t_id" required>
            <option selected>Please select </option>
            <option>TV</option>
            <option>Laptop</option>
            <option>Router</option>
            <option>Monitor LCD</option>
            <option>Mobiles</option>
          </select>
      </div>
      <div class="form-group">
        <label for="in">Name</label>
        <input type="text" name="in" id="in" class="form-control" required value="<?php echo $row->name; ?>"/>
      </div>
      <div class="form-group">
        <label for="qty">Quantity</label>
        <input type="numeric" name="qty" id="qty" class="form-control" required value="<?php echo $row->quantity; ?>"/>
      </div>
      <div class="form-group">
        <label for="sn">Serial Number</label>
        <input type="text" name="sn" id="sn" class="form-control" value="<?php echo $row->serial_number; ?>"/>
      </div>
      <div class="form-group">
        <label for="loc">Location</label>
        <input type="text" name="loc" id="loc" required class="form-control" value="<?php echo $row->location; ?>"/>
      </div>
      <div class="form-group">
        <label for="sz">Size</label>
        <input type="numeric" name="sz" id="sz" class="form-control" value="<?php echo $row->size; ?>"/>
      </div>
      <div class="form-group">
        <label for="status_id">Status</label>
        <select name="status_id" class="form-control" id="status_id" required>   
            <option selected>Please select</option>
            <option>OLD</option>
            <option>NEW</option>
            <option>FADA</option>
          </select>
      </div> 
      
      <input type="submit" name="edit" class="btn btn-primary btn_style" value="Update"/>
      <a href="<?php echo site_url('main') ?>" class="btn btn-danger btn_style">Back to View</a>

  </div>
</div>
<?php
echo form_close();
?>
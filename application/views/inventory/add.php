<?php
echo form_open("main/save", "class='myform'");
?> 
<div class="row form-inline">
  <div class="col-md-6 col-lg-6 col-md-offset-3"> 
      <div class="form-group">
          <label for="t_id">Item Type</label>
          <select name="t_id" class="form-control" id="t_id" required>
            <option selected>Choose  Item  type.......</option>
            <option>TV</option>
            <option>Laptop</option>
            <option>Router</option>
            <option>Monitor LCD</option>
            <option>Mobiles</option>
          </select>
      </div>
      <div class="form-group">
        <label for="in">Item Name</label>
        <input type="text" name="in" id="in" class="form-control" required palceholder="Item name...">
      </div>
      <div class="form-group">
        <label for="qty">Quantity</label>
        <input type="numeric" name="qty" id="qty" class="form-control" required palceholder="Quantity...">
      </div>
      <div class="form-group">
        <label for="sn">Serial Number</label>
        <input type="text" name="sn" id="sn" class="form-control" palceholder="Serial Number...">
      </div>
      <div class="form-group">
        <label for="loc">Location</label>
        <input type="text" name="loc" id="loc" required class="form-control" palceholder="Location...">
      </div>
      <div class="form-group">
        <label for="sz">Size</label>
        <input type="numeric" name="sz" id="sz" class="form-control" palceholder="Size...">
      </div>
      <div class="form-group">
        <label for="status_id">Status</label>
        <select name="status_id" class="form-control" id="status_id" required>
            <option selected>Choose Status...</option>
            <option>OLD</option>
            <option>NEW</option>
            <option>FADA</option>
          </select> 
        </div>
      <input type="submit" name="save" class="btn btn-primary btn_style" value="Save"/>
      <a href="<?php echo site_url('main') ?>" class="btn btn-danger btn_style">Back to View</a>

  </div>
</div>


<?php
echo form_close();
?>




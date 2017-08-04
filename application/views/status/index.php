<!--<form class="form-inline">-->
<!--    <button type="submit" class="btn btn-primary glyphicon glyphicon-plus">Add</button>-->
<!--    <a href="#" class="btn btn-danger" onclick="askDeletiingItem(id)"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>-->
<!--</form>-->


<ul style=" font-size:1.2em; text-decoration-style: bold; color: grey; margin-top:30px;">
    <?php foreach($statuses as $row){?>
        <li><?php echo $row->name; ?></li>
   <?php}?>
</ul>

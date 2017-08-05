<ul style="list-style-type:none; font-size:1.2em; text-decoration-style: bold; color: grey;">
<?php foreach($roles as $rows){?>
    <li><?php $rows->id;?> => <?php $rows->name;?></li>
    <hr/>
<?php }?>
</ul>
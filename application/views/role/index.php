<table class="table table-inverse" style="width: 50%">
    <thead>
    <tr>
        <th>Name</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($rows as $row) { ?>
        <tr>
            <td><?php echo $row->name ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
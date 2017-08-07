</div>


</div>


</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div><!-- /#wrapper -->
<script src="<?php echo base_url("assets/") ?>js/jquery.js"></script>
<script src="<?php echo base_url("assets/") ?>sweetalert2/sweetalert2.min.js"></script>
<script src="<?php echo base_url("assets/") ?>FileSaver/filesaver.min.js"></script>
<script src="<?php echo base_url("assets/") ?>js-xlsx/xlsx.core.min.js"></script>
<script src="<?php echo base_url("assets/") ?>TableExport/js/tableexport.min.js"></script>
<script src="<?php echo base_url("assets/") ?>js/core.min.js"></script>
<script src="<?php echo base_url("assets/") ?>js/bootstrap.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="<?php echo base_url("assets/") ?>js/plugins/morris/raphael-min.js"></script>
<script src="<?php echo base_url("assets/") ?>js/plugins/morris/morris.min.js"></script>
<script src="<?php echo base_url("assets/") ?>js/plugins/morris/morris-data.js"></script>

</body>
</html>


<script type="text/javascript">

    function askDeletiingItem(id) {
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: false
        }).then(function () {
            window.location = '<?php echo base_url('inventory/delete/')?>' + id;
        });
    }

    function askTypeDeleting(id) {
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: false
        }).then(function () {
            window.location = '<?php echo base_url('type/delete/')?>' + id;
        });
    }

    function askDeletingUser(id) {
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: false
        }).then(function () {
            window.location = '<?php echo base_url('user/delete/')?>' + id;
        });
    }

    function sendEmailUser(id) {
        swal({
            title: 'Send email to user for username and password',
            type: 'info',
            showCloseButton: true,
            showCancelButton: true,
            confirmButtonText: 'Yes',
            cancelButtonText: 'No'
        }).then(function () {
            window.location = '<?php echo base_url('user/send_info/')?>' + id;
        });
    }

    function askToChangeStatus(id) {
        swal({
            title: 'You are sure want to change status?',
            type: 'warning',
            showCloseButton: true,
            showCancelButton: true,
            confirmButtonText: 'Yes',
            cancelButtonText: 'No'
        }).then(function () {
            window.location = '<?php echo base_url('user/change_status/')?>' + id;
        });
    }

    $(function () {

        $.fn.tableExport.bootstrap = ["btn", "btn-link", "btn-toolbar"];
        $("#pivot-table").tableExport({
            bootstrap: true,
            position: 'top-right',
            footers: false,
            formats: ['xlsx', 'csv']
        });


        setTimeout(function () {
            $("#flash-message").fadeOut("slow");
        }, 4000);


    });

</script>

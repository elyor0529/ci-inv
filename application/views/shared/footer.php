</div>


</div>


</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div><!-- /#wrapper -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url("assets/") ?>sweetalert2/sweetalert2.min.js"></script>
<script src="<?php echo base_url("assets/") ?>FileSaver/filesaver.min.js"></script>
<script src="<?php echo base_url("assets/") ?>js-xlsx/xlsx.core.min.js"></script>
<script src="<?php echo base_url("assets/") ?>TableExport/js/tableexport.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core. js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script type="text/javascript"
        src="https://uxsolutions.github.io/bootstrap-datepicker/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<!-- Morris Charts JavaScript -->
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
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

    $(function () {

        $.fn.tableExport.bootstrap = ["btn", "btn-link", "btn-toolbar"];
        $("#pivot-table").tableExport({
            bootstrap: true,
            position: 'top',
            footers: false,
            formats: ['xlsx', 'csv']
        });

        $('.datepicker').datepicker({
            format: "mm/dd/yyyy",
            clearBtn: true,
            calendarWeeks: true,
            autoclose: true,
            todayHighlight: true
        });

        setTimeout(function () {
            $("#flash-message").fadeOut("slow");
        }, 5000);


    });

</script>

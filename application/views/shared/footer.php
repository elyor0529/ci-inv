</div>


</div>


</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div><!-- /#wrapper -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script type="text/javascript"
        src="https://uxsolutions.github.io/bootstrap-datepicker/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<!-- Morris Charts JavaScript -->
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
 <script src="<?php echo base_url("assets/") ?>js/plugins/morris/morris-data.js"></script>

<script type="text/javascript">
    $(function () {

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
</body>
</html>

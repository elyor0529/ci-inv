</div>


</div>


</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div><!-- /#wrapper -->

<script src="<?php echo base_url("assets/") ?>js/jquery.js"></script>
<script src="<?php echo base_url("assets/") ?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url("assets/") ?>sweetalert2/sweetalert2.min.js"></script>
<script src="<?php echo base_url("assets/") ?>FileSaver/filesaver.min.js"></script>
<script src="<?php echo base_url("assets/") ?>js-xlsx/xlsx.core.min.js"></script>
<script src="<?php echo base_url("assets/") ?>TableExport/js/tableexport.min.js"></script>
<script src="<?php echo base_url("assets/") ?>js/core.min.js"></script>

<?php if ($is_dashboard == true) { ?>
    <script src="<?php echo base_url("assets/") ?>amcharts/amcharts.js"></script>
    <script src="<?php echo base_url("assets/") ?>amcharts/serial.js"></script>
    <script src="<?php echo base_url("assets/") ?>amcharts/plugins/export/export.min.js"></script>
    <script src="<?php echo base_url("assets/") ?>amcharts/themes/light.js"></script>
    <script>
        var colors = ["#67b7dc", "#fdd400", "#84b761", "#cc4748", "#cd82ad", "#2f4074", "#448e4d", "#b7b83f", "#b9783f", "#b93e3d", "#913167", "#666", "#777"];
        var chart = AmCharts.makeChart("chartdiv", {
            "theme": "light",
            "type": "serial",
            "titles": [
                {
                    "text": "Inventory by locations",
                    "size": 24,
                    "color": "#777"
                }
            ],
            "startDuration": 2,
            "dataProvider": [],
            "valueAxes": [{
                "position": "left",
                "axisAlpha": 0,
                "gridAlpha": 0
            }],
            "graphs": [{
                "balloonText": "[[category]]: <b>[[value]]</b>",
                "fillAlphas": 0.85,
                "lineAlpha": 0.1,
                "type": "column",
                "topRadius": 1,
                "valueField": "value",
                "autoColor": true
            }],
            "depth3D": 40,
            "angle": 30,
            "chartCursor": {
                "categoryBalloonEnabled": false,
                "cursorAlpha": 0,
                "zoomable": false
            },
            "categoryField": "key",
            "categoryAxis": {
                "gridPosition": "start",
                "axisAlpha": 0,
                "gridAlpha": 0
            },
            "export": {
                "enabled": true
            }

        }, 0);
        var applyColours = function () {
            var graph = chart.graphs[0];

            if (graph.autoColor !== true)
                return;

            var colorKey = "autoColor-0";
            graph.lineColorField = colorKey;
            graph.fillColorsField = colorKey;
            for (var i = 0; i < chart.dataProvider.length; i++) {
                var j = getRandomInt(0, colors.length);
                var color = colors[j];

                chart.dataProvider[i][colorKey] = color;
            }
        };
        var relayChart = function () {
            $.ajax({
                type: 'GET',
                url: "<?php echo site_url('dashboard/inventory_monitoring'); ?>",
                data: [],
                async: true,
                cache: false,
                beforeSend: function (xhr) {
                    if (xhr && xhr.overrideMimeType) {
                        xhr.overrideMimeType('application/json;charset=utf-8');
                    }
                },
                dataType: 'json',
                success: function (data) {

                    if (data) {
                        chart.dataProvider = [];
                        $.each(data, function (index, item) {
                            chart.dataProvider.push({
                                key: item.location,
                                value: item.total
                            });
                        });
                        applyColours();
                        chart.validateData();
                    }

                }
            });
        };
        AmCharts.addInitHandler(function (chart) {
            relayChart();

            setInterval(function () {
                relayChart();
            }, 5000);

        }, ["serial"]);

        $(function () {

            $('a[title="Interactive JavaScript maps"]').css('display', 'none');
            $('a[title="JavaScript charts"]').css('display', 'none');

        });

        function getRandomInt(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }
    </script>

<?php } ?>

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
            position: 'top',
            footers: false,
            formats: ['xlsx', 'csv']
        });

        //     setTimeout(function () {
        //   $("#flash-message").fadeOut("slow");
        //  }, 2000);

    });

</script>

</body>
</html>



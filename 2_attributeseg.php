<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" ; charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- jQuery -->
    <script language="JavaScript" type="text/javascript" src="../vendor/jquery/jquery.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="../vendor/jquery/jquery.js"></script>
    <script language="JavaScript" type="text/javascript" src="../vendor/jquery_ui/jquery-ui.js"></script>

    <!-- Google Charts -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script language="JavaScript" type="text/javascript" src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script language="JavaScript" type="text/javascript" src="../vendor/metisMenu/metisMenu.min.js"></script>


    <!-- Custom Theme JavaScript -->
    <script language="JavaScript" type="text/javascript" src="../dist/js/sb-admin-2.js"></script>

    <title>Business Process Mining</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <!-- Load external menu html-->
    <!-- destroys bootstrap buttons for some reason -->
    <!-- <script type="text/javascript" src="../bower_components/jquery/src/jquery.js"></script>
     <script type="text/javascript">
         $(function () {
             $("#includedMenu").load("menu.html");
         });
     </script>-->
</head>

<body>
<div id="wrapper">
    <!--<div id="includedMenu">
    </div>-->

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Thunderstorm Entertainment: Business Process Mining</a>
        </div>
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->
        <!-- Navigation -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Main Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-eye fa-fw"></i>Aspects<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="2_salesvolume.php">Sales Volume</a>
                            </li>
                            <li>
                                <a href="2_attributeseg.php">Attribute Segmentation</a>
                            </li>
                            <li>
                                <a href="2_customerbeh.php">Customer Behavior</a>
                            </li>
                            <li>
                                <a href="2_geographical.php">Geographical Development</a>
                            </li>
                            <li>
                                <a href="googleChart.php">More Dashboard Charts</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <!--
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="googleChart.php">More Charts</a>
                            </li>
                        </ul>
                    </li>
                        <!-- /.nav-second-level -->

                    <li>
                        <a href="#"><i class="fa fa-table fa-fw"></i>Source Tables<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="3_methods.php">Methods Table</a>
                            </li>
                            <li>
                                <a href="3_countries.php">Countries Table</a>
                            </li>
                            <li>
                                <a href="3_sales.php">Sales Table (warning: long loading time)</a>
                            </li>
                            <li>
                                <a href="3_notice.php">Legal Notice</a>
                            </li>
                            <li>
                                <a href="blank.php">Blank Template Page</a>
                            </li>
                            <li>
                                <a href="googleChart.php">More Charts</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Attribute Segmentation and Filtering</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- end /.row-->

            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Payment method
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle"
                                            data-toggle="dropdown">
                                        Views
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li onclick="DonutView();">Donut
                                        </li>
                                        <li onclick="Histogram();">Histogram
                                        </li>
                                        <li class="divider"></li>
                                    </ul>
                                </div>
                                <button type="button" class="btn btn-default btn-circle" onclick="DonutView();"><i
                                            class="fa fa-refresh"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <script type="text/javascript">
                                        function DonutView() {
                                            google.charts.load('current', {'packages': ['corechart']});
                                            // Set a callback to run when the Google Visualization API is loaded.
                                            google.charts.setOnLoadCallback(drawChart8);

                                            function drawChart8() {

                                                var jsonData = $.ajax({
                                                        url: 'http://136.144.187.133/phpQueries/pie_methods.php',
                                                        dataType: "json",
                                                        async: true
                                                    }
                                                ).done(function (jsonData) {
                                                    console.log(jsonData);

                                                    // Create our data table out of JSON data loaded from server
                                                    var parsedData = jsonData;
                                                    var len = parsedData.length;

                                                    var data = new google.visualization.DataTable();
                                                    data.addColumn('string', 'payment method');
                                                    data.addColumn('number', 'transactions');
                                                    data.addRows(len);


                                                    for (var n = 0; n < len; n++) {
                                                        var i = 0;
                                                        //for(var key in parsedData[n]){
                                                        data.setValue(n, 0, parsedData[n]['paymentmethod']);
                                                        data.setValue(n, 1, parsedData[n]['rows']);
                                                        //i++;
                                                        //}
                                                    }

                                                    var options = {
                                                        title: 'Total transactions per payment method',
                                                        pieHole: 0.4,
                                                        pieSliceText: 'label',
                                                        pieStartAngle: 100,
                                                        heigth: 1000
                                                    };

                                                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                                                    chart.draw(data, options);
                                                });
                                            }
                                        }

                                        function Histogram() {
                                            google.charts.load('current', {'packages': ['corechart']});
                                            // Set a callback to run when the Google Visualization API is loaded.
                                            google.charts.setOnLoadCallback(drawChart9);

                                            function drawChart9() {

                                                var jsonData = $.ajax({
                                                        url: 'http://136.144.187.133/phpQueries/pie_methods.php',
                                                        dataType: "json",
                                                        async: true
                                                    }
                                                ).done(function (jsonData) {
                                                    console.log(jsonData);

                                                    // Create our data table out of JSON data loaded from server
                                                    var parsedData = jsonData;
                                                    var len = parsedData.length;

                                                    var data = new google.visualization.DataTable();
                                                    data.addColumn('string', 'payment method');
                                                    data.addColumn('number', 'transactions');
                                                    data.addRows(len);


                                                    for (var n = 0; n < len; n++) {
                                                        var i = 0;
                                                        //for(var key in parsedData[n]){
                                                        data.setValue(n, 0, parsedData[n]['paymentmethod']);
                                                        data.setValue(n, 1, parsedData[n]['rows']);
                                                        //i++;
                                                        //}
                                                    }

                                                    var options = {
                                                        title: 'Payment Methods in number of usages',
                                                        colors: ['orange'],
                                                        histogram: {bucketSize: 8000}
                                                    };

                                                    var chart = new google.visualization.Histogram(document.getElementById('piechart'));
                                                    chart.draw(data, options);
                                                });
                                            }
                                        }

                                        google.charts.load('current', {'packages': ['corechart']});
                                        // Set a callback to run when the Google Visualization API is loaded.
                                        google.charts.setOnLoadCallback(drawChart0);

                                        function drawChart0() {

                                            var jsonData = $.ajax({
                                                    url: 'http://136.144.187.133/phpQueries/pie_methods.php',
                                                    dataType: "json",
                                                    async: true
                                                }
                                            ).done(function (jsonData) {
                                                console.log(jsonData);

                                                // Create our data table out of JSON data loaded from server
                                                var parsedData = jsonData;
                                                var len = parsedData.length;

                                                var data = new google.visualization.DataTable();
                                                data.addColumn('string', 'payment method');
                                                data.addColumn('number', 'transactions');
                                                data.addRows(len);


                                                for (var n = 0; n < len; n++) {
                                                    var i = 0;
                                                    //for(var key in parsedData[n]){
                                                    data.setValue(n, 0, parsedData[n]['paymentmethod']);
                                                    data.setValue(n, 1, parsedData[n]['rows']);
                                                    //i++;
                                                    //}
                                                }

                                                var options = {
                                                    title: 'Total transactions per payment method',
                                                    pieHole: 0.4,
                                                    pieSliceText: 'label',
                                                    pieStartAngle: 100,
                                                    heigth: 1000
                                                };

                                                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                                                chart.draw(data, options);
                                            });
                                        }

                                        -->
                                    </script>
                                    <div class="panel-body" id="piechart" style="width: 100%; height: 500px;"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Sales timing
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle"
                                            data-toggle="dropdown">
                                        Views
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li onclick="onHour();">...an hour
                                        </li>
                                        <li onclick="aDay();">...a day
                                        </li>
                                        <li class="divider"></li>
                                    </ul>
                                </div>
                                <button type="button" class="btn btn-default btn-circle" onclick="onHour();"><i
                                            class="fa fa-refresh"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <script type="text/javascript">
                                <!--

                                google.charts.load('current', {'packages': ['corechart']});
                                // Set a callback to run when the Google Visualization API is loaded.
                                google.charts.setOnLoadCallback(drawChart);

                                function drawChart() {

                                    var jsonData = $.ajax({
                                            url: 'http://136.144.187.133/phpQueries/bar_salesHour.php',
                                            dataType: "json",
                                            async: true
                                        }
                                    ).done(function (jsonData) {
                                        console.log(jsonData);

                                        // Create our data table out of JSON data loaded from server
                                        var parsedData = jsonData;
                                        var len = parsedData.length;

                                        var data = new google.visualization.DataTable();
                                        data.addColumn('string', 'Hours');
                                        data.addColumn('number', 'Transactions');
                                        data.addRows(len);


                                        for (var n = 0; n < len; n++) {
                                            var i = 0;
                                            //for(var key in parsedData[n]){
                                            var o = parsedData[n]['hour'];
                                            console.log(o);
                                            data.setValue(n, 0, o.toString());
                                            data.setValue(n, 1, parsedData[n]['rows']);
                                            //i++;
                                            //}
                                        }

                                        var options = {
                                            title: 'Transactions in different hours of the day',
                                            chartArea: {width: '50%'},
                                            annotations: {
                                                alwaysOutside: true,
                                                textStyle: {
                                                    fontSize: 12,
                                                    auraColor: 'none',
                                                    color: '#555'
                                                },
                                                boxStyle: {
                                                    stroke: '#ccc',
                                                    strokeWidth: 1,
                                                    gradient: {
                                                        color1: '#f3e5f5',
                                                        color2: '#f3e5f5',
                                                        x1: '0%', y1: '0%',
                                                        x2: '100%', y2: '100%'
                                                    }
                                                }
                                            },
                                            hAxis: {
                                                title: 'Number of Transactions',
                                                minValue: 0
                                            },
                                            vAxis: {
                                                title: 'Hour'
                                            }
                                        };
                                        var chart = new google.visualization.BarChart(document.getElementById('salesin'));
                                        chart.draw(data, options);
                                    });
                                }

                                function onHour() {
                                    console.log(".... an hour pressed");
                                    google.charts.load('current', {'packages': ['corechart']});
                                    // Set a callback to run when the Google Visualization API is loaded.
                                    google.charts.setOnLoadCallback(drawChart2);

                                    function drawChart2() {

                                        var jsonData = $.ajax({
                                                url: 'http://136.144.187.133/phpQueries/bar_salesHour.php',
                                                dataType: "json",
                                                async: true
                                            }
                                        ).done(function (jsonData) {
                                            console.log(jsonData);

                                            // Create our data table out of JSON data loaded from server
                                            var parsedData = jsonData;
                                            var len = parsedData.length;

                                            var data = new google.visualization.DataTable();
                                            data.addColumn('string', 'Hours');
                                            data.addColumn('number', 'Transactions');
                                            data.addRows(len);


                                            for (var n = 0; n < len; n++) {
                                                var i = 0;
                                                //for(var key in parsedData[n]){
                                                var o = parsedData[n]['hour'];
                                                console.log(o);
                                                data.setValue(n, 0, o.toString());
                                                data.setValue(n, 1, parsedData[n]['rows']);
                                                //i++;
                                                //}
                                            }

                                            var options = {
                                                title: 'Transactions in different hours of the day',
                                                chartArea: {width: '50%'},
                                                annotations: {
                                                    alwaysOutside: true,
                                                    textStyle: {
                                                        fontSize: 12,
                                                        auraColor: 'none',
                                                        color: '#555'
                                                    },
                                                    boxStyle: {
                                                        stroke: '#ccc',
                                                        strokeWidth: 1,
                                                        gradient: {
                                                            color1: '#f3e5f5',
                                                            color2: '#f3e5f5',
                                                            x1: '0%', y1: '0%',
                                                            x2: '100%', y2: '100%'
                                                        }
                                                    }
                                                },
                                                hAxis: {
                                                    title: 'Number of Transactions',
                                                    minValue: 0
                                                },
                                                vAxis: {
                                                    title: 'Hour'
                                                }
                                            };
                                            var chart = new google.visualization.BarChart(document.getElementById('salesin'));
                                            chart.draw(data, options);
                                        });
                                    }
                                }

                                function aDay() {
                                    console.log("... a day pressed");
                                    google.charts.load('current', {'packages': ['corechart']});
                                    // Set a callback to run when the Google Visualization API is loaded.
                                    google.charts.setOnLoadCallback(drawChart3);

                                    function drawChart3() {

                                        var jsonData = $.ajax({
                                                url: 'http://136.144.187.133/phpQueries/bar_salesWeekDay.php',
                                                dataType: "json",
                                                async: true
                                            }
                                        ).done(function (jsonData) {
                                            console.log(jsonData);

                                            // Create our data table out of JSON data loaded from server
                                            var parsedData = jsonData;
                                            var len = parsedData.length;

                                            var data = new google.visualization.DataTable();
                                            data.addColumn('string', 'Day');
                                            data.addColumn('number', 'Transactions');
                                            data.addRows(len);


                                            for (var n = 0; n < len; n++) {
                                                var i = 0;
                                                //for(var key in parsedData[n]){
                                                var o = parsedData[n]['day'];
                                                console.log(o);
                                                data.setValue(n, 0, o.toString());
                                                data.setValue(n, 1, parsedData[n]['rows']);
                                                //i++;
                                                //}
                                            }

                                            var options = {
                                                title: 'Transactions in different hours of the day (1=SunDay)',
                                                chartArea: {width: '50%'},
                                                annotations: {
                                                    alwaysOutside: true,
                                                    textStyle: {
                                                        fontSize: 12,
                                                        auraColor: 'none',
                                                        color: '#555'
                                                    },
                                                    boxStyle: {
                                                        stroke: '#ccc',
                                                        strokeWidth: 1,
                                                        gradient: {
                                                            color1: '#f3e5f5',
                                                            color2: '#f3e5f5',
                                                            x1: '0%', y1: '0%',
                                                            x2: '100%', y2: '100%'
                                                        }
                                                    }
                                                },
                                                hAxis: {
                                                    title: 'Number of Transactions',
                                                    minValue: 0
                                                },
                                                vAxis: {
                                                    title: 'Day'
                                                }
                                            };
                                            var chart = new google.visualization.BarChart(document.getElementById('salesin'));
                                            chart.draw(data, options);
                                        });
                                    }
                                }

                                -->
                            </script>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="panel-body" id="salesin" style="width: 100%; height: 500px;"></div>
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Total Coins per Country
                            <button type="button" class="btn btn-default btn-circle" onclick="reload1();"><i
                                        class="fa fa-refresh"></i>
                            </button>
                        </div>
                        <!-- /.panel-heading -->
                        <script type="text/javascript">
                            reload1();

                            function reload1() {
                                google.charts.load('current', {'packages': ['corechart']});
                                // Set a callback to run when the Google Visualization API is loaded.
                                google.charts.setOnLoadCallback(drawChart4);

                                function drawChart4() {


                                    //DONUT CHART
                                    var jsonData = $.ajax({
                                            url: 'http://136.144.187.133/phpQueries/coinsPerCountryIP.php',
                                            dataType: "json",
                                            async: true
                                        }
                                    ).done(function (jsonData) {
                                        console.log(jsonData);

                                        // Create our data table out of JSON data loaded from server
                                        var parsedData = jsonData;
                                        var len = parsedData.length;

                                        var data = new google.visualization.DataTable();
                                        data.addColumn('string', 'ipCountry');
                                        data.addColumn('number', 'totalCoins');
                                        data.addRows(len);


                                        for (var n = 0; n < len; n++) {
                                            var i = 0;
                                            //for(var key in parsedData[n]){
                                            data.setValue(n, 0, parsedData[n]['ipCountry']);
                                            data.setValue(n, 1, parsedData[n]['totalCoins']);
                                            //i++;
                                            //}
                                        }
                                        var options = {
                                            title: 'Total coins Per Country ID',
                                            pieHole: 0.4
                                        };

                                        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                                        chart.draw(data, options);
                                    });
                                }
                            }

                            -->
                        </script>
                        <div class=panel-body id="piechart" style="width: 100%; height: 500px;"></div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
</body>

</html>

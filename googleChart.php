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
                    <h1 class="page-header">More Dashboard Charts</h1>
                    <!--coins/real per country -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Total Money per Country
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle"
                                            data-toggle="dropdown">
                                        Views
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li onclick="reloadCoins();">Coins per Country
                                        </li>
                                        <li onclick="reloadReal();">Real Money Per Country
                                        </li>
                                        <li class="divider"></li>
                                    </ul>
                                </div>
                                <button type="button" class="btn btn-default btn-circle" onclick="reloadCoins();"><i
                                            class="fa fa-refresh"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.panel-heading -->

                        <script type="text/javascript">
                            reloadCoins();

                            function reloadCoins() {
                                google.charts.load('current', {'packages': ['corechart']});
                                // Set a callback to run when the Google Visualization API is loaded.
                                google.charts.setOnLoadCallback(drawChart);

                                function drawChart() {


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

                            function reloadReal() {
                                google.charts.load('current', {'packages': ['corechart']});
                                // Set a callback to run when the Google Visualization API is loaded.
                                google.charts.setOnLoadCallback(drawChart1);

                                function drawChart1() {


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
                                        data.addColumn('number', 'totalReal');
                                        data.addRows(len);


                                        for (var n = 0; n < len; n++) {
                                            var i = 0;
                                            //for(var key in parsedData[n]){
                                            data.setValue(n, 0, parsedData[n]['ipCountry']);
                                            data.setValue(n, 1, parsedData[n]['totalReal']);
                                            //i++;
                                            //}
                                        }

                                        var options = {
                                            title: 'Total Real Money Per Country ID',
                                            pieHole: 0.4
                                        };

                                        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                                        chart.draw(data, options);
                                    });
                                }
                            }

                            -- >
                        </script>
                        <div class=panel-body id="piechart" style="width: 100%; height: 500px;"></div>
                    </div>

                    <!--Div that will hold the dashboard-->
                    <!-- line chart-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Sales Volume
                            <button type="button" class="btn btn-default btn-circle" onclick="reload2();"><i
                                        class="fa fa-refresh"></i>
                            </button>
                        </div>
                        <div class="panel-body" id="dashboard_div">
                            <!--//LINE CHART-->
                            <script type="text/javascript">
                                reload2();

                                function reload2() {
                                    google.charts.load('current', {'packages': ['corechart', 'line', 'controls']});
                                    //google.load("visualization", "1", {packages:["LineChart"]});
                                    // Set a callback to run when the Google Visualization API is loaded.
                                    google.charts.setOnLoadCallback(drawChartTwo);

                                    function drawChartTwo() {

                                        //LINE CHART
                                        var jsonData = $.ajax({
                                                url: 'http://136.144.187.133/phpQueries/salesVolume.php',
                                                dataType: "json",
                                                async: true
                                            }
                                        ).done(function (jsonData) {
                                            console.log(jsonData);

                                            // Create our data table out of JSON data loaded from server
                                            var parsedData = jsonData;
                                            var len = parsedData.length;
                                            var data;
                                            var DateRangeSlider;
                                            var chart;
                                            var dashboard = new google.visualization.Dashboard(document.getElementById('dashboard_div'));

                                            //prepare data
                                            data = new google.visualization.DataTable();
                                            data.addColumn('date', 'Date');
                                            data.addColumn('number', 'Number of Transactions');
                                            data.addColumn('number', 'Virtual Money');
                                            data.addColumn('number', 'Real Money');
                                            data.addRows(len);

                                            for (var n = 0; n < len; n++) {
                                                data.setValue(n, 0, new Date(parsedData[n]['year'], (parsedData[n]['month']-1)));
                                                data.setValue(n, 1, parsedData[n]['rows']);
                                                data.setValue(n, 2, parsedData[n]['virtualmoney']);
                                                data.setValue(n, 3, parsedData[n]['realmoney']);
                                            }
                                            //finish data prepare


                                            // Create a range slider, passing some options
                                            DateRangeSlider = new google.visualization.ControlWrapper({
                                                'controlType': 'DateRangeFilter',
                                                'containerId': 'filterDate_div',
                                                'options': {
                                                    'filterColumnLabel': 'Date',
                                                    'minValue': new Date(2010, 1),
                                                    'maxValue': new Date(2015, 12)
                                                }
                                            });

                                            // Create a pie chart, passing some options
                                            chart = new google.visualization.ChartWrapper();
                                            chart.setChartType('LineChart');
                                            chart.setContainerId('line_div');
                                            chart.setDataTable(data);
                                            chart.setOptions({
                                                title: 'Amount of money spend',
                                                vAxis: {scaleType: 'log', title: "log schale"},
                                                colors: ["blue", "green", "orange"],
                                                height: 500,
                                            });
                                            chart.setView({columns: [0, 1, 2, 3]});

                                            // 'chart' will update whenever you interact with 'DateRangeSlider'
                                            // to match the selected range.
                                            dashboard.bind(DateRangeSlider, chart);
                                            dashboard.draw(data);

                                            var hideSale = document.getElementById("Hide_Transactions");
                                            hideSale.onclick = function () {
                                                chart.setView({columns: [0, 2, 3]});
                                                dashboard.draw(data);
                                            };
                                            var hideVirt = document.getElementById("Hide_Virtual_Money");
                                            hideVirt.onclick = function () {
                                                chart.setView({columns: [0, 1, 3]});
                                                dashboard.draw(data);
                                            };

                                            var hideReal = document.getElementById("Hide_Real_Money");
                                            hideReal.onclick = function () {
                                                chart.setView({columns: [0, 1, 2]});
                                                dashboard.draw(data);
                                            };

                                            var hide1 = document.getElementById("Hide_1");
                                            hide1.onclick = function () {
                                                chart.setView({columns: [0, 1]});
                                                dashboard.draw(data);
                                            };
                                            var hide2 = document.getElementById("Hide_2");
                                            hide2.onclick = function () {
                                                chart.setView({columns: [0, 2]});
                                                dashboard.draw(data);
                                            };

                                            var hide3 = document.getElementById("Hide_3");
                                            hide3.onclick = function () {
                                                chart.setView({columns: [0, 3]});
                                                dashboard.draw(data);
                                            };

                                            var showAll = document.getElementById('Show_All');
                                            showAll.onclick = function () {
                                                chart.setView({columns: [0, 1, 2, 3]});
                                                dashboard.draw(data);
                                            };

                                            var showLog = document.getElementById('line_log');
                                            showLog.onclick = function () {
                                                chart.setOptions({
                                                    title: 'Amount of money spend',
                                                    vAxis: {scaleType: 'log', title: "log schale"},
                                                    colors: ["blue", "green", "orange"],
                                                    height: 500
                                                });
                                                dashboard.draw(data);
                                            };

                                            var showNormal = document.getElementById('line_normal');
                                            showNormal.onclick = function () {
                                                chart.setOptions({
                                                    title: 'Amount of money spend',
                                                    vAxes: {
                                                        1: {title: 'Sales (Units)'},
                                                        2: {title: 'Money'},
                                                        3: {title: 'Money'}
                                                    },
                                                    series: {
                                                        // Gives each series an axis name that matches the Y-axis below.
                                                        1: {targetAxisIndex: 0},
                                                        2: {targetAxisIndex: 1},
                                                        3: {targetAxisIndex: 2}
                                                    },
                                                    colors: ["blue", "green", "orange"],
                                                    height: 500
                                                });
                                                dashboard.draw(data);
                                            };
                                        });
                                    }

                                }

                                -- >
                            </script>
                            <!--Divs that will hold each control and chart-->
                            <p4>Pressing the legend makes that line pop.</p4>
                            <br/>
                            <button id="Hide_Transactions" type="button" class="btn btn-success">Hide Transactions
                            </button>
                            <button type="button" class="btn btn-success" id="Hide_Virtual_Money">Hide Virtual Money
                            </button>
                            <button type="button" class="btn btn-success" id="Hide_Real_Money">Hide Real Money</button>
                            <br/>
                            <button type="button" class="btn btn-success" id="Hide_1">Show Transactions</button>
                            <button type="button" class="btn btn-success" id="Hide_2">Show Virtual Money</button>
                            <button type="button" class="btn btn-success" id="Hide_3">Show Real Money</button>
                            <button type="button" class="btn btn-success" id="Show_All">Show All</button>
                            <br/>
                            <button title="Set axis to log scale" id="line_log" type="button"
                                    class="btn btn-primary btn-circle btn-lg"><i class="fa fa-list"></i>
                            </button>
                            <button title="Set axis to normal scale (dual-y-axis)" id="line_normal" type="button"
                                    class="btn btn-success btn-circle btn-lg"><i class="fa fa-link"></i>
                            </button>
                            <div id="filterDate_div"></div>
                            <div id="line_div" style="width=100%, heigth=500px"></div>
                        </div>
                    </div>

                    <!--bar-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Sales Volume
                            <button type="button" class="btn btn-default btn-circle" onclick="reload3();"><i
                                        class="fa fa-refresh"></i>
                            </button>
                        </div>
                        <!--//BAR CHART-->
                        <script type="text/javascript">
                            <!--
                            reload3();

                            function reload3() {
                                google.charts.load('current', {'packages': ['corechart', 'line', 'controls', 'bar']});
                                //google.load("visualization", "1", {packages:["LineChart"]});
                                // Set a callback to run when the Google Visualization API is loaded.
                                google.charts.setOnLoadCallback(drawChartThree);

                                function drawChartThree() {

                                    //BAR CHART
                                    var jsonData = $.ajax({
                                            url: 'http://136.144.187.133/phpQueries/salesVolume.php',
                                            dataType: "json",
                                            async: true
                                        }
                                    ).done(function (jsonData) {
                                        console.log(jsonData);

                                        // Create our data table out of JSON data loaded from server
                                        var parsedData = jsonData;
                                        var len = parsedData.length;
                                        var dashboard = new google.visualization.Dashboard(document.getElementById('dashboard_div2'));

                                        //prepare data
                                        var data = new google.visualization.DataTable();
                                        data.addColumn('date', 'Date');
                                        data.addColumn('number', 'Number of Transactions');
                                        data.addColumn('number', 'Virtual Money');
                                        data.addColumn('number', 'Real Money');
                                        data.addRows(len);

                                        for (var n = 0; n < len; n++) {
                                            data.setValue(n, 0, new Date(parsedData[n]['year'], (parsedData[n]['month']-1)));
                                            data.setValue(n, 1, parsedData[n]['rows']);
                                            data.setValue(n, 2, parsedData[n]['virtualmoney']);
                                            data.setValue(n, 3, parsedData[n]['realmoney']);
                                        }
                                        //finish data prepare


                                        var DateRangeSlider2 = new google.visualization.ControlWrapper({
                                            'controlType': 'DateRangeFilter',
                                            'containerId': 'filterDate_div2',
                                            'options': {
                                                'filterColumnLabel': 'Date',
                                                'minValue': new Date(2010, 1),
                                                'maxValue': new Date(2015, 12)
                                            }
                                        });

                                        // Create a pie chart, passing some options
                                        var chart = new google.visualization.ChartWrapper();
                                        chart.setChartType('ColumnChart');
                                        chart.setContainerId('combo_div');
                                        chart.setDataTable(data);
                                        chart.setOptions({
                                            title: 'Amount of money spend',
                                            series: {
                                                0: {axis: 'Transactions'},
                                                1: {axis: 'Virtual Money'},
                                                2: {axis: 'Real Money'}
                                            },
                                            vAxis: {
                                                title: 'Growth in log',
                                                scaleType: 'log'
                                            },
                                            colors: ["blue", "green", "orange"],
                                            trendlines: {
                                                0: {type: 'log', lineWidth: 5, opacity: .3},
                                                1: {type: 'log', lineWidth: 5, opacity: .3},
                                                2: {type: 'log', lineWidth: 5, opacity: .3}
                                            },
                                            bar: {groupWidth: "95%"},
                                            height: 500
                                        });

                                        // 'chart' will update whenever you interact with 'DateRangeSlider'
                                        // to match the selected range.
                                        dashboard.bind(DateRangeSlider2, chart);
                                        dashboard.draw(data);


                                    });
                                }

                            }

                            -->
                        </script>
                        <div class="panel-body" id="dashboard_div2">
                            <div id="filterDate_div2"></div>
                            <div id="combo_div" style="width=100%, heigth=500px"></div>
                        </div>
                    </div>


                    <!--GEO CHAR-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Sales World
                            <button type="button" class="btn btn-default btn-circle" onclick="reload4();"><i
                                        class="fa fa-refresh"></i>
                            </button>
                        </div>
                        <script type="text/javascript">
                            reload4();

                            function reload4() {
                                google.charts.load('current', {
                                    'packages': ['controls', 'geochart'],
                                    'mapsApiKey': 'AIzaSyBhS6_pyD8e3GHwXgELm9ecpVPz7Org8wg'
                                });
                                //google.load("visualization", "1", {packages:["LineChart"]});
                                // Set a callback to run when the Google Visualization API is loaded.
                                console.log("inside");
                                google.charts.setOnLoadCallback(function () {
                                    setTimeout(drawChartFour, 5000);
                                });

                                function drawChartFour() {
                                    console.log("drawFour");

                                    //GEO CHART
                                    var jsonData = $.ajax({
                                            url: 'http://136.144.187.133/phpQueries/load_sales_per_country.php',
                                            dataType: "json",
                                            async: true
                                        }
                                    ).done(function (jsonData) {
                                        console.log(jsonData);

                                        // Create our data table out of JSON data loaded from server
                                        var parsedData = jsonData;
                                        var len = parsedData.length;
                                        var dashboard = new google.visualization.Dashboard(document.getElementById('dashboard_div3'));

                                        //prepare data
                                        var data = new google.visualization.DataTable();
                                        data.addColumn('date', 'Date');
                                        data.addColumn('string', 'ipCountry');
                                        data.addColumn('string', 'Country_Name');
                                        data.addColumn('number', 'Number of Transactions');
                                        data.addRows(len);

                                        for (var n = 0; n < len; n++) {
                                            data.setValue(n, 0, new Date(parsedData[n]['Ydate'], (parsedData[n]['Qdate']-1)));
                                            data.setValue(n, 1, parsedData[n]['ipCountry']);
                                            data.setValue(n, 2, parsedData[n]['name']);
                                            data.setValue(n, 3, parsedData[n]['num_of_sales']);
                                        }
                                        //finish data prepare


                                        // Create a range slider, passing some options
                                        var DateRangeSlider3 = new google.visualization.ControlWrapper({
                                            'controlType': 'DateRangeFilter',
                                            'containerId': 'filterDate_div3',
                                            'options': {
                                                'filterColumnLabel': 'Date',
                                                'minValue': new Date(2010, 1),
                                                'maxValue': new Date(2015, 12)
                                            }
                                        });


                                        var chart = new google.visualization.ChartWrapper();
                                        chart.setChartType('GeoChart');
                                        chart.setContainerId('geo_div');
                                        chart.setDataTable(data);
                                        chart.setOptions({
                                            colorAxis: {colors: ['#00853f', 'black', '#e31b23']},
                                            backgroundColor: '#81d4fa',
                                            datalessRegionColor: '#f8bbd0',
                                            defaultColor: '#f5f5f5'
                                        });
                                        chart.setView({columns: [1, 2, 3]});

                                        // 'chart' will update whenever you interact with 'DateRangeSlider'
                                        // to match the selected range.
                                        dashboard.bind(DateRangeSlider3, chart);
                                        dashboard.draw(data);
                                        console.log("drawn done");
                                    });
                                }

                            }

                            -- >
                        </script>
                        <div class="panel-body" id="dashboard_div3">
                            <div id="filterDate_div3"></div>
                            <div id="geo_div" style="width=100%, heigth=1000px"></div>
                        </div>
                    </div>

                    <!-- /.panel-body -->
                </div>
            </div>
            <!-- /.col-lg-12 -->
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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:style="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"; charset="utf-8">
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
                                <a href="2_customerbeh.php">Customer Behavior</a>
                            </li>
                            <li>
                                <a href="2_geographical.php">Geographical Development</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
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
                        <h1 class="page-header">Geographical Development</h1>
                        <!--piechart-->
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

                                -->
                            </script>
                            <div class=panel-body id="piechart" style="width: 100%; height: 500px;"></div>
                        </div>
                    
                     <script type="text/javascript">
                                reload4();
                                function reload4() {
                                    google.charts.load('current', {'packages':['controls','geochart'], 'mapsApiKey': 'AIzaSyBhS6_pyD8e3GHwXgELm9ecpVPz7Org8wg'});
                                    //google.load("visualization", "1", {packages:["LineChart"]});
                                    // Set a callback to run when the Google Visualization API is loaded.
                                    console.log("inside");
                                    google.charts.setOnLoadCallback(function() { setTimeout(drawChartFour, 5000); });
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
                                                    'minValue': new Date(2010,1),
                                                    'maxValue': new Date(2015,12)
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
                                -->
                        </script>

                        <!--Div that will hold the dashboard-->
                        
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> global sales.
                            <button type="button" class="btn btn-default btn-circle" onclick="reload4();"><i class="fa fa-refresh"></i>
                            </button>
                        </div>
                        <div class="panel-body" id="dashboard_div3">
                            <div id="filterDate_div3"></div>
                            <div id="geo_div" style="width=100%, heigth=1000px"></div>
                        </div>
                    </div>


<!--                        <div class="panel-heading">-->
<!--                            Sales Volume-->
<!--                        </div>-->
<!--                        <div class= panel-body id="barlinechart" style="width: 50%; height: 500px;"></div>-->
<!--                        <button type="button" id="hideVirtual" style="width: 20%; height: 20%;" >Hide Virtual Money</button>-->
<!--                        <button type="button" id="hideReal"  style="width: 20%; height: 20%;">Hide Real Money</button>-->
<!--                        <button type="button" id="hideSales"  style="width: 20%; height: 20%;">Hide Sales</button>-->

                
                
                
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                            <div class="panel-heading">

                            </div>
                        <div class="panel-body">


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

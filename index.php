<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:style="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">


<head>
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
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-usd fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
	                                <div class="huge" id="res_avgspend">
		                                Loading...
                                    </div>
                                    &#916; = <span id="res_avgspend_m">0</span>%
                                    <div>average spendure this month.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-truck fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                	<div class="huge" id="res_transactions">
                                	Loading...
                                    </div>
                                    &#916; = <span id="res_transactions_m">0</span>%
                                    <div>transactions this month.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- LOAD BIG DISPLAYS -->
            <script type="text/javascript">
                var myVar;
                window.onload = function() {
	                myVar = setTimeout(getInfo, 500);
	            }; //onload

	            function getInfo() {
		            ///AVGSPEND PART
                    //request data from mysql
                    $.ajax({
                            url: 'http://136.144.187.133/phpQueries/3_avgspend.php',
                        dataType: "json",
                        async: true
                    }).done(function (jsonData) {
                        //parse jsonData to data object
                        var obj = jsonData;
                        document.getElementById('res_avgspend').innerHTML = obj['avgspend'];
                        //calculate month trend
                        document.getElementById('res_avgspend_m').innerHTML =  Math.round(((obj['avgspend']-obj['avgm'])/obj['avgm'])*100);
                    });
	                	                                    
	                ///TRANSACTIONS PART
                    //request data from mysql
                    var jsonData = $.ajax({
                        url: 'http://136.144.187.133/phpQueries/3_transactions.php',
                        dataType: "json",
                        async: true
                    }).done(function (jsonData) {
                        //parse jsonData to data object
                        var obj = jsonData;
                        document.getElementById('res_transactions').innerHTML = obj['transactions'];
                        //calculate month trend
                        document.getElementById('res_transactions_m').innerHTML = Math.round(((obj['transactions']-obj['transm'])/obj['transm'])*100);
                    })

                }
            </script>
            <!-- CHARTS AND STUFF -->

            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-header fa-fw"></i> Introduction
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <p class="lead">
                                Welcome to your administrative dashboard. There are some things to keep in mind while browsing this awesome dashboard.<br/>
                            </p>
                            <ul>
                                <li>First the dashboard has been developed for mobile devices aswell, however big screens work best</li>
                                <li>Secondly because the dashboards handles al kinds of resolutions(Tablet tested), it needs to redraw the graphics.
                                    However since the graphics use heavy network loads, such as the google API, the user is asked to refresh themselves when the resolution of their window changes by pressing the <button type="button" class="btn btn-default btn-circle" onclick="alert('Stop pressing me please. I dont like it.')"><i class="fa fa-refresh"></i>
                                    </button>
                                </li>
                                <li>
                                    Speaking of google API, the GeoChart is inconsistent in loading the world map. We fixed this by making sure the map is retrieved, but that means a five second wait, so please be patient.
                                </li>
                                <li>
                                    Also you can interact with the the chart, by clicking on the legend, hovering over the chart itself, clicking on the buttons, playing with the sliders and using the list in the top right corner.
                                </li>
                                <li>
                                    When you see the text "view details" click it!
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Total transaction overview
                            <button type="button" class="btn btn-default btn-circle" onclick="reload();"><i class="fa fa-refresh"></i>
                            </button>
                        </div>
                        <!-- /.panel-heading -->
                        <div id="dashboard_div" class="panel-body">
                            <div id="filterDate_div"></div>
                            <div class= panel-body id="line_div" style="width: 100%; height: 500px;"></div>
                            <script type="text/javascript">
                                reload();
                                function reload() {
                                    google.charts.load('current', {'packages':['corechart', 'line', 'controls']});
                                    //google.load("visualization", "1", {packages:["LineChart"]});
                                    // Set a callback to run when the Google Visualization API is loaded.
                                    google.charts.setOnLoadCallback(drawChart);
                                    function drawChart() {

                                        var jsonData = $.ajax({
                                                url: 'http://136.144.187.133/phpQueries/transactions.php',
                                                dataType: "json",
                                                async: true
                                            }
                                        ).done(function (jsonData) {
                                            console.log(jsonData);

                                            // Create our data table out of JSON data loaded from server
                                            var parsedData = jsonData;
                                            var len = parsedData.length;
                                            var dashboard = new google.visualization.Dashboard(document.getElementById('dashboard_div'));

                                            //prepare data
                                            var data = new google.visualization.DataTable();
                                            data.addColumn('date', 'Date');
                                            data.addColumn('number', 'Transactions');
                                            data.addRows(len);

                                            for (var n = 0; n < len; n++) {
                                                data.setValue(n, 0, new Date(parsedData[n]['year'], parsedData[n]['month']));
                                                data.setValue(n, 1, parsedData[n]['transactions']);
                                            }
                                            //finish data prepare


                                            // Create a range slider, passing some options
                                            var DateRangeSlider = new google.visualization.ControlWrapper({
                                                'controlType': 'DateRangeFilter',
                                                'containerId': 'filterDate_div',
                                                'options': {
                                                    'filterColumnLabel': 'Date',
                                                    'minValue': new Date(2010,1),
                                                    'maxValue': new Date(2015,12)
                                                }
                                            });

                                            // Create a chart, passing some options
                                            var chart = new google.visualization.ChartWrapper();
                                            chart.setChartType('LineChart');
                                            chart.setContainerId('line_div');
                                            chart.setDataTable(data);
                                            chart.setOptions({
                                                title: 'Amount of transactions',
                                                vAxes: {
                                                    0: {title: 'Total Transactions'}
                                                },
                                                colors: ["blue"],
                                                height: 500
                                            });

                                            // 'chart' will update whenever you interact with 'DateRangeSlider'
                                            // to match the selected range.
                                            dashboard.bind(DateRangeSlider, chart);
                                            dashboard.draw(data);


                                        });
                                    }
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
                    
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>

</html>

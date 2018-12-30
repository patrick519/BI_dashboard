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
	                    <div class="page-header">
                        <h1>Customer Behavior</h1>
                        <p class="primary"> Key Performance Indicators this month (april 2015),
                            </br>in comparison with last month.</p>
	                    </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

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
                                    <div>average spendure.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-calendar-plus-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge" id="res_avglifespawn">
                                	Loading...
                                    </div>
                                    &#916; = <span id="res_avglifespawn_m">0</span>%
                                    <div>avarge consumer lifespawn(days).</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge" id="res_avgtransaction">
                                	Loading...
                                    </div>
                                    &#916; = <span id="res_avgtransaction_m">0</span>%
                                    <div>average transactions per customer.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user-plus fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge" id="res_newpurchasers">
                                	Loading...
                                    </div>
                                    &#916; = <span id="res_newpurchasers_m">0</span>%
                                    <div>new purchasers.</div>
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
                        document.getElementById('res_avgspend_m').innerHTML = Math.round(((obj['avgspend']-obj['avgm'])/obj['avgm'])*100);
                    });

	                
	                ///AVGLIFESPAWN PART
                    //request data from mysql
                    $.ajax({
                        url: 'http://136.144.187.133/phpQueries/3_avglifespawn.php',
                        dataType: "json",
                        async: true
                    }).done(function (jsonData) {
                        //parse jsonData to data object
                        var obj = jsonData;
                        document.getElementById('res_avglifespawn').innerHTML = obj['avglifespan'];
                        //calculate month trend
                        document.getElementById('res_avglifespawn_m').innerHTML = Math.round(((obj['avglifespan']-obj['avgm'])/obj['avgm'])*100);
                    });


	                //AVGTRANSACTION PART
                    //request data from mysql
                    $.ajax({
                        url: 'http://136.144.187.133/phpQueries/3_avgtransaction.php',
                        dataType: "json",
                        async: true
                    }).done(function (jsonData) {
                        var obj = jsonData;
                        document.getElementById('res_avgtransaction').innerHTML = obj['avgtransaction'];
                        //calculate month trend
                        document.getElementById('res_avgtransaction_m').innerHTML = Math.round(((obj['avgtransaction']-obj['avgm'])/obj['avgm'])*100);
                    });
                    
	                //NEWPURCHASERS PART
                    //request data from mysql
                    var jsonData = $.ajax({
                        url: 'http://136.144.187.133/phpQueries/3_newpurchasers.php',
                        dataType: "json",
                        async: true
                    }).done(function (jsonData) {
                        var obj = jsonData;
                        document.getElementById('res_newpurchasers').innerHTML = obj['newpurchasers'];
                        //calculate month trend
                        document.getElementById('res_newpurchasers_m').innerHTML = Math.round(((obj['newpurchasers']-obj['newm'])/obj['newm'])*100);
                    });

                } //getinfo
            </script>               
            
            <!-- MORE DETAILED VIEWS -->
            <div class="row">
                    <div class="col-lg-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-bar-chart-o fa-fw"></i> average spendure.
                                <button type="button" class="btn btn-default btn-circle" onclick="reload();"><i class="fa fa-refresh"></i>
                                </button>
                            </div>
                            <!-- /.panel-heading -->
                            <div id="dashboard_div" class="panel-body">
                                <div id="filterDate_div"></div>
                                <div class= panel-body id="chart_div" style="width: 100%; height: 500px;"></div>

                                <script type="text/javascript">
                                    reload();
                                    function reload() {
                                        google.charts.load('current', {'packages':['corechart', 'controls']});
                                        google.charts.setOnLoadCallback(drawChart);

                                        function drawChart(){
                                            var jsonData = $.ajax({
                                                    url: 'http://136.144.187.133/phpQueries/load_avg_amount_spend_per_customer.php',
                                                    dataType: "json",
                                                    async: true
                                                }
                                            ).done(function (jsonData) {
                                                console.log(jsonData);

                                                // Create our data table out of JSON data loaded from server
                                                var parsedData = jsonData;
                                                var len = parsedData.length;
                                                var dashboard = new google.visualization.Dashboard(document.getElementById('dashboard_div'));


                                                var data = new google.visualization.DataTable();
                                                data.addColumn('date', 'Date');
                                                data.addColumn('string','DateS');
                                                data.addColumn('number', 'Spendure');
                                                data.addColumn('number', 'Coins');
                                                data.addColumn('number', 'Costumers');
                                                data.addRows(len);


                                                for(var n = 0; n < len; n++){
                                                    var MonthAsString = parsedData[n]['Qdate'].toString();
                                                    var YearAsString = parsedData[n]['Ydate'].toString();

                                                    var Dates = YearAsString+" "+MonthAsString;
                                                    console.log("date".Dates);

                                                    data.setValue(n, 0, new Date(parsedData[n]['Ydate'],(parsedData[n]['Qdate']-1)));
                                                    data.setValue(n, 1, Dates);
                                                    data.setValue(n, 2, parsedData[n]['price']);
                                                    data.setValue(n, 3, parsedData[n]['coins']);
                                                    data.setValue(n, 4, parsedData[n]['numberOfClients']);

                                                }

                                                // Create a range slider, passing some options
                                                var DateRangeSlider = new google.visualization.ControlWrapper({
                                                    'controlType': 'DateRangeFilter',
                                                    'containerId': 'filterDate_div',
                                                    'options': {
                                                        'filterColumnLabel': 'Date',
                                                        'minValue': new Date(2010,1),
                                                        'maxValue': new Date(2015,4)
                                                    }
                                                });

                                                // Create a pie chart, passing some options
                                                var chart = new google.visualization.ChartWrapper();
                                                chart.setChartType('BubbleChart');
                                                chart.setContainerId('chart_div');
                                                chart.setDataTable(data);
                                                chart.setOptions({
                                                    title: 'Avarge Consumer Spendure trough the Years per Quarter',
                                                    hAxis: {title: 'Total Amount of Coins'},
                                                    vAxis: {title: 'Total Amount of Real Money'},
                                                    colorAxis: {colors: ['yellow', 'red']},
                                                    bubble: {textStyle: {fontSize: 11}}
                                                });
                                                chart.setView({columns: [1, 2, 3, 4]});

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

                <div class="row">
                    <div class="col-lg-8">
                        <!--bar-->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-bar-chart-o fa-fw"></i> Cost and Reward
                                <button type="button" class="btn btn-default btn-circle" onclick="reloadBar();"><i
                                            class="fa fa-refresh"></i>
                                </button>
                            </div>
                            <!--//BAR CHART-->
                            <script type="text/javascript">
                                <!--
                                reloadBar();

                                function reloadBar() {
                                    google.charts.load('current', {'packages': ['corechart', 'line', 'controls', 'bar']});
                                    //google.load("visualization", "1", {packages:["LineChart"]});
                                    // Set a callback to run when the Google Visualization API is loaded.
                                    google.charts.setOnLoadCallback(drawChartThree);

                                    function drawChartThree() {

                                        //BAR CHART
                                        var jsonData = $.ajax({
                                                url: 'http://136.144.187.133/phpQueries/4_costVSreward.php',
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
                                            data.addColumn('number', 'Coins Cost trough the month');
                                            data.addColumn('number', 'Coins Reward at end of month');
                                            data.addRows(len);

                                            for (var n = 0; n < len; n++) {
                                                data.setValue(n, 0, new Date(parsedData[n]['year'], (parsedData[n]['month']-1)));
                                                data.setValue(n, 1, parsedData[n]['coinsProductionCost']);
                                                data.setValue(n, 2, parsedData[n]['harvestEndMonth']);
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
                                                    0: {axis: 'Cost of Coins'},
                                                    1: {axis: 'Reward of Coins'}
                                                },
                                                vAxis: {
                                                    title: 'Growth in EUR'
                                                },
                                                colors: ["blue", "green", "orange"],
                                                trendlines: {
                                                    0: {type: 'number', lineWidth: 5, opacity: .3},
                                                    1: {type: 'number', lineWidth: 5, opacity: .3},
                                                    2: {type: 'number', lineWidth: 5, opacity: .3}
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
                                <div id="combo_div" style="width=100%, height=500px"></div>
                            </div>
                        </div>
                    </div>
                </div>


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

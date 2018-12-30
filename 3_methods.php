<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:style="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"; charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

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
    <?php
    include '../lib/database.php';
    $db = new database();
    ?>
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tables</h1>
            </div>
        </div><!-- /.col-lg-12 -->
        <!-- /.row -->
        <!-- Methods -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Methods
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <?php
                        $query = "SELECT * FROM methods ORDER BY methodId ASC ";

                        $result = $db->select($query);
                        /* fetch associative array */
                        printf ("%s" , "<table width=\"100%\" class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">");
                        printf ("%s" ,
                            " <thead>
                                        <tr>
                                          <th>methodId </th>
                                          <th>methodName</th>
                                        </tr>
                                   </thead>");
                        printf ("%s", "<tbody>");
                        while ($row = $result->fetch_assoc()) {
                            printf ("%s", "<tr class=\"gradeA>\">");
                            printf ("%s %s %s", "<td>",$row["methodId"], "</td>");
                            printf ("%s %s %s", "<td>", $row["methodName"], "</td>");
                            printf ("%s", "</tr>" );
                        }
                        printf ("%s" , "</tbody></table>");

                        /* free result set */
                        $result->free();
                        ?>
                    </div> <!-- /.panel-body -->
                </div> <!-- /.panel -->
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
	    $("#includedMenu").load("menu.html"); 
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>

</body>

</html>

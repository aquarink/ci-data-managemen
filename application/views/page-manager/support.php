<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Support | Manager Dashboard</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>asset/images/favicon.ico" type="image/x-icon" />

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>asset/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>asset/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url(); ?>asset/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>asset/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">PM Mobile</a>
            </div>
            <!-- /.navbar-header -->

            
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <img src="<?php echo base_url(); ?>asset/images/mitratel.png" class="img img-responsive" style="width: 200px">
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>manager"><i class="fa fa-dashboard fa-lg"></i>  Dashboard Overall</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>manager/pm"><i class="fa fa-tasks fa-lg"></i>  PM</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>manager/maps"><i class="fa fa-map fa-lg"></i>  Maps</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>manager/support"><i class="fa fa-user fa-lg"></i>  Support</a>
                        </li>
                         <li>
                            <a href="<?php echo base_url(); ?>manager/logout"><i class="fa fa-sign-out fa-lg"></i>  Logout</a>
                        </li>

                        <img src="<?php echo base_url(); ?>asset/images/logo_cudo.png" class="img img-responsive" style="width: 70px; margin-left: 70px">
                    </ul>
                </div>
            </div>
        </nav>

         <div id="page-wrapper" style="padding-top: 10px;">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Support</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Contact Support
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Posisi</th>
                                        <th>No. Telepon</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                        <td>Yonandha Bagus</td>
                                        <td>Help Desk</td>
                                        <td>+6281318435321</td>
                                        <td>yonandha.bagus@cudocomm.com</td>
                                    </tr>
                                    <tr>
                                        <td>Feri Sapto</td>
                                        <td>Help Desk</td>
                                        <td>+628977764301</td>
                                        <td>feri.sapto@cudocomm.com</td>
                                    </tr>
                                    <tr>
                                        <td>Andri Yan Jisnu</td>
                                        <td>Software Department</td>
                                        <td>+6289630913301</td>
                                        <td>andri.yanjisnu@cudocomm.com</td>
                                    </tr>
                                    <tr>
                                        <td>Teguh Ridho Afdilla</td>
                                        <td>Software Department</td>
                                        <td>+6285711480305</td>
                                        <td>teguh.ridho@cudocomm.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
        </div>

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
     <script src="<?php echo base_url(); ?>asset/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>asset/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>asset/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url(); ?>asset/vendor/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/vendor/morrisjs/morris.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>asset/dist/js/sb-admin-2.js"></script>

</body>

</html>

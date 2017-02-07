<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Access Sacti</title>
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

    <style type="text/css">
	    body { 
			background: url(<?php echo base_url(); ?>asset/images/bg.jpg) no-repeat center center fixed; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
    </style>

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <center>
                        	<img src="<?php echo base_url(); ?>asset/images/mitratel.png" class="img img-responsive" style="width: 200px">
                        	<h3 class="panel-title">Sign in with your PM Mobile account</h3>
                        </center>
                    </div>
                    <div class="panel-body">
                    	<?php 
				          $attributes = array("class" => "", "id" => "loginform", "name" => "loginform");
				          echo form_open("welcome/login", $attributes);
				        ?>
                        <!-- <form role="form"> -->
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus value="<?php echo set_value('username'); ?>">
                                    <span class="text-danger"><?php echo form_error('username'); ?></span>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="<?php echo set_value('password'); ?>">
                                    <span class="text-danger"><?php echo form_error('password'); ?></span>
                                </div>
                                <div class="checkbox">
                                    <label>
                                       <br>
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name="btn_login" class="btn btn-lg btn-success btn-block" value="Login">
                            </fieldset>
                        <?php echo form_close(); ?>
         				<?php echo $this->session->flashdata('msg'); ?>
                    </div>
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

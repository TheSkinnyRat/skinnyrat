<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Selamat Datang di Backend <?php echo $app_title ?> Website ^^">
    <meta name="author" content="">

    <title>Backend <?php echo $app_title ?></title>

    <link rel="icon" href="<?php echo base_url('assets/frontend/img/favicon/'.$app_favicon) ?>">

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>assets/backend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url() ?>assets/backend/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>assets/backend/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url() ?>assets/backend/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url() ?>assets/backend/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="<?php echo base_url() ?>assets/backend/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url() ?>assets/backend/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/backend/vendor/jquery/jquery.min.js"></script>

    <!-- jQuery UI -->
    <script src="<?php echo base_url() ?>assets/backend/vendor/jquery-ui/jquery-ui.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url() ?>assets/backend/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url() ?>assets/backend/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url() ?>assets/backend/vendor/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url() ?>assets/backend/vendor/morrisjs/morris.min.js"></script>
    <script src="<?php echo base_url() ?>assets/backend/data/morris-data.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url() ?>assets/backend/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/backend/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/backend/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Validation Plugin -->
    <script src="<?php echo base_url() ?>assets/backend/vendor/jquery-validation/jquery.validate.js"></script>

    <!-- Text Editor Plugin -->
    <script src="<?php echo base_url('assets/backend/vendor/ckeditor/ckeditor.js') ?>"></script>

    <!-- Upload Plugin -->
    <script src="<?php echo base_url('assets/backend/vendor/fileupload/fileupload.min.js') ?>"></script>


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
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Selamat Datang, <?php echo $userdata['name'] ?></a>
            </div>
            <!-- /.navbar-header -->

            <!-- <ul class="nav navbar-top-links navbar-right">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url('admin/do_logout') ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>

                </li>

            </ul> -->
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                        <li>
                          <a href="<?php echo base_url() ?>"><i class="fa fa-home fa-fw"></i> Home</a>
                        </li>
                          <?php foreach ($menu as $m) { ?>
                					<li>
                            <a href="<?php echo base_url($m->target); ?>"><i class="fa <?php echo $m->icon; ?> fa-fw"></i> <?php echo $m->name; ?> <?php if(count($m->submenu)) { ?><span class="fa arrow"></span><?php } ?></a>
                						<?php if(count($m->submenu)){ ?>
                							<ul class="nav nav-second-level">
                								<?php foreach ($m->submenu as $sm) { ?>
                								<li>
                                  <a href="<?php echo base_url($m->target.'/'.$sm->target); ?>"><i class="fa <?php echo $sm->icon; ?> fa-fw"></i> <?php echo $sm->name; ?></a>
                								</li>
                								<?php } ?>
                							</ul>
                						<?php } ?>
                					</li>
                					<?php } ?>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
          <!-- START BREADCRUMB -->
          <!-- <ul class="breadcrumb clearfix">
            <li><a href="admin">Home</a></li>
            <li><a href="<?php echo $controller; ?>"><?php echo $controller_name; ?></a></li>
            <li class="active"><?php echo $function_name; ?></li>
          </ul> -->
          <!-- END BREADCRUMB -->
            <?php echo $content ?>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url() ?>assets/backend/dist/js/sb-admin-2.js"></script>

</body>

</html>

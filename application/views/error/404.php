<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Skinny Rat</title>

  <link rel="icon" href="<?php echo base_url('assets/frontend/img/favicon/rat.png') ?>">

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/frontend/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/frontend/css/sb-admin-2.min.css') ?>" rel="stylesheet">

  <!-- Custom styles for data tables page -->
  <link href="<?php echo base_url('assets/frontend/vendor/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">

  <!-- WARNING ALL SCRIPT MOVE HERE FROM BOTTOM -->

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/frontend/vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/frontend/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url('assets/frontend/vendor/chart.js/Chart.min.js') ?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url('assets/frontend/js/demo/chart-area-demo.js') ?>"></script>
  <script src="<?php echo base_url('assets/frontend/js/demo/chart-pie-demo.js') ?>"></script>

  <!-- Page data tables level plugins -->
  <script src="<?php echo base_url('assets/frontend/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/frontend/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>

  <!-- Page data tables level custom scripts -->
  <script src="<?php echo base_url('assets/frontend/js/demo/datatables-demo.js') ?>"></script>

  <!-- Validation Plugin -->
  <script src="<?php echo base_url('assets/frontend/vendor/jquery-validation/jquery.validate.js') ?>"></script>

  <!-- Custom scripts for Index pages-->
  <script src="<?php echo base_url('assets/frontend/js/page/index.js') ?>"></script>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url() ?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-grin-beam"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Skinny Rat <sup>^^</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('') ?>">
          <i class="fas fa-fw fa-home"></i>
          <span>Home</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <a href="<?php echo base_url() ?>">
              <button class="btn btn-primary mr-1" type="button">
                <i class="fas fa-fw fa-home"></i> HOME
              </button>
            </a>

          </ul>

        </nav>
        <!-- End of Topbar -->


        <div class="container-fluid">

          <!-- 404 Error Text -->
          <div class="text-center">
            <div class="error mx-auto" data-text="404">404</div>
            <p class="lead text-gray-800 mb-5">Page Not Found - Halaman Tidak Ditemukan</p>
            <p class="text-gray-500 mb-0">Whoops... Apa Yang Sedang Anda Cari ?? ^^</p>
            <a href="<?php echo base_url('home/shorten_url_form') ?>">&larr; Buat URL Anda Sendiri</a>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>&copy; BY <a href="https://www.instagram.com/the.skinny.rat" target="_blank">スキニーラット。</a> 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- WARNING ALL SCRIPT FOR ALL PAGE -->

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('assets/frontend/js/sb-admin-2.min.js') ?>"></script>

</body>

</html>

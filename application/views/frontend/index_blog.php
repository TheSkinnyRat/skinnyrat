<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php echo $data->subjudul ?>">
  <meta name="author" content="">

  <title><?php echo $data->judul ?></title>

  <link rel="icon" href="<?php echo base_url('assets/frontend/img/favicon/'.$app_favicon) ?>">

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/frontend/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/frontend/css/sb-admin-2.min.css') ?>" rel="stylesheet">

  <!-- Custom styles for data tables page -->
  <link href="<?php echo base_url('assets/frontend/vendor/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/frontend/vendor/datatables/responsive.bootstrap4.min.css') ?>" rel="stylesheet">

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
  <script src="<?php echo base_url('assets/frontend/vendor/datatables/dataTables.responsive.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/frontend/vendor/datatables/responsive.bootstrap4.min.js') ?>"></script>

  <!-- Page data tables level custom scripts -->
  <script src="<?php echo base_url('assets/frontend/js/demo/datatables-demo.js') ?>"></script>

  <!-- Validation Plugin -->
  <script src="<?php echo base_url('assets/frontend/vendor/jquery-validation/jquery.validate.js') ?>"></script>

  <!-- Text Editor Plugin -->
  <script src="<?php echo base_url('assets/frontend/vendor/ckeditor/ckeditor.js') ?>"></script>

  <!-- Custom scripts for Index pages-->
  <script src="<?php echo base_url('assets/frontend/js/page/index.js') ?>"></script>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php echo $sidebar ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php echo $topbar ?>

        <?php echo $content ?>
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>&copy; BY <a href="https://www.instagram.com/the.skinny.rat" target="_blank">スキニーラット。</a> 2019 - <?php echo $app_version ?></span>
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

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url('member/do_logout') ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- WARNING ALL SCRIPT FOR ALL PAGE -->

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('assets/frontend/js/sb-admin-2.min.js') ?>"></script>

</body>

</html>
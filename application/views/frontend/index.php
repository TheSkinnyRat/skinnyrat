<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Google Adsense -->
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-1587350440311353",
          enable_page_level_ads: true
     });
  </script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-146827817-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-146827817-1');
  </script>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-TMCBLP8');</script>
  <!-- End Google Tag Manager -->

  <!-- Progress bar loading -->
  <script src="<?php echo base_url('assets/frontend/vendor/pace/pace.min.js') ?>"></script>
  <link rel="stylesheet" href="<?php echo base_url('assets/frontend/vendor/pace/pace.css') ?>">
  <link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Selamat Datang di <?php echo $app_title ?> Website, di website ini terdapat fitur shorten url, article / blog, whatsapp click to chat, dan whatapp chat without save ">
  <meta name="author" content="">

  <title>
    <?php echo $app_title ?>
  </title>

  <link rel="icon" href="<?php echo base_url('assets/frontend/img/favicon/'.$app_favicon) ?>">
  <link rel="manifest" href="<?php echo base_url('assets/manifest/manifest.json') ?>">

  <!-- Custom fonts for this template-->
  <!-- <script src="https://kit.fontawesome.com/3dcbc6b67b.js"></script> -->
  <link href="<?php echo base_url('assets/frontend/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/frontend/css/sb-admin-2.css') ?>" rel="stylesheet">

  <!-- Custom styles for index page-->
  <link href="<?php echo base_url('assets/frontend/css/index.css') ?>" rel="stylesheet">

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
  <!-- <script src="<?php echo base_url('assets/frontend/js/demo/chart-area-demo.js') ?>"></script>
  <script src="<?php echo base_url('assets/frontend/js/demo/chart-pie-demo.js') ?>"></script> -->

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

  <!-- UP UP Service Worker -->
  <script src="<?php echo base_url('assets/sw/upup.min.js') ?>"></script>

</head>

<body class="p-0" id="page-top">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TMCBLP8"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- Page Wrapper -->
  <div id="wrapper">

    <div style="min-height: 100vh;"></div>
    <?php // echo $sidebar ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php echo $topbar ?>

        <div id="place_load" class="container p-2 pt-3">
          <div class="ph-item">
            <div>
              <div class="ph-row">
                <div class="ph-col-4"></div>
                <div class="ph-col-8 empty"></div>
                <div class="ph-col-6"></div>
                <div class="ph-col-6 empty"></div>
                <div class="ph-col-2"></div>
                <div class="ph-col-10 empty"></div>
              </div>
            </div>

            <div class="ph-col-12">
              <div class="ph-picture"></div>
              <div class="ph-row">
                <div class="ph-col-10 big"></div>
                <div class="ph-col-2 empty big"></div>
                <div class="ph-col-4"></div>
                <div class="ph-col-8 empty"></div>
                <div class="ph-col-6"></div>
                <div class="ph-col-6 empty"></div>
                <div class="ph-col-12"></div>
              </div>
            </div>

            <div class="ph-col-4">
              <div class="ph-picture"></div>
            </div>

            <div>
              <div class="ph-row">
                <div class="ph-col-6"></div>
                <div class="ph-col-6 empty"></div>
                <div class="ph-col-2"></div>
                <div class="ph-col-10 empty"></div>
                <div class="ph-col-8"></div>
                <div class="ph-col-4 empty"></div>
                <div class="ph-col-12"></div>
              </div>
            </div>

          </div>
        </div>

        <div id="main_content" style="visibility: hidden;">
          <div class="container p-2 pt-3">
            <?php echo $content ?>
          </div>
        </div>

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white py-3">
        <div class="container my-auto">
          <div class="text-center my-auto">
            <small>&copy; BY <a href="<?php echo base_url('r_ig') ?>" target="_blank">スキニーラット。</a> 2019 -
              <?php echo $app_version ?>
              ·
              <a href="<?php echo base_url('b/sys_pp') ?>">Privacy Policy</a>
              ·
              <a href="<?php echo base_url('b/sys_tc') ?>">Terms and Conditions</a>
            </small>
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
          <a class="btn btn-primary" href="<?php echo base_url('member/do_logout?ref='.urlencode(current_url())); ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- SCRIPT FOR INDEX PAGE -->
  <script src="<?php echo base_url('assets/frontend/js/page/index_bottom.js') ?>"></script>
  <!-- Service worker -->
  <script type="text/javascript">
  UpUp.start({
    'cache-version': 'v1',
    //'content-url': 'offline.html'
    'content-url': '<?=site_url('offline.php')?>',
    'content': 'Oops!. We Need An INTERNET Connection.',
    'service-worker-url': '<?=site_url('upup.sw.min.js')?>'
  });
  </script>

  <!-- WARNING ALL SCRIPT FOR ALL PAGE -->

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('assets/frontend/js/sb-admin-2.js') ?>"></script>

</body>

</html>

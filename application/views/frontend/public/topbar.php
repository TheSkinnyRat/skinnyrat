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
    <a href="<?php echo base_url('member/register') ?>">
      <button class="btn btn-info mr-1" type="button">
        REGISTER
      </button>
    </a>
    <a href="<?php echo base_url('member/login') ?>">
      <button class="btn btn-primary" type="button">
        LOGIN
      </button>
    </a>

  </ul>

</nav>
<!-- End of Topbar -->
<?php if($app_alert){ ?>
  <?php foreach ($app_alert as $alert) { ?>
    <div class="alert <?php echo $alert->style ?> mr-3 ml-3 mb-1" role="alert">
      <?php echo $alert->konten ?>
    </div>
  <?php } ?>
<?php } ?>

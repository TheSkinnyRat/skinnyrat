<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

  <!-- Sidebar Toggle (Topbar) -->
  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle">
    <i class="fa fa-bars"></i>
  </button>

  <!-- Topbar Navbar -->
  <div class="btn btn-light btn-sm d-none-toggle">
    <div class="font-weight-bold text-primary text-uppercase m-0 d-md-none">
      <span id="hour">00</span> <span class="blink-1s">:</span> <span id="minute">00</span>
    </div>
    <div class="font-weight-bold text-primary text-uppercase m-0 d-none d-md-block">
      <span id="hour-1">00</span> : <span id="minute-1">00</span> : <span id="second-1">00</span>
    </div>
  </div>

  <ul class="navbar-nav ml-auto">

    <!-- <div class="topbar-divider d-none d-sm-block"></div> -->

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-lg-inline text-gray-600 small"><?php echo $userdata['name'] ?></span>
        <i class="fas fa-user-circle fa-2x"></i>
        <!-- <img class="img-profile rounded-circle" src="<?php echo base_url('assets/frontend/img/profilepic.jpg') ?>"> -->
      </a>
      <!-- Dropdown - User Information -->
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="<?php echo base_url('member_system/profile') ?>">
          <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
          Profile
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          Logout
        </a>
      </div>
    </li>

  </ul>

  <div id="div_btn_pwa" class="topbar-divider mx-2 d-none"></div>
  <button id="btn_pwa" class="btn btn-warning btn-sm d-none" data-toggle="" data-placement="bottom" title="Download Aplikasi">
    <i class="fa fa-download"></i>
  </button>

</nav>
<!-- End of Topbar -->
<?php if($app_alert){ ?>
<?php foreach ($app_alert as $alert) { ?>
<div class="alert <?php echo $alert->style ?> mr-3 ml-3 mb-1 alert-dismissible fade show" role="alert">
  <?php echo $alert->konten ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php } ?>
<hr class="mb-0">
<?php } ?>

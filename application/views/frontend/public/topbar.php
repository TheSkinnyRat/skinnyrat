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
    <a href="<?php if(isset($url_continue)) echo base_url('member/register?ref='.$url_continue); else echo base_url('member/register?ref='.urlencode(current_url())) ?>">
      <button class="btn btn-info mr-1 btn-sm" type="button">
        REGISTER
      </button>
    </a>
    <a href="<?php if(isset($url_continue)) echo base_url('member/login?ref='.$url_continue); else echo base_url('member/login?ref='.urlencode(current_url())) ?>">
      <button class="btn btn-primary btn-sm" type="button">
        LOGIN
      </button>
    </a>

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
<hr>
<?php } ?>

<!-- START TOPBAR -->
<!-- Topbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white topbar shadow-sm h-auto justify-content-center justify-content-md-between">
  <div class="d-none d-lg-block">
    <a class="navbar-brand d-flex mr-auto text-primary" href="<?php echo base_url() ?>">
      <!-- <span class="rotate-n-15">
        <i class="fas <?php echo $app_icon ?>"></i>
      </span> -->
      <span class="font-weight-bold mx-1">
        <?php echo $app_name ?>
      </span>
    </a>
  </div>
  <span class="nav-item dropdown no-arrow d-lg-none">
    <a class="d-flex align-items-center btn btn-white text-decoration-none mr-1 btn-sm dropdown-toggle" href="#" id="userDropdown_top" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-user-circle fa-2x"></i>
      <span class="ml-2 d-lg-inline"><?php echo $userdata['name'] ?></span>
      <!-- <img class="img-profile rounded-circle" src="<?php echo base_url('assets/frontend/img/profilepic.jpg') ?>"> -->
    </a>
    <!-- Dropdown - User Information -->
    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown_top">
      <a class="dropdown-item keep-open" href="<?php echo base_url('member_system/profile') ?>">
        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
        Profile
      </a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
        Logout
      </a>
    </div>
  </span>

  <div class="topbar-divider d-none d-lg-block"></div>

  <div class="navbar-text">
    <a href="<?php echo base_url(); ?>" class="btn btn-link btn-sm text-primary d-lg-none" data-toggle="" data-placement="right" title="Search">
      <i class="fa fa-home"></i>
    </a>
    <span class="nav-item dropdown no-arrow">
      <a class="btn btn-link btn-sm text-primary dropdown-toggle" href="#" id="urlDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-link fa-fw"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left p-3 shadow animated--grow-in" style="min-width: 250px;" aria-labelledby="urlDropdown">
        <form class="form" method="get" action="<?php echo base_url('c') ?>">
          <div class="input-group input-group-sm">
            <input name="url" type="text" class="form-control bg-light border-0" placeholder="Shorten Url..." aria-label="Search" aria-describedby="basic-addon2" required>
            <div class="input-group-append">
              <button class="btn btn-primary btn-sm" type="submit">
                <i class="fas fa-link fa-sm"></i>
              </button>
            </div>
          </div>
          <code>input with http:// or https://</code>
        </form>
      </div>
    </span>
    <span class="nav-item dropdown no-arrow">
      <a class="btn btn-link btn-sm text-primary dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-search fa-fw"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left p-3 shadow animated--grow-in" style="min-width: 250px;" aria-labelledby="searchDropdown">
        <form class="form">
          <div class="input-group input-group-sm">
            <input type="text" class="form-control bg-light border-0" placeholder="Search... <Coming Soon>" aria-label="Search" aria-describedby="basic-addon2" required disabled>
            <div class="input-group-append">
              <button class="btn btn-primary btn-sm" type="button">
                <i class="fas fa-search fa-sm"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </span>
    <!-- <button class="btn btn-sm btn-link" type="button" data-toggle="collapse" data-target="#nav-toggler" aria-controls="nav-toggler" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
    <button class="btn btn-link btn-sm d-lg-none rounded-circle" type="button" data-toggle="collapse" data-target="#navToggler1" aria-controls="navToggler1" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa fa-bars"></i>
    </button>
    <!-- <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle">
      <i class="fa fa-bars"></i>
    </button> -->
  </div>

  <div class="collapse navbar-collapse" id="navToggler1">
    <hr class="d-lg-none m-0">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item p-1 p-lg-0">
        <a href="<?php echo base_url('blog'); ?>" class="">
          <button class="btn btn-link text-decoration-none mr-1 btn-sm" type="button">
            <i class="fa fa-blog"></i> BLOG
          </button>
        </a>
      </li>
      <li class="nav-item p-1 p-lg-0 dropdown">
        <a class="btn btn-link text-decoration-none mr-1 btn-sm dropdown-toggle" href="#" id="menu_feature" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-fw fa-th-large"></i> FEATURE
        </a>
        <div class="dropdown-menu keep-open dropdown-menu-right animated--grow-in shadow-sm ml-2 ml-lg-0" aria-labelledby="menu_feature">
          <h6 class="dropdown-header">Main Feature</h6>
          <a class="dropdown-item" href="<?php echo base_url('home/shorten_url_form') ?>"><i class="fas fa-link"></i> SHORTEN URL</a>
          <a class="dropdown-item" href="<?php echo base_url('home/article_form') ?>"><i class="fas fa-pencil-alt"></i> CREATE ARTICLE</a>
          <a class="dropdown-item" href="<?php echo base_url('home/wa_ctc') ?>"><i class="fab fa-fw fa-whatsapp"></i> WA Click To Chat</a>
          <a class="dropdown-item" href="<?php echo base_url('home/wa_cws') ?>"><i class="fab fa-fw fa-whatsapp"></i> WA Chat Without Save</a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">View Data</h6>
          <a class="dropdown-item" href="<?php echo base_url('home/shorten_url') ?>"><i class="fas fa-eye"></i> SHORTEN URL</a>
          <a class="dropdown-item" href="<?php echo base_url('home/article') ?>"><i class="fas fa-eye"></i> ARTICLE</a>
        </div>
      </li>
      <li class="nav-item p-1 p-lg-0 dropdown">
        <a class="btn btn-link text-decoration-none mr-1 btn-sm dropdown-toggle" href="#" id="menu_dev" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-fw fa-code"></i> DEV
        </a>
        <div class="dropdown-menu keep-open dropdown-menu-right animated--grow-in shadow-sm ml-2 ml-lg-0" aria-labelledby="menu_dev">
          <a class="dropdown-item" href="<?php echo base_url('admin/index') ?>"><i class="fas fa-fw fa-user-cog"></i> Login Backend</a>
          <a class="dropdown-item" href="<?php echo base_url('home/change_log') ?>"><i class="fas fa-fw fa-clipboard-list"></i> Change Log</a>
          <a class="dropdown-item" href="<?php echo base_url('bug') ?>"><i class="fas fa-fw fa-bug"></i> Repost Bugs</a>
        </div>
      </li>
      <li class="nav-item p-1 p-lg-0 dropdown">
        <a class="btn btn-link text-decoration-none mr-1 btn-sm dropdown-toggle" href="#" id="menu_about" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-info-circle"></i> ABOUT
        </a>
        <div class="dropdown-menu keep-open dropdown-menu-right animated--grow-in shadow-sm ml-2 ml-lg-0" aria-labelledby="menu_about">
          <a class="dropdown-item" href="<?php echo base_url('b/sys_pp') ?>"><i class="fas fa-fw fa-user-secret"></i> Privacy Policy</a>
          <a class="dropdown-item" href="<?php echo base_url('b/sys_tc') ?>"><i class="fas fa-fw fa-handshake"></i> Terms and Conditions</a>
          <a class="dropdown-item" href="<?php echo base_url('b/sys_dc') ?>"><i class="fas fa-fw fa-hand-paper"></i> Disclaimer</a>
          <a class="dropdown-item" href="<?php echo base_url('b/sys_about') ?>"><i class="fas fa-fw fa-info-circle"></i> About</a>
        </div>
      </li>
    </ul>
  </div>

  <div class="topbar-divider d-none d-lg-block"></div>
  <span class="nav-item p-1 p-lg-0 dropdown no-arrow d-none d-lg-block">
    <a class="d-flex align-items-center btn btn-primary text-decoration-none mr-1 btn-sm dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="mr-2 d-lg-inline text-white"><?php echo $userdata['name'] ?></span>
      <i class="fas fa-user-circle fa-2x"></i>
      <!-- <img class="img-profile rounded-circle" src="<?php echo base_url('assets/frontend/img/profilepic.jpg') ?>"> -->
    </a>
    <!-- Dropdown - User Information -->
    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
      <a class="dropdown-item keep-open" href="<?php echo base_url('member_system/profile') ?>">
        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
        Profile
      </a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
        Logout
      </a>
    </div>
  </span>

</nav>

<!-- ALERT SECTION -->
<?php if($app_alert){ ?>
<?php foreach ($app_alert as $alert) { ?>
<div class="<?php echo $alert->style ?> m-0" role="alert">
  <div class="container">
    <div class="text-center p-1">
      <?php echo $alert->konten ?>
    </div>
  </div>
</div>
<?php } ?>
<?php } ?>

<div class="bg-primary">
  <div class="container">
    <div class="text-center text-light">
      <a href="<?php echo base_url('home/shorten_url_form') ?>" class="btn btn-link btn-sm text-light text-xs" data-toggle="" data-placement="right" title="Shorten Url">
        <i class="fa fa-link"></i>
      </a>
      ·
      <a href="<?php echo base_url('home/article_form') ?>" class="btn btn-link btn-sm text-light text-xs" data-toggle="" data-placement="right" title="Create Article">
        <i class="fas fa-pencil-alt"></i>
      </a>
      ·
      <a class="btn btn-link btn-sm text-light text-xs" href="#" id="menu_wa_top" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-placement="right" title="Whatsapp Feature">
        <i class="fab fa-fw fa-whatsapp"></i>
      </a>
      <div class="dropdown-menu keep-open shadow-sm" aria-labelledby="menu_wa_top">
        <a class="dropdown-item" href="<?php echo base_url('home/wa_ctc') ?>">Click To Chat</a>
        <a class="dropdown-item" href="<?php echo base_url('home/wa_cws') ?>">Chat Without Save</a>
      </div>
      <span id="div_btn_pwa" class="d-none">·</span>
      <a id="btn_pwa" href="#" class="btn btn-link btn-sm text-light text-xs d-none" data-toggle="" data-placement="right" title="Download Aplikasi">
        <i class="fa fa-download"></i>
      </a>
    </div>
  </div>
</div>

<div class="collapse" id="nav-toggler">
  <div class="bg-secondary py-4">
    <div class="container">
      <h5 class="text-white h4">##</h5>
      <span class="text-white">####.</span>
    </div>
  </div>
</div>


<!-- End of Topbar -->

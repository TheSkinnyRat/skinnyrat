<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url() ?>">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas <?php echo $app_icon ?>"></i>
    </div>
    <div class="sidebar-brand-text mx-3">
      <?php echo $app_name ?>
    </div>
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
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Feature
  </div>

  <!-- Nav Item - Charts -->
  <li class="nav-item active">
    <a class="nav-link" href="<?php echo base_url('home/shorten_url_form') ?>">
      <i class="fas fa-fw fa-link"></i>
      <span>Shorten Url</span></a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="<?php echo base_url('home/article_form') ?>">
      <i class="fas fa-fw fa-pencil-alt"></i>
      <span>Create Article</span></a>
  </li>
  <li class="nav-item active">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu_wafeature" aria-expanded="true" aria-controls="menu_wafeature">
      <i class="fab fa-fw fa-whatsapp"></i>
      <span>WA Feature</span>
    </a>
    <div id="menu_wafeature" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">WA Feature</h6>
        <a class="collapse-item" href="<?php echo base_url('home/wa_ctc') ?>">WA Click To Chat</a>
        <a class="collapse-item" href="<?php echo base_url('home/wa_cws') ?>">WA Chat Without Save</a>
      </div>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu_view" aria-expanded="true" aria-controls="menu_view">
      <i class="fas fa-fw fa-eye"></i>
      <span>View</span>
    </a>
    <div id="menu_view" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">View Page</h6>
        <a class="collapse-item" href="<?php echo base_url('home/shorten_url') ?>">View Short URL</a>
        <a class="collapse-item" href="<?php echo base_url('home/article') ?>">View Article</a>
      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Charts -->
  <li class="nav-item active">
    <a class="nav-link" href="<?php echo base_url('member/login') ?>">
      <i class="fas fa-fw fa-sign-in-alt"></i>
      <span>Login</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url('member/register') ?>">
      <i class="fas fa-fw fa-user-plus"></i>
      <span>Register</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Dev Mode
  </div>

  <!-- Nav Item - Charts -->
  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url('admin/index') ?>">
      <i class="fas fa-fw fa-user-cog"></i>
      <span>Login Backend</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url('home/change_log') ?>">
      <i class="fas fa-fw fa-clipboard-list"></i>
      <span>Change Log</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url('b/sys_about') ?>">
      <i class="fas fa-fw fa-info-circle"></i>
      <span>About</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->

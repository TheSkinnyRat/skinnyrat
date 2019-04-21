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
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Home</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Member Feature
  </div>

  <!-- Nav Item - Charts -->
  <li class="nav-item active">
    <a class="nav-link" href="<?php echo base_url('member_system/shorten_url_form') ?>">
      <i class="fas fa-fw fa-link"></i>
      <span>Shorten Url</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url('member_system/shorten_url') ?>">
      <i class="fas fa-fw fa-eye"></i>
      <span>View Url</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
      <i class="fas fa-fw fa-sign-out-alt"></i>
      <span>Logout</span></a>
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
    <a class="nav-link" href="<?php echo base_url('home/about') ?>">
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

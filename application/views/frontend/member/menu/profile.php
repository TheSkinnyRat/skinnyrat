<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Profile</h1>
  </div>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Your Profile</h6>
    </div>
    <div class="card-body">
      <form class="form-horizontal">
        <div class="panel-body">
          <!--				-------------------------------------------------------------------------------------------------------->
          <div class="form-group">
            <label class="col-md-4 col-xs-12 control-label">Id Member</label>
            <div class="input-group col-md-1 col-xs-3">
              <input type="text" name="" class="form-control" value="<?php echo $userdata['id_member']; ?>" disabled>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 col-xs-12 control-label">Name</label>
            <div class="input-group col-md-2 col-xs-6">
              <input type="text" name="" class="form-control" value="<?php echo $userdata['name']; ?>" disabled>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 col-xs-12 control-label">Username</label>
            <div class="input-group col-md-2 col-xs-6">
              <input type="text" name="" class="form-control" value="<?php echo $userdata['username']; ?>" disabled>
            </div>
          </div>
          <hr>
        </div>
        <div class="panel-footer text-right">
          <a class="btn btn-primary" href="<?php echo base_url('member_system/profile_form') ?>">
            Ubah Profile
          </a>
          <a class="btn btn-warning" href="<?php echo base_url('member_system/password_form') ?>">
            Ubah Password
          </a>
          <a class="btn btn-danger" href="<?php echo base_url('member_system/member_delete') ?>">
            <i class="fas fa-times"></i> Hapus Akun
          </a>
        </div>
      </form>

    </div>
  </div>

</div>
<!-- /.container-fluid -->

<!-- WARNING Custom scripts for This pages-->

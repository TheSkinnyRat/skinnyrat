<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Profile</h1>
  </div>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Edit Your Profile</h6>
    </div>
    <div class="card-body">
      <form class="form-horizontal" method="POST" id="profile_form" action="<?php echo base_url('member_system/profile_update'); ?>">
        <div class="panel-body">
          <div class="alert alert-success d-none"><strong>Berhasil! </strong><span></span></div>
          <div class="alert alert-warning d-none"><strong>Memproses! </strong><span>Mohon tunggu, system sedang bekerja.</span></div>
          <div class="alert alert-danger d-none"><strong>Gagal! </strong><span></span></div>

          <!--				-------------------------------------------------------------------------------------------------------->
          <div class="form-group">
            <label class="col-md-4 col-xs-12 control-label">Id Member</label>
            <div class="input-group col-md-1 col-xs-3">
              <input type="text" class="form-control" value="<?php echo $userdata['id_member']; ?>" disabled>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 col-xs-12 control-label">Name</label>
            <div class="input-group col-md-2 col-xs-6">
              <input type="text" name="name" class="form-control" value="<?php echo $data->name; ?>" required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 col-xs-12 control-label">Username</label>
            <div class="input-group col-md-2 col-xs-6">
              <input type="text" name="username" class="form-control" value="<?php echo $data->username; ?>" required>
            </div>
          </div>

          <hr>

          <div class="form-group">
            <label class="col-md-4 col-xs-12 control-label">Input Your Password</label>
            <div class="input-group col-md-2 col-xs-6">
              <input type="password" name="check_password" class="form-control" placeholder="" required>
            </div>
          </div>

          <div class="ml-2">
            <a href="<?php echo base_url('member_system/password_form') ?>">Ganti Password?</a>
          </div>

          <hr>

          <div class="ml-2">
            Anda akan logout otomatis setelah data berhasil diupdate
          </div>
        </div>
        <div class="panel-footer text-right">
          <button class="btn btn-default" type="reset">Reset</button>
          <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
      </form>

    </div>
  </div>

</div>
<!-- /.container-fluid -->

<!-- WARNING Custom scripts for This pages-->
<script src="<?php echo base_url('assets/frontend/js/page/profile_form.js') ?>"></script>

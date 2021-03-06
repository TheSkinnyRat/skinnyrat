<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-2">
  <h1 class="h3 mb-0 text-gray-800">Change Password</h1>
</div>

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Change Your Password</h6>
  </div>
  <div class="card-body">
    <form class="form-horizontal" method="POST" id="password_form" action="<?php echo base_url('member_system/password_update'); ?>">
      <div class="panel-body">
        <div class="alert alert-success d-none"><strong>Berhasil! </strong><span></span></div>
        <div class="alert alert-warning d-none"><strong>Memproses! </strong><span>Mohon tunggu, system sedang bekerja.</span></div>
        <div class="alert alert-danger d-none"><strong>Gagal! </strong><span></span></div>

        <!--				-------------------------------------------------------------------------------------------------------->

        <div class="form-group">
          <label class="col-md-4 col-xs-12 control-label">Username</label>
          <div class="input-group col-md-2 col-xs-6">
            <input type="text" class="form-control" value="<?php echo $data->username; ?>" disabled>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 col-xs-12 control-label">New Password</label>
          <div class="input-group col-md-2 col-xs-6">
            <input type="password" name="password" id="password" class="form-control" required>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 col-xs-12 control-label">Repeat New Password</label>
          <div class="input-group col-md-2 col-xs-6">
            <input type="password" name="re_password" id="re_password" class="form-control" required>
          </div>
        </div>

        <hr>

        <div class="form-group">
          <label class="col-md-4 col-xs-12 control-label">Input Your Current Password</label>
          <div class="input-group col-md-2 col-xs-6">
            <input type="password" name="old_password" class="form-control" required>
          </div>
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

<!-- WARNING Custom scripts for This pages-->
<script src="<?php echo base_url('assets/frontend/js/page/password_form.js') ?>"></script>

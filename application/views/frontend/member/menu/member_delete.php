<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-2">
  <h1 class="h3 mb-0 text-gray-800"><div class="text-danger">Delete Account</div></h1>
</div>

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"><div class="text-danger">Delete Your Account</div></h6>
  </div>
  <div class="card-body">
    <form class="form-horizontal" method="POST" id="member_delete" action="<?php echo base_url('member_system/member_delete_do'); ?>">
      <div class="panel-body">
        <div class="alert alert-success d-none"><strong>Berhasil! </strong><span></span></div>
        <div class="alert alert-warning d-none"><strong>Memproses! </strong><span>Mohon tunggu, system sedang bekerja.</span></div>
        <div class="alert alert-danger d-none"><strong>Gagal! </strong><span></span></div>

        <!--				-------------------------------------------------------------------------------------------------------->
        <div class="form-group">
          <h3 class="col-md-4 col-xs-12 control-label text-danger"><i class="fas fa-times"></i> Yakin Ingin Menghapus Akun Ini ?</h3>
        </div>

        <div class="form-group">
          <label class="col-md-4 col-xs-12 control-label">Name</label>
          <div class="input-group col-md-2 col-xs-6">
            <input type="text" class="form-control" value="<?php echo $data->name; ?>" disabled>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 col-xs-12 control-label">Username</label>
          <div class="input-group col-md-2 col-xs-6">
            <input type="text" class="form-control" value="<?php echo $data->username; ?>" disabled>
          </div>
        </div>

        <hr>

        <div class="form-group">
          <label class="col-md-4 col-xs-12 control-label">Input Your Password</label>
          <div class="input-group col-md-2 col-xs-6">
            <input type="password" name="password" class="form-control" placeholder="" required>
          </div>
        </div>

        <div class="ml-2">
          <a href="<?php echo base_url('member_system/password_form') ?>">Ganti Password?</a>
        </div>

        <hr>

        <div class="ml-2">
          Anda akan logout otomatis setelah akun berhasil dihapus
        </div>
      </div>
      <div class="panel-footer text-right">
        <button class="btn btn-default" type="reset">Reset</button>
        <button class="btn btn-danger" type="submit">Hapus</button>
      </div>
    </form>

  </div>
</div>

<!-- WARNING Custom scripts for This pages-->
<script src="<?php echo base_url('assets/frontend/js/page/member_delete.js') ?>"></script>

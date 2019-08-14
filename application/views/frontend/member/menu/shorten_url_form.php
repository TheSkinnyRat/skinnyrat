<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Shorten URL</h1>
  </div>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Create Your Shorten URL</h6>
    </div>
    <div class="card-body">
      <form class="form-horizontal" method="POST" id="shorten_url_form" action="<?php if($data!=null) echo base_url('member_system/shorten_url_update'); else echo base_url('member_system/shorten_url_add'); ?>">
        <input type="hidden" name="id_shorten_url" value="<?php if($data!=null) echo $data->id_shorten_url; else echo " 0"; ?>">
        <input type="hidden" name="date_created" class="form-control" value="<?php echo date('Y-m-d H:i:s') ?>">
        <div class="panel-body">
          <div class="form-group">
            <label class="col-md-4 col-xs-12 control-label">Pembuat</label>
            <div class="input-group col-md-2 col-xs-6">
              <input type="text" name="" class="form-control" value="<?php echo $userdata['name']; ?>" disabled>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 col-xs-12 control-label">Custom URL</label>
            <div class="input-group col-md-4 col-xs-12">
              <div class="input-group-prepend">
                <div class="input-group-text">sknr.tk/</div>
              </div>
              <input type="text" name="name" class="form-control" value="<?php if($data!=null) echo $data->name; ?>" placeholder="Input Custom URL" required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 col-xs-12 control-label">URL</label>
            <div class="col-md-5 col-xs-12">
              <input type="text" name="link" class="form-control" value="<?php if($data!=null) echo $data->link; ?>" placeholder="Input Link dengan http:// atau https://" required>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-5 col-xs-12">
              <input type="checkbox" class="" value="" id="use_pass" onclick="pass()" <?php if($data!=null && $data->password != "0") echo 'checked'; ?>>
              <label class="control-label" for="use_pass">Gunakan Password</label>
            </div>
          </div>

          <div class="<?php if($data!=null && $data->password != "0") echo ''; else echo "d-none"; ?>" id="input_pass">
            <hr>
            <div class="form-group">
              <label class="col-md-4 col-xs-12 control-label">Password</label>
              <div class="col-md-5 col-xs-12">
                <input type="password" name="password" class="form-control" id="form_pass" value="<?php if($data!=null && $data->password != "0") echo $this->encrypt->decode($data->password); else echo " 0"; ?>" placeholder="Input Password">
              </div>
            </div>
          </div>

          <small class="text-muted">
            URL yang anda masukkan dapat di akses di <code>www.sknr.tk/(custom url anda)</code>
          </small>
        </div>
        <div class="panel-footer text-right">
          <?php if($data!=null){ ?>
            <input type="checkbox" name="save_here" value="1" id="save_here">
            <label for="save_here">Don't refresh</label>
          <?php } ?>
          <button class="btn btn-default" type="reset">Reset</button>
          <button class="btn btn-primary" type="submit">Simpan</button>
          <hr>
          <div class="text-center">
            <div class="alert alert-success d-none"><strong>Berhasil! </strong><span></span></div>
            <div class="alert alert-warning d-none"><strong><i class="fas fa-circle-notch fa-spin"></i> Memproses! </strong><span>Mohon tunggu, system sedang bekerja.</span></div>
            <div class="alert alert-danger d-none"><strong>Gagal! </strong><span></span></div>
          </div>
        </div>
      </form>

    </div>
  </div>

</div>
<!-- /.container-fluid -->

<!-- WARNING Custom scripts for This pages-->
<script src="<?php echo base_url('assets/frontend/js/page/shorten_url_form.js') ?>"></script>

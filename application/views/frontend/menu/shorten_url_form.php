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
      <form class="form-horizontal" method="POST" id="peminjam_form" action="<?php echo base_url('home/shorten_url_add') ?>">
        <input type="hidden" name="id" value="0">
        <input type="hidden" name="date_created" class="form-control" value="<?php echo date('Y-m-d H:i:s') ?>">
        <div class="panel-body">
          <!-- <div class="alert alert-success hidden"><strong>Berhasil! </strong><span></span></div>
					<div class="alert alert-warning hidden"><strong>Memproses! </strong><span>Mohon tunggu, system sedang bekerja.</span></div>
					<div class="alert alert-danger hidden"><strong>Gagal! </strong><span></span></div> -->

          <!--				-------------------------------------------------------------------------------------------------------->
          <div class="form-group">
            <label class="col-md-4 col-xs-12 control-label">Custom URL</label>
            <div class="input-group col-md-4 col-xs-12">
              <div class="input-group-prepend">
                <div class="input-group-text">skinnyrat.tk/</div>
              </div>
              <input type="text" name="name" class="form-control" value="" placeholder="Input Custom URL" required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 col-xs-12 control-label">URL</label>
            <div class="col-md-5 col-xs-12">
              <input type="text" name="link" class="form-control" value="" placeholder="Input Link dengan http:// atau https://" required>
            </div>
          </div>

          <small class="text-muted">
            URL yang anda masukkan dapat di akses di "www.skinnyrat.tk/(custom url anda)"
          </small>
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

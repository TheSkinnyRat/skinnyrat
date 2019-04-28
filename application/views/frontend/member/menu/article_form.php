<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Create Article</h1>
  </div>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Create Your Article</h6>
    </div>
    <div class="card-body">
      <form class="form-horizontal" method="POST" id="article_form" action="<?php if($data!=null) echo base_url('member_system/article_update'); else echo base_url('member_system/article_add'); ?>">
        <input type="hidden" name="id_article" value="<?php if($data!=null) echo $data->id_article; else echo " 0"; ?>">
        <input type="hidden" name="date_created" class="form-control" value="<?php echo date('Y-m-d H:i:s') ?>">
        <div class="panel-body">
          <div class="alert alert-success d-none"><strong>Berhasil! </strong><span></span></div>
          <div class="alert alert-warning d-none"><strong>Memproses! </strong><span>Mohon tunggu, system sedang bekerja.</span></div>
          <div class="alert alert-danger d-none"><strong>Gagal! </strong><span></span></div>

          <!--				-------------------------------------------------------------------------------------------------------->
          <div class="form-group">
            <label class="col-md-4 col-xs-12 control-label">Pembuat</label>
            <div class="input-group col-md-2 col-xs-6">
              <input type="text" name="" class="form-control" value="<?php echo $userdata['name']; ?>" disabled>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 col-xs-12 control-label">Article URL</label>
            <div class="input-group col-md-4 col-xs-12">
              <div class="input-group-prepend">
                <div class="input-group-text">sknr.tk/blog/</div>
              </div>
              <input type="text" name="name" class="form-control" value="<?php if($data!=null) echo $data->name; ?>" placeholder="Input Article URL" required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 col-xs-12 control-label">Judul</label>
            <div class="col-md-5 col-xs-12">
              <input type="text" name="judul" class="form-control" value="<?php if($data!=null) echo $data->judul; ?>" placeholder="Input Judul Artikel" required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 col-xs-12 control-label">Sub Judul</label>
            <div class="col-md-5 col-xs-12">
              <input type="text" name="subjudul" class="form-control" value="<?php if($data!=null) echo $data->subjudul; ?>" placeholder="Input Sub Judul Artikel" required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 col-xs-12 control-label">Konten</label>
            <div class="col-md-10 col-xs-20">
              <textarea name="konten" id="cktext" class="form-control ckeditor"><?php if($data!=null) echo $data->konten; ?></textarea>
            </div>
          </div>

          <small class="text-muted">
            Artikel yang anda buat dapat di akses di <code>www.sknr.tk/blog/(url artikel anda)</code>
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

<!-- WARNING Custom scripts for Index pages-->
<script src="<?php echo base_url('assets/frontend/js/page/article_form.js') ?>"></script>

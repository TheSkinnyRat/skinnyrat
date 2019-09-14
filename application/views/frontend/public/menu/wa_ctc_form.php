<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-2">
  <h1 class="h3 mb-0 text-gray-800">Whatsapp Clik to Chat</h1>
</div>

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Create Your WA CTC Link</h6>
  </div>
  <div class="card-body">
    <form class="form-horizontal" method="POST" id="wa_ctc_form" action="<?php echo base_url('home/wa_ctc_go') ?>">
      <div class="panel-body">
      <div class="form-group">
        <label class="col-md-4 col-xs-12 control-label">No Whatsapp</label>
        <div class="col-md-5 col-xs-12">
          <input type="number" name="no_wa" class="form-control" value="" placeholder="">
          Masukkan Nomor Dengan Kode Negara dan Tanpa Tanda '+' / '-'. Cth: 6281234567890
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 col-xs-12 control-label">Isi Pesan</label>
        <div class="col-md-5 col-xs-10">
          <textarea name="isi_pesan" class="form-control" rows="5"></textarea>
        </div>
      </div>

      </div>
      <div class="panel-footer text-right">
        <button class="btn btn-default" type="reset">Reset</button>
        <button class="btn btn-primary" type="submit">Create</button>
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

<!-- WARNING Custom scripts for Index pages-->
<script src="<?php echo base_url('assets/frontend/js/page/wa_ctc_form.js') ?>"></script>

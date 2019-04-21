<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">
      <?php echo $data_url->name; ?>
    </h1>
  </div>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-lock"></i> This Link Is Secured</h6>
    </div>
    <div class="card-body">
      <form class="form-horizontal" method="POST" id="pass_form" action="<?php echo base_url('home/pass_go') ?>">
        <div class="panel-body">
          <div class="alert alert-success d-none"><strong>Access Granted! </strong><span></span></div>
          <div class="alert alert-warning d-none"><strong>Memproses! </strong><span>Authenticating...</span></div>
          <div class="alert alert-danger d-none"><strong>Access Denied! </strong><span></span></div>

          <!--				-------------------------------------------------------------------------------------------------------->
          <input type="hidden" name="id_shorten_url" value="<?php echo $data_url->id_shorten_url ?>">
          <div class="form-group">
            <div class="col-md-5 col-xs-12">
              <input type="password" name="password" class="form-control" placeholder="Input Password" required>
            </div>
          </div>

        </div>

        <div class="panel-footer text-right">
          <button type="submit" class="btn btn-primary btn-icon-split">
            <span class="text">Lanjutkan</span>
            <span class="icon text-white-50">
              <i class="fas fa-arrow-right"></i>
            </span>
          </button>
        </div>
      </form>

    </div>
  </div>

</div>
<!-- /.container-fluid -->

<!-- WARNING Custom scripts for Index pages-->
<script src="<?php echo base_url('assets/frontend/js/page/pass_form.js') ?>"></script>

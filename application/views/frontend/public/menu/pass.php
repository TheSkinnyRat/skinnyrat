<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary"><?php echo $data_url->name; ?></h6>
    </div>
    <div class="card-body">
      <div class="d-flex justify-content-center text-center">
        <div class="w-auto border p-5 bg-light">
          <form class="form" method="post" id="pass_form" action="<?php echo base_url('home/pass_go') ?>">
            <input type="hidden" name="id_shorten_url" value="<?php echo $data_url->id_shorten_url ?>">
            <label class="text-dark" for="password"><i class="fas fa-lock"></i> This Link is Secured</label>
            <div class="input-group">
              <input type="password" name="password" class="form-control form-control-sm" placeholder="Input Password" required>
              <div class="input-group-append">
                <button class="btn btn-primary btn-sm" type="submit"><i class="fas fa-arrow-right"></i></button>
              </div>
            </div>
            <hr>
            <div class="alert alert-success d-none p-0 px-1 m-0"><strong>Granted! </strong><span></span></div>
            <div class="alert alert-warning d-none p-0 px-1 m-0"><strong><i class="fas fa-circle-notch fa-spin"></i> Memproses! </strong><span>Authenticating...</span></div>
            <div class="alert alert-danger d-none p-0 px-1 m-0"><strong>Denied! </strong><span></span></div>
          </form>
        </div>
      </div>

    </div>
  </div>

</div>
<!-- /.container-fluid -->

<!-- WARNING Custom scripts for Index pages-->
<script src="<?php echo base_url('assets/frontend/js/page/pass_form.js') ?>"></script>

<div class="row">
  <div class="col-lg-12 text-center">
    <h2 class="page-header"><?php echo $function_name; ?></h2>
  </div>
  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
  <div class="col-lg-12 text-center">
    <div class="alert alert-danger"><strong><i class="fa fa-exclamation-circle"></i> </strong>
      <span>Hak akses anda saat ini adalah : <span class="text-primary"><?php echo $data->usergroup_name ?></span><br>
        Hak akses tersebut tidak memiliki izin untuk mengakses halaman ini.</span>
    </div>
    <img src="<?php echo base_url('assets/backend/img/error/403.png') ?>" alt="" width="30%">
    <!-- /.panel -->
  </div>
  <!-- /.col-lg-12 -->
</div>

<!-- WARNING CUSTOM SCRIPT FOR THIS PAGE -->
<script src="<?php echo base_url('assets/backend/js/page/'.$controller.'/'.$function.'.js') ?>"></script>

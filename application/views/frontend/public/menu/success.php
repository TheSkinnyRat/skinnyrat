<!-- Begin Page Content -->
<div class="container-fluid">

  <div class="card shadow mb-4">

    <div class="card-body">
      <form class="form-horizontal">
        <div class="panel-body">

          <div class="form-group">
            <label class="col-md-8 col-xs-12 control-label"><?php echo $m; ?></label>
            <div class="col-md-5 col-xs-12">
              <input type="text" id="d" class="form-control" value="<?php echo $d; ?>" readonly>
            </div>
          </div>

        </div>
      </form>
      <div class="panel-footer text-left">
        <button class="btn btn-default" onclick="copy()" id="copy_button"><i class="far fa-copy"></i> Copy</button>
        <a href="https://wa.me?text=<?php echo $d; ?>" class="btn btn-sm btn-success" target="_blank" ><i class="fab fa-whatsapp"></i> Share</a>
        <a href="<?php echo $d; ?>" class="btn btn-sm btn-info" target="_blank" ><i class="fa fa-external-link-alt"></i> Open</a>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

<!-- WARNING Custom scripts for Index pages-->
<script src="<?php echo base_url('assets/frontend/js/page/success.js') ?>"></script>

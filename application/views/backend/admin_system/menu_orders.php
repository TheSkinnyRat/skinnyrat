<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">
      <?php echo $function_name; ?>
    </h1>
  </div>
  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
  <div class="col-lg-12" id="<?php echo $function ?>">
    <div class="alert alert-success hidden"><strong>Berhasil! </strong><span></span></div>
    <div class="alert alert-warning"><strong><i class="fa fa-warning"></i> </strong><span>Ubah urutan menu dengan cara drag and drop. Akan lebih maksimal jika di jalankan di PC / Desktop</span></div>
    <div class="alert alert-danger hidden"><strong>Gagal! </strong><span></span></div>

    <div class="panel-dragable" id="px-system-menu-orders-dragable" target="<?php echo base_url($controller.'/'.$function_edit) ?>">
      <!-- START DEFAULT DATATABLE -->
      <?php $x=1; foreach ($data as $md) { ?>
      <div class="panel panel-primary" id="item-<?php echo $md->id; ?>" data-menu-parent="<?php echo $md->id_parent; ?>">
        <div class="panel-heading ui-draggable-handle">
          <h3 class="panel-title">
            <?php echo $md->name; ?>
          </h3>
        </div>
        <div class="panel-body">
          <?php
					if($md->submenu) {
					?>
          <ul class="list-group border-bottom">
            <?php
						foreach ($md->submenu as $mdc) {
	                ?>
            <li class="list-group-item" id="item-<?php echo $mdc->id; ?>" data-menu-parent="<?php echo $mdc->id_parent; ?>">
              <?php echo $mdc->name; ?>
            </li>
            <?php } ?>
          </ul>
          <?php } ?>
        </div>
      </div>
      <?php $x++; } ?>
      <!-- END DEFAULT DATATABLE -->

    </div>
    <!-- /.panel -->
  </div>
  <!-- /.col-lg-12 -->
</div>

<!-- WARNING CUSTOM SCRIPT FOR THIS PAGE -->
<script src="<?php echo base_url('assets/backend/js/page/'.$controller.'/'.$function.'.js') ?>"></script>

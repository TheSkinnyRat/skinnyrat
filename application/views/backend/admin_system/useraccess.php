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
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <div class="text-right">
          <div class="pull-left panel-title">
            <?php echo $function_name; ?>
          </div>
          <button class="btn btn-success btn-add" data-target-form="<?php echo base_url($controller.'/'.$function_add); ?>"><i class="fa fa-plus"></i> Tambah Data</button>
        </div>
      </div>
      <!-- /.panel-heading -->
      <div class="panel-body">
        <table width="100%" class="table table-striped table-bordered table-hover" id="table-1">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data as $d1) { ?>
            <tr>
              <td>
                <?php echo $d1->id_usergroup ?>
              </td>
              <td id="px-system-useraccess-group-name-text">
                <?php echo $d1->grup_name ?>
              </td>
              <td class="text-center">
                <button class="btn btn-info btn-xs btn-edit" type="submit" data-original-title="Ubah" data-placement="top" data-toggle="tooltip" data-target-form="<?php echo base_url($controller.'/'.$function_edit); ?>" data-target-id="<?php echo $d1->id_usergroup; ?>"
                  data-target-get="<?php echo base_url($controller.'/'.$function_get); ?>"><i class="fa fa-edit"></i></button>
              </td>
              <td class="text-center">
                <form action="<?php echo base_url($controller.'/'.$function_delete) ?>" method="post">
                  <input type="hidden" name="id" value="<?php echo $d1->id_usergroup ?>">
                  <button class="btn btn-danger btn-xs btn-delete" type="submit" data-original-title="delete" data-placement="top" data-toggle="tooltip"><i class="fa fa-trash-o"></i></button>
                </form>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
        <!-- /.table-responsive -->
      </div>
      <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
  </div>
  <!-- /.col-lg-12 -->
</div>

<!-- MODAL -->
<div class="modal fade animated" id="px-system-useraccess-modal" tabindex="-1" role="dialog" aria-labelledby="px-system-useraccess-modal-label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="px-system-useraccess-modal-label">
          <?php echo $function_name; ?>
        </h4>
      </div>
      <form class="form-horizontal" id="px-system-useraccess-form" action="<?php echo base_url($controller.'/'.$function_add); ?>" method="post">
        <input type="hidden" name="id" id="px-system-useraccess-form-id">
        <div class="modal-body">
          <div class="alert alert-success hidden"><strong>Berhasil! </strong><span></span></div>
          <div class="alert alert-warning hidden"><strong>Memproses! </strong><span>Mohon tunggu, system sedang bekerja.</span></div>
          <div class="alert alert-danger hidden"><strong>Gagal! </strong><span></span></div>

          <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label" for="#px-system-useraccess-form-id-usergroup">Nama Usergroup</label>
            <div class="col-md-9 col-xs-12">
              <select class="form-control" name="id_usergroup" id="px-system-useraccess-form-id-usergroup">
                <?php foreach ($data_available_user as $au) { ?>
                <option value="<?php echo $au->id; ?>">
                  <?php echo $au->usergroup_name; ?>
                </option>
                <?php } ?>
              </select>
            </div>
          </div>
          <hr>

          <div class="form-group" id="px-system-useraccess-form-useraccess-grant">
            <label class="col-md-3 col-xs-3 control-label text-success"><strong>Grant All</strong></label>
            <div class="col-md-9 col-xs-9">
              <div class="col-md-3 col-xs-3">
                <label class="check"><input type="checkbox" class="px-system-useraccess-form-useraccess-grant-check" data-grant="read" /> Read</label>
              </div>
              <div class="col-md-3 col-xs-3">
                <label class="check"><input type="checkbox" class="px-system-useraccess-form-useraccess-grant-check" data-grant="create" /> Create</label>
              </div>
              <div class="col-md-3 col-xs-3">
                <label class="check"><input type="checkbox" class="px-system-useraccess-form-useraccess-grant-check" data-grant="update" /> Update</label>
              </div>
              <div class="col-md-3 col-xs-3">
                <label class="check"><input type="checkbox" class="px-system-useraccess-form-useraccess-grant-check" data-grant="delete" /> Delete</label>
              </div>
            </div>
          </div>
          <?php foreach ($data_menu as $md) { ?>
          <div class="form-group" id="px-system-useraccess-form-useraccess-parent">
            <label class="col-md-3 col-xs-3 control-label text-primary">
              <?php echo $md->name; ?></label>
            <input type="hidden" name="id_menu[]" value="<?php echo $md->id; ?>">
            <div class="col-md-9 col-xs-9">
              <div class="col-md-3 col-xs-3">
                <input type="hidden" name="act_read[<?php echo $md->id; ?>]" value="0">
                <label class="check"><input type="checkbox" value="1" class="act_read" name="act_read[<?php echo $md->id; ?>]" /> Read</label>
              </div>
              <div class="col-md-3 col-xs-3">
                <input type="hidden" name="act_create[<?php echo $md->id; ?>]" value="0">
                <label class="check"><input type="checkbox" value="1" class="act_create" name="act_create[<?php echo $md->id; ?>]" /> Create</label>
              </div>
              <div class="col-md-3 col-xs-3">
                <input type="hidden" name="act_update[<?php echo $md->id; ?>]" value="0">
                <label class="check"><input type="checkbox" value="1" class="act_update" name="act_update[<?php echo $md->id; ?>]" /> Update</label>
              </div>
              <div class="col-md-3 col-xs-3">
                <input type="hidden" name="act_delete[<?php echo $md->id; ?>]" value="0">
                <label class="check"><input type="checkbox" value="1" class="act_delete" name="act_delete[<?php echo $md->id; ?>]" /> Delete</label>
              </div>
            </div>
          </div>
          <?php
				if($md->submenu) {
					foreach ($md->submenu as $mdc) {
				?>
          <div class="form-group" id="px-system-useraccess-form-useraccess-child">
            <label class="col-md-3 col-xs-3 control-label text-muted">
              <?php echo $mdc->name; ?></label>
            <input type="hidden" name="id_menu[]" value="<?php echo $mdc->id; ?>">
            <div class="col-md-9 col-xs-9">
              <div class="col-md-3 col-xs-3">
                <input type="hidden" name="act_read[<?php echo $mdc->id; ?>]" value="0">
                <label class="check"><input type="checkbox" value="1" class="act_read" name="act_read[<?php echo $mdc->id; ?>]" /> Read</label>
              </div>
              <div class="col-md-3 col-xs-3">
                <input type="hidden" name="act_create[<?php echo $mdc->id; ?>]" value="0">
                <label class="check"><input type="checkbox" value="1" class="act_create" name="act_create[<?php echo $mdc->id; ?>]" /> Create</label>
              </div>
              <div class="col-md-3 col-xs-3">
                <input type="hidden" name="act_update[<?php echo $mdc->id; ?>]" value="0">
                <label class="check"><input type="checkbox" value="1" class="act_update" name="act_update[<?php echo $mdc->id; ?>]" /> Update</label>
              </div>
              <div class="col-md-3 col-xs-3">
                <input type="hidden" name="act_delete[<?php echo $mdc->id; ?>]" value="0">
                <label class="check"><input type="checkbox" value="1" class="act_delete" name="act_delete[<?php echo $mdc->id; ?>]" /> Delete</label>
              </div>
            </div>
          </div>
          <?php } } } ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-info">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- EOF MODAL -->

<!-- WARNING CUSTOM SCRIPT FOR THIS PAGE -->
<script src="<?php echo base_url('assets/backend/js/page/'.$controller.'/'.$function.'.js') ?>"></script>

<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header"><?php echo $function_name; ?></h1>
  </div>
  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <div class="text-right">
          <div class="pull-left panel-title"><?php echo $function_name; ?></div>
          <a class="btn btn-success btn-add" href="<?php echo base_url($controller.'/'.$function_form) ?>"><i class="fa fa-plus"></i> Tambah Data</a>
        </div>
      </div>
      <!-- /.panel-heading -->
      <div class="panel-body">
        <table width="100%" class="table table-striped table-bordered table-hover" id="table-1">
          <thead>
            <tr>
              <th>ID</th>
              <th>Style</th>
              <th>Konten</th>
              <th>Status</th>
              <th>Edit</th>
              <th>Hapus</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data as $d1) { ?>
            <tr>
              <td>
                <?php echo $d1->id ?>
              </td>
              <td>
                <?php echo $d1->style ?>
              </td>
              <td>
                <?php echo htmlspecialchars($d1->konten) ?>
              </td>
              <td>
                <?php if($d1->status == '0' ) echo 'Sembunyikan'; else echo 'Tampilkan';?>
              </td>
              <td class="text-center">
                <form action="<?php echo base_url($controller.'/'.$function_form) ?>" method="post">
                  <input type="hidden" name="id" value="<?php echo $d1->id ?>">
                  <button class="btn btn-info btn-xs btn-edit" type="submit" data-original-title="Ubah" data-placement="top" data-toggle="tooltip"><i class="fa fa-edit"></i></button>
                </form>
              </td>
              <td class="text-center">
                <form action="<?php echo base_url($controller.'/'.$function_delete) ?>" method="post">
                  <input type="hidden" name="id" value="<?php echo $d1->id ?>">
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

<!-- WARNING CUSTOM SCRIPT FOR THIS PAGE -->
<script src="<?php echo base_url('assets/backend/js/page/'.$controller.'/'.$function.'.js') ?>"></script>

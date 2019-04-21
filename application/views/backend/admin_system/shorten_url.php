<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">Data Shorten URL</h1>
  </div>
  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <div class="text-right">
          <div class="pull-left panel-title">Data Shorten URL</div>
          <a class="btn btn-success btn-add" href="<?php echo base_url('admin_system/shorten_url_form') ?>"><i class="fa fa-plus"></i> Tambah Data</a>
        </div>
      </div>
      <!-- /.panel-heading -->
      <div class="panel-body">
        <table width="100%" class="table table-striped table-bordered table-hover" id="table-1">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Link</th>
              <th>Password</th>
              <th>Date Created</th>
              <th>Pembuat</th>
              <th>Click</th>
              <th>Edit</th>
              <th>Hapus</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data as $d1) { ?>
            <tr>
              <td>
                <?php echo $d1->id_shorten_url ?>
              </td>
              <td>
                <?php echo $d1->name ?>
              </td>
              <td>
                <?php echo $d1->link ?>
              </td>
              <td>
                <?php if($d1->password == "0") echo "-"; else echo $this->encrypt->decode($d1->password)?>
              </td>
              <td>
                <?php echo $d1->date_created ?>
              </td>
              <td>
                <?php if($d1->id_member == '0') echo "-"; else echo $d1->member_name ?>
              </td>
              <td>
                <?php echo $d1->click ?>
              </td>
              <td class="text-center">
                <form action="<?php echo base_url('admin_system/shorten_url_form') ?>" method="post">
                  <input type="hidden" name="id_shorten_url" value="<?php echo $d1->id_shorten_url ?>">
                  <button class="btn btn-info btn-xs btn-edit" type="submit" data-original-title="Ubah" data-placement="top" data-toggle="tooltip"><i class="fa fa-edit"></i></button>
                </form>
              </td>
              <td class="text-center">
                <form action="<?php echo base_url('admin_system/shorten_url_delete') ?>" method="post">
                  <input type="hidden" name="id_shorten_url" value="<?php echo $d1->id_shorten_url ?>">
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
<script src="<?php echo base_url('assets/backend/js/page/shorten_url.js') ?>"></script>

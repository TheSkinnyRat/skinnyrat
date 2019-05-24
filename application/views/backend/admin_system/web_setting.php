<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">Data Web Setting</h1>
  </div>
  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <div class="text-right">
          <div class="pull-left panel-title">Data Web Setting</div>
          <a class="btn btn-success btn-add disabled" href="<?php echo base_url('admin_system/web_setting_form') ?>"><i class="fa fa-plus"></i> Tambah Data</a>
        </div>
      </div>
      <!-- /.panel-heading -->
      <div class="panel-body">
        <table width="100%" class="table table-striped table-bordered table-hover" id="table-1">
          <thead>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Name</th>
              <th>Version</th>
              <th>Icon</th>
              <th>Favicon</th>
              <th>Edit</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data as $d1) { ?>
            <tr>
              <td>
                <?php echo $d1->id ?>
              </td>
              <td>
                <?php echo $d1->title ?>
              </td>
              <td>
                <?php echo $d1->name ?>
              </td>
              <td>
                <?php echo $d1->version ?>
              </td>
              <td>
                <?php echo $d1->icon ?>
              </td>
              <td>
                <?php echo $d1->favicon ?>
              </td>
              <td class="text-center">
                <form action="<?php echo base_url('admin_system/web_setting_form') ?>" method="post">
                  <input type="hidden" name="id" value="<?php echo $d1->id ?>">
                  <button class="btn btn-info btn-xs btn-edit" type="submit" data-original-title="Ubah" data-placement="top" data-toggle="tooltip"><i class="fa fa-edit"></i></button>
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
<script src="<?php echo base_url('assets/backend/js/page/web_setting.js') ?>"></script>

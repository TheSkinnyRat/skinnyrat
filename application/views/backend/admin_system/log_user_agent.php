<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">Data Log User Agent</h1>
  </div>
  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <div class="text-right">
          <div class="pull-left panel-title">Log User Agent</div>
          <a class="btn btn-danger btn-add" href="<?php echo base_url('admin_system/log_user_agent_delete_all') ?>"><i class="fa fa-times"></i> Clear Data</a>
        </div>
      </div>
      <!-- /.panel-heading -->
      <div class="panel-body">
        <table width="100%" class="table table-striped table-bordered table-hover" id="table-1">
          <thead>
            <tr>
              <th>ID</th>
              <th>Ket</th>
              <th>Date</th>
              <th>Agent</th>
              <th>Platform</th>
              <th>IP Address</th>
              <th>Agent String</th>
              <th>Hapus</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data as $d1) { ?>
            <tr>
              <td>
                <?php echo $d1->id_log_user_agent ?>
              </td>
              <td>
                <?php echo $d1->ket ?>
              </td>
              <td>
                <?php echo $d1->date ?>
              </td>
              <td>
                <?php echo $d1->agent ?>
              </td>
              <td>
                <?php echo $d1->platform ?>
              </td>
              <td>
                <?php echo $d1->ip_address ?>
              </td>
              <td>
                <?php echo $d1->agent_string ?>
              </td>
              <td class="text-center">
                <form action="<?php echo base_url('admin_system/log_user_agent_delete') ?>" method="post">
                  <input type="hidden" name="id" value="<?php echo $d1->id_log_user_agent ?>">
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
<script src="<?php echo base_url('assets/backend/js/page/log_user_agent.js') ?>"></script>

<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header"><?php echo $function_name ?></h1>
  </div>
  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
  <div class="col-lg-3 col-md-6">
    <div class="panel panel-yellow">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-3">
            <i class="fa fa-clock-o fa-5x"></i>
          </div>
          <div class="col-xs-9 text-right">
            <div class="huge">
              <span id="jam">00</span> : <span id="menit">00</span> : <span id="detik">00</span>
            </div>
            <div id="tanggal">Loading...</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-3">
            <i class="fa fa-link fa-5x"></i>
          </div>
          <div class="col-xs-9 text-right">
            <div class="huge">
              <?php echo $count_tbl_shorten_url ?>
            </div>
            <div>Jumlah Link Dibuat</div>
          </div>
        </div>
      </div>
      <a href="<?php echo base_url('admin_system/shorten_url') ?>">
        <div class="panel-footer">
          <span class="pull-left">Lihat Selengkapnya</span>
          <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
          <div class="clearfix"></div>
        </div>
      </a>
    </div>
  </div>
  <div class="col-lg-3 col-md-6">
    <div class="panel panel-green">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-3">
            <i class="fa fa-users fa-5x"></i>
          </div>
          <div class="col-xs-9 text-right">
            <div class="huge">
              <?php echo $count_tbl_member ?>
            </div>
            <div>Jumlah Member Terdaftar</div>
          </div>
        </div>
      </div>
      <a href="<?php echo base_url('admin_system/member') ?>">
        <div class="panel-footer">
          <span class="pull-left">Lihat Selengkapnya</span>
          <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
          <div class="clearfix"></div>
        </div>
      </a>
    </div>
  </div>
  <div class="col-lg-3 col-md-6">
    <div class="panel panel-red">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-3">
            <i class="fa fa-user fa-5x"></i>
          </div>
          <div class="col-xs-9 text-right">
            <div class="huge">
              <?php echo $count_tbl_admin ?>
            </div>
            <div>Jumlah Admin Terdaftar</div>
          </div>
        </div>
      </div>
      <a href="<?php echo base_url('admin_system/admin') ?>">
        <div class="panel-footer">
          <span class="pull-left">Lihat Selengkapnya</span>
          <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
          <div class="clearfix"></div>
        </div>
      </a>
    </div>
  </div>
</div>

<!-- WARNING CUSTOM SCRIPT FOR THIS PAGE -->
<script src="<?php echo base_url('assets/backend/js/page/'.$controller.'/'.$function.'.js') ?>"></script>

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Form Data Admin</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>

<!-- START DEFAULT DATATABLE -->
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Form Data Admin</h3>
	</div>
	<form class="form-horizontal" method="POST" id="admin_form" action="<?php if($data!=null) echo base_url('admin_system/admin_update'); else echo base_url('admin_system/admin_add'); ?>">
		<input type="hidden" name="id_admin" value="<?php if($data!=null) echo $data->id_admin; ?>">
		<div class="panel-body">
			<div class="alert alert-success hidden"><strong>Berhasil! </strong><span></span></div>
			<div class="alert alert-warning hidden"><strong>Memproses! </strong><span>Mohon tunggu, system sedang bekerja.</span></div>
			<div class="alert alert-danger hidden"><strong>Gagal! </strong><span></span></div>

			<!--				-------------------------------------------------------------------------------------------------------->
			<div class="form-group">
				<label class="col-md-4 col-xs-12 control-label">ID</label>
				<div class="col-md-2 col-xs-12">
					<input type="text" class="form-control" value="<?php if($data!=null) echo $data->id_admin; else echo'AUTO' ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 col-xs-12 control-label">Username</label>
				<div class="col-md-2 col-xs-12">
					<input type="text" name="username" class="form-control" value="<?php if($data!=null) echo $data->username; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 col-xs-12 control-label">Password</label>
				<div class="col-md-2 col-xs-12">
					<input type="text" name="password" class="form-control" value="<?php if($data!=null) echo $this->encrypt->decode($data->password); ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 col-xs-12 control-label">Nama</label>
				<div class="col-md-3 col-xs-12">
					<input type="text" name="name" class="form-control" value="<?php if($data!=null) echo $data->name; ?>">
				</div>
			</div>

		</div>
		<div class="panel-footer text-right">
			<button class="btn btn-default" type="reset">Reset</button>
			<button class="btn btn-primary" type="submit">Simpan</button>
		</div>
	</form>
</div>

<!-- WARNING CUSTOM SCRIPT FOR THIS PAGE -->
<script src="<?php echo base_url('assets/backend/js/page/admin_form.js') ?>"></script>
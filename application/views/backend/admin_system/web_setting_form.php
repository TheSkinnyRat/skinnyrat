<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Form Web Setting</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>

<!-- START DEFAULT DATATABLE -->
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Form Web Setting</h3>
	</div>
	<form class="form-horizontal" method="POST" id="web_setting_form" action="<?php if($data!=null) echo base_url('admin_system/web_setting_update'); else echo base_url('admin_system/web_setting_add'); ?>">
		<input type="hidden" name="id" value="<?php if($data!=null) echo $data->id; else echo '0'; ?>">
		<div class="panel-body">
			<div class="alert alert-success hidden"><strong>Berhasil! </strong><span></span></div>
			<div class="alert alert-warning hidden"><strong>Memproses! </strong><span>Mohon tunggu, system sedang bekerja.</span></div>
			<div class="alert alert-danger hidden"><strong>Gagal! </strong><span></span></div>

			<!--				-------------------------------------------------------------------------------------------------------->
			<div class="form-group">
				<label class="col-md-4 col-xs-12 control-label">ID</label>
				<div class="col-md-2 col-xs-12">
					<input type="text" class="form-control" value="<?php if($data!=null) echo $data->id; else echo'AUTO' ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 col-xs-12 control-label">Title</label>
				<div class="col-md-2 col-xs-12">
					<input type="text" name="title" class="form-control" value="<?php if($data!=null) echo $data->title; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 col-xs-12 control-label">Name</label>
				<div class="col-md-2 col-xs-12">
					<input type="text" name="name" class="form-control" value="<?php if($data!=null) echo $data->name; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 col-xs-12 control-label">Version</label>
				<div class="col-md-2 col-xs-12">
					<input type="text" name="version" class="form-control" value="<?php if($data!=null) echo $data->version; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 col-xs-12 control-label">Icon</label>
				<div class="col-md-2 col-xs-12">
					<select class="form-control" name="icon">
						<?php foreach ($data_icon as $d1) { ?>
						<option value="<?php echo $d1->icon; ?>" <?php if($data!=null && $data->icon == $d1->icon) echo "selected"; ?>>
							<?php echo $d1->icon ?>
						</option>
						<?php } ?>
					</select>
					<div class="text-muted">(Data Berdasarkan Font Awesome Icon Versi 5)</div>
				</div>
			</div>
			<!-- <div class="form-group">
				<label class="col-md-4 col-xs-12 control-label">Fav Icon</label>
				<div class="col-md-3 col-xs-12">
					<input class="form-control" type="file" name="favicon" <?php if($data==null) echo "required" ; ?>>
				</div>
			</div> -->
			<div class="form-group">
				<label class="col-md-4 col-xs-12 control-label">Favicon</label>
				<div class="col-md-2 col-xs-12">
					<input type="hidden" name="old_favicon" value="<?php if($data!=null) echo $data->favicon; ?>">
					<input type="hidden" name="favicon">
					<label for="file-upload-file" class="btn btn-info btn-upload" data-target="favicon">Browse</label>
				</div><br><br>
				<div class="col-md-2 col-xs-12 col-md-offset-4 no-padding" id="preview_favicon">
					<div class="image">
						<img <?php if($data!=null) { ?>
						src="<?php echo base_url(); ?>assets/frontend/img/favicon/
						<?php echo $data->favicon; ?>"
						<?php } ?>
						alt="&nbsp;No Image Selected" width="80%" height="auto"/>
					</div>
				</div>
			</div>
			<!-- <div class="form-group">
				<label class="col-md-4 col-xs-12 control-label">Status</label>
				<label class="radio-inline">
					<input type="radio" name="status" value="1" <?php if($data!=null && $data->status == '1') echo "checked"; ?>>Tampilkan
				</label>
				<label class="radio-inline">
					<input type="radio" name="status" value="0" <?php if($data!=null && $data->status == '0') echo "checked"; ?>>Sembunyikan
				</label>
			</div> -->

		</div>
		<div class="panel-footer text-right">
			<button class="btn btn-default" type="reset">Reset</button>
			<button class="btn btn-primary" type="submit">Simpan</button>
		</div>
	</form>
</div>

<!-- FORM UPLOAD -->
<form id="file-upload" action="<?php echo base_url('upload/image'); ?>" method="POST" enctype="multipart/form-data" class="hidden">
	<input type="hidden" name="target" id="target-file">
	<input type="hidden" name="old" id="old-file">
	<input type="file" name="image" id="file-upload-file">
</form>
<!-- EOF FORM UPLOAD -->
<!-- WARNING CUSTOM SCRIPT FOR THIS PAGE -->
<script src="<?php echo base_url('assets/backend/js/page/web_setting_form.js') ?>"></script>

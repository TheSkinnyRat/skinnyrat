<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Form Data Article</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>

<!-- START DEFAULT DATATABLE -->
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Form Data Article</h3>
	</div>
	<form class="form-horizontal" method="POST" id="article_form" action="<?php if($data!=null) echo base_url('admin_system/article_update'); else echo base_url('admin_system/article_add'); ?>">
		<input type="hidden" name="id_article" value="<?php if($data!=null) echo $data->id_article; else echo " 0"; ?>">
		<input type="hidden" name="date_created" class="form-control" value="<?php echo date('Y-m-d H:i:s') ?>">
		<div class="panel-body">
			<div class="alert alert-success hidden"><strong>Berhasil! </strong><span></span></div>
			<div class="alert alert-warning hidden"><strong>Memproses! </strong><span>Mohon tunggu, system sedang bekerja.</span></div>
			<div class="alert alert-danger hidden"><strong>Gagal! </strong><span></span></div>

			<!--				-------------------------------------------------------------------------------------------------------->
			<div class="form-group">
				<label class="col-md-4 col-xs-12 control-label">ID</label>
				<div class="col-md-2 col-xs-12">
					<input type="text" class="form-control" value="<?php if($data!=null) echo $data->id_article; else echo'AUTO' ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 col-xs-12 control-label">Article URL</label>
				<div class="col-md-2 col-xs-12">
					<input type="text" name="name" class="form-control" value="<?php if($data!=null) echo $data->name; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 col-xs-12 control-label">Judul</label>
				<div class="col-md-2 col-xs-12">
					<input type="text" name="judul" class="form-control" value="<?php if($data!=null) echo $data->judul; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 col-xs-12 control-label">Sub Judul</label>
				<div class="col-md-2 col-xs-12">
					<input type="text" name="subjudul" class="form-control" value="<?php if($data!=null) echo $data->subjudul; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 col-xs-12 control-label">Pembuat</label>
				<div class="col-md-2 col-xs-12">
					<select name="id_member" class="form-control">
						<option value="0" <?php if($data!=null && $data->id_member == "0") echo "selected"; ?>>Tidak Ada Pembuat</option>
						<?php foreach ($data_member as $d_member) { ?>
							<option value="<?php echo $d_member->id_member ?>" <?php if($data!=null && $data->id_member == $d_member->id_member) echo "selected"; ?>><?php echo $d_member->name ?></option>
						<?php } ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 col-xs-12 control-label">Click</label>
				<div class="col-md-2 col-xs-12">
					<input type="number" name="click" class="form-control" value="<?php if($data!=null) echo $data->click; else echo "0"; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 col-xs-12 control-label">Konten</label>
				<div class="col-md-7 col-xs-14">
					<textarea name="konten" class="form-control ckeditor" id="cktext"><?php if($data!=null) echo $data->konten; ?></textarea>
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
<script src="<?php echo base_url('assets/backend/js/page/article_form.js') ?>"></script>

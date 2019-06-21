<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header"><?php echo $function_name; ?></h1>
	</div>
	<!-- /.col-lg-12 -->
</div>

<!-- START DEFAULT DATATABLE -->
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title"><?php echo $function_name; ?></h3>
	</div>
	<form class="form-horizontal" method="POST" id="<?php echo $function_form ?>" action="<?php if($data!=null) echo base_url($controller.'/'.$function_edit); else echo base_url($controller.'/'.$function_add); ?>">
		<input type="hidden" name="id" value="<?php if($data!=null) echo $data->id; else echo " 0"; ?>">
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
				<label class="col-md-4 col-xs-12 control-label">Judul</label>
				<div class="col-md-2 col-xs-12">
					<input type="text" name="judul" class="form-control" value="<?php if($data!=null) echo $data->judul; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 col-xs-12 control-label">Konten</label>
				<div class="col-md-7 col-xs-14">
					<textarea name="konten" class="form-control ckeditor" id="cktext"><?php if($data!=null) echo $data->konten; ?></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 col-xs-12 control-label">Expand</label>
				<div class="col-md-2 col-xs-12">
					<label class="radio-inline">
						<input type="radio" name="expand" value="1" <?php if($data!=null && $data->expand == '1') echo "checked"; else echo "checked"; ?>>Yes
					</label>
					<label class="radio-inline">
						<input type="radio" name="expand" value="0" <?php if($data!=null && $data->expand == '0') echo "checked"; ?>>No
					</label>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 col-xs-12 control-label">Status</label>
				<div class="col-md-2 col-xs-12">
					<label class="radio-inline">
						<input type="radio" name="status" value="1" <?php if($data!=null && $data->status == '1') echo "checked"; else echo "checked"; ?>>Tampilkan
					</label>
					<label class="radio-inline">
						<input type="radio" name="status" value="0" <?php if($data!=null && $data->status == '0') echo "checked"; ?>>Sembunyikan
					</label>
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
<script src="<?php echo base_url('assets/backend/js/page/'.$controller.'/'.$function_form.'.js') ?>"></script>

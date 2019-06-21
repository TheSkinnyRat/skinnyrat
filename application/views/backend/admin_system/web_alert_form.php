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
				<label class="col-md-4 col-xs-12 control-label">Style</label>
				<div class="col-md-2 col-xs-12">
					<select class="form-control" name="style">
						<option value="alert-primary" <?php if($data!=null && $data->style == "alert-primary") echo "selected"; ?>>alert-primary</option>
						<option value="alert-secondary" <?php if($data!=null && $data->style == "alert-secondary") echo "selected"; ?>>alert-secondary</option>
						<option value="alert-success" <?php if($data!=null && $data->style == "alert-success") echo "selected"; ?>>alert-success</option>
						<option value="alert-danger" <?php if($data!=null && $data->style == "alert-danger") echo "selected"; ?>>alert-danger</option>
						<option value="alert-warning" <?php if($data!=null && $data->style == "alert-warning") echo "selected"; ?>>alert-warning</option>
						<option value="alert-info" <?php if($data!=null && $data->style == "alert-info") echo "selected"; ?>>alert-info</option>
						<option value="alert-light" <?php if($data!=null && $data->style == "alert-light") echo "selected"; ?>>alert-light</option>
						<option value="alert-dark" <?php if($data!=null && $data->style == "alert-dark") echo "selected"; ?>>alert-dark</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 col-xs-12 control-label">Konten</label>
				<div class="col-md-3 col-xs-12">
					<textarea class="form-control" name="konten" rows="8" cols="10" required><?php if($data!=null) echo $data->konten; ?></textarea>
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

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
				<label class="col-md-4 col-xs-12 control-label">Name</label>
				<div class="col-md-2 col-xs-12">
					<input type="text" name="name" class="form-control" value="<?php if($data!=null) echo $data->name; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 col-xs-12 control-label">Target</label>
				<div class="col-md-2 col-xs-12">
					<input type="text" name="target" class="form-control" value="<?php if($data!=null) echo $data->target; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 col-xs-12 control-label">Parent</label>
				<div class="col-md-2 col-xs-12">
					<select name="id_parent" class="form-control">
						<option value="0" <?php if($data!=null && $data->id_parent == "0") echo "selected"; ?>>Main Menu</option>
						<?php foreach ($data_parent as $d_parent) { ?>
							<option value="<?php echo $d_parent->id ?>" <?php if($data!=null && $data->id_parent == $d_parent->id) echo "selected"; ?>><?php echo $d_parent->name ?></option>
						<?php } ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 col-xs-12 control-label">Icon</label>
				<div class="col-md-2 col-xs-12">
					<input type="text" name="icon" class="form-control" value="<?php if($data!=null) echo $data->icon; ?>">
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

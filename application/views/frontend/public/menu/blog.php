<!-- Begin Page Content -->
<div class="m-2">

  <div class="card">
    <div class="card-header py-3 text-right">
      <h6 class="m-0 float-left">
        <div class="text-left font-weight-bold text-primary">
          <?php echo $data->judul ?>
        </div>
        <div class="text-left text-muted text-primary">
          <?php echo $data->subjudul ?>
        </div>
      </h6>
      <?php if (isset($userdata) && $data->id_member == $userdata['id_member']) { ?>
        <form action="<?php echo base_url('member_system/article_form') ?>" method="post">
          <input type="hidden" name="id_article" value="<?php echo $data->id_article ?>">
          <button class="btn btn-info btn-sm" type="submit"><i class="fa fa-edit"></i> Edit</button>
        </form>
      <?php }else{ ?>
        <button class="btn btn-info btn-sm disabled" data-toggle="tooltip" data-placement="left" title="Anda tidak memiliki izin untuk mengedit artikel ini"><i class="fa fa-edit"></i> Edit</button>
      <?php } ?>
    </div>

    <div class="card-body">
      <?php echo $data->konten ?>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

<!-- WARNING Custom scripts for Index pages-->
<script src="<?php echo base_url('assets/frontend/js/page/blog.js') ?>"></script>

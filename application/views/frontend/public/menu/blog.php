<!-- Begin Page Content -->
<div class="m-2">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-1">
    <h1 class="h3 mb-0 text-gray-800">
      <?php echo $data->judul ?>
    </h1>
  </div>

  <div class="card">
    <div class="card-header py-3 text-right">
      <h6 class="m-0 font-weight-bold text-primary float-left"><?php echo $data->subjudul ?></h6>
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

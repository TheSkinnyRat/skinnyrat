<div class="card mb-4">
  <div class="card-header px-0 py-0">
    <?php if ($ref != NULL) { ?>
      <a href="<?php echo $ref ?>" class="btn btn-light"><i class="fa fa-arrow-left"></i></a>
    <?php }else{ ?>
      <a href="<?php echo base_url() ?>" class="btn btn-light"><i class="fa fa-home"></i></a>
    <?php } ?>
    <?php echo $header ?>
  </div>
  <div class="card-body">
    <?php if ($data != NULL) { ?>
      <table>
        <?php foreach ($data as $d) { ?>
          <tr>
            <td>
              <i class="fa fa-user-circle fa-2x mr-1"></i>
            </td>
            <td>
              <a href="<?php echo base_url('profile/'.$d->username) ?>"><?php echo $d->name ?></a>
            </td>
          </tr>
        <?php } ?>
      </table>
    <?php }else{ ?>
      <div class="text-center font-italic">- Nothing Here -</div>
    <?php } ?>
  </div>
</div>

<!-- WARNING Custom scripts for Index pages-->
<script src="<?php echo base_url('assets/frontend/js/page/like_dislike_show.js') ?>"></script>

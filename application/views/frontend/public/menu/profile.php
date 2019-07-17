<!-- Begin Page Content -->
<div class="container-fluid">

  <div class="card mb-4">
    <div class="card-header px-0 py-0">
      <?php if ($this->agent->is_referral()) { ?>
        <a href="<?php echo $this->agent->referrer(); ?>" class="btn btn-light"><i class="fa fa-arrow-left"></i></a>
      <?php }else{ ?>
        <a href="<?php echo base_url() ?>" class="btn btn-light"><i class="fas fa-home"></i></a>
      <?php } ?>
      <?php echo $data->name ?>'s profile
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-auto">
          <i class="fa fa-user-circle fa-5x"></i>
        </div>
        <div class="col">
          <div class="h2 text-primary mb-0">
            <?php echo $data->name ?>
          </div>
          <div class="h6 text-secondary">
            <?php echo $data->username ?> · Member User
          </div>
          <button class="btn btn-info btn-sm disabled" data-toggle="tooltip" data-placement="top" title="Coming soon"><i class="far fa-comment-dots"></i> Send Message</button>
          <?php if (isset($userdata) && $userdata['id_member'] == $data->id_member) { ?>
            <button type="button" class="btn btn-secondary btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-angle-down"></i>
            </button>
            <div class="dropdown-menu">
              <a href="<?php echo base_url('member_system/profile_form') ?>" class="dropdown-item"><i class="fas fa-edit"></i> Edit Profile</a>
              <a href="<?php echo base_url('member_system/password_form') ?>" class="dropdown-item"><i class="fas fa-key"></i> Change Password</a>
              <a href="<?php echo base_url('member_system/member_delete') ?>" class="dropdown-item"><i class="fas fa-user-times"></i> Delete Account</a>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

<!-- WARNING Custom scripts for Index pages-->
<script src="<?php echo base_url('assets/frontend/js/page/like_dislike_show.js') ?>"></script>

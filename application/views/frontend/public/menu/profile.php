<div class="card mb-2">
  <div class="card-header px-0 py-0">
    <?php if ($this->agent->referrer() != NULL) { ?>
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

<div class="row">
  <div class="col-sm">
    <div class="card shadow mb-2">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><i class="far fa-newspaper"></i> Article</h6>
      </div>
      <div class="card-body">
        <div class="card">
          <?php foreach ($article as $d_article) { ?>
            <a href="<?php echo base_url('b/'.$d_article->name) ?>" class="text-secondary  mb-1 ">
              <div class="row p-1 m-1 align-items-center card-body">
                <div class="col-auto pr-0">
                  <img src="<?php if($d_article->img != '0') echo $d_article->img; else echo base_url('assets/frontend/img/favicon/ratblog.png'); ?>" style="width: 50px; height: 50px;" alt="" class="rounded" width="72" height="72">
                </div>
                <div class="col">
                  <?php echo $d_article->judul ?>
                  <?php if (strtotime(date('Y-m-d')) - strtotime(date('Y-m-d',strtotime($d_article->date_created))) <= 259200) { ?>
                    <span class="badge badge-secondary">New</span>
                  <?php } ?>
                </div>
              </div>
            </a>
            <hr class="m-0">
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-link"></i> Shorten Url</h6>
      </div>
      <div class="card-body">
        <div class="card">
          <?php foreach ($shorten_url as $d_shorten_url) { ?>
            <a href="<?php echo base_url($d_shorten_url->name) ?>" class="text-secondary  mb-1 ">
              <div class="row p-1 m-1 align-items-center card-body">
                <div class="col">
                  <strong><?php echo $d_shorten_url->name ?></strong>
                  <?php if (strtotime(date('Y-m-d')) - strtotime(date('Y-m-d',strtotime($d_shorten_url->date_created))) <= 259200) { ?>
                    <span class="badge badge-secondary">New</span>
                  <?php } ?>
                  <br>
                  <?php if ($d_shorten_url->password != '0') { ?>
                    <small class="d-inline-block text-info">Password Encrypted</small>
                  <?php }else{ ?>
                    <small class="d-inline-block text-truncate mw-100"><?php echo $d_shorten_url->link ?></small>
                  <?php } ?>
                </div>
              </div>
            </a>
            <hr class="m-0">
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- WARNING Custom scripts for Index pages-->
<script src="<?php echo base_url('assets/frontend/js/page/like_dislike_show.js') ?>"></script>

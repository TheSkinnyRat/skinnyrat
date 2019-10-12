<!-- Begin Page Content -->
<div class="container p-2 pt-3">

  <div class="card">
    <div class="card-header py-3">
      <div class="row">
        <div class="col w-25">
          <div class="m-0">
            <div class="font-weight-bold text-primary">
              By: <?php if(isset($data_name)) { ?>
                <a href="<?php echo base_url('profile/'.$data_name->username); ?>"><?php echo $data_name->name; ?></a>
              <?php } else echo 'Unknown'; ?>
              <!-- <?php echo $data->judul ?> -->
            </div>
            <code class="text-muted text-primary text-xs">
              <?php echo date("d F Y H:i",strtotime($data->date_created)) ?>
              <!-- <?php echo $data->subjudul ?> -->
            </code>
            <?php if ($data->private != '0') { ?>
              <div class="">
                <button class="btn btn-light btn-sm text-xs disabled m-0 p-0" data-toggle="tooltip" data-placement="left" title="Artikel tidak ditampilkan di rekomendasi / pencarian"><i class="fa fa-user-lock"></i> Private Article</button>
              </div>
            <?php } ?>
          </div>
        </div>
        <div class="col-auto">
          <div class="float-right ml-1 mb-1">
            <input type="text" class="d-none" id="url_<?php echo $data->name; ?>" value="<?php echo base_url('blog/'.$data->name); ?>">
            <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-share-alt"></i>
            </button>
            <div class="dropdown-menu">
              <button class="dropdown-item" onclick="copy('<?php echo $data->name; ?>')" id="cp_<?php echo $data->name; ?>"><i class="far fa-copy"></i> Copy Link</button>
              <a href="https://wa.me?text=<?php echo base_url('blog/'.$data->name) ?>" class="dropdown-item" target="_blank"><i class="fab fa-whatsapp"></i> Share to Whatsapp</a>
            </div>
          </div>
          <div class="float-right">
            <?php if (isset($userdata) && $data->id_member == $userdata['id_member']) { ?>
            <form action="<?php echo base_url('member_system/article_form') ?>" method="get">
              <input type="hidden" name="id" value="<?php echo $this->encrypt->encode($data->id_article); ?>">
              <button class="btn btn-info btn-sm" type="submit"><i class="fa fa-edit"></i></button>
            </form>
            <?php }else{ ?>
            <button class="btn btn-info btn-sm disabled" data-toggle="tooltip" data-placement="left" title="Anda tidak memiliki izin untuk mengedit artikel ini"><i class="fa fa-edit"></i></button>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>

    <div class="card-body">
      <?php if($data->password != '0'){ ?>
        <div class="" id="konten">
          <div class="d-flex justify-content-center text-center">
            <div class="w-auto border p-5 bg-light">
              <form class="form" method="post" id="pass_form" action="<?php echo base_url('blog_system/pass_go') ?>">
                <input type="hidden" name="id_article" value="<?php echo $data->id_article ?>">
                <label class="text-dark" for="password"><i class="fas fa-lock"></i> This Article is Secured</label>
                <div class="input-group">
                  <input type="password" name="password" class="form-control form-control-sm" placeholder="Input Password" required>
                  <div class="input-group-append">
                    <button class="btn btn-primary btn-sm" type="submit"><i class="fas fa-arrow-right"></i></button>
                  </div>
                </div>
                <hr>
                <div class="alert alert-success d-none p-0 px-1 m-0"><strong>Granted! </strong><span></span></div>
                <div class="alert alert-warning d-none p-0 px-1 m-0"><strong><i class="fas fa-circle-notch fa-spin"></i> Authenticating...</strong><span></span></div>
                <div class="alert alert-danger d-none p-0 px-1 m-0"><strong>Denied! </strong><span></span></div>
                <div class="alert alert-info p-0 px-1 m-0"><strong>Input Password</strong><span></span></div>
              </form>
            </div>
          </div>
        </div>
      <?php }else{ ?>
        <?php echo $data->konten ?>
      <?php } ?>
      <?php if ($data->private == '0') { ?>
        <fieldset class="border-top border-dark p-0">
          <legend class="w-auto p-2 m-0 text-center"><small>Other Posts</small></legend>
        </fieldset>

        <div class="card">

          <?php foreach ($article_rand as $a_rand) { ?>
            <a href="<?php echo base_url('b/'.$a_rand->name) ?>" class="text-secondary  mb-1 ">
              <div class="row p-1 m-1 align-items-center card-body">
                <div class="col-auto pr-0">
                  <img src="<?php if($a_rand->img != '0') echo $a_rand->img; else echo base_url('assets/frontend/img/favicon/ratblog.png'); ?>" style="width: 75px; height: 50px;" alt="" class="rounded" width="72" height="72">
                </div>
                <div class="col">
                  <?php echo $a_rand->judul ?>
                  <?php if (strtotime(date('Y-m-d')) - strtotime(date('Y-m-d',strtotime($a_rand->date_created))) <= 259200) { ?>
                    <span class="badge badge-secondary">New</span>
                  <?php } ?>
                </div>
              </div>
            </a>
            <hr class="m-0">
          <?php } ?>

        </div>
      <?php } ?>

    </div>

    <div class="card-footer">
      <div class="row">
        <div class="col">
          <?php if (isset($userdata)) { ?>
            <form class="form-inline float-left" method="post" id="article_like" action="<?php echo base_url('blog_system/article_like') ?>">
              <input type="hidden" name="id" value="<?php echo $data->id_article ?>">
              <button id="btn_article_like" class="btn btn-light px-1 py-0 <?php if($user_like == TRUE) echo 'text-primary'; ?>" target="<?php if($user_like == TRUE) echo 'unlike'; else echo 'like'; ?>" type="submit" name="submit"><i class="<?php if($user_like == TRUE) echo 'fas'; else echo 'far'; ?> fa-thumbs-up fa-sm"></i></button>
            </form>
            <form class="form-inline float-left" method="get" action="<?php echo base_url('blog_system/article_like_show') ?>">
              <input type="hidden" name="id" value="<?php echo $this->encrypt->encode($data->id_article) ?>">
              <input type="hidden" name="ref" value="<?php echo base_url('blog/'.$data->name); ?>">
              <button class="btn px-0 py-0" id="text_article_like" type="submit"><?php echo $like; ?></button>
            </form>
              <div class="float-left">
              &nbsp;·
            </div>
            <form class="form-inline float-left" method="post" id="article_dislike" action="<?php echo base_url('blog_system/article_dislike') ?>">
              <input type="hidden" name="id" value="<?php echo $data->id_article ?>">
              <button id="btn_article_dislike" class="btn btn-light px-1 py-0 <?php if($user_dislike == TRUE) echo 'text-primary'; ?>" target="<?php if($user_dislike == TRUE) echo 'undislike'; else echo 'dislike'; ?>" type="submit" name="submit"><i class="<?php if($user_dislike == TRUE) echo 'fas'; else echo 'far'; ?> fa-thumbs-down fa-sm fa-flip-horizontal"></i></button>
            </form>
            <form class="form-inline float-left" method="get" action="<?php echo base_url('blog_system/article_dislike_show') ?>">
              <input type="hidden" name="id" value="<?php echo $this->encrypt->encode($data->id_article) ?>">
              <input type="hidden" name="ref" value="<?php echo base_url('blog/'.$data->name); ?>">
              <button class="btn px-0 py-0" id="text_article_dislike" type="submit"><?php echo $dislike; ?></button>
            </form>
          <?php }else{ ?>
            <button class="btn btn-light px-1 py-0 disabled float-left" data-toggle="tooltip" data-placement="top" title="Login untuk memberikan Like"><i class="far fa-thumbs-up fa-sm"></i></button>
            <form class="form-inline float-left" method="get" action="<?php echo base_url('blog_system/article_like_show') ?>">
              <input type="hidden" name="id" value="<?php echo $this->encrypt->encode($data->id_article) ?>">
              <input type="hidden" name="ref" value="<?php echo base_url('blog/'.$data->name); ?>">
              <button class="btn px-0 py-0" id="text_article_like" type="submit" name="button"><?php echo $like; ?></button>
            </form>
            <div class="float-left">
              &nbsp;·
            </div>
            <button class="btn btn-light px-1 py-0 disabled float-left" data-toggle="tooltip" data-placement="top" title="Login untuk memberikan Dislike"><i class="far fa-thumbs-down fa-sm fa-flip-horizontal"></i></button>
            <form class="form-inline float-left" method="get" action="<?php echo base_url('blog_system/article_dislike_show') ?>">
              <input type="hidden" name="id" value="<?php echo $this->encrypt->encode($data->id_article) ?>">
              <input type="hidden" name="ref" value="<?php echo base_url('blog/'.$data->name); ?>">
              <button class="btn px-0 py-0" id="text_article_dislike" type="submit"><?php echo $dislike; ?></button>
            </form>
          <?php } ?>
        </div>
        <div class="col text-right">
          <i class="fas fa-eye fa-sm"></i>
          <?php echo $data->click; ?>x Dilihat
        </div>
      </div>
    </div>

  </div>

  <div class="card mt-1">
    <!-- Card Header - Accordion -->
    <a href="#comment" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="comment">
      <h6 class="m-0 font-weight-bold text-primary"><?php echo $comment_count ?> Komentar</h6>
    </a>
    <!-- Card Content - Collapse -->
    <div class="collapse show" id="comment">
      <div class="card-body">

        <?php if ($comment != NULL) { ?>
          <?php foreach ($comment as $cm) { ?>
            <?php $user_comment_like = 'user_comment_like_'.$cm->id ?>
            <?php $user_comment_dislike = 'user_comment_dislike_'.$cm->id ?>
            <div class="row mb-2">
              <div class="col col-auto pr-2">
                <i class="fas fa-user-circle fa-2x"></i>
              </div>
              <div class="col p-0 m-0">
                <div class="text-primary m-0 d-inline">
                  <a href="<?php echo base_url('profile/'.$cm->username) ?>"><?php echo $cm->name ?></a>
                  <?php if($cm->id_member == $data->id_member) { ?><i class="fas fa-check-circle fa-sm"></i><?php } ?>
                </div>
                <?php echo $cm->comment ?>
                <div class="col p-0">
                  <?php if (isset($userdata)) { ?>
                    <form class="form-inline float-left" method="post" id="comment_like_<?php echo $cm->id; ?>" action="<?php echo base_url('blog_system/comment_like') ?>">
                      <input type="hidden" name="id" value="<?php echo $cm->id; ?>">
                      <button id="btn_comment_like_<?php echo $cm->id; ?>" class="btn px-1 py-0 <?php if($$user_comment_like == TRUE) echo 'text-primary' ?>" target="<?php if($$user_comment_like == TRUE) echo 'unlike'; else echo 'like'; ?>" onclick="comment_like(<?php echo $cm->id; ?>)" type="submit" name="submit"><i class="<?php if($$user_comment_like == TRUE) echo 'fas'; else echo 'far'; ?> fa-thumbs-up fa-sm"></i></button>
                    </form>
                    <form class="form-inline float-left" method="get" action="<?php echo base_url('blog_system/comment_like_show') ?>">
                      <input type="hidden" name="id" value="<?php echo $this->encrypt->encode($cm->id) ?>">
                      <input type="hidden" name="ref" value="<?php echo base_url('blog/'.$data->name); ?>">
                      <?php $count_comment_like = 'comment_like_'.$cm->id ?>
                      <button class="btn px-0 py-0" id="text_comment_like_<?php echo $cm->id; ?>" type="submit"><?php echo $$count_comment_like ?></button>
                    </form>
                    <div class="float-left">
                      &nbsp;·
                    </div>
                    <form class="form-inline float-left" method="post" id="comment_dislike_<?php echo $cm->id; ?>" action="<?php echo base_url('blog_system/comment_dislike') ?>">
                      <input type="hidden" name="id" value="<?php echo $cm->id; ?>">
                      <button id="btn_comment_dislike_<?php echo $cm->id; ?>" class="btn px-1 py-0 <?php if($$user_comment_dislike == TRUE) echo 'text-primary' ?>" target="<?php if($$user_comment_dislike == TRUE) echo 'undislike'; else echo 'dislike'; ?>" onclick="comment_dislike(<?php echo $cm->id; ?>)" type="submit" name="submit"><i class="<?php if($$user_comment_dislike == TRUE) echo 'fas'; else echo 'far'; ?> fa-thumbs-down fa-sm fa-flip-horizontal"></i></button>
                    </form>
                    <form class="form-inline float-left" method="get" action="<?php echo base_url('blog_system/comment_dislike_show') ?>">
                      <input type="hidden" name="id" value="<?php echo $this->encrypt->encode($cm->id) ?>">
                      <input type="hidden" name="ref" value="<?php echo base_url('blog/'.$data->name); ?>">
                      <?php $count_comment_dislike = 'comment_dislike_'.$cm->id ?>
                      <button class="btn px-0 py-0" id="text_comment_dislike_<?php echo $cm->id; ?>" type="submit"><?php echo $$count_comment_dislike ?></button>
                    </form>
                    <div class="float-left">
                      &nbsp;·&nbsp;
                    </div>
                    <div class="<?php if(isset($userdata) && $cm->id_member == $userdata['id_member']) echo 'float-left' ?>">
                      <button class="btn btn-link px-0 py-0 btn-sm text-secondary" onclick="show_comment(<?php echo $cm->id ?>)">Balas</button>
                    </div>
                    <?php if (isset($userdata) && $cm->id_member == $userdata['id_member']) { ?>
                      <div class="float-left">
                        &nbsp;·
                      </div>
                      <form class="form" id="comment_form_del_<?php echo $cm->id; ?>" method="post" action="<?php echo base_url('blog_system/comment_delete'); ?>">
                        <input type="hidden" name="id" value="<?php echo $cm->id ?>">
                        <input type="hidden" name="id_article" value="<?php echo $data->id_article ?>">
                        <button class="btn btn-link px-1 py-0 btn-sm text-danger" id="comment_del_<?php echo $cm->id; ?>" type="submit" name="submit" onclick="comment_del(<?php echo $cm->id; ?>)">Hapus</button>
                      </form>
                    <?php } ?>
                  <?php }else{ ?>
                    <button class="btn px-1 py-0 float-left disabled" data-toggle="tooltip" data-placement="top" title="Login untuk memberikan Like"><i class="far fa-thumbs-up fa-sm"></i></button>
                    <form class="form-inline float-left" method="get" action="<?php echo base_url('blog_system/comment_like_show') ?>">
                      <input type="hidden" name="id" value="<?php echo $this->encrypt->encode($cm->id) ?>">
                      <input type="hidden" name="ref" value="<?php echo base_url('blog/'.$data->name); ?>">
                      <?php $count_comment_like = 'comment_like_'.$cm->id ?>
                      <button class="btn px-0 py-0" id="text_comment_like_<?php echo $cm->id; ?>" type="submit"><?php echo $$count_comment_like ?></button>
                    </form>
                    <div class="float-left">
                      &nbsp;·
                    </div>
                    <button class="btn px-1 py-0 float-left disabled" data-toggle="tooltip" data-placement="top" title="Login untuk memberikan Dislike"><i class="far fa-thumbs-down fa-sm fa-flip-horizontal"></i></button>
                    <form class="form-inline float-left" method="get" action="<?php echo base_url('blog_system/comment_dislike_show') ?>">
                      <input type="hidden" name="id" value="<?php echo $this->encrypt->encode($cm->id) ?>">
                      <input type="hidden" name="ref" value="<?php echo base_url('blog/'.$data->name); ?>">
                      <?php $count_comment_dislike = 'comment_dislike_'.$cm->id ?>
                      <button class="btn px-0 py-0" id="text_comment_dislike_<?php echo $cm->id; ?>" type="submit"><?php echo $$count_comment_dislike ?></button>
                    </form>
                    <div class="float-left">
                      &nbsp;·&nbsp;
                    </div>
                    <div class="">
                      <button class="btn btn-link px-0 py-0 btn-sm text-secondary" onclick="show_comment(<?php echo $cm->id ?>)">Balas</button>
                    </div>
                  <?php } ?>

                </div>

                <?php foreach ($comment_parent as $cmp) { ?>
                  <?php if ($cmp->id_parent == $cm->id) { ?>
                    <?php $user_comment_like = 'user_comment_like_'.$cmp->id ?>
                    <?php $user_comment_dislike = 'user_comment_dislike_'.$cmp->id ?>
                    <div class="row mt-2">
                      <div class="col col-auto pr-2">
                        <i class="fas fa-user-circle fa-2x"></i>
                      </div>
                      <div class="col p-0 m-0">
                        <div class="text-primary m-0 d-inline">
                          <a href="<?php echo base_url('profile/'.$cmp->username) ?>"><?php echo $cmp->name ?></a>
                          <?php if($cmp->id_member == $data->id_member) { ?><i class="fas fa-check-circle fa-sm"></i><?php } ?>
                        </div>
                        <?php echo $cmp->comment ?>
                        <div class="col p-0">
                          <?php if (isset($userdata)) { ?>
                            <form class="form-inline float-left" method="post" id="comment_like_<?php echo $cmp->id; ?>" action="<?php echo base_url('blog_system/comment_like') ?>">
                              <input type="hidden" name="id" value="<?php echo $cmp->id; ?>">
                              <button id="btn_comment_like_<?php echo $cmp->id; ?>" class="btn px-1 py-0 <?php if($$user_comment_like == TRUE) echo 'text-primary' ?>" target="<?php if($$user_comment_like == TRUE) echo 'unlike'; else echo 'like'; ?>" onclick="comment_like(<?php echo $cmp->id; ?>)" type="submit" name="submit"><i class="<?php if($$user_comment_like == TRUE) echo 'fas'; else echo 'far'; ?> fa-thumbs-up fa-sm"></i></button>
                            </form>
                            <form class="form-inline float-left" method="get" action="<?php echo base_url('blog_system/comment_like_show') ?>">
                              <input type="hidden" name="id" value="<?php echo $this->encrypt->encode($cmp->id) ?>">
                              <input type="hidden" name="ref" value="<?php echo base_url('blog/'.$data->name); ?>">
                              <?php $count_comment_like = 'comment_like_'.$cmp->id ?>
                              <button class="btn px-0 py-0" id="text_comment_like_<?php echo $cmp->id; ?>" type="submit"><?php echo $$count_comment_like ?></button>
                            </form>
                            <div class="float-left">
                              &nbsp;·
                            </div>
                            <form class="form-inline float-left" method="post" id="comment_dislike_<?php echo $cmp->id; ?>" action="<?php echo base_url('blog_system/comment_dislike') ?>">
                              <input type="hidden" name="id" value="<?php echo $cmp->id; ?>">
                              <button id="btn_comment_dislike_<?php echo $cmp->id; ?>" class="btn px-1 py-0 <?php if($$user_comment_dislike == TRUE) echo 'text-primary' ?>" target="<?php if($$user_comment_dislike == TRUE) echo 'undislike'; else echo 'dislike'; ?>" onclick="comment_dislike(<?php echo $cmp->id; ?>)" type="submit" name="submit"><i class="<?php if($$user_comment_dislike == TRUE) echo 'fas'; else echo 'far'; ?> fa-thumbs-down fa-sm fa-flip-horizontal"></i></button>
                            </form>
                            <form class="form-inline float-left" method="get" action="<?php echo base_url('blog_system/comment_dislike_show') ?>">
                              <input type="hidden" name="id" value="<?php echo $this->encrypt->encode($cmp->id) ?>">
                              <input type="hidden" name="ref" value="<?php echo base_url('blog/'.$data->name); ?>">
                              <?php $count_comment_dislike = 'comment_dislike_'.$cmp->id ?>
                              <button class="btn px-0 py-0" id="text_comment_dislike_<?php echo $cmp->id; ?>" type="submit"><?php echo $$count_comment_dislike ?></button>
                            </form>
                            <?php if(isset($userdata) && $cmp->id_member == $userdata['id_member']){ ?>
                              <div class="float-left">
                                &nbsp;·
                              </div>
                              <form class="form" id="comment_form_del_<?php echo $cmp->id; ?>" method="post" action="<?php echo base_url('blog_system/comment_delete_parent'); ?>">
                                <input type="hidden" name="id" value="<?php echo $cmp->id ?>">
                                <input type="hidden" name="id_article" value="<?php echo $data->id_article ?>">
                                <button class="btn btn-link px-1 py-0 btn-sm text-danger" id="comment_del_<?php echo $cmp->id; ?>" type="submit" name="submit" onclick="comment_del(<?php echo $cmp->id; ?>)">Hapus</button>
                              </form>
                            <?php } ?>
                          <?php }else{ ?>
                            <button id="" class="btn px-1 py-0 float-left disabled" data-toggle="tooltip" data-placement="top" title="Login untuk memberikan Like"><i class="far fa-thumbs-up fa-sm"></i></button>
                            <form class="form-inline float-left" method="get" action="<?php echo base_url('blog_system/comment_like_show') ?>">
                              <input type="hidden" name="id" value="<?php echo $this->encrypt->encode($cmp->id) ?>">
                              <input type="hidden" name="ref" value="<?php echo base_url('blog/'.$data->name); ?>">
                              <?php $count_comment_like = 'comment_like_'.$cmp->id ?>
                              <button class="btn px-0 py-0" id="text_comment_like_<?php echo $cmp->id; ?>" type="submit"><?php echo $$count_comment_like ?></button>
                            </form>
                            <div class="float-left">
                              &nbsp;·
                            </div>
                            <button id="" class="btn px-1 py-0 float-left disabled" data-toggle="tooltip" data-placement="top" title="Login untuk memberikan Dislike"><i class="far fa-thumbs-down fa-sm fa-flip-horizontal"></i></button>
                            <form class="form-inline float-left" method="get" action="<?php echo base_url('blog_system/comment_dislike_show') ?>">
                              <input type="hidden" name="id" value="<?php echo $this->encrypt->encode($cmp->id) ?>">
                              <input type="hidden" name="ref" value="<?php echo base_url('blog/'.$data->name); ?>">
                              <?php $count_comment_dislike = 'comment_dislike_'.$cmp->id ?>
                              <button class="btn px-0 py-0" id="text_comment_dislike_<?php echo $cmp->id; ?>" type="submit"><?php echo $$count_comment_dislike ?></button>
                            </form>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                <?php } ?>

                <div id="comment_<?php echo $cm->id; ?>" class="d-none" aria-label="hide">
                  <hr class="mt-2">
                  <div class="row mb-1">
                    <div class="col col-auto pr-2">
                      <i class="fas fa-user-circle fa-2x"></i>
                    </div>
                    <div class="col p-0">
                      <?php if(isset($userdata)){ ?>
                        <form class="form mr-3" id="comment_form_parent_<?php echo $cm->id; ?>" method="post" action="<?php echo base_url('blog_system/comment_add') ?>">
                          <div class="input-group input-group-sm">
                            <input type="hidden" name="date" value="<?php echo date('Y-m-d H:i:s') ?>">
                            <input type="hidden" name="id_article" value="<?php echo $data->id_article ?>">
                            <input type="hidden" name="id_parent" value="<?php echo $cm->id; ?>">
                            <input type="text" name="comment" id="comment_input_parent" class="form-control" placeholder="Tulis Komentar...">
                            <div class="input-group-append">
                              <button class="btn btn-primary" type="submit" onclick="comment_form_parent(<?php echo $cm->id; ?>)"><i class="far fa-paper-plane"></i></button>
                            </div>
                          </div>
                        </form>
                      <?php }else{ ?>
                        <form class="form mr-3" id="" method="" action="">
                          <div class="input-group input-group-sm">
                            <input type="text" name="comment" id="" class="form-control" placeholder="Login dahulu" disabled>
                            <div class="input-group-append">
                              <div class="btn btn-primary disabled"><i class="far fa-paper-plane"></i></div>
                            </div>
                          </div>
                        </form>
                      <?php } ?>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          <?php } ?>
        <?php }else{ ?>
          <p class="text-center text-muted font-italic m-0">- Jadilah yang pertama berkomentar -</p>
        <?php } ?>

      </div>
      <div class="card-footer">
        <div class="row">
          <div class="col col-auto pr-2">
            <i class="fas fa-user-circle fa-2x"></i>
          </div>
          <div class="col p-0">
            <?php if(isset($userdata)){ ?>
              <form class="form" id="comment_form" method="post" action="<?php echo base_url('blog_system/comment_add') ?>">
                <div class="input-group">
                  <input type="hidden" name="date" value="<?php echo date('Y-m-d H:i:s') ?>">
                  <input type="hidden" name="id_article" value="<?php echo $data->id_article ?>">
                  <input type="hidden" name="id_parent" value="0">
                  <input type="text" name="comment" class="form-control" placeholder="Tulis Komentar...">
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="submit"><i class="far fa-paper-plane"></i></button>
                  </div>
                </div>
              </form>
            <?php }else{ ?>
              <form class="form" id="" method="" action="">
                <div class="input-group">
                  <input type="text" name="comment" class="form-control" placeholder="Login untuk berkomentar" disabled>
                  <div class="input-group-append">
                    <div class="btn btn-primary disabled"><i class="far fa-paper-plane"></i></div>
                  </div>
                </div>
              </form>
            <?php } ?>
          </div>
        </div>
      </div>

    </div>
  </div>

</div>
<!-- /.container-fluid -->

<!-- WARNING Custom scripts for Index pages-->
<script src="<?php echo base_url('assets/frontend/js/page/blog.js') ?>"></script>

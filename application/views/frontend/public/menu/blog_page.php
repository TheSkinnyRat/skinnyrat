<!-- Page Heading -->
<div class="d-flex align-items-center justify-content-center">
  <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-blog"></i> Blog</h1>
</div>
<hr>
<form class="form-inline" id="" method="" action="">
  <div class="input-group input-group-sm w-100">
    <input type="text" name="comment" class="form-control" placeholder="search... <Coming Soon>" disabled>
    <div class="input-group-append">
      <div class="btn btn-primary disabled"><i class="fa fa-search"></i></div>
    </div>
  </div>
</form>
<hr>
<div class="row">
  <div class="col-sm">
    <div class="card shadow mb-2 mb-lg-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-plus-square"></i> Latest Article</h6>
      </div>
      <div class="card-body">
        <div class="card">
          <div id="article_new">
            <?php foreach ($article_new as $a_new) { ?>
              <a href="<?php echo base_url('b/'.$a_new->name) ?>" class="text-secondary  mb-1 ">
                <div class="row p-1 m-1 align-items-center card-body">
                  <div class="col-auto pr-0" style="min-height: 72px">
                    <img src="<?php if($a_new->img != '0') echo $a_new->img; else echo base_url('assets/frontend/img/favicon/ratblog.png'); ?>" alt="" class="rounded" width="72" height="72">
                  </div>
                  <div class="col">
                    <?php echo $a_new->judul ?>
                    <?php if (strtotime(date('Y-m-d')) - strtotime(date('Y-m-d',strtotime($a_new->date_created))) <= 259200) { ?>
                      <span class="badge badge-secondary">New</span>
                    <?php } ?>
                  </div>
                </div>
              </a>
              <hr class="m-0">
            <?php } ?>
          </div>
          <form id="article_new_form" class="text-center p-2" action="<?php echo base_url('api/show_more') ?>" method="get">
            <input type="hidden" name="type" value="article_new">
            <input type="hidden" name="last" value="5">
            <input type="hidden" name="limit" value="5">
            <button class="btn btn-white btn-sm w-100 h-100" type="submit" onclick="show_more('article_new')"><i class="fa fa-angle-down"></i> Lainnya</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm">
    <div class="card shadow mb-2 mb-lg-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><i class="far fa-newspaper"></i> Article</h6>
      </div>
      <div class="card-body">
        <div class="card">
          <div id="article_rand">
            <?php foreach ($article_rand as $a_rand) { ?>
              <a href="<?php echo base_url('b/'.$a_rand->name) ?>" class="text-secondary  mb-1 ">
                <div class="row p-1 m-1 align-items-center card-body">
                  <div class="col-auto pr-0" style="min-height: 72px">
                    <img src="<?php if($a_rand->img != '0') echo $a_rand->img; else echo base_url('assets/frontend/img/favicon/ratblog.png'); ?>" alt="" class="rounded" width="72" height="72">
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
          <form id="article_rand_form" class="text-center p-2" action="<?php echo base_url('api/show_more') ?>" method="get">
            <input type="hidden" name="type" value="article_rand">
            <input type="hidden" name="random_id" value="<?php echo $random_id ?>">
            <input type="hidden" name="last" value="5">
            <input type="hidden" name="limit" value="5">
            <button class="btn btn-white btn-sm w-100 h-100" type="submit" onclick="show_more('article_rand')"><i class="fa fa-angle-down"></i> Lainnya</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm">
    <div class="card shadow mb-2 mb-lg-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><i class="fab fa-hotjar"></i> Popular Article</h6>
      </div>
      <div class="card-body">
        <div class="card">
          <div id="article_popular">
            <?php foreach ($article_popular as $a_popular) { ?>
              <a href="<?php echo base_url('b/'.$a_popular->name) ?>" class="text-secondary  mb-1 ">
                <div class="row p-1 m-1 align-items-center card-body">
                  <div class="col-auto pr-0">
                    <img src="<?php if($a_popular->img != '0') echo $a_popular->img; else echo base_url('assets/frontend/img/favicon/ratblog.png'); ?>" alt="" class="rounded" width="72" height="72">
                  </div>
                  <div class="col">
                    <?php echo $a_popular->judul ?>
                    <?php if (strtotime(date('Y-m-d')) - strtotime(date('Y-m-d',strtotime($a_popular->date_created))) <= 259200) { ?>
                      <span class="badge badge-secondary">New</span>
                    <?php } ?>
                  </div>
                </div>
              </a>
              <hr class="m-0">
            <?php } ?>
          </div>
          <form id="article_popular_form" class="text-center p-2" action="<?php echo base_url('api/show_more') ?>" method="get">
            <input type="hidden" name="type" value="article_popular">
            <input type="hidden" name="last" value="5">
            <input type="hidden" name="limit" value="5">
            <button class="btn btn-white btn-sm w-100 h-100" type="submit" onclick="show_more('article_popular')"><i class="fa fa-angle-down"></i> Lainnya</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="col-sm">
    <div class="card shadow mb-2 mb-lg-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><i class="far fa-newspaper"></i> Article</h6>
      </div>
      <div class="card-body">
        <div class="card">
          <div id="article_rand">
            <?php foreach ($article_rand as $a_rand) { ?>
              <a href="<?php echo base_url('b/'.$a_rand->name) ?>" class="text-secondary  mb-1 ">
                <div class="row p-1 m-1 align-items-center card-body">
                  <div class="col-auto pr-0" style="min-height: 72px">
                    <img src="<?php if($a_rand->img != '0') echo $a_rand->img; else echo base_url('assets/frontend/img/favicon/ratblog.png'); ?>" alt="" class="rounded" width="72" height="72">
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
          <form id="article_rand_form" class="text-center p-2" action="<?php echo base_url('api/show_more') ?>" method="get">
            <input type="hidden" name="type" value="article_rand">
            <input type="hidden" name="random_id" value="<?php echo $random_id ?>">
            <input type="hidden" name="last" value="5">
            <input type="hidden" name="limit" value="5">
            <button class="btn btn-white btn-sm w-100 h-100" type="submit" onclick="show_more('article_rand')"><i class="fa fa-angle-down"></i> Lainnya</button>
          </form>
        </div>
      </div>
    </div>
  </div> -->
</div>

<!-- WARNING Custom scripts for Index pages-->
<script src="<?php echo base_url('assets/frontend/js/page/blog_page.js') ?>"></script>

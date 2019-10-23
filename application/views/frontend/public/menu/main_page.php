<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-2">
  <h1 class="h3 mb-0 text-gray-800">Home</h1>
</div>

<!-- Content Row -->
        <div class="d-none d-md-block">
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h5 font-weight-bold text-primary text-uppercase mb-0"><span id="jam">00</span> : <span id="menit">00</span> : <span id="detik">00</span></div>
                      <small class="mb-0 font-weight-bold text-gray-800"><div id="tanggal">Loading...</div></small>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Links Created</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><span class="count"><?php echo $count_tbl_shorten_url ?></span></div>
                        </div>
                        <!-- <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div> -->
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-link fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Articles Created</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><span class="count"><?php echo $count_tbl_article ?></span></div>
                        </div>
                        <!-- <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div> -->
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Members</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><span class="count"><?php echo $count_tbl_member ?></span></div>
                        </div>
                        <!-- <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div> -->
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="card shadow mb-2 mb-lg-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-home"></i> Welcome To Skinny Rat ^^</h6>
          </div>
          <div class="card-body">
            <div class="text-center">
              <div class="h4 font-weight-bold">FEATURE</div>
              <a href="<?php echo base_url('home/shorten_url_form') ?>" class="btn btn-sm btn-primary m-y1">SHORT LINK</a>
              <a href="<?php echo base_url('home/article_form') ?>" class="btn btn-sm btn-success my-1">ARTICLE</a>
              <a href="<?php echo base_url('home/wa_ctc') ?>" class="btn btn-sm btn-info my-1">WA CLICK TO CHAT</a>
              <a href="<?php echo base_url('home/wa_cws') ?>" class="btn btn-sm btn-secondary my-1">WA CHAT WITHOUT SAVE</a>
            </div>
            <hr>
            SHORT LINK yang anda buat dapat di akses di <code>www.nyrat.id/(custom URL anda)</code> <br>
            <hr>
            ARTICLE yang anda buat dapat di akses di <code>www.nyrat.id/blog/(URL article anda)</code> <br>
          </div>
        </div>

        <div class="row">
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
        </div>
        <div class="card shadow mb-2 mb-lg-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">SKNR APP</h6>
          </div>
          <div class="card-body">
            <center>
              <table>
                <tr>
                  <td><img src="https://i.ibb.co/qCjnXSL/rat.png" alt="" width="70" class="mr-2"></td>
                  <td>
                    <button id="app_cek" class="btn btn-info btn-sm" disabled><i class="fa fa-circle-notch fa-spin"></i> checking</button>
                    <button id="app_install" class="btn btn-success btn-sm d-none"><i class="fa fa-download"></i> Install App</button>
                    <button id="app_noinstall" class="btn btn-danger btn-sm d-none" disabled><i class="fa fa-times"></i> Tidak kompatibel dengan browser anda <br> / Aplikasi sudah diinstall</button>
                    <button id="app_ok" class="btn btn-success btn-sm d-none" disabled><i class="fa fa-check"></i> Installed</button>
                  </td>
                </tr>
              </table>
              <hr>
            </center>
            Compatible Browser:<br>
            - Google Chrome (67+) (Tested)<br>
            <br>
            Compatible Device:<br>
            - All device with compatible browser <br>
              (Android, Windows, IOS, ETC)

              <script id="app_script">
                var app_install = document.getElementById('app_install');
                var app_cek = document.getElementById('app_cek');
                var app_ok = document.getElementById('app_ok');
                let deferredPrompt;
                window.addEventListener('beforeinstallprompt', (e) => {
                  // Prevent Chrome 67 and earlier from automatically showing the prompt
                  e.preventDefault();
                  // Stash the event so it can be triggered later.
                  deferredPrompt = e;
                  // Update UI notify the user they can add to home screen
                  app_cek.classList.add('d-none');
                  app_install.classList.remove('d-none');
                  app_noinstall.classList.add('d-none');
                });
                app_install.addEventListener('click', (e) => {
                  if (deferredPrompt !== undefined) {
                    // Show the prompt
                  deferredPrompt.prompt();
                    // Wait for the user to respond to the prompt
                  deferredPrompt.userChoice
                    .then((choiceResult) => {
                      if (choiceResult.outcome === 'accepted') {
                        console.log('User accepted the A2HS prompt');
                      } else {
                        console.log('User dismissed the A2HS prompt');
                      }
                      deferredPrompt = null;
                    });
                  }else{
                    app_install.classList.add('d-none');
                    app_noinstall.classList.remove('d-none');
                  }
                });
                window.addEventListener('appinstalled', (evt) => {
                  app_cek.classList.add('d-none');
                  app_install.classList.add('d-none');
                  app_ok.classList.remove('d-none');
                });
              </script>
              <script>
                $('#app_script').ready(function(){
                  $('#app_cek').addClass('d-none');
                  $('#app_install').removeClass('d-none');
                });
              </script>
          </div>

        </div>

<!-- WARNING Custom scripts for Index pages-->
<script src="<?php echo base_url('assets/frontend/js/page/main_page.js') ?>"></script>

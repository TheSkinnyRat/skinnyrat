<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Home</h1>
  </div>

  <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h5 font-weight-bold text-primary text-uppercase mb-0"><span id="jam">00</span> : <span id="menit">00</span> : <span id="detik">00</span></div>
                      <div class="h6 mb-0 font-weight-bold text-gray-800"><div id="tanggal">Loading...</div></div>
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
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Link's Created</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><span class="count"><?php echo $count_tbl_shorten_url ?></span></div>
                        </div>
                        <div class="col">
                          <!-- <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div> -->
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-link fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

	<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">SKNR APP</h6>
    </div>
    <div class="card-body">
      <center>
        <table>
          <tr>
            <td><img src="https://i.ibb.co/qCjnXSL/rat.png" width="70" class="mr-2"></td>
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

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Welcome To Skinny Rat Website ^^</h6>
    </div>
    <div class="card-body">
      Website ini dapat anda gunakan untuk membuat <a href="<?php echo base_url('home/shorten_url_form') ?>">SHORT LINK</a>, <a href="<?php echo base_url('home/article_form') ?>">ARTICLE</a> dan <a href="<?php echo base_url('home/wa_ctc') ?>">WA CLICK TO CHAT</a> <hr>
      SHORT LINK yang anda buat dapat di akses di <code>www.sknr.tk/(custom URL anda)</code> <br>
      ARTICLE yang anda buat dapat di akses di <code>www.sknr.tk/blog/(URL article anda)</code> <br>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

<!-- WARNING Custom scripts for Index pages-->
<script src="<?php echo base_url('assets/frontend/js/page/main_page.js') ?>"></script>

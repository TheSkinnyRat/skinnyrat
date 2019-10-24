<!-- Page Heading -->
<div class="card">
  <div class="card-body p-1">
    <div class="d-flex justify-content-center">
      <!-- start safelink_1 Ads-->
      <ins class="adsbygoogle"
        style="display:inline-block; min-width:300px; max-width:1000px; width:100%; height:90px"
        data-ad-client="ca-pub-1587350440311353"
        data-ad-slot="7257460145"
        data-full-width-responsive="false"></ins>
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <script> (adsbygoogle = window.adsbygoogle || []).push({}); </script>
      <!-- end safelink_1 Ads-->
    </div>
  </div>
</div>

<hr>
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-link fa-sm"></i> Safelink - <?php echo $data_url->name; ?></h6>
  </div>
  <div class="card-body">
    <?php if ($data_url->password != '0') { ?>
      <div class="bg-light border text-center">masukkan <b>PASSWORD</b> di bawah untuk melanjutkan</div>
    <?php }else{ ?>
      <div class="bg-light border text-center">klik tombol <b>GET LINK</b> di bawah untuk melanjutkan</div>
    <?php } ?>
    <hr>
    <!-- start safelink_2 ads-->
    <ins class="adsbygoogle"
       style="display:block"
       data-ad-client="ca-pub-1587350440311353"
       data-ad-slot="9229851512"
       data-ad-format="auto"
       data-full-width-responsive="true"></ins>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script> (adsbygoogle = window.adsbygoogle || []).push({}); </script>
    <!-- end safelink_2 ads-->
    <hr>
    <div class="d-flex justify-content-center text-center">
      <div class="w-auto border p-5 bg-light">
        <?php if ($data_url->password != '0') { ?>
          <form class="form" method="post" id="pass_form" action="<?php echo base_url('home/pass_go') ?>">
            <input type="hidden" name="id_shorten_url" value="<?php echo $this->encrypt->encode($data_url->id_shorten_url) ?>">
            <label class="text-dark" for="password"><i class="fas fa-lock"></i> This Link is Secured</label>
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
        <?php }else{ ?>
          <a href="<?php echo $data_url->link ?>" class="btn btn-success">GET LINK</a>
        <?php } ?>
      </div>
    </div>
    <hr>
    <!-- start safelink_3 ads-->
    <ins class="adsbygoogle"
       style="display:block"
       data-ad-client="ca-pub-1587350440311353"
       data-ad-slot="2264987911"
       data-ad-format="auto"
       data-full-width-responsive="true"></ins>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script> (adsbygoogle = window.adsbygoogle || []).push({}); </script>
    <!-- end safelink_3 ads-->
    <hr>
    <?php if ($data_url->password != '0') { ?>
      <div class="bg-light border text-center">masukkan <b>PASSWORD</b> di atas untuk melanjutkan</div>
    <?php }else{ ?>
      <div class="bg-light border text-center">klik tombol <b>GET LINK</b> di atas untuk melanjutkan</div>
    <?php } ?>
  </div>
</div>

<!-- WARNING Custom scripts for Index pages-->
<script src="<?php echo base_url('assets/frontend/js/page/safelink.js') ?>"></script>

<!-- Begin Page Content -->
<div class="container-fluid">

  <div class="row justify-content-center">

    <div class="col-xl-5 col-lg-5 col-md-9">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-12">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Login</h1>
                </div>
                <form class="user" id="login_form" method="post" action="<?php if($ref != NULL) echo base_url('member/do_login?ref='.urlencode($ref)); else echo base_url('member/do_login'); ?>">
                  <div class="alert alert-success d-none"><strong>Success! </strong><span></span></div>
                  <div class="alert alert-warning d-none"><strong>On Process! </strong><span>Authenticating...</span></div>
                  <div class="alert alert-danger d-none"><strong>Failed! </strong><span></span></div>
                  <!--				-------------------------------------------------------------------------------------------------------->

                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="username" placeholder="Username" required>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" name="password" placeholder="Password" required>
                  </div>
                  <button type="submit" class="btn btn-primary btn-user btn-block">
                    Login
                  </button>
                </form>
                <hr>
                <!-- <div class="text-center">
                              <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div> -->
                <div class="text-center">
                  <a class="small" href="register">Tidak Punya Akun? Registrasi Sekarang!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>
<!-- /.container-fluid -->

<!-- Custom scripts for This pages-->
<script src="<?php echo base_url('assets/frontend/js/page/login.js') ?>"></script>

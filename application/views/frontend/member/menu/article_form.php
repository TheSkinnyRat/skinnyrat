<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Create Article</h1>
  </div>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Create Your Article</h6>
    </div>
    <div class="card-body">
      <form class="form-horizontal" method="POST" id="article_form" action="<?php if($data!=null) echo base_url('member_system/article_update'); else echo base_url('member_system/article_add'); ?>">
        <input type="hidden" name="id_article" value="<?php if($data!=null) echo $data->id_article; else echo " 0"; ?>">
        <input type="hidden" name="date_created" class="form-control" value="<?php echo date('Y-m-d H:i:s') ?>">
        <div class="panel-body">

          <div class="form-group">
            <label class="control-label">Pembuat</label>
            <div class="input-group">
              <input type="text" name="" class="form-control" value="<?php echo $userdata['name']; ?>" disabled>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label class="control-label">Article URL</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">sknr.tk/blog/</div>
                </div>
                <input type="text" name="name" class="form-control" value="<?php if($data!=null) echo $data->name; ?>" placeholder="Input Article URL" required>
              </div>
            </div>

            <div class="form-group col-md-6">
              <label class="control-label">Judul</label>
              <input type="text" name="judul" class="form-control" id="judul" value="<?php if($data!=null) echo $data->judul; ?>" placeholder="Input Judul Artikel" onchange="preview('judul')" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label">Sub Judul / Deskripsi</label>
            <input type="text" name="subjudul" class="form-control" id="subjudul" value="<?php if($data!=null) echo $data->subjudul; ?>" placeholder="Input Sub Judul Artikel" onchange="preview('subjudul')" required>
          </div>

          <div class="form-group">
            <label class="control-label">Konten</label>
            <div class="custom-control custom-switch pb-1"><input class="custom-control-input" type="checkbox" id="disable_editor" onclick="diseditor()"> <label class="custom-control-label" for="disable_editor">Disable Editor</label></div>
            <div id="editor_cktext" class="">
              <textarea name="konten" id="cktext" class="form-control ckeditor"><?php if($data!=null) echo $data->konten; ?></textarea>
            </div>
            <div id="editor_default" class="d-none">
              <textarea name="konten" id="konten" rows="10" class="form-control" onchange="preview('konten_default')" disabled><?php if($data!=null) echo $data->konten; ?></textarea>
            </div>
          </div>

          <div class="form-group m-0">
            <label class="control-label">
              <a class="btn btn-secondary btn-sm" data-toggle="collapse" href="#more" role="button" aria-expanded="<?php if(($data!=null && $data->img!='0') || ($data!=null && $data->password!='0') || ($data!=null && $data->private!='0')) echo 'true'; else echo 'false' ?>" aria-controls="more" id="show_more" onclick="show_more()">
                <i class="fa fa-angle-<?php if(($data!=null && $data->img!='0') || ($data!=null && $data->password!='0') || ($data!=null && $data->private!='0')) echo 'up'; else echo 'down' ?>"></i> Lainnya
              </a>
            </label>
          </div>

          <div class="collapse <?php if(($data!=null && $data->img!='0') || ($data!=null && $data->password!='0') || ($data!=null && $data->private!='0')) echo "show";?>" id="more">
            <div class="custom-control custom-switch pb-1"><input class="custom-control-input" type="checkbox" id="more_img" onclick="show_more_img()" <?php if($data!=null && $data->img!='0') echo "checked"; ?>>
              <label class="custom-control-label" for="more_img">Thumbnail / Image</label>
            </div>
            <div class="<?php if($data!=null && $data->img!='0') echo ""; else echo "d-none" ?>" id="more_img_input">
              <div class="form-group">
                <label class="control-label">Thumbnail URL</label>
                <input type="text" name="img" class="form-control" value="<?php if($data!=null && $data->img!='0') echo $data->img; else echo "0" ?>" placeholder="Input link dengan http:// atau https://" required>
              </div>
            </div>

            <div class="custom-control custom-switch pb-1"><input class="custom-control-input" type="checkbox" id="more_pass" onclick="show_more_pass()" <?php if($data!=null && $data->password!='0') echo "checked"; ?>>
              <label class="custom-control-label" for="more_pass">Gunakan Password</label>
            </div>
            <div class="<?php if($data!=null && $data->password!='0') echo ""; else echo "d-none" ?>" id="more_pass_input">
              <div class="form-group">
                <label class="control-label">Password</label>
                <input type="password" name="password" class="form-control" value="<?php if($data!=null && $data->password!='0') echo $data->password; else echo "0" ?>" placeholder="Input Password" required>
              </div>
            </div>

            <div class="custom-control custom-switch pb-1"><input class="custom-control-input" type="checkbox" id="more_private" onclick="show_more_private()" <?php if($data!=null && $data->private!='0') echo "checked"; ?>>
              <label class="custom-control-label" for="more_private">Private</label>
            </div>
            <div class="d-none" id="more_private_input">
              <div class="form-group">
                <label class="control-label">Private</label>
                <input type="number" name="private" class="form-control" value="0" placeholder="Input 1 or 0" required>
              </div>
            </div>
          </div>

          <small class="text-muted">
            Artikel yang anda buat dapat di akses di <code>www.sknr.tk/blog/(url artikel anda)</code>
          </small>
        </div>
        <div class="panel-footer text-right">
          <?php if($data!=null){ ?>
            <input type="checkbox" name="save_here" value="1" id="save_here">
            <label for="save_here">Don't refresh</label>
          <?php } ?>
          <button class="btn btn-default" type="reset">Reset</button>
          <button class="btn btn-primary" type="submit">Simpan</button>
          <hr>
          <div class="text-center">
            <div class="alert alert-success d-none"><strong>Berhasil! </strong><span></span></div>
            <div class="alert alert-warning d-none"><strong><i class="fas fa-circle-notch fa-spin"></i> Memproses! </strong><span>Mohon tunggu, system sedang bekerja.</span></div>
            <div class="alert alert-danger d-none"><strong>Gagal! </strong><span></span></div>
          </div>
        </div>
      </form>

    </div>
  </div>

  <fieldset class="border-top border-dark p-0">
    <legend class="w-auto p-2 m-0 text-center"><small>Preview</small></legend>
  </fieldset>
  <div class="card mb-4">
    <div class="card-header py-3">
      <div class="row">
        <div class="col w-25">
          <div class="m-0">
            <div class="font-weight-bold text-primary">
              By: <?php if(isset($userdata)) echo $userdata['name']; else echo 'Unknown'; ?>
            </div>
            <code class="text-muted text-primary">
              <?php echo date("d F Y H:i") ?>
            </code>
          </div>
        </div>
        <div class="col">
          <div class="float-right ml-1 mb-1">
            <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" disabled>
              <i class="fa fa-share-alt"></i>
            </button>
          </div>
          <div class="float-right">
            <button class="btn btn-info btn-sm" disabled><i class="fa fa-edit"></i></button>
          </div>
        </div>
      </div>
    </div>

    <div class="card-body" id="preview_konten">
      <?php if ($data!=null) echo $data->konten; else echo "—"?>
      <!-- <hr class="mb-0"> -->
    </div>

    <div class="card-footer">
      <div class="row">
        <div class="col">
            <button class="btn btn-light px-1 py-0 disabled float-left" disabled><i class="far fa-thumbs-up fa-sm"></i></button>
            <form class="form-inline float-left">
              <button class="btn px-0 py-0" id="text_article_like" disabled>0</button>
            </form>
            <div class="float-left">
              &nbsp;·
            </div>
            <button class="btn btn-light px-1 py-0 disabled float-left" disabled><i class="far fa-thumbs-down fa-sm fa-flip-horizontal"></i></button>
            <form class="form-inline float-left">
              <button class="btn px-0 py-0" id="text_article_dislike" disabled>0</button>
            </form>
        </div>
        <div class="col text-right">
          <i class="fas fa-eye fa-sm"></i>
          0x Dilihat
        </div>
      </div>
    </div>

  </div>

</div>
<!-- /.container-fluid -->

<!-- WARNING Custom scripts for Index pages-->
<script src="<?php echo base_url('assets/frontend/js/page/article_form.js') ?>"></script>

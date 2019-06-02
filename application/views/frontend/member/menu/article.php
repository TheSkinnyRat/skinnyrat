<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Data Article</h1>
  <p class="mb-4">Menampilkan Data Yang Dibuat Oleh - <?php echo $userdata['name']; ?></a>.</p>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Article Yang Tersedia</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered dt-responsive" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Judul</th>
              <th>Sub Judul</th>
              <th>Konten</th>
              <!-- <th>Password</th> -->
              <th>Date Created</th>
              <th>Click</th>
              <th>Action</th>
            </tr>
          </thead>
          <!-- <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Link</th>
                      <th>Date Created</th>
                    </tr>
                  </tfoot> -->
          <tbody>
            <?php foreach ($article as $d) { ?>
            <tr>
              <td>
                <?php echo $d->id_article ?>
              </td>
              <td>
                <?php echo $d->name ?>
              </td>
              <td>
                <?php echo $d->judul ?>
              </td>
              <td>
                <?php echo $d->subjudul ?>
              </td>
              <td>
                <a href="<?php echo base_url('blog/'.$d->name); ?>">Lihat Konten</a>
              </td>
              <td>
                <?php echo $d->date_created ?>
              </td>
              <td>
                <?php echo $d->click ?>
              </td>
              <td>
                <input type="text" class="d-none" id="url_<?php echo $d->name; ?>" value="<?php echo base_url('blog/'.$d->name); ?>">

                <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Action
                </button>
                <div class="dropdown-menu">
                  <button class="dropdown-item" onclick="copy('<?php echo $d->name; ?>')" id="cp_<?php echo $d->name; ?>" ><i class="far fa-copy"></i> Copy</button>
                  <a href="https://wa.me?text=<?php echo base_url('blog/'.$d->name) ?>" class="dropdown-item" target="_blank"><i class="fab fa-whatsapp"></i> Share</a>
                  <a href="<?php echo base_url('blog/'.$d->name) ?>" class="dropdown-item" target="_blank"><i class="fa fa-external-link-alt"></i> Open</a>
                  <div class="dropdown-divider"></div>
                  <form action="<?php echo base_url('member_system/article_form') ?>" method="post">
                    <input type="hidden" name="id_article" value="<?php echo $d->id_article ?>">
                    <button class="dropdown-item" type="submit"><i class="fa fa-edit"></i> Edit</button>
                  </form>
                  <form action="<?php echo base_url('member_system/article_delete') ?>" method="post">
                    <input type="hidden" name="id_article" value="<?php echo $d->id_article ?>">
                    <button class="dropdown-item" type="submit"><i class="fa fa-trash-alt"></i> Delete</button>
                  </form>
                </div>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

<!-- WARNING Custom scripts for Index pages-->
<script src="<?php echo base_url('assets/frontend/js/page/article.js') ?>"></script>

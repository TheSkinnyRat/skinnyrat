<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Data Article</h1>
  <p class="mb-4">Menampilkan Data Article Yang Dibuat Tanpa Login</a>.</p>

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
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

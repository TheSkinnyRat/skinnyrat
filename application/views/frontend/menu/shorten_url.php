
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Data Link Tersedia</h1>
          <p class="mb-4">Data Link</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Link Yang Tersedia</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Link</th>
                      <th>Date Created</th>
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
                    <?php foreach ($shorten_url as $d) { ?>
                      <tr>
                        <td><?php echo $d->id ?></td>
                        <td><?php echo $d->name ?></td>
                        <td><?php echo $d->link ?></td>
                        <td><?php echo $d->date_created ?></td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

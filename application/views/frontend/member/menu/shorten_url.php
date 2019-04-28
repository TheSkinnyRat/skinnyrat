<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Data Link Tersedia</h1>
  <p class="mb-4">Menampilkan Data Yang Dibuat Oleh - <?php echo $userdata['name']; ?></a>.</p>

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
              <!-- <th>Password</th> -->
              <th>Date Created</th>
              <th>Click</th>
              <th>Edit</th>
              <th>Delete</th>
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
              <td>
                <?php echo $d->id_shorten_url ?>
              </td>
              <td>
                <?php echo $d->name ?>
              </td>
              <td>
                <?php if ($d->password != '0') { ?>
                <span class="text-info font-italic">Password encrypted</span>
                <?php }else{
                            echo $d->link;
                          } ?>
              </td>
              <!-- <td>
                          <?php if ($d->password != '0') { ?>
                            <span class="text-success">YES</span>
                          <?php }else{ ?>
                            <span class="text-bold">NO</span>
                          <?php } ?>
                        </td> -->
              <td>
                <?php echo $d->date_created ?>
              </td>
              <td>
                <?php echo $d->click ?>
              </td>
              <td class="text-center">
                <form action="<?php echo base_url('member_system/shorten_url_form') ?>" method="post">
                  <input type="hidden" name="id_shorten_url" value="<?php echo $d->id_shorten_url ?>">
                  <button class="btn btn-info btn-sm btn-edit" type="submit" data-original-title="Ubah" data-placement="left" data-toggle="tooltip"><i class="fa fa-edit"></i></button>
                </form>
              </td>
              <td class="text-center">
                <form action="<?php echo base_url('member_system/shorten_url_delete') ?>" method="post">
                  <input type="hidden" name="id_shorten_url" value="<?php echo $d->id_shorten_url ?>">
                  <button class="btn btn-danger btn-sm btn-delete" type="submit" data-original-title="Hapus" data-placement="left" data-toggle="tooltip"><i class="fa fa-trash-alt"></i></button>
                </form>
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

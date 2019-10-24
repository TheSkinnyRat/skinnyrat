<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Link Tersedia</h1>
<p class="mb-2">Menampilkan Data Yang Dibuat Oleh - <?php echo $userdata['name']; ?></a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Link Yang Tersedia</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered dt-responsive" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>Link</th>
            <!-- <th>Password</th> -->
            <th>Date Created</th>
            <th>Click</th>
            <th>Safelink</th>
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
          <?php $no = 1 ?>
          <?php foreach ($shorten_url as $d) { ?>
          <tr>
            <td>
              <?php echo $no++ ?>
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
            <td>
              <?php if($d->safelink != '0') echo "<span class='text-success'>YES</span>"; else echo "<span class='text-danger'>NO</span>"; ?>
            </td>
            <input type="text" class="d-none" id="url_<?php echo $d->name; ?>" value="<?php echo base_url($d->name); ?>">
            <td>
              <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Action
              </button>
              <div class="dropdown-menu">
                <button class="dropdown-item" onclick="copy('<?php echo $d->name; ?>')" id="cp_<?php echo $d->name; ?>" ><i class="far fa-copy"></i> Copy</button>
                <a href="https://wa.me?text=<?php echo base_url($d->name) ?>" class="dropdown-item" target="_blank"><i class="fab fa-whatsapp"></i> Share</a>
                <a href="<?php echo base_url($d->name) ?>" class="dropdown-item" target="_blank"><i class="fa fa-external-link-alt"></i> Open</a>
                <div class="dropdown-divider"></div>
                <form class="" action="<?php echo base_url('member_system/shorten_url_form') ?>" method="get">
                  <input type="hidden" name="id" value="<?php echo $this->encrypt->encode($d->id_shorten_url) ?>">
                  <button class="dropdown-item " type="submit"><i class="fa fa-edit"></i> Edit</button>
                </form>
                <form class="" action="<?php echo base_url('member_system/shorten_url_delete') ?>" method="get">
                  <input type="hidden" name="id" value="<?php echo $this->encrypt->encode($d->id_shorten_url) ?>">
                  <button class="dropdown-item " type="submit"><i class="fa fa-trash-alt"></i> Delete</button>
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

<!-- WARNING Custom scripts for Index pages-->
<script src="<?php echo base_url('assets/frontend/js/page/shorten_url.js') ?>"></script>

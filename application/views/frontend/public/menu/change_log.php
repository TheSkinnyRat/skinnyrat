<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-2">
  <h1 class="h3 mb-0 text-gray-800">Change Log</h1>
</div>

<?php foreach ($data as $d1) { ?>

  <div class="card shadow mb-2">
    <!-- Card Header - Accordion -->
    <a href="#log<?php echo $d1->id; ?>" class="d-block card-header py-3 <?php if($d1->expand == '0') echo 'collapsed' ?>" data-toggle="collapse" role="button" aria-expanded="<?php if($d1->expand == '0') echo 'false'; else echo 'true'; ?>" aria-controls="log<?php echo $d1->id; ?>">
      <h6 class="m-0 font-weight-bold text-primary"><?php echo $d1->judul ?></h6>
    </a>
    <!-- Card Content - Collapse -->
    <div class="collapse <?php if($d1->expand == '1') echo 'show' ?>" id="log<?php echo $d1->id; ?>">
      <div class="card-body">
        <?php echo $d1->konten ?>
      </div>
    </div>
  </div>

<?php } ?>

<!-- WARNING Custom scripts for Index pages-->

<?php header('Content-type: application/xml; charset="ISO-8859-1"',true); ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
     <loc><?php echo base_url();?></loc>
     <priority>1.0</priority>
  </url>
	<url>
     <loc><?php echo base_url('blog');?></loc>
     <priority>0.8</priority>
  </url>
	<url>
     <loc><?php echo base_url('home/shorten_url_form');?></loc>
     <priority>0.8</priority>
  </url>
	<url>
     <loc><?php echo base_url('home/article_form');?></loc>
     <priority>0.8</priority>
  </url>
  <url>
     <loc><?php echo base_url('home/wa_ctc');?></loc>
     <priority>0.8</priority>
  </url>
  <url>
     <loc><?php echo base_url('home/wa_cws');?></loc>
     <priority>0.8</priority>
  </url>

  <?php foreach($data as $d) { ?>
  <url>
     <loc><?php echo base_url('blog/'.$d->name); ?></loc>
     <priority>0.5</priority>
     <lastmod><?php echo $d->date_created; ?></lastmod>
  </url>
  <?php } ?>

</urlset>

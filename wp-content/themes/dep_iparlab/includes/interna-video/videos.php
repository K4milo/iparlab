<?php
//
/*

  videos (field_repeater)

*/
$videos = get_field('videos');
?>

<section class="block section_col_4">
  <div class="block-titulo">
    <h3>a continuación</h3>
    <div class="line"></div>
  </div>

  <div class="block-gratis row">
    <?php
    if($videos_gratis):
      while(have_rows('videos_gratis')): the_row();
        $imagen = get_sub_field('imagen');
        $titulo = get_sub_field('titulo');

      ?>
      <div class="block-gratis-item col-lg-3 col-md-6 col-xs-12">
        <a href="<?php echo get_site_url(); ?>/aula-gratis">
          <div class="hover-video"></div>
          <img src="<?php echo $imagen; ?>" alt="">
        </a>
        <h3><?php echo $titulo; ?></h3>
      </div>
      <?php
        endwhile;
      endif;
    ?>
  </div>

  





</section> 

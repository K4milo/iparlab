<?php
// Videos gratis

?>

<?php

$args = array (
  'post_type' => 'videos',
  'posts_per_page' => 10,
  'tax_query' => array(
      array(
        'taxonomy' => 'tipo-video',
        'field'    => 'slug',
        'terms'    => 'gratis',
      )
    )
  );

$query = new WP_Query($args);

?>
<section id="tipo-contenido" class="videos section_col_4">
  <?php

  if($query->have_posts()):
    while($query->have_posts()): $query->the_post();

    /* Variables of post
      id_video
    */

    $id_video = get_field('id_video');

  ?>

  <div class="row block-gratis col-lg-3 col-md-6 col-xs-12">
    <article class="videos-block block-gratis-item ">
      <a href="<?php the_permalink() ?>">
        <div class="hover-video"></div>
        <?php the_post_thumbnail();?>
        <!-- poner filtro de play como estan en el home-->
        <!--<?php
         echo do_shortcode('[vdo id="' . $id_video . '"]'); ?>  Este es el codigo para traer el video de vdochiper-->
      </a>
      <h3><?php the_title();?></h3>
    </article>
  </div>

  <?php endwhile;?>
</section>

<?php endif;

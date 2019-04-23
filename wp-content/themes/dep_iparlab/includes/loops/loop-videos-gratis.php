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
<section id="tipo-contenido" class="videos">
  <?php

  if($query->have_posts()):
    while($query->have_posts()): $query->the_post();

    /* Variables of post
      id_video
    */

    $id_video = get_field('id_video');

  ?>

  <article class="video-block">
    <?php
    echo do_shortcode('[vdo id="' . $id_video . '"]'); ?>
      <h2><a href="<?php the_permalink() ?>"><?php the_title();?></a></h2>
  </article>

  <?php endwhile;?>
</section>

<?php endif;

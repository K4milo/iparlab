<?php
// investigacion

/*
  Variables
  primer_icono
  texto_principal
  segundo_icono


*/




?>

<?php

$args = array (
  'post_type' => 'videos',
  'posts_per_page' => 16);

$query = new WP_Query($args);

?>
<section id="tipo-contenido" class="videos">
  <?php

  if($query->have_posts()):
    while($query->have_posts()): $query->the_post();

    /* Variables of post
      icono_color
      icono_blanco
      archivo (field_repeater)
    */

    $id_video = get_field('id_video');

  ?>

  <article class="videos-block">
    <?php the_post_thumbnail();?><!-- poner filtro de play como estan en el home-->
    <!--<?php
     echo do_shortcode('[vdo id="' . $id_video . '"]'); ?>  Este es el codigo para traer el video de vdochiper-->
      <h2><a href="<?php the_permalink() ?>"><?php the_title();?></a></h2>
  </article>

  <?php endwhile;?>
</section>

<?php endif;

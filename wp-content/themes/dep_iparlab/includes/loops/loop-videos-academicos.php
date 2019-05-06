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
<section id="tipo-contenido" class="videos section_col_4">
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
  <div class="row block-gratis col-lg-3 col-md-6 col-xs-12">
    <article class="videos-block block-gratis-item ">
      <a href="javascript:void(0);" data-fancybox data-src="#hidden-content">
      <!-- <a href="<?php the_permalink() ?>">  activar esta etiqueta si quieren ir a la interna del video--> 
        <div class="hover-video"></div>
        <?php the_post_thumbnail();?>
        <!-- poner filtro de play como estan en el home-->
        
      </a>
      <h3><?php the_title();?></h3>
    </article>
  </div>

  <?php endwhile;?>


  <div style="display: none;" id="hidden-content"><!--  si no activaron la etiqueta este es el div para sacar los popups--> 
    <?php echo do_shortcode('[vdo id="' . $id_video . '"]'); ?>
  </div>
</section>






<!-- como no pude acceder a la interna de los videos aqui le dejo la estructura del video 100% y la calificaciones falta el loops de video que lo puede copiar de otro lado-->
<section id="tipo-contenido" class="videos row section_col_4 nomargin">
  <div class="video_slider">
    <?php echo do_shortcode('[vdo id="' . $id_video . '"]'); ?>
  </div>
</section>



<section class="block section_col_4">


  <div class="row">
    <div class="section-titulo-interna col-lg-5 col-md-6 col-xs-12">
      <!-- <h2><?php //echo $texto;?></h2> -->
      <h2>
        este mes
      </h2>
      <br>
      <h3>Lorem ipsum dolor sit amet, consectetur</h3>
    </div>
    <div class=" section-titulo-interna right col-lg-5 col-md-6 col-xs-12">
      <h2>calificanos</h2>

      <div class="row-start">
        <fieldset class="rate">
          <input id="rate1-star5" type="radio" name="rate1" value="5" />
          <label for="rate1-star5" title="Excellent">5</label>

          <input id="rate1-star4" type="radio" name="rate1" value="4" />
          <label for="rate1-star4" title="Good">4</label>

          <input id="rate1-star3" type="radio" name="rate1" value="3" />
          <label for="rate1-star3" title="Satisfactory">3</label>

          <input id="rate1-star2" type="radio" name="rate1" value="2" />
          <label for="rate1-star2" title="Bad">2</label>

          <input id="rate1-star1" type="radio" name="rate1" value="1" />
          <label for="rate1-star1" title="Very bad">1</label>
        </fieldset>
      </div>
    </div>

  </div>

</section> 





<?php endif;

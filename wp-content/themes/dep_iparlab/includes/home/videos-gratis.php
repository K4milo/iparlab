<?php
//
/*

  videos_gratis(field_repeater)

*/
$videos_gratis= get_field('videos_gratis');
?>

<section class="block section_col_4">
    <div class="block-titulo">
      <h3>videos gratis</h3>
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
          <a href="<?php echo get_site_url(); ?>/aula-gratis"><img src="<?php echo $imagen; ?>" alt=""></a>
          <h3><?php echo $titulo; ?></h3>
        </div>
        <?php
          endwhile;
        endif;
      ?>
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
        <a href="<?php echo get_site_url(); ?>/aula-gratis"><img src="<?php echo $imagen; ?>" alt=""></a>
        <h3><?php echo $titulo; ?></h3>
      </div>
      <?php
        endwhile;
      endif;
    ?>
  </div>

  





</section>  
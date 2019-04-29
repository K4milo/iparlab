<?php
//
/*

  testimonios (field_repeater)

*/
$testimonios = get_field('testimonios');
?>

<section id="block" class=" section_col_4">

  <div class="block-titulo">
    <h3>videos gratis</h3>
    <div class="line"></div>
  </div>

  <div class="block-testimonio row">
      <?php
      if($testimonios):
        while(have_rows('testimonios')): the_row();
          $imagen = get_sub_field('imagen');
          $titulo = get_sub_field('titulo');
          $testimonio = get_sub_field('testimonio');
        ?>
        <div class="block-testimonio-item col-lg-6 col-md-6 col-xs-12">
          <div class="block-testimonio-img col-lg-6 col-md-6 col-xs-12 nopadding">
            <img src="<?php echo $imagen; ?>" alt="">
          </div>
          <div class="block-testimonio-content col-lg-6 col-md-6 col-xs-12 nopadding">
            <h2><?php echo $titulo; ?></h2>
            <p><?php echo $testimonio; ?></p>
          </div>
        </div>

        
        <?php
          endwhile;
        endif;
      ?>
    </div>
</section>

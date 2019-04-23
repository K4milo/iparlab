<?php
//
/*

  testimonios (field_repeater)

*/
$testimonios = get_field('testimonios');
?>

<section id="block" class="">

  <div class="block-testimonio">
      <?php
      if($testimonios):
        while(have_rows('testimonios')): the_row();
          $imagen = get_sub_field('imagen');
          $titulo = get_sub_field('titulo');
          $testimonio = get_sub_field('testimonio');
        ?>
        <div class="block-testimonio-img">
          <img src="<?php echo $imagen; ?>" alt="">
        </div>
        <div class="block-testimonio-content">
          <h2><?php echo $titulo; ?></h2>
          <p><?php echo $testimonio; ?></p>
        </div>
        <?php
          endwhile;
        endif;
      ?>
    </div>
</section>

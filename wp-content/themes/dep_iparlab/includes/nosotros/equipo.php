<?php
//
/*

  equipo (field_repeater)

*/
$equipo = get_field('equipo');
?>

<section id="block" class="">

  <div class="block-equipo row">
      <?php
      if($equipo):
        while(have_rows('equipo')): the_row();
          $foto = get_sub_field('foto');
          $nombre = get_sub_field('nombre');
          $descripcion = get_sub_field('descripcion');

        ?>
        <div class="col-lg-8 col-md-8 col-xs-12">
          <div class="block-equipo-img col-lg-6 col-md-6 col-xs-12">
            <img src="<?php echo $foto; ?>" alt="">
          </div>
          <div class="block-testimonio-content col-lg-6 col-md-6 col-xs-12">
            <h2><?php echo $nombre; ?></h2>
            <h3>Perfil/Cargo</h3>
            <p><?php echo $descripcion; ?></p>
            <a data-fancybox href="https://www.youtube.com/watch?v=q8ZzKsDbg3k&">ver video</a>
          </div>
        </div> 
        
        <?php
          endwhile;
        endif;
      ?>
    </div>
    
</section>

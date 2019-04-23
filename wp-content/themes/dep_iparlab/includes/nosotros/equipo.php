<?php
//
/*

  equipo (field_repeater)

*/
$equipo = get_field('equipo');
?>

<section id="block" class="">

  <div class="block-equipo">
      <?php
      if($equipo):
        while(have_rows('equipo')): the_row();
          $foto = get_sub_field('foto');
          $nombre = get_sub_field('nombre');
          $descripcion = get_sub_field('descripcion');

        ?>
        <div class="block-equipo-img">
          <img src="<?php echo $foto; ?>" alt="">
        </div>
        <div class="block-testimonio-content">
          <h2><?php echo $nombre; ?></h2>
          <h2>Perfil/Cargo</h2>
          <p><?php echo $descripcion; ?></p>
          <a href="#">ver video</a>
        </div>
        <?php
          endwhile;
        endif;
      ?>
    </div>
</section>

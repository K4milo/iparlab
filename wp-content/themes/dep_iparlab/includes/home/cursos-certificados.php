<?php
//
/*

  cursos_certificados(field_repeater)

*/
$cursos_certificados= get_field('cursos_certificados');
?>

<section class="block">
	  <div class="block-titulo">
    <h3>cursos certificados</h3>
  </div>
  <div class="block-gratis">
      <?php
      if($cursos_certificados):
        while(have_rows('cursos_certificados')): the_row();
          $imagen = get_sub_field('imagen');
          $titulo = get_sub_field('titulo');

        ?>
        <div class="block-gratis-item">
          <a href="<?php echo get_site_url(); ?>/aula-gratis"><img src="<?php echo $imagen; ?>" alt=""></a>
          <h3><?php echo $titulo; ?></h3>
        </div>
        <?php
          endwhile;
        endif;
      ?>
    </div>
</section>

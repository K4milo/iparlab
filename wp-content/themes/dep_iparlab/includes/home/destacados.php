<?php
//
/*

  slider_destacados (field_repeater)

*/
$slider_destacados = get_field('slider_destacados');
?>

<section class="video-free ">

  <div class="block-titulo">
    <h3>cursos certificados</h3>
    <div class="line"></div>
  </div>

	<div id="carousel-example-generic22" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic2" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic2" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <?php
    $c = 0;
       $class = '';
     if($slider_destacados):
        while(have_rows('slider_destacados')): the_row();
	  $c++;
	     $imagen = get_sub_field('imagen');
          $texto = get_sub_field('texto');

        if ( $c == 1 ) $class .= ' active';
                    else $class = '';
      ?>
        <div class="item <?php echo $class; ?>">
          <img src="<?php echo $imagen; ?>" alt="" width="100%" height="auto">
          <div class="carousel-caption section-destacados">
            <!-- <h2><?php //echo $texto;?></h2> -->
            <h2>
              este mes
            </h2>
            <br>
            <h3>Lorem ipsum dolor sit amet, consectetur</h3>
          </div>
        </div>
      <?php
        endwhile;
      endif;
    ?>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic2" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic2" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	
</section>

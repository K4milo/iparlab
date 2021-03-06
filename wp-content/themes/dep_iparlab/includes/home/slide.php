<?php
//
/*

  slider_home (field_repeater)

*/
$slider_home = get_field('slider_home');
?>

<section id="slider1" class="row">

	<div id="carousel-example-generic" class="carousel slide col-xs-12" data-ride="carousel">
  <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <?php
      $c = 0;
         $class = '';
      if($slider_home):
        while(have_rows('slider_home')): the_row();
  	  $c++;
  	  $imagen = get_sub_field('imagen');

          if ( $c == 1 ) $class .= ' active';
                      else $class = '';
        ?>
          <div class="item <?php echo $class; ?>">
          <img src="<?php echo $imagen; ?>" alt="">
          <div class="carousel-caption">
            
          </div>
        </div>
        <?php
          endwhile;
        endif;
      ?>
      
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
</section>
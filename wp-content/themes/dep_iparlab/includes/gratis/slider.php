<?php
//
/*

  slider_videos_gratis (field_repeater)

*/
$slider_videos = get_field('slider_videos_gratis');
?>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

    <?php
    $c = 0;
       $class = '';
    if($slider_videos):
      while(have_rows('slider_videos_gratis')): the_row();
        $imagen = get_sub_field('imagen');
        $texto = get_sub_field('texto');
  $c++;
        if ( $c == 1 ) $class .= ' active';
                    else $class = '';
      ?>
        <div class="item <?php echo $class; ?>">
        <img src="<?php echo $imagen; ?>" alt="">
        <div class="carousel-caption section-destacados">
          <h2><?php echo $texto; ?></h2>
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
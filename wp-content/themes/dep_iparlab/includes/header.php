<!DOCTYPE html>
<html class="no-js">
<head>
	<title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="icon" type="image/png" href="<?php bloginfo('template_url')?>/favicon.png" />
	<?php wp_head(); ?>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles/main.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
  <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
</head>

<body <?php body_class(); ?>>

<!--[if lt IE 8]>
<div class="alert alert-warning">
	You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->

<!-- <nav class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    <a class="navbar-brand" href="<?php echo home_url('/'); ?>"> <img src="https://depura-creatividad.com/iparlab/wp-content/uploads/2019/02/logo-iparlab-e1550680594358.png" alt="" width="120px" height="auto"> </a>
    </div>
    <div class="collapse navbar-collapse" id="navbar">
      <?php
            wp_nav_menu( array(
                'theme_location'    => 'navbar-left',
                'depth'             => 2,
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
    </div>

  </div>
</nav> -->


<header>
  <div class="panel-container">
      <div id="nav-icon" class="">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
      </div>
      <nav>
            <div class="item-yellow">Menú</div>
            <?php
            wp_nav_menu( array(
                'theme_location'    => 'navbar-left',
                'depth'             => 2,
                'menu_class'        => '',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>         
      </nav>
      <div class="logo">
        <a href="<?php echo home_url('/'); ?>">
          <img src="https://depura-creatividad.com/iparlab/wp-content/uploads/2019/02/logo-iparlab-e1550680594358.png" alt="">
        </a>
      </div>
      <!-- pueden comentar este menu cuando quieran -->
      <ul class="lateral_menu">
        <li class=""><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri(); ?>/images/avatar.png" alt=""></a></li>
        <li class=""><a href="javascript:void(0);">DAVID</a></li>
      </ul>
      <!-- pueden comentar este menu cuando quieran -->
  </div>
</header>

<!--
Site Title
==========
If you are displaying your site title in the "brand" link in the Bootstrap navbar,
then you probably don't require a site title. Alternatively you can use the example below.
See also the accompanying CSS example in css/bst.css .

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h1 id="site-title">
      	<a class="text-muted" href="<?php //echo home_url('/'); ?>" title="<?php //echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php //bloginfo('name'); ?></a>
      </h1>
    </div>
  </div>
</div>
-->
<div class="container-fluid nopadding ">
  <!-- si esta en login normal agregar la clase acceder como esta ahora -->

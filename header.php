<!DOCTYPE html>

<html <?php language_attributes(); ?> data-ng-app>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, minimum-scale = 1, maximum-scale=1" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css">		
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js"></script>

    <script type='text/javascript' src="<?php bloginfo('stylesheet_directory'); ?>/js/menu_jquery.js"></script>    
	<script type='text/javascript' src='<?php bloginfo('stylesheet_directory'); ?>/js/ie.js?ver=1.15'></script>
	<script type='text/javascript' src='<?php bloginfo('stylesheet_directory'); ?>/js/tinynav.min.js?ver=1.15'></script>
	<script type='text/javascript' src='<?php bloginfo('stylesheet_directory'); ?>/js/jquery.validate.min.js?ver=1.15'></script>
	<script type='text/javascript' src='<?php bloginfo('stylesheet_directory'); ?>/js/jquery.isotope.min.js?ver=1.15'></script>
	<script type='text/javascript' src='<?php bloginfo('stylesheet_directory'); ?>/js/jquery-ui-1.10.1.custom.min.js?ver=1.15'></script>
	<script type='text/javascript' src='<?php bloginfo('stylesheet_directory'); ?>/js/custom.js?ver=1.15'></script>



<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" type="image/x-icon" />			

	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!--[if lt IE 9]>
	    <script src="bower_components/html5shiv/dist/html5shiv.js"></script>
	<![endif]-->


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-15459661-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-55090c21315da8d3" async="async"></script>


	<?php wp_head(); ?>
</head>

<body>

<div  id="page-wrap">

<header>
	<div class="banner">
      <?php //if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow(); } ?>  
	<?php 
	if ( function_exists( 'soliloquy' ) ) { soliloquy( '285' ); } 
	if ( function_exists( 'soliloquy' ) ) { soliloquy( 'canaljesustv', 'slug' ); }
	 ?>
	</div>
	<nav><?php  showMenu();  ?></nav>		
</header>


<div class="zerogrid">


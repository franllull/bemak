<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<script src='<?php echo get_stylesheet_directory_uri() ?>/assets/js/jquery-1.8.3.min.js'></script>
<script src='<?php echo get_stylesheet_directory_uri() ?>/assets/js/bootstrap.min.js'></script>

<?php wp_head(); ?>

<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,400italic' rel='stylesheet' type='text/css'>

</head>

<body <?php body_class(); ?>>
<div class="b-sidebarra visible-desktop"></div>
  <header class="headersite">
    <nav class="container">
		<div class="onnavbar">
			<h1><a class="current logo" href="http://www.bemak.es"><span class="hidden">BeMAK</span></a></h1>
			<a class="arrow" href="#" data-toggle="collapse" data-target="#navcontent"></a>
			<ul id="navcontent" class="navcontent unstyled collapse"> 
				<li><a href="http://www.bemak.es/agencia.html">La Agencia</a></li>
				<li><a href="http://www.bemak.es/servicios.html">Servicios</a></li>
				<li><a href="http://www.bemak.es/blog">Noticias</a></li>
				<li><a href="http://www.bemak.es/contacto.html">Contacto</a></li>
			</ul>
		</div>

		<a class="socialarrow pull-right" href="#"></a>
		<ul id="socialcontent" class="socialnets pull-right white">
			<li><a class="tw" target="_blank" href="http://www.twitter.com/bemak_on"><span class="tw"><i class="hidden">twitter</i></span></a></li><li><a class="fb" target="_blank" href="http://www.facebook.com/BEMAK.on"><span class="fb"><i class="hidden">facebook</i></span></a></li><li><a class="ln" target="_blank" href="http://www.linkedin.com/company/2587165?trk=tyah"><span class="ln"><i class="hidden">linkedin</i></span></a></li><li><a class="gp" target="_blank" href="http://plus.google.com/u/1/b/114199293112228025958/114199293112228025958/posts"><span class="gp"><i class="hidden">google plus</i></span></a></li><li><a class="ma" target="_blank" href="mailto:contacto@bemak.es"><span class="ma"><i class="hidden">email</i></span></a></li><li><a class="ph" href="http://bemak.es/contacto.html#llamar"><span class="ph"><i class="hidden">telephone</i></span></a></li>
		</ul>	
	</nav>
  </header>

  <div id="page" class="container topair">
	<div id="main" class="wrapper">

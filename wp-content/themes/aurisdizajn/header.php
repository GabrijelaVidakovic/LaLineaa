<!DOCTYPE html>
<html lang="hr">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri() ?>/js/html5shiv.js"></script>
	<![endif]-->

	<?php wp_head(); ?>

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-23647958-2', 'auto');
		ga('send', 'pageview');

	</script>

</head>
<body <?php body_class(); ?>>

<div class="container">
	<div class="inner">
		<header class="header" role="banner">
			<?php wp_nav_menu( array('menu' => 'Main', 'container' => 'nav', 'container_class' => 'main-nav', 'menu_class' => 'cf' )); ?>
			<a href="<?php echo home_url(); ?>" class="logo"><img src="<?php echo get_template_directory_uri() ?>/images/logo-2017.png" alt="<?php bloginfo('name'); ?>" width="300" height="70"></a>
		</header>
		<div class="content cf">

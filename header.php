<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Required meta tags -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php get_template_part( 'template-parts/header/menu-mobile' ); ?>
	<?php get_template_part( 'template-parts/header/header-menu' ); ?>

	<?php if( !(is_front_page()) ) :  ?>
		<?php get_template_part( 'template-parts/header/page-title' ); ?>
	<?php endif; ?>
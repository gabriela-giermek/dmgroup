<?php
/**
* Displays page title and breadcrumbs
**/
?>

<div class="page-title" style="background-image:url(<?php bloginfo('template_directory'); ?>/dist/images/page-title-bg.jpg)">
	<div class="container">
		<div class="page-title__content">
			<h1 class="page-title__title">
				<?php
					if( is_post_type_archive( 'offer' ) || is_tax( 'offer_category' ) ) {
						echo pll__("Oferta");
					} else {
						the_title();
					}
				?>
			</h1>
					
			<?php if (function_exists('dmgroup_breadcrumbs')) : ?>
				<div class="page-title__breadcrumbs breadcrumbs">
					<?php	dmgroup_breadcrumbs(); ?> 
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
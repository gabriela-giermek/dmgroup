<?php
/**
* Displays menu mobile
**/
?>

<div class="menu-mobile d-xl-none w-100">
	<div class="menu-mobile__close">
		<div class="menu-mobile__close-bar"></div>
		<div class="menu-mobile__close-bar"></div>
	</div>

	<div class="menu-mobile__overlay scrollbar-inner">
		<div class="menu-mobile__content">
			<?php
				wp_nav_menu(array(
					'theme_location'   => 'primary',
					'container'        => 'div',
					'container_id'     => 'primary-menu-mobile-wrapper',
					'container_class'  => 'menu-mobile__wrapper',
					'menu_id'          => 'primary-menu-mobile',
					'menu_class'       => 'menu-mobile__list',
					'depth'            => '2'
				));
			?>
			
			<!-- <ul class="menu-mobile__lang lang d-flex align-items-center">
				<?php
					// pll_the_languages( array( 'display_names_as' => 'slug' ));
				?>
			</ul> -->
		</div>
	</div>
</div>
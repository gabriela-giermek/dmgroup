<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package dmgroup
 */

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>

<div id="sidebar2" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
</div>

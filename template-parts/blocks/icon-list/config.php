<?php

function dmgroup_icon_list_block() {
	if( function_exists('acf_register_block_type') ) {
		acf_register_block_type(array(
			'name'              => 'icon-list',
			'title'             => __('Lista ikon'),
			'description'       => __('Lista ikon z tekstem'),
			'render_template'   => 'template-parts/blocks/icon-list/icon-list.php',
			'category'          => 'dmgroup',
			'icon'              => 'editor-ul',
			'keywords'          => array( 'lista' ),
		));
	}
}
add_action('acf/init', 'dmgroup_icon_list_block');
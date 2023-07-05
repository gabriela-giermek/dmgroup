<?php

function dmgroup_team_block() {
	if( function_exists('acf_register_block_type') ) {
		acf_register_block_type(array(
			'name'              => 'team',
			'title'             => __('Zespół'),
			'description'       => __('Blok z listą pracowników'),
			'render_template'   => 'template-parts/blocks/team/team.php',
			'category'          => 'dmgroup',
			'icon'              => 'groups',
			'keywords'          => array( 'zespół' ),
		));
	}
}
add_action('acf/init', 'dmgroup_team_block');
<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
		<?php
			$blocks = parse_blocks($post->post_content);
			
			foreach ($blocks as $block) {
				if( strpos($block['blockName'], 'core') !== false ) : ?>
					<div class="container">
						<?php echo render_block($block); ?>
					</div>
				<?php else : ?>
					<?php echo render_block($block); ?>
				<?php endif; ?>
			<?php } ?>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
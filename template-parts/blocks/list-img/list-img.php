<?php
/**
* List and image Block Template
*/


if( have_rows('list_img') ) : ?>
	<?php while( have_rows('list_img') ) : the_row();
		$img = get_sub_field('img');
		?>
		<div class="list-img">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-12 col-lg-4">
						<?php if( have_rows('list_items') ) : ?>
							<?php while( have_rows('list_items') ) : the_row();
								$text = get_sub_field('text');
								?>
								<div class="list-img__item d-flex align-items-center">
									<img src="<?php bloginfo('template_directory'); ?>/dist/images/list-icon.svg" class="list-img__item-icon" alt="List icon">

									<div class="list-img__item-text">
										<?php if( !empty( $text ) ) : ?>
											<?php echo $text; ?>
										<?php endif; ?>
									</div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>

					<div class="col-12 col-lg-8">
						<?php if( !empty( $img ) ) : ?>
							<div class="list-img__img">
								<img src="<?php echo esc_url($img['url']); ?>" class="list-img__img-inner img-fluid" alt="<?php echo esc_attr($img['alt']); ?>">
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>
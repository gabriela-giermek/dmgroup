<?php
/**
* Icon list Block Template
*/


if( have_rows('icon_list') ) : ?>
	<div class="icon-list">
		<div class="container">
			<div class="icon-list__content">
				<div class="row justify-content-center">
					<?php while( have_rows('icon_list') ) : the_row();
						$icon = get_sub_field('icon');
						$text = get_sub_field('text');
						?>
						<div class="icon-list__item col-12 col-lg-4 col-xxl-3">
							<div class="icon-list__item-content text-center">
								<?php if( !empty( $icon ) ) : ?>
									<img src="<?php echo esc_url($icon['url']); ?>" class="icon-list__item-icon mx-auto img-fluid" alt="<?php echo esc_attr($icon['alt']); ?>">
								<?php endif; ?>

								<?php if( $text ) : ?>
									<div class="icon-list__item-text">
										<?php echo $text; ?>
									</div>
								<?php endif; ?>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>
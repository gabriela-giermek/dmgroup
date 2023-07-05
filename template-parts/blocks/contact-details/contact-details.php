<?php
/**
* Contact details Block Template
*/


if( have_rows('contact_details') ) :
	while( have_rows('contact_details') ) : the_row();
		$title = get_sub_field('title');
		$map_icon = get_sub_field('map_icon');
		$map_text = get_sub_field('map_text');
		$map_link = get_sub_field('map_link');
		$map_img = get_sub_field('map_img');
		?>
		<div class="contact-details">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-12 col-lg-5">
						<div class="contact-details__content">
							<?php if( !empty( $title ) ) : ?>
								<div class="contact-details__title">
									<?php echo $title; ?>
								</div>
							<?php endif; ?>

							<?php if( have_rows('contact') ) : ?>
								<div class="contact-details__data">
									<?php while( have_rows('contact') ) : the_row();
										$label = get_sub_field('label');
										$text = get_sub_field('text');
										?>
										<div class="contact-details__item d-flex">
											<?php if( !empty( $label ) ) : ?>
												<div class="contact-details__item-label">
													<?php echo $label; ?>
												</div>
											<?php endif; ?>

											<?php if( !empty( $text ) ) : ?>
												<div class="contact-details__item-text">
													<?php echo $text; ?>
												</div>
											<?php endif; ?>
										</div>
									<?php endwhile; ?>
								</div>
							<?php endif; ?>
						</div>
					</div>

					<div class="col-12 col-lg-7">
						<?php if( $map_link ) : ?>
							<div class="contact-details__location text-center">
								<a href="<?php echo esc_url( $map_link ); ?>" class="contact-details__location-link" target="_blank">
									<?php if( !empty( $map_icon ) ) : ?>
										<img src="<?php echo esc_url($map_icon['url']); ?>" class="contact-details__location-icon img-fluid mx-auto" alt="<?php echo esc_attr($map_icon['alt']); ?>">
									<?php endif; ?>

									<?php if( !empty( $map_text ) ) : ?>
										<span class="contact-details__location-text">
											<?php echo $map_text; ?>
										</span>
									<?php endif; ?>
								</a>

								<?php if( !empty( $map_img ) ) : ?>
									<img src="<?php echo esc_url($map_img['url']); ?>" class="contact-details__location-map img-fluid" alt="<?php echo esc_attr($map_img['alt']); ?>" />
								<?php endif; ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>
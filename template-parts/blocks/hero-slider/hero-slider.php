<?php
/**
* Hero slider Block Template
*/

if( have_rows('hero_slider') ) : ?>
	<?php while( have_rows('hero_slider') ): the_row(); ?>
		<div class="hero-slider">
			<?php if( have_rows('slides') ) : ?>
				<div class="hero-slider__content">
					<div class="container">
						<div id="heroSlider<?php echo $block['id']; ?>" class="hero-slider__inner w-100 h-100">
							<?php while( have_rows('slides') ): the_row();
								$img_mobile = get_sub_field('img_mobile');
								$img_desktop = get_sub_field('img_desktop');
								$title = get_sub_field('title');
								$text = get_sub_field('text');
								$link = get_sub_field('link');
								?>
								<div class="hero-slider__item w-100 h-100">
									<div class="hero-slider__caption">
										<?php if( !empty( $title ) ) : ?>
											<div class="hero-slider__caption-title">
												<?php echo $title; ?>
											</div>
										<?php endif; ?>

										<?php if( !empty( $text ) ) : ?>
											<div class="hero-slider__caption-text">
												<?php echo $text; ?>
											</div>
										<?php endif; ?>

										<?php if( $link ) : ?>
											<a href="<?php echo esc_url( get_term_link( $link ) ); ?>" class="hero-slider__caption-btn btn btn--primary">
												<?php echo pll__("Czytaj więcej"); ?>
											</a>
										<?php endif; ?>
									</div>
									
									<?php if( !empty( $img_mobile ) ) : ?>
										<img src="<?php echo esc_url($img_mobile['url']); ?>" class="hero-slider__img w-100 h-100 d-xl-none" alt="<?php echo esc_attr($img_mobile['alt']); ?>">
									<?php endif; ?>

									<?php if( !empty( $img_desktop ) ) : ?>
										<img src="<?php echo esc_url($img_desktop['url']); ?>" class="hero-slider__img w-100 h-100 d-none d-xl-block" alt="<?php echo esc_attr($img_desktop['alt']); ?>">
									<?php endif; ?>
								</div>
							<?php endwhile; ?>
						</div>
					</div>
				</div>
			<?php endif; ?>
		</div>
	<?php endwhile; ?>
<?php endif; ?>
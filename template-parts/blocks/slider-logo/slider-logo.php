<?php
/**
* Slider logo Block Template
*/

if( have_rows('slider_logo') ) : ?>
	<div class="slider-logo">
		<div class="container">
			<div id="logoSlider<?php echo $block['id']; ?>" class="slider-logo__content">
				<?php while( have_rows('slider_logo') ) : the_row();
					$logo = get_sub_field('logo');
					?>
					<div class="slider-logo__item">
						<?php if( !empty( $logo ) ) : ?>
							<img src="<?php echo esc_url($logo['url']); ?>" class="slider-logo__item-img img-fluid" alt="<?php echo esc_attr($logo['alt']); ?>">
						<?php endif; ?>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
<?php endif; ?>
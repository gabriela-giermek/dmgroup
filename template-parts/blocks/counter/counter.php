<?php
/**
* Counter Block Template
*/

if( have_rows('counter') ) : ?>
	<div class="counter">
		<div class="container">
			<div class="row">
				<?php while( have_rows('counter') ) : the_row();
					$number = get_sub_field('number');
					$text = get_sub_field('text');
					?>
					<div class="counter__item col-12 col-md-4 text-center">
						<?php if( !empty( $number ) ) : ?>
							<div class="d-flex justify-content-center align-items-center">
								<div class="counter__item-number" data-numb="<?php echo $number; ?>">0</div>
								<strong class="counter__item-plus">+</strong>
							</div>
						<?php endif; ?>

						<?php if( !empty( $text ) ) : ?>
							<div class="counter__item-text">
								<?php echo $text; ?>
							</div>
						<?php endif; ?>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
<?php endif; ?>
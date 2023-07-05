<?php
/**
* Banner Block Template
*/

if( have_rows('banner') ) :
	while( have_rows('banner') ) : the_row();
		$box1_icon = get_sub_field('box1_icon');
		$box1_text = get_sub_field('box1_text');
		$box1_link = get_sub_field('box1_link');
		$box1_img = get_sub_field('box1_img');
		$box2_icon = get_sub_field('box2_icon');
		$box2_text = get_sub_field('box2_text');
		$box2_link = get_sub_field('box2_link');
		$box2_img = get_sub_field('box2_img');
		$box_img = get_sub_field('box_img');
		?>
		<div class="banner">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-6 pe-lg-0">
						<div class="row">
							<div class="col-12 col-sm-6 pe-sm-0">
								<div class="banner__box">
									<?php if( !empty( $box1_icon ) ) : ?>
										<img src="<?php echo esc_url($box1_icon['url']); ?>" class="banner__box-icon img-fluid" alt="<?php echo esc_attr($box1_icon['alt']); ?>">
									<?php endif; ?>

									<?php if( !empty( $box1_text ) ) : ?>
										<div class="banner__box-text">
											<?php echo $box1_text; ?>
										</div>
									<?php endif; ?>

									<?php if( $box1_link ) :
										$link1_url = $box1_link['url'];
										$link1_title = $box1_link['title'];
										$link1_target = $box1_link['target'] ? $box1_link['target'] : '_self';
										?>
										<a class="banner__box-btn btn btn--link" href="<?php echo esc_url( $link1_url ); ?>" target="<?php echo esc_attr( $link1_target ); ?>">
											<?php echo esc_html( $link1_title ); ?>
										</a>
									<?php endif; ?>
								</div>
							</div>
							<div class="col-12 col-sm-6 ps-sm-0">
								<?php if( !empty( $box1_img ) ) : ?>
									<img src="<?php echo esc_url($box1_img['url']); ?>" class="banner__img" alt="<?php echo esc_attr($box1_img['alt']); ?>">
								<?php endif; ?>
							</div>
						</div>

						<div class="row flex-sm-row-reverse">
							<div class="col-12 col-sm-6 ps-sm-0">
								<div class="banner__box">
									<?php if( !empty( $box2_icon ) ) : ?>
										<img src="<?php echo esc_url($box2_icon['url']); ?>" class="banner__box-icon img-fluid" alt="<?php echo esc_attr($box2_icon['alt']); ?>">
									<?php endif; ?>

									<?php if( !empty( $box2_text ) ) : ?>
										<div class="banner__box-text">
											<?php echo $box2_text; ?>
										</div>
									<?php endif; ?>

									<?php if( $box2_link ) :
										$link2_url = $box2_link['url'];
										$link2_title = $box2_link['title'];
										$link2_target = $box2_link['target'] ? $box2_link['target'] : '_self';
										?>
										<a class="banner__box-btn btn btn--link" href="<?php echo esc_url( $link2_url ); ?>" target="<?php echo esc_attr( $link2_target ); ?>">
											<?php echo esc_html( $link2_title ); ?>
										</a>
									<?php endif; ?>
								</div>
							</div>
							<div class="col-12 col-sm-6 pe-sm-0">
								<?php if( !empty( $box2_img ) ) : ?>
									<img src="<?php echo esc_url($box2_img['url']); ?>" class="banner__img" alt="<?php echo esc_attr($box2_img['alt']); ?>">
								<?php endif; ?>
							</div>
						</div>
					</div>

					<div class="col-12 col-lg-6 ps-lg-0 d-none d-lg-block">
						<?php if( !empty( $box_img ) ) : ?>
							<img src="<?php echo esc_url($box_img['url']); ?>" class="banner__bg h-100" alt="<?php echo esc_attr($box_img['alt']); ?>">
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>
<?php
/**
* Team Block Template
*/

if( have_rows('team') ) :
	while( have_rows('team') ) : the_row();
		$title = get_sub_field('title');
		$employees_list = get_sub_field('employees_list');
		?>
		<div class="team">
			<div class="container">
				<?php if( $title ) : ?>
					<div class="team__title text-center">
						<?php echo $title; ?>
					</div>
				<?php endif; ?>

				<div class="row">
					<?php if( $employees_list ) : ?>
						<?php foreach( $employees_list as $employee ): 
							$title = get_the_title( $employee->ID );
							$team_position = get_field( 'team_position', $employee->ID );
							$employee_img = get_the_post_thumbnail_url( $employee->ID, 'person-img' );
							?>
							<div class="team__item col-12 col-lg-4">
								<div class="team__item-content mx-auto">
									<?php if( !empty( $employee_img ) ) : ?>
										<div class="team__item-img">
											<img src="<?php echo esc_url($employee_img); ?>" class="team__item-img-inner img-fluid ms-auto" alt="<?php echo $title; ?>" />
										</div>
									<?php endif; ?>

									<div class="team__item-info">
										<div class="team__item-name">
											<?php echo $title; ?>
										</div>
										
										<?php if( !empty( $team_position ) ) : ?>
											<div class="team__item-position">
												<?php echo $team_position; ?>
											</div>
										<?php endif; ?>
									</div>

									<?php if( have_rows('team_contact', $employee->ID) ): ?>
										<div class="team__contact">
											<?php while( have_rows('team_contact', $employee->ID) ): the_row(); 
												$icon = get_sub_field('icon');
												$link = get_sub_field('link');
												?>
												<?php if( $link ) :
													$link_url = $link['url'];
													$link_title = $link['title'];
													$link_target = $link['target'] ? $link['target'] : '_self';
													?>
													<a href="<?php echo esc_url( $link_url ); ?>" class="team__contact-link d-flex" target="<?php echo esc_attr( $link_target ); ?>">
														<?php if( !empty( $icon ) ) : ?>
															<img src="<?php echo esc_url($icon['url']); ?>" class="team__contact-icon img-fluid" alt="<?php echo esc_attr($icon['alt']); ?>">
														<?php endif; ?>

														<?php if( !empty( $link_title ) ) : ?>
															<span class="team__contact-text">
																<?php echo $link_title; ?>
															</span>
														<?php endif; ?>
													</a>
												<?php endif; ?>
											<?php endwhile; ?>
										</div>
									<?php endif; ?>
								</div>
							</div>
						<?php endforeach; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>
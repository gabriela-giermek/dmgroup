<?php
/**
* Template for offer archive
**/

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
	'post_type'   => 'offer',
	'post_status' => 'publish',
  'posts_per_page' => 12,
	'paged' => $paged
);  
$posts = new WP_Query( $args);
?>

<?php get_header(); ?>

<div class="offer-page">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-3">
				<div class="offer-page__menu offer-menu">
					<?php
						wp_nav_menu(array(
							'theme_location'   => 'offer-menu',
							'container'        => 'div',
							'container_id'     => 'offer-menu-nav-wrapper',
							'container_class'  => 'offer-menu__nav',
							'menu_id'          => 'offer-menu-nav',
							'menu_class'       => 'offer-menu__nav-list d-sm-flex',
							'depth'            =>  1
						));
					?>

					<?php
						wp_nav_menu(array(
							'theme_location'   => 'offer-menu',
							'container'        => 'div',
							'container_id'     => 'offer-menu-wrapper',
							'container_class'  => 'offer-menu__submenu',
							'menu_id'          => 'offer-menu-submenu',
							'menu_class'       => 'offer-menu__submenu-list',
							'depth'            =>  3
						));
					?>
				</div>
			</div>

			<div class="col-12 col-lg-9">
				<?php if ( $posts->have_posts() ) : ?>
					<div class="row">
						<?php while ( $posts->have_posts() ) : $posts->the_post();
							$current_post_id = get_the_ID();
							$basic_data = get_field( 'offer_basic_data', $current_post_id );
							$gallery = get_field( 'offer_gallery', $current_post_id );
							?>
							<div class="offer-page__item col-12 col-lg-4 text-center">
								<a href="<?php the_permalink(); ?>" class="offer-box d-flex flex-column w-100 h-100 mx-auto">
									<?php if( $basic_data['offer_price_request'] ) : ?>
										<div class="offer-box__request">
											<?php echo pll__("Zapytanie o cenę"); ?>
										</div>
									<?php endif; ?>

									<?php if( $gallery ) :
										$counter = 0;
										
										foreach( $gallery as $img ) :
											if( $counter == 0 ) : ?>
												<img src="<?php echo esc_url($img['sizes']['offer-box-img']); ?>" class="offer-box__img-inner img-fluid" alt="<?php echo esc_attr($img['alt']); ?>">
											<?php endif; ?>
										<?php $counter++; ?>
										<?php endforeach; ?>
									<?php endif; ?>

									<div class="offer-box__content text-left">
										<div class="offer-box__heading d-md-flex justify-content-between">
											<div class="offer-box__heading-title">
												<?php echo the_title(); ?>
											</div>

											<?php if( !empty( $basic_data['offer_price_net'] ) && !$basic_data['offer_price_request'] ) : ?>
												<div class="offer-box__heading-price">
													<?php echo number_format( $basic_data['offer_price_net'], 2, ",", " " ); ?> €
												</div>
											<?php endif; ?>
										</div>

										<div class="offer-box__info">
											<?php if( !empty( $basic_data['offer_model'] ) ) : ?>
												<div class="offer-box__info-item d-flex flex-wrap">
													<span class="offer-box__info-label">
														<?php echo pll__("Model"); ?>:
													</span>
													<span class="offer-box__info-value">
														<?php echo $basic_data['offer_model']; ?>
													</span>
												</div>
											<?php endif; ?>

											<?php if( !empty( $basic_data['offer_year'] ) ) : ?>
												<div class="offer-box__info-item d-flex flex-wrap">
													<span class="offer-box__info-label">
														<?php echo pll__("Rok produkcji"); ?>:
													</span>
													<span class="offer-box__info-value">
														<?php echo $basic_data['offer_year']; ?>
													</span>
												</div>
											<?php endif; ?>
										</div>
									</div>

									<div class="offer-box__details d-flex justify-content-between mt-auto">
										<?php if( !empty( $basic_data['offer_engine_capacity'] ) ) : ?>
											<div class="offer-box__details-item d-flex align-items-center">
												<img src="<?php bloginfo('template_directory'); ?>/dist/images/capacity-icon.svg" class="offer-box__details-icon" alt="Engine capacity">
												<span class="offer-box__details-text">
													<?php echo $basic_data['offer_engine_capacity']; ?> ccm
												</span>
											</div>
										<?php endif; ?>

										<?php if( !empty( $basic_data['offer_hours'] ) ) : ?>
											<div class="offer-box__details-item d-flex align-items-center">
												<img src="<?php bloginfo('template_directory'); ?>/dist/images/motohours-icon.svg" class="offer-box__details-icon" alt="Motohours">
												<span class="offer-box__details-text">
													<?php echo $basic_data['offer_hours']; ?> h
												</span>
											</div>
										<?php elseif( !empty( $basic_data['offer_mileage'] ) ) : ?>
											<div class="offer-box__details-item d-flex align-items-center">
												<img src="<?php bloginfo('template_directory'); ?>/dist/images/speedometer-icon.svg" class="offer-box__details-icon" alt="Mileage">
												<span class="offer-box__details-text">
													<?php echo $basic_data['offer_mileage']; ?> km
												</span>
											</div>
										<?php endif; ?>

										<?php if( !empty( $basic_data['offer_engine_power'] ) ) : ?>
											<div class="offer-box__details-item d-flex align-items-center">
												<img src="<?php bloginfo('template_directory'); ?>/dist/images/engine-power-icon.svg" class="offer-box__details-icon" alt="Engine power">
												<span class="offer-box__details-text">
													<?php echo $basic_data['offer_engine_power']; ?> kW
												</span>
											</div>
										<?php endif; ?>
									</div>
								</a>
							</div>
						<?php endwhile; ?>
					</div>

					<?php
						$total_pages = $posts->max_num_pages;
						$big = 999999999;

						if ($total_pages > 1) :
							$current_page = max(1, get_query_var('paged')); ?>
							<div class="pagination d-flex flex-wrap justify-content-center">
								<?php echo paginate_links(array(
										'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
										'format' => '?paged=%#%',
										'current' => $current_page,
										'mid_size' => 1,
										'total' => $total_pages,
										'prev_next' => true,
										'prev_text' => '',
										'next_text' => '',
								)); ?>
							</div>
						<?php endif; ?>
					<?php	wp_reset_query(); ?>
					<?php wp_reset_postdata(); ?>
				<?php else : ?>
					<div class="offer-page__info">
						<p class="offer-page__info-text mb-0"><?php echo pll__("Brak ofert w wybranej kategorii"); ?></p>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<?php get_sidebar('slider-logo'); ?>

<?php get_footer(); ?>
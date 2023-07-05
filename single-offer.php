<?php
/**
* The template for displaying single offer
**/


// Custom fields
global $post;
$basic_data = get_field( 'basic_data', $post->ID );
$gallery = get_field( 'offer_gallery', $post->ID );
$employee = get_field( 'offer_employee', $post->ID );

get_header(); ?>

<div <?php post_class('single-offer__content'); ?>>
	<div class="container">
		<div class="row">
			<div class="single-offer__gallery col-12 col-lg-7 col-xxl-8">
				<?php if( $gallery ) :
					$gallery_rows = count( $gallery );
					?>
					<div class="offer-gallery">
						<div class="offer-gallery__for">
							<?php if( have_rows('offer_basic_data', $post->ID) ): ?>
								<?php while( have_rows('offer_basic_data', $post->ID) ): the_row();
									$price_request = get_sub_field('offer_price_request');
									
									if( $price_request ) : ?>
										<div class="offer-gallery__request">
											<?php echo pll__("Zapytanie o cenę"); ?>
										</div>
									<?php endif; ?>
								<?php endwhile; ?>
							<?php endif; ?>
							<div id="offerGalleryFor" class="offer-gallery__for-slider">
								<?php foreach( $gallery as $image ): ?>
									<a data-src="<?php echo $image['url']; ?>" class="offer-gallery__for-item" data-fancybox="gallery-offer">
										<img src="<?php echo $image['url']; ?>" class="offer-gallery__for-img w-100" alt="<?php echo esc_attr($image['alt']); ?>">
									</a>
								<?php endforeach; ?>
							</div>
						</div>

						<?php if( $gallery_rows > 1 ) : ?>
							<div class="offer-gallery__nav">
								<div id="offerGalleryNav" class="offer-gallery__nav-slider">
									<?php foreach( $gallery as $image ): ?>
										<div class="offer-gallery__nav-item">
											<img src="<?php echo esc_url($image['sizes']['offer-box-img']); ?>" class="offer-gallery__nav-img" alt="<?php echo esc_attr($image['alt']); ?>" />
										</div>
									<?php endforeach; ?>
								</div>
							</div>
						<?php endif; ?>
					</div>
				<?php endif; ?>
			</div>

			<div class="single-offer__basic col-12 col-lg-5 col-xxl-4">
				<h1 id="offerTitle" class="single-offer__title"><?php the_title(); ?></h1>

				<?php if( have_rows('offer_basic_data', $post->ID) ): ?>
					<?php while( have_rows('offer_basic_data', $post->ID) ): the_row();
						$price_gross = get_sub_field('offer_price_gross');
						$price_net = get_sub_field('offer_price_net');
						$model = get_sub_field('offer_model');
						$year = get_sub_field('offer_year');
						$hours = get_sub_field('offer_hours');
						$mileage = get_sub_field('offer_mileage');
						$engine_capacity = get_sub_field('offer_engine_capacity');
						$engine_power = get_sub_field('offer_engine_power');
						?>
						<?php if( !$price_request ) : ?>
							<div class="single-offer__price d-flex align-items-baseline">
								<span class="single-offer__price-label">
									<?php echo pll__("Cena"); ?>:
								</span>
			
								<div class="single-offer__price-value">
									<?php if( !empty( $price_net ) ) : ?>
										<div class="single-offer__price-gross">
											<?php echo number_format( $price_net, 2, ",", " " ); ?> €
										</div>
									<?php endif; ?>
			
									<?php if( !empty( $price_gross ) ) : ?>
										<div class="single-offer__price-net">
											<?php echo number_format( $price_gross, 2, ",", " " ); ?> € (<?php echo pll__("brutto"); ?>)
										</div>
									<?php endif; ?>
								</div>
							</div>
						<?php endif; ?>

						<div class="single-offer__data">
							<?php if( !empty( $model ) ) : ?>
								<div class="single-offer__data-item d-flex justify-content-between">
									<div class="single-offer__data-label">
										<?php echo pll__("Model"); ?>
									</div>

									<div class="single-offer__data-value">
										<?php echo $model; ?>
									</div>
								</div>
							<?php endif; ?>

							<?php if( !empty( $year ) ) : ?>
								<div class="single-offer__data-item d-flex justify-content-between">
									<div class="single-offer__data-label">
										<?php echo pll__("Rok produkcji"); ?>
									</div>

									<div class="single-offer__data-value">
										<?php echo $year; ?>
									</div>
								</div>
							<?php endif; ?>

							<?php if( !empty( $hours ) ) : ?>
								<div class="single-offer__data-item d-flex justify-content-between">
									<div class="single-offer__data-label">
										<?php echo pll__("Motogodziny"); ?>
									</div>

									<div class="single-offer__data-value">
										<?php echo $hours; ?> h
									</div>
								</div>
							<?php endif; ?>

							<?php if( !empty( $mileage ) ) : ?>
								<div class="single-offer__data-item d-flex justify-content-between">
									<div class="single-offer__data-label">
										<?php echo pll__("Przebieg"); ?>
									</div>

									<div class="single-offer__data-value">
										<?php echo $mileage; ?> km
									</div>
								</div>
							<?php endif; ?>

							<?php if( !empty( $engine_capacity ) ) : ?>
								<div class="single-offer__data-item d-flex justify-content-between">
									<div class="single-offer__data-label">
										<?php echo pll__("Pojemność silnika"); ?>
									</div>

									<div class="single-offer__data-value">
										<?php echo $engine_capacity; ?> ccm
									</div>
								</div>
							<?php endif; ?>

							<?php if( !empty( $engine_power ) ) : ?>
								<div class="single-offer__data-item d-flex justify-content-between">
									<div class="single-offer__data-label">
										<?php echo pll__("Moc silnika"); ?>
									</div>

									<div class="single-offer__data-value">
										<?php echo $engine_power; ?> kW
									</div>
								</div>
							<?php endif; ?>
						</div>

						<div class="single-offer__contact">
							<div id="sendInquiryForm" class="single-offer__contact-btn d-flex justify-content-center align-items-center">
								<img src="<?php bloginfo('template_directory'); ?>/dist/images/chat-icon.svg" class="single-offer__contact-btn-icon d-none d-md-block" alt="Chat">
								<span class="single-offer__contact-btn-text">
									<?php echo pll__("Skontaktuj się z nami"); ?>
								</span>
							</div>
						</div>

						<?php if( $employee ) : ?>
							<div class="single-offer__employee">
								<p class="single-offer__employee-info">
									<?php echo pll__("W sprawie wybranej oferty prosimy o kontakt z naszym pracownikiem"); ?>
								</p>

								<?php foreach( $employee as $person ) : 
									$title = get_the_title( $person->ID );
									?>
									<p class="single-offer__employee-name">
										<?php echo $title; ?>
									</p>

									<?php if( have_rows('team_contact', $person->ID) ) : ?>
										<div class="single-offer__employee-contact">
											<?php while( have_rows('team_contact', $person->ID) ) : the_row();
												$link = get_sub_field('link');
												?>
												<?php if( $link ) :
													$link_url = $link['url'];
													$link_title = $link['title'];
													$link_target = $link['target'] ? $link['target'] : '_self';
													?>
													<div>
														<a href="<?php echo esc_url( $link_url ); ?>" class="single-offer__employee-link" target="<?php echo esc_attr( $link_target ); ?>">
															<?php echo $link_title; ?>
														</a>
													</div>
												<?php endif; ?>
											<?php endwhile; ?>
										</div>
									<?php endif; ?>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>

		<div class="single-offer__tabs row">
			<div class="col-12 col-lg-7 col-xxl-8">
				<div class="single-offer__tabs-content tabs">
					<div class="tabs__nav d-sm-flex justify-content-center text-center" id="tabs" role="tablist">
						<div id="detailsNav" class="tabs__nav-item active" data-tab-target="#detailsContent">
							<div class="tabs__nav-title">
								<?php echo pll__("Specyfikacja"); ?>
							</div>
						</div>

						<div id="descriptionNav" class="tabs__nav-item" data-tab-target="#descriptionContent">
							<div class="tabs__nav-title">
								<?php echo pll__("Opis"); ?>
							</div>
						</div>

						<div id="contactNav" class="tabs__nav-item" data-tab-target="#contactContent">
							<div class="tabs__nav-title">
								<?php echo pll__("Kontakt"); ?>
							</div>
						</div>
					</div>

					<div class="tabs__content">
						<div id="detailsContent" class="tabs__content-item active">
							<?php if( have_rows('offer_details_data', $post->ID) ) : ?>
								<div class="single-offer__details">
									<?php while( have_rows('offer_details_data', $post->ID) ) : the_row();
										$label = get_sub_field('offer_label');
										$value = get_sub_field('offer_value');
										?>
										<div class="single-offer__details-item d-flex justify-content-between">
											<span class="single-offer__details-label">
												<?php if( !empty( $label ) ) : ?>
													<?php echo $label; ?>
												<?php endif; ?>
											</span>

											<span class="single-offer__details-value">
												<?php if( !empty( $value ) ) : ?>
													<?php echo $value; ?>
												<?php endif; ?>
											</span>
										</div>
									<?php endwhile; ?>
								</div>
							<?php endif; ?>
						</div>
						
						<div id="descriptionContent" class="tabs__content-item">
							<div class="single-offer__description">
								<?php the_content(); ?>
							</div>
						</div>
						
						<div id="contactContent" class="tabs__content-item">
							<div class="single-offer__form">
								<?php get_sidebar('contact-form'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_sidebar('slider-logo'); ?>

<?php get_footer(); ?>
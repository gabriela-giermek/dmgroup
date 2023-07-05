<?php
/**
* Offer Block Template
*/


if( have_rows('offer-list') ) :
	while( have_rows('offer-list') ) : the_row();
		$title = get_sub_field('title');
		$offer_categories = get_sub_field('offer_categories');
		?>
		<div class="offer">
			<div class="offer__content container">
				<div class="offer__heading d-md-flex justify-content-between align-items-end">
					<?php if( $title ) : ?>
						<h2 class="offer__heading-title">
							<?php echo $title; ?>
						</h2>
					<?php endif; ?>

					<div class="offer__heading-nav">
						<?php if( have_rows('offer_categories') ) : ?>
							<div class="offer__nav d-sm-flex justify-content-between justify-content-md-end" id="offerTab" role="tablist">
								<?php while( have_rows('offer_categories') ) : the_row();
									$cat = get_sub_field('category_item');
									$row_index = get_row_index();
									?>
									<div class="offer__nav-item <?php echo $row_index == 0 ? 'active' : ''; ?>" data-tab-target="#offerContent<?php echo get_row_index(); ?>">
										<span class="offer__nav-title">
											<?php echo esc_html( $cat->name ); ?>
										</span>
									</div>
								<?php endwhile; ?>
								
								<!-- <div class="offer__nav-item" data-tab-target="#offerContentAll">
									<span class="offer__nav-title">
										<?php 
											// pll_e("All");
										?>
									</span>
								</div> -->
							</div>
						<?php endif; ?>
					</div>
				</div>

				<div class="offer__tabs">
					<?php if( have_rows('offer_categories') ) : ?>
						<?php while( have_rows('offer_categories') ) : the_row();
							$cat = get_sub_field('category_item');
							$row_index = get_row_index();

							$cat_args = array(
								'post_type'   => 'offer',
								'post_status' => 'publish',
								'posts_per_page' => '12',
								'tax_query' => array(
									array(
										'taxonomy' => 'offer_category',
										'field'    => 'term_id',
										'terms'     =>  $cat->term_id,
										'operator'  => 'IN'
									)
								)
							);

							$cat_query = new WP_Query( $cat_args );
							?>
							<div id="offerContent<?php echo get_row_index(); ?>" class="offer__tabs-item <?php echo $row_index == 0 ? 'active' : ''; ?>">
								<div class="row">
									<?php if ( $cat_query->have_posts() ) : ?>
										<?php while ( $cat_query->have_posts() ) : $cat_query->the_post();
											$current_post_id = get_the_ID();
											$basic_data = get_field( 'offer_basic_data', $current_post_id );
											$gallery = get_field( 'offer_gallery', $current_post_id );
											?>
											<div class="offer__item col-12 col-sm-6 col-lg-4 col-xxl-3 text-center">
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
																<div class="offer-box__img">
																	<img src="<?php echo esc_url($img['sizes']['offer-box-img']); ?>" class="offer-box__img-inner img-fluid" alt="<?php echo esc_attr($img['alt']); ?>">
																</div>
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

										<div class="col-12 text-center">
											<a href="<?php echo esc_url( get_term_link( $cat ) ); ?>" class="offer__tabs-btn btn btn--secondary">
												<?php echo pll__("Zobacz wszystko"); ?>
											</a>
										</div>
									<?php endif; ?>
								</div>
							</div>
						<?php endwhile; ?>
						<?php	wp_reset_query(); ?>

						<!-- <div id="offerContentAll" class="offer__tabs-item">
							<div class="row">
								<?php
									// $all_cat_args = array(
									// 	'post_type'   => 'offer',
									// 	'post_status' => 'publish',
									// 	'posts_per_page' => '12'
									// );
									
									//$all_cat_query = new WP_Query( $all_cat_args );
									
									//if ( $all_cat_query->have_posts() ) : ?>
										<?php
											// while ( $all_cat_query->have_posts() ) : $all_cat_query->the_post();
											// $current_post_id = get_the_ID();
											// $basic_data = get_field( 'offer_basic_data', $current_post_id );
											// $gallery = get_field( 'offer_gallery', $current_post_id );
											?>
											<div class="offer__item col-12 col-sm-6 col-lg-4 col-xxl-3 text-center">
												<a href="<?php
												//the_permalink();
												?>" class="offer-box d-flex flex-column w-100 h-100">
													<?php
													// if( $gallery ) :
													// 	$counter = 0;
														
													// 	foreach( $gallery as $img ) :
													// 		if( $counter == 0 ) :
															?>
																<div class="offer-box__img">
																	<img src="<?php 
																	//echo esc_url($img['sizes']['offer-box-img']); 
																	?>" class="offer-box__img-inner img-fluid" alt="<?php 
																	//echo esc_attr($img['alt']); 
																	?>">
																</div>
															<?php 
															//endif; 
															?>
														<?php 
														//$counter++; 
														?>
														<?php 
													//endforeach; 
													?>
													<?php
												 //endif; 
												 ?>

													<div class="offer-box__content text-left">
														<div class="offer-box__heading d-md-flex justify-content-between">
															<div class="offer-box__heading-title">
																<?php 
																//echo the_title(); 
																?>
															</div>

															<?php 
															//if( !empty( $basic_data['offer_price_net'] ) ) : 
															?>
																<div class="offer-box__heading-price">
																	<?php 
																	//echo number_format( $basic_data['offer_price_net'], 2, ",", " " ); 
																	?> €
																</div>
															<?php 
														//endif; 
														?>
														</div>

														<div class="offer-box__info">
															<?php 
															//if( !empty( $basic_data['offer_model'] ) ) : 
															?>
																<div class="offer-box__info-item d-flex flex-wrap">
																	<span class="offer-box__info-label">
																		<?php 
																		//echo pll__("Model"); 
																		?>:
																	</span>
																	<span class="offer-box__info-value">
																		<?php 
																		//echo $basic_data['offer_model']; 
																		?>
																	</span>
																</div>
															<?php
														 //endif; 
														 ?>

															<?php 
															//if( !empty( $basic_data['offer_year'] ) ) : 
															?>
																<div class="offer-box__info-item d-flex flex-wrap">
																	<span class="offer-box__info-label">
																		<?php 
																		//echo pll__("Rok produkcji"); 
																		?>:
																	</span>
																	<span class="offer-box__info-value">
																		<?php 
																		//echo $basic_data['offer_year']; 
																		?>
																	</span>
																</div>
															<?php 
														//endif; 
														?>
														</div>
													</div>

													<div class="offer-box__details d-flex justify-content-between mt-auto">
														<?php 
														//if( !empty( $basic_data['offer_engine_capacity'] ) ) : 
														?>
															<div class="offer-box__details-item d-flex align-items-center">
																<img src="<?php 
																//bloginfo('template_directory'); 
																?>/dist/images/capacity-icon.svg" class="offer-box__details-icon" alt="Engine capacity">
																<span class="offer-box__details-text">
																	<?php 
																	//echo $basic_data['offer_engine_capacity']; 
																	?> ccm
																</span>
															</div>
														<?php 
														//endif; 
														?>

														<?php 
														//if( !empty( $basic_data['offer_hours'] ) ) : 
														?>
															<div class="offer-box__details-item d-flex align-items-center">
																<img src="<?php 
																//bloginfo('template_directory'); 
																?>/dist/images/motohours-icon.svg" class="offer-box__details-icon" alt="Motohours">
																<span class="offer-box__details-text">
																	<?php 
																	//echo $basic_data['offer_hours']; 
																	?> h
																</span>
															</div>
														<?php 
														//elseif( !empty( $basic_data['offer_mileage'] ) ) : 
														?>
															<div class="offer-box__details-item d-flex align-items-center">
																<img src="<?php 
																//bloginfo('template_directory'); 
																?>/dist/images/speedometer-icon.svg" class="offer-box__details-icon" alt="Mileage">
																<span class="offer-box__details-text">
																	<?php 
																	//echo $basic_data['offer_mileage']; 
																	?> km
																</span>
															</div>
														<?php
													 //endif; 
													 ?>

														<?php 
														//if( !empty( $basic_data['offer_engine_power'] ) ) : 
														?>
															<div class="offer-box__details-item d-flex align-items-center">
																<img src="<?php 
																//bloginfo('template_directory'); 
																?>/dist/images/engine-power-icon.svg" class="offer-box__details-icon" alt="Engine power">
																<span class="offer-box__details-text">
																	<?php 
																	//echo $basic_data['offer_engine_power']; 
																	?> kW
																</span>
															</div>
														<?php 
													//endif; 
													?>
													</div>
												</a>
											</div>
										<?php 
									//endwhile; 
									?>
										<?php	
										//wp_reset_query(); 
										?>
									<?php 
								//endif; 
								?>

								<div class="col-12 text-center">
									<a href="<?php 
									//echo get_post_type_archive_link('offer'); 
									?>" class="offer__tabs-btn btn btn--secondary">
										<?php 
										//echo pll__("Zobacz wszystko"); 
										?>
									</a>
								</div>
							</div>
						</div> -->
					<?php endif; ?>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>
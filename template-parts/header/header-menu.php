<?php
/**
* Displays header menu
**/

//Custom fields
$logo = get_field('logo_normal', 'option');
$phone = get_field('phone', 'option');
$phone_icon = $phone['phone_icon'];
$phone_number = $phone['phone_number'];
$email = get_field('email', 'option');
$email_icon = $email['email_icon'];
$email_address = $email['email_address'];
?>

<header class="header w-100">
	<div class="header__top">
		<div class="container">
			<div class="d-flex justify-content-center justify-content-md-between justify-content-xxl-end align-items-center">
				<?php if( have_rows('services', 'option') ): ?>
					<div class="header__services d-flex">
						<?php while( have_rows('services', 'option') ): the_row();
							$link = get_sub_field('link');

							if( $link ) : 
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
								?>
								<a href="<?php echo esc_url( $link_url ); ?>" class="header__services-item" target="<?php echo esc_attr( $link_target ); ?>">
									<?php echo esc_html( $link_title ); ?>
								</a>
							<?php endif; ?>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>

				<?php if( $phone_number ) : ?>
					<a href="tel:<?php echo $phone_number; ?>" class="header__link d-none d-md-flex align-items-center ms-md-auto ms-xxl-0">
						<?php if( !empty( $phone_icon ) ) : ?>
							<svg class="header__link-icon img-fluid" viewBox="0 0 26 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
								<g transform="matrix(1,0,0,1,-3.0328,-3.0028)" alt="<?php echo esc_attr($phone_icon['alt']); ?>">
									<g transform="matrix(-1,0,0,1,31.6664,0)">
										<path d="M27.36,6.15L25.09,3.88C24.528,3.319 23.765,3.003 22.97,3.003C22.015,3.003 21.115,3.459 20.55,4.23L18.34,7.23C17.781,7.997 17.618,8.984 17.9,9.89L18.03,10.27C18.3,11.16 18.65,12.27 18.87,13.01C18.938,13.242 18.921,13.49 18.82,13.71C18.278,14.807 17.577,15.818 16.74,16.71C16.551,16.898 16.444,17.153 16.444,17.42C16.444,17.687 16.551,17.942 16.74,18.13C17.127,18.515 17.763,18.515 18.15,18.13C19.144,17.092 19.973,15.908 20.61,14.62C20.944,13.946 21.005,13.168 20.78,12.45C20.57,11.73 20.21,10.59 19.93,9.7L19.81,9.31C19.734,9.006 19.804,8.684 20,8.44L22.21,5.44C22.398,5.183 22.698,5.031 23.017,5.031C23.28,5.031 23.533,5.135 23.72,5.32L24.39,5.99L22.39,9.09C22.287,9.251 22.232,9.439 22.232,9.63C22.232,10.178 22.682,10.629 23.23,10.63C23.568,10.632 23.884,10.462 24.07,10.18L25.84,7.44L26,7.59C26.469,8.1 26.714,8.778 26.68,9.47C26.68,11.23 25.49,14.47 19.95,19.91C14.14,25.61 9.53,27.91 7.62,25.98L5.29,23.68C5.085,23.475 4.979,23.19 5,22.9C5.023,22.609 5.173,22.342 5.41,22.17L8.41,19.96C8.663,19.775 8.99,19.719 9.29,19.81L11.18,20.4L9.05,21.91C8.783,22.097 8.624,22.403 8.624,22.729C8.624,22.937 8.689,23.14 8.81,23.31C8.999,23.575 9.305,23.732 9.63,23.73C9.834,23.73 10.033,23.667 10.2,23.55L14,20.88C14.271,20.694 14.433,20.385 14.433,20.056C14.433,19.85 14.369,19.649 14.25,19.48C14.118,19.305 13.931,19.179 13.72,19.12L9.92,17.9C9.014,17.618 8.027,17.781 7.26,18.34L4.26,20.55C3.489,21.115 3.033,22.015 3.033,22.97C3.033,23.765 3.349,24.528 3.91,25.09L6.18,27.37C7.006,28.195 8.133,28.65 9.3,28.63C11.82,28.63 15.62,26.88 21.3,21.31C26.14,16.56 28.61,12.57 28.63,9.45C28.679,8.223 28.22,7.028 27.36,6.15Z"/>
									</g>
								</g>
							</svg>
						<?php endif; ?>
						<span class="d-block"><?php echo $phone_number; ?></span>
					</a>
				<?php endif; ?>

				<?php if( $email_address ) : ?>
					<a href="mailto:<?php echo $email_address; ?>" class="header__link d-none d-md-flex align-items-center">
						<?php if( !empty( $email_icon ) ) : ?>
							<svg class="header__link-icon img-fluid" viewBox="0 0 26 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
								<g transform="matrix(1,0,0,1,-3,-7)" alt="<?php echo esc_attr($email_icon['alt']); ?>">
									<g id="mail_email_e-mail_letter">
										<path d="M28,13C27.451,13 27,13.451 27,14L27,22C27,22.549 26.549,23 26,23L6,23C5.451,23 5,22.549 5,22L5,14C5,13.451 4.549,13 4,13C3.451,13 3,13.451 3,14L3,22C3.001,22.795 3.317,23.558 3.88,24.12C4.442,24.683 5.205,24.999 6,25L26,25C26.795,24.999 27.558,24.683 28.12,24.12C28.683,23.558 28.999,22.795 29,22L29,14C29,13.451 28.549,13 28,13Z"/>
										<path d="M15.4,18.8C15.755,19.066 16.245,19.066 16.6,18.8L28.41,9.94C28.788,9.655 28.915,9.138 28.71,8.71C28.561,8.402 28.362,8.122 28.12,7.88C27.558,7.317 26.795,7.001 26,7L6,7C5.205,7.001 4.442,7.317 3.88,7.88C3.638,8.122 3.439,8.402 3.29,8.71C3.085,9.138 3.212,9.655 3.59,9.94L15.4,18.8ZM6,9L26,9C26.093,8.985 26.187,8.985 26.28,9L16,16.75L5.72,9C5.813,8.985 5.907,8.985 6,9Z"/>
									</g>
								</g>
							</svg>
						<?php endif; ?>
						<?php echo $email_address; ?>
					</a>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<div class="container">
		<nav class="header__nav d-flex align-items-center">
			<?php if( !empty( $logo ) ) : ?>
				<a href="<?php echo home_url(); ?>" class="header__logo">
					<img src="<?php echo esc_url($logo['url']); ?>" class="header__logo-img img-fluid" alt="<?php echo esc_attr($logo['alt']); ?>">
				</a>
			<?php endif; ?>

			<div class="header__nav-content d-none d-xl-flex align-items-center ml-auto">
				<?php
					wp_nav_menu(array(
						'theme_location'   => 'primary',
						'container'        => 'div',
						'container_id'     => 'primary-menu-wrapper',
						'container_class'  => 'header__nav-links header-menu d-none d-lg-block',
						'menu_id'          => 'primary-menu',
						'menu_class'       => 'header-menu__list d-flex list-unstyled m-0 p-0',
						'depth'            =>  2
					));
				?>
			</div>

			<div class="navbar-toggler d-flex d-xl-none flex-column justify-content-center align-items-end flex-shrink-0 ms-auto">
				<span class="navbar-toggler__bar"></span>
				<span class="navbar-toggler__bar"></span>
				<span class="navbar-toggler__bar"></span>
			</div>

			<!-- <div class="header__lang lang">
				<div class="lang__btn">
					<?php 
						// echo pll_current_language( 'slug' );
					?>
				</div>

				<ul class="lang__list">
					<?php
						// pll_the_languages( array( 'display_names_as' => 'slug', 'hide_current' => 1 ));
					?>
				</ul>
			</div> -->
		</nav>
	</div>
</header>

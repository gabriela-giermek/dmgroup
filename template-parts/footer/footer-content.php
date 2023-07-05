<?php
/**
* Displays footer content
**/


//Custom fields
$footer_logo = get_field('footer_logo', 'option');
$footer_text = get_field('footer_text', 'option');
$footer_bg = get_field('footer_bg', 'option');
$phone = get_field('phone', 'option');
$phone_icon = $phone['phone_icon'];
$phone_number = $phone['phone_number'];
$email = get_field('email', 'option');
$email_icon = $email['email_icon'];
$email_address = $email['email_address'];
$address = get_field('address', 'option');
$address_icon = $address['address_icon'];
$address_details = $address['address_details'];
?>

<div class="footer__content" style="<?php echo $footer_bg ? "background-image:url({$footer_bg['url']});" : ""; ?>">
	<div class="footer__inner container">
		<div class="row">
			<div class="col-12 col-xl-3">
				<?php if( !empty( $footer_logo ) ) : ?>
					<img src="<?php echo esc_url($footer_logo['url']); ?>" class="footer__logo img-fluid" alt="<?php echo esc_attr($footer_logo['alt']); ?>">
				<?php endif; ?>

				<?php if( !empty( $footer_text ) ) : ?>
					<div class="footer__text">
						<?php echo $footer_text; ?>
					</div>
				<?php endif; ?>

				<?php if( have_rows('services', 'option') ): ?>
					<div class="footer__services d-flex ms-auto">
						<?php while( have_rows('services', 'option') ): the_row();
							$link = get_sub_field('link');

							if( $link ) : 
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
								?>
								<a href="<?php echo esc_url( $link_url ); ?>" class="footer__services-item" target="<?php echo esc_attr( $link_target ); ?>">
									<?php echo esc_html( $link_title ); ?>
								</a>
							<?php endif; ?>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>

			<div class="col-12 col-lg-8 col-xl-6">
				<div class="footer__menu">
					<?php
						wp_nav_menu(array(
							'theme_location'   => 'footer',
							'container'        => 'div',
							'container_id'     => 'footer-menu-wrapper',
							'container_class'  => 'footer__menu-links',
							'menu_id'          => 'footer-menu',
							'menu_class'       => 'footer__menu-list',
							'depth'            =>  2
						));
					?>
				</div>
			</div>

			<div class="col-12 col-lg-4 col-xl-3">
				<div class="footer__heading">
					<?php echo pll__("Kontakt"); ?>
				</div>

				<div class="footer__contact">
					<?php if( $phone_number ) : ?>
						<a href="tel:<?php echo $phone_number; ?>" class="footer__contact-item footer__contact-item--link d-flex align-items-center">
							<?php if( !empty( $phone_icon ) ) : ?>
								<img src="<?php echo esc_url($phone_icon['url']); ?>" class="footer__contact-icon img-fluid" alt="<?php echo esc_attr($phone_icon['alt']); ?>">
							<?php endif; ?>
							<span class="d-block"><?php echo $phone_number; ?></span>
						</a>
					<?php endif; ?>

					<?php if( $email_address ) : ?>
						<a href="mailto:<?php echo $email_address; ?>" class="footer__contact-item footer__contact-item--link d-flex align-items-center">
							<?php if( !empty( $email_icon ) ) : ?>
								<img src="<?php echo esc_url($email_icon['url']); ?>" class="footer__contact-icon img-fluid" alt="<?php echo esc_attr($email_icon['alt']); ?>">
							<?php endif; ?>
							<span class="d-block"><?php echo $email_address; ?></span>
						</a>
					<?php endif; ?>

					<?php if( $address_details ) : ?>
						<div class="footer__contact-item d-flex align-items-center mb-0">
							<?php if( !empty( $address_icon ) ) : ?>
								<img src="<?php echo esc_url($address_icon['url']); ?>" class="footer__contact-icon img-fluid" alt="<?php echo esc_attr($address_icon['alt']); ?>">
							<?php endif; ?>
							<span class="footer__contact-text d-block"><?php echo $address_details; ?></span>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>

	<div class="footer__bottom">
		<div class="container">
			<div class="row">
				<div class="col-6">
					<p class="footer__bottom-copy">Copyright <?php echo date("Y"); ?> DM Group</p>
				</div>

				<div class="col-6">
					<div class="footer__bottom-link d-flex justify-content-end">
						<span><?php echo pll__("Realizacja"); ?>:</span>
						<a href="#" target="_blank">Creative Design</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
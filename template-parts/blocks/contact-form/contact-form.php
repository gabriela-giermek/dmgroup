<?php
/**
* Contact form Block Template
*/

// Custom fields
$title = get_field('contact_form_title');
$subtitle = get_field('contact_form_subtitle');
$form_code = get_field('contact_form_id');
?>
<div class="contact-form">
	<div class="container">
		<div class="row">
			<div class="col-12 col-xl-10 offset-xl-1 col-fhd-8 offset-fhd-2">
				<?php if( !empty( $title ) ) : ?>
					<div class="contact-form__title text-center">
						<?php echo $title; ?>
					</div>
				<?php endif; ?>

				<?php if( !empty( $subtitle ) ) : ?>
					<div class="contact-form__subtitle text-center">
						<?php echo $subtitle; ?>
					</div>
				<?php endif; ?>

				<?php if( $form_code ) : ?>
					<div class="contact-form__form form">
						<?php echo do_shortcode( $form_code ); ?>
					</div>	
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
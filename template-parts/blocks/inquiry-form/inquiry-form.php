<?php
/**
* Inquiry-form Block Template
*/

// Custom fields
$title = get_field('inquiry_form_title');
$subtitle = get_field('inquiry_form_subtitle');
$form_code = get_field('inquiry_form_id');
?>
<div class="inquiry-form">
	<div class="container">
		<div class="row">
			<div class="col-12 col-fhd-10 offset-fhd-1">
				<?php if( !empty( $title ) ) : ?>
					<div class="inquiry-form__title text-center">
						<?php echo $title; ?>
					</div>
				<?php endif; ?>

				<?php if( !empty( $subtitle ) ) : ?>
					<div class="inquiry-form__subtitle text-center">
						<?php echo $subtitle; ?>
					</div>
				<?php endif; ?>

				<?php if( $form_code ) : ?>
					<div class="inquiry-form__form form">
						<?php echo do_shortcode( $form_code ); ?>
					</div>	
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php
/**
* Image and text Block Template
*/

// Custom fields
$img_text = get_field('img_text');
$title = $img_text['img_text_title'];
$text = $img_text['img_text_text'];
$link = $img_text['img_text_link'];
$img = $img_text['img_text_img'];
$bg = $img_text['img_text_bg'];

if( $img_text ) : ?>
	<div class="img-text">
		<div class="img-text__content container">
			<div class="row flex-row-reverse justify-content-md-end align-items-center">
				<div class="img-text__inner col-12 col-md-6 col-fhd-4 offset-fhd-1">
					<?php if( !empty( $title ) ) : ?>
						<div class="img-text__title">
							<?php echo $title; ?>
						</div>
					<?php endif; ?>

					<?php if( !empty( $text ) ) : ?>
						<div class="img-text__text">
							<?php echo $text; ?>
						</div>
					<?php endif; ?>

					<?php if( $link ) :
						$link_url = $link['url'];
						$link_title = $link['title'];
						$link_target = $link['target'] ? $cta_link['target'] : '_self';
						?>
						<a class="img-text__link btn btn--link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
							<?php echo esc_html( $link_title ); ?>
						</a>
					<?php endif; ?>
				</div>

				<div class="img-text__img col-12 col-md-6">
					<?php if( !empty( $img ) ) : ?>
						<img src="<?php echo esc_url($img['url']); ?>" class="img-text__img-inner img-fluid" alt="<?php echo esc_attr($img['alt']); ?>">
					<?php endif; ?>
				</div>
			</div>
		</div>

		<?php if( !empty( $bg ) ) : ?>
			<img src="<?php echo esc_url($bg['url']); ?>" class="img-text__bg d-none d-xl-block" alt="<?php echo esc_attr($bg['alt']); ?>">
		<?php endif; ?>
	</div>
<?php endif; ?>
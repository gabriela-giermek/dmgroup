<?php
/**
* Image and text Block Template
*/

// Custom fields
$img_text_top = get_field('img_text_top');
$title = $img_text_top['img_text_top_title'];
$text = $img_text_top['img_text_top_text'];
$link = $img_text_top['img_text_top_link'];
$img = $img_text_top['img_text_top_img'];

if( $img_text_top ) : ?>
	<div class="img-text-top">
		<div class="img-text-top__images">
			<?php if( !empty( $img ) ) : ?>
				<img src="<?php echo esc_url($img['url']); ?>" class="img-text-top__images-img img-fluid" alt="<?php echo esc_attr($img['alt']); ?>">
			<?php endif; ?>
		</div>

		<div class="img-text-top__content text-center">
			<div class="container">
				<div class="row">
					<div class="col-12 col-xl-10 offset-xl-1 col-fhd-8 offset-fhd-2">
						<?php if( !empty( $title ) ) : ?>
							<div class="img-text-top__title">
								<?php echo $title; ?>
							</div>
						<?php endif; ?>

						<?php if( !empty( $text ) ) : ?>
							<div class="img-text-top__text">
								<?php echo $text; ?>
							</div>
						<?php endif; ?>

						<?php if( $link ) :
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
							?>
							<a href="<?php echo esc_url( $link_url ); ?>" class="img-text-top__link btn btn--link" target="<?php echo esc_attr( $link_target ); ?>">
								<?php echo esc_html( $link_title ); ?>
							</a>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>
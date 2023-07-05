<?php
/**
* Gallery Block Template
*/

// Custom fields
$gallery = get_field('gallery');
$images = $gallery['images'];

if( $gallery ) : ?>
	<div class="gallery">
		<?php if( $images ): ?>
			<div id="gallerySlider" class="gallery__items">
				<?php foreach( $images as $image ) : ?>
					<div class="gallery__item">
						<a data-src="<?php echo $image['url']; ?>" class="gallery__item-link d-block" data-fancybox="gallery">
							<img src="<?php echo $image['sizes']['gallery-thumbnail']; ?>" class="img-fluid" alt="<?php echo $image['alt']; ?>">
						</a>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
<?php endif; ?>
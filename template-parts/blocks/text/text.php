<?php
/**
* Text Block Template
*/

// Custom fields
$text_block = get_field('text_block');
$title = $text_block['title'];
$text = $text_block['text'];

if( $text_block ) : ?>
	<div class="text-block">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-6">
					<?php if( $title ) : ?>
						<div class="text-block__title">
							<?php echo $title; ?>
						</div>
					<?php endif; ?>
				</div>

				<div class="col-12 col-lg-6">
					<?php if( $text ) : ?>
						<div class="text-block__text">
							<?php echo $text; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>
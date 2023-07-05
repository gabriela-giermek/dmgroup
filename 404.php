<?php
/**
* Template for 404 page
**/


//Custom fields
$logo = get_field('logo_vertical_color', 'option');
?>

<?php get_header(); ?>

<div class="page-404">
  <div class="container-fluid text-center">
		<?php if( !empty( $logo ) ) : ?>
			<a href="<?php echo home_url(); ?>" class="page-404__logo flex-shrink-0 d-block">
				<img src="<?php echo esc_url($logo['url']); ?>" class="page-404__logo-img img-fluid mx-auto" alt="<?php echo esc_attr($logo['alt']); ?>">
			</a>
		<?php endif; ?>

		<div class="page-header pt-0">
			<h1 class="page-header__title page-404__title">404</h1>
		</div>

    <div class="page-404__description">
      <h2 class="page-404__description-subtitle"><?php echo pll__("Podana strona nie istnieje"); ?> :(</h2>
      <p><?php echo pll__("Upewnij się, że adres URL został wprowadzony poprawnie"); ?></p>
      <p><a href="<?php echo home_url(); ?>" class="page-404__link font-weight-bold btn btn--link"><?php echo pll__("Powrót na stronę główną"); ?></a></p>
    </div>
  </div>
</div>

<?php get_footer(); ?>
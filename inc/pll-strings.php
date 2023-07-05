<?php

// Custom strings
if (!function_exists('register_translations')) :
	function register_translations() {
		pll_register_string( 'dmgroup', 'Rok produkcji' );
		pll_register_string( 'dmgroup', 'Czytaj więcej' );
		pll_register_string( 'dmgroup', 'Model' );
		pll_register_string( 'dmgroup', 'Cena' );
		pll_register_string( 'dmgroup', 'Motogodziny' );
		pll_register_string( 'dmgroup', 'Przebieg' );
		pll_register_string( 'dmgroup', 'Pojemność silnika' );
		pll_register_string( 'dmgroup', 'Moc silnika' );
		pll_register_string( 'dmgroup', 'Skontaktuj się z nami' );
		pll_register_string( 'dmgroup', 'Specyfikacja' );
		pll_register_string( 'dmgroup', 'Opis' );
		pll_register_string( 'dmgroup', 'Kontakt' );
		pll_register_string( 'dmgroup', 'Zobacz wszystko' );
		pll_register_string( 'dmgroup', 'Oferta' );
		pll_register_string( 'dmgroup', 'Realizacja' );
		pll_register_string( 'dmgroup', 'brutto' );
		pll_register_string( 'dmgroup', 'Zapytanie o cenę' );
		pll_register_string( 'dmgroup', 'Strona główna' );
		pll_register_string( 'dmgroup', 'Strona 404' );
		pll_register_string( 'dmgroup', 'Strona' );
		pll_register_string( 'dmgroup', 'Archiwum według kategorii' );
		pll_register_string( 'dmgroup', 'Podana strona nie istnieje' );
		pll_register_string( 'dmgroup', 'Upewnij się, że adres URL został wprowadzony poprawnie' );
		pll_register_string( 'dmgroup', 'Powrót na stronę główną' );
		pll_register_string( 'dmgroup', 'Brak ofert w wybranej kategorii' );
		pll_register_string( 'dmgroup', 'W sprawie wybranej oferty prosimy o kontakt z naszym pracownikiem' );
	}
	add_action('init', 'register_translations');
endif;
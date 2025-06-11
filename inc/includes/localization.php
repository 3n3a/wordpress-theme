<?php
/**
 * Localization strings.
 *
 * @package air-frost
 */

namespace Air_Light;

add_filter( 'air_helper_pll_register_strings', function() {
  $strings = [
    // 'Key: String' => 'String',
  ];

  /**
   * Uncomment if you need to have default air-frost accessibility strings
   * translatable via Polylang string translations.
   */
  // foreach ( get_default_localization_strings( get_bloginfo( 'language' ) ) as $key => $value ) {
  // $strings[ "Accessibility: {$key}" ] = $value;
  // }

  return apply_filters( 'air_light_translations', $strings );
} );

function get_default_localization_strings( $language = 'en' ) {
  $strings = [
    'en'  => [
      'Add a menu'                                   => __( 'Add a menu', 'air-frost' ),
      'Open main menu'                               => __( 'Open main menu', 'air-frost' ),
      'Close main menu'                              => __( 'Close main menu', 'air-frost' ),
      'Main navigation'                              => __( 'Main navigation', 'air-frost' ),
      'Back to top'                                  => __( 'Back to top', 'air-frost' ),
      'Open child menu for'                          => __( 'Open child menu for', 'air-frost' ),
      'Close child menu for'                         => __( 'Close child menu for', 'air-frost' ),
      'Skip to content'                              => __( 'Skip to content', 'air-frost' ),
      'Skip over the carousel element'               => __( 'Skip over the carousel element', 'air-frost' ),
      'External site'                                => __( 'External site', 'air-frost' ),
      'opens in a new window'                        => __( 'opens in a new window', 'air-frost' ),
      'Page not found.'                              => __( 'Page not found.', 'air-frost' ),
      'The reason might be mistyped or expired URL.' => __( 'The reason might be mistyped or expired URL.', 'air-frost' ),
      'Search'                                       => __( 'Search', 'air-frost' ),
      'Block missing required data'                  => __( 'Block missing required data', 'air-frost' ),
      'This error is shown only for logged in users' => __( 'This error is shown only for logged in users', 'air-frost' ),
      'No results found for your search'             => __( 'No results found for your search', 'air-frost' ),
      'Edit'                                         => __( 'Edit', 'air-frost' ),
      'Previous slide'                               => __( 'Previous slide', 'air-frost' ),
      'Next slide'                                   => __( 'Next slide', 'air-frost' ),
      'Last slide'                                   => __( 'Last slide', 'air-frost' ),
    ],
    'fi'  => [
      'Add a menu'                                   => 'Luo uusi valikko',
      'Open main menu'                               => 'Avaa päävalikko',
      'Close main menu'                              => 'Sulje päävalikko',
      'Main navigation'                              => 'Päävalikko',
      'Back to top'                                  => 'Siirry takaisin sivun alkuun',
      'Open child menu for'                          => 'Avaa alavalikko kohteelle',
      'Close child menu for'                         => 'Sulje alavalikko kohteelle',
      'Skip to content'                              => 'Siirry suoraan sisältöön',
      'Skip over the carousel element'               => 'Hyppää karusellisisällön yli seuraavaan sisältöön',
      'External site'                                => 'Ulkoinen sivusto',
      'opens in a new window'                        => 'avautuu uuteen ikkunaan',
      'Page not found.'                              => 'Hups. Näyttää, ettei sivua löydy.',
      'The reason might be mistyped or expired URL.' => 'Syynä voi olla virheellisesti kirjoitettu tai vanhentunut linkki.',
      'Search'                                       => 'Haku',
      'Block missing required data'                  => 'Lohkon pakollisia tietoja puuttuu',
      'This error is shown only for logged in users' => 'Tämä virhe näytetään vain kirjautuneille käyttäjille',
      'No results for your search'                   => 'Haullasi ei löytynyt tuloksia',
      'Edit'                                         => 'Muokkaa',
      'Previous slide'                               => 'Edellinen dia',
      'Next slide'                                   => 'Seuraava dia',
      'Last slide'                                   => 'Viimeinen dia',
    ],
  ];

  return ( array_key_exists( $language, $strings ) ) ? $strings[ $language ] : $strings['en'];
} // end get_default_localization_strings

function get_default_localization( $string ) { // phpcs:ignore Universal.NamingConventions.NoReservedKeywordParameterNames.stringFound
  if ( function_exists( 'ask__' ) && array_key_exists( "Accessibility: {$string}", apply_filters( 'air_helper_pll_register_strings', [] ) ) ) {
    return ask__( "Accessibility: {$string}" );
  }

  return esc_html( get_default_localization_translation( $string ) );
} // end get_default_localization

function get_default_localization_translation( $string ) { // phpcs:ignore Universal.NamingConventions.NoReservedKeywordParameterNames.stringFound
  $language = get_bloginfo( 'language' );
  if ( function_exists( 'pll_the_languages' ) ) {
    $language = pll_current_language();
  }

  $translations = get_default_localization_strings( $language );

  return ( array_key_exists( $string, $translations ) ) ? $translations[ $string ] : '';
} // end get_default_localization_translation

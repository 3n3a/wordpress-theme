<?php
/**
 * General hooks.
 *
 * @package air-frost
 */

namespace Air_Frost;

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function widgets_init() {
  register_sidebar( array(
    'name'          => esc_html__( 'Sidebar', 'air-frost' ),
    'id'            => 'sidebar-1',
    'description'   => esc_html__( 'Add widgets here.', 'air-frost' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
} // end widgets_init

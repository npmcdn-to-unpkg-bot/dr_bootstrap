<?php
/**
 * Registers menus
 *
 * @return void
 */
function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu'          => __('Main Menu'),
      'header-menu'        => __('Header Menu'),
      'who-we-are'         => __('Footer: Who We Are'),
      'what-we-do'         => __('Footer: What We Do'),
      'how-were-different' => __("Footer: How We're Different"),
      'resources'          => __('Footer: Resources'),
      'our-sites'          => __('Footer: Our Sites')
    )
  );
}
add_action( 'init', 'register_my_menus' );

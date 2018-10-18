<?php

/**
* wpAlpha theme bootstrap
*/
function wpAlpha_bootstrapping(){
  load_theme_textdomain( 'wpAlpha' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  register_nav_menu('Top_menu', __('Top menu', 'wpAlpha'));
  register_nav_menu('Footer_menu', __('Footer menu', 'wpAlpha'));
}
add_action('after_setup_theme', 'wpAlpha_bootstrapping');
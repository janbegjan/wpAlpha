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
/**
* wpAlpha theme assets
*/
function wpAlpha_assets(){
  //stylesheets
  wp_enqueue_style( 'bootstrap-css', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );
  wp_enqueue_style('wpAlpha_stylesheet-css', get_stylesheet_uri(), null, time());
  //scripts
  wp_enqueue_script('wpAlpha-main-js', get_theme_file_uri('/assets/js/main.js' ), array('jquery'), time(), true);
}
add_action('wp_enqueue_scripts', 'wpAlpha_assets');
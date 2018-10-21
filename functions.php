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
/**
* Add Right sidebar, Footer Widgets register.
*/
function wpAlpha_register_sidebar() {
  register_sidebar( array(
  'name'          => __( 'Right Sidebar', 'wpAlpha' ),
  'id'            => 'sidebar_right',
  'description'   => __( 'Widgets in this area will be shown on single post page.', 'wpAlpha' ),
  'before_widget' => '<section id="%1s" class="widget %2s">',
  'after_widget'  => '</section>',
  'before_title'  => '<h2 class="widget-title">',
  'after_title'   => '</h2>',
  ));
  register_sidebar( array(
  'name'          => __( 'Footer Sidebar', 'wpAlpha' ),
  'id'            => 'sidebar_footer',
  'description'   => __( 'Widgets in this area will be shown on footer section.', 'wpAlpha' ),
  'before_widget' => '<section id="%1s" class="widget %2s">',
  'after_widget'  => '</section>',
  'before_title'  => '<h2 class="widget-title">',
  'after_title'   => '</h2>',
  ));
}
add_action( 'widgets_init', 'wpAlpha_register_sidebar' );
/**
* Add post password filter.
*/
function wpAlpha_post_password_required($excerpt)
{
  if(!post_password_required())
  {
    echo $excerpt;
  }else
  {
    echo get_the_password_form();
  }
}
add_filter( 'the_excerpt', 'wpAlpha_post_password_required' );
/**
* Add post post protected title filter.
*/
function wpAlpha_protected_title_change()
{
return '%s';
}
add_filter( 'protected_title_format', 'wpAlpha_protected_title_change' );
/**
* Adding B4 list-inline-item Class to menus.
*/
function wpAlpha_menu_item_class($classes, $item){
$classes[] = 'list-inline-item';
return $classes;
}
add_filter( 'nav_menu_css_class', 'wpAlpha_menu_item_class', 10, 2 );
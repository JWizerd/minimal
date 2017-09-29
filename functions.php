<?php

// THEME SUPPORT
add_theme_support( 'custom-header' );
add_theme_support( 'custom-background' );
add_theme_support( 'title-tag' );
add_theme_support( 'html5');
add_theme_support( 'menus' );
add_theme_support( 'custom-logo' );
add_theme_support( 'gallery' );
// different ways of showing post content
// add_theme_support( 'post-formats', array('video', 'aside', 'gallery', 'image'));

add_theme_support( 'post-thumbnails' );

//register navigations
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {
            register_nav_menu( 'primary', __( 'Primary Navigation', 'ppp' ) );
						register_nav_menu( 'posts', __( 'Posts', 'ppp' ) );
						register_nav_menu( 'categories', __( 'Categories', 'ppp' ) );
        } endif;

// styles and scripts
function theme_styles() {
	wp_enqueue_style( 'wpb-fa', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assets/build/css/styles.css' );
	wp_enqueue_style('print_css', get_template_directory_uri() . '/assets/css/print.css' );
  wp_enqueue_style('animate_css', get_template_directory_uri() . '/assets/css/animate.min.css' );
  wp_enqueue_style('questrial_fonts', 'https://fonts.googleapis.com/css?family=Questrial' );
}

add_action('wp_enqueue_scripts', 'theme_styles' );

function theme_js() {

	global $wp_scripts;

	wp_register_script('html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );

	wp_register_script('respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );

	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '', true );

  wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '', true );
}

add_action('wp_enqueue_scripts', 'theme_js' );


// custom post type
add_action('init', 'create_core_capability_post_type');
function create_core_capability_post_type() {
  register_post_type(
    'capability',
    array(
      'labels'      => array(
        'name'          => __('Core Capabilities'),
        'singular_name' => __('Core Capability')
      ),
      'public'      => true,
      'has_archive' => false,
      'rewrite'     => array('slug' => 'core-capabilities'),
      'supports'    => array('title', 'custom-fields', 'editor', 'thumbnail')
    )
  );
}

// custom post type
add_action('init', 'create_markets_post_type');
function create_markets_post_type() {
  register_post_type(
    'markets',
    array(
      'labels'      => array(
        'name'          => __('Markets'),
        'singular_name' => __('Market')
      ),
      'public'      => true,
      'has_archive' => false,
      'rewrite'     => array('slug' => 'markets-we-serve'),
      'supports'    => array('title', 'custom-fields', 'editor', 'thumbnail')
    )
  );
}

// custom post type
add_action('init', 'create_slides_post_type');
function create_slides_post_type() {
  register_post_type(
    'slides',
    array(
      'labels'      => array(
        'name'          => __('Slides'),
        'singular_name' => __('Slide')
      ),
      'public'      => true,
      'has_archive' => true,
      'supports'    => array('title', 'custom-fields', 'editor', 'thumbnail'),
      'exclude_from_search' => true
    )
  );
}

// register widgets | widgets located in widgets.php
if ($wp_version >= 2.8) require_once(TEMPLATEPATH.'/widgets.php');

// remove special characters from strings
function remove_special_chars($string) {
  return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
}

//Custom Theme Settings
add_action('admin_menu', 'add_gcf_interface');

function add_gcf_interface() {
	add_options_page('Company Details', 'Company Details', '8', 'company-details', 'editcompanydetails');
}

function custom_excerpt_length( $length ) {
  return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );



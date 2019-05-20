<?php

// enqueue styles and scripts
function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'all', get_template_directory_uri() . '/assets/css/all.css');
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'));
   
  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

// register menus
  function register_my_menu() {
    register_nav_menu('main-menu',__( 'Main Menu' ));
    register_nav_menu('footer-link',__( 'Footer Links' ));
  }
  add_action( 'init', 'register_my_menu' );

  // add theme support
  add_theme_support( 'custom-logo' );
  add_theme_support( 'post-thumbnails' ); 

  
?>
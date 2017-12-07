<?php

// Style
//Scripts
function additional_custom_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri());
  wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css' );
  wp_enqueue_script( 'jQuery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js' );
  wp_enqueue_script( 'Slick', get_bloginfo('template_url') . '/js/slick.min.js');
  // wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js' );
  // wp_enqueue_script( 'jQuery2', '//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js');
}

add_action('wp_enqueue_scripts', 'additional_custom_scripts');

//Excerpt Length and Style
function wpdocs_custom_excerpt_length( $length ) {
    return 35;
}

add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
    return sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( '...Read More', 'textdomain' )
    );
}

add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

function thumbnails() {
    add_theme_support( 'post-thumbnails' );
}

add_action('after_setup_theme', 'thumbnails');

//Menu Registration
function register_my_menus() {
  register_nav_menus(
    array(
      'primary' => __( 'Primary Menu' )
    )
  );
}

add_action( 'init', 'register_my_menus' );

//Widgets
function init_widgets($id) {
  register_sidebar(array(
    'Name' => 'Sidebar',
    'id' => 'sidebar',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => ''
  ));
}

add_action('widgets_init', 'init_widgets')



 ?>

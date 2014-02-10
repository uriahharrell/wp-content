<?php

if (!function_exists('FoundationPress_scripts')) :
  function FoundationPress_scripts() {

    // deregister the jquery version bundled with wordpress
    wp_deregister_script( 'jquery' );

    // enqueue modernizr, jquery and foundation
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr/modernizr.min.js', array(), '1.0.0', false );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery/jquery.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'foundation', get_template_directory_uri() . '/js/app.js', array('jquery'), '1.0.0', true );

  }

  add_action( 'wp_enqueue_scripts', 'FoundationPress_scripts' );
endif;

?>
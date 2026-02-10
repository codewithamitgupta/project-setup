<?php
if ( ! defined( 'ABSPATH' ) ) exit;

define( 'HELLO_ELEMENTOR_CHILD_VERSION', '2.0.0' );

add_action( 'wp_enqueue_scripts', function() {
    // Parent theme style (Hello Elementor)
    wp_enqueue_style( 'hello-elementor', get_template_directory_uri() . '/style.css' );

    // Child theme main stylesheet
    wp_enqueue_style( 'hello-elementor-child-style', get_stylesheet_uri(), ['hello-elementor'], HELLO_ELEMENTOR_CHILD_VERSION );

    // Additional custom CSS (if you have assets/css/style.css)
    wp_enqueue_style( 'hello-child-custom-css', get_stylesheet_directory_uri() . '/assets/css/style.css', ['hello-elementor-child-style'], HELLO_ELEMENTOR_CHILD_VERSION );

    // Custom JavaScript
    wp_enqueue_script( 'hello-child-js', get_stylesheet_directory_uri() . '/assets/js/script.js', ['jquery'], time(), true );
}, 20 );
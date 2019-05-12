<?php
function styles() {
  wp_enqueue_style('core', get_template_directory_uri() . '/style.css', '', rand(1, 998999898999) );
}

function scripts() {
  wp_enqueue_script('my-js', get_template_directory_uri() . '/scripts.js', false);
}

add_action( 'wp_enqueue_scripts', 'styles' );
add_action( 'wp_enqueue_scripts', 'scripts' );

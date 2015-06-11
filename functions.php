<?php
add_theme_support( 'post-thumbnails' );

add_action( 'after_setup_theme', 'moje_slike' );
function moje_slike() {
  add_image_size( 'category-thumb', 300 ); // 300 pixels wide (and unlimited height)
  add_image_size( 'homepage-thumb', 220, 180, true ); // (cropped)
}
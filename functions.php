<?php 

function german_quiz_files() {
  wp_enqueue_style('quiz_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'german_quiz_files');
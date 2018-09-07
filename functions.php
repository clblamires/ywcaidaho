<?php

// this is a child theme based on Talon, by aThemes
// make sure you have it installed before attempting to use this

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}


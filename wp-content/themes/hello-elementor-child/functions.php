<?php 

function hello_elementor_child_enqueue_scripts() {
	wp_enqueue_style( 'hello-elementor-child', get_stylesheet_directory_uri() . '/style.css', ['hello-elementor'], '1.0.0' );
	// wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/main.js', array('jquery'), '1.0.0', true );
	// wp_enqueue_script( 'slick_script', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts' );

// Current year shortcode [year] 
function year_shortcode() {
	$year = date('Y');
	return $year;
  }
  add_shortcode('year', 'year_shortcode');
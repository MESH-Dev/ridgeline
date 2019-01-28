<?php

//Use this file for wp menus, sidebars, image sizes, loadup scripts.

//Hidden magic
//include get_template_directory() . '/inc/key.php';

//echo $API_KEY;

//enqueue scripts and styles *use production assets. Dev assets are located in  /css and /js
function loadup_scripts() {
    $key = get_option('google_api_key');
    wp_enqueue_script( 'mapStyle-js', get_template_directory_uri().'/js/map-styles.js', array('jquery'), '1.0.0', true );
    if(is_front_page() || is_page_template('templates/template-property.php')){
        wp_enqueue_script( 'google-map-api', 'https://maps.googleapis.com/maps/api/js?key='.$key, array('jquery'), '1.0.0', true );
        //wp_enqueue_script( 'mapfull-js', get_template_directory_uri().'/js/home-map.js', array('jquery'), '1.0.0', true );
        
    }

    if(is_front_page()){
        wp_enqueue_script( 'mapfull-js', get_template_directory_uri().'/js/home-map.js', array('jquery'), '1.0.0', true );
    }

    if(is_page_template('templates/template-property.php')){
        wp_enqueue_script( 'singlemap-js', get_template_directory_uri().'/js/single-map.js', array('jquery'), '1.0.0', true );
    }
    //wp_enqueue_script( 'vue-js', '//cdnjs.cloudflare.com/ajax/libs/vue/2.4.4/vue.js', array('jquery'), '1.0.0', true );
    //wp_enqueue_script( 'smoothstate-js', '//cdnjs.cloudflare.com/ajax/libs/smoothState.js/0.7.2/jquery.smoothState.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'slick-js', get_template_directory_uri().'/js/slick.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'theme-js', get_template_directory_uri().'/js/mesh.js', array('jquery'), '1.0.0', true );

    wp_enqueue_style( 'slick-css', get_template_directory_uri().'/css/slick.css', '1.0.0', true );
    wp_enqueue_style( 'slick-theme-css', get_template_directory_uri().'/css/slick-theme.css', '1.0.0', true );     
}
add_action( 'wp_enqueue_scripts', 'loadup_scripts' );

// Add Thumbnail Theme Support
add_theme_support('post-thumbnails');
add_image_size('background-fullscreen', 1800, 1200, true);
add_image_size('short-banner', 1800, 800, true);

add_image_size('large', 700, '', true); // Large Thumbnail
add_image_size('medium', 250, '', true); // Medium Thumbnail
add_image_size('small', 120, '', true); // Small Thumbnail
add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');



//Register WP Menus
register_nav_menus(
    array(
        'main_nav' => 'Header and breadcrumb trail heirarchy',
        'social_nav' => 'Social menu used throughout',
        'gateway_nav' => 'Topmost nav in the header'
    )
);

// Register Widget Area for the Sidebar
register_sidebar( array(
    'name' => __( 'Primary Widget Area', 'Sidebar' ),
    'id' => 'primary-widget-area',
    'description' => __( 'The primary widget area', 'Sidebar' ),
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
) );









?>

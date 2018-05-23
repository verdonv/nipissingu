<?php
/**
 * Nipissing U functions and definitions
 *
 * Sets up the theme and provides some helper functions. Some helper functions
 * are used in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 */

/* load the parent and child stylesheets */
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style')
    );
}


// deregister the header images of Twenty Eleven, and register a few new RAW header images//
add_action( 'after_setup_theme', 'raw_theme_header_images', 11 ); 

function raw_theme_header_images() {
    unregister_default_headers( array( 'wheel', 'shore', 'trolley', 'pine-cone', 'chessboard', 'lanterns', 'willow', 'hanoi' ) ); 
    $folder = get_stylesheet_directory_uri();
    register_default_headers( array(
        'family' => array(
            'url' => $folder.'/images/headers/family.jpg',
            'thumbnail_url' => $folder.'/images/headers/family-thumb.jpg',
            /* translators: header image description */
            'description' => __( 'Family', 'twentyeleven' )
        ),
        'guitar' => array(
            'url' => $folder.'/images/headers/guitar.jpg',
            'thumbnail_url' => $folder.'/images/headers/guitar-thumb.jpg',
            /* translators: header image description */
            'description' => __( 'Guitar', 'twentyeleven' )
        ),
        'students' => array(
            'url' => $folder.'/images/headers/students.jpg',
            'thumbnail_url' => $folder.'/images/headers/students-thumb.jpg',
            /* translators: header image description */
            'description' => __( 'Students', 'twentyeleven' )
        ),
        'volleyball' => array(
            'url' => $folder.'/images/headers/volleyball.jpg',
            'thumbnail_url' => $folder.'/images/headers/volleyball-thumb.jpg',
            /* translators: header image description */
            'description' => __( 'Volleyball', 'twentyeleven' )
        ),
        'frosh' => array(
            'url' => $folder.'/images/headers/frosh.jpg',
            'thumbnail_url' => $folder.'/images/headers/frosh-thumb.jpg',
            /* translators: header image description */
            'description' => __( 'Frosh', 'twentyeleven' )
        )
    )
    );
}

// removes the word Protected from the title of password protected pages
add_filter('protected_title_format', 'vvblankptitle');
function vvblankptitle($title) {
       return '%s';
}



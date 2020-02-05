<?php
function load_css() {
    wp_register_style('style', get_template_directory_uri() . '/public/css/style.css',
        array(), false, 'all');
    wp_enqueue_style('style');
}

// add_action('wp_enqueue_scripts', 'load_css', 20);
add_action( 'wp_enqueue_scripts', 'load_css');

function load_js() {
    // wp_deregister_script('jquery');
    
    // wp_register_script('index', get_template_directory_uri() . '/public/js/index.js',
    //     array(), false, 'all');
    // wp_enqueue_script('index');

    if (is_front_page()) {
        wp_register_script('swiper', get_template_directory_uri() . '/public/js/thirdParty/swiper.js',
            array(), false, 'all');
        wp_enqueue_script('swiper');
    }

    wp_register_script('events', get_template_directory_uri() . '/public/js/events.js',
        array(), false, 'all');
    wp_enqueue_script('events');

    wp_register_script('onLoad', get_template_directory_uri() . '/public/js/onLoad.js',
        array(), false, 'all');
    wp_enqueue_script('onLoad');
    
}

add_action('wp_enqueue_scripts', 'load_js');

function datsaphotography_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('widgets');
    add_theme_support( 'post-thumbnails' );

    // add_theme_support( 'align-wide' );
    // add_theme_support('editor-styles');
    // add_theme_support('wp-block-styles');
    // add_theme_support( 'dark-editor-style' );
    // add_theme_support( 'responsive-embeds' );
    
    // Custom logo.
    $logo_width  = 300;
    $logo_height = 120;
    
    // If the retina setting is active, double the recommended width and height.
    // if ( get_theme_mod( 'retina_logo', false ) ) {
    //     $logo_width  = floor( $logo_width * 2 );
    //     $logo_height = floor( $logo_height * 2 );
    // }
    // add_image_size( string $name, int $width, int $height, bool|array $crop = false )
    // add_theme_support(
    //     'custom-logo',
    //     array(
    //         'height'      => $logo_height,
    //         'width'       => $logo_width,
    //         'flex-height' => true,
    //         'flex-width'  => true,
    //     )
    // );
}

add_action( 'after_setup_theme', 'datsaphotography_theme_support' );

function datsaphotography_customizer_setting($wp_customize) {
    $wp_customize->add_section('imageoner', array(
        "title" => 'Logo',
        "priority" => 28,
        "description" => __( 'Upload logos', 'theme-slug' )
    ));
    // add a setting 
    $wp_customize->add_setting('logo_dark');
    // Add a control to upload the hover logo
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo_dark', array(
        'label' => 'Upload Dark Logo',
        'section' => 'imageoner', //this is the section where the custom-logo from WordPress is
        'settings' => 'logo_dark',
        'priority' => 8 // show it just below the custom-logo
    )));

    // add a setting 
    $wp_customize->add_setting('logo_light');
    // Add a control to upload the hover logo
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo_light', array(
        'label' => 'Upload Light Logo',
        'section' => 'imageoner', //this is the section where the custom-logo from WordPress is
        'settings' => 'logo_light',
        'priority' => 8 // show it just below the custom-logo
    )));
}
    
add_action('customize_register', 'datsaphotography_customizer_setting');

// function somename_customize_register( $wp_customize ) {
//     $wp_customize->get_setting( 'image_control_one' )->transport = 'postMessage';
//     // Add and manipulate theme images to be used.
//     $wp_customize->add_section('imageoner', array(
//         "title" => 'Home Page Images',
//         "priority" => 28,
//         "description" => __( 'Upload images to display on the homepage.', 'theme-slug' )
//     ));
//     $wp_customize->add_setting('image_control_one', array(
//         'default' => '',
//         'type' => 'theme_mod',
//         'capability' => 'edit_theme_options',
//     ));
//     $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'image_control_one', array(
//         'label' => __( 'Featured Home Page Image One', 'theme-slug' ),
//         'section' => 'imageoner',
//         'settings' => 'image_control_one',
//     ))
//     );
// }
// add_action( 'customize_register', 'somename_customize_register' );

function register_custom_nav_menus() {
    register_nav_menus( array(
        'main-menu' => 'Main Menu Location',
        ) );
}
    
add_action( 'after_setup_theme', 'register_custom_nav_menus' );

function my_sidebars() {
    register_sidebar(
        array(
            'name' => 'Top bar',
            'id' => 'top-bar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );
}

add_action( 'widgets_init', 'my_sidebars' );

// Check if page has children page
function page_has_children() {
    global $post;
    
    $pages = get_pages('child_of=' . $post->ID);
    
    if (count($pages) > 0):
      return true;
    else:
      return false;
    endif;
}

// Custom function to get gallery description. When gallery is linked to page, Nextgen Gallery does not show gallery description.
function get_gallery_description() {
    
    // Only in gallery last child page
    if (!is_page(['home', 'gallery', 'services', 'about', 'contacts']) && !page_has_children()):
        global $wpdb;
        $post = get_post();
        $page_id = $post->ID;
        $results = $wpdb->get_results('SELECT galdesc FROM `wp_ngg_gallery` WHERE pageid = '.$page_id.'');
        echo '<p>'.$results[0]->galdesc.'</p>';
    else:
        return false;
    endif;

    // echo "<pre>";
    // print_r($results);
    // echo "</pre>";
    
    // print_r(wp_list_pages(['child_of'=>51]));
}


// function mytheme_setup_theme_supported_features() {
//     add_theme_support( 'editor-color-palette', array(
//         array(
//             'name' => __( 'strong magenta', 'themeLangDomain' ),
//             'slug' => 'strong-magenta',
//             'color' => '#a156b4',
//         ),
//         array(
//             'name' => __( 'light grayish magenta', 'themeLangDomain' ),
//             'slug' => 'light-grayish-magenta',
//             'color' => '#d0a5db',
//         ),
//         array(
//             'name' => __( 'very light gray', 'themeLangDomain' ),
//             'slug' => 'very-light-gray',
//             'color' => '#eee',
//         ),
//         array(
//             'name' => __( 'very dark gray', 'themeLangDomain' ),
//             'slug' => 'very-dark-gray',
//             'color' => '#444',
//         ),
//     ) );
// }
 
// add_action( 'after_setup_theme', 'mytheme_setup_theme_supported_features' );

if ( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}
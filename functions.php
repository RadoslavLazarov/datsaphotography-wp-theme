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

        if ($results):
            echo '<p>'.$results[0]->galdesc.'</p>';
        endif;
    else:
        return false;
    endif;
}


if ( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}
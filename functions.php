<?php
if ( ! function_exists( 'st2_setup' ) ) :

function st2_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'october', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'st2' ),
        'social'  => __( 'Social Links Menu', 'st2' ),
        'footer1'  => __( 'Footer Links Menu', 'st2' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );
}
endif; // st2_setup

add_action( 'after_setup_theme', 'st2_setup' );


if ( ! function_exists( 'st2_init' ) ) :

function st2_init() {


    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */

    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // st2_setup

add_action( 'init', 'st2_init' );


if ( ! function_exists( 'st2_widgets_init' ) ) :

function st2_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    register_sidebar( array(
        'name' => __( 'Left Sidebar', 'october' ),
        'id' => 'left-sidebar',
        'description' => 'Left Sidebar widget area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ) );

    register_sidebar( array(
        'name' => __( 'Right Sidebar', 'october' ),
        'id' => 'right-sidebar',
        'description' => 'Right Sidebar widget area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ) );

    register_sidebar( array(
        'name' => __( 'Blog1', 'october' ),
        'id' => 'blog1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ) );

    register_sidebar( array(
        'name' => __( 'Blog2', 'october' ),
        'id' => 'blog2',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ) );

    register_sidebar( array(
        'name' => __( 'Blog3', 'october' ),
        'id' => 'blog3',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ) );

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'st2_widgets_init' );
endif;// st2_widgets_init



if ( ! function_exists( 'st2_customize_register' ) ) :

function st2_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    $wp_customize->add_section( 'footer_settings', array(
        'title' => __( 'ST2 Footer Settings', 'october' ),
        'description' => __( 'Footer Settings', 'october' ),
        'priority' => '2'
    ));

    $wp_customize->add_section( 'header_settings', array(
        'title' => __( 'ST2 Header Settings', 'october' ),
        'description' => __( 'Header Settings', 'october' ),
        'priority' => '1'
    ));

    $wp_customize->add_section( 'theme_settings', array(
        'title' => __( 'ST2 Theme Settings', 'october' ),
        'description' => __( 'Theme Settings > CAUTION: Work in Progress', 'october' ),
        'priority' => '0'
    ));
    $pgwp_sanitize = function_exists('pgwp_sanitize_placeholder') ? 'pgwp_sanitize_placeholder' : null;

    $wp_customize->add_setting( 'footer_text', array(
        'type' => 'theme_mod',
        'default' => __( 'General info', 'october' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer_text', array(
        'label' => __( 'Footer Content', 'october' ),
        'type' => 'textarea',
        'section' => 'footer_settings'
    ));

    $wp_customize->add_setting( 'footer_icon1', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'footer_icon1', array(
        'label' => __( 'Footer Icons', 'october' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'footer_settings'
    ) ) );

    $wp_customize->add_setting( 'footer_icon2', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'footer_icon2', array(
        'label' => __( 'Footer Icons', 'october' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'footer_settings'
    ) ) );

    $wp_customize->add_setting( 'footer_icon3', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'footer_icon3', array(
        'label' => __( 'Footer Icons', 'october' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'footer_settings'
    ) ) );

    $wp_customize->add_setting( 'footer_icon4', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'footer_icon4', array(
        'label' => __( 'Footer Icons', 'october' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'footer_settings'
    ) ) );

    $wp_customize->add_setting( 'footer_icon5', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'footer_icon5', array(
        'label' => __( 'Footer Icons', 'october' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'footer_settings'
    ) ) );

    $wp_customize->add_setting( 'footer_icon6', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'footer_icon6', array(
        'label' => __( 'Footer Icons', 'october' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'footer_settings'
    ) ) );

    $wp_customize->add_setting( 'footer_icon7', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'footer_icon7', array(
        'label' => __( 'Footer Icon7', 'october' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'footer_settings'
    ) ) );

    $wp_customize->add_setting( 'footer_trademark', array(
        'type' => 'theme_mod',
        'default' => __( '© gamblinghousetips.com 2018', 'october' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer_trademark', array(
        'label' => __( 'Footer trademark', 'october' ),
        'type' => 'text',
        'section' => 'footer_settings'
    ));

    $wp_customize->add_setting( 'footer_icon8', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'footer_icon8', array(
        'label' => __( 'Footer Icon8', 'october' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'footer_settings'
    ) ) );

    $wp_customize->add_setting( 'footer_icon8_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer_icon8_link', array(
        'label' => __( 'Footer icon8 link', 'october' ),
        'type' => 'url',
        'section' => 'footer_settings'
    ));

    $wp_customize->add_setting( 'show_left_sidebar', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'show_left_sidebar', array(
        'label' => __( 'Show Left Sidebar', 'october' ),
        'description' => __( 'Activate the Left Sidebar', 'october' ),
        'type' => 'checkbox',
        'section' => 'theme_settings'
    ));

    $wp_customize->add_setting( 'show_right_sidebar', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'show_right_sidebar', array(
        'label' => __( 'Show Right Sidebar', 'october' ),
        'description' => __( 'Activate the Right Sidebar', 'october' ),
        'type' => 'checkbox',
        'section' => 'theme_settings'
    ));

    $wp_customize->add_setting( 'footer_text', array(
        'type' => 'theme_mod',
        'default' => 'Proudly powered by WordPress | Theme: Starter Theme 2 by Pinegrow 2018. (Version: 0.0.0)',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer_text', array(
        'label' => __( 'Footer Content', 'october' ),
        'type' => 'textarea',
        'section' => 'footer_settings'
    ));

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'st2_customize_register' );
endif;// st2_customize_register


if ( ! function_exists( 'st2_enqueue_scripts' ) ) :
    function st2_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'tweenmax' );
    wp_register_script( 'tweenmax', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js' );
    wp_enqueue_script( 'tweenmax' );

    wp_enqueue_script( 'jquery', null, null, null, true );

    wp_enqueue_script( 'carousel_init', get_template_directory_uri() . '/assets/js/carousel_init.js', null, null, true );

    wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.js', null, null, true );

    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', null, null, true );

    wp_enqueue_script( 'jquery' );

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'bootstrap' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.css', false, null, 'all');

    wp_deregister_style( 'theme' );
    wp_enqueue_style( 'theme', get_template_directory_uri() . '/css/theme.css', false, null, 'all');

    wp_deregister_style( 'woocommerce' );
    wp_enqueue_style( 'woocommerce', get_template_directory_uri() . '/css/woocommerce.css', false, null, 'all');

    wp_deregister_style( 'style-1' );
    wp_enqueue_style( 'style-1', 'https://fonts.googleapis.com/css?family=Playfair+Display', false, null, 'all');

    wp_deregister_style( 'style-2' );
    wp_enqueue_style( 'style-2', 'https://fonts.googleapis.com/css?family=Roboto', false, null, 'all');

    wp_deregister_style( 'custom' );
    wp_enqueue_style( 'custom', get_template_directory_uri() . '/custom.css', false, null, 'all');

    wp_deregister_style( 'all' );
    wp_enqueue_style( 'all', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css', false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'st2_enqueue_scripts' );
endif;

/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/bootstrap/wp_bootstrap4_navwalker.php";

    /* Pinegrow generated Include Resources End */

/* Don't add custom your custom snippets here, but use inc/custom.php */
/* ST2 Include Resources Begin */
require_once "inc/custom.php";

?>

<?php

function bootstraptheme_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
	wp_enqueue_style( 'bootstraptheme-style', get_stylesheet_uri(), $dependencies ); 
}

function bootstraptheme_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '', true );
}

add_action( 'wp_enqueue_scripts', 'bootstraptheme_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'bootstraptheme_enqueue_scripts' );

function bootstraptheme_wp_setup() {
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'bootstraptheme_wp_setup' );

function bootstraptheme_register_menu() {
    register_nav_menu('header-menu', __( 'Header Menu' ));
}
add_action( 'init', 'bootstraptheme_register_menu' );

function bootstraptheme_register_footer()
{
    register_nav_menu('footer-menu', __('Footer Menu'));
}
add_action('init', 'bootstraptheme_register_footer');

function bootstraptheme_widgets_init() {

    // register_sidebar( array(
    //     'name'          => 'Footer - Copyright Text',
    //     'id'            => 'footer-copyright-text',
    //     'before_widget' => '<div class="footer_copyright_text">',
    //     'after_widget'  => '</div>',
    //     'before_title'  => '<h4>',
    //     'after_title'   => '</h4>',
    // ) );
    
    register_sidebar( array(
        'name'          => 'Sidebar - Inset',
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="sidebar-module sidebar-module-inset">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
    
    register_sidebar( array(
        'name'          => 'Sidebar - Default',
        'id'            => 'sidebar-2',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

}
add_action( 'widgets_init', 'bootstraptheme_widgets_init' );
?>
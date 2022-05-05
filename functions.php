<?php 

// padaro <title>, logo ir nav dinamiskais
function cato_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    register_nav_menu('menu-location', 'Menu Location');
    register_nav_menu('short-menu-location', 'Short Menu Location');
    // prideda featured image prie posto
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'cato_theme_support');


// funkcija dinaminiam <link>u loadinimui
function cato_register_styles()
{
    wp_enqueue_style('cato-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css", array(), null, 'all');
    // wp_enqueue_style('cato-fontawesome', "https://kit.fontawesome.com/6fc6f485c8.js", array(), null, 'all');
  
    wp_enqueue_style('cato-styles', get_template_directory_uri() . '/assets/css/style.css?v=' . time(), array(), false, 'all');
}

add_action('wp_enqueue_scripts', 'cato_register_styles');



// load css into the admin pages
// function cato_enqueue_options_style() {
//     wp_enqueue_style( 'cato-options-style', get_template_directory_uri() . '/assets/css/style.css' ); 
// }
// add_action( 'admin_enqueue_scripts', 'mytheme_enqueue_options_style' );



// funkcija dinaminiam <script>u loadinimui
function cato_register_scripts()
{
    wp_enqueue_script('cato-jquery', "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js", array(), null, 'all', true);
    wp_enqueue_script('cato-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js", array(), null, 'all', true);
    // fontawesome nuoroda kelai kaip <scripta>, tai su style neveikia
    wp_enqueue_script('cato-fontawesome', "https://kit.fontawesome.com/6fc6f485c8.js", array(), null, 'all');
    wp_enqueue_script('cato-main-js', get_template_directory_uri() . '/assets/js/main.js' , null, false, true);
}

add_action('wp_enqueue_scripts', 'cato_register_scripts');


?>
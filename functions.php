<?php

/*
** Funcation to add My custom styles
** edite by gaber tarek
get_template_directory_uri() => get directory for templete 
1.0 wp_enqeue_style()
2.0 wp_eqeue_script()
wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
in footer => should be true to make script befot </body>  
3.0 add_action()

wp_enqueue_scripts vs wp_enqueue_script => two diffrent that first allow  form both "script and style " 
wp_enqueue_scripts that is hock for implimintaton code 
bootstrap dependen on jquery
wp_deregister_script( string $handle ) => remove register script
wp_script_add_data( string $handle, string $key, mixed $value ): bool => work only if script is add 
register_nav_menu( string $location, string $description )
wp_nav_menu( array $args = array() ) : Display the menu
register_nav_menus( string[] $locations = array() ) : accept more than one menu

*/



//include NavWlaker class for bs navigation bar
require_once("bootstrap_5_wp_nav_menu_walker.php");

// To Add Image To post 
add_theme_support( 'post-thumbnails' ); 


// Edite in function excerpt lenght
function gtg_extend_excerpt_langth($length)
{ 
  return 15 ;
}
add_filter('excerpt_length','gtg_extend_excerpt_langth');


// Function to edite dots for excerpt
function gtg_excerpt_change_dots($more)
{
  return ' ...';
}

add_filter('excerpt_more','gtg_excerpt_change_dots');

function gtg_add_style()
{
//wp_enqueue_style
wp_enqueue_style('all-css', get_template_directory_uri() . '/css/all.min.css');
wp_enqueue_style('bootstraps-css', get_template_directory_uri() . '/css/bootstrap.min.css');
// wp_enqueue_style('fontawesome-css', get_template_directory_uri() . '/css/fontawesome.min.css');
wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');
}


function gtg_add_scripts()
{

    // wp_deregister_script( 'jquery' );// Remove register JQuery from wp 'default'
    // wp_register_script('jquery', includes_url('/js/jquery/jquery.js'),array(),false,true);  // register a new jquery in footer
    // wp_enqueue_script('jquery'); //Enqeueu new jquery
    // bootstrap dependen on jquery
    wp_enqueue_script('jquery-js', get_template_directory_uri() . '/js/jquery-2.2.4.js', array() ,false, true);
    wp_enqueue_script('jquery-min-js', get_template_directory_uri() . '/js/jquery-2.2.4.min.js', array() ,false, true);
    wp_enqueue_script('popper-js', get_template_directory_uri() . '/js/popper.min.js', array() ,false, true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array() ,false, true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array() ,false, true);
    wp_enqueue_script('dropdown-js', get_template_directory_uri() . '/js/bootstrap-dropdown.js', array() ,false, true);
    wp_enqueue_script('html5shiv-js', get_template_directory_uri() . '/js/html5shive.js');
    wp_enqueue_script('min-js', get_template_directory_uri() . '/js/all.min.js');
    wp_script_add_data("html5shiv-js",'conditional','ls IE 9');
    wp_script_add_data("respond-js",'conditional','ls IE 9');




    /*
    wp_enqueue_script('jquery-js', get_template_directory_uri() . '/js/jquery.min.js', array() ,false, true);
  This is easy way To USe Jquery extranl But This is not good for ex developers
    wp_register_script('','');
    includes_url($ path) => return path from wp_include file in wp 
      register_nav_menu('bootstrap_menu', __(" Naviagation Bar") );


    */



}
add_action( 'wp_enqueue_scripts', 'gtg_add_style');
add_action( 'wp_enqueue_scripts', 'gtg_add_scripts');

/*
* Add Custom Menu Support
* Add By gaber
*/ 

function gtg_register_custom_menu()
{
  // for location
  register_nav_menus(array(
    'bootstrap_menu' => "Naviagation Bar",
    'footer_menu' => "Footer Bar",
  ));
}

function gtg_bootstrap_menu()
{
  wp_nav_menu(array
  (
    'theme_location' => 'bootstrap_menu',
    "menu_class" =>"nav navbar-nav",
    'container' => false,
    "depth" => 2,
    'walker' => new bootstrap_5_wp_nav_menu_walker()
    
  ));

}

// init : run after wp has finished loading 
add_action('init','gtg_register_custom_menu');

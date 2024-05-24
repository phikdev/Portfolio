<?php
// Ajouter menu dans wordpress
function montheme_supports()
{
    register_nav_menu('header', 'En tête du menu');
    register_nav_menu('footer', 'Pied de page');
}
add_action('after_setup_theme', 'montheme_supports');

// Ajouter logo dans wordpress
add_theme_support( 'custom-logo' );
function themename_custom_logo_setup() { 
    $defaults = array( 
      'height' => 100, 
      'width' => 300, 
      'flex-height' => true, 
      'flex-width' => true, 
      'header-text' => array( 'site-title', 'site-description' ), 
      'unlink-homepage-logo' => false, 
    ); 
    add_theme_support( 'custom-logo', $defaults ); 
 } 
    add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


// Lier le css
function theme_enqueue_style()
{
  wp_enqueue_style('header-style', get_template_directory_uri() . '/style.css');
 
}
add_action('wp_enqueue_scripts', 'theme_enqueue_style');

function add_search_form($items, $args) {
    if($args->theme_location == 'header' ){
    $items .= '<li class="myBtn">'
            . 'CONTACT'
            . '</li>';
    }
  return $items;
}
add_filter('wp_nav_menu_items', 'add_search_form', 10, 2);

// Lier le JS
function scripts() {
    // Enregistrement de votre feuille de style
    wp_enqueue_style('style-name', get_stylesheet_uri());

    // Enregistrement de votre script JavaScript
    wp_enqueue_script('script-name', get_stylesheet_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);

    // Localisation du script pour les requêtes AJAX
    wp_localize_script('script-name', 'load_more_params', array(
        'ajaxurl' => admin_url('admin-ajax.php'), // URL pour les requêtes AJAX
        'nonce' => wp_create_nonce('load_more_photos_nonce') // Nonce pour la sécurité
    ));
}
add_action('wp_enqueue_scripts', 'scripts');

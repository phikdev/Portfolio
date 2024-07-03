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

// // Lier le JS
// function scripts() {
//     wp_enqueue_script('jquery');
//     // Enregistrement de votre feuille de style
//     wp_enqueue_style('style-name', get_stylesheet_uri());

//     // Enregistrement de votre script JavaScript
//     wp_enqueue_script('script-name', get_stylesheet_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);

//     // Localisation du script pour les requêtes AJAX
//     wp_localize_script('script-name', 'load_more_params', array(
//         'ajaxurl' => admin_url('admin-ajax.php'), // URL pour les requêtes AJAX
//         'nonce' => wp_create_nonce('load_more_photos_nonce') // Nonce pour la sécurité
//     ));
// }
// add_action('wp_enqueue_scripts', 'scripts');


function scripts() {
  wp_enqueue_script('jquery');
  // Enregistrement de votre feuille de style
  wp_enqueue_style('style-name', get_stylesheet_uri());

  // Enregistrement de votre script JavaScript
  wp_enqueue_script('script-name', get_stylesheet_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);

  // Localisation du script pour les requêtes AJAX existantes
  wp_localize_script('script-name', 'load_more_params', array(
      'ajaxurl' => admin_url('admin-ajax.php'), // URL pour les requêtes AJAX
      'nonce' => wp_create_nonce('load_more_photos_nonce') // Nonce pour la sécurité
  ));

  // Localisation du script pour les requêtes AJAX de filtrage des catégories
  wp_localize_script('script-name', 'ajax_params', array(
      'ajax_url' => admin_url('admin-ajax.php'), // URL pour les requêtes AJAX de filtrage
  ));
}
add_action('wp_enqueue_scripts', 'scripts');

function filter_posts() {
  $category_id = intval($_POST['category']);

  $args = array(
      'post_type' => 'projet',
      'posts_per_page' => 12,
      'orderby' => 'date',
      'order' => 'DESC',
      'paged' => 1,
  );

  if ($category_id) {
      $args['tax_query'] = array(
          array(
              'taxonomy' => 'categorie', // Assurez-vous que c'est la bonne taxonomie
              'field'    => 'term_id',
              'terms'    => $category_id,
          ),
      );
  }

  $publications = new WP_Query($args);

  if ($publications->have_posts()) :
      while ($publications->have_posts()): $publications->the_post();
          get_template_part('templates_part/content');
      endwhile;
  else :
      echo '<p>No posts found</p>';
  endif;

  wp_die(); // Fin de l'exécution pour l'AJAX
}

add_action('wp_ajax_filter_posts', 'filter_posts');
add_action('wp_ajax_nopriv_filter_posts', 'filter_posts');


function weichie_load_more() {
    $paged = $_POST['paged'];
    $ajaxposts = new WP_Query([
      'post_type' => 'projet',
      'posts_per_page' => 4,
      'orderby' => 'date',
      'order' => 'DESC',
      'paged' => $paged,
    ]);

    $response = '';
    if ($ajaxposts->have_posts()) {
      ob_start();
      while ($ajaxposts->have_posts()) : $ajaxposts->the_post();
        get_template_part('templates_part/content');
      endwhile;
      $response = ob_get_clean();
    }

    // Déterminer s'il y a plus de posts à charger
    $more_posts = $paged < $ajaxposts->max_num_pages;

    echo json_encode(array(
        'html' => $response,
        'more' => $more_posts // true s'il y a plus de posts, false sinon
    ));
    exit;
}
add_action('wp_ajax_weichie_load_more', 'weichie_load_more');
add_action('wp_ajax_nopriv_weichie_load_more', 'weichie_load_more');


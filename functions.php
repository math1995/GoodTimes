<?php 

/* Theme setup */
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;

function wpt_register_js() {
    wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/lib/bootstrap.min.js', 'jquery');
    wp_enqueue_script('jquery.bootstrap.min');
}
add_action( 'init', 'wpt_register_js' );
function wpt_register_css() {
    wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/lib/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap.min' );
}
add_action( 'wp_enqueue_scripts', 'wpt_register_css' );

// Catégories : journée + soirée
// 

add_action('init', 'custom_post_type');
function custom_post_type() {

	// Onglet vers l'éditions des nouvelles sorties
	register_post_type(
		'projet',
		array(
			'label' => 'Sorties',
			'labels' => array(
			'name' => 'Sorties',
			'singular_name' => 'Sortie',
			'all_items' => 'Toutes les sorties',
			'add_new_item' => 'Ajouter une sortie',
			'edit_item' => 'Editer une sortie',
			'new_item' => 'Nouvelle sortie',
			'view_item' => 'Voir la sortie',
			'search_items' => 'Rechercher parmi les sorties',
			'not_found' => 'Pas de sortie trouvé',
			'not_found_in_trash'=> 'Pas de sortie dans la corbeille',
			),
		'public' => true,
		'capability_type' => 'post',
		'supports' => array(
			'title',
			'editor',
			'thumbnail'),
		'has_archive' => true)
	);

	//  Catégories de sortie
	register_taxonomy(
		'type', 
		'projet',
		array(
			'label' => 'Catégorie de sortie',
			'labels' => array(
			'name' => 'Types',
			'singular_name' => 'Catégorie de sortie',
			'all_items' => 'Toutes les catégories de sortie',
			'edit_item' => 'Éditer les catégories de sortie',
			'view_item' => 'Voir les catégories de sortie',
			'update_item' => 'Mettre à jour les catégories de sorties',
			'add_new_item' => 'Ajouter les catégories de sortie',
			'new_item_name' => 'Nouvelle catégorie de sortie',
			'search_items' => 'Rechercher parmi les types de sortie'
			),
		'hierarchical' => true
		)
	);
}

// 
// Fonction pour obtenir tous la recette du jour
// =============================================
// 
// Etape 1 : Récupérer tous les post avec get_post();
// On stocke tout ça dans un tableau pour ensuite le réutiliser dans la deuxième fonction.
// 
// Etape 2 : Dans my_get_random_post() j'affiche un seul post (donc une recette) au hasard parmi tous les articles
// 
// 

function my_get_all_post($args) {
	$args = array( 'numberposts' => -1); 
	$posts= get_posts( $args );
	if ($posts) {
	    foreach ($posts as $post) {
	        setup_postdata( $GLOBALS['post'] =& $args);
	        the_title();
	        the_excerpt();
	        the_post_thumbnail("small");
	    }
	}
	return ($post);
}

function my_get_random_post() {
	$args = my_get_all_post($args);
	if ($args == NULL) {
		echo "Il n'y a pas de recette du jour"
	}
	else
		$args = mt_rand($args) * time();
		echo $args

}


//
// Fonction recettes les plus consultées
// =====================================
// 
// Fonction reprise sur internet : http://patrickroux.fr/developpement/liste-des-contenus-wordpress-les-plus-consultes-sans-plugin-4717
// 

function most_consulted_recepees($postID) {
    $meta_key = 'post_views_count'; //La clef, ou slug, de la méta-donnée
    $count = get_post_meta($postID, $meta_key, true); //Extraction de la valeur, qui est finalement un compteur
    if($count==''): //Si le compte est nul, la méta-donné n'existe pas, on va donc la créer
        $count = 0; //Initialisation à 0
        delete_post_meta($postID, $meta_key); //Simple précaution : si la méta-donnée existait déjà pour un autre usage exotique
        add_post_meta($postID, $meta_key, '0'); //On ajoute la méta-donné
    else:
        $count++; // Si la méta-donnée existe, on l'incrémente
        update_post_meta($postID, $meta_key, $count); //Et on met à jour
    endif;
}
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0); // Règle pb d'affichage selon les fonctions de wordpress

// while ( have_posts() ) : the_post(); most_consulted_recepees(get_the_ID());

// Pour Rémi fonction qui permet d'obtenir les images responsive automatiquement (et régler quelques pb)
// 

function my_get_img_responsive($img) {
	$img = preg_replace( '/(width|height)="\d*"\s/', "", $img);
	return ($img);
}

add_filter( 'post_thumbnail_html', 'my_get_img_responsive', 10 ); //On supprime les attributs natifs des images avec add_filter
add_filter( 'image_send_to_editor', 'my_get_img_responsive', 10 );
add_filter( 'wp_get_attachment_link', 'my_get_img_responsive', 10 );

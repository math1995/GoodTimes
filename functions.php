<?php 

/* Theme setup */
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;

function wpt_register_js() {
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/lib/jquery-2.1.4.min.js');
    wp_enqueue_script('owl.carousel.min.js', get_template_directory_uri() . 'lib/owl.carousel.min.js');
    wp_enqueue_script('app.js', get_template_directory_uri() . '/js/app.js');
}

add_action( 'init', 'wpt_register_js' );

function wpt_register_css() {
    wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/lib/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap.min' );
     wp_enqueue_style('owl.carousel.css', get_template_directory_uri() . 'lib/owl.carousel.css');
}

add_action( 'wp_enqueue_scripts', 'wpt_register_css' );

// Rajouter les images à la une
// ===========================
// ===========================

add_theme_support( 'post-thumbnails' );



// Catégories : journée + soirée
// 


add_action('init', 'custom_post_type');
function custom_post_type() {

	// Onglet vers l'éditions des nouvelles sorties
	register_post_type(
		'sorties',
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
		'sorties',
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
			'supports' => array(
				'title',
				'editor',
				'thumbnail'),
		'hierarchical' => true
		)
	);

	register_post_type(
		"L'Equipe",
		array(
			'label' => "L'Equipe",
			'labels' => array(
			'name' => "L'Equipe",
			'singular_name' =>  "L'Equipe",
			'all_items' => "Tous les membres de l'équipe",
			'add_new_item' => 'Ajouter un membre',
			'edit_item' => "Modifier les informations d'un membre",
			'new_item' => 'Nouveau membre',
			'view_item' => 'Voir le membre',
			'search_items' => 'Rechercher parmi les membres',
			'not_found' => 'Aucun membre trouvé',
			'not_found_in_trash'=> 'Pas de membre dans la corbeille',
			),
		'public' => true,
		'capability_type' => 'post',
		'supports' => array(
			'title',
			'editor',
			'thumbnail'),
		'has_archive' => true)
	);

	register_post_type(
		"Recettes",
		array(
			'label' => "Recettes",
			'labels' => array(
			'name' => "Recettes",
			'singular_name' =>  "Recette",
			'all_items' => "Toutes les recettes",
			'add_new_item' => 'Créer une recette',
			'edit_item' => "Modifier les informations d'une recette",
			'new_item' => 'Nouvelle recette',
			'view_item' => 'Consulter la recette',
			'search_items' => 'Rechercher parmi les recettes',
			'not_found' => 'Aucune recette trouvée',
			'not_found_in_trash'=> 'Pas de recette dans la corbeille',
			),
		'public' => true,
		'capability_type' => 'post',
		'supports' => array(
			'title',
			'editor',
			'thumbnail'),
		'has_archive' => true)
	);

	register_taxonomy(
		'Recettes', 
		'post',
		array(
			'label' => 'Catégorie de recette',
			'labels' => array(
			'name' => 'Catégorie de recette',
			'singular_name' => 'Catégorie de recette',
			'all_items' => 'Toutes les catégories de recettes',
			'edit_item' => 'Éditer les catégories de recettes',
			'view_item' => 'Voir les catégories de recettes',
			'update_item' => 'Mettre à jour les catégories de recettes',
			'add_new_item' => 'Ajouter une catégorie de recettes',
			'new_item_name' => 'Nouvelle catégorie de recette',
			'search_items' => 'Rechercher parmi les types de sortie'
			),
			'supports' => array(
				'title',
				'editor',
				'thumbnail'),
		'hierarchical' => true,
		'show_ui'
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

function my_get_recipee_post() {
	$args = array( 'post_type' => "Recettes", 'posts_per_page' => 5 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	    the_post_thumbnail('medium');
	    echo '<br><br><br>';
	    the_title();
	    the_excerpt();
	endwhile;
}

// function my_get_random_post($args) {
// 	$args = my_get_all_post($args);
// 	if ($args == NULL) {
// 		echo "Il n'y a pas de recette du jour"
// 	}
// 	else
// 		$args = mt_rand($args) * time();
// 		echo $args

// }


//
// Fonction recettes les plus consultées
// =====================================
// 
// Fonction reprise sur internet : http://patrickroux.fr/developpement/liste-des-contenus-wordpress-les-plus-consultes-sans-plugin-4717
// 


remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0); // Règle pb d'affichage selon les fonctions de wordpress


// Fonction envoi de mail
// 

function my_send_mail() {
	$siteOwnersEmail = 'mathieulevi@gmail.com';

if($_POST) {

	$name = trim(stripslashes($_POST['contactName']));
	$email = trim(stripslashes($_POST['contactEmail']));
	$subject = trim(stripslashes($_POST['contactSubject']));
	$contact_message = trim(stripslashes($_POST['contactMessage']));
	$error = array();

	// Check Name
	if (strlen($name) < 2) {
		$error['name'] = "Entrez votre nom s'il vous plait";
	}
	// Check Email
	if (!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $email)) {
		$error['email'] = "Entrez une adresse email valide s'il vous plait";
	}
	// Check Message
	if (strlen($contact_message) < 4) {
		$error['message'] = "Un peu plus de précisions svp";
	}
	// Subject
	if ($subject == '') {
		$subject = "Envoi";
	}

	$message = "Email de: " . $name . "<br />";
	$message .= "Adresse email: " . $email . "<br />";
	$message .= "Message: <br />";
	$message .= $contact_message;
	$message .= "<br /> ----- <br /> Ce message a été envoyé depuis mon formulaire <br />";

	$from =  $name . " <" . $email . ">";

	$headers = "De: " . $from . "\r\n";
	$headers .= "Réponse à: ". $email . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


	if ( empty($error) ) {

		ini_set("sendmail_from", $siteOwnersEmail);
		$mail = mail($siteOwnersEmail, $subject, $message, $headers);

		if ($mail) {
			$error['OK'] = "done";
			echo json_encode($error);
		} else {
			$error['sending'] = "Il y a eu un problème, réésayez s'il vous plait";
			echo json_encode($error);
		}

	}

	else {

		echo json_encode($error);

		}
	}
}


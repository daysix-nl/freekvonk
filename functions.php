<?php



/**

 * Day Six theme functions and definitions

 * 

 * @package Day Six theme

 */


/*
|--------------------------------------------------------------------------
| Front-end styles en scripts
|--------------------------------------------------------------------------
|
| 
| 
|
*/
function add_theme_scripts() {
    // Lees de versie uit het bestand
    $version = file_exists(get_template_directory() . '/version.txt') ? file_get_contents(get_template_directory() . '/version.txt') : '1.0';

    wp_enqueue_style( 'styles', get_template_directory_uri() . '/style.css', array(), $version, 'all');
    wp_enqueue_script( 'script', get_template_directory_uri() . '/script/index.js', array(), $version, true);
    
    // Voeg CSS-bestanden toe aan de queue met een versienummer
    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper.css', array(), $version);
    wp_enqueue_style('tailwind', get_template_directory_uri() . '/tailwindcss-styles/style.css', array(), $version);
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', array(), $version);
    
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
/*
|--------------------------------------------------------------------------
| Back-end styles en scripts
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function load_custom_wp_admin_style(){

     $version = file_exists(get_template_directory() . '/version.txt') ? file_get_contents(get_template_directory() . '/version.txt') : '1.0';
    wp_enqueue_style( 'gutenberg',  'https://hostdashboard.nl/devdocs/css/gutenberg.css');
    // wp_enqueue_style( 'swiper',  'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/style.css', array(), $version, 'all');
    // wp_enqueue_script( 'swiper', get_template_directory_uri() . '/script/swiper.js', array(), 1.1, true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/script/index.js', array(), $version, true);
 
}
add_action('admin_enqueue_scripts', 'load_custom_wp_admin_style');

/*
|--------------------------------------------------------------------------
| Menu
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function day_six_config(){
    register_nav_menus (
        array(
            'day_six_main_menu' => 'Main Menu'
        )
    );
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'preview', 100, 100, array( 'center', 'center' ) );
}

add_action( 'after_setup_theme', 'day_six_config', 0 );




/*
|--------------------------------------------------------------------------
| ACF blocks
|--------------------------------------------------------------------------
|
| 
| 
|
*/

/*
|--------------------------------------------------------------------------
| Categorie
|--------------------------------------------------------------------------
*/
add_filter('block_categories_all', function ($categories) {

    array_unshift($categories,   
      [
        'slug'  => 'achtergrond',
        'title' => 'Achtergronden',
        'icon'  => null
    ],        
    [
        'slug'  => 'bibliotheek',
        'title' => 'Pagina secties',
        'icon'  => null
    ],  
    [
        'slug'  => 'elementen',
        'title' => 'Losse elementen',
        'icon'  => null
    ],

  
);

return $categories;
}, 10, 1);


/*
|--------------------------------------------------------------------------
| All allowed blocks
|--------------------------------------------------------------------------
*/
add_filter('allowed_block_types_all', function($allowed_blocks, $editor_context) {
    $blocks = get_blocks();
    $acf_blocks = []; 
    foreach ($blocks as $block) { 
        $acf_blocks[] = 'acf/' . $block;
    }

    $core_blocks = [
        // 'core/paragraph',
        // 'core/heading',
    ];

    return array_merge($acf_blocks, $core_blocks);
}, 10, 2);


/*
|--------------------------------------------------------------------------
| Register blocks
|--------------------------------------------------------------------------
*/
add_action( 'init', 'register_acf_blocks', 5 );
function register_acf_blocks() {

    $blocks = get_blocks();
    foreach ($blocks as $block) {
            register_block_type( __DIR__ . '/blocks/'.$block );
    }
}

/*
|--------------------------------------------------------------------------
| Get all blocks name from the folder name
|--------------------------------------------------------------------------
*/
function get_blocks() {
	$theme   = wp_get_theme();
	$blocks  = get_option( 'cwp_blocks' );
	$version = get_option( 'cwp_blocks_version' );
	if ( empty( $blocks ) || version_compare( $theme->get( 'Version' ), $version ) || ( function_exists( 'wp_get_environment_type' )  ) ) {
		$blocks = scandir( get_template_directory() . '/blocks/' );
		$blocks = array_values( array_diff( $blocks, array( '..', '.', '.DS_Store', '_base-block' ) ) );

		update_option( 'cwp_blocks', $blocks );
		update_option( 'cwp_blocks_version', $theme->get( 'Version' ) );
	}
	return $blocks;
}



/*
|--------------------------------------------------------------------------
| Script for one block
|--------------------------------------------------------------------------
*/
function cwp_register_block_script() {
    $blocks = get_blocks();
    foreach ($blocks as $block) {
        wp_register_script( $block, get_template_directory_uri() . '/blocks/'.$block.'/script.js' );
    }

}
add_action( 'init', 'cwp_register_block_script' );
/*
|--------------------------------------------------------------------------
| ACF json files
|--------------------------------------------------------------------------
|
| 
| 
|
*/

/**
 * Save the ACF fields as JSON in the specified folder.
 * 
 * @param string $path
 * @returns string
 */
add_filter('acf/settings/save_json', function ($path) {
    $path = get_stylesheet_directory() . '/acf-json';
    return $path;
});
/**
 * Load the ACF fields as JSON in the specified folder.
 *
 * @param array $paths
 * @returns array
 */
add_filter('acf/settings/load_json', function ($paths) {
    unset($paths[0]);
    $paths[] = get_stylesheet_directory() . '/acf-json';
    return $paths;
});



/*
|--------------------------------------------------------------------------
| ACF icon picker
|--------------------------------------------------------------------------
|
| 
| 
|
*/

// modify the path to the icons directory
add_filter( 'acf_icon_path_suffix', 'acf_icon_path_suffix' );

function acf_icon_path_suffix( $path_suffix ) {
    return 'img/icons-acf/';
}

// modify the path to the above prefix
add_filter( 'acf_icon_path', 'acf_icon_path' );

function acf_icon_path( $path_suffix ) {
    return plugin_dir_path( __FILE__ );
}

// modify the URL to the icons directory to display on the page
add_filter( 'acf_icon_url', 'acf_icon_url' );

function acf_icon_url( $path_suffix ) {
    return plugin_dir_url( __FILE__ );
}





/*
|--------------------------------------------------------------------------
| Add an dublicate knop
|--------------------------------------------------------------------------
|
| 
| 
|
*/


/*
 * Function for post duplication. Dups appear as drafts. User is redirected to the edit screen
 */

// function rd_duplicate_post_as_draft() {
//   global $wpdb;

//   // Controleer of de actie is toegestaan voor de huidige gebruiker
//   if (!current_user_can('edit_posts')) {
//     wp_die('You do not have permission to duplicate posts.');
//   }

//   if (!isset($_GET['post']) && !isset($_POST['post'])) {
//     wp_die('No post to duplicate has been supplied.');
//   }

//   // Nonce-verificatie
//   if (!isset($_GET['duplicate_nonce']) || !wp_verify_nonce($_GET['duplicate_nonce'], basename(__FILE__))) {
//     wp_die('Security check failed.');
//   }

//   $post_id = (isset($_GET['post']) ? absint($_GET['post']) : absint($_POST['post']));
//   $post = get_post($post_id);

//   // Controleer of het berichttype wordt ondersteund (post, page, product)
//   $supported_post_types = array('post', 'page', 'product');

//   if ($post && in_array($post->post_type, $supported_post_types)) {
//     // Maak een nieuw bericht op basis van het originele bericht
//     $new_post_args = array(
//       'post_type' => $post->post_type,
//       'post_title' => 'Copy of ' . $post->post_title,
//       'post_content' => $post->post_content,
//       'post_status' => 'draft',
//       'post_author' => get_current_user_id(),
//       'post_parent' => $post->post_parent,
//       'post_excerpt' => $post->post_excerpt,
//     );

//     $new_post_id = wp_insert_post($new_post_args);

//     if ($new_post_id) {
//       // Dupliceer categorieën en tags
//       $taxonomies = get_object_taxonomies($post->post_type);

//       foreach ($taxonomies as $taxonomy) {
//         $post_terms = wp_get_object_terms($post_id, $taxonomy, array('fields' => 'slugs'));
//         wp_set_object_terms($new_post_id, $post_terms, $taxonomy, false);
//       }

//       // Dupliceer postmeta
//       $post_meta_infos = $wpdb->get_results("SELECT meta_key, meta_value FROM $wpdb->postmeta WHERE post_id=$post_id");

//       if ($post_meta_infos) {
//         foreach ($post_meta_infos as $meta_info) {
//           $meta_key = $meta_info->meta_key;

//           if ($meta_key == '_wp_old_slug') continue;

//           $meta_value = $meta_info->meta_value;
//           update_post_meta($new_post_id, $meta_key, $meta_value);
//         }
//       }

//       // Stuur de gebruiker naar het bewerkscherm van het gedupliceerde bericht
//       wp_redirect(admin_url('post.php?action=edit&post=' . $new_post_id));
//       exit;
//     } else {
//       wp_die('Failed to duplicate the post.');
//     }
//   } else {
//     wp_die('Post creation failed, could not find the original post.');
//   }
// }

// add_action('admin_action_rd_duplicate_post_as_draft', 'rd_duplicate_post_as_draft');

// // Voeg de duplicatielink toe aan de acties voor berichten, pagina's en producten
// function rd_duplicate_post_link($actions, $post) {
//   if (current_user_can('edit_posts')) {
//     $actions['duplicate'] = '<a href="' . wp_nonce_url(admin_url('admin.php?action=rd_duplicate_post_as_draft&post=' . $post->ID), basename(__FILE__), 'duplicate_nonce') . '" title="Duplicate this item" rel="permalink">Duplicate</a>';
//   }
//   return $actions;
// }

// add_filter('post_row_actions', 'rd_duplicate_post_link', 10, 2);
// add_filter('page_row_actions', 'rd_duplicate_post_link', 10, 2);

// // Voeg ondersteuning toe voor WooCommerce-producten (indien van toepassing)
// add_filter('product_row_actions', 'rd_duplicate_post_link', 10, 2);






function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


function my_custom_js() {
    ?>
      <script>
        document.addEventListener( 'gform_confirmation_loaded', function( event ) {
          if ( event.detail.formId === '1' ) {
            document.getElementById( 'contact-modal' ).style.display = 'block';
          }
        }, false );
      </script>
    <?php
    }








/*
|--------------------------------------------------------------------------
| ALWAYS ANABLE ALL TAG
|--------------------------------------------------------------------------
|
| 
| 
|
*/


// Voeg standaard tag toe aan nieuwe producten
function set_default_product_tag( $post_id ) {
    if ( 'product' === get_post_type( $post_id ) ) {
        // Controleer of de tag "Alle" al bestaat
        $tag = get_term_by( 'name', 'Alle', 'post_tag' );

        // Als de tag "Alle" niet bestaat, maak deze dan aan
        if ( ! $tag ) {
            wp_insert_term( 'Alle', 'post_tag' );
        }

        // Voeg de tag "Alle" toe aan het product als deze nog niet is toegevoegd
        wp_set_post_tags( $post_id, 'Alle', true );
    }
}
add_action( 'save_post', 'set_default_product_tag' );




/*
|--------------------------------------------------------------------------
| REMOVE GUTENBERG CSS
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function remove_gutenberg_container_img_css() {
    // Voeg hier de naam van het CSS-bestand van Gutenberg toe waarin de class .block-editor__container img wordt gedefinieerd.
    $gutenberg_css_handle = 'wp-block-library';

    // Verwijder het Gutenberg CSS-bestand.
    wp_dequeue_style( $gutenberg_css_handle );
    wp_deregister_style( $gutenberg_css_handle );
}
add_action( 'wp_enqueue_scripts', 'remove_gutenberg_container_img_css', 100 );
add_action( 'admin_enqueue_scripts', 'remove_gutenberg_container_img_css', 100 );
add_action( 'enqueue_block_editor_assets', 'remove_gutenberg_container_img_css', 100 );


  
/*
|--------------------------------------------------------------------------
| Wordpress menu
|--------------------------------------------------------------------------
|
| 
| 
|
*/


function customize_dashboard_menu() {
    global $menu;

    // Vervang "super admin" door de gebruikersnaam die je wilt tonen.
    $allowed_user = 'kevin';

    // Haal de huidige ingelogde gebruiker op.
    $current_user = wp_get_current_user();
    $current_user_login = $current_user->user_login;

    // Verberg specifieke menu-onderdelen voor alle gebruikers behalve "kevin".
    if ($current_user_login !== $allowed_user) {
        // Hier kun je de volledige URL/querystrings vinden van de menu-onderdelen die je wilt verbergen:
        $hidden_menu_items_by_url = array(
            'edit.php',
            'edit.php?post_type=acf-field-group',
            'edit-comments.php',
            'themes.php',
            'plugins.php',
            // 'users.php',
            'options-general.php',
            'tools.php',
            'admin.php?page=ai1wm_export'
            // Voeg hier andere URL's/querystrings toe van de items die je wilt verbergen op basis van de URL.
        );

        // Hier kun je de classes vinden van de menu-onderdelen die je wilt verbergen:
        $hidden_menu_items_by_class = array(
            'toplevel_page_wppusher', 
            'toplevel_page_ai1wm_export',
            'menu-top toplevel_page_mlang',
            'toplevel_page_rank-math',
            'toplevel_page_zci_settings',
            'menu-top toplevel_page_edit?post_type=filter-set',
            // Voeg hier andere classes toe van de items die je wilt verbergen op basis van de class.
        );

        foreach ($menu as $key => $item) {
            // Verberg op basis van URL/querystring.
            if (in_array($item[2], $hidden_menu_items_by_url)) {
                unset($menu[$key]);
            }

            // Verberg op basis van class.
            foreach ($hidden_menu_items_by_class as $class) {
                if (strpos($item[4], $class) !== false) {
                    unset($menu[$key]);
                    break;
                }
            }
        }
    }
}

add_action('admin_menu', 'customize_dashboard_menu');


/*
|--------------------------------------------------------------------------
| Wordpress topbar
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function add_custom_admin_bar_styles() {
    // Controleren of de gebruiker is ingelogd
    if (is_user_logged_in()) {
        // Gebruiker met de gebruikersnaam "xxx" uitsluiten
        $user = wp_get_current_user();
        if ($user->user_login === 'xxx') {
            return;
        }

        // Voeg hier de CSS-styling toe voor de menu-items die je wilt aanpassen
        $custom_styles = "
            #wp-admin-bar-comments { display: none !important; }
            #wp-admin-bar-customize { display: none !important; }
            #wp-admin-bar-new-content { display: none !important; }
            #wp-admin-bar-rank-math { display: none !important; }
            #dashboard_primary { display: none !important; }
            #dashboard_quick_press { display: none !important; }
            #dashboard_activity  { display: none !important; }
            #welcome-panel { display: none !important; }
            #dashboard_site_health { display: none !important; }
            #rg_forms_dashboard { display: none !important; }
            #menu-posts { display: none !important; }
            #wc_admin_dashboard_setup { display: none !important; }
            #rank_math_dashboard_widget { display: none !important; }
            #toplevel_page_getwooplugins { display: none !important; }
            #wp-admin-bar-weglot { display: none !important; }
            #toplevel_page_weglot-settings { display: none !important; }
            #woocommerce_myparcel_dashboard_widget { display: none !important; }
            #dashboard_right_now { display: none !important; }
			.acf-admin-notice { display: none !important; }
            .notice-error { display: none !important; }
            .woocommerce-message { display: none !important; }
            /* Voeg hier meer CSS-styling toe indien nodig */
        ";

        // Voeg de CSS-styling toe aan zowel de front-end als het WordPress-dashboard
        echo '<style type="text/css">' . $custom_styles . '</style>';
        echo '<style type="text/css" id="custom-admin-bar-styles">' . $custom_styles . '</style>';
    }
}
add_action('wp_head', 'add_custom_admin_bar_styles');
add_action('admin_head', 'add_custom_admin_bar_styles');



/*
|--------------------------------------------------------------------------
| Wordpress footer
|--------------------------------------------------------------------------
|
| 
| 
|
*/


function vervang_dashboard_footer_tekst() {
    echo 'Attention Seekers';
}

add_filter('admin_footer_text', 'vervang_dashboard_footer_tekst');



/*
|--------------------------------------------------------------------------
| Wordpress admin URL
|--------------------------------------------------------------------------
|
| 
| 
|
*/

// Functie voor het doorverwijzen van "/backend" naar "/wp-login.php"
function redirect_backend_to_wp_login() {
    if ($_SERVER['REQUEST_URI'] == '/backend') {
        wp_redirect(wp_login_url());
        exit;
    }
}
add_action('init', 'redirect_backend_to_wp_login');



/*
|--------------------------------------------------------------------------
| E-mailadres verzenden van mails
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function custom_wp_mail_from($original_email_address) {
    // Vervang 'jouw@emailadres.com' door het gewenste specifieke e-mailadres
    return 'noreply@attentionseekers.nl';
}

function custom_wp_mail_from_name($original_email_from) {
    // Vervang 'Jouw Naam' door de gewenste afzender naam
    return 'Freek Vonk';
}

add_filter('wp_mail_from', 'custom_wp_mail_from');
add_filter('wp_mail_from_name', 'custom_wp_mail_from_name');


/*
|--------------------------------------------------------------------------
| Hide Super Admin
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function exclude_user_kevin_from_users_list($query) {
    if (!is_admin()) {
        return; // We voeren deze actie alleen uit in de backend
    }

    $current_user = wp_get_current_user();

    // Controleer of de huidige gebruiker "super admin" is
    if ($current_user->user_login === 'kevin') {
        return; // "super admin" kan zijn eigen gebruikersgegevens zien
    }

    // Haal de huidige gebruiker op
    $current_user_id = $current_user->ID;

    // Haal de gebruiker "super admin" op
    $kevin_user = get_user_by('login', 'kevin');

    // Controleer of "super admin" bestaat en niet dezelfde is als de huidige gebruiker
    if ($kevin_user && $current_user_id !== $kevin_user->ID) {
        // Voeg een voorwaarde toe aan de gebruikersquery om "super admin" te verbergen voor andere gebruikers
        $query->query_vars['exclude'] = array($kevin_user->ID);
    }
}
add_action('pre_get_users', 'exclude_user_kevin_from_users_list');



/*
|--------------------------------------------------------------------------
| Hide auteur
|--------------------------------------------------------------------------
|
| 
| 
|
*/


function verwijder_auteur_en_reacties_kolommen($columns) {
    // Controleer of de 'auteur' kolom aanwezig is in de array van kolommen
    if (isset($columns['author'])) {
        // Verwijder de 'auteur' kolom uit de array
        unset($columns['author']);
    }

    // Controleer of de 'reacties' kolom aanwezig is in de array van kolommen
    if (isset($columns['comments'])) {
        // Verwijder de 'reacties' kolom uit de array
        unset($columns['comments']);
    }

    return $columns;
}
add_filter('manage_posts_columns', 'verwijder_auteur_en_reacties_kolommen');
add_filter('manage_pages_columns', 'verwijder_auteur_en_reacties_kolommen');




/*
|--------------------------------------------------------------------------
| WOOCOMMERCE
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );



/*
|--------------------------------------------------------------------------
| AFTER ADD TO CART PAGE
|--------------------------------------------------------------------------
|
| 
| 
|
*/


function redirect_after_add_to_cart() {
    if (isset($_REQUEST['add-to-cart'])) {
        // Controleer de referer (de pagina van waaraf het product is toegevoegd)
        if (wp_get_referer() == get_permalink(wc_get_page_id('product'))) {
          
        } else {
            // Het product is vanaf de winkelpagina toegevoegd
            wp_redirect(get_permalink(wc_get_page_id('shop')));
            exit;
        }
    }
}
add_action('template_redirect', 'redirect_after_add_to_cart');


/*
|--------------------------------------------------------------------------
| RECENT BEKEKEN
|--------------------------------------------------------------------------
|
| 
| 
|
*/


function track_viewed_products() {
    if (is_product()) {
        global $post;

        // Haal de recent bekeken producten op
        $recently_viewed = get_transient('wcj_viewed_products');

        // Haal het ID van het huidige product op
        $current_product_id = $post->ID;

        if (empty($recently_viewed)) {
            $recently_viewed = array();
        }

        // Voeg het huidige product toe aan de lijst van recent bekeken producten
        if (!in_array($current_product_id, $recently_viewed)) {
            $recently_viewed[] = $current_product_id;

            // Beperk de lijst tot bijvoorbeeld de laatste 10 bekeken producten
            if (count($recently_viewed) > 10) {
                array_shift($recently_viewed);
            }

            // Bijwerk de transient
            set_transient('wcj_viewed_products', $recently_viewed, 12 * WEEK_IN_SECONDS); // 12 weken (aan te passen)
        }
    }
}
add_action('template_redirect', 'track_viewed_products');



/*
|--------------------------------------------------------------------------
| WOOCOMMERCE TEKSTEN
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function custom_add_to_cart_message($message, $product_id) {
    // Hier kun je de aangepaste tekst voor het bericht instellen
    $message = 'Je hebt succesvol een product aan je winkelwagen toegevoegd!';
    return $message;
}

add_filter('wc_add_to_cart_message', 'custom_add_to_cart_message', 10, 2);




/*
|--------------------------------------------------------------------------
| FILTER EVERYTHING POP-UP INSTELLING
|--------------------------------------------------------------------------
|
| 
| 
|
*/

/* Start code to add in the functions.php */
add_filter( 'wpc_mobile_width', 'my_custom_wpc_mobile_width' );
function my_custom_wpc_mobile_width( $width ) {
    // Screen width in px when Filters widget should become mobile
    $width = 1200; 
    return $width;
}
/* End code to add in the functions.php  */


/*
|--------------------------------------------------------------------------
| VERTALINGEN
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function custom_frontend_translations($translated_text, $text, $domain) {
    switch ($text) {
            case 'Re-Order':
            $translated_text = 'Volgorde';
            break;
             case 'Reset all':
            $translated_text = 'Reset alle filters';
            break;
       
    }
    return $translated_text;
}

add_filter('gettext', 'custom_frontend_translations', 20, 3);


function aangepaste_add_to_cart_tekst($tekst) {
    if ($tekst == 'Toevoegen aan winkelwagen') {
        $tekst = 'Plaats in winkelwagen';
    }
    return $tekst;
}

// Voeg de filterfunctie toe aan de gettext-hook
add_filter('gettext', 'aangepaste_add_to_cart_tekst', 20, 3);



/*
|--------------------------------------------------------------------------
| SIDE BAR
|--------------------------------------------------------------------------
|
| 
| 
|
*/


register_sidebar( array(
  'name' => __( 'Filter sidebar', 'rmccollin' ),
  'id' => 'filter-sidebar',
  'description' => __( 'A widget area located to the left filter sidebar.', 'rmccollin' ),
  'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
  'after_widget' => '</div>',
  'before_title' => '<p class="">',
  'after_title' => '</p>',
) );
 
// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false', 100 );
 
// Disables the block editor from managing widgets. renamed from wp_use_widgets_block_editor
add_filter( 'use_widgets_block_editor', '__return_false' );


// Make an own input field for the quantity in the cart because why not!!
add_action('wp_ajax_update_cart_quantity', 'handle_update_cart_quantity');
add_action('wp_ajax_nopriv_update_cart_quantity', 'handle_update_cart_quantity');

function handle_update_cart_quantity() {
    $cart_item_key = sanitize_text_field($_POST['cart_item_key']);
    $quantity = intval($_POST['quantity']);

    if ($cart_item = WC()->cart->get_cart_item($cart_item_key)) {
        WC()->cart->set_quantity($cart_item_key, $quantity, true);
        WC()->cart->calculate_totals();
        wp_send_json_success();
    } else {
        wp_send_json_error('Invalid cart item key');
    }
}




/*
|--------------------------------------------------------------------------
| VOORRAAD 0 NAAR CONCEPT
|--------------------------------------------------------------------------
|
| 
| 
|
*/

// Voeg de volgende code toe aan het functions.php bestand van je thema

// function voorraad_nul_naar_concept( $ID, $post ) {
//     // Controleer of het product een WooCommerce-product is
//     if ( 'product' === $post->post_type ) {
//         // Krijg de voorraadstatus van het product
//         $voorraad = get_post_meta( $ID, '_stock', true );

//         // Als voorraad 0 is, stel de status in op concept
//         if ( 0 === intval( $voorraad ) ) {
//             // Stel de status in op concept
//             $post_data = array(
//                 'ID'          => $ID,
//                 'post_status' => 'draft',
//             );
//             wp_update_post( $post_data );
//         }
//     }
// }

// // Haak de functie in op het save_post-evenement
// add_action( 'save_post', 'voorraad_nul_naar_concept', 10, 2 );


// Voeg aangepaste labels toe aan producten in WooCommerce
function custom_product_labels_init() {
    // Registreer het nieuwe taxonomietype voor labels
    register_taxonomy(
        'product_label',
        'product',
        array(
            'label' => __( 'Labels', 'text_domain' ),
            'rewrite' => array( 'slug' => 'product-label' ),
            'hierarchical' => true,
        )
    );
}
add_action( 'init', 'custom_product_labels_init' );

// Voeg labels toe aan producten op de productpagina in de backend
function custom_product_labels_meta_box() {
    add_meta_box(
        'product_labels',
        __( 'Labels', 'text_domain' ),
        'custom_product_labels_meta_box_content',
        'product',
        'side',
        'default'
    );
}
add_action( 'add_meta_boxes', 'custom_product_labels_meta_box' );

function custom_product_labels_meta_box_content( $post ) {
    // Haal alle labels op
    $labels = get_terms( 'product_label', array( 'hide_empty' => false ) );

    // Haal de geselecteerde labels op voor dit product
    $selected_labels = wp_get_post_terms( $post->ID, 'product_label', array( 'fields' => 'ids' ) );

    // Toon de lijst van labels
    if ( $labels && ! is_wp_error( $labels ) ) {
        echo '<div>';
        foreach ( $labels as $label ) {
            echo '<label><input type="checkbox" name="product_labels[]" value="' . esc_attr( $label->term_id ) . '" ' . checked( in_array( $label->term_id, $selected_labels ), true, false ) . ' />' . esc_html( $label->name ) . '</label><br />';
        }
        echo '</div>';
    }
}

// Bewaar de geselecteerde labels wanneer het product wordt opgeslagen of bijgewerkt
function custom_save_product_labels( $post_id, $post ) {
    // Controleer of het snel bewerken wordt uitgevoerd
    if ( isset( $_GET['action'] ) && $_GET['action'] == 'edit' && wp_verify_nonce( $_GET['_wpnonce'], 'bulk-posts' ) ) {
        // Controleer of de labels zijn geselecteerd
        if ( isset( $_POST['product_labels'] ) ) {
            $labels = array_map( 'intval', $_POST['product_labels'] );
            wp_set_object_terms( $post_id, $labels, 'product_label', false );
        } else {
            // Verwijder de labels als er geen labels zijn geselecteerd
            wp_set_object_terms( $post_id, array(), 'product_label' );
        }

        // Voer cache-opruiming uit na het opslaan van het product
        if ( function_exists( 'custom_purge_cache' ) ) {
            custom_purge_cache();
        }
    }

    // Controleer of het bewerken van een individuele productpagina wordt uitgevoerd
    if ( isset( $_POST['action'] ) && $_POST['action'] == 'editpost' ) {
        // Controleer of de labels zijn geselecteerd
        if ( isset( $_POST['product_labels'] ) ) {
            $labels = array_map( 'intval', $_POST['product_labels'] );
            wp_set_object_terms( $post_id, $labels, 'product_label', false );
        } else {
            // Verwijder de labels als er geen labels zijn geselecteerd
            wp_set_object_terms( $post_id, array(), 'product_label' );
        }

        // Voer cache-opruiming uit na het opslaan van het product
        if ( function_exists( 'custom_purge_cache' ) ) {
            custom_purge_cache();
        }
    }
}
// Hook to save_post to handle regular saves
add_action( 'save_post', 'custom_save_product_labels', 10, 2 );

// Functie voor het wissen van de cache
function custom_purge_cache() {
    // Controleer of de $nginx_purger-variabele is gedefinieerd
    global $nginx_purger;
    if ( isset( $nginx_purger ) ) {
        // Voer cache-opruiming uit met behulp van de $nginx_purger-variabele
        $nginx_purger->purge_all();
    }
}





/*
|--------------------------------------------------------------------------
| Toevoegingen voor checkout from (abonnementen)
|--------------------------------------------------------------------------
|
| 
| 
|
*/
add_action( 'woocommerce_checkout_create_order_line_item', 'addSubscriptionDataToOrderItemSave', 10, 4 );
/**
 * Save subscription data on hook saving an order item
 *
 * @param  $item
 * @param  $cart_item_key
 * @param  $values
 * @param  $order
 *
 * @return void
 */
function addSubscriptionDataToOrderItemSave( $item, $cart_item_key, $values, WC_Order $order ) {
	$logger = wc_get_logger();
// 	$logger->info(wc_print_r( $cart_item_key, true ), array( 'source' => 'fv-local-postorder-cart_item_key' ) );
// 	$logger->info(wc_print_r( $values, true ), array( 'source' => 'fv-local-postorder-value' ) );
//  $logger->info(wc_print_r($item, true ), array( 'source' => 'fv-local-postorder-item-data' ) );
	if ( ! empty( $_POST['subscription'][ $cart_item_key ] ) ) {
		
		$postData = $_POST['subscription'][ $cart_item_key ];

		$birthDate = sprintf( "%02d", $postData['birthdate_day'] ) . '/' . sprintf( "%02d", $postData['birthdate_month'] ) . '/' . $postData['birthdate_year'];

		// add meta data
		$item->add_meta_data( 'Voornaam kind', cleanUpFormTextInput( $postData['first_name'] ) );
		$item->add_meta_data( 'Achternaam kind', cleanUpFormTextInput( $postData['last_name'] ) );
		$item->add_meta_data( 'Geslacht kind', cleanUpFormTextInput( $postData['gender'] ) );
		$item->add_meta_data( 'Geboortedatum kind', cleanUpFormTextInput( $birthDate ) );

		$logger->info(wc_print_r($postData, true ), array( 'source' => 'fv-local-postorder-data' ) );

		// Other addres: use data given else load data from order
		if ( $postData['other_address'] === '1' ) {
			$street  = $postData['street'];
			$houseNo = $postData['houseno'];
			if ( ! empty( $postData['houseno_ext'] ) ) {
				$houseNoExt = $postData['houseno_ext'];
			}
			$postcode = $postData['postcode'];
			$city     = $postData['city'];
			$country  = $postData['country'];
		} else {
			// get billing info from post
			$street  = $_POST['billing_street'];
			$houseNo = $_POST['billing_houseno'];
			if ( ! empty( $_POST['billing_houseno_ext'] ) ) {
				$houseNoExt = cleanUpFormTextInput( $_POST['billing_houseno_ext'] );
			}

			$postcode = $order->get_billing_postcode();
			$city     = $order->get_billing_city();
			$country  = $order->get_billing_country();
		}

		$item->add_meta_data( 'Straat', cleanUpFormTextInput( $street ) ?? null );
		$item->add_meta_data( 'Huisnummer', $houseNo ?? null );
		if ( ! empty( $houseNoExt ) ) {
			$item->add_meta_data( 'Huisnummer toevoeging', $houseNoExt ?? null );
		}
		$item->add_meta_data( 'Postcode', cleanUpFormTextInput( $postcode ) ?? null );
		$item->add_meta_data( 'Plaats', $city ?? null );
		// convert country to full name
		$item->add_meta_data( 'Land', WC()->countries->countries[ $country ] ?? null );
		$logger->info(wc_print_r($item, true ), array( 'source' => 'fv-local-postorder-item-data' ) );
	}
}

/**
 * Custom checkout validation
 */

 function showSubscriptionForm($productid){
    if ( empty( get_post_meta( $productid, '_woocommerce_mediacompetence_continuous_subscription', true ) ) ) {
        return false;
    }else{
        return true;
    }
}

add_action( 'woocommerce_after_checkout_validation', 'woocommerce_after_checkout_validation_alter', 10, 2 );
function woocommerce_after_checkout_validation_alter( $data, $errors ) {
	// don't validate payment type and terms on step 1
	if ( $_POST['checkout-current-step'] === "1" ) {
		$errors->remove( 'payment' );
		$errors->remove( 'terms' );

		// add error for step 1 so we don't go to the next step
		$errors->add( 'step_1_error', '__STEP_1_ERROR__' );
	}

	// add validation for subscriptions if required
	foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
		if ( showSubscriptionForm( $cart_item['product_id'] ) ) {
			if ( ! empty( $_POST['subscription'][ $cart_item_key ] ) ) {
				// product
				$cartProduct = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );

				// validate subscription
				validateSubscriptionData( $_POST['subscription'][ $cart_item_key ], $cartProduct, $errors, $cart_item_key );
			}
		}
	}

	if ( $_POST['checkout-current-step'] === "1" ) {
		return false;
	}

	return $data;
}

add_action( 'woocommerce_checkout_process', 'fixMissingBillingAddress' );

function fixMissingBillingAddress() {
	$_POST['billing_address_1'] = trim( filter_input( INPUT_POST, 'billing_street' ) . ' ' . filter_input( INPUT_POST, 'billing_houseno' ) . ' ' . filter_input( INPUT_POST, 'billing_houseno_ext' ) );
	if ( ! empty( filter_input( INPUT_POST, 'shipping_street' ) ) ) {
		$_POST['shipping_address_1'] = trim( filter_input( INPUT_POST, 'shipping_street' ) . ' ' . filter_input( INPUT_POST, 'shipping_houseno' ) . ' ' . filter_input( INPUT_POST, 'shipping_houseno_ext' ) );
	}
}

/**
 * Validate a single subscription
 *
 * @param $subscriptionData
 * @param $cartProduct
 * @param $errors
 *
 * @return void
 */
function validateSubscriptionData( $subscriptionData, $cartProduct, $errors, $cart_item_key ) {
	// fields
	$fields = [
		'first_name'      => [ 'name' => 'Kind voornaam', 'required' => true ],
		'last_name'       => [ 'name' => 'Kind achternaam', 'required' => true ],
		'birthdate_day'   => [ 'name' => 'Kind geboortedag', 'required' => true ],
		'birthdate_month' => [ 'name' => 'Kind geboortemaand', 'required' => true ],
		'birthdate_year'  => [ 'name' => 'Kind geboortejaar', 'required' => true ],
	];

	// check extra address data
	$extraFieldsRequired = false;
	if ( $subscriptionData['other_address'] === '1' ) {
		$extraFieldsRequired = true;
	}
	$fields['postcode']    = [ 'name' => 'Kind postcode', 'required' => $extraFieldsRequired ];
	$fields['street']      = [ 'name' => 'Kind straat', 'required' => $extraFieldsRequired ];
	$fields['houseno']     = [ 'name' => 'Kind huisnummer', 'required' => $extraFieldsRequired ];
	$fields['houseno_ext'] = [ 'name' => 'Kind huisnummer toevoeging', 'required' => false ];
	$fields['street']      = [ 'name' => 'Kind straat', 'required' => $extraFieldsRequired ];
	$fields['city']        = [ 'name' => 'Kind plaats', 'required' => $extraFieldsRequired ];
	$fields['country']     = [ 'name' => 'Kind land', 'required' => $extraFieldsRequired ];

	//set field prefix
	$fieldPrefix = str_replace( ' ', '_', $cartProduct->get_title() ) . '_';

	// sanitize data
	foreach ( $fields as $fieldName => $field ) {
		if ( isset( $subscriptionData[ $fieldName ] ) ) {
			$subscriptionData[ $fieldName ] = cleanUpFormTextInput( $subscriptionData[ $fieldName ] );
		}

		// check required fields
		if ( empty( $subscriptionData[ $fieldName ] ) && $field['required'] === true ) {
			// add error if empty
			$errors->add( $fieldPrefix . $fieldName, __( '<strong>' . $cartProduct->get_title() . ' - ' . $field['name'] . '</strong> is verplicht' ) );
		}

		// save data in session as subscription_data_[cart_item_key]
		WC()->session->set( 'subscription_data_' . $cart_item_key, $subscriptionData );
	}

	// check date
	if ( ! empty( $subscriptionData['birthdate_month'] ) && ! empty( $subscriptionData['birthdate_day'] ) && ! empty( $subscriptionData['birthdate_year'] ) && ! checkdate( $subscriptionData['birthdate_month'], $subscriptionData['birthdate_day'], $subscriptionData['birthdate_year'] ) ) {
		$errors->add( $fieldPrefix . $fieldName, __( '<strong>' . $cartProduct->get_title() . ' - Geboortedatum</strong> is ongeldig' ) );
	}

}
/**
 * @param string $input
 *
 * @return string
 */
function cleanUpFormTextInput( string $input ): string {
	// Trim, Sanitize & remove emojis
	return trim( sanitize_text_field( $input ) );
}


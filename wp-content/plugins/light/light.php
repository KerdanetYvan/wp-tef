<?php
/*
Plugin Name: highlighting 
Description: Plugin qui permet de mettre en avant des articles
version: 1.0 
*/

// fonction qui retourne le tableau des articles mis en avant 
function highlighting() {
    $options = get_option( 'highlighting_data' );
    return $options;
}

add_action('admin_menu', 'highlighting_add_admin_menu');
add_action('admin_init', 'highlighting_settings_init');
function highlighting_add_admin_menu() { 
    add_options_page(
        'Highlighting', 
        'Highlighting', 
        'manage_options', 
        'highlighting', 
        'highlighting_options_page'
    );
}

function highlighting_settings_init() {
    // Enregistrer l'option dans le menu admin wordpress
    register_setting('pluginPage', 'highlighting_data', ['sanitize_callback' => 'validate_highlighting_data']);

    // Ajouter une section dans une page 
    add_settings_section(
        'highlighting_section', // ID
        "Mise en avant d'article", // Titre
        'highlighting_section_callback', // Callback
        'pluginPage' // Page
    );

    // Ajouter un champ
    add_settings_field(
        'highlighting_field', // ID
        'Liste des articles', // Label
        'manager_highlighting', // Callback
        'pluginPage', // page
        'highlighting_section' // Section
    );


}
// fonction callback de add_setings_section
function highlighting_section_callback() {
    echo "<p>Sélectionnez les articles à mettre en avant.</p>";
}
function manager_highlighting(){
    $options = get_option('highlighting_data', []);

    $all_posts = get_posts(array(
        'posts_per_page' => -1,      // -1 signifie qu'il n'y a pas de limite, donc tous les articles.
    ));

    if (!empty($all_posts)) {
        // gestion du nombre maximum d'articles que l'on peut selectionner 
        $listeDisable =  (isset($options) && count($options) < 3) ? "" : "disabled";
        foreach ($all_posts as $post) {
            $checked = isset($options[$post->ID]) ? 'checked' : $listeDisable ;
            echo '<label>';
            echo '<input type="checkbox" name="highlighting_data[' . esc_attr($post->ID) . ']" value="' . esc_attr($post->ID) . '" ' . $checked . '>';
            echo esc_html($post->post_title);
            echo '</label><br>';
        }
    } else {
        echo '<p>Aucun article trouvé.</p>';
    }
}

add_action('admin_post_save_highlighting_data', 'validate_highlighting_data');
function validate_highlighting_data($input) {
    if (is_array($input) && count($input) > 3) {
        echo '<pre>';
        print_r($input);
        echo '</pre>';
        // gestions des erreurs
        add_settings_error( 
            "highlighting_data", // Slug title of the setting to which this error applies.
            "id", // Slug-name to identify the error. Used as part of 'id' attribute in HTML output.
            "vous ne pouvez pas mettre en avant plus de 3 articles", // Messages d'erreur 
            'error' // type du message
        );
        return get_option('highlighting_data');
    }
    return $input;
}




// cette fonction va appeler les autres fonctions pour afficher le formulaire complet sur notre page de réglage 
function highlighting_options_page() { 

    ?>
    <!-- Affichage des erreurs -->
    <?php settings_errors('highlighting_data'); ?>

    <form action='options.php' method='post'>


        <?php
        settings_fields( 'pluginPage' );
        do_settings_sections( 'pluginPage' );
        submit_button();
        ?>

    </form>
    <?php
    

}
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
    // Enregistrer l'option dasn le menu admin wordpress
    register_setting('pluginPage', 'highlighting_data');

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

    $posts = get_posts();

    if (!empty($posts)) {
        foreach ($posts as $post) {
            $checked = isset($options[$post->ID]) ? 'checked' : '';
            echo '<label>';
            echo '<input type="checkbox" name="highlighting_data[' . esc_attr($post->ID) . ']" value="' . esc_attr($post->ID) . '" ' . $checked . '>';
            echo esc_html($post->post_title);
            echo '</label><br>';
        }
    } else {
        echo '<p>Aucun article trouvé.</p>';
    }
}

// cette fonction va appeler les autres fonctions pour afficher le formulaire complet sur notre page de réglage 
function highlighting_options_page() { 

    ?>
    <form action='options.php' method='post'>


        <?php
        settings_fields( 'pluginPage' );
        do_settings_sections( 'pluginPage' );
        submit_button();
        ?>

    </form>
    <?php
    

}
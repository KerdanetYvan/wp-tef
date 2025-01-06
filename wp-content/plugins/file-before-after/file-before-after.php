<?php
/*
Plugin Name: bfa 
Description: permet de faire un carousel
version: 1.0 
*/

add_action("admin_menu","file_add_admin_menu" );
add_action("admin_init","BFA_settings_init");


function file_add_admin_menu(){
    add_options_page(
        'BFA',
        'BFA',
        'manage_options',
        "BFA",
        "BFA_page"
    );
}

function BFA_settings_init(){
    // enregistre les options dans le menu de wordpress 
    register_setting('BFA', 'data_file');
    
    // ajoute une section au setings admin 
    add_settings_section(
        "BFA",
        "Ajoute une image",
        "BFA_calback",
        "pluginPage"
    );
    // Ajouter un champ
    add_settings_field(
        'BFA', // ID
        'Images', // Label
        'field_calback', // Callback
        'pluginPage', // page
        'BFA' // Section
    );
}
// fonction callback de add_setings_section
function BFA_calback() {
    echo "<p>Sélectionnez un image.</p>";
}

function field_calback(){
    $options = get_option('data_file');
    $file_url = isset($options['file_url']) ? $options['file_url'] : '';
    ?>
    <input type="file" name="file_input" id="file_input" />
    <?php if ($file_url): ?>
        <p>Fichier actuel : <a href="<?php echo esc_url($file_url); ?>" target="_blank">Voir l'image</a></p>
    <?php endif; ?>
    <?php
}


function BFA_page(  ) { 

    ?>
    <form action='options.php' method='post'  enctype="multipart/form-data">


        <?php
        settings_fields( 'pluginPage' );
        do_settings_sections( 'pluginPage' );
        submit_button();
        ?>

    </form>
    <?php
    

}
// Traitement du téléchargement de fichier
add_action('admin_init', 'handle_file_upload');
function handle_file_upload() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file_input'])) {
        // Vérifier si un fichier est téléchargé
        if (!empty($_FILES['file_input']['name'])) {
            $uploaded_file = $_FILES['file_input'];

            // Gérer l'upload en toute sécurité
            $upload = wp_handle_upload($uploaded_file, ['test_form' => false]);

            if (isset($upload['url'])) {
                // Sauvegarder l'URL du fichier dans les options
                $options = get_option('data_file', []);
                var_dump($options);
                $options['file_url'] = $upload['url'];
                update_option('data_file', $options);

                add_settings_error(
                    'BFA_messages',
                    'BFA_success',
                    __('Fichier téléchargé avec succès.', 'bfa'),
                    'updated'
                );
            } else {
                add_settings_error(
                    'BFA_messages',
                    'BFA_error',
                    __('Erreur lors du téléchargement du fichier.', 'bfa'),
                    'error'
                );
            }
        }
    }
}

function bfa(){
    $options = get_option( 'data_file' );
    return $options;
}
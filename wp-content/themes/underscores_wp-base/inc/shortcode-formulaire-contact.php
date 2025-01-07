<?php
// Empêcher l'accès direct
if (!defined('ABSPATH')) {
    exit;
}
// function theme_custom_section_between_shortcode($atts) {
//     $atts = shortcode_atts([
//         'vignette_title_1' => 'title vignette 1',
//         'vignette_text_1' => "content vignette 1",
//         'vignette_title_2' => 'title vignette 2',
//         'vignette_text_2' => "content vignette 2",
//     ], $atts);

//     ob_start();


// }






add_shortcode('formulaire-contact', 'theme_custom_section_services_shortcode');
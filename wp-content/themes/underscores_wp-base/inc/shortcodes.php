<?php
// Empêcher l'accès direct
if (!defined('ABSPATH')) {
    exit;
}

// Définir le shortcode pour la section personnalisée
function theme_custom_section_shortcode($atts) {
    $atts = shortcode_atts([
        'phase1_title' => 'Phase 1',
        'phase1_description' => 'Description de la phase 1',
        'phase1_price' => 'Gratuit',
        'phase2_title' => 'Phase 2',
        'phase2_description' => 'Description de la phase 2',
        'phase2_price' => 'Prix phase 2',
        'phase3_title' => 'Phase 3',
        'phase3_description' => 'Description de la phase 3',
        'phase3_price' => 'Prix phase 3',
    ], $atts);

    ob_start();
    ?>
    <sectio class="custom-section">
        <h3>Phases de l'accompagnement</h3>
        <div class="container-section">
            <div class="phase-item">
                <h4><?= esc_html($atts['phase1_title']); ?></h4>
                <div class="descriptio-phase-item">
                    <p><?=  esc_html($atts['phase1_description']); ?></p>
                    <span><?=  esc_html($atts['phase1_price']); ?></span>
                </div>
            </div>
            <div class="phase-item">
                <h4><?=  esc_html($atts['phase2_title']); ?></h4>
                <div class="descriptio-phase-item">
                    <p><?=  esc_html($atts['phase2_description']); ?></p>
                    <span><?=  esc_html($atts['phase2_price']); ?></span>
                </div>
            </div>
            <div class="phase-item">
                <h4><?=  esc_html($atts['phase3_title']); ?></h4>
                <div class="descriptio-phase-item">
                    <p><?=  esc_html($atts['phase3_description']); ?></p>
                    <span><?=  esc_html($atts['phase3_price']); ?></span>
                </div>
            </div>
        </div>
    </section>
    <style>
        .custom-section {
            display: grid;
            /* background:red; */
            gap: 24px;
        }
        .custom-section h3{
            padding-left:40px;
            font-weight: 500;
            font-size: 36px;
        }
        .custom-section h3::after{
            content: "";
            display: grid;
            
        }

        .container-section{
            display: grid;
            grid-template-columns: 404px 404px 404px;
            justify-content: center;
            align-items: center;
        }
        .phase-item{
            display: grid;
            padding: 0 0 12px 16px;
            border-left: 1px dashed #349094;
            gap: 16px;
            position: relative;
        }
        .phase-item h4 {
            font-family: "Inter", serif;
            font-weight: 400;
            font-style: normal;
        }
        .descriptio-phase-item{
            height:120px;
            display: grid;
            align-content: space-between;
        }
        .phase-item::before{
            content: "";
            display: grid;
            border-radius: 100px;
            width: 15px;
            height: 15px;
            background: #349094;
            position: absolute;
            bottom: -8px;
            left: -8px;
        }
        .phase-item p {
            font-size: small;
            margin: 5px 0;
        }

    </style>
    <?php
    return ob_get_clean();
}
add_shortcode('custom_section', 'theme_custom_section_shortcode');
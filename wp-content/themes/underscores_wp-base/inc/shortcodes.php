<?php
// Empêcher l'accès direct
if (!defined('ABSPATH')) {
    exit;
}

// Shortcode de la section accompagnement
function theme_custom_section_services_shortcode($atts) {
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
            /* gap: 24px; */
            border-bottom: 2px solid #8DC1C3;
        }   
        .custom-section h3{
            padding-left:40px;
            font-weight: 500;
            font-size: 36px;
            margin-bottom: 24px;
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
        @media screen and (max-width:1200px){
            .container-section{
                grid-template-columns: initial;
                gap: 16px;
                margin: auto;
                border-left: #8DC1C3 solid 2px;

            }
            .custom-section{
                border-bottom:none;
            }
            .phase-item{
                border-top: 1px dashed #349094 ;
                border-left: none;
                width: 300px;
                padding-bottom: 0px;
                
            }
            .phase-item h4{
                padding-top: 16px;
            }
            .phase-item::before{
                top: -8px;
                left: -8px;
            }
        }

    </style>
    <?php
    return ob_get_clean();
}

// shortcode de la partie différence entre l'orthopédagogie et 
function theme_custom_section_between_shortcode($atts) {
    $atts = shortcode_atts([
        'vignette_title_1' => 'title vignette 1',
        'vignette_text_1' => "content vignette 1",
        'vignette_title_2' => 'title vignette 2',
        'vignette_text_2' => "content vignette 2",
    ], $atts);

    ob_start();
    ?>
    <div class="containerPresentation">
        <section class="vignette picture1">
            <h3><?= esc_html($atts["vignette_title_1"]) ?></h3>
            <p><?= esc_html($atts["vignette_text_1"]) ?></p>
        </section>
        <section class="vignette picture2">
            <h3><?= esc_html($atts["vignette_title_2"]) ?></h3>
            <p><?= esc_html($atts["vignette_text_2"]) ?></p>
        </section>

    </div>
    <style>
        .containerPresentation{
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
            padding: 0 40px ;
        }
        .vignette{
            border-radius: 20px;
            height: 232px;
            padding: 24px;
            width: 588px ;
            margin: auto;
        }
        .vignette h3{
            margin-bottom: 12px;
            font-size: x-large;
        }



        .picture1{
            background:linear-gradient(90deg, rgba(255, 255, 255, 0.4) 0%, rgba(255, 255, 255, 0.004) 60%, rgba(255, 255, 255, 0) 99.89%),linear-gradient(90deg, #B9DADA 0%, rgba(151, 199, 200, 0.741386) 53.02%, rgba(52, 144, 148, 0) 100%) ,  url('<?php echo get_template_directory_uri(); ?>/img/home-vignette1.webp') no-repeat center ;
            box-shadow: 0px 0px 0px 0px rgba(255, 255, 255, 1) inset;
        }
        .picture2{
            background:  linear-gradient(90deg, rgba(255, 255, 255, 0.4) 0%, rgba(255, 255, 255, 0.004) 60%, rgba(255, 255, 255, 0) 99.89%), linear-gradient(90deg, #B9DADA 0%, rgba(151, 199, 200, 0.741386) 53.02%, rgba(52, 144, 148, 0) 100%), url('<?php echo get_template_directory_uri(); ?>/img/home-vignette2.webp') no-repeat center;
            box-shadow: 0px 0px 0px 0px rgba(255, 255, 255, 1) inset;
        }
        @media screen and (max-width:1300px){
            .containerPresentation{
                grid-template-columns:1fr;
            }
        }
        @media screen and (max-width:662px){
            .vignette{
                width: 90%;
                height: 422px;
                box-shadow: 0px 0px 0px 0px rgba(255, 255, 255, 1) inset;
            }
            .picture1{
                background:linear-gradient(90deg, #B9DADA 66.79%, rgba(52, 144, 148, 0) 111.26%) ,  url('<?php echo get_template_directory_uri(); ?>/img/home-vignette1.webp') no-repeat bottom ;
            }
            .picture2{
                background: linear-gradient(90deg, #B9DADA 66.79%, rgba(52, 144, 148, 0) 111.26%), url('<?php echo get_template_directory_uri(); ?>/img/home-vignette2.webp') no-repeat bottom;
            }
        }
    </style>

    <?php
    return ob_get_clean();




}



add_shortcode('custom_section_services', 'theme_custom_section_services_shortcode');
add_shortcode('custom_section_between', 'theme_custom_section_between_shortcode');
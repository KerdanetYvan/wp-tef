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
    <section class="custom-section">
        <h3>Phases de l'accompagnement</h3>
        <div class="container-section">
            <div class="space-time-line"></div>
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
            border-bottom: 2px solid #8DC1C3;
        }   
        .custom-section h3{
            padding-left:40px;
            font-weight: 450;
            font-size: 36px;
            line-height: 47.5px;
            margin-bottom: 24px;
            display: grid;
            grid-template-columns: 5px 1fr;
            gap: 14px;
        }
        .custom-section h3::before{
            display: grid;
            content: "";
            width: 5px;
            height: 100%;
            background: url('<?php echo get_template_directory_uri(); ?>/img/line-title.webp') no-repeat;

        }
        .space-time-line{
            display: none;
        }

        .container-section{
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            margin: 0 66px;
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
            font-size: 24px;
            line-height: 29.05px;
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
            margin: 5px 0;
        }
        @media screen and (max-width:1000px){
            .container-section{
                grid-template-columns: initial;
                gap: 16px;
                margin: 0 16px;
                border-left: #8DC1C3 solid 4px;
            }
            .space-time-line{
                display: grid;
                height: 20px;
            }
            .custom-section{
                padding: 24px 24px;
                border-bottom:none;
            }
            .custom-section h3{
                padding-left: 0px;
            }
            .phase-item{
                border-top: 1px dashed #349094 ;
                border-left: none;
                width: 300px;
                padding-bottom: 0px;
                
            }
            .phase-item h4{
                font-size: 16px;
                font-weight: 600;
                line-height: 19.36px;
                padding-top: 16px;
            }
            .phase-item::before{
                top: -8px;
                left: -10px;
            }
        }
        @media screen and (max-width:410px){
            .phase-item{
                width: 100%;
            }
            .container-section{
                grid-template-columns: 215px;
            }
            .phase-item p{
                font-size: 16px;
                line-height: 16px;
            }

            
        }
        @media screen and (max-width:498px) {
            .custom-section h3{
                font-weight: 700;
                font-size: 24px;
                line-height: 27.4px;
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
            margin: auto;
        }
        .vignette h3{
            font-family: "Inter", serif;
            margin-bottom: 12px;
            font-size: 24px;
            font-weight: 700;
            line-height: 27.4px;
        }



        .picture1{
            background: rgb(185,218,218);


            background:linear-gradient(90deg, #B9DADA 0%, rgba(151, 199, 200, 0.74) 53.02%, rgba(52, 144, 148, 0.00) 100%), linear-gradient(90deg, rgba(255, 255, 255, 0.40) 0%, rgba(255, 255, 255, 0.00) 60%, rgba(255, 255, 255, 0.00) 99.89%),  url('<?php echo get_template_directory_uri(); ?>/img/compare-gauche-image-mobil.webp') no-repeat right ;
            /* background:linear-gradient(90deg, rgba(185,218,218,1) 0%, rgba(151,199,200,0.74) 53%, rgba(52,144,148,0) 100%), url('<?php echo get_template_directory_uri(); ?>/img/home-vignette1.webp') no-repeat right ; */
            box-shadow: 0px 0px 0px 0px rgba(255, 255, 255, 1) inset;
        }
        .picture2{
            background:  linear-gradient(90deg, #B9DADA 0%, rgba(151, 199, 200, 0.74) 53.02%, rgba(52, 144, 148, 0.00) 100%), linear-gradient(90deg, rgba(255, 255, 255, 0.40) 0%, rgba(255, 255, 255, 0.00) 60%, rgba(255, 255, 255, 0.00) 99.89%), url('<?php echo get_template_directory_uri(); ?>/img/compare-droite-image-mobil.webp') no-repeat right;
            box-shadow: 0px 0px 0px 0px rgba(255, 255, 255, 1) inset;
        }


        @media screen and (max-width:1000px){
            .containerPresentation{
                grid-template-columns:1fr;
            }
            .vignette p {
                font-size: 16px;
                line-height: 16px;
            }
        }
        @media screen and (max-width:913px){
            
            .containerPresentation{
                padding: 0 24px;
            }
        }
        @media screen and (max-width:662px){
 
            .vignette{
                height: 422px;
                box-shadow: 0px 0px 0px 0px rgba(255, 255, 255, 1) inset;
            }


            .picture1{
                background:linear-gradient(180deg, #B9DADA 47.07%, rgba(52, 144, 148, 0) 100%) ,  url('<?php echo get_template_directory_uri(); ?>/img/compare-gauche-image-laptop.webp') no-repeat bottom ;
            }
            .picture2{
                background: linear-gradient(180deg, #B9DADA 47.07%,#34909400 100%), url('<?php echo get_template_directory_uri(); ?>/img/compare-droite-image-laptop.webp') no-repeat bottom;
            }
        }
        @media screen and (max-width:498px) {
            .vignette h3{
                font-weight: 700;
                font-size: 24px;
                line-height: 27.4px;
            }
     
            
        }
        
    </style>

    <?php
    return ob_get_clean();




}



add_shortcode('custom_section_services', 'theme_custom_section_services_shortcode');
add_shortcode('custom_section_between', 'theme_custom_section_between_shortcode');
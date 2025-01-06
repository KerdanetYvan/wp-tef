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

// Ajout des shortcodes pour un service
function theme_custom_service($atts) {
    $atts = shortcode_atts([
        'title1' => 'Title service',
        'content1' => '<li>Content service</li>',
        'title2' => 'Title service',
        'content2' => '<li>Content service</li>',
        'title3' => 'Title service',
        'content3' => '<li>Content service</li>',
        'title4' => 'Title service',
        'content4' => '<li>Content service</li>',
    ], $atts);

    ob_start(); ?>
    <div class="container_service">
        <div class='service'>
            <h4 class="blanc titre_service"><?= esc_html($atts["title1"]); ?></h4>
            <ul class="blanc description_service list"><?= wp_kses_post($atts["content1"], ['li' => []]); ?></ul>
        </div>
        <div class='service'>
            <h4 class="blanc titre_service"><?= esc_html($atts["title2"]); ?></h4>
            <ul class="blanc description_service list"><?= wp_kses_post($atts["content2"], ['li' => []]); ?></ul>
        </div>
        <div class='service'>
            <h4 class="blanc titre_service"><?= esc_html($atts["title3"]); ?></h4>
            <ul class="blanc description_service list"><?= wp_kses_post($atts["content3"], ['li' => []]); ?></ul>
        </div>
        <div class='service'>
            <h4 class="blanc titre_service"><?= esc_html($atts["title4"]); ?></h4>
            <ul class="blanc description_service list"><?= wp_kses_post($atts["content4"], ['li' => []]); ?></ul>
        </div>
    </div>
    <style>
        .container_service {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 12px;
            padding: 0 40px;
        }

        .service {
            padding: 10px;
            background-color: #5BA4A7;
            border-radius: 20px;
            min-height: 330px;
            min-width: 270px;
        }

        .blanc {
            color: white;
        }
        
        .titre_service {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .list {
            list-style-type: disc;
            list-style-position: inside;
            padding-left: 5px;
        }

        .description_service {
            font-size: 16px;
            font-weight: 390;
            height: 100%;
            text-align: justify;
        }

        @media screen and (max-width: 780px) {
            .container_service {
                overflow: hidden;
                overflow-x: scroll;
            }
        }
    </style>
<?php return ob_get_clean();
}

function theme_custom_stage($atts) {
    $atts = shortcode_atts([
        'image1' => 'undefined',
        'title1' => 'Titre du stage',
        'content1' => 'Description du stage',
        'image2' => 'undefined',
        'title2' => 'Titre du stage',
        'content2' => 'Description du stage',
        'image3' => 'undefined',
        'title3' => 'Titre du stage',
        'content3' => 'Description du stage',
    ], $atts);
    ob_start(); ?>

    <div class="container_stage">
        <div class="stage">
            <img class="img" src="<?php echo get_template_directory_uri() . '/img/' . esc_html($atts['image1']) . '.webp'; ?>" alt="Image du stage">
            <div class="content">
                <h4 class="titre"><?= esc_html($atts['title1']); ?></h4>
                <p class="content"><?= esc_html($atts['content1']); ?></p>
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Calculate.svg" alt="Icone calculatrice">
                </div>
            </div>
        </div>
        <div class="stage">
            <img class="img" src="<?php echo get_template_directory_uri() . '/img/' . esc_html($atts['image2']) . '.webp'; ?>" alt="Image du stage">
            <div class="content">
                <h4 class="titre"><?= esc_html($atts['title2']); ?></h4>
                <p class="content"><?= esc_html($atts['content2']); ?></p>
                <div class="icon school">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/school.svg" alt="Icone école">
                </div>
            </div>
        </div>
        <div class="stage">
            <img class="img" src="<?php echo get_template_directory_uri() . '/img/' . esc_html($atts['image3']) . '.webp'; ?>" alt="Image du stage">
            <div class="content">
                <h4 class="titre"><?= esc_html($atts['title3']); ?></h4>
                <p class="content"><?= esc_html($atts['content3']); ?></p>
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Book.svg" alt="Icone livre">
                </div>
            </div>
        </div>
    </div>
    <style>
        .container_stage {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            padding: 0 40px;
        }

        @media screen and (max-width: 780px) {
            .container_stage {
                grid-template-columns: 1fr;
            }
        }

        .stage {
            margin: 0;
            padding: 0;
            border-radius: 20px;
            background-color: #E6F2F2;
            overflow: hidden;
            min-height: 450px;
        }

        .img {
            margin: 0;
            width: 100%;
            height: 240px;
            object-fit: cover;
        }

        .content {
            margin: 0;
            padding: 10px;
            position: relative;
        }

        .content h4 {
            font-size: 24px;
            font-weight: 700;
        }

        .content p {
            font-size: 16px;
            font-weight: 390;
            text-align: justify;
        }

        .icon {
            position: absolute;
            top: -65px;
            left: calc(50% - 43px);
            width: 78px;
            height: 78px;
            padding: 20px;
            border-radius: 50%;
            background-color: #B9DADA;
        }

        .icon img {
            width: 38px;
            height: 38px;
        }

        .school {
            padding: 14px;
        }

        .school img {
            width: 48px;
            height: 48px;
        }
    </style>

    <?php return ob_get_clean();
}

// Shortcode titre de section et description
function theme_custom_title_desc($atts) {
    $atts = shortcode_atts([
        'title' => 'Titre de la section',
        'description' => 'Description de la section',
    ], $atts);
    ob_start(); ?>

    <div class="section">
        <h2 class="titre_title_desc"><?= esc_html($atts['title']); ?></h2>
        <p class="description"><?= esc_html($atts['description']); ?></p>
    </div>
    <style>
        .section {
            width: 100%;
            margin: 0;
            padding: 40px;
        }

        .titre_title_desc {
            position: relative;
            font-size: 36px;
            font-weight: 450;
            margin-bottom: 20px;
            padding-left: 18px;
        }
        
        .titre_title_desc::after {
            position: absolute;
            top: 0;
            left: 0;
            content: "";
            display: flex;
            width: 100%;
            height: 100%;
            background: url('<?php echo get_template_directory_uri(); ?>/img/line-title.webp') no-repeat;
        }

        .description {
            text-align: justify;
            font-size: 24px;
            font-weight: 420;
        }
    </style>
    <?php return ob_get_clean();
}

add_shortcode('custom_section_services', 'theme_custom_section_services_shortcode');
add_shortcode('custom_section_between', 'theme_custom_section_between_shortcode');
add_shortcode('custom_service', 'theme_custom_service');
add_shortcode('custom_stage', 'theme_custom_stage');
add_shortcode('custom_title_desc', 'theme_custom_title_desc');
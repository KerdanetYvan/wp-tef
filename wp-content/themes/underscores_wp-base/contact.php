<?php
/**
 * Template Name: Contact
 */


get_header(); ?>
<!-- 16.24.42.43. 2.8 -->



<main class="mainForm">
    <h1 class="titrePrincip">Contactez-moi !</h1>
    <section class="containerForm">
        <?= do_shortcode('[contact-form-7 id="cd62817" title="Contact form 1"]'); ?>
        <!-- <form method="get" class="formContact">
            <p class="details">Tout les champs sont obligatoires</p>
            <div class="containerFields">
                <div class="containerNomPrenom">
                    <div class="containerNom cont">
                        <label for="nom" class="text_form nom">Nom</label>
                        <input type="text" id="nom" name="nom" required>
                    </div>
                    <div class="containerPrenom cont">
                        <label for="prenom" class="text_form prenom">Prénom</label>
                        <input type="text" id="prenom" name="prenom" required>
                    </div>
                </div>
                <div class="containerMail cont">
                    <label for="email" class="text_form mail">Mail (ex: mail@exemple.fr)</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="containerMessage cont">
                    <label for="message" class="text_form message">Message</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
            </div>
            <button type="submit" class="btn">Envoyer</button>
        </form> -->
        <img src="<?php the_field('image_formulaire_de_contact') ?>" alt="Madame"/>
    </section>

    <div class="containerEmailPhoneAddress">
        <div class="phone formVignette">
            <div> 
                <p class="bold">Téléphone</p>
                <p><?= get_field('numero_de_telephone_formulaire_de_contact') ?></p>
            </div> 
        </div>
        <div class="email formVignette">
            <div>
                <p class="bold">Email</p>
                <p><?= get_field('email_formulaire_de_contact') ?></p>
            </div>
        </div>
        <div class="adresse formVignette">
            <div>
                <p class="bold">Adresse</p>
                <p><?= get_field('adresse_formulaire_de_contact') ?></p>
            </div>
        </div>
        
    </div>
</main>

<?php
get_footer();


<?php
/**
 * Template Name: Contact
 */

get_header(); ?>

<main>
    <h1>Contactez-moi</h1>
    <section class="containerForm">
        <form>
            <p class="details">Tout les champs sont obligatoires</p>
            <div>
                <label for="nom" class="text_form nom">Nom</label>
                <input type="text" id="nom" name="nom" required>
                <label for="prenom" class="text_form prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom" required>
            </div>
            <label for="email" class="text_form mail">Mail (ex: mail@exemple.fr)</label>
            <input type="email" id="email" name="email" required>
            <label for="message" class="text_form message">Message</label>
            <textarea id="message" name="message" required></textarea>
        </form>
        <img src="<?php get_template_directory_uri(); ?>/img/madame_au_bureau.jpg" alt="Madame"/>
    </section>

    <div class="containerEmailPhoneAddress">
        <div>
            <span>
                <p>Téléphone</p>
                <p>+33 0 00 00 00 00</p>
            </span>
        </div>
        <div>
            <span>
                <p>Email</p>
                <p>Prénom.nom@gmail.com</p>
            </span>
        </div>
        <div>
            <span>
                <p>Adresse</p>
                <p>6 rue blablabla</p>
            </span>
        </div>
        
    </div>
</main>

<?php
get_footer();
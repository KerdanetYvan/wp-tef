<?php
/**
 * Template Name: Contact
 */

get_header(); ?>

<main class="mainForm">
    <h1>Contactez-moi</h1>
    <section class="containerForm">
        <form class="formContact">
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
        </form>
        <img src="<?php echo get_template_directory_uri(); ?>/img/madame_au_bureau.svg" alt="Madame"/>
    </section>

    <div class="containerEmailPhoneAddress">
        <div class="phone formVignette">
            <div>
                <p class="bold">Téléphone</p>
                <p>+33 0 00 00 00 00</p>
            </div>
        </div>
        <div class="email formVignette">
            <div>
                <p class="bold">Email</p>
                <p>Prénom.nom@gmail.com</p>
            </div>
        </div>
        <div class="adresse formVignette">
            <div>
                <p class="bold">Adresse</p>
                <p>6 rue blablabla</p>
            </div>
        </div>
        
    </div>
</main>

<?php
get_footer();
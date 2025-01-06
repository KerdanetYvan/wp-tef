"use strict";

document.addEventListener("DOMContentLoaded", function() {
    // on récupere la classe et l'id que l'on à créer au moment ou l'on a créer dans wp_nav_menu 
    let btnMenu = document.querySelector('.menuHamburger');
    let menu = document.getElementById('containerNavLink');
    // on récupère l'id des barre du menu hamburger pour l'annimation au moment du clic 
    let croix1 = document.getElementById('barre1');
    let croix2 = document.getElementById('barre2');
    // debug 
    console.log(btnMenu, menu, croix1, croix2);
    btnMenu.addEventListener('click', (event) => {
        // on utilise un écouteur d'évenement qui va affecter a menu la class hide pour faire apparaitre le menu  
        menu.classList.toggle('hide');
        // on affecte ici les class au bonne endroit pour gérer l'annimation de la croix de notre menu hamburger 
        croix1.classList.toggle('croix');
        croix2.classList.toggle('croix');
        croix1.classList.toggle('angleBarre1');
        croix2.classList.toggle('angleBarre2');
        // stop la propagation du click en dehors du document 
        event.stopPropagation()
    });
    // si on clique en dehors de la page on ferme la page du menu burger 
    document.addEventListener('click', (event) => {
        if(!menu.contains(event.target) && btnMenu.contains(event.target)){
            menu.classList.toggle('hide')
            croix1.classList.toggle('croix');
            croix2.classList.toggle('croix');
            croix1.classList.toggle('angleBarre1');
            croix2.classList.toggle('angleBarre2');
            event.stopPropagation()

        }
    })
});


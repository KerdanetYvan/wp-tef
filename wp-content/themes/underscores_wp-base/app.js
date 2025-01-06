"use strict";

document.addEventListener("DOMContentLoaded", function() {
    // on récupere la classe et l'id que l'on à créer au moment ou l'on a créer dans wp_nav_menu 
    let btnMenu = document.querySelector('.menuHamburger');
    let menu = document.getElementById('primary-menu');
    let menu2 = document.getElementById('primary-menu-2');
    // on récupère l'id des barre du menu hamburger pour l'annimation au moment du clic 
    let croix1 = document.getElementById('barre1');
    let croix2 = document.getElementById('barre2');
    // debug 
    console.log(btnMenu, menu, croix1, croix2);
    btnMenu.addEventListener('click', function(){
        // on utilise un écouteur d'évenement qui va affecter a menu la class hide pour faire apparaitre le menu  
        menu.classList.toggle('hide');
        menu2.classList.toggle('hide');
        // on affecte ici les class au bonne endroit pour gérer l'annimation de la croix de notre menu hamburger 
        croix1.classList.toggle('croix');
        croix2.classList.toggle('croix');
        croix1.classList.toggle('angleBarre1');
        croix2.classList.toggle('angleBarre2');
    });
});


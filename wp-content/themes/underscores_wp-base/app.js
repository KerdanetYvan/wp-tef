"use strict";

document.addEventListener("DOMContentLoaded", function() {
    // on récupere la classe et l'id que l'on à créer au moment ou l'on a créer dans wp_nav_menu 
    let btnMenu = document.querySelector('.menuHamburger');
    let menu = document.getElementById('containerNavLink');
    let masthead = document.getElementById('masthead');
    // on récupère l'id des barre du menu hamburger pour l'annimation au moment du clic 
    let croix1 = document.getElementById('barre1');
    let croix2 = document.getElementById('barre2');
    let barre3 = document.getElementById('barre3');
    let isOpen = false

    // boxshadow au scroll de la page 
    document.addEventListener('scroll', () => {
        // pageXOffset est supproter par les anciens navigateurs 
        let yOld = window.pageYOffset;
        let yNew = window.scrollY;
        if(yNew> 0 || yOld > 0){
            masthead.style.boxShadow = "0px 0.4px 7px 0px #0000001A"
        }else{
            masthead.style.boxShadow = "none"
        }
    })




    btnMenu.addEventListener('click', (event) => {
        // on utilise un écouteur d'évenement qui va affecter a menu la class hide pour faire apparaitre le menu  
        menu.classList.toggle('hide');
        // on affecte ici les class au bonne endroit pour gérer l'annimation de la croix de notre menu hamburger 
        croix1.classList.toggle('croix');
        croix2.classList.toggle('croix');
        croix1.classList.toggle('angleBarre1');
        croix2.classList.toggle('angleBarre2');
        barre3.classList.toggle("off")
        // stop la propagation du click en dehors du document 
        event.stopPropagation() 
        isOpen = true
        // si on clique en dehors de la page on ferme la page du menu burger 
        document.addEventListener('click', (event) => {
            if(isOpen && (!menu.contains(event.target) || btnMenu.contains(event.target))){
                menu.classList.toggle('hide')
                croix1.classList.toggle('croix');
                croix2.classList.toggle('croix');
                croix1.classList.toggle('angleBarre1');
                croix2.classList.toggle('angleBarre2');
                barre3.classList.toggle("off")
                isOpen = false
            }
        })
    });

    // js page article
    // si sur la page il existe la classe praagrapheArticle on entre dans notre condition 
    // if(document.querySelectorAll('.paragrapheArticle').length !== 0){
    //     let texte = document.querySelectorAll('.paragrapheArticle')
    //     texte.forEach(element => {
    //         if(element.innerHTML.length > 200){
    //             return element.innerHTML = element.innerHTML.slice(0, 200).concat('...')
    //         }
    //         return element.innerHTML
    //     })
    // }


    // js page article
});


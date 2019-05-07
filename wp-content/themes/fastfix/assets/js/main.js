// hamburger menu
window.onload = function() {
    hamburger();

   window.onresize = function() {
       hamburgerResize();
   }
}

function hamburger() {
    const HAMBURGER = document.querySelector('.hamburger');
    const MENU = document.querySelector('#menu-main-menu');

    HAMBURGER.addEventListener('click', function() {
            if (MENU.classList.contains('open')) {
                MENU.classList.remove('open');
            } else {
                MENU.classList.add('open');
            }
    });

    if (window.innerWidth > 1100) {
        MENU.classList.remove('open');
    }
}

function hamburgerResize() {
    const MENU = document.querySelector('#menu-main-menu');
    if (window.innerWidth > 1100) {
        MENU.classList.remove('open');
    }
}
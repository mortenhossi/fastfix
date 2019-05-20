const $ = jQuery;

// hamburger menu
window.onload = function() {
    hamburger();
    FAQ();

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

// FAQ accordion
function FAQ() {
    const ICON = document.querySelectorAll('.faq-icon');
    for (let i = 0; i < ICON.length; i++) {
        ICON[i].addEventListener('click', function() {
            const CONTENT = this.parentElement.nextElementSibling;
            if (!CONTENT.classList.contains('open')) {
                CONTENT.classList.add('open');
                this.innerHTML = '-';
                
            } else {
                CONTENT.classList.remove('open');
                this.innerHTML = '+';
            }
        });
        
    }
}

// function hehe() {
//     $('.faq-icon').click(function() {
//         $(this).parent().next().slideToggle();
        
        
//     });
// }




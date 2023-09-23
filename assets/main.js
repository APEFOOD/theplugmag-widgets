jQuery(document).ready(function($) {

    // navbar scroll effect 
    const mainLogo = document.querySelector('.tp-main-logo');
    const secondaryLogo = document.querySelector('.tp-secondary-logo');
    const bottomHeader = document.querySelector('.tp-bottom-header');
    const mainMenu = document.querySelector('.tp-main-menu'); 

    window.addEventListener("scroll", function() {

        if (window.scrollY > mainLogo.offsetHeight) {
            bottomHeader.classList.add('fixed', 'top-0', 'left-0', 'right-0', 'z-max', 'py-1', 'shadow-xs');
            bottomHeader.classList.remove('py-2', 'shadow-sm');
            secondaryLogo.classList.remove('opacity-0'); // making the secondary logo visible
            mainMenu.classList.add('text-sm'); // making the menu text smaller 

        } else {
            bottomHeader.classList.remove('fixed', 'py-1', 'shadow-xs');
            secondaryLogo.classList.add('opacity-0'); // hiding the secondary logo
            mainMenu.classList.remove('text-sm'); // returning the menu text to its original size 
            bottomHeader.classList.add('py-2', 'shadow-sm')
        }
    });

    // mobile menu functionality 
    const hamburger = document.querySelector(".eicon-menu-bar");
    const mobileMenu = document.getElementById("tpMobileMenu");
    const closeMenu = document.getElementById("tpCloseMenu");
    const menuDrawerOverlay = document.getElementById("tpMenuOverlay"); 

    hamburger.addEventListener("click", () => {
        mobileMenu.style.transform = "translateX(0)";
        menuDrawerOverlay.classList.remove('hidden');
    });

    menuDrawerOverlay.addEventListener("click", () => {
        mobileMenu.style.transform = "translateX(-100%)";
        menuDrawerOverlay.classList.add('hidden');
    });

    closeMenu.addEventListener("click", () => {
        menuDrawerOverlay.classList.add('hidden');
        mobileMenu.style.transform = "translateX(-100%)";

    });

    // fullscreen search 
    document.querySelectorAll('.tp-search-toggle').forEach(button => {
        button.addEventListener('click', function() {
            document.getElementById('tp-fullscreen-search').classList.remove('opacity-0', 'pointer-events-none');
            document.getElementById('tp-search-input').focus();
        });
    });

    document.getElementById('tp-fullscreen-search').addEventListener('click', function(event) {
        if (event.target === this || event.target.id === 'tp-close-search') {
            this.classList.add('opacity-0', 'pointer-events-none');
        }
    });

}); 
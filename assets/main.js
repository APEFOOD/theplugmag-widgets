jQuery(document).ready(function($) {

    // navbar scroll effect 
    const mainLogo = document.querySelector('.tp-main-logo');
    const secondaryLogo = document.querySelector('.tp-secondary-logo');
    const bottomHeader = document.querySelector('.tp-bottom-header');

    window.addEventListener("scroll", function() {

        if (window.scrollY > mainLogo.offsetHeight) {
            bottomHeader.classList.add('fixed', 'top-0', 'left-0', 'right-0', 'z-max');
            secondaryLogo.classList.remove('opacity-0'); // making the secondary logo visible
        } else {
            bottomHeader.classList.remove('fixed');
            secondaryLogo.classList.add('opacity-0'); // hiding the secondary logo
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

    const searchOverlay = document.getElementById('tp-fullscreen-search');

    closeMenu.addEventListener("click", () => {
        menuDrawerOverlay.classList.add('hidden');
        mobileMenu.style.transform = "translateX(-100%)";

    });

    // fullscreen search 
    document.querySelectorAll('.tp-search-toggle').forEach(button => {
        button.addEventListener('click', function() {
            document.getElementById('tp-fullscreen-search').classList.remove('opacity-0', 'pointer-events-none');
        });
    });

    /*const searchOverlay = document.getElementById('tp-fullscreen-search');
    document.getElementById('tp-close-search').addEventListener('click', () => {
        console.log("clicked!");
        //document.getElementById('tp-fullscreen-search').classList.add('opacity-0', 'pointer-events-none');
        searchOverlay.style.opacity = '0';
        searchOverlay.style.pointerEvents = 'none';
    }, true); */

    document.getElementById('tp-fullscreen-search').addEventListener('click', function(event) {
        if (event.target === this || event.target.id === 'tp-close-search') {
            this.classList.add('opacity-0', 'pointer-events-none');
        }
    });
    
   


}); 
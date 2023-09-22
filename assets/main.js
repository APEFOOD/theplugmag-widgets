jQuery(document).ready(function($) {

    const mainLogo = document.querySelector('.tp-main-logo');
    const secondaryLogo = document.querySelector('.tp-secondary-logo');
    const bottomHeader = document.querySelector('.tp-bottom-header');

    window.addEventListener("scroll", function() {
        // Checking if the main logo is out of view
        //const isMainLogoOutOfView = mainLogo.getBoundingClientRect().bottom <= 0;

        if (window.scrollY > mainLogo.offsetHeight) {
            //bottomHeader.classList.remove('z-40');
            bottomHeader.classList.add('fixed', 'top-0', 'left-0', 'right-0', 'z-max');
            secondaryLogo.classList.remove('opacity-0'); // making the secondary logo visible
        } else {
            bottomHeader.classList.remove('fixed');
            secondaryLogo.classList.add('opacity-0'); // hiding the secondary logo
        }
    });

    const hamburger = document.querySelector(".eicon-menu-bar");
    const mobileMenu = document.getElementById("tpMobileMenu");
    const closeMenu = document.getElementById("tpCloseMenu");

    hamburger.addEventListener("click", () => {
        mobileMenu.style.transform = "translateX(0)";
    });

    closeMenu.addEventListener("click", () => {
        mobileMenu.style.transform = "translateX(-100%)";
    });

    // Close the menu if clicked outside.
    document.addEventListener("click", (event) => {
        if (!mobileMenu.contains(event.target) && !hamburger.contains(event.target)) {
            event.preventDefault(); 
            mobileMenu.style.transform = "translateX(-100%)";
        }
    });


}); 
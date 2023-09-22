<!-- desktop header --> 
<div class="hidden lg:block w-full">
    
    <div class="tp-main-logo relative py-4">
        <div class="tp-site-logo flex justify-center">
            <!-- main site logo --> 
            <img class="w-1/3" src="<?php echo plugin_dir_url(__FILE__) . '../../assets/ThePlug-Logo-Minimal.png';?>" alt="Site Logo">
        </div>
    </div>

    <div class="tp-bottom-header flex bg-white py-2 w-full">
        <!-- secondary logo (initially hidden) -->
        <div class="pl-8 tp-secondary-logo w-1/5 opacity-0 transition-opacity duration-300">
            <img class="w-28" src="<?php echo plugin_dir_url(__FILE__) . '../../assets/ThePlug-Logo-Minimal.png';?>" alt="Secondary Logo">
        </div>

        <!-- navigation menu --> 
        <nav class="main-menu w-3/5 flex justify-center items-center space-x-6">
            <a href="#" class="uppercase text-gray-700 hover:text-black">Home</a>
            <a href="#" class="uppercase text-gray-700 hover:text-black">Music</a>
            <a href="#" class="uppercase text-gray-700 hover:text-black">Style</a>
            <a href="#" class="uppercase text-gray-700 hover:text-black">Culture</a>
            <a href="#" class="uppercase text-gray-700 hover:text-black">Latest</a>
            <a href="#" class="uppercase text-gray-700 hover:text-black">Magazine</a>
            <a href="#" class="uppercase text-gray-700 hover:text-black">Plug tv</a>
        </nav>

        <!-- Dark mode toggle and search button --> 
        <div class="pr-8 w-1/5 flex justify-end items-center">
            <button class="tp-dark-mode-toggle bg-transparent border-none hover:bg-transparent focus:outline-none focus:ring-0"><i class="eicon-adjust shadow text-black"></i></button>
            <button class="tp-search-toggle bg-transparent border-none hover:bg-transparent focus:outline-none focus:ring-0"><i class="eicon-search shadow text-black"></i></button>
        </div>
    </div>
</div>

<!-- mobile header --> 
<div class="bg-white py-4 flex justify-between items-center fixed top-0 left-0 right-0 z-50 lg:hidden">
    <!-- hamburger icon (from our good friends at Elementor) -->
    <button class="eicon-menu-bar px-3 text-black bg-transparent border-none hover:bg-transparent focus:outline-none focus:ring-0"></button>

    <!-- site logo --> 
    <img src="<?php echo plugin_dir_url(__FILE__) . '../../assets/ThePlug-Logo-Standard.png';?>" alt="Logo" class="w-28 md:w-48">

    <!-- toggles --> 
    <div class="flex">
        <!-- dark mode toggle --> 
        <button class="eicon-adjust bg-transparent hover:bg-transparent focus:outline-none focus:ring-0 text-black p-2"></button>
        <!-- search button --> 
        <button class="eicon-search bg-transparent hover:bg-transparent focus:outline-none focus:ring-0 text-black p-2"></button>
    </div>
</div>

<div id="tpMobileMenu" class="fixed top-0 left-0 w-64 h-full bg-white transform -translate-x-full overflow-y-auto z-50">
    <!-- close button -->
    <div class="flex justify-between items-center px-4 py-4">
        <span></span>
        <button id="tpCloseMenu" class="p-4 bg-transparent border-none">X</button>
    </div>
    
    <!-- navigation links -->
    <nav class="flex flex-col space-y-4 p-4">
        <a href="#">HOME</a>
        <a href="#">MUSIC</a>
        <a href="#">STYLE</a>
        <a href="#">CULTURE</a>
        <a href="#">LATEST</a>
        <a href="#">MAGAZINE</a>
        <a href="#">PLUG TV</a>
    </nav>
</div>


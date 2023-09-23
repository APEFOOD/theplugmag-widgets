<!-- desktop header --> 
<div class="hidden lg:block w-full">
    
    <div class="tp-main-logo relative py-4 bg-gray-100">
        <div class="tp-site-logo flex justify-center">
            <!-- main site logo --> 
            <img class="w-1/3" src="<?php echo plugin_dir_url(__FILE__) . '../../assets/ThePlug-Logo-Minimal.png';?>" alt="Site Logo">
        </div>
    </div>

    <div class="tp-bottom-header flex bg-white py-2 w-full shadow border-b">
        <!-- secondary logo (initially hidden) -->
        <div class="pl-8 py-2 tp-secondary-logo w-1/5 opacity-0 transition-opacity duration-300">
            <img class="w-32" src="<?php echo plugin_dir_url(__FILE__) . '../../assets/ThePlug-Logo-Standard.png';?>" alt="Secondary Logo">
        </div>

        <!-- navigation menu --> 
        <nav class="tp-main-menu w-3/5 flex justify-center items-center space-x-2">
            <a href="#" class="uppercase text-black hover:text-white hover:bg-red-600 p-2">Home</a>
            <a href="#" class="uppercase text-black hover:text-white hover:bg-red-600 p-2">Music</a>
            <a href="#" class="uppercase text-black hover:text-white hover:bg-red-600 p-2">Style</a>
            <a href="#" class="uppercase text-black hover:text-white hover:bg-red-600 p-2">Culture</a>
            <a href="#" class="uppercase text-black hover:text-white hover:bg-red-600 p-2">Latest</a>
            <a href="#" class="uppercase text-black hover:text-white hover:bg-red-600 p-2">Magazine</a>
            <a href="#" class="uppercase text-black hover:text-white hover:bg-red-600 p-2">Plug tv</a>
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
        <button class="tp-search-toggle eicon-search bg-transparent hover:bg-transparent focus:outline-none focus:ring-0 text-black p-2"></button>
    </div>
</div>

<!-- drawer overlay --> 
<div id="tpMenuOverlay" class="fixed inset-0 bg-black opacity-50 z-10 hidden"></div>

<div id="tpMobileMenu" class="fixed top-0 left-0 w-64 h-full bg-gray-50 transform -translate-x-full overflow-y-auto z-50">
    <!-- close button -->
    <div class="flex justify-between items-center p-4">
        <span></span>
        <button id="tpCloseMenu" class="p-4 bg-transparent border-none">X</button>
    </div>
    
    <!-- navigation links -->
    <nav class="flex flex-col space-y-4 p-4 text-center">
        <a href="#" class="uppercase text-black hover:text-white hover:bg-red-600 p-2">HOME</a>
        <a href="#" class="uppercase text-black hover:text-white hover:bg-red-600 p-2">MUSIC</a>
        <a href="#" class="uppercase text-black hover:text-white hover:bg-red-600 p-2">STYLE</a>
        <a href="#" class="uppercase text-black hover:text-white hover:bg-red-600 p-2">CULTURE</a>
        <a href="#" class="uppercase text-black hover:text-white hover:bg-red-600 p-2">LATEST</a>
        <a href="#" class="uppercase text-black hover:text-white hover:bg-red-600 p-2">MAGAZINE</a>
        <a href="#" class="uppercase text-black hover:text-white hover:bg-red-600 p-2">PLUG TV</a>
    </nav>
</div>

<!-- fullscreen search overlay --> 
<div id="tp-fullscreen-search" class="opacity-0 pointer-events-none fixed inset-0 bg-gray-700 bg-opacity-90 flex items-center justify-center h-screen transition-opacity duration-300 z-max">
    <div class="relative flex items-center justify-center w-full max-w-xs">
        <form role="search" method="get" class="tp-search-form" action="<?php echo home_url( '/' ); ?>">
            <label>
                <span class="screen-reader-text"><?php _x( 'Search for:', 'label' ) ?></span>
                <input type="search" id="tp-search-input" class="tp-search-field w-full py-4 px-6 text-2xl text-center caret-black tp-minimalist-search"
                    placeholder="type and hit enter..."
                    value="<?php echo get_search_query() ?>" name="s"
                    title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" autofocus />
            </label>            
        </form>
    </div>
    <button id="tp-close-search" class="absolute top-0 right-0 mt-4 mr-4 text-2xl bg-transparent border-0">×</button>
</div>


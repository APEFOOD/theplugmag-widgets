<footer class="bg-black text-white p-4 mt-4">
    <!-- Top border line -->
    <div class="border-t-[1.5px] mx-0 border-white w-full"></div>
    
    <!-- Top row -->
    <div class="container mx-auto py-6">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-3 my-8 py-5">
            
            <!-- First three columns with heading and menu items -->
            <div class="space-y-2">
                <h5 class="font-semibold text-white">Explore</h5>
                <ul class="list-none pl-0 text-sm">
                    <li>Music</li>
                    <li>Style</li>
                    <li>Culture</li>
                    <li>Magazine</li>
                    <li>The Plug TV</li>
                </ul>
            </div>
            <!-- ... Repeat the above div structure for the other two columns ... -->
            <div class="space-y-2">
                <h5 class="text-white">About Us</h5>
                <ul class="list-none pl-0 text-sm">
                    <li>About Us</li>
                    <li>Services</li>
                    <li>Contact</li>
                    <li>Terms & Conditions</li>
                </ul>
            </div>

            <div class="space-y-2">
                <h5 class="semibold text-white">Follow Us</h5>
                <ul class="list-none pl-0 text-sm">
                    <li>Instragram</li>
                    <li>Twitter</li>
                    <li>Facebook</li>
                    <li>YouTube</li>
                    <li>TikTok</li>
                </ul>
            </div>
            <!-- Fourth column: Email Subscription -->
            <div class="space-y-2">
                <input type="email" placeholder="Your email" class="p-2 w-full placeholder:text-center">
                <button class="w-full bg-red-700 text-white p-2">Subscribe</button>
            </div>
            
        </div>
        <!-- Bottom border line -->
        <div class="border-b-[0.5px] border-white my-12 mx-6"></div>
    </div>
    
    <!-- Bottom row -->
    <div class="lg:py-2 lg:px-36 flex flex-col lg:flex-row justify-between items-center">
        <!-- logo -->
        <div class="mb-4 lg:mb-0">
            <img src="<?php echo plugin_dir_url(__FILE__) . '../../assets/The-Plug-Logo-White.png';?>" class="w-28" alt="Logo">
        </div>
        
        <!-- copyright --> 
        <div class="text-xs">
            Copyright <?php echo date("Y"); ?> &copy; All Rights Reserved. 
        </div>
    </div>
</footer>
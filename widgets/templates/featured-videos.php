<div class="tp-featured-videos p-4">
    <div class="w-full border-b-4 border-black"></div>
    <h2 class="uppercase my-2 text-2xl font-bold">The Plug TV</h2>

    <div class="flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-6">

        <!-- main featured video --> 
        <div class="video-container relative flex-grow lg:w-2/3 lg:h-full">
            
            <!-- Thumbnail Image with Play Button -->
            <div class="video-thumbnail relative group" data-youtube-id="cr0B5-Isj_E">
                <img src="<?php echo plugin_dir_url(__FILE__) . '../../assets/kamo.jpg';?>" alt="Video Thumbnail" class="w-full object-cover">

                <!-- tinted overlay --> 
                <div class="absolute inset-0 hover:bg-gray-900 opacity-40 cursor-pointer"></div>

                <!-- Container for Play button and title -->
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 lg:top-auto lg:bottom-4 lg:left-4 lg:transform-none flex items-center opacity-80 cursor-pointer">
                    <!-- Play button overlay -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" class="w-14 h-14 group-hover:bg-[#BF0000] bg-black rounded-full">
                        <polygon class="fill-current text-white" points="9.33 6.69 9.33 19.39 19.3 13.04 9.33 6.69"/>
                        <path class="fill-current text-white stroke-current" stroke-width="0.5px" d="M26,13A13,13,0,1,1,13,0,13,13,0,0,1,26,13ZM13,2.18A10.89,10.89,0,1,0,23.84,13.06,10.89,10.89,0,0,0,13,2.18Z"/>
                    </svg>

                    <!-- Video Title -->
                    <div class="flex flex-col z-30">
                        <span class="hidden lg:block ml-2 text-white font-bold text-lg md:text-xl uppercase">Watch</span>
                        <span class="ml-2 text-white font-bold text-xl md:text-3xl">Video Title</span>
                    </div>
                </div>
                
            </div>

            <!-- Video Player Wrapper with a 16:9 Aspect Ratio -->
            <div class="video-wrapper relative w-full h-72 md:h-[500px] pb-[56.25%]" style="display:none;"></div>

            <!-- video title --> 
            <div class="lg:hidden text-red-500 text-sm uppercase py-2">
                <p>breaking bread</p>
            </div>
            <div class="lg:hidden text-lg">
                <p>Something About Kamo Mphela and Nike</p>
            </div>
            
        </div>

        <!-- other featured videos -->
        <div class="space-y-4 lg:w-1/3">

            <!-- video 1 --> 
            <div class="lg:w-4/5 mx-auto">
                <div class="video-thumbnail relative group" data-youtube-id="cr0B5-Isj_E">
                    <img src="<?php echo plugin_dir_url(__FILE__) . '../../assets/Nadia.jpg';?>" alt="Video Thumbnail" class="w-full object-cover">

                    <!-- tinted overlay --> 
                    <div class="absolute inset-0 hover:bg-gray-900 opacity-40 cursor-pointer"></div>

                    <!-- Container for Play button -->
                    <div class="absolute bottom-4 lg:left-4 right-4 flex items-center opacity-80 cursor-pointer">
                        <!-- Play button overlay -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" class="w-10 h-10 lg:w-14 lg:h-14 group-hover:bg-[#BF0000] bg-black rounded-full">
                            <polygon class="fill-current text-white" points="9.33 6.69 9.33 19.39 19.3 13.04 9.33 6.69"/>
                            <path class="fill-current text-white stroke-current" stroke-width="0.5px" d="M26,13A13,13,0,1,1,13,0,13,13,0,0,1,26,13ZM13,2.18A10.89,10.89,0,1,0,23.84,13.06,10.89,10.89,0,0,0,13,2.18Z"/>
                        </svg>
                    </div>
                </div>
                
                <!-- video title --> 
                <div class="text-red-500 text-sm uppercase pt-2">
                    <p>the cover</p>
                </div>
                <div class="text-lg">
                    <p>Something Else About Whatever</p>
                </div>
            </div>

            <!-- video 2 --> 
            <div class="lg:w-4/5 mx-auto">
                <div class="video-thumbnail relative group" data-youtube-id="cr0B5-Isj_E">
                    <img src="<?php echo plugin_dir_url(__FILE__) . '../../assets/KO.jpeg';?>" alt="Video Thumbnail" class="w-full object-cover">

                    <!-- tinted overlay --> 
                    <div class="absolute inset-0 hover:bg-gray-900 opacity-40 cursor-pointer"></div>

                    <!-- Container for Play button -->
                    <div class="absolute bottom-4 lg:left-4 right-4 flex items-center opacity-80 cursor-pointer">
                        <!-- Play button overlay -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" class="w-10 h-10 lg:w-14 lg:h-14 group-hover:bg-[#BF0000] bg-black rounded-full">
                            <polygon class="fill-current text-white" points="9.33 6.69 9.33 19.39 19.3 13.04 9.33 6.69"/>
                            <path class="fill-current text-white stroke-current" stroke-width="0.5px" d="M26,13A13,13,0,1,1,13,0,13,13,0,0,1,26,13ZM13,2.18A10.89,10.89,0,1,0,23.84,13.06,10.89,10.89,0,0,0,13,2.18Z"/>
                        </svg>
                    </div>
                </div>

                <!-- video title --> 
                <div class="text-red-500 text-sm uppercase pt-2">
                    <p>the binge</p>
                </div>
                <div class="text-lg">
                    <p>Another Thing About Other Things</p>
                </div>

            </div>
        </div>
    </div>
</div>


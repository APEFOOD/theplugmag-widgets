<!-- cinema mode container --> 
<div class="bg-black">
    
    <div class="video-container relative">
        <!-- Thumbnail Image with Play Button -->
        <div class="video-thumbnail relative group" data-youtube-id="cr0B5-Isj_E">
            <img src="<?php echo plugin_dir_url(__FILE__) . '../../assets/kamo.jpg';?>" alt="Video Thumbnail" class="w-full object-cover">

            <!-- tinted overlay --> 
            <div class="absolute inset-0 hover:bg-gray-900 opacity-40 cursor-pointer"></div>

            <!-- Container for Play button and title -->
            <div class="absolute bottom-4 left-4 m-4 flex items-center opacity-80 cursor-pointer">
                <!-- Play button overlay -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" class="w-20 h-20 group-hover:bg-[#BF0000] bg-black rounded-full">
                    <polygon class="fill-current text-white" points="9.33 6.69 9.33 19.39 19.3 13.04 9.33 6.69"/>
                    <path class="fill-current text-white stroke-current" stroke-width="0.5px" d="M26,13A13,13,0,1,1,13,0,13,13,0,0,1,26,13ZM13,2.18A10.89,10.89,0,1,0,23.84,13.06,10.89,10.89,0,0,0,13,2.18Z"/>
                </svg>

                <!-- Video Title -->
                <div class="flex flex-col z-30">
                    <span class="ml-2 text-white font-bold text-xl uppercase">Watch</span>
                    <span class="ml-2 text-white font-bold text-3xl">Video Title</span>
                </div>
            </div>
        </div>

        <!-- Video Player Wrapper with a 16:9 Aspect Ratio -->
        <div class="video-wrapper relative w-full h-72 md:h-[600px] pb-[56.25%]" style="display:none;"></div>
    </div>







    <!-- title and date 
    <div class="flex justify-between text-white py-4 px-4 md:!px-48">
        <span class="text-xl font-semibold">Video Title</span>
        <span class="text-sm">Video Date</span>
    </div> 

     video description 
    <p class="py-4 px-4 md:!px-48 text-white">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut voluptas ipsa ipsum nesciunt voluptatibus! Similique repudiandae provident itaque explicabo possimus quis facilis dolores recusandae voluptate molestias, perspiciatis sed ab exercitationem!
    </p> --> 

</div>




<?php /*
<!-- episodes --> 
<div class="overflow-x-auto no-scrollbar whitespace-nowrap mt-6">
    <!-- Single Episode Item -->
    <div class="inline-block w-1/4 md:w-1/6 lg:w-1/8 px-2">
        <img src="<?php echo plugin_dir_url(__FILE__) . '../../assets/red.png';?>" alt="Episode Thumbnail" class="w-full h-32 object-cover mb-2">
        <h3 class="text-sm">Episode Title</h3>
    </div> 

    <!-- Single Episode Item -->
    <div class="inline-block w-1/4 md:w-1/6 lg:w-1/8 px-2">
        <img src="<?php echo plugin_dir_url(__FILE__) . '../../assets/red.png';?>" alt="Episode Thumbnail" class="w-full h-32 object-cover mb-2">
        <h3 class="text-sm">Episode Title</h3>
    </div>

    <!-- Single Episode Item -->
    <div class="inline-block w-1/4 md:w-1/6 lg:w-1/8 px-2">
        <img src="<?php echo plugin_dir_url(__FILE__) . '../../assets/red.png';?>" alt="Episode Thumbnail" class="w-full h-32 object-cover mb-2">
        <h3 class="text-sm">Episode Title</h3>
    </div>

    <!-- Single Episode Item -->
    <div class="inline-block w-1/4 md:w-1/6 lg:w-1/8 px-2">
        <img src="<?php echo plugin_dir_url(__FILE__) . '../../assets/red.png';?>" alt="Episode Thumbnail" class="w-full h-32 object-cover mb-2">
        <h3 class="text-sm">Episode Title</h3>
    </div>

    <!-- Single Episode Item -->
    <div class="inline-block w-1/4 md:w-1/6 lg:w-1/8 px-2">
        <img src="<?php echo plugin_dir_url(__FILE__) . '../../assets/red.png';?>" alt="Episode Thumbnail" class="w-full h-32 object-cover mb-2">
        <h3 class="text-sm">Episode Title</h3>
    </div>

    <!-- Single Episode Item -->
    <div class="inline-block w-1/4 md:w-1/6 lg:w-1/8 px-2">
        <img src="<?php echo plugin_dir_url(__FILE__) . '../../assets/red.png';?>" alt="Episode Thumbnail" class="w-full h-32 object-cover mb-2">
        <h3 class="text-sm">Episode Title</h3>
    </div>
    
</div>*/
?>


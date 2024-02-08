<div class="tp-featured-videos p-4">

    <div class="flex flex-col md:flex-row">

        <!-- main featured video --> 
        <div class="tp-featured-videos video-container relative flex-grow md:w-2/3 md:h-full py-4 md:py-0 md:mb-0 border-black border-b-2 md:border-none">
            <!-- Thumbnail Image with Play Button -->
            <div class="video-thumbnail relative group" data-youtube-id="<?php echo $mainVideoData['id']; ?>">
                <img src="<?php echo esc_url($mainVideoData['thumbnail']);?>" alt="Video Thumbnail" class="w-full md:max-h-[500px] object-cover">

                <!-- Overlay div with gradient effect for bottom half -->
                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-neutral-950 opacity-80 hover:bg-neutral-950 cursor-pointer"></div>

                <!-- Container for Play button and title -->
                <div class="absolute -translate-x-1/2 -translate-y-1/2 top-auto bottom-4 left-4 transform-none flex items-center opacity-80 cursor-pointer">
                    <!-- Play button overlay -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" class="w-14 h-auto group-hover:bg-[#BF0000] bg-black rounded-full">
                        <!-- Triangle -->
                        <polygon class="fill-current text-white" points="9.33 6.69 9.33 19.39 19.3 13.04 9.33 6.69"/>
                        <!-- Circle -->
                        <circle class="fill-transparent stroke-current text-white" cx="13" cy="13" r="12" stroke-width="4"/>
                    </svg>

                    <!-- Video Title -->
                    <div class="flex flex-col z-30 p-2">
                        <span class="tp-video-title text-white font-bold text-lg md:text-xl uppercase">Watch</span>
                        <span class="tp-video-title ml-2 text-white font-bold text-xl md:text-3xl"><?php echo $mainVideoData['title']; ?></span>
                    </div>
                </div>
                
            </div>

            <!-- Video Player Wrapper with a 16:9 Aspect Ratio -->
            <div class="video-wrapper relative w-full h-72 md:h-[500px] pb-[56.25%]" style="display:none;"></div>
            
        </div>

        <!-- other featured videos -->
        <?php if (!empty($otherVideoData)) : ?>
            <div class="space-y-4 md:w-1/3 mx-auto">

                <?php for ($i = 0; $i < 2; $i++): ?>
                    
                    <a href="<?php echo esc_url($pageLinkURL); ?>" title="<?php echo $otherVideoData[$i]['title'] ?>">
                    
                        <div class="md:w-4/5 py-4 md:py-0 mx-auto border-black border-b-2 md:border-none">
                            <div class="video-thumbnail relative group" data-youtube-id="<?php echo $otherVideoData[$i]['id'] ?>">
                                <img src="<?php echo esc_url($otherVideoData[$i]['thumbnail']);?>" alt="Video Thumbnail" class="w-full md:!h-[180px] object-cover">

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
                            <div class="!py-2 md:!py-0">
                                <div class="tp-video-title !py-2 text-lg md:text-xl font-semibold"><?php echo $otherVideoData[$i]['title']; ?></div>
                            </div>
                        </div>
                    
                    </a>
                    
                <?php endfor; ?>
                
            </div>
        <?php endif; ?>
    </div>
</div>


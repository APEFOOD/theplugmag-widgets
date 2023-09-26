<div class="tp-top-stories flex flex-col lg:flex-row lg:mx-6 mt-2 h-auto">
    <!-- featured story --> 
    <div class="tp-featured-story w-full lg:w-1/2 mb-6 lg:mb-0 relative h-screen">
        <div class="bg-center bg-cover h-screen lg:h-full absolute top-0 left-0 w-full" style="background-image: url('<?php echo plugin_dir_url(__FILE__) . '../../assets/cover-image.jpeg';?>');"></div>
        <!-- Overlay div -->
        <div class="absolute inset-0 bg-gray-800 opacity-30"></div>
        
        <div class="tp-story-text p-4 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-white">
            <span class="tp-story-date block mb-2 text-2xl">Date</span>
            <h2 class="tp-story-title mb-2 text-white text-3xl font-bold">Featured Story Title</h2>
            <p class="tp-story-meta text-2xl">Meta Information</p>
        </div>
    </div>
    
    <!-- stories grid --> 
    <div class="tp-stories-grid flex flex-wrap w-full px-4 md:mx-2 lg:w-1/2 lg:overflow-y-scroll" id="storiesGrid">

        <!-- left column --> 
        <div class="w-full md:flex-1">
            <div class="tp-story mx-1 flex flex-col md:block my-1 md:my-0 max-md:border-b max-md:border-black">
                <div class="flex md:block">
                    <img src="<?php echo plugin_dir_url(__FILE__) . '../../assets/red.png';?>" class="w-[103px] !h-[103px] md:!w-4/5 md:!h-auto md:mx-auto object-cover" alt="Story">
                    <div class="flex-1 md:w-4/5 max-md:p-4 md:mx-auto">
                        <p class="pb-2">tag</p>
                        <h3 class="tp-story-title mt-2">Very Verbose Story Title 1</h3>
                        <p class="">byline</p>
                        <p>date</p>
                    </div>   
                </div>
            </div>
            
            <div class="tp-story mx-1 flex flex-col md:block my-1 md:my-0 max-md:border-b max-md:border-black">
                <div class="flex md:block">
                    <img src="<?php echo plugin_dir_url(__FILE__) . '../../assets/red.png';?>" class="w-[103px] !h-[103px] md:!w-4/5 md:!h-[320px] md:mx-auto object-cover" alt="Story">
                    <div class="flex-1 md:w-4/5 max-md:p-4 md:mx-auto">
                        <p class="pb-2">tag</p>
                        <h3 class="tp-story-title mt-2">Very Verbose Story Title 3</h3>
                        <p class="">byline</p>
                        <p>date</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- right column --> 
        <div class="w-full md:flex-1">
            <div class="tp-story mx-1 flex flex-col md:block my-1 md:my-0 max-md:border-b max-md:border-black">
                <div class="flex md:block">
                    <img src="<?php echo plugin_dir_url(__FILE__) . '../../assets/red.png';?>" class="w-[103px] !h-[103px] md:!w-4/5 md:!h-[320px] md:mx-auto object-cover" alt="Story">
                    <div class="flex-1 md:w-4/5 max-md:p-4 md:mx-auto">
                        <p class="pb-2">tag</p>
                        <h3 class="tp-story-title mt-2">Very Verbose Story Title 2</h3>
                        <p class="">byline</p>
                        <p>date</p>
                    </div>
                </div>
            </div>
            
            <div class="tp-story mx-1 flex flex-col md:block my-1 md:my-0 max-md:border-b max-md:border-black">
                <div class="flex md:block">
                    <img src="<?php echo plugin_dir_url(__FILE__) . '../../assets/red.png';?>" class="w-[103px] !h-[103px] md:!w-4/5 md:!h-auto md:mx-auto object-cover" alt="Story">
                    <div class="flex-1 md:w-4/5 max-md:p-4 md:mx-auto">
                        <p class="pb-2">tag</p>
                        <h3 class="tp-story-title mt-2">Very Verbose Story Title 4</h3>
                        <p class="">byline</p>
                        <p>date</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php /*<div class="tp-stories-grid flex w-full px-4 md:mx-2 lg:w-1/2 lg:overflow-y-scroll" id="storiesGrid">
        
        <!-- left column --> 
        <div class="flex-1">
            <div class="tp-story mx-1">
                <img src="<?php echo plugin_dir_url(__FILE__) . '../../assets/red.png';?>" class="w-full md:!w-4/5 md:!h-auto md:mx-auto object-cover" alt="Story">
                <div class="md:w-4/5 md:mx-auto">
                    <p class="pb-2">tag</p>
                    <h3 class="tp-story-title mt-2">Very Verbose Story Title 1</h3>
                    <p class="">byline</p>
                    <p>date</p>
                </div>   
            </div>
            <div class="tp-story mx-1">
                <img src="<?php echo plugin_dir_url(__FILE__) . '../../assets/red.png';?>" class="!w-full md:!w-4/5 md:!h-[320px] md:mx-auto object-cover" alt="Story">
                <div class="md:w-4/5 md:mx-auto">
                    <p class="pb-2">tag</p>
                    <h3 class="tp-story-title mt-2">Very Verbose Story Title 3</h3>
                    <p class="">byline</p>
                    <p>date</p>
                </div>
            </div>
        </div>

        <!-- right column --> 
        <div class="flex-1">
            <div class="tp-story mx-1">
                <img src="<?php echo plugin_dir_url(__FILE__) . '../../assets/red.png';?>" class="!w-full md:!w-4/5 md:!h-[320px] md:mx-auto object-cover" alt="Story">
                <div class="md:w-4/5 md:mx-auto">
                    <p class="pb-2">tag</p>
                    <h3 class="tp-story-title mt-2">Very Verbose Story Title 2</h3>
                    <p class="">byline</p>
                    <p>date</p>
                </div>
            </div>
            <div class="tp-story mx-1">
                <img src="<?php echo plugin_dir_url(__FILE__) . '../../assets/red.png';?>" class="!w-full md:!w-4/5 md:!h-auto md:mx-auto object-cover" alt="Story">
                <div class="md:w-4/5 md:mx-auto">
                    <p class="pb-2">tag</p>
                    <h3 class="tp-story-title mt-2">Very Verbose Story Title 4</h3>
                    <p class="">byline</p>
                    <p>date</p>
                </div>
            </div>
        </div>

    </div>*/?>

</div>

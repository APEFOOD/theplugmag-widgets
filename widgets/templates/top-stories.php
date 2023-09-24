<div class="tp-top-stories flex flex-col lg:flex-row lg:mx-6 mt-2 h-auto">
    <!-- featured story --> 
    <div class="tp-featured-story w-full lg:w-1/2 mb-6 lg:mb-0 relative h-screen">
        <div class="bg-center bg-cover h-full absolute top-0 left-0 w-full" style="background-image: url('<?php echo plugin_dir_url(__FILE__) . '../../assets/cover-image.jpeg';?>');"></div>
        <div class="tp-story-text p-4 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-white">
            <span class="tp-story-date block mb-2">Date</span>
            <h2 class="tp-story-title mb-2 text-white">Featured Story Title</h2>
            <p class="tp-story-meta">Meta Information</p>
        </div>
    </div>


    <div class="tp-stories-grid grid grid-cols-2 gap-4 w-full px-4 mx-1 lg:w-1/2 lg:overflow-y-scroll" id="storiesGrid">
        <div class="tp-story">
            <img src="<?php echo plugin_dir_url(__FILE__) . '../../assets/red.png';?>" class="w-full mx-auto h-48 lg:h-96" alt="Story">
            <p class="pb-2">tag</p>
            <h3 class="tp-story-title mt-2">Very Verbose <br />Story Title</h3>
            <p class="">byline</p>
            <p>date</p>
        </div>
        <div class="tp-story">
            <img src="<?php echo plugin_dir_url(__FILE__) . '../../assets/red.png';?>" class="w-full mx-auto h-48 lg:h-96" alt="Story">
            <p class="pb-2">tag</p>
            <h3 class="tp-story-title mt-2">Very Verbose <br />Story Title</h3>
            <p class="">byline</p>
            <p>date</p>
        </div>
        <div class="tp-story">
            <img src="<?php echo plugin_dir_url(__FILE__) . '../../assets/red.png';?>" class="w-full mx-auto h-48 lg:h-96" alt="Story">
            <p class="pb-2">tag</p>
            <h3 class="tp-story-title mt-2">Very Verbose <br />Story Title</h3>
            <p class="">byline</p>
            <p>date</p>
        </div>
        <div class="tp-story">
            <img src="<?php echo plugin_dir_url(__FILE__) . '../../assets/red.png';?>" class="w-full mx-auto h-48 lg:h-96" alt="Story">
            <p class="pb-2">tag</p>
            <h3 class="tp-story-title mt-2">Very Verbose <br />Story Title</h3>
            <p class="">byline</p>
            <p>date</p>
        </div>
    </div>

</div>

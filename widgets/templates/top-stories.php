<div class="tp-top-stories flex flex-col lg:flex-row lg:mx-6 mt-2 h-auto">
    <!-- featured story --> 
    <div class="tp-featured-story w-full lg:w-1/2 mb-6 lg:mb-0 relative h-screen lg:!h-[600px]">
        <a href="<?php echo esc_url($featuredStoryData['link']); ?>" class="block h-full">
            <div class="bg-center bg-cover h-screen lg:h-full absolute top-0 left-0 w-full" style="background-image: url('<?php echo esc_url($featuredStoryData['thumbnail']);?>');"></div>
            <!-- Overlay div -->
            <div class="absolute inset-0 bg-gray-800 opacity-30"></div>
        
            <div class="tp-story-text pb-8 absolute bottom-0 left-1/2 transform -translate-x-1/2 text-center text-white">
                <p class="tp-story-meta text-lg uppercase"><?php echo esc_html($featuredStoryData['tag']); ?></p>
                <h2 class="tp-story-title mb-2 text-white text-4xl font-bold"><?php echo esc_html($featuredStoryData['title']); ?></h2>
                <p class="tp-story-meta text-lg uppercase">BY <?php echo esc_html($featuredStoryData['author']); ?></p>
                <p class="tp-story-meta text-lg uppercase"><?php echo esc_html($featuredStoryData['date']); ?></p>
            </div>
        </a>
    </div>
    
    <!-- stories grid --> 
    <div class="tp-stories-grid flex flex-wrap w-full px-4 md:mx-2 lg:w-1/2 lg:overflow-y-scroll lg:!h-[600px]" id="storiesGrid">
        
        <!-- left column -->
        <div class="w-full md:flex-1">
            <?php for ($i = 0; $i < 2; $i++) : ?>
                <div class="tp-story mx-1 flex flex-col md:block md:my-0 max-md:border-b max-md:border-black max-md:py-2">
                    <a href="<?php echo esc_url($mixedArray[$i]['link']); ?>" class="block h-full">
                        <!-- Thumbnail -->
                        <img src="<?php echo esc_url($mixedArray[$i]['thumbnail']); ?>" class="w-full h-auto md:object-cover" alt="Story">

                        <!-- Text Container -->
                        <div class="p-4">
                            <p class="my-1 uppercase text-sm font-semibold"><?php echo esc_html($mixedArray[$i]['tag']); ?></p>
                            <h3 class="tp-story-title font-bold text-xl mb-2"><?php echo esc_html($mixedArray[$i]['title']); ?></h3>
                            <p class="uppercase font-semibold text-xs">BY <?php echo esc_html($mixedArray[$i]['author']); ?></p>
                            <p class="uppercase text-xs"><?php echo esc_html($mixedArray[$i]['date']); ?></p>
                        </div>
                    </a>
                </div>

            <?php endfor; ?>
        </div>

        <!-- right column -->
        <div class="w-full md:flex-1">
            <?php for ($i = 2; $i < 4; $i++) : ?>
               <div class="tp-story mx-1 flex flex-col md:block md:my-0 max-md:border-b max-md:border-black max-md:py-2">
                    <a href="<?php echo esc_url($mixedArray[$i]['link']); ?>" class="block h-full">
                        <!-- Thumbnail -->
                        <img src="<?php echo esc_url($mixedArray[$i]['thumbnail']); ?>" class="w-full h-auto md:object-cover" alt="Story">

                        <!-- Text Container -->
                        <div class="p-4">
                            <p class="my-1 uppercase text-sm font-semibold"><?php echo esc_html($mixedArray[$i]['tag']); ?></p>
                            <h3 class="tp-story-title font-bold text-xl mb-2"><?php echo esc_html($mixedArray[$i]['title']); ?></h3>
                            <p class="uppercase font-semibold text-xs">BY <?php echo esc_html($mixedArray[$i]['author']); ?></p>
                            <p class="uppercase text-xs"><?php echo esc_html($mixedArray[$i]['date']); ?></p>
                        </div>
                    </a>
                </div> 
            <?php endfor; ?>
        </div>
    </div>

</div>

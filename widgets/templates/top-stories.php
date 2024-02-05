<div class="tp-top-stories flex flex-col lg:flex-row lg:px-2 h-auto">
    <!-- featured story --> 
    <div class="tp-featured-story w-full lg:w-1/2 mb-6 lg:mb-0 relative h-screen lg:!h-[650px]">
        <a href="<?php echo esc_url($featuredStoryData['link']); ?>" class="block h-full">
            <div class="bg-center bg-cover h-screen lg:h-full absolute top-0 left-0 w-full" style="background-image: url('<?php echo esc_url($featuredStoryData['thumbnail']);?>');"></div>
            
            <!-- Overlay div with gradient effect for bottom half -->
            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-neutral-950 opacity-80"></div>
        
            <div class="tp-story-text pb-8 absolute bottom-4 text-center text-white w-full lg:w-4/5 lg:left-1/2 lg:transform lg:-translate-x-1/2">
                <p class="tp-story-meta text-lg uppercase"><?php echo esc_html($featuredStoryData['category']); ?></p>
                <h2 class="tp-story-title mb-2 text-white text-3xl font-bold"><?php echo esc_html($featuredStoryData['title']); ?></h2>
                <p class="tp-story-meta text-lg uppercase">BY <?php echo esc_html($featuredStoryData['author']); ?></p>
                <p class="tp-story-meta text-lg uppercase"><?php echo esc_html($featuredStoryData['date']); ?></p>
            </div>
        </a>
    </div>
    
    <!-- stories grid --> 
    <div class="tp-stories-grid flex flex-wrap w-full px-4 md:mx-2 lg:w-1/2 lg:overflow-y-scroll lg:!h-[650px]" id="storiesGrid">
        
        <!-- left column -->
        <div class="w-full md:flex-1">
            <?php for ($i = 0; $i < 2; $i++) : ?>
                <div class="tp-story mx-1 flex flex-col md:block md:my-0 max-md:border-b max-md:border-black max-md:py-2">
                    <a href="<?php echo esc_url($mixedArray[$i]['link']); ?>" class="block h-full">
                        <!-- Thumbnail -->
                        <img src="<?php echo esc_url($mixedArray[$i]['thumbnail']); ?>" class="w-full h-auto md:object-cover" alt="Story">

                        <!-- Text Container -->
                        <div class="pt-2 pb-4">
                            <p class="tp-story-meta my-1 uppercase text-base font-bold"><?php echo esc_html($mixedArray[$i]['category']); ?></p>
                            <h3 class="tp-story-title font-bold text-xl mb-2"><?php echo esc_html($mixedArray[$i]['title']); ?></h3>
                            <p class="tp-story-meta uppercase font-bold text-base">BY <?php echo esc_html($mixedArray[$i]['author']); ?></p>
                            <p class="tp-story-meta uppercase text-sm font-semibold"><?php echo esc_html($mixedArray[$i]['date']); ?></p>
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
                        <div class="pt-2 pb-4">
                            <p class="tp-story-meta my-1 uppercase text-base font-bold"><?php echo esc_html($mixedArray[$i]['category']); ?></p>
                            <h3 class="tp-story-title font-bold text-xl mb-2"><?php echo esc_html($mixedArray[$i]['title']); ?></h3>
                            <p class="tp-story-meta uppercase font-bold text-base">BY <?php echo esc_html($mixedArray[$i]['author']); ?></p>
                            <p class="tp-story-meta uppercase text-sm font-semibold"><?php echo esc_html($mixedArray[$i]['date']); ?></p>
                        </div>
                    </a>
                </div> 
            <?php endfor; ?>
        </div>
    </div>

</div>

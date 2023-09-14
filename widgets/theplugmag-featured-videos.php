<?php

class Theplugmag_Featured_Videos extends \Elementor\Widget_base {

    public function get_name()
    {
        return 'theplugmag_featured_videos';
    }

    public function get_categories() {
        return ['theplugmag'];
    }

    public function get_title()
    {
        return 'Theplugmag Featured Videos';
    }

    protected function _register_controls()
    {
        // Add widget controls here 
    }

    protected function render()
    {
        echo '<div id="theplugmag-header-root" class="bg-blue-900 text-white text-center">Featured Videos</div>';
    }
}

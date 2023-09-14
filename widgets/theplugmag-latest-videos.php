<?php

class Theplugmag_Latest_Videos extends \Elementor\Widget_base {

    public function get_name()
    {
        return 'theplugmag_latest_videos';
    }

    public function get_categories() {
        return ['theplugmag'];
    }

    public function get_title()
    {
        return 'Theplugmag Latest Videos';
    }

    protected function _register_controls()
    {
        // Add widget controls here 
    }

    protected function render()
    {
        echo '<div id="theplugmag-header-root" class="bg-blue-900 text-white text-center">Latest Videos</div>';
    }
}

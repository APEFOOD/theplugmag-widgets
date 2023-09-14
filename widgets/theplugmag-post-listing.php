<?php

class Theplugmag_Post_Listing extends \Elementor\Widget_base
{

    public function get_name()
    {
        return 'theplugmag_post_listing';
    }

    public function get_categories() {
        return ['theplugmag'];
    }

    public function get_title()
    {
        return 'Theplugmag Post Listing';
    }

    protected function _register_controls()
    {
        // Add widget controls here 
    }

    protected function render()
    {
        echo '<div id="theplugmag-header-root" class="bg-blue-900 text-white text-center">Post Listing</div>';
    }
}

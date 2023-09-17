<?php

class TP_Latest_Posts_Listing extends \Elementor\Widget_base
{

    public function get_name()
    {
        return 'tp_latest_posts_listing';
    }

    public function get_categories() {
        return ['theplugmag'];
    }

    public function get_title()
    {
        return 'TP Latest Posts Listing';
    }

    public function get_icon() {
        return 'eicon-post-list'; 
    } 

    protected function _register_controls()
    {
        // Add widget controls here 
    }

    protected function render()
    {
        echo '<div id="theplugmag-header-root" class="bg-blue-900 text-white text-center">Latest Posts</div>';
    }
}

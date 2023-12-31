<?php

class TP_Featured_Videos extends \Elementor\Widget_base {

    public function get_name()
    {
        return 'tp_featured_videos';
    }

    public function get_categories() {
        return ['theplugmag'];
    }

    public function get_title()
    {
        return 'TP Featured Videos';
    }

    public function get_icon() {
        return 'eicon-video-playlist'; 
    } 

    protected function _register_controls()
    {
        // Add widget controls here 
    }

    protected function render()
    {
        require_once('templates/featured-videos.php');
    }
}

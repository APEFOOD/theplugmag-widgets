<?php

class Theplugmag_Video_Playlist extends \Elementor\Widget_base
{

    public function get_name()
    {
        return 'theplugmag_video_playlist';
    }

    public function get_categories() {
        return ['theplugmag'];
    }

    public function get_title()
    {
        return 'Theplugmag Video Playlist';
    }

    protected function _register_controls()
    {
        // Add widget controls here 
    }

    protected function render()
    {
        echo '<div id="theplugmag-header-root" class="bg-blue-900 text-white text-center">Video Playlist</div>';
    }
}

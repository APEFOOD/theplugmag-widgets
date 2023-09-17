<?php

class TP_Top_Stories extends \Elementor\Widget_base
{

    public function get_name()
    {
        return 'tp_top_stories';
    }

    public function get_categories() {
        return ['theplugmag'];
    }

    public function get_title()
    {
        return 'TP Top Stories';
    }

    public function get_icon() {
        return 'eicon-parallax'; 
    } 

    protected function _register_controls()
    {
        // Add widget controls here 
    }

    protected function render()
    {
        echo '<div id="theplugmag-header-root" class="bg-blue-900 text-white text-center">Top Stories</div>';
    }
}

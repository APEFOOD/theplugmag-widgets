<?php

class Theplugmag_Home_Loop extends \Elementor\Widget_base {

    public function get_name()
    {
        return 'theplugmag_home_loop';
    }

    public function get_categories() {
        return ['theplugmag'];
    }

    public function get_title()
    {
        return 'Theplugmag Home Loop';
    }

    protected function _register_controls()
    {
        // Add widget controls here 
    }

    protected function render()
    {
        echo '<div id="theplugmag-header-root" class="bg-blue-900 text-white text-center">Home Loop</div>';
    }
}

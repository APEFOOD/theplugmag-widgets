<?php

class Theplugmag_Footer extends \Elementor\Widget_base {

    public function get_name()
    {
        return 'theplugmag_footer';
    }

    public function get_categories() {
        return ['theplugmag'];
    }

    public function get_title()
    {
        return 'Theplugmag Footer';
    }

    protected function _register_controls()
    {
        // Add widget controls here 
    }

    protected function render()
    {
        echo '<div id="theplugmag-header-root" class="bg-blue-900 text-white text-center">Footer</div>';
    }
}

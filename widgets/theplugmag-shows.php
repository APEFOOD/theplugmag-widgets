<?php

class Theplugmag_Shows extends \Elementor\Widget_base
{

    public function get_name()
    {
        return 'theplugmag_Shows';
    }

    public function get_categories() {
        return ['theplugmag'];
    }

    public function get_title()
    {
        return 'Theplugmag Shows';
    }

    protected function _register_controls()
    {
        // Add widget controls here 
    }

    protected function render()
    {
        echo '<div id="theplugmag-header-root" class="bg-blue-900 text-white text-center">Shows</div>';
    }
}

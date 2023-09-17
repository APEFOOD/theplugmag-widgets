<?php

class TP_Footer extends \Elementor\Widget_base {

    public function get_name()
    {
        return 'tp_footer';
    }

    public function get_categories() {
        return ['theplugmag'];
    }

    public function get_title()
    {
        return 'TP Footer';
    }

    public function get_icon() {
        return 'eicon-footer'; 
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

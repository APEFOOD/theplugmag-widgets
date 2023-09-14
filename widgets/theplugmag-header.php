<?php

class Theplugmag_Header extends \Elementor\Widget_base {

    public function get_name()
    {
        return 'theplugmag_header';
    }

    public function get_categories() {
        return ['theplugmag'];
    }

    public function get_title()
    {
        return 'Theplugmag Header';
    }

    protected function _register_controls()
    {
        // Add widget controls here 
    }

    protected function render()
    {
        require_once("templates/header.php"); 
    }
}

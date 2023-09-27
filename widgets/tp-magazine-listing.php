<?php

class TP_Magazine_Listing extends \Elementor\Widget_base {

    public function get_name()
    {
        return 'tp_magazine_listing';
    }

    public function get_categories() {
        return ['theplugmag'];
    }

    public function get_title()
    {
        return 'TP Magazine Listing';
    }

    public function get_icon() {
        return 'eicon-posts-grid'; 
    } 

    protected function _register_controls()
    {
        // Add widget controls here 
    }

    protected function render()
    {
        require_once('templates/magazine-listing.php');
    }
}

<?php

class TP_Header extends \Elementor\Widget_base {

    public function get_name()
    {
        return 'tp_header';
    }

    public function get_categories() {
        return ['theplugmag'];
    }

    public function get_title()
    {
        return 'TP Header';
    }

    public function get_icon() {
        return 'eicon-header'; 
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

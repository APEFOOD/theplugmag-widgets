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
        // nav menus 
        $menus = get_terms('nav_menu', array('hide_empty' => false)); 

        $menu_options = ['' => '']; 

        foreach($menus as $menu) {
            $menu_options[$menu->slug] = $menu->name; 
        }

        $this->start_controls_section(
            'content_section', 
            [
                'label'     => __('Content', 'tp_header'), 
                'tab'       => \Elementor\Controls_Manager::TAB_CONTENT, 
            ]
        );

        $this->add_control(
            'selected_menu', 
            [
                'label'     => __('Select Menu', 'tp_header'), 
                'type'      => \Elementor\Controls_Manager::SELECT, 
                'default'   => '', 
                'options'   => $menu_options,
            ]
        );

        $this->add_control(
            'desktop_main_logo', 
            [
                'label'     => __('Desktop Main Logo', 'tp_header'), 
                'type'      => \Elementor\Controls_Manager::MEDIA, 
                'dynamic'   => [
                    'active' => true,
                ], 
            ]
        );

        $this->add_control(
            'desktop_secondary_logo', 
            [
                'label'     => __('Desktop Secondary Logo', 'tp_header'), 
                'type'      => \Elementor\Controls_Manager::MEDIA, 
                'dynamic'   => [
                    'active' => true,
                ], 
            ]
        );

        $this->add_control(
            'mobile_logo', 
            [
                'label'     => __('Mobile Logo', 'tp_header'), 
                'type'      => \Elementor\Controls_Manager::MEDIA, 
                'dynamic'   => [
                    'active' => true,
                ], 
            ]
        );

        $this->end_controls_section(); 

        // style section 
        $this->start_controls_section(
            'style_section', 
            [
                'label' => __('Style', 'tp_header'),
                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        // background colour for the main logo 
        $this->add_control(
            'main_logo_bg_color', 
            [
                'label'     => __('Main Logo Background Color', 'tp_header'), 
                'type'      => \Elementor\Controls_Manager::COLOR, 
                'selectors' => [
                    '{{WRAPPER}} .tp-main-logo' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        // typography control for menu links 
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(), 
            [
                'name'      => 'menu_typography', 
                'label'     => __('Menu Typography', 'tp_header'), 
                'selector'  => '{{WRAPPER}} nav.tp-main-menu a', 
            ]
        );

        // menu link color 
        $this->add_control(
            'menu_link_color', 
            [
                'label'     => __('Menu Link Color', 'tp_header'), 
                'type'      => \Elementor\Controls_Manager::COLOR, 
                'selectors' => [
                    '{{WRAPPER}} nav.tp-main-menu a' => 'color: {{VALUE}};',  
                ],
                'separator' => 'before',
            ]
        ); 

        $this->add_control(
            'menu_link_hover_color', 
            [
                'label'     => __('Menu Link Hover Color', 'tp_header'),
                'type'      => \Elementor\Controls_Manager::COLOR, 
                'selectors' => [
                    '{{WRAPPER}} .tp-main-menu .menu-item:hover > a' => 'color: {{VALUE}};',
                ],
                'separator' => 'none',
            ],
        );

        $this->add_control(
            'menu_item_bg_color',
            [
                'label'     => __('Menu Item Background Color', 'tp_header'),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .tp-main-menu .menu-item' => 'background-color: {{VALUE}};',
                ],
                'separator' => 'before',
            ]
        );
        
        $this->add_control(
            'menu_item_hover_bg_color',
            [
                'label'     => __('Menu Item Hover Background Color', 'tp_header'),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .tp-main-menu .menu-item:hover' => 'background-color: {{VALUE}};',
                ],
                'separator' => 'none',
            ]
        );        

        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display(); 

        // extracting data 
        $selected_menu = $settings['selected_menu'];
        $desktop_main_logo = $settings['desktop_main_logo']['url']; 
        $desktop_secondary_logo = $settings['desktop_secondary_logo']['url'];
        $mobile_logo = $settings['mobile_logo']['url']; 

        require_once("templates/header.php"); 
    }
}

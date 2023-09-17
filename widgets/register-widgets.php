<?php

function register_custom_category($elements_manager) {
    
    $elements_manager->add_category(
        'theplugmag',
        [
            'title' => __('The Plug', 'text-domain'),
        ]
    );
}

add_action('elementor/elements/categories_registered', 'register_custom_category');

function register_custom_widgets() {

    require_once('tp-header.php');
    require_once('tp-featured-videos.php');
    require_once('tp-footer.php');
    require_once('tp-home-loop.php');
    require_once('tp-cinema.php');
    require_once('tp-magazine-listing.php');
    require_once('tp-latest-posts-listing.php');
    require_once('tp-shows.php');
    require_once('tp-top-stories.php');

    \Elementor\Plugin::instance()->widgets_manager->register(new TP_Cinema());
    \Elementor\Plugin::instance()->widgets_manager->register(new TP_Header());
    \Elementor\Plugin::instance()->widgets_manager->register(new TP_Footer());
    \Elementor\Plugin::instance()->widgets_manager->register(new TP_Featured_Videos());
    \Elementor\Plugin::instance()->widgets_manager->register(new TP_Home_Loop());
    \Elementor\Plugin::instance()->widgets_manager->register(new TP_Magazine_Listing());
    \Elementor\Plugin::instance()->widgets_manager->register(new TP_Latest_Posts_Listing());
    \Elementor\Plugin::instance()->widgets_manager->register(new TP_Shows());
    \Elementor\Plugin::instance()->widgets_manager->register(new TP_Top_Stories());
}

add_action('elementor/widgets/register', 'register_custom_widgets');

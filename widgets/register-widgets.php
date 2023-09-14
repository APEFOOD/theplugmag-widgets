<?php

function register_custom_category($elements_manager) {
    
    $elements_manager->add_category(
        'theplugmag',
        [
            'title' => __('The Plug', 'text-domain'),
            'icon' => 'fa fa-plug',
        ]
    );
}

add_action('elementor/elements/categories_registered', 'register_custom_category');

function register_custom_widgets() {

    require_once('theplugmag-header.php');
    require_once('theplugmag-featured-videos.php');
    require_once('theplugmag-features-slider.php');
    require_once('theplugmag-footer.php');
    require_once('theplugmag-home-loop.php');
    require_once('theplugmag-latest-videos.php');
    require_once('theplugmag-magazine-listing.php');
    require_once('theplugmag-post-listing.php');
    require_once('theplugmag-shows.php');
    require_once('theplugmag-top-stories.php');
    require_once('theplugmag-video-playlist.php');

    \Elementor\Plugin::instance()->widgets_manager->register(new Theplugmag_Header());
    \Elementor\Plugin::instance()->widgets_manager->register(new Theplugmag_Footer());
    \Elementor\Plugin::instance()->widgets_manager->register(new Theplugmag_Featured_Videos());
    \Elementor\Plugin::instance()->widgets_manager->register(new Theplugmag_Features_Slider());
    \Elementor\Plugin::instance()->widgets_manager->register(new Theplugmag_Home_Loop());
    \Elementor\Plugin::instance()->widgets_manager->register(new Theplugmag_Latest_Videos());
    \Elementor\Plugin::instance()->widgets_manager->register(new Theplugmag_Magazine_Listing());
    \Elementor\Plugin::instance()->widgets_manager->register(new Theplugmag_Post_Listing());
    \Elementor\Plugin::instance()->widgets_manager->register(new Theplugmag_Shows());
    \Elementor\Plugin::instance()->widgets_manager->register(new Theplugmag_Top_Stories());
    \Elementor\Plugin::instance()->widgets_manager->register(new Theplugmag_Video_Playlist());
}

add_action('elementor/widgets/register', 'register_custom_widgets');

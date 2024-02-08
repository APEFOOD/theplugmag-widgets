<?php

class TP_Featured_Videos extends \Elementor\Widget_base {

    public function get_name()
    {
        return 'tp_featured_videos';
    }

    public function get_categories() {
        return ['theplugmag'];
    }

    public function get_title()
    {
        return 'TP Featured Videos';
    }

    public function get_icon() {
        return 'eicon-video-playlist'; 
    } 

    protected function _register_controls()
    {
        $this->start_controls_section(
            'tp_featured_videos_query_section', 
            [
                'label' => 'Select Your Videos', 
            ],
        );
        
        // custom query control for selecting the main featured video 
        $this->add_control(
            'featured_video_query', 
            [
                'label'         => 'Main Featured Video', 
                'type'          => \Elementor\Controls_Manager::SELECT, 
                'label_block'   => true, 
                'options'       => $this->get_query_options(), 
            ],
        );
        
        // custom query control for selecting the two other featured video 
        $this->add_control(
            'other_featured_videos_query', 
            [
                'label'         => 'Other Featured Videos', 
                'type'          => \Elementor\Controls_Manager::SELECT2, 
                'multiple'      => true,
                'label_block'   => true, 
                'options'       => $this->get_query_options(), 
            ],
        );
        
        // control for selecting the page to link
        $this->add_control(
            'post_link', 
            [
                'label'         => 'Links to', 
                'type'          => \Elementor\Controls_Manager::SELECT, 
                'label_block'   => true, 
                'options'       => $this->get_page_options(), // Call function to get page options
            ],
        );
        
        
        $this->end_controls_section(); 
        
        $this->start_controls_section(
            'tp_featured_videos_settings_section', 
            [
                'label' => 'Other Settings', 
            ],

        );
        
        // Typography controls for the featured vidoes titles 
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name'      => 'featured_title_typography', 
                'label'     => 'Featured Video Titles', 
                'selector'  => '{{WRAPPER}} .tp-featured-videos .tp-video-title', 
            ], 
        );
        
        /* Typography controls for the featured videos metadata 
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(), 
            [
                'name'      => 'featured_metadata_typography', 
                'label'     => 'Featured Video Metadata', 
                'selector'  => '{{WRAPPER}} .tp-featured-videos .tp-video-meta',
            ],
        ); */
        
        $this->end_controls_section(); 
        
    }

    protected function render()
    {
        
        $settings = $this->get_settings(); 
        
        // Main featured video ID
        $mainVideoID = !empty($settings['featured_video_query']) ? $settings['featured_video_query'] : '';
        
        // Other video IDs 
        $otherVideoIDs = !empty($settings['other_featured_videos_query']) ? $settings['other_featured_videos_query'] : [];
        
        // Page to link to
        $pageLinkID = !empty($settings['post_link']) ? $settings['post_link'] : '';
        $pageLinkURL = get_permalink($pageLinkID);
        
        // main video data 
        if (!empty($mainVideoID)) {
            
            $mainVideoData = [
                'title'     => get_the_title($mainVideoID), 
                'thumbnail' => get_the_post_thumbnail_url($mainVideoID, 'full'), 
                'id'  => plugtv_get_youtube_video_id(get_post_meta($mainVideoID, 'youtube_id', true)),        // the youtube video ID  
            ]; 
            
        }
        
        $otherVideoData = [];
        
        // other video data 
        if (!empty($otherVideoIDs)) {
            
            foreach ($otherVideoIDs as $index => $postID) {
                
                if ($index < 2) {
                   $otherVideoData[$index] = [
                        'title'     => get_the_title($postID), 
                        'thumbnail' => get_the_post_thumbnail_url($postID, 'full'),
                        'id'        => plugtv_get_youtube_video_id(get_post_meta($postID, 'youtube_id', true)),      // the youtube video ID 
                   ]; 
                }
                
            }
        }
        
        require_once('templates/featured-videos.php');
    }
    
    protected function get_query_options() {
        
        $query = new \WP_Query([
            'post_type'         => 'plugtv_episodes', 
            'posts_per_page'    => -1,
        ]); 
        
        $options = []; 
        
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post(); 
                $options[get_the_ID()] = get_the_title(); 
            }
            wp_reset_postdata(); 
        }
        
        return $options; 
        
    }
    
    protected function get_page_options() {
        
        $pages = get_pages();
        $options = [];
        
        foreach ($pages as $page) {
            $options[$page->ID] = $page->post_title;
        }
        
        return $options;
        
    }
    
}

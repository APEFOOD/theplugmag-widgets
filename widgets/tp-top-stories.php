<?php

class TP_Top_Stories extends \Elementor\Widget_base
{

    public function get_name()
    {
        return 'tp_top_stories';
    }

    public function get_categories() {
        return ['theplugmag'];
    }

    public function get_title()
    {
        return 'TP Top Stories';
    }

    public function get_icon() {
        return 'eicon-parallax'; 
    } 

    protected function _register_controls() {
        
        $this->start_controls_section(
            'tp_top_stories_query_section', 
            [
                'label'     => 'Select Your Posts',
            ],
        );
        
        // custom query control for selecting the featured story 
        $this->add_control(
            'featured_story_query', 
            [
                'label'         => 'Featured Story', 
                'type'          => \Elementor\Controls_Manager::SELECT2, 
                'label_block'   => true, 
                'options'       => $this->get_query_options(), 
            ],
        );
        
        // custom query control for selecting other top stories 
        $this->add_control(
            'other_top_stories_query', 
            [
                'label'         => 'Other Top Stories (Maximum 4)', 
                'type'          => \Elementor\Controls_Manager::SELECT2, 
                'multiple'      => true, 
                'label_block'   => true,
                'options'       => $this->get_query_options(),
            ],
        );
        
        $this->end_controls_section();
        
        $this->start_controls_section(
            'tp_top_stories_section', 
            [
                'label' => 'Other Settings', 
            ],

        );
        
        // Typography controls for the featured story title 
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name'      => 'featured_title_typography', 
                'label'     => 'Featured Story Title', 
                'selector'  => '{{WRAPPER}} .tp-featured-story .tp-story-title', 
            ], 
        );
        
        // Typography controls for the featured story metadata (date, author, tag)
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(), 
            [
                'name'      => 'featured_metadata_typography', 
                'label'     => 'Featured Story Metadata', 
                'selector'  => '{{WRAPPER}} .tp-featured-story .tp-story-meta',
            ],
        );
        
        // Typography for the other top stories title
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(), 
            [
                'name'      => 'other_title_typography', 
                'label'     => 'Other Top Stories Titles', 
                'selector'  => '{{WRAPPER}} .tp-stories-grid .tp-story-title',    
            ],
        ); 
        
        // Typography for the other top stories metadata (date, author, tag)
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(), 
            [
                'name'      => 'other_metadata_typography', 
                'label'     => 'Other Top Stories Metadata', 
                'selector'  => '{{WRAPPER}} .tp-stories-grid .tp-story-meta',
            ],
        );
        
        $this->end_controls_section(); 
        
    }

    protected function render() {
        
        $placeholder = [
            'title'     => 'Placeholder Title', 
            'tag'       => 'Tag', 
            'author'    => 'Author', 
            'date'      => 'Date', 
            'link'      => '#',
            'thumbnail' => plugin_dir_url(__FILE__) . '../assets/400x600.svg', 
        ];
        
        $settings = $this->get_settings(); 
        
        
        // accessing the selected featured story ID 
        $featuredStoryID = !empty($settings['featured_story_query']) ? $settings['featured_story_query'] : '';
        
        // accessing the selected other top stories IDs 
        $otherTopStoriesIDs = !empty($settings['other_top_stories_query']) ? $settings['other_top_stories_query'] : [];
        
        // initialize a mixed array with placeholders 
        $mixedArray = array_fill(0, 4, $placeholder); 
        
        // replace placeholders with actual posts for other top stories 
        foreach ($otherTopStoriesIDs as $index => $postID) {
            if ($index < 4) {
                
                $mixedArray[$index] = [
                    'title'     => get_the_title($postID), 
                    'tag'       => strip_tags(get_the_tag_list('', ', ', '', $postID)),
                    'author'    => get_the_author_meta('display_name', get_post_field('post_author', $postID)),
                    'date'      => get_the_date('', $postID), 
                    'link'      => get_permalink($postID), 
                    'thumbnail' => get_the_post_thumbnail_url($postID, 'full'), 
                ];
                
            } else {
                
                break; 
                
            }
        }
        
        // replace placeholder with actual featured story 
        if (!empty($featuredStoryID)) {
            
            $featuredStoryData = [
                'title'     => get_the_title($featuredStoryID), 
                'tag'       => strip_tags(get_the_tag_list('', ', ', '', $featuredStoryID)),
                'author'    => get_the_author_meta('display_name', get_post_field('post_author', $featuredStoryID)),
                'date'      => get_the_date('', $featuredStoryID), 
                'link'      => get_permalink($featuredStoryID), 
                'thumbnail' => get_the_post_thumbnail_url($featuredStoryID, 'full'),  
            ];
            
        } else {
            
            $featuredStoryData = $placeholder; 
            
        }
                
        require_once('templates/top-stories.php');
    }
    
    protected function get_query_options() {
        
        $query = new \WP_Query([
            'post_type'         => 'post', 
            'posts_per_page'    => 20, // most recent 20 posts 
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
    
}

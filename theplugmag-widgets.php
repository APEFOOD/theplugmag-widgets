<?php

/**
 * Plugin Name: The Plug Mag Widgets 
 * Plugin URI: https://github.com/APEFOOD/
 * Description: Custom Elementor Widgets 
 * Version: 1.0.3
 * Author: devbykabelo
 * Author URI: https://devbykabelo.com
 * GitHub Plugin URI: https://github.com/APEFOOD/theplugmag-widgets
 */

// Include widget classes  
require_once('widgets/register-widgets.php');


add_action('elementor/widgets/register', 'register_custom_widgets');

function theplugmag_enqueue_scripts() {
    $js_files = glob(plugin_dir_path(__FILE__) . 'dist/assets/*.js');
    $css_files = glob(plugin_dir_path(__FILE__) . 'dist/assets/*.css');

    if (is_array($js_files) && !empty($js_files)) {
        foreach ($js_files as $js_file) {
            $js_file_url = plugins_url('dist/assets/' . basename($js_file), __FILE__);
            // Generate a unique handle based on file name 
            //$css_handle = 'theplugmag-script-' . sanitize_key(basename($js_file, '.js'));
            wp_enqueue_script('theplugmag-scripts', $js_file_url, array(), null, true);
        }
    }

    if (is_array($css_files) && !empty($css_files)) {
        foreach ($css_files as $css_file) {
            $css_file_url = plugins_url('dist/assets/' . basename($css_file), __FILE__);
            // Generate a unique handle based on file name 
            //$css_handle = 'theplugmag-s-' . sanitize_key(basename($css_file, '.css'));
            wp_enqueue_style('theplugmag-css', $css_file_url);
        }
    }

    // manual JS enqueue 
    //wp_enqueue_script('theplugmag-scripts', plugin_dir_url(__FILE__) . 'assets/main.js', array(), null, true);

}

add_action('elementor/frontend/after_enqueue_styles', 'theplugmag_enqueue_scripts');


// CPT: Shows 
function plugtv_register_show_cpt() {
    
    $labels = array(
        'name'               => 'Shows',
        'singular_name'      => 'Show',
        'add_new'            => 'Add New Show',
        'add_new_item'       => 'Add New Show',
        'edit_item'          => 'Edit Show',
        'new_item'           => 'New Show',
        'view_item'          => 'View Show',
        'view_items'         => 'View Shows',
        'search_items'       => 'Search Shows',
        'not_found'          => 'No shows found',
        'not_found_in_trash' => 'No shows found in Trash',
        'all_items'          => 'All Shows',
        'archives'           => 'Show Archives',
        'attributes'         => 'Show Attributes',
        'insert_into_item'   => 'Insert into show',
        'uploaded_to_this_item' => 'Uploaded to this show',
        'filter_items_list'  => 'Filter shows list',
        'items_list_navigation' => 'Shows list navigation',
        'items_list'         => 'Shows list',
    );
    
    $args = array(
        'public'        => true, 
        'label'         => 'Shows', 
        'has_archive'   => true, 
        'supports'      => array('title', 'editor', 'thumbnail', 'page-attributes'),
        'labels'        => $labels, 
   );

   register_post_type('plugtv_shows', $args);

}

add_action('init', 'plugtv_register_show_cpt');

// CPT: Episodes 
function plugtv_register_episode_cpt() {
    
    $labels = array(
        'name'               => 'Episodes',
        'singular_name'      => 'Episode',
        'add_new'            => 'Add New Episode',
        'add_new_item'       => 'Add New Episode',
        'edit_item'          => 'Edit Episode',
        'new_item'           => 'New Episode',
        'view_item'          => 'View Episode',
        'view_items'         => 'View Episodes',
        'search_items'       => 'Search Episodes',
        'not_found'          => 'No episodes found',
        'not_found_in_trash' => 'No episodes found in Trash',
        'all_items'          => 'All Episodes',
        'archives'           => 'Episode Archives',
        'attributes'         => 'Episode Attributes',
        'insert_into_item'   => 'Insert into episode',
        'uploaded_to_this_item' => 'Uploaded to this episode',
        'filter_items_list'  => 'Filter episodes list',
        'items_list_navigation' => 'Episodes list navigation',
        'items_list'         => 'Episodes list',
    );
    
    $args = array(
        'public'        => true, 
        'label'         => 'Episodes', 
        'has_archive'   => true,  
        'supports'      => array('title', 'editor', 'thumbnail', 'page-attributes'), 
        'labels'        => $labels,    
    );

    register_post_type('plugtv_episodes', $args);

}

add_action('init', 'plugtv_register_episode_cpt');


// Custom fields for episodes
function plugtv_add_episode_metaboxes() {
    add_meta_box(
        'plugtv_episode_meta', 
        'Episode Details', 
        'plugtv_episode_meta_callback', 
        'plugtv_episodes', 
        'side', 
        'default'
    );
}

function plugtv_episode_meta_callback($post) {
    // Nonce for verification
    wp_nonce_field(basename(__FILE__), 'plugtv_nonce');
    $stored_meta = get_post_meta($post->ID);

    echo '<label for="youtube_id">YouTube ID</label>';
    echo '<input type="text" name="youtube_id" value="' . esc_attr($stored_meta['youtube_id'][0]) . '">';
    
    // Add the custom field for the associated show's name
    echo '<label for="plugtv_episode_show_id">Select Show: </label>';
    echo '<select id="plugtv_episode_show_id" name="plugtv_episode_show_id">';
    echo '<option value="">-- Select a Show --</option>';
    
    // Get all the shows 
    $shows = get_posts(array(
        'post_type'     => 'plugtv_shows', 
        'numberposts'   => -1, 
    ));

    foreach($shows as $show) {
        $selected = get_post_meta($post->ID, 'plugtv_episode_show_id', true) == $show->ID ? 'selected' : ''; 
        echo '<option value="' . esc_attr($show->ID) . '" ' . $selected . '>' . esc_html($show->post_title) . '</option>';
    }
    
    echo '</select>';
    
    // Add more fields as needed...
}

add_action('add_meta_boxes', 'plugtv_add_episode_metaboxes');

// Save episode custom fields
function plugtv_save_episode_meta($post_id) {
    // Verify nonce
    if (!isset($_POST['plugtv_nonce']) || !wp_verify_nonce($_POST['plugtv_nonce'], basename(__FILE__))) {
        return $post_id;
    }

    $youtube_id = sanitize_text_field($_POST['youtube_id']);
    update_post_meta($post_id, 'youtube_id', $youtube_id);
    
    // Save the associated show ID
    $episode_show_id = isset($_POST['plugtv_episode_show_id']) ? sanitize_text_field($_POST['plugtv_episode_show_id']) : '';
    update_post_meta($post_id, 'plugtv_episode_show_id', $episode_show_id);
    
    // Repeat for additional fields...

    return $post_id;
}

add_action('save_post', 'plugtv_save_episode_meta');


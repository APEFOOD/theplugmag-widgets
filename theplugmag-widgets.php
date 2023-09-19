<?php

/**
 * Plugin Name: The Plug Mag Widgets 
 * Plugin URI: https://github.com/APEFOOD/
 * Description: Custom Elementor Widgets 
 * Version 1.0.2
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
            $css_handle = 'theplugmag-script-' . sanitize_key(basename($js_file, '.js'));
            wp_enqueue_script($handle, $js_file_url, [], null, true);
        }
    }

    if (is_array($css_files) && !empty($css_files)) {
        foreach ($css_files as $css_file) {
            $css_file_url = plugins_url('dist/assets/' . basename($css_file), __FILE__);
            // Generate a unique handle based on file name 
            //$css_handle = 'theplugmag-s-' . sanitize_key(basename($css_file, '.css'));
            wp_enqueue_style('theplugmag-header-css', $css_file_url);
        }
    }

}

add_action('wp_enqueue_scripts', 'theplugmag_enqueue_scripts');

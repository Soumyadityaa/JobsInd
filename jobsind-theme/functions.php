<?php
function jobsind_enqueue_assets() {
    // Enqueue theme stylesheet
    wp_enqueue_style('jobsind-main-style', get_stylesheet_uri());

    // Enqueue filtering JavaScript file
    wp_enqueue_script('jobsind-filter-script', get_template_directory_uri() . '/script.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'jobsind_enqueue_assets');
?>
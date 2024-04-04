<?php
// add scripts
function ig_add_scripts(){
    // Add Main CSS
    wp_enqueue_style('ig-main-style', plugins_url(). '/interactive-gallery/css/style.css');
    // Add Main JS
    wp_enqueue_script('ig-main-script', plugins_url(). '/interative-gallery/js/main.js');
}

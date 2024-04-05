<?php
// add scripts
// main prefix defined as iag
function iag_add_scripts(){
    // Add Main CSS
    wp_enqueue_style('iag-main-style', plugins_url(). '/interactive-gallery/css/style.css');
    // Add Main JS
    wp_enqueue_script('iag-main-script', plugins_url(). '/interative-gallery/js/main.js');
}

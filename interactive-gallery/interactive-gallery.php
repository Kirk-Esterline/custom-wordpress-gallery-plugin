<?php
/*
Plugin Name: Interactive Gallery
Plugin URI: https://esterenkodesign.com
Description: Display custom image descriptions when images are clicked on.
Version: 1.0.0
Author: Kirk Esterlnie
Author URI: https://esterenkodesign.com
*/

// Exit if accessed directly

if(!defined('ABSPATH')) {
    exit;
}

//Test functions to gain some comfort with PHP and how this works with WP

add_action('wp_body_open', 'tb_head');
add_action('wp_print_styles', 'tb_css');

function tb_head()
{
    echo '<h1 class="tb">This is a test site!</h1>';
}

function tb_css()
{
    echo '
        <style>
            h1.tb {
                color: #000;
                text-align: center;
                background: #fff;
            }
        </style>
    ';
}
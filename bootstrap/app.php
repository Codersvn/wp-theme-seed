<?php
require __DIR__ . '/../vendor/autoload.php';

global $wpdb;

define('NFWP_DB_TABLE_PREFIX', $wpdb->prefix);

/**
 * Enqueue scripts and stylesheet
 */

function theme_enqueue_style()
{
    wp_enqueue_style('template-style', get_stylesheet_directory_uri() . '/dist/app.css', false);
}

function theme_enqueue_scripts()
{
    wp_enqueue_script('template-scripts', get_stylesheet_directory_uri() . '/dist/scripts.js', 'jquery');
    wp_enqueue_script('template-browserify', get_stylesheet_directory_uri() . '/dist/app.js', 'template-scripts');
}

add_action('wp_enqueue_scripts', 'theme_enqueue_style');
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

/**
 * helpers
 */
function asset($path)
{
    return substr($path, 0, 1) == '/' ? get_stylesheet_directory_uri() . '/assets' . $path : get_stylesheet_directory_uri() . '/assets/' . $path;
}

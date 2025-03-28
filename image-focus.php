<?php
/*
Plugin Name: Image Focus
Plugin URI: https://github.com/lyfter/image-focus
Description: Image Focus is an image crop plugin where you can crop your images by focal point.
Version: 1.0.0
Author: Lyfter
Author URI: https://lyfter.nl/
*/

use ImageFocus\ImageFocus;

if (!defined('ABSPATH')) {
    exit;
} // Exit if accessed directly

// Define multiple necessary constants
define('IMAGEFOCUS_VERSION', '1.0.0');
define('IMAGEFOCUS_TEXTDOMAIN', 'image-focus');
define('IMAGEFOCUS_LANGUAGES',plugin_dir_path(__FILE__) . '/languages/');

define('IMAGEFOCUS_ASSETS', plugin_dir_url(__FILE__));
define('IMAGEFOCUS_RESOURCES', __DIR__ . '/resources/');

$autoload = plugin_dir_path(__FILE__) . '/vendor/autoload.php';

if (!class_exists(ImageFocus::class)) {
    if (is_readable($autoload)) {
        require_once $autoload;
    } else {
        wp_die('Please run "composer install" in plugin directory.');
    }
}

new ImageFocus();

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
define('IMAGEFOCUS_LANGUAGES', dirname(plugin_basename(__FILE__)) . '/languages/');

define('IMAGEFOCUS_ASSETS', plugin_dir_url(__FILE__));
define('IMAGEFOCUS_RESOURCES', __DIR__ . '/resources/');

// Use composer to autoload our classes
require_once __DIR__ . '/vendor/autoload.php';

// Initiate the field!
new ImageFocus();

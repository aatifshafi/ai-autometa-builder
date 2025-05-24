<?php
/*
Plugin Name: AI AutoMeta Builder
Plugin URI: https://github.com/aatifshafi/ai-autometa-builder
Description: Automatically generate meta titles and descriptions using OpenAI or Gemini.
Version: 1.0.0
Author: Atif Shafi
Author URI: 
Text Domain: ai-auto-meta
*/

if (!defined('ABSPATH')) exit; // Exit if accessed directly

define('AI_META_DIR', plugin_dir_path(__FILE__));
define('AI_META_URL', plugin_dir_url(__FILE__));

require_once AI_META_DIR . 'admin/settings-page.php';

// Activation Hook
register_activation_hook(__FILE__, function () {
    // Placeholder: Create options or setup default values
});

// Deactivation Hook
register_deactivation_hook(__FILE__, function () {
    // Placeholder: Cleanup tasks if needed
});

// Admin Menu
add_action('admin_menu', function () {
    add_menu_page(
        'AI Meta Builder',
        'AI Meta Builder',
        'manage_options',
        'ai-auto-meta',
        'ai_meta_render_settings_page',
        'dashicons-admin-generic',
        99
    );
});
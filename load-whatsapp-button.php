<?php
/**
 * Auto-load WhatsApp button on all pages
 * This file should be included in functions.php
 */

// Include the WhatsApp button component
require_once get_stylesheet_directory() . '/gcs-whatsapp-button.php';

// Auto-inject WhatsApp button in footer on all pages
add_action('wp_footer', 'gcs_auto_inject_whatsapp_button');

function gcs_auto_inject_whatsapp_button() {
    echo do_shortcode('[gcs_whatsapp_button]');
}

<?php
/**
 * =========================================================================
 * WHATSAPP FLOATING BUTTON - ALL-IN-ONE (REBUILT FROM SCRATCH)
 * =========================================================================
 *
 * INSTALLATION:
 * Copy this ENTIRE file content and paste at the end of functions.php
 *
 * =========================================================================
 */

function gcs_whatsapp_button_shortcode() {
    $phone = '40743212055'; // Mihaela's WhatsApp
    $message = 'Bună ziua! Aș dori să aflu mai multe despre serviciile de creditare.';
    $url = 'https://wa.me/' . $phone . '?text=' . urlencode($message);

    ob_start();
    ?>
    <a href="<?php echo esc_url($url); ?>"
       target="_blank"
       rel="noopener"
       class="gcs-wa-btn"
       aria-label="WhatsApp">
        <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="white" stroke-width="2">
            <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/>
        </svg>
        <span class="gcs-wa-tooltip">Scrie-ne pe WhatsApp</span>
    </a>

    <style>
    .gcs-wa-btn,
    a.gcs-wa-btn {
        position: fixed !important;
        bottom: 24px !important;
        right: 24px !important;
        width: 56px !important;
        height: 56px !important;
        background: #25D366 !important;
        border-radius: 50% !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1), 0 4px 6px -2px rgba(0,0,0,0.05) !important;
        z-index: 9999 !important;
        text-decoration: none !important;
        border: none !important;
        cursor: pointer !important;
        transition: all 0.15s ease !important;
    }

    .gcs-wa-btn:hover,
    a.gcs-wa-btn:hover {
        background: #20BA5A !important;
        transform: scale(1.1) !important;
    }

    .gcs-wa-btn svg {
        flex-shrink: 0 !important;
    }

    .gcs-wa-tooltip {
        position: absolute !important;
        right: 100% !important;
        margin-right: 12px !important;
        background: #111827 !important;
        color: white !important;
        padding: 8px 12px !important;
        border-radius: 8px !important;
        white-space: nowrap !important;
        font-size: 14px !important;
        opacity: 0 !important;
        pointer-events: none !important;
        transition: opacity 0.15s !important;
    }

    .gcs-wa-btn:hover .gcs-wa-tooltip {
        opacity: 1 !important;
    }

    @media (max-width: 768px) {
        .gcs-wa-btn {
            bottom: 16px !important;
            right: 16px !important;
            width: 48px !important;
            height: 48px !important;
        }
        .gcs-wa-btn svg {
            width: 24px !important;
            height: 24px !important;
        }
        .gcs-wa-tooltip {
            display: none !important;
        }
    }
    </style>
    <?php
    return ob_get_clean();
}

add_shortcode('gcs_whatsapp_button', 'gcs_whatsapp_button_shortcode');

// Auto-inject on all pages
add_action('wp_footer', function() {
    if (!is_admin()) {
        echo do_shortcode('[gcs_whatsapp_button]');
    }
}, 999);

// =========================================================================
// END OF WHATSAPP BUTTON CODE
// =========================================================================

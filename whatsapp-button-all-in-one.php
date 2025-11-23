<?php
/**
 * =========================================================================
 * WHATSAPP FLOATING BUTTON - ALL-IN-ONE CODE SNIPPET
 * =========================================================================
 *
 * INSTALLATION:
 * Copy this ENTIRE file content and paste it at the end of your theme's
 * functions.php file. That's it! The WhatsApp button will appear on all pages.
 *
 * Location: Appearance > Theme File Editor > functions.php
 *
 * =========================================================================
 */

// ===================== WHATSAPP BUTTON SHORTCODE =========================

function gcs_whatsapp_button_shortcode() {
    // Mihaela's WhatsApp number (Romanian format: +40743212055)
    $phone = '40743212055'; // Remove leading 0, add country code 40
    $message = 'Bună ziua! Aș dori să aflu mai multe despre serviciile de creditare.';
    $whatsapp_url = 'https://wa.me/' . $phone . '?text=' . urlencode($message);

    ob_start();
    ?>

    <div class="gcs-whatsapp-wrapper">
        <a
            href="<?php echo esc_url($whatsapp_url); ?>"
            target="_blank"
            rel="noopener noreferrer"
            class="gcs-whatsapp-button"
            aria-label="Contactează-ne pe WhatsApp"
        >
            <!-- MessageCircle Icon (from Figma design) -->
            <svg class="gcs-whatsapp-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
            </svg>

            <!-- Tooltip text -->
            <span class="gcs-whatsapp-tooltip">Scrie-ne pe WhatsApp</span>
        </a>
    </div>

    <style>
        /* ==================== RESET ==================== */
        .gcs-whatsapp-wrapper {
            all: initial !important;
            display: block !important;
        }

        .gcs-whatsapp-wrapper *,
        .gcs-whatsapp-wrapper *::before,
        .gcs-whatsapp-wrapper *::after {
            box-sizing: border-box !important;
            margin: 0 !important;
            padding: 0 !important;
            border: 0 !important;
            font-size: 100% !important;
            font: inherit !important;
            vertical-align: baseline !important;
        }

        /* Global font */
        .gcs-whatsapp-wrapper,
        .gcs-whatsapp-wrapper * {
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif !important;
            text-rendering: optimizeLegibility !important;
            -webkit-font-smoothing: antialiased !important;
            -moz-osx-font-smoothing: grayscale !important;
        }

        /* Remove all link styles */
        .gcs-whatsapp-wrapper a {
            background-color: transparent !important;
            background-image: none !important;
            text-decoration: none !important;
            color: inherit !important;
            border: none !important;
            outline: none !important;
        }

        .gcs-whatsapp-wrapper a:hover,
        .gcs-whatsapp-wrapper a:active,
        .gcs-whatsapp-wrapper a:focus,
        .gcs-whatsapp-wrapper a:visited {
            background-image: none !important;
            text-decoration: none !important;
            outline: none !important;
            border: none !important;
        }

        /* SVG reset */
        .gcs-whatsapp-wrapper svg {
            display: inline-block !important;
            vertical-align: middle !important;
            overflow: visible !important;
        }

        /* ==================== WHATSAPP BUTTON ==================== */
        /* Exact Figma design: fixed bottom-6 right-6 w-14 h-14 */
        /* Multiple selectors to ensure theme doesn't override */
        .gcs-whatsapp-button,
        a.gcs-whatsapp-button,
        .gcs-whatsapp-wrapper .gcs-whatsapp-button,
        .gcs-whatsapp-wrapper a.gcs-whatsapp-button {
            position: fixed !important;
            bottom: 1.5rem !important; /* 24px (bottom-6 in Tailwind) */
            right: 1.5rem !important; /* 24px (right-6 in Tailwind) */
            z-index: 50 !important; /* z-50 from Figma */
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            width: 3.5rem !important; /* 56px (w-14 in Tailwind) */
            height: 3.5rem !important; /* 56px (h-14 in Tailwind) */
            /* AGGRESSIVE WHATSAPP GREEN BACKGROUND */
            background-color: #25D366 !important;
            background-image: none !important;
            background-position: 0 0 !important;
            background-size: auto !important;
            background-repeat: no-repeat !important;
            background-attachment: scroll !important;
            background-origin: padding-box !important;
            background-clip: border-box !important;
            background: #25D366 !important;
            border-radius: 50% !important; /* rounded-full */
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05) !important; /* shadow-lg */
            cursor: pointer !important;
            transition-property: transform, background-color !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 150ms !important;
            text-decoration: none !important;
            border: none !important;
            border-width: 0 !important;
            border-style: none !important;
            border-color: transparent !important;
            outline: none !important;
            outline-width: 0 !important;
            outline-style: none !important;
            outline-color: transparent !important;
        }

        .gcs-whatsapp-button:link,
        .gcs-whatsapp-button:visited,
        a.gcs-whatsapp-button:link,
        a.gcs-whatsapp-button:visited,
        .gcs-whatsapp-wrapper .gcs-whatsapp-button:link,
        .gcs-whatsapp-wrapper .gcs-whatsapp-button:visited,
        .gcs-whatsapp-wrapper a.gcs-whatsapp-button:link,
        .gcs-whatsapp-wrapper a.gcs-whatsapp-button:visited {
            background-color: #25D366 !important;
            background-image: none !important;
            background: #25D366 !important;
            text-decoration: none !important;
            border: none !important;
            outline: none !important;
        }

        .gcs-whatsapp-button:hover,
        a.gcs-whatsapp-button:hover,
        .gcs-whatsapp-wrapper .gcs-whatsapp-button:hover,
        .gcs-whatsapp-wrapper a.gcs-whatsapp-button:hover {
            background-color: #20BA5A !important; /* Hover color from Figma */
            background-image: none !important;
            background: #20BA5A !important;
            transform: scale(1.1) !important; /* hover:scale-110 */
            text-decoration: none !important;
            border: none !important;
            outline: none !important;
        }

        .gcs-whatsapp-button:active,
        a.gcs-whatsapp-button:active,
        .gcs-whatsapp-wrapper .gcs-whatsapp-button:active,
        .gcs-whatsapp-wrapper a.gcs-whatsapp-button:active {
            background-color: #25D366 !important;
            background-image: none !important;
            background: #25D366 !important;
            transform: scale(1.05) !important;
            text-decoration: none !important;
            border: none !important;
            outline: none !important;
        }

        .gcs-whatsapp-button:focus,
        a.gcs-whatsapp-button:focus,
        .gcs-whatsapp-wrapper .gcs-whatsapp-button:focus,
        .gcs-whatsapp-wrapper a.gcs-whatsapp-button:focus {
            background-color: #25D366 !important;
            background-image: none !important;
            background: #25D366 !important;
            text-decoration: none !important;
            border: none !important;
            outline: none !important;
        }

        /* MessageCircle Icon - w-7 h-7 from Figma */
        .gcs-whatsapp-icon {
            width: 1.75rem !important; /* 28px (w-7 in Tailwind) */
            height: 1.75rem !important; /* 28px (h-7 in Tailwind) */
            color: #ffffff !important;
            stroke: currentColor !important;
            fill: none !important;
            flex-shrink: 0 !important;
        }

        /* Tooltip - Exact Figma design: bg-gray-900 text-white text-sm px-3 py-2 rounded-lg */
        .gcs-whatsapp-tooltip {
            position: absolute !important;
            right: 100% !important; /* right-full */
            top: 50% !important;
            transform: translateY(-50%) !important;
            margin-right: 0.75rem !important; /* mr-3 */
            padding-top: 0.5rem !important; /* py-2 */
            padding-bottom: 0.5rem !important; /* py-2 */
            padding-left: 0.75rem !important; /* px-3 */
            padding-right: 0.75rem !important; /* px-3 */
            background-color: #111827 !important; /* gray-900 from Figma */
            background-image: none !important;
            background: #111827 !important;
            color: #ffffff !important; /* text-white */
            font-size: 0.875rem !important; /* text-sm */
            line-height: 1.25rem !important;
            white-space: nowrap !important;
            border-radius: 0.5rem !important; /* rounded-lg */
            opacity: 0 !important; /* opacity-0 */
            transition-property: opacity !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 150ms !important;
            pointer-events: none !important;
        }

        .gcs-whatsapp-button:hover .gcs-whatsapp-tooltip {
            opacity: 1 !important; /* group-hover:opacity-100 */
        }

        /* Mobile adjustments */
        @media (max-width: 768px) {
            .gcs-whatsapp-button {
                bottom: 1rem !important; /* 16px */
                right: 1rem !important; /* 16px */
                width: 3rem !important; /* 48px */
                height: 3rem !important; /* 48px */
            }

            .gcs-whatsapp-icon {
                width: 1.5rem !important; /* 24px */
                height: 1.5rem !important; /* 24px */
            }

            /* Hide tooltip on mobile */
            .gcs-whatsapp-tooltip {
                display: none !important;
            }
        }

        /* Ensure button is above other elements */
        .gcs-whatsapp-wrapper {
            position: relative !important;
            z-index: 9999 !important;
        }
    </style>

    <?php
    return ob_get_clean();
}

// Register the shortcode
add_shortcode('gcs_whatsapp_button', 'gcs_whatsapp_button_shortcode');

// ===================== AUTO-INJECT ON ALL PAGES ==========================

// Auto-inject WhatsApp button in footer on all pages
add_action('wp_footer', 'gcs_auto_inject_whatsapp_button', 100);

function gcs_auto_inject_whatsapp_button() {
    // Only show on frontend, not in admin
    if (!is_admin()) {
        echo do_shortcode('[gcs_whatsapp_button]');
    }
}

// =========================================================================
// END OF WHATSAPP BUTTON CODE
// =========================================================================

<?php
/**
 * Global Credit Solutions - WhatsApp Floating Button
 *
 * Shortcode: [gcs_whatsapp_button]
 *
 * Floating WhatsApp button that appears on all pages
 * - Fixed position bottom-right
 * - Complete theme isolation with !important
 * - Mobile responsive
 * - Opens WhatsApp chat with Mihaela
 */

function gcs_whatsapp_button_shortcode() {
    // Mihaela's WhatsApp number (Romanian format: +40743212055)
    $phone = '40743212055'; // Remove leading 0, add country code 40
    $message = 'Bună! Aș dori mai multe informații despre serviciile de creditare.';
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
            <!-- WhatsApp Icon SVG -->
            <svg class="gcs-whatsapp-icon" viewBox="0 0 24 24" fill="currentColor">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
            </svg>

            <!-- Optional: Tooltip text -->
            <span class="gcs-whatsapp-tooltip">Contactează-ne</span>
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
        .gcs-whatsapp-button {
            position: fixed !important;
            bottom: 1.5rem !important; /* 24px */
            right: 1.5rem !important; /* 24px */
            z-index: 9999 !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            width: 3.5rem !important; /* 56px */
            height: 3.5rem !important; /* 56px */
            background-color: #25D366 !important; /* WhatsApp green */
            background-image: none !important;
            background: #25D366 !important;
            border-radius: 50% !important; /* Circular */
            box-shadow: 0 4px 12px 0 rgba(0, 0, 0, 0.15) !important;
            cursor: pointer !important;
            transition-property: transform, box-shadow, background-color !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 200ms !important;
            text-decoration: none !important;
            border: none !important;
            outline: none !important;
        }

        .gcs-whatsapp-button:hover {
            background-color: #128C7E !important; /* Darker green on hover */
            background-image: none !important;
            background: #128C7E !important;
            transform: scale(1.1) !important;
            box-shadow: 0 6px 16px 0 rgba(0, 0, 0, 0.2) !important;
            text-decoration: none !important;
            border: none !important;
            outline: none !important;
        }

        .gcs-whatsapp-button:active {
            transform: scale(1.05) !important;
        }

        /* Pulse animation for attention */
        @keyframes gcs-whatsapp-pulse {
            0% {
                box-shadow: 0 4px 12px 0 rgba(0, 0, 0, 0.15), 0 0 0 0 rgba(37, 211, 102, 0.7) !important;
            }
            50% {
                box-shadow: 0 4px 12px 0 rgba(0, 0, 0, 0.15), 0 0 0 10px rgba(37, 211, 102, 0) !important;
            }
            100% {
                box-shadow: 0 4px 12px 0 rgba(0, 0, 0, 0.15), 0 0 0 0 rgba(37, 211, 102, 0) !important;
            }
        }

        .gcs-whatsapp-button {
            animation: gcs-whatsapp-pulse 2s infinite !important;
        }

        .gcs-whatsapp-button:hover {
            animation: none !important;
        }

        /* WhatsApp Icon */
        .gcs-whatsapp-icon {
            width: 2rem !important; /* 32px */
            height: 2rem !important; /* 32px */
            color: #ffffff !important;
            fill: currentColor !important;
            flex-shrink: 0 !important;
        }

        /* Tooltip */
        .gcs-whatsapp-tooltip {
            position: absolute !important;
            right: 100% !important;
            top: 50% !important;
            transform: translateY(-50%) !important;
            margin-right: 1rem !important;
            padding: 0.5rem 1rem !important;
            background-color: #1f2937 !important; /* Dark gray */
            background-image: none !important;
            background: #1f2937 !important;
            color: #ffffff !important;
            font-size: 0.875rem !important;
            line-height: 1.25rem !important;
            white-space: nowrap !important;
            border-radius: 0.375rem !important;
            opacity: 0 !important;
            visibility: hidden !important;
            transition-property: opacity, visibility !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 200ms !important;
            pointer-events: none !important;
        }

        /* Tooltip arrow */
        .gcs-whatsapp-tooltip::after {
            content: '' !important;
            position: absolute !important;
            left: 100% !important;
            top: 50% !important;
            transform: translateY(-50%) !important;
            border: 6px solid transparent !important;
            border-left-color: #1f2937 !important;
            border-width: 6px !important;
            border-style: solid !important;
        }

        .gcs-whatsapp-button:hover .gcs-whatsapp-tooltip {
            opacity: 1 !important;
            visibility: visible !important;
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
                width: 1.75rem !important; /* 28px */
                height: 1.75rem !important; /* 28px */
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

add_shortcode('gcs_whatsapp_button', 'gcs_whatsapp_button_shortcode');

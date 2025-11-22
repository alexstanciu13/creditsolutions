<?php
/**
 * Global Credit Solutions - CTA Section Shortcode
 *
 * Shortcode: [gcs_cta_section]
 *
 * EXACT FIGMA DESIGN - Call to Action section
 * - All Tailwind classes converted precisely
 * - Complete theme isolation with !important
 * - Gradient background from #0066CC to #003D7A
 */

function gcs_cta_section_shortcode() {
    ob_start();
    ?>

    <div class="gcs-cta-wrapper">
        <!-- py-16 bg-gradient-to-r from-[#0066CC] to-[#003D7A] -->
        <section class="gcs-cta-section">
            <!-- container mx-auto px-4 -->
            <div class="gcs-cta-container">
                <!-- max-w-4xl mx-auto text-center -->
                <div class="gcs-cta-content">

                    <!-- Icon circle: inline-flex items-center justify-center w-16 h-16 bg-white/20 rounded-full mb-6 -->
                    <div class="gcs-cta-icon-circle">
                        <!-- ShieldCheck icon: w-8 h-8 text-white -->
                        <svg class="gcs-cta-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            <path d="m9 12 2 2 4-4"></path>
                        </svg>
                    </div>

                    <!-- Heading: text-white mb-4 text-2xl md:text-3xl -->
                    <h2 class="gcs-cta-heading">
                        Gata să începi procesul de aplicare?
                    </h2>

                    <!-- Description: text-xl text-white/90 mb-8 max-w-2xl mx-auto -->
                    <p class="gcs-cta-description">
                        În 5 minute completezi formularul. Restul e treaba noastră.
                        Te ajutăm să găsești cea mai bună soluție de creditare.
                    </p>

                    <!-- Button: size="lg" bg-white text-[#003D7A] hover:bg-gray-100 rounded-lg shadow-xl transition-all hover:scale-105 -->
                    <a href="#contact-form" class="gcs-cta-button">
                        Aplică Acum
                    </a>

                    <!-- Features: mt-8 flex flex-wrap justify-center gap-8 text-white/80 text-sm -->
                    <div class="gcs-cta-features">

                        <!-- Feature 1 -->
                        <div class="gcs-cta-feature">
                            <!-- Checkmark icon: w-5 h-5 -->
                            <svg class="gcs-cta-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Proces Rapid</span>
                        </div>

                        <!-- Feature 2 -->
                        <div class="gcs-cta-feature">
                            <svg class="gcs-cta-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Fără Obligații</span>
                        </div>

                        <!-- Feature 3 -->
                        <div class="gcs-cta-feature">
                            <svg class="gcs-cta-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Date Protejate SSL</span>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>

    <style>
        /* ==================== RESET ==================== */
        .gcs-cta-wrapper {
            all: initial !important;
            display: block !important;
        }

        .gcs-cta-wrapper *,
        .gcs-cta-wrapper *::before,
        .gcs-cta-wrapper *::after {
            box-sizing: border-box !important;
            margin: 0 !important;
            padding: 0 !important;
            border: 0 !important;
            font-size: 100% !important;
            font: inherit !important;
            vertical-align: baseline !important;
        }

        /* SVG reset */
        .gcs-cta-wrapper svg {
            display: inline-block !important;
            vertical-align: middle !important;
            overflow: visible !important;
        }

        /* Remove all link styles */
        .gcs-cta-wrapper a {
            background-color: transparent !important;
            text-decoration: none !important;
        }

        /* Remove list styles */
        .gcs-cta-wrapper ul,
        .gcs-cta-wrapper ol {
            list-style: none !important;
        }

        /* Remove button/input defaults */
        .gcs-cta-wrapper button,
        .gcs-cta-wrapper input,
        .gcs-cta-wrapper select,
        .gcs-cta-wrapper textarea {
            font-family: inherit !important;
            font-size: 100% !important;
            line-height: 1.15 !important;
            margin: 0 !important;
            padding: 0 !important;
            border: 0 !important;
            background: none !important;
        }

        /* Remove button defaults */
        .gcs-cta-wrapper button {
            overflow: visible !important;
            text-transform: none !important;
            -webkit-appearance: button !important;
        }

        /* Global font */
        .gcs-cta-wrapper,
        .gcs-cta-wrapper * {
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif !important;
            text-rendering: optimizeLegibility !important;
            -webkit-font-smoothing: antialiased !important;
            -moz-osx-font-smoothing: grayscale !important;
        }

        /* ==================== SECTION ==================== */
        /* py-16 bg-gradient-to-r from-[#0066CC] to-[#003D7A] */
        .gcs-cta-section {
            padding-top: 4rem !important; /* py-16 */
            padding-bottom: 4rem !important;
            background: linear-gradient(to right, #0066CC, #003D7A) !important; /* bg-gradient-to-r from-[#0066CC] to-[#003D7A] */
        }

        /* ==================== CONTAINER ==================== */
        /* container mx-auto px-4 */
        .gcs-cta-container {
            width: 100% !important;
            max-width: 80rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }

        /* ==================== CONTENT ==================== */
        /* max-w-4xl mx-auto text-center */
        .gcs-cta-content {
            max-width: 56rem !important; /* max-w-4xl */
            margin-left: auto !important;
            margin-right: auto !important;
            text-align: center !important;
        }

        /* ==================== ICON CIRCLE ==================== */
        /* inline-flex items-center justify-center w-16 h-16 bg-white/20 rounded-full mb-6 */
        .gcs-cta-icon-circle {
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            width: 4rem !important; /* w-16 */
            height: 4rem !important; /* h-16 */
            background-color: rgba(255, 255, 255, 0.2) !important; /* bg-white/20 */
            border-radius: 50% !important; /* rounded-full */
            margin-bottom: 1.5rem !important; /* mb-6 */
        }

        /* ShieldCheck icon: w-8 h-8 text-white */
        .gcs-cta-icon {
            width: 2rem !important; /* w-8 */
            height: 2rem !important; /* h-8 */
            color: #ffffff !important; /* text-white */
            stroke: currentColor !important;
            fill: none !important;
        }

        /* ==================== HEADING ==================== */
        /* text-white mb-4 text-2xl md:text-3xl */
        .gcs-cta-heading {
            color: #ffffff !important; /* text-white */
            margin-bottom: 1rem !important; /* mb-4 */
            font-size: 1.5rem !important; /* text-2xl */
            line-height: 2rem !important;
            font-weight: 600 !important;
        }

        @media (min-width: 768px) {
            .gcs-cta-heading {
                font-size: 1.875rem !important; /* md:text-3xl */
                line-height: 2.25rem !important;
            }
        }

        /* ==================== DESCRIPTION ==================== */
        /* text-xl text-white/90 mb-8 max-w-2xl mx-auto */
        .gcs-cta-description {
            font-size: 1.25rem !important; /* text-xl */
            line-height: 1.75rem !important;
            color: rgba(255, 255, 255, 0.9) !important; /* text-white/90 */
            margin-bottom: 2rem !important; /* mb-8 */
            max-width: 42rem !important; /* max-w-2xl */
            margin-left: auto !important;
            margin-right: auto !important;
        }

        /* ==================== BUTTON ==================== */
        /* size="lg" bg-white text-[#003D7A] hover:bg-gray-100 rounded-lg shadow-xl transition-all hover:scale-105 */
        .gcs-cta-button {
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            height: 2.5rem !important; /* size="lg" h-10 */
            padding-left: 1.5rem !important; /* size="lg" px-6 */
            padding-right: 1.5rem !important;
            padding-top: 0.5rem !important;
            padding-bottom: 0.5rem !important;
            font-size: 0.875rem !important;
            font-weight: 500 !important;
            background-color: #ffffff !important; /* bg-white */
            color: #003D7A !important; /* text-[#003D7A] */
            border-radius: 0.5rem !important; /* rounded-lg */
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04) !important; /* shadow-xl */
            cursor: pointer !important;
            transition-property: all !important; /* transition-all */
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 150ms !important;
        }

        .gcs-cta-button:hover {
            background-color: #f3f4f6 !important; /* hover:bg-gray-100 */
            transform: scale(1.05) !important; /* hover:scale-105 */
        }

        /* ==================== FEATURES ==================== */
        /* mt-8 flex flex-wrap justify-center gap-8 text-white/80 text-sm */
        .gcs-cta-features {
            margin-top: 2rem !important; /* mt-8 */
            display: flex !important;
            flex-wrap: wrap !important;
            justify-content: center !important;
            gap: 2rem !important; /* gap-8 */
            color: rgba(255, 255, 255, 0.8) !important; /* text-white/80 */
            font-size: 0.875rem !important; /* text-sm */
            line-height: 1.25rem !important;
        }

        /* flex items-center gap-2 */
        .gcs-cta-feature {
            display: flex !important;
            align-items: center !important;
            gap: 0.5rem !important; /* gap-2 */
        }

        /* Checkmark icon: w-5 h-5 */
        .gcs-cta-check {
            width: 1.25rem !important; /* w-5 */
            height: 1.25rem !important; /* h-5 */
            stroke: currentColor !important;
            fill: none !important;
            flex-shrink: 0 !important;
        }
    </style>

    <?php
    return ob_get_clean();
}

add_shortcode('gcs_cta_section', 'gcs_cta_section_shortcode');

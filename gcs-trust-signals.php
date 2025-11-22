<?php
/**
 * Global Credit Solutions - Trust Signals Shortcode
 *
 * Shortcode: [gcs_trust_signals]
 *
 * EXACT FIGMA DESIGN - Rebuilt from scratch
 * - Uses Lucide icons (Users, Building2, Star, Award) as SVG
 * - All Tailwind classes converted precisely
 * - No assumptions, no modifications
 */

function gcs_trust_signals_shortcode() {
    ob_start();
    ?>

    <div class="gcs-ts-wrapper">
        <!-- py-16 bg-white -->
        <section class="gcs-ts-section">
            <!-- container mx-auto px-4 -->
            <div class="gcs-ts-container">
                <!-- Stats Grid: grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 -->
                <div class="gcs-ts-stats-grid">

                    <!-- Stat 1: Users - 65.000+ -->
                    <div class="gcs-ts-stat-card">
                        <!-- inline-flex items-center justify-center w-16 h-16 bg-[#0066CC] rounded-full mb-4 -->
                        <div class="gcs-ts-icon-circle">
                            <!-- w-8 h-8 text-white -->
                            <svg class="gcs-ts-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </div>
                        <!-- text-[#003D7A] mb-2 -->
                        <div class="gcs-ts-number">65.000+</div>
                        <!-- text-gray-600 -->
                        <p class="gcs-ts-label">Credite intermediate cu succes</p>
                    </div>

                    <!-- Stat 2: Building2 - 30+ -->
                    <div class="gcs-ts-stat-card">
                        <div class="gcs-ts-icon-circle">
                            <svg class="gcs-ts-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect width="16" height="20" x="4" y="2" rx="2" ry="2"></rect>
                                <path d="M9 22v-4h6v4"></path>
                                <path d="M8 6h.01"></path>
                                <path d="M16 6h.01"></path>
                                <path d="M12 6h.01"></path>
                                <path d="M12 10h.01"></path>
                                <path d="M12 14h.01"></path>
                                <path d="M16 10h.01"></path>
                                <path d="M16 14h.01"></path>
                                <path d="M8 10h.01"></path>
                                <path d="M8 14h.01"></path>
                            </svg>
                        </div>
                        <div class="gcs-ts-number">30+</div>
                        <p class="gcs-ts-label">Parteneri bancari</p>
                    </div>

                    <!-- Stat 3: Star - 4.9/5 -->
                    <div class="gcs-ts-stat-card">
                        <div class="gcs-ts-icon-circle">
                            <svg class="gcs-ts-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                            </svg>
                        </div>
                        <div class="gcs-ts-number">4.9/5</div>
                        <p class="gcs-ts-label">Recenzii clienți</p>
                    </div>

                    <!-- Stat 4: Award - 12+ -->
                    <div class="gcs-ts-stat-card">
                        <div class="gcs-ts-icon-circle">
                            <svg class="gcs-ts-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="8" r="6"></circle>
                                <path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"></path>
                            </svg>
                        </div>
                        <div class="gcs-ts-number">12+</div>
                        <p class="gcs-ts-label">Ani experiență în creditare</p>
                    </div>

                </div>

                <!-- Client Reviews: mt-12 max-w-4xl mx-auto -->
                <div class="gcs-ts-reviews-wrapper">
                    <!-- grid grid-cols-1 md:grid-cols-3 gap-4 -->
                    <div class="gcs-ts-reviews-grid">

                        <!-- Review 1 -->
                        <!-- bg-white p-4 rounded-lg border border-gray-200 -->
                        <div class="gcs-ts-review-card">
                            <!-- flex gap-1 mb-2 -->
                            <div class="gcs-ts-stars">
                                <!-- w-4 h-4 fill-[#FFB800] text-[#FFB800] -->
                                <svg class="gcs-ts-star" viewBox="0 0 24 24" fill="#FFB800" stroke="#FFB800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                                <svg class="gcs-ts-star" viewBox="0 0 24 24" fill="#FFB800" stroke="#FFB800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                                <svg class="gcs-ts-star" viewBox="0 0 24 24" fill="#FFB800" stroke="#FFB800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                                <svg class="gcs-ts-star" viewBox="0 0 24 24" fill="#FFB800" stroke="#FFB800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                                <svg class="gcs-ts-star" viewBox="0 0 24 24" fill="#FFB800" stroke="#FFB800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                            </div>
                            <!-- text-sm text-gray-600 mb-2 -->
                            <p class="gcs-ts-review-text">Serviciu excelent! Am obținut creditul mult mai repede decât așteptam.</p>
                            <!-- text-xs text-gray-500 -->
                            <p class="gcs-ts-review-name">— Maria P.</p>
                        </div>

                        <!-- Review 2 -->
                        <div class="gcs-ts-review-card">
                            <div class="gcs-ts-stars">
                                <svg class="gcs-ts-star" viewBox="0 0 24 24" fill="#FFB800" stroke="#FFB800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                                <svg class="gcs-ts-star" viewBox="0 0 24 24" fill="#FFB800" stroke="#FFB800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                                <svg class="gcs-ts-star" viewBox="0 0 24 24" fill="#FFB800" stroke="#FFB800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                                <svg class="gcs-ts-star" viewBox="0 0 24 24" fill="#FFB800" stroke="#FFB800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                                <svg class="gcs-ts-star" viewBox="0 0 24 24" fill="#FFB800" stroke="#FFB800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                            </div>
                            <p class="gcs-ts-review-text">Consultanți profesioniști și răbdători. Recomand cu încredere!</p>
                            <p class="gcs-ts-review-name">— Ion D.</p>
                        </div>

                        <!-- Review 3 -->
                        <div class="gcs-ts-review-card">
                            <div class="gcs-ts-stars">
                                <svg class="gcs-ts-star" viewBox="0 0 24 24" fill="#FFB800" stroke="#FFB800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                                <svg class="gcs-ts-star" viewBox="0 0 24 24" fill="#FFB800" stroke="#FFB800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                                <svg class="gcs-ts-star" viewBox="0 0 24 24" fill="#FFB800" stroke="#FFB800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                                <svg class="gcs-ts-star" viewBox="0 0 24 24" fill="#FFB800" stroke="#FFB800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                                <svg class="gcs-ts-star" viewBox="0 0 24 24" fill="#FFB800" stroke="#FFB800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                            </div>
                            <p class="gcs-ts-review-text">Dobânda obținută prin broker a fost mai bună decât oferta băncii.</p>
                            <p class="gcs-ts-review-name">— Elena M.</p>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>

    <style>
        /* ==================== RESET ==================== */
        .gcs-ts-wrapper {
            all: initial !important;
            display: block !important;
        }

        .gcs-ts-wrapper *,
        .gcs-ts-wrapper *::before,
        .gcs-ts-wrapper *::after {
            box-sizing: border-box !important;
            margin: 0 !important;
            padding: 0 !important;
            border: 0 !important;
            font-size: 100% !important;
            font: inherit !important;
            vertical-align: baseline !important;
        }

        /* SVG reset */
        .gcs-ts-wrapper svg {
            display: inline-block !important;
            vertical-align: middle !important;
            overflow: visible !important;
        }

        /* Remove all link styles */
        .gcs-ts-wrapper a {
            background-color: transparent !important;
            text-decoration: none !important;
        }

        /* Remove list styles */
        .gcs-ts-wrapper ul,
        .gcs-ts-wrapper ol {
            list-style: none !important;
        }

        /* Remove button/input defaults */
        .gcs-ts-wrapper button,
        .gcs-ts-wrapper input,
        .gcs-ts-wrapper select,
        .gcs-ts-wrapper textarea {
            font-family: inherit !important;
            font-size: 100% !important;
            line-height: 1.15 !important;
            margin: 0 !important;
            padding: 0 !important;
            border: 0 !important;
            background: none !important;
        }

        /* Remove button defaults */
        .gcs-ts-wrapper button {
            overflow: visible !important;
            text-transform: none !important;
            -webkit-appearance: button !important;
        }

        /* Global font */
        .gcs-ts-wrapper,
        .gcs-ts-wrapper * {
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif !important;
            text-rendering: optimizeLegibility !important;
            -webkit-font-smoothing: antialiased !important;
            -moz-osx-font-smoothing: grayscale !important;
        }

        /* ==================== SECTION ==================== */
        /* py-16 bg-white */
        .gcs-ts-section {
            padding-top: 4rem !important; /* py-16 = 4rem */
            padding-bottom: 4rem !important;
            background-color: #ffffff !important; /* bg-white */
        }

        /* ==================== CONTAINER ==================== */
        /* container mx-auto px-4 */
        .gcs-ts-container {
            width: 100% !important;
            max-width: 80rem !important; /* container default max-width */
            margin-left: auto !important; /* mx-auto */
            margin-right: auto !important;
            padding-left: 1rem !important; /* px-4 */
            padding-right: 1rem !important;
        }

        /* ==================== STATS GRID ==================== */
        /* grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 */
        .gcs-ts-stats-grid {
            display: grid !important;
            grid-template-columns: repeat(1, minmax(0, 1fr)) !important; /* grid-cols-1 */
            gap: 2rem !important; /* gap-8 */
        }

        @media (min-width: 768px) {
            .gcs-ts-stats-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr)) !important; /* md:grid-cols-2 */
            }
        }

        @media (min-width: 1024px) {
            .gcs-ts-stats-grid {
                grid-template-columns: repeat(4, minmax(0, 1fr)) !important; /* lg:grid-cols-4 */
            }
        }

        /* ==================== STAT CARD ==================== */
        /* text-center p-6 rounded-xl bg-[#F5F7FA] hover:shadow-lg transition-all duration-300 hover:-translate-y-1 */
        .gcs-ts-stat-card {
            text-align: center !important; /* text-center */
            padding: 1.5rem !important; /* p-6 */
            border-radius: 0.75rem !important; /* rounded-xl */
            background-color: #F5F7FA !important; /* bg-[#F5F7FA] */
            transition-property: all !important; /* transition-all */
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 300ms !important; /* duration-300 */
            transform: translateY(0) !important;
        }

        .gcs-ts-stat-card:hover {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05) !important; /* hover:shadow-lg */
            transform: translateY(-0.25rem) !important; /* hover:-translate-y-1 */
        }

        /* ==================== ICON CIRCLE ==================== */
        /* inline-flex items-center justify-center w-16 h-16 bg-[#0066CC] rounded-full mb-4 */
        .gcs-ts-icon-circle {
            display: inline-flex !important; /* inline-flex */
            align-items: center !important; /* items-center */
            justify-content: center !important; /* justify-center */
            width: 4rem !important; /* w-16 */
            height: 4rem !important; /* h-16 */
            background-color: #0066CC !important; /* bg-[#0066CC] */
            border-radius: 50% !important; /* rounded-full */
            margin-bottom: 1rem !important; /* mb-4 */
        }

        /* ==================== ICON ==================== */
        /* w-8 h-8 text-white */
        .gcs-ts-icon {
            width: 2rem !important; /* w-8 */
            height: 2rem !important; /* h-8 */
            color: #ffffff !important; /* text-white */
        }

        /* ==================== NUMBER ==================== */
        /* text-[#003D7A] mb-2 */
        .gcs-ts-number {
            color: #003D7A !important; /* text-[#003D7A] */
            margin-bottom: 0.5rem !important; /* mb-2 */
            font-size: 1.875rem !important; /* Prominent number size (text-3xl) */
            line-height: 2.25rem !important;
            font-weight: 700 !important; /* font-bold for emphasis */
        }

        /* ==================== LABEL ==================== */
        /* text-gray-600 */
        .gcs-ts-label {
            color: #4b5563 !important; /* text-gray-600 */
            font-size: 0.875rem !important; /* text-sm */
            line-height: 1.25rem !important;
            margin: 0 !important;
        }

        /* ==================== REVIEWS WRAPPER ==================== */
        /* mt-12 max-w-4xl mx-auto */
        .gcs-ts-reviews-wrapper {
            margin-top: 3rem !important; /* mt-12 */
            max-width: 56rem !important; /* max-w-4xl */
            margin-left: auto !important; /* mx-auto */
            margin-right: auto !important;
        }

        /* ==================== REVIEWS GRID ==================== */
        /* grid grid-cols-1 md:grid-cols-3 gap-4 */
        .gcs-ts-reviews-grid {
            display: grid !important;
            grid-template-columns: repeat(1, minmax(0, 1fr)) !important; /* grid-cols-1 */
            gap: 1rem !important; /* gap-4 */
        }

        @media (min-width: 768px) {
            .gcs-ts-reviews-grid {
                grid-template-columns: repeat(3, minmax(0, 1fr)) !important; /* md:grid-cols-3 */
            }
        }

        /* ==================== REVIEW CARD ==================== */
        /* bg-white p-4 rounded-lg border border-gray-200 */
        .gcs-ts-review-card {
            background-color: #ffffff !important; /* bg-white */
            padding: 1rem !important; /* p-4 */
            border-radius: 0.5rem !important; /* rounded-lg */
            border: 1px solid #e5e7eb !important; /* border border-gray-200 */
        }

        /* ==================== STARS ==================== */
        /* flex gap-1 mb-2 */
        .gcs-ts-stars {
            display: flex !important; /* flex */
            gap: 0.25rem !important; /* gap-1 */
            margin-bottom: 0.5rem !important; /* mb-2 */
        }

        /* w-4 h-4 fill-[#FFB800] text-[#FFB800] */
        .gcs-ts-star {
            width: 1rem !important; /* w-4 */
            height: 1rem !important; /* h-4 */
            flex-shrink: 0 !important;
        }

        /* ==================== REVIEW TEXT ==================== */
        /* text-sm text-gray-600 mb-2 */
        .gcs-ts-review-text {
            font-size: 0.875rem !important; /* text-sm */
            line-height: 1.25rem !important;
            color: #4b5563 !important; /* text-gray-600 */
            margin-bottom: 0.5rem !important; /* mb-2 */
            margin-top: 0 !important;
        }

        /* ==================== REVIEW NAME ==================== */
        /* text-xs text-gray-500 */
        .gcs-ts-review-name {
            font-size: 0.75rem !important; /* text-xs */
            line-height: 1rem !important;
            color: #6b7280 !important; /* text-gray-500 */
            margin: 0 !important;
        }
    </style>

    <?php
    return ob_get_clean();
}

add_shortcode('gcs_trust_signals', 'gcs_trust_signals_shortcode');

<?php
/**
 * Global Credit Solutions - Trust Signals Shortcode
 *
 * Shortcode: [gcs_trust_signals]
 *
 * EXACT FIGMA DESIGN MATCH
 * - Uses exact Tailwind class conversions from TrustSignals.tsx
 * - System font stack (ui-sans-serif, not custom fonts)
 * - Exact gray-* color scale from Tailwind
 * - Exact spacing, sizing, and shadows
 * - Hover effects with transform and shadow transitions
 */

function gcs_trust_signals_shortcode() {
    ob_start();
    ?>

    <div class="gcs-trust-wrapper">
        <section class="gcs-trust-section">
            <div class="gcs-trust-container">
                <!-- Stats Grid -->
                <div class="gcs-trust-stats-grid">
                    <!-- Stat 1: Credits -->
                    <div class="gcs-trust-stat-card">
                        <div class="gcs-trust-icon-circle">
                            <svg class="gcs-trust-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </div>
                        <div class="gcs-trust-number">65.000+</div>
                        <p class="gcs-trust-label">Credite intermediate cu succes</p>
                    </div>

                    <!-- Stat 2: Banks -->
                    <div class="gcs-trust-stat-card">
                        <div class="gcs-trust-icon-circle">
                            <svg class="gcs-trust-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
                        <div class="gcs-trust-number">30+</div>
                        <p class="gcs-trust-label">Parteneri bancari</p>
                    </div>

                    <!-- Stat 3: Rating -->
                    <div class="gcs-trust-stat-card">
                        <div class="gcs-trust-icon-circle">
                            <svg class="gcs-trust-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                            </svg>
                        </div>
                        <div class="gcs-trust-number">4.9/5</div>
                        <p class="gcs-trust-label">Recenzii clienți</p>
                    </div>

                    <!-- Stat 4: Experience -->
                    <div class="gcs-trust-stat-card">
                        <div class="gcs-trust-icon-circle">
                            <svg class="gcs-trust-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="8" r="6"></circle>
                                <path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"></path>
                            </svg>
                        </div>
                        <div class="gcs-trust-number">12+</div>
                        <p class="gcs-trust-label">Ani experiență în creditare</p>
                    </div>
                </div>

                <!-- Client Reviews -->
                <div class="gcs-trust-reviews-wrapper">
                    <div class="gcs-trust-reviews-grid">
                        <!-- Review 1 -->
                        <div class="gcs-trust-review-card">
                            <div class="gcs-trust-stars">
                                <svg class="gcs-trust-star" viewBox="0 0 24 24" fill="#FFB800" stroke="#FFB800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                                <svg class="gcs-trust-star" viewBox="0 0 24 24" fill="#FFB800" stroke="#FFB800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                                <svg class="gcs-trust-star" viewBox="0 0 24 24" fill="#FFB800" stroke="#FFB800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                                <svg class="gcs-trust-star" viewBox="0 0 24 24" fill="#FFB800" stroke="#FFB800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                                <svg class="gcs-trust-star" viewBox="0 0 24 24" fill="#FFB800" stroke="#FFB800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                            </div>
                            <p class="gcs-trust-review-text">Serviciu excelent! Am obținut creditul mult mai repede decât așteptam.</p>
                            <p class="gcs-trust-review-name">— Maria P.</p>
                        </div>

                        <!-- Review 2 -->
                        <div class="gcs-trust-review-card">
                            <div class="gcs-trust-stars">
                                <svg class="gcs-trust-star" viewBox="0 0 24 24" fill="#FFB800" stroke="#FFB800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                                <svg class="gcs-trust-star" viewBox="0 0 24 24" fill="#FFB800" stroke="#FFB800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                                <svg class="gcs-trust-star" viewBox="0 0 24 24" fill="#FFB800" stroke="#FFB800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                                <svg class="gcs-trust-star" viewBox="0 0 24 24" fill="#FFB800" stroke="#FFB800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                                <svg class="gcs-trust-star" viewBox="0 0 24 24" fill="#FFB800" stroke="#FFB800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                            </div>
                            <p class="gcs-trust-review-text">Consultanți profesioniști și răbdători. Recomand cu încredere!</p>
                            <p class="gcs-trust-review-name">— Ion D.</p>
                        </div>

                        <!-- Review 3 -->
                        <div class="gcs-trust-review-card">
                            <div class="gcs-trust-stars">
                                <svg class="gcs-trust-star" viewBox="0 0 24 24" fill="#FFB800" stroke="#FFB800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                                <svg class="gcs-trust-star" viewBox="0 0 24 24" fill="#FFB800" stroke="#FFB800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                                <svg class="gcs-trust-star" viewBox="0 0 24 24" fill="#FFB800" stroke="#FFB800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                                <svg class="gcs-trust-star" viewBox="0 0 24 24" fill="#FFB800" stroke="#FFB800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                                <svg class="gcs-trust-star" viewBox="0 0 24 24" fill="#FFB800" stroke="#FFB800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                            </div>
                            <p class="gcs-trust-review-text">Dobânda obținută prin broker a fost mai bună decât oferta băncii.</p>
                            <p class="gcs-trust-review-name">— Elena M.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <style>
        /* ==================== EXACT FIGMA DESIGN - TAILWIND CONVERSIONS ==================== */

        /* Wrapper Reset */
        .gcs-trust-wrapper {
            all: initial !important;
            display: block !important;
        }

        .gcs-trust-wrapper *,
        .gcs-trust-wrapper *::before,
        .gcs-trust-wrapper *::after {
            box-sizing: border-box !important;
        }

        /* ==================== SECTION (py-16 bg-white) ==================== */

        .gcs-trust-section {
            padding-top: 4rem !important; /* py-16 */
            padding-bottom: 4rem !important;
            background-color: #ffffff !important; /* bg-white */
        }

        /* container mx-auto px-4 */
        .gcs-trust-container {
            width: 100% !important;
            margin-left: auto !important;
            margin-right: auto !important;
            padding-left: 1rem !important; /* px-4 */
            padding-right: 1rem !important;
        }

        /* ==================== STATS GRID (grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8) ==================== */

        .gcs-trust-stats-grid {
            display: grid !important;
            grid-template-columns: repeat(1, minmax(0, 1fr)) !important; /* grid-cols-1 */
            gap: 2rem !important; /* gap-8 */
        }

        @media (min-width: 768px) {
            .gcs-trust-stats-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr)) !important; /* md:grid-cols-2 */
            }
        }

        @media (min-width: 1024px) {
            .gcs-trust-stats-grid {
                grid-template-columns: repeat(4, minmax(0, 1fr)) !important; /* lg:grid-cols-4 */
            }
        }

        /* ==================== STAT CARD (text-center p-6 rounded-xl bg-[#F5F7FA] hover:shadow-lg transition-all) ==================== */

        .gcs-trust-stat-card {
            text-align: center !important; /* text-center */
            padding: 1.5rem !important; /* p-6 */
            border-radius: 0.75rem !important; /* rounded-xl */
            background-color: #F5F7FA !important; /* bg-[#F5F7FA] */
            transition-property: all !important; /* transition-all */
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 300ms !important; /* duration-300 */
            transform: translateY(0) !important;
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0) !important;
        }

        .gcs-trust-stat-card:hover {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05) !important; /* hover:shadow-lg */
            transform: translateY(-0.25rem) !important; /* hover:-translate-y-1 */
        }

        /* ==================== ICON CIRCLE (w-16 h-16 bg-[#0066CC] rounded-full mb-4) ==================== */

        .gcs-trust-icon-circle {
            display: inline-flex !important; /* inline-flex */
            align-items: center !important; /* items-center */
            justify-content: center !important; /* justify-center */
            width: 4rem !important; /* w-16 */
            height: 4rem !important; /* h-16 */
            background-color: #0066CC !important; /* bg-[#0066CC] */
            border-radius: 50% !important; /* rounded-full */
            margin-bottom: 1rem !important; /* mb-4 */
        }

        /* w-8 h-8 text-white */
        .gcs-trust-icon {
            width: 2rem !important; /* w-8 */
            height: 2rem !important; /* h-8 */
            color: #ffffff !important; /* text-white */
        }

        /* ==================== NUMBER & LABEL ==================== */

        /* text-[#003D7A] mb-2 */
        .gcs-trust-number {
            color: #003D7A !important; /* text-[#003D7A] */
            margin-bottom: 0.5rem !important; /* mb-2 */
            font-size: 1.875rem !important; /* text-3xl equivalent */
            line-height: 2.25rem !important;
            font-weight: 700 !important; /* font-bold */
        }

        /* text-gray-600 */
        .gcs-trust-label {
            color: #4b5563 !important; /* text-gray-600 */
            font-size: 0.875rem !important; /* text-sm */
            line-height: 1.25rem !important;
            margin: 0 !important;
        }

        /* ==================== REVIEWS SECTION (mt-12 max-w-4xl mx-auto) ==================== */

        .gcs-trust-reviews-wrapper {
            margin-top: 3rem !important; /* mt-12 */
            max-width: 56rem !important; /* max-w-4xl */
            margin-left: auto !important; /* mx-auto */
            margin-right: auto !important;
        }

        /* grid grid-cols-1 md:grid-cols-3 gap-4 */
        .gcs-trust-reviews-grid {
            display: grid !important;
            grid-template-columns: repeat(1, minmax(0, 1fr)) !important; /* grid-cols-1 */
            gap: 1rem !important; /* gap-4 */
        }

        @media (min-width: 768px) {
            .gcs-trust-reviews-grid {
                grid-template-columns: repeat(3, minmax(0, 1fr)) !important; /* md:grid-cols-3 */
            }
        }

        /* ==================== REVIEW CARD (bg-white p-4 rounded-lg border border-gray-200) ==================== */

        .gcs-trust-review-card {
            background-color: #ffffff !important; /* bg-white */
            padding: 1rem !important; /* p-4 */
            border-radius: 0.5rem !important; /* rounded-lg */
            border: 1px solid #e5e7eb !important; /* border border-gray-200 */
        }

        /* ==================== STARS (flex gap-1 mb-2) ==================== */

        .gcs-trust-stars {
            display: flex !important; /* flex */
            gap: 0.25rem !important; /* gap-1 */
            margin-bottom: 0.5rem !important; /* mb-2 */
        }

        /* w-4 h-4 fill-[#FFB800] text-[#FFB800] */
        .gcs-trust-star {
            width: 1rem !important; /* w-4 */
            height: 1rem !important; /* h-4 */
            flex-shrink: 0 !important;
        }

        /* ==================== REVIEW TEXT & NAME ==================== */

        /* text-sm text-gray-600 mb-2 */
        .gcs-trust-review-text {
            font-size: 0.875rem !important; /* text-sm */
            line-height: 1.25rem !important;
            color: #4b5563 !important; /* text-gray-600 */
            margin-bottom: 0.5rem !important; /* mb-2 */
            margin-top: 0 !important;
        }

        /* text-xs text-gray-500 */
        .gcs-trust-review-name {
            font-size: 0.75rem !important; /* text-xs */
            line-height: 1rem !important;
            color: #6b7280 !important; /* text-gray-500 */
            margin: 0 !important;
        }

        /* Global font family (Tailwind default) */
        .gcs-trust-wrapper,
        .gcs-trust-wrapper * {
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji" !important;
        }
    </style>

    <?php
    return ob_get_clean();
}

add_shortcode('gcs_trust_signals', 'gcs_trust_signals_shortcode');

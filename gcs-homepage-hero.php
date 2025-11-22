<?php
/**
 * Global Credit Solutions - Homepage Header + Hero Shortcode
 *
 * Shortcode: [gcs_homepage_hero]
 *
 * EXACT FIGMA DESIGN MATCH
 * - Uses exact Tailwind class conversions from original TSX components
 * - System font stack (ui-sans-serif, not custom fonts)
 * - Exact gray-* color scale from Tailwind
 * - Exact spacing, sizing, and shadows
 */

function gcs_homepage_hero_shortcode() {
    ob_start();
    ?>

    <div class="gcs-homepage-wrapper">
        <!-- Fixed Header -->
        <header class="gcs-hp-header">
            <div class="gcs-hp-container">
                <div class="gcs-hp-flex-between">
                    <!-- Logo -->
                    <a href="<?php echo home_url(); ?>" class="gcs-hp-logo">
                        <img src="https://creditsolutions.ro/wp-content/uploads/2025/11/white_logo.png" alt="Global Credit Solutions" class="gcs-hp-logo-white">
                        <img src="https://creditsolutions.ro/wp-content/uploads/2025/11/blue_logo.png" alt="Global Credit Solutions" class="gcs-hp-logo-blue">
                    </a>

                    <!-- Desktop Navigation -->
                    <nav class="gcs-hp-nav-desktop">
                        <a href="<?php echo home_url(); ?>" class="gcs-hp-nav-link">Acasă</a>
                        <a href="<?php echo home_url('/despre-noi'); ?>" class="gcs-hp-nav-link">Despre Noi</a>
                        <a href="<?php echo home_url('/servicii'); ?>" class="gcs-hp-nav-link">Servicii</a>
                        <a href="<?php echo home_url('/contact'); ?>" class="gcs-hp-nav-link">Contact</a>
                    </nav>

                    <!-- CTA Button Desktop -->
                    <div class="gcs-hp-cta-desktop">
                        <a href="<?php echo home_url('/contact'); ?>" class="gcs-hp-btn-cta">Aplică Acum</a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <button class="gcs-hp-mobile-btn" aria-label="Toggle menu">
                        <svg class="gcs-hp-menu-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M3 12h18M3 6h18M3 18h18"></path>
                        </svg>
                        <svg class="gcs-hp-close-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M18 6L6 18M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <!-- Mobile Menu -->
                <nav class="gcs-hp-nav-mobile">
                    <a href="<?php echo home_url(); ?>" class="gcs-hp-nav-link-mobile">Acasă</a>
                    <a href="<?php echo home_url('/despre-noi'); ?>" class="gcs-hp-nav-link-mobile">Despre Noi</a>
                    <a href="<?php echo home_url('/servicii'); ?>" class="gcs-hp-nav-link-mobile">Servicii</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="gcs-hp-nav-link-mobile">Contact</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="gcs-hp-btn-cta gcs-hp-btn-mobile">Aplică Acum</a>
                </nav>
            </div>
        </header>

        <!-- Hero Section -->
        <section class="gcs-hp-hero">
            <!-- Background Pattern -->
            <div class="gcs-hp-bg-pattern"></div>

            <div class="gcs-hp-container gcs-hp-relative">
                <div class="gcs-hp-grid">
                    <!-- Left Content -->
                    <div class="gcs-hp-text-white">
                        <h1 class="gcs-hp-h1">Găsește rapid cel mai bun credit pentru nevoile tale</h1>
                        <p class="gcs-hp-subtitle">Soluții de creditare personalizate | Comparare oferte de la 30+ bănci</p>

                        <div class="gcs-hp-cta-group">
                            <a href="<?php echo home_url('/contact'); ?>" class="gcs-hp-btn-white">Aplică Acum</a>
                            <button class="gcs-hp-btn-outline" onclick="document.getElementById('gcs-calculator').scrollIntoView({ behavior: 'smooth' })">Calculează rata ta</button>
                        </div>

                        <!-- Trust Badges -->
                        <div class="gcs-hp-trust-badges">
                            <div class="gcs-hp-badge">
                                <div class="gcs-hp-badge-icon">
                                    <svg class="gcs-hp-svg-24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                    </svg>
                                </div>
                                <div class="gcs-hp-badge-text">
                                    <div>Autorizat</div>
                                    <div class="gcs-hp-text-gray-300">ANPC</div>
                                </div>
                            </div>

                            <div class="gcs-hp-badge">
                                <div class="gcs-hp-badge-icon">
                                    <svg class="gcs-hp-svg-24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                    </svg>
                                </div>
                                <div class="gcs-hp-badge-text">
                                    <div>SSL</div>
                                    <div class="gcs-hp-text-gray-300">Certificat</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Content - Calculator -->
                    <div class="gcs-hp-calc-wrapper">
                        <div id="gcs-calculator" class="gcs-hp-calculator">
                            <h3 class="gcs-hp-calc-title">Calculator Credit</h3>

                            <div class="gcs-hp-calc-content">
                                <!-- Credit Type -->
                                <div>
                                    <label class="gcs-hp-label">Tip Credit</label>
                                    <div class="gcs-hp-select-wrapper">
                                        <select id="gcs-credit-type" class="gcs-hp-select">
                                            <option value="nevoi">Credite de Nevoi Personale</option>
                                            <option value="ipotecar">Credit Ipotecar/Prima Casă</option>
                                            <option value="auto">Credite Auto/Leasing</option>
                                            <option value="juridice">Credite Persoane Juridice</option>
                                            <option value="refinantare">Refinanțări de Credit</option>
                                            <option value="altele">Alte Servicii</option>
                                        </select>
                                        <svg class="gcs-hp-select-arrow" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M3 4.5L6 7.5L9 4.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </div>

                                <!-- Amount Slider -->
                                <div>
                                    <div class="gcs-hp-label-row">
                                        <label class="gcs-hp-label">Suma dorită</label>
                                        <span class="gcs-hp-value" id="gcs-amount-value">150.000 RON</span>
                                    </div>
                                    <input type="range" id="gcs-amount" class="gcs-hp-slider" min="10000" max="500000" step="5000" value="150000">
                                    <div class="gcs-hp-slider-labels">
                                        <span>10.000 RON</span>
                                        <span>500.000 RON</span>
                                    </div>
                                </div>

                                <!-- Period Slider -->
                                <div>
                                    <div class="gcs-hp-label-row">
                                        <label class="gcs-hp-label">Perioada (luni)</label>
                                        <span class="gcs-hp-value" id="gcs-period-value">240 luni (20 ani)</span>
                                    </div>
                                    <input type="range" id="gcs-period" class="gcs-hp-slider" min="12" max="360" step="12" value="240">
                                    <div class="gcs-hp-slider-labels">
                                        <span>1 an</span>
                                        <span>30 ani</span>
                                    </div>
                                </div>

                                <!-- Results -->
                                <div class="gcs-hp-results">
                                    <div class="gcs-hp-result-row">
                                        <span class="gcs-hp-text-gray-600">Rata lunară estimată:</span>
                                        <span class="gcs-hp-text-primary" id="gcs-monthly-payment">1.234,56 RON</span>
                                    </div>
                                    <div class="gcs-hp-result-row">
                                        <span class="gcs-hp-text-gray-600">DAE estimat:</span>
                                        <span class="gcs-hp-text-accent" id="gcs-dae">10,00%</span>
                                    </div>
                                </div>

                                <!-- CTA Button -->
                                <a href="<?php echo home_url('/contact'); ?>" class="gcs-hp-btn-cta gcs-hp-w-full">Vezi oferte personalizate</a>

                                <p class="gcs-hp-disclaimer">* Calculele sunt orientative și pot varia în funcție de banca selectată</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <style>
        /* ==================== EXACT FIGMA DESIGN - TAILWIND CONVERSIONS ==================== */

        /* Wrapper Reset */
        .gcs-homepage-wrapper {
            all: initial !important;
            display: block !important;
        }

        .gcs-homepage-wrapper *,
        .gcs-homepage-wrapper *::before,
        .gcs-homepage-wrapper *::after {
            box-sizing: border-box !important;
        }

        /* ==================== TYPOGRAPHY (Exact Tailwind Font Stack) ==================== */

        /* text-3xl: 1.875rem / 2.25rem */
        .gcs-hp-h1 {
            font-size: 1.875rem !important;
            line-height: 2.25rem !important;
            font-weight: 400 !important;
            color: #ffffff !important;
            margin-bottom: 1.5rem !important; /* mb-6 */
        }

        @media (min-width: 768px) {
            /* md:text-4xl */
            .gcs-hp-h1 {
                font-size: 2.25rem !important;
                line-height: 2.5rem !important;
            }
        }

        @media (min-width: 1024px) {
            /* lg:text-5xl */
            .gcs-hp-h1 {
                font-size: 3rem !important;
                line-height: 1 !important;
            }
        }

        /* text-xl: 1.25rem / 1.75rem */
        .gcs-hp-subtitle {
            font-size: 1.25rem !important;
            line-height: 1.75rem !important;
            color: #e5e7eb !important; /* text-gray-200 */
            margin-bottom: 2rem !important; /* mb-8 */
        }

        /* text-sm: 0.875rem / 1.25rem */
        .gcs-hp-badge-text {
            font-size: 0.875rem !important;
            line-height: 1.25rem !important;
        }

        /* text-xs: 0.75rem / 1rem */
        .gcs-hp-slider-labels,
        .gcs-hp-disclaimer {
            font-size: 0.75rem !important;
            line-height: 1rem !important;
        }

        /* text-gray-300: #d1d5db */
        .gcs-hp-text-gray-300 {
            color: #d1d5db !important;
        }

        /* text-gray-500: #6b7280 */
        .gcs-hp-slider-labels,
        .gcs-hp-disclaimer {
            color: #6b7280 !important;
        }

        /* text-gray-600: #4b5563 */
        .gcs-hp-text-gray-600 {
            color: #4b5563 !important;
        }

        /* text-gray-700: #374151 */
        .gcs-hp-label {
            color: #374151 !important;
        }

        /* text-[#003D7A] */
        .gcs-hp-text-primary,
        .gcs-hp-calc-title {
            color: #003D7A !important;
        }

        /* text-[#0066CC] */
        .gcs-hp-text-accent,
        .gcs-hp-value {
            color: #0066CC !important;
        }

        /* text-white */
        .gcs-hp-text-white,
        .gcs-hp-badge-text > div:first-child {
            color: #ffffff !important;
        }

        /* ==================== HEADER (fixed top-0 left-0 right-0 z-50) ==================== */

        .gcs-hp-header {
            position: fixed !important;
            top: 0 !important;
            left: 0 !important;
            right: 0 !important;
            z-index: 50 !important;
            transition-property: all !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 300ms !important;
            background-color: transparent !important;
            padding-top: 1rem !important; /* py-4 */
            padding-bottom: 1rem !important;
        }

        .gcs-hp-header.scrolled {
            background-color: #ffffff !important; /* bg-white */
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06) !important; /* shadow-md */
            padding-top: 0.75rem !important; /* py-3 */
            padding-bottom: 0.75rem !important;
        }

        /* container - Full width edge-to-edge layout with minimal padding */
        .gcs-hp-container {
            width: 100% !important;
            margin-left: auto !important;
            margin-right: auto !important;
            padding-left: 0.75rem !important; /* Minimal padding for mobile */
            padding-right: 0.75rem !important;
        }

        @media (min-width: 768px) {
            .gcs-hp-container {
                padding-left: 1.5rem !important;
                padding-right: 1.5rem !important;
            }
        }

        /* flex items-center justify-between */
        .gcs-hp-flex-between {
            display: flex !important;
            align-items: center !important;
            justify-content: space-between !important;
        }

        /* Logo - Increased size for better visibility */
        .gcs-hp-logo {
            display: flex !important;
            align-items: center !important;
            gap: 0.5rem !important;
            text-decoration: none !important;
            position: relative !important;
            height: 4rem !important; /* Increased from 2.5rem */
            width: 250px !important; /* Fixed width for better prominence */
        }

        @media (min-width: 768px) {
            .gcs-hp-logo {
                width: 300px !important; /* Larger on desktop */
            }
        }

        .gcs-hp-logo img {
            height: 4rem !important; /* Increased from 2.5rem */
            width: 100% !important; /* Stretch to container width */
            max-width: none !important;
            object-fit: contain !important; /* Maintain aspect ratio while fitting */
            position: absolute !important;
            top: 0 !important;
            left: 0 !important;
            transition-property: opacity !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 300ms !important;
        }

        .gcs-hp-logo-white {
            opacity: 1 !important;
        }

        .gcs-hp-logo-blue {
            opacity: 0 !important;
        }

        .gcs-hp-header.scrolled .gcs-hp-logo-white {
            opacity: 0 !important;
        }

        .gcs-hp-header.scrolled .gcs-hp-logo-blue {
            opacity: 1 !important;
        }

        /* hidden md:flex items-center gap-8 */
        .gcs-hp-nav-desktop {
            display: none !important;
        }

        @media (min-width: 768px) {
            .gcs-hp-nav-desktop {
                display: flex !important;
                align-items: center !important;
                gap: 2rem !important; /* gap-8 */
            }
        }

        /* Navigation Links - transition-colors hover:text-[#0066CC] */
        .gcs-hp-nav-link {
            transition-property: color !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 150ms !important;
            color: #ffffff !important; /* text-white when not scrolled */
            text-decoration: none !important;
            font-size: 1rem !important;
            font-weight: 400 !important;
        }

        .gcs-hp-nav-link:hover {
            color: #0066CC !important;
        }

        .gcs-hp-header.scrolled .gcs-hp-nav-link {
            color: #374151 !important; /* text-gray-700 */
        }

        /* hidden md:block */
        .gcs-hp-cta-desktop {
            display: none !important;
        }

        @media (min-width: 768px) {
            .gcs-hp-cta-desktop {
                display: block !important;
            }
        }

        /* Button CTA - bg-[#0066CC] hover:bg-[#0052A3] text-white rounded-lg */
        .gcs-hp-btn-cta {
            display: inline-flex !important;
            height: 2.5rem !important; /* h-10 (Button size="lg") */
            align-items: center !important;
            justify-content: center !important;
            border-radius: 0.5rem !important; /* rounded-lg */
            background-color: #0066CC !important;
            padding-left: 1.5rem !important; /* px-6 */
            padding-right: 1.5rem !important;
            padding-top: 0.5rem !important; /* py-2 */
            padding-bottom: 0.5rem !important;
            font-size: 0.875rem !important;
            font-weight: 500 !important;
            color: #ffffff !important;
            text-decoration: none !important;
            transition-property: all !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 150ms !important;
            border: none !important;
            cursor: pointer !important;
        }

        .gcs-hp-btn-cta:hover {
            background-color: #0052A3 !important;
        }

        /* md:hidden */
        .gcs-hp-mobile-btn {
            display: flex !important;
            background: none !important;
            border: none !important;
            cursor: pointer !important;
            padding: 0.25rem !important;
        }

        @media (min-width: 768px) {
            .gcs-hp-mobile-btn {
                display: none !important;
            }
        }

        .gcs-hp-mobile-btn {
            color: #ffffff !important;
        }

        .gcs-hp-header.scrolled .gcs-hp-mobile-btn {
            color: #003D7A !important;
        }

        .gcs-hp-menu-icon {
            display: block !important;
            width: 1.5rem !important;
            height: 1.5rem !important;
        }

        .gcs-hp-close-icon {
            display: none !important;
            width: 1.5rem !important;
            height: 1.5rem !important;
        }

        .gcs-hp-mobile-btn.active .gcs-hp-menu-icon {
            display: none !important;
        }

        .gcs-hp-mobile-btn.active .gcs-hp-close-icon {
            display: block !important;
        }

        /* md:hidden mt-4 pb-4 flex flex-col gap-4 bg-white rounded-lg shadow-lg p-4 */
        .gcs-hp-nav-mobile {
            display: none !important;
        }

        .gcs-hp-nav-mobile.active {
            display: flex !important;
            flex-direction: column !important;
            gap: 1rem !important; /* gap-4 */
            margin-top: 1rem !important; /* mt-4 */
            padding-bottom: 1rem !important; /* pb-4 */
            background-color: #ffffff !important;
            border-radius: 0.5rem !important; /* rounded-lg */
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05) !important; /* shadow-lg */
            padding: 1rem !important; /* p-4 */
        }

        @media (min-width: 768px) {
            .gcs-hp-nav-mobile {
                display: none !important;
            }
        }

        /* text-gray-700 hover:text-[#0066CC] text-left */
        .gcs-hp-nav-link-mobile {
            color: #374151 !important; /* text-gray-700 */
            text-decoration: none !important;
            text-align: left !important;
            font-size: 1rem !important;
            padding: 0.5rem 0 !important;
            transition-property: color !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 150ms !important;
        }

        .gcs-hp-nav-link-mobile:hover {
            color: #0066CC !important;
        }

        .gcs-hp-btn-mobile {
            width: 100% !important;
        }

        /* ==================== HERO (relative bg-gradient-to-br pt-32 pb-16 md:pt-40 md:pb-24) ==================== */

        .gcs-hp-hero {
            position: relative !important;
            background-image: linear-gradient(to bottom right, #003D7A, #001f3f) !important; /* bg-gradient-to-br from-[#003D7A] to-[#001f3f] */
            padding-top: 8rem !important; /* pt-32 */
            padding-bottom: 4rem !important; /* pb-16 */
        }

        @media (min-width: 768px) {
            .gcs-hp-hero {
                padding-top: 10rem !important; /* md:pt-40 */
                padding-bottom: 6rem !important; /* md:pb-24 */
            }
        }

        /* absolute inset-0 opacity-5 */
        .gcs-hp-bg-pattern {
            position: absolute !important;
            top: 0 !important;
            right: 0 !important;
            bottom: 0 !important;
            left: 0 !important;
            opacity: 0.05 !important;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E") !important;
        }

        /* relative */
        .gcs-hp-relative {
            position: relative !important;
        }

        /* grid lg:grid-cols-2 gap-12 items-center */
        .gcs-hp-grid {
            display: grid !important;
            gap: 3rem !important; /* gap-12 */
            align-items: center !important;
            grid-template-columns: repeat(1, minmax(0, 1fr)) !important;
        }

        @media (min-width: 1024px) {
            .gcs-hp-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr)) !important; /* lg:grid-cols-2 */
            }
        }

        /* flex flex-col sm:flex-row gap-4 */
        .gcs-hp-cta-group {
            display: flex !important;
            flex-direction: column !important;
            gap: 1rem !important; /* gap-4 */
        }

        @media (min-width: 640px) {
            .gcs-hp-cta-group {
                flex-direction: row !important; /* sm:flex-row */
            }
        }

        /* bg-white text-[#003D7A] hover:bg-gray-100 rounded-lg transition-all shadow-lg */
        .gcs-hp-btn-white {
            display: inline-flex !important;
            height: 2.5rem !important; /* Button size="lg" h-10 */
            align-items: center !important;
            justify-content: center !important;
            gap: 0.5rem !important;
            background-color: #ffffff !important;
            color: #003D7A !important;
            border-radius: 0.5rem !important; /* rounded-lg */
            padding-left: 1.5rem !important; /* px-6 */
            padding-right: 1.5rem !important;
            padding-top: 0.5rem !important; /* py-2 */
            padding-bottom: 0.5rem !important;
            font-size: 0.875rem !important;
            font-weight: 500 !important;
            text-decoration: none !important;
            transition-property: all !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 150ms !important;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05) !important; /* shadow-lg */
            border: none !important;
            cursor: pointer !important;
        }

        .gcs-hp-btn-white:hover {
            background-color: #f3f4f6 !important; /* hover:bg-gray-100 */
        }

        /* border-2 border-white text-white bg-transparent hover:bg-white hover:text-[#003D7A] rounded-lg */
        .gcs-hp-btn-outline {
            display: inline-flex !important;
            height: 2.5rem !important;
            align-items: center !important;
            justify-content: center !important;
            gap: 0.5rem !important;
            border-width: 2px !important; /* border-2 */
            border-color: #ffffff !important; /* border-white */
            color: #ffffff !important; /* text-white */
            background-color: transparent !important; /* bg-transparent */
            border-radius: 0.5rem !important; /* rounded-lg */
            padding-left: 1.5rem !important;
            padding-right: 1.5rem !important;
            padding-top: 0.5rem !important;
            padding-bottom: 0.5rem !important;
            font-size: 0.875rem !important;
            font-weight: 500 !important;
            text-decoration: none !important;
            transition-property: all !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 150ms !important;
            cursor: pointer !important;
        }

        .gcs-hp-btn-outline:hover {
            background-color: #ffffff !important; /* hover:bg-white */
            color: #003D7A !important; /* hover:text-[#003D7A] */
        }

        /* mt-12 flex flex-wrap gap-6 items-center */
        .gcs-hp-trust-badges {
            margin-top: 3rem !important; /* mt-12 */
            display: flex !important;
            flex-wrap: wrap !important;
            gap: 1.5rem !important; /* gap-6 */
            align-items: center !important;
        }

        /* flex items-center gap-2 */
        .gcs-hp-badge {
            display: flex !important;
            align-items: center !important;
            gap: 0.5rem !important; /* gap-2 */
        }

        /* w-12 h-12 bg-white/10 rounded-lg flex items-center justify-center */
        .gcs-hp-badge-icon {
            width: 3rem !important; /* w-12 */
            height: 3rem !important; /* h-12 */
            background-color: rgba(255, 255, 255, 0.1) !important; /* bg-white/10 */
            border-radius: 0.5rem !important; /* rounded-lg */
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            flex-shrink: 0 !important;
        }

        /* w-6 h-6 text-white */
        .gcs-hp-svg-24 {
            width: 1.5rem !important; /* w-6 */
            height: 1.5rem !important; /* h-6 */
            color: #ffffff !important;
        }

        /* ==================== CALCULATOR ==================== */

        /* lg:ml-auto w-full lg:max-w-md */
        .gcs-hp-calc-wrapper {
            width: 100% !important; /* w-full */
        }

        @media (min-width: 1024px) {
            .gcs-hp-calc-wrapper {
                margin-left: auto !important; /* lg:ml-auto */
                max-width: 28rem !important; /* lg:max-w-md */
            }
        }

        /* bg-white rounded-xl shadow-2xl p-6 md:p-8 */
        .gcs-hp-calculator {
            background-color: #ffffff !important;
            border-radius: 0.75rem !important; /* rounded-xl */
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25) !important; /* shadow-2xl */
            padding: 1.5rem !important; /* p-6 */
        }

        @media (min-width: 768px) {
            .gcs-hp-calculator {
                padding: 2rem !important; /* md:p-8 */
            }
        }

        /* text-[#003D7A] mb-6 text-xl md:text-2xl */
        .gcs-hp-calc-title {
            font-size: 1.25rem !important; /* text-xl */
            line-height: 1.75rem !important;
            margin-bottom: 1.5rem !important; /* mb-6 */
            font-weight: 400 !important;
        }

        @media (min-width: 768px) {
            .gcs-hp-calc-title {
                font-size: 1.5rem !important; /* md:text-2xl */
                line-height: 2rem !important;
            }
        }

        /* space-y-6 */
        .gcs-hp-calc-content {
            display: flex !important;
            flex-direction: column !important;
            gap: 1.5rem !important; /* space-y-6 */
        }

        /* text-gray-700 mb-2 block */
        .gcs-hp-label {
            display: block !important;
            margin-bottom: 0.5rem !important; /* mb-2 */
            font-size: 0.875rem !important;
            font-weight: 500 !important;
        }

        /* flex justify-between items-center mb-2 */
        .gcs-hp-label-row {
            display: flex !important;
            justify-content: space-between !important;
            align-items: center !important;
            margin-bottom: 0.5rem !important; /* mb-2 */
        }

        /* Select wrapper */
        .gcs-hp-select-wrapper {
            position: relative !important;
        }

        /* w-full */
        .gcs-hp-select {
            width: 100% !important;
            padding: 0.5rem 2.25rem 0.5rem 0.75rem !important;
            background-color: #ffffff !important;
            border: 1px solid #e5e7eb !important;
            border-radius: 0.375rem !important;
            font-size: 0.875rem !important;
            color: #1f2937 !important;
            cursor: pointer !important;
            appearance: none !important;
            -webkit-appearance: none !important;
            -moz-appearance: none !important;
        }

        .gcs-hp-select:focus {
            outline: 2px solid transparent !important;
            outline-offset: 2px !important;
            border-color: #0066CC !important;
        }

        .gcs-hp-select-arrow {
            position: absolute !important;
            right: 0.75rem !important;
            top: 50% !important;
            transform: translateY(-50%) !important;
            pointer-events: none !important;
            color: #6b7280 !important;
        }

        /* Slider */
        .gcs-hp-slider {
            width: 100% !important;
            height: 1rem !important;
            background: transparent !important;
            outline: none !important;
            -webkit-appearance: none !important;
            appearance: none !important;
            cursor: pointer !important;
        }

        .gcs-hp-slider::-webkit-slider-track {
            width: 100% !important;
            height: 1rem !important;
            background: #e5e7eb !important;
            border-radius: 0.5rem !important;
        }

        .gcs-hp-slider::-webkit-slider-thumb {
            -webkit-appearance: none !important;
            appearance: none !important;
            width: 1rem !important;
            height: 1rem !important;
            background: #0066CC !important;
            border: 2px solid #ffffff !important;
            border-radius: 50% !important;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06) !important;
            cursor: pointer !important;
        }

        .gcs-hp-slider::-moz-range-track {
            width: 100% !important;
            height: 1rem !important;
            background: #e5e7eb !important;
            border-radius: 0.5rem !important;
        }

        .gcs-hp-slider::-moz-range-thumb {
            width: 1rem !important;
            height: 1rem !important;
            background: #0066CC !important;
            border: 2px solid #ffffff !important;
            border-radius: 50% !important;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06) !important;
            cursor: pointer !important;
        }

        /* flex justify-between text-xs text-gray-500 mt-1 */
        .gcs-hp-slider-labels {
            display: flex !important;
            justify-content: space-between !important;
            margin-top: 0.25rem !important; /* mt-1 */
        }

        /* bg-[#F5F7FA] rounded-lg p-4 space-y-3 */
        .gcs-hp-results {
            background-color: #F5F7FA !important;
            border-radius: 0.5rem !important; /* rounded-lg */
            padding: 1rem !important; /* p-4 */
            display: flex !important;
            flex-direction: column !important;
            gap: 0.75rem !important; /* space-y-3 */
        }

        /* flex justify-between items-center */
        .gcs-hp-result-row {
            display: flex !important;
            justify-content: space-between !important;
            align-items: center !important;
        }

        /* w-full */
        .gcs-hp-w-full {
            width: 100% !important;
        }

        /* text-center */
        .gcs-hp-disclaimer {
            text-align: center !important;
        }

        /* Global font family (Tailwind default) */
        .gcs-homepage-wrapper,
        .gcs-homepage-wrapper * {
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji" !important;
        }
    </style>

    <script>
        (function() {
            if (window.gcsHomepageInitialized) return;
            window.gcsHomepageInitialized = true;

            const header = document.querySelector('.gcs-hp-header');
            const mobileBtn = document.querySelector('.gcs-hp-mobile-btn');
            const mobileNav = document.querySelector('.gcs-hp-nav-mobile');

            // Header scroll
            function handleScroll() {
                if (window.scrollY > 20) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            }

            // Mobile menu
            function toggleMobile() {
                mobileBtn.classList.toggle('active');
                mobileNav.classList.toggle('active');
            }

            function closeMobile() {
                mobileBtn.classList.remove('active');
                mobileNav.classList.remove('active');
            }

            window.addEventListener('scroll', handleScroll);
            if (mobileBtn) mobileBtn.addEventListener('click', toggleMobile);

            document.querySelectorAll('.gcs-hp-nav-link-mobile').forEach(link => {
                link.addEventListener('click', closeMobile);
            });

            handleScroll();

            window.addEventListener('resize', () => {
                if (window.innerWidth >= 768) closeMobile();
            });

            // Calculator
            const creditType = document.getElementById('gcs-credit-type');
            const amount = document.getElementById('gcs-amount');
            const period = document.getElementById('gcs-period');
            const amountVal = document.getElementById('gcs-amount-value');
            const periodVal = document.getElementById('gcs-period-value');
            const monthly = document.getElementById('gcs-monthly-payment');
            const dae = document.getElementById('gcs-dae');

            const rates = {
                nevoi: 0.085,
                ipotecar: 0.065,
                auto: 0.075,
                juridice: 0.07,
                refinantare: 0.06,
                altele: 0.08
            };

            function formatNum(n) {
                return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
            }

            function calcPayment(p, r, m) {
                const mr = r / 12;
                return (p * mr * Math.pow(1 + mr, m)) / (Math.pow(1 + mr, m) - 1);
            }

            function calcDAE(r) {
                return ((r + 0.015) * 100).toFixed(2);
            }

            function update() {
                const ct = creditType.value;
                const a = parseInt(amount.value);
                const p = parseInt(period.value);

                amountVal.textContent = formatNum(a) + ' RON';
                periodVal.textContent = p + ' luni (' + Math.round(p / 12) + ' ani)';

                const r = rates[ct] || 0.07;
                const pay = calcPayment(a, r, p);
                const d = calcDAE(r);

                monthly.textContent = pay.toLocaleString('ro-RO', {minimumFractionDigits: 2, maximumFractionDigits: 2}) + ' RON';
                dae.textContent = d.replace('.', ',') + '%';
            }

            if (creditType) creditType.addEventListener('change', update);
            if (amount) amount.addEventListener('input', update);
            if (period) period.addEventListener('input', update);

            update();
        })();
    </script>

    <?php
    return ob_get_clean();
}

add_shortcode('gcs_homepage_hero', 'gcs_homepage_hero_shortcode');

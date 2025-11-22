<?php
/**
 * Global Credit Solutions - Homepage Header + Hero Shortcode
 *
 * Shortcode: [gcs_homepage_hero]
 *
 * This creates a combined header and hero section for the homepage with:
 * - Fixed header with scroll-based styling
 * - Logo switching (white/blue based on scroll)
 * - Mobile responsive menu
 * - Hero section with gradient background
 * - Interactive credit calculator
 * - Trust badges
 * - Fully isolated CSS and JS
 * - Exact Figma design match with !important flags
 */

function gcs_homepage_hero_shortcode() {
    ob_start();
    ?>

    <div class="gcs-homepage-wrapper">
        <!-- Fixed Header -->
        <header class="gcs-hp-header">
            <div class="gcs-hp-header-container">
                <div class="gcs-hp-header-content">
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
                        <a href="<?php echo home_url('/contact'); ?>" class="gcs-hp-btn-primary">Aplică Acum</a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <button class="gcs-hp-mobile-menu-btn" aria-label="Toggle menu">
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
                    <a href="<?php echo home_url('/contact'); ?>" class="gcs-hp-btn-primary gcs-hp-btn-mobile">Aplică Acum</a>
                </nav>
            </div>
        </header>

        <!-- Hero Section -->
        <section class="gcs-hp-hero">
            <!-- Background Pattern -->
            <div class="gcs-hp-bg-pattern"></div>

            <div class="gcs-hp-hero-container">
                <div class="gcs-hp-hero-grid">
                    <!-- Left Content -->
                    <div class="gcs-hp-hero-left">
                        <h1 class="gcs-hp-heading">Găsește rapid cel mai bun credit pentru nevoile tale</h1>
                        <p class="gcs-hp-subheading">Soluții de creditare personalizate | Comparare oferte de la 30+ bănci</p>

                        <div class="gcs-hp-cta-group">
                            <a href="<?php echo home_url('/contact'); ?>" class="gcs-hp-btn-white">Aplică Acum</a>
                            <button class="gcs-hp-btn-outline" onclick="document.getElementById('gcs-calculator').scrollIntoView({ behavior: 'smooth' })">Calculează rata ta</button>
                        </div>

                        <!-- Trust Badges -->
                        <div class="gcs-hp-trust-badges">
                            <div class="gcs-hp-badge">
                                <div class="gcs-hp-badge-icon">
                                    <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                    </svg>
                                </div>
                                <div class="gcs-hp-badge-text">
                                    <div class="gcs-hp-badge-title">Autorizat</div>
                                    <div class="gcs-hp-badge-subtext">ANPC</div>
                                </div>
                            </div>

                            <div class="gcs-hp-badge">
                                <div class="gcs-hp-badge-icon">
                                    <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                    </svg>
                                </div>
                                <div class="gcs-hp-badge-text">
                                    <div class="gcs-hp-badge-title">SSL</div>
                                    <div class="gcs-hp-badge-subtext">Certificat</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Content - Calculator -->
                    <div class="gcs-hp-hero-right">
                        <div id="gcs-calculator" class="gcs-hp-calculator">
                            <h3 class="gcs-hp-calc-title">Calculator Credit</h3>

                            <div class="gcs-hp-calc-content">
                                <!-- Credit Type -->
                                <div class="gcs-hp-form-group">
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
                                <div class="gcs-hp-form-group">
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
                                <div class="gcs-hp-form-group">
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
                                        <span class="gcs-hp-result-label">Rata lunară estimată:</span>
                                        <span class="gcs-hp-result-value" id="gcs-monthly-payment">1.234,56 RON</span>
                                    </div>
                                    <div class="gcs-hp-result-row">
                                        <span class="gcs-hp-result-label">DAE estimat:</span>
                                        <span class="gcs-hp-result-dae" id="gcs-dae">10,00%</span>
                                    </div>
                                </div>

                                <!-- CTA Button -->
                                <a href="<?php echo home_url('/contact'); ?>" class="gcs-hp-btn-calc">Vezi oferte personalizate</a>

                                <p class="gcs-hp-disclaimer">* Calculele sunt orientative și pot varia în funcție de banca selectată</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <style>
        /* ==================== RESET & WRAPPER ==================== */
        .gcs-homepage-wrapper {
            all: initial !important;
            display: block !important;
            font-family: 'Open Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif !important;
            line-height: 1.5 !important;
            -webkit-font-smoothing: antialiased !important;
            -moz-osx-font-smoothing: grayscale !important;
        }

        .gcs-homepage-wrapper *,
        .gcs-homepage-wrapper *::before,
        .gcs-homepage-wrapper *::after {
            box-sizing: border-box !important;
        }

        /* ==================== HEADER ==================== */
        .gcs-hp-header {
            position: fixed !important;
            top: 0 !important;
            left: 0 !important;
            right: 0 !important;
            z-index: 9999 !important;
            background-color: transparent !important;
            padding: 16px 0 !important;
            transition: all 0.3s ease-in-out !important;
            box-shadow: none !important;
        }

        .gcs-hp-header.scrolled {
            background-color: #ffffff !important;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06) !important;
            padding: 12px 0 !important;
        }

        .gcs-hp-header-container {
            width: 100% !important;
            max-width: 80rem !important;
            margin: 0 auto !important;
            padding: 0 16px !important;
        }

        .gcs-hp-header-content {
            display: flex !important;
            align-items: center !important;
            justify-content: space-between !important;
        }

        /* Logo */
        .gcs-hp-logo {
            display: flex !important;
            align-items: center !important;
            text-decoration: none !important;
            height: 40px !important;
            position: relative !important;
            min-width: 150px !important;
        }

        .gcs-hp-logo img {
            height: 40px !important;
            width: auto !important;
            max-width: none !important;
            transition: opacity 0.3s ease-in-out !important;
            position: absolute !important;
            top: 0 !important;
            left: 0 !important;
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

        /* Desktop Navigation */
        .gcs-hp-nav-desktop {
            display: none !important;
            align-items: center !important;
            gap: 32px !important;
        }

        @media (min-width: 768px) {
            .gcs-hp-nav-desktop {
                display: flex !important;
            }
        }

        .gcs-hp-nav-link {
            color: #ffffff !important;
            text-decoration: none !important;
            font-size: 16px !important;
            font-weight: 400 !important;
            transition: color 0.3s ease-in-out !important;
            background: none !important;
            border: none !important;
            cursor: pointer !important;
        }

        .gcs-hp-nav-link:hover {
            color: #0066CC !important;
        }

        .gcs-hp-header.scrolled .gcs-hp-nav-link {
            color: #374151 !important;
        }

        .gcs-hp-header.scrolled .gcs-hp-nav-link:hover {
            color: #0066CC !important;
        }

        /* CTA Desktop */
        .gcs-hp-cta-desktop {
            display: none !important;
        }

        @media (min-width: 768px) {
            .gcs-hp-cta-desktop {
                display: block !important;
            }
        }

        .gcs-hp-btn-primary {
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            background-color: #0066CC !important;
            color: #ffffff !important;
            padding: 8px 24px !important;
            height: 40px !important;
            border-radius: 8px !important;
            text-decoration: none !important;
            font-size: 16px !important;
            font-weight: 500 !important;
            transition: all 0.3s ease-in-out !important;
            border: none !important;
            cursor: pointer !important;
            text-align: center !important;
            line-height: 1.5 !important;
        }

        .gcs-hp-btn-primary:hover {
            background-color: #0052A3 !important;
            color: #ffffff !important;
        }

        /* Mobile Menu Button */
        .gcs-hp-mobile-menu-btn {
            display: flex !important;
            background: none !important;
            border: none !important;
            cursor: pointer !important;
            padding: 4px !important;
            color: #ffffff !important;
            transition: color 0.3s ease-in-out !important;
        }

        .gcs-hp-header.scrolled .gcs-hp-mobile-menu-btn {
            color: #003D7A !important;
        }

        @media (min-width: 768px) {
            .gcs-hp-mobile-menu-btn {
                display: none !important;
            }
        }

        .gcs-hp-menu-icon {
            display: block !important;
        }

        .gcs-hp-close-icon {
            display: none !important;
        }

        .gcs-hp-mobile-menu-btn.active .gcs-hp-menu-icon {
            display: none !important;
        }

        .gcs-hp-mobile-menu-btn.active .gcs-hp-close-icon {
            display: block !important;
        }

        /* Mobile Navigation */
        .gcs-hp-nav-mobile {
            display: none !important;
            flex-direction: column !important;
            gap: 16px !important;
            margin-top: 16px !important;
            padding: 16px !important;
            background-color: #ffffff !important;
            border-radius: 8px !important;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05) !important;
        }

        .gcs-hp-nav-mobile.active {
            display: flex !important;
        }

        @media (min-width: 768px) {
            .gcs-hp-nav-mobile {
                display: none !important;
            }
        }

        .gcs-hp-nav-link-mobile {
            color: #374151 !important;
            text-decoration: none !important;
            font-size: 16px !important;
            font-weight: 400 !important;
            padding: 8px 0 !important;
            transition: color 0.3s ease-in-out !important;
            text-align: left !important;
        }

        .gcs-hp-nav-link-mobile:hover {
            color: #0066CC !important;
        }

        .gcs-hp-btn-mobile {
            width: 100% !important;
        }

        /* ==================== HERO ==================== */
        .gcs-hp-hero {
            position: relative !important;
            background: linear-gradient(to bottom right, #003D7A 0%, #001f3f 100%) !important;
            padding: 128px 16px 64px !important;
            min-height: 600px !important;
            overflow: hidden !important;
        }

        @media (min-width: 768px) {
            .gcs-hp-hero {
                padding: 160px 16px 96px !important;
            }
        }

        /* Background Pattern */
        .gcs-hp-bg-pattern {
            position: absolute !important;
            top: 0 !important;
            right: 0 !important;
            bottom: 0 !important;
            left: 0 !important;
            opacity: 0.05 !important;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E") !important;
        }

        .gcs-hp-hero-container {
            max-width: 80rem !important;
            margin: 0 auto !important;
            position: relative !important;
        }

        .gcs-hp-hero-grid {
            display: grid !important;
            grid-template-columns: 1fr !important;
            gap: 48px !important;
            align-items: center !important;
        }

        @media (min-width: 1024px) {
            .gcs-hp-hero-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
            }
        }

        /* Hero Left Content */
        .gcs-hp-hero-left {
            color: #ffffff !important;
        }

        .gcs-hp-heading {
            font-family: 'Poppins', 'Montserrat', sans-serif !important;
            font-size: 1.875rem !important;
            font-weight: 600 !important;
            line-height: 1.2 !important;
            color: #ffffff !important;
            margin: 0 0 24px 0 !important;
            padding: 0 !important;
        }

        @media (min-width: 768px) {
            .gcs-hp-heading {
                font-size: 2.25rem !important;
            }
        }

        @media (min-width: 1024px) {
            .gcs-hp-heading {
                font-size: 3rem !important;
            }
        }

        .gcs-hp-subheading {
            font-size: 1.25rem !important;
            line-height: 1.75rem !important;
            color: #e5e7eb !important;
            margin: 0 0 32px 0 !important;
            padding: 0 !important;
        }

        /* CTA Group */
        .gcs-hp-cta-group {
            display: flex !important;
            flex-direction: column !important;
            gap: 16px !important;
            margin: 0 0 48px 0 !important;
            padding: 0 !important;
        }

        @media (min-width: 640px) {
            .gcs-hp-cta-group {
                flex-direction: row !important;
            }
        }

        .gcs-hp-btn-white {
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            gap: 8px !important;
            background-color: #ffffff !important;
            color: #003D7A !important;
            padding: 8px 24px !important;
            height: 40px !important;
            border-radius: 8px !important;
            text-decoration: none !important;
            font-size: 16px !important;
            font-weight: 500 !important;
            transition: all 0.3s ease-in-out !important;
            text-align: center !important;
            border: none !important;
            cursor: pointer !important;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05) !important;
        }

        .gcs-hp-btn-white:hover {
            background-color: #f3f4f6 !important;
            color: #003D7A !important;
        }

        .gcs-hp-btn-outline {
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            gap: 8px !important;
            background-color: transparent !important;
            color: #ffffff !important;
            padding: 8px 24px !important;
            height: 40px !important;
            border-radius: 8px !important;
            border: 2px solid #ffffff !important;
            font-size: 16px !important;
            font-weight: 500 !important;
            cursor: pointer !important;
            transition: all 0.3s ease-in-out !important;
            text-align: center !important;
            text-decoration: none !important;
        }

        .gcs-hp-btn-outline:hover {
            background-color: #ffffff !important;
            color: #003D7A !important;
        }

        /* Trust Badges */
        .gcs-hp-trust-badges {
            display: flex !important;
            flex-wrap: wrap !important;
            gap: 24px !important;
            align-items: center !important;
            margin: 48px 0 0 0 !important;
            padding: 0 !important;
        }

        .gcs-hp-badge {
            display: flex !important;
            align-items: center !important;
            gap: 8px !important;
        }

        .gcs-hp-badge-icon {
            width: 48px !important;
            height: 48px !important;
            background-color: rgba(255, 255, 255, 0.1) !important;
            border-radius: 8px !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            color: #ffffff !important;
            flex-shrink: 0 !important;
        }

        .gcs-hp-badge-icon svg {
            width: 24px !important;
            height: 24px !important;
            color: #ffffff !important;
        }

        .gcs-hp-badge-text {
            font-size: 14px !important;
            line-height: 1.25rem !important;
            color: #ffffff !important;
        }

        .gcs-hp-badge-title {
            font-weight: 500 !important;
            color: #ffffff !important;
        }

        .gcs-hp-badge-subtext {
            color: #d1d5db !important;
        }

        /* ==================== CALCULATOR ==================== */
        .gcs-hp-hero-right {
            width: 100% !important;
        }

        @media (min-width: 1024px) {
            .gcs-hp-hero-right {
                margin-left: auto !important;
                max-width: 448px !important;
            }
        }

        .gcs-hp-calculator {
            background-color: #ffffff !important;
            border-radius: 12px !important;
            padding: 24px !important;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25) !important;
        }

        @media (min-width: 768px) {
            .gcs-hp-calculator {
                padding: 32px !important;
            }
        }

        .gcs-hp-calc-title {
            font-family: 'Poppins', 'Montserrat', sans-serif !important;
            font-size: 1.25rem !important;
            font-weight: 600 !important;
            color: #003D7A !important;
            margin: 0 0 24px 0 !important;
            padding: 0 !important;
            line-height: 1.75rem !important;
        }

        @media (min-width: 768px) {
            .gcs-hp-calc-title {
                font-size: 1.5rem !important;
                line-height: 2rem !important;
            }
        }

        .gcs-hp-calc-content {
            display: flex !important;
            flex-direction: column !important;
            gap: 24px !important;
        }

        /* Form Group */
        .gcs-hp-form-group {
            display: flex !important;
            flex-direction: column !important;
            gap: 8px !important;
            margin: 0 !important;
            padding: 0 !important;
        }

        .gcs-hp-label {
            display: block !important;
            font-size: 14px !important;
            font-weight: 500 !important;
            line-height: 1.25rem !important;
            color: #374151 !important;
            margin: 0 0 8px 0 !important;
            padding: 0 !important;
        }

        .gcs-hp-label-row {
            display: flex !important;
            justify-content: space-between !important;
            align-items: center !important;
            margin: 0 0 8px 0 !important;
            padding: 0 !important;
        }

        .gcs-hp-value {
            font-size: 14px !important;
            font-weight: 500 !important;
            color: #0066CC !important;
        }

        /* Custom Select */
        .gcs-hp-select-wrapper {
            position: relative !important;
        }

        .gcs-hp-select {
            width: 100% !important;
            padding: 8px 36px 8px 12px !important;
            background-color: #ffffff !important;
            border: 1px solid #e5e7eb !important;
            border-radius: 6px !important;
            font-size: 14px !important;
            line-height: 1.25rem !important;
            color: #1f2937 !important;
            cursor: pointer !important;
            appearance: none !important;
            -webkit-appearance: none !important;
            -moz-appearance: none !important;
            transition: all 0.3s ease-in-out !important;
        }

        .gcs-hp-select:focus {
            outline: none !important;
            border-color: #0066CC !important;
            box-shadow: 0 0 0 3px rgba(0, 102, 204, 0.1) !important;
        }

        .gcs-hp-select-arrow {
            position: absolute !important;
            right: 12px !important;
            top: 50% !important;
            transform: translateY(-50%) !important;
            pointer-events: none !important;
            color: #6b7280 !important;
        }

        /* Custom Slider */
        .gcs-hp-slider {
            width: 100% !important;
            height: 16px !important;
            border-radius: 8px !important;
            background: #f3f4f6 !important;
            outline: none !important;
            -webkit-appearance: none !important;
            appearance: none !important;
            cursor: pointer !important;
            margin: 0 !important;
            padding: 0 !important;
        }

        .gcs-hp-slider::-webkit-slider-track {
            width: 100% !important;
            height: 16px !important;
            border-radius: 8px !important;
            background: #f3f4f6 !important;
        }

        .gcs-hp-slider::-webkit-slider-thumb {
            -webkit-appearance: none !important;
            appearance: none !important;
            width: 16px !important;
            height: 16px !important;
            border-radius: 50% !important;
            background: #0066CC !important;
            border: 3px solid #ffffff !important;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2) !important;
            cursor: pointer !important;
            transition: all 0.3s ease-in-out !important;
        }

        .gcs-hp-slider::-webkit-slider-thumb:hover {
            background: #0052A3 !important;
            transform: scale(1.1) !important;
        }

        .gcs-hp-slider::-moz-range-track {
            width: 100% !important;
            height: 16px !important;
            border-radius: 8px !important;
            background: #f3f4f6 !important;
        }

        .gcs-hp-slider::-moz-range-thumb {
            width: 16px !important;
            height: 16px !important;
            border-radius: 50% !important;
            background: #0066CC !important;
            border: 3px solid #ffffff !important;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2) !important;
            cursor: pointer !important;
            transition: all 0.3s ease-in-out !important;
        }

        .gcs-hp-slider::-moz-range-thumb:hover {
            background: #0052A3 !important;
            transform: scale(1.1) !important;
        }

        .gcs-hp-slider-labels {
            display: flex !important;
            justify-content: space-between !important;
            font-size: 12px !important;
            line-height: 1rem !important;
            color: #6b7280 !important;
            margin: 4px 0 0 0 !important;
            padding: 0 !important;
        }

        /* Results */
        .gcs-hp-results {
            background-color: #F5F7FA !important;
            border-radius: 8px !important;
            padding: 16px !important;
            display: flex !important;
            flex-direction: column !important;
            gap: 12px !important;
            margin: 0 !important;
        }

        .gcs-hp-result-row {
            display: flex !important;
            justify-content: space-between !important;
            align-items: center !important;
            margin: 0 !important;
            padding: 0 !important;
        }

        .gcs-hp-result-label {
            font-size: 14px !important;
            line-height: 1.25rem !important;
            color: #4b5563 !important;
        }

        .gcs-hp-result-value {
            font-size: 16px !important;
            font-weight: 600 !important;
            color: #003D7A !important;
            line-height: 1.5rem !important;
        }

        .gcs-hp-result-dae {
            font-size: 16px !important;
            font-weight: 600 !important;
            color: #0066CC !important;
            line-height: 1.5rem !important;
        }

        /* Calculator Button */
        .gcs-hp-btn-calc {
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            width: 100% !important;
            background-color: #0066CC !important;
            color: #ffffff !important;
            padding: 8px 24px !important;
            height: 40px !important;
            border-radius: 8px !important;
            text-decoration: none !important;
            font-size: 16px !important;
            font-weight: 500 !important;
            transition: all 0.3s ease-in-out !important;
            border: none !important;
            cursor: pointer !important;
            text-align: center !important;
            line-height: 1.5 !important;
        }

        .gcs-hp-btn-calc:hover {
            background-color: #0052A3 !important;
            color: #ffffff !important;
        }

        /* Disclaimer */
        .gcs-hp-disclaimer {
            font-size: 12px !important;
            line-height: 1rem !important;
            color: #6b7280 !important;
            text-align: center !important;
            margin: 0 !important;
            padding: 0 !important;
        }
    </style>

    <script>
        (function() {
            // Ensure script runs only once
            if (window.gcsHomepageInitialized) return;
            window.gcsHomepageInitialized = true;

            const header = document.querySelector('.gcs-hp-header');
            const mobileMenuBtn = document.querySelector('.gcs-hp-mobile-menu-btn');
            const mobileNav = document.querySelector('.gcs-hp-nav-mobile');
            let scrollTimeout;

            // ==================== HEADER FUNCTIONALITY ====================

            // Scroll handler
            function handleScroll() {
                clearTimeout(scrollTimeout);
                scrollTimeout = setTimeout(function() {
                    if (window.scrollY > 20) {
                        header.classList.add('scrolled');
                    } else {
                        header.classList.remove('scrolled');
                    }
                }, 10);
            }

            // Mobile menu toggle
            function toggleMobileMenu() {
                mobileMenuBtn.classList.toggle('active');
                mobileNav.classList.toggle('active');
            }

            // Close mobile menu
            function closeMobileMenu() {
                mobileMenuBtn.classList.remove('active');
                mobileNav.classList.remove('active');
            }

            // Event listeners
            window.addEventListener('scroll', handleScroll);

            if (mobileMenuBtn) {
                mobileMenuBtn.addEventListener('click', toggleMobileMenu);
            }

            // Close mobile menu when clicking links
            const mobileLinks = document.querySelectorAll('.gcs-hp-nav-link-mobile');
            mobileLinks.forEach(function(link) {
                link.addEventListener('click', closeMobileMenu);
            });

            // Initial check
            handleScroll();

            // Close mobile menu on resize
            window.addEventListener('resize', function() {
                if (window.innerWidth >= 768) {
                    closeMobileMenu();
                }
            });

            // ==================== CALCULATOR FUNCTIONALITY ====================

            const creditTypeSelect = document.getElementById('gcs-credit-type');
            const amountSlider = document.getElementById('gcs-amount');
            const periodSlider = document.getElementById('gcs-period');
            const amountValue = document.getElementById('gcs-amount-value');
            const periodValue = document.getElementById('gcs-period-value');
            const monthlyPayment = document.getElementById('gcs-monthly-payment');
            const daeValue = document.getElementById('gcs-dae');

            // Interest rates by credit type
            const interestRates = {
                nevoi: 0.085,
                ipotecar: 0.065,
                auto: 0.075,
                juridice: 0.07,
                refinantare: 0.06,
                altele: 0.08
            };

            // Format number with Romanian formatting
            function formatNumber(num) {
                return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
            }

            // Calculate monthly payment
            function calculateMonthlyPayment(principal, annualRate, months) {
                const monthlyRate = annualRate / 12;
                const payment = (principal * monthlyRate * Math.pow(1 + monthlyRate, months)) /
                               (Math.pow(1 + monthlyRate, months) - 1);
                return payment;
            }

            // Calculate DAE (adding fees)
            function calculateDAE(annualRate) {
                const dae = (annualRate + 0.015) * 100;
                return dae.toFixed(2);
            }

            // Update calculator
            function updateCalculator() {
                const creditType = creditTypeSelect.value;
                const amount = parseInt(amountSlider.value);
                const period = parseInt(periodSlider.value);

                // Update displayed values
                amountValue.textContent = formatNumber(amount) + ' RON';
                const years = Math.round(period / 12);
                periodValue.textContent = period + ' luni (' + years + ' ani)';

                // Calculate results
                const rate = interestRates[creditType] || 0.07;
                const payment = calculateMonthlyPayment(amount, rate, period);
                const dae = calculateDAE(rate);

                // Format payment with Romanian formatting
                const paymentFormatted = payment.toLocaleString('ro-RO', { minimumFractionDigits: 2, maximumFractionDigits: 2 });

                monthlyPayment.textContent = paymentFormatted + ' RON';
                daeValue.textContent = dae.replace('.', ',') + '%';
            }

            // Event listeners for calculator
            if (creditTypeSelect) creditTypeSelect.addEventListener('change', updateCalculator);
            if (amountSlider) amountSlider.addEventListener('input', updateCalculator);
            if (periodSlider) periodSlider.addEventListener('input', updateCalculator);

            // Initial calculation
            updateCalculator();
        })();
    </script>

    <?php
    return ob_get_clean();
}

add_shortcode('gcs_homepage_hero', 'gcs_homepage_hero_shortcode');

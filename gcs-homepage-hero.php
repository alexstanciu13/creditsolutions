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
                                    <div>Autorizat</div>
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
                                    <div>SSL</div>
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
                                <a href="<?php echo home_url('/contact'); ?>" class="gcs-hp-btn-primary gcs-hp-btn-full">Vezi oferte personalizate</a>

                                <p class="gcs-hp-disclaimer">* Calculele sunt orientative și pot varia în funcție de banca selectată</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <style>
        /* Reset and Wrapper Isolation */
        .gcs-homepage-wrapper {
            font-family: 'Open Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.5;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .gcs-homepage-wrapper * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        /* ==================== HEADER ==================== */
        .gcs-hp-header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 9999;
            background-color: transparent;
            padding: 16px 0;
            transition: all 0.3s ease-in-out;
            box-shadow: none;
        }

        .gcs-hp-header.scrolled {
            background-color: #ffffff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            padding: 12px 0;
        }

        .gcs-hp-header-container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 16px;
        }

        .gcs-hp-header-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        /* Logo */
        .gcs-hp-logo {
            display: flex;
            align-items: center;
            text-decoration: none;
            height: 40px;
            position: relative;
            min-width: 150px;
        }

        .gcs-hp-logo img {
            height: 40px;
            width: auto;
            transition: opacity 0.3s ease-in-out;
            position: absolute;
            top: 0;
            left: 0;
        }

        .gcs-hp-logo-white {
            opacity: 1;
        }

        .gcs-hp-logo-blue {
            opacity: 0;
        }

        .gcs-hp-header.scrolled .gcs-hp-logo-white {
            opacity: 0;
        }

        .gcs-hp-header.scrolled .gcs-hp-logo-blue {
            opacity: 1;
        }

        /* Desktop Navigation */
        .gcs-hp-nav-desktop {
            display: none;
            align-items: center;
            gap: 32px;
        }

        @media (min-width: 768px) {
            .gcs-hp-nav-desktop {
                display: flex;
            }
        }

        .gcs-hp-nav-link {
            color: #ffffff;
            text-decoration: none;
            font-size: 16px;
            font-weight: 400;
            transition: color 0.3s ease-in-out;
        }

        .gcs-hp-nav-link:hover {
            color: #0066CC;
        }

        .gcs-hp-header.scrolled .gcs-hp-nav-link {
            color: #4b5563;
        }

        .gcs-hp-header.scrolled .gcs-hp-nav-link:hover {
            color: #0066CC;
        }

        /* CTA Desktop */
        .gcs-hp-cta-desktop {
            display: none;
        }

        @media (min-width: 768px) {
            .gcs-hp-cta-desktop {
                display: block;
            }
        }

        .gcs-hp-btn-primary {
            display: inline-block;
            background-color: #0066CC;
            color: #ffffff;
            padding: 10px 24px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            transition: all 0.3s ease-in-out;
            border: none;
            cursor: pointer;
            text-align: center;
        }

        .gcs-hp-btn-primary:hover {
            background-color: #0052A3;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 102, 204, 0.3);
        }

        /* Mobile Menu Button */
        .gcs-hp-mobile-menu-btn {
            display: flex;
            background: none;
            border: none;
            cursor: pointer;
            padding: 4px;
            color: #ffffff;
            transition: color 0.3s ease-in-out;
        }

        .gcs-hp-header.scrolled .gcs-hp-mobile-menu-btn {
            color: #003D7A;
        }

        @media (min-width: 768px) {
            .gcs-hp-mobile-menu-btn {
                display: none;
            }
        }

        .gcs-hp-menu-icon {
            display: block;
        }

        .gcs-hp-close-icon {
            display: none;
        }

        .gcs-hp-mobile-menu-btn.active .gcs-hp-menu-icon {
            display: none;
        }

        .gcs-hp-mobile-menu-btn.active .gcs-hp-close-icon {
            display: block;
        }

        /* Mobile Navigation */
        .gcs-hp-nav-mobile {
            display: none;
            flex-direction: column;
            gap: 16px;
            margin-top: 16px;
            padding: 16px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .gcs-hp-nav-mobile.active {
            display: flex;
        }

        @media (min-width: 768px) {
            .gcs-hp-nav-mobile {
                display: none !important;
            }
        }

        .gcs-hp-nav-link-mobile {
            color: #4b5563;
            text-decoration: none;
            font-size: 16px;
            font-weight: 400;
            padding: 8px 0;
            transition: color 0.3s ease-in-out;
        }

        .gcs-hp-nav-link-mobile:hover {
            color: #0066CC;
        }

        .gcs-hp-btn-mobile {
            width: 100%;
        }

        /* ==================== HERO ==================== */
        .gcs-hp-hero {
            position: relative;
            background: linear-gradient(135deg, #003D7A 0%, #001f3f 100%);
            padding: 128px 16px 64px;
            min-height: 600px;
            overflow: hidden;
        }

        @media (min-width: 768px) {
            .gcs-hp-hero {
                padding: 160px 16px 96px;
            }
        }

        /* Background Pattern */
        .gcs-hp-bg-pattern {
            position: absolute;
            inset: 0;
            opacity: 0.05;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        .gcs-hp-hero-container {
            max-width: 1280px;
            margin: 0 auto;
            position: relative;
        }

        .gcs-hp-hero-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 48px;
            align-items: center;
        }

        @media (min-width: 1024px) {
            .gcs-hp-hero-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        /* Hero Left */
        .gcs-hp-hero-left {
            color: #ffffff;
        }

        .gcs-hp-heading {
            font-family: 'Poppins', 'Montserrat', sans-serif;
            font-size: 1.875rem;
            font-weight: 600;
            line-height: 1.2;
            color: #ffffff;
            margin-bottom: 24px;
        }

        @media (min-width: 768px) {
            .gcs-hp-heading {
                font-size: 2.25rem;
            }
        }

        @media (min-width: 1024px) {
            .gcs-hp-heading {
                font-size: 3rem;
            }
        }

        .gcs-hp-subheading {
            font-size: 1.25rem;
            color: #e5e7eb;
            margin-bottom: 32px;
        }

        /* CTA Group */
        .gcs-hp-cta-group {
            display: flex;
            flex-direction: column;
            gap: 16px;
            margin-bottom: 48px;
        }

        @media (min-width: 640px) {
            .gcs-hp-cta-group {
                flex-direction: row;
            }
        }

        .gcs-hp-btn-white {
            display: inline-block;
            background-color: #ffffff;
            color: #003D7A;
            padding: 12px 32px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            transition: all 0.3s ease-in-out;
            text-align: center;
        }

        .gcs-hp-btn-white:hover {
            background-color: #f3f4f6;
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .gcs-hp-btn-outline {
            display: inline-block;
            background-color: transparent;
            color: #ffffff;
            padding: 12px 32px;
            border-radius: 8px;
            border: 2px solid #ffffff;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            text-align: center;
        }

        .gcs-hp-btn-outline:hover {
            background-color: #ffffff;
            color: #003D7A;
            transform: translateY(-2px);
        }

        /* Trust Badges */
        .gcs-hp-trust-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 24px;
            align-items: center;
        }

        .gcs-hp-badge {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .gcs-hp-badge-icon {
            width: 48px;
            height: 48px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
        }

        .gcs-hp-badge-text {
            font-size: 14px;
            color: #ffffff;
        }

        .gcs-hp-badge-subtext {
            color: #d1d5db;
        }

        /* Calculator */
        .gcs-hp-hero-right {
            width: 100%;
        }

        @media (min-width: 1024px) {
            .gcs-hp-hero-right {
                margin-left: auto;
                max-width: 448px;
            }
        }

        .gcs-hp-calculator {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.4);
        }

        @media (min-width: 768px) {
            .gcs-hp-calculator {
                padding: 32px;
            }
        }

        .gcs-hp-calc-title {
            font-family: 'Poppins', 'Montserrat', sans-serif;
            font-size: 1.25rem;
            font-weight: 600;
            color: #003D7A;
            margin-bottom: 24px;
        }

        @media (min-width: 768px) {
            .gcs-hp-calc-title {
                font-size: 1.5rem;
            }
        }

        .gcs-hp-calc-content {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        /* Form Group */
        .gcs-hp-form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .gcs-hp-label {
            font-size: 14px;
            font-weight: 500;
            color: #4b5563;
        }

        .gcs-hp-label-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .gcs-hp-value {
            font-size: 14px;
            font-weight: 600;
            color: #0066CC;
        }

        /* Custom Select */
        .gcs-hp-select-wrapper {
            position: relative;
        }

        .gcs-hp-select {
            width: 100%;
            padding: 10px 36px 10px 12px;
            background-color: #f3f4f6;
            border: 1px solid #e5e7eb;
            border-radius: 4px;
            font-size: 14px;
            color: #1f2937;
            cursor: pointer;
            appearance: none;
            transition: all 0.3s ease-in-out;
        }

        .gcs-hp-select:focus {
            outline: none;
            border-color: #0066CC;
            box-shadow: 0 0 0 3px rgba(0, 102, 204, 0.1);
        }

        .gcs-hp-select-arrow {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
            color: #6b7280;
        }

        /* Custom Slider */
        .gcs-hp-slider {
            width: 100%;
            height: 6px;
            border-radius: 3px;
            background: #e5e7eb;
            outline: none;
            -webkit-appearance: none;
            cursor: pointer;
        }

        .gcs-hp-slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #0066CC;
            border: 3px solid #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        .gcs-hp-slider::-webkit-slider-thumb:hover {
            background: #0052A3;
            transform: scale(1.1);
        }

        .gcs-hp-slider::-moz-range-thumb {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #0066CC;
            border: 3px solid #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        .gcs-hp-slider::-moz-range-thumb:hover {
            background: #0052A3;
            transform: scale(1.1);
        }

        .gcs-hp-slider-labels {
            display: flex;
            justify-content: space-between;
            font-size: 12px;
            color: #6b7280;
            margin-top: 4px;
        }

        /* Results */
        .gcs-hp-results {
            background-color: #F5F7FA;
            border-radius: 8px;
            padding: 16px;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .gcs-hp-result-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .gcs-hp-result-label {
            font-size: 14px;
            color: #6b7280;
        }

        .gcs-hp-result-value {
            font-size: 16px;
            font-weight: 600;
            color: #003D7A;
        }

        .gcs-hp-result-dae {
            font-size: 16px;
            font-weight: 600;
            color: #0066CC;
        }

        /* Button Full Width */
        .gcs-hp-btn-full {
            width: 100%;
        }

        /* Disclaimer */
        .gcs-hp-disclaimer {
            font-size: 12px;
            color: #6b7280;
            text-align: center;
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

            // Format number with thousand separators
            function formatNumber(num) {
                return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
            }

            // Calculate monthly payment
            function calculateMonthlyPayment(principal, annualRate, months) {
                const monthlyRate = annualRate / 12;
                const payment = (principal * monthlyRate * Math.pow(1 + monthlyRate, months)) /
                               (Math.pow(1 + monthlyRate, months) - 1);
                return payment.toFixed(2);
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

                monthlyPayment.textContent = formatNumber(payment.replace('.', ',')) + ' RON';
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

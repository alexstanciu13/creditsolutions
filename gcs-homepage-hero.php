<?php
/**
 * Global Credit Solutions - Homepage Header + Hero Shortcode
 *
 * Shortcode: [gcs_homepage_hero]
 *
 * EXACT FIGMA DESIGN - Rebuilt from scratch
 * - Uses Globe icon logo exactly as in original TSX
 * - All Tailwind classes converted precisely
 * - No assumptions, no modifications
 */

function gcs_homepage_hero_shortcode() {
    ob_start();
    ?>

    <div class="gcs-hp-wrapper">
        <!-- Fixed Header -->
        <header class="gcs-hp-header">
            <div class="gcs-hp-container">
                <div class="gcs-hp-header-content">
                    <!-- Logo -->
                    <a href="<?php echo home_url(); ?>" class="gcs-hp-logo-btn">
                        <div class="gcs-hp-logo-circle">
                            <svg class="gcs-hp-logo-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="2" y1="12" x2="22" y2="12"></line>
                                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                            </svg>
                        </div>
                        <div class="gcs-hp-logo-text">Global Credit Solutions</div>
                    </a>

                    <!-- Desktop Navigation -->
                    <nav class="gcs-hp-nav-desktop">
                        <a href="<?php echo home_url(); ?>" class="gcs-hp-nav-link">Acasă</a>
                        <a href="<?php echo home_url('/despre'); ?>" class="gcs-hp-nav-link">Despre Noi</a>
                        <a href="<?php echo home_url('/servicii'); ?>" class="gcs-hp-nav-link">Servicii</a>
                        <a href="<?php echo home_url('/contact'); ?>" class="gcs-hp-nav-link">Contact</a>
                    </nav>

                    <!-- CTA Button Desktop -->
                    <div class="gcs-hp-cta-wrapper">
                        <a href="<?php echo home_url('/contact'); ?>" class="gcs-hp-btn-primary">Aplică Acum</a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <button class="gcs-hp-mobile-toggle" aria-label="Toggle menu">
                        <svg class="gcs-hp-menu-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="3" y1="12" x2="21" y2="12"></line>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg>
                        <svg class="gcs-hp-close-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>

                <!-- Mobile Menu -->
                <nav class="gcs-hp-mobile-menu">
                    <a href="<?php echo home_url(); ?>" class="gcs-hp-mobile-link">Acasă</a>
                    <a href="<?php echo home_url('/despre'); ?>" class="gcs-hp-mobile-link">Despre Noi</a>
                    <a href="<?php echo home_url('/servicii'); ?>" class="gcs-hp-mobile-link">Servicii</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="gcs-hp-mobile-link">Contact</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="gcs-hp-btn-primary gcs-hp-btn-full">Aplică Acum</a>
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
                    <div class="gcs-hp-hero-content">
                        <h1 class="gcs-hp-h1">Găsește rapid cel mai bun credit pentru nevoile tale</h1>
                        <p class="gcs-hp-subtitle">Soluții de creditare personalizate | Comparare oferte de la 30+ bănci</p>

                        <div class="gcs-hp-cta-group">
                            <a href="<?php echo home_url('/contact'); ?>" class="gcs-hp-btn-white">Aplică Acum</a>
                            <button class="gcs-hp-btn-outline" onclick="document.getElementById('gcs-calculator').scrollIntoView({ behavior: 'smooth' })">Calculează rata ta</button>
                        </div>

                        <!-- Trust Badges -->
                        <div class="gcs-hp-badges">
                            <div class="gcs-hp-badge">
                                <div class="gcs-hp-badge-icon">
                                    <svg class="gcs-hp-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                    </svg>
                                </div>
                                <div class="gcs-hp-badge-text">
                                    <div>Autorizat</div>
                                    <div class="gcs-hp-text-gray-300">ANPC</div>
                                </div>
                            </div>

                            <div class="gcs-hp-badge">
                                <div class="gcs-hp-badge-icon">
                                    <svg class="gcs-hp-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
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
                    <div class="gcs-hp-calc-outer">
                        <div id="gcs-calculator" class="gcs-hp-calculator">
                            <h3 class="gcs-hp-calc-title">Calculator Credit</h3>

                            <div class="gcs-hp-calc-body">
                                <!-- Credit Type -->
                                <div>
                                    <label class="gcs-hp-label">Tip Credit</label>
                                    <div class="gcs-hp-select-wrap">
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
                                        <span class="gcs-hp-text-primary" id="gcs-monthly">1.234,56 RON</span>
                                    </div>
                                    <div class="gcs-hp-result-row">
                                        <span class="gcs-hp-text-gray-600">DAE estimat:</span>
                                        <span class="gcs-hp-text-accent" id="gcs-dae">10,00%</span>
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
        /* ==================== RESET ==================== */
        .gcs-hp-wrapper {
            all: initial !important;
            display: block !important;
        }

        .gcs-hp-wrapper *,
        .gcs-hp-wrapper *::before,
        .gcs-hp-wrapper *::after {
            box-sizing: border-box !important;
            margin: 0 !important;
            padding: 0 !important;
            border: 0 !important;
            font-size: 100% !important;
            font: inherit !important;
            vertical-align: baseline !important;
        }

        /* SVG reset */
        .gcs-hp-wrapper svg {
            display: inline-block !important;
            vertical-align: middle !important;
            overflow: visible !important;
        }

        /* Remove all link styles */
        .gcs-hp-wrapper a {
            background-color: transparent !important;
            text-decoration: none !important;
        }

        /* Remove list styles */
        .gcs-hp-wrapper ul,
        .gcs-hp-wrapper ol {
            list-style: none !important;
        }

        /* Remove button/input defaults */
        .gcs-hp-wrapper button,
        .gcs-hp-wrapper input,
        .gcs-hp-wrapper select,
        .gcs-hp-wrapper textarea {
            font-family: inherit !important;
            font-size: 100% !important;
            line-height: 1.15 !important;
            margin: 0 !important;
            padding: 0 !important;
            border: 0 !important;
            background: none !important;
        }

        /* Remove button defaults */
        .gcs-hp-wrapper button {
            overflow: visible !important;
            text-transform: none !important;
            -webkit-appearance: button !important;
        }

        /* Global font */
        .gcs-hp-wrapper,
        .gcs-hp-wrapper * {
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif !important;
            text-rendering: optimizeLegibility !important;
            -webkit-font-smoothing: antialiased !important;
            -moz-osx-font-smoothing: grayscale !important;
        }

        /* ==================== HEADER ==================== */
        /* fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-transparent py-4 */
        .gcs-hp-header {
            position: fixed !important;
            top: 0 !important;
            left: 0 !important;
            right: 0 !important;
            z-index: 50 !important;
            transition-property: all !important;
            transition-duration: 300ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            background-color: transparent !important;
            padding-top: 1rem !important; /* py-4 */
            padding-bottom: 1rem !important;
        }

        /* bg-white shadow-md py-3 */
        .gcs-hp-header.scrolled {
            background-color: #ffffff !important;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06) !important;
            padding-top: 0.75rem !important; /* py-3 */
            padding-bottom: 0.75rem !important;
        }

        /* container mx-auto px-4 */
        .gcs-hp-container {
            width: 100% !important;
            max-width: 80rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }

        /* flex items-center justify-between */
        .gcs-hp-header-content {
            display: flex !important;
            align-items: center !important;
            justify-content: space-between !important;
        }

        /* ==================== LOGO ==================== */
        /* flex items-center gap-2 */
        .gcs-hp-logo-btn {
            display: flex !important;
            align-items: center !important;
            gap: 0.5rem !important; /* gap-2 */
            text-decoration: none !important;
            cursor: pointer !important;
        }

        /* w-10 h-10 rounded-full bg-white / bg-[#003D7A] */
        .gcs-hp-logo-circle {
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            width: 2.5rem !important; /* w-10 */
            height: 2.5rem !important; /* h-10 */
            border-radius: 50% !important; /* rounded-full */
            background-color: #ffffff !important; /* bg-white when not scrolled */
            transition-property: background-color !important;
            transition-duration: 300ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
        }

        .gcs-hp-header.scrolled .gcs-hp-logo-circle {
            background-color: #003D7A !important; /* bg-[#003D7A] when scrolled */
        }

        /* w-6 h-6 text-[#003D7A] / text-white */
        .gcs-hp-logo-icon {
            width: 1.5rem !important; /* w-6 */
            height: 1.5rem !important; /* h-6 */
            color: #003D7A !important; /* text-[#003D7A] when not scrolled */
            transition-property: color !important;
            transition-duration: 300ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
        }

        .gcs-hp-header.scrolled .gcs-hp-logo-icon {
            color: #ffffff !important; /* text-white when scrolled */
        }

        /* Logo text - transition-colors text-white / text-[#003D7A] */
        .gcs-hp-logo-text {
            transition-property: color !important;
            transition-duration: 300ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            color: #ffffff !important; /* text-white when not scrolled */
            font-size: 1rem !important;
            font-weight: 400 !important;
        }

        .gcs-hp-header.scrolled .gcs-hp-logo-text {
            color: #003D7A !important; /* text-[#003D7A] when scrolled */
        }

        /* ==================== NAVIGATION ==================== */
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

        /* transition-colors hover:text-[#0066CC] text-white / text-gray-700 */
        .gcs-hp-nav-link {
            transition-property: color !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            color: #ffffff !important; /* text-white when not scrolled */
            text-decoration: none !important;
            font-size: 1rem !important;
        }

        .gcs-hp-nav-link:hover {
            color: #0066CC !important;
        }

        .gcs-hp-header.scrolled .gcs-hp-nav-link {
            color: #374151 !important; /* text-gray-700 when scrolled */
        }

        /* ==================== CTA BUTTON ==================== */
        /* hidden md:block */
        .gcs-hp-cta-wrapper {
            display: none !important;
        }

        @media (min-width: 768px) {
            .gcs-hp-cta-wrapper {
                display: block !important;
            }
        }

        /* bg-[#0066CC] hover:bg-[#0052A3] text-white rounded-lg */
        .gcs-hp-btn-primary {
            display: inline-flex !important;
            height: 2.5rem !important; /* h-10 (size="lg") */
            align-items: center !important;
            justify-content: center !important;
            padding-left: 1.5rem !important; /* px-6 */
            padding-right: 1.5rem !important;
            padding-top: 0.5rem !important; /* py-2 */
            padding-bottom: 0.5rem !important;
            background-color: #0066CC !important;
            color: #ffffff !important;
            border-radius: 0.5rem !important; /* rounded-lg */
            font-size: 0.875rem !important;
            font-weight: 500 !important;
            text-decoration: none !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            border: none !important;
            cursor: pointer !important;
        }

        .gcs-hp-btn-primary:hover {
            background-color: #0052A3 !important;
        }

        /* w-full */
        .gcs-hp-btn-full {
            width: 100% !important;
        }

        /* ==================== MOBILE MENU ==================== */
        /* md:hidden */
        .gcs-hp-mobile-toggle {
            display: flex !important;
            background: none !important;
            border: none !important;
            cursor: pointer !important;
            padding: 0.25rem !important;
        }

        @media (min-width: 768px) {
            .gcs-hp-mobile-toggle {
                display: none !important;
            }
        }

        /* w-6 h-6 */
        .gcs-hp-menu-icon,
        .gcs-hp-close-icon {
            width: 1.5rem !important;
            height: 1.5rem !important;
            color: #ffffff !important;
            transition-property: color !important;
            transition-duration: 300ms !important;
        }

        .gcs-hp-header.scrolled .gcs-hp-menu-icon,
        .gcs-hp-header.scrolled .gcs-hp-close-icon {
            color: #003D7A !important;
        }

        .gcs-hp-menu-icon {
            display: block !important;
        }

        .gcs-hp-close-icon {
            display: none !important;
        }

        .gcs-hp-mobile-toggle.active .gcs-hp-menu-icon {
            display: none !important;
        }

        .gcs-hp-mobile-toggle.active .gcs-hp-close-icon {
            display: block !important;
        }

        /* md:hidden mt-4 pb-4 flex flex-col gap-4 bg-white rounded-lg shadow-lg p-4 */
        .gcs-hp-mobile-menu {
            display: none !important;
        }

        .gcs-hp-mobile-menu.open {
            display: flex !important;
            flex-direction: column !important;
            gap: 1rem !important; /* gap-4 */
            margin-top: 1rem !important; /* mt-4 */
            padding: 1rem !important; /* p-4 */
            padding-bottom: 1rem !important; /* pb-4 */
            background-color: #ffffff !important;
            border-radius: 0.5rem !important; /* rounded-lg */
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05) !important; /* shadow-lg */
        }

        @media (min-width: 768px) {
            .gcs-hp-mobile-menu {
                display: none !important;
            }
        }

        /* text-gray-700 hover:text-[#0066CC] text-left */
        .gcs-hp-mobile-link {
            color: #374151 !important; /* text-gray-700 */
            text-decoration: none !important;
            text-align: left !important;
            font-size: 1rem !important;
            padding: 0.5rem 0 !important;
            transition-property: color !important;
            transition-duration: 150ms !important;
        }

        .gcs-hp-mobile-link:hover {
            color: #0066CC !important;
        }

        /* ==================== HERO SECTION ==================== */
        /* relative bg-gradient-to-br from-[#003D7A] to-[#001f3f] pt-32 pb-16 md:pt-40 md:pb-24 */
        .gcs-hp-hero {
            position: relative !important;
            background-image: linear-gradient(to bottom right, #003D7A, #001f3f) !important;
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
            grid-template-columns: repeat(1, minmax(0, 1fr)) !important;
            gap: 3rem !important; /* gap-12 */
            align-items: center !important;
        }

        @media (min-width: 1024px) {
            .gcs-hp-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr)) !important; /* lg:grid-cols-2 */
            }
        }

        /* ==================== HERO CONTENT ==================== */
        /* text-white */
        .gcs-hp-hero-content {
            color: #ffffff !important;
        }

        /* text-white mb-6 text-3xl md:text-4xl lg:text-5xl */
        .gcs-hp-h1 {
            color: #ffffff !important;
            margin-bottom: 1.5rem !important; /* mb-6 */
            font-size: 1.875rem !important; /* text-3xl */
            line-height: 2.25rem !important;
            font-weight: 400 !important;
            margin-top: 0 !important;
        }

        @media (min-width: 768px) {
            .gcs-hp-h1 {
                font-size: 2.25rem !important; /* md:text-4xl */
                line-height: 2.5rem !important;
            }
        }

        @media (min-width: 1024px) {
            .gcs-hp-h1 {
                font-size: 3rem !important; /* lg:text-5xl */
                line-height: 1 !important;
            }
        }

        /* text-xl text-gray-200 mb-8 */
        .gcs-hp-subtitle {
            font-size: 1.25rem !important; /* text-xl */
            line-height: 1.75rem !important;
            color: #e5e7eb !important; /* text-gray-200 */
            margin-bottom: 2rem !important; /* mb-8 */
            margin-top: 0 !important;
        }

        /* ==================== CTA BUTTONS ==================== */
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

        /* bg-white text-[#003D7A] hover:bg-gray-100 rounded-lg shadow-lg */
        .gcs-hp-btn-white {
            display: inline-flex !important;
            height: 2.5rem !important; /* size="lg" h-10 */
            align-items: center !important;
            justify-content: center !important;
            padding-left: 1.5rem !important;
            padding-right: 1.5rem !important;
            padding-top: 0.5rem !important;
            padding-bottom: 0.5rem !important;
            background-color: #ffffff !important;
            color: #003D7A !important;
            border-radius: 0.5rem !important; /* rounded-lg */
            font-size: 0.875rem !important;
            font-weight: 500 !important;
            text-decoration: none !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05) !important; /* shadow-lg */
            border: none !important;
            cursor: pointer !important;
        }

        .gcs-hp-btn-white:hover {
            background-color: #f3f4f6 !important; /* hover:bg-gray-100 */
        }

        /* border-2 border-white text-white bg-transparent hover:bg-white hover:text-[#003D7A] */
        .gcs-hp-btn-outline {
            display: inline-flex !important;
            height: 2.5rem !important;
            align-items: center !important;
            justify-content: center !important;
            padding-left: 1.5rem !important;
            padding-right: 1.5rem !important;
            padding-top: 0.5rem !important;
            padding-bottom: 0.5rem !important;
            border: 2px solid #ffffff !important; /* border-2 border-white */
            color: #ffffff !important;
            background-color: transparent !important;
            border-radius: 0.5rem !important;
            font-size: 0.875rem !important;
            font-weight: 500 !important;
            text-decoration: none !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            cursor: pointer !important;
        }

        .gcs-hp-btn-outline:hover {
            background-color: #ffffff !important;
            color: #003D7A !important;
        }

        /* ==================== TRUST BADGES ==================== */
        /* mt-12 flex flex-wrap gap-6 items-center */
        .gcs-hp-badges {
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
        }

        /* w-6 h-6 text-white */
        .gcs-hp-icon {
            width: 1.5rem !important; /* w-6 */
            height: 1.5rem !important; /* h-6 */
            color: #ffffff !important;
        }

        /* text-sm */
        .gcs-hp-badge-text {
            font-size: 0.875rem !important; /* text-sm */
            line-height: 1.25rem !important;
            color: #ffffff !important;
        }

        /* text-gray-300 */
        .gcs-hp-text-gray-300 {
            color: #d1d5db !important; /* text-gray-300 */
        }

        /* ==================== CALCULATOR ==================== */
        /* lg:ml-auto w-full lg:max-w-md */
        .gcs-hp-calc-outer {
            width: 100% !important; /* w-full */
        }

        @media (min-width: 1024px) {
            .gcs-hp-calc-outer {
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
            color: #003D7A !important;
            margin-bottom: 1.5rem !important; /* mb-6 */
            font-size: 1.25rem !important; /* text-xl */
            line-height: 1.75rem !important;
            font-weight: 400 !important;
            margin-top: 0 !important;
        }

        @media (min-width: 768px) {
            .gcs-hp-calc-title {
                font-size: 1.5rem !important; /* md:text-2xl */
                line-height: 2rem !important;
            }
        }

        /* space-y-6 */
        .gcs-hp-calc-body {
            display: flex !important;
            flex-direction: column !important;
            gap: 1.5rem !important; /* space-y-6 */
        }

        /* text-gray-700 mb-2 block */
        .gcs-hp-label {
            color: #374151 !important; /* text-gray-700 */
            margin-bottom: 0.5rem !important; /* mb-2 */
            display: block !important;
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

        /* text-[#0066CC] */
        .gcs-hp-value {
            color: #0066CC !important;
            font-size: 0.875rem !important;
        }

        /* Select */
        .gcs-hp-select-wrap {
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
            font-size: 0.75rem !important; /* text-xs */
            line-height: 1rem !important;
            color: #6b7280 !important; /* text-gray-500 */
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

        /* text-gray-600 */
        .gcs-hp-text-gray-600 {
            color: #4b5563 !important;
            font-size: 0.875rem !important;
        }

        /* text-[#003D7A] */
        .gcs-hp-text-primary {
            color: #003D7A !important;
            font-size: 0.875rem !important;
            font-weight: 500 !important;
        }

        /* text-[#0066CC] */
        .gcs-hp-text-accent {
            color: #0066CC !important;
            font-size: 0.875rem !important;
            font-weight: 500 !important;
        }

        /* text-xs text-gray-500 text-center */
        .gcs-hp-disclaimer {
            font-size: 0.75rem !important; /* text-xs */
            line-height: 1rem !important;
            color: #6b7280 !important; /* text-gray-500 */
            text-align: center !important;
            margin: 0 !important;
        }
    </style>

    <script>
        (function() {
            if (window.gcsHpInit) return;
            window.gcsHpInit = true;

            const header = document.querySelector('.gcs-hp-header');
            const mobileToggle = document.querySelector('.gcs-hp-mobile-toggle');
            const mobileMenu = document.querySelector('.gcs-hp-mobile-menu');

            // Header scroll effect
            function handleScroll() {
                if (window.scrollY > 20) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            }

            window.addEventListener('scroll', handleScroll);
            handleScroll();

            // Mobile menu toggle
            if (mobileToggle) {
                mobileToggle.addEventListener('click', function() {
                    mobileToggle.classList.toggle('active');
                    mobileMenu.classList.toggle('open');
                });
            }

            // Close mobile menu when link clicked
            const mobileLinks = document.querySelectorAll('.gcs-hp-mobile-link');
            mobileLinks.forEach(link => {
                link.addEventListener('click', function() {
                    mobileToggle.classList.remove('active');
                    mobileMenu.classList.remove('open');
                });
            });

            // Close on resize
            window.addEventListener('resize', function() {
                if (window.innerWidth >= 768) {
                    mobileToggle.classList.remove('active');
                    mobileMenu.classList.remove('open');
                }
            });

            // Calculator
            const creditType = document.getElementById('gcs-credit-type');
            const amount = document.getElementById('gcs-amount');
            const period = document.getElementById('gcs-period');
            const amountVal = document.getElementById('gcs-amount-value');
            const periodVal = document.getElementById('gcs-period-value');
            const monthly = document.getElementById('gcs-monthly');
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

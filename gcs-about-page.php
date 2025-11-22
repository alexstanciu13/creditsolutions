<?php
/**
 * Global Credit Solutions - About Page Shortcode
 *
 * Shortcode: [gcs_about_page]
 *
 * EXACT FIGMA DESIGN - Complete About page with header
 * - All Tailwind classes converted precisely
 * - Complete theme isolation with !important on EVERY property
 */

function gcs_about_page_shortcode() {
    ob_start();
    ?>

    <div class="gcs-about-wrapper">

        <!-- ==================== HEADER ==================== -->
        <!-- Fixed Header -->
        <header class="gcs-about-header">
            <div class="gcs-about-container">
                <div class="gcs-about-header-content">
                    <!-- Logo -->
                    <a href="<?php echo home_url(); ?>" class="gcs-about-logo-btn">
                        <img
                            src="https://creditsolutions.ro/wp-content/uploads/2025/11/logo-alb.png"
                            alt="Global Credit Solutions"
                            class="gcs-about-logo-img gcs-about-logo-white"
                        />
                        <img
                            src="https://creditsolutions.ro/wp-content/uploads/2025/11/logo-blue.png"
                            alt="Global Credit Solutions"
                            class="gcs-about-logo-img gcs-about-logo-blue"
                        />
                    </a>

                    <!-- Desktop Navigation -->
                    <nav class="gcs-about-nav-desktop">
                        <a href="<?php echo home_url(); ?>" class="gcs-about-nav-link">Acasă</a>
                        <a href="<?php echo home_url('/despre'); ?>" class="gcs-about-nav-link">Despre Noi</a>
                        <a href="<?php echo home_url('/servicii'); ?>" class="gcs-about-nav-link">Servicii</a>
                        <a href="<?php echo home_url('/contact'); ?>" class="gcs-about-nav-link">Contact</a>
                    </nav>

                    <!-- CTA Button Desktop -->
                    <div class="gcs-about-cta-wrapper">
                        <a href="<?php echo home_url('/contact'); ?>" class="gcs-about-btn-primary">Aplică Acum</a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <button class="gcs-about-mobile-toggle" aria-label="Toggle menu">
                        <svg class="gcs-about-menu-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="3" y1="12" x2="21" y2="12"></line>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg>
                        <svg class="gcs-about-close-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>

                <!-- Mobile Menu -->
                <nav class="gcs-about-mobile-menu">
                    <a href="<?php echo home_url(); ?>" class="gcs-about-mobile-link">Acasă</a>
                    <a href="<?php echo home_url('/despre'); ?>" class="gcs-about-mobile-link">Despre Noi</a>
                    <a href="<?php echo home_url('/servicii'); ?>" class="gcs-about-mobile-link">Servicii</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="gcs-about-mobile-link">Contact</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="gcs-about-btn-primary gcs-about-btn-full">Aplică Acum</a>
                </nav>
            </div>
        </header>

        <!-- ==================== HERO SECTION ==================== -->
        <!-- bg-gradient-to-br from-[#003D7A] to-[#001f3f] pt-32 pb-16 md:pt-40 md:pb-24 -->
        <section class="gcs-about-hero">
            <div class="gcs-about-container">
                <!-- max-w-3xl mx-auto text-center text-white -->
                <div class="gcs-about-hero-content">
                    <!-- mb-6 text-3xl md:text-4xl lg:text-5xl -->
                    <h1 class="gcs-about-hero-title">
                        Despre Global Credit Solutions
                    </h1>
                    <!-- text-xl text-gray-200 mb-8 -->
                    <p class="gcs-about-hero-subtitle">
                        Suntem mai mult decât un broker de credite. Suntem partenerii tăi
                        de încredere în realizarea proiectelor tale financiare.
                    </p>
                </div>
            </div>
        </section>

        <!-- ==================== STATS SECTION ==================== -->
        <!-- py-16 bg-white -->
        <section class="gcs-about-stats-section">
            <div class="gcs-about-container">
                <!-- grid grid-cols-2 md:grid-cols-4 gap-8 -->
                <div class="gcs-about-stats-grid">
                    <div class="gcs-about-stat">
                        <div class="gcs-about-stat-value">65,000+</div>
                        <div class="gcs-about-stat-label">Clienți mulțumiți</div>
                    </div>
                    <div class="gcs-about-stat">
                        <div class="gcs-about-stat-value">30+</div>
                        <div class="gcs-about-stat-label">Parteneri bancari</div>
                    </div>
                    <div class="gcs-about-stat">
                        <div class="gcs-about-stat-value">15+</div>
                        <div class="gcs-about-stat-label">Ani de experiență</div>
                    </div>
                    <div class="gcs-about-stat">
                        <div class="gcs-about-stat-value">98%</div>
                        <div class="gcs-about-stat-label">Rată de aprobare</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== STORY SECTION ==================== -->
        <!-- py-16 bg-[#F5F7FA] -->
        <section class="gcs-about-story-section">
            <div class="gcs-about-container">
                <!-- max-w-4xl mx-auto -->
                <div class="gcs-about-story-content">
                    <div class="gcs-about-section-header">
                        <h2 class="gcs-about-section-title">Povestea Noastră</h2>
                    </div>
                    <div class="gcs-about-prose">
                        <p class="gcs-about-text">
                            Global Credit Solutions a fost fondată în 2010 cu o misiune simplă
                            dar ambițioasă: să democratizăm accesul la credite și să facem
                            procesul de creditare transparent, rapid și eficient pentru toți
                            românii.
                        </p>
                        <p class="gcs-about-text">
                            În cei peste 15 ani de activitate, am ajutat peste 65,000 de
                            persoane și companii să își realizeze visurile - de la achiziția
                            primei locuințe, la extinderea afacerilor, până la consolidarea
                            datoriilor pentru o viață financiară mai liniștită.
                        </p>
                        <p class="gcs-about-text">
                            Astăzi, colaborăm cu peste 30 de instituții financiare din România
                            și avem una dintre cele mai ridicate rate de aprobare din industrie.
                            Secretul nostru? Expertise, dedicare și o abordare centrată pe
                            client.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== MISSION & VISION ==================== -->
        <!-- py-16 bg-white -->
        <section class="gcs-about-mission-section">
            <div class="gcs-about-container">
                <!-- grid md:grid-cols-2 gap-12 max-w-5xl mx-auto -->
                <div class="gcs-about-mission-grid">
                    <!-- Mission -->
                    <div class="gcs-about-mission-item">
                        <div class="gcs-about-icon-circle">
                            <svg class="gcs-about-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <circle cx="12" cy="12" r="6"></circle>
                                <circle cx="12" cy="12" r="2"></circle>
                            </svg>
                        </div>
                        <h3 class="gcs-about-mission-title">Misiunea Noastră</h3>
                        <p class="gcs-about-mission-text">
                            Să oferim fiecărui client acces la cele mai bune soluții de
                            creditare de pe piață, prin consultanță personalizată, transparență
                            totală și un serviciu de excelență care depășește așteptările.
                        </p>
                    </div>
                    <!-- Vision -->
                    <div class="gcs-about-mission-item">
                        <div class="gcs-about-icon-circle">
                            <svg class="gcs-about-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                <polyline points="16 7 22 7 22 13"></polyline>
                            </svg>
                        </div>
                        <h3 class="gcs-about-mission-title">Viziunea Noastră</h3>
                        <p class="gcs-about-mission-text">
                            Să devenim liderul pieței de brokeraj financiar din România,
                            recunoscut pentru integritate, inovație și impactul pozitiv asupra
                            vieții clienților noștri și a comunității.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== VALUES SECTION ==================== -->
        <!-- py-16 bg-[#F5F7FA] -->
        <section class="gcs-about-values-section">
            <div class="gcs-about-container">
                <div class="gcs-about-section-header">
                    <h2 class="gcs-about-section-title">Valorile Noastre</h2>
                    <p class="gcs-about-section-subtitle">
                        Principiile care ne ghidează fiecare decizie și interacțiune cu
                        clienții noștri.
                    </p>
                </div>
                <!-- grid md:grid-cols-2 lg:grid-cols-4 gap-8 -->
                <div class="gcs-about-values-grid">
                    <!-- Value 1: Transparență -->
                    <div class="gcs-about-value-card">
                        <div class="gcs-about-value-icon-wrapper">
                            <svg class="gcs-about-value-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            </svg>
                        </div>
                        <h3 class="gcs-about-value-title">Transparență</h3>
                        <p class="gcs-about-value-text">Oferim informații clare și complete despre toate ofertele de creditare.</p>
                    </div>
                    <!-- Value 2: Integritate -->
                    <div class="gcs-about-value-card">
                        <div class="gcs-about-value-icon-wrapper">
                            <svg class="gcs-about-value-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20.42 4.58a5.4 5.4 0 0 0-7.65 0l-.77.78-.77-.78a5.4 5.4 0 0 0-7.65 0C1.46 6.7 1.33 10.28 4 13l8 8 8-8c2.67-2.72 2.54-6.3.42-8.42z"></path>
                            </svg>
                        </div>
                        <h3 class="gcs-about-value-title">Integritate</h3>
                        <p class="gcs-about-value-text">Acționăm întotdeauna în interesul clienților noștri, nu al băncilor.</p>
                    </div>
                    <!-- Value 3: Profesionalism -->
                    <div class="gcs-about-value-card">
                        <div class="gcs-about-value-icon-wrapper">
                            <svg class="gcs-about-value-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="8" r="7"></circle>
                                <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline>
                            </svg>
                        </div>
                        <h3 class="gcs-about-value-title">Profesionalism</h3>
                        <p class="gcs-about-value-text">Echipa noastră are certificări și experiență în domeniul financiar-bancar.</p>
                    </div>
                    <!-- Value 4: Inovație -->
                    <div class="gcs-about-value-card">
                        <div class="gcs-about-value-icon-wrapper">
                            <svg class="gcs-about-value-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                <polyline points="16 7 22 7 22 13"></polyline>
                            </svg>
                        </div>
                        <h3 class="gcs-about-value-title">Inovație</h3>
                        <p class="gcs-about-value-text">Folosim tehnologie modernă pentru a simplifica procesul de creditare.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== TEAM SECTION ==================== -->
        <!-- py-16 bg-white -->
        <section class="gcs-about-team-section">
            <div class="gcs-about-container">
                <div class="gcs-about-section-header">
                    <h2 class="gcs-about-section-title">Echipa Noastră</h2>
                    <p class="gcs-about-section-subtitle">
                        Profesioniști cu experiență vastă în domeniul financiar-bancar,
                        dedicați succesului tău.
                    </p>
                </div>
                <!-- grid md:grid-cols-2 lg:grid-cols-4 gap-8 -->
                <div class="gcs-about-team-grid">
                    <!-- Team Member 1 -->
                    <div class="gcs-about-team-card">
                        <div class="gcs-about-team-avatar">
                            <svg class="gcs-about-team-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </div>
                        <h3 class="gcs-about-team-name">Ana Popescu</h3>
                        <div class="gcs-about-team-role">CEO & Fondator</div>
                        <p class="gcs-about-team-desc">15 ani de experiență în sectorul bancar și consultanță financiară.</p>
                    </div>
                    <!-- Team Member 2 -->
                    <div class="gcs-about-team-card">
                        <div class="gcs-about-team-avatar">
                            <svg class="gcs-about-team-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </div>
                        <h3 class="gcs-about-team-name">Mihai Ionescu</h3>
                        <div class="gcs-about-team-role">Director Operations</div>
                        <p class="gcs-about-team-desc">Expert în procesarea și optimizarea aplicațiilor de credit.</p>
                    </div>
                    <!-- Team Member 3 -->
                    <div class="gcs-about-team-card">
                        <div class="gcs-about-team-avatar">
                            <svg class="gcs-about-team-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </div>
                        <h3 class="gcs-about-team-name">Elena Dumitrescu</h3>
                        <div class="gcs-about-team-role">Director Comercial</div>
                        <p class="gcs-about-team-desc">Specialist în relații cu clienții și parteneriate strategice.</p>
                    </div>
                    <!-- Team Member 4 -->
                    <div class="gcs-about-team-card">
                        <div class="gcs-about-team-avatar">
                            <svg class="gcs-about-team-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </div>
                        <h3 class="gcs-about-team-name">Andrei Gheorghe</h3>
                        <div class="gcs-about-team-role">Chief Credit Officer</div>
                        <p class="gcs-about-team-desc">Analist financiar cu certificări internaționale în risk management.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== CTA SECTION ==================== -->
        <!-- py-16 bg-gradient-to-br from-[#003D7A] to-[#0066CC] -->
        <section class="gcs-about-cta-section">
            <div class="gcs-about-container">
                <!-- max-w-3xl mx-auto text-center text-white -->
                <div class="gcs-about-cta-content">
                    <h2 class="gcs-about-cta-title">
                        Hai să lucrăm împreună!
                    </h2>
                    <p class="gcs-about-cta-subtitle">
                        Fie că ai nevoie de un credit sau vrei să te alături echipei noastre,
                        suntem aici pentru tine.
                    </p>
                    <!-- flex flex-col sm:flex-row gap-4 justify-center -->
                    <div class="gcs-about-cta-buttons">
                        <a href="/contact" class="gcs-about-cta-button-primary">
                            Contactează-ne
                        </a>
                        <a href="/servicii" class="gcs-about-cta-button-secondary">
                            Vezi Serviciile
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <style>
        /* ==================== RESET ==================== */
        .gcs-about-wrapper {
            all: initial !important;
            display: block !important;
        }

        .gcs-about-wrapper *,
        .gcs-about-wrapper *::before,
        .gcs-about-wrapper *::after {
            box-sizing: border-box !important;
        }

        /* Global font */
        .gcs-about-wrapper,
        .gcs-about-wrapper * {
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif !important;
        }

        /* ==================== HEADER ==================== */
        /* fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-transparent py-4 */
        .gcs-about-header {
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
        .gcs-about-header.scrolled {
            background-color: #ffffff !important;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06) !important;
            padding-top: 0.75rem !important; /* py-3 */
            padding-bottom: 0.75rem !important;
        }

        /* container mx-auto px-4 */
        .gcs-about-container {
            width: 100% !important;
            max-width: 80rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }

        /* flex items-center justify-between */
        .gcs-about-header-content {
            display: flex !important;
            align-items: center !important;
            justify-content: space-between !important;
        }

        /* ==================== LOGO ==================== */
        /* Logo button container */
        .gcs-about-logo-btn {
            display: inline-flex !important;
            align-items: center !important;
            text-decoration: none !important;
            cursor: pointer !important;
            position: relative !important;
            height: 3rem !important; /* h-12 */
        }

        /* h-12 w-auto transition-opacity duration-300 */
        .gcs-about-logo-img {
            height: 3rem !important; /* h-12 = 48px */
            width: auto !important;
            transition-property: opacity !important;
            transition-duration: 300ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            display: block !important;
        }

        /* White logo - visible by default, hidden when scrolled */
        .gcs-about-logo-white {
            opacity: 1 !important;
            position: relative !important;
        }

        .gcs-about-header.scrolled .gcs-about-logo-white {
            opacity: 0 !important;
        }

        /* Blue logo - hidden by default, visible when scrolled */
        .gcs-about-logo-blue {
            opacity: 0 !important;
            position: absolute !important;
            top: 0 !important;
            left: 0 !important;
        }

        .gcs-about-header.scrolled .gcs-about-logo-blue {
            opacity: 1 !important;
        }

        /* ==================== NAVIGATION ==================== */
        /* hidden md:flex items-center gap-8 */
        .gcs-about-nav-desktop {
            display: none !important;
        }

        @media (min-width: 768px) {
            .gcs-about-nav-desktop {
                display: flex !important;
                align-items: center !important;
                gap: 2rem !important; /* gap-8 */
            }
        }

        /* transition-colors hover:text-[#0066CC] text-white / text-gray-700 */
        .gcs-about-nav-link {
            transition-property: color !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            color: #ffffff !important; /* text-white when not scrolled */
            text-decoration: none !important;
            font-size: 1rem !important;
        }

        .gcs-about-nav-link:hover {
            color: #0066CC !important;
        }

        .gcs-about-header.scrolled .gcs-about-nav-link {
            color: #374151 !important; /* text-gray-700 when scrolled */
        }

        /* ==================== CTA BUTTON ==================== */
        /* hidden md:block */
        .gcs-about-cta-wrapper {
            display: none !important;
        }

        @media (min-width: 768px) {
            .gcs-about-cta-wrapper {
                display: block !important;
            }
        }

        /* bg-[#0066CC] hover:bg-[#0052A3] text-white rounded-lg */
        .gcs-about-btn-primary {
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

        .gcs-about-btn-primary:hover {
            background-color: #0052A3 !important;
        }

        /* w-full */
        .gcs-about-btn-full {
            width: 100% !important;
        }

        /* ==================== MOBILE MENU ==================== */
        /* md:hidden */
        .gcs-about-mobile-toggle {
            display: flex !important;
            background: none !important;
            border: none !important;
            cursor: pointer !important;
            padding: 0.25rem !important;
        }

        @media (min-width: 768px) {
            .gcs-about-mobile-toggle {
                display: none !important;
            }
        }

        /* w-6 h-6 */
        .gcs-about-menu-icon,
        .gcs-about-close-icon {
            width: 1.5rem !important;
            height: 1.5rem !important;
            color: #ffffff !important;
            transition-property: color !important;
            transition-duration: 300ms !important;
        }

        .gcs-about-header.scrolled .gcs-about-menu-icon,
        .gcs-about-header.scrolled .gcs-about-close-icon {
            color: #003D7A !important;
        }

        .gcs-about-menu-icon {
            display: block !important;
        }

        .gcs-about-close-icon {
            display: none !important;
        }

        .gcs-about-mobile-toggle.active .gcs-about-menu-icon {
            display: none !important;
        }

        .gcs-about-mobile-toggle.active .gcs-about-close-icon {
            display: block !important;
        }

        /* md:hidden mt-4 pb-4 flex flex-col gap-4 bg-white rounded-lg shadow-lg p-4 */
        .gcs-about-mobile-menu {
            display: none !important;
        }

        .gcs-about-mobile-menu.open {
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
            .gcs-about-mobile-menu {
                display: none !important;
            }
        }

        /* text-gray-700 hover:text-[#0066CC] text-left */
        .gcs-about-mobile-link {
            color: #374151 !important; /* text-gray-700 */
            text-decoration: none !important;
            text-align: left !important;
            font-size: 1rem !important;
            padding: 0.5rem 0 !important;
            transition-property: color !important;
            transition-duration: 150ms !important;
        }

        .gcs-about-mobile-link:hover {
            color: #0066CC !important;
        }

        /* ==================== HERO SECTION ==================== */
        .gcs-about-hero {
            position: relative !important;
            background-image: linear-gradient(to bottom right, #003D7A, #001f3f) !important;
            padding-top: 8rem !important;
            padding-bottom: 4rem !important;
        }

        @media (min-width: 768px) {
            .gcs-about-hero {
                padding-top: 10rem !important;
                padding-bottom: 6rem !important;
            }
        }

        .gcs-about-hero-content {
            max-width: 48rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
            text-align: center !important;
            color: #ffffff !important;
        }

        .gcs-about-hero-title {
            color: #ffffff !important;
            margin-bottom: 1.5rem !important;
            font-size: 1.875rem !important;
            line-height: 2.25rem !important;
            font-weight: 700 !important;
            margin-top: 0 !important;
        }

        @media (min-width: 768px) {
            .gcs-about-hero-title {
                font-size: 2.25rem !important;
                line-height: 2.5rem !important;
            }
        }

        @media (min-width: 1024px) {
            .gcs-about-hero-title {
                font-size: 3rem !important;
                line-height: 1 !important;
            }
        }

        .gcs-about-hero-subtitle {
            font-size: 1.25rem !important;
            line-height: 1.75rem !important;
            color: #e5e7eb !important;
            margin-bottom: 2rem !important;
            margin-top: 0 !important;
        }

        /* ==================== STATS SECTION ==================== */
        .gcs-about-stats-section {
            padding-top: 4rem !important;
            padding-bottom: 4rem !important;
            background-color: #ffffff !important;
        }

        .gcs-about-stats-grid {
            display: grid !important;
            grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
            gap: 2rem !important;
        }

        @media (min-width: 768px) {
            .gcs-about-stats-grid {
                grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
            }
        }

        .gcs-about-stat {
            text-align: center !important;
        }

        .gcs-about-stat-value {
            font-size: 1.875rem !important;
            line-height: 2.25rem !important;
            color: #003D7A !important;
            margin-bottom: 0.5rem !important;
            font-weight: 700 !important;
        }

        @media (min-width: 768px) {
            .gcs-about-stat-value {
                font-size: 2.25rem !important;
                line-height: 2.5rem !important;
            }
        }

        .gcs-about-stat-label {
            color: #4b5563 !important;
            font-size: 0.875rem !important;
            line-height: 1.25rem !important;
        }

        /* ==================== STORY SECTION ==================== */
        .gcs-about-story-section {
            padding-top: 4rem !important;
            padding-bottom: 4rem !important;
            background-color: #F5F7FA !important;
        }

        .gcs-about-story-content {
            max-width: 56rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .gcs-about-section-header {
            text-align: center !important;
            margin-bottom: 3rem !important;
        }

        .gcs-about-section-title {
            color: #003D7A !important;
            margin-bottom: 1rem !important;
            font-size: 1.5rem !important;
            line-height: 2rem !important;
            font-weight: 700 !important;
        }

        @media (min-width: 768px) {
            .gcs-about-section-title {
                font-size: 1.875rem !important;
                line-height: 2.25rem !important;
            }
        }

        .gcs-about-section-subtitle {
            color: #4b5563 !important;
            max-width: 42rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
            font-size: 1rem !important;
            line-height: 1.5rem !important;
        }

        .gcs-about-prose {
            display: flex !important;
            flex-direction: column !important;
            gap: 1.5rem !important;
        }

        .gcs-about-text {
            color: #374151 !important;
            font-size: 1rem !important;
            line-height: 1.75rem !important;
        }

        /* ==================== MISSION SECTION ==================== */
        .gcs-about-mission-section {
            padding-top: 4rem !important;
            padding-bottom: 4rem !important;
            background-color: #ffffff !important;
        }

        .gcs-about-mission-grid {
            display: grid !important;
            gap: 3rem !important;
            max-width: 80rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
        }

        @media (min-width: 768px) {
            .gcs-about-mission-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
            }
        }

        .gcs-about-mission-item {
            text-align: center !important;
        }

        @media (min-width: 768px) {
            .gcs-about-mission-item {
                text-align: left !important;
            }
        }

        .gcs-about-icon-circle {
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            width: 4rem !important;
            height: 4rem !important;
            background-color: rgba(0, 102, 204, 0.1) !important;
            border-radius: 50% !important;
            margin-bottom: 1.5rem !important;
        }

        .gcs-about-icon {
            width: 2rem !important;
            height: 2rem !important;
            color: #0066CC !important;
            stroke: currentColor !important;
            fill: none !important;
        }

        .gcs-about-mission-title {
            color: #003D7A !important;
            margin-bottom: 1rem !important;
            font-size: 1.25rem !important;
            line-height: 1.75rem !important;
            font-weight: 600 !important;
        }

        @media (min-width: 768px) {
            .gcs-about-mission-title {
                font-size: 1.5rem !important;
                line-height: 2rem !important;
            }
        }

        .gcs-about-mission-text {
            color: #374151 !important;
            font-size: 1rem !important;
            line-height: 1.5rem !important;
        }

        /* ==================== VALUES SECTION ==================== */
        .gcs-about-values-section {
            padding-top: 4rem !important;
            padding-bottom: 4rem !important;
            background-color: #F5F7FA !important;
        }

        .gcs-about-values-grid {
            display: grid !important;
            gap: 2rem !important;
        }

        @media (min-width: 768px) {
            .gcs-about-values-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
            }
        }

        @media (min-width: 1024px) {
            .gcs-about-values-grid {
                grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
            }
        }

        .gcs-about-value-card {
            background-color: #ffffff !important;
            padding: 1.5rem !important;
            border-radius: 0.75rem !important;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05) !important;
            transition: box-shadow 0.15s !important;
        }

        .gcs-about-value-card:hover {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1) !important;
        }

        .gcs-about-value-icon-wrapper {
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            width: 3rem !important;
            height: 3rem !important;
            background-color: rgba(0, 102, 204, 0.1) !important;
            border-radius: 0.5rem !important;
            margin-bottom: 1rem !important;
        }

        .gcs-about-value-icon {
            width: 1.5rem !important;
            height: 1.5rem !important;
            color: #0066CC !important;
            stroke: currentColor !important;
            fill: none !important;
        }

        .gcs-about-value-title {
            color: #003D7A !important;
            margin-bottom: 0.5rem !important;
            font-size: 1rem !important;
            line-height: 1.5rem !important;
            font-weight: 600 !important;
        }

        .gcs-about-value-text {
            color: #4b5563 !important;
            font-size: 0.875rem !important;
            line-height: 1.25rem !important;
        }

        /* ==================== TEAM SECTION ==================== */
        .gcs-about-team-section {
            padding-top: 4rem !important;
            padding-bottom: 4rem !important;
            background-color: #ffffff !important;
        }

        .gcs-about-team-grid {
            display: grid !important;
            gap: 2rem !important;
        }

        @media (min-width: 768px) {
            .gcs-about-team-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
            }
        }

        @media (min-width: 1024px) {
            .gcs-about-team-grid {
                grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
            }
        }

        .gcs-about-team-card {
            text-align: center !important;
            background-color: #F5F7FA !important;
            padding: 1.5rem !important;
            border-radius: 0.75rem !important;
        }

        .gcs-about-team-avatar {
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            width: 6rem !important;
            height: 6rem !important;
            background: linear-gradient(to bottom right, #003D7A, #0066CC) !important;
            border-radius: 50% !important;
            margin-bottom: 1rem !important;
        }

        .gcs-about-team-icon {
            width: 3rem !important;
            height: 3rem !important;
            color: #ffffff !important;
            stroke: currentColor !important;
            fill: none !important;
        }

        .gcs-about-team-name {
            color: #003D7A !important;
            margin-bottom: 0.25rem !important;
            font-size: 1rem !important;
            line-height: 1.5rem !important;
            font-weight: 600 !important;
        }

        .gcs-about-team-role {
            color: #0066CC !important;
            font-size: 0.875rem !important;
            line-height: 1.25rem !important;
            margin-bottom: 0.75rem !important;
        }

        .gcs-about-team-desc {
            color: #4b5563 !important;
            font-size: 0.875rem !important;
            line-height: 1.25rem !important;
        }

        /* ==================== CTA SECTION ==================== */
        .gcs-about-cta-section {
            padding-top: 4rem !important;
            padding-bottom: 4rem !important;
            background: linear-gradient(to bottom right, #003D7A, #0066CC) !important;
        }

        .gcs-about-cta-content {
            max-width: 48rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
            text-align: center !important;
            color: #ffffff !important;
        }

        .gcs-about-cta-title {
            margin-bottom: 1rem !important;
            font-size: 1.5rem !important;
            line-height: 2rem !important;
            font-weight: 700 !important;
            color: #ffffff !important;
        }

        @media (min-width: 768px) {
            .gcs-about-cta-title {
                font-size: 1.875rem !important;
                line-height: 2.25rem !important;
            }
        }

        .gcs-about-cta-subtitle {
            font-size: 1.25rem !important;
            line-height: 1.75rem !important;
            color: #e5e7eb !important;
            margin-bottom: 2rem !important;
        }

        .gcs-about-cta-buttons {
            display: flex !important;
            flex-direction: column !important;
            gap: 1rem !important;
            justify-content: center !important;
        }

        @media (min-width: 640px) {
            .gcs-about-cta-buttons {
                flex-direction: row !important;
            }
        }

        .gcs-about-cta-button-primary,
        a.gcs-about-cta-button-primary,
        .gcs-about-wrapper .gcs-about-cta-button-primary,
        .gcs-about-wrapper a.gcs-about-cta-button-primary {
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            height: 2.5rem !important;
            padding: 0.5rem 1.5rem !important;
            background-color: #ffffff !important;
            background-image: none !important;
            background: #ffffff !important;
            color: #003D7A !important;
            border: none !important;
            border-radius: 0.5rem !important;
            font-size: 0.875rem !important;
            font-weight: 500 !important;
            cursor: pointer !important;
            text-decoration: none !important;
            transition: background-color 0.15s !important;
            -webkit-appearance: none !important;
            -moz-appearance: none !important;
            appearance: none !important;
        }

        .gcs-about-cta-button-primary:hover,
        a.gcs-about-cta-button-primary:hover {
            background-color: #f3f4f6 !important;
            background-image: none !important;
            background: #f3f4f6 !important;
        }

        .gcs-about-cta-button-secondary,
        a.gcs-about-cta-button-secondary,
        .gcs-about-wrapper .gcs-about-cta-button-secondary,
        .gcs-about-wrapper a.gcs-about-cta-button-secondary {
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            height: 2.5rem !important;
            padding: 0.5rem 1.5rem !important;
            background-color: transparent !important;
            background-image: none !important;
            background: transparent !important;
            color: #ffffff !important;
            border: 2px solid #ffffff !important;
            border-radius: 0.5rem !important;
            font-size: 0.875rem !important;
            font-weight: 500 !important;
            cursor: pointer !important;
            text-decoration: none !important;
            transition: all 0.15s !important;
            -webkit-appearance: none !important;
            -moz-appearance: none !important;
            appearance: none !important;
        }

        .gcs-about-cta-button-secondary:hover,
        a.gcs-about-cta-button-secondary:hover {
            background-color: #ffffff !important;
            background-image: none !important;
            background: #ffffff !important;
            color: #003D7A !important;
        }
    </style>

    <script>
        (function() {
            if (window.gcsAboutInit) return;
            window.gcsAboutInit = true;

            const header = document.querySelector('.gcs-about-header');
            const mobileToggle = document.querySelector('.gcs-about-mobile-toggle');
            const mobileMenu = document.querySelector('.gcs-about-mobile-menu');

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
            const mobileLinks = document.querySelectorAll('.gcs-about-mobile-link');
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

        })();
    </script>


    <?php
    return ob_get_clean();
}

add_shortcode('gcs_about_page', 'gcs_about_page_shortcode');

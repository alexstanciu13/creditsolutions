<?php
/**
 * Global Credit Solutions - Services Page Shortcode
 *
 * Shortcode: [gcs_services_page]
 *
 * EXACT FIGMA DESIGN - Complete Services page with header
 * - All Tailwind classes converted precisely
 * - Complete theme isolation with !important on EVERY property
 */

function gcs_services_page_shortcode() {
    ob_start();
    ?>

    <div class="gcs-services-wrapper">

        <!-- ==================== HEADER ==================== -->
        <!-- Fixed header with scroll effect - same as homepage -->
        <header class="gcs-services-header">
            <div class="gcs-services-header-container">
                <div class="gcs-services-header-content">
                    <!-- Logo -->
                    <a href="<?php echo home_url(); ?>" class="gcs-services-logo-btn">
                        <div class="gcs-services-logo-circle">
                            <svg class="gcs-services-logo-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="2" y1="12" x2="22" y2="12"></line>
                                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                            </svg>
                        </div>
                        <div class="gcs-services-logo-text">Global Credit Solutions</div>
                    </a>

                    <!-- Desktop Navigation -->
                    <nav class="gcs-services-nav-desktop">
                        <a href="<?php echo home_url(); ?>" class="gcs-services-nav-link">Acasă</a>
                        <a href="<?php echo home_url('/despre'); ?>" class="gcs-services-nav-link">Despre Noi</a>
                        <a href="<?php echo home_url('/servicii'); ?>" class="gcs-services-nav-link active">Servicii</a>
                        <a href="<?php echo home_url('/contact'); ?>" class="gcs-services-nav-link">Contact</a>
                    </nav>

                    <!-- CTA Button Desktop -->
                    <div class="gcs-services-cta-wrapper">
                        <a href="<?php echo home_url('/contact'); ?>" class="gcs-services-btn-primary">Aplică Acum</a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <button class="gcs-services-mobile-toggle" aria-label="Toggle menu">
                        <svg class="gcs-services-menu-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="3" y1="12" x2="21" y2="12"></line>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg>
                        <svg class="gcs-services-close-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>

                <!-- Mobile Menu -->
                <nav class="gcs-services-mobile-menu">
                    <a href="<?php echo home_url(); ?>" class="gcs-services-mobile-link">Acasă</a>
                    <a href="<?php echo home_url('/despre'); ?>" class="gcs-services-mobile-link">Despre Noi</a>
                    <a href="<?php echo home_url('/servicii'); ?>" class="gcs-services-mobile-link">Servicii</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="gcs-services-mobile-link">Contact</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="gcs-services-btn-primary gcs-services-btn-full">Aplică Acum</a>
                </nav>
            </div>
        </header>

        <!-- ==================== HERO SECTION ==================== -->
        <!-- bg-gradient-to-br from-[#003D7A] to-[#001f3f] pt-32 pb-16 md:pt-40 md:pb-24 -->
        <section class="gcs-services-hero">
            <div class="gcs-services-container">
                <!-- max-w-3xl mx-auto text-center text-white -->
                <div class="gcs-services-hero-content">
                    <!-- mb-6 text-3xl md:text-4xl lg:text-5xl -->
                    <h1 class="gcs-services-hero-title">
                        Serviciile Noastre de Brokeraj
                    </h1>
                    <!-- text-xl text-gray-200 mb-8 -->
                    <p class="gcs-services-hero-subtitle">
                        Soluții complete de creditare pentru persoane fizice și juridice.
                        Consultanță 100% gratuită și transparentă.
                    </p>
                </div>
            </div>
        </section>

        <!-- ==================== SERVICES GRID ==================== -->
        <!-- py-16 bg-white -->
        <section class="gcs-services-grid-section">
            <div class="gcs-services-container">
                <!-- grid md:grid-cols-2 gap-8 max-w-6xl mx-auto -->
                <div class="gcs-services-grid">

                    <?php
                    // Services data
                    $services = [
                        [
                            'icon' => '<path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline>',
                            'title' => 'Credit Ipotecar',
                            'description' => 'Pentru achiziția sau construcția locuinței tale de vis',
                            'features' => [
                                'Rate de dobândă competitive de la 4.99%',
                                'Finanțare până la 95% din valoarea proprietății',
                                'Perioadă de creditare: 5-30 ani',
                                'Fără avans pentru Prima Casă',
                                'Evaluare gratuită a proprietății',
                                'Consultanță pentru toate programele guvernamentale'
                            ],
                            'details' => 'Îți găsim cel mai bun credit pentru achiziția unei locuințe noi sau refinanțarea unei locuințe existente. Colaborăm cu toate băncile din România pentru a-ți oferi cele mai competitive oferte.'
                        ],
                        [
                            'icon' => '<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle>',
                            'title' => 'Credit Nevoi Personale',
                            'description' => 'Soluții flexibile pentru orice nevoie financiară',
                            'features' => [
                                'Sume de la 5,000 la 100,000 RON',
                                'Aprobare rapidă în 24-48 ore',
                                'Fără justificare a utilizării sumei',
                                'Rate fixe sau variabile',
                                'Posibilitate refinanțare',
                                'Dobânzi de la 7.99% pe an'
                            ],
                            'details' => 'Fie că ai nevoie de bani pentru o vacanță, renovări, educație sau consolidare datorii, îți găsim cea mai bună ofertă de credit personal adaptată nevoilor tale.'
                        ],
                        [
                            'icon' => '<path d="M14 16H9m10 0h3v-3.15a1 1 0 0 0-.84-.99L16 11l-2.7-3.6a1 1 0 0 0-.8-.4H5.24a2 2 0 0 0-1.8 1.1l-.8 1.63A6 6 0 0 0 2 12.42V16h2"></path><circle cx="6.5" cy="16.5" r="2.5"></circle><circle cx="16.5" cy="16.5" r="2.5"></circle>',
                            'title' => 'Credit Auto & Leasing',
                            'description' => 'Finanțare pentru mașina potrivită pentru tine',
                            'features' => [
                                'Avans de la 0%',
                                'Perioadă: 12-96 luni',
                                'Rate fixe și predictibile',
                                'Aprobare în maxim 2 ore',
                                'Valabil pentru mașini noi și second-hand',
                                'Asigurare inclusă în pachet'
                            ],
                            'details' => 'Te ajutăm să alegi între credit auto clasic sau leasing operațional/financiar, în funcție de nevoile tale. Comparăm ofertele tuturor dealerilor și băncilor.'
                        ],
                        [
                            'icon' => '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline>',
                            'title' => 'Credit cu Garanție Imobiliară',
                            'description' => 'Sume mari garantate cu proprietatea ta',
                            'features' => [
                                'Sume de până la 500,000 EUR',
                                'Rate de dobândă foarte competitive',
                                'Perioadă extinsă de rambursare',
                                'Fără justificare destinație fonduri',
                                'Evaluare proprietate gratuită',
                                'Flexibilitate în rambursare'
                            ],
                            'details' => 'Ideal pentru investiții mari, afaceri, sau consolidarea datoriilor. Folosește valoarea proprietății tale pentru a accesa sume mari de bani la dobânzi avantajoase.'
                        ],
                        [
                            'icon' => '<path d="M3 21h18"></path><path d="M5 21V7l8-4v18"></path><path d="M19 21V11l-6-4"></path><path d="M9 9v.01"></path><path d="M9 12v.01"></path><path d="M9 15v.01"></path><path d="M9 18v.01"></path>',
                            'title' => 'Credite Persoane Juridice',
                            'description' => 'Soluții de finanțare pentru afacerea ta',
                            'features' => [
                                'Credite de investiție și capital de lucru',
                                'Linii de credit revolving',
                                'Leasing echipamente și utilaje',
                                'Carduri de credit corporate',
                                'Finanțare proiecte UE',
                                'Consultanță financiară gratuită'
                            ],
                            'details' => 'Susținem dezvoltarea afacerii tale cu soluții complete de finanțare. De la start-up-uri la companii mature, avem experiența necesară pentru fiecare etapă.'
                        ],
                        [
                            'icon' => '<path d="M23 4v6h-6"></path><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"></path>',
                            'title' => 'Refinanțare Credite',
                            'description' => 'Reduce ratele și economisește bani',
                            'features' => [
                                'Reducere dobândă cu până la 3%',
                                'Extinderea perioadei de creditare',
                                'Consolidarea mai multor credite',
                                'Fără penalizări de rambursare anticipată',
                                'Cash extra până la 50,000 RON',
                                'Consultanță gratuită refinanțare'
                            ],
                            'details' => 'Dacă ai deja un credit, te ajutăm să-l refinanțezi la condiții mai bune. Analizăm situația ta financiară și îți găsim cele mai avantajoase oferte de pe piață.'
                        ],
                        [
                            'icon' => '<rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line>',
                            'title' => 'Carduri de Credit',
                            'description' => 'Flexibilitate financiară la îndemână',
                            'features' => [
                                'Limite de credit de la 2,000 RON',
                                'Perioada de grație până la 60 zile',
                                'Fără dobândă în perioada de grație',
                                'Recompense și cashback',
                                'Carduri contactless',
                                'Acces la sălile VIP aeroporturi'
                            ],
                            'details' => 'Compară toate ofertele de carduri de credit din piață și alege cel mai potrivit pentru stilul tău de viață. Beneficiezi de consultanță gratuită pentru alegerea cardului ideal.'
                        ],
                        [
                            'icon' => '<rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>',
                            'title' => 'Asigurări Credite',
                            'description' => 'Protecție completă pentru împrumuturile tale',
                            'features' => [
                                'Asigurare viață debitori',
                                'Protecție în caz de șomaj',
                                'Asigurare invaliditate',
                                'Asigurare locuință/auto',
                                'Prime competitive',
                                'Gestionare claims rapidă'
                            ],
                            'details' => 'Protejează-te pe tine și familia ta cu asigurări adaptate creditului tău. Te ajutăm să alegi pachetul de asigurări potrivit la cele mai bune prețuri.'
                        ]
                    ];

                    foreach ($services as $service) :
                    ?>
                    <!-- Service Card -->
                    <div class="gcs-services-card">
                        <div class="gcs-services-card-header">
                            <!-- Icon -->
                            <div class="gcs-services-icon-wrapper">
                                <svg class="gcs-services-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <?php echo $service['icon']; ?>
                                </svg>
                            </div>
                            <!-- Title -->
                            <h3 class="gcs-services-card-title"><?php echo $service['title']; ?></h3>
                            <!-- Description -->
                            <p class="gcs-services-card-description"><?php echo $service['description']; ?></p>
                        </div>
                        <div class="gcs-services-card-content">
                            <!-- Details -->
                            <p class="gcs-services-card-details"><?php echo $service['details']; ?></p>
                            <!-- Features -->
                            <div class="gcs-services-features">
                                <?php foreach ($service['features'] as $feature) : ?>
                                <div class="gcs-services-feature">
                                    <svg class="gcs-services-check-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                    <span class="gcs-services-feature-text"><?php echo $feature; ?></span>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <!-- CTA Button -->
                            <a href="<?php echo home_url('/contact'); ?>" class="gcs-services-card-button">
                                Solicită Ofertă
                                <svg class="gcs-services-arrow-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </section>

        <!-- ==================== PROCESS SECTION ==================== -->
        <!-- py-16 bg-[#F5F7FA] -->
        <section class="gcs-services-process-section">
            <div class="gcs-services-container">
                <div class="gcs-services-section-header">
                    <h2 class="gcs-services-section-title">Cum Funcționează Procesul</h2>
                    <p class="gcs-services-section-subtitle">
                        Un proces simplu, transparent și eficient. De la consultație la
                        finalizare, suntem alături de tine.
                    </p>
                </div>
                <!-- max-w-4xl mx-auto -->
                <div class="gcs-services-process-container">
                    <div class="gcs-services-process-relative">
                        <!-- Progress Line - hidden on mobile, shown on desktop -->
                        <div class="gcs-services-progress-line">
                            <div class="gcs-services-progress-fill"></div>
                        </div>

                        <!-- grid md:grid-cols-5 gap-8 relative -->
                        <div class="gcs-services-process-grid">
                            <?php
                            $process_steps = [
                                ['step' => '1', 'title' => 'Consultație Inițială', 'description' => 'Discutăm despre nevoile și obiectivele tale financiare'],
                                ['step' => '2', 'title' => 'Analiză Oferte', 'description' => 'Comparăm ofertele de la toți partenerii noștri'],
                                ['step' => '3', 'title' => 'Aplicare', 'description' => 'Te ajutăm să completezi dosarul și aplicația'],
                                ['step' => '4', 'title' => 'Aprobare', 'description' => 'Negociem cele mai bune condiții pentru tine'],
                                ['step' => '5', 'title' => 'Finalizare', 'description' => 'Te însoțim până la semnarea contractului']
                            ];
                            foreach ($process_steps as $step) :
                            ?>
                            <div class="gcs-services-process-step">
                                <div class="gcs-services-step-circle">
                                    <span class="gcs-services-step-number"><?php echo $step['step']; ?></span>
                                </div>
                                <h3 class="gcs-services-step-title"><?php echo $step['title']; ?></h3>
                                <p class="gcs-services-step-description"><?php echo $step['description']; ?></p>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== WHY CHOOSE US ==================== -->
        <!-- py-16 bg-white -->
        <section class="gcs-services-why-section">
            <div class="gcs-services-container">
                <!-- max-w-3xl mx-auto text-center -->
                <div class="gcs-services-why-content">
                    <h2 class="gcs-services-why-title">De Ce Să Ne Alegi?</h2>
                    <!-- grid md:grid-cols-3 gap-8 mb-8 -->
                    <div class="gcs-services-stats-grid">
                        <div class="gcs-services-stat">
                            <div class="gcs-services-stat-value">100%</div>
                            <div class="gcs-services-stat-label">Consultanță Gratuită</div>
                        </div>
                        <div class="gcs-services-stat">
                            <div class="gcs-services-stat-value">30+</div>
                            <div class="gcs-services-stat-label">Parteneri Financiari</div>
                        </div>
                        <div class="gcs-services-stat">
                            <div class="gcs-services-stat-value">24-48h</div>
                            <div class="gcs-services-stat-label">Răspuns Rapid</div>
                        </div>
                    </div>
                    <p class="gcs-services-why-text">
                        Expertiza noastră și relațiile excelente cu instituțiile financiare
                        ne permit să îți oferim cele mai bune condiții de pe piață, rapid și
                        fără complicații.
                    </p>
                    <a href="<?php echo home_url('/contact'); ?>" class="gcs-services-cta-button">
                        Începe Acum
                        <svg class="gcs-services-cta-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
        </section>

    </div>

    <style>
        /* ==================== RESET ==================== */
        .gcs-services-wrapper {
            all: initial !important;
            display: block !important;
        }

        .gcs-services-wrapper *,
        .gcs-services-wrapper *::before,
        .gcs-services-wrapper *::after {
            box-sizing: border-box !important;
            margin: 0 !important;
            padding: 0 !important;
            border: 0 !important;
            font-size: 100% !important;
            font: inherit !important;
            vertical-align: baseline !important;
        }

        /* SVG reset */
        .gcs-services-wrapper svg {
            display: inline-block !important;
            vertical-align: middle !important;
            overflow: visible !important;
        }

        /* Remove all link styles */
        .gcs-services-wrapper a {
            background-color: transparent !important;
            background-image: none !important;
            background: transparent !important;
            text-decoration: none !important;
            color: inherit !important;
            border: none !important;
            outline: none !important;
        }

        .gcs-services-wrapper a:hover,
        .gcs-services-wrapper a:active,
        .gcs-services-wrapper a:focus,
        .gcs-services-wrapper a:visited {
            background-image: none !important;
            text-decoration: none !important;
            outline: none !important;
            border: none !important;
        }

        /* Remove list styles */
        .gcs-services-wrapper ul,
        .gcs-services-wrapper ol {
            list-style: none !important;
        }

        /* Remove button/input defaults */
        .gcs-services-wrapper button,
        .gcs-services-wrapper input,
        .gcs-services-wrapper select,
        .gcs-services-wrapper textarea {
            font-family: inherit !important;
            font-size: 100% !important;
            line-height: 1.15 !important;
            margin: 0 !important;
            padding: 0 !important;
            border: 0 !important;
            background: none !important;
        }

        /* Remove button defaults */
        .gcs-services-wrapper button {
            overflow: visible !important;
            text-transform: none !important;
            -webkit-appearance: button !important;
        }

        /* Global font */
        .gcs-services-wrapper,
        .gcs-services-wrapper * {
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif !important;
            text-rendering: optimizeLegibility !important;
            -webkit-font-smoothing: antialiased !important;
            -moz-osx-font-smoothing: grayscale !important;
        }

        /* ==================== HEADER ==================== */
        /* Same as homepage header - transparent initially, white when scrolled */
        .gcs-services-header {
            position: fixed !important;
            top: 0 !important;
            left: 0 !important;
            right: 0 !important;
            z-index: 50 !important;
            transition-property: all !important;
            transition-duration: 300ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            background-color: transparent !important;
            padding-top: 1rem !important;
            padding-bottom: 1rem !important;
        }

        .gcs-services-header.scrolled {
            background-color: #ffffff !important;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06) !important;
            padding-top: 0.75rem !important;
            padding-bottom: 0.75rem !important;
        }

        .gcs-services-header-container {
            width: 100% !important;
            max-width: 80rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }

        .gcs-services-header-content {
            display: flex !important;
            align-items: center !important;
            justify-content: space-between !important;
        }

        /* Logo */
        .gcs-services-logo-btn {
            display: flex !important;
            align-items: center !important;
            gap: 0.5rem !important;
            text-decoration: none !important;
            cursor: pointer !important;
        }

        /* Logo circle - white initially, #003D7A when scrolled */
        .gcs-services-logo-circle {
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            width: 2.5rem !important;
            height: 2.5rem !important;
            border-radius: 50% !important;
            background-color: #ffffff !important;
            transition-property: background-color !important;
            transition-duration: 300ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            flex-shrink: 0 !important;
        }

        .gcs-services-header.scrolled .gcs-services-logo-circle {
            background-color: #003D7A !important;
        }

        /* Logo icon - #003D7A initially, white when scrolled */
        .gcs-services-logo-icon {
            width: 1.5rem !important;
            height: 1.5rem !important;
            color: #003D7A !important;
            transition-property: color !important;
            transition-duration: 300ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            stroke: currentColor !important;
            fill: none !important;
        }

        .gcs-services-header.scrolled .gcs-services-logo-icon {
            color: #ffffff !important;
        }

        /* Logo text - white initially, #003D7A when scrolled */
        .gcs-services-logo-text {
            transition-property: color !important;
            transition-duration: 300ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            color: #ffffff !important;
            font-size: 1rem !important;
            font-weight: 400 !important;
            display: none !important;
        }

        .gcs-services-header.scrolled .gcs-services-logo-text {
            color: #003D7A !important;
        }

        @media (min-width: 768px) {
            .gcs-services-logo-text {
                display: inline !important;
            }
        }

        /* Desktop Navigation */
        .gcs-services-nav-desktop {
            display: none !important;
        }

        @media (min-width: 768px) {
            .gcs-services-nav-desktop {
                display: flex !important;
                align-items: center !important;
                gap: 2rem !important;
            }
        }

        /* Nav links - AGGRESSIVE ISOLATION - white initially, gray when scrolled */
        .gcs-services-nav-link,
        a.gcs-services-nav-link,
        .gcs-services-nav-desktop .gcs-services-nav-link,
        .gcs-services-nav-desktop a.gcs-services-nav-link,
        .gcs-services-header .gcs-services-nav-link,
        .gcs-services-header a.gcs-services-nav-link {
            font-size: 1rem !important;
            font-weight: 500 !important;
            transition-property: color !important;
            transition-duration: 150ms !important;
            color: #ffffff !important;
            background-color: transparent !important;
            background-image: none !important;
            background: transparent !important;
            border: none !important;
            outline: none !important;
            text-decoration: none !important;
            cursor: pointer !important;
        }

        .gcs-services-header.scrolled .gcs-services-nav-link,
        .gcs-services-header.scrolled a.gcs-services-nav-link,
        .gcs-services-header.scrolled .gcs-services-nav-desktop .gcs-services-nav-link,
        .gcs-services-header.scrolled .gcs-services-nav-desktop a.gcs-services-nav-link {
            color: #374151 !important;
        }

        .gcs-services-nav-link:hover,
        a.gcs-services-nav-link:hover,
        .gcs-services-nav-desktop .gcs-services-nav-link:hover,
        .gcs-services-nav-desktop a.gcs-services-nav-link:hover,
        .gcs-services-nav-link.active,
        a.gcs-services-nav-link.active {
            color: #0066CC !important;
            background-color: transparent !important;
            background-image: none !important;
            background: transparent !important;
            text-decoration: none !important;
        }

        /* Force white on visited/active/focus when not scrolled */
        .gcs-services-nav-link:visited,
        .gcs-services-nav-link:active,
        .gcs-services-nav-link:focus,
        a.gcs-services-nav-link:visited,
        a.gcs-services-nav-link:active,
        a.gcs-services-nav-link:focus {
            color: #ffffff !important;
            background: transparent !important;
            outline: none !important;
        }

        /* When scrolled, visited/active/focus should be gray */
        .gcs-services-header.scrolled .gcs-services-nav-link:visited,
        .gcs-services-header.scrolled .gcs-services-nav-link:active,
        .gcs-services-header.scrolled .gcs-services-nav-link:focus,
        .gcs-services-header.scrolled a.gcs-services-nav-link:visited,
        .gcs-services-header.scrolled a.gcs-services-nav-link:active,
        .gcs-services-header.scrolled a.gcs-services-nav-link:focus {
            color: #374151 !important;
        }

        /* CTA Button Desktop */
        .gcs-services-cta-wrapper {
            display: none !important;
        }

        @media (min-width: 768px) {
            .gcs-services-cta-wrapper {
                display: block !important;
            }
        }

        .gcs-services-btn-primary,
        a.gcs-services-btn-primary,
        .gcs-services-wrapper .gcs-services-btn-primary,
        .gcs-services-wrapper a.gcs-services-btn-primary {
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            height: 2.5rem !important;
            padding: 0.5rem 1.5rem !important;
            font-size: 0.875rem !important;
            font-weight: 500 !important;
            background-color: #0066CC !important;
            background-image: none !important;
            background: #0066CC !important;
            color: #ffffff !important;
            border: none !important;
            border-radius: 0.5rem !important;
            cursor: pointer !important;
            text-decoration: none !important;
            transition: background-color 0.15s !important;
            -webkit-appearance: none !important;
            -moz-appearance: none !important;
            appearance: none !important;
        }

        .gcs-services-btn-primary:hover,
        a.gcs-services-btn-primary:hover {
            background-color: #0052A3 !important;
            background-image: none !important;
            background: #0052A3 !important;
        }

        /* Mobile Menu Button */
        .gcs-services-mobile-toggle {
            display: block !important;
            width: 2rem !important;
            height: 2rem !important;
            background: none !important;
            border: none !important;
            cursor: pointer !important;
            position: relative !important;
        }

        @media (min-width: 768px) {
            .gcs-services-mobile-toggle {
                display: none !important;
            }
        }

        .gcs-services-menu-icon,
        .gcs-services-close-icon {
            width: 1.5rem !important;
            height: 1.5rem !important;
            color: #ffffff !important;
            stroke: currentColor !important;
            fill: none !important;
            position: absolute !important;
            top: 50% !important;
            left: 50% !important;
            transform: translate(-50%, -50%) !important;
            transition: color 0.15s !important;
        }

        .gcs-services-header.scrolled .gcs-services-menu-icon,
        .gcs-services-header.scrolled .gcs-services-close-icon {
            color: #003D7A !important;
        }

        .gcs-services-close-icon {
            display: none !important;
        }

        .gcs-services-mobile-toggle.active .gcs-services-menu-icon {
            display: none !important;
        }

        .gcs-services-mobile-toggle.active .gcs-services-close-icon {
            display: block !important;
        }

        /* Mobile Menu */
        .gcs-services-mobile-menu {
            display: none !important;
            flex-direction: column !important;
            gap: 1rem !important;
            padding-top: 1rem !important;
            padding-bottom: 1rem !important;
        }

        .gcs-services-mobile-menu.open {
            display: flex !important;
        }

        @media (min-width: 768px) {
            .gcs-services-mobile-menu {
                display: none !important;
            }
        }

        /* Mobile links - AGGRESSIVE ISOLATION - match homepage exactly */
        .gcs-services-mobile-link,
        a.gcs-services-mobile-link,
        .gcs-services-mobile-menu .gcs-services-mobile-link,
        .gcs-services-mobile-menu a.gcs-services-mobile-link,
        .gcs-services-header .gcs-services-mobile-link,
        .gcs-services-header a.gcs-services-mobile-link {
            color: #374151 !important;
            font-size: 1rem !important;
            font-weight: 500 !important;
            padding: 0.5rem 0 !important;
            cursor: pointer !important;
            background-color: transparent !important;
            background-image: none !important;
            background: transparent !important;
            border: none !important;
            outline: none !important;
            text-decoration: none !important;
            text-align: left !important;
            transition-property: color !important;
            transition-duration: 150ms !important;
        }

        .gcs-services-mobile-link:hover,
        a.gcs-services-mobile-link:hover {
            color: #0066CC !important;
            background: transparent !important;
            outline: none !important;
            text-decoration: none !important;
        }

        .gcs-services-mobile-link:visited,
        a.gcs-services-mobile-link:visited,
        .gcs-services-mobile-link:active,
        a.gcs-services-mobile-link:active,
        .gcs-services-mobile-link:focus,
        a.gcs-services-mobile-link:focus {
            color: #374151 !important;
            background: transparent !important;
            outline: none !important;
            text-decoration: none !important;
        }

        .gcs-services-btn-full {
            width: 100% !important;
        }

        /* ==================== HERO SECTION ==================== */
        .gcs-services-hero {
            background: linear-gradient(to bottom right, #003D7A, #001f3f) !important;
            padding-top: 8rem !important; /* pt-32 */
            padding-bottom: 4rem !important; /* pb-16 */
        }

        @media (min-width: 768px) {
            .gcs-services-hero {
                padding-top: 10rem !important; /* md:pt-40 */
                padding-bottom: 6rem !important; /* md:pb-24 */
            }
        }

        .gcs-services-hero-content {
            max-width: 48rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
            text-align: center !important;
            color: #ffffff !important;
        }

        .gcs-services-hero-title {
            margin-bottom: 1.5rem !important;
            font-size: 1.875rem !important; /* text-3xl */
            line-height: 2.25rem !important;
            font-weight: 700 !important;
            color: #ffffff !important;
        }

        @media (min-width: 768px) {
            .gcs-services-hero-title {
                font-size: 2.25rem !important; /* md:text-4xl */
                line-height: 2.5rem !important;
            }
        }

        @media (min-width: 1024px) {
            .gcs-services-hero-title {
                font-size: 3rem !important; /* lg:text-5xl */
                line-height: 1 !important;
            }
        }

        .gcs-services-hero-subtitle {
            font-size: 1.25rem !important;
            line-height: 1.75rem !important;
            color: #e5e7eb !important;
            margin-bottom: 2rem !important;
        }

        /* ==================== CONTAINER ==================== */
        .gcs-services-container {
            width: 100% !important;
            max-width: 80rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }

        /* ==================== SERVICES GRID ==================== */
        .gcs-services-grid-section {
            padding-top: 4rem !important;
            padding-bottom: 4rem !important;
            background-color: #ffffff !important;
        }

        .gcs-services-grid {
            display: grid !important;
            gap: 2rem !important;
            max-width: 72rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
        }

        @media (min-width: 768px) {
            .gcs-services-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
            }
        }

        /* Service Card */
        .gcs-services-card {
            background-color: #ffffff !important;
            border: 2px solid #f3f4f6 !important;
            border-radius: 0.5rem !important;
            transition: box-shadow 0.15s !important;
        }

        .gcs-services-card:hover {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05) !important;
        }

        .gcs-services-card-header {
            padding: 1.5rem !important;
            padding-bottom: 1rem !important;
        }

        .gcs-services-icon-wrapper {
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            width: 3.5rem !important;
            height: 3.5rem !important;
            background-color: rgba(0, 102, 204, 0.1) !important;
            border-radius: 0.5rem !important;
            margin-bottom: 1rem !important;
        }

        .gcs-services-icon {
            width: 1.75rem !important;
            height: 1.75rem !important;
            color: #0066CC !important;
            stroke: currentColor !important;
            fill: none !important;
        }

        .gcs-services-card-title {
            color: #003D7A !important;
            font-size: 1.25rem !important;
            line-height: 1.75rem !important;
            font-weight: 600 !important;
            margin-bottom: 0.5rem !important;
        }

        .gcs-services-card-description {
            color: #6b7280 !important;
            font-size: 1rem !important;
            line-height: 1.5rem !important;
        }

        .gcs-services-card-content {
            padding: 0 1.5rem 1.5rem 1.5rem !important;
        }

        .gcs-services-card-details {
            color: #374151 !important;
            font-size: 0.875rem !important;
            line-height: 1.5rem !important;
            margin-bottom: 1rem !important;
        }

        .gcs-services-features {
            display: flex !important;
            flex-direction: column !important;
            gap: 0.5rem !important;
            margin-bottom: 1.5rem !important;
        }

        .gcs-services-feature {
            display: flex !important;
            align-items: flex-start !important;
            gap: 0.5rem !important;
        }

        .gcs-services-check-icon {
            width: 1.25rem !important;
            height: 1.25rem !important;
            color: #16a34a !important;
            flex-shrink: 0 !important;
            margin-top: 0.125rem !important;
            stroke: currentColor !important;
            fill: none !important;
        }

        .gcs-services-feature-text {
            color: #4b5563 !important;
            font-size: 0.875rem !important;
            line-height: 1.25rem !important;
        }

        /* Service Card Button - AGGRESSIVE ISOLATION */
        .gcs-services-card-button,
        a.gcs-services-card-button,
        .gcs-services-wrapper .gcs-services-card-button,
        .gcs-services-wrapper a.gcs-services-card-button {
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            width: 100% !important;
            gap: 0.5rem !important;
            padding: 0.625rem 1rem !important;
            background-color: #0066CC !important;
            background-image: none !important;
            background: #0066CC !important;
            color: #ffffff !important;
            font-size: 0.875rem !important;
            font-weight: 500 !important;
            border-radius: 0.375rem !important;
            border: none !important;
            cursor: pointer !important;
            text-decoration: none !important;
            transition: background-color 0.15s !important;
            -webkit-appearance: none !important;
            -moz-appearance: none !important;
            appearance: none !important;
        }

        .gcs-services-card-button:hover,
        a.gcs-services-card-button:hover {
            background-color: #0052A3 !important;
            background-image: none !important;
            background: #0052A3 !important;
        }

        .gcs-services-arrow-icon {
            width: 1rem !important;
            height: 1rem !important;
            color: #ffffff !important;
            stroke: currentColor !important;
            fill: none !important;
        }

        /* ==================== PROCESS SECTION ==================== */
        .gcs-services-process-section {
            padding-top: 4rem !important;
            padding-bottom: 4rem !important;
            background-color: #F5F7FA !important;
        }

        .gcs-services-section-header {
            text-align: center !important;
            margin-bottom: 3rem !important;
        }

        .gcs-services-section-title {
            color: #003D7A !important;
            margin-bottom: 1rem !important;
            font-size: 1.5rem !important;
            line-height: 2rem !important;
            font-weight: 700 !important;
        }

        @media (min-width: 768px) {
            .gcs-services-section-title {
                font-size: 1.875rem !important;
                line-height: 2.25rem !important;
            }
        }

        .gcs-services-section-subtitle {
            color: #4b5563 !important;
            max-width: 42rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
            font-size: 1rem !important;
            line-height: 1.5rem !important;
        }

        .gcs-services-process-container {
            max-width: 56rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .gcs-services-process-relative {
            position: relative !important;
        }

        /* Progress Line - hidden on mobile */
        .gcs-services-progress-line {
            display: none !important;
        }

        @media (min-width: 768px) {
            .gcs-services-progress-line {
                display: block !important;
                position: absolute !important;
                top: 2rem !important;
                left: 0 !important;
                right: 0 !important;
                height: 0.25rem !important;
                background-color: rgba(0, 102, 204, 0.2) !important;
            }
        }

        .gcs-services-progress-fill {
            position: absolute !important;
            inset: 0 !important;
            background-color: #0066CC !important;
        }

        .gcs-services-process-grid {
            display: grid !important;
            gap: 2rem !important;
            position: relative !important;
        }

        @media (min-width: 768px) {
            .gcs-services-process-grid {
                grid-template-columns: repeat(5, minmax(0, 1fr)) !important;
            }
        }

        .gcs-services-process-step {
            text-align: center !important;
        }

        .gcs-services-step-circle {
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            width: 4rem !important;
            height: 4rem !important;
            background: linear-gradient(to bottom right, #003D7A, #0066CC) !important;
            color: #ffffff !important;
            border-radius: 50% !important;
            margin-bottom: 1rem !important;
            position: relative !important;
            z-index: 10 !important;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05) !important;
        }

        .gcs-services-step-number {
            font-size: 1.25rem !important;
            line-height: 1.75rem !important;
            font-weight: 600 !important;
            color: #ffffff !important;
        }

        .gcs-services-step-title {
            color: #003D7A !important;
            margin-bottom: 0.5rem !important;
            font-size: 1rem !important;
            line-height: 1.5rem !important;
            font-weight: 600 !important;
        }

        .gcs-services-step-description {
            color: #4b5563 !important;
            font-size: 0.875rem !important;
            line-height: 1.25rem !important;
        }

        /* ==================== WHY CHOOSE US ==================== */
        .gcs-services-why-section {
            padding-top: 4rem !important;
            padding-bottom: 4rem !important;
            background-color: #ffffff !important;
        }

        .gcs-services-why-content {
            max-width: 48rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
            text-align: center !important;
        }

        .gcs-services-why-title {
            color: #003D7A !important;
            margin-bottom: 1.5rem !important;
            font-size: 1.5rem !important;
            line-height: 2rem !important;
            font-weight: 700 !important;
        }

        @media (min-width: 768px) {
            .gcs-services-why-title {
                font-size: 1.875rem !important;
                line-height: 2.25rem !important;
            }
        }

        .gcs-services-stats-grid {
            display: grid !important;
            gap: 2rem !important;
            margin-bottom: 2rem !important;
        }

        @media (min-width: 768px) {
            .gcs-services-stats-grid {
                grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
            }
        }

        .gcs-services-stat {
            text-align: center !important;
        }

        .gcs-services-stat-value {
            font-size: 1.875rem !important;
            line-height: 2.25rem !important;
            color: #0066CC !important;
            margin-bottom: 0.5rem !important;
            font-weight: 700 !important;
        }

        .gcs-services-stat-label {
            color: #4b5563 !important;
            font-size: 0.875rem !important;
            line-height: 1.25rem !important;
        }

        .gcs-services-why-text {
            color: #374151 !important;
            font-size: 1rem !important;
            line-height: 1.75rem !important;
            margin-bottom: 2rem !important;
        }

        /* CTA Button - AGGRESSIVE ISOLATION */
        .gcs-services-cta-button,
        a.gcs-services-cta-button,
        .gcs-services-wrapper .gcs-services-cta-button,
        .gcs-services-wrapper a.gcs-services-cta-button {
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            gap: 0.5rem !important;
            height: 2.75rem !important;
            padding: 0.625rem 2rem !important;
            background-color: #0066CC !important;
            background-image: none !important;
            background: #0066CC !important;
            color: #ffffff !important;
            font-size: 1rem !important;
            font-weight: 500 !important;
            border-radius: 0.5rem !important;
            border: none !important;
            cursor: pointer !important;
            text-decoration: none !important;
            transition: background-color 0.15s !important;
            -webkit-appearance: none !important;
            -moz-appearance: none !important;
            appearance: none !important;
        }

        .gcs-services-cta-button:hover,
        a.gcs-services-cta-button:hover {
            background-color: #0052A3 !important;
            background-image: none !important;
            background: #0052A3 !important;
        }

        .gcs-services-cta-arrow {
            width: 1rem !important;
            height: 1rem !important;
            color: #ffffff !important;
            stroke: currentColor !important;
            fill: none !important;
        }
    </style>

    <script>
        (function() {
            // Header scroll effect - same as homepage
            const header = document.querySelector('.gcs-services-header');
            const mobileToggle = document.querySelector('.gcs-services-mobile-toggle');
            const mobileMenu = document.querySelector('.gcs-services-mobile-menu');

            function handleScroll() {
                if (window.scrollY > 20) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            }

            // Initialize scroll effect
            if (header) {
                window.addEventListener('scroll', handleScroll);
                handleScroll(); // Call once on load
            }

            // Mobile menu toggle
            if (mobileToggle && mobileMenu) {
                mobileToggle.addEventListener('click', function() {
                    mobileToggle.classList.toggle('active');
                    mobileMenu.classList.toggle('open');
                });
            }

            // Close mobile menu when link clicked
            const mobileLinks = document.querySelectorAll('.gcs-services-mobile-link');
            mobileLinks.forEach(function(link) {
                link.addEventListener('click', function() {
                    if (mobileToggle && mobileMenu) {
                        mobileToggle.classList.remove('active');
                        mobileMenu.classList.remove('open');
                    }
                });
            });
        })();
    </script>

    <?php
    return ob_get_clean();
}

add_shortcode('gcs_services_page', 'gcs_services_page_shortcode');

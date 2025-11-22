<?php
/**
 * Global Credit Solutions - Homepage Sections Shortcode
 *
 * Shortcode: [gcs_homepage_sections]
 *
 * EXACT FIGMA DESIGN - Rebuilt from scratch
 * Includes: ServicesGrid, ProcessSteps, Benefits, Testimonials
 * - All Tailwind classes converted precisely
 * - Lucide SVG icons
 * - No assumptions, no modifications
 */

function gcs_homepage_sections_shortcode() {
    ob_start();
    ?>

    <div class="gcs-hs-wrapper">

        <!-- ==================== SERVICES GRID ==================== -->
        <!-- py-16 bg-[#F5F7FA] -->
        <section id="services" class="gcs-hs-services">
            <!-- container mx-auto px-4 -->
            <div class="gcs-hs-container">
                <!-- text-center mb-12 -->
                <div class="gcs-hs-section-header">
                    <!-- text-[#003D7A] mb-4 text-2xl md:text-3xl -->
                    <h2 class="gcs-hs-section-title">Serviciile Noastre</h2>
                    <!-- text-gray-600 max-w-2xl mx-auto -->
                    <p class="gcs-hs-section-subtitle">Oferim soluții complete pentru toate tipurile de credite. Indiferent de nevoile tale, te ajutăm să găsești cea mai bună opțiune.</p>
                </div>

                <!-- grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 -->
                <div class="gcs-hs-services-grid">

                    <!-- Service 1: User Icon -->
                    <div class="gcs-hs-service-card">
                        <!-- inline-flex items-center justify-center w-14 h-14 bg-[#0066CC]/10 rounded-lg mb-4 group-hover:bg-[#0066CC] -->
                        <div class="gcs-hs-service-icon-wrapper">
                            <!-- w-7 h-7 text-[#0066CC] group-hover:text-white -->
                            <svg class="gcs-hs-service-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <!-- text-[#003D7A] mb-3 -->
                        <h3 class="gcs-hs-service-title">Credite de Nevoi Personale</h3>
                        <!-- text-gray-600 mb-4 -->
                        <p class="gcs-hs-service-desc">Credite rapide pentru orice proiect personal. Soluții personalizate adaptate nevoilor tale financiare.</p>
                        <!-- text-[#0066CC] hover:underline inline-flex items-center gap-1 -->
                        <a href="<?php echo home_url('/servicii'); ?>" class="gcs-hs-service-link">
                            Vezi mai mult
                            <!-- w-4 h-4 group-hover:translate-x-1 -->
                            <svg class="gcs-hs-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>

                    <!-- Service 2: Home Icon -->
                    <div class="gcs-hs-service-card">
                        <div class="gcs-hs-service-icon-wrapper">
                            <svg class="gcs-hs-service-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                        </div>
                        <h3 class="gcs-hs-service-title">Credit Ipotecar/Prima Casă</h3>
                        <p class="gcs-hs-service-desc">Finanțare pentru achiziția casei tale. Rate flexibile și dobânzi competitive de la bănci de top.</p>
                        <a href="<?php echo home_url('/servicii'); ?>" class="gcs-hs-service-link">
                            Vezi mai mult
                            <svg class="gcs-hs-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>

                    <!-- Service 3: Car Icon -->
                    <div class="gcs-hs-service-card">
                        <div class="gcs-hs-service-icon-wrapper">
                            <svg class="gcs-hs-service-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2"></path>
                                <circle cx="7" cy="17" r="2"></circle>
                                <path d="M9 17h6"></path>
                                <circle cx="17" cy="17" r="2"></circle>
                            </svg>
                        </div>
                        <h3 class="gcs-hs-service-title">Credite Auto/Leasing</h3>
                        <p class="gcs-hs-service-desc">Finanțare pentru mașina visurilor tale. Soluții de credit auto și leasing cu condiții avantajoase.</p>
                        <a href="<?php echo home_url('/servicii'); ?>" class="gcs-hs-service-link">
                            Vezi mai mult
                            <svg class="gcs-hs-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>

                    <!-- Service 4: Briefcase Icon -->
                    <div class="gcs-hs-service-card">
                        <div class="gcs-hs-service-icon-wrapper">
                            <svg class="gcs-hs-service-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect width="20" height="14" x="2" y="7" rx="2" ry="2"></rect>
                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                            </svg>
                        </div>
                        <h3 class="gcs-hs-service-title">Credite/Linii de Credit pentru Persoane Juridice</h3>
                        <p class="gcs-hs-service-desc">Credite pentru afaceri și IMM-uri. Capital de lucru, investiții sau extindere pentru compania ta.</p>
                        <a href="<?php echo home_url('/servicii'); ?>" class="gcs-hs-service-link">
                            Vezi mai mult
                            <svg class="gcs-hs-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>

                    <!-- Service 5: RefreshCw Icon -->
                    <div class="gcs-hs-service-card">
                        <div class="gcs-hs-service-icon-wrapper">
                            <svg class="gcs-hs-service-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 2v6h-6"></path>
                                <path d="M3 12a9 9 0 0 1 15-6.7L21 8"></path>
                                <path d="M3 22v-6h6"></path>
                                <path d="M21 12a9 9 0 0 1-15 6.7L3 16"></path>
                            </svg>
                        </div>
                        <h3 class="gcs-hs-service-title">Refinanțări de Credit</h3>
                        <p class="gcs-hs-service-desc">Refinanțează creditele existente și economisește bani. Dobândă mai mică, rată redusă.</p>
                        <a href="<?php echo home_url('/servicii'); ?>" class="gcs-hs-service-link">
                            Vezi mai mult
                            <svg class="gcs-hs-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>

                    <!-- Service 6: Settings Icon -->
                    <div class="gcs-hs-service-card">
                        <div class="gcs-hs-service-icon-wrapper">
                            <svg class="gcs-hs-service-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                        </div>
                        <h3 class="gcs-hs-service-title">Alte Servicii</h3>
                        <p class="gcs-hs-service-desc">Ștergere istoric negativ, consultanță financiară și alte soluții personalizate pentru nevoile tale.</p>
                        <a href="<?php echo home_url('/servicii'); ?>" class="gcs-hs-service-link">
                            Vezi mai mult
                            <svg class="gcs-hs-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <!-- ==================== BENEFITS ==================== -->
        <!-- py-16 bg-white -->
        <section class="gcs-hs-benefits">
            <div class="gcs-hs-container">
                <div class="gcs-hs-section-header">
                    <h2 class="gcs-hs-section-title">De Ce Să Alegi Global Credit Solutions?</h2>
                    <p class="gcs-hs-section-subtitle">Suntem partenerii tăi de încredere în obținerea celui mai bun credit. Iată ce ne face diferiți.</p>
                </div>

                <!-- grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto -->
                <div class="gcs-hs-benefits-grid">

                    <!-- Benefit 1: DollarSign - bg-[#F5F7FA] -->
                    <div class="gcs-hs-benefit-card gcs-hs-benefit-alt">
                        <div class="gcs-hs-benefit-icon-wrapper">
                            <!-- w-12 h-12 bg-[#0066CC] rounded-lg -->
                            <div class="gcs-hs-benefit-icon-circle">
                                <!-- w-6 h-6 text-white -->
                                <svg class="gcs-hs-benefit-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="12" x2="12" y1="2" y2="22"></line>
                                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="gcs-hs-benefit-content">
                            <!-- text-[#003D7A] mb-2 -->
                            <h3 class="gcs-hs-benefit-title">Comisioane Competitive</h3>
                            <!-- text-sm text-gray-600 -->
                            <p class="gcs-hs-benefit-desc">Oferim servicii de brokeraj cu comisioane transparente și competitive. Te ajutăm să economisești timp și bani în procesul de creditare.</p>
                        </div>
                    </div>

                    <!-- Benefit 2: Building2 - bg-white border-2 border-[#F5F7FA] -->
                    <div class="gcs-hs-benefit-card gcs-hs-benefit-border">
                        <div class="gcs-hs-benefit-icon-wrapper">
                            <div class="gcs-hs-benefit-icon-circle">
                                <svg class="gcs-hs-benefit-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
                        </div>
                        <div class="gcs-hs-benefit-content">
                            <h3 class="gcs-hs-benefit-title">Acces la Toate Băncile</h3>
                            <p class="gcs-hs-benefit-desc">Avem parteneriate cu peste 30 de bănci și instituții financiare. Comparăm toate ofertele pentru tine.</p>
                        </div>
                    </div>

                    <!-- Benefit 3: TrendingDown -->
                    <div class="gcs-hs-benefit-card gcs-hs-benefit-alt">
                        <div class="gcs-hs-benefit-icon-wrapper">
                            <div class="gcs-hs-benefit-icon-circle">
                                <svg class="gcs-hs-benefit-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="22 17 13.5 8.5 8.5 13.5 2 7"></polyline>
                                    <polyline points="16 17 22 17 22 11"></polyline>
                                </svg>
                            </div>
                        </div>
                        <div class="gcs-hs-benefit-content">
                            <h3 class="gcs-hs-benefit-title">Dobânzi Negociate Mai Bune</h3>
                            <p class="gcs-hs-benefit-desc">Datorită volumului mare de credite intermediate, obținem condiții mai avantajoase decât dacă te-ai duce singur la bancă.</p>
                        </div>
                    </div>

                    <!-- Benefit 4: FileCheck -->
                    <div class="gcs-hs-benefit-card gcs-hs-benefit-border">
                        <div class="gcs-hs-benefit-icon-wrapper">
                            <div class="gcs-hs-benefit-icon-circle">
                                <svg class="gcs-hs-benefit-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <path d="m9 15 2 2 4-4"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="gcs-hs-benefit-content">
                            <h3 class="gcs-hs-benefit-title">Suport Complet</h3>
                            <p class="gcs-hs-benefit-desc">Te asistăm din momentul aplicării până la semnarea contractului. Pregătim dosarul și documentația necesară.</p>
                        </div>
                    </div>

                    <!-- Benefit 5: Zap -->
                    <div class="gcs-hs-benefit-card gcs-hs-benefit-alt">
                        <div class="gcs-hs-benefit-icon-wrapper">
                            <div class="gcs-hs-benefit-icon-circle">
                                <svg class="gcs-hs-benefit-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                </svg>
                            </div>
                        </div>
                        <div class="gcs-hs-benefit-content">
                            <h3 class="gcs-hs-benefit-title">Soluții Rapide și Transparente</h3>
                            <p class="gcs-hs-benefit-desc">Primești răspuns în cel mai scurt timp. Fără taxe ascunse, fără surprize neplăcute. Totul e clar de la început.</p>
                        </div>
                    </div>

                    <!-- Benefit 6: Shield -->
                    <div class="gcs-hs-benefit-card gcs-hs-benefit-border">
                        <div class="gcs-hs-benefit-icon-wrapper">
                            <div class="gcs-hs-benefit-icon-circle">
                                <svg class="gcs-hs-benefit-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="gcs-hs-benefit-content">
                            <h3 class="gcs-hs-benefit-title">Nu Afectează Scorul de Credit</h3>
                            <p class="gcs-hs-benefit-desc">Consultarea noastră și compararea ofertelor nu implică interogări ale Biroului de Credit care să îți afecteze scorul.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ==================== PROCESS STEPS ==================== -->
        <!-- py-16 bg-white -->
        <section id="process" class="gcs-hs-process">
            <div class="gcs-hs-container">
                <div class="gcs-hs-section-header">
                    <h2 class="gcs-hs-section-title">Cum Obții Creditul în 5 Pași Simpli</h2>
                    <p class="gcs-hs-section-subtitle">Procesul nostru este simplu, transparent și rapid. De la aplicare la aprobare, te ghidăm în fiecare etapă.</p>
                </div>

                <!-- Desktop Timeline: hidden lg:block max-w-6xl mx-auto -->
                <div class="gcs-hs-timeline-desktop">
                    <!-- relative -->
                    <div class="gcs-hs-timeline-wrapper">
                        <!-- Connection Line: absolute top-12 left-0 right-0 h-1 bg-[#0066CC]/20 -->
                        <div class="gcs-hs-timeline-line">
                            <!-- h-full bg-[#0066CC] -->
                            <div class="gcs-hs-timeline-progress"></div>
                        </div>

                        <!-- Steps: relative grid grid-cols-5 gap-4 -->
                        <div class="gcs-hs-steps-grid">

                            <!-- Step 1: FileText -->
                            <div class="gcs-hs-step">
                                <!-- relative inline-flex items-center justify-center w-24 h-24 bg-white border-4 border-[#0066CC] rounded-full mb-4 shadow-lg -->
                                <div class="gcs-hs-step-circle">
                                    <!-- w-10 h-10 text-[#0066CC] -->
                                    <svg class="gcs-hs-step-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                        <polyline points="14 2 14 8 20 8"></polyline>
                                        <line x1="16" x2="8" y1="13" y2="13"></line>
                                        <line x1="16" x2="8" y1="17" y2="17"></line>
                                        <polyline points="10 9 9 9 8 9"></polyline>
                                    </svg>
                                </div>
                                <!-- text-[#003D7A] mb-2 -->
                                <div class="gcs-hs-step-title">Completezi formularul</div>
                                <!-- text-sm text-gray-600 -->
                                <p class="gcs-hs-step-desc">Trimite-ne câteva informații simple despre nevoile tale.</p>
                            </div>

                            <!-- Step 2: Inbox -->
                            <div class="gcs-hs-step">
                                <div class="gcs-hs-step-circle">
                                    <svg class="gcs-hs-step-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                        <path d="M5.45 5.11 2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path>
                                    </svg>
                                </div>
                                <div class="gcs-hs-step-title">Primești oferte</div>
                                <p class="gcs-hs-step-desc">Analizăm și negociem cu băncile partenere în numele tău.</p>
                            </div>

                            <!-- Step 3: GitCompare -->
                            <div class="gcs-hs-step">
                                <div class="gcs-hs-step-circle">
                                    <svg class="gcs-hs-step-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="18" cy="18" r="3"></circle>
                                        <circle cx="6" cy="6" r="3"></circle>
                                        <path d="M13 6h3a2 2 0 0 1 2 2v7"></path>
                                        <line x1="6" x2="6" y1="9" y2="21"></line>
                                    </svg>
                                </div>
                                <div class="gcs-hs-step-title">Compari și alegi</div>
                                <p class="gcs-hs-step-desc">Îți prezentăm cele mai bune oferte personalizate pentru tine.</p>
                            </div>

                            <!-- Step 4: Briefcase -->
                            <div class="gcs-hs-step">
                                <div class="gcs-hs-step-circle">
                                    <svg class="gcs-hs-step-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect width="20" height="14" x="2" y="7" rx="2" ry="2"></rect>
                                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                    </svg>
                                </div>
                                <div class="gcs-hs-step-title">Broker pregătește dosarul</div>
                                <p class="gcs-hs-step-desc">Ne ocupăm de toată birocrația și documentația necesară.</p>
                            </div>

                            <!-- Step 5: CheckCircle2 -->
                            <div class="gcs-hs-step">
                                <div class="gcs-hs-step-circle">
                                    <svg class="gcs-hs-step-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
                                        <path d="m9 12 2 2 4-4"></path>
                                    </svg>
                                </div>
                                <div class="gcs-hs-step-title">Obții creditul aprobat</div>
                                <p class="gcs-hs-step-desc">Semnezi contractul și primești banii în cont rapid.</p>
                            </div>

                        </div>
                    </div>

                    <!-- text-center mt-12 bg-[#F5F7FA] rounded-lg p-4 max-w-md mx-auto -->
                    <div class="gcs-hs-timeline-note">
                        <p class="gcs-hs-timeline-text">⏱️ Procesul durează 2-3 zile în medie</p>
                    </div>
                </div>

                <!-- Mobile Timeline: lg:hidden space-y-6 -->
                <div class="gcs-hs-timeline-mobile">

                    <!-- Step 1 Mobile -->
                    <div class="gcs-hs-step-mobile">
                        <div class="gcs-hs-step-mobile-icon-wrapper">
                            <!-- relative inline-flex items-center justify-center w-16 h-16 bg-white border-4 border-[#0066CC] rounded-full shadow-lg -->
                            <div class="gcs-hs-step-mobile-circle">
                                <!-- w-7 h-7 text-[#0066CC] -->
                                <svg class="gcs-hs-step-mobile-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" x2="8" y1="13" y2="13"></line>
                                    <line x1="16" x2="8" y1="17" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                            </div>
                            <!-- w-1 h-16 bg-[#0066CC]/20 mx-auto mt-2 -->
                            <div class="gcs-hs-step-connector"></div>
                        </div>
                        <div class="gcs-hs-step-mobile-content">
                            <div class="gcs-hs-step-mobile-title">Completezi formularul</div>
                            <p class="gcs-hs-step-mobile-desc">Trimite-ne câteva informații simple despre nevoile tale.</p>
                        </div>
                    </div>

                    <!-- Step 2 Mobile -->
                    <div class="gcs-hs-step-mobile">
                        <div class="gcs-hs-step-mobile-icon-wrapper">
                            <div class="gcs-hs-step-mobile-circle">
                                <svg class="gcs-hs-step-mobile-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                    <path d="M5.45 5.11 2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path>
                                </svg>
                            </div>
                            <div class="gcs-hs-step-connector"></div>
                        </div>
                        <div class="gcs-hs-step-mobile-content">
                            <div class="gcs-hs-step-mobile-title">Primești oferte</div>
                            <p class="gcs-hs-step-mobile-desc">Analizăm și negociem cu băncile partenere în numele tău.</p>
                        </div>
                    </div>

                    <!-- Step 3 Mobile -->
                    <div class="gcs-hs-step-mobile">
                        <div class="gcs-hs-step-mobile-icon-wrapper">
                            <div class="gcs-hs-step-mobile-circle">
                                <svg class="gcs-hs-step-mobile-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="18" cy="18" r="3"></circle>
                                    <circle cx="6" cy="6" r="3"></circle>
                                    <path d="M13 6h3a2 2 0 0 1 2 2v7"></path>
                                    <line x1="6" x2="6" y1="9" y2="21"></line>
                                </svg>
                            </div>
                            <div class="gcs-hs-step-connector"></div>
                        </div>
                        <div class="gcs-hs-step-mobile-content">
                            <div class="gcs-hs-step-mobile-title">Compari și alegi</div>
                            <p class="gcs-hs-step-mobile-desc">Îți prezentăm cele mai bune oferte personalizate pentru tine.</p>
                        </div>
                    </div>

                    <!-- Step 4 Mobile -->
                    <div class="gcs-hs-step-mobile">
                        <div class="gcs-hs-step-mobile-icon-wrapper">
                            <div class="gcs-hs-step-mobile-circle">
                                <svg class="gcs-hs-step-mobile-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect width="20" height="14" x="2" y="7" rx="2" ry="2"></rect>
                                    <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                </svg>
                            </div>
                            <div class="gcs-hs-step-connector"></div>
                        </div>
                        <div class="gcs-hs-step-mobile-content">
                            <div class="gcs-hs-step-mobile-title">Broker pregătește dosarul</div>
                            <p class="gcs-hs-step-mobile-desc">Ne ocupăm de toată birocrația și documentația necesară.</p>
                        </div>
                    </div>

                    <!-- Step 5 Mobile - No connector -->
                    <div class="gcs-hs-step-mobile">
                        <div class="gcs-hs-step-mobile-icon-wrapper">
                            <div class="gcs-hs-step-mobile-circle">
                                <svg class="gcs-hs-step-mobile-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
                                    <path d="m9 12 2 2 4-4"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="gcs-hs-step-mobile-content">
                            <div class="gcs-hs-step-mobile-title">Obții creditul aprobat</div>
                            <p class="gcs-hs-step-mobile-desc">Semnezi contractul și primești banii în cont rapid.</p>
                        </div>
                    </div>

                    <!-- bg-[#F5F7FA] rounded-lg p-4 text-center mt-8 -->
                    <div class="gcs-hs-timeline-note-mobile">
                        <p class="gcs-hs-timeline-text">⏱️ Procesul durează 2-3 zile în medie</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== TESTIMONIALS ==================== -->
        <!-- py-16 bg-[#F5F7FA] -->
        <section class="gcs-hs-testimonials">
            <div class="gcs-hs-container">
                <div class="gcs-hs-section-header">
                    <h2 class="gcs-hs-section-title">Ce Spun Clienții Noștri</h2>
                    <p class="gcs-hs-section-subtitle">Peste 65.000 de clienți mulțumiți care au obținut credite prin serviciile noastre.</p>
                </div>

                <!-- max-w-4xl mx-auto -->
                <div class="gcs-hs-testimonial-wrapper">
                    <!-- relative -->
                    <div class="gcs-hs-testimonial-container">

                        <!-- Main Card: bg-white rounded-2xl shadow-xl p-8 md:p-12 relative overflow-hidden -->
                        <div class="gcs-hs-testimonial-card">
                            <!-- Quote Icon: absolute top-6 right-6 opacity-10 -->
                            <div class="gcs-hs-quote-bg">
                                <!-- w-24 h-24 text-[#0066CC] -->
                                <svg class="gcs-hs-quote-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z"></path>
                                    <path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"></path>
                                </svg>
                            </div>

                            <!-- relative -->
                            <div class="gcs-hs-testimonial-content">
                                <!-- Rating: flex gap-1 mb-6 -->
                                <div class="gcs-hs-rating">
                                    <svg class="gcs-hs-star" viewBox="0 0 24 24" fill="#FFB800" stroke="#FFB800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg>
                                    <svg class="gcs-hs-star" viewBox="0 0 24 24" fill="#FFB800" stroke="#FFB800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg>
                                    <svg class="gcs-hs-star" viewBox="0 0 24 24" fill="#FFB800" stroke="#FFB800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg>
                                    <svg class="gcs-hs-star" viewBox="0 0 24 24" fill="#FFB800" stroke="#FFB800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg>
                                    <svg class="gcs-hs-star" viewBox="0 0 24 24" fill="#FFB800" stroke="#FFB800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg>
                                </div>

                                <!-- Quote Text: text-gray-700 mb-6 text-lg -->
                                <blockquote class="gcs-hs-quote" id="gcs-testimonial-quote">
                                    "Am economisit 15.000 lei prin refinanțare! Echipa Global Credit Solutions a fost excepțională. M-au ghidat pas cu pas și au negociat o dobândă mult mai bună decât aveam anterior."
                                </blockquote>

                                <!-- Result Badge: inline-block bg-[#0066CC]/10 text-[#0066CC] px-4 py-2 rounded-full text-sm mb-6 -->
                                <div class="gcs-hs-result-badge" id="gcs-testimonial-result">
                                    ✓ Economie de 15.000 RON
                                </div>

                                <!-- Author: flex items-center gap-4 -->
                                <div class="gcs-hs-author">
                                    <!-- w-14 h-14 bg-[#0066CC] rounded-full flex items-center justify-center text-white -->
                                    <div class="gcs-hs-avatar" id="gcs-testimonial-avatar">M</div>
                                    <div>
                                        <!-- text-[#003D7A] -->
                                        <div class="gcs-hs-author-name" id="gcs-testimonial-name">Mihai T.</div>
                                        <!-- text-sm text-gray-500 -->
                                        <div class="gcs-hs-author-location" id="gcs-testimonial-location">București</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Navigation: flex justify-center gap-4 mt-8 -->
                        <div class="gcs-hs-nav">
                            <!-- Prev Button -->
                            <button class="gcs-hs-nav-btn" id="gcs-prev-btn" aria-label="Previous testimonial">
                                <!-- w-5 h-5 -->
                                <svg class="gcs-hs-nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="15 18 9 12 15 6"></polyline>
                                </svg>
                            </button>

                            <!-- Dot Indicators: flex items-center gap-2 -->
                            <div class="gcs-hs-dots">
                                <button class="gcs-hs-dot gcs-hs-dot-active" data-index="0"></button>
                                <button class="gcs-hs-dot" data-index="1"></button>
                                <button class="gcs-hs-dot" data-index="2"></button>
                                <button class="gcs-hs-dot" data-index="3"></button>
                            </div>

                            <!-- Next Button -->
                            <button class="gcs-hs-nav-btn" id="gcs-next-btn" aria-label="Next testimonial">
                                <svg class="gcs-hs-nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <style>
        /* ==================== RESET ==================== */
        .gcs-hs-wrapper {
            all: initial !important;
            display: block !important;
        }

        .gcs-hs-wrapper *,
        .gcs-hs-wrapper *::before,
        .gcs-hs-wrapper *::after {
            box-sizing: border-box !important;
        }

        /* Global font */
        .gcs-hs-wrapper,
        .gcs-hs-wrapper * {
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif !important;
        }

        /* ==================== COMMON STYLES ==================== */

        /* container mx-auto px-4 */
        .gcs-hs-container {
            width: 100% !important;
            max-width: 80rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }

        /* text-center mb-12 */
        .gcs-hs-section-header {
            text-align: center !important;
            margin-bottom: 3rem !important; /* mb-12 */
        }

        /* text-[#003D7A] mb-4 text-2xl md:text-3xl */
        .gcs-hs-section-title {
            color: #003D7A !important;
            margin-bottom: 1rem !important; /* mb-4 */
            font-size: 1.5rem !important; /* text-2xl */
            line-height: 2rem !important;
            font-weight: 400 !important;
            margin-top: 0 !important;
        }

        @media (min-width: 768px) {
            .gcs-hs-section-title {
                font-size: 1.875rem !important; /* md:text-3xl */
                line-height: 2.25rem !important;
            }
        }

        /* text-gray-600 max-w-2xl mx-auto */
        .gcs-hs-section-subtitle {
            color: #4b5563 !important; /* text-gray-600 */
            max-width: 42rem !important; /* max-w-2xl */
            margin-left: auto !important;
            margin-right: auto !important;
            font-size: 1rem !important;
            line-height: 1.5rem !important;
            margin-top: 0 !important;
            margin-bottom: 0 !important;
        }

        /* ==================== SERVICES GRID ==================== */

        /* py-16 bg-[#F5F7FA] */
        .gcs-hs-services {
            padding-top: 4rem !important; /* py-16 */
            padding-bottom: 4rem !important;
            background-color: #F5F7FA !important;
        }

        /* grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 */
        .gcs-hs-services-grid {
            display: grid !important;
            grid-template-columns: repeat(1, minmax(0, 1fr)) !important;
            gap: 1.5rem !important; /* gap-6 */
        }

        @media (min-width: 768px) {
            .gcs-hs-services-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
            }
        }

        @media (min-width: 1024px) {
            .gcs-hs-services-grid {
                grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
            }
        }

        /* bg-white rounded-xl p-6 hover:shadow-xl transition-all duration-300 hover:-translate-y-2 group cursor-pointer */
        .gcs-hs-service-card {
            background-color: #ffffff !important;
            border-radius: 0.75rem !important; /* rounded-xl */
            padding: 1.5rem !important; /* p-6 */
            transition-property: all !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 300ms !important;
            cursor: pointer !important;
            transform: translateY(0) !important;
        }

        .gcs-hs-service-card:hover {
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04) !important; /* hover:shadow-xl */
            transform: translateY(-0.5rem) !important; /* hover:-translate-y-2 */
        }

        /* inline-flex items-center justify-center w-14 h-14 bg-[#0066CC]/10 rounded-lg mb-4 group-hover:bg-[#0066CC] */
        .gcs-hs-service-icon-wrapper {
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            width: 3.5rem !important; /* w-14 */
            height: 3.5rem !important; /* h-14 */
            background-color: rgba(0, 102, 204, 0.1) !important; /* bg-[#0066CC]/10 */
            border-radius: 0.5rem !important; /* rounded-lg */
            margin-bottom: 1rem !important; /* mb-4 */
            transition-property: background-color !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 150ms !important;
        }

        .gcs-hs-service-card:hover .gcs-hs-service-icon-wrapper {
            background-color: #0066CC !important;
        }

        /* w-7 h-7 text-[#0066CC] group-hover:text-white */
        .gcs-hs-service-icon {
            width: 1.75rem !important; /* w-7 */
            height: 1.75rem !important; /* h-7 */
            color: #0066CC !important;
            transition-property: color !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 150ms !important;
        }

        .gcs-hs-service-card:hover .gcs-hs-service-icon {
            color: #ffffff !important;
        }

        /* text-[#003D7A] mb-3 */
        .gcs-hs-service-title {
            color: #003D7A !important;
            margin-bottom: 0.75rem !important; /* mb-3 */
            font-size: 1.125rem !important; /* text-lg */
            line-height: 1.75rem !important;
            font-weight: 500 !important;
            margin-top: 0 !important;
        }

        /* text-gray-600 mb-4 */
        .gcs-hs-service-desc {
            color: #4b5563 !important;
            margin-bottom: 1rem !important; /* mb-4 */
            font-size: 0.875rem !important;
            line-height: 1.25rem !important;
            margin-top: 0 !important;
        }

        /* text-[#0066CC] hover:underline inline-flex items-center gap-1 */
        .gcs-hs-service-link {
            color: #0066CC !important;
            display: inline-flex !important;
            align-items: center !important;
            gap: 0.25rem !important; /* gap-1 */
            text-decoration: none !important;
            font-size: 0.875rem !important;
            transition-property: all !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 150ms !important;
        }

        .gcs-hs-service-link:hover {
            text-decoration: underline !important;
        }

        /* w-4 h-4 group-hover:translate-x-1 */
        .gcs-hs-arrow {
            width: 1rem !important;
            height: 1rem !important;
            transition-property: transform !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 150ms !important;
        }

        .gcs-hs-service-card:hover .gcs-hs-arrow {
            transform: translateX(0.25rem) !important;
        }

        /* ==================== BENEFITS ==================== */

        /* py-16 bg-white */
        .gcs-hs-benefits {
            padding-top: 4rem !important;
            padding-bottom: 4rem !important;
            background-color: #ffffff !important;
        }

        /* grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto */
        .gcs-hs-benefits-grid {
            display: grid !important;
            grid-template-columns: repeat(1, minmax(0, 1fr)) !important;
            gap: 2rem !important; /* gap-8 */
            max-width: 72rem !important; /* max-w-6xl */
            margin-left: auto !important;
            margin-right: auto !important;
        }

        @media (min-width: 768px) {
            .gcs-hs-benefits-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
            }
        }

        @media (min-width: 1024px) {
            .gcs-hs-benefits-grid {
                grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
            }
        }

        /* flex gap-4 p-6 rounded-xl */
        .gcs-hs-benefit-card {
            display: flex !important;
            gap: 1rem !important; /* gap-4 */
            padding: 1.5rem !important; /* p-6 */
            border-radius: 0.75rem !important; /* rounded-xl */
        }

        /* bg-[#F5F7FA] */
        .gcs-hs-benefit-alt {
            background-color: #F5F7FA !important;
        }

        /* bg-white border-2 border-[#F5F7FA] */
        .gcs-hs-benefit-border {
            background-color: #ffffff !important;
            border: 2px solid #F5F7FA !important;
        }

        /* flex-shrink-0 */
        .gcs-hs-benefit-icon-wrapper {
            flex-shrink: 0 !important;
        }

        /* w-12 h-12 bg-[#0066CC] rounded-lg flex items-center justify-center */
        .gcs-hs-benefit-icon-circle {
            width: 3rem !important; /* w-12 */
            height: 3rem !important; /* h-12 */
            background-color: #0066CC !important;
            border-radius: 0.5rem !important; /* rounded-lg */
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
        }

        /* w-6 h-6 text-white */
        .gcs-hs-benefit-icon {
            width: 1.5rem !important; /* w-6 */
            height: 1.5rem !important; /* h-6 */
            color: #ffffff !important;
        }

        .gcs-hs-benefit-content {
            flex: 1 !important;
        }

        /* text-[#003D7A] mb-2 */
        .gcs-hs-benefit-title {
            color: #003D7A !important;
            margin-bottom: 0.5rem !important; /* mb-2 */
            font-size: 1.125rem !important; /* text-lg */
            line-height: 1.75rem !important;
            font-weight: 500 !important;
            margin-top: 0 !important;
        }

        /* text-sm text-gray-600 */
        .gcs-hs-benefit-desc {
            font-size: 0.875rem !important; /* text-sm */
            line-height: 1.25rem !important;
            color: #4b5563 !important;
            margin: 0 !important;
        }

        /* ==================== PROCESS STEPS ==================== */

        /* py-16 bg-white */
        .gcs-hs-process {
            padding-top: 4rem !important;
            padding-bottom: 4rem !important;
            background-color: #ffffff !important;
        }

        /* hidden lg:block max-w-6xl mx-auto */
        .gcs-hs-timeline-desktop {
            display: none !important;
        }

        @media (min-width: 1024px) {
            .gcs-hs-timeline-desktop {
                display: block !important;
                max-width: 72rem !important;
                margin-left: auto !important;
                margin-right: auto !important;
            }
        }

        /* relative */
        .gcs-hs-timeline-wrapper {
            position: relative !important;
        }

        /* absolute top-12 left-0 right-0 h-1 bg-[#0066CC]/20 */
        .gcs-hs-timeline-line {
            position: absolute !important;
            top: 3rem !important; /* top-12 */
            left: 0 !important;
            right: 0 !important;
            height: 0.25rem !important; /* h-1 */
            background-color: rgba(0, 102, 204, 0.2) !important;
        }

        /* h-full bg-[#0066CC] */
        .gcs-hs-timeline-progress {
            height: 100% !important;
            background-color: #0066CC !important;
            width: 100% !important;
        }

        /* relative grid grid-cols-5 gap-4 */
        .gcs-hs-steps-grid {
            position: relative !important;
            display: grid !important;
            grid-template-columns: repeat(5, minmax(0, 1fr)) !important;
            gap: 1rem !important; /* gap-4 */
        }

        /* text-center */
        .gcs-hs-step {
            text-align: center !important;
        }

        /* relative inline-flex items-center justify-center w-24 h-24 bg-white border-4 border-[#0066CC] rounded-full mb-4 shadow-lg */
        .gcs-hs-step-circle {
            position: relative !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            width: 6rem !important; /* w-24 */
            height: 6rem !important; /* h-24 */
            background-color: #ffffff !important;
            border: 4px solid #0066CC !important;
            border-radius: 50% !important; /* rounded-full */
            margin-bottom: 1rem !important; /* mb-4 */
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05) !important; /* shadow-lg */
        }

        /* w-10 h-10 text-[#0066CC] */
        .gcs-hs-step-icon {
            width: 2.5rem !important; /* w-10 */
            height: 2.5rem !important; /* h-10 */
            color: #0066CC !important;
        }

        /* text-[#003D7A] mb-2 */
        .gcs-hs-step-title {
            color: #003D7A !important;
            margin-bottom: 0.5rem !important; /* mb-2 */
            font-size: 1rem !important;
            font-weight: 500 !important;
        }

        /* text-sm text-gray-600 */
        .gcs-hs-step-desc {
            font-size: 0.875rem !important; /* text-sm */
            line-height: 1.25rem !important;
            color: #4b5563 !important;
            margin: 0 !important;
        }

        /* text-center mt-12 bg-[#F5F7FA] rounded-lg p-4 max-w-md mx-auto */
        .gcs-hs-timeline-note {
            text-align: center !important;
            margin-top: 3rem !important; /* mt-12 */
            background-color: #F5F7FA !important;
            border-radius: 0.5rem !important; /* rounded-lg */
            padding: 1rem !important; /* p-4 */
            max-width: 28rem !important; /* max-w-md */
            margin-left: auto !important;
            margin-right: auto !important;
        }

        /* text-[#003D7A] */
        .gcs-hs-timeline-text {
            color: #003D7A !important;
            margin: 0 !important;
            font-size: 1rem !important;
        }

        /* ==================== PROCESS STEPS MOBILE ==================== */

        /* lg:hidden space-y-6 */
        .gcs-hs-timeline-mobile {
            display: flex !important;
            flex-direction: column !important;
            gap: 1.5rem !important; /* space-y-6 */
        }

        @media (min-width: 1024px) {
            .gcs-hs-timeline-mobile {
                display: none !important;
            }
        }

        /* flex gap-4 */
        .gcs-hs-step-mobile {
            display: flex !important;
            gap: 1rem !important; /* gap-4 */
        }

        /* flex-shrink-0 */
        .gcs-hs-step-mobile-icon-wrapper {
            flex-shrink: 0 !important;
        }

        /* relative inline-flex items-center justify-center w-16 h-16 bg-white border-4 border-[#0066CC] rounded-full shadow-lg */
        .gcs-hs-step-mobile-circle {
            position: relative !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            width: 4rem !important; /* w-16 */
            height: 4rem !important; /* h-16 */
            background-color: #ffffff !important;
            border: 4px solid #0066CC !important;
            border-radius: 50% !important;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05) !important;
        }

        /* w-7 h-7 text-[#0066CC] */
        .gcs-hs-step-mobile-icon {
            width: 1.75rem !important; /* w-7 */
            height: 1.75rem !important; /* h-7 */
            color: #0066CC !important;
        }

        /* w-1 h-16 bg-[#0066CC]/20 mx-auto mt-2 */
        .gcs-hs-step-connector {
            width: 0.25rem !important; /* w-1 */
            height: 4rem !important; /* h-16 */
            background-color: rgba(0, 102, 204, 0.2) !important;
            margin-left: auto !important;
            margin-right: auto !important;
            margin-top: 0.5rem !important; /* mt-2 */
        }

        /* flex-1 pt-2 */
        .gcs-hs-step-mobile-content {
            flex: 1 !important;
            padding-top: 0.5rem !important; /* pt-2 */
        }

        /* text-[#003D7A] mb-2 */
        .gcs-hs-step-mobile-title {
            color: #003D7A !important;
            margin-bottom: 0.5rem !important; /* mb-2 */
            font-size: 1rem !important;
            font-weight: 500 !important;
        }

        /* text-sm text-gray-600 */
        .gcs-hs-step-mobile-desc {
            font-size: 0.875rem !important;
            line-height: 1.25rem !important;
            color: #4b5563 !important;
            margin: 0 !important;
        }

        /* bg-[#F5F7FA] rounded-lg p-4 text-center mt-8 */
        .gcs-hs-timeline-note-mobile {
            background-color: #F5F7FA !important;
            border-radius: 0.5rem !important;
            padding: 1rem !important;
            text-align: center !important;
            margin-top: 2rem !important; /* mt-8 */
        }

        /* ==================== TESTIMONIALS ==================== */

        /* py-16 bg-[#F5F7FA] */
        .gcs-hs-testimonials {
            padding-top: 4rem !important;
            padding-bottom: 4rem !important;
            background-color: #F5F7FA !important;
        }

        /* max-w-4xl mx-auto */
        .gcs-hs-testimonial-wrapper {
            max-width: 56rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
        }

        /* relative */
        .gcs-hs-testimonial-container {
            position: relative !important;
        }

        /* bg-white rounded-2xl shadow-xl p-8 md:p-12 relative overflow-hidden */
        .gcs-hs-testimonial-card {
            background-color: #ffffff !important;
            border-radius: 1rem !important; /* rounded-2xl */
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04) !important; /* shadow-xl */
            padding: 2rem !important; /* p-8 */
            position: relative !important;
            overflow: hidden !important;
        }

        @media (min-width: 768px) {
            .gcs-hs-testimonial-card {
                padding: 3rem !important; /* md:p-12 */
            }
        }

        /* absolute top-6 right-6 opacity-10 */
        .gcs-hs-quote-bg {
            position: absolute !important;
            top: 1.5rem !important; /* top-6 */
            right: 1.5rem !important; /* right-6 */
            opacity: 0.1 !important;
        }

        /* w-24 h-24 text-[#0066CC] */
        .gcs-hs-quote-icon {
            width: 6rem !important; /* w-24 */
            height: 6rem !important; /* h-24 */
            color: #0066CC !important;
        }

        /* relative */
        .gcs-hs-testimonial-content {
            position: relative !important;
        }

        /* flex gap-1 mb-6 */
        .gcs-hs-rating {
            display: flex !important;
            gap: 0.25rem !important; /* gap-1 */
            margin-bottom: 1.5rem !important; /* mb-6 */
        }

        /* w-5 h-5 fill-[#FFB800] text-[#FFB800] */
        .gcs-hs-star {
            width: 1.25rem !important; /* w-5 */
            height: 1.25rem !important; /* h-5 */
            flex-shrink: 0 !important;
        }

        /* text-gray-700 mb-6 text-lg */
        .gcs-hs-quote {
            color: #374151 !important; /* text-gray-700 */
            margin-bottom: 1.5rem !important; /* mb-6 */
            font-size: 1.125rem !important; /* text-lg */
            line-height: 1.75rem !important;
            margin-top: 0 !important;
        }

        /* inline-block bg-[#0066CC]/10 text-[#0066CC] px-4 py-2 rounded-full text-sm mb-6 */
        .gcs-hs-result-badge {
            display: inline-block !important;
            background-color: rgba(0, 102, 204, 0.1) !important;
            color: #0066CC !important;
            padding-left: 1rem !important; /* px-4 */
            padding-right: 1rem !important;
            padding-top: 0.5rem !important; /* py-2 */
            padding-bottom: 0.5rem !important;
            border-radius: 9999px !important; /* rounded-full */
            font-size: 0.875rem !important; /* text-sm */
            margin-bottom: 1.5rem !important; /* mb-6 */
        }

        /* flex items-center gap-4 */
        .gcs-hs-author {
            display: flex !important;
            align-items: center !important;
            gap: 1rem !important; /* gap-4 */
        }

        /* w-14 h-14 bg-[#0066CC] rounded-full flex items-center justify-center text-white */
        .gcs-hs-avatar {
            width: 3.5rem !important; /* w-14 */
            height: 3.5rem !important; /* h-14 */
            background-color: #0066CC !important;
            border-radius: 50% !important; /* rounded-full */
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            color: #ffffff !important;
            font-size: 1.125rem !important;
            font-weight: 500 !important;
            flex-shrink: 0 !important;
        }

        /* text-[#003D7A] */
        .gcs-hs-author-name {
            color: #003D7A !important;
            font-size: 1rem !important;
            font-weight: 500 !important;
        }

        /* text-sm text-gray-500 */
        .gcs-hs-author-location {
            font-size: 0.875rem !important; /* text-sm */
            color: #6b7280 !important; /* text-gray-500 */
        }

        /* flex justify-center gap-4 mt-8 */
        .gcs-hs-nav {
            display: flex !important;
            justify-content: center !important;
            gap: 1rem !important; /* gap-4 */
            margin-top: 2rem !important; /* mt-8 */
        }

        /* rounded-full w-12 h-12 border-2 hover:bg-[#0066CC] hover:text-white hover:border-[#0066CC] */
        .gcs-hs-nav-btn {
            border-radius: 50% !important; /* rounded-full */
            width: 3rem !important; /* w-12 */
            height: 3rem !important; /* h-12 */
            border: 2px solid #d1d5db !important; /* border-2 */
            background-color: #ffffff !important;
            color: #374151 !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            cursor: pointer !important;
            transition-property: all !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 150ms !important;
        }

        .gcs-hs-nav-btn:hover {
            background-color: #0066CC !important;
            color: #ffffff !important;
            border-color: #0066CC !important;
        }

        /* w-5 h-5 */
        .gcs-hs-nav-icon {
            width: 1.25rem !important; /* w-5 */
            height: 1.25rem !important; /* h-5 */
        }

        /* flex items-center gap-2 */
        .gcs-hs-dots {
            display: flex !important;
            align-items: center !important;
            gap: 0.5rem !important; /* gap-2 */
        }

        /* w-3 h-3 bg-gray-300 hover:bg-gray-400 rounded-full */
        .gcs-hs-dot {
            width: 0.75rem !important; /* w-3 */
            height: 0.75rem !important; /* h-3 */
            background-color: #d1d5db !important; /* bg-gray-300 */
            border-radius: 50% !important; /* rounded-full */
            border: none !important;
            cursor: pointer !important;
            transition-property: all !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 150ms !important;
            padding: 0 !important;
        }

        .gcs-hs-dot:hover {
            background-color: #9ca3af !important; /* hover:bg-gray-400 */
        }

        /* w-8 h-3 bg-[#0066CC] */
        .gcs-hs-dot-active {
            width: 2rem !important; /* w-8 */
            height: 0.75rem !important; /* h-3 */
            background-color: #0066CC !important;
        }
    </style>

    <script>
        (function() {
            if (window.gcsHsInit) return;
            window.gcsHsInit = true;

            // Testimonials carousel
            const testimonials = [
                {
                    name: "Mihai T.",
                    location: "București",
                    quote: "Am economisit 15.000 lei prin refinanțare! Echipa Global Credit Solutions a fost excepțională. M-au ghidat pas cu pas și au negociat o dobândă mult mai bună decât aveam anterior.",
                    result: "Economie de 15.000 RON",
                    avatar: "M"
                },
                {
                    name: "Elena P.",
                    location: "Cluj-Napoca",
                    quote: "Procesul a fost surprinzător de rapid și simplu. În doar 3 zile am primit aprobarea pentru creditul ipotecar. Consultanții au fost mereu disponibili să răspundă la întrebările mele.",
                    result: "Aprobare în 3 zile",
                    avatar: "E"
                },
                {
                    name: "Andrei M.",
                    location: "Timișoara",
                    quote: "Nu credeam că pot obține un credit atât de avantajos pentru afacerea mea. Brokerii au găsit oferta perfectă pentru nevoile companiei. Recomand cu încredere!",
                    result: "Credit business aprobat",
                    avatar: "A"
                },
                {
                    name: "Carmen V.",
                    location: "Iași",
                    quote: "Serviciu profesionist și transparent. Am apreciat foarte mult că nu am plătit nimic pentru consultanță și că am avut acces la oferte de la toate băncile din piață.",
                    result: "Credit auto aprobat",
                    avatar: "C"
                }
            ];

            let currentIndex = 0;
            let autoplayInterval;

            const quoteEl = document.getElementById('gcs-testimonial-quote');
            const resultEl = document.getElementById('gcs-testimonial-result');
            const avatarEl = document.getElementById('gcs-testimonial-avatar');
            const nameEl = document.getElementById('gcs-testimonial-name');
            const locationEl = document.getElementById('gcs-testimonial-location');
            const prevBtn = document.getElementById('gcs-prev-btn');
            const nextBtn = document.getElementById('gcs-next-btn');
            const dots = document.querySelectorAll('.gcs-hs-dot');

            function updateTestimonial(index) {
                const t = testimonials[index];
                if (quoteEl) quoteEl.textContent = '"' + t.quote + '"';
                if (resultEl) resultEl.textContent = '✓ ' + t.result;
                if (avatarEl) avatarEl.textContent = t.avatar;
                if (nameEl) nameEl.textContent = t.name;
                if (locationEl) locationEl.textContent = t.location;

                // Update dots
                dots.forEach((dot, i) => {
                    if (i === index) {
                        dot.classList.add('gcs-hs-dot-active');
                    } else {
                        dot.classList.remove('gcs-hs-dot-active');
                    }
                });
            }

            function goToSlide(index) {
                currentIndex = index;
                updateTestimonial(currentIndex);
                resetAutoplay();
            }

            function nextSlide() {
                currentIndex = (currentIndex + 1) % testimonials.length;
                updateTestimonial(currentIndex);
            }

            function prevSlide() {
                currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
                updateTestimonial(currentIndex);
                resetAutoplay();
            }

            function startAutoplay() {
                autoplayInterval = setInterval(nextSlide, 5000);
            }

            function resetAutoplay() {
                clearInterval(autoplayInterval);
                startAutoplay();
            }

            if (prevBtn) prevBtn.addEventListener('click', prevSlide);
            if (nextBtn) nextBtn.addEventListener('click', function() {
                nextSlide();
                resetAutoplay();
            });

            dots.forEach((dot, index) => {
                dot.addEventListener('click', function() {
                    goToSlide(index);
                });
            });

            // Initialize
            updateTestimonial(0);
            startAutoplay();
        })();
    </script>

    <?php
    return ob_get_clean();
}

add_shortcode('gcs_homepage_sections', 'gcs_homepage_sections_shortcode');

<?php
/**
 * Global Credit Solutions - Contact Page Shortcode
 *
 * Shortcode: [gcs_contact_page]
 *
 * EXACT FIGMA DESIGN from ContactPage.tsx
 * - Complete theme isolation with !important on EVERY property
 */

function gcs_contact_page_shortcode() {
    ob_start();
    ?>

    <div class="gcs-contact-wrapper">

        <!-- ==================== HEADER ==================== -->
        <!-- Fixed Header -->
        <header class="gcs-contact-header">
            <div class="gcs-contact-container">
                <div class="gcs-contact-header-content">
                    <!-- Logo -->
                    <a href="<?php echo home_url(); ?>" class="gcs-contact-logo-btn">
                        <img
                            src="https://creditsolutions.ro/wp-content/uploads/2025/11/logo-alb.png"
                            alt="Global Credit Solutions"
                            class="gcs-contact-logo-img gcs-contact-logo-white"
                        />
                        <img
                            src="https://creditsolutions.ro/wp-content/uploads/2025/11/logo-blue.png"
                            alt="Global Credit Solutions"
                            class="gcs-contact-logo-img gcs-contact-logo-blue"
                        />
                    </a>

                    <!-- Desktop Navigation -->
                    <nav class="gcs-contact-nav-desktop">
                        <a href="<?php echo home_url(); ?>" class="gcs-contact-nav-link">Acasă</a>
                        <a href="<?php echo home_url('/despre'); ?>" class="gcs-contact-nav-link">Despre Noi</a>
                        <a href="<?php echo home_url('/servicii'); ?>" class="gcs-contact-nav-link">Servicii</a>
                        <a href="<?php echo home_url('/contact'); ?>" class="gcs-contact-nav-link">Contact</a>
                    </nav>

                    <!-- CTA Button Desktop -->
                    <div class="gcs-contact-cta-wrapper">
                        <a href="<?php echo home_url('/contact'); ?>" class="gcs-contact-btn-primary">Aplică Acum</a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <button class="gcs-contact-mobile-toggle" aria-label="Toggle menu">
                        <svg class="gcs-contact-menu-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="3" y1="12" x2="21" y2="12"></line>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg>
                        <svg class="gcs-contact-close-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>

                <!-- Mobile Menu -->
                <nav class="gcs-contact-mobile-menu">
                    <a href="<?php echo home_url(); ?>" class="gcs-contact-mobile-link">Acasă</a>
                    <a href="<?php echo home_url('/despre'); ?>" class="gcs-contact-mobile-link">Despre Noi</a>
                    <a href="<?php echo home_url('/servicii'); ?>" class="gcs-contact-mobile-link">Servicii</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="gcs-contact-mobile-link">Contact</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="gcs-contact-btn-primary gcs-contact-btn-full">Aplică Acum</a>
                </nav>
            </div>
        </header>

        <!-- ==================== HERO SECTION ==================== -->
        <section class="gcs-contact-hero">
            <div class="gcs-contact-container">
                <div class="gcs-contact-hero-content">
                    <h1 class="gcs-contact-hero-title">
                        Contactează-ne
                    </h1>
                    <p class="gcs-contact-hero-subtitle">
                        Suntem aici pentru tine! Completează formularul sau contactează-ne
                        telefonic. Îți răspundem în maxim 2 ore.
                    </p>
                </div>
            </div>
        </section>

        <!-- ==================== CONTACT INFO CARDS ==================== -->
        <section class="gcs-contact-info-section">
            <div class="gcs-contact-container">
                <div class="gcs-contact-info-grid">
                    <!-- Phone -->
                    <div class="gcs-contact-info-card">
                        <div class="gcs-contact-info-icon-wrapper">
                            <svg class="gcs-contact-info-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                        </div>
                        <h3 class="gcs-contact-info-title">Telefon</h3>
                        <a href="tel:+40743212055" class="gcs-contact-info-link">0743 212 055</a>
                    </div>

                    <!-- Email -->
                    <div class="gcs-contact-info-card">
                        <div class="gcs-contact-info-icon-wrapper">
                            <svg class="gcs-contact-info-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                        </div>
                        <h3 class="gcs-contact-info-title">Email</h3>
                        <a href="mailto:contact@creditsolutions.ro" class="gcs-contact-info-link">contact@creditsolutions.ro</a>
                    </div>

                    <!-- Address -->
                    <div class="gcs-contact-info-card">
                        <div class="gcs-contact-info-icon-wrapper">
                            <svg class="gcs-contact-info-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                        </div>
                        <h3 class="gcs-contact-info-title">Adresă</h3>
                        <p class="gcs-contact-info-link">Bd. Unirii 1, București, România</p>
                    </div>

                    <!-- Schedule -->
                    <div class="gcs-contact-info-card">
                        <div class="gcs-contact-info-icon-wrapper">
                            <svg class="gcs-contact-info-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                        </div>
                        <h3 class="gcs-contact-info-title">Program</h3>
                        <p class="gcs-contact-info-text">Luni - Vineri: 09:00 - 18:00</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== CONTACT FORM & MAP ==================== -->
        <section class="gcs-contact-form-section">
            <div class="gcs-contact-container">
                <div class="gcs-contact-form-grid">

                    <!-- Contact Form -->
                    <div class="gcs-contact-form-wrapper">
                        <div class="gcs-contact-form-header">
                            <div class="gcs-contact-form-icon-wrapper">
                                <svg class="gcs-contact-form-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                </svg>
                            </div>
                            <h2 class="gcs-contact-form-title">Trimite-ne un mesaj</h2>
                        </div>

                        <form id="gcs-contact-form" class="gcs-contact-form">
                            <div class="gcs-contact-form-group">
                                <label for="gcs-name" class="gcs-contact-label">Nume complet *</label>
                                <input type="text" id="gcs-name" name="name" placeholder="Ionescu Ion" class="gcs-contact-input" required>
                            </div>

                            <div class="gcs-contact-form-group">
                                <label for="gcs-cnp" class="gcs-contact-label">CNP/CUI *</label>
                                <input type="text" id="gcs-cnp" name="cnp" placeholder="1234567890123" class="gcs-contact-input" required>
                            </div>

                            <div class="gcs-contact-form-group">
                                <label for="gcs-email" class="gcs-contact-label">Email</label>
                                <input type="email" id="gcs-email" name="email" placeholder="ion@example.com" class="gcs-contact-input">
                            </div>

                            <div class="gcs-contact-form-group">
                                <label for="gcs-credit-type" class="gcs-contact-label">Tipuri de credit *</label>
                                <select id="gcs-credit-type" name="creditType" class="gcs-contact-input" required>
                                    <option value="">Selectează tipul de credit</option>
                                    <option value="nevoi">Credite de Nevoi Personale</option>
                                    <option value="ipotecar">Credit Ipotecar/Prima Casă</option>
                                    <option value="auto">Credite Auto/Leasing</option>
                                    <option value="juridic">Credite/Linii de Credit pentru Persoane Juridice</option>
                                    <option value="refinantare">Refinanțări de Credit</option>
                                    <option value="altele">Alte Servicii</option>
                                </select>
                            </div>

                            <div class="gcs-contact-form-group">
                                <label for="gcs-message" class="gcs-contact-label">Mesaj</label>
                                <textarea id="gcs-message" name="message" rows="5" placeholder="Descrie-ne nevoile tale și cum te putem ajuta..." class="gcs-contact-textarea"></textarea>
                            </div>

                            <button type="submit" class="gcs-contact-submit-btn">
                                <svg class="gcs-contact-btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="22" y1="2" x2="11" y2="13"></line>
                                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                </svg>
                                <span class="gcs-contact-btn-text">Trimite Mesajul</span>
                                <span class="gcs-contact-btn-loading">Se trimite...</span>
                            </button>

                            <p class="gcs-contact-privacy-text">
                                Prin trimiterea formularului, ești de acord cu
                                <a href="/gdpr" class="gcs-contact-privacy-link">Politica de Confidențialitate</a>
                            </p>

                            <div class="gcs-contact-form-message"></div>
                        </form>
                    </div>

                    <!-- Map & FAQ -->
                    <div class="gcs-contact-map-column">
                        <!-- Map -->
                        <div class="gcs-contact-map-wrapper">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2849.0144516845707!2d26.102088315443887!3d44.42690197910178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1ff4770aee5d5%3A0x58147f39579fe6fa!2sBulevardul%20Unirii%201%2C%20Bucure%C8%99ti!5e0!3m2!1sen!2sro!4v1234567890123"
                                width="100%"
                                height="100%"
                                style="border:0;"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>

                        <!-- FAQ Quick -->
                        <div class="gcs-contact-faq-wrapper">
                            <h3 class="gcs-contact-faq-title">Întrebări Frecvente</h3>
                            <div class="gcs-contact-faq-list">
                                <div class="gcs-contact-faq-item">
                                    <h4 class="gcs-contact-faq-question">Ce documente sunt necesare?</h4>
                                    <p class="gcs-contact-faq-answer">Documentele necesare variază în funcție de tipul de credit, dar de obicei includem CI/BI, acte venit, și documente specifice fiecărui tip de credit.</p>
                                </div>
                                <div class="gcs-contact-faq-item">
                                    <h4 class="gcs-contact-faq-question">Pot obține credit cu istoric negativ?</h4>
                                    <p class="gcs-contact-faq-answer">Da, avem soluții pentru orice problemă. Lucrăm și cu instituții care analizează fiecare caz individual și oferim consultanță pentru ștergerea istoricului negativ.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ==================== CONTACT PERSONS SECTION ==================== -->
        <section class="gcs-contact-persons-section">
            <div class="gcs-contact-container">
                <div class="gcs-contact-section-header">
                    <h2 class="gcs-contact-section-title">Persoane de Contact</h2>
                    <p class="gcs-contact-section-subtitle">
                        Echipa noastră este disponibilă pentru a răspunde tuturor întrebărilor tale.
                    </p>
                </div>

                <div class="gcs-contact-persons-grid">
                    <!-- Contact Person 1 -->
                    <div class="gcs-contact-person-card">
                        <div class="gcs-contact-person-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <h3 class="gcs-contact-person-name">Mihaela</h3>
                        <p class="gcs-contact-person-role">Consultant Credite</p>
                        <a href="tel:+40743212055" class="gcs-contact-person-phone">
                            <svg class="gcs-contact-phone-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                            0743 212 055
                        </a>
                    </div>

                    <!-- Contact Person 2 -->
                    <div class="gcs-contact-person-card">
                        <div class="gcs-contact-person-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <h3 class="gcs-contact-person-name">Ștefan</h3>
                        <p class="gcs-contact-person-role">Consultant Credite</p>
                        <a href="tel:+40745546924" class="gcs-contact-person-phone">
                            <svg class="gcs-contact-phone-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                            0745 546 924
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <style>
        /* ==================== RESET ==================== */
        .gcs-contact-wrapper {
            all: initial !important;
            display: block !important;
        }

        .gcs-contact-wrapper *,
        .gcs-contact-wrapper *::before,
        .gcs-contact-wrapper *::after {
            box-sizing: border-box !important;
        }

        /* Global font */
        .gcs-contact-wrapper,
        .gcs-contact-wrapper * {
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif !important;
        }

        /* ==================== HEADER ==================== */
        .gcs-contact-header {
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

        .gcs-contact-header.scrolled {
            background-color: #ffffff !important;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06) !important;
            padding-top: 0.75rem !important;
            padding-bottom: 0.75rem !important;
        }

        .gcs-contact-container {
            width: 100% !important;
            max-width: 80rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }

        .gcs-contact-header-content {
            display: flex !important;
            align-items: center !important;
            justify-content: space-between !important;
        }

        /* ==================== LOGO ==================== */
        /* Logo button container */
        .gcs-contact-logo-btn {
            display: inline-flex !important;
            align-items: center !important;
            text-decoration: none !important;
            cursor: pointer !important;
            position: relative !important;
            height: 3rem !important; /* h-12 */
        }

        /* h-12 w-auto transition-opacity duration-300 */
        .gcs-contact-logo-img {
            height: 3rem !important; /* h-12 = 48px */
            width: auto !important;
            transition-property: opacity !important;
            transition-duration: 300ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            display: block !important;
        }

        /* White logo - visible by default, hidden when scrolled */
        .gcs-contact-logo-white {
            opacity: 1 !important;
            position: relative !important;
        }

        .gcs-contact-header.scrolled .gcs-contact-logo-white {
            opacity: 0 !important;
        }

        /* Blue logo - hidden by default, visible when scrolled */
        .gcs-contact-logo-blue {
            opacity: 0 !important;
            position: absolute !important;
            top: 0 !important;
            left: 0 !important;
        }

        .gcs-contact-header.scrolled .gcs-contact-logo-blue {
            opacity: 1 !important;
        }

        /* ==================== NAVIGATION ==================== */
        .gcs-contact-nav-desktop {
            display: none !important;
        }

        @media (min-width: 768px) {
            .gcs-contact-nav-desktop {
                display: flex !important;
                align-items: center !important;
                gap: 2rem !important;
            }
        }

        .gcs-contact-nav-link {
            transition-property: color !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            color: #ffffff !important;
            text-decoration: none !important;
            font-size: 1rem !important;
        }

        .gcs-contact-nav-link:hover {
            color: #0066CC !important;
        }

        .gcs-contact-header.scrolled .gcs-contact-nav-link {
            color: #374151 !important;
        }

        /* ==================== CTA BUTTON ==================== */
        .gcs-contact-cta-wrapper {
            display: none !important;
        }

        @media (min-width: 768px) {
            .gcs-contact-cta-wrapper {
                display: block !important;
            }
        }

        .gcs-contact-btn-primary {
            display: inline-flex !important;
            height: 2.5rem !important;
            align-items: center !important;
            justify-content: center !important;
            padding-left: 1.5rem !important;
            padding-right: 1.5rem !important;
            padding-top: 0.5rem !important;
            padding-bottom: 0.5rem !important;
            background-color: #0066CC !important;
            color: #ffffff !important;
            border-radius: 0.5rem !important;
            font-size: 0.875rem !important;
            font-weight: 500 !important;
            text-decoration: none !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            border: none !important;
            cursor: pointer !important;
        }

        .gcs-contact-btn-primary:hover {
            background-color: #0052A3 !important;
        }

        .gcs-contact-btn-full {
            width: 100% !important;
        }

        /* ==================== MOBILE MENU ==================== */
        .gcs-contact-mobile-toggle {
            display: flex !important;
            background: none !important;
            border: none !important;
            cursor: pointer !important;
            padding: 0.25rem !important;
        }

        @media (min-width: 768px) {
            .gcs-contact-mobile-toggle {
                display: none !important;
            }
        }

        .gcs-contact-menu-icon,
        .gcs-contact-close-icon {
            width: 1.5rem !important;
            height: 1.5rem !important;
            color: #ffffff !important;
            transition-property: color !important;
            transition-duration: 300ms !important;
        }

        .gcs-contact-header.scrolled .gcs-contact-menu-icon,
        .gcs-contact-header.scrolled .gcs-contact-close-icon {
            color: #003D7A !important;
        }

        .gcs-contact-menu-icon {
            display: block !important;
        }

        .gcs-contact-close-icon {
            display: none !important;
        }

        .gcs-contact-mobile-toggle.active .gcs-contact-menu-icon {
            display: none !important;
        }

        .gcs-contact-mobile-toggle.active .gcs-contact-close-icon {
            display: block !important;
        }

        .gcs-contact-mobile-menu {
            display: none !important;
        }

        .gcs-contact-mobile-menu.open {
            display: flex !important;
            flex-direction: column !important;
            gap: 1rem !important;
            margin-top: 1rem !important;
            padding: 1rem !important;
            padding-bottom: 1rem !important;
            background-color: #ffffff !important;
            border-radius: 0.5rem !important;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05) !important;
        }

        @media (min-width: 768px) {
            .gcs-contact-mobile-menu {
                display: none !important;
            }
        }

        .gcs-contact-mobile-link {
            color: #374151 !important;
            text-decoration: none !important;
            text-align: left !important;
            font-size: 1rem !important;
            padding: 0.5rem 0 !important;
            transition-property: color !important;
            transition-duration: 150ms !important;
        }

        .gcs-contact-mobile-link:hover {
            color: #0066CC !important;
        }

        /* ==================== HERO SECTION ==================== */
        .gcs-contact-hero {
            position: relative !important;
            background-image: linear-gradient(to bottom right, #003D7A, #001f3f) !important;
            padding-top: 8rem !important;
            padding-bottom: 4rem !important;
        }

        @media (min-width: 768px) {
            .gcs-contact-hero {
                padding-top: 10rem !important;
                padding-bottom: 6rem !important;
            }
        }

        .gcs-contact-hero-content {
            max-width: 48rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
            text-align: center !important;
            color: #ffffff !important;
        }

        .gcs-contact-hero-title {
            color: #ffffff !important;
            margin-bottom: 1.5rem !important;
            font-size: 1.875rem !important;
            line-height: 2.25rem !important;
            font-weight: 700 !important;
            margin-top: 0 !important;
        }

        @media (min-width: 768px) {
            .gcs-contact-hero-title {
                font-size: 2.25rem !important;
                line-height: 2.5rem !important;
            }
        }

        @media (min-width: 1024px) {
            .gcs-contact-hero-title {
                font-size: 3rem !important;
                line-height: 1 !important;
            }
        }

        .gcs-contact-hero-subtitle {
            font-size: 1.25rem !important;
            line-height: 1.75rem !important;
            color: #e5e7eb !important;
            margin-bottom: 2rem !important;
            margin-top: 0 !important;
        }

        /* ==================== CONTACT INFO SECTION ==================== */
        .gcs-contact-info-section {
            padding-top: 4rem !important;
            padding-bottom: 4rem !important;
            background-color: #ffffff !important;
        }

        .gcs-contact-info-grid {
            display: grid !important;
            gap: 1.5rem !important;
            max-width: 72rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
        }

        @media (min-width: 768px) {
            .gcs-contact-info-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
            }
        }

        @media (min-width: 1024px) {
            .gcs-contact-info-grid {
                grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
            }
        }

        .gcs-contact-info-card {
            text-align: center !important;
            padding: 1.5rem !important;
            background-color: #F5F7FA !important;
            border-radius: 0.75rem !important;
            transition: box-shadow 0.15s !important;
        }

        .gcs-contact-info-card:hover {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05) !important;
        }

        .gcs-contact-info-icon-wrapper {
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            width: 3.5rem !important;
            height: 3.5rem !important;
            background-color: rgba(0, 102, 204, 0.1) !important;
            border-radius: 50% !important;
            margin-bottom: 1rem !important;
        }

        .gcs-contact-info-icon {
            width: 1.75rem !important;
            height: 1.75rem !important;
            color: #0066CC !important;
            stroke: currentColor !important;
            fill: none !important;
        }

        .gcs-contact-info-title {
            color: #003D7A !important;
            font-size: 1rem !important;
            line-height: 1.5rem !important;
            font-weight: 600 !important;
            margin-bottom: 0.5rem !important;
        }

        .gcs-contact-info-link {
            color: #374151 !important;
            font-size: 0.875rem !important;
            line-height: 1.25rem !important;
            text-decoration: none !important;
            display: block !important;
            transition: color 0.15s !important;
        }

        .gcs-contact-info-link:hover {
            color: #0066CC !important;
        }

        .gcs-contact-info-text {
            color: #374151 !important;
            font-size: 0.875rem !important;
            line-height: 1.25rem !important;
        }

        /* ==================== CONTACT FORM & MAP SECTION ==================== */
        .gcs-contact-form-section {
            padding-top: 4rem !important;
            padding-bottom: 4rem !important;
            background-color: #F5F7FA !important;
        }

        .gcs-contact-form-grid {
            display: grid !important;
            gap: 3rem !important;
            max-width: 72rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
        }

        @media (min-width: 1024px) {
            .gcs-contact-form-grid {
                grid-template-columns: 1fr 1fr !important;
            }
        }

        /* Form Wrapper */
        .gcs-contact-form-wrapper {
            background-color: #ffffff !important;
            padding: 2rem !important;
            border-radius: 0.75rem !important;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05) !important;
        }

        .gcs-contact-form-header {
            display: flex !important;
            align-items: center !important;
            gap: 0.75rem !important;
            margin-bottom: 1.5rem !important;
        }

        .gcs-contact-form-icon-wrapper {
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            width: 3rem !important;
            height: 3rem !important;
            background-color: rgba(0, 102, 204, 0.1) !important;
            border-radius: 0.5rem !important;
        }

        .gcs-contact-form-icon {
            width: 1.5rem !important;
            height: 1.5rem !important;
            color: #0066CC !important;
            stroke: currentColor !important;
            fill: none !important;
        }

        .gcs-contact-form-title {
            color: #003D7A !important;
            font-size: 1.25rem !important;
            line-height: 1.75rem !important;
            font-weight: 700 !important;
        }

        @media (min-width: 768px) {
            .gcs-contact-form-title {
                font-size: 1.5rem !important;
                line-height: 2rem !important;
            }
        }

        .gcs-contact-form {
            display: flex !important;
            flex-direction: column !important;
            gap: 1.5rem !important;
        }

        .gcs-contact-form-group {
            display: flex !important;
            flex-direction: column !important;
        }

        .gcs-contact-label {
            color: #374151 !important;
            font-size: 0.875rem !important;
            line-height: 1.25rem !important;
            font-weight: 500 !important;
            margin-bottom: 0.5rem !important;
        }

        .gcs-contact-input,
        .gcs-contact-textarea {
            width: 100% !important;
            padding: 0.625rem 0.875rem !important;
            border: 1px solid #d1d5db !important;
            border-radius: 0.375rem !important;
            font-size: 0.875rem !important;
            line-height: 1.25rem !important;
            color: #111827 !important;
            background-color: #ffffff !important;
            transition: all 0.15s !important;
        }

        .gcs-contact-input:focus,
        .gcs-contact-textarea:focus {
            outline: none !important;
            border-color: #0066CC !important;
            box-shadow: 0 0 0 3px rgba(0, 102, 204, 0.1) !important;
        }

        .gcs-contact-textarea {
            resize: vertical !important;
            min-height: 120px !important;
        }

        .gcs-contact-submit-btn {
            width: 100% !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            gap: 0.5rem !important;
            padding: 0.75rem 1.5rem !important;
            background-color: #0066CC !important;
            color: #ffffff !important;
            border: none !important;
            border-radius: 0.5rem !important;
            font-size: 1rem !important;
            font-weight: 500 !important;
            cursor: pointer !important;
            transition: background-color 0.15s !important;
        }

        .gcs-contact-submit-btn:hover {
            background-color: #0052A3 !important;
        }

        .gcs-contact-submit-btn:disabled {
            opacity: 0.6 !important;
            cursor: not-allowed !important;
        }

        .gcs-contact-btn-icon {
            width: 1.25rem !important;
            height: 1.25rem !important;
            color: #ffffff !important;
            stroke: currentColor !important;
            fill: none !important;
        }

        .gcs-contact-btn-text {
            display: inline !important;
        }

        .gcs-contact-btn-loading {
            display: none !important;
        }

        .gcs-contact-submit-btn.loading .gcs-contact-btn-text {
            display: none !important;
        }

        .gcs-contact-submit-btn.loading .gcs-contact-btn-loading {
            display: inline !important;
        }

        .gcs-contact-privacy-text {
            text-align: center !important;
            font-size: 0.875rem !important;
            line-height: 1.25rem !important;
            color: #6b7280 !important;
        }

        .gcs-contact-privacy-link {
            color: #0066CC !important;
            text-decoration: none !important;
        }

        .gcs-contact-privacy-link:hover {
            text-decoration: underline !important;
        }

        .gcs-contact-form-message {
            padding: 1rem !important;
            border-radius: 0.375rem !important;
            font-size: 0.875rem !important;
            line-height: 1.25rem !important;
            display: none !important;
        }

        .gcs-contact-form-message.success {
            display: block !important;
            background-color: #dcfce7 !important;
            color: #166534 !important;
            border: 1px solid #86efac !important;
        }

        .gcs-contact-form-message.error {
            display: block !important;
            background-color: #fee2e2 !important;
            color: #991b1b !important;
            border: 1px solid #fca5a5 !important;
        }

        /* Map Column */
        .gcs-contact-map-column {
            display: flex !important;
            flex-direction: column !important;
            gap: 1.5rem !important;
        }

        .gcs-contact-map-wrapper {
            background-color: #ffffff !important;
            border-radius: 0.75rem !important;
            overflow: hidden !important;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05) !important;
            height: 16rem !important;
        }

        /* FAQ Wrapper */
        .gcs-contact-faq-wrapper {
            background-color: #ffffff !important;
            padding: 2rem !important;
            border-radius: 0.75rem !important;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05) !important;
        }

        .gcs-contact-faq-title {
            color: #003D7A !important;
            font-size: 1.125rem !important;
            line-height: 1.75rem !important;
            font-weight: 600 !important;
            margin-bottom: 1rem !important;
        }

        .gcs-contact-faq-list {
            display: flex !important;
            flex-direction: column !important;
            gap: 1rem !important;
        }

        .gcs-contact-faq-item {
            /* No additional styling needed */
        }

        .gcs-contact-faq-question {
            color: #003D7A !important;
            font-size: 0.875rem !important;
            line-height: 1.25rem !important;
            font-weight: 600 !important;
            margin-bottom: 0.25rem !important;
        }

        .gcs-contact-faq-answer {
            color: #6b7280 !important;
            font-size: 0.875rem !important;
            line-height: 1.5rem !important;
        }

        /* ==================== CONTACT PERSONS SECTION ==================== */
        .gcs-contact-persons-section {
            padding-top: 4rem !important;
            padding-bottom: 4rem !important;
            background-color: #ffffff !important;
        }

        .gcs-contact-section-header {
            text-align: center !important;
            margin-bottom: 3rem !important;
        }

        .gcs-contact-section-title {
            color: #003D7A !important;
            margin-bottom: 1rem !important;
            font-size: 1.5rem !important;
            line-height: 2rem !important;
            font-weight: 700 !important;
        }

        @media (min-width: 768px) {
            .gcs-contact-section-title {
                font-size: 1.875rem !important;
                line-height: 2.25rem !important;
            }
        }

        .gcs-contact-section-subtitle {
            color: #6b7280 !important;
            max-width: 32rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
            font-size: 1rem !important;
            line-height: 1.5rem !important;
        }

        .gcs-contact-persons-grid {
            display: grid !important;
            gap: 1.5rem !important;
            max-width: 48rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
        }

        @media (min-width: 640px) {
            .gcs-contact-persons-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
            }
        }

        .gcs-contact-person-card {
            background-color: #F5F7FA !important;
            padding: 1.5rem !important;
            border-radius: 0.75rem !important;
            text-align: center !important;
            transition: box-shadow 0.15s !important;
        }

        .gcs-contact-person-card:hover {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05) !important;
        }

        .gcs-contact-person-icon {
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            width: 5rem !important;
            height: 5rem !important;
            background: linear-gradient(to bottom right, #003D7A, #0066CC) !important;
            border-radius: 50% !important;
            margin-bottom: 1rem !important;
        }

        .gcs-contact-person-icon svg {
            width: 2.5rem !important;
            height: 2.5rem !important;
            color: #ffffff !important;
            stroke: currentColor !important;
            fill: none !important;
        }

        .gcs-contact-person-name {
            color: #003D7A !important;
            font-size: 1.25rem !important;
            line-height: 1.75rem !important;
            font-weight: 600 !important;
            margin-bottom: 0.25rem !important;
        }

        .gcs-contact-person-role {
            color: #6b7280 !important;
            font-size: 0.875rem !important;
            line-height: 1.25rem !important;
            margin-bottom: 1rem !important;
        }

        .gcs-contact-person-phone {
            display: inline-flex !important;
            align-items: center !important;
            gap: 0.5rem !important;
            color: #0066CC !important;
            font-size: 1rem !important;
            line-height: 1.5rem !important;
            font-weight: 500 !important;
            text-decoration: none !important;
            padding: 0.5rem 1rem !important;
            background-color: #ffffff !important;
            border-radius: 0.375rem !important;
            transition: all 0.15s !important;
        }

        .gcs-contact-person-phone:hover {
            background-color: #0066CC !important;
            color: #ffffff !important;
        }

        .gcs-contact-phone-icon {
            width: 1rem !important;
            height: 1rem !important;
            stroke: currentColor !important;
            fill: none !important;
        }

    </style>

    <script>
        (function() {
            if (window.gcsContactInit) return;
            window.gcsContactInit = true;

            const header = document.querySelector('.gcs-contact-header');
            const mobileToggle = document.querySelector('.gcs-contact-mobile-toggle');
            const mobileMenu = document.querySelector('.gcs-contact-mobile-menu');

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
            const mobileLinks = document.querySelectorAll('.gcs-contact-mobile-link');
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

            // Contact Form Handler
            const form = document.getElementById('gcs-contact-form');
            const submitBtn = form.querySelector('.gcs-contact-submit-btn');
            const messageDiv = form.querySelector('.gcs-contact-form-message');

            form.addEventListener('submit', function(e) {
                e.preventDefault();

                // Show loading state
                submitBtn.classList.add('loading');
                submitBtn.disabled = true;
                messageDiv.classList.remove('success', 'error');
                messageDiv.style.display = 'none';

                // Get form data
                const formData = new FormData(form);
                const data = {
                    name: formData.get('name'),
                    cnp: formData.get('cnp'),
                    email: formData.get('email'),
                    creditType: formData.get('creditType'),
                    message: formData.get('message')
                };

                // Send to WordPress AJAX handler
                fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: new URLSearchParams({
                        action: 'gcs_contact_form',
                        ...data
                    })
                })
                .then(response => response.json())
                .then(result => {
                    submitBtn.classList.remove('loading');
                    submitBtn.disabled = false;

                    if (result.success) {
                        messageDiv.textContent = result.data.message || 'Formularul a fost trimis cu succes! Vă vom contacta în curând.';
                        messageDiv.classList.add('success');
                        messageDiv.style.display = 'block';
                        form.reset();
                    } else {
                        messageDiv.textContent = result.data.message || 'A apărut o eroare. Vă rugăm să încercați din nou.';
                        messageDiv.classList.add('error');
                        messageDiv.style.display = 'block';
                    }

                    // Scroll to message
                    messageDiv.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                })
                .catch(error => {
                    console.error('Error:', error);
                    submitBtn.classList.remove('loading');
                    submitBtn.disabled = false;
                    messageDiv.textContent = 'A apărut o eroare. Vă rugăm să încercați din nou sau să ne contactați telefonic.';
                    messageDiv.classList.add('error');
                    messageDiv.style.display = 'block';
                });
            });

        })();
    </script>


    <?php
    return ob_get_clean();
}

add_shortcode('gcs_contact_page', 'gcs_contact_page_shortcode');

// Remove Hostinger tracking/signatures from emails
add_filter('wp_mail', 'gcs_remove_hostinger_tracking', 10, 1);

function gcs_remove_hostinger_tracking($args) {
    // Remove any Hostinger mail tracking links from message body
    if (isset($args['message'])) {
        // Remove Hostinger tracking links
        $args['message'] = preg_replace('/https?:\/\/mail\.hostinger\.com[^\s]*/i', '', $args['message']);
        // Remove any Hostinger signatures
        $args['message'] = preg_replace('/--\s*Sent via Hostinger.*/is', '', $args['message']);
        $args['message'] = preg_replace('/This email was sent using Hostinger.*/is', '', $args['message']);
    }

    // Set Return-Path to prevent Hostinger from modifying it
    if (isset($args['headers'])) {
        if (is_array($args['headers'])) {
            // Ensure Return-Path is set
            $has_return_path = false;
            foreach ($args['headers'] as $header) {
                if (stripos($header, 'Return-Path:') === 0) {
                    $has_return_path = true;
                    break;
                }
            }
            if (!$has_return_path) {
                $args['headers'][] = 'Return-Path: wordpress@' . parse_url(home_url(), PHP_URL_HOST);
            }
        }
    }

    return $args;
}

// AJAX handler for contact form
add_action('wp_ajax_gcs_contact_form', 'gcs_contact_form_handler');
add_action('wp_ajax_nopriv_gcs_contact_form', 'gcs_contact_form_handler');

function gcs_contact_form_handler() {
    // Sanitize inputs
    $name = sanitize_text_field($_POST['name']);
    $cnp = sanitize_text_field($_POST['cnp']);
    $email = sanitize_email($_POST['email']);
    $creditType = sanitize_text_field($_POST['creditType']);
    $message = sanitize_textarea_field($_POST['message']);

    // Validate email if provided
    if (!empty($email) && !is_email($email)) {
        wp_send_json_error(['message' => 'Adresa de email nu este validă.']);
        return;
    }

    // Prepare email
    $to = 'contact@creditsolutions.ro';
    $from_name = wp_specialchars_decode( get_bloginfo( 'name' ), ENT_QUOTES );

    // Subject line with clear identifier
    $email_subject = '[' . $creditType . '] de la ' . $name;

    // Email body - simple format
    $lines = [];
    $lines[] = "Nume: {$name}";
    $lines[] = "CNP/CUI: {$cnp}";
    $lines[] = "Email: " . (!empty($email) ? $email : 'Nu a fost furnizat');
    $lines[] = "Tip Credit: {$creditType}";
    $lines[] = "Data: " . date('d.m.Y H:i:s');
    $lines[] = "";
    $lines[] = "Mesaj:";
    $lines[] = $message;
    $email_body = implode("\n", $lines);

    // Minimal headers (like Auto Empire - goes to inbox)
    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: ' . $from_name . ' <contact@creditsolutions.ro>',
    );

    // Add Reply-To with customer email if provided
    if (!empty($email)) {
        $headers[] = 'Reply-To: ' . ($name ? "{$name} <{$email}>" : $email);
    }

    // Send email
    $sent = wp_mail($to, $email_subject, $email_body, $headers);

    if ($sent) {
        wp_send_json_success(['message' => 'Formularul a fost trimis cu succes! Vă vom contacta în curând.']);
    } else {
        wp_send_json_error(['message' => 'A apărut o eroare la trimiterea mesajului. Vă rugăm să ne contactați telefonic.']);
    }
}

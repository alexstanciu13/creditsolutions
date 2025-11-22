<?php
/**
 * Global Credit Solutions - Contact Page Shortcode
 *
 * Shortcode: [gcs_contact_page]
 *
 * EXACT FIGMA DESIGN - Complete Contact page with header
 * - Functional contact form
 * - Contact persons section
 * - Working Google Map
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
                        <div class="gcs-contact-logo-circle">
                            <svg class="gcs-contact-logo-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="2" y1="12" x2="22" y2="12"></line>
                                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                            </svg>
                        </div>
                        <div class="gcs-contact-logo-text">Global Credit Solutions</div>
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
                        Suntem aici să te ajutăm! Contactează-ne pentru o consultație gratuită
                        și personalizată pentru nevoile tale de creditare.
                    </p>
                </div>
            </div>
        </section>

        <!-- ==================== CONTACT INFO SECTION ==================== -->
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
                        <p class="gcs-contact-info-text">Luni - Vineri: 9:00 - 18:00</p>
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
                        <p class="gcs-contact-info-text">Răspundem în max 24h</p>
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
                        <p class="gcs-contact-info-link">Bd. Unirii 1</p>
                        <p class="gcs-contact-info-text">București, România</p>
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
                        <h2 class="gcs-contact-form-title">Trimite-ne un Mesaj</h2>
                        <p class="gcs-contact-form-subtitle">
                            Completează formularul și te vom contacta în cel mai scurt timp posibil.
                        </p>

                        <form id="gcs-contact-form" class="gcs-contact-form">
                            <div class="gcs-contact-form-row">
                                <div class="gcs-contact-form-group">
                                    <label for="gcs-name" class="gcs-contact-label">Nume Complet *</label>
                                    <input type="text" id="gcs-name" name="name" class="gcs-contact-input" required>
                                </div>
                                <div class="gcs-contact-form-group">
                                    <label for="gcs-phone" class="gcs-contact-label">Telefon *</label>
                                    <input type="tel" id="gcs-phone" name="phone" class="gcs-contact-input" required>
                                </div>
                            </div>

                            <div class="gcs-contact-form-group">
                                <label for="gcs-email" class="gcs-contact-label">Email *</label>
                                <input type="email" id="gcs-email" name="email" class="gcs-contact-input" required>
                            </div>

                            <div class="gcs-contact-form-group">
                                <label for="gcs-subject" class="gcs-contact-label">Subiect *</label>
                                <select id="gcs-subject" name="subject" class="gcs-contact-input" required>
                                    <option value="">Selectează un subiect</option>
                                    <option value="Credit Ipotecar">Credit Ipotecar</option>
                                    <option value="Credit Nevoi Personale">Credit Nevoi Personale</option>
                                    <option value="Credit Auto">Credit Auto</option>
                                    <option value="Refinanțare">Refinanțare</option>
                                    <option value="Altele">Altele</option>
                                </select>
                            </div>

                            <div class="gcs-contact-form-group">
                                <label for="gcs-message" class="gcs-contact-label">Mesaj *</label>
                                <textarea id="gcs-message" name="message" rows="5" class="gcs-contact-textarea" required></textarea>
                            </div>

                            <div class="gcs-contact-form-group">
                                <label class="gcs-contact-checkbox-label">
                                    <input type="checkbox" name="gdpr" class="gcs-contact-checkbox" required>
                                    <span>Sunt de acord cu prelucrarea datelor personale conform GDPR *</span>
                                </label>
                            </div>

                            <button type="submit" class="gcs-contact-submit-btn">
                                <span class="gcs-contact-btn-text">Trimite Mesaj</span>
                                <span class="gcs-contact-btn-loading">Se trimite...</span>
                            </button>

                            <div class="gcs-contact-form-message"></div>
                        </form>
                    </div>

                    <!-- Map -->
                    <div class="gcs-contact-map-wrapper">
                        <h2 class="gcs-contact-map-title">Locația Noastră</h2>
                        <div class="gcs-contact-map">
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
                    </div>

                </div>
            </div>
        </section>

        <!-- ==================== FAQ SECTION ==================== -->
        <section class="gcs-contact-faq-section">
            <div class="gcs-contact-container">
                <div class="gcs-contact-section-header">
                    <h2 class="gcs-contact-section-title">Întrebări Frecvente</h2>
                    <p class="gcs-contact-section-subtitle">
                        Răspunsuri rapide la cele mai frecvente întrebări despre serviciile noastre.
                    </p>
                </div>

                <div class="gcs-contact-faq-container">
                    <!-- FAQ Item 1 -->
                    <div class="gcs-contact-faq-item">
                        <button class="gcs-contact-faq-question">
                            <span>Serviciile dvs. sunt gratuite?</span>
                            <svg class="gcs-contact-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </button>
                        <div class="gcs-contact-faq-answer">
                            <p>Da, consultanța noastră este 100% gratuită pentru clienți. Noi primim comision de la instituțiile financiare partenere, deci nu vei plăti nimic pentru serviciile noastre de intermediere.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="gcs-contact-faq-item">
                        <button class="gcs-contact-faq-question">
                            <span>Cât durează procesul de aprobare a creditului?</span>
                            <svg class="gcs-contact-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </button>
                        <div class="gcs-contact-faq-answer">
                            <p>Timpul de procesare variază în funcție de tipul creditului și instituția financiară. În general, pentru credite nevoi personale, răspunsul poate veni în 24-48 ore. Pentru credite ipotecare, procesul durează între 1-3 săptămâni.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="gcs-contact-faq-item">
                        <button class="gcs-contact-faq-question">
                            <span>Ce documente sunt necesare?</span>
                            <svg class="gcs-contact-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </button>
                        <div class="gcs-contact-faq-answer">
                            <p>Documentele standard includ: act de identitate, adeverință de venit sau ultimele 3 extrase de cont, și pentru credite ipotecare - documente proprietate. Te vom ghida pas cu pas în pregătirea dosarului complet.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="gcs-contact-faq-item">
                        <button class="gcs-contact-faq-question">
                            <span>Pot obține credit dacă am istoric negativ la Biroul de Credit?</span>
                            <svg class="gcs-contact-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </button>
                        <div class="gcs-contact-faq-answer">
                            <p>Depinde de gradul incidentelor. Colaborăm cu instituții care au politici diferite față de istoricul de credit. Vom analiza situația ta și te vom ghida către cele mai potrivite opțiuni disponibile.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 5 -->
                    <div class="gcs-contact-faq-item">
                        <button class="gcs-contact-faq-question">
                            <span>Pot refinanța un credit existent?</span>
                            <svg class="gcs-contact-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </button>
                        <div class="gcs-contact-faq-answer">
                            <p>Absolut! Refinanțarea poate reduce rata lunară, dobânda, sau poate permite consolidarea mai multor credite într-unul singur. Vom compara ofertele și te vom ajuta să economisești bani.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 6 -->
                    <div class="gcs-contact-faq-item">
                        <button class="gcs-contact-faq-question">
                            <span>Cum mă pot contacta cu un consultant?</span>
                            <svg class="gcs-contact-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </button>
                        <div class="gcs-contact-faq-answer">
                            <p>Ne poți contacta telefonic la 0743 212 055 sau 0745 546 924, prin email la contact@creditsolutions.ro, sau completând formularul de contact de pe această pagină. Răspundem rapid la toate solicitările!</p>
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
        /* fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-transparent py-4 */
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
            padding-top: 1rem !important; /* py-4 */
            padding-bottom: 1rem !important;
        }

        /* bg-white shadow-md py-3 */
        .gcs-contact-header.scrolled {
            background-color: #ffffff !important;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06) !important;
            padding-top: 0.75rem !important; /* py-3 */
            padding-bottom: 0.75rem !important;
        }

        /* container mx-auto px-4 */
        .gcs-contact-container {
            width: 100% !important;
            max-width: 80rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }

        /* flex items-center justify-between */
        .gcs-contact-header-content {
            display: flex !important;
            align-items: center !important;
            justify-content: space-between !important;
        }

        /* ==================== LOGO ==================== */
        /* flex items-center gap-2 */
        .gcs-contact-logo-btn {
            display: flex !important;
            align-items: center !important;
            gap: 0.5rem !important; /* gap-2 */
            text-decoration: none !important;
            cursor: pointer !important;
        }

        /* w-10 h-10 rounded-full bg-white / bg-[#003D7A] */
        .gcs-contact-logo-circle {
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

        .gcs-contact-header.scrolled .gcs-contact-logo-circle {
            background-color: #003D7A !important; /* bg-[#003D7A] when scrolled */
        }

        /* w-6 h-6 text-[#003D7A] / text-white */
        .gcs-contact-logo-icon {
            width: 1.5rem !important; /* w-6 */
            height: 1.5rem !important; /* h-6 */
            color: #003D7A !important; /* text-[#003D7A] when not scrolled */
            transition-property: color !important;
            transition-duration: 300ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
        }

        .gcs-contact-header.scrolled .gcs-contact-logo-icon {
            color: #ffffff !important; /* text-white when scrolled */
        }

        /* Logo text - transition-colors text-white / text-[#003D7A] */
        .gcs-contact-logo-text {
            transition-property: color !important;
            transition-duration: 300ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            color: #ffffff !important; /* text-white when not scrolled */
            font-size: 1rem !important;
            font-weight: 400 !important;
        }

        .gcs-contact-header.scrolled .gcs-contact-logo-text {
            color: #003D7A !important; /* text-[#003D7A] when scrolled */
        }

        /* ==================== NAVIGATION ==================== */
        /* hidden md:flex items-center gap-8 */
        .gcs-contact-nav-desktop {
            display: none !important;
        }

        @media (min-width: 768px) {
            .gcs-contact-nav-desktop {
                display: flex !important;
                align-items: center !important;
                gap: 2rem !important; /* gap-8 */
            }
        }

        /* transition-colors hover:text-[#0066CC] text-white / text-gray-700 */
        .gcs-contact-nav-link {
            transition-property: color !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            color: #ffffff !important; /* text-white when not scrolled */
            text-decoration: none !important;
            font-size: 1rem !important;
        }

        .gcs-contact-nav-link:hover {
            color: #0066CC !important;
        }

        .gcs-contact-header.scrolled .gcs-contact-nav-link {
            color: #374151 !important; /* text-gray-700 when scrolled */
        }

        /* ==================== CTA BUTTON ==================== */
        /* hidden md:block */
        .gcs-contact-cta-wrapper {
            display: none !important;
        }

        @media (min-width: 768px) {
            .gcs-contact-cta-wrapper {
                display: block !important;
            }
        }

        /* bg-[#0066CC] hover:bg-[#0052A3] text-white rounded-lg */
        .gcs-contact-btn-primary {
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

        .gcs-contact-btn-primary:hover {
            background-color: #0052A3 !important;
        }

        /* w-full */
        .gcs-contact-btn-full {
            width: 100% !important;
        }

        /* ==================== MOBILE MENU ==================== */
        /* md:hidden */
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

        /* w-6 h-6 */
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

        /* md:hidden mt-4 pb-4 flex flex-col gap-4 bg-white rounded-lg shadow-lg p-4 */
        .gcs-contact-mobile-menu {
            display: none !important;
        }

        .gcs-contact-mobile-menu.open {
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
            .gcs-contact-mobile-menu {
                display: none !important;
            }
        }

        /* text-gray-700 hover:text-[#0066CC] text-left */
        .gcs-contact-mobile-link {
            color: #374151 !important; /* text-gray-700 */
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
            gap: 2rem !important;
        }

        @media (min-width: 768px) {
            .gcs-contact-info-grid {
                grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
            }
        }

        .gcs-contact-info-card {
            text-align: center !important;
            padding: 2rem !important;
            background-color: #F5F7FA !important;
            border-radius: 0.75rem !important;
        }

        .gcs-contact-info-icon-wrapper {
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            width: 4rem !important;
            height: 4rem !important;
            background-color: rgba(0, 102, 204, 0.1) !important;
            border-radius: 50% !important;
            margin-bottom: 1.5rem !important;
        }

        .gcs-contact-info-icon {
            width: 2rem !important;
            height: 2rem !important;
            color: #0066CC !important;
            stroke: currentColor !important;
            fill: none !important;
        }

        .gcs-contact-info-title {
            color: #003D7A !important;
            font-size: 1.25rem !important;
            line-height: 1.75rem !important;
            font-weight: 600 !important;
            margin-bottom: 0.5rem !important;
        }

        .gcs-contact-info-link {
            color: #0066CC !important;
            font-size: 1rem !important;
            line-height: 1.5rem !important;
            font-weight: 500 !important;
            text-decoration: none !important;
            display: block !important;
            margin-bottom: 0.25rem !important;
        }

        .gcs-contact-info-link:hover {
            text-decoration: underline !important;
        }

        .gcs-contact-info-text {
            color: #6b7280 !important;
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
            gap: 2rem !important;
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
        }

        .gcs-contact-form-title {
            color: #003D7A !important;
            font-size: 1.5rem !important;
            line-height: 2rem !important;
            font-weight: 700 !important;
            margin-bottom: 0.5rem !important;
        }

        .gcs-contact-form-subtitle {
            color: #6b7280 !important;
            font-size: 1rem !important;
            line-height: 1.5rem !important;
            margin-bottom: 2rem !important;
        }

        .gcs-contact-form {
            display: flex !important;
            flex-direction: column !important;
            gap: 1.5rem !important;
        }

        .gcs-contact-form-row {
            display: grid !important;
            gap: 1rem !important;
        }

        @media (min-width: 640px) {
            .gcs-contact-form-row {
                grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
            }
        }

        .gcs-contact-form-group {
            display: flex !important;
            flex-direction: column !important;
            gap: 0.5rem !important;
        }

        .gcs-contact-label {
            color: #374151 !important;
            font-size: 0.875rem !important;
            line-height: 1.25rem !important;
            font-weight: 500 !important;
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

        .gcs-contact-checkbox-label {
            display: flex !important;
            align-items: flex-start !important;
            gap: 0.5rem !important;
            color: #374151 !important;
            font-size: 0.875rem !important;
            line-height: 1.25rem !important;
            cursor: pointer !important;
        }

        .gcs-contact-checkbox {
            width: 1rem !important;
            height: 1rem !important;
            margin-top: 0.125rem !important;
            cursor: pointer !important;
        }

        .gcs-contact-submit-btn {
            width: 100% !important;
            padding: 0.75rem 1.5rem !important;
            background-color: #0066CC !important;
            color: #ffffff !important;
            border: none !important;
            border-radius: 0.5rem !important;
            font-size: 1rem !important;
            font-weight: 500 !important;
            cursor: pointer !important;
            transition: background-color 0.15s !important;
            position: relative !important;
        }

        .gcs-contact-submit-btn:hover {
            background-color: #0052A3 !important;
        }

        .gcs-contact-submit-btn:disabled {
            opacity: 0.6 !important;
            cursor: not-allowed !important;
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

        /* Map Wrapper */
        .gcs-contact-map-wrapper {
            display: flex !important;
            flex-direction: column !important;
        }

        .gcs-contact-map-title {
            color: #003D7A !important;
            font-size: 1.5rem !important;
            line-height: 2rem !important;
            font-weight: 700 !important;
            margin-bottom: 1rem !important;
        }

        .gcs-contact-map {
            flex: 1 !important;
            min-height: 400px !important;
            border-radius: 0.75rem !important;
            overflow: hidden !important;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06) !important;
        }

        /* ==================== FAQ SECTION ==================== */
        .gcs-contact-faq-section {
            padding-top: 4rem !important;
            padding-bottom: 4rem !important;
            background-color: #ffffff !important;
        }

        .gcs-contact-faq-container {
            max-width: 48rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
            display: flex !important;
            flex-direction: column !important;
            gap: 1rem !important;
        }

        .gcs-contact-faq-item {
            background-color: #ffffff !important;
            border: 1px solid #e5e7eb !important;
            border-radius: 0.5rem !important;
            overflow: hidden !important;
            transition: all 0.15s !important;
        }

        .gcs-contact-faq-item:hover {
            border-color: #0066CC !important;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06) !important;
        }

        .gcs-contact-faq-question {
            width: 100% !important;
            display: flex !important;
            align-items: center !important;
            justify-content: space-between !important;
            padding: 1.25rem !important;
            background-color: transparent !important;
            border: none !important;
            cursor: pointer !important;
            text-align: left !important;
            font-size: 1rem !important;
            line-height: 1.5rem !important;
            font-weight: 600 !important;
            color: #003D7A !important;
            transition: color 0.15s !important;
        }

        .gcs-contact-faq-question:hover {
            color: #0066CC !important;
        }

        .gcs-contact-faq-question span {
            flex: 1 !important;
            padding-right: 1rem !important;
        }

        .gcs-contact-faq-icon {
            width: 1.25rem !important;
            height: 1.25rem !important;
            color: #0066CC !important;
            stroke: currentColor !important;
            fill: none !important;
            transition: transform 0.15s !important;
            flex-shrink: 0 !important;
        }

        .gcs-contact-faq-item.active .gcs-contact-faq-icon {
            transform: rotate(180deg) !important;
        }

        .gcs-contact-faq-answer {
            max-height: 0 !important;
            overflow: hidden !important;
            transition: max-height 0.3s ease-out !important;
        }

        .gcs-contact-faq-item.active .gcs-contact-faq-answer {
            max-height: 500px !important;
        }

        .gcs-contact-faq-answer p {
            padding: 0 1.25rem 1.25rem 1.25rem !important;
            color: #4b5563 !important;
            font-size: 0.875rem !important;
            line-height: 1.5rem !important;
            margin: 0 !important;
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
            color: #4b5563 !important;
            max-width: 42rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
            font-size: 1rem !important;
            line-height: 1.5rem !important;
        }

        .gcs-contact-persons-grid {
            display: grid !important;
            gap: 2rem !important;
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
            padding: 2rem !important;
            border-radius: 0.75rem !important;
            text-align: center !important;
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
                    phone: formData.get('phone'),
                    email: formData.get('email'),
                    subject: formData.get('subject'),
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
                        messageDiv.textContent = result.data.message || 'Mesajul a fost trimis cu succes! Vă vom contacta în curând.';
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

            // FAQ Accordion Handler
            const faqItems = document.querySelectorAll('.gcs-contact-faq-item');

            faqItems.forEach(item => {
                const question = item.querySelector('.gcs-contact-faq-question');

                question.addEventListener('click', function() {
                    // Close all other items
                    faqItems.forEach(otherItem => {
                        if (otherItem !== item && otherItem.classList.contains('active')) {
                            otherItem.classList.remove('active');
                        }
                    });

                    // Toggle current item
                    item.classList.toggle('active');
                });
            });

        })();
    </script>


    <?php
    return ob_get_clean();
}

add_shortcode('gcs_contact_page', 'gcs_contact_page_shortcode');

// AJAX handler for contact form
add_action('wp_ajax_gcs_contact_form', 'gcs_contact_form_handler');
add_action('wp_ajax_nopriv_gcs_contact_form', 'gcs_contact_form_handler');

function gcs_contact_form_handler() {
    // Verify nonce (we'll add basic validation)

    // Sanitize inputs
    $name = sanitize_text_field($_POST['name']);
    $phone = sanitize_text_field($_POST['phone']);
    $email = sanitize_email($_POST['email']);
    $subject = sanitize_text_field($_POST['subject']);
    $message = sanitize_textarea_field($_POST['message']);

    // Validate email
    if (!is_email($email)) {
        wp_send_json_error(['message' => 'Adresa de email nu este validă.']);
        return;
    }

    // Prepare email
    $to = 'contact@creditsolutions.ro';
    $email_subject = 'Formular Contact: ' . $subject;
    $email_body = "Nume: $name\n";
    $email_body .= "Telefon: $phone\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Subiect: $subject\n\n";
    $email_body .= "Mesaj:\n$message\n";

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: ' . get_bloginfo('name') . ' <noreply@' . parse_url(home_url(), PHP_URL_HOST) . '>',
        'Reply-To: ' . $name . ' <' . $email . '>'
    );

    // Send email
    $sent = wp_mail($to, $email_subject, $email_body, $headers);

    if ($sent) {
        wp_send_json_success(['message' => 'Mesajul a fost trimis cu succes! Vă vom contacta în curând.']);
    } else {
        wp_send_json_error(['message' => 'A apărut o eroare la trimiterea mesajului. Vă rugăm să ne contactați telefonic.']);
    }
}

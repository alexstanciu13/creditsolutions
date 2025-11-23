<?php
/**
 * Global Credit Solutions - Footer Shortcode
 *
 * Shortcode: [gcs_footer]
 *
 * EXACT FIGMA DESIGN - Footer with 4 columns
 * - All Tailwind classes converted precisely
 * - Complete theme isolation with !important on EVERY property
 * - Newsletter form with WordPress email integration
 */

function gcs_footer_shortcode() {
    ob_start();
    ?>

    <div class="gcs-footer-wrapper">
        <!-- bg-[#003D7A] text-white pt-16 pb-8 -->
        <footer id="footer" class="gcs-footer">
            <!-- container mx-auto px-4 -->
            <div class="gcs-footer-container">

                <!-- Main Footer Content: grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12 -->
                <div class="gcs-footer-grid">

                    <!-- Column 1: Company Info -->
                    <div class="gcs-footer-column">
                        <!-- Logo: flex items-center gap-2 mb-4 -->
                        <div class="gcs-footer-logo">
                            <!-- w-10 h-10 bg-white rounded-full -->
                            <div class="gcs-footer-logo-circle">
                                <!-- Globe icon: w-6 h-6 text-[#003D7A] -->
                                <svg class="gcs-footer-logo-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="2" x2="22" y1="12" y2="12"></line>
                                    <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                                </svg>
                            </div>
                            <span class="gcs-footer-brand">Global Credit Solutions</span>
                        </div>

                        <!-- Description: text-gray-300 text-sm mb-6 -->
                        <p class="gcs-footer-description">
                            Broker de credite autorizat ANPC. Te ajutăm să găsești cele mai
                            bune oferte de creditare din piață, rapid și eficient.
                        </p>

                        <!-- Social Icons: flex gap-3 -->
                        <div class="gcs-footer-social">
                            <a href="#" class="gcs-footer-social-link" aria-label="Facebook">
                                <svg class="gcs-footer-social-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg>
                            </a>
                            <a href="#" class="gcs-footer-social-link" aria-label="Instagram">
                                <svg class="gcs-footer-social-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                    <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
                                </svg>
                            </a>
                            <a href="#" class="gcs-footer-social-link" aria-label="LinkedIn">
                                <svg class="gcs-footer-social-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                    <rect width="4" height="12" x="2" y="9"></rect>
                                    <circle cx="4" cy="4" r="2"></circle>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Column 2: Quick Links -->
                    <div class="gcs-footer-column">
                        <h3 class="gcs-footer-heading">Link-uri Rapide</h3>
                        <ul class="gcs-footer-list">
                            <li class="gcs-footer-list-item">
                                <a href="/" class="gcs-footer-link">Acasă</a>
                            </li>
                            <li class="gcs-footer-list-item">
                                <a href="/despre" class="gcs-footer-link">Despre Noi</a>
                            </li>
                            <li class="gcs-footer-list-item">
                                <a href="/servicii" class="gcs-footer-link">Servicii</a>
                            </li>
                            <li class="gcs-footer-list-item">
                                <a href="/contact" class="gcs-footer-link">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Column 3: Services -->
                    <div class="gcs-footer-column">
                        <h3 class="gcs-footer-heading">Servicii</h3>
                        <ul class="gcs-footer-list">
                            <li class="gcs-footer-list-item">
                                <a href="/servicii" class="gcs-footer-link">Credite Nevoi Personale</a>
                            </li>
                            <li class="gcs-footer-list-item">
                                <a href="/servicii" class="gcs-footer-link">Credit Ipotecar/Prima Casă</a>
                            </li>
                            <li class="gcs-footer-list-item">
                                <a href="/servicii" class="gcs-footer-link">Credite Auto/Leasing</a>
                            </li>
                            <li class="gcs-footer-list-item">
                                <a href="/servicii" class="gcs-footer-link">Credite Persoane Juridice</a>
                            </li>
                            <li class="gcs-footer-list-item">
                                <a href="/servicii" class="gcs-footer-link">Refinanțări</a>
                            </li>
                            <li class="gcs-footer-list-item">
                                <a href="/servicii" class="gcs-footer-link">Alte Servicii</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Column 4: Contact & Newsletter -->
                    <div class="gcs-footer-column">
                        <h3 class="gcs-footer-heading">Contact</h3>

                        <!-- Contact Info: space-y-3 mb-6 -->
                        <ul class="gcs-footer-contact-list">
                            <li class="gcs-footer-contact-item">
                                <a href="tel:+40743212055" class="gcs-footer-contact-link">
                                    <svg class="gcs-footer-contact-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                    </svg>
                                    <span>0743212055, 0745546924</span>
                                </a>
                            </li>
                            <li class="gcs-footer-contact-item">
                                <a href="mailto:contact@creditsolutions.ro" class="gcs-footer-contact-link">
                                    <svg class="gcs-footer-contact-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                    </svg>
                                    <span>contact@creditsolutions.ro</span>
                                </a>
                            </li>
                            <li class="gcs-footer-contact-item">
                                <div class="gcs-footer-contact-link">
                                    <svg class="gcs-footer-contact-icon-static" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg>
                                    <span>Bd. Unirii 1, București</span>
                                </div>
                            </li>
                            <li class="gcs-footer-contact-item">
                                <div class="gcs-footer-schedule">
                                    <strong>Program:</strong> Luni - Vineri<br>
                                    09:00 - 18:00
                                </div>
                            </li>
                        </ul>

                        <!-- Newsletter -->
                        <div class="gcs-footer-newsletter">
                            <p class="gcs-footer-newsletter-text">Abonează-te la newsletter:</p>

                            <form id="gcs-footer-newsletter-form" class="gcs-footer-newsletter-form">
                                <input
                                    type="email"
                                    name="email"
                                    placeholder="Email-ul tău"
                                    required
                                    class="gcs-footer-newsletter-input"
                                />
                                <button
                                    type="submit"
                                    class="gcs-footer-newsletter-button"
                                >
                                    <span class="gcs-footer-btn-text">Abonează-te</span>
                                    <span class="gcs-footer-btn-loading">Se trimite...</span>
                                </button>
                                <div class="gcs-footer-form-message"></div>
                            </form>
                        </div>
                    </div>

                </div>

                <!-- Bottom Footer: border-t border-white/10 pt-8 -->
                <div class="gcs-footer-bottom">
                    <!-- flex flex-col md:flex-row justify-between items-center gap-4 -->
                    <div class="gcs-footer-bottom-content">
                        <!-- Copyright: text-sm text-gray-300 -->
                        <div class="gcs-footer-copyright">
                            © 2025 Global Credit Solutions. Toate drepturile rezervate.
                        </div>

                        <!-- Legal Links: flex flex-wrap justify-center gap-6 -->
                        <div class="gcs-footer-legal">
                            <a href="/termeni-si-conditii" class="gcs-footer-legal-link">
                                Termeni și Condiții
                            </a>
                            <a href="/gdpr" class="gcs-footer-legal-link">
                                GDPR
                            </a>
                            <a href="/politica-cookies" class="gcs-footer-legal-link">
                                Politica Cookies
                            </a>
                            <a href="/disclaimer-legal" class="gcs-footer-legal-link">
                                Disclaimer Legal
                            </a>
                            <a href="/solutionarea-plangerilor" class="gcs-footer-legal-link">
                                Soluționarea Plângerilor
                            </a>
                        </div>
                    </div>

                    <!-- Authorization text: text-xs text-gray-400 text-center mt-4 -->
                    <div class="gcs-footer-auth">
                        Global Credit Solutions este înregistrat ca intermediar în creditare
                        conform OUG 52/2016. Autorizație ANPC Nr. XXXXX/2023
                    </div>
                </div>

            </div>
        </footer>
    </div>

    <style>
        /* ==================== RESET ==================== */
        .gcs-footer-wrapper {
            all: initial !important;
            display: block !important;
        }

        .gcs-footer-wrapper *,
        .gcs-footer-wrapper *::before,
        .gcs-footer-wrapper *::after {
            box-sizing: border-box !important;
            margin: 0 !important;
            padding: 0 !important;
            border: 0 !important;
            font-size: 100% !important;
            font: inherit !important;
            vertical-align: baseline !important;
        }

        /* SVG reset */
        .gcs-footer-wrapper svg {
            display: inline-block !important;
            vertical-align: middle !important;
            overflow: visible !important;
        }

        /* Remove all link styles */
        .gcs-footer-wrapper a {
            background-color: transparent !important;
            background-image: none !important;
            background: transparent !important;
            text-decoration: none !important;
            color: inherit !important;
            border: none !important;
            outline: none !important;
        }

        .gcs-footer-wrapper a:hover,
        .gcs-footer-wrapper a:active,
        .gcs-footer-wrapper a:focus,
        .gcs-footer-wrapper a:visited {
            background-image: none !important;
            text-decoration: none !important;
            outline: none !important;
            border: none !important;
        }

        /* Remove list styles */
        .gcs-footer-wrapper ul,
        .gcs-footer-wrapper ol {
            list-style: none !important;
        }

        /* Remove button/input defaults */
        .gcs-footer-wrapper button,
        .gcs-footer-wrapper input,
        .gcs-footer-wrapper select,
        .gcs-footer-wrapper textarea {
            font-family: inherit !important;
            font-size: 100% !important;
            line-height: 1.15 !important;
            margin: 0 !important;
            padding: 0 !important;
            border: 0 !important;
            background: none !important;
        }

        /* Remove button defaults */
        .gcs-footer-wrapper button {
            overflow: visible !important;
            text-transform: none !important;
            -webkit-appearance: button !important;
        }

        /* Global font */
        .gcs-footer-wrapper,
        .gcs-footer-wrapper * {
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif !important;
            text-rendering: optimizeLegibility !important;
            -webkit-font-smoothing: antialiased !important;
            -moz-osx-font-smoothing: grayscale !important;
        }

        /* ==================== FOOTER ==================== */
        /* bg-[#003D7A] text-white pt-16 pb-8 */
        .gcs-footer {
            background-color: #003D7A !important; /* bg-[#003D7A] */
            color: #ffffff !important; /* text-white */
            padding-top: 4rem !important; /* pt-16 */
            padding-bottom: 2rem !important; /* pb-8 */
        }

        /* ==================== CONTAINER ==================== */
        /* container mx-auto px-4 */
        .gcs-footer-container {
            width: 100% !important;
            max-width: 80rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }

        /* ==================== GRID ==================== */
        /* grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12 */
        .gcs-footer-grid {
            display: grid !important;
            grid-template-columns: repeat(1, minmax(0, 1fr)) !important; /* grid-cols-1 */
            gap: 2rem !important; /* gap-8 */
            margin-bottom: 3rem !important; /* mb-12 */
        }

        @media (min-width: 768px) {
            .gcs-footer-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr)) !important; /* md:grid-cols-2 */
            }
        }

        @media (min-width: 1024px) {
            .gcs-footer-grid {
                grid-template-columns: repeat(4, minmax(0, 1fr)) !important; /* lg:grid-cols-4 */
            }
        }

        .gcs-footer-column {
            display: flex !important;
            flex-direction: column !important;
        }

        /* ==================== LOGO ==================== */
        /* flex items-center gap-2 mb-4 */
        .gcs-footer-logo {
            display: flex !important;
            align-items: center !important;
            gap: 0.5rem !important; /* gap-2 */
            margin-bottom: 1rem !important; /* mb-4 */
        }

        /* w-10 h-10 bg-white rounded-full */
        .gcs-footer-logo-circle {
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            width: 2.5rem !important; /* w-10 */
            height: 2.5rem !important; /* h-10 */
            background-color: #ffffff !important; /* bg-white */
            border-radius: 50% !important; /* rounded-full */
            flex-shrink: 0 !important;
        }

        /* Globe icon: w-6 h-6 text-[#003D7A] */
        .gcs-footer-logo-icon {
            width: 1.5rem !important; /* w-6 */
            height: 1.5rem !important; /* h-6 */
            color: #003D7A !important; /* text-[#003D7A] */
            stroke: currentColor !important;
            fill: none !important;
        }

        .gcs-footer-brand {
            color: #ffffff !important;
            font-size: 1rem !important;
            line-height: 1.5rem !important;
            font-weight: 500 !important;
        }

        /* ==================== DESCRIPTION ==================== */
        /* text-gray-300 text-sm mb-6 */
        .gcs-footer-description {
            color: #d1d5db !important; /* text-gray-300 */
            font-size: 0.875rem !important; /* text-sm */
            line-height: 1.25rem !important;
            margin-bottom: 1.5rem !important; /* mb-6 */
        }

        /* ==================== SOCIAL ICONS ==================== */
        /* flex gap-3 */
        .gcs-footer-social {
            display: flex !important;
            gap: 0.75rem !important; /* gap-3 */
        }

        /* w-10 h-10 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center */
        .gcs-footer-social-link {
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            width: 2.5rem !important; /* w-10 */
            height: 2.5rem !important; /* h-10 */
            background-color: rgba(255, 255, 255, 0.1) !important; /* bg-white/10 */
            background-image: none !important;
            background: rgba(255, 255, 255, 0.1) !important;
            border-radius: 50% !important; /* rounded-full */
            color: #ffffff !important;
            transition-property: background-color !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 150ms !important;
            cursor: pointer !important;
        }

        .gcs-footer-social-link:hover {
            background-color: rgba(255, 255, 255, 0.2) !important; /* hover:bg-white/20 */
            background-image: none !important;
            background: rgba(255, 255, 255, 0.2) !important;
        }

        /* w-5 h-5 */
        .gcs-footer-social-icon {
            width: 1.25rem !important; /* w-5 */
            height: 1.25rem !important; /* h-5 */
            stroke: currentColor !important;
            fill: none !important;
        }

        /* ==================== HEADINGS ==================== */
        /* text-white mb-4 text-lg */
        .gcs-footer-heading {
            color: #ffffff !important; /* text-white */
            margin-bottom: 1rem !important; /* mb-4 */
            font-size: 1.125rem !important; /* text-lg */
            line-height: 1.75rem !important;
            font-weight: 600 !important;
        }

        /* ==================== LISTS ==================== */
        /* space-y-3 */
        .gcs-footer-list {
            display: flex !important;
            flex-direction: column !important;
            gap: 0.75rem !important; /* space-y-3 */
        }

        .gcs-footer-list-item {
            display: block !important;
        }

        /* text-gray-300 hover:text-white text-sm */
        .gcs-footer-link {
            color: #d1d5db !important; /* text-gray-300 */
            font-size: 0.875rem !important; /* text-sm */
            line-height: 1.25rem !important;
            transition-property: color !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 150ms !important;
            cursor: pointer !important;
            display: inline-block !important;
        }

        .gcs-footer-link:hover {
            color: #ffffff !important; /* hover:text-white */
        }

        /* ==================== CONTACT ==================== */
        /* space-y-3 mb-6 */
        .gcs-footer-contact-list {
            display: flex !important;
            flex-direction: column !important;
            gap: 0.75rem !important; /* space-y-3 */
            margin-bottom: 1.5rem !important; /* mb-6 */
        }

        .gcs-footer-contact-item {
            display: block !important;
        }

        /* flex items-center gap-2 text-gray-300 hover:text-white text-sm */
        .gcs-footer-contact-link {
            display: flex !important;
            align-items: center !important;
            gap: 0.5rem !important; /* gap-2 */
            color: #d1d5db !important; /* text-gray-300 */
            font-size: 0.875rem !important; /* text-sm */
            line-height: 1.25rem !important;
            transition-property: color !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 150ms !important;
            cursor: pointer !important;
        }

        .gcs-footer-contact-link:hover {
            color: #ffffff !important; /* hover:text-white */
        }

        /* w-4 h-4 */
        .gcs-footer-contact-icon {
            width: 1rem !important; /* w-4 */
            height: 1rem !important; /* h-4 */
            flex-shrink: 0 !important;
            stroke: currentColor !important;
            fill: none !important;
        }

        /* flex-shrink-0 mt-1 */
        .gcs-footer-contact-icon-static {
            width: 1rem !important; /* w-4 */
            height: 1rem !important; /* h-4 */
            flex-shrink: 0 !important;
            margin-top: 0.25rem !important; /* mt-1 */
            stroke: currentColor !important;
            fill: none !important;
        }

        /* text-gray-300 text-sm */
        .gcs-footer-schedule {
            color: #d1d5db !important; /* text-gray-300 */
            font-size: 0.875rem !important; /* text-sm */
            line-height: 1.25rem !important;
        }

        .gcs-footer-schedule strong {
            font-weight: 700 !important;
        }

        /* ==================== NEWSLETTER ==================== */
        .gcs-footer-newsletter {
            display: flex !important;
            flex-direction: column !important;
        }

        /* text-sm text-gray-300 mb-3 */
        .gcs-footer-newsletter-text {
            font-size: 0.875rem !important; /* text-sm */
            line-height: 1.25rem !important;
            color: #d1d5db !important; /* text-gray-300 */
            margin-bottom: 0.75rem !important; /* mb-3 */
        }

        /* space-y-2 */
        .gcs-footer-newsletter-form {
            display: flex !important;
            flex-direction: column !important;
            gap: 0.5rem !important; /* space-y-2 */
        }

        /* bg-white/10 border-white/20 text-white placeholder:text-gray-400 */
        .gcs-footer-newsletter-input,
        input.gcs-footer-newsletter-input,
        .gcs-footer-wrapper .gcs-footer-newsletter-input,
        .gcs-footer-wrapper input.gcs-footer-newsletter-input {
            width: 100% !important;
            padding: 0.5rem 0.75rem !important;
            padding-top: 0.5rem !important;
            padding-bottom: 0.5rem !important;
            padding-left: 0.75rem !important;
            padding-right: 0.75rem !important;
            font-size: 0.875rem !important;
            line-height: 1.25rem !important;
            color: #ffffff !important; /* text-white */
            background-color: rgba(255, 255, 255, 0.1) !important; /* bg-white/10 */
            background-image: none !important;
            background: rgba(255, 255, 255, 0.1) !important;
            border: 1px solid rgba(255, 255, 255, 0.2) !important; /* border-white/20 */
            border-width: 1px !important;
            border-style: solid !important;
            border-color: rgba(255, 255, 255, 0.2) !important;
            border-radius: 0.375rem !important;
            outline: none !important;
            outline-width: 0 !important;
            outline-style: none !important;
            box-shadow: none !important;
            -webkit-appearance: none !important;
            -moz-appearance: none !important;
            appearance: none !important;
        }

        .gcs-footer-newsletter-input::placeholder,
        input.gcs-footer-newsletter-input::placeholder,
        .gcs-footer-wrapper .gcs-footer-newsletter-input::placeholder,
        .gcs-footer-wrapper input.gcs-footer-newsletter-input::placeholder {
            color: #9ca3af !important; /* placeholder:text-gray-400 */
            opacity: 1 !important;
        }

        .gcs-footer-newsletter-input:focus,
        input.gcs-footer-newsletter-input:focus,
        .gcs-footer-wrapper .gcs-footer-newsletter-input:focus,
        .gcs-footer-wrapper input.gcs-footer-newsletter-input:focus {
            outline: 2px solid transparent !important;
            outline-offset: 2px !important;
            outline-width: 0 !important;
            border-color: rgba(255, 255, 255, 0.4) !important;
            border-width: 1px !important;
            background-color: rgba(255, 255, 255, 0.1) !important;
            background-image: none !important;
            background: rgba(255, 255, 255, 0.1) !important;
            box-shadow: none !important;
        }

        /* w-full bg-[#0066CC] hover:bg-[#0052A3] text-white */
        .gcs-footer-newsletter-button,
        button.gcs-footer-newsletter-button,
        .gcs-footer-wrapper .gcs-footer-newsletter-button,
        .gcs-footer-wrapper button.gcs-footer-newsletter-button {
            width: 100% !important;
            padding: 0.5rem 1rem !important;
            padding-top: 0.5rem !important;
            padding-bottom: 0.5rem !important;
            padding-left: 1rem !important;
            padding-right: 1rem !important;
            font-size: 0.875rem !important;
            font-weight: 500 !important;
            line-height: 1.25rem !important;
            /* AGGRESSIVE BLUE BACKGROUND */
            color: #ffffff !important; /* text-white */
            background-color: #0066CC !important; /* bg-[#0066CC] */
            background-image: none !important;
            background: #0066CC !important;
            border: none !important;
            border-width: 0 !important;
            border-style: none !important;
            border-color: transparent !important;
            border-radius: 0.375rem !important;
            outline: none !important;
            outline-width: 0 !important;
            outline-style: none !important;
            cursor: pointer !important;
            text-decoration: none !important;
            transition-property: background-color !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 150ms !important;
            -webkit-appearance: none !important;
            -moz-appearance: none !important;
            appearance: none !important;
        }

        .gcs-footer-newsletter-button:hover,
        button.gcs-footer-newsletter-button:hover,
        .gcs-footer-wrapper .gcs-footer-newsletter-button:hover,
        .gcs-footer-wrapper button.gcs-footer-newsletter-button:hover {
            background-color: #0052A3 !important; /* hover:bg-[#0052A3] */
            background-image: none !important;
            background: #0052A3 !important;
            color: #ffffff !important;
            border: none !important;
            outline: none !important;
            text-decoration: none !important;
        }

        .gcs-footer-newsletter-button:active,
        .gcs-footer-newsletter-button:focus,
        .gcs-footer-newsletter-button:visited,
        button.gcs-footer-newsletter-button:active,
        button.gcs-footer-newsletter-button:focus,
        button.gcs-footer-newsletter-button:visited,
        .gcs-footer-wrapper .gcs-footer-newsletter-button:active,
        .gcs-footer-wrapper .gcs-footer-newsletter-button:focus,
        .gcs-footer-wrapper .gcs-footer-newsletter-button:visited,
        .gcs-footer-wrapper button.gcs-footer-newsletter-button:active,
        .gcs-footer-wrapper button.gcs-footer-newsletter-button:focus,
        .gcs-footer-wrapper button.gcs-footer-newsletter-button:visited {
            background-color: #0066CC !important;
            background-image: none !important;
            background: #0066CC !important;
            color: #ffffff !important;
            border: none !important;
            border-width: 0 !important;
            outline: none !important;
            outline-width: 0 !important;
            text-decoration: none !important;
        }

        /* Loading states */
        .gcs-footer-btn-text {
            display: inline !important;
        }

        .gcs-footer-btn-loading {
            display: none !important;
        }

        .gcs-footer-newsletter-button.loading .gcs-footer-btn-text {
            display: none !important;
        }

        .gcs-footer-newsletter-button.loading .gcs-footer-btn-loading {
            display: inline !important;
        }

        .gcs-footer-newsletter-button:disabled,
        button.gcs-footer-newsletter-button:disabled,
        .gcs-footer-wrapper .gcs-footer-newsletter-button:disabled,
        .gcs-footer-wrapper button.gcs-footer-newsletter-button:disabled {
            opacity: 0.6 !important;
            cursor: not-allowed !important;
            background-color: #0066CC !important;
            background-image: none !important;
            background: #0066CC !important;
        }

        /* Form messages */
        .gcs-footer-form-message {
            display: none !important;
            padding: 0.75rem !important;
            border-radius: 0.375rem !important;
            font-size: 0.875rem !important;
            line-height: 1.25rem !important;
            margin-top: 0.5rem !important;
            text-align: center !important;
        }

        .gcs-footer-form-message.success {
            display: block !important;
            background-color: #dcfce7 !important;
            color: #166534 !important;
            border: 1px solid #86efac !important;
        }

        .gcs-footer-form-message.error {
            display: block !important;
            background-color: #fee2e2 !important;
            color: #991b1b !important;
            border: 1px solid #fca5a5 !important;
        }

        /* ==================== BOTTOM FOOTER ==================== */
        /* border-t border-white/10 pt-8 */
        .gcs-footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1) !important; /* border-white/10 */
            padding-top: 2rem !important; /* pt-8 */
        }

        /* flex flex-col md:flex-row justify-between items-center gap-4 */
        .gcs-footer-bottom-content {
            display: flex !important;
            flex-direction: column !important;
            justify-content: space-between !important;
            align-items: center !important;
            gap: 1rem !important; /* gap-4 */
        }

        @media (min-width: 768px) {
            .gcs-footer-bottom-content {
                flex-direction: row !important; /* md:flex-row */
            }
        }

        /* text-sm text-gray-300 text-center md:text-left */
        .gcs-footer-copyright {
            font-size: 0.875rem !important; /* text-sm */
            line-height: 1.25rem !important;
            color: #d1d5db !important; /* text-gray-300 */
            text-align: center !important;
        }

        @media (min-width: 768px) {
            .gcs-footer-copyright {
                text-align: left !important; /* md:text-left */
            }
        }

        /* flex flex-wrap justify-center gap-6 text-sm */
        .gcs-footer-legal {
            display: flex !important;
            flex-wrap: wrap !important;
            justify-content: center !important;
            gap: 1.5rem !important; /* gap-6 */
            font-size: 0.875rem !important; /* text-sm */
            line-height: 1.25rem !important;
        }

        /* text-gray-300 hover:text-white */
        .gcs-footer-legal-link {
            color: #d1d5db !important; /* text-gray-300 */
            transition-property: color !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 150ms !important;
            cursor: pointer !important;
        }

        .gcs-footer-legal-link:hover {
            color: #ffffff !important; /* hover:text-white */
        }

        /* text-xs text-gray-400 text-center mt-4 */
        .gcs-footer-auth {
            margin-top: 1rem !important; /* mt-4 */
            font-size: 0.75rem !important; /* text-xs */
            line-height: 1rem !important;
            color: #9ca3af !important; /* text-gray-400 */
            text-align: center !important;
        }
    </style>

    <script>
        (function() {
            const form = document.getElementById('gcs-footer-newsletter-form');
            if (!form) return;

            const submitBtn = form.querySelector('.gcs-footer-newsletter-button');
            const messageDiv = form.querySelector('.gcs-footer-form-message');
            const emailInput = form.querySelector('input[name="email"]');

            form.addEventListener('submit', function(e) {
                e.preventDefault();

                // Clear previous messages
                messageDiv.classList.remove('success', 'error');
                messageDiv.style.display = 'none';
                messageDiv.textContent = '';

                // Get email value
                const email = emailInput.value.trim();

                // Basic validation
                if (!email) {
                    messageDiv.classList.add('error');
                    messageDiv.textContent = 'Te rugăm să introduci adresa de email.';
                    messageDiv.style.display = 'block';
                    return;
                }

                // Show loading state
                submitBtn.classList.add('loading');
                submitBtn.disabled = true;

                // Submit via AJAX
                fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: new URLSearchParams({
                        action: 'gcs_newsletter_subscribe',
                        email: email
                    })
                })
                .then(response => response.json())
                .then(result => {
                    // Remove loading state
                    submitBtn.classList.remove('loading');
                    submitBtn.disabled = false;

                    if (result.success) {
                        messageDiv.classList.add('success');
                        messageDiv.textContent = result.data.message;
                        form.reset();
                    } else {
                        messageDiv.classList.add('error');
                        messageDiv.textContent = result.data.message;
                    }

                    messageDiv.style.display = 'block';

                    // Smooth scroll to message
                    messageDiv.scrollIntoView({
                        behavior: 'smooth',
                        block: 'nearest'
                    });
                })
                .catch(error => {
                    // Remove loading state
                    submitBtn.classList.remove('loading');
                    submitBtn.disabled = false;

                    messageDiv.classList.add('error');
                    messageDiv.textContent = 'A apărut o eroare. Te rugăm să încerci din nou.';
                    messageDiv.style.display = 'block';
                });
            });
        })();
    </script>

    <?php
    return ob_get_clean();
}

add_shortcode('gcs_footer', 'gcs_footer_shortcode');

// AJAX handler for newsletter subscription
function gcs_newsletter_subscribe_handler() {
    // Validate email
    $email = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';

    if (empty($email)) {
        wp_send_json_error(['message' => 'Adresa de email este obligatorie.']);
        return;
    }

    if (!is_email($email)) {
        wp_send_json_error(['message' => 'Adresa de email nu este validă.']);
        return;
    }

    // Prepare email
    $to = 'contact@creditsolutions.ro';
    $from_name = wp_specialchars_decode( get_bloginfo( 'name' ), ENT_QUOTES );

    $subject = 'Abonare Newsletter - ' . $email;

    $email_body = "Abonare nouă la newsletter:\n\n";
    $email_body .= "Email: {$email}\n";
    $email_body .= "Data: " . date('d.m.Y H:i:s') . "\n\n";
    $email_body .= "---\n";
    $email_body .= "Trimis de pe " . home_url();

    // Minimal headers (like Auto Empire - goes to inbox)
    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: ' . $from_name . ' <contact@creditsolutions.ro>',
        'Reply-To: ' . $email,
    );

    // Send email
    $sent = wp_mail($to, $subject, $email_body, $headers);

    if ($sent) {
        wp_send_json_success(['message' => 'Te-ai abonat cu succes la newsletter!']);
    } else {
        wp_send_json_error(['message' => 'A apărut o eroare la trimiterea mesajului. Te rugăm să încerci din nou.']);
    }
}

add_action('wp_ajax_gcs_newsletter_subscribe', 'gcs_newsletter_subscribe_handler');
add_action('wp_ajax_nopriv_gcs_newsletter_subscribe', 'gcs_newsletter_subscribe_handler');

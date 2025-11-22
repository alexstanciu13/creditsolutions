<?php
/**
 * Global Credit Solutions - FAQ + CTA Sections Shortcode
 *
 * Shortcode: [gcs_faq_cta]
 *
 * EXACT FIGMA DESIGN - FAQ accordion + CTA section
 * - All Tailwind classes converted precisely
 * - Complete theme isolation with !important on EVERY property
 * - Interactive accordion with JavaScript
 */

function gcs_faq_cta_shortcode() {
    ob_start();
    ?>

    <div class="gcs-faq-cta-wrapper">

        <!-- ==================== FAQ SECTION ==================== -->
        <!-- py-16 bg-[#F5F7FA] -->
        <section id="faq" class="gcs-faq-section">
            <!-- container mx-auto px-4 -->
            <div class="gcs-faq-container">

                <!-- Header: text-center mb-12 -->
                <div class="gcs-faq-header">
                    <!-- Heading: text-[#003D7A] mb-4 text-2xl md:text-3xl -->
                    <h2 class="gcs-faq-heading">Întrebări Frecvente</h2>
                    <!-- Description: text-gray-600 max-w-2xl mx-auto -->
                    <p class="gcs-faq-description">
                        Răspunsuri clare la cele mai comune întrebări despre serviciile
                        noastre și procesul de creditare.
                    </p>
                </div>

                <!-- Accordion wrapper: max-w-3xl mx-auto -->
                <div class="gcs-faq-accordion-wrapper">
                    <!-- Accordion: space-y-4 -->
                    <div class="gcs-faq-accordion">

                        <!-- FAQ Item 1 -->
                        <div class="gcs-faq-item">
                            <!-- Trigger button -->
                            <button class="gcs-faq-trigger" data-faq="0">
                                <span class="gcs-faq-question">Ce documente sunt necesare pentru un credit?</span>
                                <svg class="gcs-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </button>
                            <!-- Content -->
                            <div class="gcs-faq-content" data-faq-content="0">
                                <p class="gcs-faq-answer">
                                    Documentele necesare variază în funcție de tipul de credit, dar în general sunt necesare: CI/BI, acte de venit (adeverință de salariu, bilanț contabil pentru firme), extrase de cont. Avem soluții pentru orice problemă și te ghidăm pas cu pas în întregul proces.
                                </p>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="gcs-faq-item">
                            <button class="gcs-faq-trigger" data-faq="1">
                                <span class="gcs-faq-question">Cum se calculează DAE (Dobânda Anuală Efectivă)?</span>
                                <svg class="gcs-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </button>
                            <div class="gcs-faq-content" data-faq-content="1">
                                <p class="gcs-faq-answer">
                                    DAE include rata dobânzii plus toate costurile asociate creditului: comisioane de acordare, de administrare, asigurări obligatorii etc. Este indicatorul real al costului total al creditului și permite compararea corectă între oferte. Cu cât DAE-ul este mai mic, cu atât creditul este mai avantajos.
                                </p>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="gcs-faq-item">
                            <button class="gcs-faq-trigger" data-faq="2">
                                <span class="gcs-faq-question">Cât timp durează procesul de obținere a creditului?</span>
                                <svg class="gcs-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </button>
                            <div class="gcs-faq-content" data-faq-content="2">
                                <p class="gcs-faq-answer">
                                    Procesul de obținere a creditului poate dura până la 10-15 zile lucrătoare, în funcție de tipul de credit și complexitatea dosarului. Oferim soluții personalizate și te asistăm pe tot parcursul procesului pentru a accelera aprobarea.
                                </p>
                            </div>
                        </div>

                        <!-- FAQ Item 4 -->
                        <div class="gcs-faq-item">
                            <button class="gcs-faq-trigger" data-faq="3">
                                <span class="gcs-faq-question">Pot obține credit cu istoric negativ?</span>
                                <svg class="gcs-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </button>
                            <div class="gcs-faq-content" data-faq-content="3">
                                <p class="gcs-faq-answer">
                                    Da, avem soluții pentru orice problemă! Lucrăm cu instituții care analizează fiecare caz individual și oferim servicii de consultanță pentru ștergerea istoricului negativ. Șansele depind de situația ta financiară actuală, dar suntem aici să te ajutăm.
                                </p>
                            </div>
                        </div>

                        <!-- FAQ Item 5 -->
                        <div class="gcs-faq-item">
                            <button class="gcs-faq-trigger" data-faq="4">
                                <span class="gcs-faq-question">Este sigur să trimit documente online?</span>
                                <svg class="gcs-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </button>
                            <div class="gcs-faq-content" data-faq-content="4">
                                <p class="gcs-faq-answer">
                                    Da, absolut sigur! Platforma noastră folosește criptare SSL și respectă toate standardele GDPR de protecție a datelor. Documentele tale sunt stocate în siguranță și accesate doar de consultanții autorizați care lucrează la dosarul tău. Nu partajăm niciodată informațiile tale cu terțe părți fără acordul tău.
                                </p>
                            </div>
                        </div>

                    </div>

                    <!-- Footer: mt-8 text-center -->
                    <div class="gcs-faq-footer">
                        <!-- text-gray-600 mb-4 -->
                        <p class="gcs-faq-footer-text">Nu ai găsit răspunsul căutat?</p>
                        <!-- text-[#0066CC] hover:underline inline-flex items-center gap-2 -->
                        <a href="#contact-form" class="gcs-faq-contact-link">
                            Contactează-ne pentru mai multe informații
                            <!-- w-4 h-4 -->
                            <svg class="gcs-faq-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== CTA SECTION ==================== -->
        <!-- py-16 bg-gradient-to-r from-[#0066CC] to-[#003D7A] -->
        <section class="gcs-cta-section">
            <!-- container mx-auto px-4 -->
            <div class="gcs-cta-container">
                <!-- max-w-4xl mx-auto text-center -->
                <div class="gcs-cta-content">

                    <!-- Icon circle: inline-flex items-center justify-center w-16 h-16 bg-white/20 rounded-full mb-6 -->
                    <div class="gcs-cta-icon-circle">
                        <!-- ShieldCheck icon: w-8 h-8 text-white -->
                        <svg class="gcs-cta-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            <path d="m9 12 2 2 4-4"></path>
                        </svg>
                    </div>

                    <!-- Heading: text-white mb-4 text-2xl md:text-3xl -->
                    <h2 class="gcs-cta-heading">
                        Gata să începi procesul de aplicare?
                    </h2>

                    <!-- Description: text-xl text-white/90 mb-8 max-w-2xl mx-auto -->
                    <p class="gcs-cta-description">
                        În 5 minute completezi formularul. Restul e treaba noastră.
                        Te ajutăm să găsești cea mai bună soluție de creditare.
                    </p>

                    <!-- Button: size="lg" bg-white text-[#003D7A] hover:bg-gray-100 rounded-lg shadow-xl transition-all hover:scale-105 -->
                    <a href="#contact-form" class="gcs-cta-button">
                        Aplică Acum
                    </a>

                    <!-- Features: mt-8 flex flex-wrap justify-center gap-8 text-white/80 text-sm -->
                    <div class="gcs-cta-features">

                        <!-- Feature 1 -->
                        <div class="gcs-cta-feature">
                            <!-- Checkmark icon: w-5 h-5 -->
                            <svg class="gcs-cta-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Proces Rapid</span>
                        </div>

                        <!-- Feature 2 -->
                        <div class="gcs-cta-feature">
                            <svg class="gcs-cta-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Fără Obligații</span>
                        </div>

                        <!-- Feature 3 -->
                        <div class="gcs-cta-feature">
                            <svg class="gcs-cta-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Date Protejate SSL</span>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </div>

    <style>
        /* ==================== RESET ==================== */
        .gcs-faq-cta-wrapper {
            all: initial !important;
            display: block !important;
        }

        .gcs-faq-cta-wrapper *,
        .gcs-faq-cta-wrapper *::before,
        .gcs-faq-cta-wrapper *::after {
            box-sizing: border-box !important;
            margin: 0 !important;
            padding: 0 !important;
            border: 0 !important;
            font-size: 100% !important;
            font: inherit !important;
            vertical-align: baseline !important;
        }

        /* SVG reset */
        .gcs-faq-cta-wrapper svg {
            display: inline-block !important;
            vertical-align: middle !important;
            overflow: visible !important;
        }

        /* Remove all link styles */
        .gcs-faq-cta-wrapper a {
            background-color: transparent !important;
            background-image: none !important;
            background: transparent !important;
            text-decoration: none !important;
            color: inherit !important;
            border: none !important;
            outline: none !important;
        }

        .gcs-faq-cta-wrapper a:hover,
        .gcs-faq-cta-wrapper a:active,
        .gcs-faq-cta-wrapper a:focus,
        .gcs-faq-cta-wrapper a:visited {
            background-image: none !important;
            text-decoration: none !important;
            outline: none !important;
            border: none !important;
        }

        /* Remove list styles */
        .gcs-faq-cta-wrapper ul,
        .gcs-faq-cta-wrapper ol {
            list-style: none !important;
        }

        /* Remove button/input defaults */
        .gcs-faq-cta-wrapper button,
        .gcs-faq-cta-wrapper input,
        .gcs-faq-cta-wrapper select,
        .gcs-faq-cta-wrapper textarea {
            font-family: inherit !important;
            font-size: 100% !important;
            line-height: 1.15 !important;
            margin: 0 !important;
            padding: 0 !important;
            border: 0 !important;
            background: none !important;
        }

        /* Remove button defaults */
        .gcs-faq-cta-wrapper button {
            overflow: visible !important;
            text-transform: none !important;
            -webkit-appearance: button !important;
        }

        /* Global font */
        .gcs-faq-cta-wrapper,
        .gcs-faq-cta-wrapper * {
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif !important;
            text-rendering: optimizeLegibility !important;
            -webkit-font-smoothing: antialiased !important;
            -moz-osx-font-smoothing: grayscale !important;
        }

        /* ==================== FAQ SECTION ==================== */
        /* py-16 bg-[#F5F7FA] */
        .gcs-faq-section {
            padding-top: 4rem !important; /* py-16 */
            padding-bottom: 4rem !important;
            background-color: #F5F7FA !important; /* bg-[#F5F7FA] */
        }

        /* ==================== FAQ CONTAINER ==================== */
        /* container mx-auto px-4 */
        .gcs-faq-container {
            width: 100% !important;
            max-width: 80rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }

        /* ==================== FAQ HEADER ==================== */
        /* text-center mb-12 */
        .gcs-faq-header {
            text-align: center !important;
            margin-bottom: 3rem !important; /* mb-12 */
        }

        /* Heading: text-[#003D7A] mb-4 text-2xl md:text-3xl */
        .gcs-faq-heading {
            color: #003D7A !important; /* text-[#003D7A] */
            margin-bottom: 1rem !important; /* mb-4 */
            font-size: 1.5rem !important; /* text-2xl */
            line-height: 2rem !important;
            font-weight: 600 !important;
        }

        @media (min-width: 768px) {
            .gcs-faq-heading {
                font-size: 1.875rem !important; /* md:text-3xl */
                line-height: 2.25rem !important;
            }
        }

        /* Description: text-gray-600 max-w-2xl mx-auto */
        .gcs-faq-description {
            color: #4b5563 !important; /* text-gray-600 */
            max-width: 42rem !important; /* max-w-2xl */
            margin-left: auto !important;
            margin-right: auto !important;
            font-size: 1rem !important;
            line-height: 1.5rem !important;
        }

        /* ==================== FAQ ACCORDION ==================== */
        /* max-w-3xl mx-auto */
        .gcs-faq-accordion-wrapper {
            max-width: 48rem !important; /* max-w-3xl */
            margin-left: auto !important;
            margin-right: auto !important;
        }

        /* space-y-4 */
        .gcs-faq-accordion {
            display: flex !important;
            flex-direction: column !important;
            gap: 1rem !important; /* space-y-4 */
        }

        /* ==================== FAQ ITEM ==================== */
        /* bg-white rounded-lg border border-gray-200 px-6 */
        .gcs-faq-item {
            background-color: #ffffff !important; /* bg-white */
            border-radius: 0.5rem !important; /* rounded-lg */
            border: 1px solid #e5e7eb !important; /* border-gray-200 */
            padding-left: 2rem !important; /* px-8 - increased */
            padding-right: 2rem !important;
            padding-top: 0.5rem !important; /* py-2 - increased */
            padding-bottom: 0.5rem !important;
            overflow: hidden !important;
        }

        /* ==================== FAQ TRIGGER ==================== */
        /* text-left text-[#003D7A] hover:text-[#0066CC] transition-colors */
        .gcs-faq-trigger {
            width: 100% !important;
            display: flex !important;
            align-items: center !important;
            justify-content: space-between !important;
            padding-top: 1.25rem !important; /* py-5 - increased */
            padding-bottom: 1.25rem !important;
            text-align: left !important;
            color: #003D7A !important; /* text-[#003D7A] */
            cursor: pointer !important;
            transition-property: color !important; /* transition-colors */
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 150ms !important;
            font-weight: 500 !important;
            font-size: 1rem !important;
            line-height: 1.5rem !important;
        }

        .gcs-faq-trigger:hover {
            color: #0066CC !important; /* hover:text-[#0066CC] */
        }

        .gcs-faq-question {
            flex: 1 !important;
            padding-right: 1rem !important;
        }

        /* FAQ Icon */
        .gcs-faq-icon {
            width: 1.25rem !important; /* w-5 */
            height: 1.25rem !important; /* h-5 */
            flex-shrink: 0 !important;
            stroke: currentColor !important;
            fill: none !important;
            transition-property: transform !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 200ms !important;
        }

        .gcs-faq-item.active .gcs-faq-icon {
            transform: rotate(180deg) !important;
        }

        /* ==================== FAQ CONTENT ==================== */
        .gcs-faq-content {
            max-height: 0 !important;
            overflow: hidden !important;
            transition-property: max-height !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 300ms !important;
        }

        .gcs-faq-item.active .gcs-faq-content {
            max-height: 500px !important;
        }

        /* Answer: text-gray-600 */
        .gcs-faq-answer {
            color: #4b5563 !important; /* text-gray-600 */
            padding-top: 0.5rem !important; /* pt-2 - added */
            padding-bottom: 1.5rem !important; /* pb-6 - increased */
            font-size: 0.875rem !important;
            line-height: 1.5rem !important;
        }

        /* ==================== FAQ FOOTER ==================== */
        /* mt-8 text-center */
        .gcs-faq-footer {
            margin-top: 2rem !important; /* mt-8 */
            text-align: center !important;
        }

        /* text-gray-600 mb-4 */
        .gcs-faq-footer-text {
            color: #4b5563 !important; /* text-gray-600 */
            margin-bottom: 1rem !important; /* mb-4 */
            font-size: 1rem !important;
            line-height: 1.5rem !important;
        }

        /* text-[#0066CC] hover:underline inline-flex items-center gap-2 */
        .gcs-faq-contact-link {
            display: inline-flex !important;
            align-items: center !important;
            gap: 0.5rem !important; /* gap-2 */
            color: #0066CC !important; /* text-[#0066CC] */
            background: transparent !important;
            background-color: transparent !important;
            background-image: none !important;
            border: none !important;
            outline: none !important;
            cursor: pointer !important;
            text-decoration: none !important;
            transition-property: text-decoration !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 150ms !important;
            font-size: 1rem !important;
            line-height: 1.5rem !important;
        }

        .gcs-faq-contact-link:hover {
            text-decoration: underline !important; /* hover:underline */
            color: #0066CC !important;
            background: transparent !important;
        }

        .gcs-faq-contact-link:active,
        .gcs-faq-contact-link:focus,
        .gcs-faq-contact-link:visited {
            color: #0066CC !important;
            background: transparent !important;
            outline: none !important;
            border: none !important;
        }

        /* Arrow icon: w-4 h-4 */
        .gcs-faq-arrow {
            width: 1rem !important; /* w-4 */
            height: 1rem !important; /* h-4 */
            stroke: currentColor !important;
            fill: none !important;
            flex-shrink: 0 !important;
        }

        /* ==================== CTA SECTION ==================== */
        /* py-16 bg-gradient-to-r from-[#0066CC] to-[#003D7A] */
        .gcs-cta-section {
            padding-top: 4rem !important; /* py-16 */
            padding-bottom: 4rem !important;
            background: linear-gradient(to right, #0066CC, #003D7A) !important; /* bg-gradient-to-r from-[#0066CC] to-[#003D7A] */
        }

        /* ==================== CTA CONTAINER ==================== */
        /* container mx-auto px-4 */
        .gcs-cta-container {
            width: 100% !important;
            max-width: 80rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }

        /* ==================== CTA CONTENT ==================== */
        /* max-w-4xl mx-auto text-center */
        .gcs-cta-content {
            max-width: 56rem !important; /* max-w-4xl */
            margin-left: auto !important;
            margin-right: auto !important;
            text-align: center !important;
        }

        /* ==================== CTA ICON CIRCLE ==================== */
        /* inline-flex items-center justify-center w-16 h-16 bg-white/20 rounded-full mb-6 */
        .gcs-cta-icon-circle {
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            width: 4rem !important; /* w-16 */
            height: 4rem !important; /* h-16 */
            background-color: rgba(255, 255, 255, 0.2) !important; /* bg-white/20 */
            border-radius: 50% !important; /* rounded-full */
            margin-bottom: 1.5rem !important; /* mb-6 */
        }

        /* ShieldCheck icon: w-8 h-8 text-white */
        .gcs-cta-icon {
            width: 2rem !important; /* w-8 */
            height: 2rem !important; /* h-8 */
            color: #ffffff !important; /* text-white */
            stroke: currentColor !important;
            fill: none !important;
        }

        /* ==================== CTA HEADING ==================== */
        /* text-white mb-4 text-2xl md:text-3xl */
        .gcs-cta-heading {
            color: #ffffff !important; /* text-white */
            margin-bottom: 1rem !important; /* mb-4 */
            font-size: 1.5rem !important; /* text-2xl */
            line-height: 2rem !important;
            font-weight: 600 !important;
        }

        @media (min-width: 768px) {
            .gcs-cta-heading {
                font-size: 1.875rem !important; /* md:text-3xl */
                line-height: 2.25rem !important;
            }
        }

        /* ==================== CTA DESCRIPTION ==================== */
        /* text-xl text-white/90 mb-8 max-w-2xl mx-auto */
        .gcs-cta-description {
            font-size: 1.25rem !important; /* text-xl */
            line-height: 1.75rem !important;
            color: rgba(255, 255, 255, 0.9) !important; /* text-white/90 */
            margin-bottom: 2rem !important; /* mb-8 */
            max-width: 42rem !important; /* max-w-2xl */
            margin-left: auto !important;
            margin-right: auto !important;
        }

        /* ==================== CTA BUTTON ==================== */
        /* size="lg" bg-white text-[#003D7A] hover:bg-gray-100 rounded-lg shadow-xl transition-all hover:scale-105 */
        .gcs-cta-button {
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            height: 2.5rem !important; /* size="lg" h-10 */
            padding-left: 1.5rem !important; /* size="lg" px-6 */
            padding-right: 1.5rem !important;
            padding-top: 0.5rem !important;
            padding-bottom: 0.5rem !important;
            font-size: 0.875rem !important;
            font-weight: 500 !important;
            background-color: #ffffff !important; /* bg-white */
            background-image: none !important; /* Remove any gradient */
            background: #ffffff !important; /* Force solid white */
            color: #003D7A !important; /* text-[#003D7A] */
            border: none !important; /* Remove border */
            border-width: 0 !important;
            border-style: none !important;
            border-color: transparent !important;
            border-radius: 0.5rem !important; /* rounded-lg */
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04) !important; /* shadow-xl */
            cursor: pointer !important;
            text-decoration: none !important;
            outline: none !important;
            transition-property: all !important; /* transition-all */
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 150ms !important;
        }

        .gcs-cta-button:hover {
            background-color: #f3f4f6 !important; /* hover:bg-gray-100 */
            background-image: none !important;
            background: #f3f4f6 !important; /* Force solid gray */
            color: #003D7A !important;
            transform: scale(1.05) !important; /* hover:scale-105 */
        }

        .gcs-cta-button:active,
        .gcs-cta-button:focus,
        .gcs-cta-button:visited {
            background-color: #ffffff !important;
            background-image: none !important;
            background: #ffffff !important;
            color: #003D7A !important;
            outline: none !important;
            border: none !important;
        }

        /* ==================== CTA FEATURES ==================== */
        /* mt-8 flex flex-wrap justify-center gap-8 text-white/80 text-sm */
        .gcs-cta-features {
            margin-top: 2rem !important; /* mt-8 */
            display: flex !important;
            flex-wrap: wrap !important;
            justify-content: center !important;
            gap: 2rem !important; /* gap-8 */
            color: rgba(255, 255, 255, 0.8) !important; /* text-white/80 */
            font-size: 0.875rem !important; /* text-sm */
            line-height: 1.25rem !important;
        }

        /* flex items-center gap-2 */
        .gcs-cta-feature {
            display: flex !important;
            align-items: center !important;
            gap: 0.5rem !important; /* gap-2 */
        }

        /* Checkmark icon: w-5 h-5 */
        .gcs-cta-check {
            width: 1.25rem !important; /* w-5 */
            height: 1.25rem !important; /* h-5 */
            stroke: currentColor !important;
            fill: none !important;
            flex-shrink: 0 !important;
        }
    </style>

    <script>
        (function() {
            // FAQ Accordion functionality
            const triggers = document.querySelectorAll('.gcs-faq-trigger');

            triggers.forEach(function(trigger) {
                trigger.addEventListener('click', function() {
                    const faqIndex = this.getAttribute('data-faq');
                    const faqItem = this.closest('.gcs-faq-item');
                    const isActive = faqItem.classList.contains('active');

                    // Close all items
                    document.querySelectorAll('.gcs-faq-item').forEach(function(item) {
                        item.classList.remove('active');
                    });

                    // Open clicked item if it wasn't active
                    if (!isActive) {
                        faqItem.classList.add('active');
                    }
                });
            });
        })();
    </script>

    <?php
    return ob_get_clean();
}

add_shortcode('gcs_faq_cta', 'gcs_faq_cta_shortcode');

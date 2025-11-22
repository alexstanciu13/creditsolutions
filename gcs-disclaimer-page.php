<?php
/**
 * Global Credit Solutions - Disclaimer Legal Page
 *
 * Shortcode: [gcs_disclaimer_page]
 */

function gcs_disclaimer_page_shortcode() {
    ob_start();
    ?>

    <div class="gcs-disclaimer-wrapper">

        <!-- ==================== HEADER ==================== -->
        <header class="gcs-disclaimer-header">
            <div class="gcs-disclaimer-container">
                <div class="gcs-disclaimer-header-content">
                    <!-- Logo -->
                    <a href="<?php echo home_url(); ?>" class="gcs-disclaimer-logo-btn">
                        <img
                            src="https://creditsolutions.ro/wp-content/uploads/2025/11/logo-alb.png"
                            alt="Global Credit Solutions"
                            class="gcs-disclaimer-logo-img gcs-disclaimer-logo-white"
                        />
                        <img
                            src="https://creditsolutions.ro/wp-content/uploads/2025/11/logo-blue.png"
                            alt="Global Credit Solutions"
                            class="gcs-disclaimer-logo-img gcs-disclaimer-logo-blue"
                        />
                    </a>

                    <!-- Desktop Navigation -->
                    <nav class="gcs-disclaimer-nav-desktop">
                        <a href="<?php echo home_url(); ?>" class="gcs-disclaimer-nav-link">Acasă</a>
                        <a href="<?php echo home_url('/despre'); ?>" class="gcs-disclaimer-nav-link">Despre Noi</a>
                        <a href="<?php echo home_url('/servicii'); ?>" class="gcs-disclaimer-nav-link">Servicii</a>
                        <a href="<?php echo home_url('/contact'); ?>" class="gcs-disclaimer-nav-link">Contact</a>
                    </nav>

                    <!-- CTA Button Desktop -->
                    <div class="gcs-disclaimer-cta-wrapper">
                        <a href="<?php echo home_url('/contact'); ?>" class="gcs-disclaimer-btn-primary">Aplică Acum</a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <button class="gcs-disclaimer-mobile-toggle" aria-label="Toggle menu">
                        <svg class="gcs-disclaimer-menu-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="3" y1="12" x2="21" y2="12"></line>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg>
                        <svg class="gcs-disclaimer-close-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>

                <!-- Mobile Menu -->
                <nav class="gcs-disclaimer-mobile-menu">
                    <a href="<?php echo home_url(); ?>" class="gcs-disclaimer-mobile-link">Acasă</a>
                    <a href="<?php echo home_url('/despre'); ?>" class="gcs-disclaimer-mobile-link">Despre Noi</a>
                    <a href="<?php echo home_url('/servicii'); ?>" class="gcs-disclaimer-mobile-link">Servicii</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="gcs-disclaimer-mobile-link">Contact</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="gcs-disclaimer-btn-primary gcs-disclaimer-btn-full">Aplică Acum</a>
                </nav>
            </div>
        </header>

        <!-- ==================== HERO SECTION ==================== -->
        <section class="gcs-disclaimer-hero">
            <div class="gcs-disclaimer-container">
                <div class="gcs-disclaimer-hero-content">
                    <h1 class="gcs-disclaimer-hero-title">Disclaimer și Clauze Legale</h1>
                    <p class="gcs-disclaimer-hero-subtitle">Data ultimei actualizări: noiembrie 2025</p>
                </div>
            </div>
        </section>

        <!-- ==================== CONTENT SECTION ==================== -->
        <section class="gcs-disclaimer-content-section">
            <div class="gcs-disclaimer-container">
                <div class="gcs-disclaimer-content">

                    <h2>1. Disclaimer General</h2>
                    <p>Informațiile furnizate pe site-ul www.creditsolutions.ro („Site-ul") sunt doar în scop informativ și educativ. GLOBAL CREDIT SOLUTIONS SRL nu oferă sfaturi financiare, juridice sau fiscale personalizate.</p>

                    <h3>1.1 Informațiile Nu Constituie Ofertă Legală</h3>
                    <ul>
                        <li>Descrierile produselor sunt generale</li>
                        <li>Termenii și condițiile specifice vor fi furnizate în contractul final</li>
                        <li>Ratele, comisioanele și termenile pot varia</li>
                        <li>Aprobarea creditului nu este garantată</li>
                    </ul>

                    <h3>1.2 Responsabilitate Limitată</h3>
                    <p>GLOBAL CREDIT SOLUTIONS SRL nu este responsabilă pentru:</p>
                    <ul>
                        <li>Deciziile tale de a solicita credit</li>
                        <li>Consecințele financiare ale acceptării unui credit</li>
                        <li>Orice pierderi suferite ca urmare a utilizării informațiilor pe Site</li>
                        <li>Inexactități sau omisiuni în descrierea produselor</li>
                    </ul>

                    <h2>2. Servicii de Intermediere de Credite</h2>

                    <h3>2.1 Natura Serviciului</h3>
                    <p>GLOBAL CREDIT SOLUTIONS SRL este intermediar de credite conform Legii 190/2018, NU instituție de credit autorizată. Aceasta înseamnă că:</p>
                    <ul>
                        <li>Nu furnizez direct credite</li>
                        <li>Intermediez contractele de credit cu instituții de credit partenere autorizate</li>
                        <li>Instituțiile de credit partenere iau decizia finală de aprobare/respingere</li>
                        <li>Contractul de credit se încheie direct cu instituția de credit, nu cu noi</li>
                    </ul>

                    <h3>2.2 Lipsa Garanțiilor</h3>
                    <ul>
                        <li>Nu garantez aprobarea oricărei cereri de credit</li>
                        <li>Nu garantez rate, termeni sau condiții specifice</li>
                        <li>Diferite instituții de credit au politici diferite</li>
                        <li>Condițiile pot depinde de factori externos (cond. economice, legislație)</li>
                    </ul>

                    <h3>2.3 Conflicte de Interese</h3>
                    <p>GLOBAL CREDIT SOLUTIONS SRL primește compensații de la instituțiile de credit partenere pentru fiecare caz intermediat. Aceasta este o potențială situație de conflict de interese.</p>

                    <p><strong>Transparență:</strong></p>
                    <ul>
                        <li>Avem obligația legală să îți comunicăm acest conflict</li>
                        <li>Selectarea instituției de credit nu este întotdeauna cea mai avantajoasă pentru tine</li>
                        <li>Poți refuza serviciile noastre și aplica direct la o bancă</li>
                    </ul>

                    <h2>3. Informații de Credit și Solvabilitate</h2>

                    <h3>3.1 Verificări Credit</h3>
                    <ul>
                        <li>Vor fi efectuate verificări la agenții de credit (Credit Bureau)</li>
                        <li>Acest lucru va apărea în raportul tău de credit</li>
                        <li>Verificările excesive pot afecta scorul de credit</li>
                    </ul>

                    <h3>3.2 Riscuri Financiare</h3>
                    <p>Dacă accepti un credit:</p>
                    <ul>
                        <li>Ai obligația legală să rambursezi conform contractului</li>
                        <li>Neachitarea plăților va rezulta în:
                            <ul>
                                <li>Dobândă de întârziere</li>
                                <li>Taxe de penalizare</li>
                                <li>Includere în registre de credit negativ</li>
                                <li>Posibile acțiuni legale</li>
                                <li>Afectarea solvabilității viitoare</li>
                            </ul>
                        </li>
                    </ul>

                    <h3>3.3 Sfat Financiar Personal</h3>
                    <p><strong>TE RECOMANDĂM PRUDENȚA:</strong></p>
                    <ul>
                        <li>Cere sfaturi unui consultant financiar independent</li>
                        <li>Calculează-ți capacitatea reală de rambursare</li>
                        <li>Compară ofertele de la mai mulți furnizori</li>
                        <li>Citește complet contractul de credit înainte de semnare</li>
                        <li>Solicita clarificări pentru termenii necunoscuți</li>
                    </ul>

                    <h2>4. Informații Comerciale și Publicitate</h2>

                    <h3>4.1 Reprezentări și Garanții</h3>
                    <p>Orice descrieri ale produselor, rate sau termeni:</p>
                    <ul>
                        <li>Pot fi inexacte sau incomplete</li>
                        <li>Sunt disponibile doar în momentul afișării</li>
                        <li>Se pot schimba fără notificare anterioară</li>
                        <li>Sunt supuse schimbării de legislație sau politici interne</li>
                    </ul>

                    <h3>4.2 Publicitate Comparativă</h3>
                    <p>Dacă comparăm servicii cu concurenți:</p>
                    <ul>
                        <li>Comparațiile sunt bazate pe informații disponibile public</li>
                        <li>Pot fi inexacte sau depășite</li>
                        <li>Nu garantez acuratețea</li>
                    </ul>

                    <h3>4.3 Nu Suntem Răspunzători Pentru</h3>
                    <ul>
                        <li>Publicitate de la terți</li>
                        <li>Recomandări de la influenceri sau parteneri</li>
                        <li>Comentarii sau recenzii ale utilizatorilor</li>
                        <li>Conținut generat de utilizatori</li>
                    </ul>

                    <h2>5. Drepturile Consumatorului</h2>

                    <h3>5.1 Legislația Aplicabilă</h3>
                    <p>Serviciile noastre sunt reglementate de:</p>
                    <ul>
                        <li>Legea 190/2018 - Contracte de credit pentru consumatori</li>
                        <li>GDPR și Legea 190/2018 - Protecția datelor</li>
                        <li>Legea 127/2018 - Măsuri de protecție a consumatorilor</li>
                        <li>Legea 677/2001 - Protecția persoanelor privind prelucrarea datelor</li>
                    </ul>

                    <h3>5.2 Drepturi Legale ale Consumatorului</h3>
                    <p>Ai drepturile legale prevăzute de lege, inclusiv:</p>
                    <ul>
                        <li>Dreptul de retragere (acolo unde se aplică)</li>
                        <li>Dreptul la informații corecte și complete</li>
                        <li>Dreptul de opoziție</li>
                        <li>Dreptul la soluționare plângeri</li>
                        <li>Protecția împotriva practicilor comerciale neloiale</li>
                    </ul>

                    <h2>6. Informații Personale și Confidențialitate</h2>

                    <h3>6.1 Protecția Datelor</h3>
                    <p>Toate datele personale sunt protejate conform GDPR și legilor locale. Vezi Politica de Confidențialitate și GDPR pentru detalii complete.</p>

                    <h3>6.2 Partajare Date</h3>
                    <p>Datele tale vor fi partajate cu instituțiile de credit partenere și agenții de credit pentru procesare și verificare. Prin aplicare, consimți la aceasta.</p>

                    <h3>6.3 Nu Vândem Date</h3>
                    <p>NU vândem informațiile tale ca o sursă de venit. Partajarea e doar pentru scop contract.</p>

                    <h2>7. Responsabilitate pentru Site-ul Tehnic</h2>

                    <h3>7.1 Disponibilitate</h3>
                    <ul>
                        <li>Site-ul este disponibil „în starea actuală" (AS IS)</li>
                        <li>Nu garantez disponibilitate 24/7</li>
                        <li>Pot efectua întreținere fără notificare prealabilă</li>
                        <li>Site-ul poate avea perioade de indisponibilitate</li>
                    </ul>

                    <h3>7.2 Securitate</h3>
                    <ul>
                        <li>Utilizez protocoale de securitate standard (HTTPS, SSL)</li>
                        <li>Nu putem garanta securitate 100%</li>
                        <li>Ești responsabil de menținerea parolei confidențiale</li>
                        <li>Raportează imediat accese neautorizate</li>
                    </ul>

                    <h3>7.3 Viruși și Malware</h3>
                    <p>GLOBAL CREDIT SOLUTIONS SRL NU este responsabilă pentru:</p>
                    <ul>
                        <li>Viruși care ar putea infecta computerul tău</li>
                        <li>Malware, spyware, rootkits</li>
                        <li>Daune cauzate de aceste tipuri de software</li>
                        <li>Accidental, indirect sau special damage</li>
                    </ul>

                    <h3>7.4 Link-uri Externe</h3>
                    <ul>
                        <li>Site-ul conține link-uri către site-uri externe</li>
                        <li>NU suntem responsabili de conținutul acelor site-uri</li>
                        <li>Verifică Politica de Confidențialitate a site-urilor externe</li>
                        <li>Utilizarea lor e pe propria ta răspundere</li>
                    </ul>

                    <h2>8. Proprietatea Intelectuală</h2>

                    <h3>8.1 Drepturi de Autor</h3>
                    <p>Toți drepturile de proprietate intelectuală (copyright, design, logo, text) sunt deținute de:</p>
                    <ul>
                        <li>GLOBAL CREDIT SOLUTIONS SRL, sau</li>
                        <li>Sunt licențiate cu permisiune</li>
                    </ul>

                    <h3>8.2 Utilizare Permisă</h3>
                    <p>Poți:</p>
                    <ul>
                        <li>Vizualiza conținutul pentru scop personal</li>
                        <li>Imprima pagini pentru referință personală</li>
                        <li>Partaja link-uri (cu acreditare)</li>
                    </ul>

                    <h3>8.3 Utilizare Nepermisă</h3>
                    <p>NU ai voie să:</p>
                    <ul>
                        <li>Reproduci, copiezi sau distribuiești conținutul fără permisiune</li>
                        <li>Modifici sau adaptezi conținutul</li>
                        <li>Folosești conținut în scopuri comerciale</li>
                        <li>Extragi date prin web scraping</li>
                    </ul>
                    <p>Încălcarea acestor drepturi poate rezulta în acțiuni legale.</p>

                    <h2>9. Limitări de Răspundere</h2>

                    <h3>9.1 Disclaimer de Răspundere Complet</h3>
                    <p><strong>ÎN NICIO CIRCUMSTANȚĂ, GLOBAL CREDIT SOLUTIONS SRL NU VA FI RESPONSABILĂ PENTRU:</strong></p>

                    <p><strong>Daune Directe, Indirecte sau Consecvente:</strong></p>
                    <ul>
                        <li>Pierderi de profit, venit sau oportunități comerciale</li>
                        <li>Pierderi de date sau documente</li>
                        <li>Distrugeri de informații</li>
                        <li>Pierderi de clientelă</li>
                    </ul>

                    <p><strong>Probleme Tehnice:</strong></p>
                    <ul>
                        <li>Defecțiuni hardware/software</li>
                        <li>Eșecuri ale internetului</li>
                        <li>Accese neautorizate</li>
                        <li>Viruși sau malware</li>
                    </ul>

                    <p><strong>Decizii Creditare:</strong></p>
                    <ul>
                        <li>Respingerea cererii de credit</li>
                        <li>Oferte nefavorabile din instituția de credit</li>
                        <li>Schimbări ale ratelor după aplicare</li>
                        <li>Orice pierderi legate de creditare</li>
                    </ul>

                    <p><strong>Orice Alte Daune:</strong></p>
                    <ul>
                        <li>Indiferent de natura lor</li>
                        <li>Indiferent de cauza (contractuală, delict, etc.)</li>
                        <li>Chiar dacă am fost informați de posibilitate</li>
                    </ul>

                    <h3>9.2 Limita Răspunderii</h3>
                    <p>Răspunderea noastră totală nu va depăși:</p>
                    <ul>
                        <li>Suma plătită de tine pentru serviciile noastre, SAU</li>
                        <li>0 lei, dacă nu ai plătit nimic</li>
                    </ul>

                    <h2>10. Soluționare Litigii</h2>

                    <h3>10.1 Tentativă de Soluționare Amiabilă</h3>
                    <p>Înainte de acțiuni legale, te rog să contactezi:</p>

                    <div class="gcs-disclaimer-info-box">
                        <p><strong>Email:</strong> contact@creditsolutions.ro</p>
                        <p><strong>Telefon:</strong> 0743212055, 0745546924</p>
                        <p><strong>Scrisoare:</strong> București, Sectorul 1, Str. Diaconu Cornești, Nr. 53</p>
                    </div>

                    <p>Avem 30 de zile să rezolvăm disputa amiabil.</p>

                    <h3>10.2 Soluționare Alternativă (ADR)</h3>
                    <p>Ai dreptul să soliciți medierea conform legislației aplicabile.</p>

                    <h3>10.3 Jurisdicție</h3>
                    <ul>
                        <li>Legea Română se aplică</li>
                        <li>Jurisdicția instanțelor din București</li>
                    </ul>

                    <h2>11. Divulgare și Respectare Legii</h2>

                    <h3>11.1 Colaborare cu Autoritățile</h3>
                    <p>Dacă legea impune, putem:</p>
                    <ul>
                        <li>Divulga informații autorităților</li>
                        <li>Coopera cu investigații</li>
                        <li>Furniza date instanțelor judecătorești</li>
                        <li>Completa cu cererile legale</li>
                    </ul>

                    <h3>11.2 Nerespectare a Legii</h3>
                    <p>Dacă detectez:</p>
                    <ul>
                        <li>Fraude</li>
                        <li>Activități ilegale</li>
                        <li>Hărțuire</li>
                        <li>Amenințări</li>
                    </ul>

                    <p>Putem:</p>
                    <ul>
                        <li>Raporta la poliție</li>
                        <li>Blocha accesul la Site</li>
                        <li>Coopera cu investigații</li>
                    </ul>

                    <h2>12. Drepturile de Consumator</h2>
                    <p>Drepturile de consumator conform legislației românești și UE sunt necurmate și se aplică integral. Nicio dispoziție din acest disclaimer nu limitează drepturile tale legale.</p>

                    <h2>13. Modificări ale Disclaimer-ului</h2>
                    <p>GLOBAL CREDIT SOLUTIONS SRL se rezervă dreptul de a modifica acest disclaimer oricând. Modificările intră în vigoare la publicare.</p>
                    <p>Utilizarea continuă a Site-ului implică acceptarea modificărilor.</p>

                    <h2>14. Dispoziții Finale</h2>

                    <h3>14.1 Acord Integral</h3>
                    <p>Acest disclaimer împreună cu Termenii și Condițiile constituie întreg acordul între tine și GLOBAL CREDIT SOLUTIONS SRL.</p>

                    <h3>14.2 Separabilitate</h3>
                    <p>Dacă o dispoziție e nulă, celelalte rămân valabile.</p>

                    <h3>14.3 Interpretare</h3>
                    <ul>
                        <li>Titlurile sunt pentru referință doar</li>
                        <li>Lipsa unei acțiuni nu renunță la drepturi</li>
                        <li>Versiunea în limba română prăvalează</li>
                    </ul>

                    <h2>15. Contact</h2>
                    <p>Pentru întrebări privind acest disclaimer:</p>

                    <div class="gcs-disclaimer-info-box">
                        <p><strong>Email:</strong> contact@creditsolutions.ro</p>
                        <p><strong>Telefon:</strong> 0743212055, 0745546924</p>
                        <p><strong>Adresă:</strong> București, Sectorul 1, Str. Diaconu Cornești, Nr. 53</p>
                    </div>

                </div>
            </div>
        </section>

    </div>

    <style>
        /* ==================== RESET ==================== */
        .gcs-disclaimer-wrapper {
            all: initial !important;
            display: block !important;
        }

        .gcs-disclaimer-wrapper *,
        .gcs-disclaimer-wrapper *::before,
        .gcs-disclaimer-wrapper *::after {
            box-sizing: border-box !important;
        }

        .gcs-disclaimer-wrapper,
        .gcs-disclaimer-wrapper * {
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif !important;
        }

        /* ==================== HEADER ==================== */
        .gcs-disclaimer-header {
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

        .gcs-disclaimer-header.scrolled {
            background-color: #ffffff !important;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06) !important;
            padding-top: 0.75rem !important;
            padding-bottom: 0.75rem !important;
        }

        .gcs-disclaimer-container {
            width: 100% !important;
            max-width: 80rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }

        .gcs-disclaimer-header-content {
            display: flex !important;
            align-items: center !important;
            justify-content: space-between !important;
        }

        /* ==================== LOGO ==================== */
        .gcs-disclaimer-logo-btn {
            display: inline-flex !important;
            align-items: center !important;
            text-decoration: none !important;
            cursor: pointer !important;
            position: relative !important;
            height: 3rem !important;
        }

        .gcs-disclaimer-logo-img {
            height: 3rem !important;
            width: auto !important;
            transition-property: opacity !important;
            transition-duration: 300ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            display: block !important;
        }

        /* White logo - visible by default, hidden when scrolled */
        .gcs-disclaimer-logo-white {
            opacity: 1 !important;
            position: relative !important;
        }

        .gcs-disclaimer-header.scrolled .gcs-disclaimer-logo-white {
            opacity: 0 !important;
        }

        /* Blue logo - hidden by default, visible when scrolled */
        .gcs-disclaimer-logo-blue {
            opacity: 0 !important;
            position: absolute !important;
            top: 0 !important;
            left: 0 !important;
        }

        .gcs-disclaimer-header.scrolled .gcs-disclaimer-logo-blue {
            opacity: 1 !important;
        }

        /* ==================== NAVIGATION ==================== */
        .gcs-disclaimer-nav-desktop {
            display: none !important;
        }

        @media (min-width: 768px) {
            .gcs-disclaimer-nav-desktop {
                display: flex !important;
                align-items: center !important;
                gap: 2rem !important;
            }
        }

        .gcs-disclaimer-nav-link {
            transition-property: color !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            color: #ffffff !important;
            text-decoration: none !important;
            font-size: 1rem !important;
        }

        .gcs-disclaimer-nav-link:hover {
            color: #0066CC !important;
        }

        .gcs-disclaimer-header.scrolled .gcs-disclaimer-nav-link {
            color: #374151 !important;
        }

        /* ==================== CTA BUTTON ==================== */
        .gcs-disclaimer-cta-wrapper {
            display: none !important;
        }

        @media (min-width: 768px) {
            .gcs-disclaimer-cta-wrapper {
                display: block !important;
            }
        }

        .gcs-disclaimer-btn-primary {
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

        .gcs-disclaimer-btn-primary:hover {
            background-color: #0052A3 !important;
        }

        .gcs-disclaimer-btn-full {
            width: 100% !important;
        }

        /* ==================== MOBILE MENU ==================== */
        .gcs-disclaimer-mobile-toggle {
            display: flex !important;
            background: none !important;
            border: none !important;
            cursor: pointer !important;
            padding: 0.25rem !important;
        }

        @media (min-width: 768px) {
            .gcs-disclaimer-mobile-toggle {
                display: none !important;
            }
        }

        .gcs-disclaimer-menu-icon,
        .gcs-disclaimer-close-icon {
            width: 1.5rem !important;
            height: 1.5rem !important;
            color: #ffffff !important;
            transition-property: color !important;
            transition-duration: 300ms !important;
        }

        .gcs-disclaimer-header.scrolled .gcs-disclaimer-menu-icon,
        .gcs-disclaimer-header.scrolled .gcs-disclaimer-close-icon {
            color: #003D7A !important;
        }

        .gcs-disclaimer-menu-icon {
            display: block !important;
        }

        .gcs-disclaimer-close-icon {
            display: none !important;
        }

        .gcs-disclaimer-mobile-toggle.active .gcs-disclaimer-menu-icon {
            display: none !important;
        }

        .gcs-disclaimer-mobile-toggle.active .gcs-disclaimer-close-icon {
            display: block !important;
        }

        .gcs-disclaimer-mobile-menu {
            display: none !important;
        }

        .gcs-disclaimer-mobile-menu.open {
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
            .gcs-disclaimer-mobile-menu {
                display: none !important;
            }
        }

        .gcs-disclaimer-mobile-link {
            color: #374151 !important;
            text-decoration: none !important;
            text-align: left !important;
            font-size: 1rem !important;
            padding: 0.5rem 0 !important;
            transition-property: color !important;
            transition-duration: 150ms !important;
        }

        .gcs-disclaimer-mobile-link:hover {
            color: #0066CC !important;
        }

        /* ==================== HERO SECTION ==================== */
        .gcs-disclaimer-hero {
            background-image: linear-gradient(to bottom right, #003D7A, #001f3f) !important;
            padding-top: 8rem !important;
            padding-bottom: 4rem !important;
        }

        @media (min-width: 768px) {
            .gcs-disclaimer-hero {
                padding-top: 10rem !important;
                padding-bottom: 6rem !important;
            }
        }

        .gcs-disclaimer-hero-content {
            max-width: 48rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
            text-align: center !important;
            color: #ffffff !important;
        }

        .gcs-disclaimer-hero-title {
            color: #ffffff !important;
            margin-bottom: 1rem !important;
            font-size: 2.25rem !important;
            line-height: 2.5rem !important;
            font-weight: 700 !important;
            margin-top: 0 !important;
        }

        @media (min-width: 768px) {
            .gcs-disclaimer-hero-title {
                font-size: 3rem !important;
                line-height: 1 !important;
            }
        }

        .gcs-disclaimer-hero-subtitle {
            font-size: 1.125rem !important;
            line-height: 1.75rem !important;
            color: #e5e7eb !important;
            margin: 0 !important;
        }

        /* ==================== CONTENT SECTION ==================== */
        .gcs-disclaimer-content-section {
            padding-top: 4rem !important;
            padding-bottom: 4rem !important;
            background-color: #ffffff !important;
        }

        @media (min-width: 768px) {
            .gcs-disclaimer-content-section {
                padding-top: 6rem !important;
                padding-bottom: 6rem !important;
            }
        }

        .gcs-disclaimer-content {
            max-width: 56rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .gcs-disclaimer-content h2 {
            color: #003D7A !important;
            font-size: 1.875rem !important;
            line-height: 2.25rem !important;
            font-weight: 700 !important;
            margin-top: 3rem !important;
            margin-bottom: 1.5rem !important;
        }

        .gcs-disclaimer-content h2:first-child {
            margin-top: 0 !important;
        }

        .gcs-disclaimer-content h3 {
            color: #003D7A !important;
            font-size: 1.5rem !important;
            line-height: 2rem !important;
            font-weight: 600 !important;
            margin-top: 2rem !important;
            margin-bottom: 1rem !important;
        }

        .gcs-disclaimer-content p {
            color: #374151 !important;
            font-size: 1rem !important;
            line-height: 1.75rem !important;
            margin-bottom: 1rem !important;
            margin-top: 0 !important;
        }

        .gcs-disclaimer-content ul,
        .gcs-disclaimer-content ol {
            color: #374151 !important;
            font-size: 1rem !important;
            line-height: 1.75rem !important;
            margin-bottom: 1rem !important;
            margin-top: 0 !important;
            padding-left: 2rem !important;
            list-style-position: outside !important;
        }

        .gcs-disclaimer-content ul {
            list-style-type: disc !important;
        }

        .gcs-disclaimer-content ol {
            list-style-type: decimal !important;
        }

        .gcs-disclaimer-content li {
            margin-bottom: 0.5rem !important;
            padding-left: 0.5rem !important;
        }

        .gcs-disclaimer-content ul ul {
            margin-top: 0.5rem !important;
            margin-bottom: 0.5rem !important;
        }

        .gcs-disclaimer-content strong {
            font-weight: 600 !important;
            color: #1f2937 !important;
        }

        .gcs-disclaimer-info-box {
            background-color: #F5F7FA !important;
            border-left: 4px solid #0066CC !important;
            padding: 1.5rem !important;
            margin-top: 1.5rem !important;
            margin-bottom: 1.5rem !important;
            border-radius: 0.5rem !important;
        }

        .gcs-disclaimer-info-box p {
            margin-bottom: 0.5rem !important;
        }

        .gcs-disclaimer-info-box p:last-child {
            margin-bottom: 0 !important;
        }
    </style>

    <script>
        (function() {
            if (window.gcsDisclaimerInit) return;
            window.gcsDisclaimerInit = true;

            const header = document.querySelector('.gcs-disclaimer-header');
            const mobileToggle = document.querySelector('.gcs-disclaimer-mobile-toggle');
            const mobileMenu = document.querySelector('.gcs-disclaimer-mobile-menu');

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
            const mobileLinks = document.querySelectorAll('.gcs-disclaimer-mobile-link');
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

add_shortcode('gcs_disclaimer_page', 'gcs_disclaimer_page_shortcode');

<?php
/**
 * Global Credit Solutions - Termeni și Condiții Page
 *
 * Shortcode: [gcs_termeni_conditii_page]
 */

function gcs_termeni_conditii_page_shortcode() {
    ob_start();
    ?>

    <div class="gcs-tc-wrapper">

        <!-- ==================== HEADER ==================== -->
        <header class="gcs-tc-header">
            <div class="gcs-tc-container">
                <div class="gcs-tc-header-content">
                    <!-- Logo -->
                    <a href="<?php echo home_url(); ?>" class="gcs-tc-logo-btn">
                        <img
                            src="https://creditsolutions.ro/wp-content/uploads/2025/11/logo-alb.png"
                            alt="Global Credit Solutions"
                            class="gcs-tc-logo-img gcs-tc-logo-white"
                        />
                        <img
                            src="https://creditsolutions.ro/wp-content/uploads/2025/11/logo-blue.png"
                            alt="Global Credit Solutions"
                            class="gcs-tc-logo-img gcs-tc-logo-blue"
                        />
                    </a>

                    <!-- Desktop Navigation -->
                    <nav class="gcs-tc-nav-desktop">
                        <a href="<?php echo home_url(); ?>" class="gcs-tc-nav-link">Acasă</a>
                        <a href="<?php echo home_url('/despre'); ?>" class="gcs-tc-nav-link">Despre Noi</a>
                        <a href="<?php echo home_url('/servicii'); ?>" class="gcs-tc-nav-link">Servicii</a>
                        <a href="<?php echo home_url('/contact'); ?>" class="gcs-tc-nav-link">Contact</a>
                    </nav>

                    <!-- CTA Button Desktop -->
                    <div class="gcs-tc-cta-wrapper">
                        <a href="<?php echo home_url('/contact'); ?>" class="gcs-tc-btn-primary">Aplică Acum</a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <button class="gcs-tc-mobile-toggle" aria-label="Toggle menu">
                        <svg class="gcs-tc-menu-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="3" y1="12" x2="21" y2="12"></line>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg>
                        <svg class="gcs-tc-close-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>

                <!-- Mobile Menu -->
                <nav class="gcs-tc-mobile-menu">
                    <a href="<?php echo home_url(); ?>" class="gcs-tc-mobile-link">Acasă</a>
                    <a href="<?php echo home_url('/despre'); ?>" class="gcs-tc-mobile-link">Despre Noi</a>
                    <a href="<?php echo home_url('/servicii'); ?>" class="gcs-tc-mobile-link">Servicii</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="gcs-tc-mobile-link">Contact</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="gcs-tc-btn-primary gcs-tc-btn-full">Aplică Acum</a>
                </nav>
            </div>
        </header>

        <!-- ==================== HERO SECTION ==================== -->
        <section class="gcs-tc-hero">
            <div class="gcs-tc-container">
                <div class="gcs-tc-hero-content">
                    <h1 class="gcs-tc-hero-title">Termeni și Condiții</h1>
                    <p class="gcs-tc-hero-subtitle">Data ultimei actualizări: noiembrie 2025</p>
                </div>
            </div>
        </section>

        <!-- ==================== CONTENT SECTION ==================== -->
        <section class="gcs-tc-content-section">
            <div class="gcs-tc-container">
                <div class="gcs-tc-content">

                    <h2>1. Informații Generale</h2>
                    <p>Prezentul document stabilește termenii și condițiile generale pentru utilizarea site-ului www.creditsolutions.ro („Site-ul") și pentru accesarea serviciilor de intermediere a creditelor oferite de GLOBAL CREDIT SOLUTIONS SRL, o societate cu răspundere limitată constituită conform legislației române.</p>

                    <div class="gcs-tc-info-box">
                        <p><strong>Denumire:</strong> GLOBAL CREDIT SOLUTIONS SRL</p>
                        <p><strong>Sediu social:</strong> București, Sectorul 1, Str. Diaconu Cornești, Nr. 53</p>
                        <p><strong>CUI:</strong> 45859620</p>
                        <p><strong>Telefon:</strong> 0743212055, 0745546924</p>
                        <p><strong>Email:</strong> contact@creditsolutions.ro</p>
                        <p><strong>Website:</strong> www.creditsolutions.ro</p>
                    </div>

                    <h2>2. Natura Serviciilor</h2>
                    <p>GLOBAL CREDIT SOLUTIONS SRL este intermediar de credite conform definiției din Legea 190/2018 privind contractele de credit pentru consumatori.</p>

                    <p><strong>Serviciile noastre includ:</strong></p>
                    <ul>
                        <li>Intermedierea contractelor de credit către instituții financiare partenere</li>
                        <li>Furnizarea de informații și consiliere privind produsele de credit disponibile</li>
                        <li>Asistență în procesul de solicitare și evaluare a cererii de credit</li>
                        <li>Suport post-contractual conform clauzelor contractuale</li>
                    </ul>

                    <p>Nu suntem instituție de credit autorizată de Banca Națională a României. Activitatea noastră se desfășoară ca intermediar și partener al instituțiilor de credit licențiate.</p>

                    <h2>3. Condiții de Utilizare a Site-ului</h2>

                    <h3>3.1 Acces și Eligibilitate</h3>
                    <ul>
                        <li>Prin accesarea site-ului, confirmi că ești o persoană fizică cu vârsta de cel puțin 18 ani sau o entitate legală cu capacitate juridică deplină</li>
                        <li>Ești responsabil de menținerea confidențialității oricăror date de acces și parolă</li>
                        <li>Ești responsabil de toate activitățile care au loc sub contul/credențialele tale</li>
                    </ul>

                    <h3>3.2 Utilizare Permisă</h3>
                    <p>Poți utiliza Site-ul doar în scopuri legale și în conformitate cu acești Termeni și Condiții. Nu este permis:</p>
                    <ul>
                        <li>Utilizarea de software sau instrumente automate pentru accesul la Site</li>
                        <li>Colectarea de date prin web scraping sau alte metode neautorizate</li>
                        <li>Transmiterea de conținut malițios, viruși sau orice cod prejudicial</li>
                        <li>Încercarea de a accesa zone restricționate ale Site-ului</li>
                        <li>Utilizarea Site-ului în scopuri de discriminare, hărțuire sau orice activitate ilegală</li>
                        <li>Revânzarea sau transferul accesului la serviciile noastre</li>
                    </ul>

                    <h3>3.3 Conținut Utilizator</h3>
                    <p>Dacă încărcați conținut pe Site (formular, comentarii, etc.), garantezi că:</p>
                    <ul>
                        <li>Dețiți toate drepturile asupra acelui conținut</li>
                        <li>Nu încalcă drepturile oricărei terțe părți</li>
                        <li>Nu este difamator, obscen sau ilegal</li>
                        <li>Nu încalcă nicio lege privind protecția datelor sau copyright</li>
                    </ul>

                    <h2>4. Procesul de Solicitare de Credit</h2>

                    <h3>4.1 Inițierea Cererii</h3>
                    <p>Pentru a solicita credit:</p>
                    <ol>
                        <li>Completezi formularul de cerere disponibil pe Site</li>
                        <li>Furnizezi informații personale, financiare și de contact corecte și actuale</li>
                        <li>Citești și accepți Termenii și Condiții și Politica de Confidențialitate</li>
                        <li>Înțelegi că informațiile furnizate vor fi transmise instituțiilor de credit partenere</li>
                    </ol>

                    <h3>4.2 Evaluare și Decizie</h3>
                    <ul>
                        <li>Cererile vor fi evaluate de instituțiile de credit partenere conform politicilor lor de risc</li>
                        <li>Nu garantăm aprobarea oricărei cereri de credit</li>
                        <li>Vei fi notificat cu privire la decizia finală conform informațiilor de contact furnizate</li>
                        <li>Procesul de evaluare poate dura între 1-5 zile lucrătoare (conform condițiilor partenerilor)</li>
                    </ul>

                    <h3>4.3 Informații Precontractuale</h3>
                    <p>Înainte de a accepta o ofertă de credit, vei primi:</p>
                    <ul>
                        <li>Fișa de Informare Europeană Standardizată (FISE) conform Regulamentului UE 1103/2013</li>
                        <li>Informații privind TAEG (Rata Anuală Efectivă Globală)</li>
                        <li>Comisioane, taxe și costuri asociate</li>
                        <li>Termenii și condițiile contractului de credit</li>
                        <li>Exercițiul dreptului de retragere (acolo unde se aplică)</li>
                    </ul>

                    <h3>4.4 Contractare</h3>
                    <p>Contractul de credit va fi încheiat direct cu instituția de credit selectată. GLOBAL CREDIT SOLUTIONS SRL acționează exclusiv ca intermediar și nu este parte contractantă.</p>

                    <h2>5. Taxe, Comisioane și Costuri</h2>
                    <p>Taxele și comisioanele aplicate variază în funcție de:</p>
                    <ul>
                        <li>Tipul de credit solicitat</li>
                        <li>Suma și perioada de rambursare</li>
                        <li>Profilul de risc și istoricul financiar al solicitantului</li>
                        <li>Politicile instituției de credit partenere</li>
                    </ul>
                    <p>Informații detaliate despre costuri vor fi furnizate în Fișa de Informare Europeană Standardizată (FISE) înainte de încheierea contractului.</p>
                    <p><strong>Nu plătești GLOBAL CREDIT SOLUTIONS SRL comisioane directe. Comisioanele noastre sunt achitate de instituțiile de credit partenere.</strong></p>

                    <h2>6. Drepturi și Responsabilități ale Consumatorului</h2>

                    <h3>6.1 Dreptul de Retragere</h3>
                    <p>Conform Legii 190/2018, ai dreptul să te retragi din contract în perioada de 14 zile calendaristice de la data semnării contractului (acolo unde se aplică legal), prin notificare scrisă către instituția de credit.</p>

                    <h3>6.2 Informații Periodice</h3>
                    <p>Vei primi relevante periodice privind situația contractului conform clauzelor contractuale și conform Legii 190/2018.</p>

                    <h3>6.3 Modificări ale Ratei de Dobândă</h3>
                    <p>Pentru creditele cu rată variabilă, sunt aplicabile procedurile legale de notificare cu privire la modificări. Vor fi comunicate cu cel puțin 30 de zile înainte de intrare în vigoare.</p>

                    <h3>6.4 Plăți Anticipate</h3>
                    <p>Ai dreptul să efectuezi plăți anticipate integral sau parțial, conform clauzelor contractului și legislației aplicabile.</p>

                    <h2>7. Responsabilitate Limitată</h2>

                    <h3>7.1 DISCLAIMER</h3>
                    <p>Site-ul și informațiile furnizate sunt oferite pe bază de „în starea actuală" (AS IS) fără garanții de orice fel, exprese sau implicite, inclusiv:</p>
                    <ul>
                        <li>Garanții de acuratețe, completitudine sau actualitate a informațiilor</li>
                        <li>Garanții de conformitate cu scopuri specifice</li>
                        <li>Garanții privind funcționarea neîntreruptă a Site-ului</li>
                    </ul>

                    <h3>7.2 Limitări de Răspundere</h3>
                    <p>În nicio circumstanță GLOBAL CREDIT SOLUTIONS SRL nu va fi responsabilă pentru:</p>
                    <ul>
                        <li>Daune directe, indirecte, speciale, incidentale sau consecvente</li>
                        <li>Pierderi de profit, venit, date sau oportunități comerciale</li>
                        <li>Probleme tehnice, erori de sistem, virusi sau acces neautorizat</li>
                        <li>Conținut furnizat de terți sau partenerul de credit</li>
                        <li>Decizii de respingere a cererii de credit</li>
                        <li>Orice alte daune, indiferent de causa sau teorie juridică (răspundere contractuală, delict, etc.)</li>
                    </ul>

                    <h3>7.3 Limitări de Răspundere a Partenerilor</h3>
                    <p>GLOBAL CREDIT SOLUTIONS SRL nu este responsabilă pentru:</p>
                    <ul>
                        <li>Deciziile instituțiilor de credit partenere privind aprobarea/respingerea creditului</li>
                        <li>Termenii, condițiile și ratele aplicate de parteneri</li>
                        <li>Serviciile post-contractuale furnizate de partenerul de credit</li>
                        <li>Orice daune rezultate din contractul de credit</li>
                    </ul>

                    <h2>8. Plăți și Rambursări</h2>

                    <h3>8.1 Metode de Plată</h3>
                    <p>Plățile aferente contractelor de credit se efectuează direct la instituția de credit, conform instrucțiunilor furnizate în contract.</p>

                    <h3>8.2 Plăți Întârziate</h3>
                    <p>În caz de plăți întârziate, vor fi aplicate:</p>
                    <ul>
                        <li>Dobânda de întârziere conform clauzelor contractuale</li>
                        <li>Posibilă includere în istoricul de credit negativ (Credit Bureau)</li>
                        <li>Posibile acțiuni legale de recuperare a datoriei</li>
                    </ul>

                    <h3>8.3 Contestații de Plăți</h3>
                    <p>Pentru contestații privind plățile, te rugăm să contactezi direct instituția de credit partenere.</p>

                    <h2>9. Protecția Datelor Personale</h2>
                    <p>Colectarea și prelucrarea datelor personale se realizează conform Politicii de Confidențialitate și conformă Regulamentului UE 2016/679 (GDPR) și Legii 190/2018.</p>

                    <p>Prin completarea formularului de cerere, consimți la:</p>
                    <ul>
                        <li>Colectarea și prelucrarea datelor personale în scopul evaluării cererii de credit</li>
                        <li>Transmiterea datelor instituțiilor de credit partenere</li>
                        <li>Verificări la registrele de credit (Credit Bureau)</li>
                        <li>Contactare prin telefon, email sau SMS cu privire la cerere</li>
                    </ul>

                    <p>Pentru detalii complete, consultă Politica de Confidențialitate & GDPR pe Site.</p>

                    <h2>10. Proprietate Intelectuală</h2>
                    <p>Toți drepturile de proprietate intelectuală ale Site-ului (design, logo, text, imagini, cod) sunt deținute exclusiv de GLOBAL CREDIT SOLUTIONS SRL sau sunt licențiate.</p>
                    <p>Nu ai permisiunea să reproduci, distribuiești, modifici sau adaptezi conținutul fără consimțământul scris explicit al nostru.</p>

                    <h2>11. Link-uri Externe</h2>
                    <p>Site-ul poate conține link-uri către site-uri externe. Nu suntem responsabili de conținutul, acuratețea sau disponibilitatea acestor site-uri externe. Utilizarea lor se realizează pe propria ta răspundere.</p>

                    <h2>12. Securitate și Protecție Împotriva Fraudei</h2>

                    <h3>12.1 Măsuri de Securitate</h3>
                    <p>Utilizăm protocoale de securitate standard (SSL, criptare) pentru protejarea datelor în tranzit. Cu toate acestea, nicio transmisie online nu este 100% sigură.</p>

                    <h3>12.2 Fraude</h3>
                    <p>În caz de suspiciune de fraude, te rugăm să raportezi imediat la contact@creditsolutions.ro. Nu suntem responsabili pentru:</p>
                    <ul>
                        <li>Acces neautorizat la contul tău din cauza unei parolei slabe</li>
                        <li>Utilizare neautorizată de credențialele tale</li>
                        <li>Fraude comise de terți</li>
                    </ul>

                    <h2>13. Soluționarea Litigiilor și Jurisdicție</h2>

                    <h3>13.1 Legea Aplicabilă</h3>
                    <p>Acești Termeni și Condiții și orice relație juridică sunt reglementate de legile României.</p>

                    <h3>13.2 Soluționare Alternativă a Litigiilor</h3>
                    <p>Înainte de a iniția proceduri legale, te invităm să contactezi echipa noastră:</p>
                    <ul>
                        <li><strong>Email:</strong> contact@creditsolutions.ro</li>
                        <li><strong>Telefon:</strong> 0743212055, 0745546924</li>
                        <li><strong>Adresă:</strong> București, Sectorul 1, Str. Diaconu Cornești, Nr. 53</li>
                    </ul>
                    <p>Vom încerca să rezolvăm orice dispută amiabil în termen de 30 de zile.</p>

                    <h3>13.3 Jurisdicție</h3>
                    <p>Orice litigiu care nu poate fi rezolvat amiabil va fi supus jurisdicției instanțelor competente din București, România.</p>

                    <h2>14. Modificări ale Termenilor și Condițiilor</h2>
                    <p>GLOBAL CREDIT SOLUTIONS SRL se rezervă dreptul de a modifica acești Termeni și Condiții în orice moment. Modificările vor intra în vigoare la data publicării pe Site.</p>
                    <p>Utilizarea continuă a Site-ului după publicarea modificărilor constituie acceptarea acestora.</p>
                    <p>Pentru modificări substanțiale, te vom notifica prin email la adresa furnizată.</p>

                    <h2>15. Interziceri</h2>
                    <p>Nu poți:</p>
                    <ul>
                        <li>Utiliza Site-ul pentru activități ilegale</li>
                        <li>Furniza informații false sau înșelătoare</li>
                        <li>Încerca să compromit securitatea Site-ului</li>
                        <li>Hărțui, amenința sau insulta alți utilizatori</li>
                        <li>Încălca legile aplicabile</li>
                    </ul>
                    <p>Încălcarea acestor reguli poate duce la suspendarea sau ștergerea accesului tău la Site.</p>

                    <h2>16. Dispoziții Finale</h2>

                    <h3>16.1 Renunțare</h3>
                    <p>Dacă o clauzulă din acești Termeni și Condiții este găsită nulă, invalida sau neexecutoriu, clauzulele rămase rămân în vigoare.</p>

                    <h3>16.2 Acord Integral</h3>
                    <p>Acești Termeni și Condiții constituie întreg acordul între tine și GLOBAL CREDIT SOLUTIONS SRL și înlocuiesc orice înțelegeri anterioare.</p>

                    <h3>16.3 Contact</h3>
                    <p>Pentru orice întrebări sau clarificări privind acești Termeni și Condiții:</p>
                    <ul>
                        <li><strong>Email:</strong> contact@creditsolutions.ro</li>
                        <li><strong>Telefon:</strong> 0743212055, 0745546924</li>
                    </ul>

                </div>
            </div>
        </section>

    </div>

    <style>
        /* ==================== RESET ==================== */
        .gcs-tc-wrapper {
            all: initial !important;
            display: block !important;
        }

        .gcs-tc-wrapper *,
        .gcs-tc-wrapper *::before,
        .gcs-tc-wrapper *::after {
            box-sizing: border-box !important;
        }

        .gcs-tc-wrapper,
        .gcs-tc-wrapper * {
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif !important;
        }

        /* ==================== HEADER ==================== */
        .gcs-tc-header {
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

        .gcs-tc-header.scrolled {
            background-color: #ffffff !important;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06) !important;
            padding-top: 0.75rem !important;
            padding-bottom: 0.75rem !important;
        }

        .gcs-tc-container {
            width: 100% !important;
            max-width: 80rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }

        .gcs-tc-header-content {
            display: flex !important;
            align-items: center !important;
            justify-content: space-between !important;
        }

        /* ==================== LOGO ==================== */
        .gcs-tc-logo-btn {
            display: inline-flex !important;
            align-items: center !important;
            text-decoration: none !important;
            cursor: pointer !important;
            position: relative !important;
            height: 3rem !important;
        }

        .gcs-tc-logo-img {
            height: 3rem !important;
            width: auto !important;
            transition-property: opacity !important;
            transition-duration: 300ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            display: block !important;
        }

        .gcs-tc-logo-white {
            opacity: 1 !important;
            position: relative !important;
        }

        .gcs-tc-header.scrolled .gcs-tc-logo-white {
            opacity: 0 !important;
        }

        .gcs-tc-logo-blue {
            opacity: 0 !important;
            position: absolute !important;
            top: 0 !important;
            left: 0 !important;
        }

        .gcs-tc-header.scrolled .gcs-tc-logo-blue {
            opacity: 1 !important;
        }

        /* ==================== NAVIGATION ==================== */
        .gcs-tc-nav-desktop {
            display: none !important;
        }

        @media (min-width: 768px) {
            .gcs-tc-nav-desktop {
                display: flex !important;
                align-items: center !important;
                gap: 2rem !important;
            }
        }

        .gcs-tc-nav-link {
            transition-property: color !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            color: #ffffff !important;
            text-decoration: none !important;
            font-size: 1rem !important;
        }

        .gcs-tc-nav-link:hover {
            color: #0066CC !important;
        }

        .gcs-tc-header.scrolled .gcs-tc-nav-link {
            color: #374151 !important;
        }

        /* ==================== CTA BUTTON ==================== */
        .gcs-tc-cta-wrapper {
            display: none !important;
        }

        @media (min-width: 768px) {
            .gcs-tc-cta-wrapper {
                display: block !important;
            }
        }

        .gcs-tc-btn-primary {
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

        .gcs-tc-btn-primary:hover {
            background-color: #0052A3 !important;
        }

        .gcs-tc-btn-full {
            width: 100% !important;
        }

        /* ==================== MOBILE MENU ==================== */
        .gcs-tc-mobile-toggle {
            display: flex !important;
            background: none !important;
            border: none !important;
            cursor: pointer !important;
            padding: 0.25rem !important;
        }

        @media (min-width: 768px) {
            .gcs-tc-mobile-toggle {
                display: none !important;
            }
        }

        .gcs-tc-menu-icon,
        .gcs-tc-close-icon {
            width: 1.5rem !important;
            height: 1.5rem !important;
            color: #ffffff !important;
            transition-property: color !important;
            transition-duration: 300ms !important;
        }

        .gcs-tc-header.scrolled .gcs-tc-menu-icon,
        .gcs-tc-header.scrolled .gcs-tc-close-icon {
            color: #003D7A !important;
        }

        .gcs-tc-menu-icon {
            display: block !important;
        }

        .gcs-tc-close-icon {
            display: none !important;
        }

        .gcs-tc-mobile-toggle.active .gcs-tc-menu-icon {
            display: none !important;
        }

        .gcs-tc-mobile-toggle.active .gcs-tc-close-icon {
            display: block !important;
        }

        .gcs-tc-mobile-menu {
            display: none !important;
        }

        .gcs-tc-mobile-menu.open {
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
            .gcs-tc-mobile-menu {
                display: none !important;
            }
        }

        .gcs-tc-mobile-link {
            color: #374151 !important;
            text-decoration: none !important;
            text-align: left !important;
            font-size: 1rem !important;
            padding: 0.5rem 0 !important;
            transition-property: color !important;
            transition-duration: 150ms !important;
        }

        .gcs-tc-mobile-link:hover {
            color: #0066CC !important;
        }

        /* ==================== HERO SECTION ==================== */
        .gcs-tc-hero {
            background-image: linear-gradient(to bottom right, #003D7A, #001f3f) !important;
            padding-top: 8rem !important;
            padding-bottom: 4rem !important;
        }

        @media (min-width: 768px) {
            .gcs-tc-hero {
                padding-top: 10rem !important;
                padding-bottom: 6rem !important;
            }
        }

        .gcs-tc-hero-content {
            max-width: 48rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
            text-align: center !important;
            color: #ffffff !important;
        }

        .gcs-tc-hero-title {
            color: #ffffff !important;
            margin-bottom: 1rem !important;
            font-size: 2.25rem !important;
            line-height: 2.5rem !important;
            font-weight: 700 !important;
            margin-top: 0 !important;
        }

        @media (min-width: 768px) {
            .gcs-tc-hero-title {
                font-size: 3rem !important;
                line-height: 1 !important;
            }
        }

        .gcs-tc-hero-subtitle {
            font-size: 1.125rem !important;
            line-height: 1.75rem !important;
            color: #e5e7eb !important;
            margin: 0 !important;
        }

        /* ==================== CONTENT SECTION ==================== */
        .gcs-tc-content-section {
            padding-top: 4rem !important;
            padding-bottom: 4rem !important;
            background-color: #ffffff !important;
        }

        @media (min-width: 768px) {
            .gcs-tc-content-section {
                padding-top: 6rem !important;
                padding-bottom: 6rem !important;
            }
        }

        .gcs-tc-content {
            max-width: 56rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .gcs-tc-content h2 {
            color: #003D7A !important;
            font-size: 1.875rem !important;
            line-height: 2.25rem !important;
            font-weight: 700 !important;
            margin-top: 3rem !important;
            margin-bottom: 1.5rem !important;
        }

        .gcs-tc-content h2:first-child {
            margin-top: 0 !important;
        }

        .gcs-tc-content h3 {
            color: #003D7A !important;
            font-size: 1.5rem !important;
            line-height: 2rem !important;
            font-weight: 600 !important;
            margin-top: 2rem !important;
            margin-bottom: 1rem !important;
        }

        .gcs-tc-content p {
            color: #374151 !important;
            font-size: 1rem !important;
            line-height: 1.75rem !important;
            margin-bottom: 1rem !important;
            margin-top: 0 !important;
        }

        .gcs-tc-content ul,
        .gcs-tc-content ol {
            color: #374151 !important;
            font-size: 1rem !important;
            line-height: 1.75rem !important;
            margin-bottom: 1rem !important;
            margin-top: 0 !important;
            padding-left: 2rem !important;
            list-style-position: outside !important;
        }

        .gcs-tc-content ul {
            list-style-type: disc !important;
        }

        .gcs-tc-content ol {
            list-style-type: decimal !important;
        }

        .gcs-tc-content li {
            margin-bottom: 0.5rem !important;
            padding-left: 0.5rem !important;
        }

        .gcs-tc-content strong {
            font-weight: 600 !important;
            color: #1f2937 !important;
        }

        .gcs-tc-info-box {
            background-color: #F5F7FA !important;
            border-left: 4px solid #0066CC !important;
            padding: 1.5rem !important;
            margin-top: 1.5rem !important;
            margin-bottom: 1.5rem !important;
            border-radius: 0.5rem !important;
        }

        .gcs-tc-info-box p {
            margin-bottom: 0.5rem !important;
        }

        .gcs-tc-info-box p:last-child {
            margin-bottom: 0 !important;
        }
    </style>

    <script>
        (function() {
            if (window.gcsTcInit) return;
            window.gcsTcInit = true;

            const header = document.querySelector('.gcs-tc-header');
            const mobileToggle = document.querySelector('.gcs-tc-mobile-toggle');
            const mobileMenu = document.querySelector('.gcs-tc-mobile-menu');

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
            const mobileLinks = document.querySelectorAll('.gcs-tc-mobile-link');
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

add_shortcode('gcs_termeni_conditii_page', 'gcs_termeni_conditii_page_shortcode');

<?php
/**
 * Global Credit Solutions - Politica de Cookies Page
 *
 * Shortcode: [gcs_cookies_page]
 */

function gcs_cookies_page_shortcode() {
    ob_start();
    ?>

    <div class="gcs-cookies-wrapper">

        <!-- ==================== HEADER ==================== -->
        <header class="gcs-cookies-header">
            <div class="gcs-cookies-container">
                <div class="gcs-cookies-header-content">
                    <!-- Logo -->
                    <a href="<?php echo home_url(); ?>" class="gcs-cookies-logo-btn">
                        <img
                            src="https://creditsolutions.ro/wp-content/uploads/2025/11/logo-alb.png"
                            alt="Global Credit Solutions"
                            class="gcs-cookies-logo-img gcs-cookies-logo-white"
                        />
                        <img
                            src="https://creditsolutions.ro/wp-content/uploads/2025/11/logo-blue.png"
                            alt="Global Credit Solutions"
                            class="gcs-cookies-logo-img gcs-cookies-logo-blue"
                        />
                    </a>

                    <!-- Desktop Navigation -->
                    <nav class="gcs-cookies-nav-desktop">
                        <a href="<?php echo home_url(); ?>" class="gcs-cookies-nav-link">Acasă</a>
                        <a href="<?php echo home_url('/despre'); ?>" class="gcs-cookies-nav-link">Despre Noi</a>
                        <a href="<?php echo home_url('/servicii'); ?>" class="gcs-cookies-nav-link">Servicii</a>
                        <a href="<?php echo home_url('/contact'); ?>" class="gcs-cookies-nav-link">Contact</a>
                    </nav>

                    <!-- CTA Button Desktop -->
                    <div class="gcs-cookies-cta-wrapper">
                        <a href="<?php echo home_url('/contact'); ?>" class="gcs-cookies-btn-primary">Aplică Acum</a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <button class="gcs-cookies-mobile-toggle" aria-label="Toggle menu">
                        <svg class="gcs-cookies-menu-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="3" y1="12" x2="21" y2="12"></line>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg>
                        <svg class="gcs-cookies-close-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>

                <!-- Mobile Menu -->
                <nav class="gcs-cookies-mobile-menu">
                    <a href="<?php echo home_url(); ?>" class="gcs-cookies-mobile-link">Acasă</a>
                    <a href="<?php echo home_url('/despre'); ?>" class="gcs-cookies-mobile-link">Despre Noi</a>
                    <a href="<?php echo home_url('/servicii'); ?>" class="gcs-cookies-mobile-link">Servicii</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="gcs-cookies-mobile-link">Contact</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="gcs-cookies-btn-primary gcs-cookies-btn-full">Aplică Acum</a>
                </nav>
            </div>
        </header>

        <!-- ==================== HERO SECTION ==================== -->
        <section class="gcs-cookies-hero">
            <div class="gcs-cookies-container">
                <div class="gcs-cookies-hero-content">
                    <h1 class="gcs-cookies-hero-title">Politica de Cookies</h1>
                    <p class="gcs-cookies-hero-subtitle">Data ultimei actualizări: noiembrie 2025</p>
                </div>
            </div>
        </section>

        <!-- ==================== CONTENT SECTION ==================== -->
        <section class="gcs-cookies-content-section">
            <div class="gcs-cookies-container">
                <div class="gcs-cookies-content">

                    <h2>1. Introducere</h2>
                    <p>Acest document explică cum utilizează GLOBAL CREDIT SOLUTIONS SRL („Noi", „Noastră", „Compania") cookie-uri și tehnologii similare pe site-ul www.creditsolutions.ro („Site-ul").</p>
                    <p>Cookie-urile sunt fișiere mici de text care sunt stocate pe dispozitivul tău (calculator, telefon, tabletă) atunci când vizitezi Site-ul nostru. Ele sunt utilizate pentru a îmbunătăți experiența utilizatorului, a măsura traficul și a furniza conținut personalizat.</p>

                    <h2>2. Ce sunt Cookie-urile?</h2>
                    <p>Cookie-urile sunt fișiere text care conțin informații despre navigare și preferințe. Ele pot fi:</p>

                    <h3>2.1 După Durată:</h3>
                    <ul>
                        <li><strong>Cookie-uri de sesiune:</strong> șterse când închizi browser-ul</li>
                        <li><strong>Cookie-uri persistente:</strong> rămân pe dispozitivul tău pentru o perioadă definită (de obicei 6-24 luni)</li>
                    </ul>

                    <h3>2.2 După Origine:</h3>
                    <ul>
                        <li><strong>Cookie-uri de prim parte (First-party):</strong> setate de Site-ul nostru</li>
                        <li><strong>Cookie-uri de terț parte (Third-party):</strong> setate de servicii externe (Google Analytics, Facebook, etc.)</li>
                    </ul>

                    <h3>2.3 După Funcție:</h3>
                    <ul>
                        <li><strong>Cookie-uri strict necesare:</strong> esențiale pentru funcționarea Site-ului</li>
                        <li><strong>Cookie-uri de performanță:</strong> măsoară traficul și comportamentul utilizatorului</li>
                        <li><strong>Cookie-uri funcționale:</strong> păstrează preferințele utilizatorului</li>
                        <li><strong>Cookie-uri de marketing/publicitate:</strong> urmăresc activitatea pentru publicitate țintită</li>
                    </ul>

                    <h2>3. Cookie-urile pe Care le Utilizează Site-ul Nostru</h2>

                    <h3>3.1 Cookie-uri Strict Necesare ✓ (Fără Consimțământ)</h3>
                    <p>Acestea sunt esențiale pentru funcționarea Site-ului și NU necesită consimțământul explicit:</p>

                    <div class="gcs-cookies-table-wrapper">
                        <table class="gcs-cookies-table">
                            <thead>
                                <tr>
                                    <th>Cookie</th>
                                    <th>Furnizor</th>
                                    <th>Durată</th>
                                    <th>Scop</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>session_id</td>
                                    <td>Site-ul nostru</td>
                                    <td>Sesiune</td>
                                    <td>Autentificare și gestionare sesiune</td>
                                </tr>
                                <tr>
                                    <td>csrf_token</td>
                                    <td>Site-ul nostru</td>
                                    <td>Sesiune</td>
                                    <td>Protecție contra atacurilor CSRF</td>
                                </tr>
                                <tr>
                                    <td>lang</td>
                                    <td>Site-ul nostru</td>
                                    <td>1 an</td>
                                    <td>Preferință limbă</td>
                                </tr>
                                <tr>
                                    <td>user_preferences</td>
                                    <td>Site-ul nostru</td>
                                    <td>1 an</td>
                                    <td>Salvare preferințe utilizator</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h3>3.2 Cookie-uri de Performanță și Analizie (Necesită Consimțământ)</h3>
                    <p>Acestea ne ajută să înțelegem cum utilizatorii interacționează cu Site-ul:</p>

                    <div class="gcs-cookies-table-wrapper">
                        <table class="gcs-cookies-table">
                            <thead>
                                <tr>
                                    <th>Cookie</th>
                                    <th>Furnizor</th>
                                    <th>Durată</th>
                                    <th>Scop</th>
                                    <th>Link Politică</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>_ga, _gid, _gat</td>
                                    <td>Google Analytics</td>
                                    <td>2 ani</td>
                                    <td>Analiza traficului și comportamentului</td>
                                    <td>google.com/policies/privacy</td>
                                </tr>
                                <tr>
                                    <td>__Secure-*</td>
                                    <td>Google Analytics 4</td>
                                    <td>2 ani</td>
                                    <td>Analiza avansată a utilizatorului</td>
                                    <td>support.google.com/analytics</td>
                                </tr>
                                <tr>
                                    <td>_fbp, _fbc</td>
                                    <td>Meta (Facebook)</td>
                                    <td>3 luni</td>
                                    <td>Urmărire publicitate și remarketing</td>
                                    <td>facebook.com/policies/cookies</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h3>3.3 Cookie-uri de Marketing/Publicitate (Necesită Consimțământ)</h3>
                    <p>Acestea sunt utilizate pentru publicitate țintită și remarketing:</p>

                    <div class="gcs-cookies-table-wrapper">
                        <table class="gcs-cookies-table">
                            <thead>
                                <tr>
                                    <th>Cookie</th>
                                    <th>Furnizor</th>
                                    <th>Durată</th>
                                    <th>Scop</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ads_cookie_id</td>
                                    <td>Rețele publicitare</td>
                                    <td>1 an</td>
                                    <td>Identificare pentru anunțuri personalizate</td>
                                </tr>
                                <tr>
                                    <td>tracking_id</td>
                                    <td>Rețele publicitare</td>
                                    <td>1 an</td>
                                    <td>Urmărire conversii și ROI</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h2>4. Tehnologii Similare Cookie-urilor</h2>
                    <p>Pe lângă cookie-uri, utilizăm și:</p>

                    <h3>4.1 Web Beacons (Pixel Tracking)</h3>
                    <ul>
                        <li>Imagini invizibile 1x1 pixeli care urmăresc vizitele de pagină</li>
                        <li>Utilizate de Google Analytics și Facebook Pixel</li>
                        <li>Ajută la măsurarea conversiilor și remarketing-ului</li>
                    </ul>

                    <h3>4.2 Local Storage și Session Storage</h3>
                    <ul>
                        <li>Stochează date pe dispozitivul tău fără a le trimite servere</li>
                        <li>Utilizate pentru salvarea preferințelor și stării interfaței</li>
                        <li>Nu se șterg automat când închizi browser-ul (local storage)</li>
                    </ul>

                    <h3>4.3 Fingerprinting (Urme Digitale)</h3>
                    <ul>
                        <li>Colectare de informații: browser, sistem de operare, rezoluție ecran</li>
                        <li>Utilizate pentru detectarea fraudes și securitate</li>
                        <li>Nu identifică persoana fizică, ci dispozitivul</li>
                    </ul>

                    <h2>5. Scopul Utilizării Cookie-urilor</h2>
                    <p>Utilizăm cookie-urile pentru:</p>

                    <h3>5.1 Funcționare Tehnică</h3>
                    <ul>
                        <li>Autentificare și gestionare sesiune</li>
                        <li>Securitate și protecție contra fraudei</li>
                        <li>Balansare încărcare pe servere</li>
                    </ul>

                    <h3>5.2 Performanță și Optimizare</h3>
                    <ul>
                        <li>Analiza traficului pe Site</li>
                        <li>Măsurarea performanței paginilor</li>
                        <li>Identificarea problemelor tehnice</li>
                        <li>Optimizarea vitezei de încărcare</li>
                    </ul>

                    <h3>5.3 Conținut Personalizat</h3>
                    <ul>
                        <li>Salvarea preferințelor limbii și regiunii</li>
                        <li>Recomandări produse/servicii</li>
                        <li>Personalizarea interfaței</li>
                    </ul>

                    <h3>5.4 Marketing și Publicitate</h3>
                    <ul>
                        <li>Publicitate țintită și remarketing</li>
                        <li>Măsurarea eficacității campaniilor</li>
                        <li>Analiză comportament consumator</li>
                        <li>Creare de segmente de audiență</li>
                    </ul>

                    <h3>5.5 Comunicări</h3>
                    <ul>
                        <li>Urmărire dacă ai deschis email-urile noastre</li>
                        <li>Măsurare eficacitate newsletter</li>
                    </ul>

                    <h2>6. Cui Sunt Transmise Datele din Cookie-uri</h2>
                    <p>Datele colectate pot fi transmise:</p>
                    <ul>
                        <li><strong>Google</strong> (Analytics, Ads, Doubleclick) - pentru analizie și publicitate</li>
                        <li><strong>Meta Platforms</strong> (Facebook Pixel) - pentru remarketing și publicitate</li>
                        <li><strong>Furnizori de email marketing</strong> - pentru urmărire newsletter</li>
                        <li><strong>Servicii cloud</strong> - pentru stocare și prelucrare</li>
                        <li><strong>Parteneri de credit</strong> - doar informații agregate, fără identificare individuală</li>
                    </ul>
                    <p>Toți acești furnizori sunt procesatori de date conform GDPR și au obligații de confidențialitate.</p>

                    <h2>7. Cum Controlezi Cookie-urile</h2>

                    <h3>7.1 Consimțământ Inițial</h3>
                    <p>Atunci când vizitezi Site-ul pentru prima dată, afișez o bannă de consimțământ. Poți:</p>
                    <ul>
                        <li>✓ <strong>Accepta toate</strong> - permite toate cookie-urile (inclusiv marketing)</li>
                        <li>⚙️ <strong>Reglaje</strong> - customizează care cookie-uri să accepti</li>
                        <li>✗ <strong>Refuza</strong> - accepta doar cookie-urile strict necesare</li>
                    </ul>

                    <h3>7.2 Revocare Consimțământ</h3>
                    <p>Poți retrage consimțământul oricând din:</p>
                    <ul>
                        <li>Setări de browser (Vezi secțiunea 7.3)</li>
                        <li>Link de „Retrage Consimțământ" din footer-ul Site-ului</li>
                        <li>Email la contact@creditsolutions.ro</li>
                    </ul>

                    <h3>7.3 Controlul Browser-ului</h3>
                    <p>Poți dezactiva sau șterge cookie-urile din setările browser-ului:</p>

                    <p><strong>Google Chrome:</strong></p>
                    <ol>
                        <li>Setări → Confidențialitate și securitate → Cookie-uri și alte date ale site-ului</li>
                        <li>Dezactivează cookie-urile sau blochează anumite domenii</li>
                        <li>Gestionează excepții</li>
                    </ol>

                    <p><strong>Mozilla Firefox:</strong></p>
                    <ol>
                        <li>Opțiuni → Confidențialitate și securitate → Cookie-uri și date ale site-ului</li>
                        <li>Alege dacă să accepți sau nu cookie-urile</li>
                    </ol>

                    <p><strong>Microsoft Edge:</strong></p>
                    <ol>
                        <li>Setări → Confidențialitate → Cookie-uri și alte date ale site-ului</li>
                        <li>Controlează ce se salvează</li>
                    </ol>

                    <p><strong>Apple Safari:</strong></p>
                    <ol>
                        <li>Preferințe → Confidențialitate → Cookie-uri și date ale site-ului</li>
                        <li>Alege opțiunile dorite</li>
                    </ol>

                    <h3>7.4 Do Not Track (DNT)</h3>
                    <p>Dacă ai activat DNT în browser, acele cereri vor fi respectate acolo unde este posibil.</p>

                    <h3>7.5 Opt-Out de la Google Analytics</h3>
                    <p>Descarcă extensia Google Analytics Opt-Out</p>

                    <h3>7.6 Opt-Out de la Facebook</h3>
                    <p>Accesează setările de publicitate Facebook</p>

                    <h2>8. Cookie-uri ale Partenerilor și Servicii Externe</h2>

                    <h3>8.1 Google Analytics</h3>
                    <ul>
                        <li><strong>Furnizor:</strong> Google LLC (SUA)</li>
                        <li><strong>Politica de Confidențialitate:</strong> google.com/policies/privacy/</li>
                        <li><strong>Scopuri:</strong> Analiză trafic, comportament utilizatori</li>
                        <li><strong>Transfer Date:</strong> Date transferate în SUA (sub Privacy Shield/Standard Contractual Clauses)</li>
                    </ul>

                    <h3>8.2 Meta Pixel (Facebook)</h3>
                    <ul>
                        <li><strong>Furnizor:</strong> Meta Platforms Ireland Limited (Irlanda)</li>
                        <li><strong>Politica de Confidențialitate:</strong> facebook.com/policies/cookies/</li>
                        <li><strong>Scopuri:</strong> Remarketing, publicitate țintită, conversii</li>
                        <li><strong>Transfer Date:</strong> Date transferate în SUA (sub aceleași mecanisme)</li>
                    </ul>

                    <h3>8.3 Google Ads (Doubleclick)</h3>
                    <ul>
                        <li><strong>Furnizor:</strong> Google LLC</li>
                        <li><strong>Scopuri:</strong> Publicitate comportamentală și remarketing</li>
                        <li><strong>Conținut:</strong> support.google.com/google-ads</li>
                    </ul>

                    <h2>9. Transfer de Date către SUA și Alte Țări</h2>
                    <p>Unii dintre furnizorii noștri sunt localizați în Statele Unite ale Americii (Google, Meta) și pot transfera date acolo.</p>

                    <h3>9.1 Mecanisme de Protecție</h3>
                    <ul>
                        <li><strong>Standard Contractual Clauses (SCC)</strong> - Clauze contractuale aprobate de UE</li>
                        <li><strong>Privacy Shield</strong> (dacă se aplică) - Acord UE-SUA</li>
                        <li><strong>Decizii de adecvare</strong> - Recunoaștere nivelului de protecție</li>
                        <li><strong>Consimțământul tău</strong> - Prin acceptarea cookie-urilor, consimți la acest transfer</li>
                    </ul>

                    <h3>9.2 Drepturile Tale</h3>
                    <p>Poți solicita:</p>
                    <ul>
                        <li>Informații despre ce date sunt transferate</li>
                        <li>Copii ale datelor transferate</li>
                        <li>Restricționare transferului</li>
                    </ul>
                    <p>Contactează: contact@creditsolutions.ro</p>

                    <h2>10. Durata Stocării Cookie-urilor</h2>

                    <div class="gcs-cookies-table-wrapper">
                        <table class="gcs-cookies-table">
                            <thead>
                                <tr>
                                    <th>Tip Cookie</th>
                                    <th>Durată Stoccare</th>
                                    <th>Cum Se Șterge</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Sesiune</td>
                                    <td>Până la închiderea browser-ului</td>
                                    <td>Automat</td>
                                </tr>
                                <tr>
                                    <td>Persistente</td>
                                    <td>6-24 luni</td>
                                    <td>Manual din browser sau cu trecerea timpului</td>
                                </tr>
                                <tr>
                                    <td>Google Analytics</td>
                                    <td>2 ani</td>
                                    <td>Automat de Google</td>
                                </tr>
                                <tr>
                                    <td>Facebook</td>
                                    <td>3-12 luni</td>
                                    <td>Automat de Meta</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <p>Poți șterge manual toate cookie-urile din browser oricând.</p>

                    <h2>11. Siguranța Cookie-urilor</h2>

                    <h3>11.1 Protecția Datelor</h3>
                    <ul>
                        <li>Cookie-urile sunt salvate local pe dispozitivul tău, nu pe serverele noastre</li>
                        <li>Transmisia este criptată cu HTTPS</li>
                        <li>Nu putem accesa cookie-urile tale direct (doar dacă le trimiți înapoi)</li>
                    </ul>

                    <h3>11.2 Riscuri</h3>
                    <ul>
                        <li>Dacă altcineva accesează dispozitivul tău, poate vedea cookie-urile</li>
                        <li>Cookie-urile nu pot executa cod malițios (sunt doar text)</li>
                        <li>Pot fi vulnerabile la furturi dacă dispozitivul este compromis</li>
                    </ul>

                    <h3>11.3 Măsuri de Protecție</h3>
                    <ul>
                        <li>Folosiți parole puternice</li>
                        <li>Păstrați software-ul actualizat</li>
                        <li>Utilizați VPN pe rețele publice</li>
                        <li>Ștergeti cookie-urile periodic</li>
                    </ul>

                    <h2>12. Drepturi conform GDPR</h2>
                    <p>Ca persoană din UE, ai următoarele drepturi:</p>

                    <h3>12.1 Dreptul de Acces</h3>
                    <p>Poți cere să afli ce date am colectat despre tine din cookie-uri.</p>

                    <h3>12.2 Dreptul de Ștergere</h3>
                    <p>Poți cere ștergerea datelor colectate prin cookie-uri (excepții: date legale).</p>

                    <h3>12.3 Dreptul de Opoziție</h3>
                    <p>Poți refuza publicitatea comportamentală și remarketing-ul.</p>

                    <h3>12.4 Dreptul la Portabilitate</h3>
                    <p>Poți cere copiile datelor într-un format portabil.</p>

                    <h3>12.5 Retragere Consimțământ</h3>
                    <p>Poți retrage consimțământul pentru cookie-uri de marketing oricând.</p>

                    <h2>13. Modificări ale Politicii de Cookie-uri</h2>
                    <p>GLOBAL CREDIT SOLUTIONS SRL se rezervă dreptul de a modifica această Politică oricând.</p>
                    <ul>
                        <li>Modificările vor fi publicate pe Site</li>
                        <li>Datele importante vor fi comunicate prin email</li>
                        <li>Utilizarea continuă a Site-ului implică acceptarea noilor termeni</li>
                    </ul>

                    <h2>14. Contact și Reclamații</h2>
                    <p>Pentru întrebări, opțiuni sau reclamații privind cookie-urile:</p>

                    <div class="gcs-cookies-info-box">
                        <p><strong>Email:</strong> contact@creditsolutions.ro</p>
                        <p><strong>Telefon:</strong> 0743212055, 0745546924</p>
                        <p><strong>Adresă:</strong> București, Sectorul 1, Str. Diaconu Cornești, Nr. 53</p>
                    </div>

                    <p><strong>Autoritatea de Supraveghere (GDPR):</strong></p>
                    <div class="gcs-cookies-info-box">
                        <p><strong>Autoritatea Națională de Supraveghere a Prelucrării Datelor cu Caracter Personal (ANSPDCP)</strong></p>
                        <p><strong>Website:</strong> www.dataprotection.ro</p>
                    </div>

                </div>
            </div>
        </section>

    </div>

    <style>
        /* ==================== RESET ==================== */
        .gcs-cookies-wrapper {
            all: initial !important;
            display: block !important;
        }

        .gcs-cookies-wrapper *,
        .gcs-cookies-wrapper *::before,
        .gcs-cookies-wrapper *::after {
            box-sizing: border-box !important;
        }

        .gcs-cookies-wrapper,
        .gcs-cookies-wrapper * {
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif !important;
        }

        /* ==================== HEADER ==================== */
        .gcs-cookies-header {
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

        .gcs-cookies-header.scrolled {
            background-color: #ffffff !important;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06) !important;
            padding-top: 0.75rem !important;
            padding-bottom: 0.75rem !important;
        }

        .gcs-cookies-container {
            width: 100% !important;
            max-width: 80rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }

        .gcs-cookies-header-content {
            display: flex !important;
            align-items: center !important;
            justify-content: space-between !important;
        }

        /* ==================== LOGO ==================== */
        .gcs-cookies-logo-btn {
            display: inline-flex !important;
            align-items: center !important;
            text-decoration: none !important;
            cursor: pointer !important;
            position: relative !important;
            height: 3rem !important;
        }

        .gcs-cookies-logo-img {
            height: 3rem !important;
            width: auto !important;
            transition-property: opacity !important;
            transition-duration: 300ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            display: block !important;
        }

        /* White logo - visible by default, hidden when scrolled */
        .gcs-cookies-logo-white {
            opacity: 1 !important;
            position: relative !important;
        }

        .gcs-cookies-header.scrolled .gcs-cookies-logo-white {
            opacity: 0 !important;
        }

        /* Blue logo - hidden by default, visible when scrolled */
        .gcs-cookies-logo-blue {
            opacity: 0 !important;
            position: absolute !important;
            top: 0 !important;
            left: 0 !important;
        }

        .gcs-cookies-header.scrolled .gcs-cookies-logo-blue {
            opacity: 1 !important;
        }

        /* ==================== NAVIGATION ==================== */
        .gcs-cookies-nav-desktop {
            display: none !important;
        }

        @media (min-width: 768px) {
            .gcs-cookies-nav-desktop {
                display: flex !important;
                align-items: center !important;
                gap: 2rem !important;
            }
        }

        .gcs-cookies-nav-link {
            transition-property: color !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            color: #ffffff !important;
            text-decoration: none !important;
            font-size: 1rem !important;
        }

        .gcs-cookies-nav-link:hover {
            color: #0066CC !important;
        }

        .gcs-cookies-header.scrolled .gcs-cookies-nav-link {
            color: #374151 !important;
        }

        /* ==================== CTA BUTTON ==================== */
        .gcs-cookies-cta-wrapper {
            display: none !important;
        }

        @media (min-width: 768px) {
            .gcs-cookies-cta-wrapper {
                display: block !important;
            }
        }

        .gcs-cookies-btn-primary {
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

        .gcs-cookies-btn-primary:hover {
            background-color: #0052A3 !important;
        }

        .gcs-cookies-btn-full {
            width: 100% !important;
        }

        /* ==================== MOBILE MENU ==================== */
        .gcs-cookies-mobile-toggle {
            display: flex !important;
            background: none !important;
            border: none !important;
            cursor: pointer !important;
            padding: 0.25rem !important;
        }

        @media (min-width: 768px) {
            .gcs-cookies-mobile-toggle {
                display: none !important;
            }
        }

        .gcs-cookies-menu-icon,
        .gcs-cookies-close-icon {
            width: 1.5rem !important;
            height: 1.5rem !important;
            color: #ffffff !important;
            transition-property: color !important;
            transition-duration: 300ms !important;
        }

        .gcs-cookies-header.scrolled .gcs-cookies-menu-icon,
        .gcs-cookies-header.scrolled .gcs-cookies-close-icon {
            color: #003D7A !important;
        }

        .gcs-cookies-menu-icon {
            display: block !important;
        }

        .gcs-cookies-close-icon {
            display: none !important;
        }

        .gcs-cookies-mobile-toggle.active .gcs-cookies-menu-icon {
            display: none !important;
        }

        .gcs-cookies-mobile-toggle.active .gcs-cookies-close-icon {
            display: block !important;
        }

        .gcs-cookies-mobile-menu {
            display: none !important;
        }

        .gcs-cookies-mobile-menu.open {
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
            .gcs-cookies-mobile-menu {
                display: none !important;
            }
        }

        .gcs-cookies-mobile-link {
            color: #374151 !important;
            text-decoration: none !important;
            text-align: left !important;
            font-size: 1rem !important;
            padding: 0.5rem 0 !important;
            transition-property: color !important;
            transition-duration: 150ms !important;
        }

        .gcs-cookies-mobile-link:hover {
            color: #0066CC !important;
        }

        /* ==================== HERO SECTION ==================== */
        .gcs-cookies-hero {
            background-image: linear-gradient(to bottom right, #003D7A, #001f3f) !important;
            padding-top: 8rem !important;
            padding-bottom: 4rem !important;
        }

        @media (min-width: 768px) {
            .gcs-cookies-hero {
                padding-top: 10rem !important;
                padding-bottom: 6rem !important;
            }
        }

        .gcs-cookies-hero-content {
            max-width: 48rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
            text-align: center !important;
            color: #ffffff !important;
        }

        .gcs-cookies-hero-title {
            color: #ffffff !important;
            margin-bottom: 1rem !important;
            font-size: 2.25rem !important;
            line-height: 2.5rem !important;
            font-weight: 700 !important;
            margin-top: 0 !important;
        }

        @media (min-width: 768px) {
            .gcs-cookies-hero-title {
                font-size: 3rem !important;
                line-height: 1 !important;
            }
        }

        .gcs-cookies-hero-subtitle {
            font-size: 1.125rem !important;
            line-height: 1.75rem !important;
            color: #e5e7eb !important;
            margin: 0 !important;
        }

        /* ==================== CONTENT SECTION ==================== */
        .gcs-cookies-content-section {
            padding-top: 4rem !important;
            padding-bottom: 4rem !important;
            background-color: #ffffff !important;
        }

        @media (min-width: 768px) {
            .gcs-cookies-content-section {
                padding-top: 6rem !important;
                padding-bottom: 6rem !important;
            }
        }

        .gcs-cookies-content {
            max-width: 56rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .gcs-cookies-content h2 {
            color: #003D7A !important;
            font-size: 1.875rem !important;
            line-height: 2.25rem !important;
            font-weight: 700 !important;
            margin-top: 3rem !important;
            margin-bottom: 1.5rem !important;
        }

        .gcs-cookies-content h2:first-child {
            margin-top: 0 !important;
        }

        .gcs-cookies-content h3 {
            color: #003D7A !important;
            font-size: 1.5rem !important;
            line-height: 2rem !important;
            font-weight: 600 !important;
            margin-top: 2rem !important;
            margin-bottom: 1rem !important;
        }

        .gcs-cookies-content p {
            color: #374151 !important;
            font-size: 1rem !important;
            line-height: 1.75rem !important;
            margin-bottom: 1rem !important;
            margin-top: 0 !important;
        }

        .gcs-cookies-content ul,
        .gcs-cookies-content ol {
            color: #374151 !important;
            font-size: 1rem !important;
            line-height: 1.75rem !important;
            margin-bottom: 1rem !important;
            margin-top: 0 !important;
            padding-left: 2rem !important;
            list-style-position: outside !important;
        }

        .gcs-cookies-content ul {
            list-style-type: disc !important;
        }

        .gcs-cookies-content ol {
            list-style-type: decimal !important;
        }

        .gcs-cookies-content li {
            margin-bottom: 0.5rem !important;
            padding-left: 0.5rem !important;
        }

        .gcs-cookies-content strong {
            font-weight: 600 !important;
            color: #1f2937 !important;
        }

        .gcs-cookies-info-box {
            background-color: #F5F7FA !important;
            border-left: 4px solid #0066CC !important;
            padding: 1.5rem !important;
            margin-top: 1.5rem !important;
            margin-bottom: 1.5rem !important;
            border-radius: 0.5rem !important;
        }

        .gcs-cookies-info-box p {
            margin-bottom: 0.5rem !important;
        }

        .gcs-cookies-info-box p:last-child {
            margin-bottom: 0 !important;
        }

        /* ==================== TABLES ==================== */
        .gcs-cookies-table-wrapper {
            overflow-x: auto !important;
            margin-top: 1.5rem !important;
            margin-bottom: 1.5rem !important;
        }

        .gcs-cookies-table {
            width: 100% !important;
            border-collapse: collapse !important;
            font-size: 0.875rem !important;
            line-height: 1.5rem !important;
        }

        .gcs-cookies-table thead {
            background-color: #F5F7FA !important;
        }

        .gcs-cookies-table th {
            padding: 0.75rem !important;
            text-align: left !important;
            font-weight: 600 !important;
            color: #003D7A !important;
            border-bottom: 2px solid #0066CC !important;
        }

        .gcs-cookies-table td {
            padding: 0.75rem !important;
            border-bottom: 1px solid #e5e7eb !important;
            color: #374151 !important;
        }

        .gcs-cookies-table tbody tr:hover {
            background-color: #f9fafb !important;
        }

        .gcs-cookies-table tbody tr:last-child td {
            border-bottom: none !important;
        }

        @media (max-width: 768px) {
            .gcs-cookies-table {
                font-size: 0.75rem !important;
            }

            .gcs-cookies-table th,
            .gcs-cookies-table td {
                padding: 0.5rem !important;
            }
        }
    </style>

    <script>
        (function() {
            if (window.gcsCookiesInit) return;
            window.gcsCookiesInit = true;

            const header = document.querySelector('.gcs-cookies-header');
            const mobileToggle = document.querySelector('.gcs-cookies-mobile-toggle');
            const mobileMenu = document.querySelector('.gcs-cookies-mobile-menu');

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
            const mobileLinks = document.querySelectorAll('.gcs-cookies-mobile-link');
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

add_shortcode('gcs_cookies_page', 'gcs_cookies_page_shortcode');

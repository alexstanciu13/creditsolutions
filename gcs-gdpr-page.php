<?php
/**
 * Global Credit Solutions - GDPR Page
 *
 * Shortcode: [gcs_gdpr_page]
 */

function gcs_gdpr_page_shortcode() {
    ob_start();
    ?>

    <div class="gcs-gdpr-wrapper">

        <!-- ==================== HEADER ==================== -->
        <header class="gcs-gdpr-header">
            <div class="gcs-gdpr-container">
                <div class="gcs-gdpr-header-content">
                    <!-- Logo -->
                    <a href="<?php echo home_url(); ?>" class="gcs-gdpr-logo-btn">
                        <img
                            src="https://creditsolutions.ro/wp-content/uploads/2025/11/logo-alb.png"
                            alt="Global Credit Solutions"
                            class="gcs-gdpr-logo-img gcs-gdpr-logo-white"
                        />
                        <img
                            src="https://creditsolutions.ro/wp-content/uploads/2025/11/logo-blue.png"
                            alt="Global Credit Solutions"
                            class="gcs-gdpr-logo-img gcs-gdpr-logo-blue"
                        />
                    </a>

                    <!-- Desktop Navigation -->
                    <nav class="gcs-gdpr-nav-desktop">
                        <a href="<?php echo home_url(); ?>" class="gcs-gdpr-nav-link">Acasă</a>
                        <a href="<?php echo home_url('/despre'); ?>" class="gcs-gdpr-nav-link">Despre Noi</a>
                        <a href="<?php echo home_url('/servicii'); ?>" class="gcs-gdpr-nav-link">Servicii</a>
                        <a href="<?php echo home_url('/contact'); ?>" class="gcs-gdpr-nav-link">Contact</a>
                    </nav>

                    <!-- CTA Button Desktop -->
                    <div class="gcs-gdpr-cta-wrapper">
                        <a href="<?php echo home_url('/contact'); ?>" class="gcs-gdpr-btn-primary">Aplică Acum</a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <button class="gcs-gdpr-mobile-toggle" aria-label="Toggle menu">
                        <svg class="gcs-gdpr-menu-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="3" y1="12" x2="21" y2="12"></line>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg>
                        <svg class="gcs-gdpr-close-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>

                <!-- Mobile Menu -->
                <nav class="gcs-gdpr-mobile-menu">
                    <a href="<?php echo home_url(); ?>" class="gcs-gdpr-mobile-link">Acasă</a>
                    <a href="<?php echo home_url('/despre'); ?>" class="gcs-gdpr-mobile-link">Despre Noi</a>
                    <a href="<?php echo home_url('/servicii'); ?>" class="gcs-gdpr-mobile-link">Servicii</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="gcs-gdpr-mobile-link">Contact</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="gcs-gdpr-btn-primary gcs-gdpr-btn-full">Aplică Acum</a>
                </nav>
            </div>
        </header>

        <!-- ==================== HERO SECTION ==================== -->
        <section class="gcs-gdpr-hero">
            <div class="gcs-gdpr-container">
                <div class="gcs-gdpr-hero-content">
                    <h1 class="gcs-gdpr-hero-title">Politica de Confidențialitate și GDPR</h1>
                    <p class="gcs-gdpr-hero-subtitle">Data ultimei actualizări: noiembrie 2025</p>
                </div>
            </div>
        </section>

        <!-- ==================== CONTENT SECTION ==================== -->
        <section class="gcs-gdpr-content-section">
            <div class="gcs-gdpr-container">
                <div class="gcs-gdpr-content">

                    <h2>1. Introducere</h2>
                    <p>GLOBAL CREDIT SOLUTIONS SRL („Noi", „Noastră", „Compania") este angajată să protejeze confidențialitatea și drepturile tale privind datele personale.</p>

                    <p><strong>Prezenta Politică de Confidențialitate explică:</strong></p>
                    <ul>
                        <li>Ce date personale colectăm</li>
                        <li>Cum le utilizăm</li>
                        <li>Cu cine le partajăm</li>
                        <li>Ce drepturi ai</li>
                        <li>Cum să ne contactezi pentru probleme de confidențialitate</li>
                    </ul>

                    <p>Comply completament cu Regulamentul UE 2016/679 (GDPR), Legea 190/2018 privind contractele de credit, și alte legi applicabile din România.</p>

                    <h2>2. Informații Operatorului de Date</h2>

                    <div class="gcs-gdpr-info-box">
                        <p><strong>Operator de Date (Data Controller):</strong></p>
                        <p><strong>Denumire:</strong> GLOBAL CREDIT SOLUTIONS SRL</p>
                        <p><strong>CUI:</strong> 45859620</p>
                        <p><strong>Adresă:</strong> București, Sectorul 1, Str. Diaconu Cornești, Nr. 53</p>
                        <p><strong>Telefon:</strong> 0743212055, 0745546924</p>
                        <p><strong>Email:</strong> contact@creditsolutions.ro</p>
                        <p><strong>Website:</strong> www.creditsolutions.ro</p>
                    </div>

                    <p><strong>Responsabil cu Protecția Datelor (DPO):</strong></p>
                    <p>Pentru orice întrebări privind protecția datelor, contactează: contact@creditsolutions.ro</p>

                    <h2>3. Ce Date Personale Colectăm?</h2>
                    <p>Colectăm diverse categorii de date în funcție de interacțiunea ta cu noi:</p>

                    <h3>3.1 Date Furnizate Direct de Tine</h3>
                    <p>Când completezi formularele pe Site, colectăm:</p>

                    <p><strong>Date de Identificare:</strong></p>
                    <ul>
                        <li>Nume și prenume</li>
                        <li>Număr de telefon</li>
                        <li>Adresă de email</li>
                        <li>Adresă de domiciliu</li>
                        <li>Data nașterii</li>
                    </ul>

                    <p><strong>Date Financiare:</strong></p>
                    <ul>
                        <li>Venit lunar/anual</li>
                        <li>Stare de angajare</li>
                        <li>Tipul locului de muncă</li>
                        <li>Istoric de credit (referință)</li>
                        <li>Suma creditului solicitat</li>
                        <li>Termenul de rambursare dorit</li>
                    </ul>

                    <p><strong>Date de Contact:</strong></p>
                    <ul>
                        <li>Telefon</li>
                        <li>Email</li>
                        <li>Adresă poștală</li>
                        <li>Eventual date de contact alternative</li>
                    </ul>

                    <p><strong>Date din Documente:</strong></p>
                    <ul>
                        <li>Copii de identitate (ID, pașaport)</li>
                        <li>Dovezi de venit (contracte, declarații impozite)</li>
                        <li>Dovezi de domiciliu (facturi utilități, contract închiriere)</li>
                        <li>Alte documente justificative</li>
                    </ul>

                    <h3>3.2 Date Colectate Automat</h3>
                    <p>Când vizitezi Site-ul, colectăm automat:</p>

                    <p><strong>Date Tehnice:</strong></p>
                    <ul>
                        <li>Adresa IP</li>
                        <li>Tip de browser și sistem de operare</li>
                        <li>Pagini vizitate și timp petrecut</li>
                        <li>Link-uri pe care ai dat clic</li>
                        <li>Rezoluție ecran și limbă</li>
                        <li>Dispozitiv (calculator, telefon, tabletă)</li>
                    </ul>

                    <p><strong>Date de Cookie-uri:</strong></p>
                    <ul>
                        <li>Cookie-uri de sesiune și persistente</li>
                        <li>Identificatori de tracking</li>
                        <li>Date de Google Analytics și Facebook Pixel</li>
                    </ul>

                    <p><strong>Date din Email Marketing:</strong></p>
                    <ul>
                        <li>Dacă ai deschis email-ul</li>
                        <li>Pe ce link-uri ai dat clic</li>
                        <li>Data și ora deschiderii</li>
                    </ul>

                    <h3>3.3 Date de la Terți Părți</h3>
                    <p>Primim date și din:</p>

                    <p><strong>Instituții Financiare Partenere:</strong></p>
                    <ul>
                        <li>Rezultate ale evaluării creditului</li>
                        <li>Decizia de aprobare/respingere</li>
                        <li>Detalii privind contractul de credit</li>
                    </ul>

                    <p><strong>Agenții de Credit (Credit Bureau):</strong></p>
                    <ul>
                        <li>Istoricul de plăți</li>
                        <li>Alte credite active</li>
                        <li>Informații de solvabilitate</li>
                    </ul>

                    <p><strong>Servicii de Verificare:</strong></p>
                    <ul>
                        <li>Verificări de identitate și fraude</li>
                        <li>Informații despre corespondență</li>
                    </ul>

                    <p><strong>Rețelele Sociale (dacă dai clic pe link-uri sociale):</strong></p>
                    <ul>
                        <li>Date publice din profil</li>
                        <li>Informații de contact</li>
                    </ul>

                    <h2>4. Scopurile Prelucrării Datelor</h2>
                    <p>Utilizăm datele tale pentru:</p>

                    <h3>4.1 Executarea Contractului de Intermediere</h3>
                    <ul>
                        <li>Evaluare cerere de credit</li>
                        <li>Verificare eligibilitate</li>
                        <li>Transmitere date instituțiilor de credit partenere</li>
                        <li>Gestionare contract intermediere</li>
                        <li>Comunicare privind status cererii</li>
                    </ul>

                    <h3>4.2 Obligații Legale și Conformitate</h3>
                    <ul>
                        <li>Conformitate cu Legea 190/2018 (contracte credit)</li>
                        <li>Conformitate cu GDPR</li>
                        <li>Conformitate cu reglementări BNR</li>
                        <li>Prevenirea fraudei și criminalității</li>
                        <li>Colaborare cu autoritățile (dacă legea impune)</li>
                    </ul>

                    <h3>4.3 Interese Legitime</h3>
                    <ul>
                        <li>Evaluare risc de credit</li>
                        <li>Prevenire fraude</li>
                        <li>Securitate Site</li>
                        <li>Optimizare servicii</li>
                        <li>Marketing și comunicări (cu consimțământul)</li>
                    </ul>

                    <h3>4.4 Marketing și Comunicări</h3>
                    <ul>
                        <li>Trimitere newsletter și oferte (cu consimțământul)</li>
                        <li>Informare despre produse noi</li>
                        <li>Sondaje de satisfacție</li>
                        <li>Comunicări privind cererea ta de credit</li>
                    </ul>

                    <h3>4.5 Statistică și Analiție</h3>
                    <ul>
                        <li>Analiză comportament utilizatori</li>
                        <li>Optimizare Site</li>
                        <li>Rapoarte management (date anonimizate)</li>
                        <li>Cercetare piață</li>
                    </ul>

                    <h3>4.6 Securitate și Protecție</h3>
                    <ul>
                        <li>Detectare activități suspicioase</li>
                        <li>Prevenire unauthorized access</li>
                        <li>Audit și compliance</li>
                        <li>Investigare încălcări</li>
                    </ul>

                    <h2>5. Baza Juridică a Prelucrării</h2>
                    <p>Prelucrarea datelor tale se face pe baza următoarelor:</p>

                    <div class="gcs-gdpr-table-wrapper">
                        <table class="gcs-gdpr-table">
                            <thead>
                                <tr>
                                    <th>Tip Prelucrare</th>
                                    <th>Bază Juridică</th>
                                    <th>Exemple</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Executare Contract</td>
                                    <td>Art. 6(1)(b) GDPR</td>
                                    <td>Evaluare cerere, transmitere date</td>
                                </tr>
                                <tr>
                                    <td>Obligații Legale</td>
                                    <td>Art. 6(1)(c) GDPR</td>
                                    <td>Conformitate Legea 190/2018, BNR</td>
                                </tr>
                                <tr>
                                    <td>Interese Legitime</td>
                                    <td>Art. 6(1)(f) GDPR</td>
                                    <td>Prevenire fraude, securitate</td>
                                </tr>
                                <tr>
                                    <td>Consimțământ</td>
                                    <td>Art. 6(1)(a) GDPR</td>
                                    <td>Marketing, newsletter, cookies</td>
                                </tr>
                                <tr>
                                    <td>Categorii Speciale</td>
                                    <td>Art. 9(2) GDPR</td>
                                    <td>Dacă se colectează date sensibile</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h2>6. Cui Partajam Datele?</h2>
                    <p>Datele tale pot fi partajate cu:</p>

                    <h3>6.1 Instituții de Credit Partenere (Obligatoriu)</h3>
                    <ul>
                        <li>Bănci și alți furnizori de credite</li>
                        <li>Date transmise pentru evaluare și procesare credit</li>
                        <li>Acestea devin responsabile de date după transmitere</li>
                    </ul>

                    <h3>6.2 Agenții de Credit (Credit Bureau)</h3>
                    <ul>
                        <li>Exemple: BIRB, CRIF Axactor, Experian</li>
                        <li>Pentru verificare istoric și raportare</li>
                        <li>Transfer legal conform Legii 190/2018</li>
                    </ul>

                    <h3>6.3 Furnizorii de Servicii (Procesatori de Date)</h3>
                    <ul>
                        <li>Servicii de email marketing (dacă sunt utilizate)</li>
                        <li>Servicii de hosting și cloud</li>
                        <li>Servicii de analiție (Google Analytics)</li>
                        <li>Servicii de publicitate (Meta/Facebook)</li>
                        <li>Toți sunt obligați legal să protejeze datele (DPA)</li>
                    </ul>

                    <h3>6.4 Autorități și Instituții Publice (Dacă Legea Impune)</h3>
                    <ul>
                        <li>Autorități fiscale (ANAF)</li>
                        <li>Poliție și procuratură (dacă investigații)</li>
                        <li>Banca Națională a României (dacă inspecții)</li>
                        <li>Instanțe judecătorești (dacă litigii)</li>
                    </ul>

                    <h3>6.5 Alte Entități</h3>
                    <ul>
                        <li>Avocați și consultanți legali (confidențialitate avocatului)</li>
                        <li>Auditoare externe (verificare conformitate)</li>
                        <li>Partenerul tău de credit (cu consimțământul)</li>
                    </ul>

                    <h3>6.6 Transfer Internațional</h3>
                    <p>Unele date pot fi transferate în Statele Unite (Google Analytics, Meta Pixel) și alte țări. Transferurile se realizează cu protecții conform GDPR:</p>
                    <ul>
                        <li>Standard Contractual Clauses (SCC)</li>
                        <li>Decizii de adecvare UE</li>
                        <li>Consimțământul explicit al utilizatorului</li>
                    </ul>

                    <h2>7. Durata Retenției Datelor</h2>

                    <div class="gcs-gdpr-table-wrapper">
                        <table class="gcs-gdpr-table">
                            <thead>
                                <tr>
                                    <th>Tip Date</th>
                                    <th>Durata Stocării</th>
                                    <th>Motiv</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Date Contract de Credit</td>
                                    <td>5 ani după finalizare</td>
                                    <td>Obligație legală Legea 190/2018</td>
                                </tr>
                                <tr>
                                    <td>Date pentru Audit/Compliance</td>
                                    <td>3-7 ani</td>
                                    <td>Conformitate reglementări</td>
                                </tr>
                                <tr>
                                    <td>Date Cookie-uri Tracking</td>
                                    <td>2 ani (Google), 3 luni (Facebook)</td>
                                    <td>Conform politici furnizori</td>
                                </tr>
                                <tr>
                                    <td>Date Marketing (Newsletter)</td>
                                    <td>Cât timp ai consimțământ</td>
                                    <td>Retragere oricând</td>
                                </tr>
                                <tr>
                                    <td>Documente Anexate</td>
                                    <td>1-3 ani după finalizare</td>
                                    <td>Conformitate contractuală</td>
                                </tr>
                                <tr>
                                    <td>Date Securitate/Fraude</td>
                                    <td>1-2 ani</td>
                                    <td>Prevenire incidente</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <p>După expirarea termenelor, datele sunt șterse permanent sau anonimizate.</p>

                    <h2>8. Protecția Datelor și Securitate</h2>

                    <h3>8.1 Măsuri Tehnice</h3>
                    <ul>
                        <li><strong>Criptare HTTPS</strong> - pentru transmisia datelor</li>
                        <li><strong>SSL/TLS Certificates</strong> - pentru comunicare sigură</li>
                        <li><strong>Criptare End-to-End</strong> - pentru email-uri sensibile</li>
                        <li><strong>Firewall-uri</strong> - protecție la nivel de rețea</li>
                        <li><strong>Antivirus și Antimalware</strong> - protecție serverele</li>
                    </ul>

                    <h3>8.2 Măsuri Organizaționale</h3>
                    <ul>
                        <li><strong>Acceso Restricționat</strong> - doar angajații autorizați</li>
                        <li><strong>Parole Puternice</strong> - pentru toți utilizatorii intern</li>
                        <li><strong>Antrenament Securitate</strong> - angajați instruiți GDPR</li>
                        <li><strong>Audit de Securitate</strong> - verificări regulate</li>
                        <li><strong>Poliță de Incidente</strong> - răspuns la bresa datelor</li>
                    </ul>

                    <h3>8.3 Limitări și Disclaimer</h3>
                    <ul>
                        <li>Nicio transmisie online nu este 100% sigură</li>
                        <li>Nu suntem responsabili pentru interceptări de la terți</li>
                        <li>Ești responsabil de menținerea parolei tale confidențiale</li>
                        <li>Raporteaza orice acces neautorizat imediat</li>
                    </ul>

                    <h2>9. Drepturile Tale conform GDPR</h2>
                    <p>Ai următoarele drepturi privind datele personale:</p>

                    <h3>9.1 Dreptul de Acces (Art. 15 GDPR)</h3>
                    <p>Poți cere să afli:</p>
                    <ul>
                        <li>Ce date am despre tine</li>
                        <li>Cum le utilizăm</li>
                        <li>Cine le accesează</li>
                        <li>Pentru cât timp le păstrăm</li>
                    </ul>
                    <p><strong>Cum se exercită:</strong> Email la contact@creditsolutions.ro cu cererea scrisă<br>
                    <strong>Termenul:</strong> Răspund în termen de 30 de zile<br>
                    <strong>Costuri:</strong> GRATUIT</p>

                    <h3>9.2 Dreptul de Rectificare (Art. 16 GDPR)</h3>
                    <p>Poți cere să corectez datele:</p>
                    <ul>
                        <li>Dacă sunt inexacte</li>
                        <li>Dacă sunt incomplete</li>
                        <li>Trebuie să furnizezi dovezi</li>
                    </ul>
                    <p>Exemplu: Ai mutat, iar adresa din bază e veche → poți cere actualizare</p>
                    <p><strong>Termenul:</strong> 30 de zile</p>

                    <h3>9.3 Dreptul de Ștergere (Art. 17 GDPR - "Dreptul de a Fi Uitat")</h3>
                    <p>Poți cere ștergerea dacă:</p>
                    <ul>
                        <li>Datele nu mai sunt necesare pentru scopul inițial</li>
                        <li>Ți-ai retras consimțământul</li>
                        <li>Te-ai opus prelucrării</li>
                        <li>Datele au fost prelucrate ilegal</li>
                        <li>Expirarea perioadei legale de retenție</li>
                    </ul>

                    <p><strong>Excepții:</strong> NU pot șterge dacă:</p>
                    <ul>
                        <li>Sunt necesare pentru obligații legale (credit)</li>
                        <li>Sunt necesare pentru apărare legală</li>
                        <li>Există interese legitime mai mari</li>
                    </ul>
                    <p><strong>Termenul:</strong> 30 de zile</p>

                    <h3>9.4 Dreptul la Restricționarea Prelucrării (Art. 18 GDPR)</h3>
                    <p>Poți cere să restricționez prelucrarea dacă:</p>
                    <ul>
                        <li>Contești acuratețea datelor (timp investigare)</li>
                        <li>Prelucrarea e ilegală și nu dorești ștergere</li>
                        <li>Nu mai sunt necesare pentru scop, dar sunt necesare pentru apărare legală</li>
                        <li>Ai contestat prelucrarea</li>
                    </ul>
                    <p><strong>Efect:</strong> Datele sunt marcate și nu se prelucrează (cu excepții legale)</p>
                    <p><strong>Termenul:</strong> 30 de zile</p>

                    <h3>9.5 Dreptul la Portabilitate (Art. 20 GDPR)</h3>
                    <p>Poți cere datele într-un format portabil:</p>
                    <ul>
                        <li>Format electronic (ex: CSV, JSON)</li>
                        <li>Poți să le transferi altuia</li>
                        <li>Nu include: Datele anonimizate, date din alte surse</li>
                    </ul>
                    <p><strong>Termenul:</strong> 30 de zile<br>
                    <strong>Cost:</strong> GRATUIT</p>

                    <h3>9.6 Dreptul de Opoziție (Art. 21 GDPR)</h3>
                    <p>Poți refuza prelucrarea pentru:</p>
                    <ul>
                        <li>Marketing și comunicări comerciale</li>
                        <li>Publicitate comportamentală</li>
                        <li>Profilare</li>
                    </ul>
                    <p><strong>Efect:</strong> Nu mai primești email-uri, newsletter-uri, anunțuri</p>
                    <p><strong>Termenul:</strong> Imediat<br>
                    <strong>Cost:</strong> GRATUIT</p>

                    <h3>9.7 Dreptul de a Nu Fi Subiectul Deciziilor Automatizate (Art. 22 GDPR)</h3>
                    <p>Dacă decizii sunt luate automatic (AI/algoritmi):</p>
                    <ul>
                        <li>Poți cere intervenție umană</li>
                        <li>Poți contesta decizia</li>
                        <li>Se aplică pentru decizii cu efecte juridice semnificative</li>
                    </ul>

                    <h3>9.8 Cum Exerciți Drepturile</h3>
                    <p><strong>Email:</strong> contact@creditsolutions.ro</p>

                    <p><strong>Incluzii în email:</strong></p>
                    <ul>
                        <li>Nameșitere clar a dreptului (ex: "Solicit exercitarea dreptului de acces")</li>
                        <li>Dovezi de identitate (foto ID)</li>
                        <li>Detalii: nume, email, dată nașterii, CUI (dacă persoană juridică)</li>
                        <li>Semnătură</li>
                    </ul>

                    <p><strong>Răspuns:</strong> Confirm primirea în termen de 3 zile. Răspund complet în termen de 30 de zile (extensibil cu 60 de zile dacă cererea e complexă).</p>

                    <h2>10. Cookie-uri și Tracking</h2>
                    <p>Vezi Politica de Cookies pentru detalii complete.</p>

                    <p><strong>Rezumat:</strong></p>
                    <ul>
                        <li>Utilizez Google Analytics, Facebook Pixel, Email Tracking</li>
                        <li>Cookie-urile strict necesare sunt setate automat</li>
                        <li>Cookie-urile de marketing necesită consimțământul tău</li>
                        <li>Poți refuza cookie-urile oricând</li>
                    </ul>

                    <h2>11. Marketing și Comunicări</h2>

                    <h3>11.1 Email Marketing (Newsletter)</h3>
                    <p><strong>Cum mă înscriu:</strong> Prin formular opt-in pe Site</p>

                    <p><strong>Ce primesc:</strong></p>
                    <ul>
                        <li>Informații despre produse noi</li>
                        <li>Oferte și promotiții</li>
                        <li>Articole informative</li>
                        <li>Alerte importante</li>
                    </ul>

                    <p><strong>Frecvență:</strong> 1-2 email-uri pe săptămână (aproximativ)</p>

                    <p><strong>Cum Refuz:</strong></p>
                    <ul>
                        <li>Click pe link-ul "Unsubscribe" din fiecare email</li>
                        <li>Email la contact@creditsolutions.ro cu cererea</li>
                        <li>Instant din setări Site (dacă ai cont)</li>
                    </ul>

                    <h3>11.2 SMS Marketing (Dacă Se Aplică)</h3>
                    <p>Dacă ai consimțit la SMS:</p>
                    <ul>
                        <li>Primești notificări urgente</li>
                        <li>Poți refuza SMS oricând</li>
                    </ul>

                    <h3>11.3 Publicitate Comportamentală</h3>
                    <p>Facebook și Google vor putea:</p>
                    <ul>
                        <li>Arăta anunțuri personalizate bazate pe vizitele tale pe Site</li>
                        <li>Poți dezactiva din setări browser sau direct din platformele respective</li>
                    </ul>

                    <h2>12. Bresa Datelor și Notificare</h2>

                    <h3>12.1 Ce Este o Breșă de Date</h3>
                    <p>Acces neautorizat, pierdere, modificare, distrugere a datelor personale.</p>

                    <p><strong>Exemple:</strong></p>
                    <ul>
                        <li>Hacking Server</li>
                        <li>Pierdere Laptop cu date</li>
                        <li>Email phishing care cade victimă</li>
                        <li>Angajat rău intenționat</li>
                    </ul>

                    <h3>12.2 Notificare în Caz de Breșă</h3>
                    <p><strong>Pentru Tine:</strong> Dacă breșa creează risc ridicat, te notific în maxim 72 ore prin:</p>
                    <ul>
                        <li>Email la adresa din bază</li>
                        <li>Notificare pe Site</li>
                    </ul>

                    <p><strong>Pentru Autorități:</strong> Dacă breșa e gravă, notific ANSPDCP în 72 ore</p>

                    <p><strong>Informații în Notificare:</strong></p>
                    <ul>
                        <li>Ce date au fost compromise</li>
                        <li>Care ar putea fi riscurile</li>
                        <li>Ce măsuri iau</li>
                        <li>Cum să te protejezi</li>
                        <li>Contact pentru detalii</li>
                    </ul>

                    <h3>12.3 Protecția Ta</h3>
                    <p>Dacă ești victimă breșei de date:</p>
                    <ul>
                        <li>Schimbă parolele importante</li>
                        <li>Monitorizează conturi bancare</li>
                        <li>Anunță banca ta</li>
                        <li>Raportează fraude la poliție</li>
                    </ul>

                    <h2>13. Schimbări ale Politicii</h2>
                    <ul>
                        <li>Pot modifica această Politică oricând</li>
                        <li>Modificările intră în vigoare la publicare</li>
                        <li>Pentru schimbări majore, te notific prin email</li>
                        <li>Utilizarea continuă = acceptare noi termeni</li>
                    </ul>

                    <h2>14. Contact și Reclamații</h2>

                    <h3>14.1 Întrebări privind Confidențialitatea</h3>
                    <ul>
                        <li><strong>Email:</strong> contact@creditsolutions.ro</li>
                        <li><strong>Telefon:</strong> 0743212055, 0745546924</li>
                        <li><strong>Adresă:</strong> București, Sectorul 1, Str. Diaconu Cornești, Nr. 53</li>
                    </ul>
                    <p>Răspund în termen de 30 de zile.</p>

                    <h3>14.2 Reclamație la Autorități</h3>
                    <p>Dacă ai reclamații privind protecția datelor tale, poți depune o plângere la:</p>

                    <div class="gcs-gdpr-info-box">
                        <p><strong>Autoritatea Națională de Supraveghere a Prelucrării Datelor cu Caracter Personal (ANSPDCP)</strong></p>
                        <p><strong>Website:</strong> www.dataprotection.ro</p>
                        <p><strong>Email:</strong> contact@dataprotection.ro</p>
                        <p><strong>Adresă:</strong> București, Str. Știrbei Vodă, Nr. 14, Sector 1</p>
                        <p><strong>Telefon:</strong> +40 (0)21 308 3600</p>
                    </div>

                    <p>NU pierzi alte drepturi legale prin depunerea unei plângeri.</p>

                    <h2>15. Dispoziții Finale</h2>
                    <ul>
                        <li>Legea aplicabilă: Legile României</li>
                        <li>Versiunea în limba engleză (dacă există) este pentru referință; versiunea în limba română prăvalează</li>
                        <li>Dacă o parte a politicii e nulă, restul rămâne în vigoare</li>
                    </ul>

                </div>
            </div>
        </section>

    </div>

    <style>
        /* ==================== RESET ==================== */
        .gcs-gdpr-wrapper {
            all: initial !important;
            display: block !important;
        }

        .gcs-gdpr-wrapper *,
        .gcs-gdpr-wrapper *::before,
        .gcs-gdpr-wrapper *::after {
            box-sizing: border-box !important;
        }

        .gcs-gdpr-wrapper,
        .gcs-gdpr-wrapper * {
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif !important;
        }

        /* ==================== HEADER ==================== */
        .gcs-gdpr-header {
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

        .gcs-gdpr-header.scrolled {
            background-color: #ffffff !important;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06) !important;
            padding-top: 0.75rem !important;
            padding-bottom: 0.75rem !important;
        }

        .gcs-gdpr-container {
            width: 100% !important;
            max-width: 80rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }

        .gcs-gdpr-header-content {
            display: flex !important;
            align-items: center !important;
            justify-content: space-between !important;
        }

        /* ==================== LOGO ==================== */
        .gcs-gdpr-logo-btn {
            display: inline-flex !important;
            align-items: center !important;
            text-decoration: none !important;
            cursor: pointer !important;
            position: relative !important;
            height: 3rem !important;
        }

        .gcs-gdpr-logo-img {
            height: 3rem !important;
            width: auto !important;
            transition-property: opacity !important;
            transition-duration: 300ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            display: block !important;
        }

        .gcs-gdpr-logo-white {
            opacity: 1 !important;
            position: relative !important;
        }

        .gcs-gdpr-header.scrolled .gcs-gdpr-logo-white {
            opacity: 0 !important;
        }

        .gcs-gdpr-logo-blue {
            opacity: 0 !important;
            position: absolute !important;
            top: 0 !important;
            left: 0 !important;
        }

        .gcs-gdpr-header.scrolled .gcs-gdpr-logo-blue {
            opacity: 1 !important;
        }

        /* ==================== NAVIGATION ==================== */
        .gcs-gdpr-nav-desktop {
            display: none !important;
        }

        @media (min-width: 768px) {
            .gcs-gdpr-nav-desktop {
                display: flex !important;
                align-items: center !important;
                gap: 2rem !important;
            }
        }

        .gcs-gdpr-nav-link {
            transition-property: color !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            color: #ffffff !important;
            text-decoration: none !important;
            font-size: 1rem !important;
        }

        .gcs-gdpr-nav-link:hover {
            color: #0066CC !important;
        }

        .gcs-gdpr-header.scrolled .gcs-gdpr-nav-link {
            color: #374151 !important;
        }

        /* ==================== CTA BUTTON ==================== */
        .gcs-gdpr-cta-wrapper {
            display: none !important;
        }

        @media (min-width: 768px) {
            .gcs-gdpr-cta-wrapper {
                display: block !important;
            }
        }

        .gcs-gdpr-btn-primary {
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

        .gcs-gdpr-btn-primary:hover {
            background-color: #0052A3 !important;
        }

        .gcs-gdpr-btn-full {
            width: 100% !important;
        }

        /* ==================== MOBILE MENU ==================== */
        .gcs-gdpr-mobile-toggle {
            display: flex !important;
            background: none !important;
            border: none !important;
            cursor: pointer !important;
            padding: 0.25rem !important;
        }

        @media (min-width: 768px) {
            .gcs-gdpr-mobile-toggle {
                display: none !important;
            }
        }

        .gcs-gdpr-menu-icon,
        .gcs-gdpr-close-icon {
            width: 1.5rem !important;
            height: 1.5rem !important;
            color: #ffffff !important;
            transition-property: color !important;
            transition-duration: 300ms !important;
        }

        .gcs-gdpr-header.scrolled .gcs-gdpr-menu-icon,
        .gcs-gdpr-header.scrolled .gcs-gdpr-close-icon {
            color: #003D7A !important;
        }

        .gcs-gdpr-menu-icon {
            display: block !important;
        }

        .gcs-gdpr-close-icon {
            display: none !important;
        }

        .gcs-gdpr-mobile-toggle.active .gcs-gdpr-menu-icon {
            display: none !important;
        }

        .gcs-gdpr-mobile-toggle.active .gcs-gdpr-close-icon {
            display: block !important;
        }

        .gcs-gdpr-mobile-menu {
            display: none !important;
        }

        .gcs-gdpr-mobile-menu.open {
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
            .gcs-gdpr-mobile-menu {
                display: none !important;
            }
        }

        .gcs-gdpr-mobile-link {
            color: #374151 !important;
            text-decoration: none !important;
            text-align: left !important;
            font-size: 1rem !important;
            padding: 0.5rem 0 !important;
            transition-property: color !important;
            transition-duration: 150ms !important;
        }

        .gcs-gdpr-mobile-link:hover {
            color: #0066CC !important;
        }

        /* ==================== HERO SECTION ==================== */
        .gcs-gdpr-hero {
            background-image: linear-gradient(to bottom right, #003D7A, #001f3f) !important;
            padding-top: 8rem !important;
            padding-bottom: 4rem !important;
        }

        @media (min-width: 768px) {
            .gcs-gdpr-hero {
                padding-top: 10rem !important;
                padding-bottom: 6rem !important;
            }
        }

        .gcs-gdpr-hero-content {
            max-width: 48rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
            text-align: center !important;
            color: #ffffff !important;
        }

        .gcs-gdpr-hero-title {
            color: #ffffff !important;
            margin-bottom: 1rem !important;
            font-size: 2.25rem !important;
            line-height: 2.5rem !important;
            font-weight: 700 !important;
            margin-top: 0 !important;
        }

        @media (min-width: 768px) {
            .gcs-gdpr-hero-title {
                font-size: 3rem !important;
                line-height: 1 !important;
            }
        }

        .gcs-gdpr-hero-subtitle {
            font-size: 1.125rem !important;
            line-height: 1.75rem !important;
            color: #e5e7eb !important;
            margin: 0 !important;
        }

        /* ==================== CONTENT SECTION ==================== */
        .gcs-gdpr-content-section {
            padding-top: 4rem !important;
            padding-bottom: 4rem !important;
            background-color: #ffffff !important;
        }

        @media (min-width: 768px) {
            .gcs-gdpr-content-section {
                padding-top: 6rem !important;
                padding-bottom: 6rem !important;
            }
        }

        .gcs-gdpr-content {
            max-width: 56rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .gcs-gdpr-content h2 {
            color: #003D7A !important;
            font-size: 1.875rem !important;
            line-height: 2.25rem !important;
            font-weight: 700 !important;
            margin-top: 3rem !important;
            margin-bottom: 1.5rem !important;
        }

        .gcs-gdpr-content h2:first-child {
            margin-top: 0 !important;
        }

        .gcs-gdpr-content h3 {
            color: #003D7A !important;
            font-size: 1.5rem !important;
            line-height: 2rem !important;
            font-weight: 600 !important;
            margin-top: 2rem !important;
            margin-bottom: 1rem !important;
        }

        .gcs-gdpr-content p {
            color: #374151 !important;
            font-size: 1rem !important;
            line-height: 1.75rem !important;
            margin-bottom: 1rem !important;
            margin-top: 0 !important;
        }

        .gcs-gdpr-content ul,
        .gcs-gdpr-content ol {
            color: #374151 !important;
            font-size: 1rem !important;
            line-height: 1.75rem !important;
            margin-bottom: 1rem !important;
            margin-top: 0 !important;
            padding-left: 2rem !important;
            list-style-position: outside !important;
        }

        .gcs-gdpr-content ul {
            list-style-type: disc !important;
        }

        .gcs-gdpr-content ol {
            list-style-type: decimal !important;
        }

        .gcs-gdpr-content li {
            margin-bottom: 0.5rem !important;
            padding-left: 0.5rem !important;
        }

        .gcs-gdpr-content strong {
            font-weight: 600 !important;
            color: #1f2937 !important;
        }

        .gcs-gdpr-info-box {
            background-color: #F5F7FA !important;
            border-left: 4px solid #0066CC !important;
            padding: 1.5rem !important;
            margin-top: 1.5rem !important;
            margin-bottom: 1.5rem !important;
            border-radius: 0.5rem !important;
        }

        .gcs-gdpr-info-box p {
            margin-bottom: 0.5rem !important;
        }

        .gcs-gdpr-info-box p:last-child {
            margin-bottom: 0 !important;
        }

        /* ==================== TABLES ==================== */
        .gcs-gdpr-table-wrapper {
            overflow-x: auto !important;
            margin-top: 1.5rem !important;
            margin-bottom: 1.5rem !important;
        }

        .gcs-gdpr-table {
            width: 100% !important;
            border-collapse: collapse !important;
            font-size: 0.875rem !important;
            line-height: 1.5rem !important;
        }

        .gcs-gdpr-table thead {
            background-color: #F5F7FA !important;
        }

        .gcs-gdpr-table th {
            padding: 0.75rem !important;
            text-align: left !important;
            font-weight: 600 !important;
            color: #003D7A !important;
            border-bottom: 2px solid #0066CC !important;
        }

        .gcs-gdpr-table td {
            padding: 0.75rem !important;
            border-bottom: 1px solid #e5e7eb !important;
            color: #374151 !important;
        }

        .gcs-gdpr-table tbody tr:hover {
            background-color: #f9fafb !important;
        }

        .gcs-gdpr-table tbody tr:last-child td {
            border-bottom: none !important;
        }

        @media (max-width: 768px) {
            .gcs-gdpr-table {
                font-size: 0.75rem !important;
            }

            .gcs-gdpr-table th,
            .gcs-gdpr-table td {
                padding: 0.5rem !important;
            }
        }
    </style>

    <script>
        (function() {
            if (window.gcsGdprInit) return;
            window.gcsGdprInit = true;

            const header = document.querySelector('.gcs-gdpr-header');
            const mobileToggle = document.querySelector('.gcs-gdpr-mobile-toggle');
            const mobileMenu = document.querySelector('.gcs-gdpr-mobile-menu');

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
            const mobileLinks = document.querySelectorAll('.gcs-gdpr-mobile-link');
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

add_shortcode('gcs_gdpr_page', 'gcs_gdpr_page_shortcode');

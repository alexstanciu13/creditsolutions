<?php
/**
 * Global Credit Solutions - Soluționarea Plângerilor Page
 *
 * Shortcode: [gcs_solutionare_plangeri_page]
 */

function gcs_solutionare_plangeri_page_shortcode() {
    ob_start();
    ?>

    <div class="gcs-plangeri-wrapper">

        <!-- ==================== HEADER ==================== -->
        <header class="gcs-plangeri-header">
            <div class="gcs-plangeri-container">
                <div class="gcs-plangeri-header-content">
                    <!-- Logo -->
                    <a href="<?php echo home_url(); ?>" class="gcs-plangeri-logo-btn">
                        <img
                            src="https://creditsolutions.ro/wp-content/uploads/2025/11/logo-alb.png"
                            alt="Global Credit Solutions"
                            class="gcs-plangeri-logo-img gcs-plangeri-logo-white"
                        />
                        <img
                            src="https://creditsolutions.ro/wp-content/uploads/2025/11/logo-blue.png"
                            alt="Global Credit Solutions"
                            class="gcs-plangeri-logo-img gcs-plangeri-logo-blue"
                        />
                    </a>

                    <!-- Desktop Navigation -->
                    <nav class="gcs-plangeri-nav-desktop">
                        <a href="<?php echo home_url(); ?>" class="gcs-plangeri-nav-link">Acasă</a>
                        <a href="<?php echo home_url('/despre'); ?>" class="gcs-plangeri-nav-link">Despre Noi</a>
                        <a href="<?php echo home_url('/servicii'); ?>" class="gcs-plangeri-nav-link">Servicii</a>
                        <a href="<?php echo home_url('/contact'); ?>" class="gcs-plangeri-nav-link">Contact</a>
                    </nav>

                    <!-- CTA Button Desktop -->
                    <div class="gcs-plangeri-cta-wrapper">
                        <a href="<?php echo home_url('/contact'); ?>" class="gcs-plangeri-btn-primary">Aplică Acum</a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <button class="gcs-plangeri-mobile-toggle" aria-label="Toggle menu">
                        <svg class="gcs-plangeri-menu-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="3" y1="12" x2="21" y2="12"></line>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg>
                        <svg class="gcs-plangeri-close-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>

                <!-- Mobile Menu -->
                <nav class="gcs-plangeri-mobile-menu">
                    <a href="<?php echo home_url(); ?>" class="gcs-plangeri-mobile-link">Acasă</a>
                    <a href="<?php echo home_url('/despre'); ?>" class="gcs-plangeri-mobile-link">Despre Noi</a>
                    <a href="<?php echo home_url('/servicii'); ?>" class="gcs-plangeri-mobile-link">Servicii</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="gcs-plangeri-mobile-link">Contact</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="gcs-plangeri-btn-primary gcs-plangeri-btn-full">Aplică Acum</a>
                </nav>
            </div>
        </header>

        <!-- ==================== HERO SECTION ==================== -->
        <section class="gcs-plangeri-hero">
            <div class="gcs-plangeri-container">
                <div class="gcs-plangeri-hero-content">
                    <h1 class="gcs-plangeri-hero-title">Procedura de Soluționare a Plângerilor și Reclamațiilor</h1>
                    <p class="gcs-plangeri-hero-subtitle">Data ultimei actualizări: noiembrie 2025</p>
                </div>
            </div>
        </section>

        <!-- ==================== CONTENT SECTION ==================== -->
        <section class="gcs-plangeri-content-section">
            <div class="gcs-plangeri-container">
                <div class="gcs-plangeri-content">

                    <h2>1. Introducere</h2>
                    <p>Această procedură descrie pasul-cu-pasul cum GLOBAL CREDIT SOLUTIONS SRL tratează și rezolvă plângerile și reclamațiile clienților, în conformitate cu:</p>
                    <ul>
                        <li>Legea 190/2018 - Contractele de credit pentru consumatori</li>
                        <li>Legea 127/2018 - Protecția consumatorului</li>
                        <li>Ghidul BNR - Banca Națională a României privind soluționarea plângerilor</li>
                        <li>GDPR - Pentru plângeri legate de date personale</li>
                    </ul>

                    <h2>2. Definiții</h2>

                    <h3>2.1 Plângere</h3>
                    <p>Exprimarea scrisă a nemulțumirii legată de:</p>
                    <ul>
                        <li>Serviciile noastre de intermediere</li>
                        <li>Comportamentul angajaților</li>
                        <li>Tratarea datelor personale</li>
                        <li>Încălcarea unui drept</li>
                    </ul>

                    <h3>2.2 Reclamație</h3>
                    <p>Contestarea unei decizii sau acțiuni luate de GLOBAL CREDIT SOLUTIONS SRL.</p>

                    <h3>2.3 Consumator</h3>
                    <p>Orice persoană fizică care utilizează serviciile noastre pentru scop personal (nu comercial).</p>

                    <h2>3. Drepturile Dvs. ca Consumator</h2>

                    <h3>3.1 Dreptul la Plângere</h3>
                    <p>Aveți dreptul necondiționat de a vă plânge pentru orice motiv legit.</p>

                    <h3>3.2 Dreptul la Răspuns</h3>
                    <p>Garantăm răspuns în termenul legal, cu soluție motivată.</p>

                    <h3>3.3 Dreptul la Remediere</h3>
                    <p>Dacă găsim că aveți dreptate, vom remedia situația.</p>

                    <h3>3.4 Dreptul la Confidențialitate</h3>
                    <p>Plângerea este tratată confidențial și nu va afecta serviciile ulterioare.</p>

                    <h3>3.5 Dreptul la Escaladare</h3>
                    <p>Dacă nu sunteți mulțumiți, puteți escalada la autoritățile competente.</p>

                    <h2>4. Cum Să Depuneți o Plângere</h2>

                    <h3>4.1 Metode de Depunere</h3>
                    <p>Puteți depune o plângere prin:</p>

                    <p><strong>1. EMAIL (Recomandat - cu dovadă de primire):</strong></p>
                    <ul>
                        <li>Contact: contact@creditsolutions.ro</li>
                        <li>Subject: „PLÂNGERE - [Descriere scurtă]"</li>
                        <li>Include: Nume complet, telefon, email, CNP/CUI</li>
                        <li>Descrieți problema clar</li>
                        <li>Alegeți remediul dorit</li>
                    </ul>

                    <p><strong>2. TELEFON (pentru informații inițiale):</strong></p>
                    <ul>
                        <li>0743212055 sau 0745546924</li>
                        <li>Vă vom ghida prin proces</li>
                        <li>Puteți cere trimiterea pe email a confirmării</li>
                    </ul>

                    <p><strong>3. SCRISOARE POȘTALĂ (Recomandat cu confirmare):</strong></p>
                    <ul>
                        <li>GLOBAL CREDIT SOLUTIONS SRL</li>
                        <li>București, Sectorul 1</li>
                        <li>Str. Diaconu Cornești, Nr. 53</li>
                        <li>Puneți eticheta: „PLÂNGERE - [Descriere]"</li>
                        <li>Cerut adresă de expediție cu confirmare de primire</li>
                    </ul>

                    <p><strong>4. PERSONAL LA SEDIU (După programare):</strong></p>
                    <ul>
                        <li>Contactați pentru programare: contact@creditsolutions.ro</li>
                        <li>Telefon: 0743212055</li>
                        <li>Sediu: București, Sectorul 1, Str. Diaconu Cornești, Nr. 53</li>
                    </ul>

                    <h3>4.2 Informații Necesare în Plângere</h3>
                    <p>Pentru a trata rapid plângerea, includeți:</p>
                    <ul>
                        <li>✓ Nume și Prenume - Exact cum apare în documente</li>
                        <li>✓ Telefon și Email - Pentru contact rapid</li>
                        <li>✓ CNP sau CUI - Dacă sunteți persoană juridică</li>
                        <li>✓ Data Plângerii - Ziua curentă</li>
                        <li>✓ Descrierea Problemei - Clar, concis, cu detalii relevante</li>
                        <li>✓ Referințe - Numere contract, data cererii, etc.</li>
                        <li>✓ Documente Anexate - Email-uri, printscreen, dovezi</li>
                        <li>✓ Remediul Solicitat - Ce doriți ca rezolvare?</li>
                        <li>✓ Semnătură - Pentru depuneri scrise</li>
                    </ul>

                    <h3>4.3 Format Recomandat</h3>
                    <div class="gcs-plangeri-info-box">
                        <p><strong>DEPUNERE PLÂNGERE - GLOBAL CREDIT SOLUTIONS SRL</strong></p>
                        <p>De la: [Nume Complet]</p>
                        <p>CNP: [CNP]</p>
                        <p>Telefon: [Telefon]</p>
                        <p>Email: [Email]</p>
                        <p>Data plângerii: [Data curentă]</p>
                        <p><strong>DESCRIEREA PROBLEMEI:</strong><br>[Explicați clar ce s-a întâmplat, când, cum]</p>
                        <p><strong>REFERINȚE RELEVANTE:</strong><br>
                        - Contract Nr: [dacă se aplică]<br>
                        - Data cererii: [dacă se aplică]<br>
                        - Persoane implicate: [dacă se aplică]</p>
                        <p><strong>REMEDIUL SOLICITAT:</strong><br>[Ce doriți ca soluție: retururi bani, excuze, etc.]</p>
                        <p><strong>DOCUMENTE ANEXATE:</strong><br>
                        1. [Anexă 1]<br>
                        2. [Anexă 2]</p>
                        <p>Semnătură: ___________________</p>
                        <p>Data: ___________________</p>
                    </div>

                    <h2>5. Procesul de Tratare a Plângerilor - Pas cu Pas</h2>

                    <h3>Faza 1: Înregistrare și Confirmare (3 zile lucrătoare)</h3>
                    <p><strong>Ce facem:</strong></p>
                    <ul>
                        <li>Înregistrăm plângerea în sistem cu număr unic</li>
                        <li>Verificăm dacă toate informațiile obligatorii sunt prezente</li>
                        <li>Creăm fișier de caz</li>
                        <li>Vă trimitem Confirmarea de Primire pe email/poștă cu:
                            <ul>
                                <li>Număr de înregistrare (ex: PLNG-2025-001)</li>
                                <li>Data primirii</li>
                                <li>Termenul de răspuns</li>
                            </ul>
                        </li>
                    </ul>
                    <p><strong>Termen:</strong> 3 zile lucrătoare de la primire</p>
                    <p><strong>Vă contactez prin:</strong></p>
                    <ul>
                        <li>Email (de preferință)</li>
                        <li>Telefon dacă urgent</li>
                        <li>Poștă dacă nu avem contact electronic</li>
                    </ul>

                    <h3>Faza 2: Investigație și Analizie (15 zile lucrătoare)</h3>
                    <p><strong>Ce facem:</strong></p>
                    <ul>
                        <li>Analizăm plângerea în detaliu</li>
                        <li>Colectăm documente relevante (email-uri, contracte, etc.)</li>
                        <li>Consultăm departamentul implicat</li>
                        <li>Contactăm partenerii dacă necesare</li>
                        <li>Evaluăm situația conform legislației</li>
                    </ul>
                    <p><strong>Termen:</strong> 15 zile lucrătoare (poate fi extins la 30 cu notificare)</p>
                    <p><strong>Eventualități:</strong></p>
                    <ul>
                        <li>Dacă avem nevoie de mai multă info, vă contactez</li>
                        <li>Dacă plângerea e incompletă, vă cer clarificări</li>
                        <li>Dacă e în afara competenței noastre, vă informez</li>
                    </ul>

                    <h3>Faza 3: Hotărâre și Comunicare (5 zile lucrătoare)</h3>
                    <p><strong>Ce facem:</strong></p>
                    <ul>
                        <li>Luăm o decizie finală</li>
                        <li>Redactez Răspunsul Formal cu:
                            <ul>
                                <li>Decizia (Acceptată/Respingă/Parțial)</li>
                                <li>Motivul deciziei</li>
                                <li>Referințe legale</li>
                                <li>Soluția propusă</li>
                                <li>Termenul de implementare</li>
                            </ul>
                        </li>
                    </ul>
                    <p><strong>Termen:</strong> 5 zile lucrătoare după finalizare investigație</p>
                    <p><strong>Comunicare prin:</strong></p>
                    <ul>
                        <li>Email cu confirmare de citire</li>
                        <li>Poștă pentru documente oficiale</li>
                        <li>Telefon pentru urgente</li>
                    </ul>

                    <h3>Faza 4: Implementare și Urmărire</h3>
                    <p>Dacă plângerea e acceptată:</p>
                    <ul>
                        <li>Implementez soluția imediat</li>
                        <li>Vă informez despre progres</li>
                        <li>Vă confirm finalizarea</li>
                        <li>Documentez rezultatele</li>
                    </ul>
                    <p><strong>Termen Total:</strong> 30 zile lucrătoare (sau mai mult cu notificare)</p>

                    <h2>6. Tipuri de Plângeri și Rezoluții</h2>

                    <h3>6.1 Plângeri Operaționale</h3>
                    <p><strong>Probleme:</strong> Întârzieri în răspuns, greșeli administrative, probleme tehnice</p>
                    <p><strong>Rezoluții posibile:</strong></p>
                    <ul>
                        <li>Rectificarea informațiilor</li>
                        <li>Reluarea procesului</li>
                        <li>Compensare (dacă se aplică)</li>
                    </ul>
                    <p><strong>Termen:</strong> 15-30 zile</p>

                    <h3>6.2 Plângeri Privind Protecția Datelor (GDPR)</h3>
                    <p><strong>Probleme:</strong> Acces neautorizat, ștergere date, breach, etc.</p>
                    <p><strong>Rezoluții posibile:</strong></p>
                    <ul>
                        <li>Investigare incident</li>
                        <li>Ștergerea datelor (dacă se solicită)</li>
                        <li>Notificare autorități (dacă se aplică)</li>
                        <li>Compensare pentru daune</li>
                    </ul>
                    <p><strong>Termen:</strong> 30 zile (conform GDPR)</p>

                    <h3>6.3 Plângeri Privind Serviciile de Credit</h3>
                    <p><strong>Probleme:</strong> Informații inexacte, conflikte de interese, tarifele neașteptate</p>
                    <p><strong>Rezoluții posibile:</strong></p>
                    <ul>
                        <li>Rectificare informații</li>
                        <li>Contactare instituție de credit</li>
                        <li>Refundare comisioane (dacă se aplică)</li>
                        <li>Suport pentru schimbare</li>
                    </ul>
                    <p><strong>Termen:</strong> 15-30 zile</p>

                    <h3>6.4 Plângeri Privind Marketing</h3>
                    <p><strong>Probleme:</strong> Email-uri nedorite, cookies, spam</p>
                    <p><strong>Rezoluții posibile:</strong></p>
                    <ul>
                        <li>Excludere din liste</li>
                        <li>Dezactivare cookies</li>
                        <li>Plecări din program</li>
                        <li>Compensare (dacă se aplică)</li>
                    </ul>
                    <p><strong>Termen:</strong> 5-15 zile</p>

                    <h2>7. Decizia și Remediile Posibile</h2>

                    <h3>7.1 Tipuri de Decizii</h3>

                    <p><strong>1. PLÂNGERE ACCEPTATĂ</strong></p>
                    <ul>
                        <li>Suntem cu voi de acord</li>
                        <li>Vă oferim remediul solicitat</li>
                        <li>Iau măsuri corective</li>
                    </ul>

                    <p><strong>2. PLÂNGERE RESPINGĂ</strong></p>
                    <ul>
                        <li>Investigația arată că nu avem greșeli</li>
                        <li>Explicăm de ce în detaliu</li>
                        <li>Vă dau referințe legale</li>
                        <li>Vă informez pe cale de escaladare</li>
                    </ul>

                    <p><strong>3. PLÂNGERE PARȚIAL ACCEPTATĂ</strong></p>
                    <ul>
                        <li>Suntem de acord pe unele puncte</li>
                        <li>Nu pe altele</li>
                        <li>Vă ofrim soluție pentru punctele acceptate</li>
                        <li>Explicăm motivele refuzului pentru restul</li>
                    </ul>

                    <h3>7.2 Remediile Disponibile</h3>

                    <div class="gcs-plangeri-table-wrapper">
                        <table class="gcs-plangeri-table">
                            <thead>
                                <tr>
                                    <th>Tip Remediu</th>
                                    <th>Descriere</th>
                                    <th>Exemple</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Scuze Formale</td>
                                    <td>Recunoaștere greșelii și regret</td>
                                    <td>Scrisoare oficială de scuze</td>
                                </tr>
                                <tr>
                                    <td>Rectificare</td>
                                    <td>Corectarea informațiilor</td>
                                    <td>Actualizare bază de date, comunicare corectă</td>
                                </tr>
                                <tr>
                                    <td>Refundare</td>
                                    <td>Returnarea banilor</td>
                                    <td>Comisioane, taxe supraplătite</td>
                                </tr>
                                <tr>
                                    <td>Compensare</td>
                                    <td>Despăgubire pentru inconveniente</td>
                                    <td>Sume pentru daune suferite</td>
                                </tr>
                                <tr>
                                    <td>Măsuri Preventive</td>
                                    <td>Schimbare procedură pentru viitor</td>
                                    <td>Trening personal, sistem nou</td>
                                </tr>
                                <tr>
                                    <td>Reluare Proces</td>
                                    <td>Reprocessare cererii/aplicației</td>
                                    <td>De la zero cu informații corecte</td>
                                </tr>
                                <tr>
                                    <td>Furnizare Informații</td>
                                    <td>Clarificări și explicații</td>
                                    <td>Răspunsuri detaliate la întrebări</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h2>8. Termene și Prorogi</h2>

                    <h3>8.1 Termenele Standard</h3>

                    <div class="gcs-plangeri-table-wrapper">
                        <table class="gcs-plangeri-table">
                            <thead>
                                <tr>
                                    <th>Etapă</th>
                                    <th>Termen</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Confirmare Primire</td>
                                    <td>3 zile lucrătoare</td>
                                </tr>
                                <tr>
                                    <td>Investigație</td>
                                    <td>15 zile lucrătoare</td>
                                </tr>
                                <tr>
                                    <td>Răspuns Final</td>
                                    <td>5 zile lucrătoare după investigație</td>
                                </tr>
                                <tr>
                                    <td><strong>TOTAL</strong></td>
                                    <td><strong>30 zile lucrătoare (maxim)</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h3>8.2 Prorogi</h3>
                    <p>În cazuri complexe, proroga pot fi acordate:</p>
                    <ul>
                        <li>Maximum + 30 zile suplimentare</li>
                        <li>Voi fi notificat în avans</li>
                        <li>Va primi o nouă estimare de termen</li>
                    </ul>

                    <h3>8.3 Cazuri Urgente</h3>
                    <p>Dacă plângerea e urgentă:</p>
                    <ul>
                        <li>Contactați telefonic: 0743212055</li>
                        <li>Menționați „URGENT" în subject</li>
                        <li>Prioritizez după natura urgență</li>
                    </ul>

                    <h2>9. Escaladare și Recurență</h2>

                    <h3>9.1 Insatisfacție cu Răspunsul</h3>
                    <p>Dacă nu sunteți mulțumiți cu răspunsul nostru, aveți următoarele opțiuni:</p>

                    <p><strong>1. CERERE DE RECONSIDERARE</strong></p>
                    <ul>
                        <li>Contactați din nou în 30 de zile</li>
                        <li>Prezentați argumente noi</li>
                        <li>Vă reevaluez cazul</li>
                        <li>Termen: + 15 zile</li>
                    </ul>

                    <p><strong>2. MEDIERE (Soluționare Alternativă)</strong></p>
                    <ul>
                        <li>Contact: Centrul de Mediere din București</li>
                        <li>Mediatorul neutru va ajuta la acord</li>
                        <li>Cost redus sau gratuit</li>
                        <li>Confidențial</li>
                    </ul>

                    <p><strong>3. ORGANISME EXTERIOARE</strong></p>

                    <p><strong>A. Autoritatea Națională de Supraveghere (ANSPDCP) - Pentru GDPR</strong></p>
                    <div class="gcs-plangeri-info-box">
                        <p><strong>Website:</strong> www.dataprotection.ro</p>
                        <p><strong>Email:</strong> contact@dataprotection.ro</p>
                        <p><strong>Telefon:</strong> +40 (0)21 308 3600</p>
                        <p><strong>Pentru:</strong> Plângeri privind datele personale</p>
                    </div>

                    <p><strong>B. Banca Națională a României (BNR) - Pentru Credit</strong></p>
                    <div class="gcs-plangeri-info-box">
                        <p><strong>Website:</strong> www.bnr.ro</p>
                        <p><strong>Contacte:</strong> Complaintbox@bnr.ro</p>
                        <p><strong>Pentru:</strong> Plângeri privind intermediari credite</p>
                    </div>

                    <p><strong>C. Instanțele Judecătorești</strong></p>
                    <ul>
                        <li>Tribunalul de Comerț București (pentru litigii comerciale)</li>
                        <li>Instanța de primă instanță (pentru litigii cu consumatori)</li>
                        <li>Termen: 1-3 ani (procesele sunt lungi)</li>
                    </ul>

                    <h3>9.2 Dreptul la Acționare Legală</h3>
                    <p>Nu renunțați la dreptul de a acționa în justiție. Soluționarea internă nu anulează drepturile legale.</p>

                    <h2>10. Confidențialitate și Protecție</h2>

                    <h3>10.1 Confidențialitate Plângerii</h3>
                    <ul>
                        <li>Plângerea și răspunsul sunt confidențiale</li>
                        <li>Nu le vom partaja cu terți fără consimțământul dvs.</li>
                        <li>Excepție: Autorități legale sau instanțe judecătorești</li>
                        <li>Documentele sunt stocate sigur</li>
                    </ul>

                    <h3>10.2 Protecția Împotriva Represalii</h3>
                    <ul>
                        <li>NU vom prejudicia serviciile viitoare din cauza unei plângeri</li>
                        <li>Aveți dreptul să vă plângeți fără teama</li>
                        <li>Orice represalii sunt ilegale și pot fi raportate</li>
                    </ul>

                    <h2>11. Responsabilitatea Noastră</h2>

                    <h3>11.1 Standarde de Serviciu</h3>
                    <p>Garantez:</p>
                    <ul>
                        <li>✓ Tratare echitabilă și imparțială</li>
                        <li>✓ Răspunsuri în termene legale</li>
                        <li>✓ Decizii motivate și bazate pe fapte</li>
                        <li>✓ Confidențialitate maximă</li>
                        <li>✓ Remedii reale, nu doar scuze</li>
                    </ul>

                    <h3>11.2 Escaladare Rapidă</h3>
                    <p>Dacă nu pot rezolva, vă vor escalada la nivel superior.</p>

                    <h2>12. Statistici și Rapoarte</h2>

                    <h3>12.1 Raport Public</h3>
                    <p>O dată pe an, publicez:</p>
                    <ul>
                        <li>Numărul de plângeri primite</li>
                        <li>Tipurile de plângeri</li>
                        <li>Ritmul de rezolvare</li>
                        <li>Procentul acceptării</li>
                    </ul>
                    <p>Aceasta asigură transparență și responsabilitate.</p>

                    <h2>13. Contact și Informații Finale</h2>

                    <h3>13.1 Unde Să Ne Contactați</h3>
                    <p><strong>Pentru Plângeri și Reclamații:</strong></p>

                    <div class="gcs-plangeri-info-box">
                        <p><strong>Email:</strong> contact@creditsolutions.ro</p>
                        <p><strong>Telefon:</strong> 0743212055, 0745546924</p>
                        <p><strong>Adresă:</strong> București, Sectorul 1, Str. Diaconu Cornești, Nr. 53</p>
                    </div>

                    <p><strong>Orele de Funcționare:</strong></p>
                    <ul>
                        <li>Luni - Vineri: 09:00 - 18:00</li>
                        <li>Sâmbătă - Duminică: Doar emergențe prin email</li>
                    </ul>

                    <h3>13.2 De Ținut Minte</h3>
                    <ul>
                        <li>Păstrați copii ale plângerilor</li>
                        <li>Notați numeroasele de înregistrare</li>
                        <li>Urmăriți termenele</li>
                        <li>Escaladează dacă necesar</li>
                    </ul>

                </div>
            </div>
        </section>

    </div>

    <style>
        /* ==================== RESET ==================== */
        .gcs-plangeri-wrapper {
            all: initial !important;
            display: block !important;
        }

        .gcs-plangeri-wrapper *,
        .gcs-plangeri-wrapper *::before,
        .gcs-plangeri-wrapper *::after {
            box-sizing: border-box !important;
        }

        .gcs-plangeri-wrapper,
        .gcs-plangeri-wrapper * {
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif !important;
        }

        /* ==================== HEADER ==================== */
        .gcs-plangeri-header {
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

        .gcs-plangeri-header.scrolled {
            background-color: #ffffff !important;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06) !important;
            padding-top: 0.75rem !important;
            padding-bottom: 0.75rem !important;
        }

        .gcs-plangeri-container {
            width: 100% !important;
            max-width: 80rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }

        .gcs-plangeri-header-content {
            display: flex !important;
            align-items: center !important;
            justify-content: space-between !important;
        }

        /* ==================== LOGO ==================== */
        .gcs-plangeri-logo-btn {
            display: inline-flex !important;
            align-items: center !important;
            text-decoration: none !important;
            cursor: pointer !important;
            position: relative !important;
            height: 3rem !important;
        }

        .gcs-plangeri-logo-img {
            height: 3rem !important;
            width: auto !important;
            transition-property: opacity !important;
            transition-duration: 300ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            display: block !important;
        }

        /* White logo - visible by default, hidden when scrolled */
        .gcs-plangeri-logo-white {
            opacity: 1 !important;
            position: relative !important;
        }

        .gcs-plangeri-header.scrolled .gcs-plangeri-logo-white {
            opacity: 0 !important;
        }

        /* Blue logo - hidden by default, visible when scrolled */
        .gcs-plangeri-logo-blue {
            opacity: 0 !important;
            position: absolute !important;
            top: 0 !important;
            left: 0 !important;
        }

        .gcs-plangeri-header.scrolled .gcs-plangeri-logo-blue {
            opacity: 1 !important;
        }

        /* ==================== NAVIGATION ==================== */
        .gcs-plangeri-nav-desktop {
            display: none !important;
        }

        @media (min-width: 768px) {
            .gcs-plangeri-nav-desktop {
                display: flex !important;
                align-items: center !important;
                gap: 2rem !important;
            }
        }

        .gcs-plangeri-nav-link {
            transition-property: color !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            color: #ffffff !important;
            text-decoration: none !important;
            font-size: 1rem !important;
        }

        .gcs-plangeri-nav-link:hover {
            color: #0066CC !important;
        }

        .gcs-plangeri-header.scrolled .gcs-plangeri-nav-link {
            color: #374151 !important;
        }

        /* ==================== CTA BUTTON ==================== */
        .gcs-plangeri-cta-wrapper {
            display: none !important;
        }

        @media (min-width: 768px) {
            .gcs-plangeri-cta-wrapper {
                display: block !important;
            }
        }

        .gcs-plangeri-btn-primary {
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

        .gcs-plangeri-btn-primary:hover {
            background-color: #0052A3 !important;
        }

        .gcs-plangeri-btn-full {
            width: 100% !important;
        }

        /* ==================== MOBILE MENU ==================== */
        .gcs-plangeri-mobile-toggle {
            display: flex !important;
            background: none !important;
            border: none !important;
            cursor: pointer !important;
            padding: 0.25rem !important;
        }

        @media (min-width: 768px) {
            .gcs-plangeri-mobile-toggle {
                display: none !important;
            }
        }

        .gcs-plangeri-menu-icon,
        .gcs-plangeri-close-icon {
            width: 1.5rem !important;
            height: 1.5rem !important;
            color: #ffffff !important;
            transition-property: color !important;
            transition-duration: 300ms !important;
        }

        .gcs-plangeri-header.scrolled .gcs-plangeri-menu-icon,
        .gcs-plangeri-header.scrolled .gcs-plangeri-close-icon {
            color: #003D7A !important;
        }

        .gcs-plangeri-menu-icon {
            display: block !important;
        }

        .gcs-plangeri-close-icon {
            display: none !important;
        }

        .gcs-plangeri-mobile-toggle.active .gcs-plangeri-menu-icon {
            display: none !important;
        }

        .gcs-plangeri-mobile-toggle.active .gcs-plangeri-close-icon {
            display: block !important;
        }

        .gcs-plangeri-mobile-menu {
            display: none !important;
        }

        .gcs-plangeri-mobile-menu.open {
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
            .gcs-plangeri-mobile-menu {
                display: none !important;
            }
        }

        .gcs-plangeri-mobile-link {
            color: #374151 !important;
            text-decoration: none !important;
            text-align: left !important;
            font-size: 1rem !important;
            padding: 0.5rem 0 !important;
            transition-property: color !important;
            transition-duration: 150ms !important;
        }

        .gcs-plangeri-mobile-link:hover {
            color: #0066CC !important;
        }

        /* ==================== HERO SECTION ==================== */
        .gcs-plangeri-hero {
            background-image: linear-gradient(to bottom right, #003D7A, #001f3f) !important;
            padding-top: 8rem !important;
            padding-bottom: 4rem !important;
        }

        @media (min-width: 768px) {
            .gcs-plangeri-hero {
                padding-top: 10rem !important;
                padding-bottom: 6rem !important;
            }
        }

        .gcs-plangeri-hero-content {
            max-width: 48rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
            text-align: center !important;
            color: #ffffff !important;
        }

        .gcs-plangeri-hero-title {
            color: #ffffff !important;
            margin-bottom: 1rem !important;
            font-size: 2.25rem !important;
            line-height: 2.5rem !important;
            font-weight: 700 !important;
            margin-top: 0 !important;
        }

        @media (min-width: 768px) {
            .gcs-plangeri-hero-title {
                font-size: 3rem !important;
                line-height: 1 !important;
            }
        }

        .gcs-plangeri-hero-subtitle {
            font-size: 1.125rem !important;
            line-height: 1.75rem !important;
            color: #e5e7eb !important;
            margin: 0 !important;
        }

        /* ==================== CONTENT SECTION ==================== */
        .gcs-plangeri-content-section {
            padding-top: 4rem !important;
            padding-bottom: 4rem !important;
            background-color: #ffffff !important;
        }

        @media (min-width: 768px) {
            .gcs-plangeri-content-section {
                padding-top: 6rem !important;
                padding-bottom: 6rem !important;
            }
        }

        .gcs-plangeri-content {
            max-width: 56rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .gcs-plangeri-content h2 {
            color: #003D7A !important;
            font-size: 1.875rem !important;
            line-height: 2.25rem !important;
            font-weight: 700 !important;
            margin-top: 3rem !important;
            margin-bottom: 1.5rem !important;
        }

        .gcs-plangeri-content h2:first-child {
            margin-top: 0 !important;
        }

        .gcs-plangeri-content h3 {
            color: #003D7A !important;
            font-size: 1.5rem !important;
            line-height: 2rem !important;
            font-weight: 600 !important;
            margin-top: 2rem !important;
            margin-bottom: 1rem !important;
        }

        .gcs-plangeri-content p {
            color: #374151 !important;
            font-size: 1rem !important;
            line-height: 1.75rem !important;
            margin-bottom: 1rem !important;
            margin-top: 0 !important;
        }

        .gcs-plangeri-content ul,
        .gcs-plangeri-content ol {
            color: #374151 !important;
            font-size: 1rem !important;
            line-height: 1.75rem !important;
            margin-bottom: 1rem !important;
            margin-top: 0 !important;
            padding-left: 2rem !important;
            list-style-position: outside !important;
        }

        .gcs-plangeri-content ul {
            list-style-type: disc !important;
        }

        .gcs-plangeri-content ol {
            list-style-type: decimal !important;
        }

        .gcs-plangeri-content li {
            margin-bottom: 0.5rem !important;
            padding-left: 0.5rem !important;
        }

        .gcs-plangeri-content ul ul {
            margin-top: 0.5rem !important;
            margin-bottom: 0.5rem !important;
        }

        .gcs-plangeri-content strong {
            font-weight: 600 !important;
            color: #1f2937 !important;
        }

        .gcs-plangeri-info-box {
            background-color: #F5F7FA !important;
            border-left: 4px solid #0066CC !important;
            padding: 1.5rem !important;
            margin-top: 1.5rem !important;
            margin-bottom: 1.5rem !important;
            border-radius: 0.5rem !important;
        }

        .gcs-plangeri-info-box p {
            margin-bottom: 0.5rem !important;
        }

        .gcs-plangeri-info-box p:last-child {
            margin-bottom: 0 !important;
        }

        /* ==================== TABLES ==================== */
        .gcs-plangeri-table-wrapper {
            overflow-x: auto !important;
            margin-top: 1.5rem !important;
            margin-bottom: 1.5rem !important;
        }

        .gcs-plangeri-table {
            width: 100% !important;
            border-collapse: collapse !important;
            font-size: 0.875rem !important;
            line-height: 1.5rem !important;
        }

        .gcs-plangeri-table thead {
            background-color: #F5F7FA !important;
        }

        .gcs-plangeri-table th {
            padding: 0.75rem !important;
            text-align: left !important;
            font-weight: 600 !important;
            color: #003D7A !important;
            border-bottom: 2px solid #0066CC !important;
        }

        .gcs-plangeri-table td {
            padding: 0.75rem !important;
            border-bottom: 1px solid #e5e7eb !important;
            color: #374151 !important;
        }

        .gcs-plangeri-table tbody tr:hover {
            background-color: #f9fafb !important;
        }

        .gcs-plangeri-table tbody tr:last-child td {
            border-bottom: none !important;
        }

        @media (max-width: 768px) {
            .gcs-plangeri-table {
                font-size: 0.75rem !important;
            }

            .gcs-plangeri-table th,
            .gcs-plangeri-table td {
                padding: 0.5rem !important;
            }
        }
    </style>

    <script>
        (function() {
            if (window.gcsPlangeriInit) return;
            window.gcsPlangeriInit = true;

            const header = document.querySelector('.gcs-plangeri-header');
            const mobileToggle = document.querySelector('.gcs-plangeri-mobile-toggle');
            const mobileMenu = document.querySelector('.gcs-plangeri-mobile-menu');

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
            const mobileLinks = document.querySelectorAll('.gcs-plangeri-mobile-link');
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

add_shortcode('gcs_solutionare_plangeri_page', 'gcs_solutionare_plangeri_page_shortcode');

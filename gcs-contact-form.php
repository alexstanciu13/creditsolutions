<?php
/**
 * Global Credit Solutions - Contact Form Shortcode
 *
 * Shortcode: [gcs_contact_form]
 *
 * EXACT FIGMA DESIGN - Functional contact form
 * - Sends emails to contact@creditsolutions.ro
 * - All Tailwind classes converted precisely
 * - WordPress nonce security
 * - Full validation and sanitization
 */

function gcs_contact_form_shortcode() {
    $success_message = '';
    $error_message = '';

    // Handle form submission
    if (isset($_POST['gcs_contact_submit']) && isset($_POST['gcs_contact_nonce'])) {
        if (wp_verify_nonce($_POST['gcs_contact_nonce'], 'gcs_contact_form')) {
            // Sanitize inputs
            $name = sanitize_text_field($_POST['gcs_name']);
            $cnp = sanitize_text_field($_POST['gcs_cnp']);
            $email = sanitize_email($_POST['gcs_email']);
            $credit_type = sanitize_text_field($_POST['gcs_credit_type']);
            $message = sanitize_textarea_field($_POST['gcs_message']);

            // Validate required fields
            if (empty($name) || empty($cnp) || empty($credit_type)) {
                $error_message = 'Vă rugăm completați toate câmpurile obligatorii.';
            } elseif (!empty($email) && !is_email($email)) {
                $error_message = 'Vă rugăm introduceți o adresă de email validă.';
            } else {
                // Prepare email
                $to = 'contact@creditsolutions.ro';
                $domain = parse_url(home_url(), PHP_URL_HOST);
                $from_email = 'wordpress@' . $domain;

                // Subject line with clear identifier
                $subject = '[Contact Form] ' . $credit_type . ' - ' . $name;

                // Email body with clear formatting
                $email_body = "Formular de contact - Global Credit Solutions\n";
                $email_body .= "==========================================\n\n";
                $email_body .= "Nume complet: {$name}\n";
                $email_body .= "CNP/CUI: {$cnp}\n";
                $email_body .= "Email: " . (!empty($email) ? $email : 'Nu a fost furnizat') . "\n";
                $email_body .= "Tip Credit: {$credit_type}\n";
                $email_body .= "Data: " . date('d.m.Y H:i:s') . "\n\n";
                $email_body .= "Mesaj:\n";
                $email_body .= "==========================================\n";
                $email_body .= $message . "\n";
                $email_body .= "==========================================\n\n";
                $email_body .= "Acest mesaj a fost trimis prin formularul de contact de pe www.creditsolutions.ro\n";

                // Improved headers to avoid spam filters
                $headers = array(
                    'Content-Type: text/plain; charset=UTF-8',
                    'From: Global Credit Solutions <' . $from_email . '>',
                    'Return-Path: ' . $from_email,
                    'X-Mailer: PHP/' . phpversion(),
                    'X-Priority: 3',
                    'Message-ID: <' . time() . '-' . md5($name . $email) . '@' . $domain . '>',
                    'List-Unsubscribe: <mailto:contact@creditsolutions.ro>',
                );

                // Add Reply-To with customer email if provided
                if (!empty($email)) {
                    $headers[] = 'Reply-To: ' . $name . ' <' . $email . '>';
                }

                // Send email
                if (wp_mail($to, $subject, $email_body, $headers)) {
                    $success_message = 'Formularul a fost trimis cu succes! Vă vom contacta în curând.';
                } else {
                    $error_message = 'A apărut o eroare la trimiterea formularului. Vă rugăm încercați din nou.';
                }
            }
        } else {
            $error_message = 'Eroare de securitate. Vă rugăm reîncărcați pagina și încercați din nou.';
        }
    }

    ob_start();
    ?>

    <div class="gcs-cf-wrapper">
        <!-- py-16 bg-white -->
        <section id="contact-form" class="gcs-cf-section">
            <!-- container mx-auto px-4 -->
            <div class="gcs-cf-container">
                <!-- max-w-2xl mx-auto -->
                <div class="gcs-cf-form-wrapper">
                    <!-- bg-white p-8 rounded-xl shadow-lg border border-gray-200 -->
                    <div class="gcs-cf-card">

                        <!-- Header: flex items-center gap-3 mb-6 -->
                        <div class="gcs-cf-header">
                            <!-- flex items-center justify-center w-12 h-12 bg-[#0066CC]/10 rounded-lg -->
                            <div class="gcs-cf-icon-wrapper">
                                <!-- w-6 h-6 text-[#0066CC] -->
                                <svg class="gcs-cf-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                </svg>
                            </div>
                            <!-- text-[#003D7A] text-xl md:text-2xl -->
                            <h2 class="gcs-cf-title">Aplică pentru un Credit</h2>
                        </div>

                        <?php if ($success_message): ?>
                            <!-- Success message -->
                            <div class="gcs-cf-success">
                                <svg class="gcs-cf-success-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
                                    <path d="m9 12 2 2 4-4"></path>
                                </svg>
                                <p><?php echo esc_html($success_message); ?></p>
                            </div>
                        <?php endif; ?>

                        <?php if ($error_message): ?>
                            <!-- Error message -->
                            <div class="gcs-cf-error">
                                <svg class="gcs-cf-error-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" x2="12" y1="8" y2="12"></line>
                                    <line x1="12" x2="12.01" y1="16" y2="16"></line>
                                </svg>
                                <p><?php echo esc_html($error_message); ?></p>
                            </div>
                        <?php endif; ?>

                        <!-- Form: space-y-6 -->
                        <form method="post" class="gcs-cf-form">
                            <?php wp_nonce_field('gcs_contact_form', 'gcs_contact_nonce'); ?>

                            <!-- Name field -->
                            <div class="gcs-cf-field">
                                <!-- Label -->
                                <label for="gcs-name" class="gcs-cf-label">Nume complet *</label>
                                <!-- Input: mt-2 -->
                                <input
                                    type="text"
                                    id="gcs-name"
                                    name="gcs_name"
                                    placeholder="Ionescu Ion"
                                    required
                                    class="gcs-cf-input"
                                    value="<?php echo isset($_POST['gcs_name']) ? esc_attr($_POST['gcs_name']) : ''; ?>"
                                />
                            </div>

                            <!-- CNP field -->
                            <div class="gcs-cf-field">
                                <label for="gcs-cnp" class="gcs-cf-label">CNP/CUI *</label>
                                <input
                                    type="text"
                                    id="gcs-cnp"
                                    name="gcs_cnp"
                                    placeholder="1234567890123"
                                    required
                                    class="gcs-cf-input"
                                    value="<?php echo isset($_POST['gcs_cnp']) ? esc_attr($_POST['gcs_cnp']) : ''; ?>"
                                />
                            </div>

                            <!-- Email field -->
                            <div class="gcs-cf-field">
                                <label for="gcs-email" class="gcs-cf-label">Email</label>
                                <input
                                    type="email"
                                    id="gcs-email"
                                    name="gcs_email"
                                    placeholder="ion@example.com"
                                    class="gcs-cf-input"
                                    value="<?php echo isset($_POST['gcs_email']) ? esc_attr($_POST['gcs_email']) : ''; ?>"
                                />
                            </div>

                            <!-- Credit Type field -->
                            <div class="gcs-cf-field">
                                <label for="gcs-credit-type" class="gcs-cf-label">Tipuri de credit *</label>
                                <div class="gcs-cf-select-wrapper">
                                    <select id="gcs-credit-type" name="gcs_credit_type" required class="gcs-cf-select">
                                        <option value="">Selectează tipul de credit</option>
                                        <option value="Credite de Nevoi Personale" <?php echo (isset($_POST['gcs_credit_type']) && $_POST['gcs_credit_type'] === 'Credite de Nevoi Personale') ? 'selected' : ''; ?>>Credite de Nevoi Personale</option>
                                        <option value="Credit Ipotecar/Prima Casă" <?php echo (isset($_POST['gcs_credit_type']) && $_POST['gcs_credit_type'] === 'Credit Ipotecar/Prima Casă') ? 'selected' : ''; ?>>Credit Ipotecar/Prima Casă</option>
                                        <option value="Credite Auto/Leasing" <?php echo (isset($_POST['gcs_credit_type']) && $_POST['gcs_credit_type'] === 'Credite Auto/Leasing') ? 'selected' : ''; ?>>Credite Auto/Leasing</option>
                                        <option value="Credite/Linii de Credit pentru Persoane Juridice" <?php echo (isset($_POST['gcs_credit_type']) && $_POST['gcs_credit_type'] === 'Credite/Linii de Credit pentru Persoane Juridice') ? 'selected' : ''; ?>>Credite/Linii de Credit pentru Persoane Juridice</option>
                                        <option value="Refinanțări de Credit" <?php echo (isset($_POST['gcs_credit_type']) && $_POST['gcs_credit_type'] === 'Refinanțări de Credit') ? 'selected' : ''; ?>>Refinanțări de Credit</option>
                                        <option value="Alte Servicii" <?php echo (isset($_POST['gcs_credit_type']) && $_POST['gcs_credit_type'] === 'Alte Servicii') ? 'selected' : ''; ?>>Alte Servicii</option>
                                    </select>
                                    <svg class="gcs-cf-select-arrow" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                        <path d="M3 4.5L6 7.5L9 4.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>

                            <!-- Message field -->
                            <div class="gcs-cf-field">
                                <label for="gcs-message" class="gcs-cf-label">Mesaj</label>
                                <textarea
                                    id="gcs-message"
                                    name="gcs_message"
                                    rows="5"
                                    placeholder="Descrie-ne nevoile tale și cum te putem ajuta..."
                                    class="gcs-cf-textarea"
                                ><?php echo isset($_POST['gcs_message']) ? esc_textarea($_POST['gcs_message']) : ''; ?></textarea>
                            </div>

                            <!-- Submit button: w-full bg-[#0066CC] hover:bg-[#0052A3] text-white size="lg" -->
                            <button type="submit" name="gcs_contact_submit" class="gcs-cf-submit">
                                <!-- mr-2 w-5 h-5 -->
                                <svg class="gcs-cf-submit-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="22" x2="11" y1="2" y2="13"></line>
                                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                </svg>
                                Trimite Cererea
                            </button>

                            <!-- Privacy notice: text-sm text-gray-600 text-center -->
                            <p class="gcs-cf-privacy">
                                Prin trimiterea formularului, ești de acord cu
                                <a href="/gdpr" class="gcs-cf-privacy-link">Politica de Confidențialitate</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <style>
        /* ==================== RESET ==================== */
        .gcs-cf-wrapper {
            all: initial !important;
            display: block !important;
        }

        .gcs-cf-wrapper *,
        .gcs-cf-wrapper *::before,
        .gcs-cf-wrapper *::after {
            box-sizing: border-box !important;
            margin: 0 !important;
            padding: 0 !important;
            border: 0 !important;
            font-size: 100% !important;
            font: inherit !important;
            vertical-align: baseline !important;
        }

        /* SVG reset */
        .gcs-cf-wrapper svg {
            display: inline-block !important;
            vertical-align: middle !important;
            overflow: visible !important;
        }

        /* Remove all link styles */
        .gcs-cf-wrapper a {
            background-color: transparent !important;
            text-decoration: none !important;
        }

        /* Remove list styles */
        .gcs-cf-wrapper ul,
        .gcs-cf-wrapper ol {
            list-style: none !important;
        }

        /* Remove button/input defaults */
        .gcs-cf-wrapper button,
        .gcs-cf-wrapper input,
        .gcs-cf-wrapper select,
        .gcs-cf-wrapper textarea {
            font-family: inherit !important;
            font-size: 100% !important;
            line-height: 1.15 !important;
            margin: 0 !important;
            padding: 0 !important;
            border: 0 !important;
            background: none !important;
        }

        /* Remove button defaults */
        .gcs-cf-wrapper button {
            overflow: visible !important;
            text-transform: none !important;
            -webkit-appearance: button !important;
        }

        /* Global font */
        .gcs-cf-wrapper,
        .gcs-cf-wrapper * {
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif !important;
            text-rendering: optimizeLegibility !important;
            -webkit-font-smoothing: antialiased !important;
            -moz-osx-font-smoothing: grayscale !important;
        }

        /* ==================== SECTION ==================== */
        /* py-16 bg-white */
        .gcs-cf-section {
            padding-top: 4rem !important; /* py-16 */
            padding-bottom: 4rem !important;
            background-color: #ffffff !important;
        }

        /* ==================== CONTAINER ==================== */
        /* container mx-auto px-4 */
        .gcs-cf-container {
            width: 100% !important;
            max-width: 80rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }

        /* max-w-2xl mx-auto */
        .gcs-cf-form-wrapper {
            max-width: 42rem !important; /* max-w-2xl */
            margin-left: auto !important;
            margin-right: auto !important;
        }

        /* ==================== CARD ==================== */
        /* bg-white p-8 rounded-xl shadow-lg border border-gray-200 */
        .gcs-cf-card {
            background-color: #ffffff !important;
            padding: 2rem !important; /* p-8 */
            border-radius: 0.75rem !important; /* rounded-xl */
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05) !important; /* shadow-lg */
            border: 1px solid #e5e7eb !important; /* border-gray-200 */
        }

        /* ==================== HEADER ==================== */
        /* flex items-center gap-3 mb-6 */
        .gcs-cf-header {
            display: flex !important;
            align-items: center !important;
            gap: 0.75rem !important; /* gap-3 */
            margin-bottom: 1.5rem !important; /* mb-6 */
        }

        /* flex items-center justify-center w-12 h-12 bg-[#0066CC]/10 rounded-lg */
        .gcs-cf-icon-wrapper {
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            width: 3rem !important; /* w-12 */
            height: 3rem !important; /* h-12 */
            background-color: rgba(0, 102, 204, 0.1) !important; /* bg-[#0066CC]/10 */
            border-radius: 0.5rem !important; /* rounded-lg */
            flex-shrink: 0 !important;
        }

        /* w-6 h-6 text-[#0066CC] */
        .gcs-cf-icon {
            width: 1.5rem !important; /* w-6 */
            height: 1.5rem !important; /* h-6 */
            color: #0066CC !important;
        }

        /* text-[#003D7A] text-xl md:text-2xl */
        .gcs-cf-title {
            color: #003D7A !important;
            font-size: 1.25rem !important; /* text-xl */
            line-height: 1.75rem !important;
            font-weight: 500 !important;
            margin: 0 !important;
        }

        @media (min-width: 768px) {
            .gcs-cf-title {
                font-size: 1.5rem !important; /* md:text-2xl */
                line-height: 2rem !important;
            }
        }

        /* ==================== MESSAGES ==================== */
        .gcs-cf-success,
        .gcs-cf-error {
            display: flex !important;
            align-items: center !important;
            gap: 0.75rem !important;
            padding: 1rem !important;
            border-radius: 0.5rem !important;
            margin-bottom: 1.5rem !important;
            font-size: 0.875rem !important;
        }

        .gcs-cf-success {
            background-color: #d1fae5 !important;
            color: #065f46 !important;
            border: 1px solid #6ee7b7 !important;
        }

        .gcs-cf-error {
            background-color: #fee2e2 !important;
            color: #991b1b !important;
            border: 1px solid #fca5a5 !important;
        }

        .gcs-cf-success-icon,
        .gcs-cf-error-icon {
            width: 1.25rem !important;
            height: 1.25rem !important;
            flex-shrink: 0 !important;
        }

        .gcs-cf-success p,
        .gcs-cf-error p {
            margin: 0 !important;
            flex: 1 !important;
        }

        /* ==================== FORM ==================== */
        /* space-y-6 */
        .gcs-cf-form {
            display: flex !important;
            flex-direction: column !important;
            gap: 1.5rem !important; /* space-y-6 */
        }

        /* Field wrapper */
        .gcs-cf-field {
            display: flex !important;
            flex-direction: column !important;
        }

        /* Label */
        .gcs-cf-label {
            display: block !important;
            font-size: 0.875rem !important;
            font-weight: 500 !important;
            color: #374151 !important; /* text-gray-700 */
            margin-bottom: 0.5rem !important; /* mt-2 gap */
        }

        /* Input */
        .gcs-cf-input {
            width: 100% !important;
            padding: 0.5rem 0.75rem !important;
            font-size: 0.875rem !important;
            line-height: 1.25rem !important;
            color: #1f2937 !important;
            background-color: #ffffff !important;
            border: 1px solid #d1d5db !important;
            border-radius: 0.375rem !important;
            transition-property: all !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 150ms !important;
        }

        .gcs-cf-input:focus {
            outline: 2px solid transparent !important;
            outline-offset: 2px !important;
            border-color: #0066CC !important;
            box-shadow: 0 0 0 3px rgba(0, 102, 204, 0.1) !important;
        }

        /* Select wrapper */
        .gcs-cf-select-wrapper {
            position: relative !important;
        }

        /* Select */
        .gcs-cf-select {
            width: 100% !important;
            padding: 0.5rem 2.25rem 0.5rem 0.75rem !important;
            font-size: 0.875rem !important;
            line-height: 1.25rem !important;
            color: #1f2937 !important;
            background-color: #ffffff !important;
            border: 1px solid #d1d5db !important;
            border-radius: 0.375rem !important;
            cursor: pointer !important;
            appearance: none !important;
            -webkit-appearance: none !important;
            -moz-appearance: none !important;
            transition-property: all !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 150ms !important;
        }

        .gcs-cf-select:focus {
            outline: 2px solid transparent !important;
            outline-offset: 2px !important;
            border-color: #0066CC !important;
            box-shadow: 0 0 0 3px rgba(0, 102, 204, 0.1) !important;
        }

        .gcs-cf-select-arrow {
            position: absolute !important;
            right: 0.75rem !important;
            top: 50% !important;
            transform: translateY(-50%) !important;
            pointer-events: none !important;
            color: #6b7280 !important;
        }

        /* Textarea */
        .gcs-cf-textarea {
            width: 100% !important;
            padding: 0.5rem 0.75rem !important;
            font-size: 0.875rem !important;
            line-height: 1.25rem !important;
            color: #1f2937 !important;
            background-color: #ffffff !important;
            border: 1px solid #d1d5db !important;
            border-radius: 0.375rem !important;
            resize: vertical !important;
            transition-property: all !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 150ms !important;
        }

        .gcs-cf-textarea:focus {
            outline: 2px solid transparent !important;
            outline-offset: 2px !important;
            border-color: #0066CC !important;
            box-shadow: 0 0 0 3px rgba(0, 102, 204, 0.1) !important;
        }

        /* ==================== SUBMIT BUTTON ==================== */
        /* w-full bg-[#0066CC] hover:bg-[#0052A3] text-white size="lg" */
        .gcs-cf-submit,
        button.gcs-cf-submit,
        .gcs-cf-wrapper .gcs-cf-submit,
        .gcs-cf-wrapper button.gcs-cf-submit {
            width: 100% !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            gap: 0.5rem !important;
            height: 2.5rem !important; /* h-10 size="lg" */
            min-height: 2.5rem !important;
            padding-left: 1.5rem !important;
            padding-right: 1.5rem !important;
            padding-top: 0.5rem !important;
            padding-bottom: 0.5rem !important;
            font-size: 0.875rem !important;
            font-weight: 500 !important;
            line-height: 1.25rem !important;
            /* AGGRESSIVE BLUE BACKGROUND */
            color: #ffffff !important;
            background-color: #0066CC !important;
            background-image: none !important;
            background: #0066CC !important;
            border: none !important;
            border-width: 0 !important;
            border-style: none !important;
            border-color: transparent !important;
            border-radius: 0.5rem !important; /* rounded-lg */
            outline: none !important;
            outline-width: 0 !important;
            outline-style: none !important;
            cursor: pointer !important;
            text-decoration: none !important;
            transition-property: all !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 150ms !important;
            -webkit-appearance: none !important;
            -moz-appearance: none !important;
            appearance: none !important;
        }

        .gcs-cf-submit:hover,
        button.gcs-cf-submit:hover,
        .gcs-cf-wrapper .gcs-cf-submit:hover,
        .gcs-cf-wrapper button.gcs-cf-submit:hover {
            background-color: #0052A3 !important;
            background-image: none !important;
            background: #0052A3 !important;
            color: #ffffff !important;
            border: none !important;
            outline: none !important;
            text-decoration: none !important;
        }

        .gcs-cf-submit:active,
        .gcs-cf-submit:focus,
        .gcs-cf-submit:visited,
        button.gcs-cf-submit:active,
        button.gcs-cf-submit:focus,
        button.gcs-cf-submit:visited,
        .gcs-cf-wrapper .gcs-cf-submit:active,
        .gcs-cf-wrapper .gcs-cf-submit:focus,
        .gcs-cf-wrapper .gcs-cf-submit:visited,
        .gcs-cf-wrapper button.gcs-cf-submit:active,
        .gcs-cf-wrapper button.gcs-cf-submit:focus,
        .gcs-cf-wrapper button.gcs-cf-submit:visited {
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

        /* mr-2 w-5 h-5 */
        .gcs-cf-submit-icon {
            width: 1.25rem !important; /* w-5 */
            height: 1.25rem !important; /* h-5 */
            flex-shrink: 0 !important;
            stroke: currentColor !important;
            fill: none !important;
        }

        /* ==================== PRIVACY ==================== */
        /* text-sm text-gray-600 text-center */
        .gcs-cf-privacy {
            font-size: 0.875rem !important; /* text-sm */
            line-height: 1.25rem !important;
            color: #4b5563 !important; /* text-gray-600 */
            text-align: center !important;
            margin: 0 !important;
        }

        /* text-[#0066CC] hover:underline */
        .gcs-cf-privacy-link {
            color: #0066CC !important;
            text-decoration: none !important;
            transition-property: all !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 150ms !important;
        }

        .gcs-cf-privacy-link:hover {
            text-decoration: underline !important;
        }
    </style>

    <?php
    return ob_get_clean();
}

add_shortcode('gcs_contact_form', 'gcs_contact_form_shortcode');

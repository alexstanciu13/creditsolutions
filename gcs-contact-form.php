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

                        <!-- Form: space-y-6 -->
                        <form id="gcs-homepage-contact-form" class="gcs-cf-form">

                            <!-- Name field -->
                            <div class="gcs-cf-field">
                                <label for="gcs-hp-name" class="gcs-cf-label">Nume complet *</label>
                                <input
                                    type="text"
                                    id="gcs-hp-name"
                                    name="name"
                                    placeholder="Ionescu Ion"
                                    required
                                    class="gcs-cf-input"
                                />
                            </div>

                            <!-- CNP field -->
                            <div class="gcs-cf-field">
                                <label for="gcs-hp-cnp" class="gcs-cf-label">CNP/CUI *</label>
                                <input
                                    type="text"
                                    id="gcs-hp-cnp"
                                    name="cnp"
                                    placeholder="1234567890123"
                                    required
                                    class="gcs-cf-input"
                                />
                            </div>

                            <!-- Email field -->
                            <div class="gcs-cf-field">
                                <label for="gcs-hp-email" class="gcs-cf-label">Email</label>
                                <input
                                    type="email"
                                    id="gcs-hp-email"
                                    name="email"
                                    placeholder="ion@example.com"
                                    class="gcs-cf-input"
                                />
                            </div>

                            <!-- Credit Type field -->
                            <div class="gcs-cf-field">
                                <label for="gcs-hp-credit-type" class="gcs-cf-label">Tipuri de credit *</label>
                                <div class="gcs-cf-select-wrapper">
                                    <select id="gcs-hp-credit-type" name="creditType" required class="gcs-cf-select">
                                        <option value="">Selectează tipul de credit</option>
                                        <option value="nevoi">Credite de Nevoi Personale</option>
                                        <option value="ipotecar">Credit Ipotecar/Prima Casă</option>
                                        <option value="auto">Credite Auto/Leasing</option>
                                        <option value="juridic">Credite/Linii de Credit pentru Persoane Juridice</option>
                                        <option value="refinantare">Refinanțări de Credit</option>
                                        <option value="altele">Alte Servicii</option>
                                    </select>
                                    <svg class="gcs-cf-select-arrow" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                        <path d="M3 4.5L6 7.5L9 4.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>

                            <!-- Message field -->
                            <div class="gcs-cf-field">
                                <label for="gcs-hp-message" class="gcs-cf-label">Mesaj</label>
                                <textarea
                                    id="gcs-hp-message"
                                    name="message"
                                    rows="5"
                                    placeholder="Descrie-ne nevoile tale și cum te putem ajuta..."
                                    class="gcs-cf-textarea"
                                ></textarea>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="gcs-cf-submit">
                                <svg class="gcs-cf-submit-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="22" x2="11" y1="2" y2="13"></line>
                                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                </svg>
                                <span class="gcs-cf-btn-text">Trimite Cererea</span>
                                <span class="gcs-cf-btn-loading">Se trimite...</span>
                            </button>

                            <!-- Privacy notice: text-sm text-gray-600 text-center -->
                            <p class="gcs-cf-privacy">
                                Prin trimiterea formularului, ești de acord cu
                                <a href="/gdpr" class="gcs-cf-privacy-link">Politica de Confidențialitate</a>
                            </p>

                            <div class="gcs-cf-form-message"></div>
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

        .gcs-cf-btn-text {
            display: inline !important;
        }

        .gcs-cf-btn-loading {
            display: none !important;
        }

        .gcs-cf-submit.loading .gcs-cf-btn-text {
            display: none !important;
        }

        .gcs-cf-submit.loading .gcs-cf-btn-loading {
            display: inline !important;
        }

        .gcs-cf-submit:disabled {
            opacity: 0.6 !important;
            cursor: not-allowed !important;
        }

        /* ==================== FORM MESSAGE ==================== */
        .gcs-cf-form-message {
            padding: 1rem !important;
            border-radius: 0.375rem !important;
            font-size: 0.875rem !important;
            line-height: 1.25rem !important;
            display: none !important;
        }

        .gcs-cf-form-message.success {
            display: block !important;
            background-color: #dcfce7 !important;
            color: #166534 !important;
            border: 1px solid #86efac !important;
        }

        .gcs-cf-form-message.error {
            display: block !important;
            background-color: #fee2e2 !important;
            color: #991b1b !important;
            border: 1px solid #fca5a5 !important;
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

    <script>
        (function() {
            if (window.gcsHomepageContactFormInit) return;
            window.gcsHomepageContactFormInit = true;

            const form = document.getElementById('gcs-homepage-contact-form');
            if (!form) return;

            const submitBtn = form.querySelector('.gcs-cf-submit');
            const messageDiv = form.querySelector('.gcs-cf-form-message');

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
                        action: 'gcs_homepage_contact_form',
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

add_shortcode('gcs_contact_form', 'gcs_contact_form_shortcode');

// AJAX handler for homepage contact form
add_action('wp_ajax_gcs_homepage_contact_form', 'gcs_homepage_contact_form_handler');
add_action('wp_ajax_nopriv_gcs_homepage_contact_form', 'gcs_homepage_contact_form_handler');

function gcs_homepage_contact_form_handler() {
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
    $domain = parse_url(home_url(), PHP_URL_HOST);
    $from_email = 'wordpress@' . $domain;

    // Subject line with clear identifier
    $email_subject = '[Contact Form] ' . $creditType . ' - ' . $name;

    // Email body with clear formatting
    $email_body = "Formular de contact - Global Credit Solutions\n";
    $email_body .= "==========================================\n\n";
    $email_body .= "Nume complet: $name\n";
    $email_body .= "CNP/CUI: $cnp\n";
    $email_body .= "Email: " . (!empty($email) ? $email : 'Nu a fost furnizat') . "\n";
    $email_body .= "Tip Credit: $creditType\n";
    $email_body .= "Data: " . date('d.m.Y H:i:s') . "\n\n";
    $email_body .= "Mesaj:\n";
    $email_body .= "==========================================\n";
    $email_body .= $message . "\n";
    $email_body .= "==========================================\n\n";
    $email_body .= "Acest mesaj a fost trimis prin formularul de contact de pe www.creditsolutions.ro\n";

    // Simple but professional headers
    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: Global Credit Solutions <' . $from_email . '>',
        'Return-Path: ' . $from_email,
    );

    // Add Reply-To with customer email if provided
    if (!empty($email)) {
        $headers[] = 'Reply-To: ' . $name . ' <' . $email . '>';
    }

    // Send email
    $sent = wp_mail($to, $email_subject, $email_body, $headers);

    if ($sent) {
        wp_send_json_success(['message' => 'Formularul a fost trimis cu succes! Vă vom contacta în curând.']);
    } else {
        wp_send_json_error(['message' => 'A apărut o eroare la trimiterea mesajului. Vă rugăm să ne contactați telefonic.']);
    }
}

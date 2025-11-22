<?php
/**
 * Global Credit Solutions - Header Shortcode
 *
 * Shortcode: [gcs_header]
 *
 * This creates a fixed header with:
 * - Scroll-based color change (transparent -> white)
 * - Mobile responsive menu
 * - Custom logo switching based on scroll
 * - Fully isolated CSS and JS
 */

function gcs_header_shortcode() {
    ob_start();
    ?>

    <div class="gcs-header-wrapper">
        <header class="gcs-header">
            <div class="gcs-header-container">
                <div class="gcs-header-content">
                    <!-- Logo -->
                    <a href="<?php echo home_url(); ?>" class="gcs-logo">
                        <img src="https://creditsolutions.ro/wp-content/uploads/2025/11/white_logo.png" alt="Global Credit Solutions" class="gcs-logo-white">
                        <img src="https://creditsolutions.ro/wp-content/uploads/2025/11/blue_logo.png" alt="Global Credit Solutions" class="gcs-logo-blue">
                    </a>

                    <!-- Desktop Navigation -->
                    <nav class="gcs-nav-desktop">
                        <a href="<?php echo home_url(); ?>" class="gcs-nav-link">Acasă</a>
                        <a href="<?php echo home_url('/despre-noi'); ?>" class="gcs-nav-link">Despre Noi</a>
                        <a href="<?php echo home_url('/servicii'); ?>" class="gcs-nav-link">Servicii</a>
                        <a href="<?php echo home_url('/contact'); ?>" class="gcs-nav-link">Contact</a>
                    </nav>

                    <!-- CTA Button Desktop -->
                    <div class="gcs-cta-desktop">
                        <a href="<?php echo home_url('/contact'); ?>" class="gcs-btn-primary">Aplică Acum</a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <button class="gcs-mobile-menu-btn" aria-label="Toggle menu">
                        <svg class="gcs-menu-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M3 12h18M3 6h18M3 18h18"></path>
                        </svg>
                        <svg class="gcs-close-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M18 6L6 18M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <!-- Mobile Menu -->
                <nav class="gcs-nav-mobile">
                    <a href="<?php echo home_url(); ?>" class="gcs-nav-link-mobile">Acasă</a>
                    <a href="<?php echo home_url('/despre-noi'); ?>" class="gcs-nav-link-mobile">Despre Noi</a>
                    <a href="<?php echo home_url('/servicii'); ?>" class="gcs-nav-link-mobile">Servicii</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="gcs-nav-link-mobile">Contact</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="gcs-btn-primary gcs-btn-mobile">Aplică Acum</a>
                </nav>
            </div>
        </header>
    </div>

    <style>
        /* Reset and Wrapper Isolation */
        .gcs-header-wrapper {
            font-family: 'Open Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.5;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .gcs-header-wrapper * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        /* Header Base */
        .gcs-header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 9999;
            background-color: transparent;
            padding: 16px 0;
            transition: all 0.3s ease-in-out;
            box-shadow: none;
        }

        .gcs-header.scrolled {
            background-color: #ffffff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            padding: 12px 0;
        }

        .gcs-header-container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 16px;
        }

        .gcs-header-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        /* Logo */
        .gcs-logo {
            display: flex;
            align-items: center;
            text-decoration: none;
            height: 40px;
            position: relative;
        }

        .gcs-logo img {
            height: 40px;
            width: auto;
            transition: opacity 0.3s ease-in-out;
            position: absolute;
            top: 0;
            left: 0;
        }

        .gcs-logo-white {
            opacity: 1;
        }

        .gcs-logo-blue {
            opacity: 0;
        }

        .gcs-header.scrolled .gcs-logo-white {
            opacity: 0;
        }

        .gcs-header.scrolled .gcs-logo-blue {
            opacity: 1;
        }

        /* Desktop Navigation */
        .gcs-nav-desktop {
            display: none;
            align-items: center;
            gap: 32px;
        }

        @media (min-width: 768px) {
            .gcs-nav-desktop {
                display: flex;
            }
        }

        .gcs-nav-link {
            color: #ffffff;
            text-decoration: none;
            font-size: 16px;
            font-weight: 400;
            transition: color 0.3s ease-in-out;
            background: none;
            border: none;
            cursor: pointer;
        }

        .gcs-nav-link:hover {
            color: #0066CC;
        }

        .gcs-header.scrolled .gcs-nav-link {
            color: #4b5563;
        }

        .gcs-header.scrolled .gcs-nav-link:hover {
            color: #0066CC;
        }

        /* CTA Button Desktop */
        .gcs-cta-desktop {
            display: none;
        }

        @media (min-width: 768px) {
            .gcs-cta-desktop {
                display: block;
            }
        }

        .gcs-btn-primary {
            display: inline-block;
            background-color: #0066CC;
            color: #ffffff;
            padding: 10px 24px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            transition: all 0.3s ease-in-out;
            border: none;
            cursor: pointer;
        }

        .gcs-btn-primary:hover {
            background-color: #0052A3;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 102, 204, 0.3);
        }

        /* Mobile Menu Button */
        .gcs-mobile-menu-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            background: none;
            border: none;
            cursor: pointer;
            padding: 4px;
            color: #ffffff;
            transition: color 0.3s ease-in-out;
        }

        .gcs-header.scrolled .gcs-mobile-menu-btn {
            color: #003D7A;
        }

        @media (min-width: 768px) {
            .gcs-mobile-menu-btn {
                display: none;
            }
        }

        .gcs-menu-icon {
            display: block;
        }

        .gcs-close-icon {
            display: none;
        }

        .gcs-mobile-menu-btn.active .gcs-menu-icon {
            display: none;
        }

        .gcs-mobile-menu-btn.active .gcs-close-icon {
            display: block;
        }

        /* Mobile Navigation */
        .gcs-nav-mobile {
            display: none;
            flex-direction: column;
            gap: 16px;
            margin-top: 16px;
            padding: 16px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .gcs-nav-mobile.active {
            display: flex;
        }

        @media (min-width: 768px) {
            .gcs-nav-mobile {
                display: none !important;
            }
        }

        .gcs-nav-link-mobile {
            color: #4b5563;
            text-decoration: none;
            font-size: 16px;
            font-weight: 400;
            text-align: left;
            padding: 8px 0;
            transition: color 0.3s ease-in-out;
        }

        .gcs-nav-link-mobile:hover {
            color: #0066CC;
        }

        .gcs-btn-mobile {
            width: 100%;
            text-align: center;
        }

        /* Prevent body scroll when mobile menu is open */
        body.gcs-menu-open {
            overflow: hidden;
        }
    </style>

    <script>
        (function() {
            // Ensure script runs only once
            if (window.gcsHeaderInitialized) return;
            window.gcsHeaderInitialized = true;

            const header = document.querySelector('.gcs-header');
            const mobileMenuBtn = document.querySelector('.gcs-mobile-menu-btn');
            const mobileNav = document.querySelector('.gcs-nav-mobile');
            let scrollTimeout;

            // Scroll handler
            function handleScroll() {
                clearTimeout(scrollTimeout);
                scrollTimeout = setTimeout(function() {
                    if (window.scrollY > 20) {
                        header.classList.add('scrolled');
                    } else {
                        header.classList.remove('scrolled');
                    }
                }, 10);
            }

            // Mobile menu toggle
            function toggleMobileMenu() {
                mobileMenuBtn.classList.toggle('active');
                mobileNav.classList.toggle('active');
                document.body.classList.toggle('gcs-menu-open');
            }

            // Close mobile menu when clicking a link
            function closeMobileMenu() {
                mobileMenuBtn.classList.remove('active');
                mobileNav.classList.remove('active');
                document.body.classList.remove('gcs-menu-open');
            }

            // Event listeners
            window.addEventListener('scroll', handleScroll);

            if (mobileMenuBtn) {
                mobileMenuBtn.addEventListener('click', toggleMobileMenu);
            }

            // Close mobile menu when clicking links
            const mobileLinks = document.querySelectorAll('.gcs-nav-link-mobile');
            mobileLinks.forEach(function(link) {
                link.addEventListener('click', closeMobileMenu);
            });

            // Initial check for scroll position
            handleScroll();

            // Close mobile menu on window resize to desktop
            window.addEventListener('resize', function() {
                if (window.innerWidth >= 768) {
                    closeMobileMenu();
                }
            });
        })();
    </script>

    <?php
    return ob_get_clean();
}

add_shortcode('gcs_header', 'gcs_header_shortcode');

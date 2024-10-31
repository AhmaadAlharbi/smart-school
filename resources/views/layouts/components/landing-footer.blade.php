<style>
    /* Footer Base */
    .footer {
        background: linear-gradient(to bottom, #1e293b, #0f172a);
        position: relative;
        overflow: hidden;
        padding-top: 4rem;
    }

    /* Background Elements */
    .footer-glow {
        position: absolute;
        border-radius: 50%;
        filter: blur(100px);
        opacity: 0.1;
    }

    .footer-glow-1 {
        background: #2563eb;
        width: 300px;
        height: 300px;
        top: -150px;
        left: -100px;
    }

    .footer-glow-2 {
        background: #22c55e;
        width: 250px;
        height: 250px;
        bottom: -100px;
        right: -50px;
    }

    /* Footer Content */
    .footer-content {
        position: relative;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        padding-bottom: 2rem;
    }

    /* Section Titles */
    .footer-title {
        color: white;
        font-size: 1.25rem;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .footer-title-line {
        display: inline-block;
        height: 3px;
        width: 2rem;
        background: linear-gradient(to right, #2563eb, #22c55e);
        border-radius: 1rem;
        transition: width 0.3s ease;
    }

    .footer-section:hover .footer-title-line {
        width: 3rem;
    }

    /* About Section */
    .footer-logo {
        max-width: 150px;
        height: auto;
        margin-bottom: 1rem;
        transition: transform 0.3s ease;
    }

    .footer-logo:hover {
        transform: translateY(-5px);
    }

    .footer-description {
        color: #94a3b8;
        line-height: 1.6;
        margin-bottom: 1.5rem;
    }

    /* Links Styling */
    .footer-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-link {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #94a3b8;
        text-decoration: none;
        padding: 0.5rem 0;
        transition: all 0.3s ease;
    }

    .footer-link:hover {
        color: #2563eb;
        transform: translateX(5px);
    }

    .footer-link-icon {
        color: #22c55e;
        transition: transform 0.3s ease;
    }

    .footer-link:hover .footer-link-icon {
        transform: scale(1.2);
    }

    /* Contact Links */
    .contact-link {
        display: inline-flex;
        align-items: center;
        gap: 0.75rem;
        color: #94a3b8;
        text-decoration: none;
        padding: 0.5rem 0;
        transition: all 0.3s ease;
    }

    .contact-link:hover {
        color: #2563eb;
    }

    .contact-icon {
        color: #22c55e;
        transition: transform 0.3s ease;
    }

    .contact-link:hover .contact-icon {
        transform: rotate(15deg);
    }

    /* Copyright Section */
    .footer-copyright {
        padding: 2rem 0;
        text-align: center;
        color: #94a3b8;
        position: relative;
    }

    .copyright-text {
        opacity: 0.8;
    }

    .copyright-link {
        color: #2563eb;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .copyright-link:hover {
        color: #22c55e;
    }

    .heart-icon {
        display: inline-block;
        color: #ef4444;
        animation: heartbeat 1.5s infinite;
    }

    /* RTL Support */
    [dir="rtl"] .footer-link:hover {
        transform: translateX(-5px);
    }

    [dir="rtl"] .footer-link {
        flex-direction: row-reverse;
    }

    /* Animations */
    @keyframes heartbeat {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.2);
        }

        100% {
            transform: scale(1);
        }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .footer-section {
            margin-bottom: 2rem;
        }

        .footer-title {
            justify-content: center;
        }

        .footer-description {
            text-align: center;
        }

        .footer-links {
            text-align: center;
        }

        .footer-link {
            justify-content: center;
        }

        .footer-logo {
            margin: 0 auto 1rem;
            display: block;
        }
    }
</style>
<footer class="footer" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
    <!-- Background Glows -->
    <div class="footer-glow footer-glow-1"></div>
    <div class="footer-glow footer-glow-2"></div>

    <div class="container mx-auto px-4">
        <div class="footer-content">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- About Section -->
                <div class="footer-section">
                    <h6 class="footer-title dynapuff">
                        {{ __('footer.about.title') }}
                        <span class="footer-title-line"></span>
                    </h6>
                    <img src="/images/sahabcode-logo.png" alt="Sahab Code Logo" class="footer-logo">
                    <p class="footer-description">
                        {{ __('footer.about.description') }}
                    </p>
                </div>

                <!-- Services Section -->
                <div class="footer-section">
                    <h6 class="footer-title dynapuff">
                        {{ __('footer.services.title') }}
                        <span class="footer-title-line"></span>
                    </h6>
                    <ul class="footer-links">
                        <li>
                            <a href="#" class="footer-link">
                                <i class="ri-code-line footer-link-icon"></i>
                                {{ __('footer.services.web_design') }}
                            </a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">
                                <i class="ri-terminal-line footer-link-icon"></i>
                                {{ __('footer.services.web_development') }}
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Quick Links Section -->
                <div class="footer-section">
                    <h6 class="footer-title dynapuff">
                        {{ __('footer.quick_links.title') }}
                        <span class="footer-title-line"></span>
                    </h6>
                    <ul class="footer-links">
                        <li>
                            <a href="/demo-dashboard" class="footer-link">
                                <i class="ri-dashboard-line footer-link-icon"></i>
                                {{ __('footer.quick_links.dashboard') }}
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Contact Section -->
                <div class="footer-section">
                    <h6 class="footer-title dynapuff">
                        {{ __('footer.contact.title') }}
                        <span class="footer-title-line"></span>
                    </h6>
                    <ul class="footer-links">
                        <li>
                            <a href="mailto:contact@sahabcode.com" class="contact-link">
                                <i class="ri-mail-line contact-icon"></i>
                                {{ __('footer.contact.email') }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Copyright Section -->
        <div class="footer-copyright">
            <p class="copyright-text">
                © <span id="year">2024</span>
                <a href="#" class="copyright-link">Sahab Code</a>.
                {{ __('footer.copyright.made_with') }}
                <span class="heart-icon">♥</span>
                {{ __('footer.copyright.rights') }}.
            </p>
        </div>
    </div>
</footer>
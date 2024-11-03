<style>
    /* Footer Base */
    .footer {
        background: radial-gradient(circle at 70% 20%,
                rgba(252, 211, 77, 0.05) 0%,
                transparent 50%),
            radial-gradient(circle at 20% 60%,
                rgba(147, 197, 253, 0.05) 0%,
                transparent 50%),
            linear-gradient(180deg,
                #1e293b 0%,
                #0f172a 100%);
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
        z-index: 1;
    }

    .footer-glow-1 {
        background: #60a5fa;
        width: 300px;
        height: 300px;
        top: -150px;
        left: -100px;
    }

    .footer-glow-2 {
        background: #fcd34d;
        width: 250px;
        height: 250px;
        bottom: -100px;
        right: -50px;
    }

    /* Content Wrapper */
    .footer-content {
        position: relative;
        z-index: 2;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        padding-bottom: 2rem;
    }

    /* Section Styling */
    .footer-section {
        backdrop-filter: blur(10px);
        border-radius: 15px;
        padding: 1.5rem;
        transition: transform 0.3s ease;
        background: rgba(255, 255, 255, 0.03);
    }

    .footer-section:hover {
        transform: translateY(-5px);
        background: rgba(255, 255, 255, 0.05);
    }

    /* Section Titles */
    .footer-title {
        color: #fff;
        font-size: 1.25rem;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .footer-title-line {
        height: 3px;
        width: 2rem;
        background: linear-gradient(to right, #60a5fa, #fcd34d);
        border-radius: 1rem;
        transition: width 0.3s ease;
    }

    .footer-section:hover .footer-title-line {
        width: 3rem;
    }

    /* Logo and Description */
    .footer-logo {
        max-width: 150px;
        height: auto;
        margin-bottom: 1.5rem;
        transition: transform 0.3s ease;
        filter: brightness(1.2);
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
        gap: 0.75rem;
        color: #94a3b8;
        padding: 0.75rem;
        border-radius: 12px;
        transition: all 0.3s ease;
        background: rgba(255, 255, 255, 0.02);
        margin-bottom: 0.5rem;
    }

    .footer-link:hover {
        color: #60a5fa;
        background: rgba(255, 255, 255, 0.05);
        transform: translateX(10px);
    }

    .footer-link-icon {
        color: #fcd34d;
        transition: transform 0.3s ease;
    }

    .footer-link:hover .footer-link-icon {
        transform: rotate(360deg);
    }

    /* Contact Links */
    .contact-link {
        display: inline-flex;
        align-items: center;
        gap: 0.75rem;
        color: #94a3b8;
        padding: 0.75rem;
        border-radius: 12px;
        transition: all 0.3s ease;
        background: rgba(255, 255, 255, 0.02);
        width: 100%;
        margin-bottom: 0.5rem;
    }

    .contact-link:hover {
        color: #60a5fa;
        background: rgba(255, 255, 255, 0.05);
        transform: translateX(10px);
    }

    .contact-icon {
        color: #fcd34d;
        transition: transform 0.3s ease;
    }

    .contact-link:hover .contact-icon {
        transform: rotate(360deg);
    }

    /* Copyright Section */
    .footer-copyright {
        padding: 2rem 0;
        text-align: center;
        color: #94a3b8;
        position: relative;
        z-index: 2;
    }

    .copyright-text {
        opacity: 0.8;
    }

    .copyright-link {
        background: linear-gradient(to right, #60a5fa, #fcd34d);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        font-weight: 600;
        transition: opacity 0.3s ease;
    }

    .copyright-link:hover {
        opacity: 0.8;
    }

    .heart-icon {
        display: inline-block;
        color: #ef4444;
        animation: heartbeat 1.5s infinite;
    }

    /* RTL Support */
    [dir="rtl"] .footer-link:hover {
        transform: translateX(-10px);
    }

    [dir="rtl"] .contact-link:hover {
        transform: translateX(-10px);
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
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .footer-title {
            justify-content: center;
        }

        .footer-logo {
            margin: 0 auto 1.5rem;
        }

        .footer-link,
        .contact-link {
            justify-content: center;
        }

        .footer-link:hover,
        .contact-link:hover {
            transform: translateY(-5px);
        }

        [dir="rtl"] .footer-link:hover,
        [dir="rtl"] .contact-link:hover {
            transform: translateY(-5px);
        }
    }
</style>

<footer class="footer" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
    <!-- Background Glows -->
    <div class="footer-glow footer-glow-1"></div>
    <div class="footer-glow footer-glow-2"></div>

    <div class="container mx-auto px-4">
        <div class="footer-content">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- About Section -->
                <div class="footer-section">
                    <h6 class="footer-title dynapuff">
                        {{ __('footer.about.title') }}
                        <span class="footer-title-line"></span>
                    </h6>
                    <img src="/images/sahabcode-logo.png" alt="Sahab Code Logo" class="footer-logo">
                    <p class="footer-description">{{ __('footer.about.description') }}</p>
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
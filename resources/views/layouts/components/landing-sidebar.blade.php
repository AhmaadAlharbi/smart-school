<nav class="navbar">
    <div class="nav-wrapper">
        <!-- Logo -->
        <a href="/" class="brand">
            <div class="logo">
                <div class="shine"></div>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path
                        d="M20 15.5c1.7 0 3-1.3 3-3s-1.3-3-3-3h-.3c-.3-2.7-2.6-5-5.3-5-1.3 0-2.6.5-3.5 1.3-.7-2.2-2.7-3.8-5-3.8C3.1 2 1 4.1 1 6.9c0 .3 0 .5.1.8 1.3.5 2.2 1.7 2.2 3.2 0 1.9-1.5 3.4-3.3 3.4" />
                </svg>
            </div>
        </a>

        <!-- Navigation Links -->
        <div class="nav-links">
            <a href="#home">Home</a>
            <a href="#services">Services</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
        </div>

        <!-- Language Switcher -->
        <div class="lang-switch">
            <button class="lang-btn">
                <ul>
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    @if(LaravelLocalization::getCurrentLocale() !== $localeCode)
                    <li>
                        <a rel="alternate" hreflang="{{ $localeCode }}"
                            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            🌐 {{ $properties['native'] }}
                        </a>
                    </li>
                    @endif
                    @endforeach
                </ul>
            </button>


            {{-- <div class="lang-menu">
                <a href="?lang=en">🇺🇸 English</a>
                <a href="?lang=ar">🇰🇼 العربية</a>
            </div> --}}
        </div>


        <!-- Mobile Menu Button -->
        <button class="menu-btn">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</nav>

<style>
    .navbar {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 100;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
    }

    .nav-wrapper {
        max-width: 1200px;
        margin: 0 auto;
        padding: 1rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    /* Logo Styles */
    .brand {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        text-decoration: none;
        color: #1a1a1a;
    }

    .logo {
        width: 40px;
        height: 40px;
        background: linear-gradient(135deg, #3b82f6, #06b6d4);
        border-radius: 12px;
        position: relative;
        display: grid;
        place-items: center;
    }

    .logo svg {
        width: 24px;
        height: 24px;
        stroke: white;
    }

    .shine {
        position: absolute;
        top: -4px;
        right: -4px;
        width: 12px;
        height: 12px;
        background: #fcd34d;
        border-radius: 50%;
        animation: pulse 2s infinite;
    }

    /* Navigation Links */
    .nav-links {
        display: flex;
        gap: 2rem;
    }

    .nav-links a {
        color: #4b5563;
        text-decoration: none;
        font-weight: 500;
        position: relative;
        padding: 0.5rem 0;
    }

    .nav-links a::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 2px;
        background: #3b82f6;
        transform: scaleX(0);
        transition: transform 0.3s;
    }

    .nav-links a:hover {
        color: #3b82f6;
    }

    .nav-links a:hover::after {
        transform: scaleX(1);
    }

    /* Language Switcher */
    .lang-switch {
        position: relative;
    }

    .lang-btn {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1rem;
        border: 1px solid #e5e7eb;
        border-radius: 8px;
        background: transparent;
        cursor: pointer;
        transition: all 0.3s;
    }

    .lang-btn:hover {
        background: #f3f4f6;
    }

    .lang-menu {
        position: absolute;
        top: 120%;
        right: 0;
        background: white;
        border-radius: 8px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        padding: 0.5rem;
        display: none;
        min-width: 150px;
    }

    .lang-switch:hover .lang-menu {
        display: flex;
        flex-direction: column;
    }

    .lang-menu a {
        padding: 0.5rem;
        text-decoration: none;
        color: #4b5563;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        transition: all 0.3s;
    }

    .lang-menu a:hover {
        background: #f3f4f6;
        color: #3b82f6;
    }

    /* Mobile Menu Button */
    .menu-btn {
        display: none;
        flex-direction: column;
        gap: 6px;
        background: none;
        border: none;
        cursor: pointer;
        padding: 0.5rem;
    }

    .menu-btn span {
        display: block;
        width: 24px;
        height: 2px;
        background: #4b5563;
        transition: all 0.3s;
    }

    @keyframes pulse {

        0%,
        100% {
            opacity: 0.8;
        }

        50% {
            opacity: 0.4;
        }
    }

    /* Mobile Responsiveness */
    @media (max-width: 768px) {
        .nav-links {
            display: none;
            position: fixed;
            top: 72px;
            left: 0;
            right: 0;
            background: white;
            padding: 2rem;
            flex-direction: column;
            align-items: center;
            gap: 1.5rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .menu-btn {
            display: flex;
        }

        .nav-links.active {
            display: flex;
        }

        .menu-btn.active span:first-child {
            transform: translateY(8px) rotate(45deg);
        }

        .menu-btn.active span:nth-child(2) {
            opacity: 0;
        }

        .menu-btn.active span:last-child {
            transform: translateY(-8px) rotate(-45deg);
        }
    }
</style>

<script>
    document.querySelector('.menu-btn').addEventListener('click', function() {
    this.classList.toggle('active');
    document.querySelector('.nav-links').classList.toggle('active');
});
</script>
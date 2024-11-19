<style>
    :root {
        --navbar-height: 4rem;
        --navbar-bg: rgba(255, 255, 255, 0.15);
        --navbar-blur: 10px;
        --navbar-border: rgba(255, 255, 255, 0.1);
        --accent-warm: #ff6b6b;
        --text-color: #ffffff;
        --transition-speed: 0.3s;
    }

    @media (max-width: 768px) {
        .nav-menu {
            background: rgba(0, 0, 0, 0.95);
        }

        .nav-link:hover,
        .nav-link:focus-visible {
            color: var(--accent-warm);
        }

        .lang-btn {
            background: var(--navbar-bg);
        }
    }

    .navbar {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        height: var(--navbar-height);
        background: var(--navbar-bg);
        backdrop-filter: blur(var(--navbar-blur));
        -webkit-backdrop-filter: blur(var(--navbar-blur));
        z-index: 1000;
        border-bottom: 1px solid var(--navbar-border);
    }

    .nav-container {
        max-width: min(1200px, 90vw);
        margin: 0 auto;
        height: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 1rem;
    }

    .logo-container {
        display: flex;
        align-items: center;
        gap: 1rem;
        text-decoration: none;
        color: var(--text-color);
    }

    .logo-container:focus-visible {
        outline: 2px solid var(--accent-warm);
        outline-offset: 4px;
        border-radius: 4px;
    }

    .logo-cloud {
        width: 45px;
        height: 45px;
        /* background: linear-gradient(135deg, var(--sky-primary, #60a5fa), #93c5fd); */
        border-radius: 50%;
        position: relative;
        box-shadow: 0 4px 12px rgba(96, 165, 250, 0.3);
    }

    .logo-cloud::after {
        content: '';
        position: absolute;
        inset: 0;
        margin: auto;
        width: 25px;
        height: 25px;
        background: rgba(255, 255, 255, 0.3);
        border-radius: 50%;
    }

    .brand-name {
        font-size: clamp(1.5rem, 3vw, 1.75rem);
        font-weight: bold;
        -webkit-text-stroke: 1px rgba(0, 0, 0, 0.3);
    }

    [dir="rtl"] .brand-name {
        font-family: "Marhey", sans-serif;
    }

    .nav-menu {
        display: flex;
        gap: clamp(1.5rem, 3vw, 2.5rem);
        align-items: center;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .nav-link {
        color: var(--text-color);
        text-decoration: none;
        font-weight: 500;
        padding: 0.5rem;
        position: relative;
        transition: color var(--transition-speed);
    }

    .nav-link::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 2px;
        background-color: var(--accent-warm);
        transform: scaleX(0);
        transition: transform var(--transition-speed);
    }

    .nav-link:hover::before,
    .nav-link:focus-visible::before {
        transform: scaleX(1);
    }

    .nav-link[aria-current="page"] {
        color: var(--accent-warm);
    }

    .nav-link[aria-current="page"]::before {
        transform: scaleX(1);
    }

    .nav-toggle {
        display: none;
        background: transparent;
        border: none;
        padding: 0.5rem;
        cursor: pointer;
        color: var(--text-color);
        z-index: 1000;
        margin-left: auto;
    }

    .menu-icon {
        width: 24px;
        height: 24px;
        stroke-linecap: round;
        stroke-linejoin: round;
    }

    .lang-switch {
        position: relative;
    }

    .lang-btn {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1rem;
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid var(--navbar-border);
        border-radius: 20px;
        color: var(--text-color);
        text-decoration: none;
        cursor: pointer;
        transition: all var(--transition-speed);
    }

    .lang-btn:hover,
    .lang-btn:focus-visible {
        background: var(--accent-warm);
        border-color: var(--accent-warm);
    }

    .globe-icon {
        margin-left: 0.5rem;
        transition: transform var(--transition-speed);
    }

    [dir="rtl"] .globe-icon {
        margin-left: 0;
        margin-right: 0.5rem;
    }

    .lang-btn:hover .globe-icon {
        transform: rotate(20deg);
    }

    @media (max-width: 768px) {
        .nav-container {
            padding: 0 1rem;
        }

        .nav-toggle {
            display: block;
        }

        .nav-menu {
            position: fixed;
            top: var(--navbar-height);
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.9);
            backdrop-filter: blur(var(--navbar-blur));
            padding: 2rem 1rem;
            flex-direction: column;
            gap: 1.5rem;
            text-align: center;
            display: none;
            z-index: 999;
        }

        .nav-menu.active {
            display: flex;
        }

        .nav-link {
            font-size: 1.25rem;
            padding: 0.75rem;
            width: 100%;
            display: block;
        }

        .nav-link::before {
            display: none;
        }

        .lang-switch {
            margin-top: 1rem;
            width: 100%;
        }

        .lang-btn {
            width: 100%;
            justify-content: center;
            padding: 0.75rem 1.5rem;
            font-size: 1.1rem;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        * {
            transition-duration: 0.01ms !important;
        }
    }
</style>

<nav class="navbar" dir="{{ request()->is('ar*') ? 'rtl' : 'ltr' }}" aria-label="Main navigation">
    <div class="nav-container">
        <a href="{{ request()->is('ar*') ? '/ar' : '/' }}" class="logo-container" aria-label="SahabCode home">
            <div class="logo-cloud" role="img" aria-hidden="true"></div>
            <span class="brand-name">SahabCode</span>
        </a>

        <button class="nav-toggle" aria-label="Toggle menu" aria-expanded="false" aria-controls="nav-menu">
            <svg xmlns="http://www.w3.org/2000/svg" class="menu-icon" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2">
                <path class="menu-bar" d="M3 12h18M3 6h18M3 18h18" />
                <path class="close-icon" d="M18 6L6 18M6 6l12 12" />
            </svg>
        </button>

        <ul class="nav-menu" id="nav-menu">
            @if(request()->is('ar*'))
            <li><a href="/ar" class="nav-link" aria-current="{{ request()->is('ar') ? 'page' : 'false' }}">الرئيسية</a>
            </li>
            <li><a href="/ar#projects" class="nav-link">المشاريع</a></li>
            <li><a href="/ar#services" class="nav-link">الخدمات</a></li>
            <li><a href="/ar#about" class="nav-link">من نحن</a></li>
            <li><a href="/ar#contact" class="nav-link">اتصل بنا</a></li>
            @else
            <li><a href="/" class="nav-link" aria-current="{{ request()->is('/') ? 'page' : 'false' }}">Home</a>
            </li>
            <li><a href="#projects" class="nav-link">Projects</a></li>
            <li><a href="#services" class="nav-link">Services</a></li>
            <li><a href="#about" class="nav-link">About</a></li>
            <li><a href="#contact" class="nav-link">Contact</a></li>
            @endif

            <div class="lang-switch">
                @if(app()->getLocale() === 'ar')
                <a href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}" class="lang-btn">
                    <span>English</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" class="globe-icon">
                        <circle cx="12" cy="12" r="10" />
                        <path
                            d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
                    </svg>
                </a>
                @elseif(app()->getLocale() === 'en')
                <a href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}" class="lang-btn">
                    <span>العربية</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" class="globe-icon">
                        <circle cx="12" cy="12" r="10" />
                        <path
                            d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
                    </svg>
                </a>
                @endif
            </div>
        </ul>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
const navToggle = document.querySelector('.nav-toggle');
const navMenu = document.querySelector('.nav-menu');
const menuBar = document.querySelector('.menu-bar');
const closeIcon = document.querySelector('.close-icon');

function toggleMenu(show) {
    navToggle.setAttribute('aria-expanded', show);
    navMenu.classList.toggle('active', show);
    document.body.style.overflow = show ? 'hidden' : '';
    
    menuBar.style.display = show ? 'none' : 'block';
    closeIcon.style.display = show ? 'block' : 'none';
}

navToggle.addEventListener('click', function() {
    const isExpanded = this.getAttribute('aria-expanded') === 'true';
    toggleMenu(!isExpanded);
});

navMenu.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => toggleMenu(false));
});

document.addEventListener('click', function(e) {
    if (!navToggle.contains(e.target) && !navMenu.contains(e.target)) {
        toggleMenu(false);
    }
});

toggleMenu(false);
});
</script>
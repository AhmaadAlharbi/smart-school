<nav class="fixed top-0 left-0 right-0 z-50 bg-gradient-to-b from-blue-50 to-green-50">
    <div class="max-w-7xl mx-auto px-4 relative">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <div class="flex-shrink-0 relative z-10">
                <a href="/"
                    class="group flex items-center space-x-2 transform transition-all duration-300 hover:scale-105">
                    <!-- Logo Cloud Icon -->
                    <div class="w-10 h-10 relative">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-blue-400 to-blue-500 rounded-lg transform transition-transform group-hover:scale-105 group-hover:rotate-3">
                        </div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M20 15.5C21.7 15.5 23 14.2 23 12.5C23 10.8 21.7 9.5 20 9.5H19.7C19.4 6.8 17.1 4.5 14.4 4.5C13.1 4.5 11.8 5 10.9 5.8C10.2 3.6 8.2 2 5.9 2C3.1 2 1 4.1 1 6.9C1 7.2 1 7.4 1.1 7.7C2.4 8.2 3.3 9.4 3.3 10.9C3.3 12.8 1.8 14.3 0 14.3"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </div>
                    </div>
                    <!-- Logo Text with Language Support -->
                    <div
                        class="text-xl font-bold tracking-tight {{ LaravelLocalization::getCurrentLocale() === 'ar' ? 'font-arabic' : '' }}">
                        @if(LaravelLocalization::getCurrentLocale() === 'ar')
                        <span
                            class="bg-gradient-to-r from-blue-600 to-blue-400 bg-clip-text text-transparent">سحاب</span>
                        <span
                            class="bg-gradient-to-r from-green-600 to-green-400 bg-clip-text text-transparent">كود</span>
                        @else
                        <span
                            class="bg-gradient-to-r from-blue-600 to-blue-400 bg-clip-text text-transparent">Sahab</span>
                        <span
                            class="bg-gradient-to-r from-green-600 to-green-400 bg-clip-text text-transparent">Code</span>
                        @endif
                    </div>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div
                class="hidden md:flex md:items-center md:space-x-8 {{ LaravelLocalization::getCurrentLocaleDirection() === 'rtl' ? 'space-x-reverse' : '' }}">
                <a href="#home" class="nav-link">
                    {{ __('navigation.home') }}
                </a>
                <a href="#services" class="nav-link">
                    {{ __('navigation.services') }}
                </a>
                <a href="#about" class="nav-link">
                    {{ __('navigation.about') }}
                </a>
                <a href="#contact" class="nav-link">
                    {{ __('navigation.contact') }}
                </a>

                <!-- Language Selector -->
                <div class="relative group">
                    <button
                        class="nav-link flex items-center space-x-2 {{ LaravelLocalization::getCurrentLocaleDirection() === 'rtl' ? 'space-x-reverse' : '' }}">
                        <span>{{ __('navigation.language') }}</span>
                        <svg class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </button>
                    <!-- Language Dropdown -->
                    <div
                        class="absolute {{ LaravelLocalization::getCurrentLocaleDirection() === 'rtl' ? 'left-0' : 'right-0' }} mt-2 w-48 bg-white/90 backdrop-blur-lg rounded-xl shadow-lg border border-gray-100/50 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top scale-95 group-hover:scale-100">
                        <div class="py-2">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <a rel="alternate" hreflang="{{ $localeCode }}"
                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                class="flex items-center px-4 py-2 text-sm text-blue-600 hover:text-green-500 hover:bg-blue-50/50 transition-all duration-300">
                                <span
                                    class="w-6 text-center {{ LaravelLocalization::getCurrentLocaleDirection() === 'rtl' ? 'ml-2' : 'mr-2' }}">
                                    {!! $localeCode == 'en' ? '🇺🇸' : '🇰🇼' !!}
                                </span>
                                {{ $properties['native'] }}
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu Button -->
            <button type="button" id="mobile-menu-button"
                class="md:hidden relative z-50 p-2 rounded-lg text-blue-600 hover:text-green-500 hover:bg-blue-50/50 focus:outline-none transition-all duration-300"
                aria-label="{{ __('navigation.toggle_menu') }}" aria-expanded="false">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden fixed inset-0 z-40 bg-white/95 backdrop-blur-lg md:hidden"
                aria-hidden="true">
                <div class="flex flex-col h-full pt-20 px-6 pb-6 overflow-y-auto">
                    <nav class="flex flex-col space-y-4">
                        <a href="#home" class="mobile-nav-link">
                            {{ __('navigation.home') }}
                        </a>
                        <a href="#services" class="mobile-nav-link">
                            {{ __('navigation.services') }}
                        </a>
                        <a href="#about" class="mobile-nav-link">
                            {{ __('navigation.about') }}
                        </a>
                        <a href="#contact" class="mobile-nav-link">
                            {{ __('navigation.contact') }}
                        </a>

                        <!-- Mobile Language Options -->
                        <div class="border-t border-gray-100 pt-4 mt-4">
                            <p
                                class="text-sm text-gray-500 mb-3 {{ LaravelLocalization::getCurrentLocale() === 'ar' ? 'font-arabic' : '' }}">
                                {{ __('navigation.language') }}
                            </p>
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <a rel="alternate" hreflang="{{ $localeCode }}"
                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                class="flex items-center py-2 text-blue-600 hover:text-green-500 transition-colors {{ $localeCode === 'ar' ? 'font-arabic' : '' }}">
                                <span
                                    class="w-8 {{ LaravelLocalization::getCurrentLocaleDirection() === 'rtl' ? 'ml-3' : 'mr-3' }}">
                                    {!! $localeCode == 'en' ? '🇺🇸' : '🇰🇼' !!}
                                </span>
                                {{ $properties['native'] }}
                            </a>
                            @endforeach
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</nav>

<style>
    /* Base styles */
    .nav-link {
        @apply dynapuff text-blue-600 hover: text-green-500 px-3 py-2 text-sm font-medium transition-all duration-300 relative group-hover:-translate-y-1;
    }

    .nav-link::after {
        content: '';
        @apply absolute bottom-0 left-0 w-full h-0.5 bg-green-500 transform scale-x-0 origin-left transition-transform duration-300;
    }

    .nav-link:hover::after {
        @apply scale-x-100;
    }

    .mobile-nav-link {
        @apply text-blue-600 hover: text-green-500 py-3 text-lg font-medium transition-all duration-300 transform hover:translate-x-2;
    }

    /* Font settings */
    .font-arabic {
        font-family: 'Tajawal', sans-serif;
    }

    /* Mobile menu transitions */
    #mobile-menu {
        transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
    }

    #mobile-menu.hidden {
        opacity: 0;
        visibility: hidden;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const button = document.getElementById('mobile-menu-button');
    const menu = document.getElementById('mobile-menu');
    
    function toggleMenu() {
        const isExpanded = button.getAttribute('aria-expanded') === 'true';
        button.setAttribute('aria-expanded', !isExpanded);
        menu.classList.toggle('hidden');
        document.body.classList.toggle('overflow-hidden');
    }

    // Toggle menu
    button?.addEventListener('click', (e) => {
        e.stopPropagation();
        toggleMenu();
    });

    // Close menu when clicking links
    const links = menu?.querySelectorAll('a');
    links?.forEach(link => {
        link.addEventListener('click', toggleMenu);
    });

    // Close menu on escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && !menu?.classList.contains('hidden')) {
            toggleMenu();
        }
    });

    // Close menu when clicking outside
    document.addEventListener('click', (e) => {
        if (!menu?.classList.contains('hidden') && 
            !button?.contains(e.target) && 
            !menu?.contains(e.target)) {
            toggleMenu();
        }
    });
});
</script>
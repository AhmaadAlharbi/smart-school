<nav class="fixed top-0 left-0 right-0 z-50 bg-gradient-to-b from-blue-50 to-green-50  {{
    LaravelLocalization::getCurrentLocale()==='ar' ? 'ar-font' : 'en-font' }}">
    <div class="container mx-auto px-4 relative">
        <!-- Decorative Elements -->
        <div
            class="absolute top-2 left-10 w-16 h-16 bg-yellow-200 rounded-full opacity-50 blur-xl transform-gpu transition-transform hover:scale-110 duration-1000">
        </div>
        <div
            class="absolute bottom-2 right-10 w-20 h-20 bg-blue-200 rounded-full opacity-50 blur-xl transform-gpu transition-transform hover:scale-110 duration-1000">
        </div>

        <!-- Main navbar content -->
        <div class="max-w-7xl mx-auto relative" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <div class="flex-shrink-0 relative z-10">
                    <img class="h-12 w-auto transform hover:-rotate-6 transition-transform duration-300"
                        src="/api/placeholder/120/48" alt="{{ __('navigation.logo_alt') }}">
                </div>

                <!-- Desktop Navigation -->
                <div
                    class="hidden md:flex md:items-center md:space-x-8 {{ LaravelLocalization::getCurrentLocaleDirection() === 'rtl' ? 'space-x-reverse' : '' }}">
                    <a href="#home"
                        class="dynapuff text-blue-600 hover:text-green-500 px-3 py-2 text-sm font-medium transform hover:-translate-y-1 transition-all duration-300">
                        {{ __('navigation.home') }}
                    </a>
                    <a href="#services"
                        class="dynapuff text-blue-600 hover:text-green-500 px-3 py-2 text-sm font-medium transform hover:-translate-y-1 transition-all duration-300">
                        {{ __('navigation.services') }}
                    </a>
                    <a href="#about"
                        class="dynapuff text-blue-600 hover:text-green-500 px-3 py-2 text-sm font-medium transform hover:-translate-y-1 transition-all duration-300">
                        {{ __('navigation.about') }}
                    </a>
                    <a href="#contact"
                        class="dynapuff text-blue-600 hover:text-green-500 px-3 py-2 text-sm font-medium transform hover:-translate-y-1 transition-all duration-300">
                        {{ __('navigation.contact') }}
                    </a>

                    <!-- Language Selector (Desktop) -->
                    <div class="relative group">
                        <button
                            class="dynapuff flex items-center space-x-2 {{ LaravelLocalization::getCurrentLocaleDirection() === 'rtl' ? 'space-x-reverse' : '' }} text-blue-600 hover:text-green-500 px-3 py-2 text-sm font-medium transform hover:-translate-y-1 transition-all duration-300">
                            <span>{{ __('navigation.language') }}</span>
                            <svg class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </button>
                        <div
                            class="absolute {{ LaravelLocalization::getCurrentLocaleDirection() === 'rtl' ? 'left-0' : 'right-0' }} mt-2 w-48 bg-white/90 backdrop-blur-lg rounded-xl shadow-lg border border-gray-100/50 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top scale-95 group-hover:scale-100">
                            <ul class="py-2">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li>
                                    <a rel="alternate" hreflang="{{ $localeCode }}"
                                        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                        class="dynapuff flex items-center px-4 py-2 text-sm text-blue-600 hover:text-green-500 hover:bg-blue-50/50 transition-colors duration-300">
                                        <span
                                            class="w-6 text-center {{ LaravelLocalization::getCurrentLocaleDirection() === 'rtl' ? 'ml-2' : 'mr-2' }}">
                                            @if($localeCode == 'en')
                                            🇺🇸
                                            @elseif($localeCode == 'ar')
                                            🇰🇼
                                            @endif
                                        </span>
                                        {{ $properties['native'] }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden relative z-10">
                    <button type="button" data-mobile-menu-button aria-expanded="false"
                        class="dynapuff inline-flex items-center justify-center p-2 rounded-lg text-blue-600 hover:text-green-500 hover:bg-blue-50/50 focus:outline-none transition-colors duration-300">
                        <span class="sr-only">{{ __('navigation.toggle_menu') }}</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile menu -->
            <div class="hidden md:hidden relative z-20" data-mobile-menu>
                <div class="p-4 bg-white/90 backdrop-blur-lg rounded-xl shadow-lg mt-2 border border-gray-100/50">
                    <div class="space-y-3">
                        <a href="#home"
                            class="dynapuff text-blue-600 hover:text-green-500 block px-3 py-2 text-base font-medium hover:bg-blue-50/50 rounded-lg transition-all duration-300">
                            {{ __('navigation.home') }}
                        </a>
                        <a href="#services"
                            class="dynapuff text-blue-600 hover:text-green-500 block px-3 py-2 text-base font-medium hover:bg-blue-50/50 rounded-lg transition-all duration-300">
                            {{ __('navigation.services') }}
                        </a>
                        <a href="#about"
                            class="dynapuff text-blue-600 hover:text-green-500 block px-3 py-2 text-base font-medium hover:bg-blue-50/50 rounded-lg transition-all duration-300">
                            {{ __('navigation.about') }}
                        </a>
                        <a href="#contact"
                            class="dynapuff text-blue-600 hover:text-green-500 block px-3 py-2 text-base font-medium hover:bg-blue-50/50 rounded-lg transition-all duration-300">
                            {{ __('navigation.contact') }}
                        </a>

                        <!-- Language Options (Mobile) -->
                        <div class="border-t border-gray-200 mt-3 pt-3">
                            <p class="px-3 text-sm text-gray-500">{{ __('navigation.language') }}</p>
                            <div class="mt-2 space-y-1">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <a rel="alternate" hreflang="{{ $localeCode }}"
                                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                    class="dynapuff flex items-center px-3 py-2 text-base font-medium text-blue-600 hover:text-green-500 hover:bg-blue-50/50 rounded-lg transition-all duration-300">
                                    <span
                                        class="w-6 text-center {{ LaravelLocalization::getCurrentLocaleDirection() === 'rtl' ? 'ml-2' : 'mr-2' }}">
                                        @if($localeCode == 'en')
                                        🇺🇸
                                        @elseif($localeCode == 'ar')
                                        🇰🇼
                                        @endif
                                    </span>
                                    {{ $properties['native'] }}
                                    @if($localeCode === LaravelLocalization::getCurrentLocale())
                                    <span class="ml-auto">
                                        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </span>
                                    @endif
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    // Get the button and menu elements
    const menuButton = document.querySelector('[data-mobile-menu-button]');
    const mobileMenu = document.querySelector('[data-mobile-menu]');
    
    // Add click event listener to button
    menuButton.addEventListener('click', () => {
        // Toggle the 'hidden' class
        mobileMenu.classList.toggle('hidden');
        
        // Toggle aria-expanded for accessibility
        const isExpanded = menuButton.getAttribute('aria-expanded') === 'true';
        menuButton.setAttribute('aria-expanded', !isExpanded);
    });
    
    // Close menu when clicking outside
    document.addEventListener('click', (event) => {
        if (!menuButton.contains(event.target) && !mobileMenu.contains(event.target)) {
            mobileMenu.classList.add('hidden');
            menuButton.setAttribute('aria-expanded', 'false');
        }
    });
</script>
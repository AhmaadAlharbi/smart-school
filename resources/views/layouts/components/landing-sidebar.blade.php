<nav class="fixed top-0 left-0 right-0 z-50 bg-gradient-to-b from-blue-50 to-green-50">
    <div class="container mx-auto px-4 relative">
        <!-- Decorative Elements -->
        <div
            class="absolute top-2 left-10 w-16 h-16 bg-yellow-200 rounded-full opacity-50 blur-xl transform-gpu transition-transform hover:scale-110 duration-1000">
        </div>
        <div
            class="absolute bottom-2 right-10 w-20 h-20 bg-blue-200 rounded-full opacity-50 blur-xl transform-gpu transition-transform hover:scale-110 duration-1000">
        </div>

        <!-- Main navbar content -->
        <div class="max-w-7xl mx-auto relative">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <div class="flex-shrink-0 relative z-10">
                    <img class="h-12 w-auto transform hover:-rotate-6 transition-transform duration-300"
                        src="/api/placeholder/120/48" alt="Sahab Code Logo">
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex md:items-center md:space-x-8">
                    <a href="#home"
                        class="dynapuff text-blue-600 hover:text-green-500 px-3 py-2 text-sm font-medium transform hover:-translate-y-1 transition-all duration-300">
                        Home
                    </a>
                    <a href="#services"
                        class="dynapuff text-blue-600 hover:text-green-500 px-3 py-2 text-sm font-medium transform hover:-translate-y-1 transition-all duration-300">
                        Services
                    </a>
                    <a href="#about"
                        class="dynapuff text-blue-600 hover:text-green-500 px-3 py-2 text-sm font-medium transform hover:-translate-y-1 transition-all duration-300">
                        About
                    </a>
                    <a href="#contact"
                        class="dynapuff text-blue-600 hover:text-green-500 px-3 py-2 text-sm font-medium transform hover:-translate-y-1 transition-all duration-300">
                        Contact
                    </a>
                </div>

                <!-- CTA Buttons -->


                <!-- Mobile menu button -->
                <div class="md:hidden relative z-10">
                    <button type="button"
                        class="dynapuff inline-flex items-center justify-center p-2 rounded-lg text-blue-600 hover:text-green-500 hover:bg-blue-50/50 focus:outline-none transition-colors duration-300 transform hover:-translate-y-1"
                        id="mobile-menu-button" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile menu -->
            <div class="hidden md:hidden relative z-20" id="mobile-menu">
                <div class="p-4 bg-white/90 backdrop-blur-lg rounded-xl shadow-lg mt-2 border border-gray-100/50">
                    <div class="space-y-3">
                        <a href="#home"
                            class="dynapuff text-blue-600 hover:text-green-500 block px-3 py-2 text-base font-medium hover:bg-blue-50/50 rounded-lg transition-all duration-300">
                            Home
                        </a>
                        <a href="#services"
                            class="dynapuff text-blue-600 hover:text-green-500 block px-3 py-2 text-base font-medium hover:bg-blue-50/50 rounded-lg transition-all duration-300">
                            Services
                        </a>
                        <a href="#about"
                            class="dynapuff text-blue-600 hover:text-green-500 block px-3 py-2 text-base font-medium hover:bg-blue-50/50 rounded-lg transition-all duration-300">
                            About
                        </a>
                        <a href="#contact"
                            class="dynapuff text-blue-600 hover:text-green-500 block px-3 py-2 text-base font-medium hover:bg-blue-50/50 rounded-lg transition-all duration-300">
                            Contact
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    let isMenuOpen = false;

    // Toggle mobile menu with animation
    function toggleMobileMenu() {
        isMenuOpen = !isMenuOpen;
        
        if (isMenuOpen) {
            // Show menu
            mobileMenu.classList.remove('hidden');
            requestAnimationFrame(() => {
                mobileMenu.classList.add('fade-in');
            });
            
            // Change to close icon
            mobileMenuButton.querySelector('svg').innerHTML = `
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            `;
        } else {
            // Hide menu
            mobileMenu.classList.remove('fade-in');
            setTimeout(() => {
                mobileMenu.classList.add('hidden');
            }, 300);
            
            // Change to menu icon
            mobileMenuButton.querySelector('svg').innerHTML = `
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            `;
        }
        
        mobileMenuButton.setAttribute('aria-expanded', isMenuOpen);
    }

    // Close menu on window resize
    function handleResize() {
        if (window.innerWidth >= 768 && isMenuOpen) {
            isMenuOpen = false;
            mobileMenu.classList.add('hidden');
            mobileMenu.classList.remove('fade-in');
            mobileMenuButton.setAttribute('aria-expanded', 'false');
            mobileMenuButton.querySelector('svg').innerHTML = `
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            `;
        }
    }

    // Add animation styles
    const style = document.createElement('style');
    style.textContent = `
        .fade-in {
            animation: fadeIn 0.3s ease-out forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    `;
    document.head.appendChild(style);

    // Event listeners
    mobileMenuButton.addEventListener('click', toggleMobileMenu);
    window.addEventListener('resize', handleResize);
});
</script>
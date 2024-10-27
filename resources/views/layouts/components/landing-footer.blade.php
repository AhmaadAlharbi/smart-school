<footer class="bg-gray-900 py-10">
    <div class="border-b border-white/10 pb-8">
        <div class="container mx-auto">
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 lg:col-span-4">
                    <div class="space-y-4 px-4">
                        <div>
                            <h6 class="text-white text-lg leading-none dynapuff rtl:font-[Tajawal]">{{
                                __('footer.about.title') }}</h6>
                            <hr class="w-10 border-t-4 border-blue-500 inline-block">
                        </div>
                        <img src="/images/sahabcode-logo.png" class="w-auto" alt="Sahab Code Logo">
                        <p class="text-base text-gray-400 rtl:font-[Tajawal]">{{ __('footer.about.description') }}</p>
                        <div class="flex {{ app()->getLocale() === 'ar' ? 'space-x-reverse' : 'space-x-3' }}">
                            <!-- Social Media Links -->
                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-4">
                    <div class="grid lg:grid-cols-2 gap-6">
                        <div class="space-y-3 px-4">
                            <div>
                                <h6 class="text-white text-lg leading-none dynapuff rtl:font-[Tajawal]">{{
                                    __('footer.services.title') }}</h6>
                                <hr class="w-10 border-t-4 border-green-500 inline-block">
                            </div>
                            <ul class="space-y-3 text-gray-400">
                                <li>
                                    <a href="#"
                                        class="hover:text-blue-400 transition-colors duration-300 rtl:font-[Tajawal]">
                                        {{ __('footer.services.web_design') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="hover:text-blue-400 transition-colors duration-300 rtl:font-[Tajawal]">
                                        {{ __('footer.services.web_development') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="space-y-3 px-4">
                            <div>
                                <h6 class="text-white text-lg leading-none dynapuff rtl:font-[Tajawal]">{{
                                    __('footer.quick_links.title') }}</h6>
                                <hr class="w-10 border-t-4 border-blue-500 inline-block">
                            </div>
                            <ul class="space-y-3 text-gray-400">
                                <li>
                                    <a href="/demo-dashboard"
                                        class="hover:text-green-400 transition-colors duration-300 rtl:font-[Tajawal]">
                                        {{ __('footer.quick_links.dashboard') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-4">
                    <div class="space-y-3 px-4">
                        <div>
                            <h6 class="text-white text-lg leading-none dynapuff rtl:font-[Tajawal]">{{
                                __('footer.contact.title') }}</h6>
                            <hr class="w-10 border-t-4 border-green-500 inline-block">
                        </div>
                        <ul class="space-y-3 text-gray-400">
                            <li>
                                <a href="mailto:contact@sahabcode.com"
                                    class="inline-flex items-center hover:text-blue-400 transition-colors duration-300 rtl:font-[Tajawal] {{ app()->getLocale() === 'ar' ? 'flex-row-reverse' : '' }}">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="{{ app()->getLocale() === 'ar' ? 'ml-2' : 'mr-2' }} w-5 h-5 text-green-500"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    {{ __('footer.contact.email') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto px-4 py-6">
        <p class="text-center text-gray-400 rtl:font-[Tajawal]">
            © <span id="year">2024</span>
            <a href="#" class="text-blue-500 hover:text-blue-400">Sahab Code</a>.
            {{ __('footer.copyright.made_with') }} <span class="text-red-500">♥</span>.
            {{ __('footer.copyright.rights') }}.
        </p>
    </div>
</footer>
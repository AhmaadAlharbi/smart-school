@extends('layouts.landing-master')

@section('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DynaPuff:wght@400..700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Nunito:wght@400;700&display=swap"
    rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Nunito:wght@400;700&display=swap"
    rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js"></script>
<style>
    .dynapuff {
        font-family: "DynaPuff", system-ui;
        font-optical-sizing: auto;
        font-style: normal;
        font-variation-settings: "wdth" 100;
    }

    .dynapuff-normal {
        font-weight: 400;
    }

    .dynapuff-bold {
        font-weight: 700;
    }
</style>
<style>
    .fredoka-one {
        font-family: 'Fredoka One', cursive;
    }

    .nunito {
        font-family: 'Nunito', sans-serif;
    }

    @keyframes float {
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-20px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    .float {
        animation: float 6s ease-in-out infinite;
    }
</style>
<!-- SWIPER CSS -->
<link rel="stylesheet" href="{{asset('build/assets/libs/swiper/swiper-bundle.min.css')}}">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Nunito:wght@400;700&display=swap"
    rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js"></script>
<style>
    .fredoka-one {
        font-family: 'Fredoka One', cursive;
    }

    .nunito {
        font-family: 'Nunito', sans-serif;
    }

    @keyframes float {
        0% {
            transform: translateY(0px) rotate(3deg);
        }

        50% {
            transform: translateY(-20px) rotate(3deg);
        }

        100% {
            transform: translateY(0px) rotate(3deg);
        }
    }

    .float {
        animation: float 6s ease-in-out infinite;
    }

    .wave-bg {
        background: linear-gradient(45deg, #3b82f6 25%, #fbbf24 75%);
        background-size: 200% 200%;
        animation: wave 15s ease infinite;
    }

    @keyframes wave {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    .blob {
        animation: blob 7s ease-in-out infinite;
        transition: all 1s ease-in-out;
    }

    @keyframes blob {

        0%,
        100% {
            border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
        }

        50% {
            border-radius: 30% 60% 70% 40% / 50% 60% 30% 60%;
        }
    }
</style>
<style>
    .fredoka-one {
        font-family: 'Fredoka One', cursive;
    }

    .nunito {
        font-family: 'Nunito', sans-serif;
    }

    @keyframes float-1 {
        0% {
            transform: translateY(0px) rotate(3deg);
        }

        50% {
            transform: translateY(-15px) rotate(3deg);
        }

        100% {
            transform: translateY(0px) rotate(3deg);
        }
    }

    @keyframes float-2 {
        0% {
            transform: translateY(0px) rotate(-3deg);
        }

        50% {
            transform: translateY(-20px) rotate(-3deg);
        }

        100% {
            transform: translateY(0px) rotate(-3deg);
        }
    }

    @keyframes float-3 {
        0% {
            transform: translateY(0px) rotate(2deg);
        }

        50% {
            transform: translateY(-12px) rotate(2deg);
        }

        100% {
            transform: translateY(0px) rotate(2deg);
        }
    }

    .float-1 {
        animation: float-1 6s ease-in-out infinite;
    }

    .float-2 {
        animation: float-2 7s ease-in-out infinite 0.5s;
    }

    .float-3 {
        animation: float-3 5s ease-in-out infinite 1s;
    }

    .wave-bg {
        background: linear-gradient(45deg, #3b82f6 25%, #fbbf24 75%);
        background-size: 200% 200%;
        animation: wave 15s ease infinite;
    }

    @keyframes wave {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }
</style>
<style>
    @keyframes float {

        0%,
        100% {
            transform: translateY(0px) rotate(2deg);
        }

        50% {
            transform: translateY(-20px) rotate(2deg);
        }
    }

    @keyframes floatShadow {

        0%,
        100% {
            transform: scale(1);
            opacity: 0.3;
        }

        50% {
            transform: scale(0.85);
            opacity: 0.2;
        }
    }

    @keyframes soarIn {
        0% {
            transform: translateY(50px);
            opacity: 0;
        }

        100% {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .float-animation {
        animation: float 6s ease-in-out infinite;
    }

    .shadow-animation {
        animation: floatShadow 6s ease-in-out infinite;
    }

    .soar-in {
        animation: soarIn 1s ease-out forwards;
    }

    .soar-in-delay-1 {
        opacity: 0;
        animation: soarIn 1s ease-out 0.2s forwards;
    }

    .soar-in-delay-2 {
        opacity: 0;
        animation: soarIn 1s ease-out 0.4s forwards;
    }

    [lang="ar"] {
        font-family: 'Cairo', sans-serif;
        /* Arabic version */
    }

    .ltr-layout {
        text-align: left;
        direction: ltr;
    }

    /* RTL (Arabic) Layout */
    .rtl-layout {
        text-align: right;
        direction: rtl;
    }
</style>

@endsection

@section('content')

<div class="main-content landing-main !p-0  {{ app()->getLocale() == 'ar' ? 'rtl-layout' : 'ltr-layout' }}">

    <!-- Start::Home Content new one -->

    <div class="bg-gradient-to-b from-blue-50 to-green-50">
        <div class="container mx-auto px-4 py-16 relative">
            <div class="flex flex-col lg:flex-row items-center justify-center lg:pt-20 lg:pb-24 pt-12 pb-12 relative">
                <div class="container max-w-7xl mx-auto px-4 lg:px-8">
                    <div class="flex flex-col lg:flex-row items-center justify-between gap-12 py-10">
                        <!-- Left Content -->
                        <div
                            class="lg:w-1/2 text-center lg:text-{{ app()->getLocale() == 'ar' ? 'right' : 'left' }} mb-8 lg:mb-0 z-10">
                            <div class="max-w-xl mx-auto lg:mx-0">
                                <div class="space-y-8">
                                    <h1 class="dynapuff text-5xl lg:text-6xl font-bold">
                                        <span class="block soar-in">{{ __('landing.headline_1') }}</span>
                                        <span class="text-blue-600 block soar-in-delay-1">{{ __('landing.headline_2')
                                            }}</span>
                                        <span class="block text-green-600 mt-2 soar-in-delay-2">{{
                                            __('landing.headline_3') }}</span>
                                    </h1>
                                    <p class="text-lg text-gray-700 soar-in-delay-2">
                                        {{ __('landing.description') }}
                                    </p>

                                    <div class="flex flex-col sm:flex-row 
                                    {{ app()->getLocale() == 'ar' ? 'sm:flex-row-reverse' : '' }} 
                                    justify-center space-y-4 sm:space-y-0 sm:space-x-6 soar-in-delay-2">

                                        <a href="#"
                                            class="dynapuff inline-block px-8 py-4 bg-blue-500 hover:bg-blue-600 text-white rounded-full font-semibold transform hover:-translate-y-2 transition-all duration-300 shadow-lg hover:shadow-xl">
                                            {{ __('landing.button_see') }}
                                        </a>

                                        <a href="#"
                                            class="dynapuff inline-block px-8 py-4 bg-green-500 hover:bg-green-600 text-white rounded-full font-semibold transform hover:-translate-y-2 transition-all duration-300 shadow-lg hover:shadow-xl">
                                            {{ __('landing.button_adventure') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Right Content -->
                        <div class="w-full lg:w-1/2 px-4 sm:px-6 relative">
                            <div class="float-animation mx-auto max-w-2xl">
                                <div class="bg-white rounded-xl shadow-lg p-2 sm:p-3 relative">
                                    <div class="relative w-full aspect-[4/3] md:aspect-[16/9]">
                                        <img src="{{ asset('build/assets/img/landing/hero3.jpg') }}"
                                            alt="Happy kids using a computer"
                                            class="relative rounded-xl w-full h-full object-cover">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- End::Services Content -->
    <!-- Start::Services Content -->
    <div class="bg-gradient-to-b from-blue-50 to-purple-50 min-h-screen flex items-center" id="services">
        <div class="container mx-auto px-4 py-16 md:py-24">
            <!-- Header Section -->
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="dynapuff text-4xl font-bold text-blue-600 mb-6">
                    Our Expert Services
                </h2>
                <p class="text-lg text-gray-700 px-4">
                    We offer comprehensive web solutions tailored specifically for schools, from fresh designs to
                    complete redesigns.
                </p>
            </div>

            <!-- Grid Section - 3 Main Services -->
            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto px-4">
                <!-- Web Design Service -->
                <div class="bg-white rounded-xl shadow-lg p-8 transition-transform hover:scale-105">
                    <div class="flex justify-center mb-6">
                        <div class="bg-blue-500 rounded-full p-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="dynapuff text-2xl font-semibold text-purple-600 mb-4 text-center">Web Design</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-2 mt-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            Custom and responsive designs
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-2 mt-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            User-friendly interfaces
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-2 mt-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            Brand integration
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-2 mt-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            Modern visual elements
                        </li>
                    </ul>
                </div>

                <!-- Web Development Service -->
                <div class="bg-white rounded-xl shadow-lg p-8 transition-transform hover:scale-105">
                    <div class="flex justify-center mb-6">
                        <div class="bg-purple-500 rounded-full p-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="dynapuff text-2xl font-semibold text-purple-600 mb-4 text-center">Web Development</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-2 mt-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            Custom CMS integration
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-2 mt-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            Student portal systems
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-2 mt-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            Event calendar features
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-2 mt-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            Optimized performance
                        </li>
                    </ul>
                </div>

                <!-- Website Redesign Service -->
                <div class="bg-white rounded-xl shadow-lg p-8 transition-transform hover:scale-105">
                    <div class="flex justify-center mb-6">
                        <div class="bg-pink-500 rounded-full p-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="dynapuff text-2xl font-semibold text-purple-600 mb-4 text-center">Website Redesign</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-2 mt-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            Site analysis & audit
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-2 mt-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            Modern UI/UX upgrade
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-2 mt-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            Content migration
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-2 mt-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            SEO preservation
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Optional CTA -->
            <div class="text-center mt-16">
                <a href="#contact"
                    class="inline-block bg-gradient-to-r from-blue-600 to-purple-600 text-white px-8 py-3 rounded-full font-semibold hover:opacity-90 transition-opacity">
                    Discuss Your Project
                </a>
            </div>
        </div>
    </div>
    <!-- End::Services Content -->
    <div class="max-w-6xl mx-auto px-4 py-16 bg-gradient-to-b from-blue-50 to-purple-50">
        <h3 class="dynapuff text-4xl font-bold text-blue-600 text-center mb-12">How We Work</h3>

        <!-- Process Timeline -->
        <div class="grid lg:grid-cols-4 gap-8 relative">
            <!-- Connecting Line (hidden on mobile) -->
            <div
                class="hidden lg:block absolute top-24 left-0 right-0 h-1 bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400">
            </div>

            <!-- Step 1 -->
            <div class="relative group">
                <div class="bg-white rounded-xl p-6 shadow-lg transition-transform hover:scale-105">
                    <div class="absolute -top-8 left-1/2 transform -translate-x-1/2">
                        <div
                            class="bg-gradient-to-r from-blue-500 to-blue-600 rounded-full w-16 h-16 flex items-center justify-center mx-auto ring-4 ring-white">
                            <span class="text-2xl font-bold text-white">1</span>
                        </div>
                    </div>
                    <div class="mt-8 text-center">
                        <h4 class="dynapuff text-xl font-semibold text-blue-600 mb-3">Discovery Meeting</h4>
                        <ul class="text-gray-600 space-y-2 text-sm">
                            <li>• Initial consultation</li>
                            <li>• Requirements gathering</li>
                            <li>• Goals definition</li>
                            <li>• Timeline planning</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="relative group">
                <div class="bg-white rounded-xl p-6 shadow-lg transition-transform hover:scale-105">
                    <div class="absolute -top-8 left-1/2 transform -translate-x-1/2">
                        <div
                            class="bg-gradient-to-r from-purple-500 to-purple-600 rounded-full w-16 h-16 flex items-center justify-center mx-auto ring-4 ring-white">
                            <span class="text-2xl font-bold text-white">2</span>
                        </div>
                    </div>
                    <div class="mt-8 text-center">
                        <h4 class="dynapuff text-xl font-semibold text-purple-600 mb-3">Design Creation</h4>
                        <ul class="text-gray-600 space-y-2 text-sm">
                            <li>• Wireframe design</li>
                            <li>• Visual mockups</li>
                            <li>• Design revision</li>
                            <li>• Client approval</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="relative group">
                <div class="bg-white rounded-xl p-6 shadow-lg transition-transform hover:scale-105">
                    <div class="absolute -top-8 left-1/2 transform -translate-x-1/2">
                        <div
                            class="bg-gradient-to-r from-green-500 to-green-600 rounded-full w-16 h-16 flex items-center justify-center mx-auto ring-4 ring-white">
                            <span class="text-2xl font-bold text-white">3</span>
                        </div>
                    </div>
                    <div class="mt-8 text-center">
                        <h4 class="dynapuff text-xl font-semibold text-green-600 mb-3">Development</h4>
                        <ul class="text-gray-600 space-y-2 text-sm">
                            <li>• Frontend coding</li>
                            <li>• Backend integration</li>
                            <li>• Content upload</li>
                            <li>• Testing phase</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="relative group">
                <div class="bg-white rounded-xl p-6 shadow-lg transition-transform hover:scale-105">
                    <div class="absolute -top-8 left-1/2 transform -translate-x-1/2">
                        <div
                            class="bg-gradient-to-r from-pink-500 to-pink-600 rounded-full w-16 h-16 flex items-center justify-center mx-auto ring-4 ring-white">
                            <span class="text-2xl font-bold text-white">4</span>
                        </div>
                    </div>
                    <div class="mt-8 text-center">
                        <h4 class="dynapuff text-xl font-semibold text-pink-600 mb-3">Launch & Support</h4>
                        <ul class="text-gray-600 space-y-2 text-sm">
                            <li>• Final review</li>
                            <li>• Site deployment</li>
                            <li>• Training session</li>
                            <li>• Ongoing support</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional CTA -->
        <div class="text-center mt-12">
            <a href="#contact"
                class="inline-block bg-gradient-to-r from-blue-600 to-purple-600 text-white px-8 py-3 rounded-full font-semibold hover:opacity-90 transition-opacity">
                Start Your Project
            </a>
        </div>
    </div>
    <!-- Start::About Content -->
    <div class="bg-gradient-to-b from-blue-50 to-yellow-50 min-h-screen flex items-center" id="about">
        <div class="container mx-auto px-4 sm:px-6 py-16 sm:py-24">
            <div class="max-w-7xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                    <!-- Content Column -->
                    <div class="order-2 lg:order-1 max-w-xl mx-auto lg:mx-0">
                        <div class="space-y-6">
                            <h2 class="dynapuff text-center lg:text-left text-3xl sm:text-4xl font-bold text-blue-600">
                                Custom School Landing Pages
                                <span class="block text-green-500 mt-2">Designed With Love!</span>
                            </h2>
                            <h3 class="dynapuff font-semibold text-2xl text-purple-600 text-center lg:text-left">Your
                                School, Your Style!</h3>
                            <p class="text-lg text-gray-700 leading-relaxed text-center lg:text-left">
                                We create delightful landing pages that capture your school's unique spirit. From
                                colorful,
                                mobile-friendly designs to fun features like interactive calendars and virtual tours,
                                we make sure your site is as special as your little learners!
                            </p>
                            <ul class="space-y-4 max-w-lg mx-auto lg:mx-0">
                                <li class="flex items-center">
                                    <i class="ri-check-line text-green-500 text-xl mr-3"></i>
                                    <span class="text-gray-700">Playful and professional designs</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="ri-check-line text-green-500 text-xl mr-3"></i>
                                    <span class="text-gray-700">Easy-to-use features for parents and staff</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="ri-check-line text-green-500 text-xl mr-3"></i>
                                    <span class="text-gray-700">Mobile-friendly for on-the-go access</span>
                                </li>
                            </ul>
                        </div>
                        <div class="text-center lg:text-left mt-8">
                            <a href="{{url('about')}}"
                                class="dynapuff inline-block py-3 px-8 bg-blue-500 hover:bg-blue-600 text-white rounded-full transition duration-300 shadow-lg hover:shadow-xl">
                                Discover the Magic <i class="ri-magic-line ml-2"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Image Column -->
                    <div class="order-1 lg:order-2 max-w-2xl mx-auto lg:mx-0 w-full">
                        <div class="relative">
                            <!-- Gradient Background -->
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-blue-200 to-purple-200 transform -rotate-6 rounded-lg blur-sm">
                            </div>
                            <!-- Image Container -->
                            <div class="relative p-2">
                                <img src="{{asset('build/assets/img/landing/design.jpg')}}"
                                    class="rounded-lg shadow-xl object-cover object-center w-full h-[24rem] sm:h-[28rem]"
                                    alt="Colorful kindergarten website design example">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End::About Content -->

    <!-- Start::Mission Content -->
    <div class="bg-gradient-to-b from-green-50 to-blue-50 min-h-screen flex items-center" id="our-mission">
        <div class="container mx-auto px-4 sm:px-6 py-16 sm:py-24">
            <div class="max-w-7xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                    <!-- Image Column -->
                    <div class="order-2 lg:order-1 max-w-2xl mx-auto lg:mx-0 w-full">
                        <div class="relative p-3">
                            <!-- Gradient Background -->
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-yellow-200 to-pink-200 transform rotate-3 rounded-lg blur-sm">
                            </div>
                            <!-- Image Container -->
                            <div class="relative">
                                <img src="{{asset('build/assets/img/landing/dashboard.jpg')}}"
                                    class="rounded-lg shadow-xl border-4 border-white w-full h-[24rem] sm:h-[28rem] object-cover object-center"
                                    alt="Colorful and intuitive kindergarten dashboard">
                            </div>
                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="order-1 lg:order-2 max-w-xl mx-auto lg:mx-0">
                        <div class="space-y-8">
                            <h2
                                class="dynapuff text-center lg:text-left text-3xl sm:text-4xl font-bold text-purple-600">
                                Magic Dashboard
                                <span class="block text-green-500 mt-2">for Happy Little Schools!</span>
                            </h2>
                            <div class="space-y-6">
                                <p class="text-lg text-gray-700 leading-relaxed text-center lg:text-left">
                                    Our colorful and easy-to-use dashboard makes running your kindergarten a breeze!
                                    It's like having a friendly assistant who knows everything about your school.
                                </p>
                                <ul class="space-y-4 max-w-lg mx-auto lg:mx-0">
                                    <li
                                        class="flex items-start group hover:transform hover:scale-105 transition-transform duration-300">
                                        <i class="ri-parent-line text-blue-500 text-2xl mr-3 mt-1"></i>
                                        <span class="text-gray-700">Keep all your little stars' info in one bright,
                                            shiny place!</span>
                                    </li>
                                    <li
                                        class="flex items-start group hover:transform hover:scale-105 transition-transform duration-300">
                                        <i class="ri-message-3-line text-pink-500 text-2xl mr-3 mt-1"></i>
                                        <span class="text-gray-700">Chat with parents as easily as planning
                                            playtime.</span>
                                    </li>
                                    <li
                                        class="flex items-start group hover:transform hover:scale-105 transition-transform duration-300">
                                        <i class="ri-calendar-todo-line text-yellow-500 text-2xl mr-3 mt-1"></i>
                                        <span class="text-gray-700">Manage classes and see how awesome your teachers are
                                            doing!</span>
                                    </li>
                                    <li
                                        class="flex items-start group hover:transform hover:scale-105 transition-transform duration-300">
                                        <i class="ri-money-dollar-box-line text-green-500 text-2xl mr-3 mt-1"></i>
                                        <span class="text-gray-700">Keep track of fees and payments, as easy as counting
                                            to three!</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="text-center lg:text-left mt-8">
                            <a href="{{url('about')}}"
                                class="dynapuff inline-block py-3 px-8 bg-purple-500 hover:bg-purple-600 text-white rounded-full transition duration-300 shadow-lg hover:shadow-xl">
                                See the Magic in Action <i class="ri-sparkle-line ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End::Mission Content -->


    <!-- Start::Banner Content -->
    <div class="relative bg-[url('http://127.0.0.1:8000/build/assets/img/landing/1.jpg')] bg-cover bg-center py-20">
        <div class="absolute inset-0 bg-blue-600/80"></div>
        <div class="container mx-auto px-4 relative z-10 text-center">
            <h2 class="dynapuff text-4xl font-bold text-white mb-6">
                Bringing Joy to Learning, One Click at a Time!
            </h2>
            <p class="text-xl text-white/90 max-w-2xl mx-auto mb-8">
                We create colorful, fun websites that make school life easier for little learners,
                busy parents, and amazing teachers. From playful homepages to easy-to-use dashboards,
                we're here to make your kindergarten shine online!
            </p>
            <a href="{{url('contactus')}}"
                class="dynapuff inline-block py-3 px-8 bg-yellow-400 hover:bg-yellow-500 text-blue-800 rounded-full transition duration-300 text-lg font-bold shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                Let's Create Magic Together!
            </a>
        </div>
    </div>

    <!-- End::Banner Content -->

    <!-- Start::Features Content -->
    {{-- <div class="bg-gray-100 py-12" id="features">
        <div class="container mx-auto max-w-7xl space-y-10">
            <div class="text-center mb-12">
                <h2 class="section-title text-3xl font-bold text-gray-800 md:text-4xl">
                    <span class="px-4 py-2 bg-white rounded-md shadow-md">Our Advanced Features</span>
                </h2>
                <p class="text-gray-500 text-lg mt-4">Explore our innovative features designed to enhance your project’s
                    performance with minimal dependencies.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Feature Box 1 -->
                <div class="bg-white rounded-lg shadow-lg p-6 transition-transform transform hover:scale-105">
                    <div class="flex items-center mb-4">
                        <div class="flex-shrink-0 w-14 h-14 rounded-full bg-blue-100 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-blue-500" viewBox="0 0 24 24"
                                id="award">
                                <circle cx="12" cy="9.25" r="6" fill="#b7bbc0"></circle>
                                <path fill="#9399a1"
                                    d="m19.574 17.013-2.565-4.453-.01.004A5.992 5.992 0 0 1 12 15.25c-.129 0-.254-.011-.381-.02l.39.67 2.374 4.112a.5.5 0 0 0 .862.006L16.57 17.8l2.579-.038a.5.5 0 0 0 .426-.75z">
                                </path>
                                <path fill="#4b5563"
                                    d="M11.619 15.23a5.99 5.99 0 0 1-4.62-2.668l-2.564 4.45a.5.5 0 0 0 .426.75l2.579.038 1.324 2.218a.5.5 0 0 0 .862-.006L12 15.9l.004-.007-.385-.662z">
                                </path>
                            </svg>
                        </div>
                        <h2 class="text-gray-800 text-xl font-semibold ml-4">Quality & Clean Code</h2>
                    </div>
                    <p class="text-base text-gray-500 mb-4">Our code is meticulously structured, ensuring clarity and
                        maintainability with comprehensive comments.</p>
                    <a class="font-semibold text-blue-600 text-sm flex items-center" href="javascript:void(0);">
                        Learn More <i class="ri ri-arrow-right-line ml-2"></i>
                    </a>
                </div>
                <!-- Feature Box 2 -->
                <div class="bg-white rounded-lg shadow-lg p-6 transition-transform transform hover:scale-105">
                    <div class="flex items-center mb-4">
                        <div class="flex-shrink-0 w-14 h-14 rounded-full bg-green-100 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-green-500" viewBox="0 0 24 24"
                                id="layer-group">
                                <path fill="#b7bbc0"
                                    d="M12,14.19531c-0.17551-0.00004-0.34793-0.04618-0.5-0.13379l-9-5.19726C2.02161,8.58794,1.85779,7.97612,2.13411,7.49773C2.22187,7.34579,2.34806,7.2196,2.5,7.13184l9-5.19336c0.30964-0.17774,0.69036-0.17774,1,0l9,5.19336c0.4784,0.27632,0.64221,0.88814,0.36589,1.36653C21.77813,8.65031,21.65194,8.7765,21.5,8.86426l-9,5.19726C12.34793,14.14913,12.17551,14.19527,12,14.19531z">
                                </path>
                                <path fill="#9399a1"
                                    d="M21.5,11.13184l-1.96411-1.13337L12.5,14.06152c-0.30947,0.17839-0.69053,0.17839-1,0L4.46411,9.99847L2.5,11.13184c-0.47839,0.27632-0.64221,0.88814-0.36589,1.36653C2.22187,12.65031,2.34806,12.7765,2.5,12.86426l9,5.19726c0.30947,0.17838,0.69053,0.17838,1,0l9-5.19726c0.4784-0.27632,0.64221-0.88814,0.36589-1.36653C21.77813,11.34579,21.65194,11.2196,21.5,11.13184z">
                                </path>
                                <path fill="#4b5563"
                                    d="M21.5,15.13184l-1.96411-1.13337L12.5,18.06152c-0.30947,0.17838-0.69053,0.17838-1,0l-7.03589-4.06305L2.5,15.13184c-0.47839,0.27632-0.64221,0.88814-0.36589,1.36653C2.22187,16.65031,2.34806,16.7765,2.5,16.86426l9,5.19726c0.30947,0.17838,0.69053,0.17838,1,0l9-5.19726c0.4784-0.27632,0.64221-0.88814,0.36589-1.36653C21.77813,15.34579,21.65194,15.2196,21.5,15.13184z">
                                </path>
                            </svg>
                        </div>
                        <h2 class="text-gray-800 text-xl font-semibold ml-4">Multiple Demos</h2>
                    </div>
                    <p class="text-base text-gray-500 mb-4">We offer various demos to provide a quick overview of our
                        features and capabilities.</p>
                    <a class="font-semibold text-green-600 text-sm flex items-center" href="javascript:void(0);">
                        Learn More <i class="ri ri-arrow-right-line ml-2"></i>
                    </a>
                </div>
                <!-- Feature Box 3 -->
                <div class="bg-white rounded-lg shadow-lg p-6 transition-transform transform hover:scale-105">
                    <div class="flex items-center mb-4">
                        <div
                            class="flex-shrink-0 w-14 h-14 rounded-full bg-yellow-100 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-yellow-500" viewBox="0 0 24 24"
                                id="calculator">
                                <path fill="#b7bbc0"
                                    d="M16 11H8a1 1 0 0 1-1-.999V6a1 1 0 0 1 .999-1H16a1 1 0 0 1 1 .999V10a1 1 0 0 1-.999 1H16z">
                                </path>
                                <path fill="#9399a1"
                                    d="M18 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm-1 4v4a1 1 0 0 1-.999 1H8a1 1 0 0 1-1-.999V6a1 1 0 0 1 .999-1H16a1 1 0 0 1 1 .999V6z">
                                </path>
                                <circle cx="8" cy="18" r="1" fill="#4b5563"></circle>
                                <circle cx="12" cy="18" r="1" fill="#4b5563"></circle>
                                <circle cx="16" cy="18" r="1" fill="#4b5563"></circle>
                            </svg>
                        </div>
                        <h2 class="text-gray-800 text-xl font-semibold ml-4">Affordable Pricing</h2>
                    </div>
                    <p class="text-base text-gray-500 mb-4">We provide high-quality solutions at competitive prices
                        without compromising on quality.</p>
                    <a class="font-semibold text-yellow-600 text-sm flex items-center" href="javascript:void(0);">
                        Learn More <i class="ri ri-arrow-right-line ml-2"></i>
                    </a>
                </div>
                <!-- Feature Box 4 -->
                <div class="bg-white rounded-lg shadow-lg p-6 transition-transform transform hover:scale-105">
                    <div class="flex items-center mb-4">
                        <div class="flex-shrink-0 w-14 h-14 rounded-full bg-red-100 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-red-500" viewBox="0 0 24 24"
                                id="shield">
                                <path fill="#b7bbc0"
                                    d="M12 2c-1.1 0-2 .9-2 2v3c0 1.11-.9 2-2 2H4v6.91c0 1.1.85 1.99 1.93 2l6.07.09c1.07 0 1.99-.89 1.99-2V8h1c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2h-4z">
                                </path>
                                <path fill="#9399a1" d="M12 20c-1.66 0-3-1.34-3-3h6c0 1.66-1.34 3-3 3z"></path>
                                <path fill="#4b5563"
                                    d="M20 8v10c0 1.1-.9 2-2 2H6c-1.1 0-2-.9-2-2V8c0-1.1.9-2 2-2h1c0-1.1.9-2 2-2h6c1.1 0 2 .9 2 2h1c1.1 0 2 .9 2 2zm-6 4H8c-1.1 0-2 .9-2 2v2h12v-2c0-1.1-.9-2-2-2z">
                                </path>
                            </svg>
                        </div>
                        <h2 class="text-gray-800 text-xl font-semibold ml-4">Reliable Support</h2>
                    </div>
                    <p class="text-base text-gray-500 mb-4">Our team is available 24/7 to assist you with any queries or
                        issues you may encounter.</p>
                    <a class="font-semibold text-red-600 text-sm flex items-center" href="javascript:void(0);">
                        Learn More <i class="ri ri-arrow-right-line ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- End::Features Content -->

    <!-- Start::Statistics Content -->
    {{-- <div id="statistics"
        class="section flex relative bg-[url('http://127.0.0.1:8000/build/assets/img/landing/1.jpg')] bg-cover before:bg-primary/90 before:absolute before:w-full before:h-full before:top-0 before:inset-x-0">
        <div class="container  mx-auto z-[0]">
            <div class="text-center max-w-[80rem] mx-auto mb-12">
                <h2 class="section-title text-center text-3xl font-bold text-white md:text-4xl justify-center">
                    <span class="px-3">Why Does
                        People Love US ...!!</span>
                </h2>
                <p class="w-2/3 mx-auto my-4 text-base text-white/70">We are proud to have top class clients and
                    customers,which motivates us to work more on projects.</p>
            </div>
            <div class="grid lg:grid-cols-4 gap-0  rounded-sm">
                <div class="">
                    <div class="text-center space-y-3 p-4">
                        <p class="text-4xl text-white mb-0 font-bold"><span class="count-up"
                                data-count="137">137</span>+</p>
                        <span class="text-lg font-semibold text-white/70">Total Projects</span>
                    </div>
                </div>
                <div class="">
                    <div class="text-center space-y-3 p-4">
                        <p class=" text-4xl text-white mb-0 font-bold"><span class="count-up"
                                data-count="200">200</span>+</p>
                        <span class="text-lg font-semibold text-white/70">Profesional Team</span>
                    </div>
                </div>
                <div class="">
                    <div class="text-center space-y-3 p-4">
                        <p class=" text-4xl text-white mb-0 font-bold"><span class="count-up"
                                data-count="1000">1000</span>+</p>
                        <span class="text-lg font-semibold text-white/70">Happy Customers</span>
                    </div>
                </div>
                <div class="">
                    <div class="text-center space-y-3 p-4">
                        <p class=" text-4xl text-white mb-0 font-bold"><span class="count-up" data-count="5">5</span>+
                        </p>
                        <span class="text-lg font-semibold text-white/70">Years of Experience</span>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End::Statistics Content -->

    <!-- Start::Testinominals Content -->
    <div class="bg-gradient-to-b from-yellow-100 to-blue-100 py-16" id="testimonials">
        <div class="container mx-auto px-4">
            <h2 class="dynapuff text-4xl font-bold text-center text-purple-600 mb-12">
                Happy Voices from Our Playground!
            </h2>
            <div class="max-w-3xl mx-auto">
                <div class="bg-white rounded-3xl shadow-xl p-8 relative">
                    <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <div class="bg-yellow-400 rounded-full p-3 shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex justify-center space-x-1 mb-4">
                        <i class="ri-star-fill text-yellow-400 text-2xl"></i>
                        <i class="ri-star-fill text-yellow-400 text-2xl"></i>
                        <i class="ri-star-fill text-yellow-400 text-2xl"></i>
                        <i class="ri-star-fill text-yellow-400 text-2xl"></i>
                        <i class="ri-star-fill text-yellow-400 text-2xl"></i>
                    </div>
                    <p class="text-lg text-gray-700 text-center mb-6">
                        "The landing page designed for Bright Kids Kindergarten is absolutely magical!
                        It's like they sprinkled fairy dust on our website. The design is so vibrant and
                        engaging, it perfectly captures the joy and energy of our little learners.
                        We're over the moon with the results!"
                    </p>
                    <div class="flex items-center justify-center">
                        <img alt="Jessica Smith" src="{{asset('build/assets/img/users/owner.jpg')}}"
                            class="w-16 h-16 rounded-full border-4 border-purple-200">
                        <div class="ml-4">
                            <p class="dynapuff font-bold text-lg text-purple-600">Jessica Smith</p>
                            <p class="text-gray-600">Principal, Bright Kids Kindergarten</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End::Testinominals Content -->

    <!-- Start::Pricing Content -->
    <div class="bg-gradient-to-b from-blue-100 to-purple-100 py-16" id="pricing">
        <div class="container mx-auto px-4">
            <h2 class="dynapuff text-4xl font-bold text-center text-purple-600 mb-8">
                Choose Your Adventure!
            </h2>
            <p class="text-center text-lg text-gray-700 max-w-2xl mx-auto mb-12">
                Pick the perfect plan for your school's online journey. Whether you need a magical landing page or a
                full dashboard wonderland, we've got you covered!
            </p>
            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- Landing Page Plan -->
                <div class="bg-white rounded-3xl shadow-xl overflow-hidden transform transition-all hover:scale-105">
                    <div class="p-8">
                        <div class="w-16 h-16 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="ri-layout-4-line text-3xl text-purple-600"></i>
                        </div>
                        <h3 class="dynapuff text-2xl font-bold text-center text-purple-600 mb-2">Sunny Landing</h3>
                        <p class="text-center text-gray-600 mb-6">Perfect for showcasing your school's sparkle!</p>
                        <p class="text-center">
                            <span class="dynapuff text-4xl font-bold text-purple-600">150 KD</span>
                        </p>
                    </div>
                    <div class="bg-purple-50 p-8">
                        <ul class="space-y-4">
                            <li class="flex items-center">
                                <i class="ri-checkbox-circle-fill text-green-500 text-xl mr-2"></i>
                                <span>Colorful Custom Design</span>
                            </li>
                            <li class="flex items-center">
                                <i class="ri-checkbox-circle-fill text-green-500 text-xl mr-2"></i>
                                <span>Mobile-Friendly Magic</span>
                            </li>
                            <li class="flex items-center">
                                <i class="ri-checkbox-circle-fill text-green-500 text-xl mr-2"></i>
                                <span>SEO Sprinkles</span>
                            </li>
                            <li class="flex items-center">
                                <i class="ri-checkbox-circle-fill text-green-500 text-xl mr-2"></i>
                                <span>Parent-Teacher Chat</span>
                            </li>
                            <li class="flex items-center">
                                <i class="ri-checkbox-circle-fill text-green-500 text-xl mr-2"></i>
                                <span>Social Media Fun</span>
                            </li>
                        </ul>
                    </div>
                    <div class="p-8">
                        <button
                            class="dynapuff w-full py-3 px-6 bg-yellow-400 hover:bg-yellow-500 text-purple-700 rounded-full transition duration-300 text-lg font-bold">
                            Start the Fun!
                        </button>
                    </div>
                </div>

                <!-- Dashboard Plan -->
                <div class="bg-white rounded-3xl shadow-xl overflow-hidden transform transition-all hover:scale-105">
                    <div class="p-8">
                        <div class="w-16 h-16 bg-purple-400 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="ri-dashboard-3-line text-3xl text-yellow-400"></i>
                        </div>
                        <h3 class="dynapuff text-2xl font-bold text-center text-purple-600 mb-2">Rainbow Dashboard</h3>
                        <p class="text-center text-gray-600 mb-6">For the ultimate school management adventure!</p>
                        <p class="text-center">
                            <span class="dynapuff text-4xl font-bold text-purple-600">300 KD</span>
                        </p>
                    </div>
                    <div class="bg-purple-50 p-8">
                        <ul class="space-y-4">
                            <li class="flex items-center">
                                <i class="ri-checkbox-circle-fill text-green-500 text-xl mr-2"></i>
                                <span>All Sunny Landing Features</span>
                            </li>
                            <li class="flex items-center">
                                <i class="ri-checkbox-circle-fill text-green-500 text-xl mr-2"></i>
                                <span>Super Smart Analytics</span>
                            </li>
                            <li class="flex items-center">
                                <i class="ri-checkbox-circle-fill text-green-500 text-xl mr-2"></i>
                                <span>Easy User Management</span>
                            </li>
                            <li class="flex items-center">
                                <i class="ri-checkbox-circle-fill text-green-500 text-xl mr-2"></i>
                                <span>Custom Integrations</span>
                            </li>
                            <li class="flex items-center">
                                <i class="ri-checkbox-circle-fill text-green-500 text-xl mr-2"></i>
                                <span>Colorful Data Visualizations</span>
                            </li>
                        </ul>
                    </div>
                    <div class="p-8">
                        <button
                            class="dynapuff w-full py-3 px-6 bg-purple-500 hover:bg-purple-600 text-white rounded-full transition duration-300 text-lg font-bold">
                            Dive into Adventure!
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End::Pricing Content -->

    <!-- Start::Team Content -->
    {{-- <div class="" id="team">
        <div class="section container mx-auto">
            <div class="text-center max-w-[80rem] mx-auto mb-12">
                <h2 class="justify-center section-title text-center text-3xl font-bold text-gray-800 md:text-4xl">
                    <span class="px-3">Master
                        Brains Behind The Project..!</span>
                </h2>
                <p class="text-center text-gray-500 text-base mt-4">Lorem ipsum dolor sit, amet
                    consectetur adipisicing
                    elit. Pariatur quam saepe enim maxime! Eligendi quas itaque voluptatibus, aspernatur illo, natus
                    cumque
                    odio, molestiae obcaecati ducimus sit ratione recusandae perferendis culpa?</p>
            </div>
            <div class="grid sm:grid-cols-5 lg:!grid-cols-9 gap-6">
                <div class="space-y-2 text-center">
                    <a href="{{url('team')}}">
                        <img src="{{asset('build/assets/img/users/1.jpg')}}" alt="team" class="avatar rounded-full">
                        <div class="">
                            <h6 class="font-semibold text-base text-gray-800">Socrat Itumay</h6>
                            <p class="text-sm text-gray-500">Founder &amp; CEO</p>
                        </div>
                    </a>
                </div>
                <div class="space-y-2 text-center">
                    <a href="{{url('team')}}">
                        <img src="{{asset('build/assets/img/users/10.jpg')}}" alt="team" class="avatar rounded-full">
                        <div class="">
                            <h6 class="font-semibold text-base text-gray-800">Eos Tempor</h6>
                            <p class="text-sm text-gray-500">Director</p>
                        </div>
                    </a>
                </div>
                <div class="space-y-2 text-center">
                    <a href="{{url('team')}}">
                        <img src="{{asset('build/assets/img/users/2.jpg')}}" alt="team" class="avatar rounded-full">
                        <div class="">
                            <h6 class="font-semibold text-base text-gray-800">Airi Satou</h6>
                            <p class="text-sm text-gray-500">Hr</p>
                        </div>
                    </a>
                </div>
                <div class="space-y-2 text-center">
                    <a href="{{url('team')}}">
                        <img src="{{asset('build/assets/img/users/12.jpg')}}" alt="team" class="avatar rounded-full">
                        <div class="">
                            <h6 class="font-semibold text-base text-gray-800">Et Kasd</h6>
                            <p class="text-sm text-gray-500">Manager</p>
                        </div>
                    </a>
                </div>
                <div class="space-y-2 text-center">
                    <a href="{{url('team')}}">
                        <img src="{{asset('build/assets/img/users/3.jpg')}}" alt="team" class="avatar rounded-full">
                        <div class="">
                            <h6 class="font-semibold text-base text-gray-800">Aderson tumay</h6>
                            <p class="text-sm text-gray-500">Team Lead</p>
                        </div>
                    </a>
                </div>
                <div class="space-y-2 text-center">
                    <a href="{{url('team')}}">
                        <img src="{{asset('build/assets/img/users/4.jpg')}}" alt="team" class="avatar rounded-full">
                        <div class="">
                            <h6 class="font-semibold text-base text-gray-800">Samantha Paul</h6>
                            <p class="text-sm text-gray-500">Sr.Ui Developer</p>
                        </div>
                    </a>
                </div>
                <div class="space-y-2 text-center">
                    <a href="{{url('team')}}">
                        <img src="{{asset('build/assets/img/users/15.jpg')}}" alt="team" class="avatar rounded-full">
                        <div class="">
                            <h6 class="font-semibold text-base text-gray-800">Mc Greggor</h6>
                            <p class="text-sm text-gray-500">Java Developer</p>
                        </div>
                    </a>
                </div>
                <div class="space-y-2 text-center">
                    <a href="{{url('team')}}">
                        <img src="{{asset('build/assets/img/users/6.jpg')}}" alt="team" class="avatar rounded-full">
                        <div class="">
                            <h6 class="font-semibold text-base text-gray-800">Emiley Jackson</h6>
                            <p class="text-sm text-gray-500">Full Stacker</p>
                        </div>
                    </a>
                </div>
                <div class="space-y-2 text-center">
                    <a href="{{url('team')}}">
                        <img src="{{asset('build/assets/img/users/7.jpg')}}" alt="team" class="avatar rounded-full">
                        <div class="">
                            <h6 class="font-semibold text-base text-gray-800">Lilly Donovan</h6>
                            <p class="text-sm text-gray-500">javascript</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End::Team Content -->

    <!-- Start::faqs Content -->
    {{-- <div class="bg-white" id="faq">
        <div class="section container mx-auto">
            <div class="text-center max-w-[80rem] mx-auto mb-12">
                <h2 class="justify-center section-title text-center text-3xl font-bold text-gray-800 md:text-4xl">
                    <span class="px-3">Frequently
                        Asked Questions..!</span>
                </h2>
                <p class="text-center text-gray-500 text-base mt-4">Lorem ipsum dolor sit, amet
                    consectetur adipisicing
                    elit. Pariatur quam saepe enim maxime! Eligendi quas itaque voluptatibus, aspernatur illo, natus
                    cumque
                    odio, molestiae obcaecati ducimus sit ratione recusandae perferendis culpa?</p>
            </div>
            <div class="grid lg:grid-cols-2 gap-6 max-w-[80rem] mx-auto ">
                <div>
                    <div class="hs-accordion-group space-y-3">
                        <div class="hs-accordion active bg-white border -mt-px rounded-sm" id="faq-one">
                            <button type="button"
                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:border-b hs-accordion-active:border-gray-200 justify-between inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition py-4 px-5 hover:text-gray-500 text-lg"
                                aria-controls="faq-collapse-one">
                                How To Insert All The Plugins?
                                <svg class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                </svg>
                                <svg class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                </svg>
                            </button>
                            <div id="faq-collapse-one"
                                class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                aria-labelledby="faq-one">
                                <div class="p-5">
                                    <p class="text-gray-500 text-base">
                                        I must explain to you how all this mistaken idea of denouncing pleasure and
                                        praising pain was
                                        born and I will give you a complete account of the system, and expound the
                                        actual teachings of
                                        the great explorer of the truth, the master-builder of human happiness. No one
                                        rejects,
                                        dislikes, or avoids pleasure itself, because it is pleasure, but because those
                                        who do not know
                                        how to pursue pleasure rationally encounter consequences.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="hs-accordion bg-white border -mt-px rounded-sm" id="faq-two">
                            <button type="button"
                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:border-b hs-accordion-active:border-gray-200 justify-between inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition py-4 px-5 hover:text-gray-500 text-lg"
                                aria-controls="faq-collapse-two">
                                How Can I contact?
                                <svg class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                </svg>
                                <svg class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                </svg>
                            </button>
                            <div id="faq-collapse-two"
                                class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                aria-labelledby="faq-two">
                                <div class="p-5">
                                    <p class="text-gray-500 text-base">
                                        I must explain to you how all this mistaken idea of denouncing pleasure and
                                        praising pain was
                                        born and I will give you a complete account of the system, and expound the
                                        actual teachings of
                                        the great explorer of the truth, the master-builder of human happiness. No one
                                        rejects,
                                        dislikes, or avoids pleasure itself, because it is pleasure, but because those
                                        who do not know
                                        how to pursue pleasure rationally encounter consequences.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="hs-accordion bg-white border -mt-px rounded-sm" id="faq-three">
                            <button type="button"
                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:border-b hs-accordion-active:border-gray-200 justify-between inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition py-4 px-5 hover:text-gray-500 text-lg"
                                aria-controls="faq-collapse-three"> Can I use this Plugins in Another Template?
                                <svg class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                </svg>
                                <svg class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                </svg>
                            </button>
                            <div id="faq-collapse-three"
                                class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                aria-labelledby=" faq-three">
                                <div class="p-5">
                                    <p class="text-gray-500 text-base">
                                        I must explain to you how all this mistaken idea of denouncing pleasure and
                                        praising pain was
                                        born and I will give you a complete account of the system, and expound the
                                        actual teachings of
                                        the great explorer of the truth, the master-builder of human happiness. No one
                                        rejects,
                                        dislikes, or avoids pleasure itself, because it is pleasure, but because those
                                        who do not know
                                        how to pursue pleasure rationally encounter consequences.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="hs-accordion bg-white border -mt-px rounded-sm" id="faq-four">
                            <button type="button"
                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:border-b hs-accordion-active:border-gray-200 justify-between inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition py-4 px-5 hover:text-gray-500 text-lg"
                                aria-controls="faq-collapse-four"> Does it Easy to Customizable?
                                <svg class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                </svg>
                                <svg class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                </svg>
                            </button>
                            <div id="faq-collapse-four"
                                class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                aria-labelledby=" faq-four">
                                <div class="p-5">
                                    <p class="text-gray-500 text-base">
                                        I must explain to you how all this mistaken idea of denouncing pleasure and
                                        praising pain was
                                        born and I will give you a complete account of the system, and expound the
                                        actual teachings of
                                        the great explorer of the truth, the master-builder of human happiness. No one
                                        rejects,
                                        dislikes, or avoids pleasure itself, because it is pleasure, but because those
                                        who do not know
                                        how to pursue pleasure rationally encounter consequences.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="hs-accordion-group space-y-3">
                        <div class="hs-accordion active bg-white border -mt-px rounded-sm" id="faq-five">
                            <button type="button"
                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:border-b hs-accordion-active:border-gray-200 justify-between inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition py-4 px-5 hover:text-gray-500 text-lg"
                                aria-controls="faq-collapse-five"> How Can I Add another page in Template?
                                <svg class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                </svg>
                                <svg class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                </svg>
                            </button>
                            <div id="faq-collapse-five"
                                class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                aria-labelledby=" faq-five">
                                <div class="p-5">
                                    <p class="text-gray-500 text-base">
                                        I must explain to you how all this mistaken idea of denouncing pleasure and
                                        praising pain was
                                        born and I will give you a complete account of the system, and expound the
                                        actual teachings of
                                        the great explorer of the truth, the master-builder of human happiness. No one
                                        rejects,
                                        dislikes, or avoids pleasure itself, because it is pleasure, but because those
                                        who do not know
                                        how to pursue pleasure rationally encounter consequences.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="hs-accordion bg-white border -mt-px rounded-sm" id="faq-six">
                            <button type="button"
                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:border-b hs-accordion-active:border-gray-200 justify-between inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition py-4 px-5 hover:text-gray-500 text-lg"
                                aria-controls="faq-collapse-six"> How can I download This template?
                                <svg class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                </svg>
                                <svg class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                </svg>
                            </button>
                            <div id="faq-collapse-six"
                                class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                aria-labelledby=" faq-six">
                                <div class="p-5">
                                    <p class="text-gray-500 text-base">
                                        I must explain to you how all this mistaken idea of denouncing pleasure and
                                        praising pain was
                                        born and I will give you a complete account of the system, and expound the
                                        actual teachings of
                                        the great explorer of the truth, the master-builder of human happiness. No one
                                        rejects,
                                        dislikes, or avoids pleasure itself, because it is pleasure, but because those
                                        who do not know
                                        how to pursue pleasure rationally encounter consequences.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="hs-accordion bg-white border -mt-px rounded-sm" id="faq-seven">
                            <button type="button"
                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:border-b hs-accordion-active:border-gray-200 justify-between inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition py-4 px-5 hover:text-gray-500 text-lg"
                                aria-controls="faq-collapse-seven"> How To Add additional plugins?
                                <svg class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                </svg>
                                <svg class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                </svg>
                            </button>
                            <div id="faq-collapse-seven"
                                class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                aria-labelledby=" faq-seven">
                                <div class="p-5">
                                    <p class="text-gray-500 text-base">
                                        I must explain to you how all this mistaken idea of denouncing pleasure and
                                        praising pain was
                                        born and I will give you a complete account of the system, and expound the
                                        actual teachings of
                                        the great explorer of the truth, the master-builder of human happiness. No one
                                        rejects,
                                        dislikes, or avoids pleasure itself, because it is pleasure, but because those
                                        who do not know
                                        how to pursue pleasure rationally encounter consequences.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="hs-accordion bg-white border -mt-px rounded-sm" id="faq-eight">
                            <button type="button"
                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:border-b hs-accordion-active:border-gray-200 justify-between inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition py-4 px-5 hover:text-gray-500 text-lg"
                                aria-controls="faq-collapse-eight">
                                How To Insert All The Plugins?
                                <svg class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                </svg>
                                <svg class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                </svg>
                            </button>
                            <div id="faq-collapse-eight"
                                class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                aria-labelledby="faq-eight">
                                <div class="p-5">
                                    <p class="text-gray-500 text-base">
                                        I must explain to you how all this mistaken idea of denouncing pleasure and
                                        praising pain was
                                        born and I will give you a complete account of the system, and expound the
                                        actual teachings of
                                        the great explorer of the truth, the master-builder of human happiness. No one
                                        rejects,
                                        dislikes, or avoids pleasure itself, because it is pleasure, but because those
                                        who do not know
                                        how to pursue pleasure rationally encounter consequences.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End::faqs Content -->

    <!-- Start::Blog Content -->
    {{-- <div class="" id="blogs">
        <div class="section container mx-auto">
            <div class="text-center max-w-[80rem] mx-auto mb-12">
                <h2 class="justify-center section-title text-center text-3xl font-bold text-gray-800 md:text-4xl">
                    <span class="px-3">Latest Blog
                        news</span>
                </h2>
                <p class="text-center text-gray-500 text-base mt-4">Lorem ipsum dolor sit, amet
                    consectetur adipisicing
                    elit. Pariatur quam saepe enim maxime! Eligendi quas itaque voluptatibus, aspernatur illo, natus
                    cumque
                    odio, molestiae obcaecati ducimus sit ratione recusandae perferendis culpa?</p>
            </div>
            <div class="grid grid-cols-12 gap-6 max-w-[80rem] mx-auto">
                <div class="col-span-12 lg:col-span-6">
                    <div class="box mb-0">
                        <div class="box-body p-0">
                            <div class="relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-sm">
                                <img src="{{asset('build/assets/img/gallery/2.jpg')}}" class="w-full" alt="blog-img">
                                <a href="{{url('blog-details')}}">
                                    <div
                                        class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed bg-black/50">
                                        <div class="flex justify-start items-end h-full">
                                            <div class="text-white m-6">
                                                <h5 class="font-bold text-xl">Lorem ipsum dolor sit amet consectetur
                                                    adipisicing elit.</h5>
                                                <p class="text-gray-500 text-sm">Published <span
                                                        class="text-white">12.04.2023</span> by <span
                                                        class="text-white">Mark Equel</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-3">
                    <div class="box">
                        <div class="box-body p-0">
                            <div class="relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-sm">
                                <img src="{{asset('build/assets/img/gallery/3.jpg')}}" class="w-full" alt="blog-img">
                                <a href="{{url('blog-details')}}">
                                    <div
                                        class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed bg-black/50">
                                        <div class="flex justify-start items-end h-full">
                                            <div class="text-white m-6">
                                                <h5 class="font-bold text-xl">Ui Review Presentations</h5>
                                                <p class="text-gray-500 text-sm">Published <span
                                                        class="text-white">12.04.2023</span> by <span
                                                        class="text-white">Mark Equel</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="box mb-0">
                        <div class="box-body p-0">
                            <div class="relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-sm">
                                <img src="{{asset('build/assets/img/gallery/9.jpg')}}" class="w-full" alt="blog-img">
                                <a href="{{url('blog-details')}}">
                                    <div
                                        class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed bg-black/50">
                                        <div class="flex justify-start items-end h-full">
                                            <div class="text-white m-6">
                                                <h5 class="font-bold text-xl">Bussines Of Design</h5>
                                                <p class="text-gray-500 text-sm">Published <span
                                                        class="text-white">12.04.2023</span> by <span
                                                        class="text-white">Mark Equel</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-3">
                    <div class="box">
                        <div class="box-body p-0">
                            <div class="relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-sm">
                                <img src="{{asset('build/assets/img/gallery/8.jpg')}}" class="w-full" alt="blog-img">
                                <a href="{{url('blog-details')}}">
                                    <div
                                        class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed bg-black/50">
                                        <div class="flex justify-start items-end h-full">
                                            <div class="text-white m-6">
                                                <h5 class="font-bold text-xl">Study In Nature</h5>
                                                <p class="text-gray-500 text-sm">Published <span
                                                        class="text-white">12.04.2023</span> by <span
                                                        class="text-white">Mark Equel</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="box mb-0">
                        <div class="box-body p-0">
                            <div class="relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-sm">
                                <img src="{{asset('build/assets/img/gallery/10.jpg')}}" class="w-full" alt="blog-img">
                                <a href="{{url('blog-details')}}">
                                    <div
                                        class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed bg-black/50">
                                        <div class="flex justify-start items-end h-full">
                                            <div class="text-white m-6">
                                                <h5 class="font-bold text-xl">Stories That Matters</h5>
                                                <p class="text-gray-500 text-sm">Published <span
                                                        class="text-white">12.04.2023</span> by <span
                                                        class="text-white">Mark Equel</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End::Blog Content -->
    {{--Start : Projects --}}
    <style>
        @keyframes shine {
            from {
                transform: translateX(-100%) rotate(45deg);
            }

            to {
                transform: translateX(100%) rotate(45deg);
            }
        }

        .project-card:hover .shine-effect::after {
            animation: shine 1s ease-in-out;
        }

        .shine-effect {
            position: relative;
            overflow: hidden;
        }

        .shine-effect::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg,
                    transparent 45%,
                    rgba(255, 255, 255, 0.1) 48%,
                    rgba(255, 255, 255, 0.3) 50%,
                    rgba(255, 255, 255, 0.1) 52%,
                    transparent 55%);
            transform: translateX(-100%) rotate(45deg);
        }
    </style>

    <section class="py-20 bg-gradient-to-b from-blue-50/50 to-green-50/50" id="projects">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-[80rem] mx-auto mb-16">
                <h2 class="dynapuff text-4xl md:text-5xl font-bold mb-6">
                    <span class="text-blue-600">Magical</span>
                    <span class="text-purple-600">School Websites</span>
                </h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                    Take a peek at how we transform school websites into enchanting digital spaces
                    that bring joy to students, teachers, and parents alike!
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-6xl mx-auto">
                <!-- Project 1 -->
                <div class="project-card group">
                    <div class="relative rounded-xl overflow-hidden shadow-xl shine-effect">
                        <img src="/api/placeholder/600/400" alt="Elementary School Website"
                            class="w-full h-[400px] object-cover transform group-hover:scale-105 transition-transform duration-700">

                        <!-- Overlay -->
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40 to-transparent opacity-90">
                            <div class="absolute bottom-0 left-0 right-0 p-6">
                                <div
                                    class="space-y-3 transform translate-y-6 group-hover:translate-y-0 transition-transform duration-500">
                                    <h3 class="dynapuff text-2xl font-bold text-white">
                                        Sunshine Elementary
                                    </h3>
                                    <p class="text-gray-200">
                                        A joyful and intuitive website redesign that brings the
                                        elementary school experience to life.
                                    </p>
                                    <div class="flex flex-wrap gap-2 pt-2">
                                        <span
                                            class="px-3 py-1 bg-blue-500/20 text-blue-100 rounded-full text-sm">Website
                                            Redesign</span>
                                        <span class="px-3 py-1 bg-green-500/20 text-green-100 rounded-full text-sm">User
                                            Experience</span>
                                    </div>
                                    <a href="#view-project"
                                        class="inline-block mt-2 text-white dynapuff hover:text-blue-300 transition-colors duration-300">
                                        View Project →
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="project-card group">
                    <div class="relative rounded-xl overflow-hidden shadow-xl shine-effect">
                        <img src="/api/placeholder/600/400" alt="High School Learning Portal"
                            class="w-full h-[400px] object-cover transform group-hover:scale-105 transition-transform duration-700">

                        <!-- Overlay -->
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40 to-transparent opacity-90">
                            <div class="absolute bottom-0 left-0 right-0 p-6">
                                <div
                                    class="space-y-3 transform translate-y-6 group-hover:translate-y-0 transition-transform duration-500">
                                    <h3 class="dynapuff text-2xl font-bold text-white">
                                        Evergreen High School
                                    </h3>
                                    <p class="text-gray-200">
                                        A comprehensive learning management system that connects
                                        students, teachers, and parents.
                                    </p>
                                    <div class="flex flex-wrap gap-2 pt-2">
                                        <span
                                            class="px-3 py-1 bg-blue-500/20 text-blue-100 rounded-full text-sm">Learning
                                            Portal</span>
                                        <span
                                            class="px-3 py-1 bg-green-500/20 text-green-100 rounded-full text-sm">Communication
                                            Hub</span>
                                    </div>
                                    <a href="#view-project"
                                        class="inline-block mt-2 text-white dynapuff hover:text-green-300 transition-colors duration-300">
                                        View Project →
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--END : Projects --}}
    <!-- Start::Contact Content -->
    <div class="bg-gradient-to-b from-green-100 to-blue-100 py-16" id="contact">
        <div class="container mx-auto px-4">
            <h2 class="dynapuff text-4xl font-bold text-center text-purple-600 mb-6">
                Let's Chat and Create Magic!
            </h2>
            <p class="text-center text-lg text-gray-700 max-w-2xl mx-auto mb-12">
                Have a question or ready to start your school's online adventure? We're all ears!
                Drop us a line, and we'll get back to you faster than you can say "recess time"!
            </p>

            <div class="max-w-4xl mx-auto bg-white rounded-3xl shadow-xl overflow-hidden">
                <div class="md:flex">
                    <div class="md:w-1/2 bg-yellow-50 p-8 flex flex-col justify-center">
                        <div class="mb-8">
                            <h3 class="dynapuff text-2xl font-bold text-purple-700 mb-4">Quick Reach</h3>
                            <div class="flex items-center mb-4">
                                <div class="bg-purple-600 rounded-full p-2 mr-4">
                                    <i class="ri-smartphone-line text-xl text-white"></i>
                                </div>
                                <div>
                                    <h5 class="font-semibold text-purple-700">Phone</h5>
                                    <a href="tel:+96566579000" class="text-purple-800">+ 965 66579000</a>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="bg-purple-600 rounded-full p-2 mr-4">
                                    <i class="ri-mail-line text-xl text-white"></i>
                                </div>
                                <div>
                                    <h5 class="font-semibold text-purple-700">Email</h5>
                                    <a href="mailto:ahmaadzaid7@gmail.com"
                                        class="text-purple-800">ahmaadzaid7@gmail.com</a>
                                </div>
                            </div>
                        </div>
                        <img src="{{asset('build/assets/img/landing/contact.jpg')}}" />
                    </div>
                    <div class="md:w-1/2 p-8 bg-yellow-500">
                        <h3 class="dynapuff text-2xl font-bold text-purple-600 mb-6">Send Us a Message</h3>
                        <form>
                            <div class="mb-4">
                                <label for="name" class="block text-gray-700 font-semibold mb-2">Your Name</label>
                                <input type="text" id="name"
                                    class="w-full px-4 py-2 rounded-full border-2 border-purple-300 focus:border-purple-500 focus:outline-none"
                                    placeholder="e.g., Super Parent">
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-gray-700 font-semibold mb-2">Email Address</label>
                                <input type="email" id="email"
                                    class="w-full px-4 py-2 rounded-full border-2 border-purple-300 focus:border-purple-500 focus:outline-none"
                                    placeholder="you@example.com">
                            </div>
                            <div class="mb-4">
                                <label for="phone" class="block text-gray-700 font-semibold mb-2">Phone Number</label>
                                <input type="tel" id="phone"
                                    class="w-full px-4 py-2 rounded-full border-2 border-purple-300 focus:border-purple-500 focus:outline-none"
                                    placeholder="e.g., +965 1234 5678">
                            </div>
                            <div class="mb-6">
                                <label for="message" class="block text-gray-700 font-semibold mb-2">Your Message</label>
                                <textarea id="message" rows="4"
                                    class="w-full px-4 py-2 rounded-2xl border-2 border-purple-300 focus:border-purple-500 focus:outline-none"
                                    placeholder="Tell us about your magical idea!"></textarea>
                            </div>
                            <button type="submit"
                                class="dynapuff w-full py-3 px-6 bg-purple-600 hover:bg-purple-700 text-white rounded-full transition duration-300 text-lg font-bold">
                                Send Some Joy Our Way!
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End::Contact Content -->

    <!-- Start::Banner Content -->
    {{-- <div
        class="section flex relative bg-[url('http://127.0.0.1:8000/build/assets/img/landing/1.jpg')] bg-cover before:bg-primary/90 before:absolute before:w-full before:h-full before:top-0 before:inset-x-0">
        <div class="container mx-auto z-[0] text-center space-y-5">
            <h2 class="section-title text-center text-3xl font-bold text-white md:text-4xl justify-center">Get
                Notify When Project is Updated</h2>
            <p class="w-2/3 mx-auto my-4 text-base text-white/70">We develop modern concepts to design and develop the
                interface design, web
                development to deliver them with eye-catching innovative ideas. We believe in effective, efficient and
                timely solutions for various types of businesses. Our team develops a long-term strategy to bring out
                spark
                conversation with clients, and visibility to your company.</p>
            <div class="max-w-md space-x-3 rtl:space-x-reverse flex justify-center mx-auto">
                <input type="email" class="ti-form-input" placeholder="Enter Your Email">
                <a href="javascript:void(0);" class="ti-btn m-0 p-2 px-5 ti-btn-danger whitespace-nowrap">Notify Me</a>
            </div>
        </div>
    </div> --}}
    <!-- End::Banner Content -->

</div>

@endsection

@section('scripts')

<!-- SWIPER JS -->
<script src="{{asset('build/assets/libs/swiper/swiper-bundle.min.js')}}"></script>

@endsection
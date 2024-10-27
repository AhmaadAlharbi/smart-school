@extends('layouts.landing-master')

@section('styles')
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

    <div class="bg-gradient-to-b from-blue-100 to-green-100">
        <div class="container mx-auto px-4 py-16 relative">
            <!-- Restored Animated Decorative Elements -->
            <div
                class="absolute top-20 left-10 w-24 h-24 bg-yellow-200 rounded-full opacity-50 blur-xl transform-gpu transition-transform hover:scale-110 duration-1000">
            </div>
            <div
                class="absolute bottom-20 right-10 w-32 h-32 bg-blue-200 rounded-full opacity-50 blur-xl transform-gpu transition-transform hover:scale-110 duration-1000">
            </div>

            <div class="flex flex-col lg:flex-row items-center justify-center lg:pt-20 lg:pb-24 pt-12 pb-12 relative">
                <div class="container max-w-7xl mx-auto px-4 lg:px-8">
                    <div class="flex flex-col lg:flex-row items-center justify-between gap-12 py-10">
                        <!-- Left Content -->
                        <div
                            class="lg:w-1/2 text-center lg:text-{{ app()->getLocale() == 'ar' ? 'right' : 'left' }} mb-8 lg:mb-0 z-10">
                            <div class="max-w-xl mx-auto lg:mx-0">
                                <div class="space-y-8">
                                    <h1
                                        class="{{ LaravelLocalization::getCurrentLocale() === 'ar' ? 'ar-font' : 'en-font' }} text-5xl lg:text-6xl font-bold">
                                        <span class="block soar-in">{{ __('landing.headline_1') }}</span>
                                        <span class="text-blue-600 block soar-in-delay-1">{{ __('landing.headline_2')
                                            }}</span>
                                        <span class="block text-green-600 mt-2 soar-in-delay-2">{{
                                            __('landing.headline_3') }}</span>
                                    </h1>

                                    <p class="text-lg text-gray-700 soar-in-delay-2">
                                        {{ __('landing.description') }}
                                    </p>

                                    <div
                                        class=" flex flex-col sm:flex-row {{ app()->getLocale() == 'ar' ? 'sm:flex-row-reverse justify-center' : '' }} justify-center {{ app()->getLocale() == 'ar' ? '' : 'lg:justify-start' }} space-y-4 sm:space-y-0 {{ app()->getLocale() == 'ar' ? 'sm:space-x-reverse' : '' }} sm:space-x-6 soar-in-delay-2">
                                        <a href="#"
                                            class="dynapuff inline-block px-8 py-4 mx-2 bg-blue-500 hover:bg-blue-600 text-white rounded-full font-semibold transform hover:-translate-y-2 transition-all duration-300 shadow-lg hover:shadow-xl">
                                            <span
                                                class="flex items-center justify-center {{ app()->getLocale() == 'ar' ? 'flex-row-reverse' : '' }}">
                                                {{ __('landing.button_see') }}
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="w-6 h-6 inline-block {{ app()->getLocale() == 'ar' ? 'mr-2' : 'ml-2' }}"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                                </svg>
                                            </span>
                                        </a>
                                        <a href="#"
                                            class="dynapuff inline-block px-8 py-4 bg-green-500 hover:bg-green-600 text-white rounded-full font-semibold transform hover:-translate-y-2 transition-all duration-300 shadow-lg hover:shadow-xl">
                                            <span
                                                class="flex items-center justify-center {{ app()->getLocale() == 'ar' ? 'flex-row-reverse' : '' }}">
                                                {{ __('landing.button_adventure') }}
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="w-6 h-6 inline-block {{ app()->getLocale() == 'ar' ? 'mr-2' : 'ml-2' }}"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Right Content with Single Image -->
                        <div class="w-full lg:w-1/2 px-4 sm:px-6 relative">
                            <!-- Shadow Element -->
                            <div
                                class="absolute bottom-0 left-1/2 -translate-x-1/2 w-[85%] sm:w-4/5 h-6 sm:h-8 bg-black/10 rounded-full blur-xl shadow-animation">
                            </div>

                            <!-- Floating Image Container -->
                            <div class="float-animation mx-auto max-w-2xl ">
                                <div class="bg-white rounded-xl shadow-lg p-2 sm:p-3 relative">
                                    <!-- Gradient Background -->
                                    <div
                                        class="absolute inset-0 bg-gradient-to-r from-blue-200 to-green-200 rounded-xl rotate-2 blur-sm">
                                    </div>

                                    <!-- Image Container -->
                                    <div class="relative w-full aspect-[4/3] md:aspect-[16/9]">
                                        <img src="{{asset('build/assets/img/landing/hero3.jpg')}}"
                                            alt="Happy kids using a computer"
                                            class="relative rounded-xl w-full h-full object-cover">
                                    </div>

                                    <!-- Restored Decorative Circles -->
                                    <div
                                        class="absolute -top-4 -left-4 sm:-top-6 sm:-left-6 w-12 h-12 sm:w-16 sm:h-16 bg-yellow-500 rounded-full flex items-center justify-center rotate-12 shadow-lg transform hover:rotate-45 transition-transform duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 sm:w-8 sm:h-8 text-white"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                                        </svg>
                                    </div>

                                    <div
                                        class="absolute -bottom-4 -right-4 sm:-bottom-6 sm:-right-6 w-12 h-12 sm:w-16 sm:h-16 bg-green-500 rounded-full flex items-center justify-center -rotate-12 shadow-lg transform hover:rotate-45 transition-transform duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 sm:w-8 sm:h-8 text-white"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                        </svg>
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
    <div class="bg-gradient-to-b from-blue-100 to-purple-100 min-h-screen flex items-center" id="services">
        <div class="container mx-auto px-4 py-16 md:py-24">
            <!-- Header Section -->
            <div class="text-center max-w-3xl mx-auto mb-16">

                <h2
                    class="dynapuff text-4xl font-bold text-blue-600 mb-6 {{ LaravelLocalization::getCurrentLocale() === 'ar' ? 'ar-font' : 'en-font' }} text-5xl lg:text-6xl font-bold">
                    {{ __('services.title') }}
                </h2>
                <p class="text-lg text-gray-700 px-4">
                    {{ __('services.description') }}
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
                    <h3 class="dynapuff text-2xl font-semibold text-purple-600 mb-4 text-center ">{{
                        __('services.web_design.title') }}</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 {{ app()->getLocale() == 'ar' ? 'ml-2' : 'mr-2' }} mt-1"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            {{ __('services.web_design.feature_1') }}
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 {{ app()->getLocale() == 'ar' ? 'ml-2' : 'mr-2' }} mt-1"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            {{ __('services.web_design.feature_2') }}
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 {{ app()->getLocale() == 'ar' ? 'ml-2' : 'mr-2' }} mt-1"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            {{ __('services.web_design.feature_3') }}
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 {{ app()->getLocale() == 'ar' ? 'ml-2' : 'mr-2' }} mt-1"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            {{ __('services.web_design.feature_4') }}
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
                    <h3 class="dynapuff text-2xl font-semibold text-purple-600 mb-4 text-center">{{
                        __('services.web_development.title') }}</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 {{ app()->getLocale() == 'ar' ? 'ml-2' : 'mr-2' }} mt-1"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            {{ __('services.web_development.feature_1') }}
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 {{ app()->getLocale() == 'ar' ? 'ml-2' : 'mr-2' }} mt-1"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            {{ __('services.web_development.feature_2') }}
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 {{ app()->getLocale() == 'ar' ? 'ml-2' : 'mr-2' }} mt-1"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            {{ __('services.web_development.feature_3') }}
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 {{ app()->getLocale() == 'ar' ? 'ml-2' : 'mr-2' }} mt-1"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            {{ __('services.web_development.feature_4') }}
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
                    <h3 class="dynapuff text-2xl font-semibold text-purple-600 mb-4 text-center">{{
                        __('services.redesign.title') }}</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 {{ app()->getLocale() == 'ar' ? 'ml-2' : 'mr-2' }} mt-1"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            {{ __('services.redesign.feature_1') }}
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 {{ app()->getLocale() == 'ar' ? 'ml-2' : 'mr-2' }} mt-1"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            {{ __('services.redesign.feature_2') }}
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 {{ app()->getLocale() == 'ar' ? 'ml-2' : 'mr-2' }} mt-1"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            {{ __('services.redesign.feature_3') }}
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 {{ app()->getLocale() == 'ar' ? 'ml-2' : 'mr-2' }} mt-1"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            {{ __('services.redesign.feature_4') }}
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Optional CTA -->
            <div class="text-center mt-16">
                <a href="#contact"
                    class="inline-block bg-gradient-to-r from-blue-600 to-purple-600 text-white px-8 py-3 rounded-full font-semibold hover:opacity-90 transition-opacity">
                    {{ __('services.cta_button') }}
                </a>
            </div>
        </div>
    </div>
    <!-- End::Services Content -->
    <!-- start::How we work Content -->
    <div class="max-w-6xl mx-auto px-4 py-16 bg-gradient-to-b from-blue-50 to-purple-50">
        <h3 class="dynapuff text-4xl font-bold text-blue-600 text-center mb-12">{{ __('process.title') }}</h3>

        <!-- Process Timeline -->
        <div class="grid lg:grid-cols-4 gap-8 relative">
            <!-- Connecting Line (hidden on mobile) -->
            <div
                class="hidden lg:block absolute top-24 left-0 right-0 h-1 bg-gradient-to-r {{ app()->getLocale() == 'ar' ? 'from-pink-400 via-purple-400 to-blue-400' : 'from-blue-400 via-purple-400 to-pink-400' }}">
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
                        <h4 class="dynapuff text-xl font-semibold text-blue-600 mb-3">{{ __('process.step1.title') }}
                        </h4>
                        <ul class="text-gray-600 space-y-2 text-sm">
                            <li>• {{ __('process.step1.point1') }}</li>
                            <li>• {{ __('process.step1.point2') }}</li>
                            <li>• {{ __('process.step1.point3') }}</li>
                            <li>• {{ __('process.step1.point4') }}</li>
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
                        <h4 class="dynapuff text-xl font-semibold text-purple-600 mb-3">{{ __('process.step2.title') }}
                        </h4>
                        <ul class="text-gray-600 space-y-2 text-sm">
                            <li>• {{ __('process.step2.point1') }}</li>
                            <li>• {{ __('process.step2.point2') }}</li>
                            <li>• {{ __('process.step2.point3') }}</li>
                            <li>• {{ __('process.step2.point4') }}</li>
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
                        <h4 class="dynapuff text-xl font-semibold text-green-600 mb-3">{{ __('process.step3.title') }}
                        </h4>
                        <ul class="text-gray-600 space-y-2 text-sm">
                            <li>• {{ __('process.step3.point1') }}</li>
                            <li>• {{ __('process.step3.point2') }}</li>
                            <li>• {{ __('process.step3.point3') }}</li>
                            <li>• {{ __('process.step3.point4') }}</li>
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
                        <h4 class="dynapuff text-xl font-semibold text-pink-600 mb-3">{{ __('process.step4.title') }}
                        </h4>
                        <ul class="text-gray-600 space-y-2 text-sm">
                            <li>• {{ __('process.step4.point1') }}</li>
                            <li>• {{ __('process.step4.point2') }}</li>
                            <li>• {{ __('process.step4.point3') }}</li>
                            <li>• {{ __('process.step4.point4') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional CTA -->
        <div class="text-center mt-12">
            <a href="#contact"
                class="inline-block bg-gradient-to-r from-blue-600 to-purple-600 text-white px-8 py-3 rounded-full font-semibold hover:opacity-90 transition-opacity">
                {{ __('process.cta_button') }}
            </a>
        </div>
    </div>
    <!-- end::How we work Content -->

    <!-- Start::About Content -->
    <div class="bg-gradient-to-b from-blue-50 to-yellow-50 min-h-screen flex items-center" id="about">
        <div class="container mx-auto px-4 sm:px-6 py-16 sm:py-24">
            <div class="max-w-7xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                    <!-- Content Column -->
                    <div class="order-2 lg:order-1 max-w-xl mx-auto lg:mx-0">
                        <div class="space-y-6">
                            <h2
                                class="dynapuff text-center lg:text-{{ app()->getLocale() == 'ar' ? 'right' : 'left' }} text-3xl sm:text-4xl font-bold text-blue-600">
                                {{ __('about.title') }}
                                <span class="block text-green-500 mt-2">{{ __('about.subtitle') }}</span>
                            </h2>
                            <h3
                                class="dynapuff font-semibold text-2xl text-purple-600 text-center lg:text-{{ app()->getLocale() == 'ar' ? 'right' : 'left' }}">
                                {{ __('about.tagline') }}
                            </h3>
                            <p
                                class="text-lg text-gray-700 leading-relaxed text-center lg:text-{{ app()->getLocale() == 'ar' ? 'right' : 'left' }}">
                                {{ __('about.description') }}
                            </p>
                            <ul class="space-y-4 max-w-lg mx-auto lg:mx-0">
                                <li class="flex items-center {{ app()->getLocale() == 'ar' ? 'flex-row' : '' }}">
                                    <i
                                        class="ri-check-line text-green-500 text-xl {{ app()->getLocale() == 'ar' ? 'mr-0 ml-3' : 'mr-3' }}"></i>
                                    <span class="text-gray-700">{{ __('about.feature1') }}</span>
                                </li>
                                <li class="flex items-center {{ app()->getLocale() == 'ar' ? 'flex-row' : '' }}">
                                    <i
                                        class="ri-check-line text-green-500 text-xl {{ app()->getLocale() == 'ar' ? 'mr-0 ml-3' : 'mr-3' }}"></i>
                                    <span class="text-gray-700">{{ __('about.feature2') }}</span>
                                </li>
                                <li class="flex items-center {{ app()->getLocale() == 'ar' ? 'flex-row' : '' }}">
                                    <i
                                        class="ri-check-line text-green-500 text-xl {{ app()->getLocale() == 'ar' ? 'mr-0 ml-3' : 'mr-3' }}"></i>
                                    <span class="text-gray-700">{{ __('about.feature3') }}</span>
                                </li>
                            </ul>
                        </div>
                        <div class="text-center lg:text-{{ app()->getLocale() == 'ar' ? 'right' : 'left' }} mt-8">
                            <a href="{{url('about')}}"
                                class="dynapuff inline-block py-3 px-8 bg-blue-500 hover:bg-blue-600 text-white rounded-full transition duration-300 shadow-lg hover:shadow-xl">
                                {{ __('about.cta_button') }}
                                <i class="ri-magic-line {{ app()->getLocale() == 'ar' ? 'mr-2' : 'ml-2' }}"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Image Column -->
                    <div class="order-1 lg:order-2 max-w-2xl mx-auto lg:mx-0 w-full">
                        <div class="relative">
                            <!-- Gradient Background -->
                            <div
                                class="absolute inset-0 bg-gradient-to-r {{ app()->getLocale() == 'ar' ? 'from-purple-200 to-blue-200' : 'from-blue-200 to-purple-200' }} transform -rotate-6 rounded-lg blur-sm">
                            </div>
                            <!-- Image Container -->
                            <div class="relative p-2">
                                <img src="{{asset('build/assets/img/landing/design.jpg')}}"
                                    class="rounded-lg shadow-xl object-cover object-center w-full h-[24rem] sm:h-[28rem]"
                                    alt="{{ __('about.image_alt') }}">
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
                                class="absolute inset-0 bg-gradient-to-r {{ app()->getLocale() == 'ar' ? 'from-pink-200 to-yellow-200' : 'from-yellow-200 to-pink-200' }} transform rotate-3 rounded-lg blur-sm">
                            </div>
                            <!-- Image Container -->
                            <div class="relative">
                                <img src="{{asset('build/assets/img/landing/dashboard.jpg')}}"
                                    class="rounded-lg shadow-xl border-4 border-white w-full h-[24rem] sm:h-[28rem] object-cover object-center"
                                    alt="{{ __('mission.image_alt') }}">
                            </div>
                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="order-1 lg:order-2 max-w-xl mx-auto lg:mx-0">
                        <div class="space-y-8">
                            <h2
                                class="dynapuff text-center lg:text-{{ app()->getLocale() == 'ar' ? 'right' : 'left' }} text-3xl sm:text-4xl font-bold text-purple-600">
                                {{ __('mission.title') }}
                                <span class="block text-green-500 mt-2">{{ __('mission.subtitle') }}</span>
                            </h2>
                            <div class="space-y-6">
                                <p
                                    class="text-lg text-gray-700 leading-relaxed text-center lg:text-{{ app()->getLocale() == 'ar' ? 'right' : 'left' }}">
                                    {{ __('mission.description') }}
                                </p>
                                <ul class="space-y-4 max-w-lg mx-auto lg:mx-0">
                                    <li
                                        class="flex items-start group hover:transform hover:scale-105 transition-transform duration-300 {{ app()->getLocale() == 'ar' ? 'flex-row' : '' }}">
                                        <i
                                            class="ri-parent-line text-blue-500 text-2xl {{ app()->getLocale() == 'ar' ? 'ml-3 mr-0 ' : 'mr-3' }} mt-1"></i>
                                        <span class="text-gray-700 mt-2">{{ __('mission.feature1') }}</span>
                                    </li>
                                    {{-- <li
                                        class="flex items-start group hover:transform hover:scale-105 transition-transform duration-300 {{ app()->getLocale() == 'ar' ? 'flex-row' : '' }}">
                                        <i
                                            class="ri-message-3-line text-pink-500 text-2xl {{ app()->getLocale() == 'ar' ? 'ml-3 mr-0' : 'mr-3' }} mt-1"></i>
                                        <span class="text-gray-700 mt-2">{{ __('mission.feature2') }}</span>
                                    </li> --}}
                                    <li
                                        class="flex items-start group hover:transform hover:scale-105 transition-transform duration-300 {{ app()->getLocale() == 'ar' ? 'flex-row' : '' }}">
                                        <i
                                            class="ri-calendar-todo-line text-yellow-500 text-2xl {{ app()->getLocale() == 'ar' ? 'ml-3 mr-0' : 'mr-3' }} mt-1"></i>
                                        <span class="text-gray-700 mt-2">{{ __('mission.feature3') }}</span>
                                    </li>
                                    <li
                                        class="flex items-start group hover:transform hover:scale-105 transition-transform duration-300 {{ app()->getLocale() == 'ar' ? 'flex-row' : '' }}">
                                        <i
                                            class="ri-money-dollar-box-line text-green-500 text-2xl {{ app()->getLocale() == 'ar' ? 'ml-3 mr-0' : 'mr-3' }} mt-1"></i>
                                        <span class="text-gray-700 mt-2">{{ __('mission.feature4') }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="text-center lg:text-{{ app()->getLocale() == 'ar' ? 'right' : 'left' }} mt-8">
                            <a href="{{url('about')}}"
                                class="dynapuff inline-block py-3 px-8 bg-purple-500 hover:bg-purple-600 text-white rounded-full transition duration-300 shadow-lg hover:shadow-xl">
                                {{ __('mission.cta_button') }}
                                <i class="ri-sparkle-line {{ app()->getLocale() == 'ar' ? 'mr-2' : 'ml-2' }}"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End::Mission Content -->


    <!-- Start::Banner Content -->
    {{-- <div
        class="relative bg-[url('http://127.0.0.1:8000/build/assets/img/landing/1.jpg')] bg-cover bg-center py-20">
        <div class="absolute inset-0 bg-blue-600/80"></div>
        <div class="container mx-auto px-4 relative z-10 text-center">
            <div class="max-w-4xl mx-auto" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                <h2 class="dynapuff text-4xl font-bold text-white mb-6">
                    {{ __('banner.title') }}
                </h2>
                <p class="text-xl text-white/90 max-w-2xl mx-auto mb-8">
                    {{ __('banner.description') }}
                </p>
                <a href="{{url('contactus')}}"
                    class="dynapuff inline-flex items-center py-3 px-8 bg-yellow-400 hover:bg-yellow-500 text-blue-800 rounded-full transition duration-300 text-lg font-bold shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    {{ __('banner.cta_button') }}
                </a>
            </div>
        </div>
    </div> --}}

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
                {{ __('testimonials.title') }}
            </h2>
            <div class="max-w-3xl mx-auto">
                <div class="bg-white rounded-3xl shadow-xl p-8 relative">
                    <!-- Message Icon -->
                    <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <div class="bg-yellow-400 rounded-full p-3 shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                        </div>
                    </div>

                    <!-- Stars -->
                    <div class="flex justify-center {{ app()->getLocale() == 'ar' ? 'space-x-reverse' : 'space-x-1' }} mb-4"
                        dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                        <i class="ri-star-fill text-yellow-400 text-2xl"></i>
                        <i class="ri-star-fill text-yellow-400 text-2xl"></i>
                        <i class="ri-star-fill text-yellow-400 text-2xl"></i>
                        <i class="ri-star-fill text-yellow-400 text-2xl"></i>
                        <i class="ri-star-fill text-yellow-400 text-2xl"></i>
                    </div>

                    <!-- Testimonial Text -->
                    <div dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                        <p class="text-lg text-gray-700 text-center mb-6">
                            {{ __('testimonials.quote') }}
                        </p>
                    </div>

                    <!-- Profile Section -->
                    <div
                        class="flex items-center justify-center {{ app()->getLocale() == 'ar' ? 'flex-row-reverse' : '' }}">
                        <img alt="{{ __('testimonials.profile.name') }}"
                            src="{{asset('build/assets/img/users/owner.jpg')}}"
                            class="w-16 h-16 rounded-full border-4 border-purple-200">
                        <div
                            class="{{ app()->getLocale() == 'ar' ? 'mr-4' : 'ml-4' }} text-{{ app()->getLocale() == 'ar' ? 'right' : 'left' }}">
                            <p class="dynapuff font-bold text-lg text-purple-600">{{ __('testimonials.profile.name') }}
                            </p>
                            <p class="text-gray-600">{{ __('testimonials.profile.title') }}</p>
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
            <div dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                <h2 class="dynapuff text-4xl font-bold text-center text-purple-600 mb-8">
                    {{ __('pricing.title') }}
                </h2>
                <p class="text-center text-lg text-gray-700 max-w-2xl mx-auto mb-12">
                    {{ __('pricing.description') }}
                </p>
                <!-- Added Note -->
                <div class="max-w-2xl mx-auto mb-12">
                    <div class="bg-yellow-50 border border-yellow-200 rounded-xl p-4">
                        <p class="text-center text-sm text-yellow-700">
                            {{ app()->getLocale() == 'ar'
                            ? 'ملاحظة: الأسعار لا تشمل اسم النطاق واستضافة الموقع. يجب على العميل توفير خدمات الاستضافة
                            واسم النطاق بشكل منفصل.'
                            : 'Note: Prices do not include domain name and hosting. Client must provide their own
                            hosting and domain services.'
                            }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- Landing Page Plan -->
                <div class="bg-white rounded-3xl shadow-xl overflow-hidden transform transition-all hover:scale-105">
                    <div class="p-8">
                        <div class="w-16 h-16 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="ri-layout-4-line text-3xl text-purple-600"></i>
                        </div>
                        <div dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                            <h3 class="dynapuff text-2xl font-bold text-center text-purple-600 mb-2">
                                {{ __('pricing.basic.title') }}
                            </h3>
                            <p class="text-center text-gray-600 mb-6">{{ __('pricing.basic.subtitle') }}</p>
                            <p class="text-center">
                                <span class="dynapuff text-4xl font-bold text-purple-600">
                                    {{ app()->getLocale() == 'ar' ? '١٥٠' : '150' }}
                                </span>
                                <span class="text-2xl font-bold text-purple-600">
                                    {{ app()->getLocale() == 'ar' ? 'د.ك' : 'KWD' }}
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="bg-purple-50 p-8">
                        <ul class="space-y-4" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                            <li class="flex items-center {{ app()->getLocale() == 'ar' ? 'flex-row' : '' }}">
                                <i
                                    class="ri-checkbox-circle-fill text-green-500 text-xl {{ app()->getLocale() == 'ar' ? 'ml-2' : 'mr-2' }}"></i>
                                <span>{{ __('pricing.basic.features.1') }}</span>
                            </li>
                            <li class="flex items-center {{ app()->getLocale() == 'ar' ? 'flex-row' : '' }}">
                                <i
                                    class="ri-checkbox-circle-fill text-green-500 text-xl {{ app()->getLocale() == 'ar' ? 'ml-2' : 'mr-2' }}"></i>
                                <span>{{ __('pricing.basic.features.2') }}</span>
                            </li>
                            <li class="flex items-center {{ app()->getLocale() == 'ar' ? 'flex-row' : '' }}">
                                <i
                                    class="ri-checkbox-circle-fill text-green-500 text-xl {{ app()->getLocale() == 'ar' ? 'ml-2' : 'mr-2' }}"></i>
                                <span>{{ __('pricing.basic.features.3') }}</span>
                            </li>
                            <li class="flex items-center {{ app()->getLocale() == 'ar' ? 'flex-row' : '' }}">
                                <i
                                    class="ri-checkbox-circle-fill text-green-500 text-xl {{ app()->getLocale() == 'ar' ? 'ml-2' : 'mr-2' }}"></i>
                                <span>{{ __('pricing.basic.features.4') }}</span>
                            </li>
                            <li class="flex items-center {{ app()->getLocale() == 'ar' ? 'flex-row' : '' }}">
                                <i
                                    class="ri-checkbox-circle-fill text-green-500 text-xl {{ app()->getLocale() == 'ar' ? 'ml-2' : 'mr-2' }}"></i>
                                <span>{{ __('pricing.basic.features.5') }}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="p-8">
                        <button
                            class="dynapuff w-full py-3 px-6 bg-yellow-400 hover:bg-yellow-500 text-purple-700 rounded-full transition duration-300 text-lg font-bold">
                            {{ __('pricing.basic.button') }}
                        </button>
                    </div>
                </div>

                <!-- Dashboard Plan -->
                <div class="pricing-card" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
                    <style>
                        .pricing-card {
                            max-width: 400px;
                            background: white;
                            border-radius: 24px;
                            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
                            overflow: hidden;
                            position: relative;
                            transition: transform 0.3s ease;
                        }

                        .pricing-card[dir="rtl"] .coming-soon-ribbon {
                            right: auto;
                            left: -35px;
                            transform: rotate(-45deg);
                        }

                        .pricing-card[dir="rtl"] .feature-item i {
                            margin-right: 0;
                            margin-left: 12px;
                        }

                        .pricing-card[dir="rtl"] .soon-feature-icon {
                            margin-right: 0;
                            margin-left: 12px;
                        }

                        .pricing-card:hover {
                            transform: translateY(-5px);
                        }

                        .coming-soon-ribbon {
                            position: absolute;
                            top: 30px;
                            right: -35px;
                            background: linear-gradient(45deg, #f59e0b, #d97706);
                            color: white;
                            padding: 8px 40px;
                            transform: rotate(45deg);
                            font-weight: bold;
                            text-transform: uppercase;
                            font-size: 14px;
                            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
                            z-index: 10;
                        }

                        .pricing-header {
                            padding: 32px;
                            text-align: center;
                            background: linear-gradient(135deg, #f3e8ff, #faf5ff);
                        }

                        .pricing-icon {
                            width: 64px;
                            height: 64px;
                            background: #a855f7;
                            border-radius: 50%;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            margin: 0 auto 16px;
                        }

                        .pricing-title {
                            font-size: 24px;
                            font-weight: bold;
                            color: #6b21a8;
                            margin-bottom: 8px;

                            font-family: {
                                    {
                                    app()->getLocale()==='ar' ? 'Tajawal': 'inherit'
                                }
                            }

                            ;
                        }

                        .pricing-subtitle {
                            color: #64748b;
                            margin-bottom: 16px;

                            font-family: {
                                    {
                                    app()->getLocale()==='ar' ? 'Tajawal': 'inherit'
                                }
                            }

                            ;
                        }

                        .launch-alert {
                            background: #fef3c7;
                            color: #92400e;
                            padding: 8px 16px;
                            border-radius: 16px;
                            font-size: 14px;
                            display: inline-block;
                            margin-top: 8px;
                        }

                        .features-list {
                            padding: 32px;
                            background: #faf5ff;
                        }

                        .feature-item {
                            display: flex;
                            align-items: center;
                            margin-bottom: 16px;
                            color: #334155;
                        }

                        .feature-item i {
                            color: #22c55e;
                            margin-right: 12px;
                            font-size: 20px;
                        }

                        .coming-soon-features {
                            padding: 32px;
                            background: linear-gradient(135deg, #faf5ff, #fff);
                        }

                        .coming-soon-title {
                            text-align: center;
                            color: #6b21a8;
                            font-size: 20px;
                            font-weight: bold;
                            margin-bottom: 24px;

                            font-family: {
                                    {
                                    app()->getLocale()==='ar' ? 'Tajawal': 'inherit'
                                }
                            }

                            ;
                        }

                        .soon-feature {
                            background: white;
                            padding: 12px;
                            border-radius: 12px;
                            margin-bottom: 12px;
                            display: flex;
                            align-items: center;
                            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
                            transition: transform 0.2s ease;
                        }

                        .soon-feature:hover {
                            transform: scale(1.02);
                        }

                        .soon-feature-icon {
                            width: 40px;
                            height: 40px;
                            background: #f3e8ff;
                            border-radius: 8px;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            margin-right: 12px;
                        }

                        .cta-button {
                            display: block;
                            width: calc(100% - 64px);
                            margin: 32px;
                            padding: 16px;
                            background: #a855f7;
                            color: white;
                            border: none;
                            border-radius: 999px;
                            font-size: 18px;
                            font-weight: bold;
                            cursor: pointer;
                            transition: background 0.3s ease;
                            opacity: 0.7;

                            font-family: {
                                    {
                                    app()->getLocale()==='ar' ? 'Tajawal': 'inherit'
                                }
                            }

                            ;
                        }

                        .cta-button:hover {
                            background: #9333ea;
                        }

                        .notification-text {
                            text-align: center;
                            color: #64748b;
                            font-size: 14px;
                            margin-top: -24px;
                            margin-bottom: 24px;
                            padding: 0 32px;

                            font-family: {
                                    {
                                    app()->getLocale()==='ar' ? 'Tajawal': 'inherit'
                                }
                            }

                            ;
                        }
                    </style>

                    <div class="coming-soon-ribbon">
                        {{ app()->getLocale() === 'ar' ? 'قريباً' : 'Coming Soon' }}
                    </div>

                    <div class="pricing-header">
                        <div class="pricing-icon">
                            <i class="ri-dashboard-3-line text-3xl text-yellow-400"></i>
                        </div>
                        <h3 class="pricing-title">{{ __('pricing.pro.title') }}</h3>
                        <p class="pricing-subtitle">{{ __('pricing.pro.subtitle') }}</p>
                        <div class="launch-alert">
                            <i class="ri-notification-3-line"></i>
                            {{ app()->getLocale() === 'ar' ? 'أسعار خاصة عند الإطلاق' : 'Launch Special Pricing Coming
                            Soon' }}
                        </div>
                    </div>

                    <div class="features-list">
                        @foreach(range(1, 6) as $i)
                        <div class="feature-item">
                            <i class="ri-checkbox-circle-fill"></i>
                            <span>{{ __("pricing.pro.features.$i") }}</span>
                        </div>
                        @endforeach
                    </div>

                    <div class="coming-soon-features">
                        <h4 class="coming-soon-title">
                            <i class="ri-rocket-line text-yellow-500"></i>
                            {{ app()->getLocale() === 'ar' ? 'الميزات القادمة' : 'Upcoming Features' }}
                        </h4>
                        <div class="soon-feature">
                            <div class="soon-feature-icon">
                                <i class="ri-settings-line text-purple-600"></i>
                            </div>
                            <span>{{ __('pricing.pro.soon_features.1') }}</span>
                        </div>
                        <div class="soon-feature">
                            <div class="soon-feature-icon">
                                <i class="ri-dashboard-line text-purple-600"></i>
                            </div>
                            <span>{{ __('pricing.pro.soon_features.2') }}</span>
                        </div>
                    </div>

                    <p class="notification-text">
                        {{ app()->getLocale() === 'ar' ? 'كن أول من يعرف عند الإطلاق!' : 'Be the first to know when we
                        launch!' }}
                    </p>
                    <button class="cta-button">
                        {{ app()->getLocale() === 'ar' ? 'انضم لقائمة الانتظار' : 'Join Waitlist' }}
                    </button>
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

    <!-- Projects Section -->
    <div class="py-20 bg-gradient-to-b from-pink-50/50 to-purple-50/50" id="projects">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center max-w-[80rem] mx-auto mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 rtl:font-[Tajawal]">
                    <span class="text-purple-600">{{ __('projects.projects.magical') }}</span>
                    {{-- <span class="text-purple-600">{{ __('projects.projects.learning_journey') }}</span> --}}
                </h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto rtl:font-[Tajawal]">
                    {{ __('projects.projects.description') }}
                </p>
            </div>

            <!-- Projects Grid -->

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-6xl mx-auto">
                <!-- Project 1: Learning Activities -->
                <div class="project-card group">
                    <div class="relative rounded-xl overflow-hidden shadow-xl shine-effect">
                        <img src="{{asset('build/assets/img/landing/bright-kids.png')}}"
                            alt="{{ __('projects.projects.activities.alt') }}"
                            class="w-full h-[400px] object-cover transform group-hover:scale-105 transition-transform duration-700">

                        <!-- Purple Overlay -->
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-purple-900 via-purple-900/40 to-transparent opacity-90">
                            <div class="absolute bottom-0 left-0 right-0 p-6">
                                <div
                                    class="space-y-3 transform translate-y-6 group-hover:translate-y-0 transition-transform duration-500">
                                    <h3 class="text-2xl font-bold text-white rtl:font-[Tajawal]">
                                        {{ __('projects.projects.activities.title') }}
                                    </h3>
                                    <p class="text-gray-200 rtl:font-[Tajawal]">
                                        {{ __('projects.projects.activities.description') }}
                                    </p>
                                    {{-- <div class="flex flex-wrap gap-2 pt-2">
                                        <span
                                            class="px-3 py-1 bg-pink-500/20 text-pink-100 rounded-full text-sm rtl:font-[Tajawal]">
                                            {{ __('projects.projects.activities.tag1') }}
                                        </span>
                                        <span
                                            class="px-3 py-1 bg-purple-500/20 text-purple-100 rounded-full text-sm rtl:font-[Tajawal]">
                                            {{ __('projects.projects.activities.tag2') }}
                                        </span>
                                    </div> --}}
                                    <a href="#"
                                        class="inline-block mt-2 text-white hover:text-pink-300 transition-colors duration-300 rtl:font-[Tajawal]">
                                        {{ __('projects.projects.view_more') }} →
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 2: Parent Portal -->
                <div class="project-card group">
                    <div class="relative rounded-xl overflow-hidden shadow-xl shine-effect">
                        <img src="{{asset('build/assets/img/landing/school-system-dashboard.png')}}"
                            alt="{{ __('projects.projects.portal.alt') }}"
                            class="w-full h-[400px] object-cover transform group-hover:scale-105 transition-transform duration-700">

                        <!-- Purple Overlay -->
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-purple-900 via-purple-900/40 to-transparent opacity-90">
                            <div class="absolute bottom-0 left-0 right-0 p-6">
                                <div
                                    class="space-y-3 transform translate-y-6 group-hover:translate-y-0 transition-transform duration-500">
                                    <h3 class="text-2xl font-bold text-white rtl:font-[Tajawal]">
                                        {{ __('projects.projects.portal.title') }}
                                    </h3>
                                    <p class="text-gray-200 rtl:font-[Tajawal]">
                                        {{ __('projects.projects.portal.description') }}
                                    </p>
                                    {{-- <div class="flex flex-wrap gap-2 pt-2">
                                        <span
                                            class="px-3 py-1 bg-pink-500/20 text-pink-100 rounded-full text-sm rtl:font-[Tajawal]">
                                            {{ __('projects.projects.portal.tag1') }}
                                        </span>
                                        <span
                                            class="px-3 py-1 bg-purple-500/20 text-purple-100 rounded-full text-sm rtl:font-[Tajawal]">
                                            {{ __('projects.projects.portal.tag2') }}
                                        </span>
                                    </div> --}}
                                    <a href="#"
                                        class="inline-block mt-2 text-white hover:text-purple-300 transition-colors duration-300 rtl:font-[Tajawal]">
                                        {{ __('projects.projects.view_more') }} →
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--END : Projects --}}
    <!-- Start::Contact Content -->
    <div class="bg-gradient-to-b from-green-100 to-blue-100 py-16" id="contact">
        <div class="container mx-auto px-4">
            <h2 class="dynapuff text-4xl font-bold text-center text-purple-600 mb-6 rtl:font-[Tajawal]">
                {{ __('contact.contact.title') }}
            </h2>
            <p class="text-center text-lg text-gray-700 max-w-2xl mx-auto mb-12 rtl:font-[Tajawal]">
                {{ __('contact.contact.subtitle') }}
            </p>

            <div class="max-w-4xl mx-auto bg-white rounded-3xl shadow-xl overflow-hidden">
                <div class="md:flex">
                    <div class="md:w-1/2 bg-yellow-50 p-8 flex flex-col justify-center">
                        <div class="mb-8">
                            <h3 class="dynapuff text-2xl font-bold text-purple-700 mb-4 rtl:font-[Tajawal]">
                                {{ __('contact.contact.quick_reach') }}
                            </h3>
                            <div class="flex items-center mb-4 ">
                                <div
                                    class="bg-purple-600 rounded-full p-2 {{ app()->getLocale() === 'ar' ? 'ml-4' : 'mr-4' }}">
                                    <i class="ri-smartphone-line text-xl text-white"></i>
                                </div>
                                <div>
                                    <h5 class="font-semibold text-purple-700 rtl:font-[Tajawal]">{{
                                        __('contact.contact.phone') }}</h5>
                                    <a href="tel:+96566579000" class="text-purple-800" dir="ltr">+ 965 66579000</a>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div
                                    class="bg-purple-600 rounded-full p-2 {{ app()->getLocale() === 'ar' ? 'ml-4' : 'mr-4' }}">
                                    <i class="ri-mail-line text-xl text-white"></i>
                                </div>
                                <div>
                                    <h5 class="font-semibold text-purple-700 rtl:font-[Tajawal]">{{
                                        __('contact.contact.email') }}</h5>
                                    <a href="mailto:ahmaadzaid7@gmail.com" class="text-purple-800"
                                        dir="ltr">ahmaadzaid7@gmail.com</a>
                                </div>
                            </div>
                        </div>
                        <img src="{{asset('build/assets/img/landing/contact.jpg')}}"
                            alt="{{ __('contact.contact.image_alt') }}" />
                    </div>
                    <div class="md:w-1/2 p-8 bg-yellow-500">
                        {{-- resources/views/components/contact-form.blade.php --}}
                        <form action="{{ route('contact.store') }}" method="POST" class="bg-yellow-500 p-8">
                            @csrf
                            <h3 class="dynapuff text-2xl font-bold text-purple-600 mb-6 rtl:font-[Tajawal]">
                                {{ __('contact.contact.form_title') }}
                            </h3>

                            @if(session('success'))
                            <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                                {{ session('success') }}
                            </div>
                            @endif

                            @if($errors->any())
                            <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <div class="mb-4">
                                <label for="name" class="block text-gray-700 font-semibold mb-2 rtl:font-[Tajawal]">
                                    {{ __('contact.contact.name_label') }}
                                </label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}"
                                    class="w-full px-4 py-2 rounded-full border-2 border-purple-300 focus:border-purple-500 focus:outline-none rtl:font-[Tajawal] @error('name') border-red-500 @enderror"
                                    placeholder="{{ __('contact.contact.name_placeholder') }}" required>
                                @error('name')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="email" class="block text-gray-700 font-semibold mb-2 rtl:font-[Tajawal]">
                                    {{ __('contact.contact.email_label') }}
                                </label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}"
                                    class="w-full px-4 py-2 rounded-full border-2 border-purple-300 focus:border-purple-500 focus:outline-none rtl:font-[Tajawal] @error('email') border-red-500 @enderror"
                                    placeholder="{{ __('contact.contact.email_placeholder') }}" required>
                                @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="phone" class="block text-gray-700 font-semibold mb-2 rtl:font-[Tajawal]">
                                    {{ __('contact.contact.phone_label') }}
                                </label>
                                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}"
                                    class="w-full px-4 py-2 rounded-full border-2 border-purple-300 focus:border-purple-500 focus:outline-none @error('phone') border-red-500 @enderror"
                                    placeholder="{{ __('contact.contact.phone_placeholder') }}" dir="ltr" required>
                                @error('phone')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label for="message" class="block text-gray-700 font-semibold mb-2 rtl:font-[Tajawal]">
                                    {{ __('contact.contact.message_label') }}
                                </label>
                                <textarea id="message" name="message" rows="4"
                                    class="w-full px-4 py-2 rounded-2xl border-2 border-purple-300 focus:border-purple-500 focus:outline-none rtl:font-[Tajawal] @error('message') border-red-500 @enderror"
                                    placeholder="{{ __('contact.contact.message_placeholder') }}"
                                    required>{{ old('message') }}</textarea>
                                @error('message')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <button type="submit"
                                class="dynapuff w-full py-3 px-6 bg-purple-600 hover:bg-purple-700 text-white rounded-full transition duration-300 text-lg font-bold rtl:font-[Tajawal]">
                                {{ __('contact.contact.submit_button') }}
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
# @extends('layouts.landing-master')

@section('styles')

<!-- SWIPER CSS -->
<link rel="stylesheet" href="{{asset('build/assets/libs/swiper/swiper-bundle.min.css')}}">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Nunito:wght@400;700&display=swap"
    rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js"></script>


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
    <style>
        :root {
            --sky-primary: #60a5fa;
            --sky-secondary: #93c5fd;
            --accent-warm: #ffd504;
            --accent-light: #bae6fd;
            --cloud-primary: #ffffff;
            --cloud-secondary: #f8fafc;
            --rain-color: rgba(225, 239, 254, 0.8);
        }

        .scene-container {
            padding-bottom: 10px;
            min-height: 100vh;
            background: radial-gradient(circle at 70% 20%,
                    rgba(252, 211, 77, 0.2) 0%,
                    transparent 50%),
                radial-gradient(circle at 20% 60%,
                    rgba(147, 197, 253, 0.3) 0%,
                    transparent 50%),
                linear-gradient(180deg,
                    #7dd3fc 0%,
                    #60a5fa 100%);
            position: relative;
            overflow: hidden;
            display: flex;
        }

        /* Add RTL support for the container */
        [dir="rtl"] .scene-container .split-layout {
            flex-direction: row;
        }

        .split-layout {
            display: flex;
            width: 100%;
            height: 100vh;
        }

        .content-side {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            z-index: 3;
        }

        .content-wrapper {
            max-width: 600px;
            width: 100%;
        }

        /* RTL text alignment */
        [dir="rtl"] .content-wrapper {
            text-align: right;
        }

        .animation-side {
            flex: 1;
            position: relative;
            overflow: hidden;
        }

        .hero-title {
            /* font-family: "Geist Mono", monospace; */
            font-family: "Sour Gummy", serif;
            font-weight: bold;

            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 1.5rem;
            -webkit-text-fill-color: white;
            -webkit-text-stroke-width: 1px;
            -webkit-text-stroke-color: black;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }


        [dir="rtl"] .hero-title {
            /* font-family: "El Messiri", sans-serif; */
            font-family: "Marhey", sans-serif;

        }

        .hero-subtitle {
            color: var(--accent-warm);
            font-family: "Geist Mono", monospace;
            font-size: 2rem;
            line-height: 1.1;
            font-weight: 700;
            margin-bottom: 1.5rem;
            /* -webkit-text-fill-color: var(--accent-warm);
            -webkit-text-stroke-width: 1px;
            -webkit-text-stroke-color: rgb(255, 255, 255); */
        }

        .hero-description {
            font-size: 1.5rem;
            line-height: 1.6;
            margin-bottom: 2rem;
            color: rgb(244, 243, 243);
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
        }

        .button-container {
            display: flex;
            gap: 1.5rem;
        }

        /* RTL button container */
        [dir="rtl"] .button-container {
            flex-direction: row-reverse;
        }

        .cta-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 1.25rem 2.5rem;
            border-radius: 12px;
            font-weight: 600;
            font-size: 1.125rem;
            text-decoration: none;
            transition: all 0.3s;
            color: white;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .primary-button {
            background: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
        }

        .secondary-button {
            background: rgb(242, 203, 30);
            border: 1px solid rgba(96, 165, 250, 0.3);
        }

        /* Cloud and rain styles remain the same */
        .cloud {
            position: absolute;
            background: linear-gradient(180deg,
                    var(--cloud-primary),
                    var(--cloud-secondary));
            border-radius: 50px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }

        .cloud::before,
        .cloud::after {
            content: '';
            position: absolute;
            background: inherit;
            border-radius: 50%;
            box-shadow: inherit;
        }

        .cloud-1 {
            width: 300px;
            height: 100px;
            top: 15%;
            left: 15%;
            animation: floatCloud1 20s ease-in-out infinite;
        }

        .cloud-1::before {
            width: 120px;
            height: 120px;
            top: -60px;
            left: 50px;
        }

        .cloud-1::after {
            width: 100px;
            height: 100px;
            top: -45px;
            left: 140px;
        }

        .cloud-2 {
            width: 260px;
            height: 90px;
            top: 35%;
            right: 15%;
            animation: floatCloud2 25s ease-in-out infinite;
        }

        .cloud-2::before {
            width: 110px;
            height: 110px;
            top: -55px;
            left: 45px;
        }

        .cloud-2::after {
            width: 90px;
            height: 90px;
            top: -40px;
            left: 130px;
        }

        .rain {
            position: absolute;
            width: 2px;
            height: 40px;
            background: linear-gradient(to bottom,
                    transparent,
                    var(--rain-color) 40%,
                    var(--rain-color) 60%,
                    transparent);
            filter: drop-shadow(0 0 2px var(--rain-color));
            animation: rain-fall linear infinite;
        }

        @keyframes floatCloud1 {

            0%,
            100% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(30px, -15px);
            }
        }

        @keyframes floatCloud2 {

            0%,
            100% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(-30px, 15px);
            }
        }

        @keyframes rain-fall {
            0% {
                transform: translateY(-120vh) rotate(15deg);
                opacity: 0;
            }

            5% {
                opacity: 0.7;
            }

            90% {
                opacity: 0.7;
            }

            100% {
                transform: translateY(120vh) rotate(15deg);
                opacity: 0;
            }
        }

        @media (max-width: 1024px) {
            .split-layout {
                flex-direction: column-reverse !important;
                /* Override RTL flex-direction for mobile */
            }

            .content-side {
                padding: 2rem 1rem;
            }

            .animation-side {
                min-height: 40vh;
            }

            .hero-title {
                font-size: 3.5rem;
            }

            .hero-subtitle {
                font-size: 2rem;
            }

            .hero-description {
                font-size: 1.25rem;
            }

            .button-container {
                flex-direction: column !important;
                /* Override RTL flex-direction for mobile */
                align-items: stretch;
            }

            .cta-button {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
    <style>
        @media (max-width: 1024px) {
            .scene-container {
                min-height: calc(100vh - 80px);
                /* Adjust based on your navbar height */
                margin-top: 80px;
                /* Add margin-top equal to navbar height */
            }

            .split-layout {
                flex-direction: column-reverse !important;
                min-height: calc(100vh - 80px);
                /* Match container height */
            }

            .content-side {
                padding: 2rem 1rem;
                flex: initial;
                /* Remove flex grow */
                min-height: 60vh;
                /* Adjust content area height */
            }

            .animation-side {
                min-height: 40vh;
                max-height: 40vh;
                /* Limit animation area height */
                overflow: hidden;
            }

            .hero-title {
                font-size: 3.5rem;
                /* Slightly smaller for mobile */
                margin-bottom: 1rem;
                text-align: center;
            }

            .hero-subtitle {
                font-size: 1.5rem;
                margin-bottom: 1rem;
                text-align: center;
            }

            .hero-description {
                font-size: 1.125rem;
                margin-bottom: 1.5rem;
                text-align: center;
            }

            .button-container {
                flex-direction: column !important;
                align-items: stretch;
                gap: 1rem;
            }

            .cta-button {
                width: 100%;
                justify-content: center;
                padding: 1rem 2rem;
                font-size: 1rem;
            }

            /* Adjust cloud visibility and positions for mobile */
            .cloud {
                transform: scale(0.8);
                /* Make clouds slightly smaller on mobile */
            }

            .cloud-5,
            .cloud-6,
            .cloud-7,
            .cloud-8 {
                display: none;
                /* Hide smaller clouds on mobile */
            }

            /* Adjust remaining clouds positions */
            .cloud-1 {
                top: 10%;
                left: 10%;
            }

            .cloud-2 {
                top: 30%;
                right: 10%;
            }

            .cloud-3 {
                top: 20%;
                left: 30%;
            }

            .cloud-4 {
                top: 40%;
                right: 25%;
            }
        }

        /* Additional breakpoint for smaller phones */
        @media (max-width: 640px) {
            .scene-container {
                margin-top: 64px;
                /* Adjust for smaller navbar on phones */
                min-height: calc(100vh - 64px);
            }

            .split-layout {
                min-height: calc(100vh - 64px);
            }

            .content-side {
                padding: 1.5rem 1rem;
            }

            .hero-title {
                font-size: 2.75rem;
                text-align: center;
            }

            .hero-subtitle {
                font-size: 1.25rem;
            }

            .hero-description {
                font-size: 1rem;
            }

            /* Further reduce number of visible clouds */
            .cloud-3,
            .cloud-4 {
                display: none;
            }
        }

        /* Ensure smooth transitions between breakpoints */
        @media (min-width: 1025px) {
            .scene-container {
                margin-top: 0;
                min-height: 100vh;
            }
        }
    </style>

    <div class="scene-container" dir="{{ App::isLocale('ar') ? 'rtl' : 'ltr' }}">
        <div class="split-layout">
            <div class="content-side">
                <div class="content-wrapper">
                    <h1 class="hero-title">
                        @if(App::isLocale('en'))
                        SahabCode:A Drop of Creativity in Every Cloud
                        @else
                        سحاب كود : أفكارك تحلّق معنا
                        @endif
                    </h1>
                    {{-- <h2 class="hero-subtitle">
                        @if(App::isLocale('en'))
                        Let Your Ideas Rain Into Stunning Websites
                        @else
                        نمطر إبداعاً، لتحصد تميّزاً

                        @endif
                    </h2> --}}

                    <p class="hero-description">
                        @if(App::isLocale('en'))
                        At SahabCode, we create beautiful websites that help your business grow. Like clouds bringing
                        rain, we bring fresh ideas and reliable solutions to every project.

                        @else
                        في سحاب كود، نُبدع مواقع ويب جميلة تساعد عملك على النمو. مثل السحاب الذي يجلب المطر، نأتي بأفكار
                        جديدة وحلول موثوقة لكل مشروع.

                        @endif
                    </p>
                    <div class="button-container">
                        <a href="#projects" class="cta-button primary-button">
                            @if(App::isLocale('en'))
                            Explore Our Work
                            @else
                            استكشف أعمالنا
                            @endif
                        </a>
                        <a href="#contact" class="cta-button secondary-button">
                            @if(App::isLocale('en'))
                            Start Creating
                            @else
                            ابدأ الإنشاء
                            @endif
                        </a>
                    </div>
                </div>
            </div>
            <div class="animation-side">
                <div class="cloud cloud-1"></div>
                <div class="cloud cloud-2"></div>
                <div class="rain-container"></div>
                <div class="cloud cloud-1"></div>
                <div class="cloud cloud-2"></div>
                <div class="cloud cloud-3"></div>
                <div class="cloud cloud-4"></div>
                <div class="cloud cloud-5"></div>
                <div class="cloud cloud-6"></div>
                <div class="cloud cloud-7"></div>
                <div class="cloud cloud-8"></div>
                <div class="rain-container"></div>

            </div>
        </div>
    </div>


    <script>
        // Create rain effect
        const rainContainer = document.querySelector('.rain-container');
        for (let i = 0; i < 50; i++) {
            const rain = document.createElement('div');
            rain.className = 'rain';
            rain.style.left = Math.random() * 100 + '%';
            rain.style.animationDelay = Math.random() * 2 + 's';
            rain.style.animationDuration = Math.random() * 1 + 1 + 's';
            rain.style.opacity = Math.random() * 0.3 + 0.2;
            rainContainer.appendChild(rain);
        }
    </script>
    <!-- End::Services Content -->
    <!-- Start::Services Content -->

    <style>
        /* Base Styles */
        .services-section {
            background: radial-gradient(circle at 70% 20%,
                    rgba(252, 211, 77, 0.2) 0%,
                    transparent 50%),
                radial-gradient(circle at 20% 60%,
                    rgba(147, 197, 253, 0.3) 0%,
                    transparent 50%),
                linear-gradient(180deg,
                    #7dd3fc 0%,
                    #60a5fa 100%);
            min-height: 100vh;
            position: relative;
            overflow: hidden;
            padding: 6rem 0;
        }

        /* Enhanced Cloud Styles */
        .service-cloud {
            position: absolute;
            background: linear-gradient(180deg,
                    rgba(255, 255, 255, 0.95),
                    rgba(255, 255, 255, 0.9));
            border-radius: 50px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1),
                0 2px 8px rgba(255, 255, 255, 0.5),
                inset 0 -4px 8px rgba(0, 0, 0, 0.05);
            z-index: 1;
        }

        .service-cloud::before,
        .service-cloud::after {
            content: '';
            position: absolute;
            background: inherit;
            border-radius: 50%;
            box-shadow: inherit;
        }

        .service-cloud-1 {
            width: 300px;
            height: 100px;
            top: 10%;
            left: 10%;
            animation: floatServiceCloud1 20s ease-in-out infinite;
        }

        .service-cloud-1::before {
            width: 120px;
            height: 120px;
            top: -60px;
            left: 50px;
        }

        .service-cloud-1::after {
            width: 100px;
            height: 100px;
            top: -45px;
            left: 140px;
        }

        .service-cloud-2 {
            width: 260px;
            height: 90px;
            bottom: 15%;
            right: 10%;
            animation: floatServiceCloud2 25s ease-in-out infinite;
        }

        .service-cloud-2::before {
            width: 110px;
            height: 110px;
            top: -55px;
            left: 45px;
        }

        .service-cloud-2::after {
            width: 90px;
            height: 90px;
            top: -40px;
            left: 130px;
        }

        .service-cloud-3 {
            width: 220px;
            height: 70px;
            top: 30%;
            right: 25%;
            animation: floatServiceCloud3 23s ease-in-out infinite;
            opacity: 0.9;
        }

        .service-cloud-3::before {
            width: 90px;
            height: 90px;
            top: -45px;
            left: 35px;
        }

        .service-cloud-3::after {
            width: 70px;
            height: 70px;
            top: -30px;
            left: 100px;
        }

        /* Atmospheric Effects */
        .service-sunlight {
            position: absolute;
            top: -100px;
            right: 10%;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle at center,
                    rgba(252, 211, 77, 0.4) 0%,
                    rgba(252, 211, 77, 0.2) 30%,
                    rgba(252, 211, 77, 0.1) 60%,
                    transparent 100%);
            filter: blur(40px);
            animation: servicesSunGlow 10s ease-in-out infinite;
        }

        .service-light-rays {
            position: absolute;
            top: 0;
            right: 10%;
            width: 600px;
            height: 100vh;
            background: repeating-linear-gradient(120deg,
                    transparent 0%,
                    transparent 2%,
                    rgba(252, 211, 77, 0.05) 4%,
                    transparent 6%,
                    transparent 8%);
            transform-origin: top;
            animation: servicesLightShift 20s ease-in-out infinite;
        }

        /* Service Cards */
        .service-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            z-index: 2;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(to right, #60a5fa, #fcd34d);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.15);
        }

        .service-card:hover::before {
            opacity: 1;
        }

        /* Service Icons */
        .service-icon-wrapper {
            width: 90px;
            height: 90px;
            margin: 0 auto 2rem;
            position: relative;
            z-index: 1;
        }

        .service-icon-bg {
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, #60a5fa, #fcd34d);
            border-radius: 1.5rem;
            transform: rotate(45deg);
            transition: transform 0.4s ease;
        }

        .service-card:hover .service-icon-bg {
            transform: rotate(225deg);
        }

        .service-icon {
            position: relative;
            z-index: 2;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Typography */
        .services-title {
            font-size: 4rem;
            font-weight: 800;
            line-height: 1.1;
            color: white;
            text-align: center;
            margin-bottom: 1.5rem;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .services-description {
            font-size: 1.5rem;
            line-height: 1.6;
            color: white;
            text-align: center;
            max-width: 800px;
            margin: 0 auto 4rem;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
        }

        .service-title {
            background: linear-gradient(to right, #60a5fa, #fcd34d);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-align: center;
            margin-bottom: 1.5rem;
            font-size: 1.75rem;
            font-weight: 700;
            line-height: 1.3
        }

        /* Feature List */
        .feature-list li {
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
            margin-bottom: 1rem;
            color: #4B5563;
        }

        .check-icon {
            flex-shrink: 0;
            width: 20px;
            height: 20px;
            color: #60a5fa;
        }

        /* Animations */
        @keyframes servicesSunGlow {

            0%,
            100% {
                opacity: 0.6;
                transform: scale(1);
            }

            50% {
                opacity: 0.8;
                transform: scale(1.1);
            }
        }

        @keyframes servicesLightShift {

            0%,
            100% {
                transform: rotate(0deg) translateY(0);
                opacity: 0.5;
            }

            50% {
                transform: rotate(5deg) translateY(-20px);
                opacity: 0.7;
            }
        }

        @keyframes floatServiceCloud1 {

            0%,
            100% {
                transform: translate(-100px, 0);
            }

            /* 50% {
                transform: translate(-20px, -80px);
            } */
        }

        @keyframes floatServiceCloud2 {

            0%,
            100% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(-80px, 20px);
            }
        }

        @keyframes floatServiceCloud3 {

            0%,
            100% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(60px, -15px);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .services-section {
                padding: 4rem 0;
            }

            .service-cloud-1 {
                display: none;
            }

            .services-title {
                font-size: 2.5rem;
            }

            .services-description {
                font-size: 1.25rem;
                padding: 0 1rem;
            }

            .service-card {
                margin-bottom: 2rem;
            }

            .service-cloud-3 {
                display: none;
            }

            .service-cloud-1,
            .service-cloud-2 {
                transform: scale(0.7);
            }
        }
    </style>

    <div class="services-section" id="services">
        <!-- Atmospheric Elements -->
        <div class="service-sunlight"></div>
        <div class="service-light-rays"></div>

        <!-- Enhanced Clouds -->
        <div class="service-cloud service-cloud-1"></div>
        <div class="service-cloud service-cloud-2"></div>
        <div class="service-cloud service-cloud-3"></div>

        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <h2 class="services-title dynapuff">
                {{ __('services.title') }}
            </h2>
            <p class="services-description">
                {{ __('services.description') }}
            </p>

            <!-- Services Grid -->
            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">

                <!-- Web Design Service -->
                <div class="service-card">
                    <div class="service-icon-wrapper">
                        <div class="service-icon-bg"></div>
                        <div class="service-icon">
                            <svg class="w-10 h-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="service-title dynapuff">
                        {{ __('services.web_design.title') }}
                    </h3>
                    <ul class="feature-list">
                        <li>
                            <svg class="check-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('services.web_design.feature_1') }}
                        </li>
                        <li>
                            <svg class="check-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('services.web_design.feature_2') }}
                        </li>
                        <li>
                            <svg class="check-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('services.web_design.feature_3') }}
                        </li>
                        <li>
                            <svg class="check-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('services.web_design.feature_4') }}
                        </li>
                    </ul>
                </div>

                <!-- Web Development Service -->
                <div class="service-card">
                    <div class="service-icon-wrapper">
                        <div class="service-icon-bg"></div>
                        <div class="service-icon">
                            <svg class="w-10 h-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="service-title dynapuff">
                        {{ __('services.web_development.title') }}
                    </h3>
                    <ul class="feature-list">
                        <li>
                            <svg class="check-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('services.web_development.feature_1') }}
                        </li>
                        <li>
                            <svg class="check-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('services.web_development.feature_2') }}
                        </li>
                        <li>
                            <svg class="check-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('services.web_development.feature_3') }}
                        </li>
                        <li>
                            <svg class="check-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('services.web_development.feature_4') }}
                        </li>
                    </ul>
                </div>

                <!-- Website Redesign Service -->
                <div class="service-card">
                    <div class="service-icon-wrapper">
                        <div class="service-icon-bg"></div>
                        <div class="service-icon">
                            <svg class="w-10 h-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="service-title dynapuff">
                        {{ __('services.project_management_systems.title') }}
                    </h3>
                    <ul class="feature-list">
                        <li>
                            <svg class="check-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('services.project_management_systems.feature_1') }}
                        </li>
                        <li>
                            <svg class="check-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('services.project_management_systems.feature_2') }}
                        </li>
                        <li>
                            <svg class="check-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('services.project_management_systems.feature_3') }}
                        </li>
                        <li>
                            <svg class="check-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('services.project_management_systems.feature_4') }}
                        </li>
                    </ul>
                </div>
                <!-- Repeat similar structure for Web Development and Redesign cards -->

            </div>
        </div>
    </div>
    <!-- End::Services Content -->
    <!-- start::How we work Content -->
    <style>
        /* Process Section Base */
        .process-section {
            background: radial-gradient(circle at 70% 20%,
                    rgba(252, 211, 77, 0.2) 0%,
                    transparent 50%),
                radial-gradient(circle at 20% 60%,
                    rgba(147, 197, 253, 0.3) 0%,
                    transparent 50%),
                linear-gradient(180deg,
                    #7dd3fc 0%,
                    #60a5fa 100%);
            position: relative;
            overflow: hidden;
            padding: 4rem 0;
        }

        /* Smaller, Enhanced Cloud Styles */
        .process-cloud {
            position: absolute;
            background: linear-gradient(180deg,
                    rgba(255, 255, 255, 0.95),
                    rgba(255, 255, 255, 0.9));
            border-radius: 50px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            z-index: 1;
            opacity: 0.5;
        }

        .process-cloud-1 {
            width: 200px;
            height: 60px;
            top: 5%;
            left: 5%;
            animation: floatProcessCloud1 20s ease-in-out infinite;
        }

        .process-cloud-2 {
            width: 180px;
            height: 50px;
            bottom: 10%;
            right: 5%;
            animation: floatProcessCloud2 25s ease-in-out infinite;
        }

        /* Process Cards Enhanced */
        .process-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 1.5rem;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            position: relative;
            z-index: 2;
        }

        .process-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        /* Icon Container */
        .process-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #60a5fa, #fcd34d);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
            transition: all 0.3s ease;
            transform: rotate(0deg);
        }

        .process-card:hover .process-icon {
            transform: rotate(360deg);
        }

        .process-icon svg {
            width: 24px;
            height: 24px;
            color: white;
        }

        /* Step Number */
        .step-number {
            position: absolute;
            top: 1.5rem;
            right: 1.5rem;
            font-size: 3rem;
            font-weight: 800;
            opacity: 0.1;
            color: #60a5fa;
            line-height: 1;
        }

        /* Typography */
        .process-title {
            font-size: 2.5rem;
            font-weight: 800;
            color: white;
            text-align: center;
            margin-bottom: 2.5rem;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .step-title {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 0.75rem;
            background: linear-gradient(to right, #60a5fa, #fcd34d);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        /* Process List Enhanced */
        .process-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .process-list li {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 0.5rem;
            color: #4B5563;
            font-size: 0.95rem;
            padding: 0.25rem 0;
        }

        .process-list li::before {
            content: '•';
            color: #60a5fa;
            font-size: 1.2rem;
        }

        /* Animations */
        @keyframes floatProcessCloud1 {

            0%,
            100% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(40px, -10px);
            }
        }

        @keyframes floatProcessCloud2 {

            0%,
            100% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(-40px, 10px);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .process-section {
                padding: 3rem 0;
            }

            .process-title {
                font-size: 2rem;
            }

            .process-card {
                margin-bottom: 1.5rem;
            }

            .process-cloud {
                display: none;
            }
        }
    </style>

    <div class="process-section" id="process">
        <!-- Minimal Clouds -->
        <div class="service-cloud service-cloud-1"></div>
        <div class="service-cloud service-cloud-2"></div>

        <div class="container mx-auto px-4">
            <h2 class="process-title dynapuff ">
                {{ __('process.title') }}
            </h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-6xl mx-auto">
                <!-- Step 1: Discovery -->
                <div class="process-card">
                    <div class="step-number">1</div>
                    <div class="process-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <h3 class="step-title dynapuff">{{ __('process.step1.title') }}</h3>
                    <ul class="process-list">
                        <li>{{ __('process.step1.point1') }}</li>
                        <li>{{ __('process.step1.point2') }}</li>
                        <li>{{ __('process.step1.point3') }}</li>
                    </ul>
                </div>

                <!-- Step 2: Design -->
                <div class="process-card">
                    <div class="step-number">2</div>
                    <div class="process-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </svg>
                    </div>
                    <h3 class="step-title dynapuff">{{ __('process.step2.title') }}</h3>
                    <ul class="process-list">
                        <li>{{ __('process.step2.point1') }}</li>
                        <li>{{ __('process.step2.point2') }}</li>
                        <li>{{ __('process.step2.point3') }}</li>
                    </ul>
                </div>

                <!-- Step 3: Development -->
                <div class="process-card">
                    <div class="step-number">3</div>
                    <div class="process-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                    </div>
                    <h3 class="step-title dynapuff">{{ __('process.step3.title') }}</h3>
                    <ul class="process-list">
                        <li>{{ __('process.step3.point1') }}</li>
                        <li>{{ __('process.step3.point2') }}</li>
                        <li>{{ __('process.step3.point3') }}</li>
                    </ul>
                </div>

                <!-- Step 4: Launch -->
                <div class="process-card">
                    <div class="step-number">4</div>
                    <div class="process-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="step-title dynapuff">{{ __('process.step4.title') }}</h3>
                    <ul class="process-list">
                        <li>{{ __('process.step4.point1') }}</li>
                        <li>{{ __('process.step4.point2') }}</li>
                        <li>{{ __('process.step4.point3') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end::How we work Content -->

    <!-- Start::About Content -->
    <style>
        /* About Section Base */
        .about-section {
            background: radial-gradient(circle at 70% 20%,
                    rgba(252, 211, 77, 0.2) 0%,
                    transparent 50%),
                radial-gradient(circle at 20% 60%,
                    rgba(147, 197, 253, 0.3) 0%,
                    transparent 50%),
                linear-gradient(180deg,
                    #7dd3fc 0%,
                    #60a5fa 100%);
            position: relative;
            overflow: hidden;
            padding: 4rem 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        /* Cloud Elements */
        .about-cloud {
            position: absolute;
            background: linear-gradient(180deg,
                    rgba(255, 255, 255, 0.95),
                    rgba(255, 255, 255, 0.9));
            border-radius: 50px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            z-index: 1;
            opacity: 0.5;
        }

        .about-cloud-1 {
            width: 200px;
            height: 60px;
            top: 5%;
            left: 5%;
            animation: floatAboutCloud1 20s ease-in-out infinite;
        }

        .about-cloud-2 {
            width: 180px;
            height: 50px;
            bottom: 10%;
            right: 5%;
            animation: floatAboutCloud2 25s ease-in-out infinite;
        }

        /* Content Card */
        .about-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            position: relative;
            z-index: 2;
        }

        .about-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        /* Typography */
        .about-title {
            font-size: 2.5rem;
            font-weight: 800;
            background: linear-gradient(to right, #60a5fa, #fcd34d);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: 1rem;
            padding: 20px 0;
            line-height: 1.2;
            /* Controls the space between lines */
            display: inline-block;
            text-align: left;
            /* Centers the text horizontally */
            background-size: 100% 200%;
            /* Ensures gradient covers both lines evenly */
            background-position: 0 0;
            /* Adjusts gradient start position */
        }

        [dir="ltr"] .about-title {
            text-align: left;
        }

        [dir="rtl"] .about-title {
            text-align: right;
        }


        .about-subtitle {
            font-size: 1.5rem;
            font-weight: 700;
            color: #60a5fa;
            margin-bottom: 1.5rem;
        }

        /* Feature List Enhanced */
        .feature-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
            padding: 0.75rem;
            border-radius: 8px;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.5);
        }

        .feature-item:hover {
            background: rgba(255, 255, 255, 0.8);
            transform: translateX(10px);
        }

        [dir="rtl"] .feature-item:hover {
            transform: translateX(-10px);
        }

        .feature-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #60a5fa, #fcd34d);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .feature-item:hover .feature-icon {
            transform: rotate(360deg);
        }

        /* Image Container Enhanced */
        .image-container {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease;
        }

        .image-container::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(45deg, rgba(96, 165, 250, 0.2), rgba(252, 211, 77, 0.2));
            z-index: 1;
        }

        .image-container:hover {
            transform: translateY(-10px);
        }

        .about-image {
            width: 100%;
            height: 28rem;
            object-fit: cover;
        }

        /* CTA Button Enhanced */
        .about-cta {
            display: inline-block;
            background: linear-gradient(to right, #60a5fa, #fcd34d);
            color: white;
            padding: 1rem 2.5rem;
            border-radius: 9999px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(96, 165, 250, 0.2);
        }

        .about-cta:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(96, 165, 250, 0.3);
        }

        /* Animations */
        @keyframes floatAboutCloud1 {

            0%,
            100% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(40px, -10px);
            }
        }

        @keyframes floatAboutCloud2 {

            0%,
            100% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(-40px, 10px);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .about-section {
                padding: 3rem 0;
            }

            .about-title {
                font-size: 2rem;
            }

            .about-cloud {
                display: none;
            }

            .about-card {
                margin-bottom: 1.5rem;
            }
        }
    </style>

    <div class="about-section" id="about">
        <!-- Cloud Elements -->
        <div class="service-cloud service-cloud-1"></div>
        <div class="service-cloud service-cloud-2"></div>

        <div class="container mx-auto px-4">
            <div class="max-w-7xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                    <!-- Content Column -->
                    <div class="order-2 lg:order-1" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                        <div class="about-card">
                            <h2 class="dynapuff about-title">{{ __('about.title') }}</h2>
                            <h3 class="dynapuff about-subtitle">{{ __('about.subtitle') }}</h3>

                            <p class="text-lg text-gray-700 leading-relaxed mb-8">
                                {{ __('about.description') }}
                            </p>

                            <ul class="feature-list">
                                <li class="feature-item">
                                    <div class="feature-icon">
                                        <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <span class="text-gray-700">{{ __('about.feature1') }}</span>
                                </li>
                                <li class="feature-item">
                                    <div class="feature-icon">
                                        <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <span class="text-gray-700">{{ __('about.feature2') }}</span>
                                </li>
                                <li class="feature-item">
                                    <div class="feature-icon">
                                        <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <span class="text-gray-700">{{ __('about.feature3') }}</span>
                                </li>
                            </ul>

                            <div class="mt-8">
                                <a href="#projects" class="about-cta dynapuff">
                                    {{ __('about.cta_button') }}
                                    <i class="ri-magic-line {{ app()->getLocale() == 'ar' ? 'mr-2' : 'ml-2' }}"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Image Column -->
                    <div class="order-1 lg:order-2">
                        <div class="image-container">
                            <img src="{{asset('build/assets/img/landing/design.jpg')}}" class="about-image"
                                alt="{{ __('about.image_alt') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End::About Content -->

    <!-- Start::Mission Content -->
    <style>
        /* Mission Section Base */
        .mission-section {
            background: radial-gradient(circle at 70% 20%,
                    rgba(252, 211, 77, 0.2) 0%,
                    transparent 50%),
                radial-gradient(circle at 20% 60%,
                    rgba(147, 197, 253, 0.3) 0%,
                    transparent 50%),
                linear-gradient(180deg,
                    #7dd3fc 0%,
                    #60a5fa 100%);
            position: relative;
            overflow: hidden;
            padding: 4rem 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        /* Cloud Elements */
        .mission-cloud {
            position: absolute;
            background: linear-gradient(180deg,
                    rgba(255, 255, 255, 0.95),
                    rgba(255, 255, 255, 0.9));
            border-radius: 50px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            z-index: 1;
            opacity: 0.5;
        }

        .mission-cloud-1 {
            width: 200px;
            height: 60px;
            top: 5%;
            left: 5%;
            animation: floatMissionCloud1 20s ease-in-out infinite;
        }

        .mission-cloud-2 {
            width: 180px;
            height: 50px;
            bottom: 10%;
            right: 5%;
            animation: floatMissionCloud2 25s ease-in-out infinite;
        }

        /* Content Card */
        .mission-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            position: relative;
            z-index: 2;
        }

        .mission-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        /* Typography */
        .mission-title {
            font-size: 2.5rem;
            font-weight: 800;
            background: linear-gradient(to right, #60a5fa, #fcd34d);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: 1rem;
            padding: 20px 0;
        }

        .mission-subtitle {
            font-size: 1.5rem;
            font-weight: 700;
            background: linear-gradient(to right, #fcd34d, #60a5fa);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: 1.5rem;
        }

        /* Feature List Enhanced */
        .mission-feature-list {
            list-style: none;
            padding: 0;
            margin: 2rem 0;
        }

        .mission-feature-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
            padding: 1rem;
            border-radius: 12px;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.5);
        }

        .mission-feature-item:hover {
            background: rgba(255, 255, 255, 0.8);
            transform: translateX(10px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .mission-feature-icon {
            width: 48px;
            height: 48px;
            background: linear-gradient(135deg, #60a5fa, #fcd34d);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            color: white;
            font-size: 24px;
        }

        .mission-feature-item:hover .mission-feature-icon {
            transform: rotate(360deg);
        }

        /* Image Container Enhanced */
        .mission-image-container {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease;
        }

        .mission-image-container::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(45deg, rgba(96, 165, 250, 0.2), rgba(252, 211, 77, 0.2));
            z-index: 1;
        }

        .mission-image-container:hover {
            transform: translateY(-10px);
        }

        .mission-image {
            width: 100%;
            height: 28rem;
            object-fit: cover;
            border: 4px solid rgba(255, 255, 255, 0.8);
        }

        /* CTA Button Enhanced */
        .mission-cta {
            display: inline-block;
            background: linear-gradient(to right, #60a5fa, #fcd34d);
            color: white;
            padding: 1rem 2.5rem;
            border-radius: 9999px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(96, 165, 250, 0.2);
        }

        .mission-cta:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(96, 165, 250, 0.3);
        }

        /* RTL Support */
        [dir="rtl"] .mission-feature-item:hover {
            transform: translateX(-10px);
        }

        /* Animations */
        @keyframes floatMissionCloud1 {

            0%,
            100% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(40px, -10px);
            }
        }

        @keyframes floatMissionCloud2 {

            0%,
            100% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(-40px, 10px);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .mission-section {
                padding: 3rem 0;
            }

            .mission-title {
                font-size: 2rem;
            }

            .mission-cloud {
                display: none;
            }

            .mission-content {
                text-align: center;
            }

            .mission-feature-list {
                max-width: 400px;
                margin: 2rem auto;
            }
        }
    </style>

    <div class="mission-section" id="our-mission">
        <!-- Cloud Elements -->
        <div class="service-cloud service-cloud-1"></div>
        <div class="service-cloud service-cloud-2"></div>

        <div class="container mx-auto px-4">
            <div class="max-w-7xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                    <!-- Image Column -->
                    <div class="order-2 lg:order-1">
                        <div class="mission-image-container">
                            <img src="{{asset('build/assets/img/landing/dashboard.jpg')}}" class="mission-image"
                                alt="{{ __('mission.image_alt') }}">
                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="order-1 lg:order-2" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                        <div class="mission-card">
                            <h2 class="dynapuff mission-title">{{ __('mission.title') }}</h2>
                            <h3 class="dynapuff mission-subtitle py-2">{{ __('mission.subtitle') }}</h3>

                            <p class="text-lg text-gray-700 leading-relaxed mb-8">
                                {{ __('mission.description') }}
                            </p>

                            <ul class="mission-feature-list">
                                <li class="mission-feature-item">
                                    <div class="mission-feature-icon">
                                        <i class="ri-bar-chart-box-line"></i>
                                    </div>
                                    <span class="text-gray-700">{{ __('mission.feature1') }}</span>
                                </li>
                                <li class="mission-feature-item">
                                    <div class="mission-feature-icon">
                                        <i class="ri-settings-3-line"></i>
                                    </div>
                                    <span class="text-gray-700">{{ __('mission.feature2') }}</span>
                                </li>
                                <li class="mission-feature-item">
                                    <div class="mission-feature-icon">
                                        <i class="ri-user-smile-line"></i>
                                    </div>
                                    <span class="text-gray-700">{{ __('mission.feature3') }}</span>
                                </li>
                                <li class="mission-feature-item">
                                    <div class="mission-feature-icon">
                                        <i class="ri-pie-chart-2-line"></i>
                                    </div>
                                    <span class="text-gray-700">{{ __('mission.feature4') }}</span>
                                </li>
                            </ul>

                            <div class="mt-8">
                                <a href="#projects" class="mission-cta dynapuff">
                                    {{ __('mission.cta_button') }}
                                    <i class="ri-sparkle-line {{ app()->getLocale() == 'ar' ? 'mr-2' : 'ml-2' }}"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End::Mission Content -->



    <!-- Start::Testinominals Content -->
    <style>
        /* Testimonials Section Base */
        .testimonials-section {
            background: radial-gradient(circle at 70% 20%,
                    rgba(252, 211, 77, 0.2) 0%,
                    transparent 50%),
                radial-gradient(circle at 20% 60%,
                    rgba(147, 197, 253, 0.3) 0%,
                    transparent 50%),
                linear-gradient(180deg,
                    #7dd3fc 0%,
                    #60a5fa 100%);
            position: relative;
            overflow: hidden;
            padding: 4rem 0;
            min-height: 80vh;
            display: flex;
            align-items: center;
        }

        /* Cloud Elements */
        .testimonials-cloud {
            position: absolute;
            background: linear-gradient(180deg,
                    rgba(255, 255, 255, 0.95),
                    rgba(255, 255, 255, 0.9));
            border-radius: 50px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            z-index: 1;
            opacity: 0.5;
        }

        .testimonials-cloud-1 {
            width: 200px;
            height: 60px;
            top: 5%;
            left: 5%;
            animation: floatTestCloud1 20s ease-in-out infinite;
        }

        .testimonials-cloud-2 {
            width: 180px;
            height: 50px;
            bottom: 10%;
            right: 5%;
            animation: floatTestCloud2 25s ease-in-out infinite;
        }

        /* Typography */
        .testimonials-title {
            font-size: 2.5rem;
            font-weight: 800;
            text-align: center;
            background: linear-gradient(to right, #ffffff, #ffffff);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: 3rem;
            padding: 20px 0;
        }

        /* Testimonial Card */
        .testimonial-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 2.5rem 2rem;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            position: relative;
            z-index: 2;
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        /* Message Icon */
        .testimonial-icon-wrapper {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translate(-50%, -50%);
            background: linear-gradient(135deg, #60a5fa, #fcd34d);
            border-radius: 12px;
            padding: 1rem;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .testimonial-card:hover .testimonial-icon-wrapper {
            transform: translate(-50%, -50%) rotate(360deg);
        }

        .testimonial-icon {
            width: 2.5rem;
            height: 2.5rem;
            color: white;
        }

        /* Stars */
        .testimonial-stars {
            display: flex;
            justify-content: center;
            gap: 0.5rem;
            margin: 2rem 0 1.5rem;
        }

        .star {
            color: #fcd34d;
            font-size: 1.5rem;
            transition: transform 0.3s ease;
        }

        .testimonial-card:hover .star {
            animation: starPop 0.5s ease-out forwards;
        }

        /* Quote */
        .testimonial-quote {
            position: relative;
            color: #4b5563;
            line-height: 1.8;
            margin: 1.5rem 0;
            padding: 0 1.5rem;
            font-size: 1.1rem;
        }

        .testimonial-quote::before,
        .testimonial-quote::after {
            content: '"';
            position: absolute;
            font-size: 4rem;
            font-family: serif;
            background: linear-gradient(135deg, #60a5fa, #fcd34d);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            opacity: 0.3;
        }

        .testimonial-quote::before {
            left: -1rem;
            top: -1rem;
        }

        .testimonial-quote::after {
            right: -1rem;
            bottom: -2rem;
        }

        /* Profile */
        .testimonial-profile {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            margin-top: 2rem;
            padding-top: 1rem;
            border-top: 2px solid rgba(96, 165, 250, 0.1);
        }

        .profile-info {
            text-align: left;
        }

        .profile-name {
            background: linear-gradient(to right, #60a5fa, #fcd34d);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-weight: bold;
            font-size: 1.25rem;
            margin-bottom: 0.25rem;
        }

        /* Animations */
        @keyframes floatTestCloud1 {

            0%,
            100% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(40px, -10px);
            }
        }

        @keyframes floatTestCloud2 {

            0%,
            100% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(-40px, 10px);
            }
        }

        @keyframes starPop {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.3);
            }

            100% {
                transform: scale(1);
            }
        }

        .star:nth-child(1) {
            animation-delay: 0s;
        }

        .star:nth-child(2) {
            animation-delay: 0.1s;
        }

        .star:nth-child(3) {
            animation-delay: 0.2s;
        }

        .star:nth-child(4) {
            animation-delay: 0.3s;
        }

        .star:nth-child(5) {
            animation-delay: 0.4s;
        }

        /* RTL Support */
        [dir="rtl"] .profile-info {
            text-align: right;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .testimonials-section {
                padding: 3rem 0;
            }

            .testimonials-title {
                font-size: 2rem;
            }

            .testimonials-cloud {
                display: none;
            }

            .testimonial-card {
                margin: 0 1rem;
                padding: 2rem 1.5rem;
            }

            .testimonial-quote {
                padding: 0 1rem;
                font-size: 1rem;
            }
        }
    </style>

    <div class="testimonials-section" id="testimonials">
        <!-- Cloud Elements -->
        <div class="service-cloud service-cloud-1"></div>
        <div class="service-cloud service-cloud-2"></div>

        <div class="container mx-auto px-4">
            <h2 class="testimonials-title dynapuff">
                {{ __('testimonials.title') }}
            </h2>

            <div class="max-w-3xl mx-auto">
                <div class="testimonial-card">
                    <!-- Message Icon -->
                    <div class="testimonial-icon-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" class="testimonial-icon" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                    </div>

                    <!-- Stars -->
                    <div class="testimonial-stars" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                        <i class="ri-star-fill star"></i>
                        <i class="ri-star-fill star"></i>
                        <i class="ri-star-fill star"></i>
                        <i class="ri-star-fill star"></i>
                        <i class="ri-star-fill star"></i>
                    </div>

                    <!-- Testimonial Text -->
                    <div dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                        <p class="testimonial-quote text-center">
                            {{ __('testimonials.quote') }}
                        </p>
                    </div>

                    <!-- Profile Section -->
                    <div class="testimonial-profile {{ app()->getLocale() == 'ar' ? 'flex-row-reverse' : '' }}">
                        <div class="{{ app()->getLocale() == 'ar' ? 'mr-4' : 'ml-4' }}">
                            <p class="profile-name dynapuff">{{ __('testimonials.profile.name') }}</p>
                            <p class="text-gray-600">{{ __('testimonials.profile.title') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End::Testinominals Content -->

    <!-- Start::Pricing Content -->
    <style>
        /* Pricing Section Base */
        .pricing-section {
            background: radial-gradient(circle at 70% 20%,
                    rgba(252, 211, 77, 0.2) 0%,
                    transparent 50%),
                radial-gradient(circle at 20% 60%,
                    rgba(147, 197, 253, 0.3) 0%,
                    transparent 50%),
                linear-gradient(180deg,
                    #7dd3fc 0%,
                    #60a5fa 100%);
            position: relative;
            overflow: hidden;
            padding: 4rem 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        /* Cloud Elements */
        .pricing-cloud {
            position: absolute;
            background: linear-gradient(180deg,
                    rgba(255, 255, 255, 0.95),
                    rgba(255, 255, 255, 0.9));
            border-radius: 50px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            z-index: 1;
            opacity: 0.5;
        }

        .pricing-cloud-1 {
            width: 200px;
            height: 60px;
            top: 5%;
            left: 5%;
            animation: floatPricingCloud1 20s ease-in-out infinite;
        }

        .pricing-cloud-2 {
            width: 180px;
            height: 50px;
            bottom: 10%;
            right: 5%;
            animation: floatPricingCloud2 25s ease-in-out infinite;
        }

        /* Typography */
        .pricing-title {
            font-size: 2.5rem;
            font-weight: 800;
            text-align: center;
            background: linear-gradient(to right, #ffffff, #ffffff);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: 1rem;
            padding: 20px 0;
        }

        .pricing-description {
            color: #4b5563;
            max-width: 36rem;
            margin: 0 auto;
            text-align: center;
            font-size: 1.125rem;
            line-height: 1.75;
        }

        /* Notice Box */
        .pricing-notice {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 1.5rem;
            margin: 2rem auto;
            max-width: 36rem;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            border-left: 4px solid #fcd34d;
            transition: all 0.3s ease;
        }

        .pricing-notice:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        /* Pricing Cards */
        .pricing-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            max-width: 64rem;
            margin: 0 auto;
        }

        .pricing-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            position: relative;
            z-index: 2;
        }

        .pricing-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        /* Card Header */
        .card-header {
            padding: 2rem;
            text-align: center;
            position: relative;
            background: linear-gradient(135deg,
                    rgba(96, 165, 250, 0.1),
                    rgba(252, 211, 77, 0.1));
        }

        .pricing-icon {
            width: 4rem;
            height: 4rem;
            background: linear-gradient(135deg, #60a5fa, #fcd34d);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            transition: all 0.3s ease;
        }

        .pricing-card:hover .pricing-icon {
            transform: rotate(360deg);
        }

        .pricing-icon i {
            font-size: 1.5rem;
            color: white;
        }

        /* Feature List */
        .feature-list {
            background: rgba(255, 255, 255, 0.5);
            padding: 2rem;
        }

        .feature-item {
            display: flex;
            align-items: center;
            padding: 0.75rem;
            margin-bottom: 0.5rem;
            border-radius: 8px;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.5);
        }

        .feature-item:hover {
            background: rgba(255, 255, 255, 0.8);
            transform: translateX(10px);
        }

        .feature-icon {
            color: #60a5fa;
            margin-right: 1rem;
            font-size: 1.25rem;
        }

        /* Coming Soon Features */
        .coming-soon-features {
            padding: 2rem;
            background: linear-gradient(135deg,
                    rgba(96, 165, 250, 0.05),
                    rgba(252, 211, 77, 0.05));
        }

        .soon-feature {
            background: rgba(255, 255, 255, 0.95);
            padding: 1rem;
            border-radius: 12px;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .soon-feature:hover {
            transform: translateX(10px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        }

        /* Coming Soon Ribbon */
        .coming-soon-ribbon {
            position: absolute;
            top: 2rem;
            right: -2.5rem;
            background: linear-gradient(45deg, #60a5fa, #fcd34d);
            color: white;
            padding: 0.5rem 3rem;
            transform: rotate(45deg);
            font-weight: bold;
            text-transform: uppercase;
            font-size: 0.875rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            z-index: 10;
        }

        /* CTA Button */
        .pricing-cta {
            display: block;
            background: linear-gradient(to right, #60a5fa, #fcd34d);
            color: white;
            padding: 1rem 2.5rem;
            border-radius: 9999px;
            text-align: center;
            margin: 2rem;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(96, 165, 250, 0.2);
        }

        .pricing-cta:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(96, 165, 250, 0.3);
        }

        .pricing-cta.disabled {
            opacity: 0.7;
            cursor: not-allowed;
            background: linear-gradient(to right, #9ca3af, #d1d5db);
        }

        /* RTL Support */
        [dir="rtl"] .feature-item:hover {
            transform: translateX(-10px);
        }

        [dir="rtl"] .soon-feature:hover {
            transform: translateX(-10px);
        }

        [dir="rtl"] .feature-icon {
            margin-right: 0;
            margin-left: 1rem;
        }

        [dir="rtl"] .coming-soon-ribbon {
            right: auto;
            left: -2.5rem;
            transform: rotate(-45deg);
        }

        /* Animations */
        @keyframes floatPricingCloud1 {

            0%,
            100% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(40px, -10px);
            }
        }

        @keyframes floatPricingCloud2 {

            0%,
            100% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(-40px, 10px);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .pricing-section {
                padding: 3rem 0;
            }

            .pricing-title {
                font-size: 2rem;
            }

            .pricing-cloud {
                display: none;
            }

            .pricing-cards {
                grid-template-columns: 1fr;
                padding: 0 1rem;
            }

            .pricing-notice {
                margin: 2rem 1rem;
            }
        }
    </style>

    <div class="pricing-section" id="pricing">
        <!-- Cloud Elements -->
        <div class="service-cloud service-cloud-1"></div>
        <div class="service-cloud service-cloud-2"></div>

        <div class="container mx-auto px-4 max-w-7xl">
            <!-- Header -->
            <div class="pricing-header text-center mb-12" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                <h2 class="pricing-title dynapuff">{{ __('pricing.title') }}</h2>
                <p class="pricing-description mb-6">{{ __('pricing.description') }}</p>
            </div>

            <!-- Pricing Cards Grid -->
            <div class="pricing-cards">
                <!-- Basic Plan -->
                <div class="pricing-card">
                    <div class="card-header">
                        <div class="pricing-icon"><i class="ri-layout-4-line"></i></div>
                        <div dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                            <h3 class="dynapuff text-2xl font-bold text-blue-600 mb-2">{{ __('pricing.basic.title') }}
                            </h3>
                            <p class="text-gray-600 mb-4">{{ __('pricing.basic.subtitle') }}</p>
                            {{-- <div class="price-tag">
                                <span class="dynapuff text-4xl font-bold text-blue-600">{{ app()->getLocale() == 'ar' ?
                                    '٢٥٠' : '250' }}</span>
                                <span class="text-2xl font-bold text-blue-600">{{ app()->getLocale() == 'ar' ? 'د.ك' :
                                    'KWD' }}</span>
                            </div> --}}
                        </div>
                    </div>

                    <div class="feature-list" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                        @foreach(range(1, 5) as $i)
                        <div class="feature-item">
                            <i class="ri-checkbox-circle-fill feature-icon"></i>
                            <span class="text-gray-700">{{ __("pricing.basic.features.$i") }}</span>
                        </div>
                        @endforeach
                    </div>

                    <a href="#contact" class="pricing-cta dynapuff">{{ __('pricing.basic.button') }}</a>
                </div>

                <!-- Pro Plan -->
                <div class="pricing-card">


                    <div class="card-header">
                        <div class="pricing-icon"><i class="ri-dashboard-3-line"></i></div>
                        <div dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                            {{-- <h3 class="dynapuff text-2xl font-bold text-blue-600 mb-2">

                                @if(App::isLocale('en'))
                                <span class="price-amount text-4xl">200</span>
                                <span class="price-currency text-4xl">KD</span>
                                <span class="price-period text-xl font-medium text-gray-600">/ Year</span>
                                @else
                                <span class="price-amount text-4xl">٢٠٠</span>
                                <span class="price-currency text-4xl">د.ك</span>
                                <span class="price-period text-xl font-medium text-gray-600">/ سنة</span>
                                @endif
                            </h3> --}}
                            <div
                                class="launch-badge bg-yellow-100 text-yellow-800 px-4 py-2 rounded-full inline-block text-sm">
                                <i class="ri-notification-3-line"></i>
                                {{ __('pricing.pro.launch_notice') }}
                            </div>
                        </div>
                    </div>

                    <div class="feature-list" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                        @foreach(range(1, 6) as $i)
                        <div class="feature-item">
                            <i class="ri-checkbox-circle-fill feature-icon"></i>
                            <span class="text-gray-700">{{ __("pricing.pro.features.$i") }}</span>
                        </div>
                        @endforeach
                    </div>
                    <a href="#contact" class="pricing-cta dynapuff">{{ __('pricing.basic.button') }}</a>

                </div>
            </div>
        </div>
    </div>

    <!-- End::Pricing Content -->



    <style>
        /* Projects Section Base */
        .projects-section {
            background: radial-gradient(circle at 70% 20%,
                    rgba(252, 211, 77, 0.2) 0%,
                    transparent 50%),
                radial-gradient(circle at 20% 60%,
                    rgba(147, 197, 253, 0.3) 0%,
                    transparent 50%),
                linear-gradient(180deg,
                    #7dd3fc 0%,
                    #60a5fa 100%);
            position: relative;
            overflow: hidden;
            padding: 4rem 0;
            min-height: 100vh;
        }

        /* Cloud Elements */
        .projects-cloud {
            position: absolute;
            background: linear-gradient(180deg,
                    rgba(255, 255, 255, 0.95),
                    rgba(255, 255, 255, 0.9));
            border-radius: 50px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            z-index: 1;
            opacity: 0.5;
        }

        .projects-cloud-1 {
            width: 200px;
            height: 60px;
            top: 5%;
            left: 5%;
            animation: floatProjectCloud1 20s ease-in-out infinite;
        }

        .projects-cloud-2 {
            width: 180px;
            height: 50px;
            bottom: 10%;
            right: 5%;
            animation: floatProjectCloud2 25s ease-in-out infinite;
        }

        /* Typography */
        .projects-title {
            font-size: 2.5rem;
            font-weight: 800;
            text-align: center;
            background: linear-gradient(to right, #ffffff, #ffffff);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: 1.5rem;
            padding: 20px 0;
        }

        .projects-description {
            color: #4b5563;
            max-width: 48rem;
            margin: 0 auto;
            text-align: center;
            font-size: 1.125rem;
            line-height: 1.75;
            margin-bottom: 3rem;
        }

        /* Project Cards */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2.5rem;
            max-width: 72rem;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        .project-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            position: relative;
            z-index: 2;
        }

        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .project-image-wrapper {
            position: relative;
            height: 400px;
            overflow: hidden;
        }

        .project-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .project-card:hover .project-image {
            transform: scale(1.05);
        }

        /* Overlay */
        .project-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top,
                    rgba(96, 165, 250, 0.95),
                    rgba(96, 165, 250, 0.7) 50%,
                    rgba(96, 165, 250, 0) 100%);
            padding: 2rem;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            transform: translateY(60px);
            transition: all 0.5s ease;
        }

        .project-card:hover .project-overlay {
            transform: translateY(0);
        }

        .project-content {
            opacity: 0.9;
            transition: opacity 0.3s ease;
        }

        .project-card:hover .project-content {
            opacity: 1;
        }

        .project-title {
            color: white;
            font-size: 1.75rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .project-description {
            color: rgba(255, 255, 255, 0.95);
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .project-link {
            display: inline-flex;
            align-items: center;
            background: linear-gradient(to right, #60a5fa, #fcd34d);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 9999px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .project-link:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(96, 165, 250, 0.3);
        }

        .project-link-icon {
            margin-left: 0.5rem;
            transition: transform 0.3s ease;
        }

        .project-link:hover .project-link-icon {
            transform: translateX(3px);
        }

        /* RTL Support */
        [dir="rtl"] .project-link {
            flex-direction: row-reverse;
        }

        [dir="rtl"] .project-link-icon {
            margin-left: 0;
            margin-right: 0.5rem;
            transform: scaleX(-1);
        }

        [dir="rtl"] .project-link:hover {
            transform: translateY(-2px);
        }

        [dir="rtl"] .project-link:hover .project-link-icon {
            transform: translateX(-3px) scaleX(-1);
        }

        /* Animations */
        @keyframes floatProjectCloud1 {

            0%,
            100% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(40px, -10px);
            }
        }

        @keyframes floatProjectCloud2 {

            0%,
            100% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(-40px, 10px);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .projects-section {
                padding: 3rem 0;
            }

            .projects-title {
                font-size: 2rem;
            }

            .projects-grid {
                grid-template-columns: 1fr;
                padding: 0 1rem;
            }

            .project-image-wrapper {
                height: 300px;
            }
        }
    </style>

    <div class="projects-section" id="projects">
        <!-- Cloud Elements -->
        <div class="service-cloud service-cloud-1"></div>
        <div class="service-cloud service-cloud-2"></div>

        <div class="container mx-auto px-4">
            <h2 class="projects-title dynapuff">{{ __('projects.projects.magical') }}</h2>
            <p class="projects-description">{{ __('projects.projects.description') }}</p>

            <div class="projects-grid">
                <!-- Project 1: Learning Activities -->
                <div class="project-card">
                    <div class="project-image-wrapper">
                        <img src="{{asset('build/assets/img/landing/bright-kids.png')}}"
                            alt="{{ __('projects.projects.activities.alt') }}" class="project-image">
                        <div class="project-overlay">
                            <div class="project-content">
                                <h3 class="project-title dynapuff">{{ __('projects.projects.activities.title') }}</h3>
                                <p class="project-description">{{ __('projects.projects.activities.description') }}</p>
                                <a href="https://bright-kids.site/" class="project-link dynapuff">
                                    {{ __('projects.projects.view_more') }}
                                    <span class="project-link-icon">→</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 2: Parent Portal -->
                <div class="project-card">
                    <div class="project-image-wrapper">
                        <img src="{{asset('build/assets/img/landing/school-system-dashboard.png')}}"
                            alt="{{ __('projects.projects.portal.alt') }}" class="project-image">
                        <div class="project-overlay">
                            <div class="project-content">
                                <h3 class="project-title dynapuff">{{ __('projects.projects.portal.title') }}</h3>
                                <p class="project-description">{{ __('projects.projects.portal.description') }}</p>
                                <a href="/demo-dashboard" class="project-link dynapuff">
                                    {{ __('projects.projects.view_more') }}
                                    <span class="project-link-icon">→</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project 2: Parent Portal -->
                <div class="project-card">
                    <div class="project-image-wrapper">
                        <img src="{{asset('build/assets/img/landing/kahromaa.png')}}"
                            alt="{{ __('projects.projects.portal.alt') }}" class="project-image">
                        <div class="project-overlay">
                            <div class="project-content">
                                <h3 class="project-title dynapuff">{{ __('projects.projects.project3.title') }}</h3>
                                <p class="project-description">{{ __('projects.projects.project3.description') }}</p>
                                <a href="https://kahromaa.com" class="project-link dynapuff">
                                    {{ __('projects.projects.view_more') }}
                                    <span class="project-link-icon">→</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start::Contact Content -->
    <style>
        /* Contact Section Base */
        .contact-section {
            background: radial-gradient(circle at 70% 20%,
                    rgba(252, 211, 77, 0.2) 0%,
                    transparent 50%),
                radial-gradient(circle at 20% 60%,
                    rgba(147, 197, 253, 0.3) 0%,
                    transparent 50%),
                linear-gradient(180deg,
                    #7dd3fc 0%,
                    #60a5fa 100%);
            position: relative;
            overflow: hidden;
            padding: 4rem 0;
        }

        /* Cloud Elements */
        .contact-cloud {
            position: absolute;
            background: linear-gradient(180deg,
                    rgba(255, 255, 255, 0.95),
                    rgba(255, 255, 255, 0.9));
            border-radius: 50px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            z-index: 1;
            opacity: 0.5;
        }

        .contact-cloud-1 {
            width: 200px;
            height: 60px;
            top: 5%;
            left: 5%;
            animation: floatContactCloud1 20s ease-in-out infinite;
        }

        .contact-cloud-2 {
            width: 180px;
            height: 50px;
            bottom: 10%;
            right: 5%;
            animation: floatContactCloud2 25s ease-in-out infinite;
        }

        /* Typography */
        .contact-title {
            font-size: 2.5rem;
            font-weight: 800;
            text-align: center;
            background-clip: text;
            color: white;
            margin-bottom: 1rem;
            padding: 20px 0;
        }

        /* Contact Card */
        .contact-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            position: relative;
            z-index: 2;
            max-width: 72rem;
            margin: 2rem auto;
        }

        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        /* Info Side */
        .contact-info {
            background: linear-gradient(135deg,
                    rgba(96, 165, 250, 0.1),
                    rgba(252, 211, 77, 0.1));
            padding: 2rem;
        }

        .contact-info-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #60a5fa;
            margin-bottom: 2rem;
        }

        .contact-info-item {
            display: flex;
            align-items: center;
            padding: 1rem;
            margin-bottom: 1rem;
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.5);
            transition: all 0.3s ease;
        }

        .contact-info-item:hover {
            background: rgba(255, 255, 255, 0.8);
            transform: translateX(10px);
        }

        .contact-icon-wrapper {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #60a5fa, #fcd34d);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            transition: all 0.3s ease;
        }

        .contact-info-item:hover .contact-icon-wrapper {
            transform: rotate(360deg);
        }

        .contact-icon {
            color: white;
            font-size: 1.25rem;
        }

        .contact-image {
            width: 100%;
            height: auto;
            border-radius: 12px;
            margin-top: 2rem;
            transition: transform 0.3s ease;
        }

        .contact-image:hover {
            transform: scale(1.02);
        }

        /* Form Side */
        .contact-form-wrapper {
            background: linear-gradient(135deg,
                    rgba(96, 165, 250, 0.05),
                    rgba(252, 211, 77, 0.05));
            padding: 2rem;
        }

        .form-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #60a5fa;
            margin-bottom: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            color: #4b5563;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .form-input {
            width: 100%;
            padding: 0.75rem 1.5rem;
            border: 2px solid rgba(96, 165, 250, 0.2);
            border-radius: 12px;
            background: white;
            transition: all 0.3s ease;
        }

        .form-input:focus {
            outline: none;
            border-color: #60a5fa;
            box-shadow: 0 0 0 3px rgba(96, 165, 250, 0.1);
        }

        textarea.form-input {
            min-height: 120px;
            resize: vertical;
        }

        .submit-button {
            width: 100%;
            padding: 1rem 2rem;
            background: linear-gradient(to right, #60a5fa, #fcd34d);
            color: white;
            border: none;
            border-radius: 12px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .submit-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(96, 165, 250, 0.3);
        }

        /* Alert Messages */
        .alert {
            padding: 1rem;
            border-radius: 12px;
            margin-bottom: 1rem;
        }

        .alert-success {
            background: rgba(34, 197, 94, 0.1);
            border-left: 4px solid #22c55e;
            color: #16a34a;
        }

        .alert-error {
            background: rgba(239, 68, 68, 0.1);
            border-left: 4px solid #ef4444;
            color: #dc2626;
        }

        /* RTL Support */
        [dir="rtl"] .contact-info-item:hover {
            transform: translateX(-10px);
        }

        [dir="rtl"] .contact-icon-wrapper {
            margin-right: 0;
            margin-left: 1rem;
        }

        [dir="rtl"] .alert {
            border-left: none;
            border-right: 4px solid;
        }

        /* Animations */
        @keyframes floatContactCloud1 {

            0%,
            100% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(40px, -10px);
            }
        }

        @keyframes floatContactCloud2 {

            0%,
            100% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(-40px, 10px);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .contact-section {
                padding: 3rem 0;
            }

            .contact-title {
                font-size: 2rem;
            }

            .contact-card {
                margin: 2rem 1rem;
            }

            .contact-info-item:hover {
                transform: none;
            }

            .contact-cloud {
                display: none;
            }
        }
    </style>

    <div class="contact-section" id="contact">
        <!-- Cloud Elements -->
        <div class="service-cloud service-cloud-1"></div>
        <div class="service-cloud service-cloud-2"></div>

        <div class="container mx-auto px-4">
            <h2 class="contact-title dynapuff">{{ __('contact.contact.title') }}</h2>
            <p class="text-center text-gray-700 text-lg max-w-2xl mx-auto mb-8">
                {{ __('contact.contact.subtitle') }}
            </p>

            <div class="contact-card">
                <div class="md:flex">
                    <!-- Info Side -->
                    <div class="md:w-1/2">
                        <div class="contact-info" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                            <h3 class="contact-info-title dynapuff">{{ __('contact.contact.quick_reach') }}</h3>

                            <!-- Phone -->
                            <div class="contact-info-item">
                                <div class="contact-icon-wrapper">
                                    <i class="ri-smartphone-line contact-icon"></i>
                                </div>
                                <div>
                                    <h5 class="font-semibold text-blue-600">{{ __('contact.contact.phone') }}</h5>
                                    <a href="tel:+96566579000" dir="ltr" class="text-gray-600 hover:text-blue-600">+ 965
                                        66579000</a>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="contact-info-item">
                                <div class="contact-icon-wrapper">
                                    <i class="ri-mail-line contact-icon"></i>
                                </div>
                                <div>
                                    <h5 class="font-semibold text-blue-600">{{ __('contact.contact.email') }}</h5>
                                    <a href="mailto:ahmaadzaid7@gmail.com" dir="ltr"
                                        class="text-gray-600 hover:text-blue-600">ahmaadzaid7@gmail.com</a>
                                </div>
                            </div>

                            <img src="{{asset('build/assets/img/landing/contact.jpg')}}"
                                alt="{{ __('contact.contact.image_alt') }}" class="contact-image" />
                        </div>
                    </div>

                    <!-- Form Side -->
                    <div class="md:w-1/2">
                        <div class="contact-form-wrapper">
                            <form action="{{ route('contact.store') }}" method="POST"
                                dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                                @csrf
                                <h3 class="form-title dynapuff">{{ __('contact.contact.form_title') }}</h3>

                                @if(session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                                @endif

                                @if($errors->any())
                                <div class="alert alert-error">
                                    <ul class="list-disc list-inside">
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif

                                <div class="form-group">
                                    <label class="form-label" for="name">{{ __('contact.contact.name_label') }}</label>
                                    <input type="text" id="name" name="name"
                                        class="form-input @error('name') border-red-500 @enderror"
                                        value="{{ old('name') }}"
                                        placeholder="{{ __('contact.contact.name_placeholder') }}" required>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="email">{{ __('contact.contact.email_label')
                                        }}</label>
                                    <input type="email" id="email" name="email"
                                        class="form-input @error('email') border-red-500 @enderror"
                                        value="{{ old('email') }}"
                                        placeholder="{{ __('contact.contact.email_placeholder') }}" required>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="phone">{{ __('contact.contact.phone_label')
                                        }}</label>
                                    <input type="tel" id="phone" name="phone"
                                        class="form-input @error('phone') border-red-500 @enderror"
                                        value="{{ old('phone') }}"
                                        placeholder="{{ __('contact.contact.phone_placeholder') }}" required>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="message">{{ __('contact.contact.message_label')
                                        }}</label>
                                    <textarea id="message" name="message"
                                        class="form-input @error('message') border-red-500 @enderror"
                                        placeholder="{{ __('contact.contact.message_placeholder') }}"
                                        required>{{ old('message') }}</textarea>
                                </div>

                                <button type="submit" class="submit-button dynapuff">
                                    {{ __('contact.contact.submit_button') }}
                                </button>
                            </form>
                        </div>
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
            <p class="w-2/3 mx-auto my-4 text-base text-white/70">We develop modern concepts to design and
                develop
                the
                interface design, web
                development to deliver them with eye-catching innovative ideas. We believe in effective,
                efficient
                and
                timely solutions for various types of businesses. Our team develops a long-term strategy to
                bring
                out
                spark
                conversation with clients, and visibility to your company.</p>
            <div class="max-w-md space-x-3 rtl:space-x-reverse flex justify-center mx-auto">
                <input type="email" class="ti-form-input" placeholder="Enter Your Email">
                <a href="javascript:void(0);" class="ti-btn m-0 p-2 px-5 ti-btn-danger whitespace-nowrap">Notify
                    Me</a>
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
@extends('layouts.landing-master')

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
    <!-- Hero Section -->
    <style>
        /* Root Variables */
        :root {
            --cloud-color: rgba(255, 255, 255, 0.95);
            --rain-color: rgba(37, 99, 235, 0.4);
            --primary-blue: #2563eb;
            --primary-green: #22c55e;
        }

        /* Base Styles */
        .hero-section {
            min-height: 100vh;
            background: linear-gradient(to bottom, #eff6ff, #ecfdf5);
            position: relative;
            overflow: hidden;
            padding-top: 5rem;
            font-family: system-ui, -apple-system, sans-serif;
        }

        /* Giant Logo Styling */
        .giant-logo {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 120%;
            height: 120%;
            opacity: 0.05;
            pointer-events: none;
        }

        .giant-cloud {
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, var(--primary-blue), var(--primary-green));
            mask: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M20 15.5C21.7 15.5 23 14.2 23 12.5C23 10.8 21.7 9.5 20 9.5H19.7C19.4 6.8 17.1 4.5 14.4 4.5C13.1 4.5 11.8 5 10.9 5.8C10.2 3.6 8.2 2 5.9 2C3.1 2 1 4.1 1 6.9C1 7.2 1 7.4 1.1 7.7C2.4 8.2 3.3 9.4 3.3 10.9C3.3 12.8 1.8 14.3 0 14.3'/%3E%3C/svg%3E") center/contain no-repeat;
        }

        /* Animated Cloud Elements */
        .cloud {
            position: absolute;
            background: linear-gradient(to right, var(--primary-blue), var(--primary-green));
            border-radius: 6rem;
            opacity: 0.1;
            animation: float 6s ease-in-out infinite;
        }

        .cloud-1 {
            top: 15%;
            left: 10%;
            width: 200px;
            height: 60px;
        }

        .cloud-2 {
            top: 25%;
            right: 15%;
            width: 240px;
            height: 70px;
            animation-delay: -2s;
        }

        .cloud::before,
        .cloud::after {
            content: '';
            position: absolute;
            background: inherit;
            border-radius: 50%;
        }

        .cloud-1::before {
            width: 80px;
            height: 80px;
            top: -40px;
            left: 30px;
        }

        .cloud-1::after {
            width: 60px;
            height: 60px;
            top: -25px;
            left: 90px;
        }

        .cloud-2::before {
            width: 90px;
            height: 90px;
            top: -45px;
            left: 40px;
        }

        .cloud-2::after {
            width: 70px;
            height: 70px;
            top: -30px;
            left: 110px;
        }

        /* Rain Styling */
        .rain-container {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
            overflow: hidden;
        }

        .rain-drop {
            position: absolute;
            pointer-events: none;
            width: 1px;
            height: 20px;
            opacity: 0;
        }

        .rain-drop.front {
            height: 25px;
            opacity: 0.6;
            animation: frontRainDrop linear infinite;
            animation-duration: 0.8s;
        }

        .rain-drop.mid {
            height: 20px;
            opacity: 0.4;
            animation: midRainDrop linear infinite;
            animation-duration: 1s;
        }

        .rain-drop.back {
            height: 15px;
            opacity: 0.2;
            animation: backRainDrop linear infinite;
            animation-duration: 1.2s;
        }

        .rain-drop.blue {
            background: linear-gradient(180deg,
                    rgba(37, 99, 235, 0) 0%,
                    rgba(37, 99, 235, 0.3) 30%,
                    rgba(37, 99, 235, 0.5) 100%);
        }

        .rain-drop.green {
            background: linear-gradient(180deg,
                    rgba(34, 197, 94, 0) 0%,
                    rgba(34, 197, 94, 0.3) 30%,
                    rgba(34, 197, 94, 0.5) 100%);
        }

        /* Content Styling */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
            position: relative;
            z-index: 1;
        }

        .content-container {
            min-height: calc(100vh - 5rem);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 2rem;
        }

        .text-content {
            flex: 1;
            max-width: 600px;
        }

        .brand-title {
            font-size: 4rem;
            font-weight: bold;
            line-height: 1.2;
            margin-bottom: 1.5rem;
        }

        .brand-title .blue-text {
            background: linear-gradient(to right, #2563eb, #3b82f6);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .brand-title .green-text {
            background: linear-gradient(to right, #16a34a, #22c55e);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .image-content {
            flex: 1;
            position: relative;
        }

        .image-frame {
            background: white;
            padding: 1rem;
            border-radius: 1rem;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            transform: perspective(1000px) rotateY(-5deg);
            transition: transform 0.3s ease;
        }

        .image-frame:hover {
            transform: perspective(1000px) rotateY(0deg);
        }

        .image-frame img {
            width: 100%;
            height: auto;
            border-radius: 0.5rem;
            display: block;
        }

        /* Buttons */
        .button-container {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }

        .primary-button {
            background: linear-gradient(to right, var(--primary-blue), var(--primary-green));
            color: white;
            padding: 0.875rem 2rem;
            border-radius: 9999px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .primary-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.2);
        }

        .secondary-button {
            background: white;
            color: var(--primary-blue);
            padding: 0.875rem 2rem;
            border-radius: 9999px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .secondary-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.1);
            color: var(--primary-green);
        }

        /* Animations */
        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes frontRainDrop {
            0% {
                transform: translate3d(0, -100%, 0) skewX(-20deg);
                opacity: 0;
            }

            15% {
                opacity: 0.6;
            }

            90% {
                opacity: 0.6;
            }

            100% {
                transform: translate3d(20px, 100vh, 0) skewX(-20deg);
                opacity: 0;
            }
        }

        @keyframes midRainDrop {
            0% {
                transform: translate3d(0, -100%, 0) skewX(-15deg);
                opacity: 0;
            }

            20% {
                opacity: 0.4;
            }

            90% {
                opacity: 0.4;
            }

            100% {
                transform: translate3d(15px, 100vh, 0) skewX(-15deg);
                opacity: 0;
            }
        }

        @keyframes backRainDrop {
            0% {
                transform: translate3d(0, -100%, 0) skewX(-10deg);
                opacity: 0;
            }

            25% {
                opacity: 0.2;
            }

            90% {
                opacity: 0.2;
            }

            100% {
                transform: translate3d(10px, 100vh, 0) skewX(-10deg);
                opacity: 0;
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .content-container {
                flex-direction: column;
                text-align: center;
                padding-top: 2rem;
            }

            .giant-logo {
                opacity: 0.03;
            }

            .button-container {
                justify-content: center;
            }

            .brand-title {
                font-size: 2.5rem;
            }

            .image-frame {
                transform: none;
            }

            .cloud-1,
            .cloud-2 {
                transform: scale(0.8);
            }
        }

        /* Font settings */
        .font-arabic {
            font-family: 'Tajawal', sans-serif;
        }
    </style>
    <div class="hero-section">
        <!-- Giant Background Logo -->
        <div class="giant-logo">
            <div class="giant-cloud"></div>
        </div>

        <!-- Animated Clouds -->
        <div class="cloud cloud-1"></div>
        <div class="cloud cloud-2"></div>

        <!-- Rain Container -->
        <div class="rain-container"></div>

        <div class="container">
            <div class="content-container">
                <div class="text-content">
                    <!-- English Content -->
                    <div dir="ltr" class="en-content">
                        <h1 class="brand-title dynapuff">
                            <span class="blue-text">Sahab</span>
                            <span class="green-text">Code</span>
                        </h1>
                        <p class="text-lg text-gray-600 mb-8">
                            Transform your digital presence with our cloud-powered web solutions.
                            Where innovation meets excellence in web design and development.
                        </p>
                    </div>

                    <!-- Arabic Content -->
                    <div dir="rtl" class="ar-content" style="display: none;">
                        <h1 class="brand-title dynapuff">
                            <span class="blue-text">سحاب</span>
                            <span class="green-text">كود</span>
                        </h1>
                        <p class="text-lg text-gray-600 mb-8">
                            حول حضورك الرقمي مع حلولنا السحابية المتطورة.
                            حيث يلتقي الابتكار مع التميز في تصميم وتطوير المواقع
                        </p>
                    </div>

                    <div class="button-container">
                        <a href="#projects" class="secondary-button dynapuff">
                            See Our Work
                        </a>
                        <a href="#contact" class="primary-button dynapuff">
                            Start Creating
                        </a>
                    </div>
                </div>

                <div class="image-content">
                    <div class="image-frame">
                        <img src="{{asset('build/assets/img/landing/hero5.jpg')}}" alt="Web Development">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Rain Drop Class
class RainDrop {
    constructor(container, cloudPosition) {
        this.container = container;
        this.cloudPosition = cloudPosition;
        this.element = document.createElement('div');
        this.init();
    }

    init() {
        // Randomize layer and properties
        const layer = Math.random();
        const isBlue = Math.random() > 0.5;
        
        // Set class based on layer and color
        if (layer < 0.3) {
            this.element.className = `rain-drop front ${isBlue ? 'blue' : 'green'}`;
        } else if (layer < 0.6) {
            this.element.className = `rain-drop mid ${isBlue ? 'blue' : 'green'}`;
        } else {
            this.element.className = `rain-drop back ${isBlue ? 'blue' : 'green'}`;
        }

        // Position the drop relative to the cloud
        const cloudWidth = this.cloudPosition.width || 200;
        const randomOffset = Math.random() * cloudWidth;
        this.element.style.left = `${this.cloudPosition.x + randomOffset}px`;
        
        // Add random delay and variation
        this.element.style.animationDelay = `${Math.random() * 2}s`;
        const scale = 0.8 + Math.random() * 0.4; // Random size variation
        this.element.style.transform = `scale(${scale})`;

        // Append to container
        this.container.appendChild(this.element);

        // Cleanup after animation
        this.element.addEventListener('animationend', () => {
            this.element.remove();
        });
    }
}

// Rain Manager Class
class RainManager {
    constructor() {
        this.container = document.querySelector('.rain-container');
        this.cloudPositions = [
            { x: window.innerWidth * 0.15, width: 200 }, // cloud-1
            { x: window.innerWidth * 0.65, width: 240 }  // cloud-2
        ];
        this.isRaining = false;
        this.dropsPerCloud = 15; // Number of drops per cloud
        this.dropInterval = 100; // Time between drops
    }

    updateCloudPositions() {
        this.cloudPositions = [
            { x: window.innerWidth * 0.15, width: 200 },
            { x: window.innerWidth * 0.65, width: 240 }
        ];
    }

    createDrop() {
        if (!this.isRaining) return;
        
        // Create drops for each cloud
        this.cloudPositions.forEach(cloudPos => {
            if (Math.random() > 0.3) { // 70% chance to create a drop (makes rain more natural)
                new RainDrop(this.container, cloudPos);
            }
        });

        // Schedule next drop
        const nextDrop = this.dropInterval * (0.5 + Math.random());
        setTimeout(() => this.createDrop(), nextDrop);
    }

    startRain() {
        if (this.isRaining) return;
        this.isRaining = true;
        this.updateCloudPositions();

        // Create initial batch of drops
        for (let i = 0; i < this.dropsPerCloud; i++) {
            setTimeout(() => {
                this.cloudPositions.forEach(cloudPos => {
                    new RainDrop(this.container, cloudPos);
                });
            }, Math.random() * 2000); // Stagger initial drops
        }

        // Start continuous rain
        this.createDrop();
    }

    stopRain() {
        this.isRaining = false;
    }

    // Adjust rain intensity
    setIntensity(level) { // level: 0 to 1
        this.dropsPerCloud = Math.floor(10 + (level * 20)); // 10-30 drops
        this.dropInterval = 200 - (level * 150); // 200-50ms between drops
    }
}

// Initialize rain when document is ready
document.addEventListener('DOMContentLoaded', () => {
    const rainManager = new RainManager();
    
    // Start with medium intensity
    rainManager.setIntensity(0.5);
    rainManager.startRain();

    // Update rain positions on window resize
    window.addEventListener('resize', () => {
        rainManager.updateCloudPositions();
    });

    // Stop rain when section is not visible
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    rainManager.startRain();
                } else {
                    rainManager.stopRain();
                }
            });
        },
        { threshold: 0.1 }
    );

    observer.observe(document.querySelector('.hero-section'));
});

// Language toggle function
function toggleLanguage() {
    const enContent = document.querySelector('.en-content');
    const arContent = document.querySelector('.ar-content');
    const isEnglish = enContent.style.display !== 'none';
    
    enContent.style.display = isEnglish ? 'none' : 'block';
    arContent.style.display = isEnglish ? 'block' : 'none';
}

// Optional: Add intensity controls
function updateRainIntensity(intensity) {
    const rainManager = window.rainManager;
    if (rainManager) {
        rainManager.setIntensity(intensity);
    }
}
    </script>
    <!-- End::Services Content -->
    <!-- Start::Services Content -->

    <style>
        /* Services Section Styles */
        .services-section {
            background: linear-gradient(to bottom, #eff6ff, #ecfdf5);
            min-height: 100vh;
            position: relative;
            overflow: hidden;
            padding: 6rem 0;
        }

        /* Background Elements */
        .services-giant-logo {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 120%;
            height: 120%;
            opacity: 0.03;
            pointer-events: none;
        }

        .services-cloud {
            position: absolute;
            background: linear-gradient(to right, #2563eb, #22c55e);
            border-radius: 6rem;
            opacity: 0.1;
            animation: float 6s ease-in-out infinite;
        }

        .services-cloud-1 {
            top: 10%;
            left: 5%;
            width: 180px;
            height: 50px;
        }

        .services-cloud-2 {
            top: 70%;
            right: 5%;
            width: 220px;
            height: 60px;
            animation-delay: -3s;
        }

        .services-cloud::before,
        .services-cloud::after {
            content: '';
            position: absolute;
            background: inherit;
            border-radius: 50%;
        }

        .services-cloud-1::before {
            width: 70px;
            height: 70px;
            top: -35px;
            left: 25px;
        }

        .services-cloud-1::after {
            width: 50px;
            height: 50px;
            top: -20px;
            left: 75px;
        }

        .services-cloud-2::before {
            width: 80px;
            height: 80px;
            top: -40px;
            left: 35px;
        }

        .services-cloud-2::after {
            width: 60px;
            height: 60px;
            top: -25px;
            left: 95px;
        }

        /* Service Card Styles */
        .service-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.1);
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(to right, #2563eb, #22c55e);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .service-card:hover::before {
            opacity: 1;
        }

        .service-icon-wrapper {
            width: 80px;
            height: 80px;
            margin: 0 auto 1.5rem;
            position: relative;
            z-index: 1;
        }

        .service-icon-bg {
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, #2563eb, #22c55e);
            border-radius: 1rem;
            transform: rotate(45deg);
            transition: transform 0.3s ease;
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

        .service-title {
            background: linear-gradient(to right, #2563eb, #22c55e);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .feature-list li {
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
            margin-bottom: 1rem;
        }

        .check-icon {
            flex-shrink: 0;
            width: 20px;
            height: 20px;
            color: #22c55e;
        }

        /* CTA Button */
        .cta-button {
            display: inline-block;
            background: linear-gradient(to right, #2563eb, #22c55e);
            color: white;
            padding: 1rem 2.5rem;
            border-radius: 9999px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-align: center;
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.2);
        }

        /* Animations */
        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .services-section {
                padding: 4rem 0;
            }

            .service-card {
                margin-bottom: 2rem;
            }

            .services-cloud {
                transform: scale(0.7);
            }
        }
    </style>


    <style>
        /* Services Section Styles */
        .services-section {
            background: linear-gradient(to bottom, #eff6ff, #ecfdf5);
            min-height: 100vh;
            position: relative;
            overflow: hidden;
            padding: 6rem 0;
        }

        /* Background Elements */
        .services-giant-logo {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 120%;
            height: 120%;
            opacity: 0.03;
            pointer-events: none;
        }

        .services-cloud {
            position: absolute;
            background: linear-gradient(to right, #2563eb, #22c55e);
            border-radius: 6rem;
            opacity: 0.1;
            animation: float 6s ease-in-out infinite;
        }

        .services-cloud-1 {
            top: 10%;
            left: 5%;
            width: 180px;
            height: 50px;
        }

        .services-cloud-2 {
            top: 70%;
            right: 5%;
            width: 220px;
            height: 60px;
            animation-delay: -3s;
        }

        .services-cloud::before,
        .services-cloud::after {
            content: '';
            position: absolute;
            background: inherit;
            border-radius: 50%;
        }

        .services-cloud-1::before {
            width: 70px;
            height: 70px;
            top: -35px;
            left: 25px;
        }

        .services-cloud-1::after {
            width: 50px;
            height: 50px;
            top: -20px;
            left: 75px;
        }

        .services-cloud-2::before {
            width: 80px;
            height: 80px;
            top: -40px;
            left: 35px;
        }

        .services-cloud-2::after {
            width: 60px;
            height: 60px;
            top: -25px;
            left: 95px;
        }

        /* Service Card Styles */
        .service-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.1);
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(to right, #2563eb, #22c55e);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .service-card:hover::before {
            opacity: 1;
        }

        .service-icon-wrapper {
            width: 80px;
            height: 80px;
            margin: 0 auto 1.5rem;
            position: relative;
            z-index: 1;
        }

        .service-icon-bg {
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, #2563eb, #22c55e);
            border-radius: 1rem;
            transform: rotate(45deg);
            transition: transform 0.3s ease;
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

        .service-title {
            background: linear-gradient(to right, #2563eb, #22c55e);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .feature-list li {
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
            margin-bottom: 1rem;
        }

        .check-icon {
            flex-shrink: 0;
            width: 20px;
            height: 20px;
            color: #22c55e;
        }

        /* CTA Button */
        .cta-button {
            display: inline-block;
            background: linear-gradient(to right, #2563eb, #22c55e);
            color: white;
            padding: 1rem 2.5rem;
            border-radius: 9999px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-align: center;
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.2);
        }

        /* Animations */
        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .services-section {
                padding: 4rem 0;
            }

            .service-card {
                margin-bottom: 2rem;
            }

            .services-cloud {
                transform: scale(0.7);
            }
        }
    </style>




    <div class="services-section" id="services">
        <!-- Background Elements -->
        <div class="services-giant-logo">
            <div class="giant-cloud"></div>
        </div>
        <div class="services-cloud services-cloud-1"></div>
        <div class="services-cloud services-cloud-2"></div>

        <div class="container mx-auto px-4">
            <!-- Header -->
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2
                    class="dynapuff text-4xl lg:text-5xl font-bold mb-6 {{ LaravelLocalization::getCurrentLocale() === 'ar' ? 'ar-font' : 'en-font' }}">
                    {{ __('services.title') }}
                </h2>
                <p class="text-lg text-gray-600">
                    {{ __('services.description') }}
                </p>
            </div>

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
                    <h3 class="service-title dynapuff text-2xl font-semibold">
                        {{ __('services.web_design.title') }}
                    </h3>
                    <ul class="feature-list text-gray-600">
                        <li>
                            <svg class="check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('services.web_design.feature_1') }}
                        </li>
                        <li>
                            <svg class="check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('services.web_design.feature_2') }}
                        </li>
                        <li>
                            <svg class="check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('services.web_design.feature_3') }}
                        </li>
                        <li>
                            <svg class="check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                    <h3 class="service-title dynapuff text-2xl font-semibold">
                        {{ __('services.web_development.title') }}
                    </h3>
                    <ul class="feature-list text-gray-600">
                        <li>
                            <svg class="check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('services.web_development.feature_1') }}
                        </li>
                        <li>
                            <svg class="check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('services.web_development.feature_2') }}
                        </li>
                        <li>
                            <svg class="check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('services.web_development.feature_3') }}
                        </li>
                        <li>
                            <svg class="check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                    <h3 class="service-title dynapuff text-2xl font-semibold">
                        {{ __('services.redesign.title') }}
                    </h3>
                    <ul class="feature-list text-gray-600">
                        <li>
                            <svg class="check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('services.redesign.feature_1') }}
                        </li>
                        <li>
                            <svg class="check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('services.redesign.feature_2') }}
                        </li>
                        <li>
                            <svg class="check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('services.redesign.feature_3') }}
                        </li>
                        <li>
                            <svg class="check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('services.redesign.feature_4') }}
                        </li>
                    </ul>
                </div>
            </div>

            <!-- CTA Button -->
            <div class="text-center mt-16">
                <a href="#contact" class="cta-button dynapuff">
                    {{ __('services.cta_button') }}
                </a>
            </div>
        </div>
    </div>

    <!-- End::Services Content -->
    <!-- start::How we work Content -->
    <style>
        /* Process Section Base */
        .process-section {
            background: linear-gradient(to bottom, #eff6ff, #ecfdf5);
            position: relative;
            overflow: hidden;
            padding: 6rem 0;
        }

        /* Background Elements */
        .process-giant-logo {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 120%;
            height: 120%;
            opacity: 0.03;
            pointer-events: none;
        }

        .process-cloud {
            position: absolute;
            background: linear-gradient(to right, #2563eb, #22c55e);
            border-radius: 6rem;
            opacity: 0.1;
            animation: float 6s ease-in-out infinite;
        }

        .process-cloud-1 {
            top: 10%;
            left: 5%;
            width: 160px;
            height: 45px;
        }

        .process-cloud-2 {
            bottom: 10%;
            right: 5%;
            width: 200px;
            height: 55px;
            animation-delay: -3s;
        }

        .process-cloud::before,
        .process-cloud::after {
            content: '';
            position: absolute;
            background: inherit;
            border-radius: 50%;
        }

        .process-cloud-1::before {
            width: 60px;
            height: 60px;
            top: -30px;
            left: 25px;
        }

        .process-cloud-1::after {
            width: 40px;
            height: 40px;
            top: -15px;
            left: 70px;
        }

        .process-cloud-2::before {
            width: 70px;
            height: 70px;
            top: -35px;
            left: 30px;
        }

        .process-cloud-2::after {
            width: 50px;
            height: 50px;
            top: -20px;
            left: 85px;
        }

        /* Timeline Connection */
        .timeline-connection {
            position: absolute;
            top: 24px;
            left: 10%;
            right: 10%;
            height: 2px;
            background: linear-gradient(to right, #2563eb, #22c55e);
            transform-origin: left;
            animation: expandLine 1.5s ease-out forwards;
        }

        @keyframes expandLine {
            from {
                transform: scaleX(0);
            }

            to {
                transform: scaleX(1);
            }
        }

        /* Process Cards */
        .process-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            position: relative;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.6s ease-out forwards;
        }

        .process-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.1);
        }

        /* Number Circles */
        .number-circle {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            position: absolute;
            top: -32px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: bold;
            color: white;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .process-card:hover .number-circle {
            transform: translateX(-50%) scale(1.1);
        }

        /* Step Colors */
        .step-1 .number-circle {
            background: linear-gradient(135deg, #2563eb, #3b82f6);
        }

        .step-2 .number-circle {
            background: linear-gradient(135deg, #7c3aed, #8b5cf6);
        }

        .step-3 .number-circle {
            background: linear-gradient(135deg, #059669, #10b981);
        }

        .step-4 .number-circle {
            background: linear-gradient(135deg, #db2777, #ec4899);
        }

        /* List Styling */
        .process-list {
            list-style: none;
            padding: 0;
            margin: 0;
            text-align: start;
        }

        .process-list li {
            position: relative;
            padding-left: 1.5rem;
            margin-bottom: 0.75rem;
            opacity: 0.8;
            transition: opacity 0.3s ease;
        }

        .process-list li::before {
            content: '•';
            position: absolute;
            left: 0;
            color: #2563eb;
        }

        .process-list li:hover {
            opacity: 1;
        }

        /* CTA Button */
        .process-cta {
            display: inline-block;
            background: linear-gradient(to right, #2563eb, #22c55e);
            color: white;
            padding: 1rem 2.5rem;
            border-radius: 9999px;
            font-weight: 600;
            transition: all 0.3s ease;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.6s ease-out forwards 1s;
        }

        .process-cta:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.2);
        }

        /* Animations */
        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .timeline-connection {
                display: none;
            }

            .process-card {
                margin-bottom: 3rem;
            }

            .process-cloud {
                transform: scale(0.7);
            }
        }
    </style>
    <div class="process-section" id="process">
        <!-- Background Elements -->
        <div class="process-giant-logo">
            <div class="giant-cloud"></div>
        </div>
        <div class="process-cloud process-cloud-1"></div>
        <div class="process-cloud process-cloud-2"></div>

        <div class="container max-w-6xl mx-auto px-4">
            <!-- Section Title -->
            <h3 class="dynapuff text-4xl font-bold text-center mb-16"
                style="background: linear-gradient(to right, #2563eb, #22c55e); -webkit-background-clip: text; background-clip: text; color: transparent;">
                {{ __('process.title') }}
            </h3>

            <!-- Process Timeline -->
            <div class="grid lg:grid-cols-4 gap-8 relative">
                <!-- Timeline Connection -->
                <div class="hidden lg:block timeline-connection"></div>

                <!-- Step 1 -->
                <div class="process-card step-1" style="animation-delay: 0.2s">
                    <div class="number-circle">1</div>
                    <div class="mt-8">
                        <h4 class="dynapuff text-xl font-semibold mb-4" style="color: #2563eb">
                            {{ __('process.step1.title') }}
                        </h4>
                        <ul class="process-list text-gray-600">
                            <li>{{ __('process.step1.point1') }}</li>
                            <li>{{ __('process.step1.point2') }}</li>
                            <li>{{ __('process.step1.point3') }}</li>
                            <li>{{ __('process.step1.point4') }}</li>
                        </ul>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="process-card step-2" style="animation-delay: 0.4s">
                    <div class="number-circle">2</div>
                    <div class="mt-8">
                        <h4 class="dynapuff text-xl font-semibold mb-4" style="color: #7c3aed">
                            {{ __('process.step2.title') }}
                        </h4>
                        <ul class="process-list text-gray-600">
                            <li>{{ __('process.step2.point1') }}</li>
                            <li>{{ __('process.step2.point2') }}</li>
                            <li>{{ __('process.step2.point3') }}</li>
                            <li>{{ __('process.step2.point4') }}</li>
                        </ul>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="process-card step-3" style="animation-delay: 0.6s">
                    <div class="number-circle">3</div>
                    <div class="mt-8">
                        <h4 class="dynapuff text-xl font-semibold mb-4" style="color: #059669">
                            {{ __('process.step3.title') }}
                        </h4>
                        <ul class="process-list text-gray-600">
                            <li>{{ __('process.step3.point1') }}</li>
                            <li>{{ __('process.step3.point2') }}</li>
                            <li>{{ __('process.step3.point3') }}</li>
                            <li>{{ __('process.step3.point4') }}</li>
                        </ul>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="process-card step-4" style="animation-delay: 0.8s">
                    <div class="number-circle">4</div>
                    <div class="mt-8">
                        <h4 class="dynapuff text-xl font-semibold mb-4" style="color: #db2777">
                            {{ __('process.step4.title') }}
                        </h4>
                        <ul class="process-list text-gray-600">
                            <li>{{ __('process.step4.point1') }}</li>
                            <li>{{ __('process.step4.point2') }}</li>
                            <li>{{ __('process.step4.point3') }}</li>
                            <li>{{ __('process.step4.point4') }}</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- CTA Button -->
            <div class="text-center mt-16">
                <a href="#contact" class="process-cta dynapuff">
                    {{ __('process.cta_button') }}
                </a>
            </div>
        </div>
    </div>
    <!-- end::How we work Content -->

    <!-- Start::About Content -->
    <style>
        /* About Section Base */
        .about-section {
            background: linear-gradient(to bottom, #eff6ff, #ecfdf5);
            position: relative;
            overflow: hidden;
            padding: 6rem 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        /* Background Elements */
        .about-giant-logo {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 120%;
            height: 120%;
            opacity: 0.03;
            pointer-events: none;
        }

        .about-cloud {
            position: absolute;
            background: linear-gradient(to right, #2563eb, #22c55e);
            border-radius: 6rem;
            opacity: 0.1;
            animation: float 6s ease-in-out infinite;
        }

        .about-cloud-1 {
            top: 15%;
            left: 10%;
            width: 180px;
            height: 50px;
        }

        .about-cloud-2 {
            bottom: 15%;
            right: 10%;
            width: 220px;
            height: 60px;
            animation-delay: -3s;
        }

        .about-cloud::before,
        .about-cloud::after {
            content: '';
            position: absolute;
            background: inherit;
            border-radius: 50%;
        }

        .about-cloud-1::before {
            width: 70px;
            height: 70px;
            top: -35px;
            left: 25px;
        }

        .about-cloud-1::after {
            width: 50px;
            height: 50px;
            top: -20px;
            left: 75px;
        }

        .about-cloud-2::before {
            width: 80px;
            height: 80px;
            top: -40px;
            left: 35px;
        }

        .about-cloud-2::after {
            width: 60px;
            height: 60px;
            top: -25px;
            left: 95px;
        }

        /* Content Styling */
        .about-content {
            position: relative;
            z-index: 1;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.6s ease-out forwards;
        }

        .about-title {
            background: linear-gradient(to right, #2563eb, #22c55e);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: 1rem;
        }

        .about-subtitle {
            background: linear-gradient(to right, #22c55e, #2563eb);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        /* Feature List */
        .feature-list {
            list-style: none;
            padding: 0;
        }

        .feature-item {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            transition: transform 0.3s ease;
        }

        .feature-item:hover {
            transform: translateX(10px);
        }

        .feature-icon {
            width: 24px;
            height: 24px;
            background: linear-gradient(135deg, #2563eb, #22c55e);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            flex-shrink: 0;
        }

        [dir="rtl"] .feature-item:hover {
            transform: translateX(-10px);
        }

        [dir="rtl"] .feature-icon {
            margin-right: 0;
            margin-left: 1rem;
        }

        /* Image Styling */
        .image-wrapper {
            position: relative;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.6s ease-out forwards 0.3s;
        }

        .image-background {
            position: absolute;
            inset: 0;
            background: linear-gradient(to right, #2563eb, #22c55e);
            transform: rotate(-6deg);
            border-radius: 1rem;
            opacity: 0.1;
            filter: blur(10px);
        }

        .image-container {
            position: relative;
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .image-container:hover {
            transform: translateY(-10px);
        }

        .about-image {
            width: 100%;
            height: 28rem;
            object-fit: cover;
            border-radius: 1rem;
        }

        /* CTA Button */
        .about-cta {
            display: inline-block;
            background: linear-gradient(to right, #2563eb, #22c55e);
            color: white;
            padding: 1rem 2.5rem;
            border-radius: 9999px;
            font-weight: 600;
            transition: all 0.3s ease;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.6s ease-out forwards 0.6s;
        }

        .about-cta:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.2);
        }

        /* Animations */
        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .about-cloud {
                transform: scale(0.7);
            }

            .about-content {
                text-align: center;
            }

            .feature-list {
                max-width: 400px;
                margin: 0 auto;
            }

            .image-wrapper {
                max-width: 500px;
                margin: 0 auto;
            }
        }
    </style>
    <div class="about-section" id="about">
        <!-- Background Elements -->
        <div class="about-giant-logo">
            <div class="giant-cloud"></div>
        </div>
        <div class="about-cloud about-cloud-1"></div>
        <div class="about-cloud about-cloud-2"></div>

        <div class="container mx-auto px-4">
            <div class="max-w-7xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                    <!-- Content Column -->
                    <div class="order-2 lg:order-1" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                        <div class="about-content">
                            <h2 class="dynapuff text-3xl sm:text-4xl font-bold mb-4">
                                <span class="about-title block">{{ __('about.title') }}</span>
                                <span class="about-subtitle block">{{ __('about.subtitle') }}</span>
                            </h2>

                            <h3 class="dynapuff text-2xl font-semibold text-purple-600 mb-6">
                                {{ __('about.tagline') }}
                            </h3>

                            <p class="text-lg text-gray-700 leading-relaxed mb-8">
                                {{ __('about.description') }}
                            </p>

                            <ul class="feature-list space-y-4">
                                <li class="feature-item">
                                    <div class="feature-icon">
                                        <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <span class="text-gray-700">{{ __('about.feature1') }}</span>
                                </li>
                                <li class="feature-item">
                                    <div class="feature-icon">
                                        <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <span class="text-gray-700">{{ __('about.feature2') }}</span>
                                </li>
                                <li class="feature-item">
                                    <div class="feature-icon">
                                        <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24"
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
                        <div class="image-wrapper">
                            <div class="image-background"></div>
                            <div class="image-container">
                                <img src="{{asset('build/assets/img/landing/design.jpg')}}" class="about-image"
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
    <style>
        /* Mission Section Base */
        .mission-section {
            background: linear-gradient(to bottom, #eff6ff, #ecfdf5);
            position: relative;
            overflow: hidden;
            padding: 6rem 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        /* Background Elements */
        .mission-giant-logo {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 120%;
            height: 120%;
            opacity: 0.03;
            pointer-events: none;
        }

        .mission-cloud {
            position: absolute;
            background: linear-gradient(to right, #a855f7, #22c55e);
            border-radius: 6rem;
            opacity: 0.1;
            animation: float 6s ease-in-out infinite;
        }

        .mission-cloud-1 {
            top: 15%;
            left: 10%;
            width: 180px;
            height: 50px;
        }

        .mission-cloud-2 {
            bottom: 15%;
            right: 10%;
            width: 220px;
            height: 60px;
            animation-delay: -3s;
        }

        .mission-cloud::before,
        .mission-cloud::after {
            content: '';
            position: absolute;
            background: inherit;
            border-radius: 50%;
        }

        /* Content Styling */
        .mission-content {
            position: relative;
            z-index: 1;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.6s ease-out forwards;
        }

        .mission-title {
            background: linear-gradient(to right, #a855f7, #22c55e);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: 1rem;
        }

        .mission-subtitle {
            background: linear-gradient(to right, #22c55e, #a855f7);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        /* Feature List */
        .mission-feature-list {
            list-style: none;
            padding: 0;
            margin: 2rem 0;
        }

        .mission-feature-item {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
            padding: 1rem;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 1rem;
            transition: all 0.3s ease;
        }

        .mission-feature-item:hover {
            transform: translateX(10px);
            background: rgba(255, 255, 255, 0.8);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .mission-feature-icon {
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            flex-shrink: 0;
            font-size: 24px;
        }

        /* Image Styling */
        .mission-image-wrapper {
            position: relative;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.6s ease-out forwards 0.3s;
        }

        .mission-image-background {
            position: absolute;
            inset: -10px;
            background: linear-gradient(to right, #a855f7, #22c55e);
            transform: rotate(-6deg);
            border-radius: 1rem;
            opacity: 0.1;
            filter: blur(10px);
        }

        .mission-image-container {
            position: relative;
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .mission-image-container:hover {
            transform: translateY(-10px);
        }

        .mission-image {
            width: 100%;
            height: 28rem;
            object-fit: cover;
            border-radius: 1rem;
            border: 4px solid white;
        }

        /* CTA Button */
        .mission-cta {
            display: inline-block;
            background: linear-gradient(to right, #a855f7, #22c55e);
            color: white;
            padding: 1rem 2.5rem;
            border-radius: 9999px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .mission-cta:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(168, 85, 247, 0.2);
        }

        /* RTL Support */
        [dir="rtl"] .mission-feature-item:hover {
            transform: translateX(-10px);
        }

        [dir="rtl"] .mission-feature-icon {
            margin-right: 0;
            margin-left: 1rem;
        }

        /* Animations */
        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .mission-cloud {
                transform: scale(0.7);
            }

            .mission-content {
                text-align: center;
                padding: 0 1rem;
            }

            .mission-feature-list {
                max-width: 400px;
                margin: 2rem auto;
            }

            .mission-image-wrapper {
                max-width: 500px;
                margin: 2rem auto 0;
            }
        }
    </style>
    <div class="mission-section" id="our-mission">
        <!-- Background Elements -->
        <div class="mission-giant-logo"></div>
        <div class="mission-cloud mission-cloud-1"></div>
        <div class="mission-cloud mission-cloud-2"></div>

        <div class="container mx-auto px-4">
            <div class="max-w-7xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                    <!-- Image Column -->
                    <div class="order-2 lg:order-1">
                        <div class="mission-image-wrapper">
                            <div class="mission-image-background"></div>
                            <div class="mission-image-container">
                                <img src="{{asset('build/assets/img/landing/dashboard.jpg')}}" class="mission-image"
                                    alt="{{ __('mission.image_alt') }}">
                            </div>
                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="order-1 lg:order-2" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                        <div class="mission-content">
                            <h2 class="dynapuff text-3xl sm:text-4xl font-bold mb-4">
                                <span class="mission-title block">{{ __('mission.title') }}</span>
                                <span class="mission-subtitle block">{{ __('mission.subtitle') }}</span>
                            </h2>

                            <p class="text-lg text-gray-700 leading-relaxed mb-8">
                                {{ __('mission.description') }}
                            </p>

                            <ul class="mission-feature-list">
                                <li class="mission-feature-item">
                                    <div class="mission-feature-icon text-blue-500">
                                        <i class="ri-parent-line"></i>
                                    </div>
                                    <span class="text-gray-700">{{ __('mission.feature1') }}</span>
                                </li>
                                <li class="mission-feature-item">
                                    <div class="mission-feature-icon text-yellow-500">
                                        <i class="ri-calendar-todo-line"></i>
                                    </div>
                                    <span class="text-gray-700">{{ __('mission.feature3') }}</span>
                                </li>
                                <li class="mission-feature-item">
                                    <div class="mission-feature-icon text-green-500">
                                        <i class="ri-money-dollar-box-line"></i>
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
            background: linear-gradient(to bottom, #eff6ff, #ecfdf5);
            position: relative;
            overflow: hidden;
            padding: 6rem 0;
            min-height: 80vh;
            display: flex;
            align-items: center;
        }

        /* Background Elements */
        .testimonials-giant-logo {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 120%;
            height: 120%;
            opacity: 0.03;
            pointer-events: none;
        }

        .testimonials-cloud {
            position: absolute;
            background: linear-gradient(to right, #eab308, #a855f7);
            border-radius: 6rem;
            opacity: 0.1;
            animation: float 6s ease-in-out infinite;
        }

        .testimonials-cloud-1 {
            top: 15%;
            left: 10%;
            width: 180px;
            height: 50px;
        }

        .testimonials-cloud-2 {
            bottom: 15%;
            right: 10%;
            width: 220px;
            height: 60px;
            animation-delay: -3s;
        }

        .testimonials-title {
            background: linear-gradient(to right, #eab308, #a855f7);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-align: center;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.6s ease-out forwards;
        }

        /* Testimonial Card */
        .testimonial-card-wrapper {
            position: relative;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.6s ease-out forwards 0.3s;
        }

        .testimonial-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 2rem;
            padding: 2rem;
            position: relative;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .testimonial-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        /* Message Icon */
        .testimonial-icon-wrapper {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translate(-50%, -50%);
            background: linear-gradient(135deg, #eab308, #a855f7);
            border-radius: 50%;
            padding: 1rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            animation: pulse 2s infinite;
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
            gap: 0.25rem;
            margin: 2rem 0 1.5rem;
        }

        .star {
            color: #eab308;
            font-size: 1.5rem;
            animation: starPulse 1.5s infinite;
        }

        .star:nth-child(1) {
            animation-delay: 0s;
        }

        .star:nth-child(2) {
            animation-delay: 0.3s;
        }

        .star:nth-child(3) {
            animation-delay: 0.6s;
        }

        .star:nth-child(4) {
            animation-delay: 0.9s;
        }

        .star:nth-child(5) {
            animation-delay: 1.2s;
        }

        /* Quote */
        .testimonial-quote {
            position: relative;
            color: #4b5563;
            line-height: 1.7;
            margin: 1.5rem 0;
            padding: 0 1.5rem;
        }

        .testimonial-quote::before,
        .testimonial-quote::after {
            content: '"';
            position: absolute;
            font-size: 4rem;
            opacity: 0.1;
            font-family: serif;
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
        }

        .profile-image {
            width: 4rem;
            height: 4rem;
            border-radius: 50%;
            border: 4px solid;
            border-image: linear-gradient(to right, #eab308, #a855f7) 1;
        }

        .profile-info {
            text-align: left;
        }

        .profile-name {
            background: linear-gradient(to right, #eab308, #a855f7);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-weight: bold;
            font-size: 1.25rem;
        }

        /* Animations */
        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulse {
            0% {
                transform: translate(-50%, -50%) scale(1);
            }

            50% {
                transform: translate(-50%, -50%) scale(1.05);
            }

            100% {
                transform: translate(-50%, -50%) scale(1);
            }
        }

        @keyframes starPulse {
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

        /* RTL Support */
        [dir="rtl"] .profile-info {
            text-align: right;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .testimonial-card {
                margin: 0 1rem;
                padding: 1.5rem;
            }

            .testimonial-quote {
                padding: 0 1rem;
                font-size: 0.95rem;
            }
        }
    </style>
    <div class="testimonials-section" id="testimonials">
        <!-- Background Elements -->
        <div class="testimonials-giant-logo"></div>
        <div class="testimonials-cloud testimonials-cloud-1"></div>
        <div class="testimonials-cloud testimonials-cloud-2"></div>

        <div class="container mx-auto px-4">
            <h2 class="testimonials-title dynapuff text-4xl font-bold mb-12">
                {{ __('testimonials.title') }}
            </h2>

            <div class="max-w-3xl mx-auto">
                <div class="testimonial-card-wrapper">
                    <div class="testimonial-card">
                        <!-- Message Icon -->
                        <div class="testimonial-icon-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" class="testimonial-icon" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
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
    </div>

    <!-- End::Testinominals Content -->

    <!-- Start::Pricing Content -->
    <style>
        /* Pricing Section Base */
        .pricing-section {
            background: linear-gradient(to bottom, #eff6ff, #ecfdf5);
            position: relative;
            overflow: hidden;
            padding: 6rem 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        /* Background Elements */
        .pricing-giant-logo {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 120%;
            height: 120%;
            opacity: 0.03;
            pointer-events: none;
        }

        .pricing-cloud {
            position: absolute;
            background: linear-gradient(to right, #a855f7, #22c55e);
            border-radius: 6rem;
            opacity: 0.1;
            animation: float 6s ease-in-out infinite;
        }

        .pricing-cloud-1 {
            top: 15%;
            left: 10%;
            width: 180px;
            height: 50px;
        }

        .pricing-cloud-2 {
            bottom: 15%;
            right: 10%;
            width: 220px;
            height: 60px;
            animation-delay: -3s;
        }

        /* Header Styling */
        .pricing-header {
            text-align: center;
            margin-bottom: 3rem;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.6s ease-out forwards;
        }

        .pricing-title {
            background: linear-gradient(to right, #a855f7, #22c55e);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: 1rem;
        }

        .pricing-description {
            color: #4b5563;
            max-width: 36rem;
            margin: 0 auto;
        }

        /* Notice Box */
        .pricing-notice {
            background: rgba(254, 243, 199, 0.5);
            backdrop-filter: blur(10px);
            border: 1px solid #fcd34d;
            border-radius: 1rem;
            padding: 1rem;
            margin: 2rem auto;
            max-width: 36rem;
            transition: transform 0.3s ease;
        }

        .pricing-notice:hover {
            transform: translateY(-5px);
        }

        /* Pricing Cards Container */
        .pricing-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            max-width: 64rem;
            margin: 0 auto;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.6s ease-out forwards 0.3s;
        }

        /* Basic Plan Card */
        .pricing-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 2rem;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
        }

        .pricing-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        /* Card Header */
        .card-header {
            padding: 2rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .card-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(168, 85, 247, 0.1), rgba(34, 197, 94, 0.1));
            z-index: 0;
        }

        .pricing-icon {
            width: 4rem;
            height: 4rem;
            background: linear-gradient(135deg, #a855f7, #22c55e);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            position: relative;
            z-index: 1;
        }

        .pricing-icon i {
            font-size: 1.5rem;
            color: white;
        }

        /* Feature List */
        .feature-list {
            background: rgba(250, 245, 255, 0.5);
            padding: 2rem;
        }

        .feature-item {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            transition: transform 0.3s ease;
        }

        .feature-item:hover {
            transform: translateX(10px);
        }

        .feature-icon {
            color: #22c55e;
            margin-right: 1rem;
            font-size: 1.25rem;
        }

        /* Coming Soon Features */
        .coming-soon-features {
            padding: 2rem;
            background: linear-gradient(135deg, rgba(250, 245, 255, 0.5), rgba(255, 255, 255, 0.5));
        }

        .soon-feature {
            background: white;
            padding: 1rem;
            border-radius: 1rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .soon-feature:hover {
            transform: translateX(10px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        /* Coming Soon Ribbon */
        .coming-soon-ribbon {
            position: absolute;
            top: 2rem;
            right: -2.5rem;
            background: linear-gradient(45deg, #eab308, #a855f7);
            color: white;
            padding: 0.5rem 3rem;
            transform: rotate(45deg);
            font-weight: bold;
            text-transform: uppercase;
            font-size: 0.875rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            z-index: 10;
        }

        /* CTA Button */
        .pricing-cta {
            display: block;
            background: linear-gradient(to right, #a855f7, #22c55e);
            color: white;
            padding: 1rem 2rem;
            border-radius: 9999px;
            text-align: center;
            margin: 2rem;
            font-weight: 600;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .pricing-cta:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(168, 85, 247, 0.2);
        }

        .pricing-cta.disabled {
            opacity: 0.7;
            cursor: not-allowed;
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
        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
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
        <!-- Background Elements -->
        <div class="pricing-giant-logo"></div>
        <div class="pricing-cloud pricing-cloud-1"></div>
        <div class="pricing-cloud pricing-cloud-2"></div>

        <div class="container mx-auto px-4">
            <div class="pricing-header" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                <h2 class="pricing-title dynapuff text-4xl font-bold mb-4">
                    {{ __('pricing.title') }}
                </h2>
                <p class="pricing-description text-lg">
                    {{ __('pricing.description') }}
                </p>

                <div class="pricing-notice">
                    <p class="text-yellow-800 text-sm">
                        {{ app()->getLocale() == 'ar'
                        ? 'ملاحظة: الأسعار لا تشمل اسم النطاق واستضافة الموقع. يجب على العميل توفير خدمات الاستضافة
                        واسم النطاق بشكل منفصل.'
                        : 'Note: Prices do not include domain name and hosting. Client must provide their own
                        hosting and domain services.'
                        }}
                    </p>
                </div>
            </div>

            <div class="pricing-cards">
                <!-- Basic Plan -->
                <div class="pricing-card">
                    <div class="card-header">
                        <div class="pricing-icon">
                            <i class="ri-layout-4-line"></i>
                        </div>
                        <div dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                            <h3 class="dynapuff text-2xl font-bold text-purple-600 mb-2">
                                {{ __('pricing.basic.title') }}
                            </h3>
                            <p class="text-gray-600 mb-4">{{ __('pricing.basic.subtitle') }}</p>
                            <p>
                                <span class="dynapuff text-4xl font-bold text-purple-600">
                                    {{ app()->getLocale() == 'ar' ? '٢٥٠' : '250' }}
                                </span>
                                <span class="text-2xl font-bold text-purple-600">
                                    {{ app()->getLocale() == 'ar' ? 'د.ك' : 'KWD' }}
                                </span>
                            </p>
                        </div>
                    </div>

                    <div class="feature-list">
                        <div dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                            @foreach(range(1, 5) as $i)
                            <div class="feature-item">
                                <i class="ri-checkbox-circle-fill feature-icon"></i>
                                <span class="text-gray-700">{{ __("pricing.basic.features.$i") }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <a href="#contact" class="pricing-cta dynapuff">
                        {{ __('pricing.basic.button') }}
                    </a>
                </div>

                <!-- Pro Plan -->
                <div class="pricing-card">
                    <div class="coming-soon-ribbon">
                        {{ app()->getLocale() === 'ar' ? 'قريباً' : 'Coming Soon' }}
                    </div>

                    <div class="card-header">
                        <div class="pricing-icon">
                            <i class="ri-dashboard-3-line"></i>
                        </div>
                        <div dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                            <h3 class="dynapuff text-2xl font-bold text-purple-600 mb-2">
                                {{ __('pricing.pro.title') }}
                            </h3>
                            <p class="text-gray-600 mb-4">{{ __('pricing.pro.subtitle') }}</p>
                            <div class="bg-yellow-100 text-yellow-800 px-4 py-2 rounded-full inline-block text-sm">
                                <i class="ri-notification-3-line"></i>
                                {{ app()->getLocale() === 'ar' ? 'أسعار خاصة عند الإطلاق' : 'Launch Special Pricing
                                Coming Soon' }}
                            </div>
                        </div>
                    </div>

                    <div class="feature-list">
                        <div dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                            @foreach(range(1, 6) as $i)
                            <div class="feature-item">
                                <i class="ri-checkbox-circle-fill feature-icon"></i>
                                <span class="text-gray-700">{{ __("pricing.pro.features.$i") }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="coming-soon-features">
                        <h4 class="dynapuff text-xl font-bold text-purple-600 mb-4 text-center">
                            <i class="ri-rocket-line text-yellow-500"></i>
                            {{ app()->getLocale() === 'ar' ? 'الميزات القادمة' : 'Upcoming Features' }}
                        </h4>

                        <div dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                            <div class="soon-feature">
                                <i class="ri-settings-line text-purple-600 text-xl mr-3"></i>
                                <span>{{ __('pricing.pro.soon_features.1') }}</span>
                            </div>
                            <div class="soon-feature">
                                <i class="ri-dashboard-line text-purple-600 text-xl mr-3"></i>
                                <span>{{ __('pricing.pro.soon_features.2') }}</span>
                            </div>
                        </div>
                    </div>

                    <button class="pricing-cta disabled dynapuff">
                        {{ app()->getLocale() === 'ar' ? 'انضم لقائمة الانتظار' : 'Join Waitlist' }}
                    </button>
                </div>
            </div>
        </div>
    </div>


    <!-- End::Pricing Content -->



    {{--Start : Projects --}}
    <style>
        /* Projects Section Base */
        .projects-section {
            background: linear-gradient(to bottom, #eff6ff, #ecfdf5);
            position: relative;
            overflow: hidden;
            padding: 6rem 0;
            min-height: 100vh;
        }

        /* Background Elements */
        .projects-giant-logo {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 120%;
            height: 120%;
            opacity: 0.03;
            pointer-events: none;
        }

        .projects-cloud {
            position: absolute;
            background: linear-gradient(to right, #2563eb, #22c55e);
            border-radius: 6rem;
            opacity: 0.1;
            animation: float 6s ease-in-out infinite;
        }

        .projects-cloud-1 {
            top: 15%;
            left: 10%;
            width: 180px;
            height: 50px;
        }

        .projects-cloud-2 {
            bottom: 15%;
            right: 10%;
            width: 220px;
            height: 60px;
            animation-delay: -3s;
        }

        /* Header Styling */
        .projects-header {
            text-align: center;
            margin-bottom: 4rem;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.6s ease-out forwards;
        }

        .projects-title {
            background: linear-gradient(to right, #2563eb, #22c55e);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: 1.5rem;
        }

        .projects-description {
            color: #4b5563;
            max-width: 48rem;
            margin: 0 auto;
            font-size: 1.125rem;
            line-height: 1.75;
        }

        /* Projects Grid */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2.5rem;
            max-width: 72rem;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        /* Project Card */
        .project-card {
            position: relative;
            border-radius: 1.5rem;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            transform: translateY(20px);
            opacity: 0;
            animation: fadeInUp 0.6s ease-out forwards;
        }

        .project-card:nth-child(2) {
            animation-delay: 0.2s;
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
            transition: transform 0.8s ease;
        }

        .project-card:hover .project-image {
            transform: scale(1.05);
        }

        /* Overlay */
        .project-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top,
                    rgba(37, 99, 235, 0.95),
                    rgba(37, 99, 235, 0.7) 50%,
                    rgba(37, 99, 235, 0) 100%);
            padding: 2rem;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            transform: translateY(60px);
            transition: transform 0.5s ease;
        }

        .project-card:hover .project-overlay {
            transform: translateY(0);
        }

        .project-content {
            opacity: 0.9;
            transition: opacity 0.5s ease;
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
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .project-link {
            display: inline-flex;
            align-items: center;
            color: white;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            padding: 0.5rem 1rem;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 9999px;
        }

        .project-link:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateX(5px);
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
            transform: translateX(-5px);
        }

        [dir="rtl"] .project-link:hover .project-link-icon {
            transform: translateX(-3px) scaleX(-1);
        }

        /* Animations */
        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .projects-grid {
                grid-template-columns: 1fr;
            }

            .project-image-wrapper {
                height: 300px;
            }

            .projects-title {
                font-size: 2rem;
            }

            .project-title {
                font-size: 1.5rem;
            }
        }
    </style>
    <div class="projects-section" id="projects">
        <!-- Background Elements -->
        <div class="projects-giant-logo"></div>
        <div class="projects-cloud projects-cloud-1"></div>
        <div class="projects-cloud projects-cloud-2"></div>

        <div class="container mx-auto">
            <!-- Section Header -->
            <div class="projects-header">
                <h2 class="projects-title dynapuff text-4xl md:text-5xl font-bold">
                    {{ __('projects.projects.magical') }}
                </h2>
                <p class="projects-description">
                    {{ __('projects.projects.description') }}
                </p>
            </div>

            <!-- Projects Grid -->
            <div class="projects-grid">
                <!-- Project 1: Learning Activities -->
                <div class="project-card">
                    <div class="project-image-wrapper">
                        <img src="{{asset('build/assets/img/landing/bright-kids.png')}}"
                            alt="{{ __('projects.projects.activities.alt') }}" class="project-image">

                        <div class="project-overlay">
                            <div class="project-content">
                                <h3 class="project-title dynapuff">
                                    {{ __('projects.projects.activities.title') }}
                                </h3>
                                <p class="project-description">
                                    {{ __('projects.projects.activities.description') }}
                                </p>
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
                                <h3 class="project-title dynapuff">
                                    {{ __('projects.projects.portal.title') }}
                                </h3>
                                <p class="project-description">
                                    {{ __('projects.projects.portal.description') }}
                                </p>
                                <a href="/demo-dashboard" class="project-link dynapuff">
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

    {{--END : Projects --}}
    <!-- Start::Contact Content -->
    <style>
        /* Contact Section Base */
        .contact-section {
            background: linear-gradient(to bottom, #eff6ff, #ecfdf5);
            position: relative;
            overflow: hidden;
            padding: 6rem 0;
        }

        /* Background Elements */
        .contact-giant-logo {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 120%;
            height: 120%;
            opacity: 0.03;
            pointer-events: none;
        }

        .contact-cloud {
            position: absolute;
            background: linear-gradient(to right, #2563eb, #22c55e);
            border-radius: 6rem;
            opacity: 0.1;
            animation: float 6s ease-in-out infinite;
        }

        .contact-cloud-1 {
            top: 15%;
            left: 10%;
            width: 180px;
            height: 50px;
        }

        .contact-cloud-2 {
            bottom: 15%;
            right: 10%;
            width: 220px;
            height: 60px;
            animation-delay: -3s;
        }

        /* Header Styling */
        .contact-header {
            text-align: center;
            margin-bottom: 3rem;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.6s ease-out forwards;
        }

        .contact-title {
            background: linear-gradient(to right, #2563eb, #22c55e);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: 1rem;
        }

        /* Contact Card */
        .contact-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 2rem;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.6s ease-out forwards 0.3s;
        }

        /* Info Side */
        .contact-info {
            background: linear-gradient(135deg, rgba(37, 99, 235, 0.1), rgba(34, 197, 94, 0.1));
            padding: 2rem;
        }

        .contact-info-title {
            color: #2563eb;
            margin-bottom: 2rem;
        }

        .contact-info-item {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
            transition: transform 0.3s ease;
        }

        .contact-info-item:hover {
            transform: translateX(10px);
        }

        .contact-icon-wrapper {
            background: linear-gradient(to right, #2563eb, #22c55e);
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
        }

        .contact-icon {
            color: white;
            font-size: 1.25rem;
        }

        .contact-info-content h5 {
            color: #2563eb;
            font-weight: 600;
            margin-bottom: 0.25rem;
        }

        .contact-info-content a {
            color: #4b5563;
            transition: color 0.3s ease;
        }

        .contact-info-content a:hover {
            color: #2563eb;
        }

        .contact-image {
            width: 100%;
            height: auto;
            border-radius: 1rem;
            margin-top: 2rem;
        }

        /* Form Side */
        .contact-form-wrapper {
            background: linear-gradient(135deg, rgba(37, 99, 235, 0.05), rgba(34, 197, 94, 0.05));
            padding: 2rem;
        }

        .form-title {
            color: #2563eb;
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
            border: 2px solid rgba(37, 99, 235, 0.2);
            border-radius: 9999px;
            background: white;
            transition: all 0.3s ease;
        }

        .form-input:focus {
            outline: none;
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        textarea.form-input {
            border-radius: 1.5rem;
            resize: vertical;
            min-height: 120px;
        }

        .submit-button {
            width: 100%;
            padding: 1rem 2rem;
            background: linear-gradient(to right, #2563eb, #22c55e);
            color: white;
            border: none;
            border-radius: 9999px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .submit-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.2);
        }

        /* Alert Messages */
        .alert {
            padding: 1rem;
            border-radius: 1rem;
            margin-bottom: 1rem;
        }

        .alert-success {
            background: rgba(34, 197, 94, 0.1);
            border: 1px solid rgba(34, 197, 94, 0.2);
            color: #16a34a;
        }

        .alert-error {
            background: rgba(239, 68, 68, 0.1);
            border: 1px solid rgba(239, 68, 68, 0.2);
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

        /* Animations */
        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .contact-card {
                margin: 0 1rem;
            }

            .contact-info-item:hover {
                transform: none;
            }
        }
    </style>
    <div class="contact-section" id="contact">
        <!-- Background Elements -->
        <div class="contact-giant-logo"></div>
        <div class="contact-cloud contact-cloud-1"></div>
        <div class="contact-cloud contact-cloud-2"></div>

        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="contact-header">
                <h2 class="contact-title dynapuff text-4xl font-bold mb-4">
                    {{ __('contact.contact.title') }}
                </h2>
                <p class="text-gray-700 text-lg max-w-2xl mx-auto">
                    {{ __('contact.contact.subtitle') }}
                </p>
            </div>

            <!-- Contact Card -->
            <div class="contact-card">
                <div class="md:flex">
                    <!-- Info Side -->
                    <div class="md:w-1/2">
                        <div class="contact-info" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                            <h3 class="contact-info-title dynapuff text-2xl font-bold">
                                {{ __('contact.contact.quick_reach') }}
                            </h3>

                            <!-- Phone -->
                            <div class="contact-info-item">
                                <div class="contact-icon-wrapper">
                                    <i class="ri-smartphone-line contact-icon"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>{{ __('contact.contact.phone') }}</h5>
                                    <a href="tel:+96566579000" dir="ltr">+ 965 66579000</a>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="contact-info-item">
                                <div class="contact-icon-wrapper">
                                    <i class="ri-mail-line contact-icon"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>{{ __('contact.contact.email') }}</h5>
                                    <a href="mailto:ahmaadzaid7@gmail.com" dir="ltr">ahmaadzaid7@gmail.com</a>
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
                                <h3 class="form-title dynapuff text-2xl font-bold">
                                    {{ __('contact.contact.form_title') }}
                                </h3>

                                @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                @endif

                                @if($errors->any())
                                <div class="alert alert-error">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif

                                <div class="form-group">
                                    <label class="form-label" for="name">
                                        {{ __('contact.contact.name_label') }}
                                    </label>
                                    <input type="text" id="name" name="name"
                                        class="form-input @error('name') border-red-500 @enderror"
                                        value="{{ old('name') }}"
                                        placeholder="{{ __('contact.contact.name_placeholder') }}" required>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="email">
                                        {{ __('contact.contact.email_label') }}
                                    </label>
                                    <input type="email" id="email" name="email"
                                        class="form-input @error('email') border-red-500 @enderror"
                                        value="{{ old('email') }}"
                                        placeholder="{{ __('contact.contact.email_placeholder') }}" required>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="phone">
                                        {{ __('contact.contact.phone_label') }}
                                    </label>
                                    <input type="tel" id="phone" name="phone"
                                        class="form-input @error('phone') border-red-500 @enderror"
                                        value="{{ old('phone') }}"
                                        placeholder="{{ __('contact.contact.phone_placeholder') }}" required>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="message">
                                        {{ __('contact.contact.message_label') }}
                                    </label>
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
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" data-menu-position="fixed">
>

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tailwind Responsive Admin Web Dashboard Laravel Template">
    <meta name="keywords"
        content="admin, admin tailwind, laravel admin template, admin laravel, tailwind laravel, admin dashboard template, laravel tailwind, admin dashboard, admin panel, admin template, laravel admin dashboard, tailwind, laravel dashboard template, admin panel template, laravel admin panel, laravel dashboard">

    <!-- TITLE -->
    <title> Synto - Laravel Tailwind Admin Template </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DynaPuff:wght@400..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Nunito:wght@400;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Nunito:wght@400;700&display=swap"
        rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400..700&display=swap" rel="stylesheet">
    <!-- FAVICON -->
    <link rel="shortcut icon" href="{{asset('build/assets/img/brand-logos/favicon.ico')}}">

    <!-- APP CSS -->
    @vite(['resources/css/app.css'])


    <!-- APP SCSS -->
    @vite(['resources/sass/app.scss'])


    <!-- SIMPLEBAR CSS -->
    <link rel="stylesheet" href="{{asset('build/assets/libs/simplebar/simplebar.min.css')}}">

    <!-- COLOR PICKER CSS -->
    <link rel="stylesheet" href="{{asset('build/assets/libs/@simonwep/pickr/themes/nano.min.css')}}">

    <!-- MAIN JS -->
    @vite('resources/assets/js/main.js')


    @yield('styles')
    <style>
        /* Base styles for DynaPuff */
        .en-font {
            font-family: "DynaPuff", system-ui;
            font-optical-sizing: auto;
            font-style: normal;
            font-variation-settings: "wdth" 100;
        }

        /* Styles for El Messiri */
        .ar-font {
            font-family: "El Messiri", system-ui;
            font-optical-sizing: auto;
        }

        /* Enhanced typography for Arabic */
        html[lang="ar"] .section-title {
            font-size: 3.5rem;
            line-height: 1.2;
            font-weight: 700;
        }

        html[lang="ar"] .service-title {
            font-size: 1.75rem;
            line-height: 1.3;
            font-weight: 600;
        }

        /* Enhanced typography for English */
        html[lang="en"] .section-title {
            font-size: 3rem;
            line-height: 1.3;
            font-weight: bold;
        }

        html[lang="en"] .service-title {
            font-size: 1.5rem;
            line-height: 1.4;
            font-weight: 600;
        }
    </style>

</head>

<body class="landing-body {{ app()->getLocale() == 'ar' ? 'rtl-layout' : 'ltr-layout' }}">

    <!-- SWITCHER -->
    {{-- @include('layouts.components.landing-switcher') --}}

    <!-- END SWITCHER -->

    <!-- LANDING ALERTS -->
    {{-- @include('layouts.components.landing-alerts') --}}

    <!-- END LANDING ALERTS -->

    <!-- LANDING PAGE -->
    <div class="landing-page-wrapper relative">

        <!-- LANDING HEADER -->
        @include('layouts.components.landing-header')

        <!-- END LANDING HEADER -->

        <!-- LANDING SIDEBAR -->
        @include('layouts.components.landing-sidebar')

        <!-- END LANDING SIDEBAR -->

        <!-- MAIN-CONTENT -->
        @yield('content')
        <!-- END MAIN-CONTENT -->

        <!-- LANDING FOOTER -->
        @include('layouts.components.landing-footer')

        <!-- END LANDING FOOTER -->

    </div>
    <!-- END LANDING PAGE-->

    <!-- SCRIPTS -->

    @include('layouts.components.landing-scripts')


    <!-- INTERNAL JS -->
    @vite('resources/assets/js/landing.js')


    <!-- SWITCH JS -->
    @vite('resources/assets/js/switch.js')


    <!-- END SCRIPTS -->

</body>

</html>
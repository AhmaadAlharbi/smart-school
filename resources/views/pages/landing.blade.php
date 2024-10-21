@extends('layouts.landing-master')

@section('styles')

<!-- SWIPER CSS -->
<link rel="stylesheet" href="{{asset('build/assets/libs/swiper/swiper-bundle.min.css')}}">

@endsection

@section('content')

<div class="main-content landing-main !p-0">

    <!-- Start::Home Content -->
    <div class="landing-wrapper bg-blue-700" id="home">
        <div class="container lg:pt-40 lg:pb-24 pt-28 pb-12 relative z-10 mx-auto flex items-center justify-center ">
            <div class="text-center max-w-3xl">
                <div class="landing-content">
                    <div class="space-y-6">
                        <h1 class="leading-tight text-5xl font-semibold text-blue-50">
                            Your School Will Shine Brightly with
                            <span class="text-blue-200">Sehab Code!</span>
                        </h1>
                        <p class="text-lg text-white/70 font-medium">
                            Sehab Code provides custom websites for schools that improve communication and make
                            managing tasks easier. Let us help your school stand out with a professional online
                            presence.
                        </p>
                    </div>

                    <!-- Buttons -->
                    <div class="mt-10 lg:flex justify-center lg:space-x-2 space-y-2 lg:space-y-0 rtl:space-x-reverse">
                        <a href="javascript:void(0);" class="py-3 px-3 ti-btn m-0 ti-btn-secondary">
                            See How it Works <i class="ri-arrow-right-line rtl:rotate-180"></i>
                        </a>
                        <a href="javascript:void(0);" class="py-3 px-3 ti-btn m-0 ti-btn-danger">
                            Discover More <i class="ri-arrow-right-line rtl:rotate-180"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End::Home Content -->

    <!-- Start::Services Content -->
    <div class="" id="services">
        <div class="section container mx-auto space-y-6">
            <div class="text-center max-w-[80rem] mx-auto mb-12">
                <h2 class="justify-center section-title text-center text-3xl font-bold text-gray-800 md:text-4xl">
                    <span class="px-3">Our
                        Services</span>
                </h2>
                <p class="text-center text-gray-500 text-base mt-4">Lorem ipsum dolor sit, amet
                    consectetur adipisicing
                    elit. Pariatur quam saepe enim maxime! Eligendi quas itaque voluptatibus, aspernatur illo, natus
                    cumque
                    odio, molestiae obcaecati ducimus sit ratione recusandae perferendis culpa?</p>
            </div>
            <div class="grid md:grid-cols-2 lg:!grid-cols-4 gap-6">
                <div class="box landing-service text-center mb-0">
                    <div class="box-body">
                        <div class="landing-service-img mb-4 avatar avatar-lg rounded-full bg-primary p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-transparent stroke-white" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-gray-800 text-xl font-semibold my-auto mb-2">Design Quality</h3>
                            <p class="text-gray-500 text-base">Lorem ipsum dolor sit, amet consectetur
                                adipisicing
                                elit. Pariatur quam saepe enim maxime!</p>
                        </div>
                    </div>
                </div>
                <div class="box landing-service text-center mb-0">
                    <div class="box-body">
                        <div class="landing-service-img mb-4 avatar avatar-lg rounded-full bg-primary p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-transparent stroke-white" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                            </svg>
                        </div>
                        <div class="">
                            <h3 class="text-gray-800 text-xl font-semibold my-auto mb-2">Customization</h3>
                            <p class="text-gray-500 text-base">Lorem ipsum dolor sit, amet consectetur
                                adipisicing
                                elit. Pariatur quam saepe enim maxime! </p>
                        </div>
                    </div>
                </div>
                <div class="box landing-service text-center mb-0">
                    <div class="box-body">
                        <div class="landing-service-img mb-4 avatar avatar-lg rounded-full bg-primary p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-transparent stroke-white" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                            </svg>
                        </div>
                        <div class="">
                            <h3 class="text-gray-800 text-xl font-semibold my-auto mb-2">Documentation</h3>
                            <p class="text-gray-500 text-base">Lorem ipsum dolor sit, amet consectetur
                                adipisicing
                                elit. Pariatur quam saepe enim maxime!</p>
                        </div>
                    </div>
                </div>
                <div class="box landing-service text-center mb-0">
                    <div class="box-body">
                        <div class="landing-service-img mb-4 avatar avatar-lg rounded-full bg-primary p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-transparent stroke-white" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7.5 7.5h-.75A2.25 2.25 0 004.5 9.75v7.5a2.25 2.25 0 002.25 2.25h7.5a2.25 2.25 0 002.25-2.25v-7.5a2.25 2.25 0 00-2.25-2.25h-.75m0-3l-3-3m0 0l-3 3m3-3v11.25m6-2.25h.75a2.25 2.25 0 012.25 2.25v7.5a2.25 2.25 0 01-2.25 2.25h-7.5a2.25 2.25 0 01-2.25-2.25v-.75" />
                            </svg>
                        </div>
                        <div class="">
                            <h3 class="text-gray-800 text-xl font-semibold my-auto mb-2">Regular Updates</h3>
                            <p class="text-gray-500 text-base">Lorem ipsum dolor sit, amet consectetur
                                adipisicing
                                elit. Pariatur quam saepe enim maxime! </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End::Services Content -->

    <!-- Start::About Content -->
    <div class="bg-white" id="about">
        <div class="section container mx-auto">
            <div class="grid lg:grid-cols-2 gap-6">
                <div class="relative bg-gradient-radial from-gray-100 to-white">
                    <div class="relative h-96 overflow-clip py-10 sm:h-[32rem] lg:p-20">
                        <img src="{{asset('build/assets/img/landing/3.png')}}"
                            class="mx-auto h-80 w-96 rounded-t-sm object-cover object-top shadow-2xl sm:h-[28rem]"
                            alt="Landing page design example">
                    </div>
                </div>
                <div class="my-auto">
                    <div class="space-y-2">
                        <h2 class="section-title text-center text-3xl font-bold text-gray-800 md:text-4xl">
                            <span class="">Designing the Perfect Landing Page for Schools</span>
                        </h2>
                        <h5 class="font-medium text-2xl text-gray-800">Create an Impactful First Impression.</h5>
                        <h6 class="font-normal text-base">Our team specializes in building modern, engaging landing
                            pages tailored for schools.</h6>
                        <p class="text-base text-gray-500">
                            A well-designed landing page is the cornerstone of your school’s online presence. It
                            provides an easy way for prospective students, parents, and educators to learn more about
                            your offerings, apply, and stay engaged. We focus on clean, mobile-responsive designs that
                            highlight key information, from curriculum details to event registrations.
                        </p>
                        <p class="text-base text-gray-500">
                            Our landing pages are tailored to capture your school’s unique identity, with features like
                            online registration forms, event sign-ups, and integrated maps. We ensure that your landing
                            page is not only visually appealing but also fully functional and optimized for a smooth
                            user experience on all devices.
                        </p>
                    </div>
                    <a href="{{url('about')}}" class="py-2 px-3 ti-btn m-0 ti-btn-primary mt-6">
                        Read More <i class="ri-arrow-right-line rtl:rotate-180"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- End::About Content -->

    <!-- Start::Mission Content -->
    <div class="" id="our-mission">
        <div class="section container mx-auto">
            <div class="grid lg:grid-cols-2 gap-6">
                <div class="my-auto">
                    <div class="space-y-2">
                        <h2 class="section-title text-center text-3xl font-bold text-gray-800 md:text-4xl">
                            <span class="">Customized Dashboard</span>
                        </h2>
                        <div class="space-y-3">
                            <p class="text-base text-gray-500">
                                Our customizable dashboard offers a beautiful and intuitive design, allowing schools to
                                manage their operations efficiently.
                            </p>
                            <p class="text-base text-gray-500">
                                The dashboard provides an overview of key aspects such as student information, parent
                                communication, classroom management, and teacher performance.
                            </p>
                            <p class="text-base text-gray-500">
                                Additionally, it includes features for tracking fees and payments, helping you stay
                                organized and transparent. With user-friendly navigation, you can access all the
                                essential tools you need to enhance your school's management.
                            </p>
                        </div>
                    </div>
                    <a href="{{url('about')}}" class="py-2 px-3 ti-btn m-0 ti-btn-primary mt-6">
                        Read More <i class="ri-arrow-right-line rtl:rotate-180"></i>
                    </a>
                </div>
                <div class="relative bg-gradient-radial from-white to-gray-100">
                    <div class="relative h-96 overflow-clip py-10 sm:h-[32rem] ">
                        <img src="{{asset('build/assets/img/landing/Dashboard.png')}}"
                            class="mx-auto h-full w-full rounded-t-sm border shadow-2xl sm:h-full" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- End::Mission Content -->


    <!-- Start::Banner Content -->
    <div
        class="section flex relative bg-[url('http://127.0.0.1:8000/build/assets/img/landing/1.jpg')] bg-cover before:bg-primary/90 before:absolute before:w-full before:h-full before:top-0 before:inset-x-0">
        <div class="container mx-auto z-[0] text-center">
            <h2 class="section-title text-center text-3xl font-bold text-white md:text-4xl justify-center">
                We Create Engaging Solutions for Schools.
            </h2>
            <p class="w-2/3 mx-auto my-6 text-base text-white/70">
                Our team specializes in designing and developing modern, responsive websites tailored for educational
                institutions. We focus on creating user-friendly interfaces that enhance the experience for students,
                parents, and educators alike. From visually appealing landing pages to comprehensive school management
                dashboards, we ensure your online presence is both impactful and efficient.
            </p>
            <p class="w-2/3 mx-auto my-6 text-base text-white/70">
                We believe in delivering timely solutions that meet the unique needs of schools. Our goal is to provide
                long-term strategies that foster engagement and visibility for your institution, helping you connect
                with your community effectively.
            </p>
            <a href="{{url('contactus')}}" class="ti-btn m-0 py-3 px-6 ti-btn-danger">Contact Us</a>
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
    <div class="" id="testimonials">
        <div class="section container mx-auto">
            <div class="text-center max-w-[80rem] mx-auto mb-12">
                <h2 class="justify-center section-title text-center text-3xl font-bold text-gray-800 md:text-4xl">
                    <span class="px-3">What Our Clients Say ...!</span>
                </h2>
                {{-- <p class="text-center text-gray-500 text-base mt-4">
                    At Bright Kids Kindergarten, we prioritize creating a vibrant and nurturing environment for our
                    children.
                    Our mission is to foster creativity, curiosity, and a love for learning that lasts a lifetime.
                </p> --}}
            </div>
            <div class="flex items-center justify-center bg-gray-100">
                <div class="max-w-2xl w-full ">
                    <div class="bg-white rounded-lg shadow-lg">
                        <div class="swiper-slide flex justify-center !bg-transparent">
                            <div class="box mb-0 text-center w-full px-6 py-8">
                                <div class="box-body">
                                    <div class="flex justify-center space-x-1 rtl:space-x-reverse">
                                        <div class="text-yellow-500 text-base hover:text-yellow-500"><i
                                                class="ri-star-fill"></i></div>
                                        <div class="text-yellow-500 text-base hover:text-yellow-500"><i
                                                class="ri-star-fill"></i></div>
                                        <div class="text-yellow-500 text-base hover:text-yellow-500"><i
                                                class="ri-star-fill"></i></div>
                                        <div class="text-yellow-500 text-base hover:text-yellow-500"><i
                                                class="ri-star-fill"></i></div>
                                        <div class="text-yellow-500 text-base hover:text-yellow-500"><i
                                                class="ri-star-fill"></i></div>
                                    </div>
                                    <p class="text-base text-gray-500 mt-4">
                                        "The landing page designed for Bright Kids Kindergarten exceeded our
                                        expectations!
                                        The design is vibrant and engaging, perfectly capturing the spirit of our
                                        kindergarten.
                                        We are thrilled with the results!"
                                    </p>
                                </div>
                                <div class="box-footer mt-6">
                                    <div class="flex justify-center">
                                        <a class="flex items-center">
                                            <img alt="testimonial" src="{{asset('build/assets/img/users/owner.jpg')}}"
                                                class="avatar avatar-sm !rounded-full">
                                            <div class="ltr:pl-4 rtl:pr-4">
                                                <p class="font-semibold text-base leading-none text-gray-800">Jessica
                                                    Smith</p>
                                                <span class="dark:text-white/70 text-gray-500 text-xs">Owner, Bright
                                                    Kids Kindergarten</span>
                                            </div>
                                        </a>
                                    </div>
                                    <p class="text-center text-gray-500 mt-2">Just now</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination !relative !bottom-0"></div>
        </div>
    </div>

    <!-- End::Testinominals Content -->

    <!-- Start::Pricing Content -->
    <div class="bg-white" id="pricing">
        <div class="section container mx-auto">
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 lg:col-span-4 my-auto">
                    <div class="space-y-3 my-auto">
                        <h2 class="section-title text-center text-3xl font-bold text-gray-800 md:text-4xl mb-2">
                            <span class="">Pricing Plans</span>
                        </h2>
                        <h6 class="font-medium text-xl mb-2">Choose the Plan that Suits You</h6>
                        <p class="text-base text-gray-500">
                            Select a plan that fits your needs. Our services are designed to help you succeed, whether
                            you need a custom landing page or a comprehensive dashboard solution.
                        </p>
                        <a class="ti-btn ti-btn-primary mt-3" href="javascript:void(0);">Read More<i
                                class="ri ri-arrow-right-s-line rtl:rotate-180"></i></a>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-8">
                    <div class="grid grid-cols-12 gap-6 max-w-6xl mx-auto">
                        <!-- Landing Page Plan -->
                        <div class="lg:col-span-6 col-span-12">
                            <div class="shadow border rounded-sm h-full">
                                <div class="p-6">
                                    <h3 class="text-2xl font-semibold text-gray-800">Landing Page</h3>
                                    <p class="text-gray-500 text-xs">Perfect for startups and individual projects.</p>
                                    <div class="flex mt-4 items-baseline">
                                        <span class="ltr:mr-2 rtl:ml-2 text-5xl font-semibold text-gray-800">150
                                            KD</span>
                                        {{-- <span class="text-gray-500 font-normal">/ Year</span> --}}
                                    </div>
                                </div>
                                <div class="p-6 border-y border-gray-200 flex-grow">
                                    <h6 class="font-medium text-base mb-4">What's Included</h6>
                                    <ul class="p-0 space-y-3">
                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                            <i
                                                class="ri ri-checkbox-circle-line text-success text-base leading-none"></i>
                                            <span class="my-auto text-gray-500">Custom Design</span>
                                        </li>
                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                            <i
                                                class="ri ri-checkbox-circle-line text-success text-base leading-none"></i>
                                            <span class="my-auto text-gray-500">Mobile Responsive</span>
                                        </li>
                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                            <i
                                                class="ri ri-checkbox-circle-line text-success text-base leading-none"></i>
                                            <span class="my-auto text-gray-500">SEO Optimization</span>
                                        </li>
                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                            <i
                                                class="ri ri-checkbox-circle-line text-success text-base leading-none"></i>
                                            <span class="my-auto text-gray-500">Contact Form Integration</span>
                                        </li>
                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                            <i
                                                class="ri ri-checkbox-circle-line text-success text-base leading-none"></i>
                                            <span class="my-auto text-gray-500">Social Media Integration</span>
                                        </li>
                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                            <i
                                                class="ri ri-checkbox-circle-line text-success text-base leading-none"></i>
                                            <span class="my-auto text-gray-500">1 Custom Domain</span>
                                        </li>
                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                            <i
                                                class="ri ri-checkbox-circle-line text-success text-base leading-none"></i>
                                            <span class="my-auto text-gray-500">24/7 Support</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="p-6 text-center">
                                    <button type="button" class="ti-btn w-full ti-btn-primary m-0">Get Started</button>
                                </div>
                            </div>
                        </div>

                        <!-- Dashboard Plan -->
                        <div class="lg:col-span-6 col-span-12">
                            <div class="shadow border rounded-sm h-full">
                                <div class="p-6">
                                    <h3 class="text-2xl font-semibold text-gray-800">Dashboard</h3>
                                    <p class="text-gray-500 text-xs">Ideal for data management and analytics.</p>
                                    <div class="flex mt-4 items-baseline">
                                        <span class="ltr:mr-2 rtl:ml-2 text-5xl font-semibold text-gray-800">300
                                            KD</span>
                                        <span class="text-gray-500 font-normal"></span>
                                    </div>
                                </div>
                                <div class="p-6 border-y border-gray-200 flex-grow">
                                    <h6 class="font-medium text-base mb-4">What's Included</h6>
                                    <ul class="p-0 space-y-3">
                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                            <i
                                                class="ri ri-checkbox-circle-line text-success text-base leading-none"></i>
                                            <span class="my-auto text-gray-500">All Landing Page Features</span>
                                        </li>
                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                            <i
                                                class="ri ri-checkbox-circle-line text-success text-base leading-none"></i>
                                            <span class="my-auto text-gray-500">Advanced Analytics Tools</span>
                                        </li>
                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                            <i
                                                class="ri ri-checkbox-circle-line text-success text-base leading-none"></i>
                                            <span class="my-auto text-gray-500">User Management Features</span>
                                        </li>
                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                            <i
                                                class="ri ri-checkbox-circle-line text-success text-base leading-none"></i>
                                            <span class="my-auto text-gray-500">Custom Integrations</span>
                                        </li>
                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                            <i
                                                class="ri ri-checkbox-circle-line text-success text-base leading-none"></i>
                                            <span class="my-auto text-gray-500">Data Visualization Tools</span>
                                        </li>
                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                            <i
                                                class="ri ri-checkbox-circle-line text-success text-base leading-none"></i>
                                            <span class="my-auto text-gray-500">Real-time Data Updates</span>
                                        </li>
                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                            <i
                                                class="ri ri-checkbox-circle-line text-success text-base leading-none"></i>
                                            <span class="my-auto text-gray-500">Priority Support</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="p-6 text-center">
                                    <button type="button" class="ti-btn w-full ti-btn-primary m-0">Get Started</button>
                                </div>
                            </div>
                        </div>
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

    <!-- Start::Contact Content -->
    <div class="bg-white" id="contact">
        <div class="section container mx-auto space-y-6">
            <div class="text-center max-w-[80rem] mx-auto mb-12">
                <h2 class="justify-center section-title text-center text-3xl font-bold text-gray-800 md:text-4xl">
                    <span class="px-3">Feel Free To
                        Contact Us..!</span>
                </h2>
                <p class="text-center text-gray-500 text-base mt-4">
                    We're here to turn your vision into reality. Whether you have questions about our services, need
                    technical support, or want to discuss a custom project, our team is ready to assist. Your success is
                    our priority, and we're committed to providing prompt, professional, and personalized support. Don't
                    hesitate to reach out – let's start a conversation about how we can help your school shine online!
                </p>
            </div>
            <div>
                <div class="grid sm:grid-cols-2 gap-0 max-w-xl mx-auto">
                    <div class="p-6">
                        <div class="space-x-3 flex rtl:space-x-reverse items-center">
                            <div
                                class="bg-primary/20 text-primary p-2 rounded-full leading-none text-center avatar avatar-sm">
                                <i class="ri-smartphone-line text-lg leading-tight"></i>
                            </div>
                            <div>
                                <h5 class="font-semibold text-base text-gray-800">Phone number</h5>
                                <a href="javascript:void(0);" class="text-sm font-normal text-gray-500"> +
                                    965 66579000</a>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="space-x-3 flex rtl:space-x-reverse items-center">
                            <div
                                class="bg-primary/20 text-primary p-2 rounded-full leading-none text-center avatar avatar-sm">
                                <i class="ri-mail-line text-lg leading-tight"></i>
                            </div>
                            <div>
                                <h5 class="font-semibold text-base text-gray-800">Email Address</h5>
                                <a href="javascript:void(0);" class="text-sm font-normal text-gray-500">
                                    ahmaadzaid7@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sm:grid lg:grid-cols-12 gap-x-5 space-y-6 sm:space-y-0">
                    <div class="col-span-3">
                    </div>
                    <div class="col-span-6">
                        <div class="box shadow-none border-0">
                            <div class="box-body">
                                <div class="my-auto text-center">
                                    <div class="space-y-4 text-start">
                                        <input type="text" class="col-span-9 ti-form-input"
                                            placeholder="Enter Full Name">
                                        <input type="email" class="col-span-9 ti-form-input"
                                            placeholder="Enter Email Id">
                                        <input type="number" class="col-span-9 ti-form-input"
                                            placeholder="Enter Phone No">
                                        <textarea class="col-span-9 ti-form-input" rows="4"
                                            placeholder="Enter Your Messaage"></textarea>
                                        <a class="ti-btn ti-btn-primary mb-0 w-full" href="javascript:void(0);">Send
                                            Message</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3">
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
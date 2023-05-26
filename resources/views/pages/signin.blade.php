@extends('layouts.custom-master')

@section('styles')

@endsection

@section('custom-body')
<body class="authentication-page">
@endsection

@section('content')

            <main id="content"  class="w-full max-w-md mx-auto p-6">
                <a href="{{url('index')}}" class="header-logo">
                    <img src="{{asset('build/assets/img/brand-logos/desktop-logo.png')}}" alt="logo" class="mx-auto block">
                    <img src="{{asset('build/assets/img/brand-logos/desktop-dark.png')}}" alt="logo" class="mx-auto hidden">
                </a>
                <div class="mt-7 bg-white rounded-sm shadow-sm">
                    <div class="p-4 sm:p-7">
                        <div class="text-center">
                            <h1 class="block text-2xl font-bold text-gray-800">Sign in</h1>
                            <p class="mt-3 text-sm text-gray-600">
                                Don't have an account yet?
                                <a class="text-primary decoration-2 hover:underline font-medium"
                                    href="{{url('signup')}}">
                                    Sign up here
                                </a>
                            </p>
                        </div>

                        <div class="mt-5">
                            <button type="button"
                                class="w-full py-2 px-3 inline-flex justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-sm">
                                <img src="{{asset('build/assets/img/authentication/social/1.png')}}" class="w-4 h-4" alt="google-img">Sign in with Google
                            </button>

                            <div
                                class="py-3 flex items-center text-xs text-gray-400 uppercase before:flex-[1_1_0%] before:border-t before:border-gray-200 ltr:before:mr-6 rtl:before:ml-6 after:flex-[1_1_0%] after:border-t after:border-gray-200 ltr:after:ml-6 rtl:after:mr-6">
                                Or</div>

                            <!-- Form -->
                            <div>
                                <div class="grid gap-y-4">
                                    <!-- Form Group -->
                                    <div>
                                        <label for="email" class="block text-sm mb-2">Email address</label>
                                        <div class="relative">
                                            <input type="email" id="email" name="email"
                                                class="py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary"
                                                required>
                                        </div>
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div>
                                        <div class="flex justify-between items-center">
                                            <label for="password" class="block text-sm mb-2">Password</label>
                                            <a class="text-sm text-primary decoration-2 hover:underline font-medium"
                                                href="{{url('forgot')}}">Forgot password?</a>
                                        </div>
                                        <div class="relative">
                                            <input type="password" id="password" name="password"
                                                class="py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary"
                                                required>
                                        </div>
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Checkbox -->
                                    <div class="flex items-center">
                                        <div class="flex">
                                            <input id="remember-me" name="remember-me" type="checkbox"
                                                class="shrink-0 mt-0.5 border-gray-200 rounded text-primary pointer-events-none focus:ring-primary">
                                        </div>
                                        <div class="ltr:ml-3 rtl:mr-3">
                                            <label for="remember-me" class="text-sm">Remember me</label>
                                        </div>
                                    </div>
                                    <!-- End Checkbox -->

                                    <a href="{{url('index')}}"
                                        class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:outline-none focus:ring-0 focus:ring-primary focus:ring-offset-0 transition-all text-sm">Sign
                                        in</a>
                                </div>
                            </div>
                            <!-- End Form -->
                        </div>
                    </div>
                </div>
            </main>

@endsection

@section('scripts')

@endsection
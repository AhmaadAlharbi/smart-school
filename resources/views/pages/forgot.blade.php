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
                            <h1 class="block text-2xl font-bold text-gray-800">Forgot password?</h1>
                            <p class="mt-3 text-sm text-gray-600">
                                Remember your password?
                                <a class="text-primary decoration-2 hover:underline font-medium"
                                    href="{{url('signin')}}">
                                    Sign in here
                                </a>
                            </p>
                        </div>

                        <div class="mt-5">
                            <!-- Form -->
                            <form>
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

                                    <button type="submit"
                                        class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:outline-none focus:ring-0 focus:ring-primary focus:ring-offset-0 transition-all text-sm">Send Reset
                                        Link</button>
                                </div>
                            </form>
                            <!-- End Form -->
                        </div>
                    </div>
                </div>
            </main>

@endsection

@section('scripts')

@endsection
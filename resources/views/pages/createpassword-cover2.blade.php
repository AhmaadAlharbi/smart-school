@extends('layouts.custom-master')

@section('styles')

@endsection

@section('custom-body')
<body class="flex h-full !py-0 bg-white">
@endsection

@section('content')

            <div class="grid grid-cols-12 gap-6 w-full">
                <div class="lg:col-span-6 col-span-12 hidden lg:block relative">
                    <div class="cover relative w-full h-full z-[1] p-10">
                        <a href="{{url('index')}}" class="header- logo">
                            <img src="{{asset('build/assets/img/brand-logos/desktop-dark.png')}}" alt="logo" class="ltr:ml-auto rtl:mr-auto block">
                        </a>
                        <div class="authentication-page justify-center w-full max-w-7xl mx-auto p-0">
                            <img src="{{asset('build/assets/img/authentication/2.png')}}" alt="logo" class="mx-auto h-[500px]">
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-6 col-span-12">
                    <div class="authentication-page w-full">
                        <!-- ========== MAIN CONTENT ========== -->
                            <main id="content"  class="w-full max-w-md mx-auto p-6">
                                <a href="{{url('index')}}" class="header-logo lg:hidden">
                                    <img src="{{asset('build/assets/img/brand-logos/desktop-logo.png')}}" alt="logo" class="mx-auto block">
                                    <img src="{{asset('build/assets/img/brand-logos/desktop-dark.png')}}" alt="logo" class="mx-auto hidden">
                                </a>
                                <div class="mt-7">
                                    <div class="p-4 sm:p-7">
                                        <div class="text-center">
                                            <h1 class="block text-2xl font-bold text-gray-800">Create Password</h1>
                                            <p class="mt-3 text-sm text-gray-600">
                                                Back To Home
                                                <a class="text-primary decoration-2 hover:underline font-medium"
                                                    href="{{url('index')}}">
                                                    Click Here..!
                                                </a>
                                            </p>
                                        </div>

                                        <div class="mt-5">

                                            <!-- Form -->
                                            <form>
                                                <div class="grid gap-y-4">

                                                    <!-- Form Group -->
                                                    <div>
                                                        <div class="flex justify-between items-center">
                                                            <label for="password" class="block text-sm mb-2">Password</label>
                                                        </div>
                                                        <div class="relative">
                                                            <input type="password" id="password" name="password"
                                                                class="py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <!-- End Form Group -->

                                                    <!-- Form Group -->
                                                    <div>
                                                        <div class="flex justify-between items-center">
                                                            <label for="password1" class="block text-sm mb-2">Confirm Password</label>
                                                        </div>
                                                        <div class="relative">
                                                            <input type="password" id="password1" name="password1"
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

                                                    <button type="submit"
                                                        class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:outline-none focus:ring-0 focus:ring-primary focus:ring-offset-0 transition-all text-sm">Save Password</button>
                                                </div>
                                            </form>
                                            <!-- End Form -->
                                        </div>
                                    </div>
                                </div>
                            </main>
                        <!-- ========== END MAIN CONTENT ========== -->
                    </div>
                </div>
            </div>

@endsection

@section('scripts')

@endsection
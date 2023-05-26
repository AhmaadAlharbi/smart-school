@extends('layouts.custom-master2')

@section('styles')

@endsection

@section('custom-body')
<body class="cover1 justify-center">
@endsection

@section('content')

            <div class="flex justify-center min-h-screen align-middle">
                <main id="content"  class="w-full max-w-md mx-auto my-auto p-6">
                    <a href="{{url('index')}}" class="header-logo">
                        <img src="{{asset('build/assets/img/brand-logos/desktop-dark.png')}}" alt="logo" class="mx-auto block">
                    </a>
                    <div class="mt-7 bg-white rounded-sm shadow-sm">
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
            </div>

@endsection

@section('scripts')

@endsection
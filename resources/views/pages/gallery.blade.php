@extends('layouts.master')

@section('styles')

        <!-- GLIGHTBOX CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/glightbox/css/glightbox.min.css')}}">

@endsection

@section('content')

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 text-2xl font-medium"> Gallery</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                    <a class="flex items-center font-semibold text-primary hover:text-primary truncate" href="javascript:void(0);">
                                        Advanced Ui
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 rtl:rotate-180"></i>
                                    </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary " aria-current="page">
                                        Gallery
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Basic Gallery</h5>
                                        </div>
                                        <div class="box-body">
                                            <div class="sm:grid grid-cols-12 gap-6 sm:space-y-0 space-y-6">
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="inner">
                                                        <a href="{{asset('build/assets/img/gallery/1.jpg')}}" class="gallery">
                                                            <img src="{{asset('build/assets/img/gallery/1.jpg')}}" alt="image" class="w-full" >
                                                            <div class="image-overlay">
                                                                <h5 class="image-caption">Image-1</h5>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="inner">
                                                        <a href="{{asset('build/assets/img/gallery/2.jpg')}}" class="gallery">
                                                            <img src="{{asset('build/assets/img/gallery/2.jpg')}}" alt="image" class="w-full" >
                                                            <div class="image-overlay">
                                                                <h5 class="image-caption">Image-2</h5>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="inner">
                                                        <a href="{{asset('build/assets/img/gallery/3.jpg')}}" class="gallery">
                                                            <img src="{{asset('build/assets/img/gallery/3.jpg')}}" alt="image" class="w-full" >
                                                            <div class="image-overlay">
                                                                <h5 class="image-caption">Image-3</h5>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="inner">
                                                        <a href="{{asset('build/assets/img/gallery/4.jpg')}}" class="gallery">
                                                            <img src="{{asset('build/assets/img/gallery/4.jpg')}}" alt="image" class="w-full" >
                                                            <div class="image-overlay">
                                                                <h5 class="image-caption">Image-4</h5>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-1 -->

                            <!-- Start::row-2 -->
                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Image With Description</h5>
                                        </div>
                                        <div class="box-body">
                                            <div class="sm:grid grid-cols-12 gap-6 sm:space-y-0 space-y-6">
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="inner">
                                                        <a href="{{asset('build/assets/img/gallery/2.jpg')}}"   class="gallery2"
                                                    data-glightbox='title:Description Bottom; description: Duis quis ipsum vehicula eros ultrices lacinia. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae'>
                                                            <img src="{{asset('build/assets/img/gallery/2.jpg')}}" alt="image" class="w-full" >
                                                            <div class="image-overlay">
                                                                <h5 class="image-caption">Image-5</h5>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="inner">
                                                        <a href="{{asset('build/assets/img/gallery/3.jpg')}}"   class="gallery2"
                                                    data-glightbox='title:Description Bottom; description: Duis quis ipsum vehicula eros ultrices lacinia. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae'>
                                                            <img src="{{asset('build/assets/img/gallery/3.jpg')}}" alt="image" class="w-full" >
                                                            <div class="image-overlay">
                                                                <h5 class="image-caption">Image-6</h5>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="inner">
                                                        <a href="{{asset('build/assets/img/gallery/7.jpg')}}"   class="gallery2"
                                                    data-glightbox='title:Description Bottom; description: Duis quis ipsum vehicula eros ultrices lacinia. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae'>
                                                            <img src="{{asset('build/assets/img/gallery/7.jpg')}}" alt="image" class="w-full" >
                                                            <div class="image-overlay">
                                                                <h5 class="image-caption">Image-7</h5>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="inner">
                                                        <a href="{{asset('build/assets/img/gallery/8.jpg')}}"   class="gallery2"
                                                    data-glightbox='title:Description Bottom; description: Duis quis ipsum vehicula eros ultrices lacinia. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae'>
                                                            <img src="{{asset('build/assets/img/gallery/8.jpg')}}" alt="image" class="w-full" >
                                                            <div class="image-overlay">
                                                                <h5 class="image-caption">Image-8</h5>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-2 -->

                            <!-- Start::row-3 -->
                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Video Gallery</h5>
                                        </div>
                                        <div class="box-body">
                                            <div class="sm:grid grid-cols-12 gap-6 sm:space-y-0 space-y-6">
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="inner">
                                                        <a href="{{asset('build/assets/img/video/gallery-video-1.mp4')}}" class="gallery3">
                                                            <img src="{{asset('build/assets/img/gallery/10.jpg')}}" alt="image" class="w-full" >
                                                            <div class="image-overlay">
                                                                <h5 class="image-caption">Image-9</h5>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="inner">
                                                        <a href="{{asset('build/assets/img/video/gallery-video-1.mp4')}}" class="gallery3">
                                                            <img src="{{asset('build/assets/img/gallery/9.jpg')}}" alt="image" class="w-full" >
                                                            <div class="image-overlay">
                                                                <h5 class="image-caption">Image-10</h5>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="inner">
                                                        <a href="{{asset('build/assets/img/video/gallery-video-1.mp4')}}" class="gallery3">
                                                            <img src="{{asset('build/assets/img/gallery/8.jpg')}}" alt="image" class="w-full" >
                                                            <div class="image-overlay">
                                                                <h5 class="image-caption">Image-11</h5>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="inner">
                                                        <a href="{{asset('build/assets/img/video/gallery-video-1.mp4')}}" class="gallery3">
                                                            <img src="{{asset('build/assets/img/gallery/7.jpg')}}" alt="image" class="w-full" >
                                                            <div class="image-overlay">
                                                                <h5 class="image-caption">Image-12</h5>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-3 -->
                            
                        </div>
                        <!-- Start::main-content -->

                    </div>

@endsection

@section('scripts')

        <!-- GLIGHTBOX JS  -->
        <script src="{{asset('build/assets/libs/glightbox/js/glightbox.min.js')}}"></script>
        @vite('resources/assets/js/gallery.js')


@endsection
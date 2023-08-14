@extends('layouts.master')

@section('styles')
<!-- FLATPICKR CSS -->
<link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">

<!-- COLOR PICKER CSS -->
<link rel="stylesheet" href="{{asset('build/assets/libs/@simonwep/pickr/themes/classic.min.css')}}">
<link rel="stylesheet" href="{{asset('build/assets/libs/@simonwep/pickr/themes/monolith.min.css')}}">
<link rel="stylesheet" href="{{asset('build/assets/libs/@simonwep/pickr/themes/nano.min.css')}}">
@endsection

@section('content')

<div class="content">

    <!-- Start::main-content -->
    <div class="main-content">

        <!-- Page Header -->
        <div class="block justify-between page-header sm:flex">
            <div>
                <h3 class="text-gray-700 hover:text-gray-900 text-2xl font-medium"> Empty Page</h3>
            </div>
            <ol class="flex items-center whitespace-nowrap min-w-0">
                <li class="text-sm">
                    <a class="flex items-center font-semibold text-primary hover:text-primary truncate"
                        href="javascript:void(0);">
                        Pages
                        <i
                            class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 rtl:rotate-180"></i>
                    </a>
                </li>
                <li class="text-sm text-gray-500 hover:text-primary " aria-current="page">
                    Empty Page
                </li>
            </ol>
        </div>
        <!-- Page Header Close -->

        <!-- Start::row-1 -->
        <div class="grid grid-cols-12 gap-6 place-content-center">
            <div class="col-span-12">
                <div class="box">
                    <div class="box-body">
                        <form action="{{route('teachers.store')}}" method="post"
                            class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 grid gird-cols-1 md:grid-cols-2 gap-4">
                            @csrf
                            <div class="form-row mb-4">
                                <div class="">
                                    <label for="name_ar"
                                        class="block text-gray-700 text-sm mb-2">{{trans('Teacher_trans.Name_ar')}}</label>
                                    <input type="text" name="Name_ar" class="form-control ti-form-input"
                                        placeholder="{{trans('Teacher_trans.Name_ar')}}">
                                </div>
                                <div class="">
                                    <label for="name_en"
                                        class="block text-gray-700 text-sm mb-2">{{trans('Teacher_trans.Name_en')}}</label>
                                    <input type="text" name="Name_en" class="form-control ti-form-input"
                                        placeholder="{{trans('Teacher_trans.Name_en')}}">
                                </div>
                            </div>

                            <div class="form-row mb-4">
                                <div class="col">
                                    <label for="specialization_id"
                                        class="block text-gray-700 text-sm mb-2">{{trans('Teacher_trans.specialization')}}</label>
                                    <select class="custom-select ti-form-select" name="Specialization_id">
                                        <option selected disabled>{{trans('Parent_trans.Choose')}}...</option>
                                        @foreach($specializations as $specialization)
                                        <option value="{{$specialization->id}}">{{$specialization->Name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="gender_id"
                                        class="block text-gray-700 text-sm mb-2">{{trans('Teacher_trans.Gender')}}</label>
                                    <select class="custom-select ti-form-select" name="Gender_id">
                                        <option selected disabled>{{trans('Parent_trans.Choose')}}...</option>
                                        @foreach($genders as $gender)
                                        <option value="{{$gender->id}}">{{$gender->Name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                            <div class="form-row mb-4">
                                <div class="col">
                                    <label for="joining_date"
                                        class="block text-gray-700 text-sm mb-2">{{trans('Teacher_trans.Joining_Date')}}</label>
                                    <input type="text" name="Joining_Date"
                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input"
                                        placeholder="{{trans('Teacher_trans.Joining_Date')}}" id="date"
                                        placeholder="Choose date">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="address"
                                    class="block text-gray-700 text-sm mb-2">{{trans('Teacher_trans.Address')}}</label>
                                <textarea class="form-control ti-form-input" name="Address" id="address"
                                    rows="4"></textarea>
                            </div>
                            <div class="col my-2">
                                <label for="address" class="block text-gray-700 text-sm mb-2">Grades</label>
                                <ul class="max-w-sm flex flex-col">
                                    @foreach($grades as $grade)
                                    <li class="ti-list-group bg-white text-gray-800">
                                        <div class="relative flex items-start w-full">
                                            <div class="flex items-center h-5">
                                                <input id="hs-list-group-item-checkbox-1" name="grades[]"
                                                    type="checkbox" class="ti-form-checkbox" value="{{$grade->id}}">
                                            </div>
                                            <label for="hs-list-group-item-checkbox-1"
                                                class="ltr:ml-2.5 rtl:mr-2.5 block w-full text-sm text-gray-600">
                                                {{$grade->Name}}
                                            </label>
                                        </div>
                                    </li>
                                    @endforeach

                                </ul>
                                <div>
                                    <button class="ti-btn ti-btn-primary"
                                        type="submit">{{trans('main_trans.add_teacher')}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End::row-1 -->

    </div>
    <!-- Start::main-content -->

</div>

@endsection

@section('scripts')
<!-- FLATPICKR JS -->
<script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>
@vite('resources/assets/js/flatpickr.js')


<!-- COLOR PICKER JS -->
<script src="{{asset('build/assets/libs/@simonwep/pickr/pickr.es5.min.js')}}"></script>
@vite('resources/assets/js/colorpicker.js')
@endsection
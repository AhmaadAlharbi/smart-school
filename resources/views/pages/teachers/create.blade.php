@extends('layouts.master')

@section('styles')

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
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12">
                <div class="box">
                    <div class="box-body">
                        <form action="{{route('teachers.store')}}" method="post"
                            class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 grid gird-cols-1 md:grid-cols-2 gap-4">
                            @csrf



                            <div class="form-row mb-4">
                                <div class="col">
                                    <label for="name_ar"
                                        class="block text-gray-700 text-sm mb-2">{{trans('Teacher_trans.Name_ar')}}</label>
                                    <input type="text" name="Name_ar" class="form-control ti-form-input"
                                        placeholder="{{trans('Teacher_trans.Name_ar')}}">
                                </div>
                                <div class="col">
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
                                    <input type="date" name="Joining_Date" class="form-control ti-form-input"
                                        placeholder="{{trans('Teacher_trans.Joining_Date')}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="address"
                                    class="block text-gray-700 text-sm mb-2">{{trans('Teacher_trans.Address')}}</label>
                                <textarea class="form-control ti-form-input" name="Address" id="address"
                                    rows="4"></textarea>
                            </div>

                            <button class="ti-btn ti-btn-primary"
                                type="submit">{{trans('main_trans.add_teacher')}}</button </div>
                    </div>
                </div>
            </div>
            <!-- End::row-1 -->

        </div>
        <!-- Start::main-content -->

    </div>

    @endsection

    @section('scripts')

    @endsection
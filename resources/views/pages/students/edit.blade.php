@extends('layouts.master')

@section('styles')
    <!-- FLATPICKR CSS -->
    <link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">

    <!-- COLOR PICKER CSS -->
    <link rel="stylesheet" href="{{asset('build/assets/libs/@simonwep/pickr/themes/classic.min.css')}}">
    <link rel="stylesheet" href="{{asset('build/assets/libs/@simonwep/pickr/themes/monolith.min.css')}}">
    <link rel="stylesheet" href="{{asset('build/assets/libs/@simonwep/pickr/themes/nano.min.css')}}">
    <!-- SWEET ALERT CSS -->
    <link rel="stylesheet" href="{{asset('build/assets/libs/sweetalert2/sweetalert2.min.css')}}">

    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="{{asset('build/assets/libs/animate.css/animate.min.css')}}">
@endsection

@section('content')

    <div class="content">
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                @if(session('success'))
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: '{{trans('messages.Update')}}',
                    showConfirmButton: false,
                    timer: 1500
                });
                @endif
            });
        </script>

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
                            <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 rtl:rotate-180"></i>
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
                            <form method="post" action="{{ route('students.update',$student) }}">
                                @method('PUT')
                                @csrf
                                <div class="grid lg:grid-cols-2 gap-6">
                                    <div class="space-y-2">
                                        <label class="ti-form-label mb-0">{{trans('Students_trans.name_ar')}}</label>
                                        <input type="text" class="firstName my-auto ti-form-input" name="name_ar"
                                               required value="{{$student->getTranslation('name','ar')}}">
                                    </div>
                                    <div class="space-y-2">
                                        <label class="ti-form-label mb-0">{{trans('Students_trans.name_en')}}</label>
                                        <input type="text" class="firstName my-auto ti-form-input " name="name_en"
                                               required value="{{$student->getTranslation('name','en')}}">
                                    </div>

                                </div>
                                <div class="grid lg:grid-cols-4 gap-6 my-4">
                                    <div class="space-y-2">
                                        <label for="gender">{{trans('Students_trans.gender')}} </label>
                                        <select class="ti-form-select mt-2" name="gender_id">
                                            <option selected disabled>{{trans('Parent_trans.Choose')}}...</option>
                                            @foreach($Genders as $Gender)
                                                <option value="{{$Gender->id}}" {{$Gender->id == $student->gender_id ? 'selected' :
                                        ""}}>{{ $Gender->Name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="">
                                        <label for="gender">{{trans('Students_trans.Nationality')}} </label>
                                        <select class="ti-form-select mt-2" data-trigger name="nationalitie_id"
                                                id="form-choice-select">
                                            <option selected>{{trans('Parent_trans.Choose')}}...</option>
                                            @foreach($nationals as $nal)
                                                <option value="{{ $nal->id }}" {{$nal->id == $student->nationalitie_id ? 'selected'
                                        : ""}}>{{ $nal->Name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="">
                                        <label for="bg_id">{{trans('Students_trans.blood_type')}} : </label>
                                        <select class="ti-form-select mt-2" name="blood_id">
                                            <option selected disabled>{{trans('Parent_trans.Choose')}}...</option>
                                            @foreach($bloods as $bg)
                                                <option value="{{ $bg->id }}" {{$bg->id == $student->blood_id ? 'selected' :
                                        ""}}>{{ $bg->Name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="">
                                        <label>{{trans('Students_trans.Date_of_Birth')}} :</label>

                                        <input type="text" name="Date_Birth"
                                               class="ti-form-input rounded-l-none mt-2 focus:z-10 flatpickr-input"
                                               id="date" placeholder="Choose date" value="{{$student->Date_Birth}}">
                                    </div>

                                </div>
                                {{--                                <div class="">--}}
                                {{--                                    <h6 class="text-blue-700 font-bold">--}}
                                {{--                                        {{trans('Students_trans.Student_information')}}</h6><br>--}}
                                {{--                                </div>--}}
                                <div class="grid lg:grid-cols-5 gap-6">
                                    <div class="space-y-4">
                                        <label for="Grade_id">{{trans('Students_trans.Grade')}}</label>

                                        <select class="ti-form-select" name="Grade_id"
                                                onchange="fetchClasses(this.value)">
                                            <option selected disabled>{{trans('Parent_trans.Choose')}}...</option>
                                            @foreach($Grades as $Grade)
                                                <option value="{{ $Grade->id }}" {{$Grade->id == $student->Grade_id ? 'selected' :
                                        ""}}>{{ $Grade->Name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="space-y-4">
                                        <label>{{trans('Students_trans.classrooms')}}
                                        </label>
                                        <select class="ti-form-select" name="Classroom_id"
                                                onchange="fetchSections(this.value)">
                                            <option
                                                value="{{$student->Classroom_id}}">{{$student->classroom->Name_Class}}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="space-y-4">
                                        <label for="section_id">{{trans('Students_trans.section')}} : </label>
                                        <select class="ti-form-select" name="section_id">
                                            <option
                                                value="{{$student->section_id}}"> {{$student->section->Name_Section}}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="space-y-4">
                                        <label for="section_id">  {{trans('Students_trans.parent')}} </label>
                                        <select class="ti-form-select" name="parent_id">
                                            <option selected disabled>{{trans('Parent_trans.Choose')}}...</option>
                                            @foreach($parents as $parent)
                                                <option value="{{ $parent->id }}" {{ $parent->id == $student->parent_id ?
                                        'selected' : ""}}>{{ $parent->Name_Father }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                    <div class="space-y-4">
                                        <label for="academic_year">{{trans('Students_trans.academic_year')}}
                                        </label>
                                        <select class="ti-form-select" name="academic_year">
                                            @php
                                                $current_year = date("Y");
                                            @endphp
                                            @for($year=$current_year; $year<=$current_year +1 ;$year++)
                                                <option
                                                    value="{{ $year}}" {{$year==$student->academic_year ? 'selected' : ' '}}>{{
                                        $year }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>

                                <div class="space-y-4">
                                    <label for="academic_year">{{trans('Students_trans.Attachments')}} : <span
                                            class="text-danger">*</span></label>


                                    <input type="file" name="file-input" id="file-input" class="block w-full border border-gray-200 focus:shadow-sm rounded-sm text-sm focus:z-10 focus:outline-0 focus:border-gray-200
                                                file:border-0
                                                file:bg-gray-100 ltr:file:mr-4 rtl:file:ml-4
                                                file:py-3 file:px-4
                                               " accept="image/*" name="photos[]" multiple>
                                </div>
                                <button class="ti-btn ti-btn-primary mt-4"
                                        type="submit">{{trans('Students_trans.submit')}}</button>
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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var gradeSelect = document.querySelector('select[name="Grade_id"]');
            var classSelect = document.querySelector('select[name="Classroom_id"]');
            var sectionSelect = document.querySelector('select[name="section_id"]');

            function fetchClasses(gradeId) {
                var url = "{{ URL::to('classes') }}/" + gradeId;

                fetch(url)
                    .then(function (response) {
                        if (!response.ok) {
                            throw new Error('AJAX load did not work');
                        }
                        return response.json();
                    })
                    .then(function (data) {
                        classSelect.innerHTML = '';
                        for (var key in data) {
                            if (data.hasOwnProperty(key)) {
                                var option = document.createElement('option');
                                option.value = key;
                                option.textContent = data[key];
                                classSelect.appendChild(option);
                            }
                        }
                        fetchSections(classSelect.value);

                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            }

            function fetchSections(classroomId) {
                if (classroomId) {
                    var xhr = new XMLHttpRequest();
                    xhr.open('GET', "{{ URL::to('Get_Sections') }}/" + classroomId, true);
                    xhr.setRequestHeader('Content-Type', 'application/json');

                    xhr.onload = function () {
                        if (xhr.status === 200) {
                            var response = JSON.parse(xhr.responseText);
                            sectionSelect.innerHTML = '';

                            for (var key in response) {
                                if (response.hasOwnProperty(key)) {
                                    var option = document.createElement('option');
                                    option.value = key;
                                    option.textContent = response[key];
                                    sectionSelect.appendChild(option);
                                }
                            }
                        }
                    };

                    xhr.onerror = function () {
                        console.log('AJAX load did not work');
                    };

                    xhr.send();
                } else {
                    console.log('AJAX load did not work');
                }
            }

            gradeSelect.addEventListener('change', function () {
                var gradeId = this.value;
                fetchClasses(gradeId);
                fetchSections('');
            });

            classSelect.addEventListener('change', function () {
                var classroomId = this.value;
                fetchSections(classroomId);
            });
        });
    </script>

    <!-- FLATPICKR JS -->
    <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>
    @vite('resources/assets/js/flatpickr.js')
    <!-- SWEETALERT JS -->
    <script src="{{asset('build/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
    @vite('resources/assets/js/swetalert.js')
@endsection

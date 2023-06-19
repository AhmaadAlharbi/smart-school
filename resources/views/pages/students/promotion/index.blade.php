@extends('layouts.master')

@section('styles')

@endsection

@section('content')

    <div class="content">
        @if (Session::has('error_promotions'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{Session::get('error_promotions')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <!-- Start::main-content -->
        <div class="main-content">

            <!-- Page Header -->
            <div class="block justify-between page-header sm:flex">
                <div>
                    <h3 class="text-gray-700 hover:text-gray-900 text-2xl font-medium"> Empty Page</h3>
                </div>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-sm">
                        <a class="flex items-center font-semibold text-primary hover:text-primary truncate" href="javascript:void(0);">
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
                            <form method="post" action="{{ route('promotion.store') }}">
                                @csrf
                                <div class="grid grid-cols-4 gap-4">
                                    <div class="form-group col">
                                        <label for="inputState">{{trans('Students_trans.Grade')}}</label>
                                        <select class="ti-form-select" name="Grade_id" required>
                                            <option selected disabled>{{trans('Parent_trans.Choose')}}...</option>
                                            @foreach($Grades as $Grade)
                                                <option value="{{$Grade->id}}">{{$Grade->Name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col">
                                        <label for="Classroom_id">{{trans('Students_trans.classrooms')}} : <span
                                                class="text-danger">*</span></label>
                                        <select class="ti-form-select" name="Classroom_id" required>

                                        </select>
                                    </div>

                                    <div class="form-group col">
                                        <label for="section_id">{{trans('Students_trans.section')}} : </label>
                                        <select class="ti-form-select" name="section_id" required>

                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="academic_year">{{trans('Students_trans.academic_year')}} : <span
                                                    class="text-danger">*</span></label>
                                            <select class="ti-form-select" name="academic_year">
                                                <option selected disabled>{{ trans('Parent_trans.Choose') }}...</option>
                                                @php
                                                    $current_year = date('Y');
                                                    $next_year = $current_year + 1;
                                                @endphp
                                                <option value="{{ $current_year }}/{{ $next_year }}">{{ $current_year }}/{{ $next_year }}</option>
                                                <option value="{{ $next_year }}/{{ $next_year + 1 }}">{{ $next_year }}/{{ $next_year + 1 }}</option>
                                            </select>

                                        </div>
                                    </div>



                                </div>
                                <br>
                                <h6 style="color: red;font-family: Cairo">المرحلة الدراسية الجديدة</h6><br>

                                <div class="grid grid-cols-4 gap-4">
                                    <div class="form-group col">
                                        <label for="inputState">{{trans('Students_trans.Grade')}}</label>
                                        <select class="ti-form-select" name="Grade_id_new">
                                            <option selected disabled>{{trans('Parent_trans.Choose')}}...</option>
                                            @foreach($Grades as $Grade)
                                                <option value="{{$Grade->id}}">{{$Grade->Name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col">
                                        <label for="Classroom_id">{{trans('Students_trans.classrooms')}}: <span
                                                class="text-danger">*</span></label>
                                        <select class="ti-form-select" name="Classroom_id_new">

                                        </select>
                                    </div>
                                    <div class="form-group col">
                                        <label for="section_id">:{{trans('Students_trans.section')}} </label>
                                        <select class="ti-form-select" name="section_id_new">

                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="academic_year">{{trans('Students_trans.academic_year')}} : <span
                                                    class="text-danger">*</span></label>
                                            <select class="ti-form-select" name="academic_year_new">
                                                <option selected disabled>{{ trans('Parent_trans.Choose') }}...</option>
                                                @php
                                                    $current_year = date('Y');
                                                    $next_year = $current_year + 1;
                                                @endphp
                                                <option value="{{ $current_year }}/{{ $next_year }}">{{ $current_year }}/{{ $next_year }}</option>
                                                <option value="{{ $next_year }}/{{ $next_year + 1 }}">{{ $next_year }}/{{ $next_year + 1 }}</option>
                                            </select>
                                        </div>
                                    </div>


                                </div>
                                <button type="submit"
                                        class="ti-btn ti-btn-primary mt-5">
                                    Primary
                                </button>
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
    @section('scripts')

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var gradeSelect = document.querySelector('select[name="Grade_id"]');
                var classSelect = document.querySelector('select[name="Classroom_id"]');
                var sectionSelect = document.querySelector('select[name="section_id"]');

                gradeSelect.addEventListener('change', function () {
                    var gradeId = this.value;
                    if (gradeId) {
                        var classesUrl = "{{ URL::to('classes') }}/" + gradeId;
                        fetch(classesUrl)
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
                                // Trigger change event for class selection
                                var event = new Event('change');
                                classSelect.dispatchEvent(event);
                            })
                            .catch(function (error) {
                                console.log(error);
                            });
                    } else {
                        classSelect.innerHTML = '';
                        sectionSelect.innerHTML = '';
                        console.log('AJAX load did not work');
                    }
                });

                classSelect.addEventListener('change', function () {
                    var classId = this.value;
                    if (classId) {
                        var sectionsUrl = "{{ URL::to('Get_Sections') }}/" + classId;
                        fetch(sectionsUrl)
                            .then(function (response) {
                                if (!response.ok) {
                                    throw new Error('AJAX load did not work');
                                }
                                return response.json();
                            })
                            .then(function (data) {
                                sectionSelect.innerHTML = '';
                                for (var key in data) {
                                    if (data.hasOwnProperty(key)) {
                                        var option = document.createElement('option');
                                        option.value = key;
                                        option.textContent = data[key];
                                        sectionSelect.appendChild(option);
                                    }
                                }
                            })
                            .catch(function (error) {
                                console.log(error);
                            });
                    } else {
                        sectionSelect.innerHTML = '';
                        console.log('AJAX load did not work');
                    }
                });
            });
        </script>
        <script>
            //new year
            document.addEventListener('DOMContentLoaded', function () {
                var gradeSelect = document.querySelector('select[name="Grade_id_new"]');
                var classSelect = document.querySelector('select[name="Classroom_id_new"]');
                var sectionSelect = document.querySelector('select[name="section_id_new"]');

                gradeSelect.addEventListener('change', function () {
                    var gradeId = this.value;
                    if (gradeId) {
                        var classesUrl = "{{ URL::to('classes') }}/" + gradeId;
                        fetch(classesUrl)
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
                                // Trigger change event for class selection
                                var event = new Event('change');
                                classSelect.dispatchEvent(event);
                            })
                            .catch(function (error) {
                                console.log(error);
                            });
                    } else {
                        classSelect.innerHTML = '';
                        sectionSelect.innerHTML = '';
                        console.log('AJAX load did not work');
                    }
                });

                classSelect.addEventListener('change', function () {
                    var classId = this.value;
                    if (classId) {
                        var sectionsUrl = "{{ URL::to('Get_Sections') }}/" + classId;
                        fetch(sectionsUrl)
                            .then(function (response) {
                                if (!response.ok) {
                                    throw new Error('AJAX load did not work');
                                }
                                return response.json();
                            })
                            .then(function (data) {
                                sectionSelect.innerHTML = '';
                                for (var key in data) {
                                    if (data.hasOwnProperty(key)) {
                                        var option = document.createElement('option');
                                        option.value = key;
                                        option.textContent = data[key];
                                        sectionSelect.appendChild(option);
                                    }
                                }
                            })
                            .catch(function (error) {
                                console.log(error);
                            });
                    } else {
                        sectionSelect.innerHTML = '';
                        console.log('AJAX load did not work');
                    }
                });
            });
        </script>

@endsection

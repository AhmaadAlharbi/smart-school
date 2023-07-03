@extends('layouts.master')

@section('styles')

@endsection

@section('content')

<div class="content relative">
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
                        <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary"
                            data-hs-overlay="#hs-focus-management-modal">
                            {{ trans('Sections_trans.add_section') }}
                        </button>

                        <div class="grid grid-cols-12 gap-6">
                            <div class="col-span-12 lg:col-span-3">
                                <div class="box">
                                    <div class="box-body p-0">
                                        <nav class="flex flex-col space-y-3 p-4" aria-label="Tabs" role="tablist"
                                            data-hs-tabs-vertical="true">
                                        </nav>

                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-9">
                                <div class="box">
                                    <div class="box-body">
                                        <div class="box">
                                            <div class="box-header">
                                                <h5 class="box-title">{{$Grades[0]->Name}}</h5>
                                            </div>
                                            <div class="box-body p-0">
                                                <div class="overflow-auto">
                                                    <table class="ti-custom-table ti-custom-table-head">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>{{ trans('Sections_trans.Name_Section') }}
                                                                </th>
                                                                <th>{{ trans('Sections_trans.Name_Class') }}</th>
                                                                <th>{{ trans('Sections_trans.Status') }}</th>
                                                                <th>{{ trans('Sections_trans.Processes') }}</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($sections_first_grade as $section)
                                                            <tr>
                                                                <td class="font-medium">{{$loop->iteration}}</td>
                                                                <td>{{ $section->Name_Section }}</td>
                                                                <td>{{ $section->My_classs->Name_Class }}</td>
                                                                <td>
                                                                    @if ($section->Status === 1)
                                                                    <label class="badge bg-success text-white">{{
                                                                        trans('Sections_trans.Status_Section_AC')
                                                                        }}</label>
                                                                    @else
                                                                    <label class="badge bg-danger text-white">{{
                                                                        trans('Sections_trans.Status_Section_No')
                                                                        }}</label>
                                                                    @endif
                                                                </td>
                                                                <td class="text-start font-medium">
                                                                    <a href="{{route('Attendance.show',$section->id)}}"
                                                                        class=" role=" button" aria-pressed="true">قائمة
                                                                        الطلاب</a>

                                                                </td>
                                                            </tr>
                                                            @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End::row-1 -->

    </div>


</div>

@endsection

@section('scripts')

<script>
    document.addEventListener('DOMContentLoaded', function () {
            var gradeSelect = document.querySelector('select[name="Grade_id"]');
            var classSelect = document.querySelector('select[name="Class_id"]');

            gradeSelect.addEventListener('change', function () {
                var gradeId = this.value;
                if (gradeId) {
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
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
                } else {
                    console.log('AJAX load did not work');
                }
            });
        });
</script>

{{-- AJAX way--}}
{{-- <script>
    --}}
    {{--        document.addEventListener('DOMContentLoaded', function() {--}}
    {{--            var gradeSelect = document.querySelector('select[name="Grade_id"]');--}}
    {{--            var classSelect = document.querySelector('select[name="Class_id"]');--}}

    {{--            gradeSelect.addEventListener('change', function() {--}}
    {{--                var gradeId = this.value;--}}
    {{--                if (gradeId) {--}}
    {{--                    var url = "{{ URL::to('classes') }}/" + gradeId;--}}

    {{--                    fetch(url)--}}
    {{--                        .then(function(response) {--}}
    {{--                            if (response.ok) {--}}
    {{--                                return response.json();--}}
    {{--                            } else {--}}
    {{--                                throw new Error('AJAX load did not work');--}}
    {{--                            }--}}
    {{--                        })--}}
    {{--                        .then(function(data) {--}}
    {{--                            classSelect.innerHTML = '';--}}
    {{--                            for (var key in data) {--}}
    {{--                                if (data.hasOwnProperty(key)) {--}}
    {{--                                    var option = document.createElement('option');--}}
    {{--                                    option.value = key;--}}
    {{--                                    option.textContent = data[key];--}}
    {{--                                    classSelect.appendChild(option);--}}
    {{--                                }--}}
    {{--                            }--}}
    {{--                        })--}}
    {{--                        .catch(function(error) {--}}
    {{--                            console.log(error);--}}
    {{--                        });--}}
    {{--                } else {--}}
    {{--                    console.log('AJAX load did not work');--}}
    {{--                }--}}
    {{--            });--}}
    {{--        });--}}
    {{--    
</script>--}}
@endsection
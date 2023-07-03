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
                        <h5 style="font-family: 'Cairo', sans-serif;color: red"> تاريخ اليوم : {{ date('Y-m-d') }}</h5>

                        <form method="post" action="{{ route('Attendance.store') }}">
                            @csrf
                            <table class="ti-custom-table ti-custom-table-head">
                                <thead>
                                    <tr>
                                        <th class="alert-success">#</th>
                                        <th class="alert-success">{{ trans('Students_trans.name') }}</th>
                                        <th class="alert-success">{{ trans('Students_trans.email') }}</th>
                                        <th class="alert-success">{{ trans('Students_trans.gender') }}</th>
                                        <th class="alert-success">{{ trans('Students_trans.Grade') }}</th>
                                        <th class="alert-success">{{ trans('Students_trans.classrooms') }}</th>
                                        <th class="alert-success">{{ trans('Students_trans.section') }}</th>
                                        <th class="alert-success">{{ trans('Students_trans.Processes') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td>{{ $student->gender->Name }}</td>
                                        <td>{{ $student->grade->Name }}</td>
                                        <td>{{ $student->classroom->Name_Class }}</td>
                                        <td>{{ $student->section->Name_Section }}</td>
                                        <td>

                                            @if(isset($student->attendance()->where('attendence_date',date('Y-m-d'))->first()->student_id))

                                            <label class="block text-gray-500 font-semibold sm:border-r sm:pr-4">
                                                <input name="attendences[{{ $student->id }}]" class="ti-form-radio"
                                                    disabled {{ $student->attendance()->first()->attendence_status == 1
                                                ? 'checked'
                                                : ''
                                                }}
                                                class="leading-tight" type="radio" value="presence">
                                                <span class="text-success">حضور</span>
                                            </label>

                                            <label class="ml-4 block text-gray-500 font-semibold">
                                                <input name="attendences[{{ $student->id }}]" class="ti-form-radio"
                                                    disabled {{ $student->attendance()->first()->attendence_status == 0
                                                ? 'checked'
                                                : ''
                                                }}
                                                class="leading-tight" type="radio" value="absent">
                                                <span class="text-danger">غياب</span>
                                            </label>

                                            @else

                                            <label class="block text-gray-500 font-semibold sm:border-r sm:pr-4">
                                                <input name="attendences[{{ $student->id }}]" class="leading-tight"
                                                    type="radio" value="presence">
                                                <span class="text-success">حضور</span>
                                            </label>

                                            <label class="ml-4 block text-gray-500 font-semibold">
                                                <input name="attendences[{{ $student->id }}]" class="leading-tight"
                                                    type="radio" value="absent">
                                                <span class="text-danger">غياب</span>
                                            </label>

                                            @endif

                                            <input type="hidden" name="student_id[]" value="{{ $student->id }}">
                                            <input type="hidden" name="grade_id" value="{{ $student->Grade_id }}">
                                            <input type="hidden" name="classroom_id"
                                                value="{{ $student->Classroom_id }}">
                                            <input type="hidden" name="section_id" value="{{ $student->section_id }}">

                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            <button class="ti-btn ti-btn-primary" type="submit">{{ trans('Students_trans.submit')
                                }}</button>
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

@endsection
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
                            <div class="table-responsive">
                                <table id="datatable" class="ti-custom-table ti-custom-table-head ti-custom-table-hover"
                                    data-page-length="50" style="text-align: center">
                                    <thead>
                                        <tr>
                                            <th class="text-info">#</th>
                                            <th class="text-info">{{ trans('Students_trans.name') }}</th>
                                            <th class="text-danger">المرحلة الدراسية السابقة</th>
                                            <th class="text-danger">السنة الدراسية</th>
                                            <th class="text-danger">الصف الدراسي السابق</th>
                                            <th class="text-danger">القسم الدراسي السابق</th>
                                            <th class="text-success">المرحلة الدراسية الحالي</th>
                                            <th class="text-success">السنة الدراسية الحالية</th>
                                            <th class="text-success">الصف الدراسي الحالي</th>
                                            <th class="text-success">القسم الدراسي الحالي</th>
                                            <th>{{ trans('Students_trans.Processes') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($promotions as $promotion)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>{{ $promotion->student->name }}</td>
                                                <td>{{ $promotion->f_grade->Name }}</td>
                                                <td>{{ $promotion->academic_year }}</td>
                                                <td>{{ $promotion->f_classroom->Name_Class }}</td>
                                                <td>{{ $promotion->f_section->Name_Section }}</td>
                                                <td>{{ $promotion->t_grade->Name }}</td>
                                                <td>{{ $promotion->academic_year_new }}</td>
                                                <td>{{ $promotion->t_classroom->Name_Class }}</td>
                                                <td>{{ $promotion->t_section->Name_Section }}</td>
                                                <td>

                                                    <button type="button" class="btn btn-outline-danger"
                                                        data-toggle="modal"
                                                        data-target="#Delete_one{{ $promotion->id }}">ارجاع الطالب</button>
                                                    <button type="button" class="btn btn-outline-success"
                                                        data-toggle="modal" data-target="#">تخرج الطالب</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                </table>
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

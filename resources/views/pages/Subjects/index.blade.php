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
                        <a href="{{route('subjects.create')}}" class="ti-btn ti-btn-primary">add</a>
                        <table class="ti-custom-table ti-custom-table-head ti-striped-table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>اسم المادة</th>
                                    <th>التخصص</th>
                                    <th>العمليات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($subjects as $subject)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$subject->name}}</td>
                                    <td>{{$subject->department->Name}}</td>
                                    <td>
                                    <td class="text-end font-medium">
                                        <a href="{{route('subjects.grades',$subject->id)}}"
                                            class="ti-btn rounded-full ti-btn-ghost-primary">
                                            teachers</a>
                                        <a href="{{route('subjects.edit',$subject->id)}}" class="btn btn-info btn-sm"
                                            role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                            data-target="#delete_subject{{ $subject->id }}" title="حذف"><i
                                                class="fa fa-trash"></i></button>
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
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
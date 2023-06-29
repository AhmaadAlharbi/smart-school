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
                            @if ($errors->any())
                                <div class="bg-danger/10 border border-danger/10 alert text-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('receipt_students.update', 'test') }}" method="post" autocomplete="off">
                                @method('PUT')
                                @csrf
                                <div class="grid grid-cols-1  gap-6">
                                    <div class="col-span-1">
                                        <label class="mb-1">المبلغ: <span class="text-red-500">*</span></label>
                                        <input class="ti-form-input" name="Debit" value="{{ $receipt_student->Debit }}"
                                            type="number">
                                        <input type="hidden" name="student_id" value="{{ $receipt_student->student->id }}"
                                            class="ti-form-input">
                                        <input type="hidden" name="id" value="{{ $receipt_student->id }}"
                                            class="ti-form-input">
                                    </div>
                                    <div class="col-span-1">
                                        <label class="mb-1">البيان: <span class="text-red-500">*</span></label>
                                        <textarea class="ti-form-input" name="description" id="exampleFormControlTextarea1" rows="3">{{ $receipt_student->description }}</textarea>
                                    </div>
                                </div>
                                <button class="ti-btn ti-btn-success ti-btn-sm ti-btn-lg float-right mt-4"
                                    type="submit">{{ trans('Students_trans.submit') }}</button>
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

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
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form method="post" action="{{ route('Payment_students.store') }}" autocomplete="off">
                                @csrf
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label class="text-lg text-red-500">المبلغ : <span
                                                class="text-red-500">*</span></label>
                                        <input class="border border-gray-300 rounded-md p-2 ti-form-input" name="Debit"
                                            type="number">
                                        <input type="hidden" name="student_id" value="{{ $student->id }}"
                                            class="border border-gray-300 rounded-md p-2">
                                    </div>
                                    <div>
                                        <label class="text-lg text-gray-800">رصيد الطالب :</label>
                                        <input class="border border-gray-300 rounded-md p-2 ti-form-input"
                                            name="final_balance"
                                            value="{{ number_format($student->student_account->sum('Debit') - $student->student_account->sum('credit'), 2) }}"
                                            type="text" readonly>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <label class="text-lg text-red-500">البيان : <span class="text-red-500">*</span></label>
                                    <textarea class="border border-gray-300 rounded-md p-2 ti-form-input" name="description"
                                        id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>

                                <button class="bg-green-500 text-white rounded-md px-4 py-2 mt-4"
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

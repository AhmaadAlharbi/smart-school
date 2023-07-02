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
                                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                                    role="alert">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ route('Payment_students.update', 'test') }}" method="post" autocomplete="off">
                                @method('PUT')
                                @csrf

                                <div class="flex flex-col space-y-4">
                                    <div>
                                        <label class="text-red-500">المبلغ : <span class="text-red-500">*</span></label>
                                        <input class="border border-gray-300 rounded-md p-2 ti-form-input" name="Debit"
                                            value="{{ $payment_student->amount }}" type="number">
                                        <input type="hidden" name="student_id" value="{{ $payment_student->student->id }}"
                                            class="border border-gray-300 rounded-md p-2">
                                        <input type="hidden" name="id" value="{{ $payment_student->id }}"
                                            class="border border-gray-300 rounded-md p-2">
                                    </div>

                                    <div>
                                        <label>البيان : <span class="text-red-500">*</span></label>
                                        <textarea class="border border-gray-300 rounded-md p-2 ti-form-input" name="description"
                                            id="exampleFormControlTextarea1" rows="3">{{ $payment_student->description }}</textarea>
                                    </div>

                                    <button class="bg-green-500 text-white rounded-md px-4 py-2"
                                        type="submit">{{ trans('Students_trans.submit') }}</button>
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
@endsection

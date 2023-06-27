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
                        <form action="{{ route('Fees_Invoices.update', 'test') }}" method="post" autocomplete="off">
                            @method('PUT')
                            @csrf
                            <div class="flex flex-wrap -mx-2">
                                <div class="w-full md:w-1/2 px-2 mb-4">
                                    <label for="inputEmail4" class="block mb-1">اسم الطالب</label>
                                    <input type="text" value="{{ $fee_invoices->student->name }}" readonly
                                        name="title_ar"
                                        class="ti-form-input  opacity-50 cursor-not-allowed bg-gray-200 ">
                                    <input type="hidden" value="{{ $fee_invoices->id }}" name="id" readonly
                                        class="ti-form-input">
                                </div>
                                <div class="w-full md:w-1/2 px-2 mb-4">
                                    <label for="inputEmail4" class="block mb-1">المبلغ</label>
                                    <input type="number" value="{{ $fee_invoices->amount }}" name="amount"
                                        class="ti-form-input">
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-2">
                                <div class="w-full px-2 mb-4">
                                    <label for="inputZip" class="block mb-1">نوع الرسوم</label>
                                    <select class="custom-select  ti-form-select" name="fee_id">
                                        @foreach($fees as $fee)
                                        <option value="{{ $fee->id }}" {{ $fee->id == $fee_invoices->fee_id ? 'selected'
                                            : '' }}>
                                            {{ $fee->title }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-4 -mx-2">
                                <label for="inputAddress" class="block mb-1">ملاحظات</label>
                                <textarea class=" ti-form-input" name="description" id="exampleFormControlTextarea1"
                                    rows="4">{{ $fee_invoices->description }}</textarea>
                            </div>
                            <br>
                            <button type="submit" class="ti-btn ti-btn-primary">تاكيد</button>
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
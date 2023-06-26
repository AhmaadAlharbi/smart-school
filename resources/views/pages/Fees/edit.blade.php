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
                        <form action="{{ route('fees.update',$fee->id) }}" method="post" autocomplete="off">
                            @method('PUT')
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div class="mb-4">
                                    <label for="title_ar" class="block">الاسم باللغة العربية</label>
                                    <input type="text" value="{{ $fee->getTranslation('title', 'ar') }}" name="title_ar"
                                        class="ti-form-input">
                                    <input type="hidden" value="{{ $fee->id }}" name="id" class="ti-form-input">
                                </div>

                                <div class="mb-4">
                                    <label for="title_en" class="block">الاسم باللغة الانجليزية</label>
                                    <input type="text" value="{{ $fee->getTranslation('title', 'en') }}" name="title_en"
                                        class="ti-form-input">
                                </div>

                                <div class="mb-4">
                                    <label for="amount" class="block">المبلغ</label>
                                    <input type="number" value="{{ $fee->amount }}" name="amount" class="ti-form-input">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                                <div class="mb-4">
                                    <label for="Grade_id" class="block">المرحلة الدراسية</label>
                                    <select class="ti-form-select" name="Grade_id">
                                        @foreach($Grades as $Grade)
                                        <option value="{{ $Grade->id }}" {{ $Grade->id == $fee->Grade_id ? 'selected' :
                                            '' }}>{{ $Grade->Name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label for="Classroom_id" class="block">الصف الدراسي</label>
                                    <select class="ti-form-select" name="Classroom_id">
                                        <option value="{{ $fee->Classroom_id }}">{{ $fee->classroom->Name_Class }}
                                        </option>
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label for="year" class="block">السنة الدراسية</label>
                                    <select class="ti-form-select" name="year">
                                        @php
                                        $current_year = date("Y")
                                        @endphp
                                        @for($year = $current_year; $year <= $current_year + 1; $year++) <option
                                            value="{{ $year }}" {{ $year==$fee->year ? 'selected' : '' }}>{{ $year }}
                                            </option>
                                            @endfor
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="Fee_type" class="block ti-form-label mb-2">نوع الرسوم</label>
                                    <select class="ti-form-select" name="Fee_type">
                                        <option value="{{$fee->Fee_type}}">{{$fee->Fee_type}}</option>
                                        <option value="1">رسوم دراسية</option>
                                        <option value="2">رسوم باص</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="description" class="block">ملاحظات</label>
                                <textarea class="ti-form-input" name="description" id="exampleFormControlTextarea1"
                                    rows="4">{{ $fee->description }}</textarea>
                            </div>
                            <br>

                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">تاكيد</button>
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
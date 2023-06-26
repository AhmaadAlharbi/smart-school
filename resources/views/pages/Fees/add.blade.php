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
                        <form method="post" action="{{ route('fees.store') }}" autocomplete="off">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div class="mb-4">
                                    <label for="title_ar" class="block ti-form-label mb-2">الاسم باللغة العربية</label>
                                    <input type="text" value="{{ old('title_ar') }}" name="title_ar"
                                        class="ti-form-input">
                                </div>
                                <div class="mb-4">
                                    <label for="title_en" class="block ti-form-label mb-2">الاسم باللغة
                                        الانجليزية</label>
                                    <input type="text" value="{{ old('title_en') }}" name="title_en"
                                        class="ti-form-input">
                                </div>
                                <div class="mb-4">
                                    <label for="amount" class="block ti-form-label mb-2">المبلغ</label>
                                    <input type="number" value="{{ old('amount') }}" name="amount"
                                        class="ti-form-input">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                                <div class="mb-4">
                                    <label for="Grade_id" class="block ti-form-label mb-2">المرحلة الدراسية</label>
                                    <select class="ti-form-select" name="Grade_id">
                                        <option selected disabled>{{trans('Parent_trans.Choose')}}...</option>
                                        @foreach($Grades as $Grade)
                                        <option value="{{ $Grade->id }}">{{ $Grade->Name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="Classroom_id" class="block ti-form-label mb-2">الصف الدراسي</label>
                                    <select class="ti-form-select" name="Classroom_id"></select>
                                </div>
                                <div class="mb-4">
                                    <label for="year" class="block ti-form-label mb-2">السنة الدراسية</label>
                                    <select class="ti-form-select" name="year">
                                        <option selected disabled>{{trans('Parent_trans.Choose')}}...</option>
                                        @php
                                        $current_year = date('Y');
                                        $next_year = $current_year + 1;
                                        @endphp
                                        <option value="{{ $current_year }}/{{ $next_year }}">{{ $current_year }}/{{
                                            $next_year }}</option>
                                        <option value="{{ $next_year }}/{{ $next_year + 1 }}">{{ $next_year }}/{{
                                            $next_year + 1 }}</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="Fee_type" class="block ti-form-label mb-2">نوع الرسوم</label>
                                    <select class="ti-form-select" name="Fee_type">
                                        <option value="1">رسوم دراسية</option>
                                        <option value="2">رسوم باص</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="description" class="block ti-form-label mb-2">ملاحظات</label>
                                <textarea class="ti-form-input" name="description" id="exampleFormControlTextarea1"
                                    rows="4"></textarea>
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
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var gradeSelect = document.querySelector('select[name="Grade_id"]');
        var classSelect = document.querySelector('select[name="Classroom_id"]');

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
@endsection
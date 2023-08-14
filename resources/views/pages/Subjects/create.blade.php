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
                        <form action="{{ route('subjects.store') }}" method="post" autocomplete="off">
                            @csrf

                            <div class="grid grid-cols-2 gap-4">
                                <div class="mb-4">
                                    <label for="title" class="block">اسم المادة باللغة العربية</label>
                                    <input type="text" name="Name_ar"
                                        class="ti-form-input border border-gray-300 rounded-md p-2 w-full">
                                </div>
                                <div class="mb-4">
                                    <label for="title" class="block">اسم المادة باللغة الانجليزية</label>
                                    <input type="text" name="Name_en"
                                        class="ti-form-input border border-gray-300 rounded-md p-2 w-full">
                                </div>
                                <div class="mb-4">
                                    <label for="title" class="block mb-1">القسم | Department</label>
                                    <select class="ti-form-select border border-gray-300 rounded-md p-2 w-full"
                                        name="specialization_id">
                                        <option selected disabled>{{ trans('Parent_trans.Choose') }}...</option>
                                        @foreach ($specializations as $specialization)
                                        <option value="{{ $specialization->id }}">{{ $specialization->Name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col my-2">
                                    <label for="address" class="block text-gray-700 text-sm mb-2">Grades</label>
                                    <ul class="max-w-sm flex flex-col">
                                        @foreach($grades as $grade)
                                        <li class="ti-list-group bg-white text-gray-800">
                                            <div class="relative flex items-start w-full">
                                                <div class="flex items-center h-5">
                                                    <input id="hs-list-group-item-checkbox-1" name="grades[]"
                                                        type="checkbox" class="ti-form-checkbox" value="{{$grade->id}}">
                                                </div>
                                                <label for="hs-list-group-item-checkbox-1"
                                                    class="ltr:ml-2.5 rtl:mr-2.5 block w-full text-sm text-gray-600">
                                                    {{$grade->Name}}
                                                </label>
                                            </div>
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>

                            {{-- <div class="grid grid-cols-3 gap-4">
                                <div class="mb-4">
                                    <label for="inputState" class="block">المرحلة الدراسية</label>
                                    <select class="ti-form-select border border-gray-300 rounded-md p-2 w-full"
                                        name="Grade_id">
                                        <option selected disabled>{{ trans('Parent_trans.Choose') }}...</option>
                                        @foreach ($grades as $grade)
                                        <option value="{{ $grade->id }}">{{ $grade->Name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label for="inputState" class="block">الصف الدراسي</label>
                                    <select name="Class_id"
                                        class="ti-form-select border border-gray-300 rounded-md p-2 w-full"></select>
                                </div>

                                <div class="mb-4">
                                    <label for="inputState" class="block">اسم المعلم</label>
                                    <select class="ti-form-select border border-gray-300 rounded-md p-2 w-full"
                                        name="teacher_id">
                                        <option selected disabled>{{ trans('Parent_trans.Choose') }}...</option>
                                        @foreach ($teachers as $teacher)
                                        <option value="{{ $teacher->id }}">{{ $teacher->Name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> --}}

                            <button class="bg-green-500 text-white rounded-md px-4 py-2" type="submit">حفظ
                                البيانات</button>
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
@endsection
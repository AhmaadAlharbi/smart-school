@extends('layouts.master')

@section('styles')
<!-- FLATPICKR CSS -->
<link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">

<!-- COLOR PICKER CSS -->
<link rel="stylesheet" href="{{asset('build/assets/libs/@simonwep/pickr/themes/classic.min.css')}}">
<link rel="stylesheet" href="{{asset('build/assets/libs/@simonwep/pickr/themes/monolith.min.css')}}">
<link rel="stylesheet" href="{{asset('build/assets/libs/@simonwep/pickr/themes/nano.min.css')}}">
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
        <div class="grid grid-cols-12 gap-6 place-content-center">
            <div class="col-span-12">
                <div class="box">
                    <div class="box-body">
                        <form action="{{route('teachers.store')}}" method="post"
                            class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 grid gird-cols-1 md:grid-cols-2 gap-4">
                            @csrf
                            <div class="form-row mb-4">
                                <div class="">
                                    <label for="name_ar"
                                        class="block text-gray-700 text-sm mb-2">{{trans('Teacher_trans.Name_ar')}}</label>
                                    <input type="text" name="Name_ar" class="form-control ti-form-input"
                                        placeholder="{{trans('Teacher_trans.Name_ar')}}">
                                </div>
                                <div class="">
                                    <label for="name_en"
                                        class="block text-gray-700 text-sm mb-2">{{trans('Teacher_trans.Name_en')}}</label>
                                    <input type="text" name="Name_en" class="form-control ti-form-input"
                                        placeholder="{{trans('Teacher_trans.Name_en')}}">
                                </div>
                            </div>

                            <div class="form-row mb-4">
                                <div class="col">
                                    <label for="specialization_id"
                                        class="block text-gray-700 text-sm mb-2">{{trans('Teacher_trans.specialization')}}</label>
                                    <select class="custom-select ti-form-select" name="Specialization_id"
                                        id="specialization_id">
                                        <option selected disabled>{{trans('Parent_trans.Choose')}}...</option>
                                        @foreach($specializations as $specialization)
                                        <option value="{{$specialization->id}}">{{$specialization->Name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="gender_id"
                                        class="block text-gray-700 text-sm mb-2">{{trans('Teacher_trans.Gender')}}</label>
                                    <select class="custom-select ti-form-select" name="Gender_id">
                                        <option selected disabled>{{trans('Parent_trans.Choose')}}...</option>
                                        @foreach($genders as $gender)
                                        <option value="{{$gender->id}}">{{$gender->Name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                            <div class="form-row mb-4">
                                <div class="col">
                                    <label for="joining_date"
                                        class="block text-gray-700 text-sm mb-2">{{trans('Teacher_trans.Joining_Date')}}</label>
                                    <input type="text" name="Joining_Date"
                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input"
                                        placeholder="{{trans('Teacher_trans.Joining_Date')}}" id="date"
                                        placeholder="Choose date">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="address"
                                    class="block text-gray-700 text-sm mb-2">{{trans('Teacher_trans.Address')}}</label>
                                <textarea class="form-control ti-form-input" name="Address" id="address"
                                    rows="4"></textarea>
                            </div>
                            <div class="col">
                                <div class="box-body">
                                    <nav
                                        class="relative z-0 sm:flex border rounded-sm divide-y sm:divide-y-0 sm:divide-x rtl:divide-x-reverse divide-gray-200 overflow-hidden">
                                        <a class="justify-center items-center sm:flex inline-flex w-full sm:w-auto hs-tab-active:border-b-2 hs-tab-active:!border-b-primary hs-tab-active:text-gray-900 group relative min-w-0 flex-1 bg-white py-4 px-4 text-gray-500 hover:text-gray-700 text-sm font-medium text-center overflow-hidden hover:bg-gray-50 focus:z-10 active"
                                            href="javascript:void(0);" id="bar-item-1" data-hs-tab="#bar-1"
                                            aria-controls="bar-1">
                                            Grades | المراحل الدراسية
                                        </a>

                                        <a class="justify-center items-center sm:flex inline-flex w-full sm:w-auto hs-tab-active:border-b-2 hs-tab-active:!border-b-primary hs-tab-active:text-gray-900 group relative min-w-0 flex-1 bg-white py-4 px-4 text-gray-500 hover:text-gray-700 text-sm font-medium text-center overflow-hidden hover:bg-gray-50 focus:z-10"
                                            href="javascript:void(0);" id="bar-item-2" data-hs-tab="#bar-2"
                                            aria-controls="bar-2">
                                            Subjects | المواد
                                        </a>

                                        <a class="justify-center items-center sm:flex inline-flex w-full sm:w-auto hs-tab-active:border-b-2 hs-tab-active:!border-b-primary hs-tab-active:text-gray-900 group relative min-w-0 flex-1 bg-white py-4 px-4 text-gray-500 hover:text-gray-700 text-sm font-medium text-center overflow-hidden hover:bg-gray-50 focus:z-10"
                                            href="javascript:void(0);" id="bar-item-3" data-hs-tab="#bar-3"
                                            aria-controls="bar-3">
                                            الفصول | Classrooms
                                        </a>


                                    </nav>

                                    <div class="mt-3">
                                        <div id="bar-1" role="tabpanel" aria-labelledby="bar-item-1">
                                            <label for="address" class="block text-gray-700 text-sm mb-2">Grades</label>
                                            <ul class="max-w-sm flex flex-col">
                                                @foreach($grades as $grade)
                                                <li class="ti-list-group bg-white text-gray-800">
                                                    <div class="relative flex items-start w-full">
                                                        <div class="flex items-center h-5">
                                                            <input id="hs-list-group-item-checkbox-1" name="grades[]"
                                                                type="checkbox" class="ti-form-checkbox"
                                                                value="{{$grade->id}}">
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
                                        <div id="bar-2" class="hidden" role="tabpanel" aria-labelledby="bar-item-2">
                                            <div class="box-body">
                                                <ul class="max-w-xs flex flex-col" id="subject_list">
                                                    @foreach($subjects as $subject)
                                                    <li class="ti-list-group bg-white text-gray-800 flex items-center">

                                                        <input type="checkbox" name="selected_subjects[]"
                                                            value="{{ $subject->id }}" class="mr-2">

                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>

                                        </div>
                                        <div id="bar-3" class="hidden" role="tabpanel" aria-labelledby="bar-item-3">
                                            <p class="text-gray-500 p-5 border rounded-sm border-gray-200">
                                                Unbelievable healthy snack success stories. 12 facts about safe food
                                                handling tips that will impress your friends. Restaurant weeks by the
                                                numbers. Will mexican food ever rule the world? The 10 best thai
                                                restaurant youtube videos. How restaurant weeks can make you sick. The
                                                complete beginner's guide to cooking healthy food. Unbelievable food
                                                stamp success stories. How whole foods markets are making the world a
                                                better place. 16 things that won't happen in dish reviews.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="ti-btn ti-btn-primary"
                                type="submit">{{trans('main_trans.add_teacher')}}</button>
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
<!-- FLATPICKR JS -->
<script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>
@vite('resources/assets/js/flatpickr.js')


<!-- COLOR PICKER JS -->
<script src="{{asset('build/assets/libs/@simonwep/pickr/pickr.es5.min.js')}}"></script>
@vite('resources/assets/js/colorpicker.js')

{{-- <script>
    document.addEventListener("DOMContentLoaded", function () {
        const specializationSelect = document.getElementById("specialization_id");
        const subjectList = document.getElementById("subject_list");

        specializationSelect.addEventListener("change", function () {
            const selectedSpecialization = specializationSelect.value;

            // Make an AJAX request using the Fetch API to fetch related subjects
            fetch(`/subject/get-department/${selectedSpecialization}`)
                .then(response => response.json())
                .then(data => {
                    subjectList.innerHTML = ""; // Clear existing subjects

                    // Populate subjects with checkboxes based on the response data
                    data.forEach(subject => {
                        const listItem = document.createElement("li");
                        listItem.className = "ti-list-group bg-white text-gray-800 flex items-center";
                        listItem.innerHTML = `
                            <input type="checkbox" name="selected_subjects[]" value="${subject.id}" class="mr-2">
                            ${subject.name}
                        `;
                        subjectList.appendChild(listItem);
                    });
                })
                .catch(error => {
                    console.error("Error fetching subjects:", error);
                });
        });
    });
</script> --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const specializationSelect = document.getElementById("specialization_id");
        const subjectList = document.getElementById("subject_list");

        specializationSelect.addEventListener("change", function () {
            const selectedSpecialization = specializationSelect.value;

            // Make an AJAX request using the Fetch API to fetch related subjects
            fetch(`/subject/get-department/${selectedSpecialization}`)
                .then(response => response.json())
                .then(data => {
                    subjectList.innerHTML = ""; // Clear existing subjects

                    // Get the selected language from the $locale variable
                    const selectedLanguage = "{{ $locale }}";

                    // Populate subjects with checkboxes based on the response data
                    data.forEach(subject => {
                        const listItem = document.createElement("li");
                        listItem.className = "ti-list-group bg-white text-gray-800 flex items-center";
                        
                        // Access the translated subject name based on the selected language
                        const subjectName = subject.name[selectedLanguage];
                        
                        listItem.innerHTML = `
                            <input type="checkbox" name="selected_subjects[]" value="${subject.id}" class="mr-2">
                            ${subjectName}
                        `;
                        subjectList.appendChild(listItem);
                    });
                })
                .catch(error => {
                    console.error("Error fetching subjects:", error);
                });
        });
    });
</script>



@endsection
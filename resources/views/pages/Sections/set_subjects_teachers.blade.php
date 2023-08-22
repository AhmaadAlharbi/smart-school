@extends('layouts.master')

@section('styles')
<!-- SWEET ALERT CSS -->
<link rel="stylesheet" href="{{asset('build/assets/libs/sweetalert2/sweetalert2.min.css')}}">

<!-- ANIMATE CSS -->
<link rel="stylesheet" href="{{asset('build/assets/libs/animate.css/animate.min.css')}}">
<style>
    /* Add this to your CSS file */
    .checkbox-label {
        display: inline-block;
        margin-right: 10px;
    }

    .checkbox-icon {
        display: inline-block;
        width: 14px;
        height: 14px;
        background-color: #ccc;
        border: 1px solid #aaa;
        vertical-align: middle;
    }
</style>
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
                        <div>

                            <form class="grid md:grid-cols-3 lg:grid-cols-4"
                                action="{{ route('submitSectionsAndTeachers', $section->id) }}" method="POST">
                                @csrf
                                @foreach ($subjects as $subject)
                                <div class="box-body">
                                    <div class="flex items-center mb-4">
                                        <input class="mx-1 subject-checkbox" type="checkbox" name="subjects[]"
                                            value="{{ $subject->id }}" id="subject_{{ $subject->id }}" {{
                                            in_array($subject->id, $savedData->pluck('subject_id')->toArray()) ?
                                        'checked' : '' }}>
                                        <label for="subject_{{ $subject->id }}">{{ $subject->name }}</label>
                                    </div>

                                    <div class="teacher-radio-group">
                                        <p>Select a teacher:</p>
                                        @foreach($subject->teachers as $teacher)
                                        <label>
                                            <input type="radio" name="teachers[{{ $subject->id }}]"
                                                value="{{ $teacher->id }}" {{ $savedData->where('subject_id',
                                            $subject->id)->pluck('teacher_id')->contains($teacher->id) ? 'checked' : ''
                                            }}>
                                            {{ $teacher->Name }}
                                        </label><br>
                                        @endforeach
                                    </div>
                                </div>
                                @endforeach
                                <button type="submit">Submit</button>
                            </form>




                        </div>

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
    // Wait for the DOM to be fully loaded
    document.addEventListener("DOMContentLoaded", function () {
        // Get all subject checkboxes and teacher checkboxes
        const subjectCheckboxes = document.querySelectorAll(".subject-checkbox");
        const teacherCheckboxes = document.querySelectorAll(".teacher-checkbox");

        // Add event listeners to subject checkboxes
        subjectCheckboxes.forEach(subjectCheckbox => {
            subjectCheckbox.addEventListener("change", function () {
                // Find the closest container for this subject checkbox
                const container = this.closest(".box-body");
                const teachersInContainer = container.querySelectorAll(".teacher-checkbox");

                if (this.checked) {
                    // Enable teacher checkboxes when a subject is selected
                    teachersInContainer.forEach(teacherCheckbox => {
                        teacherCheckbox.disabled = false;
                    });
                } else {
                    // Disable and uncheck teacher checkboxes when the subject is deselected
                    teachersInContainer.forEach(teacherCheckbox => {
                        teacherCheckbox.disabled = true;
                        teacherCheckbox.checked = false; // Uncheck the teacher checkbox
                    });
                }
            });
        });

        // Add event listeners to teacher checkboxes
        teacherCheckboxes.forEach(teacherCheckbox => {
            teacherCheckbox.addEventListener("change", function () {
                // Get all selected subject checkboxes
                const selectedSubjects = document.querySelectorAll(".subject-checkbox:checked");

                if (selectedSubjects.length === 0) {
                    // Show an error alert if no subject is selected
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Please select a subject first.',
                    });
                    this.checked = false; // Uncheck the teacher checkbox
                }
            });
        });
    });
</script>

@endsection
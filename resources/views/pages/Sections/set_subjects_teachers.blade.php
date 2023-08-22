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

                            {{-- <form class="grid md:grid-cols-3 lg:grid-cols-4"
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
                                        <label class="tr:ml-2 rtl:mr-2 block w-full text-sm text-gray-600">
                                            <input class="ti-form-radio" type="radio"
                                                name="teachers[{{ $subject->id }}]" value="{{ $teacher->id }}" {{
                                                $savedData->where('subject_id',
                                            $subject->id)->pluck('teacher_id')->contains($teacher->id) ? 'checked' : ''
                                            }}>
                                            {{ $teacher->Name }}
                                        </label><br>
                                        @endforeach




                                    </div>
                                </div>
                                @endforeach
                                <button type="submit">Submit</button>
                            </form> --}}

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
                                        <label class="box-title" for="subject_{{ $subject->id }}">{{ $subject->name
                                            }}</label>
                                    </div>

                                    <ul class="flex flex-col">
                                        @foreach($subject->teachers as $teacher)
                                        <li class="ti-list-group bg-white border text-gray-800">
                                            <div class="relative flex items-start w-full">
                                                <div class="flex items-center h-5">
                                                    <input id="hs-list-group-item-radio-{{$teacher->id}}"
                                                        class="ti-form-radio" type="radio"
                                                        name="teachers[{{ $subject->id }}]" value="{{ $teacher->id }}"
                                                        {{ $savedData->where('subject_id',
                                                    $subject->id)->pluck('teacher_id')->contains($teacher->id) ?
                                                    'checked' : ''
                                                    }}>
                                                </div>
                                                <label for="hs-list-group-item-radio-{{$teacher->id}}"
                                                    class="ltr:ml-2 rtl:mr-2 block w-full text-sm text-gray-600">
                                                    {{ $teacher->Name }}
                                                </label>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endforeach
                                <button type="submit" class="ti-btn ti-btn-primary">
                                    submit
                                </button>
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



@endsection
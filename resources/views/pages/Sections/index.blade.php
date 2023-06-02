@extends('layouts.master')

@section('styles')

@endsection

@section('content')

    <div class="content relative">

        @if ($errors->any())
            <div class="absolute top-0 ltr:left-1/2 rtl:right-1/2 ltr:-translate-x-1/2 rtl:translate-x-1/2">
                <div id="dismiss-toast" class="hs-removing:translate-x-5 hs-removing:opacity-0 transition duration-300 ti-toast bg-white" role="alert">
                    <div class="flex  p-4 bg-red-500 ">
                        @foreach ($errors->all() as $error)
                            <ul class="text-white">
                                <li >{{$error}}</li>
                            </ul>
                        @endforeach
                        <div class="ltr:ml-auto rtl:mr-auto text-white">
                            <button type="button" class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-sm text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white text-sm" data-hs-remove-element="#dismiss-toast">
                                <span class="sr-only">Close</span>
                                <svg class="w-3.5 h-3.5" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z" fill="white"/>
                                </svg>

                            </button>
                        </div>
                    </div>
                </div>
            </div>

        @endif
        @if(session()->has('toast'))

        <div class="absolute top-0 ltr:left-1/2 rtl:right-1/2 ltr:-translate-x-1/2 rtl:translate-x-1/2">
            <div id="dismiss-toast" class="hs-removing:translate-x-5 hs-removing:opacity-0 transition duration-300 ti-toast bg-white" role="alert">
                <div class="flex  p-4 bg-green-500 ">
                    <p class="text-sm text-white  ">
                        {{ session('toast.message') }}
                    </p>

                    <div class="ltr:ml-auto rtl:mr-auto text-white">
                        <button type="button" class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-sm text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white text-sm" data-hs-remove-element="#dismiss-toast">
                            <span class="sr-only">Close</span>
                            <svg class="w-3.5 h-3.5" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z" fill="white"/>
                            </svg>

                        </button>
                    </div>
                </div>
            </div>

        </div>

        @endif
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
                            <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 rtl:rotate-180"></i>
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
                            <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary"
                                    data-hs-overlay="#hs-focus-management-modal">
                                {{ trans('Sections_trans.add_section') }}
                            </button>

                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-12 lg:col-span-3">
                                    <div class="box">
                                        <div class="box-body p-0">
                                            <nav class="flex flex-col space-y-3 p-4" aria-label="Tabs" role="tablist"
                                                 data-hs-tabs-vertical="true">
                                                @foreach($Grades as $grade)
                                                    <a href="{{route('sections.grade',$grade->id)}}"
                                                       class="w-full hs-tab-active:border-secondary hs-tab-active:text-white hs-tab-active:bg-secondary text-base leading-none rounded-sm p-3 bg-gray-100 active">
                                                        {{$grade->Name}}
                                                    </a>
                                                @endforeach

                                            </nav>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-9">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="box">
                                                <div class="box-header">
                                                    <h5 class="box-title">{{$Grades[0]->Name}}</h5>
                                                </div>
                                                <div class="box-body p-0">
                                                    <div class="overflow-auto">
                                                        <table class="ti-custom-table ti-custom-table-head">
                                                            <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>{{ trans('Sections_trans.Name_Section') }}
                                                                </th>
                                                                <th>{{ trans('Sections_trans.Name_Class') }}</th>
                                                                <th>{{ trans('Sections_trans.Status') }}</th>
                                                                <th>{{ trans('Sections_trans.Processes') }}</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($sections_first_grade as $section)
                                                                <tr>
                                                                    <td class="font-medium">{{$loop->iteration}}</td>
                                                                    <td>{{ $section->Name_Section }}</td>
                                                                    <td>{{ $section->My_classs->Name_Class }}
                                                                    </td>
                                                                    <td>
                                                                        @if ($section->Status === 1)
                                                                            <label class="badge bg-success text-white">{{
                                                                        trans('Sections_trans.Status_Section_AC')
                                                                        }}</label>
                                                                        @else
                                                                            <label class="badge bg-danger text-white">{{
                                                                        trans('Sections_trans.Status_Section_No')
                                                                        }}</label>
                                                                        @endif

                                                                    </td>
                                                                    <td class="text-start font-medium">


                                                                        <button type="button"
                                                                                class="ti-btn rounded-full ti-btn-ghost-success"
                                                                                data-hs-overlay="#edit{{ $section->id }}"
                                                                                data-target="#edit{{ $section->id }}">

                                                                            {{trans('Grades_trans.Edit')}}
                                                                        </button>
                                                                        <button type="button"
                                                                                data-target="#delete{{ $section->id }}"
                                                                                data-hs-overlay="#delete{{ $section->id }}"

                                                                                class="ti-btn rounded-full ti-btn-ghost-danger">
                                                                            {{trans('Grades_trans.Delete')}}
                                                                        </button>

                                                                    </td>
                                                                </tr>
                                                                {{--edit Section --}}
                                                                <div id="edit{{ $section->id }}"
                                                                     class="hs-overlay hidden ti-modal">
                                                                    <div
                                                                        class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out">
                                                                        <div class="ti-modal-content">
                                                                            <div class="ti-modal-header">
                                                                                <h3 class="ti-modal-title">
                                                                                    {{ trans('Sections_trans.add_section') }}
                                                                                </h3>
                                                                                <button type="button"
                                                                                        class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                        data-hs-overlay="edit{{ $section->id }}">
                                                                                    <span class="sr-only">Close</span>
                                                                                    <svg class="w-3.5 h-3.5" width="8"
                                                                                         height="8" viewBox="0 0 8 8"
                                                                                         fill="none"
                                                                                         xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                            fill="currentColor"/>
                                                                                    </svg>
                                                                                </button>
                                                                            </div>
                                                                            <form
                                                                                action="{{route('sections.update','test')}}"
                                                                                method="post">
                                                                                @method('PATCH')
                                                                                @csrf
                                                                                <div class=" space-x-2 w-full">

                                                                                    <div class="ti-modal-body">
                                                                                        <div class="mb-6">
                                                                                            <input type="text"
                                                                                                   id="input-label"
                                                                                                   name="Name_Section_Ar"
                                                                                                   class="ti-form-input w-full"
                                                                                                   autofocus
                                                                                                   value="{{$section->getTranslation('Name_Section', 'ar') }}">
                                                                                        </div>
                                                                                        <input id="id" type="hidden"
                                                                                               name="id"
                                                                                               class="form-control"
                                                                                               value="{{ $section->id }}">
                                                                                        <div class="mb-6">
                                                                                            <input type="text"
                                                                                                   id="input-label"
                                                                                                   name="Name_Section_En"
                                                                                                   class="ti-form-input"
                                                                                                   value="{{$section->getTranslation('Name_Section', 'en') }}"
                                                                                                   autofocus>
                                                                                        </div>
                                                                                        <div class="mb-6">
                                                                                            <label for="inputName"
                                                                                                   class="ti-form-label">{{
                                            trans('Sections_trans.Name_Grade') }}</label>
                                                                                            <select name="Grade_id1"
                                                                                                    class="ti-form-select"
                                                                                                    onchange="console.log(this.value)">
                                                                                                <option
                                                                                                    value="{{$section->Grade_id}}">{{$section->grades->Name}}</option>
                                                                                                @foreach ($list_Grades as $list_Grade)
                                                                                                    @if($section->Grade_id !== $list_Grade->id)

                                                                                                        <option
                                                                                                            value="{{ $list_Grade->id }}"> {{ $list_Grade->Name }}
                                                                                                        </option>
                                                                                                    @endif
                                                                                                @endforeach
                                                                                            </select>
                                                                                        </div>
                                                                                        <div>

                                                                                            <label for="inputName"
                                                                                                   class="ti-form-label">{{
                                                                                              trans('Sections_trans.Name_Class') }}</label>
                                                                                            <select name="Class_id1"
                                                                                                    class="ti-form-select">
                                                                                                <option
                                                                                                    value="{{$section->Class_id}}">{{$section->My_classs->Name_Class}}</option>
                                                                                            </select>
                                                                                        </div>


                                                                                        <label
                                                                                            class="p-3 mt-5 flex w-full bg-white border border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary">
                                                                                            @if ($section->Status ===1)

                                                                                                <input type="checkbox"
                                                                                                       name="Status"
                                                                                                       class="ti-form-checkbox mt-0.5 pointer-events-none"
                                                                                                       id="hs-checkbox-in-form"
                                                                                                       checked>
                                                                                            @else
                                                                                                <input type="checkbox"
                                                                                                       name="Status"
                                                                                                       class="ti-form-checkbox mt-0.5 pointer-events-none"
                                                                                                       id="hs-checkbox-in-form">

                                                                                            @endif
                                                                                            <span
                                                                                                class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2">{{
                                                                                            trans('Sections_trans.Status')
                                                                                            }}</span>

                                                                                        </label>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="ti-modal-footer">
                                                                                    <button type="button"
                                                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary"
                                                                                            data-hs-overlay="#edit{{ $section->id }}">
                                                                                        {{  trans('Sections_trans.Close')
                                                                                        }}
                                                                                    </button>
                                                                                    <button type="submit"
                                                                                            class="ti-btn ti-btn-primary">
                                                                                        {{
                                                                                trans('Sections_trans.submit')
                                                                                }}
                                                                                    </button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                {{--delete section --}}
                                                                <div id="delete{{ $section->id }}"
                                                                     class="hs-overlay ti-modal hidden">
                                                                    <div class="ti-modal-box">
                                                                        <div class="ti-modal-content">
                                                                            <div class="ti-modal-header">
                                                                                <h3 class="ti-modal-title">
                                                                                    Modal title
                                                                                </h3>
                                                                                <button type="button"
                                                                                        class="hs-dropdown-toggle ti-modal-clode-btn"
                                                                                        data-hs-overlay="#delete{{ $section->id }}">
                                                                                    <span class="sr-only">Close</span>
                                                                                    <svg class="w-3.5 h-3.5" width="8"
                                                                                         height="8" viewBox="0 0 8 8"
                                                                                         fill="none"
                                                                                         xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                            fill="currentColor"/>
                                                                                    </svg>
                                                                                </button>
                                                                            </div>
                                                                            <div class="ti-modal-body">

                                                                                <form action="{{ route('sections.destroy', 'test') }}" method="post">
                                                                                    @method('DELETE')
                                                                                    @csrf
                                                                                    {{ trans('Grades_trans.Warning_Grade') }}
                                                                                    <input id="id" type="hidden" name="id" class="form-control"
                                                                                           value="{{ $section->id }}">

                                                                            </div>
                                                                            <div class="ti-modal-footer">
                                                                                <button type="button"
                                                                                        class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary"
                                                                                        data-hs-overlay="#delete{{ $section->id }}">
                                                                                    {{trans('Grades_trans.Close')}}
                                                                                </button>
                                                                                <button type="submit"
                                                                                        class="ti-btn ti-btn-danger">
                                                                                    {{trans('Grades_trans.Delete')}}
                                                                                </button>
                                                                            </div>
                                                                            </form>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End::row-1 -->

        </div>
        <!-- Start::main-content -->
        <div id="hs-focus-management-modal" class="hs-overlay hidden ti-modal">
            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out">
                <div class="ti-modal-content">
                    <div class="ti-modal-header">
                        <h3 class="ti-modal-title">
                            {{ trans('Sections_trans.add_section') }}
                        </h3>
                        <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                data-hs-overlay="#hs-focus-management-modal">
                            <span class="sr-only">Close</span>
                            <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                    fill="currentColor"/>
                            </svg>
                        </button>
                    </div>
                    <form action="{{route('sections.store')}}" method="post">
                        @method('POST')
                        @csrf
                        <div class=" space-x-2 w-full">

                            <div class="ti-modal-body">
                                <div class="mb-6">
                                    <input type="text" id="input-label" name="Name_Section_Ar"
                                           class="ti-form-input w-full"
                                           placeholder="{{ trans('Sections_trans.Section_name_ar') }}" autofocus value="{{ old('Name_Section_Ar') }}">
                                    @if ($errors->has('Name_Section_Ar'))
                                        <span class="text-red-500 block">{{ $errors->first('Name_Section_Ar') }}</span>
                                    @endif
                                </div>

                                <div class="mb-6">
                                    <input type="text" id="input-label" name="Name_Section_En" class="ti-form-input"
                                           placeholder="{{ trans('Sections_trans.Section_name_en') }}" value="{{ old('Name_Section_En') }}" autofocus>
                                    @if ($errors->has('Name_Section_En'))
                                        <span class="text-red-500 block">{{ $errors->first('Name_Section_En') }}</span>
                                    @endif
                                </div>
                                <div class="mb-6">
                                    <label for="inputName" class="ti-form-label">{{
                                            trans('Sections_trans.Name_Grade') }}</label>
                                    <select name="Grade_id" class="ti-form-select" onchange="console.log(this.value)">
                                        <option value="" selected disabled>{{ trans('Sections_trans.Select_Grade')
                                                }}
                                        @foreach ($list_Grades as $list_Grade)
                                            <option value="{{ $list_Grade->id }}"> {{ $list_Grade->Name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('Grade_id'))
                                        <span class="text-red-500 block">{{ $errors->first('Grade_id') }}</span>
                                    @endif
                                </div>
                                <div>

                                    <label for="inputName" class="ti-form-label">{{
                                            trans('Sections_trans.Name_Class') }}</label>
                                    <select name="Class_id" class="ti-form-select">

                                    </select>
                                    @if ($errors->has('Class_id'))
                                        <span class="text-red-500 block">{{ $errors->first('Class_id') }}</span>
                                    @endif
                                </div>
                            </div>

                        </div>
                        <div class="ti-modal-footer">
                            <button type="button"
                                    class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary"
                                    data-hs-overlay="#hs-focus-management-modal">
                                {{
                                         trans('Grades_trans.Close') }}
                            </button>
                            <button type="submit" class="ti-btn ti-btn-primary">
                                {{ trans('Grades_trans.submit')
                                         }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

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

    {{--    AJAX way--}}
    {{--    <script>--}}
    {{--        document.addEventListener('DOMContentLoaded', function() {--}}
    {{--            var gradeSelect = document.querySelector('select[name="Grade_id"]');--}}
    {{--            var classSelect = document.querySelector('select[name="Class_id"]');--}}

    {{--            gradeSelect.addEventListener('change', function() {--}}
    {{--                var gradeId = this.value;--}}
    {{--                if (gradeId) {--}}
    {{--                    var url = "{{ URL::to('classes') }}/" + gradeId;--}}

    {{--                    fetch(url)--}}
    {{--                        .then(function(response) {--}}
    {{--                            if (response.ok) {--}}
    {{--                                return response.json();--}}
    {{--                            } else {--}}
    {{--                                throw new Error('AJAX load did not work');--}}
    {{--                            }--}}
    {{--                        })--}}
    {{--                        .then(function(data) {--}}
    {{--                            classSelect.innerHTML = '';--}}
    {{--                            for (var key in data) {--}}
    {{--                                if (data.hasOwnProperty(key)) {--}}
    {{--                                    var option = document.createElement('option');--}}
    {{--                                    option.value = key;--}}
    {{--                                    option.textContent = data[key];--}}
    {{--                                    classSelect.appendChild(option);--}}
    {{--                                }--}}
    {{--                            }--}}
    {{--                        })--}}
    {{--                        .catch(function(error) {--}}
    {{--                            console.log(error);--}}
    {{--                        });--}}
    {{--                } else {--}}
    {{--                    console.log('AJAX load did not work');--}}
    {{--                }--}}
    {{--            });--}}
    {{--        });--}}
    {{--    </script>--}}
@endsection

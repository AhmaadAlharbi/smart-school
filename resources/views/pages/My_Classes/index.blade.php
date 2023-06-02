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
                            <div class="box-body">

                                <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary"
                                        data-hs-overlay="#hs-large-modal">
                                    {{ trans('My_Classes_trans.add_class') }}
                                </button>

                                {{--Table --}}
                                <div class="table-bordered rounded-sm ti-custom-table-head">
                                    <div class="py-2 px-3">
                                        <div class="relative max-w-xs">
                                            <label for="hs-table-search1" class="sr-only">Search</label>
                                            <input type="text" name="hs-table-search1" id="hs-table-search1"
                                                   class="p-3 ltr:pl-10 rtl:pr-10 ti-form-input"
                                                   placeholder="Search for items">
                                            <div
                                                class="absolute inset-y-0 ltr:left-0 rtl:right-0 flex items-center pointer-events-none ltr:pl-4 rtl:pr-4">
                                                <svg class="h-3.5 w-3.5 text-gray-400"
                                                     xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                     fill="currentColor" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="overflow-auto">
                                        <table class="ti-custom-table ti-custom-table-head">
                                            <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col" class="py-2 ltr:pr-0 rtl:pl-0">
                                                    <div class="flex items-center h-5">
                                                        <input id="hs-table-search-checkbox-all1" type="checkbox"
                                                               class="ti-form-checkbox">
                                                        <label for="hs-table-search-checkbox-all1" class="sr-only">Checkbox</label>
                                                    </div>
                                                <th>#</th>
                                                <th>{{ trans('My_Classes_trans.Name_class') }}</th>
                                                <th>{{ trans('My_Classes_trans.Name_Grade') }}</th>
                                                <th>{{ trans('My_Classes_trans.Processes') }}</th>
                                            </tr>
                                            </thead>
                                            <tbody class="">
                                            @foreach($My_Classes as $My_Class)
                                                <tr>
                                                    <td class="py-3">
                                                        <div class="flex items-center h-5">
                                                            <input id="hs-table-search-checkbox-1" type="checkbox"
                                                                   class="ti-form-checkbox">
                                                            <label for="hs-table-search-checkbox-1" class="sr-only">Checkbox</label>
                                                        </div>
                                                    </td>

                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $My_Class->Name_Class }}</td>
                                                    <td>{{ $My_Class->Grades->Name }}</td>
                                                    <td class="text-end font-medium">

                                                        <button type="button"
                                                                data-target="#delete{{ $My_Class->id }}"
                                                                data-hs-overlay="#delete{{ $My_Class->id }}"

                                                                class="ti-btn rounded-full ti-btn-ghost-danger">
                                                            {{trans('Grades_trans.Delete')}}
                                                        </button>
                                                        <button type="button"
                                                                class="ti-btn rounded-full ti-btn-ghost-success"
                                                                data-hs-overlay="#edit{{ $My_Class->id }}"
                                                                data-target="#edit{{ $My_Class->id }}">

                                                            {{trans('Grades_trans.Edit')}}
                                                        </button>


                                                    </td>
                                                    {{-- edit modal --}}
                                                    <div id="edit{{ $My_Class->id }}"
                                                         class="hs-overlay ti-modal hidden">
                                                        <div class="ti-modal-box">
                                                            <div class="ti-modal-content">
                                                                <div class="ti-modal-header">
                                                                    <h3 class="ti-modal-title">
                                                                        Modal title
                                                                    </h3>
                                                                    <button type="button"
                                                                            class="hs-dropdown-toggle ti-modal-clode-btn"
                                                                            data-hs-overlay="#edit{{ $My_Class->id }}">
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
                                                                    <form
                                                                        action="{{ route('classrooms.update',$My_Class->id) }}"
                                                                        method="post">
                                                                        @csrf
                                                                        @method('PATCH')
                                                                        <input id="id" type="hidden" name="id"
                                                                               class="form-control"
                                                                               value="{{ $My_Class->id }}">
                                                                        <div class="max-w-sm ">
                                                                            <label
                                                                                for="">{{ trans('Grades_trans.stage_name_ar') }}</label>
                                                                            <input type="text"
                                                                                   class="ti-form-input  my-2 "
                                                                                   value="{{ $My_Class->getTranslation('Name_Class', 'ar') }}"
                                                                                   name="Name">
                                                                            <label
                                                                                for="">{{ trans('Grades_trans.stage_name_en') }}</label>
                                                                            <input type="text"
                                                                                   class="ti-form-input my-2"
                                                                                   value="{{ $My_Class->getTranslation('Name_Class', 'en') }}"
                                                                                   name="Name_en" required>
                                                                            <div>
                                                                                <label for="Name" class="mr-sm-2">{{
                                                    trans('My_Classes_trans.Name_Grade') }}:</label>
                                                                                <select name="Grade_id"
                                                                                        class="ti-form-select">
                                                                                    <option
                                                                                        value="{{$My_Class->Grades->id}}">{{$My_Class->Grades->Name}}</option>
                                                                                    @foreach ($Grades as $Grade)
                                                                                        @if($Grade->id !== $My_Class->Grades->id)
                                                                                            <option
                                                                                                value="{{ $Grade->id }}">{{ $Grade->Name }}</option>
                                                                                        @endif
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>

                                                                        </div>

                                                                </div>
                                                                <div class="ti-modal-footer">
                                                                    <button type="button"
                                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary"
                                                                            data-hs-overlay="#edit{{ $My_Class->id }}">
                                                                        {{trans('Grades_trans.Close')}}
                                                                    </button>
                                                                    <button type="submit"
                                                                            class="ti-btn ti-btn-primary">
                                                                        {{trans('Grades_trans.Edit')}}
                                                                    </button>
                                                                </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{--delete model--}}
                                                    <div id="delete{{ $My_Class->id }}"
                                                         class="hs-overlay ti-modal hidden">
                                                        <div class="ti-modal-box">
                                                            <div class="ti-modal-content">
                                                                <div class="ti-modal-header">
                                                                    <h3 class="ti-modal-title">
                                                                        Modal title
                                                                    </h3>
                                                                    <button type="button"
                                                                            class="hs-dropdown-toggle ti-modal-clode-btn"
                                                                            data-hs-overlay="#delete{{ $My_Class->id }}">
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

                                                                    <form
                                                                        action="{{ route('classrooms.destroy', $My_Class->id) }}"
                                                                        method="post">
                                                                        @method('DELETE')
                                                                        @csrf
                                                                        {{ trans('Grades_trans.Warning_Grade') }}
                                                                        <input id="id" type="hidden" name="id"
                                                                               class="form-control"
                                                                               value="{{ $My_Class->id }}">

                                                                </div>
                                                                <div class="ti-modal-footer">
                                                                    <button type="button"
                                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary"
                                                                            data-hs-overlay="#delete{{ $My_Class->id }}">
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
                                                </tr>
                                            @endforeach
                                            </tbody>

                                        </table>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-1 -->

            </div>
            <!-- Start::main-content -->
            {{-- start modal to add new classroom--}}
            <div id="hs-large-modal" class="hs-overlay hidden ti-modal">
                <div
                    class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 lg:!mx-auto">
                    <div class="ti-modal-content">
                        <div class="ti-modal-header">
                            <h3 class="ti-modal-title">
                                {{ trans('My_Classes_trans.add_class') }}

                            </h3>
                            <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                    data-hs-overlay="#hs-large-modal">
                                <span class="sr-only">Close</span>
                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8"
                                     fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                        fill="currentColor"/>
                                </svg>
                            </button>
                        </div>
                        <div class="ti-modal-body">
                            <form action="{{ route('classrooms.store') }}" method="post">
                                @csrf
                                <div class="flex justify-evenly items-center ">
                                    {{--اسم الصف بالعربية--}}
                                    <div>
                                        <label for="Name">{{
                                                    trans('My_Classes_trans.Name_class') }} <span class="text-red-500 font-bold">*</span></label>
                                        <input type="text" name="Name" class="ti-form-input my-2"  value="{{ old('Name') }}">
                                        @if ($errors->has('Name'))
                                            <span class="text-red-500 block">{{ $errors->first('Name') }}</span>
                                        @endif

                                    </div>
                                    {{--english class name--}}
                                    <div>
                                        <label for="Name" class="mr-sm-2">{{
                                                    trans('My_Classes_trans.Name_class_en') }} <span class="text-red-500 font-bold">*</span></label>
                                        <input type="text" class="ti-form-input my-2" name="Name_class_en" value="{{ old('Name_class_en') }}">
                                        @if ($errors->has('Name_class_en'))
                                            <span class="text-red-500 block">{{ $errors->first('Name_class_en') }}</span>
                                        @endif
                                    </div>
                                    {{--grade  name--}}
                                    <div>
                                        <label for="Name" class="mr-sm-2">{{
                                                    trans('My_Classes_trans.Name_Grade') }}:</label>
                                        <select name="grade_id" class="ti-form-select">
                                            @foreach ($Grades as $Grade)
                                                <option
                                                    value="{{ $Grade->id }}">{{ $Grade->Name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    {{--                                                        opeartions--}}
                                    <div>
                                        <button type="button"
                                                class="ti-btn ti-btn-danger"
                                                onclick="deleteForm(0)">
                                            {{ trans('My_Classes_trans.delete_row') }}
                                        </button>
                                    </div>


                                </div>


                                <div id="form-footer" class="ti-modal-footer">
                                    <button id="add-form-btn" type="button" class="ti-btn ti-btn-dark"
                                            onclick="addForm()">

                                        {{ trans('My_Classes_trans.add_row') }}
                                    </button>
                                    <button type="button"
                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary"
                                            data-hs-overlay="#hs-large-modal">
                                        {{
                            trans('Grades_trans.Close') }}
                                    </button>
                                    <button type="submit"
                                            class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary "
                                    >
                                        {{
                         trans('Grades_trans.submit') }}
                                    </button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
            {{--end modal to add new classroom--}}
        </div>

@endsection

@section('scripts')


@endsection

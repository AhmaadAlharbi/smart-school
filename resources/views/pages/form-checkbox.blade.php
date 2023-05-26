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
                                    <h3 class="text-gray-700 hover:text-gray-900 text-2xl font-medium"> Checkbox</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                    <a class="flex items-center font-semibold text-primary hover:text-primary truncate" href="javascript:void(0);">
                                        Forms
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 rtl:rotate-180"></i>
                                    </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary " aria-current="page">
                                        Checkbox
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->
                            
                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-12 md:col-span-6 xl:!col-span-4">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Default Checkbox</h5>
                                        </div>
                                        <div class="box-body">
                                            <div class="space-y-2">
                                                <div class="flex">
                                                <input type="checkbox" class="ti-form-checkbox mt-0.5 pointer-events-none" id="hs-default-checkbox">
                                                <label for="hs-default-checkbox" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2">Default checkbox</label>
                                                </div>

                                                <div class="flex">
                                                <input type="checkbox" class="ti-form-checkbox mt-0.5 pointer-events-none" id="hs-checked-checkbox" checked>
                                                <label for="hs-checked-checkbox" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2">Checked checkbox</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 md:col-span-6 xl:!col-span-4">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Disabled Checkbox</h5>
                                        </div>
                                        <div class="box-body">
                                            <div class="space-y-2">
                                                <div class="flex opacity-40">
                                                    <input type="checkbox" class="ti-form-checkbox mt-0.5" id="hs-disabled-checkbox" disabled>
                                                    <label for="hs-disabled-checkbox" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2">Disabled checkbox</label>
                                                </div>

                                                <div class="flex opacity-40">
                                                    <input type="checkbox" class="ti-form-checkbox mt-0.5" id="hs-disabled-checked-checkbox" checked disabled>
                                                    <label for="hs-disabled-checked-checkbox" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2">Disabled checked checkbox</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 xl:col-span-4">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Checkbox group</h5>
                                        </div>
                                        <div class="box-body">
                                            <div class="space-y-2">
                                                <div class="flex gap-x-6">
                                                    <div class="flex">
                                                    <input type="checkbox" class="ti-form-checkbox mt-0.5" id="hs-checkbox-group-1">
                                                    <label for="hs-checkbox-group-1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2">Apple</label>
                                                    </div>

                                                    <div class="flex">
                                                    <input type="checkbox" class="ti-form-checkbox mt-0.5" id="hs-checkbox-group-2">
                                                    <label for="hs-checkbox-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2">Pear</label>
                                                    </div>

                                                    <div class="flex">
                                                    <input type="checkbox" class="ti-form-checkbox mt-0.5" id="hs-checkbox-group-3">
                                                    <label for="hs-checkbox-group-3" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2">Orange</label>
                                                    </div>
                                                </div>

                                                <div class="flex gap-x-6">
                                                    <div class="flex">
                                                    <input type="checkbox" class="ti-form-checkbox mt-0.5" id="hs-checkbox-group-4" checked>
                                                    <label for="hs-checkbox-group-4" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2">Apple</label>
                                                    </div>

                                                    <div class="flex">
                                                    <input type="checkbox" class="ti-form-checkbox mt-0.5" id="hs-checkbox-group-5" checked>
                                                    <label for="hs-checkbox-group-5" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2">Pear</label>
                                                    </div>

                                                    <div class="flex">
                                                    <input type="checkbox" class="ti-form-checkbox mt-0.5" id="hs-checkbox-group-6" checked>
                                                    <label for="hs-checkbox-group-6" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2">Orange</label>
                                                    </div>
                                                </div>

                                                <div class="flex gap-x-6">
                                                    <div class="flex opacity-40">
                                                    <input type="checkbox" class="ti-form-checkbox mt-0.5 pointer-events-none" id="hs-checkbox-group-7" checked disabled>
                                                    <label for="hs-checkbox-group-7" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2">Apple</label>
                                                    </div>

                                                    <div class="flex opacity-40">
                                                    <input type="checkbox" class="ti-form-checkbox mt-0.5 pointer-events-none" id="hs-checkbox-group-8" disabled>
                                                    <label for="hs-checkbox-group-8" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2">Pear</label>
                                                    </div>

                                                    <div class="flex opacity-40">
                                                    <input type="checkbox" class="ti-form-checkbox mt-0.5 pointer-events-none" id="hs-checkbox-group-9" disabled>
                                                    <label for="hs-checkbox-group-9" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2">Orange</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-1 -->

                            <!-- Start::row-2 -->
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Checkbox Within Form Input</h5>
                                        </div>
                                        <div class="box-body">
                                            <div class="grid sm:grid-cols-2 gap-2">
                                                <label class="p-3 flex w-full bg-white border border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary">
                                                <input type="checkbox" class="ti-form-checkbox mt-0.5 pointer-events-none" id="hs-checkbox-in-form">
                                                <span class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2">Default checkbox</span>
                                                </label>

                                                <label class="p-3 flex w-full bg-white border border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary">
                                                <input type="checkbox" class="ti-form-checkbox mt-0.5 pointer-events-none" id="hs-checkbox-checked-in-form" checked>
                                                <span class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2">Checked checkbox</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Chexbox With List Group On Right</h5>
                                        </div>
                                        <div class="box-body">
                                        <div class="grid sm:grid-cols-2 gap-2">
                                            <label class="flex p-3 w-full bg-white border border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary">
                                            <span class="text-sm text-gray-500">Default checkbox</span>
                                            <input type="checkbox" class="ti-form-checkbox ltr:ml-auto rtl:mr-auto mt-0.5 pointer-events-none" id="hs-checkbox-on-right">
                                            </label>

                                            <label class="flex p-3 w-full bg-white border border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary">
                                            <span class="text-sm text-gray-500">Checked checkbox</span>
                                            <input type="checkbox" class="ti-form-checkbox ltr:ml-auto rtl:mr-auto mt-0.5 pointer-events-none" id="hs-checkbox-checkbox-on-right" checked>
                                            </label>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Checkbox Within Vertical Form Input</h5>
                                        </div>
                                        <div class="box-body">
                                            <div class="grid space-y-2">
                                                <label class="max-w-xs flex p-3 w-full bg-white border border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary">
                                                <input type="checkbox" class="shrink-0 mt-0.5 border-gray-200 rounded text-primary pointer-events-none focus:ring-primary" id="hs-vertical-checkbox-in-form">
                                                <span class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2">Default checkbox</span>
                                                </label>

                                                <label class="max-w-xs flex p-3 w-full bg-white border border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary">
                                                <input type="checkbox" class="shrink-0 mt-0.5 border-gray-200 rounded text-primary pointer-events-none focus:ring-primary" id="vertical-checkbox-checked-in-form" checked>
                                                <span class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2">Checked checkbox</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">List with Description</h5>
                                        </div>
                                        <div class="box-body">
                                            <div class="grid space-y-3">
                                                <div class="relative flex items-start">
                                                    <div class="flex items-center h-5 mt-1">
                                                    <input id="hs-checkbox-delete" name="hs-checkbox-delete" type="checkbox" class="ti-form-checkbox" aria-describedby="hs-checkbox-delete-description" checked>
                                                    </div>
                                                    <label for="hs-checkbox-delete" class="ltr:ml-2 rtl:mr-2">
                                                    <span class="block text-sm font-semibold text-gray-800">Delete</span>
                                                    <span id="hs-checkbox-delete-description" class="block text-sm text-gray-600">Notify me when this action happens.</span>
                                                    </label>
                                                </div>

                                                <div class="relative flex items-start">
                                                    <div class="flex items-center h-5 mt-1">
                                                    <input id="hs-checkbox-archive" name="hs-checkbox-archive" type="checkbox" class="ti-form-checkbox" aria-describedby="hs-checkbox-archive-description">
                                                    </div>
                                                    <label for="hs-checkbox-archive" class="ltr:ml-2 rtl:mr-2">
                                                    <span class="block text-sm font-semibold text-gray-800">Archive</span>
                                                    <span id="hs-checkbox-archive-description" class="block text-sm text-gray-600">Notify me when this action happens.</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Chexbox With List Group</h5>
                                        </div>
                                        <div class="box-body">
                                            <ul class="max-w-sm flex flex-col">
                                                <li class="ti-list-group bg-white text-gray-800">
                                                <div class="relative flex items-start w-full">
                                                    <div class="flex items-center h-5">
                                                    <input id="hs-list-group-item-checkbox-1" name="hs-list-group-item-checkbox-1" type="checkbox" class="ti-form-checkbox" checked>
                                                    </div>
                                                    <label for="hs-list-group-item-checkbox-1" class="ltr:ml-2.5 rtl:mr-2.5 block w-full text-sm text-gray-600">
                                                    Chris Lynch
                                                    </label>
                                                </div>
                                                </li>

                                                <li class="ti-list-group bg-white text-gray-800">
                                                <div class="relative flex items-start w-full">
                                                    <div class="flex items-center h-5">
                                                    <input id="hs-list-group-item-checkbox-2" name="hs-list-group-item-checkbox-2" type="checkbox" class="ti-form-checkbox">
                                                    </div>
                                                    <label for="hs-list-group-item-checkbox-2" class="ltr:ml-2.5 rtl:mr-2.5 block w-full text-sm text-gray-600">
                                                    Maria Guan
                                                    </label>
                                                </div>
                                                </li>

                                                <li class="ti-list-group bg-white text-gray-800">
                                                <div class="relative flex items-start w-full">
                                                    <div class="flex items-center h-5">
                                                    <input id="hs-list-group-item-checkbox-3" name="hs-list-group-item-checkbox-3" type="checkbox" class="ti-form-checkbox">
                                                    </div>
                                                    <label for="hs-list-group-item-checkbox-3" class="ltr:ml-2.5 rtl:mr-2.5 block w-full text-sm text-gray-600">
                                                    Bob Arum
                                                    </label>
                                                </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Chexbox With Horizontal List Group</h5>
                                        </div>
                                        <div class="box-body">
                                        <ul class="flex flex-col sm:flex-row">
                                            <li class="ti-list-group gap-x-2.5 bg-white border text-gray-800 ltr:sm:-ml-px rtl:sm:-mr-px sm:mt-0 ltr:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:first:rounded-bl-sm rtl:sm:first:rounded-br-sm ltr:sm:last:rounded-bl-none rtl:sm:last-rounded-br-none ltr:sm:last:rounded-tr-sm rtl:sm:last:rounded-tl-sm">
                                            <div class="relative flex items-start w-full">
                                                <div class="flex items-center h-5">
                                                <input id="hs-horizontal-list-group-item-checkbox-1" name="hs-horizontal-list-group-item-checkbox-1" type="checkbox" class="ti-form-checkbox" checked>
                                                </div>
                                                <label for="hs-horizontal-list-group-item-checkbox-1" class="ltr:ml-2.5 rtl:mr-2.5 block w-full text-sm text-gray-600">
                                                Chris Lynch
                                                </label>
                                            </div>
                                            </li>

                                            <li class="ti-list-group gap-x-2.5 bg-white border text-gray-800 ltr:sm:-ml-px rtl:sm:-mr-px sm:mt-0 ltr:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:first:rounded-bl-sm rtl:sm:first:rounded-br-sm ltr:sm:last:rounded-bl-none rtl:sm:last-rounded-br-none ltr:sm:last:rounded-tr-sm rtl:sm:last:rounded-tl-sm">
                                            <div class="relative flex items-start w-full">
                                                <div class="flex items-center h-5">
                                                <input id="hs-horizontal-list-group-item-checkbox-2" name="hs-horizontal-list-group-item-checkbox-2" type="checkbox" class="ti-form-checkbox">
                                                </div>
                                                <label for="hs-horizontal-list-group-item-checkbox-2" class="ltr:ml-2.5 rtl:mr-2.5 block w-full text-sm text-gray-600">
                                                Maria Guan
                                                </label>
                                            </div>
                                            </li>

                                            <li class="ti-list-group gap-x-2.5 bg-white border text-gray-800 ltr:sm:-ml-px rtl:sm:-mr-px sm:mt-0 ltr:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:first:rounded-bl-sm rtl:sm:first:rounded-br-sm ltr:sm:last:rounded-bl-none rtl:sm:last-rounded-br-none ltr:sm:last:rounded-tr-sm rtl:sm:last:rounded-tl-sm">
                                            <div class="relative flex items-start w-full">
                                                <div class="flex items-center h-5">
                                                <input id="hs-horizontal-list-group-item-checkbox-3" name="hs-horizontal-list-group-item-checkbox-3" type="checkbox" class="ti-form-checkbox">
                                                </div>
                                                <label for="hs-horizontal-list-group-item-checkbox-3" class="ltr:ml-2.5 rtl:mr-2.5 block w-full text-sm text-gray-600">
                                                Bob Arum
                                                </label>
                                            </div>
                                            </li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-2 -->

                        </div>
                        <!-- Start::main-content -->

                    </div>

@endsection

@section('scripts')

@endsection
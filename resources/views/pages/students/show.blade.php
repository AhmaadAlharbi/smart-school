@extends('layouts.master')

@section('styles')
    <!-- GLIGHTBOX CSS -->
    <link rel="stylesheet" href="{{ asset('build/assets/libs/glightbox/css/glightbox.min.css') }}">

    <!-- CHOICES CSS -->
    <link rel="stylesheet" href="{{ asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css') }}">
@endsection

@section('content')
    <div class="content relative">

        <div class="flex relative before:bg-black/50 before:absolute before:w-full before:h-full">
            <img src="{{ asset('build/assets/img/png-images/2.png') }}" alt="" class="h-[500px] w-full rounded-sm"
                id="profile-img2">
            <span
                class="absolute top-5 ltr:right-5 rtl:left-5 flex p-3 rounded-sm ring-1 ring-black/10 text-white bg-black/10 leading-none">
                <i class="ri ri-pencil-line ltr:mr-2 rtl:ml-2"></i> <span>Change Profile Pic</span>
                <input type="file" name="photo" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
                    id="profile-change2">
            </span>
        </div>
        <div class="absolute top-28 inset-x-0 text-center space-y-3">
            <div class="flex justify-center w-full">
                <div class="relative cursor-pointer">
                    <img src="{{ asset('build/assets/img/users/1.jpg') }}"
                        class="w-24 h-24 rounded-full ring-4 ring-white/10 mx-auto" id="profile-img" alt="profile-img">
                    <span Information
                        class="absolute bottom-0 ltr:right-0 rtl:left-0 block p-1 rounded-full ring-2 ring-white/10 text-white bg-white/10 leading-none cursor-pointer">
                        <i class="ri ri-pencil-line cursor-pointer"></i>
                        <input type="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
                            id="profile-change">
                    </span>
                </div>
            </div>
            <div class="text-white">
                <h2 class="text-base font-semibold">{{ $student->name }}</h2>
                {{-- <p class="text-xs text-white/50">andersonitumay@abc.com</p> --}}
            </div>


        </div>

        <!-- Start::main-content -->
        <div class="main-content -mt-28">

            <!-- Start::row-1 -->
            <div class="grid grid-cols-12 gap-x-6">

                <div class="col-span-12 xxl:col-span-12">
                    <div class="box">
                        <div class="box-header">
                            <nav class="sm:flex sm:space-x-2 space-y-2 sm:space-y-0 rtl:space-x-reverse block"
                                aria-label="Tabs" role="tablist">
                                <button type="button"
                                    class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white py-2 px-3 inline-flex items-center w-full justify-center gap-2 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 active"
                                    id="profile-item-1" data-hs-tab="#profile-1" aria-controls="profile-1" role="tab">
                                    {{ trans('Students_trans.Student_details') }}
                                </button>
                                <button type="button"
                                    class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white py-2 px-3 inline-flex items-center w-full justify-center gap-2 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700"
                                    id="profile-item-2" data-hs-tab="#profile-2" aria-controls="profile-2" role="tab">
                                    {{ trans('Students_trans.parents_information') }}
                                </button>
                                <button type="button"
                                    class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white py-2 px-3 inline-flex items-center w-full justify-center gap-2 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700"
                                    id="profile-item-3" data-hs-tab="#profile-3" aria-controls="profile-3" role="tab">
                                    {{ trans('Students_trans.Attachments') }}
                                </button>

                            </nav>
                        </div>
                        <div class="box-body">
                            <div id="profile-1" class="" role="tabpanel" aria-labelledby="profile-item-1">
                                <h5 class="box-title mb-3">{{ trans('Students_trans.personal_information') }}</h5>
                                <div class="overflow-auto">
                                    <table class="ti-custom-table border-0 whitespace-nowrap">
                                        <tbody>
                                            <tr class="">
                                                <td class="!p-2 font-medium !text-gray-500">
                                                    {{ trans('Students_trans.name') }}</td>
                                                <td class="!p-2">:</td>
                                                <td class="!p-2 !text-gray-500">{{ $student->name }}</td>
                                            </tr>
                                            <tr class="!border-0">
                                                <td class="!p-2 font-medium !text-gray-500">
                                                    {{ trans('Students_trans.Date_of_Birth') }}</td>
                                                <td class="!p-2">:</td>
                                                <td class="!p-2 !text-gray-500">{{ $student->Date_Birth }}</td>
                                            </tr>
                                            <tr class="!border-0">
                                                <td class="!p-2 font-medium !text-gray-500">
                                                    {{ trans('Students_trans.gender') }}</td>
                                                <td class="!p-2">:</td>
                                                <td class="!p-2 !text-gray-500">{{ $student->Gender->Name }}</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                {{-- <h5 class="box-title my-3">Contact Information</h5>
                                <div class="overflow-auto">
                                    <table class="ti-custom-table border-0 whitespace-nowrap">
                                        <tbody>
                                            <tr class="">
                                                <td class="!p-2 font-medium !text-gray-500">Personal Contact No</td>
                                                <td class="!p-2">:</td>
                                                <td class="!p-2 !text-gray-500">+123(45)-158-90.</td>
                                            </tr>
                                            <tr class="!border-0">
                                                <td class="!p-2 font-medium !text-gray-500">Email Id</td>
                                                <td class="!p-2">:</td>
                                                <td class="!p-2 !text-gray-500">andersonitumay@abc.com</td>
                                            </tr>
                                            <tr class="!border-0">
                                                <td class="!p-2 font-medium !text-gray-500">Address</td>
                                                <td class="!p-2">:</td>
                                                <td class="!p-2 !text-gray-500">andersonitumay@abc.com</td>
                                            </tr>
                                            <tr class="!border-0">
                                                <td class="!p-2 font-medium !text-gray-500">Website link</td>
                                                <td class="!p-2">:</td>
                                                <td class="!p-2 !text-gray-500">www.andersonitumay.com</td>
                                            </tr>
                                            <tr class="!border-0">
                                                <td class="!p-2 font-medium !text-gray-500">Linked in link</td>
                                                <td class="!p-2">:</td>
                                                <td class="!p-2 !text-gray-500">https://in.linkedin.com/andersonitumay
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> --}}
                                <h5 class="box-title my-3">{{ trans('Students_trans.education_information') }}</h5>
                                <div class="overflow-auto">
                                    <table class="ti-custom-table border-0 whitespace-nowrap">
                                        <tbody>
                                            <tr class="">
                                                <td class="!p-2 font-medium !text-gray-500 w-[252px]">
                                                    {{ trans('Students_trans.Grade') }}
                                                </td>
                                                <td class="!p-2">:</td>
                                                <td class="!p-2 !text-gray-500">{{ $student->grade->Name }}</td>
                                            </tr>
                                            <tr class="!border-0">
                                                <td class="!p-2 font-medium !text-gray-500 w-[252px]">
                                                    {{ trans('Students_trans.classrooms') }}</td>
                                                <td class="!p-2">:</td>
                                                <td class="!p-2 !text-gray-500">{{ $student->classroom->Name_Class }}
                                                </td>
                                            </tr>
                                            <tr class="!border-0">
                                                <td class="!p-2 font-medium !text-gray-500 w-[252px]">
                                                    {{ trans('Students_trans.section') }}</td>
                                                <td class="!p-2">:</td>
                                                <td class="!p-2 !text-gray-500">{{ $student->section->Name_Section }}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div id="profile-2" class="hidden" role="tabpanel" aria-labelledby="profile-item-2">
                                <div class="grid lg:grid-cols-2 gap-4 ">

                                    <div class="overflow-auto bg-blue-100 p-5">
                                        <h5 class="box-title mb-3">{{ trans('Parent_trans.Step1') }}</h5>
                                        <table class="ti-custom-table border-0 whitespace-nowrap">
                                            <tbody>
                                                <tr class="">
                                                    <td class="!p-2 font-medium !text-gray-500">
                                                        {{ trans('Parent_trans.Father_Name') }}</td>
                                                    <td class="!p-2">:</td>
                                                    <td class="!p-2 !text-gray-500">{{ $student->myparent->Name_Father }}
                                                    </td>
                                                </tr>
                                                <tr class="!border-0">
                                                    <td class="!p-2 font-medium !text-gray-500">
                                                        {{ trans('Parent_trans.National_ID_Father') }}</td>
                                                    <td class="!p-2">:</td>
                                                    <td class="!p-2 !text-gray-500">
                                                        {{ $student->myparent->National_ID_Father }}</td>
                                                </tr>
                                                <tr class="!border-0">
                                                    <td class="!p-2 font-medium !text-gray-500">
                                                        {{ trans('Parent_trans.Passport_ID_Father') }}</td>
                                                    <td class="!p-2">:</td>
                                                    <td class="!p-2 !text-gray-500">
                                                        {{ $student->myparent->Passport_ID_Father }}</td>
                                                </tr>
                                                <tr class="!border-0">
                                                    <td class="!p-2 font-medium !text-gray-500">
                                                        {{ trans('Parent_trans.Phone_Father') }}</td>
                                                    <td class="!p-2">:</td>
                                                    <td class="!p-2 !text-gray-500">
                                                        {{ $student->myparent->Phone_Father }}</td>
                                                </tr>
                                                <tr class="!border-0">
                                                    <td class="!p-2 font-medium !text-gray-500">
                                                        {{ trans('Parent_trans.Job_Father') }}</td>
                                                    <td class="!p-2">:</td>
                                                    <td class="!p-2 !text-gray-500">
                                                        {{ $student->myparent->Job_Father }}</td>
                                                </tr>
                                                <tr class="!border-0">
                                                    <td class="!p-2 font-medium !text-gray-500">
                                                        {{ trans('Parent_trans.Nationality_Father_id') }}</td>
                                                    <td class="!p-2">:</td>
                                                    <td class="!p-2 !text-gray-500">
                                                        {{ $student->myparent->country->Name }}</td>
                                                </tr>
                                                <tr class="!border-0">
                                                    <td class="!p-2 font-medium !text-gray-500">
                                                        {{ trans('Parent_trans.Blood_Type_Father_id') }}</td>
                                                    <td class="!p-2">:</td>
                                                    <td class="!p-2 !text-gray-500">
                                                        {{ $student->myparent->blood->Name }}</td>
                                                </tr>
                                                <tr class="!border-0">
                                                    <td class="!p-2 font-medium !text-gray-500">
                                                        {{ trans('Parent_trans.Religion_Father_id') }}</td>
                                                    <td class="!p-2">:</td>
                                                    <td class="!p-2 !text-gray-500">
                                                        {{ $student->myparent->FatherReligion->Name }}</td>
                                                </tr>
                                                <tr class="!border-0">
                                                    <td class="!p-2 font-medium !text-gray-500">
                                                        {{ trans('Parent_trans.Address_Father') }}</td>
                                                    <td class="!p-2">:</td>
                                                    <td class="!p-2 !text-gray-500">
                                                        {{ $student->myparent->Address_Father }}</td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                    {{-- mother data --}}


                                    <div class="overflow-auto bg-pink-100 p-5">
                                        <h5 class="box-title mb-3">{{ trans('Parent_trans.Step2') }}</h5>
                                        <table class="ti-custom-table border-0 whitespace-nowrap">
                                            <tbody>
                                                <tr class="">
                                                    <td class="!p-2 font-medium !text-gray-500">
                                                        {{ trans('Parent_trans.Mother_Name') }}</td>
                                                    <td class="!p-2">:</td>
                                                    <td class="!p-2 !text-gray-500">{{ $student->myparent->Name_Mother }}
                                                    </td>
                                                </tr>
                                                <tr class="!border-0">
                                                    <td class="!p-2 font-medium !text-gray-500">
                                                        {{ trans('Parent_trans.National_ID_Father') }}</td>
                                                    <td class="!p-2">:</td>
                                                    <td class="!p-2 !text-gray-500">
                                                        {{ $student->myparent->National_ID_Mother }}</td>
                                                </tr>
                                                <tr class="!border-0">
                                                    <td class="!p-2 font-medium !text-gray-500">
                                                        {{ trans('Parent_trans.Passport_ID_Father') }}</td>
                                                    <td class="!p-2">:</td>
                                                    <td class="!p-2 !text-gray-500">
                                                        {{ $student->myparent->Passport_ID_Mother }}</td>
                                                </tr>
                                                <tr class="!border-0">
                                                    <td class="!p-2 font-medium !text-gray-500">
                                                        {{ trans('Parent_trans.Phone_Mother') }}</td>
                                                    <td class="!p-2">:</td>
                                                    <td class="!p-2 !text-gray-500">
                                                        {{ $student->myparent->Phone_Mother }}</td>
                                                </tr>
                                                <tr class="!border-0">
                                                    <td class="!p-2 font-medium !text-gray-500">
                                                        {{ trans('Parent_trans.Job_Father') }}</td>
                                                    <td class="!p-2">:</td>
                                                    <td class="!p-2 !text-gray-500">
                                                        {{ $student->myparent->Job_Mother }}</td>
                                                </tr>
                                                <tr class="!border-0">
                                                    <td class="!p-2 font-medium !text-gray-500">
                                                        {{ trans('Parent_trans.Nationality_Father_id') }}</td>
                                                    <td class="!p-2">:</td>
                                                    <td class="!p-2 !text-gray-500">
                                                        {{ $student->myparent->MotherCountry->Name }}</td>
                                                </tr>
                                                <tr class="!border-0">
                                                    <td class="!p-2 font-medium !text-gray-500">
                                                        {{ trans('Parent_trans.Blood_Type_Father_id') }}</td>
                                                    <td class="!p-2">:</td>
                                                    <td class="!p-2 !text-gray-500">
                                                        {{ $student->myparent->MotherBlood->Name }}</td>
                                                </tr>
                                                <tr class="!border-0">
                                                    <td class="!p-2 font-medium !text-gray-500">
                                                        {{ trans('Parent_trans.Religion_Father_id') }}</td>
                                                    <td class="!p-2">:</td>
                                                    <td class="!p-2 !text-gray-500">
                                                        {{ $student->myparent->MotherReligion->Name }}</td>
                                                </tr>
                                                <tr class="!border-0">
                                                    <td class="!p-2 font-medium !text-gray-500">
                                                        {{ trans('Parent_trans.Address_Father') }}</td>
                                                    <td class="!p-2">:</td>
                                                    <td class="!p-2 !text-gray-500">
                                                        {{ $student->myparent->Address_Mother }}</td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div id="profile-3" class="hidden text-center" role="tabpanel"
                                aria-labelledby="profile-item-3">
                                <div class="box text-start">
                                    <div class="box-body p-0">
                                        <div
                                            class="sm:flex sm:space-x-3 space-y-2 sm:space-y-0 p-6 border-b border-gray-200 rtl:space-x-reverse">
                                            <img class="avatar avatar-sm rounded-full"
                                                src="{{ asset('build/assets/img/users/1.jpg') }}" alt="profile-img">
                                            <div class="relative w-full">
                                                <input type="text"
                                                    class="ti-form-input ltr:pr-16 rtl:pl-16 rounded-full shadow-sm focus:z-10 bg-gray-100"
                                                    placeholder="What's On Your Mind ..........">
                                                <div
                                                    class="absolute inset-y-0 ltr:right-8 rtl:left-8 flex items-center z-20 ltr:pr-4 rtl:pl-4">
                                                    <a aria-label="anchor" href="javascript:void(0);"><i
                                                            class="ri ri-emotion-line text-gray-500 text-lg leading-none"></i></a>
                                                </div>
                                                <div
                                                    class="absolute inset-y-0 ltr:right-0 rtl:left-0 flex items-center z-20 ltr:pr-4 rtl:pl-4">
                                                    <a aria-label="anchor" href="javascript:void(0);"><i
                                                            class="ri ri-pencil-line text-gray-500 text-lg leading-none"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <ul
                                            class="sm:flex sm:space-x-5 space-y-2 sm:space-y-0 flex-row p-6 rtl:space-x-reverse">
                                            <li>
                                                <a class="flex space-x-1 rtl:space-x-reverse" href="javascript:void(0);">
                                                    <i class="ri ri-image-2-line text-lg leading-none text-primary"></i>
                                                    <span class="text-gray-500">
                                                        Image
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex space-x-1 rtl:space-x-reverse" href="javascript:void(0);">
                                                    <i class="ri ri-vidicon-line text-lg leading-none text-secondary"></i>
                                                    <span class="text-gray-500">
                                                        Video
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex space-x-1 rtl:space-x-reverse" href="javascript:void(0);">
                                                    <i class="ri ri-attachment-2 text-lg leading-none text-warning"></i>
                                                    <span class="text-gray-500">
                                                        Attachment
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="hidden md:flex">
                                                <a class="flex space-x-1 rtl:space-x-reverse" href="javascript:void(0);">
                                                    <i class="ri ri-hashtag text-lg leading-none text-danger"></i>
                                                    <span class="text-gray-500">
                                                        Hashtag
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="hidden xxxl:flex">
                                                <a class="flex space-x-1 rtl:space-x-reverse" href="javascript:void(0);">
                                                    <i class="ri ri-at-line text-lg leading-none text-info"></i>
                                                    <span class="text-gray-500">
                                                        Mention
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="box-footer">
                                        <div class="Profile-post-footer flex space-x-5 rtl:space-x-reverse justify-end">
                                            <select class="ti-form-select" data-trigger>
                                                <option value="1">Only Me</option>
                                                <option value="2" selected>Public</option>
                                                <option value="3">Private</option>
                                                <option value="4">Friends Only</option>
                                                <option value="5">Friends Of Friends</option>
                                            </select>
                                            <a href="javascript:void(0);" class="m-0 ti-btn ti-btn-primary">post</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box p-5 text-start">
                                    <div class="sm:flex flex-row space-y-2 sm:space-y-0">
                                        <img class="sm:w-1/4 rounded-sm border border-gray-200"
                                            src="{{ asset('build/assets/img/gallery/9.jpg') }}" alt="Image Description">
                                        <div class="box-body ltr:sm:pl-5 rtl:sm:pr-5 px-0 py-0 space-y-4 my-auto w-full">
                                            <h5 class="font-semibold mb-0 text-base leading-none">Lorem ipsum dolor sit
                                                amet consectetur
                                                adipisicing.</h5>
                                            <div class="space-x-2 sm:space-y-0 rtl:space-x-reverse flex">
                                                <a href="javascript:void(0);"
                                                    class="text-xs leading-[0] text-gray-500 space-x-2 rtl:space-x-reverse rounded-full bg-gray-100 px-3 py-1 font-normal hover:bg-gray-300 focus:bg-gary-800 inline-flex"><i
                                                        class="text-xs ri ri-heart-line"></i><span
                                                        class="my-auto">30</span></a>
                                                <a href="javascript:void(0);"
                                                    class="text-xs leading-[0] text-gray-500 space-x-2 rtl:space-x-reverse rounded-full bg-gray-100 px-3 py-1 font-normal hover:bg-gray-300 focus:bg-gary-800 inline-flex"><i
                                                        class="text-xs ri ri-thumb-up-line"></i><span
                                                        class="my-auto">25k</span></a>
                                            </div>
                                            <div class="md:flex md:justify-between space-y-2 md:space-y-0">
                                                <div class="flex items-center space-x-3 rtl:space-x-reverse">
                                                    <div class="flex">
                                                        <img class="avatar avatar-xs ring-0 rounded-full"
                                                            src="{{ asset('build/assets/img/users/1.jpg') }}"
                                                            alt="avatar">
                                                    </div>
                                                    <div>
                                                        <p class="text-slate-700 font-semibold text-sm">
                                                            Json Taylor
                                                        </p>
                                                        <p class="text-xs text-gray-500">
                                                            20 min ago
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="flex -space-x-2 rtl:space-x-reverse">
                                                    <img class="avatar avatar-xs rounded-full"
                                                        src="{{ asset('build/assets/img/users/15.jpg') }}"
                                                        alt="Image Description">
                                                    <img class="avatar avatar-xs rounded-full"
                                                        src="{{ asset('build/assets/img/users/4.jpg') }}"
                                                        alt="Image Description">
                                                    <img class="avatar avatar-xs rounded-full"
                                                        src="{{ asset('build/assets/img/users/12.jpg') }}"
                                                        alt="Image Description">
                                                    <img class="avatar avatar-xs rounded-full"
                                                        src="{{ asset('build/assets/img/users/3.jpg') }}"
                                                        alt="Image Description">
                                                    <span
                                                        class="inline-flex items-center justify-center avatar avatar-xs rounded-full bg-gray-100 border-2 border-gray-200">
                                                        <span class="font-medium text-gray-500 leading-none">2+</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box p-5 text-start">
                                    <div class="sm:flex flex-row space-y-2 sm:space-y-0">
                                        <img class="sm:w-1/4 rounded-sm border border-gray-200"
                                            src="{{ asset('build/assets/img/gallery/3.jpg') }}" alt="Image Description">
                                        <div class="box-body ltr:sm:pl-5 rtl:sm:pr-5 px-0 py-0 space-y-4 my-auto w-full">
                                            <h5 class="font-semibold mb-0 text-base leading-none">Deserunt dolore ad
                                                incididunt excepteur
                                                excepteur Lorem amet excepteur.</h5>
                                            <div class="space-x-2 sm:space-y-0 rtl:space-x-reverse flex">
                                                <a href="javascript:void(0);"
                                                    class="text-xs leading-[0] text-gray-500 space-x-2 rtl:space-x-reverse rounded-full bg-gray-100 px-3 py-1 font-normal hover:bg-gray-300 focus:bg-gary-800 inline-flex"><i
                                                        class="text-xs ri ri-heart-line"></i><span
                                                        class="my-auto">30</span></a>
                                                <a href="javascript:void(0);"
                                                    class="text-xs leading-[0] text-gray-500 space-x-2 rtl:space-x-reverse rounded-full bg-gray-100 px-3 py-1 font-normal hover:bg-gray-300 focus:bg-gary-800 inline-flex"><i
                                                        class="text-xs ri ri-thumb-up-line"></i><span
                                                        class="my-auto">25k</span></a>
                                            </div>
                                            <div class="md:flex md:justify-between space-y-2 md:space-y-0">
                                                <div class="flex items-center space-x-3 rtl:space-x-reverse">
                                                    <div class="flex">
                                                        <img class="avatar avatar-xs ring-0 rounded-full"
                                                            src="{{ asset('build/assets/img/users/3.jpg') }}"
                                                            alt="avatar">
                                                    </div>
                                                    <div>
                                                        <p class="text-slate-700 font-semibold text-sm">
                                                            Sujika
                                                        </p>
                                                        <p class="text-xs text-gray-500">
                                                            5 hrs ago
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="flex -space-x-2 rtl:space-x-reverse">
                                                    <img class="avatar avatar-xs rounded-full"
                                                        src="{{ asset('build/assets/img/users/15.jpg') }}"
                                                        alt="Image Description">
                                                    <img class="avatar avatar-xs rounded-full"
                                                        src="{{ asset('build/assets/img/users/4.jpg') }}"
                                                        alt="Image Description">
                                                    <img class="avatar avatar-xs rounded-full"
                                                        src="{{ asset('build/assets/img/users/12.jpg') }}"
                                                        alt="Image Description">
                                                    <img class="avatar avatar-xs rounded-full"
                                                        src="{{ asset('build/assets/img/users/13.jpg') }}"
                                                        alt="Image Description">
                                                    <span
                                                        class="inline-flex items-center justify-center avatar avatar-xs rounded-full bg-gray-100 border-2 border-gray-200">
                                                        <span class="font-medium text-gray-500 leading-none">4+</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box p-5 text-start">
                                    <div class="sm:flex flex-row space-y-2 sm:space-y-0">
                                        <img class="sm:w-1/4 rounded-sm border border-gray-200"
                                            src="{{ asset('build/assets/img/gallery/4.jpg') }}" alt="Image Description">
                                        <div class="box-body ltr:sm:pl-5 rtl:sm:pr-5 px-0 py-0 space-y-4 my-auto w-full">
                                            <h5 class="font-semibold mb-0 text-base leading-none">Minim Lorem sunt in sunt
                                                adipisicing anim
                                                est enim duis...</h5>
                                            <div class="space-x-2 sm:space-y-0 rtl:space-x-reverse flex">
                                                <a href="javascript:void(0);"
                                                    class="text-xs leading-[0] text-gray-500 space-x-2 rtl:space-x-reverse rounded-full bg-gray-100 px-3 py-1 font-normal hover:bg-gray-300 focus:bg-gary-800 inline-flex"><i
                                                        class="text-xs ri ri-heart-line"></i><span
                                                        class="my-auto">30</span></a>
                                                <a href="javascript:void(0);"
                                                    class="text-xs leading-[0] text-gray-500 space-x-2 rtl:space-x-reverse rounded-full bg-gray-100 px-3 py-1 font-normal hover:bg-gray-300 focus:bg-gary-800 inline-flex"><i
                                                        class="text-xs ri ri-thumb-up-line"></i><span
                                                        class="my-auto">25k</span></a>
                                            </div>
                                            <div class="md:flex md:justify-between space-y-2 md:space-y-0">
                                                <div class="flex items-center space-x-3 rtl:space-x-reverse">
                                                    <div class="flex">
                                                        <img class="avatar avatar-xs ring-0 rounded-full"
                                                            src="{{ asset('build/assets/img/users/13.jpg') }}"
                                                            alt="avatar">
                                                    </div>
                                                    <div>
                                                        <p class="text-slate-700 font-semibold text-sm">
                                                            King Berunda
                                                        </p>
                                                        <p class="text-xs text-gray-500">
                                                            Yesterday, 10:27AM
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="flex -space-x-2 rtl:space-x-reverse">
                                                    <img class="avatar avatar-xs rounded-full"
                                                        src="{{ asset('build/assets/img/users/15.jpg') }}"
                                                        alt="Image Description">
                                                    <img class="avatar avatar-xs rounded-full"
                                                        src="{{ asset('build/assets/img/users/4.jpg') }}"
                                                        alt="Image Description">
                                                    <img class="avatar avatar-xs rounded-full"
                                                        src="{{ asset('build/assets/img/users/12.jpg') }}"
                                                        alt="Image Description">
                                                    <img class="avatar avatar-xs rounded-full"
                                                        src="{{ asset('build/assets/img/users/3.jpg') }}"
                                                        alt="Image Description">
                                                    <span
                                                        class="inline-flex items-center justify-center avatar avatar-xs rounded-full bg-gray-100 border-2 border-gray-200">
                                                        <span class="font-medium text-gray-500 leading-none">4+</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box p-5 text-start">
                                    <div class="sm:flex flex-row space-y-2 sm:space-y-0">
                                        <img class="sm:w-1/4 rounded-sm border border-gray-200"
                                            src="{{ asset('build/assets/img/gallery/5.jpg') }}" alt="Image Description">
                                        <div class="box-body ltr:sm:pl-5 rtl:sm:pr-5 px-0 py-0 space-y-4 my-auto w-full">
                                            <h5 class="font-semibold mb-0 text-base leading-none">Minim Lorem sunt in sunt
                                                adipisicing anim
                                                est enim duis...</h5>
                                            <div class="space-x-2 sm:space-y-0 rtl:space-x-reverse flex">
                                                <a href="javascript:void(0);"
                                                    class="text-xs leading-[0] text-gray-500 space-x-2 rtl:space-x-reverse rounded-full bg-gray-100 px-3 py-1 font-normal hover:bg-gray-300 focus:bg-gary-800 inline-flex"><i
                                                        class="text-xs ri ri-heart-line"></i><span
                                                        class="my-auto">30</span></a>
                                                <a href="javascript:void(0);"
                                                    class="text-xs leading-[0] text-gray-500 space-x-2 rtl:space-x-reverse rounded-full bg-gray-100 px-3 py-1 font-normal hover:bg-gray-300 focus:bg-gary-800 inline-flex"><i
                                                        class="text-xs ri ri-thumb-up-line"></i><span
                                                        class="my-auto">25k</span></a>
                                            </div>
                                            <div class="md:flex md:justify-between space-y-2 md:space-y-0">
                                                <div class="flex items-center space-x-3 rtl:space-x-reverse">
                                                    <div class="flex">
                                                        <img class="avatar avatar-xs ring-0 rounded-full"
                                                            src="{{ asset('build/assets/img/users/15.jpg') }}"
                                                            alt="avatar">
                                                    </div>
                                                    <div>
                                                        <p class="text-slate-700 font-semibold text-sm">
                                                            Michael Jeremy
                                                        </p>
                                                        <p class="text-xs text-gray-500">
                                                            08 Aug 2022
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="flex -space-x-2 rtl:space-x-reverse">
                                                    <img class="avatar avatar-xs rounded-full"
                                                        src="{{ asset('build/assets/img/users/15.jpg') }}"
                                                        alt="Image Description">
                                                    <img class="avatar avatar-xs rounded-full"
                                                        src="{{ asset('build/assets/img/users/4.jpg') }}"
                                                        alt="Image Description">
                                                    <img class="avatar avatar-xs rounded-full"
                                                        src="{{ asset('build/assets/img/users/12.jpg') }}"
                                                        alt="Image Description">
                                                    <img class="avatar avatar-xs rounded-full"
                                                        src="{{ asset('build/assets/img/users/3.jpg') }}"
                                                        alt="Image Description">
                                                    <span
                                                        class="inline-flex items-center justify-center avatar avatar-xs rounded-full bg-gray-100 border-2 border-gray-200">
                                                        <span class="font-medium text-gray-500 leading-none">4+</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="ti-btn ti-btn-primary py-1 px-2 m-0">View All</a>
                            </div>
                            <div id="profile-4" class="hidden text-center" role="tabpanel"
                                aria-labelledby="profile-item-4">
                                <div class="sm:grid grid-cols-12 gap-x-6 space-y-6 sm:space-y-0 text-start">
                                    <div class="md:col-span-6 col-span-12">
                                        <div class="box">
                                            <div class="box-body space-y-3">
                                                <div
                                                    class="sm:flex sm:space-x-3 sm:space-y-0 space-y-2 rtl:space-x-reverse">
                                                    <img src="{{ asset('build/assets/img/logos/2.png') }}"
                                                        class="p-2 avatar w-14 h-14  bg-gray-100 rounded-sm"
                                                        alt="profile-img">
                                                    <div class="my-auto space-y-2">
                                                        <h5 class="text-sm font-semibold">Tailwind Ui Web Application</h5>
                                                        <div class="flex -space-x-2 rtl:space-x-reverse">
                                                            <img class="avatar w-6 h-6 rounded-full"
                                                                src="{{ asset('build/assets/img/users/15.jpg') }}"
                                                                alt="Image Description">
                                                            <img class="avatar w-6 h-6 rounded-full"
                                                                src="{{ asset('build/assets/img/users/4.jpg') }}"
                                                                alt="Image Description">
                                                            <img class="avatar w-6 h-6 rounded-full"
                                                                src="{{ asset('build/assets/img/users/12.jpg') }}"
                                                                alt="Image Description">
                                                            <span
                                                                class="inline-flex items-center justify-center avatar w-6 h-6 rounded-full bg-gray-100 border-2 border-gray-200">
                                                                <span
                                                                    class="font-medium text-gray-500 leading-none">2+</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sm:flex sm:space-y-0 space-y-2 justify-between">
                                                    <span class="badge bg-success/10 text-success rounded-sm mb-0">
                                                        <span
                                                            class="w-1.5 h-1.5 inline-block bg-success/40 rounded-full"></span>
                                                        Completed
                                                    </span>
                                                    <p class="text-gray-500 text-sm font-medium my-auto whitespace-nowrap">
                                                        15-12-2022</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="md:col-span-6 col-span-12">
                                        <div class="box">
                                            <div class="box-body space-y-3">
                                                <div
                                                    class="sm:flex sm:space-x-3 sm:space-y-0 space-y-2 rtl:space-x-reverse">
                                                    <img src="{{ asset('build/assets/img/logos/1.png') }}"
                                                        class="p-2 avatar w-14 h-14  bg-gray-100 rounded-sm"
                                                        alt="profile-img">
                                                    <div class="my-auto space-y-2">
                                                        <h5 class="text-sm font-semibold">Synto Ui Mobile Application</h5>
                                                        <div class="flex -space-x-2 rtl:space-x-reverse">
                                                            <img class="avatar w-6 h-6 rounded-full"
                                                                src="{{ asset('build/assets/img/users/15.jpg') }}"
                                                                alt="Image Description">
                                                            <img class="avatar w-6 h-6 rounded-full"
                                                                src="{{ asset('build/assets/img/users/4.jpg') }}"
                                                                alt="Image Description">
                                                            <img class="avatar w-6 h-6 rounded-full"
                                                                src="{{ asset('build/assets/img/users/3.jpg') }}"
                                                                alt="Image Description">
                                                            <img class="avatar w-6 h-6 rounded-full"
                                                                src="{{ asset('build/assets/img/users/12.jpg') }}"
                                                                alt="Image Description">
                                                            <span
                                                                class="inline-flex items-center justify-center avatar w-6 h-6 rounded-full bg-gray-100 border-2 border-gray-200">
                                                                <span
                                                                    class="font-medium text-gray-500 leading-none">4+</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sm:flex sm:space-y-0 space-y-2 justify-between">
                                                    <span class="badge bg-warning/10 text-warning rounded-sm mb-0">
                                                        <span
                                                            class="w-1.5 h-1.5 inline-block bg-warning/40 rounded-full"></span>
                                                        Inprogress
                                                    </span>
                                                    <p class="text-gray-500 text-sm font-medium my-auto whitespace-nowrap">
                                                        10-12-2022</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="md:col-span-6 col-span-12">
                                        <div class="box">
                                            <div class="box-body space-y-3">
                                                <div
                                                    class="sm:flex sm:space-x-3 sm:space-y-0 space-y-2 rtl:space-x-reverse">
                                                    <img src="{{ asset('build/assets/img/logos/3.png') }}"
                                                        class="p-2 avatar w-14 h-14  bg-gray-100 rounded-sm"
                                                        alt="profile-img">
                                                    <div class="my-auto space-y-2">
                                                        <h5 class="text-sm font-semibold">Valex Laravel Project</h5>
                                                        <div class="flex -space-x-2 rtl:space-x-reverse">
                                                            <img class="avatar w-6 h-6 rounded-full"
                                                                src="{{ asset('build/assets/img/users/15.jpg') }}"
                                                                alt="Image Description">
                                                            <img class="avatar w-6 h-6 rounded-full"
                                                                src="{{ asset('build/assets/img/users/4.jpg') }}"
                                                                alt="Image Description">
                                                            <img class="avatar w-6 h-6 rounded-full"
                                                                src="{{ asset('build/assets/img/users/3.jpg') }}"
                                                                alt="Image Description">
                                                            <img class="avatar w-6 h-6 rounded-full"
                                                                src="{{ asset('build/assets/img/users/12.jpg') }}"
                                                                alt="Image Description">
                                                            <span
                                                                class="inline-flex items-center justify-center avatar w-6 h-6 rounded-full bg-gray-100 border-2 border-gray-200">
                                                                <span
                                                                    class="font-medium text-gray-500 leading-none">4+</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sm:flex sm:space-y-0 space-y-2 justify-between">
                                                    <span class="badge bg-warning/10 text-warning rounded-sm mb-0">
                                                        <span
                                                            class="w-1.5 h-1.5 inline-block bg-warning/40 rounded-full"></span>
                                                        Inprogress
                                                    </span>
                                                    <p class="text-gray-500 text-sm font-medium my-auto whitespace-nowrap">
                                                        10-12-2022</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="md:col-span-6 col-span-12">
                                        <div class="box">
                                            <div class="box-body space-y-3">
                                                <div
                                                    class="sm:flex sm:space-x-3 sm:space-y-0 space-y-2 rtl:space-x-reverse">
                                                    <img src="{{ asset('build/assets/img/logos/4.png') }}"
                                                        class="p-2 avatar w-14 h-14  bg-gray-100 rounded-sm"
                                                        alt="profile-img">
                                                    <div class="my-auto space-y-2">
                                                        <h5 class="text-sm font-semibold">Zanex Laravel Project</h5>
                                                        <div class="flex -space-x-2 rtl:space-x-reverse">
                                                            <img class="avatar w-6 h-6 rounded-full"
                                                                src="{{ asset('build/assets/img/users/15.jpg') }}"
                                                                alt="Image Description">
                                                            <img class="avatar w-6 h-6 rounded-full"
                                                                src="{{ asset('build/assets/img/users/4.jpg') }}"
                                                                alt="Image Description">
                                                            <img class="avatar w-6 h-6 rounded-full"
                                                                src="{{ asset('build/assets/img/users/3.jpg') }}"
                                                                alt="Image Description">
                                                            <img class="avatar w-6 h-6 rounded-full"
                                                                src="{{ asset('build/assets/img/users/12.jpg') }}"
                                                                alt="Image Description">
                                                            <span
                                                                class="inline-flex items-center justify-center avatar w-6 h-6 rounded-full bg-gray-100 border-2 border-gray-200">
                                                                <span
                                                                    class="font-medium text-gray-500 leading-none">4+</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sm:flex sm:space-y-0 space-y-2 justify-between">
                                                    <span
                                                        class="badge bg-primary/10 text-primary rounded-sm mb-0 whitespace-nowrap">
                                                        <span
                                                            class="w-1.5 h-1.5 inline-block bg-primary/40 rounded-full"></span>
                                                        New Project
                                                    </span>
                                                    <p class="text-gray-500 text-sm font-medium my-auto whitespace-nowrap">
                                                        05-12-2022</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="md:col-span-6 col-span-12">
                                        <div class="box">
                                            <div class="box-body space-y-3">
                                                <div
                                                    class="sm:flex sm:space-x-3 sm:space-y-0 space-y-2 rtl:space-x-reverse">
                                                    <img src="{{ asset('build/assets/img/logos/5.png') }}"
                                                        class="p-2 avatar w-14 h-14  bg-gray-100 rounded-sm"
                                                        alt="profile-img">
                                                    <div class="my-auto space-y-2">
                                                        <h5 class="text-sm font-semibold">Adminor Laravel Project</h5>
                                                        <div class="flex -space-x-2 rtl:space-x-reverse">
                                                            <img class="avatar w-6 h-6 rounded-full"
                                                                src="{{ asset('build/assets/img/users/15.jpg') }}"
                                                                alt="Image Description">
                                                            <img class="avatar w-6 h-6 rounded-full"
                                                                src="{{ asset('build/assets/img/users/4.jpg') }}"
                                                                alt="Image Description">
                                                            <img class="avatar w-6 h-6 rounded-full"
                                                                src="{{ asset('build/assets/img/users/3.jpg') }}"
                                                                alt="Image Description">
                                                            <img class="avatar w-6 h-6 rounded-full"
                                                                src="{{ asset('build/assets/img/users/12.jpg') }}"
                                                                alt="Image Description">
                                                            <span
                                                                class="inline-flex items-center justify-center avatar w-6 h-6 rounded-full bg-gray-100 border-2 border-gray-200">
                                                                <span
                                                                    class="font-medium text-gray-500 leading-none">4+</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sm:flex sm:space-y-0 space-y-2 justify-between">
                                                    <span
                                                        class="badge bg-primary/10 text-primary rounded-sm mb-0 whitespace-nowrap">
                                                        <span
                                                            class="w-1.5 h-1.5 inline-block bg-primary/40 rounded-full"></span>
                                                        New Project
                                                    </span>
                                                    <p class="text-gray-500 text-sm font-medium my-auto whitespace-nowrap">
                                                        05-12-2022</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="md:col-span-6 col-span-12">
                                        <div class="box">
                                            <div class="box-body space-y-3">
                                                <div
                                                    class="sm:flex sm:space-x-3 sm:space-y-0 space-y-2 rtl:space-x-reverse">
                                                    <img src="{{ asset('build/assets/img/logos/6.png') }}"
                                                        class="p-2 avatar w-14 h-14  bg-gray-100 rounded-sm"
                                                        alt="profile-img">
                                                    <div class="my-auto space-y-2">
                                                        <h5 class="text-sm font-semibold">Client Project</h5>
                                                        <div class="flex -space-x-2 rtl:space-x-reverse">
                                                            <img class="avatar w-6 h-6 rounded-full"
                                                                src="{{ asset('build/assets/img/users/15.jpg') }}"
                                                                alt="Image Description">
                                                            <img class="avatar w-6 h-6 rounded-full"
                                                                src="{{ asset('build/assets/img/users/4.jpg') }}"
                                                                alt="Image Description">
                                                            <img class="avatar w-6 h-6 rounded-full"
                                                                src="{{ asset('build/assets/img/users/3.jpg') }}"
                                                                alt="Image Description">
                                                            <img class="avatar w-6 h-6 rounded-full"
                                                                src="{{ asset('build/assets/img/users/12.jpg') }}"
                                                                alt="Image Description">
                                                            <span
                                                                class="inline-flex items-center justify-center avatar w-6 h-6 rounded-full bg-gray-100 border-2 border-gray-200">
                                                                <span
                                                                    class="font-medium text-gray-500 leading-none">4+</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sm:flex sm:space-y-0 space-y-2 justify-between">
                                                    <span class="badge bg-danger/10 text-danger rounded-sm mb-0">
                                                        <span
                                                            class="w-1.5 h-1.5 inline-block bg-danger/40 rounded-full"></span>
                                                        Aborted
                                                    </span>
                                                    <p class="text-gray-500 text-sm font-medium my-auto whitespace-nowrap">
                                                        05-12-2022</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="md:col-span-6 col-span-12">
                                        <div class="box">
                                            <div class="box-body space-y-3">
                                                <div
                                                    class="sm:flex sm:space-x-3 sm:space-y-0 space-y-2 rtl:space-x-reverse">
                                                    <img src="{{ asset('build/assets/img/logos/7.png') }}"
                                                        class="p-2 avatar w-14 h-14  bg-gray-100 rounded-sm"
                                                        alt="profile-img">
                                                    <div class="my-auto space-y-2">
                                                        <h5 class="text-sm font-semibold">React Project</h5>
                                                        <div class="flex -space-x-2 rtl:space-x-reverse">
                                                            <img class="avatar w-6 h-6 rounded-full"
                                                                src="{{ asset('build/assets/img/users/15.jpg') }}"
                                                                alt="Image Description">
                                                            <img class="avatar w-6 h-6 rounded-full"
                                                                src="{{ asset('build/assets/img/users/4.jpg') }}"
                                                                alt="Image Description">
                                                            <img class="avatar w-6 h-6 rounded-full"
                                                                src="{{ asset('build/assets/img/users/3.jpg') }}"
                                                                alt="Image Description">
                                                            <img class="avatar w-6 h-6 rounded-full"
                                                                src="{{ asset('build/assets/img/users/12.jpg') }}"
                                                                alt="Image Description">
                                                            <span
                                                                class="inline-flex items-center justify-center avatar w-6 h-6 rounded-full bg-gray-100 border-2 border-gray-200">
                                                                <span
                                                                    class="font-medium text-gray-500 leading-none">5+</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sm:flex sm:space-y-0 space-y-2 justify-between">
                                                    <span class="badge bg-info/10 text-info rounded-sm mb-0">
                                                        <span
                                                            class="w-1.5 h-1.5 inline-block bg-info/40 rounded-full"></span>
                                                        Approved
                                                    </span>
                                                    <p class="text-gray-500 text-sm font-medium my-auto whitespace-nowrap">
                                                        05-12-2022</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="md:col-span-6 col-span-12">
                                        <div class="box">
                                            <div class="box-body space-y-3">
                                                <div
                                                    class="sm:flex sm:space-x-3 sm:space-y-0 space-y-2 rtl:space-x-reverse">
                                                    <img src="{{ asset('build/assets/img/logos/8.png') }}"
                                                        class="p-2 avatar w-14 h-14  bg-gray-100 rounded-sm"
                                                        alt="profile-img">
                                                    <div class="my-auto space-y-2">
                                                        <h5 class="text-sm font-semibold">Angular Project</h5>
                                                        <div class="flex -space-x-2 rtl:space-x-reverse">
                                                            <img class="avatar w-6 h-6 rounded-full"
                                                                src="{{ asset('build/assets/img/users/15.jpg') }}"
                                                                alt="Image Description">
                                                            <img class="avatar w-6 h-6 rounded-full"
                                                                src="{{ asset('build/assets/img/users/4.jpg') }}"
                                                                alt="Image Description">
                                                            <img class="avatar w-6 h-6 rounded-full"
                                                                src="{{ asset('build/assets/img/users/3.jpg') }}"
                                                                alt="Image Description">
                                                            <img class="avatar w-6 h-6 rounded-full"
                                                                src="{{ asset('build/assets/img/users/12.jpg') }}"
                                                                alt="Image Description">
                                                            <span
                                                                class="inline-flex items-center justify-center avatar w-6 h-6 rounded-full bg-gray-100 border-2 border-gray-200">
                                                                <span
                                                                    class="font-medium text-gray-500 leading-none">5+</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sm:flex sm:space-y-0 space-y-2 justify-between">
                                                    <span
                                                        class="badge bg-primary/10 text-primary rounded-sm mb-0 whitespace-nowrap">
                                                        <span
                                                            class="w-1.5 h-1.5 inline-block bg-primary/40 rounded-full"></span>
                                                        New Project
                                                    </span>
                                                    <p class="text-gray-500 text-sm font-medium my-auto whitespace-nowrap">
                                                        05-12-2022</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="md:col-span-6 col-span-12">
                                        <div class="box">
                                            <div class="box-body space-y-3">
                                                <div
                                                    class="sm:flex sm:space-x-3 sm:space-y-0 space-y-2 rtl:space-x-reverse">
                                                    <img src="{{ asset('build/assets/img/logos/9.png') }}"
                                                        class="p-2 avatar w-14 h-14  bg-gray-100 rounded-sm"
                                                        alt="profile-img">
                                                    <div class="my-auto space-y-2">
                                                        <h5 class="text-sm font-semibold">Vue Project</h5>
                                                        <div class="flex -space-x-2 rtl:space-x-reverse">
                                                            <img class="avatar w-6 h-6 rounded-full"
                                                                src="{{ asset('build/assets/img/users/15.jpg') }}"
                                                                alt="Image Description">
                                                            <img class="avatar w-6 h-6 rounded-full"
                                                                src="{{ asset('build/assets/img/users/4.jpg') }}"
                                                                alt="Image Description">
                                                            <img class="avatar w-6 h-6 rounded-full"
                                                                src="{{ asset('build/assets/img/users/3.jpg') }}"
                                                                alt="Image Description">
                                                            <img class="avatar w-6 h-6 rounded-full"
                                                                src="{{ asset('build/assets/img/users/12.jpg') }}"
                                                                alt="Image Description">
                                                            <span
                                                                class="inline-flex items-center justify-center avatar w-6 h-6 rounded-full bg-gray-100 border-2 border-gray-200">
                                                                <span
                                                                    class="font-medium text-gray-500 leading-none">5+</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sm:flex sm:space-y-0 space-y-2 justify-between">
                                                    <span class="badge bg-success/10 text-success rounded-sm mb-0">
                                                        <span
                                                            class="w-1.5 h-1.5 inline-block bg-success/40 rounded-full"></span>
                                                        Completed
                                                    </span>
                                                    <p class="text-gray-500 text-sm font-medium my-auto whitespace-nowrap">
                                                        05-12-2022</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="md:col-span-6 col-span-12">
                                        <div class="box">
                                            <div class="box-body space-y-3">
                                                <div
                                                    class="sm:flex sm:space-x-3 sm:space-y-0 space-y-2 rtl:space-x-reverse">
                                                    <img src="{{ asset('build/assets/img/logos/10.png') }}"
                                                        class="p-2 avatar w-14 h-14  bg-gray-100 rounded-sm"
                                                        alt="profile-img">
                                                    <div class="my-auto space-y-2">
                                                        <h5 class="text-sm font-semibold">Nextjs Project</h5>
                                                        <div class="flex -space-x-2 rtl:space-x-reverse">
                                                            <img class="avatar w-6 h-6 rounded-full"
                                                                src="{{ asset('build/assets/img/users/15.jpg') }}"
                                                                alt="Image Description">
                                                            <img class="avatar w-6 h-6 rounded-full"
                                                                src="{{ asset('build/assets/img/users/4.jpg') }}"
                                                                alt="Image Description">
                                                            <img class="avatar w-6 h-6 rounded-full"
                                                                src="{{ asset('build/assets/img/users/3.jpg') }}"
                                                                alt="Image Description">
                                                            <img class="avatar w-6 h-6 rounded-full"
                                                                src="{{ asset('build/assets/img/users/12.jpg') }}"
                                                                alt="Image Description">
                                                            <span
                                                                class="inline-flex items-center justify-center avatar w-6 h-6 rounded-full bg-gray-100 border-2 border-gray-200">
                                                                <span
                                                                    class="font-medium text-gray-500 leading-none">5+</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sm:flex sm:space-y-0 space-y-2 justify-between">
                                                    <span class="badge bg-warning/10 text-warning rounded-sm mb-0">
                                                        <span
                                                            class="w-1.5 h-1.5 inline-block bg-warning/40 rounded-full"></span>
                                                        Inprogress
                                                    </span>
                                                    <p class="text-gray-500 text-sm font-medium my-auto whitespace-nowrap">
                                                        05-12-2022</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="ti-btn ti-btn-primary py-1 px-2 m-0">View more</a>
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
    <!-- GLIGHTBOX JS -->
    <script src="{{ asset('build/assets/libs/glightbox/js/glightbox.min.js') }}"></script>

    <!-- CHOICES JS -->
    <script src="{{ asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>

    <!-- PROFILE JS -->
    @vite('resources/assets/js/profile.js')
@endsection

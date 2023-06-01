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

                            <div class="grid grid-cols-12 gap-6" >
                                <div class="col-span-12 lg:col-span-3">
                                    <div class="box">
                                        <div class="box-body p-0">
                                            <nav class="flex flex-col space-y-3 p-4" aria-label="Tabs" role="tablist" data-hs-tabs-vertical="true">
                                                <a href="javascript:void(0);" id="faq-item-1" data-hs-tab="#faq-1" aria-controls="faq-1" role="tab"
                                                   class="w-full hs-tab-active:border-secondary hs-tab-active:text-white hs-tab-active:bg-secondary text-base leading-none rounded-sm p-3 bg-gray-100 active">
                                                    General Faq's
                                                </a>
                                                <a href="javascript:void(0);" id="faq-item-2" data-hs-tab="#faq-2" aria-controls="faq-2" role="tab"
                                                   class="w-full hs-tab-active:border-secondary hs-tab-active:text-white hs-tab-active:bg-secondary text-base leading-none rounded-sm p-3 bg-gray-100">
                                                    Basic Faq's
                                                </a>
                                                <a href="javascript:void(0);" id="faq-item-3" data-hs-tab="#faq-3" aria-controls="faq-3" role="tab"
                                                   class="w-full hs-tab-active:border-secondary hs-tab-active:text-white hs-tab-active:bg-secondary text-base leading-none rounded-sm p-3 bg-gray-100">
                                                    Common Faq's
                                                </a>
                                                <a href="javascript:void(0);" id="faq-item-4" data-hs-tab="#faq-4" aria-controls="faq-4" role="tab"
                                                   class="w-full hs-tab-active:border-secondary hs-tab-active:text-white hs-tab-active:bg-secondary text-base leading-none rounded-sm p-3 bg-gray-100">
                                                    Advanced Faq's
                                                </a>
                                            </nav>
                                            <div class="p-4 space-y-3 border-t border-gray-200">
                                                <textarea class="ti-form-input" rows="4" placeholder="Drop Your Question Here...."></textarea>
                                                <button type="submit" class="w-full ti-btn ti-btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-9">
                                    <div class="box">
                                        <div class="box-body">
                                            <div id="faq-1" role="tabpanel" aria-labelledby="faq-item-1">
                                                <div class="hs-accordion-group space-y-3">

                                                    <div class="hs-accordion active bg-white border -mt-px rounded-sm"
                                                         id="faq-one">
                                                        <button type="button"
                                                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:border-b hs-accordion-active:border-gray-200 justify-between inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition py-4 px-5 hover:text-gray-500"
                                                                aria-controls="faq-collapse-one">
                                                            How To Insert All The Plugins?
                                                            <svg class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                 width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                                <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                            </svg>
                                                            <svg
                                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                            </svg>
                                                        </button>
                                                        <div id="faq-collapse-one"
                                                             class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                                             aria-labelledby="faq-one">
                                                            <div class="p-5">
                                                                <p class="text-gray-800">
                                                                    I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="hs-accordion bg-white border -mt-px rounded-sm"
                                                         id="faq-two">
                                                        <button type="button"
                                                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:border-b hs-accordion-active:border-gray-200 justify-between inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition py-4 px-5 hover:text-gray-500"
                                                                aria-controls="faq-collapse-two">
                                                            How Can I contact for support ?
                                                            <svg
                                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                                <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                            </svg>
                                                            <svg
                                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                            </svg>
                                                        </button>
                                                        <div id="faq-collapse-two"
                                                             class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                             aria-labelledby="faq-two">
                                                            <div class="p-5">
                                                                <p class="text-gray-800">
                                                                    I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="hs-accordion bg-white border -mt-px rounded-sm"
                                                         id="faq-three">
                                                        <button type="button"
                                                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:border-b hs-accordion-active:border-gray-200 justify-between inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition py-4 px-5 hover:text-gray-500"
                                                                aria-controls="faq-collapse-three"> Can I use this Plugins in Another Template?
                                                            <svg
                                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                                <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                            </svg>
                                                            <svg
                                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                            </svg>
                                                        </button>
                                                        <div id="faq-collapse-three"
                                                             class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                             aria-labelledby=" faq-three">
                                                            <div class="p-5">
                                                                <p class="text-gray-800">
                                                                    I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences.
                                                                </p>
                                                            </div>
                                                        </div>



                                                    </div>

                                                    <div class="hs-accordion bg-white border -mt-px rounded-sm"
                                                         id="faq-four">
                                                        <button type="button"
                                                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:border-b hs-accordion-active:border-gray-200 justify-between inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition py-4 px-5 hover:text-gray-500"
                                                                aria-controls="faq-collapse-four">  Does it Easy for Customization?
                                                            <svg
                                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                                <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                            </svg>
                                                            <svg
                                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                            </svg>
                                                        </button>
                                                        <div id="faq-collapse-four"
                                                             class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                             aria-labelledby=" faq-four">
                                                            <div class="p-5">
                                                                <p class="text-gray-800">
                                                                    I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences.
                                                                </p>
                                                            </div>
                                                        </div>



                                                    </div>

                                                    <div class="hs-accordion bg-white border -mt-px rounded-sm"
                                                         id="faq-five">
                                                        <button type="button"
                                                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:border-b hs-accordion-active:border-gray-200 justify-between inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition py-4 px-5 hover:text-gray-500"
                                                                aria-controls="faq-collapse-five">   How Can I Add another page in Template?
                                                            <svg
                                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                                <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                            </svg>
                                                            <svg
                                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                            </svg>
                                                        </button>
                                                        <div id="faq-collapse-five"
                                                             class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                             aria-labelledby=" faq-five">
                                                            <div class="p-5">
                                                                <p class="text-gray-800">
                                                                    I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences.
                                                                </p>
                                                            </div>
                                                        </div>



                                                    </div>

                                                    <div class="hs-accordion bg-white border -mt-px rounded-sm"
                                                         id="faq-six">
                                                        <button type="button"
                                                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:border-b hs-accordion-active:border-gray-200 justify-between inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition py-4 px-5 hover:text-gray-500"
                                                                aria-controls="faq-collapse-six">    How can I download This template?
                                                            <svg
                                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                                <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                            </svg>
                                                            <svg
                                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                            </svg>
                                                        </button>
                                                        <div id="faq-collapse-six"
                                                             class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                             aria-labelledby=" faq-six">
                                                            <div class="p-5">
                                                                <p class="text-gray-800">
                                                                    I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences.
                                                                </p>
                                                            </div>
                                                        </div>



                                                    </div>

                                                    <div class="hs-accordion bg-white border -mt-px rounded-sm"
                                                         id="faq-seven">
                                                        <button type="button"
                                                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:border-b hs-accordion-active:border-gray-200 justify-between inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition py-4 px-5 hover:text-gray-500"
                                                                aria-controls="faq-collapse-seven">    How To Add additional plugins?
                                                            <svg
                                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                                <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                            </svg>
                                                            <svg
                                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                            </svg>
                                                        </button>
                                                        <div id="faq-collapse-seven"
                                                             class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                             aria-labelledby=" faq-seven">
                                                            <div class="p-5">
                                                                <p class="text-gray-800">
                                                                    I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences.
                                                                </p>
                                                            </div>
                                                        </div>



                                                    </div>

                                                </div>
                                            </div>
                                            <div class="hidden" id="faq-2" role="tabpanel" aria-labelledby="faq-item-2">
                                                <div class="hs-accordion-group space-y-3">

                                                    <div class="hs-accordion active bg-white border -mt-px rounded-sm"
                                                         id="faq-21">
                                                        <button type="button"
                                                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:border-b hs-accordion-active:border-gray-200 justify-between inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition py-4 px-5 hover:text-gray-500"
                                                                aria-controls="faq-collapse-21">
                                                            How To Insert All The Plugins?
                                                            <svg class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                 width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                                <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                            </svg>
                                                            <svg
                                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                            </svg>
                                                        </button>
                                                        <div id="faq-collapse-21"
                                                             class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                                             aria-labelledby="faq-21">
                                                            <div class="p-5">
                                                                <p class="text-gray-800">
                                                                    I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="hs-accordion bg-white border -mt-px rounded-sm"
                                                         id="faq-22">
                                                        <button type="button"
                                                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:border-b hs-accordion-active:border-gray-200 justify-between inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition py-4 px-5 hover:text-gray-500"
                                                                aria-controls="faq-collapse-22">
                                                            How Can I contact?
                                                            <svg
                                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                                <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                            </svg>
                                                            <svg
                                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                            </svg>
                                                        </button>
                                                        <div id="faq-collapse-22"
                                                             class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                             aria-labelledby="faq-22">
                                                            <div class="p-5">
                                                                <p class="text-gray-800">
                                                                    I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="hs-accordion bg-white border -mt-px rounded-sm"
                                                         id="faq-23">
                                                        <button type="button"
                                                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:border-b hs-accordion-active:border-gray-200 justify-between inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition py-4 px-5 hover:text-gray-500"
                                                                aria-controls="faq-collapse-23"> Can I use this Plugins in Another Template?
                                                            <svg
                                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                                <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                            </svg>
                                                            <svg
                                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                            </svg>
                                                        </button>
                                                        <div id="faq-collapse-23"
                                                             class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                             aria-labelledby=" faq-23">
                                                            <div class="p-5">
                                                                <p class="text-gray-800">
                                                                    I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences.
                                                                </p>
                                                            </div>
                                                        </div>



                                                    </div>

                                                    <div class="hs-accordion bg-white border -mt-px rounded-sm"
                                                         id="faq-24">
                                                        <button type="button"
                                                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:border-b hs-accordion-active:border-gray-200 justify-between inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition py-4 px-5 hover:text-gray-500"
                                                                aria-controls="faq-collapse-24">  Does it Easy to Customizable?
                                                            <svg
                                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                                <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                            </svg>
                                                            <svg
                                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                            </svg>
                                                        </button>
                                                        <div id="faq-collapse-24"
                                                             class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                             aria-labelledby=" faq-24">
                                                            <div class="p-5">
                                                                <p class="text-gray-800">
                                                                    I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences.
                                                                </p>
                                                            </div>
                                                        </div>



                                                    </div>

                                                    <div class="hs-accordion bg-white border -mt-px rounded-sm"
                                                         id="faq-25">
                                                        <button type="button"
                                                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:border-b hs-accordion-active:border-gray-200 justify-between inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition py-4 px-5 hover:text-gray-500"
                                                                aria-controls="faq-collapse-25">   How Can I Add another page in Template?
                                                            <svg
                                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                                <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                            </svg>
                                                            <svg
                                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                            </svg>
                                                        </button>
                                                        <div id="faq-collapse-25"
                                                             class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                             aria-labelledby=" faq-25">
                                                            <div class="p-5">
                                                                <p class="text-gray-800">
                                                                    I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences.
                                                                </p>
                                                            </div>
                                                        </div>



                                                    </div>

                                                    <div class="hs-accordion bg-white border -mt-px rounded-sm"
                                                         id="faq-26">
                                                        <button type="button"
                                                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:border-b hs-accordion-active:border-gray-200 justify-between inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition py-4 px-5 hover:text-gray-500"
                                                                aria-controls="faq-collapse-26">    How can I download This template?
                                                            <svg
                                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                                <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                            </svg>
                                                            <svg
                                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                            </svg>
                                                        </button>
                                                        <div id="faq-collapse-26"
                                                             class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                             aria-labelledby=" faq-26">
                                                            <div class="p-5">
                                                                <p class="text-gray-800">
                                                                    I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences.
                                                                </p>
                                                            </div>
                                                        </div>



                                                    </div>

                                                    <div class="hs-accordion bg-white border -mt-px rounded-sm"
                                                         id="faq-27">
                                                        <button type="button"
                                                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:border-b hs-accordion-active:border-gray-200 justify-between inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition py-4 px-5 hover:text-gray-500"
                                                                aria-controls="faq-collapse-27">    How To Add additional plugins?
                                                            <svg
                                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                                <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                            </svg>
                                                            <svg
                                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                            </svg>
                                                        </button>
                                                        <div id="faq-collapse-27"
                                                             class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                             aria-labelledby=" faq-27">
                                                            <div class="p-5">
                                                                <p class="text-gray-800">
                                                                    I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences.
                                                                </p>
                                                            </div>
                                                        </div>



                                                    </div>

                                                </div>
                                            </div>
                                            <div class="hidden" id="faq-3" role="tabpanel" aria-labelledby="faq-item-3">
                                                <div class="hs-accordion-group space-y-3">

                                                    <div class="hs-accordion active bg-white border -mt-px rounded-sm"
                                                         id="faq-31">
                                                        <button type="button"
                                                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:border-b hs-accordion-active:border-gray-200 justify-between inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition py-4 px-5 hover:text-gray-500"
                                                                aria-controls="faq-collapse-31">
                                                            How To Insert All The Plugins?
                                                            <svg class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                 width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                                <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                            </svg>
                                                            <svg
                                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                            </svg>
                                                        </button>
                                                        <div id="faq-collapse-31"
                                                             class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                                             aria-labelledby="faq-31">
                                                            <div class="p-5">
                                                                <p class="text-gray-800">
                                                                    I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="hs-accordion bg-white border -mt-px rounded-sm"
                                                         id="faq-32">
                                                        <button type="button"
                                                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:border-b hs-accordion-active:border-gray-200 justify-between inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition py-4 px-5 hover:text-gray-500"
                                                                aria-controls="faq-collapse-32">
                                                            How Can I contact?
                                                            <svg
                                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                                <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                            </svg>
                                                            <svg
                                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                            </svg>
                                                        </button>
                                                        <div id="faq-collapse-32"
                                                             class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                             aria-labelledby="faq-32">
                                                            <div class="p-5">
                                                                <p class="text-gray-800">
                                                                    I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="hs-accordion bg-white border -mt-px rounded-sm"
                                                         id="faq-33">
                                                        <button type="button"
                                                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:border-b hs-accordion-active:border-gray-200 justify-between inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition py-4 px-5 hover:text-gray-500"
                                                                aria-controls="faq-collapse-33"> Can I use this Plugins in Another Template?
                                                            <svg
                                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                                <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                            </svg>
                                                            <svg
                                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                            </svg>
                                                        </button>
                                                        <div id="faq-collapse-33"
                                                             class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                             aria-labelledby=" faq-33">
                                                            <div class="p-5">
                                                                <p class="text-gray-800">
                                                                    I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences.
                                                                </p>
                                                            </div>
                                                        </div>



                                                    </div>

                                                    <div class="hs-accordion bg-white border -mt-px rounded-sm"
                                                         id="faq-34">
                                                        <button type="button"
                                                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:border-b hs-accordion-active:border-gray-200 justify-between inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition py-4 px-5 hover:text-gray-500"
                                                                aria-controls="faq-collapse-34">  Does it Easy to Customizable?
                                                            <svg
                                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                                <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                            </svg>
                                                            <svg
                                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                            </svg>
                                                        </button>
                                                        <div id="faq-collapse-34"
                                                             class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                             aria-labelledby=" faq-34">
                                                            <div class="p-5">
                                                                <p class="text-gray-800">
                                                                    I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences.
                                                                </p>
                                                            </div>
                                                        </div>



                                                    </div>

                                                    <div class="hs-accordion bg-white border -mt-px rounded-sm"
                                                         id="faq-35">
                                                        <button type="button"
                                                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:border-b hs-accordion-active:border-gray-200 justify-between inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition py-4 px-5 hover:text-gray-500"
                                                                aria-controls="faq-collapse-35">   How Can I Add another page in Template?
                                                            <svg
                                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                                <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                            </svg>
                                                            <svg
                                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                            </svg>
                                                        </button>
                                                        <div id="faq-collapse-35"
                                                             class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                             aria-labelledby=" faq-35">
                                                            <div class="p-5">
                                                                <p class="text-gray-800">
                                                                    I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences.
                                                                </p>
                                                            </div>
                                                        </div>



                                                    </div>

                                                    <div class="hs-accordion bg-white border -mt-px rounded-sm"
                                                         id="faq-36">
                                                        <button type="button"
                                                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:border-b hs-accordion-active:border-gray-200 justify-between inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition py-4 px-5 hover:text-gray-500"
                                                                aria-controls="faq-collapse-36">    How can I download This template?
                                                            <svg
                                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                                <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                            </svg>
                                                            <svg
                                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                            </svg>
                                                        </button>
                                                        <div id="faq-collapse-36"
                                                             class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                             aria-labelledby=" faq-36">
                                                            <div class="p-5">
                                                                <p class="text-gray-800">
                                                                    I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences.
                                                                </p>
                                                            </div>
                                                        </div>



                                                    </div>

                                                    <div class="hs-accordion bg-white border -mt-px rounded-sm"
                                                         id="faq-37">
                                                        <button type="button"
                                                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:border-b hs-accordion-active:border-gray-200 justify-between inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition py-4 px-5 hover:text-gray-500"
                                                                aria-controls="faq-collapse-37">    How To Add additional plugins?
                                                            <svg
                                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                                <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                            </svg>
                                                            <svg
                                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                            </svg>
                                                        </button>
                                                        <div id="faq-collapse-37"
                                                             class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                             aria-labelledby=" faq-37">
                                                            <div class="p-5">
                                                                <p class="text-gray-800">
                                                                    I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences.
                                                                </p>
                                                            </div>
                                                        </div>



                                                    </div>

                                                </div>
                                            </div>
                                            <div class="hidden" id="faq-4" role="tabpanel" aria-labelledby="faq-item-4">
                                                <div class="hs-accordion-group space-y-3">

                                                    <div class="hs-accordion active bg-white border -mt-px rounded-sm"
                                                         id="faq-41">
                                                        <button type="button"
                                                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:border-b hs-accordion-active:border-gray-200 justify-between inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition py-4 px-5 hover:text-gray-500"
                                                                aria-controls="faq-collapse-41">
                                                            How To Insert All The Plugins?
                                                            <svg class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                 width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                                <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                            </svg>
                                                            <svg
                                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                            </svg>
                                                        </button>
                                                        <div id="faq-collapse-41"
                                                             class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                                             aria-labelledby="faq-41">
                                                            <div class="p-5">
                                                                <p class="text-gray-800">
                                                                    I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="hs-accordion bg-white border -mt-px rounded-sm"
                                                         id="faq-42">
                                                        <button type="button"
                                                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:border-b hs-accordion-active:border-gray-200 justify-between inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition py-4 px-5 hover:text-gray-500"
                                                                aria-controls="faq-collapse-42">
                                                            How Can I contact?
                                                            <svg
                                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                                <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                            </svg>
                                                            <svg
                                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                            </svg>
                                                        </button>
                                                        <div id="faq-collapse-42"
                                                             class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                             aria-labelledby="faq-42">
                                                            <div class="p-5">
                                                                <p class="text-gray-800">
                                                                    I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="hs-accordion bg-white border -mt-px rounded-sm"
                                                         id="faq-43">
                                                        <button type="button"
                                                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:border-b hs-accordion-active:border-gray-200 justify-between inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition py-4 px-5 hover:text-gray-500"
                                                                aria-controls="faq-collapse-43"> Can I use this Plugins in Another Template?
                                                            <svg
                                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                                <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                            </svg>
                                                            <svg
                                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                            </svg>
                                                        </button>
                                                        <div id="faq-collapse-43"
                                                             class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                             aria-labelledby=" faq-43">
                                                            <div class="p-5">
                                                                <p class="text-gray-800">
                                                                    I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences.
                                                                </p>
                                                            </div>
                                                        </div>



                                                    </div>

                                                    <div class="hs-accordion bg-white border -mt-px rounded-sm"
                                                         id="faq-44">
                                                        <button type="button"
                                                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:border-b hs-accordion-active:border-gray-200 justify-between inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition py-4 px-5 hover:text-gray-500"
                                                                aria-controls="faq-collapse-44">  Does it Easy to Customizable?
                                                            <svg
                                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                                <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                            </svg>
                                                            <svg
                                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                            </svg>
                                                        </button>
                                                        <div id="faq-collapse-44"
                                                             class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                             aria-labelledby=" faq-44">
                                                            <div class="p-5">
                                                                <p class="text-gray-800">
                                                                    I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences.
                                                                </p>
                                                            </div>
                                                        </div>



                                                    </div>

                                                    <div class="hs-accordion bg-white border -mt-px rounded-sm"
                                                         id="faq-45">
                                                        <button type="button"
                                                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:border-b hs-accordion-active:border-gray-200 justify-between inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition py-4 px-5 hover:text-gray-500"
                                                                aria-controls="faq-collapse-45">   How Can I Add another page in Template?
                                                            <svg
                                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                                <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                            </svg>
                                                            <svg
                                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                            </svg>
                                                        </button>
                                                        <div id="faq-collapse-45"
                                                             class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                             aria-labelledby=" faq-45">
                                                            <div class="p-5">
                                                                <p class="text-gray-800">
                                                                    I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences.
                                                                </p>
                                                            </div>
                                                        </div>



                                                    </div>

                                                    <div class="hs-accordion bg-white border -mt-px rounded-sm"
                                                         id="faq-46">
                                                        <button type="button"
                                                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:border-b hs-accordion-active:border-gray-200 justify-between inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition py-4 px-5 hover:text-gray-500"
                                                                aria-controls="faq-collapse-46">    How can I download This template?
                                                            <svg
                                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                                <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                            </svg>
                                                            <svg
                                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                            </svg>
                                                        </button>
                                                        <div id="faq-collapse-46"
                                                             class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                             aria-labelledby=" faq-46">
                                                            <div class="p-5">
                                                                <p class="text-gray-800">
                                                                    I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences.
                                                                </p>
                                                            </div>
                                                        </div>



                                                    </div>

                                                    <div class="hs-accordion bg-white border -mt-px rounded-sm"
                                                         id="faq-47">
                                                        <button type="button"
                                                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:border-b hs-accordion-active:border-gray-200 justify-between inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition py-4 px-5 hover:text-gray-500"
                                                                aria-controls="faq-collapse-47">    How To Add additional plugins?
                                                            <svg
                                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                                <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                            </svg>
                                                            <svg
                                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round" />
                                                            </svg>
                                                        </button>
                                                        <div id="faq-collapse-47"
                                                             class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                             aria-labelledby=" faq-47">
                                                            <div class="p-5">
                                                                <p class="text-gray-800">
                                                                    I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences.
                                                                </p>
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
                               <input type="text" id="input-label" name="Name_Section_Ar" class="ti-form-input w-full"
                                      placeholder="{{ trans('Sections_trans.Section_name_ar') }}" autofocus>
                           </div>

                            <div class="mb-6" >
                                <input type="text" id="input-label" name="Name_Section_En" class="ti-form-input"
                                       placeholder="{{ trans('Sections_trans.Section_name_en') }}" autofocus>
                            </div>
                            <div class="mb-6" >
                                <label for="inputName" class="ti-form-label">{{
                                            trans('Sections_trans.Name_Grade') }}</label>
                                <select name="Grade_id" class="ti-form-select"   onchange="console.log(this.value)">
                                    <option value="" selected disabled>{{ trans('Sections_trans.Select_Grade')
                                                }}
                                    @foreach ($list_Grades as $list_Grade)
                                        <option value="{{ $list_Grade->id }}"> {{ $list_Grade->Name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div>

                                <label for="inputName" class="ti-form-label">{{
                                            trans('Sections_trans.Name_Class') }}</label>
                                <select name="Class_id" class="ti-form-select">

                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="ti-modal-footer">
                        <button type="button"
                                class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary"
                                data-hs-overlay="#hs-focus-management-modal">
                            Close
                        </button>
                        <button type="submit" class="ti-btn ti-btn-primary" >
                            Save changes
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
        document.addEventListener('DOMContentLoaded', function() {
            var gradeSelect = document.querySelector('select[name="Grade_id"]');
            var classSelect = document.querySelector('select[name="Class_id"]');

            gradeSelect.addEventListener('change', function() {
                var gradeId = this.value;
                if (gradeId) {
                    var url = "{{ URL::to('classes') }}/" + gradeId;

                    fetch(url)
                        .then(function(response) {
                            if (!response.ok) {
                                throw new Error('AJAX load did not work');
                            }
                            return response.json();
                        })
                        .then(function(data) {
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
                        .catch(function(error) {
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

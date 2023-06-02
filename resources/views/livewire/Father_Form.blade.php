@if($currentStep == 1)
<div class="box-body">
            <h1 class="text-xl mb-4  text-blue-800 font-bold underline italic"> {{ trans('Parent_trans.Step1') }}</h1>
                <div class="grid lg:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="ti-form-label mb-0">{{trans('Parent_trans.Name_Father')}}</label>
                        <input type="text" class="firstName my-auto ti-form-input"  wire:model="Name_Father"  required>
                        <span class="firstNameError text-red-500 text-xs hidden">error</span>
                    </div>
                    <div class="space-y-2">
                        <label class="ti-form-label mb-0">{{trans('Parent_trans.Name_Father_en')}}</label>
                        <input type="text" class="lastName my-auto ti-form-input" wire:model="Name_Father_en" required>
                        <span class="lastNameError text-red-500 text-xs hidden">error</span>
                    </div>
                    <div class="space-y-2">
                        <label class="ti-form-label mb-0">{{trans('Parent_trans.Job_Father')}}</label>
                        <input type="text" class="lastName my-auto ti-form-input" wire:model="Job_Father" required>
                        <span class="phoneError text-red-500 text-xs hidden">error</span>
                    </div>
                    <div class="space-y-2">
                        <label class="ti-form-label mb-0">{{trans('Parent_trans.Job_Father_en')}}</label>
                        <input type="text" class="lastName my-auto ti-form-input" wire:model="Job_Father_en" required>
                        <span class="emailError text-red-500 text-xs hidden">error</span>
                    </div>
                </div>
                <div class="my-5">
                    <div class="grid lg:grid-cols-3 gap-x-6 space-y-4 lg:space-y-0">
                        {{-- id number father --}}
                        <div>
                            <label for="title ">{{trans('Parent_trans.National_ID_Father')}}</label>
                            <input type="text" class="lastName my-auto ti-form-input mt-2" wire:model="National_ID_Father" required>
                        </div>
                        {{-- passport number father --}}
                        <div>
                            <label for="title">{{trans('Parent_trans.Passport_ID_Father')}}</label>
                            <input type="text" class="lastName my-auto ti-form-input mt-2" wire:model="Passport_ID_Father" required>
                        </div>
                        {{-- phone number father --}}
                        <div>
                            <label for="title">{{trans('Parent_trans.Phone_Father')}}</label>
                            <input type="text" class="lastName my-auto ti-form-input mt-2" wire:model="Phone_Father" required>
                        </div>
                    </div>
                </div>
                <div class="my-5">
                    <div class="space-y-2">
                        <div class="grid lg:grid-cols-3 gap-x-6 space-y-4 lg:space-y-0">
                            <div class="space-y-2">
                                <label class="ti-form-select-label">{{trans('Parent_trans.Nationality_Father_id')}}</label>
                                <select class="ti-form-select" data-trigger name="form-choice-select"
                                        id="form-choice-select">
                                    <option selected>{{trans('Parent_trans.Choose')}}...</option>
                                    @foreach($Nationalities as $National)
                                        <option value="{{$National->id}}">{{$National->Name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="space-y-2">
                                <label class="ti-form-select-label">{{trans('Parent_trans.Blood_Type_Father_id')}}</label>
                                <select class="ti-form-select" data-trigger
                                        id="form-choice-select1">
                                    <option selected>{{trans('Parent_trans.Choose')}}...</option>
                                    @foreach($Type_Bloods as $Type_Blood)
                                        <option value="{{$Type_Blood->id}}">{{$Type_Blood->Name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="space-y-2">
                                <label class="ti-form-label mb-0">{{trans('Parent_trans.Religion_Father_id')}}</label>
                                <select class="ti-form-select" wire:model="Religion_Father_id">
                                    <option selected>{{trans('Parent_trans.Choose')}}...</option>
                                    @foreach($Religions as $Religion)
                                        <option value="{{$Religion->id}}">{{$Religion->Name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-5">
                    <div>
                        <label class="ti-form-label mb-0">{{trans('Parent_trans.Address_Father')}}</label>
                        <input type="text" class="postalAddress my-auto ti-form-input"  required>
                    </div>

                </div>

                <button wire:click="firstStepSubmit" class="ti-btn ti-btn-primary ti-custom-validate-btn">{{trans('Parent_trans.Next')}}</button>
        </div>
@endif

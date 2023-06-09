@if($currentStep == 2)
    <div class="box-body">
        <h1 class="text-xl mb-4  text-blue-800 font-bold underline italic"> {{ trans('Parent_trans.Step2') }}</h1>
        <form class="ti-custom-validation" novalidate>
            <div class="grid lg:grid-cols-2 gap-6">
                <div class="space-y-2">
                    <label class="ti-form-label mb-0">{{trans('Parent_trans.Name_Mother')}}</label>
                    <input type="text" class="firstName my-auto ti-form-input" wire:model="Name_Mother" required>
                    @error('Name_Mother')
                    <div class="bg-danger/10 border border-danger/10 alert text-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="space-y-2">
                    <label class="ti-form-label mb-0">{{trans('Parent_trans.Name_Mother_en')}}</label>
                    <input type="text" class="lastName my-auto ti-form-input" wire:model="Name_Mother_en" required>
                    @error('Name_Mother_en')
                    <div class="bg-danger/10 border border-danger/10 alert text-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="space-y-2">
                    <label class="ti-form-label mb-0">{{trans('Parent_trans.Job_Mother')}}</label>
                    <input type="text" class="lastName my-auto ti-form-input" wire:model="Job_Mother" required>
                    @error('Job_Mother')
                    <div class="bg-danger/10 border border-danger/10 alert text-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="space-y-2">
                    <label class="ti-form-label mb-0">{{trans('Parent_trans.Job_Mother_en')}}</label>
                    <input type="text" class="lastName my-auto ti-form-input" wire:model="Job_Mother_en" required>
                    @error('Job_Mother_en')
                    <div class="bg-danger/10 border border-danger/10 alert text-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="my-5">
                <div class="grid lg:grid-cols-3 gap-x-6 space-y-4 lg:space-y-0">
                    {{-- id number Mother --}}
                    <div>
                        <label for="title ">{{trans('Parent_trans.National_ID_Mother')}}</label>
                        <input type="text" class="lastName my-auto ti-form-input mt-2" wire:model="National_ID_Mother"
                               required>
                        @error('National_ID_Mother')
                        <div class="bg-danger/10 border border-danger/10 alert text-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    {{-- passport number Mother --}}
                    <div>
                        <label for="title">{{trans('Parent_trans.Passport_ID_Mother')}}</label>
                        <input type="text" class="lastName my-auto ti-form-input mt-2" wire:model="Passport_ID_Mother"
                               required>
                        @error('Passport_ID_Mother')
                        <div class="bg-danger/10 border border-danger/10 alert text-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    {{-- phone number Mother --}}
                    <div>
                        <label for="title">{{trans('Parent_trans.Phone_Mother')}}</label>
                        <input type="text" class="lastName my-auto ti-form-input mt-2" wire:model="Phone_Mother"
                               required>
                        @error('Phone_Mother')
                        <div class="bg-danger/10 border border-danger/10 alert text-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="my-5">
                <div class="space-y-2">
                    <div class="grid lg:grid-cols-3 gap-x-6 space-y-4 lg:space-y-0">
                        <div class="space-y-2">
                            <label class="ti-form-select-label">{{trans('Parent_trans.Nationality_Father_id')}}</label>
                            <select class="ti-form-select" data-trigger name="form-choice-select" wire:model="Nationality_Mother_id"
                                    id="form-choice-select">
                                <option selected>{{trans('Parent_trans.Choose')}}...</option>
                                @foreach($Nationalities as $National)
                                    <option value="{{$National->id}}">{{$National->Name}}</option>
                                @endforeach
                            </select>
                            @error('Nationality_Mother_id')
                            <div class="bg-danger/10 border border-danger/10 alert text-danger" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="space-y-2">
                            <label class="ti-form-select-label">{{trans('Parent_trans.Blood_Type_Father_id')}}</label>
                            <select class="ti-form-select" data-trigger wire:model="Blood_Type_Mother_id"
                                    id="form-choice-select1">
                                <option selected>{{trans('Parent_trans.Choose')}}...</option>
                                @foreach($Type_Bloods as $Type_Blood)
                                    <option value="{{$Type_Blood->id}}">{{$Type_Blood->Name}}</option>
                                @endforeach
                            </select>
                            @error('Blood_Type_Mother_id')
                            <div class="bg-danger/10 border border-danger/10 alert text-danger" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="space-y-2">
                            <label class="ti-form-label mb-0">{{trans('Parent_trans.Religion_Father_id')}}</label>
                            <select class="ti-form-select" wire:model="Religion_Mother_id">
                                <option selected>{{trans('Parent_trans.Choose')}}...</option>
                                @foreach($Religions as $Religion)
                                    <option value="{{$Religion->id}}">{{$Religion->Name}}</option>
                                @endforeach
                            </select>
                            @error('Religion_Mother_id')
                            <div class="bg-danger/10 border border-danger/10 alert text-danger" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-5">
                <div>
                    <label class="ti-form-label mb-0">{{trans('Parent_trans.Address_Mother')}}</label>
                    <input wire:model="Address_Mother" type="text" class="postalAddress my-auto ti-form-input" required>
                    @error('Address_Mother')
                    <div class="bg-danger/10 border border-danger/10 alert text-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>

            </div>
                <div class="flex-space-x-6">
                    <button  type="button"
                            class="ti-btn ti-btn-dark ti-custom-validate-btn"  wire:click="back(1)">{{trans('Parent_trans.Back')}}</button>
                    <button wire:click="secondStepSubmit" type="button"
                            class="ti-btn ti-btn-primary ti-custom-validate-btn">{{trans('Parent_trans.Next')}}</button>
                </div>

        </form>
    </div>
@endif

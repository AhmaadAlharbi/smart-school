<div>
    @if (!empty($successMessage))


        <div class="bg-success/10 border border-success/10 alert text-success" role="alert">
            {{ $successMessage }}
        </div>
    @endif

    @if ($catchError)

            <div class="bg-danger/10 border border-danger/10 alert text-danger" role="alert">
                {{ $catchError }}
            </div>
    @endif
    @if($show_table)
        @include('livewire.Parent_Table')
    @else
        @include('livewire.Father_Form')
        @include('livewire.Mother_Form')

        @if ($currentStep == 3)
            <div class="max-w-2xl px-10 py-4 mt-4">
                <h1 class="text-xl mb-4  text-blue-800 font-bold underline italic"> {{trans('Parent_trans.Attachments')}}</h1>

                <label for="file-input" class="sr-only">Choose file</label>
                <input type="file" name="file-input" id="file-input" class="block w-full border border-gray-200 focus:shadow-sm rounded-sm text-sm focus:z-10 focus:outline-0 focus:border-gray-200
                                                file:border-0
                                                file:bg-gray-100 ltr:file:mr-4 rtl:file:ml-4
                                                file:py-3 file:px-4
                                               ">
                <div class="flex space-x-12 mt-6 py-4">

                    <button  type="button"
                            class="ti-btn ti-btn-dark ti-custom-validate-btn"  wire:click="back(2)">{{trans('Parent_trans.Back')}}</button>
                    @if($updateMode)
                        <button class="ti-btn ti-btn-primary ti-custom-validate-btn" wire:click="submitForm_edit"
                                type="button">{{trans('Parent_trans.Finish')}}
                        </button>
                    @else
                        <button class="ti-btn ti-btn-primary ti-custom-validate-btn" wire:click="submitForm" type="button">{{
                        trans('Parent_trans.Finish') }}</button>
                    @endif
                </div>
            </div>

        @endif

    @endif

</div>

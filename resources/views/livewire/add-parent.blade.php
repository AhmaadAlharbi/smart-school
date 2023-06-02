<div>

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
                    <button wire:click="secondStepSubmit" type="button"
                            class="ti-btn ti-btn-primary ti-custom-validate-btn">{{trans('Parent_trans.Finish')}}</button>
                </div>
            </div>

        @endif

    @endif

</div>

<?php

namespace App\Http\Livewire;

use App\Models\Grade;
use App\Models\My_Parent;
use App\Models\Nationalitie;
use App\Models\Religion;
use App\Models\Type_Blood;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;
class AddParent extends Component
{
    public $show_table = true;
    public $currentStep = 1,

        // Father_INPUTS
        $Name_Father, $Name_Father_en,
        $National_ID_Father, $Passport_ID_Father,
        $Phone_Father, $Job_Father, $Job_Father_en,
        $Nationality_Father_id, $Blood_Type_Father_id,
        $Address_Father, $Religion_Father_id,

        // Mother_INPUTS
        $Name_Mother, $Name_Mother_en,
        $National_ID_Mother, $Passport_ID_Mother,
        $Phone_Mother, $Job_Mother, $Job_Mother_en,
        $Nationality_Mother_id, $Blood_Type_Mother_id,
        $Address_Mother, $Religion_Mother_id;
    public function render()
    {
        return view('livewire.add-parent', [
            'Nationalities' => Nationalitie::all(),
            'Type_Bloods' => Type_Blood::all(),
            'Religions' => Religion::all(),
            'my_parents' => My_Parent::all(),
        ]);
    }
    public function showformadd()
    {
        $this->show_table = false;
    }
    public function firstStepSubmit()
    {

        $this->currentStep = 2;
    }
    public function secondStepSubmit(){
        $this->currentStep = 3;
    }
    public function back($step)
    {
        $this->currentStep = $step;
    }
}

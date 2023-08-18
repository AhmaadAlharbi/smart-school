<?php

namespace App\Http\Livewire;

use App\Models\Grade;
use App\Models\Subject;
use Livewire\Component;
use App\Models\Specialization;

class SetSubjectToGrade extends Component
{
    public $grade_id;
    public $selectedGrade = 1;
    public $selectedSubjects = [];
    public $selectedDepartment;

    public function render()
    {
        $grade = Grade::findOrFail($this->grade_id);
        $grades = Grade::all();
        $specializations = Specialization::all();
        // Get subjects that don't belong to the selected grade

        return view('livewire.set-subject-to-grade', compact('grade', 'grades', 'specializations'));
    }
    public function updatedSelectedDepartment()
    {
        $grade = Grade::findOrFail($this->selectedGrade);

        $this->selectedSubjects = Subject::where('specialization_id', $this->selectedDepartment)
            ->whereDoesntHave('grades', function ($query) use ($grade) {
                $query->where('grades.id', $grade->id);
            })
            ->get();
    }

    public function store()
    {

        $grade = Grade::findOrFail($this->selectedGrade);
        $grade->subjects()->attach($this->selectedSubjects);
        $this->selectedSubjects = [];
        session()->flash('success', 'Teachers have been assigned to the grade.');

        return redirect()->route('grades.index');
    }
}

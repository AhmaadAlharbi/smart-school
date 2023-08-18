<?php

namespace App\Http\Livewire;

use App\Models\Grade;
use App\Models\Teacher;
use Livewire\Component;
use App\Models\Specialization;

class SetTeacherToGrade extends Component
{
    public $grade_id;
    public $selectedGrade;
    public $selectedDepartment = 1;
    public $selectedTeachers = [];

    public function render()
    {
        $grade = Grade::findOrFail($this->grade_id);
        $grades = Grade::all();
        $specializations = Specialization::all();
        $teachers = Teacher::where('teachers.Specialization_id', $this->selectedDepartment)
            ->whereDoesntHave('grades', function ($query) {
                $query->where('grades.id', $this->grade_id);
            })
            ->get();
        return view('livewire.set-teacher-to-grade', compact('grade', 'grades', 'specializations', 'teachers'));
    }
    public function store()
    {
        $grade = Grade::findOrFail($this->grade_id);
        // Attach the selected teachers to the grade
        $grade->teachers()->attach($this->selectedTeachers);
        // Clear the selected teachers array after storing
        $this->selectedTeachers = [];
        // Show success message
        session()->flash('success', 'Teachers have been assigned to the grade.');
        return redirect()->route('grades.index');

        // Optionally, you can redirect to a specific route or page
        // return redirect()->route('grades.index');
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Grade;
use App\Models\Subject;
use Livewire\Component;
use App\Models\Specialization;
use Flasher\Laravel\Http\Request;

class SetTeacherToSubject extends Component
{
    public $subject_id;
    public $selectedGrade = 1;
    public $selectedTeachers = [];

    public function render()
    {
        $subject = Subject::findOrFail($this->subject_id);
        $grades = Grade::all();
        $selectedGrade = Grade::findOrFail($this->selectedGrade);
        // Get the IDs of teachers associated with the subject
        $selectedTeachersIds = $subject->teachers->pluck('id')->toArray();
        // Get teachers that belong to the selected grade and specialization but are not associated with the subject
        // Get teachers that belong to the selected grade and specialization but are not associated with the subject
        $teachers = $selectedGrade->teachers()
            ->where('teachers.Specialization_id', $subject->specialization_id) // Specify the table name or alias
            ->whereNotIn('teachers.id', $selectedTeachersIds) // Specify the table name or alias
            ->get();
        $specializations = Specialization::all();
        return view('livewire.set-teacher-to-subject', compact('subject', 'grades', 'specializations', 'teachers'));
    }
    public function store()
    {
        $subject = Subject::findOrFail($this->subject_id);
        // Attach teachers with the 'created_at' timestamp
        $subject->teachers()->attach($this->selectedTeachers, ['created_at' => now()]);
        toastr()->success(trans('messages.success'));
        return redirect()->route('subjects.index');
    }
}
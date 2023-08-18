<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\GradeTeacher;
use Illuminate\Http\Request;
use App\Models\Specialization;

class GradeController extends Controller
{
    public function index()
    {
        $grades = Grade::all();
        return view('pages.grades.index', compact('grades'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'Name' => 'required|max:255',
            'Name_en' => 'required|max:255'

        ]);
        try {
            // $validated = $request->validated();
            $Grade = new Grade();
            /*
            $translations = [
                'en' => $request->Name_en,
                'ar' => $request->Name
            ];
            $Grade->setTranslations('Name', $translations);
            */
            $Grade->Name = ['en' => $request->Name_en, 'ar' => $request->Name];
            $Grade->Notes = $request->Notes;
            $Grade->save();
            session()->flash('toast', [
                'type' => 'success',
                'message' => trans('messages.success'),
                'key' => 'add',
            ]);
            // toastr()->success(trans('messages.success'));
            return redirect()->route('grades.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function update(Request $request)
    {
        try {
            //            $validated = $request->validated();
            $Grades = Grade::findOrFail($request->id);
            $Grades->update([
                $Grades->Name = ['ar' => $request->Name, 'en' => $request->Name_en],
                $Grades->Notes = $request->Notes,
            ]);
            session()->flash('toast', [
                'type' => 'success',
                'message' => trans('messages.Update'),
                'key' => 'update',
            ]);
            //            toastr()->success(trans('messages.Update'));
            return redirect()->route('grades.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy(Request $request)
    {

        try {
            $grades = Grade::findOrFail($request->id)->delete();
            //            toastr()->error(trans('messages.Delete'));
            session()->flash('toast', [
                'type' => 'success',
                'message' => trans('messages.Delete'),
                'key' => 'delete',
            ]);
            return redirect()->route('grades.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    public function gradesTeachers($id)
    {
        $grade = Grade::findOrFail($id);
        $teachers = $grade->teachers;
        return view('pages.teachers.index', compact('teachers', 'grade'));
    }
    public function setTeacher($id)
    {
        $grade = Grade::findOrFail($id);
        $grades = Grade::all();
        $specializations = Specialization::all();
        return view('Pages.Grades.setTeacher', compact('grade', 'grades', 'specializations'));
    }
    public function gradesSubjects($id)
    {
        $grade = Grade::findOrFail($id);
        $subjects = $grade->subjects;
        return view('pages.Subjects.index', compact('subjects', 'grade'));
    }
    public function deleteTeacher($grade_id, $teacher_id)
    {
        try {
            $grade = Grade::findOrFail($grade_id);
            $grade->teachers()->detach($teacher_id);
            toastr()->success(trans('messages.success'));
        } catch (Exception $e) {
            toastr()->error('An error occurred.');
        }

        return back();
    }
    public function setSubject($id)
    {
        $grade = Grade::findOrFail($id);
        $grades = Grade::all();
        $specializations = Specialization::all();
        return view('Pages.Grades.setSubject', compact('grade'));
    }
}

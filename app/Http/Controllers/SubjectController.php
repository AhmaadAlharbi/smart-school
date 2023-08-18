<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Models\Specialization;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::get();
        return view('pages.Subjects.index', compact('subjects'));
    }

    public function create()
    {
        $grades = Grade::get();
        $teachers = Teacher::get();
        $specializations = Specialization::all();
        return view('pages.Subjects.create', compact('grades', 'teachers', 'specializations'));
    }


    public function store(Request $request)
    {
        try {
            $subjects = new Subject();
            $subjects->name = ['en' => $request->Name_en, 'ar' => $request->Name_ar];
            $subjects->specialization_id = $request->specialization_id;
            // $subjects->grade_id = $request->Grade_id;
            // $subjects->classroom_id = $request->Class_id;
            // $subjects->teacher_id = 1;
            $subjects->save();
            $subjects->grades()->attach($request->grades);
            toastr()->success(trans('messages.success'));
            return redirect()->route('subjects.create');
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }


    public function edit($id)
    {

        $subject = Subject::findorfail($id);
        $grades = Grade::get();
        $teachers = Teacher::get();
        $specializations = Specialization::all();

        return view('Pages.Subjects.edit', compact('subject', 'grades', 'teachers', 'specializations'));
    }

    public function update(Request $request, $id)
    {
        try {
            $subject = Subject::findOrFail($id);

            $subject->setTranslation('name', 'en', $request->Name_en);
            $subject->setTranslation('name', 'ar', $request->Name_ar);

            $subject->specialization_id = $request->specialization_id;
            $subject->grades()->sync($request->grades);

            $subject->save();

            toastr()->success(trans('messages.Update'));
            return redirect()->route('subjects.index');
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function destroy(Request $request)
    {
        try {
            Subject::destroy($request->id);
            toastr()->success(trans('messages.Delete'));
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    public function subjectsTeachers($id)
    {
        $subject = Subject::findOrFail($id);
        $teachers =  $subject->teachers;
        return view('pages.teachers.index', compact('teachers', 'subject'));
    }
    public function getSubjectDepartment($id)
    {
        $subjects = Subject::where('specialization_id', $id)->get();
        return $subjects;
    }
    public function setTeacher($id)
    {
        $subject = Subject::findOrFail($id);
        $grades = Grade::all();
        $specializations = Specialization::all();

        return view('Pages.subjects.setTeacher', compact('subject', 'grades', 'specializations'));
    }
    public function deleteTeacher($subject_id, $teacher_id)
    {
        try {
            $subject = Subject::findOrFail($subject_id);
            $subject->teachers()->detach($teacher_id);

            toastr()->success(trans('messages.success'));
        } catch (Exception $e) {
            toastr()->error('An error occurred.');
        }

        return back();
    }
}

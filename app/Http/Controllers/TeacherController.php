<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

use App\Models\Grade;
use App\Models\Gender;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Models\Specialization;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('pages.teachers.index', compact('teachers'));
    }

    public function create()
    {
        $locale = App::currentLocale();
        $specializations = Specialization::all();
        $genders = Gender::all();
        $grades = Grade::all();
        $subjects = [];
        return view('pages.teachers.create', compact('specializations', 'genders', 'grades', 'subjects', 'locale'));
    }
    public function store(Request $request)
    {

        try {
            $Teachers = new Teacher();
            $Teachers->Name = ['en' => $request->Name_en, 'ar' => $request->Name_ar];
            $Teachers->Specialization_id = $request->Specialization_id;
            $Teachers->Gender_id = $request->Gender_id;
            $Teachers->Joining_Date = $request->Joining_Date;
            $Teachers->Address = $request->Address;
            $Teachers->save();
            $Teachers->grades()->attach($request->grades);
            $Teachers->subjects()->attach($request->selected_subjects);

            toastr()->success(trans('messages.success'));
            return redirect()->route('teachers.create');
        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
    public function edit(Teacher $teacher)
    {
        // return $teacher->grades->pluck('id')->toArray();
        if (!$teacher) {
            abort(404);
        }
        $specializations = Specialization::all();
        $genders = Gender::all();
        $grades = Grade::all();
        return view('pages.teachers.edit', compact('teacher', 'specializations', 'genders', 'grades'));
    }
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'Name_ar' => 'required|string|max:255',
            'Name_en' => 'required|string|max:255',
            'Specialization_id' => 'required|numeric',
            'Gender_id' => 'required|numeric',
            'Joining_Date' => 'required|date',
            'Address' => 'nullable|string',
        ]);

        // Find the teacher to be updated
        $teacher = Teacher::findOrFail($id);

        // Update the teacher's data
        $teacher->setTranslation('Name', 'ar', $request->input('Name_ar'));
        $teacher->setTranslation('Name', 'en', $request->input('Name_en'));
        $teacher->Specialization_id = $request->input('Specialization_id');
        $teacher->Gender_id = $request->input('Gender_id');
        $teacher->Joining_Date = $request->input('Joining_Date');
        $teacher->Address = $request->input('Address');
        $teacher->save();
        // Update the teacher's grades using the sync method to prevent duplication
        $teacher->grades()->sync($request->grades);
        // Redirect back to the teachers list with a success message
        return redirect()->route('teachers.index')->with('success', 'Teacher updated successfully.');
    }
    public function destroy(Request $request)
    {
        Teacher::findOrFail($request->id)->delete();
        toastr()->success(trans('messages.success'));
        return back()->withInput(['grade' => $request->id]);
    }
}

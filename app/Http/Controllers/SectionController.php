<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Section;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Classroom;
use Illuminate\Http\Request;
use App\Models\Specialization;
use App\Models\SectionSubjectTeacher;

use Illuminate\Support\Facades\DB;

class SectionController extends Controller
{
    public function index()
    {
        $Grades = Grade::with(['Sections'])->get();
        $first_grade = Grade::first();
        $sections_first_grade = Section::where('Grade_id', $first_grade->id)->get();
        $list_Grades = Grade::all();
        $teachers = Teacher::all();
        $specializations = Specialization::all();
        return view('pages.Sections.index', compact('Grades', 'list_Grades', 'first_grade', 'sections_first_grade', 'teachers', 'specializations'));
    }

    public function getclasses($id)
    {
        $list_classes = Classroom::where("Grade_id", $id)->pluck("Name_Class", "id");

        return $list_classes;
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'Name_Section_Ar' => 'required|max:255',
            'Name_Section_En' => 'required|max:255',
            'Grade_id' => 'required',
            'Class_id' => 'required'

        ]);

        try {
            // Start a database transaction
            DB::beginTransaction();
            //            $validated = $request->validated();
            $Sections = new Section();
            $Sections->Name_Section = ['ar' => $request->Name_Section_Ar, 'en' => $request->Name_Section_En];
            $Sections->Grade_id = $request->Grade_id;
            $Sections->Class_id = $request->Class_id;
            $Sections->Status = 1;
            $Sections->save();
            $Sections->teachers()->attach($request->teacher_id);

            // $Sections->teachers()->attach($request->teacher_id);
            // Commit the transaction
            DB::commit();
            session()->flash('toast', [
                'type' => 'success',
                'message' => trans('messages.success'),
                'key' => 'add',
            ]);
            return back()->withInput(['grade' => $request->id]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function update(Request $request)
    {
        $Sections = Section::findOrFail($request->id);
        try {
            $Sections->Name_Section = ['ar' => $request->Name_Section_Ar, 'en' => $request->Name_Section_En];
            $Sections->Grade_id = $request->Grade_id1;
            $Sections->Class_id = $request->Class_id1;

            if (isset($request->Status)) {
                $Sections->Status = 1;
            } else {
                $Sections->Status = 2;
            }
            // update pivot tABLE
            //            if (isset($request->teacher_id)) {
            //                $Sections->teachers()->sync($request->teacher_id);
            //            } else {
            //                $Sections->teachers()->sync(array());
            //            }

            $Sections->save();

            session()->flash('toast', [
                'type' => 'success',
                'message' => trans('messages.Update'),
                'key' => 'update',
            ]);
            return back()->withInput(['grade' => $request->id]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy(request $request)
    {

        Section::findOrFail($request->id)->delete();

        session()->flash('toast', [
            'type' => 'success',
            'message' => trans('messages.Delete'),
            'key' => 'delete',
        ]);
        return back()->withInput(['grade' => $request->id]);
    }

    public function getSectionInGrade($id)
    {
        $Grades = Grade::with(['Sections'])->get();
        $Grade = Grade::findOrFail($id);
        $sections_first_grade = Section::where('Grade_id', $Grade->id)->get();
        $list_Grades = Grade::all();
        return view('pages.Sections.sections_grade', compact('Grades', 'Grade', 'list_Grades', 'sections_first_grade'));
    }
    // public function sectionsTeachers($id)
    // {
    //     $section = Section::findOrFail($id);
    //     $teachers = $section->teachers;
    //     return view('Pages.teachers.index', compact('teachers'));
    // }
    // public function sectionsAndTeachers($id)
    // {
    //     // Find the section and its associated grade
    //     $section = Section::findOrFail($id);
    //     $grade = $section->grades;
    //     $savedData = SectionSubjectTeacher::where('section_id', $section->id)->get();

    //     // Retrieve teachers and subjects associated with the grade
    //     $teachers = $grade->teachers;
    //     $subjects = $grade->subjects;
    //     // Retrieve all departments for dropdown selection
    //     $departments = Specialization::all();
    //     // Pass data to the view
    //     return view('Pages.Sections.set_subjects_teachers', [
    //         'section' => $section,
    //         'grade' => $grade,
    //         'teachers' => $teachers,
    //         'subjects' => $subjects,
    //         'departments' => $departments,
    //         'savedData' => $savedData
    //     ]);
    // }

    public function sectionsAndTeachers($id)
    {
        // Find the section and its associated grade
        $section = Section::findOrFail($id);
        $grade = $section->grades;
        $savedData = SectionSubjectTeacher::where('section_id', $section->id)->get();

        // Retrieve teachers and subjects associated with the grade
        $teachers = $grade->teachers;
        $subjects = $grade->subjects;
        // Retrieve all departments for dropdown selection
        $departments = Specialization::all();

        // Initialize submittedSubjects based on request data
        $submittedSubjects = request()->has('teachers') ? array_keys(request()->teachers) : [];

        // Pass data to the view
        return view('Pages.Sections.set_subjects_teachers', [
            'section' => $section,
            'grade' => $grade,
            'teachers' => $teachers,
            'subjects' => $subjects,
            'departments' => $departments,
            'savedData' => $savedData,
            'submittedSubjects' => $submittedSubjects,
        ]);
    }


    public function submitSectionsAndTeachers(Request $request, $id)
    {

        try {
            DB::beginTransaction();
            $section = Section::findOrFail($id);

            // Get the submitted subjects and teachers
            $submittedSubjects = $request->input('subjects');
            $submittedTeachers = $request->input('teachers', []);

            // Delete records for unchecked subjects and their teachers
            SectionSubjectTeacher::where('section_id', $section->id)
                ->whereNotIn('subject_id', $submittedSubjects)
                ->delete();

            foreach ($submittedSubjects as $subjectId) {
                $teacherId = isset($submittedTeachers[$subjectId]) ? $submittedTeachers[$subjectId] : null;

                // Only create or update a record if both subject ID and teacher ID are valid
                if ($subjectId && $teacherId !== null) {
                    SectionSubjectTeacher::updateOrCreate(
                        ['section_id' => $section->id, 'subject_id' => $subjectId],
                        ['teacher_id' => $teacherId]
                    );
                }
            }

            DB::commit();
            toastr()->success(trans('messages.success'));
        } catch (Exception $e) {
            DB::rollback();
            toastr()->error('An error occurred.');
        }

        return back();
    }













    public function updateSectionsAndTeachers(Request $request, $id)
    {
        // Wrap the operations in a transaction
        try {
            DB::beginTransaction();

            $section = Section::findOrFail($id);

            // Sync the subjects and teachers for the section
            $section->subjects()->syncWithoutDetaching($request->subjects);
            $section->teachers()->syncWithoutDetaching($request->teachers);

            DB::commit(); // Commit the transaction
            toastr()->success(trans('messages.success'));
        } catch (Exception $e) {
            DB::rollback(); // Rollback the transaction on error
            toastr()->error('An error occurred.');
        }

        return back();
    }
}

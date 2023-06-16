<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Gender;
use App\Models\Grade;
use App\Models\My_Parent;
use App\Models\Nationalitie;
use App\Models\Section;
use App\Models\Student;
use App\Models\Type_Blood;
use Illuminate\Http\Request;
use function Symfony\Component\String\s;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('pages.students.index', compact('students',));
    }

    public function Get_classrooms($id)
    {

        $list_classes = Classroom::where("Grade_id", $id)->pluck("Name_Class", "id");
        return $list_classes;
    }

    //Get Sections
    public function Get_Sections($id)
    {

        $list_sections = Section::where("Class_id", $id)->pluck("Name_Section", "id");
        return $list_sections;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Genders = Gender::all();
        $nationals = Nationalitie::all();
        $bloods = Type_Blood::all();
        $Grades = Grade::all();
        $parents = My_Parent::all();
        return view('pages.students.create', compact('Genders', 'nationals', 'bloods', 'Grades', 'parents'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new Student();
        $student->name = ['en' => $request->name_en, 'ar' => $request->name_ar];
        $student->gender_id = $request->gender_id;
        $student->nationalitie_id = $request->nationalitie_id;
        $student->blood_id = $request->blood_id;
        $student->Date_Birth = $request->Date_Birth;
        $student->Grade_id = $request->Grade_id;
        $student->Classroom_id = $request->Classroom_id;
        $student->section_id = $request->section_id;
        $student->parent_id = $request->parent_id;
        $student->academic_year = $request->academic_year;
        $student->save();
        session()->flash('success', [
            'type' => 'success',
            'message' => trans('messages.Delete'),
            'key' => 'delete',
        ]);
        return back();
    }


    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        if(!$student){
           return abort(404);
        }
        $Genders = Gender::all();
        $nationals = Nationalitie::all();
        $bloods = Type_Blood::all();
        $Grades = Grade::all();
        $parents = My_Parent::all();
        return view('pages.students.edit', compact('student','Genders','nationals','bloods','Grades','parents'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        // Get the student from the database
        $student = Student::findOrFail($student->id);

        // Update the student's data
        $student->name = ['en' => $request->name_en, 'ar' => $request->name_ar];
        $student->gender_id = $request->gender_id;
        $student->nationalitie_id = $request->nationalitie_id;
        $student->blood_id = $request->blood_id;
        $student->Date_Birth = $request->Date_Birth;
        $student->Grade_id = $request->Grade_id;
        $student->Classroom_id = $request->Classroom_id;
        $student->section_id = $request->section_id;
        $student->parent_id = $request->parent_id;
        $student->academic_year = $request->academic_year;

        // Save the student
        $student->save();

        // Flash a success message
        session()->flash('success', [
            'type' => 'success',
            'message' => trans('messages.Update'),
            'key' => 'update',
        ]);

        // Redirect to the students index page
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        if(!$student){
            return abort(404);
        }
        Student::destroy($student->id);
        session()->flash('toast', [
            'type' => 'success',
            'message' => trans('messages.Delete'),
            'key' => 'delete',
        ]);
        return redirect()->route('students.index');
    }
}

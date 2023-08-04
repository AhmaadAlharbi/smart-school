<?php

namespace App\Http\Controllers;

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
        $specializations = Specialization::all();
        $genders = Gender::all();
        return view('pages.teachers.create', compact('specializations', 'genders'));
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
            toastr()->success(trans('messages.success'));
            return redirect()->route('teachers.create');
        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}

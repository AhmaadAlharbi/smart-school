<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Promotion;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PromotionController extends Controller
{
    public  function index()
    {
        $Grades = Grade::all();
        return view('pages.students.promotion.index', compact('Grades'));
    }
    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
            $students = Student::where('Grade_id', $request->Grade_id)->where('Classroom_id', $request->Classroom_id)->where('section_id', $request->section_id)->where('academic_year', $request->academic_year)->get();

            if ($students->count() < 1) {
                return redirect()->back()->with('error_promotions', __('لاتوجد بيانات في جدول الطلاب'));
            }

            // update in table student
            foreach ($students as $student) {

                $ids = explode(',', $student->id);
                student::whereIn('id', $ids)
                    ->update([
                        'Grade_id' => $request->Grade_id_new,
                        'Classroom_id' => $request->Classroom_id_new,
                        'section_id' => $request->section_id_new,
                        'academic_year' => $request->academic_year_new,
                    ]);

                // insert in to promotions
                Promotion::updateOrCreate([
                    'student_id' => $student->id,
                    'from_grade' => $request->Grade_id,
                    'from_Classroom' => $request->Classroom_id,
                    'from_section' => $request->section_id,
                    'to_grade' => $request->Grade_id_new,
                    'to_Classroom' => $request->Classroom_id_new,
                    'to_section' => $request->section_id_new,
                    'academic_year' => $request->academic_year,
                    'academic_year_new' => $request->academic_year_new,
                ]);
            }
            DB::commit();
            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function create()
    {
        $promotions = promotion::all();
        return view('pages.students.promotion.management', compact('promotions'));
    }
}

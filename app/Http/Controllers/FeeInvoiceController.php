<?php

namespace App\Http\Controllers;

use App\Models\Fee_invoice;
use Illuminate\Http\Request;
use App\Models\Fee;
use App\Models\Grade;
use App\Models\Student;
use App\Models\StudentAccount;
use Illuminate\Support\Facades\DB;

class FeeInvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Fee_invoices = Fee_invoice::all();
        $Grades = Grade::all();
        return view('pages.Fees_Invoices.index', compact('Fee_invoices', 'Grades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $studentIds = $request->input('student_id');
        $feeIds = $request->input('fee_id');
        $amounts = $request->input('amount');
        $descriptions = $request->input('description');

        DB::beginTransaction();

        try {
            foreach ($studentIds as $index => $studentId) {
                // Save data in the fee_invoice table
                $fees = new Fee_invoice();
                $fees->invoice_date = date('Y-m-d');
                $fees->student_id = $studentId;
                $fees->Grade_id = $request->Grade_id;
                $fees->Classroom_id = $request->Classroom_id;
                $fees->fee_id = $feeIds[$index];
                $fees->amount = $amounts[$index];
                $fees->description = $descriptions[$index];
                $fees->save();

                // Save data in the student_accounts table
                $studentAccount = new StudentAccount();
                $studentAccount->date = date('Y-m-d');
                $studentAccount->type = 'invoice';
                $studentAccount->fee_invoice_id = $fees->id;
                $studentAccount->student_id = $studentId;
                $studentAccount->Debit = $amounts[$index];
                $studentAccount->credit = 0.00;
                $studentAccount->description = $descriptions[$index];
                $studentAccount->save();
            }

            DB::commit();

            toastr()->success(trans('messages.success'));
            return redirect()->route('Fees_Invoices.index');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }



    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $student = Student::findorfail($id);
        $fees = Fee::where('Classroom_id', $student->Classroom_id)->get();
        return view('pages.Fees_Invoices.add', compact('student', 'fees'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $fee_invoices = Fee_invoice::findorfail($id);
        $fees = Fee::where('Classroom_id', $fee_invoices->Classroom_id)->get();
        return view('pages.Fees_Invoices.edit', compact('fee_invoices', 'fees'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        DB::beginTransaction();
        try {
            // تعديل البيانات في جدول فواتير الرسوم الدراسية
            $Fees = Fee_invoice::findorfail($request->id);
            $Fees->fee_id = $request->fee_id;
            $Fees->amount = $request->amount;
            $Fees->description = $request->description;
            $Fees->save();

            // تعديل البيانات في جدول حسابات الطلاب
            $StudentAccount = StudentAccount::where('fee_invoice_id', $request->id)->first();
            $StudentAccount->Debit = $request->amount;
            $StudentAccount->description = $request->description;
            $StudentAccount->save();
            DB::commit();

            toastr()->success(trans('messages.Update'));
            return redirect()->route('Fees_Invoices.index');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        try {
            Fee_invoice::destroy($request->id);
            toastr()->success(trans('messages.Delete'));
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}

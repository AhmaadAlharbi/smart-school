<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;

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
            'Name_en'=>'required|max:255'

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
}

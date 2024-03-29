<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->exists('search')) {
            $search = $request->get('search');
            $students = Student::where('first_name', 'LIKE', '%' . $search . '%')->get();
        } else $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'age' => ['nullable', 'numeric', 'min:6', 'max:30'],

        ]);
        $data = $request->all();
        $student = new Student();
        $student->fill($data);
        $student->save();

        return to_route('students.index')->with('alert-type', 'success')
            ->with('alert-message', "Lo studende  $student->last_name è stato Inserito");;

    }


    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {



        $request->validate([
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'age' => ['nullable', 'numeric', 'min:6', 'max:30'],

        ]);


        $data = $request->all();

        $student->update($data);


        return to_route('students.index')->with('alert-type', 'success')
            ->with('alert-message', "Lo studende  $student->last_name è stato Modificato ");;


    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Student $student)
    {
        $student->delete();

        return to_route('students.index')
            ->with('alert-type', 'success')
            ->with('alert-message', "Lo studende  $student->last_name è stato Cancellato");
    }


    public function trash()
    {
        $students = Student::onlyTrashed()->get();
        return view('students.trash', compact('students'));
    }

    /**
   * Restore trashed students
   */
  public function restore(string $id)
  {
    $student = Student::onlyTrashed()->findOrFail($id);
    $student->restore();
    return to_route('students.trash');
  }
   

}

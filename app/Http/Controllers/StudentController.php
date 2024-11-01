<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('students-info', compact('students')); //students - $students variable
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create-info');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'string|required',
            'email' => 'string|email|unique:students,email|required',
            'course' => 'string|required',
            'year' => 'integer|required'
        ]);
        Student::create($validateData);
        return redirect()->route('students.index');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('edit-info', compact('student')); //student - variable name ng foreach loop sa students-info.blade.php
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $validatedData = $request->validate([
            'name' => 'string|required',
            'email' => 'string|email|required',
            'course' => 'string|required',
            'year' => 'integer|required'
        ]);

        $student->update($validatedData);

        return redirect()->route('students.index')->with('success', 'updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index');
    }
}
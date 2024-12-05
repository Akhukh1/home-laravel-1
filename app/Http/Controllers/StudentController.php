<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Group;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($group)
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($group)
    {
        return view('student_create', ['data' => $group]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req, $data)
    {
        $validation = $req->validate([
            'surname'=>'required',
            'name'=>'required'
        ]);

        $student = new Student();

        $student->group_id = $data;
        $student->surname = $req->input('surname');
        $student->name = $req->input('name');

        $student->save();

        

        return redirect()->route('group-one', $data);
    }

    /**
     * Display the specified resource.
     */
    public function show($group, $student)
    {
        return view('one_student', 
        ['data' => Group::find($group)], 
        ['dataStudent' => Student::find($student)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}

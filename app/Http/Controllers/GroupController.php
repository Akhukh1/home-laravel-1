<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('groups', ['data' => Group::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('groups_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $validation = $req->validate([
            'title'=>'required',
            'start_from'=>'required'
        ]);

        $group = new Group();
        $group->title = $req->input('title');
        $group->start_from = $req->input('start_from');
        if ($req->input('is_active') === "on") {
            $group->is_active = true;
        } else {
            $group->is_active = false;
        }

        $group->save();

       return redirect('groups');
    }

    /**
     * Display the specified resource.
     */
    public function show($group)
    {
        return view('one_group', 
        ['data' => Group::find($group)], 
        ['dataStudent' => Student::where('group_id', '=', $group)->get()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group)
    {
        //
    }
}

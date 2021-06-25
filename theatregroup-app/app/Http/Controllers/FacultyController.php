<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Humbertheatrepage;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()    
    {        
        $faculties = Faculty::all();
        $htp = Humbertheatrepage::all();
        return view('faculties.index', compact('faculties'), compact('htp'));
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $htp = Humbertheatrepage::all();
        return view('faculties.create', compact('htp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Humbertheatrepage $htp)
    {
        $request->validate([
            'faculty_name' => 'required',
            'faculty_position' => 'nullable',            
            'ht_id' => 'required',
        ]);

        Faculty::create($request->all());

        return redirect()->route('faculties.index')->with('success','Faculty section created successfully.');
    }

     /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faculty $faculty
     * @return \Illuminate\Http\Response
     */
    public function show(Faculty $faculty)
    {
        $htp = Humbertheatrepage::all();
        return view('faculties.show', compact('faculty'), compact('htp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faculty $Faculty
     * @return \Illuminate\Http\Response
     */
    public function edit(Faculty $faculty, Humbertheatrepage $htp )
    {
        $htp = Humbertheatrepage::all();
        return view('faculties.edit',compact('faculty'), compact('htp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faculty $faculty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faculty $faculty)
    {
        $request->validate([
            'faculty_name' => 'required',            
            'faculty_position' => 'nullable',            
            'ht_id' => 'required',
        ]);

        $faculty->update($request->all());

        return redirect()->route('faculties.index')->with('success','Faculty section was updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faculty $faculty
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faculty $faculty)
    {
        $faculty->delete();

        return redirect()->route('faculties.index')
                    ->with('success','Faculty section was deleted successfully');
    }



}

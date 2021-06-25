<?php

namespace App\Http\Controllers;

use App\Models\Humbertheatrepage;
use App\Models\Eprogram;
use Illuminate\Http\Request;

class HumberTheatrePageController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()    
    {        
        $humbertheatrepages = Humbertheatrepage::all();
        $eprog = Eprogram::all();
        return view('humbertheatrepages.index', compact('humbertheatrepages'), compact('eprog'));
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eprog = Eprogram::all();
        return view('humbertheatrepages.create', compact('eprog'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Eprogram $eprogram)
    {
        $request->validate([
            'faculty_year' => 'required',
            'special_thanks' => 'nullable',            
            'eprogram_id' => 'required',
        ]);

        Humbertheatrepage::create($request->all());

        return redirect()->route('humbertheatrepages.index')->with('success','Humber Theatre Page created successfully.');
    }

     /**
     * Display the specified resource.
     *
     * @param  \App\Models\Humbertheatrepage $humbertheatrepage
     * @return \Illuminate\Http\Response
     */
    public function show(Humbertheatrepage $humbertheatrepage, Eprogram $eprogram)
    {
        $eprog = Eprogram::all();
        return view('humbertheatrepages.show', compact('humbertheatrepage'), compact('eprog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Humbertheatrepage $humbertheatrepage
     * @return \Illuminate\Http\Response
     */
    public function edit(Humbertheatrepage $humbertheatrepage, Eprogram $eprogram )
    {
        $eprog = Eprogram::all();
        return view('humbertheatrepages.edit',compact('humbertheatrepage'), compact('eprog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Humbertheatrepage $humbertheatrepage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Humbertheatrepage $humbertheatrepage)
    {
        $request->validate([
            'faculty_year' => 'required',            
            'special_thanks' => 'nullable',            
            'eprogram_id' => 'required',
        ]);

        $humbertheatrepage->update($request->all());

        return redirect()->route('humbertheatrepages.index')->with('success','Humber Theatre Page updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Humbertheatrepage $homepage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Humbertheatrepage $humbertheatrepage)
    {
        $humbertheatrepage->delete();

        return redirect()->route('humbertheatrepages.index')
                    ->with('success','Humber Theatre Page deleted successfully');
    }







}

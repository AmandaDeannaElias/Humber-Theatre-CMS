<?php

namespace App\Http\Controllers;

use App\Models\Contributorpage;
use App\Models\Eprogram;
use Illuminate\Http\Request;

class EprogramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eprograms = Eprogram::all();

        return view('eprograms.index', compact('eprograms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eprograms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'program_title' => 'required',
        ]);

        Eprogram::create($request->all());

        return redirect()->route('eprograms.index')->with('success','Eprogram created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Eprogram $eprogram)
    {
        {
            return view('eprograms.show',compact('eprogram'));
          }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Eprogram $eprogram)
    {
        return view('eprograms.edit',compact('eprogram'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eprogram $eprogram)
    {
        $request->validate([
            'program_title' => 'required',
        ]);

        $eprogram->update($request->all());

        return redirect()->route('eprograms.index')->with('success','Eprogram updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Eprogram $eprogram)
    {
        $eprogram->delete();

        return redirect()->route('eprograms.index')
                        ->with('success','Eprogram deleted successfully');
    }

    public function addContribPage($id){

        return view('addcontribpage.create');
    }
}

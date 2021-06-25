<?php

namespace App\Http\Controllers;

use App\Models\Playcredit;
use App\Models\Eprogram;
use Illuminate\Http\Request;

class PlayCreditsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $playcredits = Playcredit::all();        
        $eprog = Eprogram::all();
        
        return view('playcredits.index', compact('playcredits'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eprog = Eprogram::all();
        return view('playcredits.create',compact('eprog'));  
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
            'pc_title' => 'required',
            'pc_name' => 'required',
            'eprogram_id' => 'required'
        ]);

        Playcredit::create($request->all());

        return redirect()->route('playcredits.index')->with('success','Play Credit created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Playcredit  $playcredit
     * @return \Illuminate\Http\Response
     */
    public function show(Playcredit $playcredit)
    {
        $eprog = Eprogram::all();
        return view('playcredits.show',compact('playcredit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Playcredit  $playcredit
     * @return \Illuminate\Http\Response
     */
    public function edit(Playcredit $playcredit, Eprogram $eprogram )
    {
        $eprog = Eprogram::all();
        return view('playcredits.edit',compact('playcredit'), compact('eprog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Playcredit  $playcredit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Playcredit $playcredit)
    {
        $request->validate([
            'pc_title' => 'required',
            'pc_name' => 'required',
            'eprogram_id' => 'required'
        ]);

        $playcredit->update($request->all());

        return redirect()->route('playcredits.index')->with('success','Play Credit was updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Playcredit  $playcredit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Playcredit $playcredit)
    {
        $playcredit->delete();

       return redirect()->route('playcredits.index')
                       ->with('success','Play Credit was deleted successfully');
    }
}

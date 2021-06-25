<?php

namespace App\Http\Controllers;

use App\Models\Playdatetime;
use App\Models\Eprogram;
use Illuminate\Http\Request;

class PlayDateTimesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $playdatetimes = Playdatetime::all();
        $eprog = Eprogram::all();
        return view('playdatetimes.index', compact('playdatetimes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //first send data to the view
        $eprog = Eprogram::all();
        //dd($eprog); <-for debugging
        //return $eprog;
        return view('playdatetimes.create', compact('eprog'));
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
            'play_date' => 'required',
            'play_time' => 'required',
            'eprogram_id' => 'required',
        ]);

        Playdatetime::create($request->all());

        return redirect()->route('playdatetimes.index')->with('success','Play Date and Time created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Playdatetime  $playdatetime
     * @return \Illuminate\Http\Response
     */
    public function show(Playdatetime $playdatetime)
    {
        $eprog = Eprogram::all();
        return view('playdatetimes.show', compact('playdatetime'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Playdatetime  $playdatetime
     * @return \Illuminate\Http\Response
     */
    public function edit(Playdatetime $playdatetime, Eprogram $eprogram)
    {

        //first send data to the view
        $eprog = Eprogram::all();
        //dd($eprog); <-for debugging
        return view('playdatetimes.edit', compact('playdatetime'), compact('eprog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Playdatetime  $playdatetime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Playdatetime $playdatetime)
    {
        $request->validate([
            'play_date' => 'required',
            'play_time' => 'required',
            'eprogram_id' => 'required',
        ]);

        $playdatetime->update($request->all());

        return redirect()->route('playdatetimes.index')->with('success','Play Date and Time were updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Playdatetime  $playdatetime
     * @return \Illuminate\Http\Response
     */
    public function destroy(Playdatetime $playdatetime)
    {
        $playdatetime->delete();

        return redirect()->route('playdatetimes.index')
                        ->with('success','Play Date and Time were deleted successfully');
    }
}

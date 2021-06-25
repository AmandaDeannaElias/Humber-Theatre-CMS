<?php

namespace App\Http\Controllers;

use App\Models\Homepage;
use App\Models\Eprogram;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $homepages = Homepage::all();
        // dd($homepages);
        $eprog = Eprogram::all();

        return view('homepages.index', compact('homepages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eprog = Eprogram::all();
        return view('homepages.create', compact('eprog'));
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
            'main_img' => 'required',
            'img_credit' => 'required',
            'main_title' => 'required',
            'sub_title' => 'nullable',
            'program_description' => 'nullable',
            'location' => 'required',
            'content_warning' => 'nullable',
            'eprogram_id' => 'required',
        ]);

        // if ($request->hasfile('main_img')) {
        //     $file = $request->file('main_img');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = $time() . $extension;
        //     $file->move('uploads/homeimg/' . $filename);
        //     $homeimg->main_img = $filename;
            
        // } else {
        //     return $request;
        //     $homeimg->main_img = '';
        // }

        // $homeimg->save();
        Homepage::create($request->all());

        return redirect()->route('homepages.index')->with('success','Homepage created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Homepage $homepage
     * @return \Illuminate\Http\Response
     */
    public function show(Homepage $homepage, Eprogram $eprogram)
    {
        $eprog = Eprogram::all();
        return view('homepages.show', compact('homepage'), compact('eprog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Homepage $homepage
     * @return \Illuminate\Http\Response
     */
    public function edit(Homepage $homepage, Eprogram $eprogram )
    {
        $eprog = Eprogram::all();
        return view('homepages.edit',compact('homepage'), compact('eprog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Homepage $homepage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Homepage $homepage)
    {
        $request->validate([
            'main_img' => 'required',
            'img_credit' => 'required',
            'main_title' => 'required',
            'sub_title' => 'nullable',
            'program_description' => 'nullable',
            'location' => 'required',
            'content_warning' => 'nullable',
            'eprogram_id' => 'required',
        ]);

        $homepage->update($request->all());

        return redirect()->route('homepages.index')->with('success','Homepage updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Homepage $homepage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Homepage $homepage)
    {
        $homepage->delete();

        return redirect()->route('homepages.index')
                    ->with('success','Homepage deleted successfully');
    }
}

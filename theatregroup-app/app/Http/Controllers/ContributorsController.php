<?php

namespace App\Http\Controllers;

use App\Models\Contributors;
use Illuminate\Http\Request;

class ContributorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contributor = Contributors::all();

        return view('contributors.index', compact('contributor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contributors.create');
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
            'first_name' => 'required',
            'last_name' => 'required',
        ]);

        Contributors::create($request->all());
        return redirect()->route('contributors.index')->with('success','Contributor created successfully.'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Contributors $contributor)
    {
        return view('contributors.show', compact('contributor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Contributors $contributor)
    {
        return view('contributors.edit',compact('contributor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contributors $contributor)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
        ]);

        $contributor->update($request->all());

        return redirect()->route('contributors.index')->with('success','Contributor updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contributors $contributor)
    {
        $contributor->delete();

        return redirect()->route('contributors.index')->with('success', 'Contributors deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Staffrole;
use Illuminate\Http\Request;

class StaffRolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffroles = Staffrole::all();

        return view('staffroles.index', compact('staffroles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staffroles.create');
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
            'role_name' => 'required'
        ]);

        Staffrole::create($request->all());

        return redirect()->route('staffroles.index')->with('success','Staff Role created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Staffrole $staffrole)
    {
        {
            return view('staffroles.show',compact('staffrole'));
          }
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Staffrole $staffrole)
    {
        return view('staffroles.edit',compact('staffrole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staffrole $staffrole)
    {
        $request->validate([
            'role_name' => 'required',
        ]);

        $staffrole->update($request->all());

        return redirect()->route('staffroles.index')->with('success','Staff Role updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staffrole $staffrole)
    {
        $staffrole->delete();

       return redirect()->route('staffroles.index')
                       ->with('success','Staff Role deleted successfully');
    }
}

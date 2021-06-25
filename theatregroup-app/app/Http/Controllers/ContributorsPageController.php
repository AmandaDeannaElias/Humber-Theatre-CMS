<?php

namespace App\Http\Controllers;

use App\Models\Contributorpage;
use App\Models\Contributors;
use Illuminate\Http\Request;
use App\Models\Eprogram;
use App\Models\Staffrole;

class ContributorsPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contributorspages = Contributorpage::all();
        //return $contributorspages->Eprogram->program_title;
        $eprog = Eprogram::all();
        $staffroles = Staffrole::all();
        $contributors = Contributors::all();
        return view('contributorspage.index', ['contributorspages'=>$contributorspages, 'eprog'=>$eprog, 'staffroles'=>$staffroles, 'contributors'=>$contributors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eprog = Eprogram::all();
        $staffroles = Staffrole::all();
        $contributors = Contributors::all();
        //dd($contributors);
        //return $contributors2;
        return view('contributorspage.create', ['eprog'=>$eprog, 'staffroles'=>$staffroles, 'contributors'=>$contributors]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $eprogid = $request->eprogram_id;
        $result = Contributorpage::where('eprogram_id', $eprogid)->get();
        //return $result;

        $request->validate([
            'staff_title' => 'required',
            'description' => 'required',
            'sr_id' => 'required',
            'contributor_id' => 'required',
            'eprogram_id' => 'required'
        ]);
        if ($result->isEmpty()){
            Contributorpage::create($request->all());
        }
        else{
            $bb = Contributorpage::find($result[0]->contributorpage_id);
            //dd($bb);
            $bb->update($request->all());

        }



        return redirect()->route('contributorspage.index')->with('success', 'Contributor page has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Contributorpage $contributorspage)
    {
        $eprog = Eprogram::all();
        $staffrole = Staffrole::all();
        $contributor = Contributors::all();
        return view('contributorspage.show', compact('contributorspage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Contributorpage $contributorspage, Eprogram $eprog, Staffrole $staffroles, Contributors $contributor)
    {
        $contributorspage = Contributorpage::all()->first();
        $eprog = Eprogram::all();
        $staffroles = Staffrole::all();
        $contributor = Contributors::all();
        return view('contributorspage.edit', ['contributorspage'=>$contributorspage, 'eprog'=>$eprog, 'staffroles'=>$staffroles, 'contributor'=>$contributor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contributorpage $contributorspage)
    {
        $request->validate([
            'staff_title' => 'required',
            'description' => 'required',
            'sr_id' => 'required',
            'contributor_id' => 'required',
            'eprogram_id' => 'required'
        ]);

        $contributorspage->update($request->all());

        return redirect()->route('contributorspage.index')->with('success','Contributors page was updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contributorpage $contributorspage)
    {
        $contributorspage->delete();

        return redirect()->route('contributorspage.index')
                        ->with('success','Contributors page was deleted successfully');
    }
}

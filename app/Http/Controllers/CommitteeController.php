<?php

namespace App\Http\Controllers;

use App\committee;
use App\designation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CommitteeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $designations = designation::all();
        $committees= committee::orderby('position')->get();
        return view('admin.committee.index',compact('committees','designations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $committee =new committee;
        $committee->name= $request->name;
        $committee->designation_id= $request->designation_id;
        $committee->phone= $request->phone;
        $committee->position= 99999;

        $committee->save();
        return redirect()->back()->withSuccess(['Successfully Created']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\committee  $committee
     * @return \Illuminate\Http\Response
     */
    public function show(committee $committee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\committee  $committee
     * @return \Illuminate\Http\Response
     */
    public function edit(committee $committee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\committee  $committee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, committee $committee)
    { 
         $committee->name= $request->name;
        $committee->designation_id= $request->designation_id;
        $committee->phone= $request->phone;

        $committee->save();
        return redirect()->back()->withSuccess(['Successfully Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\committee  $committee
     * @return \Illuminate\Http\Response
     */
    public function destroy(committee $committee)
    {
        $committee->delete();
        return Redirect::back()->withErrors(["Item Deleted" ]);
    }

    
    public function position(Request $request)
    {
        $committees= committee::all();
        foreach($committees as $committee){
             $committee->position = $request[$committee->id];
             $committee->save();
        }
    }


}

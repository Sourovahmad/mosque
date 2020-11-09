<?php

namespace App\Http\Controllers;

use App\designation;
use App\setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = setting::where('table_name','designations')->first();
        $settings->setting= json_decode(  json_decode(  $settings->setting,true),true);
      
        $dataArray=[
            'settings'=>$settings,
            'items' => designation::all(),
        ];

        return view('admin.committee.designation', compact('dataArray'));
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
        designation::create($request->all());
        return redirect()->back()->withSuccess(['Successfully Created']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function show(designation $designation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function edit(designation $designation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, designation $designation)
    {
        $designation->update($request->all());
        return redirect()->back()->withSuccess(['Successfully Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function destroy(designation $designation)
    {
        $designation->delete();
        return Redirect::back()->withErrors(["Item Deleted" ]);
    }
}

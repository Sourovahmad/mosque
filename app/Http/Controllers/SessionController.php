<?php

namespace App\Http\Controllers;

use App\session;
use App\setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = setting::where('table_name','sessions')->first();
        $settings->setting= json_decode(  json_decode(  $settings->setting,true),true);
      
        $dataArray=[
            'settings'=>$settings,
            'items' => session::all(),
        ];

        return view('admin.committee.session', compact('dataArray'));
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
        session::create($request->all());
        return redirect()->back()->withSuccess(['Successfully Created']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\session  $session
     * @return \Illuminate\Http\Response
     */
    public function show(session $session)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\session  $session
     * @return \Illuminate\Http\Response
     */
    public function edit(session $session)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\session  $session
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, session $session)
    {
        $session->update($request->all());
        return redirect()->back()->withSuccess(['Successfully Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\session  $session
     * @return \Illuminate\Http\Response
     */
    public function destroy(session $session)
    {
        $session->delete();
        return Redirect::back()->withErrors(["Item Deleted" ]);
    }
}

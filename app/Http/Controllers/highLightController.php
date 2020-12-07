<?php

namespace App\Http\Controllers;

use App\highLight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class highLightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $highligt= highLight::orderBy('id','desc')->first();

        return view('admin.highlight.index',compact('highligt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.highlight.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $highligts = new highLight;
        $highligts->title = $request->title;
        $highligts->description = $request->description;
        $highligts->save();
        return back()->withSuccess(['highLight Created']);;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $highligts =  highLight::find(1);
        $highligts->title = $request->title;
        $highligts->description = $request->description;
        $highligts->save();
        return back()->withSuccess(['Top news updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }


}

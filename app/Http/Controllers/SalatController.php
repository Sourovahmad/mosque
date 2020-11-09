<?php

namespace App\Http\Controllers;

use App\salat;
use Illuminate\Http\Request;

class SalatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salat = salat::find(1);
        return view('admin.salat.index',compact('salat'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\salat  $salat
     * @return \Illuminate\Http\Response
     */
    public function show(salat $salat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\salat  $salat
     * @return \Illuminate\Http\Response
     */
    public function edit(salat $salat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\salat  $salat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, salat $salat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\salat  $salat
     * @return \Illuminate\Http\Response
     */
    public function destroy(salat $salat)
    {
        //
    }
}

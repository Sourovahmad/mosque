<?php

namespace App\Http\Controllers;

use App\programCategory;
use Illuminate\Http\Request;

class ProgramCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return abort(404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\programCategory  $programCategory
     * @return \Illuminate\Http\Response
     */
    public function show(programCategory $programCategory)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\programCategory  $programCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(programCategory $programCategory)
    {
        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\programCategory  $programCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, programCategory $programCategory)
    {
        return abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\programCategory  $programCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(programCategory $programCategory)
    {
        return abort(404);
    }
}

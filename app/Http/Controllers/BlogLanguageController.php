<?php

namespace App\Http\Controllers;

use App\blogLanguage;
use Illuminate\Http\Request;

class BlogLanguageController extends Controller
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
     * @param  \App\blogLanguage  $blogLanguage
     * @return \Illuminate\Http\Response
     */
    public function show(blogLanguage $blogLanguage)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\blogLanguage  $blogLanguage
     * @return \Illuminate\Http\Response
     */
    public function edit(blogLanguage $blogLanguage)
    {
        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\blogLanguage  $blogLanguage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blogLanguage $blogLanguage)
    {
        return abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\blogLanguage  $blogLanguage
     * @return \Illuminate\Http\Response
     */
    public function destroy(blogLanguage $blogLanguage)
    {
        return abort(404);
    }
}

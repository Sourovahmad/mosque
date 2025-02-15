<?php

namespace App\Http\Controllers;

use App\memberType;
use Illuminate\Http\Request;

class MemberTypeController extends Controller
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
     * @param  \App\memberType  $memberType
     * @return \Illuminate\Http\Response
     */
    public function show(memberType $memberType)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\memberType  $memberType
     * @return \Illuminate\Http\Response
     */
    public function edit(memberType $memberType)
    {
        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\memberType  $memberType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, memberType $memberType)
    {
        return abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\memberType  $memberType
     * @return \Illuminate\Http\Response
     */
    public function destroy(memberType $memberType)
    {
        return abort(404);
    }
}

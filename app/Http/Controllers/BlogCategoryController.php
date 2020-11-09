<?php

namespace App\Http\Controllers;

use App\blogCategory;
use App\setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $settings = setting::where('table_name','blog_categories')->first();
        $settings->setting= json_decode(  json_decode(  $settings->setting,true),true);
      
        $dataArray=[
            'settings'=>$settings,
            'items' => blogCategory::all(),
        ];

        return view('admin.blog.category', compact('dataArray'));
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
        
        blogCategory::create($request->all());
        return redirect()->back()->withSuccess(['Successfully Created']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\blogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function show(blogCategory $blogCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\blogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(blogCategory $blogCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\blogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blogCategory $blogCategory)
    {
        
        $blogCategory->update($request->all());
        return redirect()->back()->withSuccess(['Successfully Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\blogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(blogCategory $blogCategory)
    {
        $blogCategory->delete();
        return Redirect::back()->withErrors(["Item Deleted" ]);
    }
}

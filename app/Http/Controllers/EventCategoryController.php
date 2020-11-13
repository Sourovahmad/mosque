<?php

namespace App\Http\Controllers;

use App\eventCategory;
use App\setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EventCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = setting::where('table_name','event_categories')->first();
        $settings->setting= json_decode(  json_decode(  $settings->setting,true),true);
      
        $dataArray=[
            'settings'=>$settings,
            'items' => eventCategory::all(),
        ];

        return view('admin.event.category', compact('dataArray'));
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
        
        eventCategory::create($request->all());
        return redirect()->back()->withSuccess(['Successfully Created']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\eventCategory  $eventCategory
     * @return \Illuminate\Http\Response
     */
    public function show(eventCategory $eventCategory)
    {
        return $eventCategory->events->count();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\eventCategory  $eventCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(eventCategory $eventCategory)
    {
        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\eventCategory  $eventCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, eventCategory $eventCategory)
    {
        
        $eventCategory->update($request->all());
        return redirect()->back()->withSuccess(['Successfully Updated']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\eventCategory  $eventCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(eventCategory $eventCategory)
    {
        $eventCategory->delete();
        return Redirect::back()->withErrors(["Item Deleted" ]);
    }






    public function storeCategory(Request $request)
    {
        if(is_null($request->name) ){
            return 'Error';
        }
        $eventCategory=eventCategory::create($request->all());
        $categories = eventCategory::all();
        return $categories;

    }
}

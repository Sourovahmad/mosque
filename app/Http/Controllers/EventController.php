<?php

namespace App\Http\Controllers;

use App\event;
use App\eventCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = eventCategory::all();
        return view('admin.event.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = new event;
        $event->title = $request->title;
        $event->category_id = $request->category_id;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->vanu = $request->vanu;
        $event->start_time = $request->start_time;
        $event->end_time = $request->end_time;
        $event->image_id = 1;
        $event->save();
        return redirect(route('admin.event.index'))->withSuccess(['Event Created']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(event $event)
    {
        $categories = eventCategory::all();
        return view('admin.event.edit',compact('categories','event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, event $event)
    {
        $event->title = $request->title;
        $event->category_id = $request->category_id;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->vanu = $request->vanu;
        $event->start_time = $request->start_time;
        $event->end_time = $request->end_time;
        $event->image_id = 1;
        $event->save();
        return redirect(route('admin.event.index'))->withSuccess(['Event updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(event $event)
    {
        $event->delete();
        return Redirect::back()->withErrors(["Event Deleted" ]);
    }
}

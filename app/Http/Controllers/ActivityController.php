<?php

namespace App\Http\Controllers;

use App\activity;
use App\image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = activity::all();
        return view('admin.activity.index', compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.activity.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $activity = new activity;
        $activity->title = $request->title;
        $activity->description = $request->description;


        $fileName = time() . '.' . $request->image->getClientOriginalName();
        $request->image->move(public_path('images'), $fileName);
        $image = new image();
        $image->url = 'images/' . $fileName;
        $image->save();

        $activity->image_id = $image->id;

        $activity->save();

        return redirect(route('admin.activity.index'))->withSuccess(['activity Created']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function show(activity $activity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit(activity $activity)
    {
        return view('admin.activity.edit', compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, activity $activity)
    {
        $activity->title = $request->title;
        $activity->description = $request->description;

        if (!is_null($request->file)) {
            $fileName = time() . '.' . $request->image->getClientOriginalName();
            $request->image->move(public_path('images'), $fileName);
            $image = new image();
            $image->url = 'images/' . $fileName;
            $image->save();

            $activity->image_id = $image->id;
        }
        $activity->save();

        return redirect(route('admin.activity.index'))->withSuccess(['activity Created']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy(activity $activity)
    {
        $activity->delete();
        return Redirect::back()->withErrors(["Activity Deleted"]);
    }
}

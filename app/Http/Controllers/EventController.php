<?php

namespace App\Http\Controllers;

use App\event;
use App\eventCategory;
use App\image;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\ImageManagerStatic as Photo;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date=Carbon:: now()->format('Y-m-d');
        $events = event::orderBy('date','desc')->orderBy('start_time')->paginate(9);
        return view('admin.event.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = eventCategory::all();
        return view('admin.event.create', compact('categories'));
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
        if(!is_null($request->video)){
            $event->video = $request->video;
        }

        $fileNameFull = time() . '.full.' . $request->image->getClientOriginalName();
        $fileNameSmall = time() . '.small.' . $request->image->getClientOriginalName();
        $picture = Photo::make($request->image)->fit(600, 375)->save('images/'.$fileNameFull);
        $picture = Photo::make($request->image)->fit(248, 278)->save('images/'.$fileNameSmall);


        $image = new image;
        $image->url = 'images/' . $fileNameFull;
        $image->thumbnail = 'images/' . $fileNameSmall;
        $image->save();

        $event->image_id = $image->id;


        $event->save();
        return redirect(route('admin.event.index'))->withSuccess(['Event Created']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\event  $event
     * @return \Illuminate\Http\Response
     */
    public function show( event $event)
    { 
        return abort(404);
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
        return view('admin.event.edit', compact('categories', 'event'));
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
        if(!is_null($request->video)){
            $event->video = $request->video;
        }

        if (!is_null($request->file)) {


            $fileNameFull = time() . '.full.' . $request->image->getClientOriginalName();
            $fileNameSmall = time() . '.small.' . $request->image->getClientOriginalName();
            $picture = Photo::make($request->image)->fit(600, 375)->save('images/'.$fileNameFull);
            $picture = Photo::make($request->image)->fit(248, 278)->save('images/'.$fileNameSmall);
    
    
            $image = new image;
            $image->url = 'images/' . $fileNameFull;
            $image->thumbnail = 'images/' . $fileNameSmall;
            $image->save();

            $event->image_id = $image->id;
        }
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
        return Redirect::back()->withErrors(["Event Deleted"]);
    }





    public function frontendView()
    {
         
        $events = event:: paginate(6);
        return view('events.index',compact('events'));

    }

    public function singleview( $id)
    { 

        $event = event::find($id);
        $eventCategories = eventCategory::all();
        $events = event::orderBy('id','desc')->take(10)->get();
      

        return view('events.event-details',compact('event','eventCategories','events'));
    }
}

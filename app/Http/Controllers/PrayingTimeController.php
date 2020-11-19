<?php

namespace App\Http\Controllers;

use App\image;
use App\month;
use App\PrayingTime;
use App\year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Photo;
class PrayingTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $activePrayerTime = PrayingTime::find(1);
      
        $years = year::all();

        $months = month::orderBy('id')->get();


        // $prayingtimes = PrayingTime::orderBy('month_id','asc')->get();

        $prayingtimes = PrayingTime::all();

         return view('admin.PrayingTime.index',compact('years','months','activePrayerTime','prayingtimes'));  
   
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
       

        $prayingtime = new prayingtime;
        $prayingtime->year_id = $request->year_id;
        $prayingtime->month_id = $request->month_id;

        $fileNameFull = time() . '.full.' . $request->image->getClientOriginalName();
        $fileNameSmall = time() . '.small.' . $request->image->getClientOriginalName();

        $picture = Photo::make($request->image);

        $height = $picture->height();
        $width = $picture->width();

        $picture->resize($width, $height)->save('images/'.$fileNameFull);
        $picture = Photo::make($request->image)->fit(300, 225)->save('images/'.$fileNameSmall);


        $image = new image;
        $image->url = 'images/' . $fileNameFull;
        $image->thumbnail = 'images/' . $fileNameSmall;

    
        $image->save();
        $prayingtime->image_id = $image->id;
        $prayingtime->save();
        return redirect()->back()->withSuccess(['Successfully added']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PrayingTime  $prayingTime
     * @return \Illuminate\Http\Response
     */
    public function show(PrayingTime $prayingTime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PrayingTime  $prayingTime
     * @return \Illuminate\Http\Response
     */
    public function edit(PrayingTime $prayingTime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PrayingTime  $prayingTime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PrayingTime $prayingTime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PrayingTime  $prayingTime
     * @return \Illuminate\Http\Response
     */
    public function destroy(PrayingTime $prayingTime)
    {
        //
    }

    public function yearfilter(Request $request)
    {
        return $request;
    }
}

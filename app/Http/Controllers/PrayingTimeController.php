<?php

namespace App\Http\Controllers;

use App\image;
use App\month;
use App\PrayingTime;
use App\year;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
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

$prayingtimes = PrayingTime::all();
        $years = year::all();

        $months = month::all();


         return view('admin.PrayingTime.index',compact('years','months','prayingtimes'));  

   
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
        $prayingTime->delete();
        // unlink($prayingTime->image->url);
        // unlink($prayingTime->image->thumbnail);

        return Redirect::back()->withErrors(["Item Deleted" ]);
    }

    public function yearfilter($id)

    {     $years = year::all();
        $a = year::find($id);
        $name = $a->name;
        
        $months = month::all();

        $yearfilter = PrayingTime::where('year_id',$id)->orderBy('month_id','asc')->get();
       
        return view('admin.PrayingTime.filterd',compact('years','yearfilter','months','name'));

    }
}

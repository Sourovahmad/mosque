<?php

namespace App\Http\Controllers;

use App\image;
use App\salat;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Photo;

class SalatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salat = salat::find(1);
        return view('admin.salat.index',compact('salat'));
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
        $salat = salat::find(1);
        $fileNameFull = time() . '.full.' . $request->image->getClientOriginalName();
        $picture = Photo::make($request->image);

        $height = $picture->height();
        $width = $picture->width();

        $picture->resize($width, $height)->save('images/'.$fileNameFull);
        
        $image = new image;
        $image->url = 'images/' . $fileNameFull;
        $image->thumbnail = 'images/' . $fileNameFull;
        $image->save();
        $salat->image_id = $image->id;
        $salat->save();
        return redirect()->back()->withSuccess(['Image Changed']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\salat  $salat
     * @return \Illuminate\Http\Response
     */
    public function show(salat $salat)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\salat  $salat
     * @return \Illuminate\Http\Response
     */
    public function edit(salat $salat)
    {
        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\salat  $salat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, salat $salat)
    {
        $salat->fajr= $request->fajr;
        $salat->dhuhr= $request->dhuhr;
        $salat->jumma= $request->jumma;
        $salat->asr= $request->asr;
        $salat->maghrib= $request->maghrib;
        $salat->isha= $request->isha;

        return redirect()->back()->withSuccess(['Successfully Updated']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\salat  $salat
     * @return \Illuminate\Http\Response
     */
    public function destroy(salat $salat)
    {
        return abort(404);
    }

    public function prayingtime()
    {
        $salat= salat::find(1);
        return view('prayer-time.index',compact('salat'));
    }
}

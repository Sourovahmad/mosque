<?php

namespace App\Http\Controllers;

use App\gallery;
use App\image;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Photo;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        
        return view('admin.gallery.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gallery=new gallery;
        $gallery->caption = $request->caption;

        $fileNameFull = time() . '.full.' . $request->image->getClientOriginalName();
        $fileNameSmall = time() . '.small.' . $request->image->getClientOriginalName();

        $picture = Photo::make($request->image)->fit(800, 600)->save('images/'.$fileNameFull);
        $picture = Photo::make($request->image)->fit(300, 225)->save('images/'.$fileNameSmall);

        $image = new image;
        $image->url = 'images/' . $fileNameFull;
        $image->thumbnail = 'images/' . $fileNameSmall;
        $image->save();

        $gallery->image_id = $image->id;

        
        $gallery->save();
        
        return redirect()->back()->withSuccess(['Successfully Created']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(gallery $gallery)
    {
        //
    }


    public function showImage()
    {
       $galleries = gallery::all();
       return view('gallery.index',compact('galleries'));
    }
}

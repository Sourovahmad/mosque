<?php

namespace App\Http\Controllers;

use App\image;
use App\imam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\ImageManagerStatic as Photo;

class ImamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imams = imam::orderBy('id','desc')->paginate(6);
        return view('admin.imam.index',compact('imams'));

       
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


        $imam = new imam;
        $imam->name = $request->name;
        $imam->designation = $request->designation;

        if ( !is_null($request->image) ) {
            $fileName = time() . '.' . $request->image->getClientOriginalName();

            $picture = Photo::make($request->image)->fit(400, 500)->save('images/'.$fileName);

            $image = new image;
            $image->url = 'images/' . $fileName;
            $image->save();

            $imam->image_id = $image->id;
        }
        
      
        $imam->save();
        return redirect()->back()->withSuccess(['Successfully Added']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\imam  $imam
     * @return \Illuminate\Http\Response
     */
    public function show(imam $imam)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\imam  $imam
     * @return \Illuminate\Http\Response
     */
    public function edit(imam $imam)
    {
        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\imam  $imam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, imam $imam)
    {

        return abort(404);
        // $imam->name = $request->name;

        // if ( !is_null($request->image) ) {
        //     $fileName = time() . '.' . $request->image->getClientOriginalName();

        //     $picture = Photo::make($request->image)->fit(400, 500)->save('images/'.$fileName);

        //     $image = new image;
        //     $image->url = 'images/' . $fileName;
        //     $image->save();

        //     $imam->image_id = $image->id;
        // }
        
        // $imam->save();
        // return redirect()->back()->withSuccess(['Successfully Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\imam  $imam
     * @return \Illuminate\Http\Response
     */
    public function destroy(imam $imam)
    {
        $imam->delete();
        unlink($imam->image->url);

        return Redirect::back()->withErrors(["Item Deleted" ]);
    }
}

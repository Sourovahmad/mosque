<?php

namespace App\Http\Controllers;

use App\image;
use App\program;
use App\programCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\ImageManagerStatic as Photo;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = program::all();
        return view('admin.program.index', compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $categories = programCategory::all();
        return view('admin.program.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $program = new program;
        $program->title = $request->title;
        $program->category_id = $request->category_id;
        $program->description = $request->description;
        $program->user_id =Auth::user()->id; 

        if(!is_null($request->video)){
            $program->video = $request->video;
        }

  
        $fileNameFull = time() . '.full.' . $request->image->getClientOriginalName();
        $fileNameSmall = time() . '.small.' . $request->image->getClientOriginalName();
        $picture = Photo::make($request->image)->fit(600, 375)->save('images/'.$fileNameFull);
        $picture = Photo::make($request->image)->fit(370, 230)->save('images/'.$fileNameSmall);


        $image = new image;
        $image->url = 'images/' . $fileNameFull;
        $image->thumbnail = 'images/' . $fileNameSmall;
        $image->save();

        $program->image_id = $image->id;

        $program->save();

        return redirect(route('admin.programs.index'))->withSuccess(['Program Created']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\program  $program
     * @return \Illuminate\Http\Response
     */
    public function show(program $program)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit(program $program)
    {
        $categories= programCategory::all();
        return view('admin.program.edit', compact('program','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, program $program)
    {
        $program->title = $request->title;
        $program->description = $request->description;
        $program->category_id = $request->category_id;
        if(!is_null($request->video)){
            $program->video = $request->video;
        }
        if (!is_null($request->image)) {

            $fileNameFull = time() . '.full.' . $request->image->getClientOriginalName();
            $fileNameSmall = time() . '.small.' . $request->image->getClientOriginalName();
            $picture = Photo::make($request->image)->fit(600, 375)->save('images/'.$fileNameFull);
            $picture = Photo::make($request->image)->fit(370, 230)->save('images/'.$fileNameSmall);
    
    
            $image = new image;
            $image->url = 'images/' . $fileNameFull;
            $image->thumbnail = 'images/' . $fileNameSmall;
            $image->save();

            $program->image_id = $image->id;
        }
        $program->save();

        return redirect(route('admin.programs.index'))->withSuccess(['Program Created']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy(program $program)
    {
        $program->delete();
        return Redirect::back()->withErrors(["Program Deleted"]);
    }



    public function FrontendProgram()
    {

        $programs = program::orderBy('id','desc')->paginate(6);
        return view('program.index',compact('programs'));
    }

    public function FrontendProgramCategory($category_id)
    {

       $category = programCategory::find($category_id);
        $programs = program::where('category_id',$category_id)->orderBy('id','desc')->paginate(6);
        return view('program.category',compact('programs','category'));
        
    }
    public function programSingle($id)
    { 
        $programs = program::orderBy('id','desc')->take(5)->get();
        $program = program::find($id);
        return view('program.singleview',compact('program','programs'));
    }
}

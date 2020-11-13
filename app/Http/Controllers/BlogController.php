<?php

namespace App\Http\Controllers;

use App\blog;
use App\blogCategory;
use App\blogLanguage;
use App\event;
use App\image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\ImageManager;
use Intervention\Image\ImageManagerStatic as Photo;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = blog::orderBy('created_at', 'desc')->get();
        return view('admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = blogCategory::all();
        $languages = blogLanguage::all();
        return view('admin.blog.create', compact('categories', 'languages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = new blog;
        $blog->title = $request->title;
        $blog->category_id = $request->category_id;
        $blog->user_id = 1; //auth must be added
        $blog->language_id = $request->language_id;
        $blog->author_name = $request->author_name;
        $blog->description = $request->description;



            $fileNameFull = time() . '.full.' . $request->image->getClientOriginalName();
            $fileNameSmall = time() . '.small.' . $request->image->getClientOriginalName();
            $picture = Photo::make($request->image)->fit(600, 375)->save('images/'.$fileNameFull);
            $picture = Photo::make($request->image)->fit(370, 230)->save('images/'.$fileNameSmall);
    
    
            $image = new image;
            $image->url = 'images/' . $fileNameFull;
            $image->thumbnail = 'images/' . $fileNameSmall;
            $image->save();
        $blog->image_id = $image->id;



        $blog->save();
        return redirect(route('admin.blog.index'))->withSuccess(['blog Created']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(blog $blog)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(blog $blog)
    {
        $categories = blogCategory::all();
        $languages = blogLanguage::all();
        return view('admin.blog.edit', compact('categories', 'blog','languages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blog $blog)
    {
        $blog->title = $request->title;
        $blog->category_id = $request->category_id;
        $blog->user_id = 1; //auth must be added
        $blog->language_id = $request->language_id;
        $blog->author_name = $request->author_name;
        $blog->description = $request->description;

        if (!is_null($request->image)) {

            $fileNameFull = time() . '.full.' . $request->image->getClientOriginalName();
            $fileNameSmall = time() . '.small.' . $request->image->getClientOriginalName();
            $picture = Photo::make($request->image)->fit(600, 375)->save('images/'.$fileNameFull);
            $picture = Photo::make($request->image)->fit(370, 230)->save('images/'.$fileNameSmall);
    
    
            $image = new image;
            $image->url = 'images/' . $fileNameFull;
            $image->thumbnail = 'images/' . $fileNameSmall;
            $image->save();

            $blog->image_id = $image->id;
        }

        $blog->save();
        return redirect(route('admin.blog.index'))->withSuccess(['blog Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(blog $blog)
    {
        $blog->delete();
        return Redirect::back()->withErrors(["Blog Deleted"]);
    }

    public function frontendView()
    {
      $blogs = blog::orderBy('id','desc')->paginate(9);
      $events = event::orderBy('id','desc')->take(5)->get();

      return view('blogs.index',compact('blogs','events'));
    }


    public function singleview($id)
    {
        $blog = blog::find($id);
        $blogs = blog::orderBy('id','desc')->take(5)->get();
        return view('blogs.singleview',compact('blog','blogs'));
    }


}

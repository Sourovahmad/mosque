<?php

namespace App\Http\Controllers;

use App\blog;
use App\blogCategory;
use App\blogLanguage;
use App\image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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


        $fileName = time() . '.' . $request->image->getClientOriginalName();
        $request->image->move(public_path('images'), $fileName);
        $image = new image();
        $image->url = 'images/' . $fileName;
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
        //
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

        if (!is_null($request->file)) {
            $fileName = time() . '.' . $request->image->getClientOriginalName();
            $request->image->move(public_path('images'), $fileName);
            $image = new image();
            $image->url = 'images/' . $fileName;
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
}

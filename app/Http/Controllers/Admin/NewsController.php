<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admin\Tag;
use App\admin\Category;
use App\admin\News;
use Image;
use File;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('admin.pages.news.index')->withNews($news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
       // dd($tags);
        $categories = Category::all();
        return view('admin.pages.news.create')
                                            ->withTags($tags)
                                            ->withCategories($categories);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $validatedData = $request->validate([
                'title' => 'required|unique:news|max:255',
                'description'=>'required',
                'category'=>'required',
                'tag'=>'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=100,min_height=200',
                'category'=>'required',

         ]);

        $news = new News();
        $news->title = $request->title;
        $news->slug = strtolower($request->title);
        $news->description = strip_tags($request->description);


        if ($request->hasFile('image')) {
          $image = $request->file('image');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('/images/thumbnail/' . $filename);
          Image::make($image)->resize(500, 300)->save($location);
          $news->image = $filename;
        }
        $news->save();

        $news->categories()->attach($request->category);
        $news->tags()->attach($request->tag);

        return redirect(route('admin.news.index'));




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

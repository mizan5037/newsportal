<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin\Category;
use App\admin\News;
use DB;
class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

   
    public function index()
    {


        $news = News::orderBy('created_at','desc')->take(4)->get();
        $category = Category::all();
        return view('front.index')->withCategories($category)->withNews($news);
    }
}

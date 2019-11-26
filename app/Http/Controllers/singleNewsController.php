<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin\News;


class singleNewsController extends Controller
{
    public function getSingle($category,$slug,$id){
        $category = ucfirst($category);
        $singleNews = News::find($id);

        return view('front.pages.single')->withSinglenews($singleNews);

    }
}

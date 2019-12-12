<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\admin\News;
class CommentController extends Controller
{
    public function store(Request $request)
    {
        $comment = new Comment;
        $comment->body = $request->get('comment_body');
        $comment->user()->associate($request->user());
        $news = News::find($request->get('news_id'));
        $news->comments()->save($comment);

        return back();
    }
}

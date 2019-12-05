<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'categoriesnews');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tagnews');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }
}

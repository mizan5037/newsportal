<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [ 'parent_id']; 

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

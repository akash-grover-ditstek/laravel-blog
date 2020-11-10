<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'author_id',
    ];

    public function author()
    {
        return $this->belongsTo('App\Models\User', 'author_id');
    }

}

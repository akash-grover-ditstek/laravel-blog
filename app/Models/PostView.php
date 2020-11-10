<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostView extends Post
{
    protected $table = 'posts';

    public function getRouteKeyName()
    {
        return 'slug';
    }
}

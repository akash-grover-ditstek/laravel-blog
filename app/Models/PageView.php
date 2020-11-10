<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageView extends Page
{
    protected $table = 'pages';

    public function getRouteKeyName()
    {
        return 'slug';
    }
}

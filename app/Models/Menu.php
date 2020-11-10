<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'parent_id',
        'name',
        'url',
        'order',
    ];
    
    public function parent()
    {
        return $this->belongsTo('App\Models\Menu', 'parent_id');
    }

    public function childs()
    {
        return $this->hasMany('App\Models\Menu', 'parent_id');
    }

    public function scopeOnlyParent()
    {
        return $this->whereNull('parent_id');
    }
}

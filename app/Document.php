<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'name', 'comment', 'image', 'entry_date', 'area', 'category', 'subcategory'
    ];

    public function scopeName($query, $name)
    {
        if($name)
            return $query->where('name', 'LIKE', "%$name%");
    }

    public function scopeArea($query, $area)
    {
        if($area)
            return $query->where('area', 'LIKE', "%$area%");
    }
}

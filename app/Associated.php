<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Associated extends Model
{
    protected $fillable = [
        'name', 'identification', 'entry_date'
    ];

    public function scopeName($query, $name)
    {
        if($name)
            return $query->where('name', 'LIKE', "%$name%");
    }

    public function scopeIdentification($query, $identification)
    {
        if($identification)
            return $query->where('identification', 'LIKE', "%$identification%");
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    // It will convert default id to name as a key name
    public function getRouteKeyName()
    {
        return 'name';
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    public function scopeCompleted($query, $val)
    {
        return $query->where('completed', $val);
    }
}

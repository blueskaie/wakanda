<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    public function children()
    {
        return $this->hasMany('App\Comment');
    }
    public function parent()
    {
        return $this->belongsTo('App\Comment');
    }
}

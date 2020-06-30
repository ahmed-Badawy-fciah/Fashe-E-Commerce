<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $guarded = [];

    // relationships
    public function replies()
    {
        return $this->hasMany('App\Model\Reply');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Model\Tag');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

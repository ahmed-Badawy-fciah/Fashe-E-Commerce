<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $guarded = [];




    // relationships
    public function blog()
    {
        return $this->belongsTo('App\Model\Blog');
    }
}

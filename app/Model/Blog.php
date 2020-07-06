<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $guarded = [];

    // protected static function boot(){
    //     parent::boot();
    //     static::creating(function($blog){
    //         $blog->tags->sync()
    //     });
    //     static::updating(function($tag){
    //         $tag->slug = str_slug($tag->name);
    //     });
    // }


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

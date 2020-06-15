<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = ['id' , 'slug'];
    protected static function boot(){
        parent::boot();
        static::creating(function($tag){
            $tag->slug = str_slug($tag->name);
        });
        static::updating(function($tag){
            $tag->slug = str_slug($tag->name);
        });
    }

    public function getRouteKeyName()
    {
        //dosn't work Yet!
        return 'slug';
    }

    
}

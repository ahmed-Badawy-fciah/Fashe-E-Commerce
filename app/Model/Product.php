<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = ['id'];

    protected static function boot(){
        parent::boot();
        static::creating(function($product){
            $product->code = $product->name . '' . $product->id;
        });
        static::updating(function($product){
            $product->code = $product->name . '' . $product->id;
        });
    }
}

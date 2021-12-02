<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $guarded=[];

    public function category(){
    	return $this->belongsTo('App\Category','cat_id','id');
    }

    public function wishlist(){

       return $this->hasMany('App\WishList','item_id');
    }

    public function cart(){

       return $this->hasMany('App\Cart','item_id');
    }
}

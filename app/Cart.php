<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $gaurded=[];

    public function user(){

    	return $this->belongsToMany('App\User','id');
    }

    public function item(){

    	return $this->belongsTo('App\Item','item_id','id');
    }
}

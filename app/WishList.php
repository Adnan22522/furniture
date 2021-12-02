<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
    protected $gaurded=[];

    public function user(){

    	return $this->belongsTo('App\User','id');
    }

    public function item(){

    	return $this->belongsTo('App\Item','item_id','id');
    }

    
} 

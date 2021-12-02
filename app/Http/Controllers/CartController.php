<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\WishList;
use App\Cart;
use DB;

class CartController extends Controller
{
    public function index(){
    	$items = Cart::where('user_id',Auth::id())->get();
    	return view('customer.cart',compact('items'));
    }

    public function add($id){
    	$item = WishList::where('item_id',$id)->firstOrFail();
    	$check= DB::table('carts')->where(['item_id'=>$item->item_id,'user_id'=>Auth::id()])->exists();

    	if($check==false){
    	$cart = new Cart();
    	$cart->user_id = Auth::id();
    	$cart->item_id = $item->item_id;
    	if($cart->save()){
    		return back()->with('message','Congratulation the item is added to Your Cart');
    	}else{
    		return back()->with('error','Error removing item');
    	}
    	}else{

    		return back()->with('error','Hey.. You have already this item in Your Cart');
    	}
	}
}

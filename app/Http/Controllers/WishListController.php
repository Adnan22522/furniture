<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Item;
use App\WishList;
use DB;

class WishListController extends Controller
{
	public function index(){

		$items = WishList::where('user_id',Auth::id())->get();
		return view('customer.wish_list',compact('items'));
	}

    public function add(Item $item){

    	$check= DB::table('wish_lists')->where(['item_id'=>$item->id,'user_id'=>Auth::id()])->exists();

    	if($check==false){
    	$wishlist = new WishList();
    	$wishlist->user_id = Auth::id();
    	$wishlist->item_id = $item->id;
    	if($wishlist->save()){
    		return back()->with('message','Congratulation the item is added to Your Wish List');
    	}else{
    		return back()->with('error','Error removing item');
    	}
    	}else{

    		return back()->with('error','Hey.. You have already this item in Your Wish List');
    	}
    }

    public function destroy($id){

    	$item = WishList::where('item_id',$id)->firstOrFail();
    	$item->delete();
    	return back()->with('message','You removed item from Your Wish List');
    }
}

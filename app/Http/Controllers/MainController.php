<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Item;
use App\Cart;

class MainController extends Controller
{
    public function index(){

    	$id = Auth::id();
    	$carts = Cart::where('user_id',$id)->get();
    	$items = Item::all();
    	return view('main.index',compact('items','carts'));
    }
}
